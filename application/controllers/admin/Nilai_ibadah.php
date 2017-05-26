<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Nilai_ibadah extends CI_Controller {
    
    private $page_title = "Nilai Ibadah";

	public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$data['page_title'] = $this->page_title;
        $this->load->view('admin/nilai_ibadah', $data);
    }

}