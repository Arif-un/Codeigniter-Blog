<?php
class Posts extends CI_Controller
{

    public function index()
    {
        $id = $this->uri->segment(2);

        $this->db->select('*');
        $this->db->from('posts');
        $this->db->Where(array('id' => $id));
        $query = $this->db->get();
        $result = $query->result();

        $data['post'] = $result[0];

        $this->load->view('template/head');
        $this->load->view('post', $data);
    }

    public function newPost()
    {

        if (isset($_POST['content'])) {

            $total_letter = strlen($_POST['content']);
            $length_in_min = round($total_letter / 1700);

            $data = array(
                'title' => $this->input->post('title'),
                'subtitle' => $this->input->post('subtitle'),
                'post' => $this->input->post('content'),
                'username' => $this->input->post('username'),
                'length_in_minute' => $length_in_min
            );

            $this->db->insert('posts', $data);
            
            echo ('success');
        } else {
            $this->load->view('template/head');
            $this->load->view('new-post');
        }

    }

    public function editPost()
    {

        if (isset($_POST['edit_content'])) {

            $total_letter = strlen($_POST['edit_content']);
            $length_in_min = round($total_letter / 1700);

            $data = array(
                'title' => $this->input->post('title'),
                'subtitle' => $this->input->post('subtitle'),
                'post' => $this->input->post('edit_content'),
                'username' => $this->input->post('username'),
                'length_in_minute' => $length_in_min
            );

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('posts', $data);

            echo ('success');
        } else {

            $id = $this->uri->segment(2);

            $this->db->select('*');
            $this->db->from('posts');
            $this->db->Where(array('id' => $id));
            $query = $this->db->get();
            $result = $query->result();

            $data['post'] = $result[0];

            $this->load->view('template/head');
            $this->load->view('edit-post', $data);
        }
    }

    public function deletePost(){
        
        $id = $this->uri->segment(2);

        $this->db->delete('posts', array('id' => $id));

        redirect('profile');
    }

    public function upload_img()
    {

        $accepted_origins = array("http://localhost", "http://192.168.1.1", base_url());


        reset($_FILES);
        $temp = current($_FILES);
        if (is_uploaded_file($temp['tmp_name'])) {
            if (isset($_SERVER['HTTP_ORIGIN'])) {

                if (in_array($_SERVER['HTTP_ORIGIN'], $accepted_origins)) {
                    header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
                } else {
                    header("HTTP/1.1 403 Origin Denied");
                    return;
                }
            }


            if (preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])) {
                header("HTTP/1.1 400 Invalid file name.");
                return;
            }


             /* everything ok..then upload */

            $config['upload_path'] = 'assets/post-img/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 100;
            $config['max_width'] = 1024;
            $config['max_height'] = 1000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());

            } else {
                $data = array('upload_data' => $this->upload->data());

            }

            //$filetowrite = $imageFolder . $temp['name'];
            ///move_uploaded_file($temp['tmp_name'], $filetowrite);

            // Respond to the successful upload with JSON.
            // Use a location key to specify the path to the saved image resource.

            echo json_encode(array('location' => base_url() . $config['upload_path'] . $temp['name']));
        } else {
             // Notify editor that the upload failed
            header("HTTP/1.1 500 Server Error");

        }
    }
}