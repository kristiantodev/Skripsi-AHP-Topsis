<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_aplikasi extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Tentang Aplikasi | Aplikasi Siswa Bermasalah';
		$data['session'] = $this->db->get_where('tbl_user', ['username' =>
		$this->session->userdata('username')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('tentang_aplikasi', $data);
		$this->load->view('templates/footer');
	}
}
