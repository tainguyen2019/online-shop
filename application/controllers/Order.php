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
        $data['total'] = $this->total();
        $data['user_info'] = $this->order_model->get_info_customer($email);
        $this->load->view('order',$data);
    }

    public function total(){
		$total = 0;
		foreach($this->cart->contents() as $item){
			$total += $item['price'] * (1 - $item['discount']) * $item['qty'];
		}
		return $total;
	}
 
   public function order_save()
   {
    $info_order =  $this->cart->contents();
    $total = $this->total();
    $customer_id = $_GET['id'];
    if($this->order_model->order_save($total,$customer_id))
    {
        $order_id = $this->order_model->get_order_id_latest()->order_id;
        foreach($this->cart->contents() as $info_order)
        {
            $product_id = $info_order['id'];
            $quantity = $info_order['qty'];
            $price = $info_order['price'];
            $discount = $info_order['discount'];
            $this->order_model->order_line_save($order_id,$product_id,$quantity,$price, $discount);
        }
        $this->cart->destroy();
        $this->send($this->session->userdata('user_email'));
        
    }
    else{
        $this->session->set_flashdata('error','Đơn hàng gặp lỗi không lưu được');
        redirect('Order');
    }   
    $this->session->unset_userdata('discounted');
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
       $this->order_model->del_order($order_id);
       redirect(base_url('Order/GotoOrderView'));
   }
   /// sending email to alert order successful
   public function send($email)
   {
       $config = Array(
           'protocol' =>    'smtp',
           'smtp_host' =>    'ssl://smtp.googlemail.com',
           'smtp_port' =>   465,
           'smtp_user' =>   'brandcompanyforwebproject@gmail.com',
           'smtp_pass' =>   'Brand_123',
           'mailtype' =>    'html',
           'mailpath' => '/usr/sbin/sendmail',
           'chartset' => 'utf-8',
           'wordwrap' => TRUE
       );
       $this->load->library('email');
       $this->email->initialize($config);
       $this->email->set_newline("\r\n");
       $this->email->from('brandcompanyforwebproject@gmail.com','Brand Company');
       $this->email->to($email);

       $this->email->subject('Thanks for your order');
       $this->email->message($this->email_template());
    
       if($this->email->send())
       {
        $this->load->view('order_save');
       }
       else 
       echo $this->email->print_debugger();
   }
   private function email_template($params = array())
   {
        return $this->load->view("Email", '', TRUE);
   }
}
