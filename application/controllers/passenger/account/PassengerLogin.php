<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PassengerLogin extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        if($this->session->has_userdata('p_logged_in')){
            redirect('passenger');
        }
    }

    public function index(){
        $data['error'] = $this->session->flashdata('error');
        $data['success'] = $this->session->flashdata('success');
        $data['warning'] = $this->session->flashdata('warning');
        $data['title'] = 'Froura - Passenger Login';
        $data['login'] = TRUE;
        $this->load->view('passenger/pages/includes/header',$data);
        $this->load->view('passenger/pages/login');
        $this->load->view('passenger/pages/includes/footer');
    }

}
?>