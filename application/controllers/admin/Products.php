<?php

class Products extends MY_Controller{
    public function index(){
        $this->load->model('admin/ProductModel');
        $page = 1;
        $limit = 8;
        $request_page = $this->input->get('page', TRUE);
        if(is_numeric($request_page)){
            $page = $request_page;
        }
        $offset= ($page - 1) * $limit;
        $total_products = $this->ProductModel->count_products();
        $data['records'] = $this->ProductModel->get_products($limit, $offset);
        $data['total_products'] = $total_products;
        $data['total_pages'] = ceil($total_products/$limit);
        $data['page'] = $page;
        $this->load->view('admin/ProductPage',$data);
    }
}