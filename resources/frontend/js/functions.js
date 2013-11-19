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
		
		$('#anuncio').ajaxForm({
			dataType: 'post',
            url: url_base + '/anuncio/ajax/verifica-passo-2',
            resetForm: false,
			success: function(data) {
				
				console.log(data);
				
			},
            error : function(){
				
				alert('Erro ao processar dados');
				
			}
		});
		
	});
	
});