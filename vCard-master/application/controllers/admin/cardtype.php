<?php

/**
 * Admin Panel cardtype Controller
 */
class Cardtype extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('cardtype_m');

  }

  //cardtype List
  public function index(){
    // get cardtype
    $this->data['cardtypes'] = $this->cardtype_m->get();
    $this->load->helper('aurora');

    //load view
    $this->data['subview'] = 'admin/cardtype/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit cardtype
   public function edit($id = NULL)
   {

    if($id){
      $this->data['cardtype'] = $this->cardtype_m->get($id);
      count($this->data['cardtype']) || $this->data['errors'][] = 'cardtype Could not be found';
    }else{
      $this->data['cardtype'] = $this->cardtype_m->get_new();

    }

    // Set Validation rules
    $rules = $this->cardtype_m->rules;
    $this->form_validation->set_rules($rules);
    // Process the form
    if ($this->form_validation->run() == TRUE) {
        $data = $this->cardtype_m->array_from_post(array('name', 'des','status'));

        $this->cardtype_m->save($data, $id);
        redirect('admin/cardtype');
    }

  // load view
    $this->data['subview'] = 'admin/cardtype/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete cardtype
   public function delete($id){
    //Delete cardtypes
    $this->cardtype_m->delete($id);
    redirect('admin/cardtype','refresh');
  }


}
