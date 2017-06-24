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
        $result = array('status' => 0);
        $active_token = warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY);
        $active_pass = isset($_SESSION['pass']) ? warpmc_decrypt($_SESSION['pass'], WARP_ENC_KEY) : '';

        /*echo "<pre>";
        // print_r ($_FILES['foto']);
        echo $active_pass;
        echo "</pre>";
        die();*/

    	$params = $this->input->post();
        if(!empty($params['password']) && !empty($active_pass)) {
            $valid_pass = $this->validate_pass($params['password'], $active_pass);

            if($valid_pass) {
                $data_post = array(
                        'access_token' => $active_token,
                        'method' => 4,
                        'nama' => $params['nama'],
                        'email' => $params['email'],
                        'no_hp' => $params['no_hp'],
                        'kerabat' => $params['hubungan'],
                        'password' => $params['password_baru']
                    );

                /* VALIDATING NEW PASSWORD 
                    & CHECKING IF USER WANTS TO CHANGE PASSWORD */
                if(!empty($params['password_baru'])){
                    if($params['password_baru'] == $params['re_password_baru']) {
                        // echo "Password sudah sama";
                    }
                    else {
                        $result = array('status' => 0, 'message' => 'Konfirmasi password tidak valid!');
                        echo json_encode($result);
                        exit();
                        // echo "Password tidak sama";
                    }
                }
                else {
                    unset($data_post['password']);
                    // echo "Tidak mengganti password";
                }

                /* CHECKING IF IMAGE FILE IS EXIST */
                if($_FILES['foto']['size'] > 0) {
                    // uploading foto profil into local server
                    // then continue sending POST request into REST server
                   $temp_upload = $this->temp_upload('foto'); 
                   $data_upload = $temp_upload['data'];
                }
                else {
                   $data_upload = '';
                }

                /* POSTING INTO REST SERVER */
        		$response = $this->post_data_parent($active_token, $data_upload, $data_post);
                if($response->return == TRUE) {
                    //remove temporary stored image
                    if($_FILES['foto']['size'] > 0) {
                        unlink(PATH_UPLOAD.$_FILES['foto']['name']);
                    }

                    //fill data parent untuk reload sidebar info
                    $data_parent = $this->get_parent_info($active_token);
                    $result = array('status' => 1, 'message' => 'Profil berhasil diupdate!', 'data' => $data_parent);
                } else {
                    $result = array('status' => 0, 'message' => 'Terjadi kesalahan dalam proses update!');
                }
            } 
            else {
                //old password is not valid  
                $result = array('status' => 0, 'message' => 'Password security salah!');
                echo json_encode($result);
                exit();
            } 
        } // endif empty pass
        else {
            $result['message'] = 'Password tidak boleh kosong!';
        }
        echo json_encode($result);
    }

    private function validate_pass($input_pass, $active_pass) {
        $result = FALSE;
        if(!empty($input_pass) && !empty($active_pass)) {
            if($input_pass === $active_pass) {
                $result = TRUE;
            }
        }
        return $result;
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
    		$url = REST_URL.'/users/parent/profile';

    		//preping multipart header
    		define('MULTIPART_BOUNDARY', '------'.microtime(true));
    		$header = 'Content-Type: multipart/form-data; boundary='.MULTIPART_BOUNDARY;
            $content = '';

            if(!empty($data_upload)) {
                $file_contents = file_get_contents($data_upload['full_path']);
                //prepping image field
                $content = "--".MULTIPART_BOUNDARY
                            ."\r\n"
                            ."Content-Disposition: form-data; name='gambar'; filename='".$data_upload['orig_name']."'"
                            ."\r\n"
                            ."Content-type: ".$data_upload['file_type']
                            ."\r\n\r\n"
                            .$file_contents."\r\n";
            }

    		//prepping post field
			foreach ($data_post as $key => $value) {
				$content .= "--".MULTIPART_BOUNDARY."\r\n"
							."Content-Disposition: form-data; name='".$key."'"
							."\r\n\r\n"
							.$value."\r\n";
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
            /*echo "<pre>";
            echo $header;
            echo $content;
            echo "</pre>";*/
			$result = file_get_contents($url, false, $context);
    	}
    	return json_decode($result);
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