<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_calon_mahasiswa extends CI_model {

	public function cmh()
	{
		return $this->db->get('calon_mahasiswa');
	}

	public function save($data)
	{
		 return $this->db->insert('calon_mahasiswa',$data);
	}

	public function getid($no_pendaftaran)
	{
		$param=array('no_pendaftaran' => $no_pendaftaran);
		return $this->db->get_where('calon_mahasiswa',$param);
	}

	public function update($data,$no_pendaftaran)
	{
		$this->db->where('no_pendaftaran',$no_pendaftaran);
		$this->db->update('calon_mahasiswa',$data);
	}
}