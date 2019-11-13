<?php
class AdminModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function checkAccount($email, $password)
    {
        $query = " select * from admin where email=? and password=?";

        return $this->db->query($query, array($email, $password))->result_array();
    }
}
