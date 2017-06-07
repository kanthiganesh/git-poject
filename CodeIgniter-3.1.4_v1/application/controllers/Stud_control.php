<?php
class Stud_control extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model("stud_model");
	}
	public function index()
	{
		
		$data['user_details']=$this->stud_model->details();
		$this->load->view("stud",$data);

	}
	function delete($id)
	{
		$this->stud_model->delete_record($id);
		$data['user_details']=$this->stud_model->details();
		$this->load->view("stud",$data);

	}
	function update($id)
	{
		//$id1=array("id"=>$id);
		$data['r']=$this->stud_model->get_update($id);
		$this->load->view("update_view",$data);
	}
	function update_record($id)
	{
		$id1=$this->input->post("id");
		$pwd=$this->input->post("pwd");
		$data=array("id"=>$id1,"password"=>$pwd);
		$this->stud_model->update_record($id,$data);
		$data['user_details']=$this->stud_model->details();
		$this->load->view("stud",$data);
	}

}
?>
