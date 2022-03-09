<?php 
class Akun extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
	{
		$data['judul'] = 'Account';

		$data['akun'] = $this->Akun_model->ambilSemuaAkun();
		$this->load->view('templates/header', $data);
		$this->load->view('akun/index', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if($this->form_validation->run() == FALSE){
        	$this->load->view('templates/header');
            $this->load->view('akun/create');
            $this->load->view('templates/footer');
        }else{
            $this->Akun_model->createAkun();
            redirect('akun');
        }

	}

	public function edit($id){
        $data['title'] = 'Ubah Account';
        $data['account'] = $this->Akun_model->getAkunById($id);
        $data['judul'] = 'Ubah Account';
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('akun/edit', $data);
            $this->load->view('templates/footer');
        }else{
            $this->Akun_model->ubahAkun();
            redirect('akun');
        }
        
    }

    public function delete($id){
        $this->Akun_model->deleteAkun($id);
        redirect('akun');
    }
}
?>