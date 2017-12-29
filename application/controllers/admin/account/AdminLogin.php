<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        if($this->session->has_userdata('logged_in')){
            redirect('122.22.22.22');
        }
    }

    public function index(){
        $data['title'] = 'Froura Login - Admin';
        $data['login'] = TRUE;
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');
        $data['warning'] = $this->session->flashdata('warning');
        $this->load->view('admin/pages/includes/header',$data);
        $this->load->view('admin/pages/login');
        $this->load->view('admin/pages/includes/footer');
    }

}
?>