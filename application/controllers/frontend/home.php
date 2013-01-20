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
		
		//$this->user_model->is_logged();
		//$this->load->model('advertisement_model', 'data_model');
		//$this->load->model('category_model');
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
		//$data['scr_title']		= $this->title[$method];
		
		$this->load->view('frontend/common/header', $data);
		$this->load->view('frontend/'.$this->router->class . '/' . $method, $data);
		$this->load->view('frontend/common/footer', $data);
	}
	
	public final function index()
	{
		$data['url_title']	= $this->parameter_model->get('system_title');
		
		
		
		//$data['scr_title']	= $this->title[$this->router->method];
		
		//printr($data);
		
		//$data['config']		= pagination_args($this->limit, $this->pag_segment, $this->uri->segment_array());
		//$data['dados'] 		= $this->data_model->read_pag($this->limit, @$data['config']['page_now'], @$data['config']['search_args']);
		//$data['total'] 		= $this->data_model->read_pag(NULL, @$data['config']['page_now'], @$data['config']['search_args']);
		//$data['config']		= pagination_search($this->limit, $this->total_rows, $this->pag_segment, $this->uri->segment_array(),$this->url, $data['config']);
		
		//$this->pagination->initialize($data['config']);        
        //$data['pag'] 		= $this->pagination->create_links();
		
		$this->render($this->router->method, $data);
	}
}
