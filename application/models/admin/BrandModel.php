<?php

class BrandModel extends CI_Model{
    private static $table_name = 'brand';
    public function get_brands($catgory_id){
        return $this->db->select('*')
                        ->from(self::$table_name)
                        ->join('category_brand', self::$table_name.'.brand_id = category_brand.brand_id ')
                        ->where('category_id', $catgory_id)
                        ->get()
                        ->result_array();
    }

    public function get_brand($id){
        return $this->db->select('brand_name')
                        ->from(self::$table_name)
                        ->where('brand_id', $id)
                        ->get()
                        ->row();
    }



}