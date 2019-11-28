<?php
class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
       // $this->load->library('session');
    }
    public function index(){
        // goi view - login
        $this->load->view("Login");
    }
    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $this->confirm_login($email,$password);
        redirect('Home');
    }
    public function  login_order()
    {
        $this->load->view('order_login');
    }
    public function login_confirm()
    {
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
            if($this->form_validation->run())
            {  // true => confirm username/password
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                // call model function to confirm 
                if($this->login_model->login($username,$password))
                {
                    $this->session->set_userdata('isLogged',true);
                    $user_email = array(
                        'user_email' => $username
                    );
                    $this->session->set_userdata($user_email);
                    redirect(base_url('Login/GotoOrder'));
                }
                else{
                   // $this->session->set_userdata('islogged',false);
                    $this->session->set_flashdata('error', 'Invalid username add password');
                    redirect(base_url().'Login/login_order');
                }
            }
            else
            { // false => echo error
                $this->login_order();
            } 
    }
    public function GotoOrder()
    {
        if($this->session->userdata('user_email') != '')
        {
            redirect(base_url('Order'));
        }
        else{
            redirect(base_url('Login/login_order'));
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('isLogged');
        $this->session->unset_userdata('user_email');
        redirect(base_url());
    }
}
?>