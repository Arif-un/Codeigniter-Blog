<?php
class UserHome extends CI_Controller {

    public function index(){
         //featured content
         $this->db->order_by("id", "asc");
         $query = $this->db->get('posts',4);
         
         $data['featured'] = $query->result();

         //suggested content
         $this->db->order_by("id", "asc");
         $this->db->select('id,title,username,created_at,length_in_minute');
         $query = $this->db->get('posts',5,4);
         $data['suggests'] = $query->result();

        // activities
         $this->db->order_by("id", "asc");
         $this->db->select('id,title,post,subtitle,username,created_at,length_in_minute');
         $query = $this->db->get('posts',999999,9);
         $data['posts'] = $query->result();

        $this->load->view('template/head');
        $this->load->view('user-home',$data);
    }

}