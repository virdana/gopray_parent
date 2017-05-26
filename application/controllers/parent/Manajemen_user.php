<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manajemen_user extends CI_Controller {
    
    private $page_title = "Manajemen User";

	public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$data['page_title'] = $this->page_title;
        $this->load->view('parent/manajemen_user', $data);
    }

}