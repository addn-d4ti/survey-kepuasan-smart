<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Menu_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
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
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/menu_list', $data);
        $this->load->view('templates/footer');
    }

    public function read($id) 
    {
        $row = $this->Menu_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_menu' => $row->id_menu,
		'tanggal' => $row->tanggal,
		'makanan_pokok' => $row->makanan_pokok,
        'lauk_hewani' => $row->lauk_hewani,
        'lauk_nabati' => $row->lauk_nabati,
		'sayur' => $row->sayur,
		'buah' => $row->buah,
		'minuman' => $row->minuman,
        );
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('menu/menu_read', $data);
            $this->load->view('templates/footer');
            
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('menu/create_action'),
	    'id_menu' => set_value('id_menu'),
	    'tanggal' => set_value('tanggal'),
	    'makanan_pokok' => set_value('makanan_pokok'),
	    'lauk_hewani' => set_value('lauk_hewani'),
	    'lauk_nabati' => set_value('lauk_nabati'),
	    'sayur' => set_value('sayur'),
	    'buah' => set_value('buah'),
	    'minuman' => set_value('minuman'),
    );
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('menu/menu_form', $data);
        $this->load->view('templates/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tanggal' => $this->input->post('tanggal',TRUE),
		'makanan_pokok' => $this->input->post('makanan_pokok',TRUE),
		'lauk_hewani' => $this->input->post('lauk_hewani',TRUE),
		'lauk_nabati' => $this->input->post('lauk_nabati',TRUE),
        'sayur' => $this->input->post('sayur',TRUE),
        'buah' => $this->input->post('buah',TRUE),
		'minuman' => $this->input->post('minuman',TRUE),
	    );
            $this->Menu_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('menu'));
        }
    }

    public function update($id) 
    {
        $row = $this->Menu_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('menu/update_action'),
                'id_menu' => set_value('id_menu'),
	    'tanggal' => set_value('tanggal'),
	    'makanan_pokok' => set_value('makanan_pokok'),
	    'lauk_hewani' => set_value('lauk_hewani'),
	    'lauk_nabati' => set_value('lauk_nabati'),
	    'sayur' => set_value('sayur'),
	    'buah' => set_value('buah'),
	    'minuman' => set_value('minuman'),
		);
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('menu/menu_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_menu', TRUE));
        } else {
            $data = array(
                'tanggal' => $this->input->post('tanggal',TRUE),
                'makanan_pokok' => $this->input->post('makanan_pokok',TRUE),
                'lauk_hewani' => $this->input->post('lauk_hewani',TRUE),
                'lauk_nabati' => $this->input->post('lauk_nabati',TRUE),
                'sayur' => $this->input->post('sayur',TRUE),
                'buah' => $this->input->post('buah',TRUE),
                'minuman' => $this->input->post('minuman',TRUE),
        
	    );

            $this->Karyawan_model->update($this->input->post('id_menu', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('menu'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Menu_model->get_by_id($id);

        if ($row) {
            $this->Karyawan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('menu'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('menu'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('makanan_pokok', 'makanan_pokok', 'trim|required');
	$this->form_validation->set_rules('lauk_hewani', 'lauk_hewani', 'trim|required');
    $this->form_validation->set_rules('lauk_nabati', 'lauk_nabati', 'trim|required');
    $this->form_validation->set_rules('sayur', 'sayur', 'trim|required');
    $this->form_validation->set_rules('buah', 'buah', 'trim|required');
    $this->form_validation->set_rules('minuman', 'minuman', 'trim|required');


	$this->form_validation->set_rules('id_menu', 'id_menu', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

