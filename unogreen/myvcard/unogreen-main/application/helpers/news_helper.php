<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


   function category($where=[]){
       //get main CodeIgniter object
       $ci =& get_instance();
       $sql="select * from category";
        if ($where) {
         if(!empty($where['id'])){
          $condition['id']=" id=".$where['id'];
         }
         if (!empty($where['name'])){
           $condition['name']=" name='".$where['name']."'";
         }
         if (!empty($where['status'])){
           $condition['status']=" status IN ('".$where['status']."')";
         }
           $whereCondition = implode(" AND", $condition);
           $sql .=' WHERE '.$whereCondition;
        }
       $query = $ci->db->query($sql);
       return $query->result_array();
   }

   function roles($where=[]){
       //get main CodeIgniter object
       $ci =& get_instance();
       $sql="select * from roles";
       if ($where) {
          if(isset($where['id'])){
          $condition['id']=" id=".$where['id'];
         }
         if (!empty($where['role_name'])){
           $condition['role_name']=" role_name='".$where['role_name']."'";
         }
         if (!empty($where['status'])){
           $condition['status']=" status IN ('".$where['status']."')";
         }
           $whereCondition = implode(" AND", $condition);
           $sql .=' WHERE '.$whereCondition;
        }
       $query = $ci->db->query($sql);
       return $query->result_array();
   }

   function reporting_person($where=[]){
       //get main CodeIgniter object
       $ci =& get_instance();
       $sql="select * from reporting_person";
       if ($where) {
         if(!empty($where['id'])){
          $condition['id']=" id=".$where['id'];
         }
           if (!empty($where['fname'])){
           $condition['fname']=" fname='".$where['fname']."'";
         }
         if (!empty($where['lname'])){
           $condition['lname']=" lname='".$where['lname']."'";
         }
         if (isset($where['status'])){
           $condition['status']=" status IN ('".$where['status']."')";
         }
           $whereCondition = implode(" AND", $condition);
           $sql .=' WHERE '.$whereCondition;
      }
       $query = $ci->db->query($sql);
       return $query->result_array();
   }


  

   function user($where=[]){
       //get main CodeIgniter object
       $sql="SELECT  u.*,r.role_name,r.id as role_id,p.fname as pfname,p.lname as plname
                FROM user AS u 
                LEFT JOIN roles AS r ON r.id = u.user_type
                LEFT JOIN user AS p ON p.id = u.placed_under";

        if (!empty($where['email'])) {
            $sql.=' where u.email="'.$where['email'].'"';
        }else if (!empty($where['id'])) {
            $sql.=' where u.id="'.$where['id'].'"';
        }else if (!empty($where['user_type'])) {
            $sql.=' where u.user_type IN ('.$where['user_type'].') order by u.fname asc';
        }else if (!empty($where['placed_under'])) {
            $sql.=' where u.placed_under="'.$where['placed_under'].'"';
        }else if(!empty($where['offset'])){
            $sql.=' limit '.$where['offset'].','.$where['limit'].'';
        }else if(!empty($where['limit'])){
           $sql.=' order by created_date desc limit '.$where['limit'].'';
        }else{
           $sql.=' order by created_date desc';
        }
   
        $ci =& get_instance();
        $query = $ci->db->query($sql);
        return $query->result_array();
   }

   function email_template($var){
        $sql="select * from email_template";
        if (!empty($var['id'])) {
            $sql.=' where id="'.$var['id'].'"';
        }else if(!empty($var['offset'])){
            $sql.=' limit '.$var['offset'].','.$var['limit'].'';
        }else if(!empty($var['limit'])){
           $sql.=' limit '.$var['limit'].'';
        }else if(!empty($var['key_name'])){
             $sql.=' where key_name="'.$var['key_name'].'"';
        }else{
           $sql.=' order by created_date desc';
        }
        $ci =& get_instance();
        $query = $ci->db->query($sql);
        return $query->result_array();
    }
    
    function email_otp($where=[]){
       //get main CodeIgniter object
       $ci =& get_instance();
       $sql="select * from email_otp";
       if ($where) {
       
         if (!empty($where['email'])){
           $condition['email']=" email='".$where['email']."'";
         }
          if (!empty($where['otp'])){
           $condition['otp']=" otp='".$where['otp']."'";
         }
           $whereCondition = implode(" AND", $condition);
           $sql .=' WHERE '.$whereCondition;
      }
       $query = $ci->db->query($sql);
       return $query->result_array();
   }  

  function products($where=[]){
       //get main CodeIgniter object
       $ci =& get_instance();
       $sql="select * from products";
       if ($where) {
        if (!empty($where['id'])){
           $condition['id']=" id='".$where['id']."'";
         }

         if (!empty($where['product_name'])){
           $condition['product_name']=" product_name='".$where['product_name']."'";
         }

         if (isset($where['status'])){
           $condition['status']=" status IN ('".$where['status']."')";
         }

           $whereCondition = implode(" AND", $condition);
           $sql .=' WHERE '.$whereCondition;
      }
      $sql.=' order by c_date desc';
       $query = $ci->db->query($sql);
       return $query->result_array();
   }


    
   function action($where=[]){
       //get main CodeIgniter object
       $ci =& get_instance();
       $sql="select * from action";
       if ($where) {
        if (!empty($where['id'])){
           $condition['id']=" id='".$where['id']."'";
         }

         if (isset($where['user_role'])){
           $condition['user_role']=" user_role='".$where['user_role']."'";
         }

         if (isset($where['status'])){
           $condition['status']=" status IN ('".$where['status']."')";
         }

           $whereCondition = implode(" AND", $condition);
           $sql .=' WHERE '.$whereCondition;
      }
      $sql.=' order by created_date desc';
       $query = $ci->db->query($sql);
       return $query->result_array();
   }

     function user_type($where=[]){
       //get main CodeIgniter object
       $sql="SELECT  u.*,r.role_name,r.id as role_id
                FROM user AS u 
                LEFT JOIN roles AS r ON r.id = u.user_type";

        if (!empty($where['email'])) {
            $sql.=' where u.email="'.$where['email'].'"';
        }else if (!empty($where['id'])) {
            $sql.=' where u.id="'.$where['id'].'"';
        }else if (!empty($where['user_type'])) {
            $sql.=' where u.user_type IN ('.$where['user_type'].') order by u.fname asc';
        }else if(!empty($where['offset'])){
            $sql.=' limit '.$where['offset'].','.$where['limit'].'';
        }else if(!empty($where['limit'])){
           $sql.=' limit '.$where['limit'].'';
        }else{
           $sql.=' order by created_date desc';
        }
   
        $ci =& get_instance();
        $query = $ci->db->query($sql);
        return $query->result_object();
   }

      

   function vendor($where=[],$var=[]){
       $ci =& get_instance();
       $sql="select * from vendor";
       if (!empty($where)) {
          if (!empty($where['id'])){
           $condition['id']=" id='".$where['id']."'";
         }
         if (!empty($where['name'])){
           $condition['name']=" name='".$where['name']."'";
         }

           $whereCondition = implode(" AND", $condition);
           $sql .=' WHERE '.$whereCondition;
         
         $sql.=' order by created_date desc';

         if(!empty($var['offset'])){
            $sql.=' limit '.$var['offset'].','.$var['limit'].'';
        }else if(!empty($var['limit'])){
           $sql.=' limit '.$var['limit'].'';
        }
         
      }else{
        $sql.=' order by created_date desc';
      }
      $query = $ci->db->query($sql);
      return $query->result_array();
    }
