<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Siswa extends CI_Controller {
	
	function index(){

		$data['siswa'] = $this->m_siswa->lihat_siswa()->result();

		$this->load->view('layout/header-2');

		$this->load->view('v_siswa',$data);

		$this->load->view('layout/footer-2');
	}
	function __construct(){
		parent::__construct();		

		$this->load->model('m_siswa');
	}
 
}
?>