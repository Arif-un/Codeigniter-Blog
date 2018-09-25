<?php
class Home extends CI_Controller
{

    public function index()
    {
        //find page existance
        !file_exists(APPPATH . 'views/Home' . '.php') ? show_404() : "";


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
         
        // login token
        $loginTkn = new Google_Client();
        $loginTkn->setApplicationName("Google OAuth Login");
        $loginTkn->setClientId('');
        $loginTkn->setClientSecret('');
        $loginTkn->setRedirectUri('http://localhost/codeigniter-blog/index.php/Social_auth/login_with_google');
        $loginTkn->setDeveloperKey('');
        $loginTkn->addScope("https://www.googleapis.com/auth/userinfo.email");
         // link
         $authUrl = $client->createAuthUrl();
         $data['authUrl'] = $authUrl;

        $loginUrl = $loginTkn->createAuthUrl();
        $data['loginUrl'] = $loginUrl;

         //featured content
        $this->db->order_by("id", "asc");
        $query = $this->db->get('posts', 4);

        $data['featured'] = $query->result();

         //suggested content
        $this->db->order_by("id", "asc");
        $this->db->select('id,title,username,created_at,length_in_minute');
        $query = $this->db->get('posts', 5, 4);

        $data['suggests'] = $query->result();

        $this->db->order_by("id", "asc");
        $this->db->select('id,title,post,subtitle,username,created_at,length_in_minute');
        $query = $this->db->get('posts', 999999, 9);

        $data['posts'] = $query->result();


        $this->load->view('template/head');
        $this->load->view('home', $data);
    }

    public function register()
    {

        if (isset($_POST['signUp'])) {
            $this->form_validation->set_rules('name', 'Username', 'trim|required');
            $this->form_validation->set_rules('birth', 'Username', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
            $this->form_validation->set_rules('gender', 'Username', 'required');

            if ($this->form_validation->run() == true) {

                $data = array(
                    'name' => $this->input->post('name'),
                    'username' => str_replace(' ', '', $this->input->post('name')) . rand(0, 100),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'birth' => $this->input->post('birth'),
                    'gender' => $this->input->post('gender')
                );

                //$this->db->insert('users',$data);

                $session_data = array(
                    'name' => $data['name'],
                    'username' => $data['username']
                );

                $this->session->set_userdata('logged_in', $session_data);

                redirect('userhome');
            } else {
                redirect(base_url());
            }
        }

    }

    public function login()
    {

        if (isset($_POST['signIn'])) {

            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));

            $this->db->select('*');
            $this->db->from('users');
            $this->db->Where(array('email' => $email, 'password' => $password));
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
        } else {
            redirect(base_url());
        }

    }
}