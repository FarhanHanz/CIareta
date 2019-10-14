<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
	}

	public function index()
	{
		$data['judul']="Tampil Data Admin";
		$data['tampil']=$this->M_admin->tampil()->result();	
		$this->load->view('admin/tampil', $data, FALSE);
	}

	public function input()
	{	
		$data['judul']="Input Admin Baru";
		$this->load->view('admin/input', $data, FALSE);
	}

	public function save()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$data=array(
			'username'=>$username,
			'password'=>$password
		);

		$this->M_admin->save($data);
		redirect('admin','refresh');
	}
}