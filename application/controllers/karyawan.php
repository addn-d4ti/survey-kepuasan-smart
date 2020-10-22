<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_karyawan");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["karyawan"] = $this->m_karyawan->getAll();
        $this->load->view("admin/listkaryawan", $data);
    }

    public function add()
    {
        $karyawan = $this->m_karyawan;
        $validation = $this->form_validation;
        $validation->set_rules($karyawan->rules());

        if ($validation->run()) {
            $karyawan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/tambah_karyawan");
    }

}