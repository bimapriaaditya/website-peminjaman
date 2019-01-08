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

	function hapus_siswa($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}

?>