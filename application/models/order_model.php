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
        $result = $this->db->query("SELECT order_id FROM sale_order ORDER BY order_id DESC LIMIT 1");
        return $result;
    }
    public function get_address($customer_id)
    {
        $this->db->select('address');
        $this->db->from('customer');
        $this->db->where('customer_id',$customer_id);
        $query = $this->db->get(); 
        return $query;
    }
    public function order_save($total,$customer_id)
    {
        $get_address = $this->db->query("SELECT address FROM customer WHERE customer_id ='".$customer_id."'");
        $query = "INSERT INTO sale_order (address,total) VALUES ('".$get_address."', ".$total.")";
        $result = $this->db->query($query);
        /**$data = array(
            'address' => $this->get_address($customer_id),
            'total' => $total
        );
        $this->db->insert('sale_order',$data); */ 
        return ($this->db->affected_rows() > 0 ) ? true : false;
    }
    public function order_line_save($order_id,$product_id,$quantity,$price,$discount=0)
    {
        $amount = $quantity * $price*(1-$discount);
        /**$query =" INSERT INTO sale_order_line (order_id,product_id,quantity,price,discount,amount)
        VALUES ($order_id,$product_id,$quantity,$price,$discount,$amount)";
        $result = $this->db->query($query);*/
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