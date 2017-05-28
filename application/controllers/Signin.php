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
    	$response = array('status' => FALSE);
    	$params = $this->input->post();
    	$string = "woow";
    	$enc_string = warpmc_encrypt($string, WARP_ENC_KEY);
    	$dec_string = warpmc_decrypt($enc_string, WARP_ENC_KEY);
		$enctest = array('enc' => $enc_string, 'dec' => $dec_string);

    	if(!empty($params['email']) && !empty($params['password'])) {
    		//send data to API here
    		$url = 'http://103.27.207.92:88/users/Parent/login';
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
    		
    		//setting token session
    		$response = $json_arr;
    		// $this->start_token_session($json_arr->access_token);
    	}
    	else {
    		$response = array('message' => 'Email atau Password anda salah');
    	}
    	echo json_encode($enctest);
    }

    private function start_token_session($token='') {
    	if($token!='') {
    		//saving user's token
    	}
    }

}