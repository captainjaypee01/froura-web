<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminReservation extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        if(!$this->session->has_userdata('logged_in')){
            redirect('122.22.22.22');
        }
    }

    public function index(){

        $data['title'] = 'Froura Login - Admin';
        $data['login'] = TRUE;
        $data['user'] = $this->admin->fetch('tbl_admin',array('id'=>$this->session->adminid));
        $data['success'] = $this->session->flashdata('success');
        $data['error'] = $this->session->flashdata('error');
        $data['res'] = $this->user->fetch('tbl_reservation');

        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/reservation');
        $this->load->view('admin/includes/footer');
    }

}
?>