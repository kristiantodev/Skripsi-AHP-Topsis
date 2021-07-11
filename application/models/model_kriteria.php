<?php
defined('BASEPATH') or exit('No direct script access allowed');

class model_kriteria extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_kriteria');
        return $this->db->get();
    }

    public function total_bobot()
    {
        $sql = "SELECT SUM(bobot) as bobot FROM tbl_kriteria";
        $result = $this->db->query($sql);
        return $result->row()->bobot;
    }
}
