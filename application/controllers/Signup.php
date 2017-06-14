<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signup extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('parent/signup');
    }

    public function do_signup() {
    	$response = array('status' => FALSE);
    	$params = $this->input->post();

    	if(!empty($params['email']) && !empty($params['password']) && !empty($params['re_password'])) {
			//checking password confirmation (backend side)
    		$password_ok = ($params['password'] == $params['re_password']) ? TRUE : FALSE;

			if($password_ok) {
	    		//send data to API here
	    		$url = REST_URL.'users/Parent/daftar';
	    		$parameters = array(
	    					'nama' => $params['nama'],
	    					'kerabat' => $params['kerabat'],
	    					'no_hp' => $params['no_hp'],
	    					'email' => $params['email'],
	    					'password' => $params['password']
						);
	    		$post_data = http_build_query($parameters);

	    		$options = array(
	    					'http' => array (
	    							'method' => 'POST',
	    							'header' => 'Content-type: application/x-www-form-urlencoded',
	    							'content' => $post_data
	    						)
	    				);
	    		$context = stream_context_create($options);
	    		$json_obj = file_get_contents($url, FALSE, $context);
	    		$json_arr = json_decode($json_obj);
	    		
	    		
	    		if($json_arr->return == TRUE) {
	    			$response = array('status' => 1, 'message' => 'Akun berhasil didaftarkan');	
	    		} else {
	    			$response = array('status' => 0, 'message' => ucfirst($json_arr->error_message));	
	    		}
	    		/*echo "<pre>";
	    		print_r($json_arr);
	    		echo "</pre>";
	    		die();*/
			}
			else {
    			$response = array('status' => 0, 'message' => 'Konfirmasi Password anda tidak valid');
			}
    	}
    	else {
    		$response = array('status' => 0, 'message' => 'Email atau Password anda tidak valid');
    	}
    	echo json_encode($response);
    }

}