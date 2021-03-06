<?php

class ProductModel extends CI_Model
{
	private static $table_name = 'product';
	public function count_products($category, $query)
	{
		$this->db->from(self::$table_name)
			->where('Status', '1');

		if ($category != 0) {
			$this->db->where('category_id', $category);
		}

		if (!empty($query)) {
			$this->db->like('LOWER(product_name)', strtolower($query));
		}

		return $this->db->count_all_results();
	}
	public function get_products($limit, $offset, $category, $query)
	{
		$this->db->from(self::$table_name)
			->join('category', self::$table_name . '.category_id = category.category_id')
			->where('status', '1')
			->limit($limit, $offset)
			->order_by('product_id', 'DESC');

		if ($category != 0) {
			$this->db->where(self::$table_name . '.category_id', $category);
		}

		if (!empty($query)) {
			$this->db->like('LOWER(product_name)', strtolower($query));
		}

		return $this->db->get()->result_array();
	}

	public function get_product($id)
	{
		return $this->db->select('*')
			->from(self::$table_name)
			->where('product_id', $id)
			->get()
			->row();
	}

	public function insert_product($data = [])
	{
		return $this->db->insert(self::$table_name, $data);
	}

	public function update_product($data = [], $id)
	{
		return $this->db->update(self::$table_name, $data, "product_id=" . $id);
	}

	public function get_latest_id()
	{
		return $this->db->select('product_id')
			->from(self::$table_name)
			->order_by('product_id', 'DESC')
			->limit(1)
			->get()
			->row();
	}

	public function get_all_products()
	{
		return $this->db->select('*')
			->from(self::$table_name)
			->get()
			->result_array();
	}
}
