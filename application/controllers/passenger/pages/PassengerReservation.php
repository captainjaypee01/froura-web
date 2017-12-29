<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PassengerReservation extends CI_Controller {

    const API_KEY = 'AIzaSyDYcB79iaOQ6ImiwB449EgHVqKGTS6nx2w';#$this->load->config('gmap')->item('API_KEY');
    #$config['API_KEY'] = 'AIzaSyDYcB79iaOQ6ImiwB449EgHVqKGTS6nx2w';

    public function __construct(){
        parent:: __construct();
        if(!$this->session->has_userdata('p_logged_in')){
            redirect('passenger/login');
        }

    }

    public function index(){

        $dat['title'] = 'Froura - Passenger Reservation';
        $dat['reservation'] = TRUE;
        $dat['user'] = $this->user->fetch('tbl_passenger',array('id'=>$this->session->userid));
        $dat['success'] = $this->session->flashdata('success');
        $dat['error'] = $this->session->flashdata('error');
        $dat['API_KEY'] = self::API_KEY;
        #echo self::API_KEY;
        $this->load->view('passenger/includes/header',$dat);
        $this->load->view('passenger/pages/reservation/reservation');
        $this->load->view('passenger/includes/footer');
    }

    public function current(){

        $dat['title'] = 'Froura - Passenger Reservation';
        $dat['reservation'] = TRUE;
        $dat['user'] = $this->user->fetch('tbl_passenger',array('id'=>$this->session->userid));
        $dat['success'] = $this->session->flashdata('success');
        $dat['error'] = $this->session->flashdata('error');

        $dat['current'] = $this->user->fetch('tbl_reservation', array('passenger_id'=>$this->session->userid) );

        $this->load->view('passenger/includes/header',$dat);
        $this->load->view('passenger/pages/reservation/current');
        $this->load->view('passenger/includes/footer');
    }

    public function recent(){

        $dat['title'] = 'Froura - Passenger Reservation';
        $dat['reservation'] = TRUE;
        $dat['user'] = $this->user->fetch('tbl_passenger',array('id'=>$this->session->userid));
        $dat['success'] = $this->session->flashdata('success');
        $dat['error'] = $this->session->flashdata('error');

        $dat['recent'] = $this->user->fetch('tbl_reservation' ,array('passenger_id'=>$this->session->userid) );

        $this->load->view('passenger/includes/header',$dat);
        $this->load->view('passenger/pages/reservation/recent');
        $this->load->view('passenger/includes/footer');
    }

    public function payment(){
    
        $id = $this->uri->segment(4);

        $dat['title'] = 'Froura - Passenger Reservation';
        $dat['reservation'] = TRUE;
        $dat['user'] = $this->user->fetch('tbl_passenger',array('id'=>$this->session->userid));
        $dat['success'] = $this->session->flashdata('success');
        $dat['error'] = $this->session->flashdata('error');
        
        $dat['reserve'] = $this->user->fetch('tbl_reservation' ,array( 'passenger_id' => $this->session->userid, 'id' => $id ) );

        $this->load->view('passenger/includes/header',$dat);
        $this->load->view('passenger/pages/reservation/payment');
        $this->load->view('passenger/includes/footer');
    }
}
?>