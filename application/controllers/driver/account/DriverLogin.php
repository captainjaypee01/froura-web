<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DriverLogin extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        if($this->session->has_userdata('d_logged_in')){
            redirect('driver');
        }
    }

    public function index(){
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');
        $data['warning'] = $this->session->flashdata('warning');
        $data['title'] = 'Froura - Driver Login';
        $data['login'] = TRUE;
        $this->load->view('driver/pages/includes/header',$data);
        $this->load->view('driver/pages/login');
        $this->load->view('driver/pages/includes/footer');
    }

}
?>