<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_model {

	public function tampil()
	{
		return $this->db->get('dosen');
	}

	public function save($data)
	{
		$this->db->insert('dosen',$data);
	}
}