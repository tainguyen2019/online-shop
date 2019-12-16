<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/MY_Controller_Admin.php');
class Customer extends MY_Controller_Admin
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/CustomerModel');
	}
	public function index()
	{
		$page = 1;
		$limit = 7;
		$query = isset($_GET['query']) ? trim($_GET['query']) : '';
		$request_page = $this->input->get('page', TRUE);
		if (is_numeric($request_page)) {
			$page = $request_page;
		}
		$offset = ($page - 1) * $limit;
		$total_customers = $this->CustomerModel->count_customers($query);
		$data['query'] = $query;
		$data['records'] = $this->CustomerModel->get_customers($limit, $offset, $query);
		$data['total_customers'] = $total_customers;
		$data['total_pages'] = ceil($total_customers / $limit);
		$data['page'] = $page;
		$this->load->view('admin/CustomerPage', $data);
	}

}
