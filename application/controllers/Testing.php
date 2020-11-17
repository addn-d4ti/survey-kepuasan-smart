<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller { 

    public function index()
    {
        if($this->session->userdata('nama_user') !='')
        {
        $this->load->view('templates/header'); // load header
        $this->load->view('templates/sidebar'); // load sidebar
        $this->load->view('templates/topbar'); // load topbar
        $this->load->view('admin/dashboard'); // LOAD CONTENT
        $this->load->view('templates/footer'); // load footer
        }
        else
        {
            redirect(base_url() . 'Testing/login');
        }
    }
  
    function login()
    {
        $this->load->view("login");
    }


    function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_user', "nama_user", 'required');
        $this->form_validation->set_rules('password', "Password", 'required');
        if($this->form_validation->run())
        {
            $nama_user = $this->input->post('nama_user');
            $password = $this->input->post('password');
            $this->load->model('login_model');
            if($this->login_model->can_login($nama_user, $password))
            {
                $session_data = array(
                    'nama_user' => $nama_user
                );
                $this->session->set_userdata($session_data);
                redirect(base_url() . 'Testing');
            }
            else
            {
                $this->session->set_flashdata('error', 'nama_user dan password salah');
                redirect(base_url() . 'Testing/login');
            }
        }
        else
        {
            $this->login();
        }

    }
     
    function logout()
    {
        $this->session->unset_userdata('nama_user');
        redirect(base_url() . 'user');
    }
   
}
