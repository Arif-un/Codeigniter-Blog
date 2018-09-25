<?php 

class Social_Auth extends CI_Controller
{

    public function index()
    {
        echo ("Adfasdf");
    }

    public function signup_with_google(){

        require_once APPPATH . "libraries\google-api-php-client-master\Google\autoload.php";
        require_once APPPATH . "libraries\google-api-php-client-master\Google\Auth\OAuth2.php";
        
        // Create Client Request to access Google API
        $client = new Google_Client();
        $client->setApplicationName("Google OAuth Login");
        $client->setClientId('');
        $client->setClientSecret('');
        $client->setRedirectUri('http://localhost/codeigniter-blog/index.php/Social_auth/signup_with_google');
        $client->setDeveloperKey('');
        $client->addScope("https://www.googleapis.com/auth/userinfo.email");

        // Send Client Request
        $objOAuthService = new Google_Service_Oauth2($client);

         // Add Access Token to Session
        if (isset($_GET['code'])) {
            $client->authenticate($_GET['code']);
            $_SESSION['access_token'] = $client->getAccessToken();
             //header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
        }
         
         // Set Access Token to make Request
        if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
            $client->setAccessToken($_SESSION['access_token']);
        }


        if ($client->getAccessToken()) {
            $userData = $objOAuthService->userinfo->get();
            $_SESSION['access_token'] = $client->getAccessToken();

            $data = array(
                'name' => $userData['name'],
                'username' => str_replace(' ', '', $userData['name']) . rand(0, 100),
                'email' => $userData['email'],
                'password' => "",
                'gender' => $userData['gender']
            );

            $this->db->insert('users', $data);

            $session_data = array(
                'name' => $data['name'],
                'username' => $data['username']
            );

            $this->session->set_userdata('logged_in', $session_data);

            //echo "<pre>";
            //print_r($userData);

            redirect('userHome');
        }

    }

    public function login_with_google(){

        require_once APPPATH . "libraries\google-api-php-client-master\Google\autoload.php";
        require_once APPPATH . "libraries\google-api-php-client-master\Google\Auth\OAuth2.php";
        
        // Create Client Request to access Google API
        $client = new Google_Client();
        $client->setApplicationName("Google OAuth Login");
        $client->setClientId('117369336994-0e43cm3kbe78ebqsnf0g7a6m01k6so7k.apps.googleusercontent.com');
        $client->setClientSecret('DGgMJklMKhFg2WzBMCwERfF_');
        $client->setRedirectUri('http://localhost/codeigniter-blog/index.php/Social_auth/login_with_google');
        $client->setDeveloperKey('AIzaSyBg7JnhuvxmMTE3w-s0VAmxKxutNfwnOMM');
        $client->addScope("https://www.googleapis.com/auth/userinfo.email");

        // Send Client Request
        $objOAuthService = new Google_Service_Oauth2($client);

         // Add Access Token to Session
        if (isset($_GET['code'])) {
            $client->authenticate($_GET['code']);
            $_SESSION['access_token'] = $client->getAccessToken();
             //header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
        }
         
         // Set Access Token to make Request
        if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
            $client->setAccessToken($_SESSION['access_token']);
        }


        if ($client->getAccessToken()) {
            $userData = $objOAuthService->userinfo->get();
            $_SESSION['access_token'] = $client->getAccessToken();


                $email = $userData['email'];
    
                $this->db->select('*');
                $this->db->from('users');
                $this->db->Where(array('email' => $email));
                $query = $this->db->get();
                $result = $query->result();

            
                if ($result != null) {
    
                    $session_data = array(
                        'name' => $result[0]->name,
                        'username' => $result[0]->username
                    );
                    $this->session->set_userdata('logged_in', $session_data);
    
                    redirect('userhome');
                } else {
                    redirect(base_url());
                } 
        }
    }
}