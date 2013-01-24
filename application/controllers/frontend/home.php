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
		
		$this->load->model('partner_model');
		$this->load->model('brand_model');
		$this->load->model('category_model');
		$this->load->model('state_model');
		
		$this->url = '/home/';
		
		$this->limit = $this->parameter_model->get('rows_per_page');
		$this->pag_segment = 3;
		//$this->total_rows	= $this->data_model->total();
		
		$this->title = array(
			'index'		=> $this->lang->line($this->router->class . '_index'),
			'create'	=> $this->lang->line($this->router->class . '_create'),
			'update'	=> $this->lang->line($this->router->class . '_update')
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
		$data['url_title']		= $this->parameter_model->get('system_title');
		
		$this->load->view('frontend/common/header', $data);
		$this->load->view('frontend/'.$this->router->class . '/' . $method, $data);
		$this->load->view('frontend/common/footer', $data);
	}
	
	public final function index()
	{
		$data['url_title']	= $this->parameter_model->get('system_title');
		$data['scr_title']	= 'Home';
		
		$data['brand']		= $this->brand_model->by(array('status_id' => 1));
		$data['partners']	= $this->partner_model->by(array('status_id' => 1));
		$data['category']	= $this->category_model->by(array('status_id' => 1));
		$data['state']		= $this->state_model->by(array('status_id' => 1));
		
		$this->render($this->router->method, $data);
	}
}
