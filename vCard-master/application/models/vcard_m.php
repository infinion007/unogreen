<?php
/**
 *vcard Model
 */
class Vcard_M extends MY_Model
{
  //Basic Variables
  protected $_table_name = 'vcard';
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
    $vcard = new stdClass();
    $vcard->name = '';
    $vcard->company_name = '';
    // $vcard->desi = '';
    $vcard->email = '';
    $vcard->phone = '';
    $vcard->address = '';
    $vcard->u_group = '';
    $vcard->facebook = '';
    $vcard->twitter = '';
    $vcard->linkedin = '';
    $vcard->quora = '';
    $vcard->reddit = '';
    $vcard->instagram = '';
    $vcard->google = '';
    $vcard->youtube = '';
    $vcard->skype = '';
    $vcard->a_me = '';
    $vcard->web = '';
    $vcard->photo = '';
    $vcard->card = '';
    $vcard->status = '';
    return $vcard;
  }



}
