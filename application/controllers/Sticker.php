<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sticker extends CI_Controller {
    
    private $page_title = "Sticker";

	public function __construct() {
        parent::__construct();
        $this->load->helper('encrypt_helper');
    }

    public function index() {
        $active_token = warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY);

        $data['page_title'] = $this->page_title;
        $data['data_parent'] = $this->get_parent_info($active_token);
        $data['list_paket_sticker'] = $this->get_paket_sticker($active_token);
        /*echo "<pre>";
        print_r($data['list_paket_sticker']);
        echo "</pre>";*/
        $this->load->view('parent/sticker', $data);
    }

    public function get_paket() {
        $result = array('status' => 0);
        $params = $this->input->get();

        if(isset($params['nama'])) {
            $active_token = warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY);
            $nama_paket = urldecode($params['nama']);
            $list_paket_sticker = $this->get_paket_sticker($active_token);

            foreach ($list_paket_sticker as $paket) {
                if($paket->nama_paket == $nama_paket) {
                    $stickers =  $paket->list_stiker;
                }
            }
            $result = array('status' => 1, 'data' => $stickers);
        }
        echo json_encode($result);
    }

    public function detail() {
        $active_token = warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY);
        $data['page_title'] = $this->page_title;
        $data['data_parent'] = $this->get_parent_info($active_token);

        $selected_sticker = array();
        $stickers = array();
        $params = $this->input->get();

        if(isset($params['nama'])) {
            $nama_stiker = urldecode($params['nama']);
            $list_stiker = $this->get_stickers($active_token);
/*
            echo "<pre> PAKET STIKER";
            print_r($list_stiker);
            echo "</pre>";*/

            foreach ($list_stiker as $stiker) {
                if($nama_stiker == $stiker->nama_stiker) {
                    $selected_sticker = $stiker;
                    $stickers = $stiker->items;
                }
            }
            
        }
        $data['selected_sticker'] = $selected_sticker;
        $data['list_stickers'] = $stickers;
        $this->load->view('parent/sticker_detail', $data);
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

    private function get_paket_sticker($active_token='') {
        $result = FALSE;
        if(!empty($active_token)) {
            //fetching paket sticker
            $url = REST_URL.'master/paketstiker?access_token='.$active_token;
            $parameters = array();
            $json_arr = $this->get_contents($active_token, $url, $parameters, 'GET');

            if(isset($json_arr->data)) {
                $result = $json_arr->data;
            }
        }
        return $result;
    }

    private function get_stickers($active_token='') {
    	$result = FALSE;
    	if(!empty($active_token)) {
	    	//fetching stickers
			$url = REST_URL.'master/stiker?access_token='.$active_token;
			$parameters = array();
			$json_arr = $this->get_contents($active_token, $url, $parameters, 'GET');

			if(isset($json_arr->data)) {
				$result = $json_arr->data;
			}
    	}
    	return $result;
    }

}