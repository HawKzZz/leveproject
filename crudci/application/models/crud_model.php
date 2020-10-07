<?php

    class Crud_model extends CI_Model{

        public function index()
        {            
            return $this->db->get("tb_pessoa")->result_array();
        }

        public function index1()
        {            
            return $this->db->get("tb_curso")->result_array();
        }

        public function store($user)
        {
            $this->db->insert("tb_pessoa", $user);
        }

        public function show($id)
        {
            return $this->db->get_where("tb_pessoa", array(
                "Id" => $id
            ))->row_array();
        }

        public function update($id, $user)
        {
            $this->db->where("Id", $id);
            return $this->db->update("tb_pessoa", $user);
        }

        public function destroy($id)
        {
            $this->db->where("Id", $id);
            return $this->db->delete("tb_pessoa");  
        }

    }