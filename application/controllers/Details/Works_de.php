<?php
class Works_de extends CI_Controller {

    public function index(){

        if ( ! file_exists(APPPATH.'views/pages/detail_pages/works_de.php') ){
            show_404();
        }

        $this->load->helper('html');
        $data['title'] = "Details | EL";
        $data['link'] = link_tag('public/css/work_de.css');
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/detail_pages/works_de');
        $this->load->view('templates/footer');
    }
}