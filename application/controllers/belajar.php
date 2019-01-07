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

	// function tambah(){
	// 	$this->load->view('v_input');
	// }

	// function tambah_aksi(){
	// 	$id = $this->input->post('id');
	// 	$kode_barang = $this->input->post('kode_barang');
	// 	$nama_barang = $this->input->post('nama_barang');
	// 	$jumlah_barang = $this->input->post('jumlah_barang');
	// }
	// $data = array(
	// 		'id' => $id,
	// 		'kode_barang' => $kode_barang,
	// 		'nama_barang' => $nama_barang,
	// 		'jumlah_barang' => $jumlah_barang,
	// 		);
	// 	$this->m_data->input_data($data,'barang');
	// 		redirect('belajar/index');

}
?>