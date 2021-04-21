<?php
/**
 *cardtype Model
 */
class Cardtype_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'card_type';
  protected $_order_by = 'id';
  public $rules = array(
      'name' => array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'trim|required'
        ),

      );


  function __construct()
  {
    parent::__construct();
  }

  public function get_new(){
    $cardtype = new stdClass();
    $cardtype->name = '';
    $cardtype->des = '';
    $cardtype->status = '';
    return $cardtype;
  }



}
