<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

class Users extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function signup(){
        $data['title'] = "Sign Up";
        
        $this->load->view('header', $data);
        $this->load->view('users/signup', $data);
        $this->load->view('footer', $data);
    }

}


?>