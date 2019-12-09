<?php

class Products extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/ProductModel');
		$this->load->model('admin/CategoryModel');
		$this->load->model('admin/BrandModel');
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
		$data['brands'] = $this->BrandModel->get_brands(1);

		$this->load->view('admin/CreateProduct', $data);
	}

	public function insert_product()
	{
		$product['product_id'] = 'NULL';
		$product['product_name'] = trim($_POST['product_name']);
		$product['category_id'] = $_POST['category'];
		isset($_POST['brand']) ? $product['brand_id'] = $_POST['brand'] : '';
		$product['quantity'] = $_POST['quantity'];
		$product['price'] = $_POST['cost'];
		$product['description'] = trim($_POST['description']);
		$this->ProductModel->insert_product($product);
		$product_id =  $this->ProductModel->get_latest_id()->product_id;


		$file_name = explode(".", $_FILES['image']['name']);
		$format = array_pop($file_name);
		$category_name = $this->CategoryModel->get_category($product['category_id'])->category_name;
		$category_name_convert = convert_accented_characters(str_replace(' ', '', $category_name));
		$image = $category_name_convert . '-' . $product_id . '.' . $format;
		$product['image'] = $image;
		copy($_FILES['image']['tmp_name'], 'public/images/' . $image);
		$arr = ['image' => $image];
		$this->ProductModel->update_product($arr, $product_id);
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
		$product['product_name'] = $_POST['product_name'];
		$product['category_id'] = $_POST['category'];
		isset($_POST['brand']) ? $product['brand_id'] = $_POST['brand'] : '';
		$product['quantity'] = $_POST['quantity'];
		$product['price'] = $_POST['cost'];
		$product['description'] = trim($_POST['description']);

		$this->ProductModel->update_product($product, $id);
		redirect('admin/products');
	}


	public function delete_product()
	{
		$id = $_GET['id'];
		$data['status'] = '2';
		$this->ProductModel->update_product($data, $id);
		redirect('admin/products');
	}

	public function show_detail()
	{
		$product_id = $_GET['id'];
		$data['product'] = $this->ProductModel->get_product($product_id);
		$data['brand'] = 'Không có';
		if (!empty($data['product']->brand_id)) {
			$data['brand'] = $this->BrandModel->get_brand($data['product']->brand_id)->brand_name;
		}
		
		$this->load->view('admin/DetailProduct', $data);
	}


	public function get_brands_form()
	{
		$category_id = $_GET['id'];
		$data['id'] = $category_id;
		$data['brands'] = $this->BrandModel->get_brands($category_id);

		$this->load->view('admin/BrandForm', $data);
	}
}
