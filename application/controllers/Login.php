<?php
class Login extends CI_Controller{
    function GotoLogin(){
        // goi view - login
        $this->load->view("login");
    }
}
?>