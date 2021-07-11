<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_periode extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_periode');
        $this->db->order_by('tbl_periode.tahun_akademik', 'asc');
        $this->db->order_by('tbl_periode.semester', 'asc');
        return $this->db->get();
    }

    public function data_id($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_periode');
        $this->db->where(['id_periode' => $id]);
        return $this->db->get('')->row();
    }

    public function tambah_periode()
    {
        $data = [
            "tahun_akademik" => $this->input->post('tahun_akademik', true),
            "semester" => $this->input->post('semester', true),
            "status" => 0
        ];
        $this->db->insert('tbl_periode', $data);
    }

    public function edit_periode()
    {
        $id_periode = $this->input->post('id');

        $data = [
            "tahun_akademik" => $this->input->post('tahun_akademik', true),
            "semester" => $this->input->post('semester', true),
        ];
        $this->db->where(['id_periode' => $id_periode]);
        $this->db->update('tbl_periode', $data);
    }

    public function hapus_periode($id)
    {
        $this->db->where('id_periode', $id);
        $this->db->delete('tbl_periode');
    }

    public function hapus_alternatif($id_periode)
    {
        $this->db->where('id_periode', $id_periode);
        $this->db->delete('tbl_alternatif');
    }

    //aktifkan status 
    public function aktif_status($id)
    {
        $data = [
            "status" => 1
        ];
        $this->db->where(['id_periode' => $id]);
        $this->db->update('tbl_periode', $data);
    }

    //nonaktifkan status 
    public function nonaktif_status($id)
    {
        $data = [
            "status" => 0
        ];
        $this->db->where(['id_periode' => $id]);
        $this->db->update('tbl_periode', $data);
    }

    // ======================DATA ALTERNATIF======================


    public function alternatif($id_periode)
    {
        $this->db->select('*');
        $this->db->from('tbl_alternatif');
        $this->db->join('tbl_periode', 'tbl_alternatif.id_periode = tbl_periode.id_periode');
        $this->db->join('tbl_siswa', 'tbl_alternatif.id_siswa = tbl_siswa.id_siswa');
        $this->db->join('tbl_walikelas', 'tbl_alternatif.id_walikelas = tbl_walikelas.id_walikelas');
        $this->db->join('tbl_guru', 'tbl_walikelas.id_guru = tbl_guru.id_guru');
        $this->db->where('tbl_alternatif.id_periode', $id_periode);
        $this->db->order_by('tbl_siswa.nis', 'asc');
        return $this->db->get();
    }

    public function tampil_siswa($filter)
    {

        // $tes = 2;
        // $filter = $tes;
        $this->db->select('*');
        $this->db->from('tbl_alternatif');
        $this->db->join('tbl_periode', 'tbl_alternatif.id_periode = tbl_periode.id_periode');
        $this->db->join('tbl_siswa', 'tbl_alternatif.id_siswa = tbl_siswa.id_siswa');
        $this->db->join('tbl_walikelas', 'tbl_alternatif.id_walikelas = tbl_walikelas.id_walikelas');
        $this->db->join('tbl_guru', 'tbl_walikelas.id_guru = tbl_guru.id_guru');
        $this->db->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_siswa.id_kelas');
        $this->db->where('tbl_siswa.id_siswa', $filter['id_siswa']);
        $this->db->group_by('tbl_siswa.id_siswa');
        $this->db->order_by('tbl_siswa.nama_siswa', 'asc');
        return  $this->db->get()->row_array();
    }


    public function tambah_alternatif($data = array())
    {
        $data = [
            "id_periode" => $this->input->post('id_periode', true),
            "id_siswa" => $this->input->post('siswa', true),
        ];
        $this->db->insert('tbl_alternatif', $data);
    }
}
