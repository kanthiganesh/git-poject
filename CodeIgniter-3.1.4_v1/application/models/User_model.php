<?php
class User_model extends CI_Model {

	function __construct()
        {
             parent::__construct();
             $this->load->database();
        }

	public function index()
	{
			$this->load->database();
		 	
	}
	function save($data)
	{
		$this->db->insert("users_details",$data);
		$this->load->view("success_signup");
	}
	function check($data)
	{
			/*$f=0;
			$query=$this->db->get("users");
			$details=$query->result();
			foreach($details as $key => $value)
			{
				//echo $data['pwd'];//$value->username."  ".$data['username'].$value->pwd;
				if($data['username']==$value->username && $data['pwd']==$value->pwd)
				{
					$f=1;
					break;
				}
			}
			if($f==1)
			{
				echo '<h4>Login successfully.....</h4>'.'<a href="'.base_url().'sign_control">logout</a>';
			}
			else
				$this->load->view("signin");
			*/
			$this->db->where("username",$data['username']);
			$this->db->where("pwd",$data['pwd']);
			$rec=$this->db->get("users_details");
			if($rec->num_rows()>0)
			{
				return true;
			}
			else
				return false;

	}
}

?>
