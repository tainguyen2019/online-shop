<?php
class Order extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');   
    }
    public function index()
    {
        $data['cartItems'] = $this->cart->contents();
        $email = $this->session->userdata('user_email');
        $this->load->model('order_model');
        $data['user_info'] = $this->order_model->get_info_customer($email);
        $this->load->view('order',$data);
    }
   public function order_save()
   {
    $info_order =  $this->cart->contents();
    $total = $this->cart->total();
    $email = $this->session->userdata('user_email');
    
   }
    
}
?>