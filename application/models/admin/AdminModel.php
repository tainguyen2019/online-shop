<?php
class AdminModel extends CI_Model
{
    public function checkAccount($email, $password)
    {
        $query = " select * from account where email=? and password=? and role='1'";

        return $this->db->query($query, array($email, $password))->result_array();
    }
}
