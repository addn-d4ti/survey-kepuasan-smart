<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller {

    
    public function index(){
        if($this->session->userdata('nama_user') !='')
        {
            $this->load->view("admin");
            
        }
        else
        {
            redirect(base_url() . 'Admin/login');
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
            $this->load->model('admin');
            if($this->login_model->can_login($nama_user, $password))
            {
                $session_data = array(
                    'nama_user' => $nama_user
                );
                $this->session->set_userdata($session_data);
                redirect(base_url() . 'Admin');
            }
            else
            {
                $this->session->set_flashdata('error', 'nama_user dan password salah');
                redirect(base_url() . 'Admin/login');
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
        redirect(base_url() . 'Admin/login');
    }
   

    
}