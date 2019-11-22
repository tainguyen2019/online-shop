<?php
class Product extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('detail_model');
        $this->load->library('cart');
    }
    public function show_filter($category_name = false)
    {
        $data['show_category'] = $this->product_model->show_categories($category_name);
        $data['show_brand'] = $this->product_model->show_brands($category_name);
       // $data['filter_category'] = $this->product_model->fetch_filter_type($category_id);
        //load views
        $this->load->view('Product',$data);
    }
    public function show_product_info($id)
    {
         $data['info'] = $this->product_model->GetProductInfo($id);
        $this->load->view('detail',$data);
    }
    public function show_products($category_name = false)
    {
        $data['show_category'] = $this->product_model->show_categories($category_name);
        $data['show_brand'] = $this->product_model->show_brands($category_name);   
        // load pagination library
        $this->load->library('Pagination_bootstrap');
        // customize link 
        $link = array('next'=>'Next','prev'=>'Previous', 'last'=>'Last', 'first'=>'First');
        $this->pagination_bootstrap->set_links($link);
        //load data from database
        $sql = $this->product_model->show_products($category_name);
        // set number of rows per page
        $this->pagination_bootstrap->offset(9);
        // Get number of page
       $data['show_product']=  $this->pagination_bootstrap->config("/product/show_products/".$category_name ,$sql);
       $this->load->view('Product',$data);
    }
}
?>