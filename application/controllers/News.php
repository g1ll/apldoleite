<?php

//APL
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['news'] = $this->news_model->get_news();
        $this->load->view('news',$data);
    }

    public function news_view($id = NULL) {
        
        $data['news_item'] = $this->news_model->get_news($id);
        
        if (empty($data['news_item'])) {
            $this->index();
//            show_404();
        }else{
//            $data['news_item']['image'] = $this->news_model->get_news($id);
            $this->load->view('news_view', $data);
        }        
    }

}
