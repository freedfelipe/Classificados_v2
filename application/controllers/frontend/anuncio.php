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
		
		
		$this->url = '/anuncios/';
		
		
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
		$data['url_title']	= 'O seu classificados turbinado!';
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
		
		die('passo 2');
		
	}
}
