<?php
class AdminModel extends CI_Model
{
	public function checkAccount($email, $password)
	{
		$query = " select * from account where email=? and password=? and role='1'";

		return $this->db->query($query, array($email, $password))->result_array();
	}

	public function get_data_product_card()
	{
		$sql = "select sum(quantity) sum_quantity
		from sale_order, sale_order_line
		WHERE sale_order.order_id = sale_order_line.order_id 
		and sale_order.status=2
		and month(sale_order.write_date) = month(CURRENT_DATE()) 
		and year(sale_order.write_date) = year(CURRENT_DATE())";
		return $this->db->query($sql)->row();
	}

	public function get_data_revenue_card()
	{
		$sql = "select sum(total) revenue
		from sale_order
		WHERE status=2 and month(sale_order.write_date) = month(CURRENT_DATE()) 
		and year(sale_order.write_date) = year(CURRENT_DATE())";
		return $this->db->query($sql)->row();
	}

	public function get_data_customer_card()
	{
		$sql = "select count(distinct customer_id) count_customer
		from sale_order
		WHERE month(sale_order.write_date) = month(CURRENT_DATE()) 
		and year(sale_order.write_date) = year(CURRENT_DATE())";
		return $this->db->query($sql)->row();
	}

	public function get_data_order_card()
	{
		$sql = "select count(order_id) count_order
		from sale_order
		WHERE month(sale_order.write_date) = month(CURRENT_DATE()) 
		and year(sale_order.write_date) = year(CURRENT_DATE())";
		return $this->db->query($sql)->row();
	}

	public function get_data_chart(){
		$sql = "select category_name, result.revenue
		from category left join(select category_id, sum(amount) revenue
		from sale_order join sale_order_line on sale_order.order_id = sale_order_line.order_id
		join product on sale_order_line.product_id = product.product_id
		WHERE sale_order.status=2
		and month(sale_order.write_date) = month(CURRENT_DATE()) 
		and year(sale_order.write_date) = year(CURRENT_DATE())
		group by category_id) result
		on category.category_id = result.category_id";
		return $this->db->query($sql)->result_array();
	}
}
