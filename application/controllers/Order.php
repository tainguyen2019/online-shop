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
        $this->send($this->session->userdata('user_email'));
        
    }
    else{
        $this->session->set_flashdata('error','Đơn hàng gặp lỗi không lưu được');
        redirect('Order');
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
        $template = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Demystifying Email Design</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap&subset=vietnamese" rel="stylesheet">
        </head>
        <body style="margin: 0; padding: 0;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">	
                <tr>
                    <td style="padding: 10px 0 30px 0;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                            <tr>
                                <td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: "Pacifico", cursive;">
                                   <h1>Thank You For Your Order</h1>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tr>';
                                    $template.='<p style="font-size : 20px; text-align : center;">Chân thành cảm ơn vì đã tin tưởng và đặt hàng trên website chúng tôi</p>
                                                <p style="font-size : 20px; text-align : center;"> Vui lòng nhấn vào <a href="http://localhost/website/Order/GotoOrderView">link</a> này để xem lại đơn hàng của bạn</p>' ;
                                       $template.= ' </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ee4c50" style="padding: 30px 30px 30px 30px;">
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tr>
                                            <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
                                                &reg; BrandCompany - Web Project <br/>
                                                <a href="#" style="color: #ffffff;"><font color="#ffffff">Unsubscribe</font></a> to this newsletter instantly
                                            </td>
                                            <td align="right" width="25%">
                                                <table border="0" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                            <a href="http://www.twitter.com/" style="color: #ffffff;">
                                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/tw.gif" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
                                                            </a>
                                                        </td>
                                                        <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                        <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                            <a href="http://www.twitter.com/" style="color: #ffffff;">
                                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/fb.gif" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>';
        return $template;
   }
}
