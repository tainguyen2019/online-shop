<?php
class Order extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('order');
    }
}
?>