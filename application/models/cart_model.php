<?php
class cart_model extends CI_Model
{
    public function getproductdetail($id)
    {
        $result = $this->db->query('SELECT * FROM product WHERE product_id ='.$id);
        return $result;
    }
}
?>