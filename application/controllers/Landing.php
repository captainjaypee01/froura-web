<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

    const API_KEY = 'AIzaSyDYcB79iaOQ6ImiwB449EgHVqKGTS6nx2w';
    public function __construct(){
        parent:: __construct();
    }

    public function index(){
        $data['API_KEY'] = self::API_KEY;
        $this->load->view('landing/includes/header');
        $this->load->view('landing/index',$data);
        $this->load->view('landing/includes/footer');
    }

}