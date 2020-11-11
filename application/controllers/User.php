<?php 

class User extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Menu_model');
        $this->load->library('form_validation');
    }

    public function index()
    {  
        $this->load->view('templates/header-user');
        // $this->load->view('template-user/sidebar');
        $this->load->view('user');
        $this->load->view('templates/footer-user');
    }

    public function menu(){
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'menu/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'menu/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'menu/index.html';
            $config['first_url'] = base_url() . 'menu/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Menu_model->total_rows($q);
        $menu = $this->Menu_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'menu_data' => $menu,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->load->view('templates/header-user');
        $this->load->view('menu', $data);
        $this->load->view('templates/footer-user');
    }

    public function login()
    {  
        $this->load->view('admin/login');
    }

}