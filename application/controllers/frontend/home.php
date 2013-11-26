<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Controller da Home
 * @author Felipe <felipe@wadtecnologia.com.br>
 */
class Home extends CI_Controller{
	
	private $url;
	private $title;
	private $validation;
	
	public final function __construct()
	{
		parent::__construct();
		$this->url = '/home/';
		
		$this->load->model('plan_model', 'plan');
		$this->load->model('contact_model', 'contact');
		
		$this->validation = array(
			array(
				'field'	=> 'nome', 
				'label'	=> 'Nome', 
				'rules'	=> 'trim|required|xss_clean'
			),
			array(
				'field'	=> 'email',
				'label'	=> 'Email',
				'rules'	=> 'trim|required|xss_clean|valid_email'
			),
			array(
				'field'	=> 'mensagem', 
				'label'	=> 'Mensagem', 
				'rules'	=> 'trim|required|xss_clean'
			),
		);
	}
	
	private final function log($method)
	{
		if($this->log_model->log($this->router->class, $method)){
			return true;
		}
		
		return false;
	}
	
	private final function render($method, $data)
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
		$data['url_title']	= 'O seu classificados turbinado!';
		
		$data['brand']		= $this->brand_model->all(array('status_id' => 1));
		$data['partners']	= $this->partner_model->all(array('status_id' => 1));
		$data['category']	= $this->category_model->all(array('status_id' => 1));
		$data['state']		= $this->state_model->by(array('status_id' => 1));
		
		$this->render($this->router->method, $data);
	}
	
	public final function quem_somos()
	{
		$data['url_title']	= 'Quem Somos';
		
		$this->render($this->router->method, $data);
	}
	
	public final function publicidade()
	{
		$data['url_title']	= 'Publicidade';
		
		$this->render($this->router->method, $data);
	}
	
	public final function planos()
	{
		$data['url_title']	= 'Planos';
		$data['planos']		= $this->plan->all(array('status_id' => 1));
		
		$this->render($this->router->method, $data);
	}
	
	public final function contato()
	{
		$data['url_title']	= 'Contato';
		
		$this->render($this->router->method, $data);
	}
	
	public final function ajax($metodo)
	{
		
		switch($metodo){
			
			case 'enviar-contato':
				
				$this->form_validation->set_rules($this->validation);
				
				if($this->form_validation->run() == FALSE){
					
					//$text = '';
					//
					//foreach($this->form_validation->error_array() as $k => $error){				
					//	$text .= '<p>'.$error.'</p>';
					//}
					
					$data['erro'] = $this->form_validation->error_array();
					
					
					
				}else{
					
					if($this->contact->enviaEmail()){
						$data['sucesso'] = 'Email enviado com sucesso!';
					}else{
						$data['erro'] = array('Erro ao enviar email.');
					}
				}
				
				$this->session->set_userdata('contato', $data);
				
				echo json_encode(array('ok' => 1));
				
			break;
			
			case 'alert':
				$session 		= $this->session->userdata('contato');
				
				if(isset($session['erro'])){
					$data['erro'] 		= $session['erro'];
				}else{
					$data['sucesso']	= $session['sucesso'];
				}
				
				$this->alert($data);
			break;
		}
	}
	
	private final function alert($data = array())
	{
		$this->load->view('frontend/common/fancy_alert', $data);
	}
}
