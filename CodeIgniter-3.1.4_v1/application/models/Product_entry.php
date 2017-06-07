<?php
class Product_entry extends CI_Model {

	function __construct()
        {
             parent::__construct();
             $this->load->database();
        }

	function addproduct($data)
	{
		$this->db->insert('products',$data);

	}
	function getproduct()
	{
		$this->db->select('p_name,r_price,img,srp');
		$data=$this->db->get("products");
		return $data->result();


	}
	function getproducts_onkey($key)
	{
		if($key=="")
		{
			$data=$this->db->get("products");
			return $data->result();
		}
		else
		{
			$data=$this->db->select('*')->from('products')->where("p_name LIKE '%$key%'")->get();
			
			return $data->result();
		}


	}
	function delete_record($p_name)
	{

		$this->db->where('p_name', $p_name);
		$this->db->delete('products');
	}
	function return_update_record($p_name)
	{
		
		$this->db->where('p_name', $p_name);
		$data=$this->db->get('products');
		return $data->result();
	}
	function update($old_pname,$data)
	{
		$this->db->where('p_name', $old_pname);
		$this->db->update('products',$data);

	}
	
}
?>
