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
                    $('#resposta').html('<img src="'+ data.msg +'" />');
                }
                else{
                    $('#resposta').html(data.msg);
                }                
            },
            error : function(){
                $('#resposta').html('Erro ao enviar Imagem!!!');
            },
            dataType: 'json',
            url: url_base + '/anuncio/ajax/upload/' + id,
            resetForm: true
        }).submit();
    
		
    });
	
});