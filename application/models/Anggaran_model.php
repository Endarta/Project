<?php  
    class Anggaran_model extends CI_model{
        public  function getAllAnggaran(){
            return $this->db->get()->result_array();
        }
    }