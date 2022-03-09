<?php 
	class Akun_model extends CI_Model{
    public function ambilSemuaAkun(){
        return $this->db->get('account')->result_array();
    }

    public function createAkun(){
        $data = [
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "name" => $this->input->post('name', true),
            "role" => $this->input->post('role', true)
        ];

        $this->db->insert('account', $data);
    }

    public function getAkunById($id){
        return $this->db->get_where('account', ['id' => $id])->row_array();
    }

    public function ubahAkun(){
        $data = [
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
            "name" => $this->input->post('name', true),
            "role" => $this->input->post('role', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('account', $data);
    }

    public function deleteAkun($id){
        $this->db->where('id', $id);
        $this->db->delete('account');
    }


 }

 ?>