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
class Videos extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->load->model('videos_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $data['videos'] = $this->videos_model->get_videos();
        $this->load->view('videos',$data);
    }

}
