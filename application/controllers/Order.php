<?php
class Order extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('cart');   
        $this->load->model('order_model');
    }
    public function index()
    {
        $data['cartItems'] = $this->cart->contents();
        $email = $this->session->userdata('user_email');
        $data['user_info'] = $this->order_model->get_info_customer($email);
        $this->load->view('order',$data);
    }
 
   public function order_save()
   {
    $info_order =  $this->cart->contents();
    $total = $this->cart->total();
    $customer_id = $_GET['id'];
    if($this->order_model->order_save($total,$customer_id))
    {
        $order_id = $this->order_model->get_order_id_latest()->order_id;
        foreach($this->cart->contents() as $info_order)
        {
            $product_id = $info_order['id'];
            $quantity = $info_order['qty'];
            $price = $info_order['price'];
            $this->order_model->order_line_save($order_id,$product_id,$quantity,$price);
        }
        $this->cart->destroy();
        redirect('cart');
    }
    else{
        $this->session->set_flashdata('error','Đơn hàng gặp lỗi không lưu được');
    }    
   }
   function GotoOrderView()
   {
    $email = $this->session->userdata('user_email');
    $data['user_info'] = $this->order_model->get_info_customer($email);
    $data['sale_order'] = $this->order_model->get_order($data['user_info'][0]['customer_id']);
    $this->load->view('Order_view',$data);
   }
   public function ShowDetailOrder($order_id)
   {
       $data['detail_order'] = $this->order_model->getDetailOrder($order_id);
       $this->load->view('detail_order',$data);
   }
   function del_order($order_id)
   {
       $this->order_model->del_detail_order($order_id);
       $this->order_model->del_order($order_id);
       redirect(base_url('Order/GotoOrderView'));
   }
}
?>