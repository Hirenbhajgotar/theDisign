<?php
class Login_model extends CI_Model
{

// select 'id' from 'users' table and return to the 'admin/index' function --------
    public function admin_login($username, $password)
    {
        $query = $this->db->where(['username' => $username, 'password' => $password])
                          ->get('users');

                          if($query->num_rows()){
                              return $query->row()->id;
                          }
                          else{
                              return false;
                          }
    }
// ---------------------------------------------------------------------------








}




?>