<?php
class Articles extends CI_Controller {

    public function __constract(){
        parent::__construct();
        
    }

    public function story(){

        if ( ! file_exists(APPPATH.'views/pages/academy.php') ){
            show_404();
        }

        $this->load->helper('html');
        $data['title'] = "Story | EL";
        $data['link'] = link_tag('public/css/story.css');

        $this->load->view('templates/header', $data);
        $this->load->view('pages/story');
        $this->load->view('templates/footer');
    }

    public function academy(){

        if ( ! file_exists(APPPATH.'views/pages/academy.php') ){
            show_404();
        }

        $this->load->helper('html');
        $data['title'] = "Academy | EL";
        $data['link'] = link_tag('public/css/academy.css');
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/academy');
        $this->load->view('templates/footer');
    }
    
}