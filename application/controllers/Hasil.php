<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hasil extends CI_Controller {

    public function index(){
        
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $this->load->view("hasil", $data);
    }

    public function P1(){
        
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p1_j1();
        $data["p1_j2"] =  $this->hasil_model->p1_j2();
        $data["p1_j3"] =  $this->hasil_model->p1_j3();
        $data["p1_j4"] =  $this->hasil_model->p1_j4();
        
        $this->load->view("hasil", $data);
    }

    public function P2(){
        
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p2_j1();
        $data["p1_j2"] =  $this->hasil_model->p2_j2();
        $data["p1_j3"] =  $this->hasil_model->p2_j3();
        $data["p1_j4"] =  $this->hasil_model->p2_j4();
        
        $this->load->view("hasil", $data);
    }

    public function P3(){
        
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p3_j1();
        $data["p1_j2"] =  $this->hasil_model->p3_j2();
        $data["p1_j3"] =  $this->hasil_model->p3_j3();
        $data["p1_j4"] =  $this->hasil_model->p3_j4();
        
        $this->load->view("hasil", $data);
    }

    public function P4(){
        
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p4_j1();
        $data["p1_j2"] =  $this->hasil_model->p4_j2();
        $data["p1_j3"] =  $this->hasil_model->p4_j3();
        $data["p1_j4"] =  $this->hasil_model->p4_j4();
        
        $this->load->view("hasil", $data);
    }

    public function P5(){
        
        $this->load->model("hasil_model");
        $data["total_r"] =  $this->hasil_model->total();
        $data["p1_j1"] =  $this->hasil_model->p5_j1();
        $data["p1_j2"] =  $this->hasil_model->p5_j2();
        $data["p1_j3"] =  $this->hasil_model->p5_j3();
        $data["p1_j4"] =  $this->hasil_model->p5_j4();
        $data["data"] =  "data data";
        
        $this->load->view("hasil", $data);
    }

    public function getData() {

        $this->load->model('hasil_model');
        $data["p1_j1"] =  $this->hasil_model->p5_j1();
        $data["p1_j2"] =  $this->hasil_model->p5_j2();
        $data["p1_j3"] =  $this->hasil_model->p5_j3();
        $data["p1_j4"] =  $this->hasil_model->p5_j4();
        $cek = json_encode($data);
        print_r($cek);
        exit();
    }



}