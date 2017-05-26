<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sinkronisasi_jadwal extends CI_Controller {
    
    private $page_title = "Sinkronisasi Jadwal";

	public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$data['page_title'] = $this->page_title;
        $this->load->view('parent/sinkronisasi_jadwal', $data);
    }

}