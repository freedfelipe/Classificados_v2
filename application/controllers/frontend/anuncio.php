<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Controller de Anuncios
 * @author Felipe <felipe@wadtecnologia.com.br>
 */
class Anuncio extends CI_Controller{
	
	private $url;
	private $title;
	private $validation;
	
	public final function __construct()
	{
		parent::__construct();
		
		$this->load->model('plan_model', 'plan');
		$this->load->model('advertisement_model', 'anuncio');
		$this->load->model('category_model', 'categoria');
		$this->load->model('optional_model', 'opcional');
		
		$this->url = '/anuncios/';
		
		//$this->output->enable_profiler(TRUE);
		
		$this->user_model->is_logged_front();
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
	
	public final function passo1()
	{
		$data['url_title']	= 'Passo 1';
		$data['planos']		= $this->plan->all(array('status_id' => 1));
		
		if($_POST){
			
			$retorno = $this->anuncio->verifica_passo1();
			
			if($retorno){
				$text = '';
				foreach($retorno as $k => $error){				
					$text .= '<p class="text-white">'.$error.'</p>';
				}
				
				$data['alert']['error'] = $text;
			}
		}
		
		$this->render($this->router->method, $data);
	}
	
	public final function passo2()
	{
		# verificar se na sessão tem a variavel anuncio
		$sessao = $this->session->userdata('anuncio');
		
		if($sessao){
			
			# pegando dados do plano selecionado
			$data['plano'] 		= $this->plan->by(array('id' => $sessao['plan_id']));
			$data['url_title']	= 'Passo 2';
			$data['categorias']	= $this->categoria->all(array('status_id' => 1));
			$data['brand']		= $this->brand_model->all(array('status_id' => 1));
			$data['opcionais']	= $this->opcional->all(array('status_id' => 1));
			
			$this->render($this->router->method, $data);
		}else{
			redirect('anuncio/cadastrar');
		}
	}
	
	public final function ajax($metodo, $input = '')
	{
		
		switch($metodo){
			
			case 'upload':
				
				//printr($_FILES);
				
				$upload_path = 'resources/upload/anuncios/';
				
				$file_new_name = '';
				
				$config['upload_path'] 		= $upload_path;
				$config['allowed_types']	= 'gif|jpg|png';
				$config['max_size'] 		= '2048';
				$config['overwrite']  		= FALSE;
				$config['encrypt_name'] 	= TRUE;
				
				$this->load->library('upload', $config);
				
				//Faz o upload
				if($this->upload->do_upload($input)){
					
					$upload_data 	= $this->upload->data();
					$file_new_name	= $upload_data['file_name'];
					
					//redimenciona a imagem
					$config['image_library']	= 'GD2';
					$config['source_image']		= $upload_path.$file_new_name;
					$config['create_thumb'] 	= TRUE;
					$config['maintain_ratio']	= TRUE;
					$config['width']	 		= 300;
					$config['height']			= 190;
					
					$this->load->library('image_lib', $config); 
					
					$this->image_lib->resize();
					
					$data['sucesso']	= true;
					$data['msg'] 		= $upload_path.$file_new_name;
					$data['thumbnail'] 	= $upload_data['raw_name'].'_thumb'.$upload_data['file_ext'];
					$data['input']		= $input;
					
					$this->anuncio->salva_imagens($data);
					
				}else{
					$data['sucesso'] 	= false;
					$data['msg'] 		= $this->upload->display_errors();
				}
				
				echo json_encode($data);
			break;
			
			case 'verifica-passo-2':
				
				$this->anuncio->verifica_passo2();
				
			break;
			
			case 'salva-passo-2':
				
				$this->anuncio->salva_passo2();
				
			break;
		}
		
		
		
		//die('lol');
		
	}
}
