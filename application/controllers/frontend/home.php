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
}
