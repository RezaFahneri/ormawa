<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proker extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_proker','model_akun','model_profil','model_login');
        $this->load->helper('url');
		if($this->session->userdata('logged_in') == false){
			redirect('login');
		}
    }

    public function index()
    {
        // $data['user'] = $this->db->get_where('tbl_profil',['username' =>
        // $this->session->userdata('username')])->row_array();
        $data['title'] = "Program Kerja | Ormawa SV IPB";
        // $data['akun'] = $this->model_akun->get_data('tbl_profil')->result();
        $data['proker'] = $this->model_proker->get_data('tbl_proker')->result();
        // $this->model_akun->keamanan();
        $this->load->view('v_template',$data);
        $this->load->view('komdisma/v_proker', $data);
        $this->load->view('footer',$data);
    }

    public function tambahproker()
    {
        // $data['user'] = $this->db->get_where('tbl_profil',['username' =>
        // $this->session->userdata('username')])->row_array();
        $data['title'] = "Tambah Program Kerja | Ormawa SV IPB";
        // $data['profil'] = $this->model_admin->get_data('tbl_profil')->result();
        // $this->model_profil->keamanan();
        $this->load->view('v_template',$data);
        $this->load->view('komdisma/v_tambah_proker', $data);
        $this->load->view('footer');
    }

    public function tambahprokeraksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambahproker();
        } else {
            $id                        = $this->input->post('id_proker');
            $nama_ormawa               = $this->input->post('nama_ormawa');
            $nama_proker          = $this->input->post('nama_proker');
            $deskripsi               = $this->input->post('deskripsi');
            $target              = $this->input->post('target');
            $tanggal                     = $this->input->post('tanggal');
            $status                     = $this->input->post('status');

            $data = array(
                'nama_ormawa'              => $nama_ormawa,
                'nama_proker'         => $nama_proker,
                'deskripsi'              => $deskripsi,
                'target'             => $target,
                'tanggal'                    => $tanggal,
                'status'                    => $status,
            );

            $this->model_proker->insert_data($data, 'tbl_proker');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Profil berhasil diupdate!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
      </div>');
            redirect('proker');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_ormawa', 'nama_ormawa', 'required');
        $this->form_validation->set_rules('nama_proker', 'nama_proker', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('target', 'target', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
    }

    public function deletedata($id)
    {
        $where = array('id_proker' => $id);
        $this->model_proker->delete_data($where, 'tbl_proker');
        //   $data['profil'] = $this->model_admin->get_data('tbl_profil')->result();
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Program Kerja berhasil dihapus!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
      </div>');
        redirect('proker');
    }

    public function updatedata($id)
    {
        //   $data['user'] = $this->db->get_where('tbl_login',['username' =>
        //   $this->session->userdata('username')])->row_array();
        $data['title'] = "Edit Data Program Kerja | Ormawa SV IPB";
        $data['edit_proker'] = $this->db->query("SELECT * FROM tbl_proker WHERE id_proker='$id'")->result();
        $where = array('id_proker' => $id);
        // $data['edit_proker'] = $this->model_proker->update_data($where, 'tbl_proker')->result();
        //   $data['profil'] = $this->model_profil->get_data('tbl_profil')->result();
        $this->load->view('v_template',$data);
        $this->load->view('komdisma/v_edit_proker', $data);
        $this->load->view('footer');
    }

    public function updatedataaksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $id = $this->input->post('id_proker');
            $this->updatedata($id);
        } else {
            $id                        = $this->input->post('id_proker');
            $nama_ormawa               = $this->input->post('nama_ormawa');
            $nama_proker          = $this->input->post('nama_proker');
            $deskripsi               = $this->input->post('deskripsi');
            $target              = $this->input->post('target');
            $tanggal                     = $this->input->post('tanggal');
            $status                     = $this->input->post('status');

            $data = array(
                'nama_ormawa'              => $nama_ormawa,
                'nama_proker'         => $nama_proker,
                'deskripsi'              => $deskripsi,
                'target'             => $target,
                'tanggal'                    => $tanggal,
                'status'                    => $status,
            );

            $where = array(
                'id_proker' => $id
            );

            $this->model_proker->update_data($where, $data, 'tbl_proker');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Profil berhasil diupdate!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
      </div>');
            redirect('proker');
        }
    }
}
