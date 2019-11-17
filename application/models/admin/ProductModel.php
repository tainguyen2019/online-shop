<?php

class ProductModel extends CI_Model{
    private static $table_name = 'product';
    public function count_products(){
        return $this->db->count_all_results(self::$table_name);
    }
    public function get_products($limit, $offset){
        return $this->db->select('*')
                        ->from(self::$table_name)
                        ->limit($limit, $offset)
                        ->get()
                        ->result_array();
    }
}