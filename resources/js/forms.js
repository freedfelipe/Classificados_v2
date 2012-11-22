$(document).ready(function(){
    
    //formulario normal
    
    $('.edt-form').submit(function(){
        
        $.blockUI({message: '<h1>Enviando Formulário, Aguarde.</h1>'});
        
        //alert(this.action);
        
//        $.ajax({
//            
//            url: this.action,
//            global: false,
//            type: "POST",
//            cache: false,
//            method: "POST",
//            async:false,
//            data:$(this).serialize(),
//            success: function(data){
//                
//                //alert(data);
//                
//                if(data.ok == 1) {
//                    
//                    alert('teste');
//                    
//                    if(isNaN(data.ok)) {
//						$.unblockUI();
//						alert0('Mensagem', 'Erro, tente novamente mais tarde');
//                    } else {
//                        
//                         alert('fora do if');
//                        
//                        if(data.ok == 1) {
//                            
//                                alert('felipe');
//                            
//								$.unblockUI();
//								alert4('Mensagem', data.msg, redirect);
//                        } else {
//							$.unblockUI();
//							alert0('Mensagem', data.msg);
//						}
//                    }
//                } else {
//					$.unblockUI();
//                    alert0('Mensagem', 'Erro, tente novamente mais tarde');
//                }
//            },
//            error: function() {
//				$.unblockUI();
//                alert0('Mensagem', 'Erro, tente novamente mais tarde');
//            },
//            timeout: function() {
//				$.unblockUI();
//                alert0('Mensagem', 'Erro, tente novamente mais tarde');
//            }
//            
//        });
//        
//        return false;
        
        //$.blockUI({message: '<h1>Enviando Formulário, Aguarde.</h1>'});
        //
        //url = $(this).attr('action');
        //
        //alert(url);
        
        
        
    //    $.ajax({ // Starter Ajax Call
    //
    //        // "method" isn't an option of $.ajax
    //        // method: "POST", 
    //        type: "POST", 
    //
    //        url: baseurl + 'grupos/adicionar', 
    //        data: $(this).serialize(),
    //        success: function(data) { 
    //        alert(data);
    //    }
    //
    //});
        
    });
    
    
    
    
});