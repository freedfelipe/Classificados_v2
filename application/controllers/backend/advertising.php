<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Controller de Marcas
 * @author Felipe <felipe@wadtecnologia.com.br>
 */
class Advertising extends CI_Controller{
	
	private $url;
	private $title;
	private $validation;
	
	public final function __construct()
	{
		parent::__construct();
		
		$this->user_model->is_logged();
		$this->load->model('advertising_model', 'dm');
		$this->load->model('advertising_category_model');
		$this->url = '/admin/publicidade/';
		
		$this->validation = array(
			array(
				'field'	=> 'advertising_category_id', 
				'label'	=> 'Categoria', 
				'rules'	=> 'greater_than[-1]'
			),
			array(
				'field'	=> 'name', 
				'label'	=> 'Nome', 
				'rules'	=> 'trim|required|xss_clean'
			),
			array(
				'field'	=> 'start_date', 
				'label'	=> 'Data Início', 
				'rules'	=> 'trim|required|xss_clean'
			),
			array(
				'field'	=> 'end_date', 
				'label'	=> 'Data Fim', 
				'rules'	=> 'trim|required|xss_clean'
			),
			array(
				'field'	=> 'link', 
				'label'	=> 'URL (LINK)', 
				'rules'	=> 'trim|required|xss_clean|prep_url'
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
		
		$data['advertising_category']	= $this->advertising_category_model->all(array('status_id' => 1));
		
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
			
			$file_new_name = '';
			
			$config['upload_path'] 		= $this->parameter_model->get('UPLOAD_PATH_ADVERTISING');
			$config['allowed_types']	= 'gif|jpg|png|swf';
			$config['max_size'] 		= '2048';
			$config['overwrite']  		= FALSE;
			$config['encrypt_name'] 	= FALSE;
			
			$this->load->library('upload', $config);
			
			//Faz o upload
			if($this->upload->do_upload('file')){
				$upload_data 	= $this->upload->data();
				$file_new_name	= $upload_data['file_name'];
			}
			
			if($this->dm->create($file_new_name)){
				$this->session->set_flashdata('message', '<p class="text-white">' . $this->lang->line('crud_insert_success') . '</p>');
				redirect($this->url);
			}
		}
		
		$this->render($this->router->method, @$data);
	}
	
	public final function update($id, $idHash)
	{
		$this->log($this->router->method);
		
		$data['row']					= $this->dm->by(array('id' => $id, 'idHash' => $idHash));
		$data['advertising_category']	= $this->advertising_category_model->by(array('status_id' => 1));
		
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
			
			$file_new_name = '';
			
			$config['upload_path'] 		= $this->parameter_model->get('UPLOAD_PATH_ADVERTISING');
			$config['allowed_types']	= 'gif|jpg|png|swf';
			$config['max_size'] 		= '2048';
			$config['overwrite']  		= FALSE;
			$config['encrypt_name'] 	= TRUE;
			
			$this->load->library('upload', $config);
			
			//Faz o upload
			if($this->upload->do_upload('image')){
				$upload_data 	= $this->upload->data();
				$file_new_name	= $upload_data['file_name'];
			}
			
			if($this->dm->update($id, $idHash, $file_new_name)){
				$this->session->set_flashdata('message', '<p class="text-white">' . $this->lang->line('crud_update_success') . '</p>');
				redirect($this->url);
			}
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
