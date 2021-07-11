<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_sekolah extends CI_Model
{
	public function edit($id_sekolah)
	{
		$data = [
			"nama_sekolah" => $this->input->post('nama_sekolah', true),
			"alamat" => $this->input->post('alamat', true),
			"slogan" => $this->input->post('slogan', true),
			"telepon" => $this->input->post('telepon', true),
			"email" => $this->input->post('email', true),
			"perizinan" => $this->input->post('perizinan', true)
		];

		$this->db->where(['id_sekolah' => $id_sekolah]);
		$this->db->update('tbl_sekolah', $data);
	}

	public function tampil_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_sekolah');
		return $this->db->get();
	}
}
