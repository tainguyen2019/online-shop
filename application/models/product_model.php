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
   public function make_query($CategoryName,$Product_id='')
   {
      $result = "SELECT * FROM product , category
      WHERE product.CategoryID = category.CategoryID
      AND category.CategoryName like '%".$CategoryName."%'
      ";
      if($Product_id)
      {
         $result .= "AND ProductID =".$Product_id;
      }
      $result.="ORDER BY product.ProductID asc";
      return $result;
   }
  
   public function show_products($category_name)
   {
      $CategoryName = $this->find_category_name($category_name);
      $result = $this->db->query($this->make_query($CategoryName));
      return  $result; 
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
      $result = $this->db->query("SELECT distinct(Infomation) from description, category,product  where product.CategoryID=category.CategoryID and description.ProductID = product.ProductID
                                 and category.CategoryName like '%".$CategoryName."%' and DescriptionName like '%Thuong hieu%'")->result_array();
      return $result; 
   }
   public function GetProductInfo($id)
    {
        $query = "SELECT ProductName, DescriptionName ,Infomation, Cost FROM Description , Product
         where Description.ProductID = Product.ProductID  and Description.ProductID=".$id;
        $result = $this->db->query($query)->result_array();
        return $result;
    }
}
?>
