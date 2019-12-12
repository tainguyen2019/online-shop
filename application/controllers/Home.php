<?php
class Home extends CI_Controller
{
    // Hàm khởi tạo
    function __construct()
    {
        // Gọi đến hàm khởi tạo của cha
        parent::__construct();
        $this->load->model('home_model');
        $this->load->model('product_model');
    }
    function GotoHome()
    {
        $data['show_headphone'] = $this->home_model->get_product(1);
        $data['show_mouse'] = $this->home_model->get_product(2);
        $data['show_speaker'] = $this->home_model->get_product(3);
        $data['show_keyboard'] = $this->home_model->get_product(4);
        $this->load->view("Home",$data);
    }
    function search()
    {
        $product_name = $this->input->post('product_name');
        $data['info'] = $this->home_model->get_product_info($product_name);
        $this->load->view('detail',$data);
    }
}