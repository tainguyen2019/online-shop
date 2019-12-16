<?php
class home_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function get_product($id)
    {
        $result = $this->db->query("SELECT * FROM product WHERE category_id =".$id." LIMIT 4")->result_array();
        return $result;
    }
    public function get_product_info($name)
    {
        $query = "SELECT * FROM product,brand
        WHERE product.brand_id=brand.brand_id AND product_name like '%".$name."%'";
        $result = $this->db->query($query)->result_array();
        return $result;
    }
}
?>