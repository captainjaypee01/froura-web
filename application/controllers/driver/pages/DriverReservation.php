<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DriverReservation extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        if(!$this->session->has_userdata('d_logged_in')){
            redirect('driver/login');
        }
    }

    public function index(){
        $data['title'] = 'Froura - Driver Reservation';
        $data['login'] = TRUE;
        echo $this->session->userid;
        $data['user'] = $this->user->fetch('tbl_driver',array('id'=>$this->session->driverid));
        $data['reservation'] = $this->user->fetch('tbl_reservation');
        $this->load->view('driver/includes/header',$data);
        $this->load->view('driver/pages/reservation');
        $this->load->view('driver/includes/footer');
    }

    public function getpassenger(){
        $id = $this->uri->segment(3);

        if($this->user->update('tbl_reservation', array('status'=>1,'driver_id'=>$this->session->driverid), array('id'=>$id) ) ){
            $data = "You have successfully get a passenger";
            $this->session->set_flashdata("success",$data);
            redirect('driver/reservation');
        }
    }

    

}
?>