function amenity($where=[]){
    $ci =& get_instance();
    $sql="select * from amenity";
    if ($where) {
      if (!empty($where['id'])){
        $condition['id']=" id='".$where['id']."'";
      }
      if (!empty($where['name'])){
        $condition['name']=" name='".$where['name']."'";
      }
      $whereCondition = implode(" AND", $condition);
      $sql .=' WHERE '.$whereCondition;
    }
    $sql.=' order by id desc';
    $query = $ci->db->query($sql);
    return $query->result_array();
   }

    function project($where=[]){
       //get main CodeIgniter object
       $sql="SELECT  p.*,u.fname AS developer,rp.fname AS project_type,ut.product_name AS unit_type
                FROM project AS p 
                LEFT JOIN USER AS u ON u.id = p.developer
                LEFT JOIN reporting_person AS rp ON rp.id = p.project_type
                LEFT JOIN products AS ut ON ut.id = p.unit_type";

        if (!empty($where['id'])) {
            $sql.=' where p.id="'.$where['id'].'"';
        }else if (!empty($where['user_type'])) {
             $sql.=' where p.seo="'.$where['seo'].'"';
        }else{
           $sql.=' order by id desc';
        }
   
        $ci =& get_instance();
        $query = $ci->db->query($sql);
        return $query->result_array();
   }

