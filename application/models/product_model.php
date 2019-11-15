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
   public function show_products($category_id)
   {
      $CategoryName = $this->find_category_name($category_id);
      $result = $this->db->query("SELECT * FROM product , category
      WHERE product.CategoryID=category.CategoryID
      and category.CategoryName like '%".$CategoryName."%'");
      return $result; 
   }
   public function show_categories($category_id)
   {
      $CategoryName = $this->find_category_name($category_id);
      $result = $this->db->query("SELECT CategoryName from category where  CategoryName like '%".$CategoryName."%' ")->result_array();
      return $result; 
   }
   public function show_brands($category_id)
   {
      $CategoryName = $this->find_category_name($category_id);
      $result = $this->db->query("SELECT distinct(Infomation) from description, category,product  where product.CategoryID=category.CategoryID and description.ProductID = product.ProductID
                                 and category.CategoryName like '%".$CategoryName."%' and DescriptionName like '%Thuong hieu%'")->result_array();
      return $result; 
   }
  
}
?>