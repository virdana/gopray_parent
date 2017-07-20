<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Collection extends CI_Controller {
    
    private $page_title = "Collection";

	public function __construct() {
        parent::__construct();
        $this->load->helper('encrypt_helper');
    }

    public function index() {
        $active_token = warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY);
        $data['page_title'] = $this->page_title;
        $data['data_parent'] = $this->get_parent_info($active_token);
        $data['data_kerabat'] = $this->get_kerabat($active_token);

        $this->load->view('parent/collection', $data);
    }

    public function get_trophy() {
        $result = array('status' => 0);
        $params = $this->input->get();

        //preparing parameter to get
        $num_to_get = 7;

        $date_now = date('d-m-Y');
        for($i=0; $i<$num_to_get; $i++){
            $month_year = date('m:Y', strtotime('-'.$i.' months', strtotime($date_now)));
            $months_to_get[] = $month_year;
        }

        if(isset($params['idUser'])) {
            $active_token = warpmc_decrypt($_SESSION['access_token'], WARP_ENC_KEY);
            $id_user = $params['idUser'];
            // $bulan = '06';
            // $tahun = '2017';

            $data = array();
            foreach ($months_to_get as $month) {
                //parameter = id_user:bulan:tahun;
                // $parameter = $id_user.':'.$bulan.':'.$tahun;
                $parameter = $id_user.':'.$month;
                $url = REST_URL.'master/periode?parameter='.$parameter.'&access_token='.$active_token;

                $parameters = array();
                $json_arr = $this->get_contents($active_token, $url, $parameters, 'GET');

                //perhitungan poin untuk menentukan trofi
                if($json_arr->point > 2000) {
                    $color = 'platinum';
                }
                else if(($json_arr->point > 1500) && ($json_arr->point <= 2000)) {
                    $color = 'gold';
                }
                else if(($json_arr->point > 1000) && ($json_arr->point <= 1500)) {
                    $color = 'silver';
                }
                else if(($json_arr->point > 500) && ($json_arr->point <= 1000)) {
                    $color = 'bronze';
                }
                else {
                    $color = 'none';
                }
                
                $data_month = str_replace(':', '-', '01:'.$month);
                $data[] = array(
                            'month' => date('F Y', strtotime($data_month)), 
                            'point' => ($json_arr->point ? $json_arr->point : 0),
                            'color' => $color
                            );
            }

            if(!empty($data)) {
                $result = array('status' => 1, 'data' => $data);
            }
        }
        echo json_encode($result);
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

    

}