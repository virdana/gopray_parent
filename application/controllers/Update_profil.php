<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Update_profil extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('parent/update_profil');
    }

    public function do_update() {
    	
    }

}