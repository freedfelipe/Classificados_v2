<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Controller de Estados
 * @author Felipe Albert <albert@questa.com.br>
 */
class States extends CI_Controller{
	
	private $url;
	private $title;
	private $validation;
	
	public final function __construct()
	{
		parent::__construct();
		
		$this->user_model->is_logged();
		
		//if($this->session->userdata('is_admin') != 1){
		//	redirect(site_url('acesso-negado'));
		//}
		
		$this->load->model('state_model', 'data_model');
		$this->url = 'admin/estados/';
		
		$this->limit = $this->parameter_model->get('rows_per_page');
		$this->pag_segment = 2;
		$this->total_rows	= $this->data_model->total();
		
		$this->title = array(
			'index'		=> $this->lang->line($this->router->class . '_index'),
			'create'	=> $this->lang->line($this->router->class . '_create'),
			'update'	=> $this->lang->line($this->router->class . '_update')
		);
		
		$this->validation = array(
			array(
				'field'	=> 'name', 
				'label'	=> 'Nome', 
				'rules'	=> 'trim|required|xss_clean'
			),
			array(
				'field'	=> 'uf', 
				'label'	=> 'UF', 
				'rules'	=> 'trim|required|xss_clean'
			),
			array(
				'field'	=> 'status_id', 
				'label'	=> 'Status', 
				'rules'	=> 'greater_than[-1]'
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
	
	private final function render($method, $data)
	{
		$this->log($method);
		
		$data['url']			= $this->url;
		$data['dir']			= $this->router->class.'/';
		$data['url_title']		= $this->parameter_model->get('system_title');
		$data['scr_title']		= $this->title[$method];
		
		if(!isset($data['total_rows'])){
			$data['total_rows']['count']= $this->data_model->total();
		}
		
		$this->load->view('backend/common/header', $data);
		$this->load->view('backend/'.$this->router->class . '/' . $method, $data);
		$this->load->view('backend/common/footer', $data);
	}
	
	public final function index($start2 = 0, $start = '')
	{
		$this->log($this->router->method);

		if(is_array($start)){ $data['alert'] = $start; }
		
		$data['url_title']	= $this->parameter_model->get('system_title');
		
		//if($this->router->method == 'delete'){
		//	$this->router->method	= 'index';
		//}
		
		$data['scr_title']	= $this->title[$this->router->method];
		
		$data['config']		= 	pagination_args($this->limit, $this->pag_segment, $this->uri->segment_array());
		$data['dados'] 		=	$this->data_model->read_pag($this->limit, @$data['config']['page_now'], @$data['config']['search_args']);
		$data['total_rows']	=	$this->data_model->read_pag(null, @$data['config']['page_now'], @$data['config']['search_args']);
		$data['config']		= 	pagination_search($this->limit, $data['total_rows']['count'], $this->pag_segment, $this->uri->segment_array(),$this->url, $data['config']);
		
		$this->pagination->initialize($data['config']);        
        $data['pag'] 		= $this->pagination->create_links();
		
		$this->render($this->router->method, $data);
	}
	
	public final function create()
	{
		$this->log($this->router->method);
		
		$data['url_title']	= $this->parameter_model->get('system_title');
		$data['scr_title']	= $this->title[$this->router->method];
		
		$this->form_validation->set_rules($this->validation);
		
		if($this->form_validation->run() == FALSE){
			if($_POST){
				$data['alert']['message'] = '<p>' . $this->lang->line('crud_error') . '</p>';
			}
		} else {
			if($this->data_model->create()){
				$data['alert']['message'] = '<p>' . $this->lang->line('crud_insert_success') . '</p>';
				$data['alert']['redirect'] = site_url($this->url);
			}else{
				$data['alert']['message'] = '<p>' . $this->lang->line('crud_insert_fail') . '</p>';
			}
		}
		
		$this->render($this->router->method, $data);
	}
	
	public final function update($id, $idHash)
	{
		$this->log($this->router->method);
		
		$data['id']				= $id;
		$data['hash_id']		= $idHash;
		$data['url_title']		= $this->parameter_model->get('system_title');
		$data['scr_title']		= $this->title[$this->router->method];
		$data['row']			= $this->data_model->by(array('id' => $id, 'idHash' => $idHash));
		
		$this->form_validation->set_rules($this->validation);
		
		if($this->form_validation->run() == FALSE){
			if($_POST){
				$data['alert']['message'] = '<p>' . $this->lang->line('crud_error') . '</p>';
			}
		} else {
			
			if($this->data_model->update($id, $idHash)){
				$data['alert']['message'] 	= '<p>' . $this->lang->line('crud_update_success') . '</p>';
				$data['alert']['redirect'] 	= site_url($this->url);
			} else {
				$data['alert']['message'] 	= '<p>' . $this->lang->line('crud_update_fail') . '</p>';
				$data['alert']['redirect'] 	= site_url($this->url);
			}
		}
		
		$this->render($this->router->method, $data);
	}
	
	public final function delete($id, $idHash)
	{
		$this->log($this->router->method);
		
		if($this->data_model->delete($id, $idHash)){
			$data['message'] 	= '<p>' . $this->lang->line('crud_delete_success') . '</p>';
			$data['redirect'] 	= site_url($this->url);
		} else {
			$data['message'] 	= '<p>' . $this->lang->line('crud_delete_fail') . '</p>';
			$data['redirect'] 	= site_url($this->url);
		}
		
		$this->index(0, $data);
	}
}
