<?php
class cart_model extends CI_Model
{
    public function getproductdetail($id)
    {
        $result = $this->db->query('SELECT * FROM product WHERE product_id =' . $id);
        return $result;
    }
    public function check_discount($promotion_code)
    {
        $result = $this->db->query('SELECT product_id, discount from promotion where promotion_code = "' . $promotion_code . '"');
        return $result->result_array();
    }
}