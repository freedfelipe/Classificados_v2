<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Model de Parceiros
 * @author Felipe <felipe@wadtecnologia.com.br>
 */
class Partner_model extends CI_Model{
	
	private $tablename;
	private $per_page;
	
	public final function __construct()
	{
		parent::__construct();
		
		$this->tablename	= 'sys_partner';
	}
	
	public final function by($by = array())
	{
		$query = $this->db->get_where($this->tablename, $by);
		
		if($query->num_rows() > 0){
			return $query->row_array();
		}
		
		return false;
	}
	
	public final function create($file = '', $data = array())
	{
		if($file){
			$data['file'] = $file;
		}
		
		$data['idHash']						= getHash();
		$data['name']						= $this->input->post('name', TRUE);
		$data['link'] 						= $this->input->post('link', TRUE);
		$data['created_in']					= date('Y-m-d H:i:s');
		$data['status_id']					= $this->input->post('status_id', TRUE);
		
		if($this->db->insert($this->tablename, $data)){
			return true;
		}
		
		return false;
	}
	
	public final function update($id, $hash, $file = '', $data = array())
	{
		if($file){
			$data['file'] = $file;
		}
		
		$data['name']						= $this->input->post('name', TRUE);
		$data['link'] 						= $this->input->post('link', TRUE);
		$data['update_in']					= date('Y-m-d H:i:s');
		$data['status_id']					= $this->input->post('status_id', TRUE);
		
		$this->db->where(array('id' => $id, 'idHash' => $hash));
		
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
}
