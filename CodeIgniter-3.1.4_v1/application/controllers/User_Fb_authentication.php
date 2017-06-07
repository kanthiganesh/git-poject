<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_Fb_Authentication extends CI_Controller
{
    function __construct() {
		parent::__construct();
		
		// Load facebook library
		$this->load->library('facebook');
		
		//Load user model
		$this->load->model('user_Fb');
    }
    
    public function index(){
		$userData = array();
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
            $userID = $this->user_Fb->checkUser($userData);
			
			// Check user data insert or update status
            if(!empty($userID)){
                $data['userData'] = $userData;
                $this->session->set_userdata('userData',$userData);
                
            } else {
               $data['userData'] = array();
            }
			
			// Get logout URL
			$data['logoutUrl'] = $this->facebook->logout_url();
             $this->load->view('success1',$data);
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
                $clientId = '516639180793-2k6sq5qcc557rknpass614plp05abvkt.apps.googleusercontent.com';
                $clientSecret = '2ZXOADAmRMBj3wWc9R9dAwsK';
                $redirectUrl = base_url() . 'index.php/User_Fb_authentication/';
                
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
                    $uID = $this->user_Fb->checkUser($userData);
                    if(!empty($uID)){
                        $data['userData'] = $userData;
                        $this->session->set_userdata('userData',$userData);
                        $this->load->view('success',$data);
                    } else {
                       $data['userData'] = array();
                    }
                } else {
                    $data['AuthUrl'] = $gClient->createAuthUrl();
                    $this->load->view('user_Fb_authentication/index',$data);
                    
                }
            }




        

    }

       public function signin()
       {
    	$this->load->view('welcome');
       }
        public function func()
       {
    	$this->load->view('redir');
       }
    public function login()
	{
		$this->load->model('model_db');
		$result=$this->model_db->check();
		if($result)
		{
			$this->load->view('last',array('name'=>$result));
		}
	}
    

	public function logout1() {
		// Remove local Facebook session
		$this->facebook->destroy_session();
		// Remove user data from session
		$this->session->unset_userdata('userData');
		// Redirect to login page
        redirect('http://localhost/CodeIgniter-3.1.4/index.php/User_Fb_authentication/');
    }
    public function logout() {

		$this->session->unset_userdata('token');
		$this->session->unset_userdata('userD');
        $this->session->sess_destroy();
		redirect('http://localhost/CodeIgniter-3.1.4/index.php/User_Fb_authentication/');
}
}
