<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Controller de Grupos de Usuários
 * @author Felipe <felipe@wadtecnologia.com.br>
 */
class User_groups extends CI_Controller{
	
	private $url;
	private $title;
	private $validation;
	
	public final function __construct()
	{
		parent::__construct();
		
		$this->user_model->is_logged();
		$this->load->model('user_group_model', 'dm');
		$this->url = '/admin/grupos/';
		
		$this->pag_segment = 3;
		
		$this->title = array(
			'index'		=> $this->lang->line($this->router->class . '_index'),
			'create'	=> $this->lang->line($this->router->class . '_create'),
			'update'	=> $this->lang->line($this->router->class . '_update')
		);
		
		$this->validation = array(
			array(
				'field'	=> 'name', 
				'label'	=> 'Nome', 
				'rules'	=> 'required'
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
		$data['dir']			= 'backend/'.$this->router->class.'/';
		$data['url_title']		= $this->parameter_model->get('system_title');
		$data['scr_title']		= $this->title[$method];
		
		$this->load->view('backend/common/header', $data);
		$this->load->view('backend/'.$this->router->class . '/' . $method, $data);
		$this->load->view('backend/common/footer', $data);
	}
	
	public final function index()
	{
		$this->log($this->router->method);
		
		$data['dados'] = $this->dm->all();
		
		$this->render($this->router->method, $data);
	}
	
	public final function create()
	{
		$this->log($this->router->method);
		
		$this->form_validation->set_rules($this->validation);
		
		if($this->form_validation->run() == FALSE){
			if($_POST){
				
				$text = '';
				foreach($this->form_validation->error_array() as $k => $error){				
					$text .= '<p class="text-white">'.$error.'</p>';
				}
				
				$data['error'] = $text;
			}
		} else {
			if($this->dm->create()){
				$this->session->set_flashdata('message', '<p class="text-white">' . $this->lang->line('crud_insert_success') . '</p>');
				redirect($this->url);
			}
		}
		
		$this->render($this->router->method, @$data);
	}
	
	public final function update($id, $idHash)
	{
		$this->log($this->router->method);
		
		$data['row']			= $this->dm->by(array('id' => $id, 'idHash' => $idHash));
		
		$this->form_validation->set_rules($this->validation);
		
		if($this->form_validation->run() == FALSE){
			if($_POST){
				
				$text = '';
				foreach($this->form_validation->error_array() as $k => $error){				
					$text .= '<p class="text-white">'.$error.'</p>';
				}
				
				$data['error'] = $text;
			}
		} else {
			if($this->dm->update($id, $idHash)){
				$this->session->set_flashdata('message', '<p class="text-white">' . $this->lang->line('crud_update_success') . '</p>');
			}
			
			redirect($this->url);
		}
		
		$this->render($this->router->method, $data);
	}
	
	public final function delete($id, $hash_id)
	{
		if($this->dm->delete($id, $hash_id)){
			$this->session->set_flashdata('message', '<p class="text-white">' . $this->lang->line('crud_delete_success') . '</p>');
		}
		
		redirect($this->url);
	}
}