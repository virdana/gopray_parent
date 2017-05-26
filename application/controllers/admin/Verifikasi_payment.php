<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Verifikasi_payment extends CI_Controller {
    
    private $page_title = "Verifikasi Payment";

	public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$data['page_title'] = $this->page_title;
        $this->load->view('admin/verifikasi_payment', $data);
    }

}