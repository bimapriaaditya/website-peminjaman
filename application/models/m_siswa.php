<?php 
 
class M_siswa extends CI_Model{
	function lihat_siswa(){
		return $this->db->get('siswa');
	}
}
?>