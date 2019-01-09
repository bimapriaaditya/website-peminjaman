<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_siswa extends CI_Controller {

	public function index()
	{

		$this->load->view('layout/header-2');

		$this->load->view('v_input_siswa');

		$this->load->view('layout/footer-2');
	}

	function __construct()
	{
		parent::__construct();	

		$this->load->model('m_input_siswa');

		$this->load->helper('url');
	}

	function tambah_aksi()
	{
		$id = $this->input->post('id');
		$nis_siswa = $this->input->post('nis_siswa');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
 
		$data = array(
			'id' => $id,
			'nis_siswa' => $nis_siswa,
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan
			);
		$this->m_input_siswa->input_data($data,'siswa');
		redirect('siswa/index');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_input_siswa->hapus_siswa($where,'siswa');
		redirect('siswa/index');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['siswa'] = $this->m_input_siswa->edit_data($where,'siswa')->result();
		$this->load->view('v_edit_siswa',$data);
	}

	function update()
	{
		$nis_siswa = $this->input->post('nis_siswa');
		$nama = $this->input->post('nama');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
	 
		$data = array(
			'nis_siswa' => $nis_siswa,
			'nama' => $nama,
			'kelas' => $kelas,
			'jurusan' => $jurusan
		);
	 
		$where = array(
			'nis_siswa' => $nis_siswa
		);
	 
		$this->m_input_siswa->update_data($where,$data,'siswa');
		redirect('siswa/index');	
	}
}
?>