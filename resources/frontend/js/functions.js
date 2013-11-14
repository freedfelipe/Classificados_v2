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
    
});