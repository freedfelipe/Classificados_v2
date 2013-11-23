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
		$this->load->model('fb_connect_model', 'fb');
		
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
		
		$this->validation_recuperar = array(
			array(
				'field'	=> 'email', 
				'label'	=> 'Email', 
				'rules'	=> 'trim|required|xss_clean|valid_email'
			)
		);
		
		$this->validation_gerar = array(
			array(
				'field'	=> 'email', 
				'label'	=> 'Email', 
				'rules'	=> 'trim|required|xss_clean|valid_email'
			),
			array(
				'field'	=> 'password', 
				'label'	=> 'Senha', 
				'rules'	=> 'trim|required|xss_clean'
			),
			array(
				'field'	=> 'confirm_password', 
				'label'	=> 'Confirmar Senha', 
				'rules'	=> 'trim|required|xss_clean|matches[password]'
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
		
		$this->fb->fb_logout();
		
		redirect('/');
	}
	
	public final function recuperar()
	{
		$data['url_title']		= 'Recuperar Senha';
		
		$this->log($this->router->method);
		
		$this->form_validation->set_rules($this->validation_recuperar);
		
		if($this->form_validation->run() == FALSE){
			if($_POST){
				
				$text = '';
				foreach($this->form_validation->error_array() as $k => $error){				
					$text .= '<p class="text-white">'.$error.'</p>';
				}
				
				$data['alert']['error'] = $text;
			}
		} else {
			
			if($this->user->recuperar()){
				$this->session->set_flashdata('message', '<p class="text-white">Email com Orientações de Recuperação de Senha Enviado com Sucesso</p>');
				redirect('/');
			}else{
				$data['alert']['error'] = '<p class="text-white">Email não Encontrado na Base de Dados!</p>';
			}
		}
		
		$this->render($this->router->method, @$data);
	}
	
	public final function gerar_senha($idHash, $email)
	{
		$data['url_title']	= 'Gerando Senha';
		
		$this->log($this->router->method);
		
		if($this->user->verifica_dados($idHash, $email)){
			
			$this->form_validation->set_rules($this->validation_gerar);
			
			$data['form']	= TRUE;
			
			if($this->form_validation->run() == FALSE){
				if($_POST){
					
					$text = '';
					foreach($this->form_validation->error_array() as $k => $error){				
						$text .= '<p class="text-white">'.$error.'</p>';
					}
					
					$data['alert']['error'] = $text;
				}
			} else {
				if($email == md5($this->input->post('email', TRUE))){
					if($this->user->gerar_senha($idHash)){
						$this->session->set_flashdata('message', '<p class="text-white">Senha Editada com Sucesso</p>');
						redirect('/');
					}else{
						$data['alert']['error'] = '<p class="text-white">Erro ao Editar Senha!</p>';
					}
				}else{
					$data['alert']['error'] = '<p class="text-white">Email não Confere com o Cadastrado!</p>';
				}
			}
		}else{
			$data['alert']['error']	= '<p class="text-white">Dados para verificação está com erros, entre em contato com o administrador!</p>';
			$data['form'] 			= FALSE;
		}
		
		$this->render($this->router->method, @$data);
	}
	
	public final function fb_connect()
	{
		$fb_user_data = $this->fb->user_info($this->input->post('token', true)); 
		
		if($fb_user_data){
			
			# verifica se esta cadastrado no sistema
			if($sys_user_data = $this->user->by(array('email' => $fb_user_data['email']))){
				
				# verificar esse daki, quando o user já ta cadastrado no sistema com email e depois entra com o fb
				//if(empty($sys_user_data['fb_id']) and empty($sys_user_data['fb_access_token'])){
				//	
				//	
				//	
				//}
				
				if($this->fb->valida_token($sys_user_data, $fb_user_data)){
					if($this->user->login_front($fb_user_data)){
						echo json_encode(array('retorno' => 'ok'));
						die();
					}
				}
			}else{
				# cadastra o user
				
				//var_dump($this->user->create_fb($fb_user_data));
				
				if($this->user->create_fb($fb_user_data)){
					if($this->user->login_front($fb_user_data)){
						echo json_encode(array('retorno' => 'ok'));
						die();
					}
				}
				
				echo json_encode(array('retorno' => 'erro-login'));
				die();
			}
		}
		
		echo json_encode(array('retorno' => 'erro'));
		die();
		
	}
}