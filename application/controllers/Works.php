<?php
class Works extends CI_Controller {

    public function index(){

        if ( ! file_exists(APPPATH.'views/pages/works.php') ){
            show_404();
        }

        $data['title'] = "Works | EL";

        $this->load->view('templates/header', $data);
        $this->load->view('pages/works');
        $this->load->view('templates/footer');
    }
}