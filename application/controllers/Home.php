<?php
class Home extends CI_Controller {

    public function index(){

        if ( ! file_exists(APPPATH.'views/pages/home.php') ){
            show_404();
        }

        $data['title'] = "Home | EL";
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }
}