<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/MY_Controller_Admin.php');
class Orders extends MY_Controller_Admin
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/OrderModel');
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
    $total_orders = $this->OrderModel->count_orders();

    $data['records'] = $this->OrderModel->get_orders($limit, $offset);
    $data['total_orders'] = $total_orders;
    $data['total_pages'] = ceil($total_orders / $limit);
    $data['page'] = $page;
    $this->load->view('admin/OrderPage', $data);
  }

  public function confirm(){
    $id = $_GET['id'];
    $data['status'] = 2;
    $this->OrderModel->update_order($data, $id);
    redirect('admin/orders');
  }

  public function cancel(){
    $id = $_GET['id'];
    $data['status'] = 3;
    $this->OrderModel->update_order($data, $id);
    redirect('admin/orders');
  }

  public function detail(){
    $id = $_GET['id'];
		$data['details'] = $this->OrderModel->get_sale_order_lines($id);
    $data['order'] = $this->OrderModel->get_order($id);
    
		$this->load->view('admin/DetailOrder', $data);
  }
}
