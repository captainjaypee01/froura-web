<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passenger extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        if(!$this->session->has_userdata('p_logged_in')){
            redirect('passenger/login');
        }

    }

    public function index(){
        $data['title'] = 'Froura - Passenger';
        $data['index'] = TRUE;
        $data['user'] = $this->user->fetch('tbl_passenger',array('id'=>$this->session->userid));
        
        $this->load->view('passenger/includes/header',$data);
        $this->load->view('passenger/index');
        $this->load->view('passenger/includes/footer');
    }

    public function error_404(){
        $this->load->view('admin/includes/header');
        $this->load->view('admin/error/error_404');
        $this->load->view('admin/includes/footer');

    }

}
?>