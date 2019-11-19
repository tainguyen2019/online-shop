<?php

class CategoryModel extends CI_Model{
    private static $table_name = 'category';
    public function get_categories(){
        return $this->db->select('CategoryID, CategoryName')
                        ->from(self::$table_name)
                        ->get()
                        ->result_array();
    }

}