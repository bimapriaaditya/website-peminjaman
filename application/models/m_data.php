<?php 
 
class M_data extends CI_Model
{
	function ambil_data()
	{
		return $this->db->get('barang');
	}

	/*function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}*/
}
?>	