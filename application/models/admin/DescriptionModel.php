<?php

class DescriptionModel extends CI_Model{
    private static $table_name = 'description';
    public function get_descriptions($product_id){
        return $this->db->select('DescriptionName, Information')
                        ->from(self::$table_name)
                        ->where('ProductID', $product_id)
                        ->get()
                        ->result_array();
    }

}