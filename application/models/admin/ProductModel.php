<?php
class ProductModel extends CI_Model
{
    private static $table_name = "PRODUCT";

    public function count() {
        return $this->db->count_all_results(self::$table_name);
    }

    public function get_products($limit=0, $offset=0)
    {
        return $this->db->select('*')
                    ->from(self::$table_name)
                    ->limit($limit, $offset)
                    ->get()
                    ->result_array();
    }
}
?>
