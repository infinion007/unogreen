<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_page extends CI_Controller {
	function __construct() {
        parent::__construct();
        
         $this->load->model('Dbs');
         if(!$this->session->userdata('logged_in')){
            redirect('Login');
         }

         $this->load->library('ajax_pagination'); 
         $this->perPage = 10;
         ini_set('max_execution_time', 300);
        
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
   
    
		$this->load->view('admin/dashboard');
	}

  public function profile(){
        $this->load->view('admin/profile');
  }

  public function Usercreation($value=''){
    if ($this->uri->segment(3)) {
        $aaray['id']=$this->uri->segment(3);
        $data['user']=user($aaray);
      }
    $data['roles']=roles($arrayName = array('status' =>'1,2'));
    $data['reporting_person']=reporting_person($arrayName = array('status' =>'1'));
    $this->load->view('admin/Usercreation',$data);
  }
  
  public function useradd($value=''){

    $postdata=$_POST;
    $postdata['createdby']=$this->session->userdata('id');
    $postdata['password']=md5(password);
    if(!empty($_POST['id'])){
        $this->Dbs->edit('user','id ='.$_POST['id'],$postdata);
         $this->session->set_flashdata('msg','Record Updated Successfully');
         $ajax_request = array('status' => 'success', 'message' => 'Record Updated Successfully');
        // redirect('Admin_page/user');
      }else{
         // echo "<pre>";print_r(user($arrayName = array('email' =>$_POST['email'])));exit();
        if (!empty(user($arrayName = array('email' =>$_POST['email'])))) {
          # code...
          $this->session->set_flashdata('msg1','Email id already exit.');
          $ajax_request = array('status' => 'error', 'message' => 'Email id already exit.');
        // redirect('Admin_page/user');
        }else{
          $this->Dbs->add('user',$postdata);
          $email_fetch_data=array('key_name' =>'REGISTRATION');
          $emailData = email_template($email_fetch_data);
          $subject = $emailData[0]['subject'];
          $body = $emailData[0]['body'];
          
          $body = str_replace("#username#", $_POST['email'], $body);
          $body = str_replace("#password#", password, $body);
          $body = str_replace("#url#", base_url(), $body);

          $data1 = array(
              'body' => $body,
          );
          $body = $this->load->view('email/email.php', $data1, TRUE);
          $email_content = ['to' => ''.$_POST['email'].'','subject'=>$subject,'message'=>$body
              ];         
          $this->email_lib->some_method($email_content);

          // $text_message = "Dear ".$_POST['fname'].' '.$_POST['lname'].". your account is created successfully on mobisoft crm please login with given login details send on register email id.";
          //     $sms = urlencode($text_message);
          //   $this->sms->some_method($arrayName = array('mobile' =>$_POST['contact_number'],'sms'=>$sms));

          $this->session->set_flashdata('msg','Record Added Successfully');
        // redirect('Admin_page/user');
          $ajax_request = array('status' => 'success', 'message' => 'Record Added Successfully');
        }
       
      }

      echo json_encode($ajax_request);
  }

  public function user($value=''){
    $totalRec = count(user());
    $data['sr'] = '0';
    // pagination configuration
    $config['target']      = '#postList';
    $config['base_url']    = base_url().'Admin_page/manage_user';
    $config['total_rows']  = $totalRec;
    $config['per_page']    = $this->perPage;
    $config['link_func']   = 'searchFilter';
    $this->ajax_pagination->initialize($config);
    $data['user']= user($arrayName = array('limit' => $this->perPage));
  
    $this->load->view('admin/user_view',$data);
  }

  public function manage_user($value=''){
    $conditions = array();
        // echo "<pre>";print_r($_REQUEST);
    //calc offset number
    $page = $this->input->get('page');
    $name = $this->input->get('subject');
    if(!$page) {
    $offset = 0;
    } else {
    $offset = $page;
    }
    $data['sr'] = $offset;
    if(isset($_GET['subject111111111'])){
      $conditions['subject'] = $_GET['subject'];
      $totalRec = count($this->Mdl_Employees->getEmployees($conditions));
    }else{
      $totalRec = count(user());
    }

    //pagination configuration
    $config['target']      = '#postList';
    $config['base_url']    = base_url().'Admin_page/manage_user';
    $config['total_rows']  = $totalRec;
    $config['per_page']    = $this->perPage;
    $config['link_func']   = 'searchFilter';
    $this->ajax_pagination->initialize($config);

    //set start and limit
    $conditions['start'] = $offset;
    $conditions['limit'] = $this->perPage;
    $sql="SELECT  u.*,r.role_name,p.fname as pfname,p.lname as plname
                FROM user AS u 
                LEFT JOIN roles AS r ON r.id = u.user_type 
                LEFT JOIN user AS p ON p.id = u.placed_under";
    // //get posts data
    if(!empty($_GET['name1'])){
      
      $sql.=" where u.fname like '%".$_GET['name1']."%' order by created_date desc";
    }else{
      $sql.="  order by created_date desc";
    }

    $sql.=' limit '.$offset.','.$this->perPage.'';
    $query1 = $this->db->query($sql);
        $data['user']= $query1->result_array();

    //load the view
    $this->load->view('admin/manage_user_view', $data, false);  
  }  

  
  public function delete_record($value=''){
      $this->Dbs->delete($this->uri->segment(3),'id ='.$this->uri->segment(4));
      $this->session->set_flashdata('message','Record Deleted Successfully');
      redirect('Admin_page/'.$this->uri->segment(3));
  }

  
  public function change_password(){
        $this->load->view('admin/change_password');
  }

  public function add_otp($value=''){
    $postdata=$_POST;
    $postdata['otp']=rand(1111,9999);
    if (!empty(email_otp($arrayName = array('email' =>$_POST['email'])))) {
      $this->Dbs->edit('email_otp','email ="'.$_POST['email'].'"',$postdata);
    } else {
      $this->Dbs->add('email_otp',$postdata);
    }
    $email_fetch_data=array('key_name' =>'OTP');
    $emailData = email_template($email_fetch_data);
          $subject = $emailData[0]['subject'];
          $body = $emailData[0]['body'];
          
          $body = str_replace("#email#", $_POST['email'], $body);
          $body = str_replace("#otp#", $postdata['otp'], $body);

          $data1 = array(
              'body' => $body,
          );
          $body = $this->load->view('email/email.php', $data1, TRUE);
        
            $email_content = [
                    'to' => ''.$_POST['email'].'',
                    'subject'=>$subject,
                    'message'=>$body
                      ];         
            $this->email_lib->some_method($email_content);

            // $text_message = "Dear ".$this->session->userdata('fname').' '.$this->session->userdata('lname').". This your otp ".$postdata['otp'].". For resting the password.";
            //     $sms = urlencode($text_message);
              $this->sms->some_method($arrayName = array('mobile' =>$this->session->userdata('contact_number'),'sms'=>$sms));
  }

  public function varify_otp($value=''){
    if (!empty(email_otp($arrayName = array('email' =>$_POST['email'],'otp' =>$_POST['otp'])))) {
    echo "1";
    } else {
      echo "0";
    }
  }

  public function change_pass($value=''){
    $postdata['password']=md5($_POST['password']);
    $this->Dbs->edit('user','email ="'.$this->session->userdata('email').'"',$postdata);
    $this->session->set_flashdata('msg','Password Updated Successfully');
    redirect('Admin_page');
  }



  public function add($value=''){
      if (!empty($_POST['id'])){
          $postData=$_POST;
          $this->Dbs->edit($this->uri->segment(3),'id ='.$_POST['id'],$postData);
          $this->session->set_flashdata('msg','Record Updated Successfully');
          redirect('Admin_page/'.$this->uri->segment(3));
      }else{
          $postData=$_POST;
          $sqlu=$this->Dbs->add($this->uri->segment(3),$postData);
          $this->session->set_flashdata('msg','Record Added Successfully');
          redirect('Admin_page/'.$this->uri->segment(3));
      }
  }


  public function status($value=''){
          if ($this->uri->segment(5)==1) {
              $postData['status']=0;
          } else {
              $postData['status']=1;
          }
          $this->Dbs->edit($this->uri->segment(3),'id ='.$this->uri->segment(4),$postData);
          $this->session->set_flashdata('msg','Status Updated Successfully');
          redirect('Admin_page/'.$this->uri->segment(3));
  }


  
  public function action_form_view($value=''){
    if ($this->uri->segment(3)) {
        $aaray['id']=$this->uri->segment(3);
        $data['action']=action($aaray)[0];
      }
    $data['roles']= roles($arrayName = array('status' =>'1'));
    $this->load->view('admin/action_form_view',$data);
  }

  public function action($value=''){
    $POST['user_role']= $_POST['user_role'];
    $POST['users']= isset($_POST['users'])?0:1;
    $POST['Usercreation']=isset($_POST['Usercreation'])?0:1;
    $POST['user']=isset($_POST['user'])?0:1;
    $POST['customers']=isset($_POST['customers'])?0:1;
    $POST['add_customer']=isset($_POST['add_customer'])?0:1;
    $POST['customer']=isset($_POST['customer'])?0:1;
    $POST['rejected_customer']=isset($_POST['rejected_customer'])?0:1;
    $POST['lead']=isset($_POST['lead'])?0:1;
    $POST['lead_assigned_by']=isset($_POST['lead_assigned_by'])?0:1;
    $POST['lead_assigned_by_self']=isset($_POST['lead_assigned_by_self'])?0:1;
    $POST['lead_assigned_to']=isset($_POST['lead_assigned_to'])?0:1;
    $POST['emailtemplate']=isset($_POST['emailtemplate'])?0:1;
    $POST['email_template']=isset($_POST['email_template'])?0:1;
    $POST['reportingperson']=isset($_POST['reportingperson'])?0:1;
    $POST['reporting_person']=isset($_POST['reporting_person'])?0:1;
    $POST['services']=isset($_POST['services'])?0:1;
    $POST['products']=isset($_POST['products'])?0:1;
    $POST['meetings']=isset($_POST['meetings'])?0:1;
    $POST['meeting']=isset($_POST['meeting'])?0:1;
    $POST['set_reminder']=isset($_POST['set_reminder'])?0:1;
    $POST['set_remainder_list']=isset($_POST['set_remainder_list'])?0:1;
    $POST['clients']=isset($_POST['clients'])?0:1;
    $POST['clients_list']=isset($_POST['clients_list'])?0:1;
    $POST['demolist']=isset($_POST['demolist'])?0:1;
    $POST['demo_list']=isset($_POST['demo_list'])?0:1;
    $POST['calls']=isset($_POST['calls'])?0:1;
    $POST['support_calls']=isset($_POST['support_calls'])?0:1;
    $POST['quotations']=isset($_POST['quotations'])?0:1;
    $POST['quotation']=isset($_POST['quotation'])?0:1;
    $POST['changepassword']=isset($_POST['changepassword'])?0:1;
    $POST['change_password']=isset($_POST['change_password'])?0:1;
    $POST['performa']=isset($_POST['performa'])?0:1;
    $POST['Performanvoice']=isset($_POST['Performanvoice'])?0:1;
    $POST['travelling_req']=isset($_POST['travelling_req'])?0:1;
    $POST['view_req']=isset($_POST['view_req'])?0:1;
    $POST['paid_req']=isset($_POST['paid_req'])?0:1;
    $POST['vendor']=isset($_POST['vendor'])?0:1;
    $POST['add_vendor']=isset($_POST['add_vendor'])?0:1;
    $POST['view_vendor']=isset($_POST['view_vendor'])?0:1;
    $POST['expenditure']=isset($_POST['expenditure'])?0:1;
    $POST['add_exp']=isset($_POST['add_exp'])?0:1;
    $POST['view_exp']=isset($_POST['view_exp'])?0:1;
    $POST['sale_target']=isset($_POST['sale_target'])?0:1;
    $POST['set_sale_target']=isset($_POST['set_sale_target'])?0:1;
    $POST['list_sale_target']=isset($_POST['list_sale_target'])?0:1;
    $POST['placedunder']=isset($_POST['placedunder'])?0:1;
   $POST['placed_under']=isset($_POST['placed_under'])?0:1;
   $POST['targetlist']=isset($_POST['targetlist'])?0:1;
   $POST['sales_target_list']=isset($_POST['sales_target_list'])?0:1;
    // echo "<pre>";print_r($_POST);exit();
    if (!empty($_POST['id'])){
    $postData=$POST;
    $this->Dbs->edit('action','id ='.$_POST['id'],$postData);
    $this->session->set_flashdata('msg','Record Updated Successfully');
    redirect('Admin_page/action_list');
    }else{
    $postData=$POST;
    $postData['created_date']=date('Y-m-d H:i:s');
    $sqlu=$this->Dbs->add('action',$postData);
    $this->session->set_flashdata('msg','Record Added Successfully');
    redirect('Admin_page/action_list');
    }
  }

  public function action_list($value=''){
    $sql="SELECT a.id,r.role_name FROM action AS a LEFT JOIN roles AS r ON r.id = a.user_role";
    $query1 = $this->db->query($sql);
    $data['action']= $query1->result_array();
    $this->load->view('admin/action_list_view',$data);
  }

  public function delete_action($value=''){
      $this->Dbs->delete('action','id ='.$this->uri->segment(3));
      $this->session->set_flashdata('message','Record Deleted Successfully');
      redirect('Admin_page/action_list');
  }



  public function fetch_user($value=''){
    if(!empty($_POST['user_type'])){
        $data['fetch_user']=user($arrayName = array('user_type' =>$_POST['user_type']));
        echo json_encode($data['fetch_user']);
    }
    
  }

  public function generate_link(){

   $this->load->view('admin/generate_link_view'); 
  }
  public function generate_link_add(){
    for ($i=1; $i<=$_POST['no_of_link']; $i++) { 
      $postData['user_type']='1';
      $postData['status']='1';
      $postData['rand_id']=md5(rand());
      $sqlu=$this->Dbs->add('user',$postData);
    }
    $this->session->set_flashdata('msg','Link Generated Successfully');
          redirect('Admin_page/generate_link');
  }
  public function generate_link_list($value=''){
    $sql="select id,rand_id from user";
    $query1 = $this->db->query($sql);
    $data['links']= $query1->result_array();
    $this->load->view('admin/generate_link_list_view',$data);
  }


  
  
}
