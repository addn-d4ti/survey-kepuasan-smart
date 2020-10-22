<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller { 

    public function index()
    {
        // contoh templating
        $this->load->view('templates/header'); // load header
        $this->load->view('templates/sidebar'); // load sidebar
        $this->load->view('templates/topbar'); // load topbar
        $this->load->view('admin/dashboard'); // LOAD CONTENT
        $this->load->view('templates/footer'); // load footer
    }

    public function listkaryawan()
    {
        $this->load->view('templates/header'); // load header
        $this->load->view('templates/sidebar'); // load sidebar
        $this->load->view('templates/topbar'); // load topbar
        $this->load->view('admin/listkaryawan'); // LOAD CONTENT
        $this->load->view('templates/footer'); // load footer
    }
}