<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {

	public function index()
	{

		$this->load->view('layout/header-index');

		$this->load->view('v_create');

		$this->load->view('layout/footer');
	}
}
