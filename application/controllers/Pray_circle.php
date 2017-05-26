<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pray_circle extends CI_Controller {
    
    private $page_title = "Pray Circle";

	public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$data['page_title'] = $this->page_title;
        $this->load->view('parent/pray_circle', $data);
    }

}