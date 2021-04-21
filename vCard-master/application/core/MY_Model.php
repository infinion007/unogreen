<?php
/**
 *
 */
class MY_Model extends CI_Model
{
  //Basic Variables
  protected $_table_name = '';
  protected $_primary_key = 'id';
  protected $_primary_filter = 'intval';
  protected $_order_by = '';
  public $rules = array();
  protected $_timestamps = FALSE;

  function __construct()
  {
    parent::__construct();
    $this->load->helper('date');
  }

  //array form post
  public function array_from_post($fields)
  {
    $data = array();
    foreach ($fields as $field) {
      $data[$field] = $this->input->post($field);
    }
    return $data;
  }

  //Get Method
  public function get($id = NULL, $single = FALSE)
  {
    if ($id !== NULL) {
      $filter = $this->_primary_filter;
      $id = $filter($id);

      $this->db->where($this->_primary_key, $id);
      $method = 'row';
    }elseif($single == TRUE){
      $method = 'row';
    }else{
      $method = 'result';
    }


    if (!count($this->db->ar_orderby)) {
      $this->db->order_by($this->_order_by);
    }
    return $this->db->get($this->_table_name)->$method();
  }


  //Get_By Method
  public function get_by($where, $single = FALSE)
  {
    $this->db->where($where);
    return $this->get(NULL, $single);

  }

  //Save Method
  public function save($data, $id = NULL)
  {
    // Set timestamps
    if ($this->_timestamps == TRUE) {
      $now = date('Y-m-d H:i:s');
      $id || $data['created'] = $now;
      $data['modified'] = $now;
    }
    //Insert
    if ($id === NULL) {
      !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
      $this->db->set($data);
      $this->db->insert($this->_table_name);
      $id = $this->db->insert_id();
    }
    //Update
    else{
      $filter = $this->_primary_filter;
      $id = $filter($id);
      $this->db->set($data);
      $this->db->where($this->_primary_key, $id);
      $this->db->update($this->_table_name);
    }

    return $id;
  }

  //Delete Method
  public function delete($id)
  {
    $filter = $this->_primary_filter;
    $id = $filter($id);

    if (!$id) {
      return FALSE;
    }else {
      $this->db->where($this->_primary_key, $id);
      $this->db->limit(1);
      $this->db->delete($this->_table_name);

    }
  }


  public function status($int){
    switch ($int) {
      case '0':
        $usertype = 'active';
        break;
      case '1':
        $usertype = 'Suspend';
        break;
      default:
        $usertype = 'No Status Found';
        break;
    }
    return $usertype;
  }


  public function mDate($id = NULL){
 		$this->db->select('id, m_date');
 		$this->db->where('id', $id);

 		$date = $this->db->get($this->_table_name);

		foreach ($date->result() as $row)
		{
		    return $row->m_date;
		}
 	}

  public function phone_type($type = NULL){
    switch ($type) {
      case '0':
        $phn_type = '&#xf24e; Office';
        break;
      case '1':
        $phn_type = '&#xf354; Land Line';
        break;
      case '2':
        $phn_type = '&#xf237; Home';
        break;
      case '3':
        $phn_type = '&#xf367; Personal';
        break;
      default:
        $phn_type = 'No Status Found';
        break;
    }
    return $phn_type;
  }

  public function user_group($type = NULL){
    switch ($type) {
      case '0':
        $phn_type = 'VVIP';
        break;
      case '1':
        $phn_type = 'VIP';
        break;
      case '2':
        $phn_type = 'Regular';
        break;
      default:
        $phn_type = 'No Group Found';
        break;
    }
    return $phn_type;
  }

  public function phn_icon($type = NULL){
    switch ($type) {
      case '0':
        $phn_type = '<i class="la la-university la-fw"></i>';
        break;
      case '1':
        $phn_type = '<i class="la la-tty  la-fw"></i>';
        break;
      case '2':
        $phn_type = '<i class="la la-home la-fw"></i>';
        break;
        case '3':
        $phn_type = '<i class="la la-user-secret la-fw"></i>';
        break;
        default:
        $phn_type = '?';
        break;
    }
    return $phn_type;
  }

}
