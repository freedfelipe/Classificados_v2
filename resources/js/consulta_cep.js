$(document).ready(function(){
    
    //CONSULTA CEP
    $("input[name='cep']").blur(function(){
        $('span.cep_msg').html('<img src="../resources/img/loading.gif" /> Consultando CEP, aguarde...');
        $.ajax({
            url: "/_cep/"+this.value+'/',
            global: false,
            cache: false,
            type: "POST",
            dataType: "json",
            async:false,
            success: function(msg){
                if(msg.resultado == 1) {
                    $('span.cep_msg').text('');
                    $("input[name='endereco']").val(msg.tipo_logradouro+' '+msg.logradouro);
                    $("input[name='bairro']").val(msg.bairro);
                    $("input[name='cidade']").val(msg.cidade);
                    $("input[name='uf']").val(msg.uf);
                } else {
                    $('span.cep_msg').text('CEP não encontrado, digite o endereço manualmente.');
                    $("input[name='endereco']").val('');
                    $("input[name='endereco']").focus();
                    $("input[name='bairro']").val('');
                    $("input[name='cidade']").val('');
                    $("input[name='uf']").val('');
                }
            },
            error: function() {
                $('span.cep_msg').text('CEP não encontrado, digite o endereço manualmente.');
                $("input[name='endereco']").val('');
                $("input[name='endereco']").focus();
                $("input[name='bairro']").val('');
                $("input[name='cidade']").val('');
                $("input[name='uf']").val('');
            }
        });
    });
    
    $("input[name='cepCorresp']").blur(function(){
        $('span.cep_msg2').html('<img src="../resources/img/loading.gif" /> Consultando CEP, aguarde...');
        $.ajax({
            url: "/_cep/"+this.value+'/',
            global: false,
            cache: false,
            type: "POST",
            dataType: "json",
            async:false,
            success: function(msg){
                if(msg.resultado == 1) {
                    $('span.cep_msg2').text('');
                    $("input[name='enderecoCorresp']").val(msg.tipo_logradouro+' '+msg.logradouro);
                    $("input[name='bairroCorresp']").val(msg.bairro);
                    $("input[name='cidadeCorresp']").val(msg.cidade);
                    $("input[name='ufCorresp']").val(msg.uf);
                } else {
                    $('span.cep_msg2').text('CEP não encontrado, digite o endereço manualmente.');
                    $("input[name='enderecoCorresp']").val('');
                    $("input[name='enderecoCorresp']").focus();
                    $("input[name='bairroCorresp']").val('');
                    $("input[name='cidadeCorresp']").val('');
                    $("input[name='ufCorresp']").val('');
                }
            },
            error: function() {
                $('span.cep_msg2').text('CEP não encontrado, digite o endereço manualmente.');
                $("input[name='enderecoCorresp']").val('');
                $("input[name='enderecoCorresp']").focus();
                $("input[name='bairroCorresp']").val('');
                $("input[name='cidadeCorresp']").val('');
                $("input[name='ufCorresp']").val('');
            }
        });
    });
    
    $("input[name='cepAuditoria']").blur(function(){
        $('span.cep_msg3').html('<img src="../resources/img/loading.gif" /> Consultando CEP, aguarde...');
        $.ajax({
            url: "/_cep/"+this.value+'/',
            global: false,
            cache: false,
            type: "POST",
            dataType: "json",
            async:false,
            success: function(msg){
                if(msg.resultado == 1) {
                    $('span.cep_msg3').text('');
                    $("input[name='enderecoAuditoria']").val(msg.tipo_logradouro+' '+msg.logradouro);
                    $("input[name='bairroAuditoria']").val(msg.bairro);
                    $("input[name='cidadeAuditoria']").val(msg.cidade);
                    $("input[name='ufAuditoria']").val(msg.uf);
                } else {
                    $('span.cep_msg3').text('CEP não encontrado, digite o endereço manualmente.');
                    $("input[name='enderecoAuditoria']").val('');
                    $("input[name='enderecoAuditoria']").focus();
                    $("input[name='bairroAuditoria']").val('');
                    $("input[name='cidadeAuditoria']").val('');
                    $("input[name='ufAuditoria']").val('');
                }
            },
            error: function() {
                $('span.cep_msg3').text('CEP não encontrado, digite o endereço manualmente.');
                $("input[name='enderecoAuditoria']").val('');
                $("input[name='enderecoAuditoria']").focus();
                $("input[name='bairroAuditoria']").val('');
                $("input[name='cidadeAuditoria']").val('');
                $("input[name='ufAuditoria']").val('');
            }
        });
    });
    
    $("input[name='cepBroker']").blur(function(){
        $('span.cep_msg4').html('<img src="../resources/img/loading.gif" /> Consultando CEP, aguarde...');
        $.ajax({
            url: "/_cep/"+this.value+'/',
            global: false,
            cache: false,
            type: "POST",
            dataType: "json",
            async:false,
            success: function(msg){
                if(msg.resultado == 1) {
                    $('span.cep_msg4').text('');
                    $("input[name='enderecoBroker']").val(msg.tipo_logradouro+' '+msg.logradouro);
                    $("input[name='bairroBroker']").val(msg.bairro);
                    $("input[name='cidadeBroker']").val(msg.cidade);
                    $("input[name='ufBroker']").val(msg.uf);
                } else {
                    $('span.cep_msg4').text('CEP não encontrado, digite o endereço manualmente.');
                    $("input[name='enderecoBroker']").val('');
                    $("input[name='enderecoBroker']").focus();
                    $("input[name='bairroBroker']").val('');
                    $("input[name='cidadeBroker']").val('');
                    $("input[name='ufBroker']").val('');
                }
            },
            error: function() {
                $('span.cep_msg4').text('CEP não encontrado, digite o endereço manualmente.');
                $("input[name='enderecoBroker']").val('');
                $("input[name='enderecoBroker']").focus();
                $("input[name='bairroBroker']").val('');
                $("input[name='cidadeBroker']").val('');
                $("input[name='ufBroker']").val('');
            }
        });
    });
   
    $("input[name='cepTransp']").blur(function(){
        $('span.cep_msg5').html('<img src="../resources/img/loading.gif" /> Consultando CEP, aguarde...');
        $.ajax({
            url: "/_cep/"+this.value+'/',
            global: false,
            cache: false,
            type: "POST",
            dataType: "json",
            async:false,
            success: function(msg){
                if(msg.resultado == 1) {
                    $('span.cep_msg5').text('');
                    $("input[name='enderecoTransp']").val(msg.tipo_logradouro+' '+msg.logradouro);
                    $("input[name='bairroTransp']").val(msg.bairro);
                    $("input[name='cidadeTransp']").val(msg.cidade);
                    $("input[name='ufTransp']").val(msg.uf);
                } else {
                    $('span.cep_msg5').text('CEP não encontrado, digite o endereço manualmente.');
                    $("input[name='enderecoTransp']").val('');
                    $("input[name='enderecoTransp']").focus();
                    $("input[name='bairroTransp']").val('');
                    $("input[name='cidadeTransp']").val('');
                    $("input[name='ufTransp']").val('');
                }
            },
            error: function() {
                $('span.cep_msg5').text('CEP não encontrado, digite o endereço manualmente.');
                $("input[name='enderecoTransp']").val('');
                $("input[name='enderecoTransp']").focus();
                $("input[name='bairroTransp']").val('');
                $("input[name='cidadeTransp']").val('');
                $("input[name='ufTransp']").val('');
            }
        });
    });
    
});