$(document).ready(function(){
    
    //filtros...
    $('#brand_id').live('change', function(){
        
        var url = window.location + 'modelos/consultar/' + $(this).val();
		$.get(url, function(d){
			$('#model_id').html(d);
		});
    });
    
    $('#state_id').live('change', function(){
		var url = window.location + 'cidades/consultar/' + $(this).val();
		$.get(url, function(d){
			$('#city_id').html(d);
		});
	});
    
});