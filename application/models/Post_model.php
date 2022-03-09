<?php 
	class Post_model extends CI_Model{
    public function ambilSemuaPost(){
        return $this->db->get('post')->result_array();
    }

    public function createPost(){
        $data = [
            "title" => $this->input->post('title', true),
            "content" => $this->input->post('content', true),
            "date" => $this->input->post('date', true),
            "username" => $this->input->post('username', true)
        ];

        $this->db->insert('post', $data);
    }

     public function getPostById($id){
        return $this->db->get_where('post', ['idpost' => $id])->row_array();
    }

    public function ubahPost(){
        $data = [
            "title" => $this->input->post('title', true),
            "content" => $this->input->post('content', true),
            "date" => $this->input->post('date', true),
            "username" => $this->input->post('username', true)
        ];
        $this->db->where('idpost', $this->input->post('idpost'));
        $this->db->update('post', $data);
    }

     public function deletePost($id){
        $this->db->where('idpost', $id);
        $this->db->delete('post');
    }
}

 ?> 

