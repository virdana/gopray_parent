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
    		$data_timeline = $this->get_timeline($active_token);
    		$list_timeline = array();

    		foreach ($data_timeline as $item) {
    			$info = '';
    			$info .= $item->nama_user;
    			if($item->nama_ibadah != 'nothing') {
    				if($item->nama_ibadah == 'Sedekah') {
    					$info .= ' melakukan ibadah '.$item->nama_ibadah;
    					if($item->nominal != 'nothing') {
    						$info .= ' Sebesar Rp '.number_format($item->nominal, 0, ',', '.');
    					}
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
    		$data['data_parent'] = $this->get_parent_info($active_token);
    		$data['data_kerabat'] = $this->get_kerabat($active_token);
    		$data['data_summary'] = $this->build_timeline_summary($data_timeline);
    		$data['data_chart_summary'] = json_encode(
    				array(
    						array('name' => 'nama_1', 'y' => 15),
    						array('name' => 'nama_2', 'y' => 10),
    						array('name' => 'nama_3', 'y' => 35),
    						array('name' => 'nama_4', 'y' => 40),
    					)
    			);


    		// echo "<pre>";
    		// echo $json_obj;
    		// echo "<br>";
    		// print_r($data['data_kerabat']);
    		// echo "</pre>";
    	}
    	else {

    	}

        $this->load->view('parent/timeline', $data);
    }

    public function get_chart_data($id_user) {
    	$result = FALSE;
    	if(!empty($id_user)) {
    		$active_token = warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY);

	    	$total_point = 0;
	    	$info_user = array();
	    	$filtered_data = array();
	    	$data_timeline = $this->build_timeline_summary();

	    	if(isset($data_timeline['user_'.$id_user])) {
	    		$info_user['nama_user'] = $data_timeline['user_'.$id_user]['nama_user'];
	    		$info_user['bulan_daftar'] = date('F Y', strtotime($data_timeline['user_'.$id_user]['tanggal_daftar']));

	    		//calculating total point for this id
	    		foreach ($data_timeline['user_'.$id_user]['aktivitas'] as $aktivitas => $point) {
	    			$total_point = $total_point + $point;
	    		}
	    		//pushing aktivitas into array
	    		foreach ($data_timeline['user_'.$id_user]['aktivitas'] as $aktivitas => $point) {
	    			$filtered_data[] = array(
	    					'name' => $aktivitas,
	    					'y' => ($point/$total_point) * 100,
	    				);
	    		}
	    		$result = $filtered_data;
	    	}
    	}
    	echo json_encode(array('info' => $info_user, 'data' => $result));
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

    private function get_timeline($active_token='') {
    	$result = FALSE;
    	if(!empty($active_token)) {
	    	//fetching parent info
			$url = REST_URL.'users/Parent/timeline?access_token='.$active_token;
			$parameters = array();
			$json_arr = $this->get_contents($active_token, $url, $parameters, 'GET');

			if(isset($json_arr->data)) {
				$result = $json_arr->data;
			}
    	}
    	return $result;
    }

    private function get_aktivitas($active_token='') {
    	$result = FALSE;
    	if(!empty($active_token)) {
	    	//fetching parent info
			$url = REST_URL.'master/aktivitas?access_token='.$active_token;
			$parameters = array();
			$json_arr = $this->get_contents($active_token, $url, $parameters, 'GET');

			if(isset($json_arr->data)) {
				$result = $json_arr->data[0];
			}
    	}
    	return $result;
    }

    private function get_kerabat($active_token='') {
    	$result = FALSE;
    	if(!empty($active_token)) {
	    	//fetching parent info
			$url = REST_URL.'users/parent/list?opsi=kerabat&access_token='.$active_token;
			$parameters = array();
			$json_arr = $this->get_contents($active_token, $url, $parameters, 'GET');

			if(isset($json_arr->data)) {
				$result = $json_arr->data;
			}
    	}
    	return $result;
    }

    private function build_timeline_summary($data_timeline='') {
    	$result = FALSE;
    	$active_token = warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY);

    	if(empty($data_timeline)) {
    		//fetching data_timeline from REST server if data_timeline is not provided initially
    		$data_timeline = $this->get_timeline($active_token);
    	}

    	$summary = array();
    	foreach ($data_timeline as $key => $value) {
    		$id = 'user_'.$value->id_user;
    		if(!isset($summary[$id])) {
    			//jika array summary dengan id ini tidak ditemukan maka:
    			$summary[$id] = array(
    					'id_user' => $value->id_user,
    					'nama_user' => $value->nama_user,
    					'tanggal_daftar' => $value->tanggal_daftar,
    					'aktivitas' => array(
    							$value->nama => $value->point
    						), 
    					);
    		}
    		else {
    			//jika sudah ada array summary dengan id ini maka:
    			if(!isset($summary[$id]['aktivitas'][$value->nama])) {
    				$summary[$id]['aktivitas'][$value->nama] = 0;
    			} 
    			else {
    				$summary[$id]['aktivitas'][$value->nama] = $summary[$id]['aktivitas'][$value->nama] + $value->point;
    			}
    		}
    	}
    	//sorting array by key
    	ksort($summary);
    	$sorting = array();
    	foreach ($summary as $key => $value) {
    		$sorting = $value['aktivitas'];
    		ksort($sorting);
    		$summary[$key]['aktivitas'] = $sorting;
    	}
		// echo "<pre>";	print_r($summary); echo "</pre>";	
    	$result = $summary;
    	return $result;
    }

}