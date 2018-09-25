<?php
class SignOut extends CI_Controller {

    public function index(){
     session_unset();
     redirect(base_url());
    }
}