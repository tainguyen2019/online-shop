<?php
defined('BASEPATH') or exit('No direct script access allowed');

include_once(APPPATH . 'core/MY_Controller_Admin.php');
class Home extends MY_Controller_Admin
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/AdminModel');
    }
    public function index()
    {
        $data['product_card'] = $this->AdminModel->get_data_product_card()->sum_quantity;
        $data['revenue_card'] = $this->AdminModel->get_data_revenue_card()->revenue;
        $data['customer_card'] = $this->AdminModel->get_data_customer_card()->count_customer;
        $data['order_card'] = $this->AdminModel->get_data_order_card()->count_order;
        $data['chart'] = $this->draw_chart();
        $this->load->view('admin/AdminPage', $data);
    }

    public function draw_chart()
    {
        $data_revenues = $this->AdminModel->get_data_chart();
        $data['dataPoints'] = array();
        foreach($data_revenues as $data_revenue){
            array_push($data['dataPoints'], 
            array("y" => (double)$data_revenue['revenue'], "label" =>$data_revenue['category_name'] ));
        }

        return $this->load->view('admin/AdminChart', $data, TRUE);
    }
}
