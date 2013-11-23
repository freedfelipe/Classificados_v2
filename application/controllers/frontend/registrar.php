<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Controller de Login
 * @author Felipe <felipe@wadtecnologia.com.br>
 */
class Registrar extends CI_Controller{
	
	private $url;
	private $validation;
	
	public final function __construct()
	{
		parent::__construct();
		
		$this->url = '/registrar/';
		
		$this->load->model('user_model', 'user');
		
		
		$this->validation = array(
			array(
				'field'	=> 'name', 
				'label'	=> 'Nome', 
				'rules'	=> 'trim|required|xss_clean'
			),
			array(
				'field'	=> 'email', 
				'label'	=> 'Email / Login', 
				'rules'	=> 'trim|required|xss_clean|valid_email|is_unique[sys_user.email]'
			),
			array(
				'field'	=> 'password', 
				'label'	=> 'Senha', 
				'rules'	=> 'trim|required|xss_clean'
			)
		);
		
	}
	
	private final function log($method)
	{
		if($this->log_model->log($this->router->class, $method)){
			return true;
		}
		
		return false;
	}
	
	private final function render($method, $data = array())
	{
		$this->log($method);
		
		$data['url']			= $this->url;
		$data['dir']			= 'frontend/'.$this->router->class.'/';
		
		$this->load->view('frontend/common/header', $data);
		$this->load->view('frontend/'.$this->router->class . '/' . $method, $data);
		$this->load->view('frontend/common/footer', $data);
	}
	
	public final function index()
	{
		$data['url_title']		= 'Registre-se';
		
		$this->log($this->router->method);
		
		$this->form_validation->set_rules($this->validation);
		
		if($this->form_validation->run() == FALSE){
			if($_POST){
				
				$text = '';
				foreach($this->form_validation->error_array() as $k => $error){				
					$text .= '<p class="text-white">'.$error.'</p>';
				}
				
				$data['alert']['error'] = $text;
			}
		} else {
			if($this->user->create()){
				$data['alert']['sucess'] = '<p class="text-white">Usuário Cadastrado com Sucesso</p>';
			}
		}
		
		$this->render($this->router->method, @$data);
	}
}