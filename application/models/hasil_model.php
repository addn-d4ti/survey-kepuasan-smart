<?php

class hasil_model extends CI_ModeL {
    
    public function total()
    {
        return $this->db->count_all('t_kuisioner');
    }

    public function p1_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p1','Sangat Baik');
        return $this->db->count_all_results();
    }

    public function p1_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p1','Baik');
        return $this->db->count_all_results();
    }

    public function p1_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p1','Cukup');
        return $this->db->count_all_results();
    }

    public function p1_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p1','Buruk');
        return $this->db->count_all_results();
    }

    public function p2_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p2','Sangat Baik');
        return $this->db->count_all_results();
    }

    public function p2_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p2','Baik');
        return $this->db->count_all_results();
    }

    public function p2_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p2','Cukup');
        return $this->db->count_all_results();
    }

    public function p2_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p2','Buruk');
        return $this->db->count_all_results();
    }

    public function p3_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p3','Sangat Baik');
        return $this->db->count_all_results();
    }

    public function p3_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p3','Baik');
        return $this->db->count_all_results();
    }

    public function p3_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p3','Cukup');
        return $this->db->count_all_results();
    }

    public function p3_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p3','Buruk');
        return $this->db->count_all_results();
    }

    public function p4_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p4','Sangat Baik');
        return $this->db->count_all_results();
    }

    public function p4_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p4','Baik');
        return $this->db->count_all_results();
    }

    public function p4_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p4','Cukup');
        return $this->db->count_all_results();
    }

    public function p4_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p4','Buruk');
        return $this->db->count_all_results();
    }

    public function p5_j1()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p5','Sangat Baik');
        return $this->db->count_all_results();
    }

    public function p5_j2()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p5','Baik');
        return $this->db->count_all_results();
    }

    public function p5_j3()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p5','Cukup');
        return $this->db->count_all_results();
    }

    public function p5_j4()
    {
        $this->db->from('t_kuisioner');
        $this->db->where('p5','Buruk');
        return $this->db->count_all_results();
    }

    public function getMahasiswa()
    {
        $query = $this->db->query("SELECT * FROM t_kuisioner ");
        return $query;
    }


}
?>

