<?php

class Sign_control extends CI_Controller {

        function __construct()
        {
             parent::__construct();
             $this->load->model("user_model");
             $this->load->library("form_validation");
             $this->load->helper('form','url');
             $this->load->model('user');//via google user data 
             
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

                 ////sign in via google code starts here
                // Include the google api php libraries
                        include_once APPPATH."libraries/google-api-php-client/Google_Client.php";
                        include_once APPPATH."libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
                        
                        // Google Project API Credentials
                        $clientId = '509083789745-47b88o8nfo5m5jikk9mndi152rhr1tlq.apps.googleusercontent.com';
                        $clientSecret = 'VIdpiqDWfbSfLH4L5ZyYV_Nb';
                        $redirectUrl = base_url() . 'Sign_control/success_login';
                        
                        // Google Client Configuration
                        $gClient = new Google_Client();
                        $gClient->setApplicationName('Login to codexworld.com');
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
                            $userProfile = $google_oauthV2->userinfo->get();
                            // Preparing data for database insertion
                            $userData['oauth_provider'] = 'google';
                            $userData['oauth_uid'] = $userProfile['id'];
                            $userData['first_name'] = $userProfile['given_name'];
                            $userData['last_name'] = $userProfile['family_name'];
                            $userData['email'] = $userProfile['email'];
                            //$userData['gender'] = $userProfile['gender'];
                            $userData['locale'] = $userProfile['locale'];
                            $userData['profile_url'] = $userProfile['link'];
                            $userData['picture_url'] = $userProfile['picture'];
                            // Insert or update user data
                            $userID = $this->user->checkUser($userData);
                            if(!empty($userID)){
                                $data['userData'] = $userData;
                                $this->session->set_userdata('userData',$userData);
                            } else {
                               $data['userData'] = array();
                            }
                        } else {
                            $data['authUrl'] = $gClient->createAuthUrl();
                        }
                        $this->load->view('signin',$data);         
                //sign in via google code ends here
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
             if(!empty($this->session->userdata('userData')))
             {
                $this->session->unset_userdata('token');
                $this->session->unset_userdata('userData');
                $this->session->sess_destroy();
             }
            else
            {
                $this->session->unset_userdata('ci_session');
                $this->session->sess_destroy();
            }
                redirect(base_url().'Sign_control/signin');
        }
        function success_login()
        {
            //echo '<h4>Login successfully.....</h4>'.'<a href="'.base_url().'sign_control/logout">logout</a>';
            $this->load->view("admin/index");
        }


}