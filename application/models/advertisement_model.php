<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Model de Anuncios
 * @author Felipe <felipe@wadtecnologia.com.br>
 */
class Advertisement_model extends CI_Model{
	
	private $tablename;
	private $per_page;
	
	public final function __construct()
	{
		parent::__construct();
		
		$this->tablename	= 'sys_advertisement';
	}
	
	public final function by($by = array())
	{
		$query = $this->db->get_where($this->tablename, $by);
		
		if($query->num_rows() > 0){
			return $query->row_array();
		}
		
		return false;
	}
	
	public final function create($data = array())
	{
		$data['idHash']			= getHash();
		$data['name'] 			= $this->input->post('name', TRUE);
		$data['description']	= $this->input->post('description', TRUE);
		$data['created_in']		= date('Y-m-d H:i:s');
		$data['status_id'] 		= $this->input->post('status_id', TRUE);
		
		if($this->db->insert($this->tablename, $data)){
			return true;
		}
		
		return false;
	}
	
	public final function update($id = '', $idHash = '', $data = array())
	{
		$data['name'] 			= $this->input->post('name', TRUE);
		$data['description']	= $this->input->post('description', TRUE);
		$data['update_in']		= date('Y-m-d H:i:s');
		$data['status_id'] 		= $this->input->post('status_id', TRUE);
		
		$this->db->where(array('id' => $id, 'idHash' => $idHash));
		
		if($this->db->update($this->tablename, $data)){
			return true;
		}
		
		return false;
	}
	
	public final function all($where = array())
	{
		$query = $this->db->get_where($this->tablename, $where);
		
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		
		return false;
	}
	
	public final function delete($id)
	{
		$this->db->where('id', $id);
		
		if($this->db->update($this->tablename, array('status_id' => 0))){
			return true;
		}
		
		return false;
	}
	
	public final function id_or_create($name)
	{
		$query = $this->db->get_where($this->tablename, array('name' => $name));
		
		if($query->num_rows() > 0){
			$row = $query->row();
			return $row->id;
		} else {
			if($this->db->insert($this->tablename, array('name' => $name))){
				return $this->db->insert_id();
			}
		}
		
		return false;
	}
	
	public final function verifica_passo1()
	{
		$erro = false;
		
		if(!$this->input->post('plano', TRUE)){
			$erro[] = 'Selecione um plano!';
		}
		
		if($erro){
			return $erro;
		}
		
		$sessao = array(
			'user_id' 	=> $this->session->userdata('user_id'),
			'plan_id'	=> $this->input->post('plano', TRUE),
			'imagem' 	=> array('')
		);
		
		$this->session->set_userdata('anuncio', $sessao);
		
		redirect('anuncio/cadastrar/passo-2');
	}
	
	public final function verifica_passo2()
	{
		$sessao	= $this->session->userdata('anuncio');
		$erro 	= false;
		
		if(!$this->input->post('categoria', TRUE)){
			$erro[] = 'Selecione uma categoria';
		}
		
		if($this->input->post('categoria', TRUE)){
		
			switch($this->input->post('categoria')){
				
				case 3:
				case 4:
				case 5:
				case 6:
					
					if(!$this->input->post('brand_id', TRUE)){
						$erro[] = 'Selecione uma Marca';
					}
					
					if(!$this->input->post('model_id', TRUE)){
						$erro[] = 'Selecione um Modelo';
					}
					
					if(!$this->input->post('ano', TRUE)){
						$erro[] = 'Selecione um Ano';
					}
					
					if(!$this->input->post('placa', TRUE)){
						$erro[] = 'Preencha a Placa';
					}
					
				break;
				
				case 7:
				case 8:
				case 9:
					
					if(!$this->input->post('nome', TRUE)){
						$erro[] = 'Preencha o Nome';
					}
					
				break;
			}
			
			if(!$this->input->post('descricao', TRUE)){
				$erro[] = 'Preencha a Descrição';
			}
			
			if(!$this->input->post('preco', TRUE)){
				$erro[] = 'Preencha o Preço';
			}
			
			if(!$this->input->post('email', TRUE)){
				$erro[] = 'Preencha o Email';
			}
			
			if(!$this->input->post('telefone1', TRUE)){
				$erro[] = 'Preencha o Telefone';
			}
			
			if(!$this->input->post('cep', TRUE)){
				$erro[] = 'Preencha o CEP';
			}
			
			if(!$this->input->post('uf', TRUE)){
				$erro[] = 'Preencha o Estado';
			}
			
			if(!$this->input->post('cidade', TRUE)){
				$erro[] = 'Preencha a Cidade';
			}
			
			if(!$this->input->post('rua', TRUE)){
				$erro[] = 'Preencha a Rua';
			}
		}
		
		$sessao['erro'] = $erro;
		
		$this->session->set_userdata('anuncio', $sessao);
		
		if($erro){
			echo json_encode(array('ok'=>'0'));
		}else{
			echo json_encode(array('ok'=>'1'));
		}
	}
	
	public final function salva_imagens($imagem)
	{
		$sessao 			= $this->session->userdata('anuncio');
		$dados				= array($imagem['input'] => $imagem);
		$sessao['imagem']	= array_merge($sessao['imagem'], $dados);
		
		$this->session->set_userdata('anuncio', $sessao);
		
		return true;
	}
	
	public final function salva_passo2()
	{
		$sessao	= $this->session->userdata('anuncio');
		
		$insert_passo_2 = array(
			'user_id' 	=> $sessao['user_id'],
			'plan_id'	=> $sessao['plano'],
			'categoria' => $this->input->post('categoria', TRUE),
			'brand_id' 	=> $this->input->post('brand_id', TRUE),
			'model_id' 	=> $this->input->post('model_id', TRUE),
			'ano' 		=> $this->input->post('ano', TRUE),
			'placa' 	=> $this->input->post('placa', TRUE),
			'nome' 		=> $this->input->post('nome', TRUE),
			'descricao' => $this->input->post('descricao', TRUE),
			'preco' 	=> $this->input->post('preco', TRUE),
			'email' 	=> $this->input->post('email', TRUE),
			'email2' 	=> $this->input->post('email2', TRUE),
			'telefone1'	=> $this->input->post('telefone1', TRUE),
			'telefone2'	=> $this->input->post('telefone2', TRUE),
			'cep' 		=> $this->input->post('cep', TRUE),
			'uf' 		=> $this->input->post('uf', TRUE),
			'cidade' 	=> $this->input->post('cidade', TRUE),
			'rua' 		=> $this->input->post('rua', TRUE)
		);
		
		$sessao['dados'] = $insert_passo_2;
		
		$this->session->set_userdata('anuncio', $sessao);
		
		return true;
	}
}