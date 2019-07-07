<?php
class Works extends CI_Controller {

    public function index(){

        if ( ! file_exists(APPPATH.'views/pages/works.php') ){
            show_404();
        }

        $this->load->helper('html');
        $data['title'] = "Works | EL";
        $data['link'] = link_tag('public/css/works.css');

        $this->load->view('templates/header', $data);
        $this->load->view('pages/works');
        $this->load->view('templates/footer');
    }
}