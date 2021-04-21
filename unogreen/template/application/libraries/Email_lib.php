<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_lib {

        public function some_method($arr = [])
        {   
	    	if(email_flag==1){
	        	$CI =& get_instance();
	        	$CI->load->library('email');
				$config['protocol']=protocol;
				$config['smtp_host']=smtp_host;
				$config['smtp_port']=smtp_port;
				$config['smtp_timeout']=smtp_timeout;
				$config['smtp_user']=smtp_user;
				$config['smtp_pass']=smtp_pass;
				$config['charset']='utf-8';
				$config['newline']="\r\n";
				$config['wordwrap'] = TRUE;
				$config['mailtype'] = mailtype;
				$CI->email->initialize($config);
				$CI->email->from(form, form_name);
				$CI->email->to($arr['to']);
				$CI->email->cc(cc);
				$CI->email->subject($arr['subject']);
				$CI->email->message($arr['message']);
				if(!empty($arr['file'])){
					$CI->email->attach($arr['file']);
				}
				
				if($CI->email->send()){
					return 1;
				}else{
					return 0;
				}
				
			}else{
				return 0;
			}
        }
}