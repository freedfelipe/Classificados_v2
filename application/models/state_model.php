<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Model de Estados
 * @author Felipe Albert <albert@questa.com.br>
 */
class State_model extends CI_Model{
	
	private $tablename;
	private $per_page;
	
	public final function __construct()
	{
		parent::__construct();
		
		$this->tablename	= 'sys_state';
		$this->per_page		= $this->parameter_model->get('rows_per_page');
	}
	
	public final function by($by = array())
	{
		$query = $this->db->get_where($this->tablename, $by);
		
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		
		return false;
	}
	
	public final function create($data = array())
	{
		$data['idHash']			= getHash();
		$data['name'] 			= $this->input->post('name', TRUE);
		$data['uf'] 			= $this->input->post('uf', TRUE);
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
		$data['uf'] 			= $this->input->post('uf', TRUE);
		$data['updated_in']		= date('Y-m-d H:i:s');
		$data['status_id'] 		= $this->input->post('status_id', TRUE);
		
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
	
	public final function read_pag($limit = 0, $page_now = 0, $search = null)
	{
		$result = array(
                'count' => 0,
                'rows' => array()
            );
		 
		$this->db->select('*');
		$this->db->from($this->tablename);
		$this->db->where(array('status_id' => 1));
		if($search){ $this->db->like(array('name' => $search['seeking'])); }
		$this->db->order_by('name');
		
		if(isset($limit))
		{
			$this->db->limit($limit, $page_now);
		}
		
		$query = $this->db->get();
		if($query->num_rows() > 0){			
			$result['rows'] = $query->result_array();
			$result['count'] = $query->num_rows();
			
			return $result;
		}
		
		return false;
	}
	
	public final function read($start=0)
	{
		$query = $this->db->get_where($this->tablename, array('status_id' => 1), $this->per_page, $start);
		
		if($query->num_rows() > 0){
			return array($query->result(), $query->num_rows());
		}
		
		return false;
	}
	
	public final function all()
	{
		$query = $this->db->get_where($this->tablename, array('status_id' => 1));
		
		if($query->num_rows() > 0){
			return $query->result();
		}
		
		return false;
	}
	
	public final function delete($id = '', $idHash = '')
	{
		$this->db->where(array('id' => $id, 'idHash' => $idHash));
		
		if($this->db->update($this->tablename, array('status_id' => 0))){
			return true;
		}
		
		return false;
	}
	
	public final function id_or_create($data = array(), $insert = array())
	{
		$query = $this->db->get_where($this->tablename, array('name' => $data['name']));
		
		if($query->num_rows() > 0){
			$row = $query->row();
			return $row->id;
		} else {
			
			$insert['idHash'] 		= getHash();
			$insert['name']			= $data['name'];
			$insert['created_in']	= date('Y-m-d H:i:s');
			$insert['status_id']	= '1';
			
			if($this->db->insert($this->tablename, $insert)){
				return $this->db->insert_id();
			}
		}
		
		return false;
	}
	
	// funcao para inserir status_id e idHash
	public final function set_data()
	{
		$data = $this->by(array('status_id' => 0));
		
		foreach($data as $k => $v){
			
			$update = array();
			
			$update['idHash']		= getHash();
			$update['created_in']	= date('Y-m-d H:i:s');
			$update['status_id']    = 1;
			
			$this->db->where(array('id' => $v['id']));
			
			$this->db->update($this->tablename, $update);
		}
		
		die('finalizado');
	}
}
