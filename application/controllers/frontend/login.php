<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Controller de Login
 * @author Felipe <felipe@wadtecnologia.com.br>
 */
class Login extends CI_Controller{
	
	private $url;
	private $title;
	private $validation;
	
	public final function __construct()
	{
		parent::__construct();
		
		$this->load->model('user_model', 'user');
		
		$this->url = '/entrar/';
		
		$this->validation = array(
			array(
				'field'	=> 'email', 
				'label'	=> 'Email / Login', 
				'rules'	=> 'trim|required|xss_clean|valid_email'
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
		$data['url_title']		= 'Login';
		
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
			if($this->user->login_front()){
				$this->session->set_flashdata('message', '<p class="text-white">Login Efetuado com Sucesso</p>');
				redirect('/');
			}else{
				$data['alert']['error'] = '<p class="text-white">Login / Senha incorretos!</p>';
			}
		}
		
		$this->render($this->router->method, @$data);
	}
	
	public final function logout()
	{
		$this->user->is_logged_front();
		$this->session->unset_userdata('logado_front');
		$this->session->sess_destroy();
		
		redirect('/');
	}
}