<?php

class ImageModel extends CI_Model{
    private static $table_name = 'image';
    public function get_images($product_id){
        return $this->db->select('Image')
                        ->from(self::$table_name)
                        ->where('ProductID', $product_id)
                        ->get()
                        ->result_array();
    }

}