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
		
		$this->url = '/entrar/';
		
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
		$data['url_title']		= $this->parameter_model->get('system_title');
		
		$this->load->view('frontend/common/header', $data);
		$this->load->view('frontend/'.$this->router->class . '/' . $method, $data);
		$this->load->view('frontend/common/footer', $data);
	}
	
	public final function index()
	{
		//$data['brand']		= $this->brand_model->by(array('status_id' => 1));
		//$data['partners']	= $this->partner_model->by(array('status_id' => 1));
		//$data['category']	= $this->category_model->by(array('status_id' => 1));
		//$data['state']		= $this->state_model->by(array('status_id' => 1));
		
		$this->render($this->router->method, @$data);
	}
}
