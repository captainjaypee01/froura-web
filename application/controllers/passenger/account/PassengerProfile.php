<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PassengerProfile extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        if(!$this->session->has_userdata('p_logged_in')){
            redirect('passenger/login');
        }

    }

    public function index(){

        $dat['title'] = 'Froura - Passenger';
        $dat['profile'] = TRUE;
        $dat['user'] = $this->user->fetch('tbl_passenger',array('id'=>$this->session->userid));
        $dat['success'] = $this->session->flashdata('success');
        $dat['error'] = $this->session->flashdata('error');
        
        $this->load->view('passenger/includes/header',$dat);
        $this->load->view('passenger/pages/profile');
        $this->load->view('passenger/includes/footer');
    }

}
?>