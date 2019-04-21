<?php

class Profilguru extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_profilguru');

	}

	function index(){
		$this->load->view('guru/v_profilguru');
	}
}
