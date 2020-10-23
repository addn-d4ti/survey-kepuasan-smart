<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_karyawan extends CI_Model
{
    private $_table = "karyawan";

    public $id_karyawan;
    public $npk;
    public $section;
    public $foto_karyawan = "";


    public function rules()
    {
        return [
            ['field' => 'npk',
            'label' => 'NPK',
            'rules' => 'required'],

            ['field' => 'section',
            'label' => 'Bidang',
            'rules' => 'required'],
            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_karyawan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_karyawan = uniqid();
        $this->npk = $post["npk"];
        $this->section = $post["section"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_karyawan = $post["id"];
        $this->npk = $post["npk"];
        $this->section = $post["section"];
        return $this->db->update($this->_table, $this, array('id_karyawan' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_karyawan" => $id));
    }
}