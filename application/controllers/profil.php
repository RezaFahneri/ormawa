<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller{
    public function index()
    {
        // $data['user'] = $this->db->get_where('tbl_profil',['username' =>
        // $this->session->userdata('username')])->row_array();
        $data['title'] = "Profil | Ormawa SV IPB";
        // $data['akun'] = $this->model_akun->get_data('tbl_profil')->result();
        $this->load->model('model_profil');
        $data['profil'] = $this->model_profil->get_data('tbl_profil')->result();
        // $this->model_akun->keamanan();
        $this->load->view('header', $data);
        $this->load->view('komdisma/v_profil', $data);
        $this->load->view('footer');
    }

    public function detail($id)
	{
   		$data['title']="Detail Profil | Ormawa SV IPB";
    	$detail = $this->model_profil->detail_data($id);
    	$data['detail'] = $detail;
    	$this->load->view('header',$data);
    	$this->load->view('komdisma/v_detail_profil',$data);
    	$this->load->view('footer');
    
   }

    public function tambahprofil()
    {
        // $data['user'] = $this->db->get_where('tbl_profil',['username' =>
        // $this->session->userdata('username')])->row_array();
        $data['title'] = "Tambah Profil | Ormawa SV IPB";
        // $data['profil'] = $this->model_admin->get_data('tbl_profil')->result();
        // $this->model_profil->keamanan();
        $this->load->view('header', $data);
        $this->load->view('komdisma/v_tambah_profil', $data);
        $this->load->view('footer');
    }

    public function tambahprofilaksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->tambahprofil();
        } else {
            $nama_ormawa                  = $this->input->post('nama_ormawa');
            $sejarah               = $this->input->post('sejarah');
            $visi_misi                 = $this->input->post('visi_misi');
            $sekretariat                             = $this->input->post('sekretariat');
            $kontak    = $this->input->post('kontak');

            $data = array(
                'nama_ormawa'                      => $nama_ormawa,
                'sejarah'                      => $sejarah,
                'visi_misi'                        => $visi_misi,
                'sekretariat'                                   => $sekretariat,
                'kontak'      => $kontak
            );
            $this->model_profil->insert_data($data, 'tbl_profil');
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  			<strong>Profil berhasil ditambahkan!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
            redirect('profil');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_ormawa', 'nama_ormawa', 'required');
        $this->form_validation->set_rules('sejarah', 'sejarah', 'required');
        $this->form_validation->set_rules('visi_misi', 'visi_misi', 'required');
        $this->form_validation->set_rules('sekretariat', 'sekretariat', 'required');
        $this->form_validation->set_rules('kontak', 'kontak', 'required');
    }

    public function deletedata($id)
    {
        $where = array('id_profil' => $id);
        $this->model_profil->delete_data($where, 'tbl_profil');
        //   $data['profil'] = $this->model_admin->get_data('tbl_profil')->result();
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Profil berhasil dihapus!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
      </div>');
        redirect('profil');
    }

    public function updatedata($id)
    {
        //   $data['user'] = $this->db->get_where('tbl_login',['username' =>
        //   $this->session->userdata('username')])->row_array();
        $data['title'] = "Edit Data Profil | Ormawa SV IPB";
        $data['edit_profil'] = $this->db->query("SELECT * FROM tbl_profil WHERE id_profil='$id'")->result();
        $where = array('id_profil' => $id);
        // $data['edit_profil'] = $this->model_profil->edit_data($where,'tbl_profil')->result();
        //   $data['profil'] = $this->model_profil->get_data('tbl_profil')->result();
        $this->load->view('header', $data);
        $this->load->view('komdisma/v_edit_profil', $data);
        $this->load->view('footer');
    }

    public function updatedataaksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $id = $this->input->post('id_profil');
            $this->updatedata($id);
        } else {
            $id                        = $this->input->post('id_profil');
            $nama_ormawa               = $this->input->post('nama_ormawa');
            $sejarah          = $this->input->post('sejarah');
            $visi_misi               = $this->input->post('visi_misi');
            $sekretariat              = $this->input->post('sekretariat');
            $kontak                     = $this->input->post('kontak');

            $data = array(
                'nama_ormawa'              => $nama_ormawa,
                'sejarah'         => $sejarah,
                'visi_misi'              => $visi_misi,
                'sekretariat'             => $sekretariat,
                'kontak'                    => $kontak,
            );

            $where = array(
                'id_profil' => $id
            );

            $this->model_profil->update_data($where , $data, 'tbl_profil' );
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Profil berhasil diupdate!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times</span>
        </button>
      </div>');
            redirect('profil');
        }
    }
}
