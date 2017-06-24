<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signout extends CI_Controller {
    
	public function __construct() {
        parent::__construct();
    }

    public function index() {
        redirect("signin");
    }

    public function do_signout() {
        if(isset($_SESSION['access_token'])) {
            unset($_SESSION['access_token']);
        }
        redirect("signin");
    }

}