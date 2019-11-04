<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_calon_mahasiswa extends CI_model {

	public function cmh()
	{
		return $this->db->get('mahasiswa');
	}

	public function save($data)
	{
		 return $this->db->insert('mahasiswa',$data);
	}

	public function getid($id)
	{
		$param=array('no_pendaftaran' => $no_pendaftaran);
		return $this->db->get_where('mahasiswa',$param);
	}

	public function update($data,$no_pendaftaran)
	{
		$this->db->where('no_pendaftaran',$no_pendaftaran);
		$this->db->update('mahasiswa',$data);
	}
}