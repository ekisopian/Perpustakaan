<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');

class M_pinjam extends CI_Model{


	function gopinjam($data){
		$this->db->insert('tb_pinjam',$data);
	}


}