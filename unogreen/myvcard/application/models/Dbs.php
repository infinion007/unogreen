<?php
    class Dbs extends CI_Model{
        public function add($tb,$values)
        {
            $this->db->insert($tb,$values);
            $insert_id = $this->db->insert_id();
            return $insert_id;
// echo '<pre>'; print_r($insert_id); exit;
   // return  $insert_id?true:false;
            
        } 
        public function fetch($tb,$where)
        {
             $this->db->select('*');
           $this->db->where($where); // Must be id
            $query = $this->db->get($tb);
               $result = $query->result_array();
               return $result;

        }  
          public function fetch_all($tb)
        {
             
            $query = $this->db->get($tb);
               $result = $query->result_array();
               return $result;

        }
        public function add1($tb,$values)
        {
            $this->db->insert($tb,$values);

        }

        public function delete($tb1,$where)
        {
            $this->db->delete($tb1,$where);
        }   
        public function edit($tb2,$where2,$set)
        {
            $this->db->update($tb2,$set,$where2);
        }  

        public function insert($data = array()){
        // echo '<pre>'; print_r($data); exit;
        $insert = $this->db->insert_batch('multiple_image',$data);
        $insert_id = $this->db->insert_id();
// echo '<pre>'; print_r($insert_id); exit;
   return  $insert_id?true:false;
        
        // return $insert?true:false;
    }    

            public function insert1($data = array()){
        // echo '<pre>'; print_r($data); exit;
        $insert = $this->db->insert_batch('multiple_image2',$data);
        $insert_id = $this->db->insert_id();
// echo '<pre>'; print_r($insert_id); exit;
   return  $insert_id?true:false;
        
        // return $insert?true:false;
    }   
public function insert_document($data = array()){
        // echo '<pre>'; print_r($data); exit;
        $insert = $this->db->insert_batch('multiple_document',$data);
        $insert_id = $this->db->insert_id();
// echo '<pre>'; print_r($insert_id); exit;
   return  $insert_id?true:false;
        
        // return $insert?true:false;
    }
                public function insert_second($data = array()){
        // echo '<pre>'; print_r($data); exit;
        $insert = $this->db->insert_batch('multiple_image3',$data);
        $insert_id = $this->db->insert_id();
// echo '<pre>'; print_r($insert_id); exit;
   return  $insert_id?true:false;
        
        // return $insert?true:false;
    }    
     public function uploadData($video_info)
        {
            $this->db->insert('video',$video_info);

        }
        
         public function uploadData1($tb,$values)
        {
            $this->db->insert($tb,$values);

        }



    }
?>