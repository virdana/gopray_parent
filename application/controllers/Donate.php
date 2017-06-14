<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Donate extends CI_Controller {
    
    private $page_title = "Donate";

	public function __construct() {
        parent::__construct();
		$this->load->helper('encrypt_helper');
    }

    public function index() {
    	$active_token = warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY);

    	$data['page_title'] = $this->page_title;
    	$data['data_parent'] = $this->get_parent_info($active_token);

        $this->load->view('parent/donate', $data);
    }

    private function get_contents($active_token='', $url='', $parameters='', $method='GET') {
    	$result = FALSE;
    	if(!empty($active_token) && !empty($url)) {
    		$post_data = http_build_query($parameters);
    		$options = array(
    					'http' => array (
    							'method' => $method,
    							'header' => 'Content-type: application/x-www-form-urlencoded',
    							'content' => $post_data
    						)
    				);
    		$context = stream_context_create($options);
    		$json_obj = file_get_contents($url, FALSE, $context);
    		$json_arr = json_decode($json_obj);
    		
    		$result = $json_arr;
    	}
		return $result;
    }

    private function get_parent_info($active_token='') {
    	$result = FALSE;
    	if(!empty($active_token)) {
	    	//fetching parent info
			$url = REST_URL.'users/Parent?access_token='.$active_token;
			$parameters = array();
			$json_arr = $this->get_contents($active_token, $url, $parameters, 'GET');

			if(isset($json_arr->data)) {
				$result = $json_arr->data[0];
			}
    	}
    	return $result;
    }

}