<?php
class Model_login extends CI_model
{
    // public function cekuser($username)
    // {
    //     $query = $this->db->query("SELECT * FROM tbl_login WHERE username = '$username'");

    //     if ($query->num_rows() == 1) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }

    // public function ceklogin($username, $password)
    // {
    //     $query = $this->db->query("SELECT * FROM tbl_login WHERE username = '$username' and password = '$password'");

    //     if ($query->num_rows() == 1) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }

    public function bisalogin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('tbl_login');
        //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
