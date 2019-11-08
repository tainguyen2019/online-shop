<?php
class Home extends CI_Controller
{
    // Hàm khởi tạo
    function __construct()
    {
        // Gọi đến hàm khởi tạo của cha
        parent::__construct();
    }
    function GotoHome()
    {
        $this->load->view("Home");
    }
}
