<?php

class Kanak extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_kanak');

	}

	function index(){
		$this->load->view('ortu/v_kanak');
	}
}
