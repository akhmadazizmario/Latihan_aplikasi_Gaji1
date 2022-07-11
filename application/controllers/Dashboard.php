<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data['title'] = "Halaman Dashboard";
        $data['user'] = $this->ModelUser->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $karyawan = $this->db->query('SELECT * FROM user');
        $data['karyawan'] = $karyawan->num_rows();
        $jabat = $this->db->query('SELECT * FROM jabatan');
        $data['jabat'] = $jabat->num_rows();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer');
    }
}
