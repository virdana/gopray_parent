<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signin extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
        $this->load->helper('encrypt_helper');
    }

    public function index() {
        $this->load->view('parent/signin');
    }

    public function do_signin() {
    	$response = array('status' => 0);
    	$params = $this->input->post();

    	if(!empty($params['email']) && !empty($params['password'])) {
    		//send data to API here
    		$url = REST_URL.'users/Parent/login';
    		$parameters = array(
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
    		
    		if(!empty($json_arr->access_token)) {
	    		//setting token session
	    		$this->start_token_session($json_arr->access_token);
	    		$response = array('status' => 1, 'message' => 'Anda berhasil Sign in!');
	    	}
	    	else {
	    		$response = array('status' => 0, 'message' => 'Email atau Password anda salah!');
	    	}
    	}
    	echo json_encode($response);
    }

    private function start_token_session($token='') {
    	$result = FALSE;
    	if($token!='') {
    		//saving user's token
    		$enc_token = warpmc_encrypt($token, WARP_ENC_KEY);
    		$session_data = array('access_token' => $enc_token);
    		$set_session = $this->session->set_userdata($session_data);
    		$result = TRUE;
    	}
    	return $result;
    }

    private function enctest(){
    	$string = "woow";
    	$enc_string = warpmc_encrypt($string, WARP_ENC_KEY);
    	$dec_string = warpmc_decrypt($enc_string, WARP_ENC_KEY);
		$enctest = array('enc' => $enc_string, 'dec' => $dec_string);
		echo json_encode($enctest);
    }

}