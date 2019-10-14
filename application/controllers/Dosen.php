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
		$data['tampil']=$this->M_dosen->tampil()->result();	
		$this->load->view('dosen/tampil', $data, FALSE);
	}

	public function input()
	{	
		$data['judul']="Input Dosen Baru";
		$this->load->view('dosen/input', $data, FALSE);
	}

	public function save()
	{
		$kode=$this->input->post('kode_jurusan');
		$nama=$this->input->post('nama_jurusan');

		$data=array(
			'kode_jurusan'=>$kode,
			'nama_jurusan'=>$nama
		);

		$this->M_jurusan->save($data);
		redirect('jurusan','refresh');
	}
}