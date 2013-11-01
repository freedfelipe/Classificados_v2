    /**
    * Funcao para pegar uma valor de uma URL pela ordem, usando o mod_rewrite
    * @param int url_number Numero atual da URL
    * @returns string A parte da URL
    * @access public
    */
    function get_url(url_number) {
	url = window.location;
	url = url.toString();
	url = url.split('/');
	url.splice(0,3);
	return url[url_number];
    }
    
    /**
    * Funcao para pegar o array da URL, usando o mod_rewrite
    * @access public
    * @returns array Retorna o array de todos os valores da URL
    */
    function get_url_array() {
	url = window.location;
	url = url.toString();
	url = url.split('/');
	url.splice(0,3);
	
	for(var k in url)
	{
	    if(url[k] == '')
	    {
		url.splice(k, 1);
	    }
	}
	
	return url;
    }
	
	
	function url_decode(encodedString) {
	var output = encodedString;
	var binVal, thisString;
	var myregexp = /(%[^%]{2})/;
	while ((match = myregexp.exec(output)) != null
	&& match.length > 1
	&& match[1] != '') {
	binVal = parseInt(match[1].substr(1),16);
	thisString = String.fromCharCode(binVal);
	output = output.replace(match[1], thisString);
	}
	return output;
	}
