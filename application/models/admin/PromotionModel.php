<?php

class PromotionModel extends CI_Model
{
  private static $table_name = 'promotion';
  public function count_promotions()
  {
    return $this->db->from(self::$table_name)->count_all_results();
  }
  public function get_promotions($limit, $offset)
  {
    return $this->db->select('*')
      ->from(self::$table_name)
      ->join('product', 'product.product_id = promotion.product_id')
      ->limit($limit, $offset)
      ->order_by('valid_date', 'DESC')
      ->get()
      ->result_array();
  }

  public function get_promotion($promotion_code)
  {
    return $this->db->select('*')
      ->from(self::$table_name)
      ->where('promotion_code', $promotion_code)
      ->get()
      ->row();
  }

  public function insert_promotion($data = [])
  {
    return $this->db->insert(self::$table_name, $data);
  }

  public function update_promotion($data = [], $promotion_code)
  {
    return $this->db->update(self::$table_name, $data, array('promotion_code' => $promotion_code));
  }

  function unique_code($limit)
  {
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
  }

  public function delete_promotion($promtion_code)
	{
		return $this->db->delete(self::$table_name, array('promotion_code' => $promtion_code));
	}
}
