<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$this->load->view('layout/header-index');

		$this->load->view('index');

		$this->load->view('layout/footer');
	}
}