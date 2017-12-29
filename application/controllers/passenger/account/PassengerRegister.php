<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PassengerRegister extends CI_Controller {

    public function __construct(){
        parent:: __construct();
        
    }

    public function index(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
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
            
           if($this->form_validation->run() == false){   
                $data = array(
                    'script' => $this->recaptcha->getScriptTag(),
                    'widget' => $this->recaptcha->getWidget(),
                );
                $data['title'] = 'Froura - Passenger Registration';
                $data['register'] = TRUE;
                $data['success'] = $this->session->flashdata('success');
                $data['error'] = $this->session->flashdata('error');
                $this->load->view('passenger/pages/includes/header',$data);
                $this->load->view('passenger/pages/registration');
                $this->load->view('passenger/pages/includes/footer');
           }
           else{
                $this->sendmail($data);
           }
        }
        else{
            $data = array(
                'script' => $this->recaptcha->getScriptTag(),
                'widget' => $this->recaptcha->getWidget(),
            );
            
            $data['title'] = 'Froura - Passenger Registration';
            $data['register'] = TRUE;
            $data['success'] = $this->session->flashdata('success');
            $data['error'] = $this->session->flashdata('error');
            $this->load->view('passenger/pages/includes/header',$data);
            $this->load->view('passenger/pages/registration');
            $this->load->view('passenger/pages/includes/footer');

        }
    }

    public function sendmail($data = NULL){
        if($data != NULL){
            $logo = base_url().'assets/app-assets/images/logo/logo80x80.png';
            $this->email->from('jaypeedala31@gmail.com', 'Froura - Passenger Registration');
            $this->email->to($data['email']);

            $this->email->subject('Account Verification');
            $this->email->attach( $logo );
        
            $cid = $this->email->attachment_cid($logo);
            $this->email->message($this->load->view('email/register',$data,true));
            
            if(!$this->email->send()){
                $dat = "Error in Sending Email \n <br>".$this->email->print_debugger();
                $this->session->set_flashdata('error', $dat);
                echo $this->email->print_debugger();
                die();
                redirect('passenger/login');
            }
            else {
                if($this->user->insert('tbl_passenger',$data)){
                    
                    
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

    public function insert_logs($user,$name,$type){
        $data = array(
            'user_id' => $user->id,
            'user_type' => 1,
            'log_name' => $activity,
            'log_type' => $type,
        );
        if ($this->user->insert('tbl_logs', $data)) {
            
        }
    }
}
?>