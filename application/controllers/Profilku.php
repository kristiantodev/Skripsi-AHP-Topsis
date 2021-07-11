<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profilku extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_profilku');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Profilku | Aplikasi Siswa Bermasalah';

		$this->db->join('tbl_level', 'tbl_user.id_level = tbl_level.id_level');
		$data['session'] = $this->db->get_where('tbl_user', ['username' =>
		$this->session->userdata('username')])->row_array(); //session as

		$data['datauser'] = $this->model_profilku->tampil_data($this->session->userdata('id_user'));

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/profilku/profil', $data);
		$this->load->view('templates/footer');
	}

	public function edit_profil($id = null)
	{
		$data['judul'] = 'Edit Profil | Aplikasi Siswa Bermasalah';
		$data['session'] = $this->db->get_where('tbl_user', ['username' =>
		$this->session->userdata('username')])->row_array(); //session as
		$data['level'] = $this->db->get('tbl_level')->result_array();

		$data['datauser'] = $this->db->get_where('tbl_user', ['id_user' => $id])->row();

		//set rules validasi
		$this->form_validation->set_rules('nama_user', 'Nama_user', 'required', [
			'required' => 'Nama tidak boleh kosong.'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'required' => 'Email tidak boleh kosong.'
		]);

		//Jika form validasi salah

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('admin/profilku/edit_profil', $data);
			$this->load->view('templates/footer');

			//jika form validasi benar
		} else {
			$id_user = $this->input->post('id');
			$this->model_profilku->edit_profil();
			redirect('profilku');
		}
	}

	public function change_password()
	{
		$data['judul'] = 'Change Password | Aplikasi Siswa Bermasalah';
		$data['session'] = $this->db->get_where('tbl_user', ['username' =>
		$this->session->userdata('username')])->row_array();
		$data['datauser'] = $this->model_profilku->tampil_data($this->session->userdata('id_user'));

		$this->form_validation->set_rules('old_password', 'Old_password', 'required', [
			'required' => 'Masukan Password',
		]);
		$this->form_validation->set_rules('new_password', 'Password', 'required|min_length[5]|matches[passconfirm]', [
			'required' => 'Masukan Password',
			'matches' => 'Password Dont Match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('passconfirm', 'Password', 'required|matches[new_password]', [
			'required' => 'Password tidak boleh kosong',
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('admin/profilku/change_password', $data);
			$this->load->view('templates/footer');
		} else {
			$old_password = password_hash($this->input->post('old_password'), PASSWORD_DEFAULT);
			$new_password = password_hash($this->input->post('new_password'), PASSWORD_DEFAULT);

			//cek kesamaan password dan inputan
			if ($old_password != $data['session']['password']) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger background-danger" role="alert">Wrong Password !</div>');
				redirect('profilku');
			} else {
				if ($old_password == $new_password) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger background-danger" role="alert">New Password cannot be the same as Old Password !!</div>');
					redirect('profilku');
				} else {
					//password sudah ok
					$password_hash = $new_password;

					$this->db->set('password', $password_hash);
					$this->db->where('username', $this->session->userdata('username'));
					$this->db->update('tbl_user');

					$this->session->set_flashdata('message', '<div class="alert alert-primary background-primary" role="alert">Password Diubah !!</div>');
					redirect('profilku');
				}
			}
		}
	}
}
