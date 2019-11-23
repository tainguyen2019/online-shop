<?php

class Products extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/ProductModel');
        $this->load->model('admin/CategoryModel');
        $this->load->model('admin/DescriptionModel');
        $this->load->model('admin/ImageModel');
    }
    public function index()
    {
        $page = 1;
        $limit = 7;
        $category = isset($_GET['category']) ? $_GET['category'] : 0;
        $query = isset($_GET['query']) ? trim($_GET['query']) : '';
        $request_page = $this->input->get('page', TRUE);
        if (is_numeric($request_page)) {
            $page = $request_page;
        }
        $offset = ($page - 1) * $limit;
        $total_products = $this->ProductModel->count_products($category, $query);
        $data['cate'] = $category;
        $data['query'] = $query;
        $data['categories'] = $this->CategoryModel->get_categories();
        $data['records'] = $this->ProductModel->get_products($limit, $offset, $category, $query);
        $data['total_products'] = $total_products;
        $data['total_pages'] = ceil($total_products / $limit);
        $data['page'] = $page;
        $this->load->view('admin/ProductPage', $data);
    }

    public function show_insert_form()
    {
        $data['categories'] = $this->CategoryModel->get_categories();
        $this->load->view('admin/CreateProduct', $data);
    }

    public function insert_product()
    {
        $product['ProductID'] = 'NULL';
        $product['ProductName'] = $_POST['product_name'];
        $product['CategoryID'] = $_POST['category'];
        $product['Quantity'] = $_POST['quantity'];
        $product['Cost'] = $_POST['cost'];

        $this->ProductModel->insert_product($product);
        redirect('admin/products');
    }

    public function show_edit_form()
    {
        $id = $_GET['id'];
        $data['categories'] = $this->CategoryModel->get_categories();
        $data['product'] = $this->ProductModel->get_product($id);
        $this->load->view('admin/EditProduct', $data);
    }

    public function edit_product()
    {
        $id = $_GET['id'];
        $product['ProductName'] = $_POST['product_name'];
        $product['CategoryID'] = $_POST['category'];
        $product['Quantity'] = $_POST['quantity'];
        $product['Cost'] = $_POST['cost'];

        $this->ProductModel->update_product($product, $id);
        redirect('admin/products');
    }


    public function delete_product()
    {
        $id = $_GET['id'];
        $data['Status'] = '0';
        $this->ProductModel->update_product($data, $id);
        redirect('admin/products');
    }

    public function show_detail()
    {
        $product_id = $_GET['id'];
        $data['product'] = $this->ProductModel->get_product($product_id);
        $data['descriptions'] = $this->DescriptionModel->get_descriptions($product_id);
        $data['images'] = $this->ImageModel->get_images($product_id);
        $this->load->view('admin/DetailProduct', $data);
    }


    public function test()
    {
        var_dump($_FILES);
    }
}