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

	function edit_data($where,$table)
	{			
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}

?>