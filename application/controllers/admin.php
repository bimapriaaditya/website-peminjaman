<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		
		$this->load->view('layout/header-2');

		$this->load->view('v_admin');

		$this->load->view('layout/footer-2');		
	}
}
?>
