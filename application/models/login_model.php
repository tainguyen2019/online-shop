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
    public function account_insert($account_info)
    {
        $this->db->insert('account',$account_info);
        return ($this->db->affected_rows() > 0 )?true:false;
    }
    public function customer_insert($customer_info)
    {   
        $this->db->insert('customer',$customer_info);
        return ($this->db->affected_rows() > 0 )?true:false;
    }
    public function get_account_id_latest()
    {
        return $this->db->select('account_id')
                        ->from('account')
                        ->order_by('account_id', 'DESC')
                        ->limit(1)
                        ->get()
                        ->row();
    }
}
?>