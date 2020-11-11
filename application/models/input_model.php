<?php

class input_model extends CI_ModeL {
    
    public function insert_data($data)
    {
        $this->db->insert("t_kuisioner", $data);
    }
    public function fetch_data2()
    {
        //$query = $this->db->get("tbl_user");
        $query = $this->db->query("SELECT * FROM t_pertanyaan ORDER BY id ASC");
        return $query;
    }
}
?>

