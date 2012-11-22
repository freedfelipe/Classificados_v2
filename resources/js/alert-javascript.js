function alert0(titulo, texto) {
        
        $("#alert").attr('title', titulo);
        $("#alert").html(texto);
        
        $("#alert").dialog({
            bgiframe: true,
            resizable: false,
            minHeight: 0,
            modal: true,
            overlay: {
            backgroundColor: '#000',
            opacity: 0.5
            },
            buttons: {
                'OK!': function() {
                    $(this).dialog('destroy');
                }
            }
        });
        
        $("#alert").dialog('open');
        
    }
    
    
    function alert1(titulo, texto, tsim) {
        
        $("#alert").attr('title', titulo);
        $("#alert").html(texto);
        
        $("#alert").dialog({
            bgiframe: true,
            resizable: false,
            minHeight: 0,
            modal: true,
            overlay: {
            backgroundColor: '#000',
            opacity: 0.5
            },
            buttons: {
                'OK!': function() {
                    $(this).dialog('destroy');
                    tsim();
                }
            }
        });
        
        $("#alert").dialog('open');
    }
   
    function alert2(titulo, texto, tsim, tnao) {
        
        $("#alert").attr('title', titulo);
        $("#alert").html(texto);
        
        $("#alert").dialog({
            bgiframe: true,
            resizable: false,
            minHeight: 0,
            modal: true,
            overlay: {
            backgroundColor: '#000',
            opacity: 0.5
            },
            buttons: {
                'Sim': function() {
                    $(this).dialog('destroy');
                    tsim();
                },
                'Não': function() {
                    $(this).dialog('destroy');
                    tnao();
                }
            }
        });
        
        $("#alert").dialog('open');
    }
    
    function alert3(titulo, texto) {
        
        $("#alert").attr('title', titulo);
        $("#alert").html(texto);
        
        $("#alert").dialog({
            bgiframe: true,
            resizable: false,
            minHeight: 0,
            modal: true,
            overlay: {
            backgroundColor: '#000',
            opacity: 0.5
            },
            buttons: {
                'Sim': function() {
                    $(this).dialog('destroy');
                    return true;
                },
                'Não': function() {
                    $(this).dialog('destroy');
                    return false;
                }
            }
        });
        
        $("#alert").dialog('open');
    }
	
	function alert4(titulo, texto, redirect) {
        
        $("#alert").attr('title', titulo);
        $("#alert").html(texto);
        
        $("#alert").dialog({
            bgiframe: true,
            resizable: false,
            minHeight: 0,
            modal: true,
            overlay: {
            backgroundColor: '#000',
            opacity: 0.5
            },
            buttons: {
                'OK!': function() {
                    $(this).dialog('destroy');
                    window.location = redirect;
                }
            }
        });
        
        $("#alert").dialog('open');
    }