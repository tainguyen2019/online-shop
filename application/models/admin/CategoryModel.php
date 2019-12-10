<?php

class CategoryModel extends CI_Model
{
	private static $table_name = 'category';
	public function get_categories()
	{
		return $this->db->select('*')
										->from(self::$table_name)
										->get()
										->result_array();
	}

	public function get_category($id)
	{
		return $this->db->select('*')
											->from(self::$table_name)
											->where('category_id', $id)
											->get()
											->row();
	}
}
