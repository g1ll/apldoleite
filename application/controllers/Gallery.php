<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gallery
 *
 * @author gill
 */
class Gallery extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
//        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    public function index() {
//        $data['news'] = $this->news_model->get_news();
        $this->load->view('gallery_jssor');
    }

    public function album($id = FALSE) {
        $this->load->view('album_jssor');
//        if (!$id) {
//            $this->index();
//        } else {
//            //        $data['news'] = $this->news_model->get_news();
//            $this->load->view('album_jssor');
//        }
    }

}
