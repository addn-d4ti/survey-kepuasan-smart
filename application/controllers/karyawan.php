<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Karyawan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('Karyawan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'karyawan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'karyawan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'karyawan/index.html';
            $config['first_url'] = base_url() . 'karyawan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Karyawan_model->total_rows($q);
        $karyawan = $this->Karyawan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'karyawan_data' => $karyawan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('karyawan/karyawan_list', $data);
        $this->load->view('templates/footer');
    }

    public function read($id) 
    {
        $row = $this->Karyawan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_karyawan' => $row->id_karyawan,
		'nama' => $row->nama,
		'npk' => $row->npk,
		'bidang' => $row->bidang,
		'foto_karyawan' => $row->foto_karyawan,
        );
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('karyawan/karyawan_read', $data);
            $this->load->view('templates/footer');
            
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karyawan'));
        }
    }

    public function create() 
    {
        // $data['karyawan'] = $this->Karyawan_model->tambah_barang()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('karyawan/karyawan_form');
        $this->load->view('templates/footer');
    }
    
    public function create_action() 
    {
        // $this->_rules();

        // if ($this->form_validation->run() == FALSE) {
        //     $this->create();
        // } else {
        //     $data = array(
		// $nama          => $this->input->post('nama',TRUE),
		// $npk           => $this->input->post('npk',TRUE),
        // $bidang        => $this->input->post('bidang',TRUE),
        // $foto_karyawan => $_FILES['foto_karyawan']['nama'],
        // $config['upload_path'] = './upload/foto/',
        // $config['allowed_types'] = '.jpg|png|jpeg',
        // $this->load->library('upload', $config),
        // $foto_karyawan=$this->upload->data('file_name'),
		// // 'foto_karyawan' => $this->input->post('foto_karyawan',TRUE),
        // );
        // $data = array(
        //     'button' => 'Create',
        //     'action' => site_url('karyawan/create_action'),
	    // 'id_karyawan'   => $id_karyawan,
	    // 'nama'          => $nama,
	    // 'npk'           => $npk,
	    // 'bidang'        => $bidang,
	    // 'foto_karyawan' => $foto_karyawan,
        // );

        //     $this->Karyawan_model->insert($data);
        //     $this->session->set_flashdata('message', 'Create Record Success');
        //     redirect(site_url('karyawan'));
        // }
        $nama       = $this->input->post('nama');
        $npk     = $this->input->post('npk');
        $bidang       = $this->input->post('bidang');
        $foto_karyawan     = $_FILES['foto_karyawan']['name'];
        if ($foto_karyawan = ''){}else{
            $config ['upload_path'] = './upload/foto/';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('foto_karyawan')){
                echo "Gambar Gagal Di Upload!!";
            }else{
                $foto_karyawan=$this->upload->data('file_name');
            }
        }

        $data = array(
            'nama'      => $nama,
            'npk'    => $npk,
            'bidang'      => $bidang,
            'foto_karyawan'        => $foto_karyawan
        );

        $this->Karyawan_model->insert($data, 'karyawan');
        redirect(site_url('karyawan'));
    }
    
    public function update($id) 
    {
        $row = $this->Karyawan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('karyawan/update_action'),
		'id_karyawan' => set_value('id_karyawan', $row->id_karyawan),
		'nama' => set_value('nama', $row->nama),
		'npk' => set_value('npk', $row->npk),
		'bidang' => set_value('bidang', $row->bidang),
		'foto_karyawan' => set_value('foto_karyawan', $row->foto_karyawan),
        );
            $this->load->view('templates/header');
            $this->load->view('templates/topbar');
            $this->load->view('templates/sidebar');
            $this->load->view('karyawan/karyawan_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karyawan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_karyawan', TRUE));
        } else {
            $data = array(
		'nama' => $this->input->post('nama',TRUE),
		'npk' => $this->input->post('npk',TRUE),
		'bidang' => $this->input->post('bidang',TRUE),
		'foto_karyawan' => $this->input->post('foto_karyawan',TRUE),
	    );

            $this->Karyawan_model->update($this->input->post('id_karyawan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('karyawan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Karyawan_model->get_by_id($id);

        if ($row) {
            $this->Karyawan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('karyawan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('karyawan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('npk', 'npk', 'trim|required');
	$this->form_validation->set_rules('bidang', 'bidang', 'trim|required');
	$this->form_validation->set_rules('foto_karyawan', 'foto karyawan', 'trim|required');

	$this->form_validation->set_rules('id_karyawan', 'id_karyawan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

