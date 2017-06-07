<?php
class Select_product extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("users/User_model");
		$this->load->helper(array('form', 'url'));
		
		
		
	}
	public function add_to_cart() {

	// Whenever a user adds an item to their cart, pull out any they already have in there
	$product_id=$_POST['p_name'];
	$cart_products = $this->session->userdata('cart_products');

	// Add the new item
	$cart_products[] = $product_id;

	// And put it back into the session
	$this->session->unset_userdata('cart_products');
	$this->session->set_userdata('cart_products', $cart_products);
	echo count($this->session->userdata('cart_products'));

	}
	function cart_details()
	{
		$cart_products = $this->session->userdata('cart_products');
		if(!empty($cart_products))
		{
			$d['data']=$this->User_model->getcart_products($cart_products);
			//print_r($d);
			$this->load->view('users/cart_details',$d);
		}
		else
		{
			$d['data']=array();
			$this->load->view('users/empty_cart_details',$d);
		}
			
	}
	function remove_from_cart($p_name)
	{

		 $cart_products = $this->session->userdata('cart_products');
		 if(($key=array_search($p_name,$cart_products))!==false)
		 {
		 	unset($cart_products[$key]);
		 }
		 //print_r($cart_products);
		 $this->session->unset_userdata('cart_products');
		 $this->session->set_userdata('cart_products',$cart_products);
		 $this->cart_details();

	 	
	}
	function logoimage()
	{
		
		echo 'hijdjlfjljlkfjglfjgljdfljgldjfljdl';
	//set preferences
        	/*	$config['upload_path']          = './customize/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

	//load upload class library
        $this->load->library('upload', $config);

        //$this->upload->do_upload('filename') will upload selected file to destiny folder
        if (!$this->upload->do_upload('imgdb'))
        {
            // case - failure
            $upload_error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
            //$this->load->view('some_view', $upload_error);
        }
        else
        {
            // case - success
            $this->User_model->customimg_update();
            echo 'Success';
        }*/
        define('UPLOAD_DIR', './customize/');
	$img = $_POST['imgdb'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = UPLOAD_DIR . uniqid() . '.png';
	$success = file_put_contents($file, $data);
	print $success ? $file : 'Unable to save the file.';
       
	}
	

	

}
?>
