<?php
class Home extends CI_controller{
    public function index() {
        $data['judul'] = 'Halaman Home';
        $this->load->view();
        $this->load->view('Dashboard');
        $this->load->view();
    }
    
}