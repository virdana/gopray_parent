<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Update_profil extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
        $this->load->helper('encrypt_helper');
    }

    public function index() {
    	$active_token = warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY);
    	$data['data_parent'] = $this->get_parent_info($active_token);

        $this->load->view('parent/update_profil', $data);
    }

    public function do_update() {
    	$active_token = warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY);

    	$params = $this->input->post();
    	$data_post = array(
    			'method' => 2,
    			'nama' => $params['nama_depan'].' '.$params['nama_belakang'],
    			'email' => $params['email'],
    			'no_hp' => $params['no_hp'],
    			'hubungan' => $params['hubungan'],
    			'password' => $params['password']
    		);

    	$temp_upload = $this->temp_upload('foto');
    	if($temp_upload['status'] == TRUE) {
    		$result = $this->post_data_parent($active_token, $temp_upload['data'], $data_post);
    	}

    	echo "<pre>";
    	print_r($temp_upload);
    	echo "<br><br>";
    	print_r($result);
    	echo "</pre>";

    	// print_r($params);
    	// $foto = $_FILES['foto'];
    	// print_r($foto);
    }

    private function temp_upload($field_name) {
    	$config['upload_path'] = PATH_UPLOAD;
    	$config['allowed_types'] = 'gif|jpg|png';
    	$this->load->library('upload', $config);

    	if(!$this->upload->do_upload($field_name)) {
    		$status = 0;
    		$data = $this->upload->display_errors();
    	}
    	else {
    		$status = 1;
    		$data = $this->upload->data();
    	}
    	return array('status' => $status, 'data' => $data);
    }

    private function post_data_parent($active_token, $data_upload, $data_post) {
    	$result = FALSE;
    	if(!empty($active_token)) {
    		$url = REST_URL.'/users/parent/profile?access_token='.$active_token;

    		//preping multipart header
    		define('MULTIPART_BOUNDARY', '--------------------------'.microtime(true));
    		$header = 'Content-Type: multipart/form-data; boundary='.MULTIPART_BOUNDARY;

    		$file_contents = file_get_contents($data_upload['full_path']);

    		//prepping image field
    		$content = "--".MULTIPART_BOUNDARY
    					."\r\n"
						."Content-Disposition: form-data; name='foto'; filename='".$data_upload['orig_name']."'"
						."\r\n"
						."Content-type: ".$data_upload['file_type']
						."\r\n\r\n"
						."bar\r\n";
    		//prepping post field
			foreach ($data_post as $key => $value) {
				$content .= "--".MULTIPART_BOUNDARY."\r\n"
							."Content-Disposition: form-data; name='".$key."'"
							."\r\n\r\n"
							."bar\r\n";
			}
			//signal end of request
			$content .= "--".MULTIPART_BOUNDARY."--\r\n";

			$context = stream_context_create(array(
					'http' => array(
							'method' => 'POST',
							'header' => $header,
							'content' => $content
						)
				));
			echo $content;
			$result = file_get_contents($url, false, $context);
    	}
    	return $result;
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