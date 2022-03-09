<?php 
class Beranda extends CI_Controller{
	public function index()
	{
		$data['judul'] = 'Beranda';
		$this->load->view('templates/header', $data);
		$this->load->view('beranda/index');
		$this->load->view('templates/footer');
	}
} 


 ?>