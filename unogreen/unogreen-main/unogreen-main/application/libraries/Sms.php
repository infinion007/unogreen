<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms {

        public function some_method($arr = [])
        {   
	    	if(sms_flag==1){
	        	 

                 $smsurl = 'http://makemysms.in/api/sendsms.php?username='.username.'&password='.sms_password.'&sender='.sender.'&mobile='.$arr['mobile'].'&type=1&product=1&message='.$arr['sms'].'';	 	

	 	            $ch = curl_init();
                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_URL, $smsurl);
                    $data = curl_exec($ch);
                    $response = json_decode($data);
				if($response->status=="Success"){
					return 1;
				}else{
					return 0;
				}
				
			}else{
				return 0;
			}
        }
}