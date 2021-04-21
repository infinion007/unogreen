<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
        parent::__construct();
        
         $this->load->model('Dbs');



        
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index(){ 
       if($this->session->userdata('logged_in')){
            redirect('Admin_page');
         } 
		$this->load->view('admin/login');
	}
	public function sign_in()
    {

        $login = $this->Dbs->fetch('user',array('email'=>$_POST['username'],'password'=>md5($_POST['password']),'status'=>'1'));
         // echo "<pre>";print_r($login);exit();
        if(isset($login) && !empty($login)){
            $newdata =array(
                'id'=>$login[0]['id'],
                'fname'=>$login[0]['fname'],
                'lname'=>$login[0]['lname'],
                'contact_number'=>$login[0]['contact_number'],
                'user_type'=>$login[0]['user_type'],
                'email'=>$login[0]['email'],
                'role'=>roles($arrayName = array('id' => $login[0]['user_type']))[0]['role_name'],
                'action'=>action($arrayName = array('user_role' =>$login[0]['user_type']))[0],
                'logged_in'=>TRUE
            );

            $this->session->set_userdata($newdata);
             $this->session->set_flashdata('msg','Welcome To Dashboard');
            redirect('Admin_page');
        }
        else{
           $this->session->set_flashdata('msg','login failed');
            redirect('Login'); 
        }
       
    }
    function logout(){
    	 $this->session->set_flashdata('msg','Successfully Logout');
        $this->session->set_userdata(array('logged_in' => FALSE));
        $this->session->sess_destroy();

        redirect('Login'); 

    }
	
}
