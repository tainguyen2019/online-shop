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
}
?>