<?php

/**
 * Admin Panel User Controller
 */
class User extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();

  }

  //User List
  public function index(){
    // get user
    $this->data['users'] = $this->user_m->get();
    $this->load->helper('aurora');

    //load view
    $this->data['subview'] = 'admin/user/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit User
   public function edit($id = NULL)
   {

    if($id){
      $this->data['user'] = $this->user_m->get($id);
      count($this->data['user']) || $this->data['errors'][] = 'User Could not be found';
    }else{
      $this->data['user'] = $this->user_m->get_new();

    }


    // Set up the form
    $rules = $this->user_m->rules_admin;
    $id || $rules['password']['rules'] .= '|required';
      $this->form_validation->set_rules($rules);

    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->user_m->array_from_post(array('name', 'email', 'phone', 'password', 'type', 'permission'));
        $data['password'] = $this->user_m->hash($data['password']);
        $this->user_m->save($data, $id);
        redirect('admin/user');
    }


  // load view
    $this->data['subview'] = 'admin/user/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete user
   public function delete($id){
    //Delete Users
    $this->user_m->delete($id);
    redirect('admin/user','refresh');
  }

//Login Page
  public function login(){

    $dashboard = 'admin/dashboard';
    //Check If login
    $this->user_m->loggedin() == FALSE || redirect($dashboard);
    $rules = $this->user_m->rules;
    $this->form_validation->set_rules($rules);
    if ($this->form_validation->run() == TRUE) {
      //We can Login and redirect

      if($this->user_m->login() == TRUE){
        redirect($dashboard);
      }else{
        // Login Error;
        $this->session->set_flashdata('error', 'This email/password connection does not match');
        redirect('admin/user/login', 'refresh');
      }
    }
    $this->data['subview'] = 'admin/user/login';
    $this->load->view('admin/_layout_modal', $this->data);
  }

// Log Out Page
  public function logout(){
    $this->user_m->logout();
    redirect('admin/user/login');
  }


  public function _unique_email($str)
  {
    // Do NOT validate if email already exists
    // UNLESS it's the email for the current user

    $id =  $this->uri->segment(4);
    $this->db->where('email', $this->input->post('email'));
    if($id )
      {
        $this->db->where('id !=', $id);
      }
    $user = $this->user_m->get();

    if (count($user)) {
      $this->form_validation->set_message('_unique_email', '%s should be unique');
      return FALSE;
    }

    return TRUE;
  }




}
