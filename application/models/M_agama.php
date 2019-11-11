<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_agama extends CI_Model {

	public function agm()
	{
		return $this->db->get('agama');
	}

	public function save($data)
	{
		$this->db->insert('agama',$data);
	}

	public function getid($id)
	{
		$param=array('id_agama'=>$id);
		return $this->db->get_where('agama',$param);
	}

	public function update($data,$kode)
	{
		$this->db->where('id_agama',$kode);
		$this->db->update('agama',$data);
	}
}