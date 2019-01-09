<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		
		parent::__construct();		

		$this->load->model('m_data');
			
		$this->load->helper('url');
	}

	function index(){
		$data['barang'] = $this->m_data->ambil_data()->result();

		$this->load->view('layout/header-2');

		$this->load->view('v_barang',$data);

		$this->load->view('layout/footer-2');
	}
}
?>