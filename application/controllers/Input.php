<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Input extends CI_Controller {

    public function index()
	{
        $this->load->model("input_model");
        $data2["fetch_data2"] = $this->input_model->fetch_data2();
        $this->load->view("input",$data2);
    }

    public function form_validation(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules("responden", "responden", 'required');
        $this->form_validation->set_rules("p1", "p1", 'required');
        $this->form_validation->set_rules("p2", "p2", 'required');
        //$this->form_validation->set_rules("p3", "p3", 'required');
        //$this->form_validation->set_rules("p4", "p4", 'required');
        //$this->form_validation->set_rules("p5", "p5", 'required');

        if($this->form_validation->run())
        {
            $this->load->model("input_model");
            $data = array(
                "responden"       =>$this->input->post("responden"),
                "p1"              =>$this->input->post("p1"),
                "p2"              =>$this->input->post("p2"),
                "p3"              =>$this->input->post("p3"),
                "p4"              =>$this->input->post("p4"),
                "p5"              =>$this->input->post("p5"),
               
            );
            $this->input_model->insert_data($data);

            redirect(base_url() . 'Input/Berhasil');
        }
        else
        {
            $this->index();
        }
    }

    public function inserted()
    {
        $this->index();
    }

    public function Berhasil()
	{
        $this->load->view("berhasil");
    }


}