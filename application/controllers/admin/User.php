<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data['title'] = 'Halaman Data User';
        $data['pekoms'] = $this->ModelUser->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->ModelUser->get_data('user')->result_array();

        // Pagination
        $this->load->library('pagination');
        // Config 
        $config['base_url'] = 'http://localhost/aplikasi_gaji/admin/user';
        $config['total_rows'] = $this->ModelUser->countAllUser();
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
        $data['user'] = $this->ModelUser->getUser($config['per_page'], $data['start']);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/user/sidebar');
        $this->load->view('admin/user/dataUser', $data);
        $this->load->view('admin/footer');
    }
    function hapusData($id)
    {
        $where = array('id_user' => $id);
        $this->ModelUser->hapusData($where, 'user');
        $this->session->set_flashdata('flash', '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <div>
            <i class="fa fa-check-circle" aria-hidden="true"></i> Data Jabatan Berhasil Dihapus
            </div>
          </div>');
        redirect('admin/user');
    }
    function ubahData($id)
    {
        $data['judul'] = "Ubah Data Barang";
        $data['pekoms'] = $this->ModelUser->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->ModelUser->getUserById($id);
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/user/sidebar');
            $this->load->view('admin/user/ubah', $data);
            $this->load->view('admin/footer');
        } else {
            $this->ModelUser->ubahDataUser();
            $this->session->set_flashdata('flash', '<div class="alert alert-success d-flex align-items-center" role="alert">
            <div>
            <i class="fa fa-check-circle" aria-hidden="true"></i> Data Jabatan Berhasil Diubah 
            </div>
          </div>');
            redirect('admin/user');
        }
    }

    public function detail($id)
    {
        $data['judul'] = "Detail User";
        $data['pekoms'] = $this->ModelUser->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->ModelUser->getUserById($id);
        $this->load->view('admin/header', $data);
        $this->load->view('admin/user/sidebar');
        $this->load->view('admin/user/detail', $data);
        $this->load->view('admin/footer');
    }
}
