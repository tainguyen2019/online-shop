<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'core/MY_Controller_Admin.php');
class Home extends MY_Controller_Admin
{
    public function index()
    {
        $this->load->view('admin/AdminPage');
    }

}
