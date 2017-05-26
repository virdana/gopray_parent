<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sticker_store extends CI_Controller {
    
    private $page_title = "Sticker Store";

	public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$data['page_title'] = $this->page_title;
        $this->load->view('parent/sticker_store', $data);
    }

}