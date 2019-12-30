<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myadmin extends CI_Controller {

function __construct(){
	parent:: __construct();
	$this->load->database('latihan_ci');
	$this->load->model('modeladmin');
}
	public function index()
	{
		$data['title']="Halaman Admin";
		$this->load->view('header',$data);
		$this->load->view('dashboard');
		$this->load->view('footer');
	}
	public function tambahdata(){
		$data['title'] = "Kelola data Mahasiswa";
		$data['tampil']= $this->modeladmin->tampil_data();
		$this->load->view('header',$data);
		$this->load->view('modul/tambahdata', $data);
		$this->load->view('footer');
	}
	
	public function aksi_tambahdata()
	{
		$nama = $this->input->post('nama');
		$npm = $this->input->post('npm');
		$semester = $this->input->post('semester');

		$data = array(
			'int_npm' => $npm,
			'str_nama' => $nama,
			'int_semester' => $semester
		);

		$this->modeladmin->tambah_data('data_mahasiswa', $data);
		
	}
}
