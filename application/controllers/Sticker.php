<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sticker extends CI_Controller {
    
    private $page_title = "Sticker";

	public function __construct() {
        parent::__construct();
        $this->load->helper('encrypt_helper');
        $this->load->helper('user_auth_helper');
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
        $id_stiker = $selected_sticker->id_stiker;
        $qty = 1;
        $subtotal = $selected_sticker->harga * $qty;
        $basket = $selected_sticker->nama_stiker.', '
                    .$selected_sticker->harga.'.00, '
                    .$qty.', '
                    .$subtotal.'.00 ';

        //Doku Payment Params
        define('BASKET', $basket);
        define('SHARED_KEY', 'S7c3q2E8S7T7');
        define('STOREID', '10783684');
        define('TRANSIDMERCHANT', date('ynj').$id_stiker.date('Gis'));
        define('AMOUNT', ($selected_sticker->harga * $qty).'.00');
        define('WORDS', sha1(AMOUNT.SHARED_KEY.TRANSIDMERCHANT));
        

        $data['payment_data'] = array(
                'cname' => $data['data_parent']->nama,
                'cemail' => $data['data_parent']->email,
                'cmphone' => $data['data_parent']->no_hp
            );

        $this->load->view('parent/sticker_detail', $data);
    }

    public function buy() { /*THIS METHOD IS NOT USED. FOR TESTING PURPOSE ONLY*/
        $params = $this->input->post();
        $id_stiker = $params['id_stiker'];
        $selected_sticker = array();

        if(!empty($id_stiker)) {

            $active_token = warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY);
            $data_user = $this->get_parent_info($active_token);
            
            define('SHARED_KEY', 'S7c3q2E8S7T7');
            define('STOREID', '10783684');
            define('TRANSIDMERCHANT', date('ynj').$id_stiker.date('Gis'));

            $list_stiker = $this->get_stickers($active_token);
            // print_r($list_stiker); die();
            foreach ($list_stiker as $stiker) {
                if($id_stiker == $stiker->id_stiker) {
                    $selected_sticker = $stiker;
                }
            }

            $amount = $selected_sticker->harga.'.00';
            $words = sha1($amount.SHARED_KEY.TRANSIDMERCHANT);

            $action = "https://apps.myshortcart.com/payment/request-payment/";
            $payment_data = array(
                "BASKET"            => $selected_sticker->nama_stiker.', '
                                        .$selected_sticker->harga.'.00, '
                                        .'1, '
                                        .$selected_sticker->nama_stiker.'.00 ',
                "STOREID"           => STOREID,
                "TRANSIDMERCHANT"   => TRANSIDMERCHANT,
                "AMOUNT"            => $amount,
                "URL"               => 'http://gopray.id/',
                "WORDS"             => $words,

                "CNAME"             => $data_user->nama,
                "CEMAIL"            => $data_user->email,
                "CWPHONE"           => $data_user->no_hp,
                "CHPHONE"           => $data_user->no_hp,
                "CMPHONE"           => $data_user->no_hp,
                "CCAPHONE"          => $data_user->no_hp,
                "CADDRESS"          => '',
                "CZIPCODE"          => '',
                "SADDRESS"          => '',
                "SZIPCODE"          => '',
                "SCITY"             => '',
                "SSTATE"            => '',
                "SCOUNTRY"          => '',
                "BIRTHDATE"         => '',
            );

            $result = $this->get_contents($active_token, $action, $payment_data, 'POST');
        }
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