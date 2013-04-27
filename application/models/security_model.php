<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Model de Seguranca
 * @author Felipe Albert <albert@questa.com.br>
 */
class Security_model extends CI_Model{
    
    public final function __construct()
    {
        parent::__construct();
    }
    
    public final function logged()
	{
		if($this->session->userdata('logged')){
			return true;
		}
		
		redirect('/entrar');
	}
    
    public final function login_advertiser()
    {
        die('classe pra fazer login');
    }
}