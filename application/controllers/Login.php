<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Login - Aplikasi Siswa Bermasalah';

		$this->form_validation->set_rules(
			'username',
			'Username',
			'required|trim',
			['required' => 'Username tidak boleh kosong']
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim',
			['required' => 'Password tidak boleh kosong']
		);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/login', $data);
		} else {
			// validasi success underscor private
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// kueri from tabel user where field email
		$user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();

		// jika usernya ada
		if ($user) {
			// jika usernya aktif
			//cek password
			if ($user['active'] == 1) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'username' => $user['username'],
						'nama_user' => $user['nama_user'],
						'email' => $user['email'],
						'image' => $user['image'],
						'active' => $user['active'],
						'id_user' => $user['id_user'], //simpan data username & level kedalam session
						'id_level' => $user['id_level'],
					];
					$this->session->set_userdata($data); //Nyimpan data ke session
					if ($user['id_level'] == 1) { //session  
						redirect('admin');
					} else if ($user['id_level'] == 2) {
						redirect('guru_walikelas');
					} else {
						redirect('guru_bk');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" align="center" role="alert">Password salah !!</div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" align="center" role="alert">Akun tidak aktif !!</div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" align="center" role="alert">Akun ini tidak terdaftar !!</div>');
			redirect('login');
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules(
			'name',
			'Name',
			'required|trim',
			['required' => 'Nama tidak boleh kosong']
		);
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email|is_unique[tbl_user.email]',
			[
				'required' => 'Email tidak boleh kosong',
				'is_unique' => 'Email sudah terdaftar'
			]
		);
		$this->form_validation->set_rules(
			'username',
			'Username',
			'required|trim',
			['required' => 'Username tidak boleh kosong']
		);
		$this->form_validation->set_rules(
			'password1',
			'Password',
			'required|trim|min_length[3]|matches[password2]',
			[
				'required' 		=> 'Password tidak boleh kosong',
				'matches' 		=> 'Password tidak sama',
				'min_length' 	=> 'Password terlalu pendek'
			]
		);
		$this->form_validation->set_rules(
			'password2',
			'Repeat Password',
			'required|trim|matches[password1]',
			[
				'required'		=> 'Password tidak boleh kosong',
				'matches' 		=> 'Password tidak sama'
			]
		);

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/register');
		} else {
			date_default_timezone_set('Asia/Jakarta');
			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'nama_user' => htmlspecialchars($this->input->post('name', true)),
				'email' =>  htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.png',
				'id_level' => 1,
				'active' => 1,
				'date_created' => date('Y-m-d')
			];

			$this->db->insert('tbl_user', $data);
			$this->session->flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun sudah terdaftar!</div>');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id_level');

		$this->session->set_flashdata('message', '<div class="alert alert-success" align="center" role="alert">
        Logout Berhasil!</div>');
		redirect('login');
	}
}
