<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Controller de Modelos
 * @author Felipe <felipe@wadtecnologia.com.br>
 */
class Models extends CI_Controller{
	
	private $url;
	private $title;
	private $validation;
	
	public final function __construct()
	{
		parent::__construct();
		
		$this->load->model('model_model', 'dm');
		$this->load->model('brand_model');
		$this->url = '/admin/modelos/';
		
		$this->validation = array(
			array(
				'field'	=> 'name', 
				'label'	=> 'Nome', 
				'rules'	=> 'trim|required|xss_clean'
			),
			array(
				'field'	=> 'brand_id', 
				'label'	=> 'Marcas', 
				'rules'	=> 'greater_than[-1]'
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
		
		$data['brands'] = $this->brand_model->all(array('status_id' => 1, 'category_id' => 1));
		
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
		
		$data['row']	= $this->dm->by(array('id' => $id, 'idHash' => $idHash));
		$data['brands'] = $this->brand_model->all(array('status_id' => 1, 'category_id' => 1));
		
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
	
	public final function search($brand_id = '')
	{
		$data = $this->dm->all(array('brand_id' => $brand_id, 'status_id' => 1));
		
		if($data){
			
			print('<option value="-1" selected="selected">Selecione...</option>');
			
			foreach($data as $k=>$v){
				print('<option value="' . $v['id'] . '">' . $v['name'] . '</option>');
			}
		}
	}
}
