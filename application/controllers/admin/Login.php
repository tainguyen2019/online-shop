<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('admin/LoginPage');
    }

    public function login()
    {
        $email = $_POST['email'];
        $password =  $_POST['password'];

        $this->load->model('admin/AdminModel');
        $row = $this->AdminModel->checkAccount($email, $password);

        if (count($row) == 1) {
            $this->session->set_userdata('isLogged', true);
        } else {
            $this->session->set_userdata('isLogged', false);
        }
        redirect('admin');
    }

    public function logout()
    {
        $this->session->unset_userdata('isLogged');
        redirect('admin');
    }
}

