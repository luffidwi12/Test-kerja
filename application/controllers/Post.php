<?php 
class Post extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
	public function index()
	{
		$data['judul'] = 'Post';

		$data['post'] = $this->Post_model->ambilSemuaPost();
		$this->load->view('templates/header', $data);
		$this->load->view('post/index', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');

        if($this->form_validation->run() == FALSE){
        	$this->load->view('templates/header');
            $this->load->view('post/create');
            $this->load->view('templates/footer');
        }else{
            $this->Post_model->createPost();
            redirect('post');
        }

	}

	public function edit($id){
        $data['title'] = 'Ubah Post';
        $data['post'] = $this->Post_model->getPostById($id);
        $data['judul'] = 'Ubah Post';
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Content', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('post/edit', $data);
            $this->load->view('templates/footer');
        }else{
            $this->Post_model->ubahPost();
            redirect('post');
        }
        
    }

    public function delete($id){
        $this->Post_model->deletePost($id);
        redirect('post');
    }
} 


 ?>