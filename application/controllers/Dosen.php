<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dosen');
	}

	public function index()
	{
		$data['judul']="Tampil Data Dosen";
		$data['tampil']=$this->M_dosen->dsn()->result();	
		$this->load->view('dosen/tampil', $data, FALSE);
	}

	public function input()
	{	
		$data['judul']="Input Dosen Baru";
		$this->load->view('dosen/input', $data, FALSE);
	}

	public function save()
	{
		$data=array(
		'nik'=>$this->input->post('nik'),
		'kode_dosen'=>$this->input->post('kode_dosen'),
		'nama_dosen'=>$this->input->post('nama_dosen'),
		'jk'=>$this->input->post('jk'),
		'email'=>$this->input->post('email'),
		'status'=>$this->input->post('status')
		);

		$this->M_dosen->save($data);
		redirect('dosen','refresh');
	}

	public function update()
	{
		$nik=$this->input->post('nik');
		$data=array(
		'nik'=>$this->input->post('nik'),
		'kode_dosen'=>$this->input->post('kode_dosen'),
		'nama_dosen'=>$this->input->post('nama_dosen'),
		'jk'=>$this->input->post('jk'),
		'email'=>$this->input->post('email'),
		'status'=>$this->input->post('status')
		);

		$this->M_dosen->update($data,$nik);
		redirect('dosen','refresh');
	}

	public function edit()
	{
		$nik=$this->uri->segment(3);
		$data['judul']="Edit Data Dosen";
		$data['edit']=$this->M_dosen->getid($nik)->row_array();
		$this->load->view('dosen/edit', $data, FALSE);
	}

	public function delete()
	{
		$nik=$this->uri->segment(3);
		$this->db->where('nik', $nik);
		$this->db->delete('dosen');
		redirect('dosen','refresh');
	}
}