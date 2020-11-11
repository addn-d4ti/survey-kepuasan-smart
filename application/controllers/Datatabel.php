<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Datatabel extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }

    public function _example_output($output = null)
	{
		if($this->session->userdata('nama_user') !='')
        {
            
            $this->load->view('admin_data.php',(array)$output);
            
        }
        else
        {
            redirect(base_url() . 'Admin/login');
        }
    }
    
    public function data($data){
            $this->load->view("admin_data", $data);
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
                redirect(base_url());
            }
            else
            {
                $this->session->set_flashdata('error', 'nama_user dan password salah');
                redirect(base_url());
            }
        }
        else
        {
            $this->login();
        }

    }
    public function index(){
        if($this->session->userdata('nama_user') !='')
        {
            
            $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
            
        }
        else
        {
            redirect(base_url());
        }
    }
    function logout()
    {
        $this->session->unset_userdata('nama_user');
        redirect(base_url());
    }
 
    public function user()
    {
        
        $crud = new grocery_CRUD();
        $crud->set_table('t_user');
        $output = $crud->render();
 
        $this->_example_output($output); 
       
    }

    public function datapertanyaan()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('t_pertanyaan');
        $crud->columns('pertanyaan','isi1','isi2','isi3','isi4');
        $output = $crud->render();
 
        $this->_example_output($output);        
    } 
    
    public function dataresponden()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('t_kuisioner');
        $crud->columns('responden','p1','p2','p3','p4','p5');
        $output = $crud->render();
        
        $this->_example_output($output); 
        
    }  

    
         

}