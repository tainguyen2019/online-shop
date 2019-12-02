<?php
class login_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function login($email,$password)
    {
        $result = $this->db->query("SELECT *  FROM account WHERE email ='".$email."'AND password = 
        '".$password."' AND role = 2")->result_array();
        if(count($result) == 1 )
        {
            return true;
        }
        else{
            return false;
        }
    }
    public function register($account_info,$customer_info)
    {
        $this->db->insert('account',$account_info);
        $this->db->insert('customer',$customer_info);
    }
}
?>