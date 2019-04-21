<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("v_home");
	}
}
