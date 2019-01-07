<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_barang extends CI_Controller {

	public function index()
	{
		$data['barang'] = $this->m_input_barang->ambil_siswa()->result();

		$this->load->view('layout/header-2');

		$this->load->view('v_input_barang');

		$this->load->view('layout/footer-2');
	}

	function __construct()
	{
		parent::__construct();	

		$this->load->model('m_input_barang');

		$this->load->helper('url');
	}

	function tambah_aksi()
	{
		$id = $this->input->post('id');
		$kode_barang = $this->input->post('kode_barang');
		$nama_barang = $this->input->post('nama_barang');
		$jumlah_barang = $this->input->post('jumlah_barang');
 
		$data = array(
			'id' => $id,
			'kode_barang' => $kode_barang,
			'nama_barang' => $nama_barang,
			'jumlah_barang' => $jumlah_barang
			);
		$this->m_input_barang->input_data($data,'barang');
		redirect('belajar/index');
	}


}
