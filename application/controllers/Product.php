<?php
class Product extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('detail_model');
        $this->load->library('cart');
    }
    public function show_product_info($id)
    {
         $data['info'] = $this->product_model->GetProductInfo($id);
        $this->load->view('detail',$data);
    }
    public function show_products($category_name = false)
    {
        // Get Category and Brand from Database
        $data['show_category'] = $this->product_model->show_categories($category_name);
        $data['show_brand'] = $this->product_model->show_brands($category_name);
        // Get brand and category were selected when we click to filter
        if (isset($_GET['brand']) && $_GET['brand'] !== 'Chọn Tất Cả')
        {
            $brand =  $_GET['brand'];
        }
        else{
            $brand = '';
        }
        if(isset($_GET['category']) && $_GET['category']!== 'Chọn Tất Cả')
        { 
            $category =$_GET['category'];
        }else{
            $category ='';
        }   
        $data['brand'] = $brand;
        $data['category'] = $category;
        //
        $page = 1 ;
        $limit = 9; 
        $request_page = $this->input->get('page');
        if(is_numeric($request_page))
        {
            $page = $request_page;
        }
        $data['page'] = $page;
        $offset = ($page -1) * $limit;
        $total_product = $this->product_model->count_products($category_name,$brand,$category);
        $data['show_product'] = $this->product_model->show_products($category_name,$limit,$offset,$brand,$category);
        $data['total_products'] = $total_product;
        $data['total_pages'] = ceil($total_product/$limit);
        // load on view Product page  
        $this->load->view('Product',$data);
    }
}
?>