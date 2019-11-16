<?php
class Product extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/ProductModel', 'ProductModel', TRUE);
    }

    public function index()
    {
        $page = 1;
        $limit = 5;
        $request_page = $this->input->get('page', TRUE);
        if(is_numeric($request_page)) {
            $page = $request_page;
        }
        $offset = ($page - 1) * $limit;
        $records = $this->ProductModel->get_products($limit, $offset);
        $total = $this->ProductModel->count();
        
        $data['records'] = $records;
        $data['total'] = $total;
        $data['limit'] = $limit;
        $data['page'] = $page;
        $data['total_pages'] = ceil($total / $limit);
        $this->load->view('admin/ProductPage', $data);
    }
}
?>
