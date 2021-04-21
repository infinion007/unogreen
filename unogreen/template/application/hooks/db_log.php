<?php
// If access is requested from anywhere other than index.php then exit
if ( ! defined('BASEPATH')) exit('No direct script access allowed');// Name of Class as mentioned in $hook['post_controller]
class Db_log {
function __construct() {

}

function logQueries() {
	$CI = & get_instance();
	$filepath = APPPATH . 'logs/Query-log-' . date('Y-m-d') . '.php'; 
	$filepath_dml = APPPATH . 'logs/DML_Query-log-' . date('Y-m-d') . '.php';
	// Creating Query Log file with today's date in application/logs folder
	$handle = fopen($filepath, "a+"); 
	$handle_dml = fopen($filepath_dml, "a+");               
	$times = $CI->db->query_times;
	        foreach ($CI->db->queries as $key => $query) {
	        	$val= strstr($query, ' ', true);
				if($val=='insert' || $val=='update' || $val=='INSERT' || $val=='UPDATE'){
		 			$sql = $query . " \n Execution Time:" . $times[$key] . "\n Exection Date & Time:" .date('Y-m-d H:i:s'). "\n IP Address: " .$_SERVER['REMOTE_ADDR'];
	                fwrite($handle_dml, $sql . "\n\n");
				}else{
		  			$sql = $query . " \n Execution Time:" . $times[$key] . "\n Exection Date & Time:" .date('Y-m-d H:i:s'). "\n IP Address: " .$_SERVER['REMOTE_ADDR'];
	                fwrite($handle, $sql . "\n\n"); 
				}	        	
	        }
	fclose($handle);
    }
}
?>