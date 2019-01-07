<?php
class M_input_siswa extends CI_Model
{
	function ambil_siswa()
	{
		return $this->db->get('siswa');
	}

	function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
}

?>