<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Donate extends CI_Controller {
    
    private $page_title = "Donate";

	public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$data['page_title'] = $this->page_title;
        $this->load->view('parent/donate', $data);
    }

}