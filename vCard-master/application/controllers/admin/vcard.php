<?php

/**
 * Admin Panel vcard Controller
 */
class Vcard extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('vcard_m');

  }

  //vcard List
  public function index(){
    // get vcard
    $this->data['vcards'] = $this->vcard_m->get();
    $this->load->helper('aurora');

    //load view
    $this->data['subview'] = 'admin/vcard/index';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //Edit vcard
   public function edit($id = NULL)
   {

    if($id){
      $this->data['vcard'] = $this->vcard_m->get($id);
      count($this->data['vcard']) || $this->data['errors'][] = 'vcard Could not be found';
    }else{
      $this->data['vcard'] = $this->vcard_m->get_new();

    }

    // Set Validation rules
    $rules = $this->vcard_m->rules;
    $this->form_validation->set_rules($rules);
    // Process the form
    if ($this->form_validation->run() == TRUE) {

      //create Date
			$now = time();
			$date = array(unix_to_human($now),$this->session->userdata('id'));

      if (!$id) {
        $data = $this->vcard_m->array_from_post(array('name', 'address', 'company_name','email','phone', 'card','u_group','facebook','twitter','linkedin','quora','reddit','instagram','google','youtube','skype','a_me','web', 'photo','status','c_date', 'm_date'));

        $data['company_name'] = serialize(array_combine($_POST['company_name'], $_POST['desi']));
        $data['phone'] =  serialize(array_combine($_POST['phone_type'], $_POST['phone']));
        $data['email']= serialize($_POST['email']);
        $data['card']= serialize($_POST['card']);

        $data['c_date'] = serialize($date);
        $m_date = array();
        $m_date[count($m_date)] = $date;
        $data['m_date'] = serialize($m_date);

    }else{
      $data = $this->vcard_m->array_from_post(array('name', 'address', 'company_name','email','phone', 'card','u_group','facebook','twitter','linkedin','quora','reddit','instagram','google','youtube','skype','a_me','web', 'photo','status','m_date'));

      $data['company_name'] = serialize(array_combine($_POST['company_name'], $_POST['desi']));
      $data['phone'] =  serialize(array_combine($_POST['phone_type'], $_POST['phone']));
      $data['email']= serialize($_POST['email']);
      $data['card']= serialize($_POST['card']);

      $m_date = unserialize($this->vcard_m->mDate($id));
      $m_date[count($m_date)] = $date;

      $data['m_date'] = serialize($m_date);

    }

        $this->vcard_m->save($data, $id);
        redirect('admin/vcard');
    }


  // load view
    $this->data['subview'] = 'admin/vcard/edit';
    $this->load->view('admin/_layout_main', $this->data);
  }

  //delete vcard
   public function delete($id){
    //Delete vcards
    $this->vcard_m->delete($id);
    redirect('admin/vcard','refresh');
  }


// Profile preview
  public function getPtofile($id = NULL){
    $profile = $this->vcard_m->get($id);

    echo json_encode($profile);
  }


  // Cardtype deopdown

  public function card_type(){
    $this->load->model('cardtype_m');
   $result = $this->cardtype_m->get();

      // $cardtype = $result->result();

      foreach ($result as $row) {
        echo $row['id'] .'=>'. $row['name'];
      }
    dump($cardtype);
  }


}
