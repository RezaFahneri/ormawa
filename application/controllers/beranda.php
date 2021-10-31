<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('model_proker','model_akun','model_profil');
        $this->load->helper('url');
    }

	public function komdisma()
	{
		$data['title']="Ormawa SV IPB";
		// $data['jumlah_akun'] = $this->db->query("SELECT count FROM tbl_login")->result();
		$this->load->view('header',$data);
		$this->load->view('komdisma/v_beranda',$data);
		$this->load->view('footer');
	}
}
