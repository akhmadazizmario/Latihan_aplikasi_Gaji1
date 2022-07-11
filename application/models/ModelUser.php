<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function simpanData($data = null)
    {
        $this->db->insert('user', $data);
    }
    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function hapusData($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id_user' => $id])->row_array();
    }
    public function ubahDataUser()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'alamat' => $this->input->post('alamat', true),
            'email' => $this->input->post('email', true),
            'nik' => $this->input->post('nik', true)
        );

        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }
    public function getUser($limit, $start)
    {
        return $this->db->get('user', $limit, $start)->result_array();
    }
    public function countAllUser()
    {
        return $this->db->get('user')->num_rows();
    }
    public function cariDataUser()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->or_like('user', $keyword);
        return $this->db->get('user')->result_array()();
    }
    public function get_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
