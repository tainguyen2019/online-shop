<?php
class cart_model extends CI_Model
{
    public function getproductdetail($id)
    {
        $result = $this->db->query('SELECT * FROM product WHERE ProductID ='.$id);
        return $result;
    }
}
?>