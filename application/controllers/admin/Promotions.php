<?php

class Promotions extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/PromotionModel');
    $this->load->model('admin/ProductModel');
  }
  public function index()
  {
    $page = 1;
    $limit = 7;

    $offset = ($page - 1) * $limit;
    $total_promotions = $this->PromotionModel->count_promotions();
    $data['promotions'] = $this->PromotionModel->get_promotions($limit, $offset);
    $data['total_promtions'] = $total_promotions;
    $data['total_pages'] = ceil($total_promotions / $limit);
    $data['page'] = $page;
    $this->load->view('admin/PromotionPage', $data);
  }

  public function show_insert_form()
  {
    $data['coupon'] = $this->PromotionModel->unique_code(7);
    $data['products'] = $this->ProductModel->get_all_products();
    $this->load->view('admin/CreatePromotion', $data);
  }

  public function insert_promotion()
  {
    $data['promotion_code'] = $_POST['promotion_code'];
    $data['product_id'] = $_POST['product'];
    $data['valid_date'] = $_POST['valid_date'];
    $data['expiry_date'] = $_POST['expiry_date'];
    $data['discount'] = $_POST['discount'] / 100;

    $this->PromotionModel->insert_promotion($data);
    redirect('admin/promotions');
  }

  public function show_edit_form()
	{
		$promtion_code = $_GET['promotion_code'];
    $data['products'] = $this->ProductModel->get_all_products();
    $data['promotion'] = $this->PromotionModel->get_promotion($promtion_code);

    
		$this->load->view('admin/EditPromotion', $data);
	}

	public function edit_promotion()
	{
		$promotion_code = $_POST['promotion_code'];
		$promotion['product_id'] = $_POST['product'];
		$promotion['valid_date'] = $_POST['valid_date'];
		$promotion['expiry_date'] = $_POST['expiry_date'];
		$promotion['discount'] = $_POST['discount'] / 100;
		

		$this->PromotionModel->update_promotion($promotion, $promotion_code);
		redirect('admin/promotions');
	}


	public function delete_promotion()
	{
		$promotion_code = $_GET['promotion_code'];
		$this->PromotionModel->delete_promotion($promotion_code);
		redirect('admin/promotions');
	}
}
