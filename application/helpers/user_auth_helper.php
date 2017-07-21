<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists("run_auth")) {
	
	// User authentication Function
	function run_auth(){
	    if(!isset($_SESSION['access_token'])) {
        	if(empty($_SESSION['access_token'])) {
        		redirect("signin");
        	}
        }
	}
	
	run_auth();
}

/* End of file user_auth_helper.php */
/* Location: ./application/helpers/user_auth_helperr.php */

