<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_akun');
        $this->load->helper('url');
    }

    public function index()
    {
        // $data['user'] = $this->db->get_where('tbl_login',['username' =>
        // $this->session->userdata('username')])->row_array();
        $data['title'] = "Daftar Akun | Ormawa SV IPB";
        $data['akun'] = $this->model_akun->get_data('tbl_login')->result();
        // $data['profil'] = $this->model_admin->get_data('tbl_login')->result();
        // $this->model_akun->keamanan();
        $this->load->view('header', $data);
        $this->load->view('komdisma/v_daftar_akun', $data);
        $this->load->view('footer');
    }

    public function tambahakun()
    {
        // $data['user'] = $this->db->get_where('tbl_login',['username' =>
        // $this->session->userdata('username')])->row_array();
        $data['title'] = "Tambah Akun | Ormawa SV IPB";
        // $data['profil'] = $this->model_admin->get_data('tbl_login')->result();
        // $this->model_login->keamanan();
        $this->load->view('header', $data);
        $this->load->view('komdisma/v_tambah_akun', $data);
        $this->load->view('footer');
    }

    public function tambahakunaksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambahakun();
        } else {
            $nama                  = $this->input->post('nama');
            $foto               = $this->input->post('foto');
            $status                 = $this->input->post('status');
            $username                             = $this->input->post('username');
            $password    = $this->input->post('password');

            $data = array(
                'nama'                      => $nama,
                'foto'                      => $foto,
                'status'                        => $status,
                'username'                                   => $username,
                'password'      => $password
            );
            $this->model_akun->insert_data($data, 'tbl_login');
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  			<strong>Akun berhasil ditambahkan!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
            redirect('akun');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('foto', 'foto', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
    }

    public function deletedata($id)
    {
        $where = array('id_login' => $id);
        $this->model_akun->delete_data($where, 'tbl_login');
        //   $data['profil'] = $this->model_admin->get_data('tbl_login')->result();
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Akun berhasil dihapus!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
      </div>');
        redirect('akun');
    }

    public function updatedata($id)
    {
        // $data['user'] = $this->db->get_where('tbl_login',['username' =>
        // $this->session->userdata('username')])->row_array();
        $data['akun_edit'] = $this->db->query("SELECT * FROM tbl_login WHERE id_login='$id'")->result();
        $where = array('id_login' => $id);
        $data['title'] = "Update Data Akun | Ormawa SV IPB";
        // $data['profil'] = $this->model_admin->get_data('tbl_login')->result();
        // $this->model_login->keamanan();
        $this->load->view('header', $data);
        $this->load->view('komdisma/v_edit_akun', $data);
        $this->load->view('footer');
    }

    public function updatedataaksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $id = $this->input->post('id_login');
            $this->updatedata($id);
        } else {
            $id                        = $this->input->post('id_login');
            $nama               = $this->input->post('nama');
            $foto               = $this->input->post('foto');
            $status              = $this->input->post('status');
            $username                     = $this->input->post('username');
            $password    = $this->input->post('password');

            $data = array(
                'nama'              => $nama,
                'foto'              => $foto,
                'status'             => $status,
                'username'                    => $username,
                'password'    => $password
            );

            $where = array(
                'id_login' => $id
            );

            $this->model_akun->update_data($where,$data,'tbl_login');
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Data akun berhasil diupdate!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
      </div>');
            redirect('akun');
        }
    }
}
