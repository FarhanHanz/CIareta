<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_controller {

	public function index()
	{
		echo "Belum memanggil apapun, ini masih di index";
	}

	public function datadiri()
	{
		echo "Tampil data diri";
	}

	public function input()
	{
		$this->load->view('input');
	}

	public function proses()
	{
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$notelp=$this->input->post('notelp');
		echo "<pre>
		Nama 		: $nama
		Alamat 		: $alamat
		No. Telp 	: $notelp
		</pre>";
	}
}