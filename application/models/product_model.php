<?php
class product_model extends CI_Model
{
   function find_category_name($id)
   {
      switch($id)
      {
         case '2':
            {
               $CategoryName = 'chuột';
               break;
            }
          case '1':
            {
               $CategoryName = 'tai nghe';
               break;
            }
          case '3':
            {
               $CategoryName = 'loa';
               break;
            } 
            case '4':
            {
               $CategoryName = 'bàn phím';
               break;
            }   
            default :
         break;
      }
      return $CategoryName;
   } 
   
   public function count_products($category_id,$brand)
   {
     //$CategoryName = $this->find_category_name($category_id);
      $data = $this->make_query($category_id,$brand);
      $result = $this->db->query($data);
      return $result->num_rows();
   }
   public function make_query($category_id,$brand)
   {
      $result = "SELECT product.product_id, product_name, price FROM product,category,brand 
      WHERE product.category_id = category.category_id
      AND product.brand_id = brand.brand_id
      AND category.category_id = ".$category_id;
      if(isset($brand) && !empty($brand))
      {
         $result.=" AND brand_name = '".$brand."'";
      }
      return $result;
   }
  
   public function show_products($category_id,$limit,$offset,$brand)
   {
      //$CategoryName = $this->find_category_name($category_name);
      $result = $this->make_query($category_id ,$brand);
      $result.=" LIMIT ".$limit." OFFSET ".$offset."";
      $data = $this->db->query($result)->result_array();
      return $data; 
   }
   public function show_brands($category_id)
   {
    // $CategoryName = $this->find_category_name($category_id);
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
