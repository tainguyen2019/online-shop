<?php

class OrderModel extends CI_Model
{
	private static $table_name = 'sale_order';
	public function count_orders()
	{
		return $this->db->count_all_results();
	}
	public function get_orders($limit, $offset)
	{
    $this->db->select('*')
      ->from(self::$table_name)
			->limit($limit, $offset)
			->order_by('create_date', 'DESC');

		return $this->db->get()->result_array();
	}

	public function get_sale_order_lines($id)
	{
		return $this->db->select('product_name, amount, discount, 
															sale_order_line.quantity, sale_order_line.price')
      ->from('sale_order_line')
      ->join('product', 'product.product_id = sale_order_line.product_id')
			->where('order_id', $id)
			->get()
			->result_array();
	}

	public function get_order($id){
		return $this->db->select('*')
		->from(self::$table_name)
		->where('order_id', $id)
		->get()
		->row();
	}

	public function insert_order($data = [])
	{
		return $this->db->insert(self::$table_name, $data);
	}

	public function update_order($data = [], $id)
	{
		return $this->db->update(self::$table_name, $data, "order_id=" . $id);
	}
	
}