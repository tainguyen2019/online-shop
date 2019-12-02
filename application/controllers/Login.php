<?php
class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
       // $this->load->library('session');
    }
    public function index()
    {
        $this->load->view("Login");
    }
    public function  login_order()
    {
        $this->load->view('order_login');
    }
    public function login_confirm($flag='')
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
                    if($flag == '')
                    {
                        redirect(base_url('Login/GotoOrder'));
                    }
                    else{
                        redirect(base_url('Login/GotoHome'));
                    }
                    
                }
                else{
                   // $this->session->set_userdata('islogged',false);
                    $this->session->set_flashdata('error', 'Invalid username or password');
                    redirect(base_url().'Login/login_order');
                }
            }
            else
            { // false => echo error
                $this->login_order();
            } 
    }
    public function register()
    {
        $this->form_validation->set_rules('user_email','Email','required|trim|valid_email
        |is_unique[codeigniter_register.email]');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('username','Name','required|trim');
        $this->form_validation->set_rules('phone','Phone','required');
        $this->form_validation->set_rules('address','Address','required');
        if($this->form_validation->run())
        {// true => insert info of new customer
            $account_info = array(
                'email' => $this->input->post('user_email'),
                'password' => $this->input->post('password'),
            );
            $customer_info  = array(
                'username' =>  $this->input->post('username'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address')
            );
            $this->login_model->register($account_info,$customer_info);
        }else{
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
    public function GotoHome()
    {
        if($this->session->userdata('user_email') != '')
        {
            redirect(base_url());
        }
        else{
            redirect(base_url('Login'));
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