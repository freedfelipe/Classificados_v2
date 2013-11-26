<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Model de Envio de email do form de contato
 * @author Felipe <felipe@wadtecnologia.com.br>
 */
class Contact_model extends CI_Model{
	
	public final function __construct()
	{
		parent::__construct();
		
		$this->table_name = 'sys_contact';
	}
	
	public final function enviaEmail()
	{
		$data = array();
		
		$data['nome'] 		= $this->input->post('nome', TRUE);
		$data['email']		= $this->input->post('email', TRUE);
		$data['mensagem'] 	= $this->input->post('mensagem', TRUE);
		
		if($data['nome'] != '' and $data['email'] != '' and $data['mensagem'] != ''){
			
			$this->db->insert($this->table_name, $data);
			
			$this->email->set_mailtype('html');
			$this->email->from($data['email'], $data['nome']);
			$this->email->to(CONTACT_EMAIL);
			$this->email->subject(CONTACT_SUBJECT_EMAIL);
			$msg = '<html><head></head><body>
				Nome:       ' . $data['nome'] . ' <br />
				E-mail:     ' . $data['email'] . ' <br />
				Mensagem:   ' . $data['mensagem'] . ' <br />
				</body></html>';
			$this->email->message($msg);
			
			if($this->email->send()){
				return true;
			}else{
				return false;
			}
		}
		
		return false;
	}
	
}