<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon_mahasiswa extends CI_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_calon_mahasiswa');
	}

	public function index()
	{
		$data['judul']="Tampil Data Calon calon_mahasiswa";
		$data['tampil']=$this->M_calon_mahasiswa->cmh()->result();	
		$this->load->view('calon_mahasiswa/tampil', $data, FALSE);
	}

	public function input()
	{	
		$data['judul']="Input Calon Mahasiswa Baru";
		$this->load->view('calon_mahasiswa/input', $data, FALSE);
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
		redirect('calon_mahasiswa','refresh');
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
		redirect('calon_mahasiswa','refresh');
	}

	public function edit()
	{
		$no_pendaftaran=$this->uri->segment(3);
		$data['judul']="Edit Data Calon calon_mahasiswa";
		$data['edit']=$this->M_calon_mahasiswa->getid($no_pendaftaran)->row_array();
		$this->load->view('calon_mahasiswa/edit', $data, FALSE);
	}

	public function delete()
	{
		$no_pendaftaran=$this->uri->segment(3);
		$this->db->where('no_pendaftaran', $no_pendaftaran);
		$this->db->delete('calon_mahasiswa');
		redirect('calon_mahasiswa','refresh');
	}
}