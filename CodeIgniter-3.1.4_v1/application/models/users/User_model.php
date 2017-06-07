<?php
class User_model extends CI_Model {

	function __construct()
        {
             parent::__construct();
             $this->load->database();
        }
        function getproducts()
        {
        	$this->db->select('p_name, r_price,img');
        	$data=$this->db->get('products');
        	$dataa=$data->result();
        	return $dataa;
        	

        }
        function return_product($p_name)
        {
            $this->db->where('p_name', $p_name);
            $data=$this->db->get('products');
            return $data->result();
        }
        function getcart_products($p_names)
        {
           $this->db->where_in('p_name',$p_names);
            $data = $this->db->get('products');
            return $data->result();
        }
        function customimg_update(){

        }
}
?>
