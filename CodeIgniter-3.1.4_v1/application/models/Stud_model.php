<?php
class Stud_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function details()
	{
			
		 //$query = $this->db->query("select * from users");
			$query=$this->db->get("users");
    	$query->result_array();
    	
    	 return $query->result();
	}
	public function delete_record($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');
	}
	public function update_record($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('users', $data);	
	}
	public function get_update($id)
	{
		$this->db->where("id",$id);
		$data=$this->db->get("users");
		return $data->result();
		 
		
	}
}
?>
