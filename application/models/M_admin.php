<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function tampil()
	{
		return $this->db->get('admin');
	}

	public function save($data)
	{
		$this->db->insert('admin',$data);
	}
}