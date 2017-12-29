<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DriverProfile extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        if(!$this->session->has_userdata('d_logged_in')){
            redirect('driver/login');
        }

    }

    public function index(){
        $data['title'] = 'Froura - Driver';
        $data['profile'] = TRUE;
        $data['user'] = $this->user->fetch('tbl_driver',array('id'=>$this->session->driverid));
        $data['success'] = $this->session->flashdata('success');
        $data['error'] = $this->session->flashdata('error');
        
        $this->load->view('driver/includes/header',$data);
        $this->load->view('driver/pages/profile');
        $this->load->view('driver/includes/footer');
    }

}
?>