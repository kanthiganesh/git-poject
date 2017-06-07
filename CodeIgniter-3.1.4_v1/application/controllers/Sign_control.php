<?php

class Sign_control extends CI_Controller {

        function __construct()
        {
             parent::__construct();
             $this->load->model("user_model");
             $this->load->library("form_validation");
             $this->load->helper('form','url');
             $this->load->model('user');//via google user data 
             $this->load->library('facebook');
             
             
        }


        public function index()
        {       
               


                if(empty($this->session->userdata('userData')) || $this->session->userdata('ci_session'))
                {

                   
                        redirect(base_url().'Sign_control/success_login');
                }
                else
                $this->load->view("home");
        }
            
            
          /*  public function logout() {
                $this->session->unset_userdata('token');
                $this->session->unset_userdata('userData');
                $this->session->sess_destroy();
                redirect('/user_authentication');
            }*/


        public function signin()
        {
            
                 $userData = array();
                 $data=array();
        $userDta=array();
        $i=0;
        // Check if user is logged in
        if($this->facebook->is_authenticated()){
            $i=1;
            // Get user facebook profile details
            $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');

            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
            $userData['first_name'] = $userProfile['first_name'];
            $userData['last_name'] = $userProfile['last_name'];
           //$userData['email'] = $userProfile['email'];
            //$userData['gender'] = $userProfile['gender'];
            $userData['locale'] = $userProfile['locale'];
            $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
            $userData['picture_url'] = $userProfile['picture']['data']['url'];
            
            // Insert or update user data
            $userID = $this->user->checkUser($userData);
            
            // Check user data insert or update status
            if(!empty($userID)){
                $data['userData'] = $userData;
                $this->session->set_userdata('userData',$userData);
                
            } else {
               $data['userData'] = array();
            }
            
            // Get logout URL
            $data['logoutUrl'] = $this->facebook->logout_url();
           
             $this->load->view('admin/index',$data);
        }else{
            $fbuser = '';
            
            // Get login URL
            $data['authUrl'] =  $this->facebook->login_url();
        }
        //echo $data['authUrl'];
        // Load login & profile view
        if($i==0)
        {
                include_once APPPATH."libraries/google-api-php-client/Google_Client.php";
                include_once APPPATH."libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
                
                // Google Project API Credentials
               

                  $clientId = '509083789745-47b88o8nfo5m5jikk9mndi152rhr1tlq.apps.googleusercontent.com';
                        $clientSecret = 'VIdpiqDWfbSfLH4L5ZyYV_Nb';
                        $redirectUrl = base_url() . 'Sign_control/signin';
                // Google Client Configuration
                $gClient = new Google_Client();
                $gClient->setApplicationName('Login to website');
                $gClient->setClientId($clientId);
                $gClient->setClientSecret($clientSecret);
                $gClient->setRedirectUri($redirectUrl);
                $google_oauthV2 = new Google_Oauth2Service($gClient);

                if (isset($_REQUEST['code'])) {
                    $gClient->authenticate();
                    $this->session->set_userdata('token', $gClient->getAccessToken());
                    redirect($redirectUrl);
                }

                $token = $this->session->userdata('token');
                if (!empty($token)) {
                    $gClient->setAccessToken($token);
                }

                if ($gClient->getAccessToken()) {
                    $userP = $google_oauthV2->userinfo->get();
                    // Preparing data for database insertion
                    $userData['oauth_provider'] = 'google';
                    $userData['oauth_uid'] = $userP['id'];
                    $userData['first_name'] = $userP['given_name'];
                    $userData['last_name'] = $userP['family_name'];
                    $userData['email'] = $userP['email'];
                    
                    $userData['locale'] = $userP['locale'];
                   // $userData['profile_url'] = $userProfile['link'];
                    $userData['picture_url'] = $userP['picture'];
                    // Insert or update user data
                    $uID = $this->user->checkUser($userData);
                    if(!empty($uID)){
                        $data['userData'] = $userData;
                        $this->session->set_userdata('userData',$userData);
                        $this->load->view('admin/index',$data);
                    } else {
                       $data['userData'] = array();
                    }
                } else {
                    $data['AuthUrl'] = $gClient->createAuthUrl();
                    $this->load->view('signin',$data);
                    
                }
            }


                        
                        // Google Project API Credentials
                        //$clientId = '509083789745-47b88o8nfo5m5jikk9mndi152rhr1tlq.apps.googleusercontent.com';
                        //$clientSecret = 'VIdpiqDWfbSfLH4L5ZyYV_Nb';
                        //$redirectUrl = base_url() . 'Sign_control/success_login';
         }
        public function signup()
        {
                $this->load->view("signup");
        }
        public function insertdata()
        {
                $uname=$this->input->post('username');
                $email=$this->input->post('email');
                $country=$this->input->post('country');
                $pwd=$this->input->post('pwd');
                $cpwd=$this->input->post('cpwd');
                $data=array('username'=>$uname,'email'=>$email,'country'=>$country,'pwd'=>$pwd,'cpwd'=>$cpwd);
                $this->user_model->save($data);


        }
        function verify_login()
        {
               
                $this->form_validation->set_rules('username','username','required');
                $this->form_validation->set_rules('pwd','pwd','required');
                if($this->form_validation->run())
                {
                     $uname=$this->input->post('username');
                     $pwd=$this->input->post('pwd');
                     $data=array('username'=>$uname,'pwd'=>$pwd);
                     if($this->user_model->check($data))
                     {
                        $session_data=array("username"=>$uname);
                        $this->session->set_userdata('ci_session',$session_data);
                        redirect(base_url().'Sign_control/success_login');
                     }
                     else
                     {
                        $this->session->set_flashdata("error","invalid username and password");
                        redirect(base_url().'Sign_control/signin');
                     }
                     
                }
                else
                {
                    $this->signin();
                }

               
        }
       function logout()
        {
           
                           if($this->facebook->is_authenticated()){ 
                         // Get logout URL
                                  $this->facebook->destroy_session();
                                    // Remove user data from session
                                    $this->session->unset_userdata('userData');
                                   
                    
       
        // Redirect to login page
                         redirect('http://localhost/CodeIgniter-3.1.4/index.php/sign_control/signin');
                }
             else if(!empty($this->session->userdata('token')))
             {
                $this->session->unset_userdata('token');
                $this->session->unset_userdata('userData');
                $this->session->sess_destroy();
                redirect('http://localhost/CodeIgniter-3.1.4/index.php/sign_control/signin');
             }
            else
            {
                $this->session->unset_userdata('ci_session');
                $this->session->sess_destroy();
                redirect('http://localhost/CodeIgniter-3.1.4/index.php/sign_control/signin');
            }
            

        }
    
        function success_login()
        {
            //echo '<h4>Login successfully.....</h4>'.'<a href="'.base_url().'sign_control/logout">logout</a>';
            $this->load->view("admin/index");
        }


}