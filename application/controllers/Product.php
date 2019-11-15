<?php
class Product extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }
    public function show_filter($category_id = false)
    {
        $data['show_category'] = $this->product_model->show_categories($category_id);
        $data['show_brand'] = $this->product_model->show_brands($category_id);
       // $data['filter_category'] = $this->product_model->fetch_filter_type($category_id);
        //load views
        $this->load->view('Product',$data);
    }
    public function show_products($category_id = false)
    {
        $data['show_category'] = $this->product_model->show_categories($category_id);
        $data['show_brand'] = $this->product_model->show_brands($category_id);
        // load pagination library
        $this->load->library('Pagination_bootstrap');
        // customize link 
        $link = array('next'=>'Next','prev'=>'Previous', 'last'=>'Last', 'first'=>'First');
        $this->pagination_bootstrap->set_links($link);
        //load data from database
        $sql = $this->product_model->show_products($category_id);
        // set number of rows per page
        $this->pagination_bootstrap->offset(9);
        // Get number of page
       $data['show_product']=  $this->pagination_bootstrap->config("/product/show_products/".$category_id,$sql);
       $this->load->view('Product',$data);
    }
    
}
?>