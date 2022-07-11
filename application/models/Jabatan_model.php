<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan_model extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function tambahData()
    {
        $data = array(
            'id_jabatan' => $this->input->post('id_jabatan', true),
            'jabatan' => $this->input->post('jabatan', true),
            'gaji' => $this->input->post('gaji', true),
            'tunjangan' => $this->input->post('tunjangan', true),
        );
        $this->db->insert('jabatan', $data);
    }
    public function hapusData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function getJabatanById($id)
    {
        return $this->db->get_where('jabatan', ['id_jabatan' => $id])->row_array();
    }
    public function ubahDataBarang()
    {
        $data = array(
            'jabatan' => $this->input->post('jabatan', true),
            'gaji' => $this->input->post('gaji', true),
            'tunjangan' => $this->input->post('tunjangan', true)
        );

        $this->db->where('id_jabatan', $this->input->post('id_jabatan'));
        $this->db->update('jabatan', $data);
    }
    public function getJabatan($limit, $start)
    {
        return $this->db->get('jabatan', $limit, $start)->result_array();
    }
    public function countAllJabatan()
    {
        return $this->db->get('jabatan')->num_rows();
    }
    public function cariDataJabatan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->or_like('jabatan', $keyword);
        return $this->db->get('jabatan')->result_array();
    }
}
