<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_sekolah');
		// $this->load->library('session');

		// $data['session'] = $this->db->get_where('tbl_level', ['level' =>
		// $this->session->userdata('level')])->row_array();
		// if ($this->session->userdata('level') != "Admin") {
		// 	$this->session->set_flashdata('message', '<div align="center">Silahkan Login Terlebih Dahulu !! </div>');
		// 	redirect('login');
		// }
	}

	public function index()
	{
		// $this->load->view('dashboard_sementara');
		$data['judul'] = 'Aplikasi Siswa Bermasalah';
		$data['session'] = $this->db->get_where('tbl_user', ['username' =>
		$this->session->userdata('username')])->row_array();
		$data['sekolah'] = $this->model_sekolah->tampil_data()->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates/footer');
	}
}
