<?php

/**
 * Admin Panel Dashboard Controller
 */
class Dashboard extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();

  }

  public function index(){

    $this->load->model('vcard_m');
    // get vcard
    $this->data['vcards'] = $this->vcard_m->get();
    $this->load->helper('aurora');
    $this->data['subview'] = 'admin/dashboard/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  public function modal(){
    $this->load->view('admin/_layout_modal');
  }


}
