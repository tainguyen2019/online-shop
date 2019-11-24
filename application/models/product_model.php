<?php
class product_model extends CI_Model
{
   function find_category_name($name)
   {
      switch($name)
      {
         case 'Mouse':
            {
               $CategoryName = 'chuot';
               break;
            }
          case 'Headphone':
            {
               $CategoryName = 'Tai nghe';
               break;
            }
          case 'Speaker':
            {
               $CategoryName = 'loa';
               break;
            } 
            case 'Keyboard':
            {
               $CategoryName = 'ban phim';
               break;
            }   
            default :
         break;
      }
      return $CategoryName;
   }
   public function count_products($category_name,$brand,$category)
   {
      $CategoryName = $this->find_category_name($category_name);
      $data = $this->make_query($CategoryName,$brand,$category);
      $result = $this->db->query($data);
      return $result->num_rows();
   }
   public function make_query($CategoryName,$brand,$category)
   {
      $result = "SELECT product.ProductID, Cost, ProductName FROM product , category, description
      WHERE product.CategoryID = category.CategoryID
      AND description.ProductID = product.ProductID
      AND category.CategoryName like '%".$CategoryName."%'
      ";
      if(isset($brand) && !empty($brand))
      {
         $result.="AND description.information = '".$brand."'";
      }
      if(isset($category) && !empty($category))
      {
         $result.="AND CategoryName = '".$category."'";
      }
      return $result;
   }
  
   public function show_products($category_name,$limit,$offset,$brand,$category)
   {
      $CategoryName = $this->find_category_name($category_name);
      $result = $this->make_query($CategoryName,$brand,$category);
      $result.=" LIMIT ".$limit." OFFSET ".$offset."";
      $data = $this->db->query($result)->result_array();
      return $data; 
   }
   public function show_categories($category_name)
   {
      $CategoryName = $this->find_category_name($category_name);
      $result = $this->db->query("SELECT CategoryName FROM category WHERE category.CategoryName like '%".$CategoryName."%'")->result_array();
      return $result; 
   }
   public function show_brands($category_name)
   {
      $CategoryName = $this->find_category_name($category_name);
      $result = $this->db->query("SELECT distinct(Information) from description, category,product  where product.CategoryID=category.CategoryID and description.ProductID = product.ProductID
                                 and category.CategoryName like '%".$CategoryName."%' and DescriptionName like '%Thuong hieu%'")->result_array();
      return $result; 
   }
   public function GetProductInfo($id)
    {
        $query = "SELECT product.ProductID ,ProductName, DescriptionName ,Information, Cost FROM description , product
         where Description.ProductID = product.ProductID  and Description.ProductID=".$id;
        $result = $this->db->query($query)->result_array();
        return $result;
    }
}
?>
