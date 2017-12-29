<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        if(!$this->session->has_userdata('logged_in')){
            redirect('122.22.22.22/login');
        }

    }

    public function index(){
        $data['title'] = 'Froura Dashboard - Admin';
        $data['index'] = TRUE;
        $data['user'] = $this->admin->fetch('tbl_admin',array('id'=>$this->session->adminid));
        
        $data['success'] = $this->session->flashdata('success');
        $data['error'] = $this->session->flashdata('error');
        
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/index');
        $this->load->view('admin/includes/footer');
    }

    public function error_404(){
        $this->load->view('admin/includes/header');
        $this->load->view('admin/error/error_404');
        $this->load->view('admin/includes/footer');

    }

}
?>