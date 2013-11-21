$(document).ready(function(){
    
	var url_base = $(location).attr('origin');
	
    //filtros...
    $('#brand_id').live('change', function(){
        
        var url = url_base + '/modelos/consultar/' + $(this).val();
		$.get(url, function(d){
			$('#model_id').html(d);
		});
    });
    
    $('#state_id').live('change', function(){
		var url = url_base + '/cidades/consultar/' + $(this).val();
		$.get(url, function(d){
			$('#city_id').html(d);
		});
	});
    
	// mascara de placa
	$.mask.definitions['L'] = "[a-zA-Z]";
	$("#placa").mask("LLL-9999");
	$("#cep").mask("99999-999");
	
	$('.price').priceFormat({
        prefix: '',
        centsSeparator: ',',
        thousandsSeparator: '.'
    });
	
	// upload de imagens
	$('#fileupload').live('change', function(){
        
		var id = $(this).attr('rel');
		
        $('#anuncio').ajaxForm({
            uploadProgress: function(event, position, total, percentComplete) {
                $('progress').attr('value',percentComplete);
                $('#porcentagem').html(percentComplete+'%');
            },        
            success: function(data) {
                $('progress').attr('value','100');
                $('#porcentagem').html('100%');  
                if(data.sucesso == true){
					$('#resposta').html('Imagem ' + id +' enviada!');
					$('input[name="file_' + id + '"]').parent().parent().css("background-image", "url('" + url_base + "/resources/upload/anuncios/" + data.thumbnail);
					$('input[name="file_' + id + '"]').attr('disabled','disabled');
                }
                else{
                    $('#resposta').html(data.msg);
                }
				
				$('progress').attr('value','0');
				$('#porcentagem').html('0%');
            },
            error : function(){
                $('#resposta').html('Erro ao enviar Imagem!!!');
				$('progress').attr('value','0');
				$('#porcentagem').html('0%');
            },
            dataType: 'json',
            url: url_base + '/anuncio/ajax/upload/file_' + id,
            resetForm: false
        }).submit();
		
    });
	
	$('#proximo').live('click', function(){
		window.scrollTo(0,0);
		$('form.submit_form').submit();
	});
	
	
	$('form.submit_form').submit(function(){
		
		//$.blockUI({ message: '<h1>Salvando informações..</h1>' });
		
		var options = {success:processJson,error:returnError,async:true,dataType:'json'};
		$(this).ajaxSubmit(options);
		
		function processJson(data) {
			if(isNaN(data.ok)) {
				//$.unblockUI();
				alert('Erro, tente novamente mais tarde.');
			} else {
				if(data.ok == '0') {
					//$.unblockUI();
					//$.fancybox.open({
					//	href 		: base + '/exclusivo/ajax/exclusive-01-error/',
					//	type 		: 'iframe',
					//	autoSize 	: false,
					//	width		: 840,
					//	padding		: 0,
					//	margin		: 0,
					//	scrolling 	: 'no'
					//});
					
					alert('erro na validacao');
					
				} else {
					window.location = url_base + '/anuncio/ajax/salva-passo-2'
				}
			}
		}
		
		function returnError() {
			//$.unblockUI();
			alert('returnError');
		}
		
		return false;
	});
	
});