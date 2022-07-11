<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data['title'] = 'Halaman Jabatan';
        $data['user'] = $this->ModelUser->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jabatan'] = $this->Jabatan_model->get_data('jabatan')->result_array();

        // Pagination
        $this->load->library('pagination');
        // Config 
        $config['base_url'] = 'http://localhost/aplikasi_gaji/admin/jabatan';
        $config['total_rows'] = $this->Jabatan_model->countAllJabatan();
        $config['per_page'] = 9;
        // styling 
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul><nav>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');
        //initialize 
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['jabatan'] = $this->Jabatan_model->getJabatan($config['per_page'], $data['start']);
        if ($this->input->post('keyword')) {
            $data['jabatan'] = $this->Jabatan_model->cariDataJabatan();
        }
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar');
        $this->load->view('admin/jabatan/dataJabatan', $data);
        $this->load->view('admin/footer');
    }
    function tambahData()
    {
        $data['title'] = 'Halaman Jabatan';
        $data['user'] = $this->ModelUser->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('id_jabatan', 'id', 'required');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
        $this->form_validation->set_rules('gaji', 'gaji', 'required');
        $this->form_validation->set_rules('tunjangan', 'tunjangan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar');
            $this->load->view('admin/jabatan/tambah', $data);
            $this->load->view('admin/footer');
        } else {
            $this->Jabatan_model->tambahData();
            $this->session->set_flashdata('flash', '<div class="alert alert-success d-flex align-items-center" role="alert">
            <div>
            <i class="fa fa-check-circle" aria-hidden="true"></i> Data Jabatan Berhasil Ditambahkan
            </div>
          </div>');
            redirect('admin/jabatan');
        }
    }
    function hapusData($id)
    {
        $where = array('id_jabatan' => $id);
        $this->Jabatan_model->hapusData($where, 'jabatan');
        $this->session->set_flashdata('flash', '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <div>
            <i class="fa fa-check-circle" aria-hidden="true"></i> Data Jabatan Berhasil Dihapus
            </div>
          </div>');
        redirect('admin/jabatan');
    }
    function ubahData($id)
    {
        $data['judul'] = "Ubah Data Barang";
        $data['user'] = $this->ModelUser->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jabatan'] = $this->Jabatan_model->getJabatanById($id);
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required');
        $this->form_validation->set_rules('gaji', 'gaji', 'required');
        $this->form_validation->set_rules('tunjangan', 'tunjangan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar');
            $this->load->view('admin/jabatan/ubah', $data);
            $this->load->view('admin/footer');
        } else {
            $this->Jabatan_model->ubahDataBarang();
            $this->session->set_flashdata('flash', '<div class="alert alert-success d-flex align-items-center" role="alert">
            <div>
            <i class="fa fa-check-circle" aria-hidden="true"></i> Data Jabatan Berhasil Diubah 
            </div>
          </div>');
            redirect('admin/jabatan');
        }
    }
}
