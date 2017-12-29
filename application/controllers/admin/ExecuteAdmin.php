<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExecuteAdmin extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        date_default_timezone_set('Asia/Manila');

    }

    public function login(){
        $data = array(
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password'))
        );
        echo $data['username'] . '<br>'. $data['password'] . '<br>';
        $adminDetails = $this->admin->fetch('tbl_admin',$data);
        if(!$adminDetails){
            echo '<script> alert("No Account"); </script>';
            redirect('122.22.22.22/login');
        }
        else{
            $adminDetails = $adminDetails[0];
            if($adminDetails->status == 0 ){
                $error = "Your Account is Blocked";
                $this->session->set_flashdata("error",$error);
                redirect('122.22.22.22/login');
                #echo '<script> alert("BLOCKED ACCOUNT"); </script>';

            }
            else{
                $this->session->set_userdata('logged_in',true);
                $this->session->set_userdata('adminid',$adminDetails->id);
                echo '<script> alert("Yes Account"); </script>';
                redirect('122.22.22.22');
            }
           
        }
        echo '<pre>';
        print_r($adminDetails);
        echo '</pre>';
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('122.22.22.22/login');
    }

    public function insertAdmin(){
       /* $data = array(
            'fname' => "John Paul",
            'mname' => "Buhain",
            'lname' => "Dala",
            'username' => "captainjaypee01",
            'password' => sha1('123123123'),
            'email' => 'jaypeedala31@gmail.com',
            'contact' => '+639164234614',
            'birthday' => '1999-01-31 00:00:00',
            'gender' => 'm',
            'status' => '1'
        );
        $this->admin->insert('tbl_admin',$data);*/
    }
}
?>