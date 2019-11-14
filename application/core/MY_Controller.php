<?php 
class MY_Controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('isLogged')) {
            redirect('admin');
        } else {
            redirect('admin/login');
        }
    }
}





?>