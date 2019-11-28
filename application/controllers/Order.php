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
        $this->load->view('order',$data);
    }
   public function order_save()
   {
    $info_order =  $this->cart->contents();
    print_r($info_order);
   }
    
}
?>