<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
function __construct() {
        parent::__construct();
        
         $this->load->model('Dbs');
	}
	
	public function index(){

		$this->load->view('login');
	}
	function login_add($value=''){
		$login = $this->Dbs->fetch('user',array('email'=>$_POST['email'],'password'=>md5($_POST['password'])));
         // echo "<pre>";print_r($login);exit();
        if(isset($login) && !empty($login)){
            $newdata =array(
                'id'=>$login[0]['id'],
                'fname'=>$login[0]['fname'],
                'lname'=>$login[0]['lname'],
                'contact_number'=>$login[0]['contact_number'],
                'user_type'=>$login[0]['user_type'],
                'email'=>$login[0]['email'],
                'logged_in'=>TRUE
            );

            $this->session->set_userdata($newdata);
             $this->session->set_flashdata('msg','Welcome To Dashboard');
            redirect('my-digital-card/'.$login[0]['rand_id']);
        }
        else{
           $this->session->set_flashdata('msg','<p style="color:red">login failed</p>');
            redirect('home/index'); 
        }
	}

	function digital_card(){

		if($this->uri->segment(2)){
			$sql="SELECT  *
                FROM user where rand_id='".filter_var($this->uri->segment(2), FILTER_SANITIZE_STRING)."'";
                 $query1 = $this->db->query($sql)->result_array();
            if (!empty($query1[0]['email'])) {
            	$data['user']=$query1;
            	$this->load->view('vcard',$data);
            }else{
            	$this->load->view('digital_card');
            }
		}else{
			redirect();
		}
		
	}

	function reg($value='')
	{
		$_POST['password']=md5($_POST['password']);
		$data=$_POST;
		 if(!empty($_FILES['photo'])){
		        $uploaddir = 'uploads/';
		        $oxiinc=rand().'.png';
		        $uploadfile = $uploaddir . $oxiinc;

		        if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {

		        $data['photo'] = $oxiinc;
		        }
		}
		 $this->Dbs->edit('user','rand_id = "'.$_POST['rand_id'].'" ',$data);
		 $id = $this->db->affected_rows();
		if($id){
			$sql="SELECT  *
                FROM user where rand_id='".filter_var($_POST['rand_id'], FILTER_SANITIZE_STRING)."'";
                 $login = $this->db->query($sql)->result_array();
                 $newdata =array(
                'id'=>$login[0]['id'],
                'fname'=>$login[0]['fname'],
                'lname'=>$login[0]['lname'],
                'contact_number'=>$login[0]['contact_number'],
                'user_type'=>$login[0]['user_type'],
                'email'=>$login[0]['email'],
                'logged_in'=>TRUE
            );
                 $this->session->set_userdata($newdata);
			redirect(base_url('my-digital-card/'.$_POST['rand_id']));
		}else{
			redirect();
		}
		
	}

	function Vcard_Edit(){
		$sql="SELECT  *
                FROM user where id=".$this->session->userdata('id') ;
                 $query1 = $this->db->query($sql)->result_array();
            	$data['user']=$query1;
            	$this->load->view('digital_card',$data);
            
	}

	function vcard_download($value){

		$sql="SELECT  *
                FROM user where rand_id='".$value."'" ;
                 $query1 = $this->db->query($sql)->result_array();
        $this->load->library('vcard');
        $datavcard = $this->getvcard($query1);
        if (is_array($datavcard))
        {    
            $this->vcard->vcard($datavcard);
        }
        else
        {
            $this->vcard->vcard();
            
        }
        $this->vcard->zipdownload();

	}

	function getvcard($data)
    {
        $datavcarddata = array();
        $datavcarddata['first_name'] = $data[0]['fname'];
        $datavcarddata['last_name'] = $data[0]['lname'];
        $datavcarddata['company'] = $data[0]['company'];
      
        $datavcarddata['role'] = $data[0]['position'];

        $datavcarddata['work_address'] = $data[0]['address'];
       
        $datavcarddata['work_postal_code'] = $data[0]['pincode'];
        
        $datavcarddata['cell_tel'] = $data[0]['contact_number'];
       
        $datavcarddata['email1'] = $data[0]['email'];
       
        $datavcarddata['url'] = $data[0]['website'];

        $datavcarddata['birthday'] = $data[0]['dob'];
       
        return $datavcarddata;
    } 

    function logout(){
    	$this->session->set_flashdata('msg','Successfully Logout');
        $this->session->set_userdata(array('logged_in' => FALSE));
        $this->session->sess_destroy();

        redirect(); 
    }

}
