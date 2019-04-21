<?php

class Matapelajaran extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_matapelajaran');

	}

	function index(){
		$this->load->view('guru/v_matapelajaran');
	}
}
