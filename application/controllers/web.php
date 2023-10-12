<?php
defined('BASEPATH') OR exit ('No Direct script access allowed');

class web extends CI_Controller
{
    function __construct(){
        parent ::__construct();
        $this->load->helper("url");
        
        
    }

    public function index(){
        $data['judul'] = "halaman home";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }

    public function blog(){
        $data['judul'] = "halaman blog";
        $this->load->view('v_header',$data);
        $this->load->view('v_blog',$data);
        $this->load->view('v_footer',$data);
    }

    public function about(){
        $data['judul'] = "halaman about";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }

}
