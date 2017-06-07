<?php
class Signedin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model("Product_entry");
	}
	public function view_product()
	{
		$d['data']=$this->Product_entry->getproduct();
		$this->load->view("admin/view_product",$d);

	}
	public function addproduct()
	{
		
		$this->load->view("admin/addproduct");

	}
	public function search()
	{

		 $search=  $this->input->post('search');
		
		  $d['data'] = $this->Product_entry->getproducts_onkey($search);
		  $this->load->view("admin/search_product",$d);

	}
	public function delete($p_name)
	{
		 $this->Product_entry->delete_record($p_name);
		 $d['data']=$this->Product_entry->getproduct();
		$this->load->view("admin/view_product",$d);

	}
	public function edit($p_name)
	{
		 $d['data']=$this->Product_entry->return_update_record($p_name);
		 $this->load->view("admin/edit_product",$d);

	}
	public function do_update($old_pname)
	{

		$p_name=$this->input->post('p_name');
        		$status=$this->input->post('status');
        		$discription=$this->input->post('discription');
        		$o_price=$this->input->post('o_price');
        		$r_price=$this->input->post('r_price');
        		$s_price=$this->input->post('s_price');
        		$c_price=$this->input->post('c_price');
        		$srp=$this->input->post('srp');
        
        		$img="";





        		//img upload start
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);



                if (  $this->upload->do_upload('img'))
                {
                	
                        $imgdetails = array('upload_data' => $this->upload->data());
                        $img=$this->upload->data('file_name');
                        $data=array('p_name' => $p_name,'status' => $status,'discription'=> $discription,'o_price'=>$o_price,'r_price'=>$r_price,'s_price'=>$s_price,'c_price'=>$c_price,'srp'=>$srp,'img'=>$img);
                        
                        $this->load->model('Product_entry');
                        $this->Product_entry->update($old_pname,$data);
                        $d["data"]=$data;
                        $this->load->view('admin/upload_success',$d);

                }
                else
                {
                		
                		
                        $error = array('error' => $this->upload->display_errors());


                        $this->load->view('admin/upload_unsuccess', $error);
                }
                //img upload end
		        
	}
	

	

}
?>
