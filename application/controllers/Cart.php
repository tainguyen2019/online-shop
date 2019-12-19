<?php
class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cart_model');
        $this->load->library('cart');
    }
    public function index()
    {
        $data = array();
        // retrieve cart data from the session
        $data['cartItems'] = $this->cart->contents();
        $data['total'] = $this->cart->total();
        // load the cart items
        $this->load->view('Cart', $data);
    }
    public function updateCartItem()
    {
        $update = 0;

        // get cart item info
        $rowid = $_GET['rowid'];
        $qty = $_GET['qty'];

        // Update item in the cart
        if (!empty($rowid) && !empty($qty)) {
            $data = array(
                'rowid' => $rowid,
                'qty'   => $qty
            );
            $update = $this->cart->update($data);
        }
        // return response
        echo $update ? 'ok' : 'err';
    }
    public function RemoveItem($id)
    {
        $result =  $this->cart->remove($id);
        $url = base_url() . 'cart';
        redirect($url);
    }
    public function AddtoCart($id)
    {
        $item_info = $this->cart_model->getproductdetail($id)->result_array();
        $Item_detail = [
            'id' =>  $item_info[0]['product_id'],
            'name' =>  $item_info[0]['product_name'],
            'price' =>   $item_info[0]['price'],
            'image' => $item_info[0]['image'],
            'qty'   => 1
        ];
        $this->cart->insert($Item_detail);
        $this->session->set_flashdata('add_success', 'Sản phẩm bạn chọn đã được thêm vào giỏ hàng');
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}