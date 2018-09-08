<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Users extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
    }
    
    /*
     * User account information
     */
    public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            if($this->session->userdata('role') == "admin")
            {
                    $this->load->view('users/admin_account', $data);
            }
            elseif($this->session->userdata('role') == "constable")
            {
                    $this->load->view('users/constable_account', $data);
            }
            elseif($this->session->userdata('role') == "sup_admin")
            {
                    $this->load->view('users/sup_admin_account', $data);
            }
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
            //$this->load->view('users/account', $data);
        }else{
            redirect('users/login');
        }
        
    }
    
    /*
     * User login
     */

    public  function update_data()
    {   
        $data = array();
        $userData = array();
        if($this->input->post('editSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $id1=strip_tags($this->input->post('id'));

            $userData = array(
                'name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
                'phone' => strip_tags($this->input->post('phone')),
                'gender' => strip_tags($this->input->post('gender'))
            );
            //echo $userData[name],$userData[email],$userData[phone];
            if(true){
                echo "in function ";
                $update = $this->user->update($userData,$id1);
                redirect('users/login');
                if($update){
                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                    redirect('users/login');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                    echo $data['error_msg'];
                }
            }
        }
    }
    public function login(){
        $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('email'),
                    'password' => md5($this->input->post('password'))
                );
                $checkLogin = $this->user->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    $this->session->set_userdata('role',$checkLogin['role']);
                    $this->session->set_userdata('id',$checkLogin['id']);
                    $this->session->set_userdata('gender',$checkLogin['gender']);
                    
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
        }

        //trying auto redirect on login
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            if($this->session->userdata('role') == "admin")
            {
                    $this->load->view('users/admin_account', $data);
            }
            elseif($this->session->userdata('role') == "constable")
            {
                    $this->load->view('users/constable_account', $data);
            }
            elseif($this->session->userdata('role') == "sup_admin")
            {
                    $this->load->view('users/sup_admin_account', $data);
            }
            
        }
        else
        {
            $this->load->view('login', $data);
        }

        //load the view
        
    }
    
    /*
     * User registration
     */
    public function registration(){
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            if($this->session->userdata('role') == "admin")
            {
                    $this->load->view('users/admin_account', $data);
            }
            elseif($this->session->userdata('role') == "constable")
            {
                    $this->load->view('users/constable_account', $data);
            }
            elseif($this->session->userdata('role') == "sup_admin")
            {
                    $this->load->view('users/sup_admin_account', $data);
            }
            
        }
        $data = array();
        $userData = array();
        if($this->input->post('regisSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

            $userData = array(
                'name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
                'phone' => strip_tags($this->input->post('phone')),
                'role' => strip_tags($this->input->post('role'))
            );

            if($this->form_validation->run() == true){
                $insert = $this->user->insert($userData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
                    redirect('users/login');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        $data['user'] = $userData;
        //load the view
        $this->load->view('register', $data);
    }
    
    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('users/login/');
    }
    
    /*
     * Existing email check during validation
     */
    public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->user->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function vacancy(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getVacancy();
            //load the view
            $this->load->view('users/vacancy', $data);

        }else{
            redirect('users/login');
        }
        
    }

    public function request_transfer(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getVacancy();
            //load the view
            $this->load->view('users/request', $data);

        }else{
            redirect('users/login');
        }
        
    }
}