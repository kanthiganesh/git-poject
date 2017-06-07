<?php
class User_control extends CI_Controller {
	public function __construct()
        {
                parent::__construct();
                $this->load->model('users/user_model');   
                         
        }
        function index()
        {
            if(!empty($this->session->userdata('cart_products')))
            {
                 
                $cart_products=$this->session->userdata('cart_products');
                $data['product']=$this->user_model->getproducts();
                $data['no_products']=count($cart_products);
               // print_r($data);
                $this->load->view('users/home',$data);
            }
            else
            {
                 $cart_products=array();
            $this->session->set_userdata('cart_products', $cart_products);
                    //echo 'hello';
                $data['product']=$this->user_model->getproducts();
                $data['no_products']=0;
               // print_r($data);
                $this->load->view('users/home',$data);
            }

        }
        function store($p_name)
        {
            $d['data']=$this->user_model->return_product($p_name);
            $session_products=$this->session->userdata('cart_products');
            $d['no_products']=count($session_products);
        	$this->load->view('users/second',$d);
        }
		


}
?>
