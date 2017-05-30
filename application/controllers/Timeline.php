<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Timeline extends CI_Controller {
    
    private $page_title = "Timeline";

	public function __construct() {
        parent::__construct();
        $this->load->helper('encrypt_helper');
        if(!isset($_SESSION['access_token'])) {
        	if(empty($_SESSION['access_token'])) {
        		redirect("signin");
        	}
        }
    }

    public function index() {
    	$data['page_title'] = $this->page_title;

    	if(!empty($_SESSION['access_token'])) {
    		$active_token = warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY);

    		//fetching data timeline
    		$url = 'http://103.27.207.92:88/users/Parent/timeline?access_token='.$active_token;
    		$parameters = array();
    		$json_obj = $this->get_data_parent($active_token, $url, $parameters, 'GET');
    		$json_arr = json_decode($json_obj);

    		$data_timeline = $json_arr->data;
    		$list_timeline = array();
    		foreach ($data_timeline as $item) {
    			$info = '';
    			$info .= $item->nama_user;
    			if($item->nama_ibadah != 'nothing') {
    				if($item->nama_ibadah == 'Sedekah') {
    					$info .= ' melakukan ibadah '.$item->nama_ibadah.' Sebesar Rp '.$item->nominal;
    				} else {
    					$info .= ' melakukan ibadah '.$item->nama_ibadah;
    					if($item->bersama != 'nothing'){
    						$info .= ' '.$item->bersama;
    					}
    				}
    			}
    			if($item->tempat != 'nothing') {
    				$info .= ' di '.$item->tempat;
    			}

    			$profile_img = ($item->foto_user != 'null') ? $item->foto_user : URL_IMG.'logo-go-pray.png'; 

    			$list_timeline[] = array(
    					'foto' => $profile_img,
    					'info' => $info,
    					'time' => date('d-M-y', strtotime($item->tanggal)).' '.date('H:i A', strtotime($item->jam))
    				);
    		}
    		$data['list_timeline'] = $list_timeline;
    		
    		/*echo "<pre>";
    		echo $json_obj;
    		echo "<br>";
    		print_r($json_arr);
    		echo "</pre>";*/
    	}
    	else {

    	}

        $this->load->view('parent/timeline', $data);
    }

    private function get_data_parent($token='', $url='', $parameters='', $method='GET') {
    	$result = FALSE;
    	if(!empty($token) && !empty($url)) {
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
    		$result = $json_obj;
    	}
		return $result;
    }

}