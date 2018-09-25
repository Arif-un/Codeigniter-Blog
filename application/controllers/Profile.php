<?php
class Profile extends CI_Controller
{
    public function index()
    {

        $this->db->select('*');
        $this->db->from('posts');
        $this->db->where(array('username'=>$_SESSION['logged_in']['username']));
        $query = $this->db->get();
        $result = $query->result();
        $data['posts'] = $result;
    

        $this->load->view('template/head');
        $this->load->view('profile',$data);
    }


}