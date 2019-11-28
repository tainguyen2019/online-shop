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
        '".$password."' AND role = 2");
        if($result->num_rows() > 0 )
        {
            return true;
        }
        else{
            return false;
        }
    }
}
?>