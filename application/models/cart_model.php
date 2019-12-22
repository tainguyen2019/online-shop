<?php
class cart_model extends CI_Model
{
    public function getproductdetail($id)
    {
        $result = $this->db->query('SELECT * FROM product WHERE product_id ='.$id);
        return $result;
    }

    public function get_coupon_code($coupon_code){
        $query = " select * from promotion where promotion_code = '$coupon_code' 
        and expiry_date >= curdate() and valid_date <= curdate()";
		return $this->db->query($query)->result_array();
    }
}
?>