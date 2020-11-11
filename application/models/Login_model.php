<?php

class Login_model extends CI_ModeL {
    
    function can_login($nama_user, $password)
    {
        $this->db->where("nama_user", $nama_user);
        $this->db->where("password", $password);
        $quary = $this->db->get('t_user');
        if($quary->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>

