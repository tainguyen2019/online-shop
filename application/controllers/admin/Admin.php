<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('isLogged')) {
            $this->load->view('admin/AdminPage');
        } else {
            redirect('admin/get_login');
        }
    }

    public function post_login()
    {
        $email = $_POST['email'];
        $password =  $_POST['password'];

        $this->load->model('admin/AdminModel');
        $row = $this->AdminModel->checkAccount($email, $password);

        if (count($row) == 1) {
            $this->load->view('admin/AdminPage');
            $this->session->set_userdata('isLogged',true);
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

    public function get_login(){
        $this->load->view('admin/Login');
    }
}
