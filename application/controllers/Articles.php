<?php
class Articles extends CI_Controller {

    public function index(){
    }

    public function story(){

        if ( ! file_exists(APPPATH.'views/pages/academy.php') ){
            show_404();
        }

        $data['title'] = "Story | EL";
        $data['link'] ="";

        $this->load->view('templates/header', $data);
        $this->load->view('pages/story');
        $this->load->view('templates/footer');
    }

    public function academy(){

        if ( ! file_exists(APPPATH.'views/pages/academy.php') ){
            show_404();
        }

        $data['title'] = "Academy | EL";
        $data['link'] ="";
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/academy');
        $this->load->view('templates/footer');
    }
    
}