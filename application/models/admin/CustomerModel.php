<?php

class CustomerModel extends CI_Model
{
	private static $table_name = 'customer';
	public function count_customers($query)
	{
		$this->db->from(self::$table_name);

		if (!empty($query)) {
			$this->db->like('LOWER(customer_name)', strtolower($query));
		}

		return $this->db->count_all_results();
	}
	public function get_customers($limit, $offset, $query)
	{
		$this->db->from(self::$table_name)
			->join('account', self::$table_name . '.account_id = account.account_id')
			->limit($limit, $offset)
			->order_by('customer_id', 'DESC');

		if (!empty($query)) {
      $this->db->like('LOWER(customer_name)', strtolower($query));
      $this->db->or_like('LOWER(address)', strtolower($query));
      $this->db->or_like('LOWER(email)', strtolower($query));
		}

		return $this->db->get()->result_array();
	}

	public function get_customer($id)
	{
		return $this->db->select('*')
			->from(self::$table_name)
			->where('customer_id', $id)
			->get()
			->row();
	}

	public function insert_customer($data = [])
	{
		return $this->db->insert(self::$table_name, $data);
	}

	public function update_customer($data = [], $id)
	{
		return $this->db->update(self::$table_name, $data, "customer_id=" . $id);
	}
	
}