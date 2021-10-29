<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function komdisma()
	{
		$data['title']="Ormawa SV IPB";
		$this->load->view('header',$data);
		$this->load->view('komdisma/v_beranda',$data);
		$this->load->view('footer');
	}
}
