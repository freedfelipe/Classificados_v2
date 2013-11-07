<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Model de Usuários
 * @author Felipe <felipe@wadtecnologia.com.br>
 */
class User_model extends CI_Model{
	
	private $tablename;
	private $per_page;
	
	function __construct()
	{
		parent::__construct();
		
		$this->tablename	= 'sys_user';
		$this->per_page		= $this->parameter_model->get('rows_per_page');
	}
	
	public final function by($where = array())
	{
		$query = $this->db->get_where($this->tablename,$where);
		
		if($query->num_rows() > 0){
			return $query->row_array();
		}
		
		return false;
	}
	
	public final function create($data = array())
	{
		$data['idHash']			= getHash();
		$data['group_id'] 		= ($this->input->post('group_id') != '') ? $this->input->post('group_id', TRUE) : 2;
		$data['name'] 			= $this->input->post('name', TRUE);
		$data['email'] 			= $this->input->post('email', TRUE);
		$data['password'] 		= md5($this->input->post('password', TRUE));
		$data['created_in']		= date('Y-m-d H:i:s');
		$data['status_id'] 		= ($this->input->post('status_id', TRUE) != '') ? $this->input->post('status_id', TRUE) : 1;
		
		if($this->db->insert($this->tablename, $data)){
			return true;
		}
		
		return false;
	}
	
	public final function update($id, $idHash)
	{
		$data = array(
			'group_id'		=> $this->input->post('group_id', TRUE),
			'name'			=> $this->input->post('name', TRUE),
			'email'			=> $this->input->post('email', TRUE),
			'password'		=> md5($this->input->post('password', TRUE)),
			'update_in'		=> date('Y-m-d H:i:s'),
			'status_id'		=> $this->input->post('status_id', TRUE)
		);
		
		$this->db->where(array('id' => $id, 'idHash' => $idHash));
		
		if($this->db->update($this->tablename, $data)){
			return true;
		}
		
		return false;
	}
	
	public final function total($start=0)
	{
		$this->db->where(array('status_id' => 1));
		
		return $this->db->count_all_results($this->tablename);
	}
	
	public final function all()
	{
		$this->db->select('
			sys_user.id,
			sys_user.idHash,
			sys_user.name,
			sys_user.email,
			sys_group.name as group_name,
			sys_user.created_in,
			sys_user.status_id
		');
		
		$this->db->from($this->tablename);
		$this->db->join('sys_group', 'sys_group.id = sys_user.group_id');
		$this->db->order_by('sys_user.name');
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		
		return false;
	}
	
	public final function delete($id, $hash_id)
	{
		$this->db->where(array('id' => $id, 'idHash' => $hash_id));
		
		if($this->db->update($this->tablename, array('status_id' => 0))){
			return true;
		}
		
		return false;
	}
	
	public final function is_logged()
	{
		if($this->session->userdata('user_logged')){
			return true;
		}
		
		redirect('admin/login/');
	}
	
	public final function is_logged_front()
	{
		if($this->session->userdata('logado_front')){
			return true;
		}
		
		redirect('entrar/');
	}
	
	public final function login($email, $password)
	{
		
		$this->db->select('*');
		$this->db->from($this->tablename);
		$this->db->where(array(
			'email'			=> $email,
			'password'		=> md5($password),
			'is_admin'		=> 1,
			'status_id'		=> 1
		));
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			$user_data = $query->result_array();
			
			$this->session->set_userdata('user_logged',	true);
			$this->session->set_userdata('user_id',	$user_data[0]['id']);
			$this->session->set_userdata('user_name', $user_data[0]['name']);
			$this->session->set_userdata('user_email', $user_data[0]['email']);
			$this->session->set_userdata('user_admin', $user_data[0]['is_admin']);
			
			return true;
		}
		
		return false;
	}
	
	public final function login_front()
	{
		$this->db->select('*');
		$this->db->from($this->tablename);
		$this->db->where(array(
			'email'			=> $this->input->post('email', TRUE),
			'password'		=> md5($this->input->post('password', TRUE)),
			'status_id'		=> 1
		));
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0){
			$user_data = $query->row_array();
			
			$this->session->set_userdata('logado_front', true);
			$this->session->set_userdata('user_id', $user_data['id']);
			$this->session->set_userdata('user_name', $user_data['name']);
			$this->session->set_userdata('user_email', $user_data['email']);
			$this->session->set_userdata('user_admin', $user_data['is_admin']);
			
			return true;
		}
		
		return false;
	}
	
	public final function id_or_create($data)
	{
		$query = $this->db->get_where($this->tablename, array('name' => $data['name']));
		
		if($query->num_rows() > 0){
			$row = $query->row();
			return $row->id;
		} else {
			if($this->db->insert($this->tablename, $data)){
				return $this->db->insert_id();
			}
		}
		
		return false;
	}
	
	public final function recuperar()
	{
		$dados = $this->db->get_where($this->tablename, array('email' => $this->input->post('email', TRUE)))->row_array();
		
		if(count($dados) > 0){
			
			$link = site_url('gerar-senha/'.$dados['idHash'].'/'.md5($dados['email']));
			
			$texto = 'Olá, esse email é para recuperar a senha, clique no link para recuperar a senha, ou ignore esse email caso não tenha solicitado a alteração. Link: '.$link;
			
			$this->email->clear();
			
			$this->email->to($dados['email']);
			$this->email->from('contato@meucarroturbo.com.br', 'Meu Carro Turbo');
			$this->email->subject('Recuperar Senha');
			$this->email->message($texto);
			
			if($this->email->send()){
				return true;
			}
		}
		
		return false;
	}
	
	public final function verifica_dados($idHash = false, $email = false)
	{
		if($idHash and $email){
			
			$dados = $this->db->get_where($this->tablename, array('idHash' => $idHash))->row_array();
			
			if(count($dados) > 0){
				if($email == md5($dados['email'])){
					return true;
				}
			}
		}
		
		return false;
	}
	
	public final function gerar_senha($idHash = false)
	{
		if($idHash){
			if($this->db->where(array('idHash' => $idHash, 'email' => $this->input->post('email', TRUE)))->update($this->tablename, array('password' => md5($this->input->post('password', TRUE))))){
				return true;
			}
		}
		
		return false;
	}
}