<?php

/**
 * Admin Panel Dashboard Controller
 */
class Search extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('vcard_m');

  }

  public function index(){

    $data['s_by'] = $this->input->post('type');
    $data['keyWord'] = $this->input->post('keyWord');

    $where = $this->type($data['s_by']);

    if (!empty($data['s_by'])) {
      // Do search
      $this->db->like($data['s_by'] , $data['keyWord']);
      $result = $this->db->get('vcard');

      echo json_encode($result->result());
    } else {
      $result = $this->vcard_m->get('vcard');
      echo json_encode($result->result());
    }
    return FALSE;
  }

  public function type($int){
    switch ($int) {
      case 'name':
        $usertype = 'name';
        break;
      case 'email':
        $usertype = 'email';
        break;
      case 'phone':
        $usertype = 'phone';
        break;
      // case 'org':
      //   $usertype = 'company_name';
      //   break;
      default:
        $usertype = 'name';
        break;
    }
    return $usertype;
  }


}
