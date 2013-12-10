$(document).ready(function(){
    
	var url_base = $(location).attr('origin');
	
    //filtros...
    $('#brand_id').on('change', function(){
        
        var url = url_base + '/modelos/consultar/' + $(this).val();
		$.get(url, function(d){
			$('#model_id').html(d);
		});
    });
    
    $('#state_id').on('change', function(){
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
	$('#fileupload').on('change', function(){
        
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
	
	$('.proximo1').on('click', function(e){
		e.preventDefault();
		window.scrollTo(0,0);
		$('form.submit_form_1').submit();
	});
	
	$('form.submit_form_1').submit(function(){
		
		$.blockUI({ message: '<h1>Salvando informações..</h1>' });
		
		var options = {success:processJson,error:returnError,async:true,dataType:'json'};
		$(this).ajaxSubmit(options);
		
		function processJson(data) {
			if(isNaN(data.ok)) {
				$.unblockUI();
				alert('Erro, tente novamente mais tarde.');
			} else {
				if(data.ok == '0') {
					$.unblockUI();
					$.fancybox.open({
						href 		: url_base + '/anuncio/ajax/erro',
						type 		: 'iframe',
						autoSize 	: false,
						width		: 840,
						padding		: 0,
						margin		: 0,
						scrolling 	: 'no'
					});
				} else {
					$.unblockUI();
					window.location = url_base + '/anuncio/cadastrar/passo-2'
				}
			}
		}
		
		function returnError() {
			$.unblockUI();
			alert('returnError');
		}
		
		return false;
	});
	
	
	$('.proximo2').on('click', function(e){
		e.preventDefault();
		window.scrollTo(0,0);
		$('form.submit_form_2').submit();
	});
	
	$('form.submit_form_2').submit(function(){
		
		$.blockUI({ message: '<h1>Salvando informações..</h1>' });
		
		var options = {success:processJson,error:returnError,async:true,dataType:'json'};
		$(this).ajaxSubmit(options);
		
		function processJson(data) {
			if(isNaN(data.ok)) {
				$.unblockUI();
				alert('Erro, tente novamente mais tarde.');
			} else {
				if(data.ok == '0') {
					$.unblockUI();
					$.fancybox.open({
						href 		: url_base + '/anuncio/ajax/erro',
						type 		: 'iframe',
						autoSize 	: false,
						width		: 840,
						padding		: 0,
						margin		: 0,
						scrolling 	: 'no'
					});
				} else {
					$.unblockUI();
					window.location = url_base + '/anuncio/cadastrar/passo-3'
				}
			}
		}
		
		function returnError() {
			$.unblockUI();
			alert('returnError');
		}
		
		return false;
	});
	
	$('.enviar_contato').on('click', function(e){
		e.preventDefault();
		window.scrollTo(0,0);
		$('form.form_submit_contato').submit();
	});
	
	$('form.form_submit_contato').submit(function(){
		
		$.blockUI({ message: '<h1>Enviado Formulário..</h1>' });
		
		var options = {success:processJson,error:returnError,async:true,dataType:'json'};
		$(this).ajaxSubmit(options);
		
		function processJson(data) {
			if(isNaN(data.ok)) {
				$.unblockUI();
				alert('Erro, tente novamente mais tarde.');
			} else {
				if(data.ok == '1') {
					$.unblockUI();
					$.fancybox.open({
						href 		: url_base + '/contato/ajax/alert',
						type 		: 'iframe',
						autoSize 	: false,
						width		: 840,
						padding		: 0,
						margin		: 0,
						scrolling 	: 'no'
					});
				} //else {
					//$.unblockUI();
					//window.location = url_base + '/anuncio/cadastrar/passo-3'
				//}
			}
		}
		
		function returnError() {
			$.unblockUI();
			alert('returnError');
		}
		
		return false;
	});
	
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '260391987448237',
			status     : true, // check login status
			cookie     : true, // enable cookies to allow the server to access the session
			xfbml      : true  // parse XFBML
		});
		
	};
	
	// Load the SDK Asynchronously
    (function(d){
		var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement('script'); js.id = id; js.async = true;
		js.src = "//connect.facebook.net/pt_BR/all.js";
		ref.parentNode.insertBefore(js, ref);
    }(document));
	
	$('#btn-facebook').on('click', function(){
		
		$.blockUI({ message: '<h1>Efetuando Login..</h1>' });
		
		FB.login(function(response) {
			if (response.authResponse) {
				
				$.ajax({
					url: url_base + '/login/facebook',
					global: false,
					cache: false,
					type: "POST",
					data: ({'id':response.authResponse.userID, 'token':response.authResponse.accessToken}),
					dataType: "json",
					async:false,
					success: function(data){
						
						switch (data.retorno) {
							case 'ok':
								$.unblockUI();
								window.location = url_base;
							break;
							
							case 'erro-login':
								$.unblockUI();
								alert('Login não encontrado');
							break;
							
							case 'erro':
								$.unblockUI();
								alert('Não foi possivel Logar com o Facebook');
							break;
						}
					},
					error: function() {
						$.unblockUI();
						alert('Erro do servidor');
					}
				});
				
				return false;
				
			} else {
				$.unblockUI();
				alert("Nao autorizou");
			}
		},{scope: 'email'});
		
		return false;
	});
	
	
});

