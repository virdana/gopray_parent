<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sticker extends CI_Controller {
    
    private $page_title = "Sticker";

	public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$data['page_title'] = $this->page_title;
        $this->load->view('parent/sticker', $data);
    }

}