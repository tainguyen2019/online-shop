<?php 
class MY_Controller_Admin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('isLoggedAdmin')) {
            redirect('admin/login');
        }
    }
}
?>