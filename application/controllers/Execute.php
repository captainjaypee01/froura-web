<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Execute extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        date_default_timezone_set('Asia/Manila');

    }

    public function loginp(){
        $data = array(
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password'))
        );
        #$data['username'] . '<br>'. $data['password'] . '<br>';
        $userDetails = $this->user->fetch('tbl_passenger',$data);
        if(!$userDetails){
            $error = "Invalid Account";
            $this->session->set_flashdata("error",$error);
            redirect('passenger/login');
            #echo '<script> alert("No Account"); window.location="'.base_url('passenger/login').'";</script>';
            #redirect('passenger/login');
        }
        else{
            $userDetails = $userDetails[0];
            if($userDetails->is_verified == 0){
                $error = "Verify Your Account First";
                $this->session->set_flashdata("warning",$error);
                redirect('passenger/login');
                #echo '<script> alert("VERIFY YOUR ACCOUNT FIRST");window.location="'.base_url('passenger/login').'"; </script>';
            }
            else{
                if($userDetails->status == 0 ){
                    $error = "Your Account is Blocked";
                    $this->session->set_flashdata("error",$error);
                    redirect('passenger/login');
                   # echo '<script> alert("BLOCKED ACCOUNT"); window.location="'.base_url('passenger/login').'";</script>';

                }
                else{
                    $this->session->set_userdata('p_logged_in',true);
                    $this->session->set_userdata('userid',$userDetails->id);
                    echo '<script> alert("Yes Account"); window.location="'.base_url('passenger').'";</script>';
                   # redirect('passenger');
                }
            }
           
        }

    }

    public function logind(){
        $data = array(
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password'))
        );
        #$data['username'] . '<br>'. $data['password'] . '<br>';
        $userDetails = $this->user->fetch('tbl_driver',$data);
        if(!$userDetails){
            $error = "Invalid Account";
            $this->session->set_flashdata("error",$error);
            redirect('driver/login');
            #echo '<script> alert("No Account"); window.location="'.base_url('driver/login').'";</script>';
            
        }
        else{
            $userDetails = $userDetails[0];
            if($userDetails->is_verified == 0){
                $error = "Verify Your Account First";
                $this->session->set_flashdata("warning",$error);
                redirect('driver/login');
                #echo '<script> alert("VERIFY YOUR ACCOUNT FIRST");window.location="'.base_url('driver/login').'"; </script>';
            }
            else{
                if($userDetails->status == 0 ){
                    $error = "Your Account is Blocked";
                    $this->session->set_flashdata("error",$error);
                    redirect('driver/login');
                    #echo '<script> alert("BLOCKED ACCOUNT"); window.location="'.base_url('driver/login').'";</script>';

                }
                else{
                    $this->session->set_userdata('d_logged_in',true);
                    $this->session->set_userdata('driverid',$userDetails->id);
                    echo '<script> alert("Yes Account"); window.location="'.base_url('driver').'";</script>';
                   # redirect('passenger');
                }
            }
           
        }

    }

    public function registerp(){
        $code = random_string('alnum', 20);
        
        $data = array(
             'fname' => $this->input->post('fname'),
             'mname' => $this->input->post('mname'),
             'lname' => $this->input->post('lname'),
             'username' => $this->input->post('username'),
             'password' => sha1($this->input->post('password')),
             'email' => $this->input->post('email'),
             'contact' => $this->input->post('contact'),
             'birthday' => $this->input->post('bday'),
             'gender' => $this->input->post('gender'),
             'status' => '1',
             'verification_code' => $code
         );

        $this->form_validation->set_rules('username',"Username",'trim|required|min_length[6]|is_unique[tbl_passenger.username]');
        $this->form_validation->set_rules('password',"Password",'trim|required|min_length[6]');
        $this->form_validation->set_rules('repassword',"Confirm Password",'trim|required|min_length[6]|matches[password]|trim');
        $this->form_validation->set_rules('email',"Email Address",'trim|required|valid_email|is_unique[tbl_passenger.email]');
        $this->form_validation->set_rules('fname',"First Name",'required');
        $this->form_validation->set_rules('lname',"Last Name",'required');
        $this->form_validation->set_rules('contact',"Contact Number",'required|exact_length[11]');
        $this->form_validation->set_rules('bday',"Birthday",'required');
        $this->form_validation->set_rules('gender[]',"Gender",'required');


        if($this->form_validation->run() == TRUE){

            $this->sendmail($data);
            #$this->user->insert('tbl_passenger',$data);
            

        }
        else{
            $data['title'] = 'Froura Register - Passenger';
            $data['register'] = TRUE;
            $this->load->view('passenger/pages/includes/header',$data);
            $this->load->view('passenger/pages/registration');
            $this->load->view('passenger/pages/includes/footer');
        }
        
    }

    public function updatepassenger(){

        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'fname' => $this->input->post('fname'),
            'mname' => $this->input->post('lname'),
            'lname' => $this->input->post('lname'),
            'gender' => $this->input->post('gender'),
            'contact' => $this->input->post('contact'),
            'birthday' => $this->input->post('bday'),
            'nickname' => $this->input->post('nickname'),
            'bio' => $this->input->post('bio'),
            'status' => 1,
        );

        if($this->input->post('username') != $this->input->post('t_username')){
            $this->form_validation->set_rules('username',"Username",'trim|required|min_length[6]|is_unique[tbl_passenger.username]');
        }
        if($this->input->post('newpass1') != "" && $this->input->post('newpass2') != ""){
            $this->form_validation->set_rules('newpass1',"New Password",'trim|required|min_length[6]');
            $this->form_validation->set_rules('newpass2',"Confirm Password",'trim|required|min_length[6]|matches[newpass1]|trim');
            $data['password'] = sha1($this->input->post('newpass1'));
        }
        if($this->input->post('email') != $this->input->post('t_email')){
            $this->form_validation->set_rules('email',"Email Address",'trim|required|valid_email|is_unique[tbl_passenger.email]');
        }
        $this->form_validation->set_rules('fname',"First Name",'required');
        $this->form_validation->set_rules('lname',"Last Name",'required');
        $this->form_validation->set_rules('contact',"Contact Number",'required|exact_length[11]');
        $this->form_validation->set_rules('bday',"Birthday",'required');
        $this->form_validation->set_rules('gender',"Gender",'required');



        if($this->form_validation->run() == FALSE){
            $dat = validation_errors();
            $this->session->set_flashdata('error', $dat);
            redirect('passenger/profile');

        }
        else{

            #$s = $this->user->update('tbl_passenger',$data, array( 'id'=> $this->session->userid ) );
            if( $this->user->update('tbl_passenger',$data, array( 'id'=> $this->session->userid ) ) ){
                $dat = "Account Was Updated Successfully";
                $this->session->set_flashdata('success', $dat);
                redirect('passenger/profile');

            }
            else{
                #echo $this->user->update('tbl_passenger',$data, array( 'id'=> $this->session->userid ) );
                /*
                $dat = "Account Was Not Updated";
                $this->session->set_flashdata('error', $dat);
                redirect('passenger/profile');
                */
            }
        }
    }

    public function updatedriver(){
        
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'fname' => $this->input->post('fname'),
            'mname' => $this->input->post('lname'),
            'lname' => $this->input->post('lname'),
            'gender' => $this->input->post('gender'),
            'contact' => $this->input->post('contact'),
            'birthday' => $this->input->post('bday'),
            'nickname' => $this->input->post('nickname'),
            'bio' => $this->input->post('bio'),
            'status' => 1,
        );

        if($this->input->post('username') != $this->input->post('t_username')){
            $this->form_validation->set_rules('username',"Username",'trim|required|min_length[6]|is_unique[tbl_passenger.username]');
        }
        if($this->input->post('newpass1') != "" && $this->input->post('newpass2') != ""){
            $this->form_validation->set_rules('newpass1',"New Password",'trim|required|min_length[6]');
            $this->form_validation->set_rules('newpass2',"Confirm Password",'trim|required|min_length[6]|matches[newpass1]|trim');
            $data['password'] = sha1($this->input->post('newpass1'));
        }
        if($this->input->post('email') != $this->input->post('t_email')){
            $this->form_validation->set_rules('email',"Email Address",'trim|required|valid_email|is_unique[tbl_passenger.email]');
        }
        $this->form_validation->set_rules('fname',"First Name",'required');
        $this->form_validation->set_rules('lname',"Last Name",'required');
        $this->form_validation->set_rules('contact',"Contact Number",'required|exact_length[11]');
        $this->form_validation->set_rules('bday',"Birthday",'required');
        $this->form_validation->set_rules('gender',"Gender",'required');



        if($this->form_validation->run() == FALSE){
            $dat = validation_errors();
            $this->session->set_flashdata('error', $dat);
            redirect('driver/profile');

        }
        else{

            #$s = $this->user->update('tbl_passenger',$data, array( 'id'=> $this->session->userid ) );
            if( $this->user->update('tbl_driver',$data, array( 'id'=> $this->session->userid ) ) ){
                $dat = "Account Was Updated Successfully";
                $this->session->set_flashdata('success', $dat);
                redirect('driver/profile');

            }
            else{
                #echo $this->user->update('tbl_passenger',$data, array( 'id'=> $this->session->userid ) );
                /*
                $dat = "Account Was Not Updated";
                $this->session->set_flashdata('error', $dat);
                redirect('passenger/profile');
                */
            }
        }
    }
        



    public function addreserve(){
        #$res_date = date_create($this->input->get('date'). ' '. $this->input->get('time'));
        $res_date = date_create($this->input->post('date'). ' '. $this->input->post('time'));
        $res_date = date_format($res_date, "Y-m-d H:i:s");
        
        $data = array(
            'passenger_id' => $this->input->post('userid'),
            'reservation_date' => $res_date,
            'notes' => $this->input->post('notes'),
            'start_destination' => $this->input->post('start_point'),
            'end_destination' => $this->input->post('end_point'),
            'start_id' => $this->input->post('start_id'),
            'end_id' => $this->input->post('end_id'),
            'start_lat' => $this->input->post('start_lat'),
            'start_lng' => $this->input->post('start_lng'),
            'end_lat' => $this->input->post('end_lat'),
            'end_lng' => $this->input->post('end_lng'),
            'price' => $this->input->post('fare'),
            'duration' => $this->input->post('duration'),
        );

        echo '<pre>';
        print_r($data);
        echo '</pre>';
        /*
        $data = array(
            'passenger_id' => $this->input->post('userid'),
            'reservation_date' => $res_date,
            'notes' => $this->input->post('notes'),
            'start_destination' => $this->input->post('start_point'),
            'end_destination' => $this->input->post('end_point'),
        );
        */

        
        if( $this->user->insert('tbl_reservation',$data) ){
            $dat = "You Have Successfully Reserve A Trip \n Please Wait For The Respone Of The Management";
            $this->session->set_flashdata('success', $dat);
            redirect('passenger/reservation');

        }
        else{
            
            $dat = "You Have Failed To Reserve A Trip";
            $this->session->set_flashdata('error', $dat);
            redirect('passenger/reservation');
    
        }
    }

    public function logout(){
        if($this->session->p_logged_in){
            
            $this->session->sess_destroy();
            redirect('passenger/login');
        }
        else{
            
            $this->session->sess_destroy();
            redirect('driver/login');
        }
    }

    public function activate() {
        $code = $this->uri->segment(3);
        $data = array(
            'is_verified' => 1,
            'verification_code' => "",
        );

        $user = $this->user->fetch('tbl_passenger', array('verification_code' => $code))[0];
        if (!$user) {
            redirect('passenger/login');
        } else {
            if ($this->user->update('tbl_passenger', $data, array('verification_code' => $code))) {

                $dat = "Account Verified";
                $this->session->set_flashdata('success', $dat);
                redirect('passenger/login');
                #echo "<script>alert('Account Verified\nRedirecting to Login Page'); window.location='" . base_url() . "login';</script>";
                
            } else {
                $dat = "Invalid Verification";
                $this->session->set_flashdata('error', $dat);
                redirect('passenger/login');
                #echo "<script>alert('Invalid Access\nRedirecting to Login Page'); window.location='" . base_url() . "login';</script>";
            }
        }
    }

    public function dactivate() {
        $code = $this->uri->segment(3);
        $data = array(
            'is_verified' => 1,
            'verification_code' => "",
        );

        $user = $this->user->fetch('tbl_driver', array('verification_code' => $code))[0];
        if (!$user) {
            redirect('driver/login');
        } else {
            if ($this->user->update('tbl_driver', $data, array('verification_code' => $code))) {

                $dat = "Account Verified";
                $this->session->set_flashdata('success', $dat);
                redirect('driver/login');
                #echo "<script>alert('Account Verified\nRedirecting to Login Page'); window.location='" . base_url() . "login';</script>";
                
            } else {
                $dat = "Invalid Verification";
                $this->session->set_flashdata('error', $dat);
                redirect('driver/login');
                #echo "<script>alert('Invalid Access\nRedirecting to Login Page'); window.location='" . base_url() . "login';</script>";
            }
        }
    }


    public function payreserve(){
        $data = array(
            'status' => 2,
        );
        $where = array(
            'id' => $this->input->post('id'),
            'passenger_id' => $this->input->post('passenger_id'),
        );

        //$this->user->update('tbl_reservation',$data,$where);
        if( $this->user->update('tbl_reservation',$data,$where) ){

            $dat = "Payment Success";
            $this->session->set_flashdata('success', $dat);
            redirect('passenger/reservation');
        }
        
    }

    public function saveimage_driver(){

        $config['upload_path'] = './uploads/driver/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['file_name'] = $this->session->driverid . '_' . time();
        
        $this->load->library('upload',$config);
        
        
        if (!$this->upload->do_upload('img')) {
            $dat = $this->upload->display_errors();
            $this->session->set_flashdata('error', $dat);
            redirect('driver/profile');
        } else {
            echo '<pre>';
            print_r($this->upload->data());
            echo '</pre>';
            $image = $this->upload->data('file_name');
        }
        echo '<br>';
        echo $image;
        $data['img_path'] = $image;
        if ($this->user->update('tbl_driver', $data, array('id' => $this->session->driverid))) {
            
            $dat = "Profile Picture Updated";
            $this->session->set_flashdata('success', $dat);
            redirect('driver/profile');
            #echo "<script>alert('Account Verified\nRedirecting to Login Page'); window.location='" . base_url() . "login';</script>";
            
        } else {
            $dat = "Update Failed, Try Again";
            $this->session->set_flashdata('error', $dat);
            redirect('driver/profile');
            #echo "<script>alert('Invalid Access\nRedirecting to Login Page'); window.location='" . base_url() . "login';</script>";
        }

    }

    
    public function saveimage_passenger(){
        
                $config['upload_path'] = './uploads/passenger/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = 2000;
                $config['max_width'] = 1024;
                $config['max_height'] = 768;
                $config['file_name'] = $this->session->userid . '_' . time();
                
                $this->load->library('upload',$config);
                
                
                if (!$this->upload->do_upload('img')) {
                    $dat = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $dat);
                    redirect('passenger/profile');
                } else {
                    echo '<pre>';
                    print_r($this->upload->data());
                    echo '</pre>';
                    $image = $this->upload->data('file_name');
                }
                echo '<br>';
                echo $image;
                $data['img_path'] = $image;
                if ($this->user->update('tbl_passenger', $data, array('id' => $this->session->userid))) {
                    
                    $dat = "Profile Picture Updated";
                    $this->session->set_flashdata('success', $dat);
                    redirect('passenger/profile');
                    #echo "<script>alert('Account Verified\nRedirecting to Login Page'); window.location='" . base_url() . "login';</script>";
                    
                } else {
                    $dat = "Update Failed, Try Again";
                    $this->session->set_flashdata('error', $dat);
                    redirect('passenger/profile');
                    #echo "<script>alert('Invalid Access\nRedirecting to Login Page'); window.location='" . base_url() . "login';</script>";
                }
        
            }
        



    public function sendmail($data = NULL){
        if($data != NULL){
            
            $this->email->from('charlynannn@gmail.com', 'Froura');
            $this->email->to($data['email']);

            $this->email->subject('Account Verification');
            
            $this->email->message($this->load->view('email/register',$data,true));

            
            if(!$this->email->send()){
                $dat = "Error in Sending Email \n <br>".$this->email->print_debugger();
                $this->session->set_flashdata('error', $dat);
                redirect('passenger/login');
            }
            else {
                if($this->usermodel->insert('user',$data)){
                    
                    $dat = "Successfully Registered in Our System";
                    $this->session->set_flashdata('success', $dat);
                    redirect('passenger/login');
                    //$user = $this->usermodel->fetch('tbl_passenger',array('id'=>$this->session->id))[0];
                    
                    /*
                    if($this->usermodel->insert('logs',$logdata)){
                        $this->session->sess_destroy();
                        echo "<script>alert('Successfully Registered in Our System'); window.location='". base_url()."user'</script>";
                    }
                    */
                }
                else{
                    $dat = "Failed to Register in Our System";
                    $this->session->set_flashdata('error', $dat);
                    redirect('passenger/login');
                }
            }
        }
        else{
            $dat = "Failed to Register in Our System";
            $this->session->set_flashdata('error', $dat);
            redirect('passenger/login');
        }
    }

    public function insertUser(){
       echo $code = random_string('alnum', 20);
       
       
       $data = array(
            'fname' => "John Paul",
            'mname' => "Buhain",
            'lname' => "Dala",
            'username' => "jbdala",
            'password' => sha1('123456'),
            'email' => 'jaypeedala31@gmail.com',
            'contact' => '+639164234614',
            'birthday' => '1999-01-31 00:00:00',
            'gender' => 'm',
            'status' => '1',
            'nickname' => 'JP',
            'bio' => "HANDSOME",
            'verification_code' => $code
        );
        $this->user->insert('tbl_driver',$data);
        
    }

    public function email_register(){
        $this->load->view('email/register');
    }
}
?>