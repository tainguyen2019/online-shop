<?php
class order_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_info_customer($email)
    {
        $query = "SELECT customer_id,customer_name, address,phone FROM account,customer 
        WHERE account.account_id=customer.account_id 
        AND account.email ='".$email."'";
        $result = $this->db->query($query)->result_array();
        return $result;
    }
    public function get_order_id_latest()
    {
        return $this->db->select('order_id')
                        ->from('sale_order')
                        ->order_by('order_id', 'DESC')
                        ->limit(1)
                        ->get()
                        ->row();
    }
    public function get_address($customer_id)
    {
        return $this->db->select('address')
                        ->from('customer')
                        ->where('customer_id', $customer_id)
                        ->get()
                        ->row();
    }
    public function order_save($total,$customer_id)
    {
        $data = array(
            'address' => $this->get_address($customer_id)->address,
            'total' => $total
        );
        $this->db->insert('sale_order', $data);
        return ($this->db->affected_rows() > 0 ) ? true : false;
    }
    public function order_line_save($order_id,$product_id,$quantity,$price,$discount=0)
    {
        $amount = $quantity * $price*(1-$discount);
        $data = array(
            'order_id' => $order_id,
            'product_id' => $product_id,
            'quantity'  => $quantity,
            'price' => $price,
            'discount' => $discount,
            'amount' => $amount
        ) ;
        $this->db->insert('sale_order_line',$data);
        return ($this->db->affected_rows() > 0 ) ? true : false;
    }
}
?>