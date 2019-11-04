<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_calon_mahasiswa');
	}

	public function index()
	{
		$data['judul']="Tampil Data Calon Mahasiswa";
		$data['tampil']=$this->M_calon_mahasiswa->cmh()->result();	
		$this->load->view('mahasiswa/tampil', $data, FALSE);
	}

	public function input()
	{	
		$data['judul']="Input Calon Mahasiswa Baru";
		$this->load->view('mahasiswa/input', $data, FALSE);
	}

	public function save()
	{
		$data=array(
		'no_pendaftara'=>$this->input->post('no_pendaftaran'),
		'nama'=>$this->input->post('nama'),
		'tempat_lahir'=>$this->input->post('tempat_lahir'),
		'tgl_lahir'=>$this->input->post('tgl_lahir'),
		'jk'=>$this->input->post('jk'),
		'alamat'=>$this->input->post('alamat'),
		'no_telp'=>$this->input->post('no_telp'),
		'id_agama'=>$this->input->post('id_agama'),
		'email'=>$this->input->post('email'),
		'kode_jurusan'=>$this->input->post('kode_jurusan')
		);

		$this->M_caon_mahasiswa->save($data);
		redirect('mahasiswa','refresh');
	}

	public function update()
	{
		$no_pendaftaran=$this->input->post('no_pendaftaran');
		$data=array(
		'no_pendaftara'=>$this->input->post('no_pendaftaran'),
		'nama'=>$this->input->post('nama'),
		'tempat_lahir'=>$this->input->post('tempat_lahir'),
		'tgl_lahir'=>$this->input->post('tgl_lahir'),
		'jk'=>$this->input->post('jk'),
		'alamat'=>$this->input->post('alamat'),
		'no_telp'=>$this->input->post('no_telp'),
		'id_agama'=>$this->input->post('id_agama'),
		'email'=>$this->input->post('email'),
		'kode_jurusan'=>$this->input->post('kode_jurusan')
		);

		$this->M_calon_mahasiswa->update($data,$no_pendaftaran);
		redirect('mahasiswa','refresh');
	}

	public function edit()
	{
		$no_pendaftaran=$this->uri->segment(3);
		$data['judul']="Edit Data Calon Mahasiswa";
		$data['edit']=$this->M_calon_mahasiswa->getid($no_pendaftaran)->row_array();
		$this->load->view('mahasiswa/edit', $data, FALSE);
	}

	public function delete()
	{
		$no_pendaftaran=$this->uri->segment(3);
		$this->db->where('no_pendaftaran', $no_pendaftaran);
		$this->db->delete('mahasiswa');
		redirect('mahasiswa','refresh');
	}
}