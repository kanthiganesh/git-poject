<?php
class Addproduct extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
	public function do_upload()
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
                        $this->Product_entry->addproduct($data);
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
