<?php
class product_model extends CI_Model
{
   public function count_products($category_id,$brand)
   {
      $data = $this->make_query($category_id,$brand);
      $result = $this->db->query($data);
      return $result->num_rows();
   }
   public function make_query($category_id,$brand)
   {
      $result = "SELECT product.product_id, product_name, image ,price FROM product,brand 
      WHERE  product.brand_id = brand.brand_id
      AND category_id = ".$category_id;
      if(isset($brand) && !empty($brand))
      {
         $result.=" AND brand_name = '".$brand."'";
      }
      return $result;
   }
  
   public function show_products($category_id,$limit,$offset,$brand)
   {
      $result = $this->make_query($category_id ,$brand);
      $result.=" LIMIT ".$limit." OFFSET ".$offset."";
      $data = $this->db->query($result)->result_array();
      return $data; 
   }
   public function show_brands($category_id)
   {

     $result = $this->db->query("SELECT brand_name FROM brand, category,category_brand WHERE brand.brand_id = category_brand.brand_id 
     AND category.category_id = category_brand.category_id
     AND category.category_id = ".$category_id);
      return $result->result_array(); 
   }
   public function GetProductInfo($id)
    {
        $query = "SELECT * FROM product, brand
        WHERE product.brand_id=brand.brand_id AND product_id =".$id;
        $result = $this->db->query($query)->result_array();
        return $result;
    }
}
?>
