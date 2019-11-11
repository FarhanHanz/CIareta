<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agama extends CI_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_agama');
	}

	public function index()
	{
		$data['judul']="Tampil Data Agama";
		$data['tampil']=$this->M_agama->agm()->result();	
		$this->load->view('agama/tampil', $data, FALSE);
	}

	public function input()
	{	
		$data['judul']="Input Agama Baru";
		$this->load->view('agama/input', $data, FALSE);
	}

	public function save()
	{
		$id=$this->input->post('id_agama');
		$nama=$this->input->post('nama_agama');

		$data=array(
			'id_agama'=>$id,
			'nama_agama'=>$nama
		);

		$this->M_agama->save($data);
		redirect('agama','refresh');
	}

	public function edit()
	{
		$id=$this->uri->segment(3);
		$data['judul']="Edit Data";
		$data['edit']=$this->M_agama->getid($id)->row_array();
		$this->load->view('agama/edit', $data, FALSE);
	}

	public function update()
	{
		$id=$this->input->post('id_agama');
		$nama=$this->input->post('nama_agama');

		$data=array(
			'nama_agama'=>$nama
		);

		$this->M_agama->update($data,$id);
		redirect('agama','refresh');
	}

	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id_agama',$id);
		$this->db->delete('agama');
		redirect('agama','refresh');
	}
}