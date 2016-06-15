<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author gill
 */
class Admin extends CI_Controller {

    private $user_session;

    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('session');
        if($this->session->userdata("logged_user")&&!empty($this->session->userdata("user"))){
            $this->user_session = $this->session->userdata("user");
        }
    }

    public function index() {
        if ($this->session->userdata("logged_user")) {
            $data['user'] = $this->user_session;
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin', $data);
            $this->load->view('admin/admin_footer');
        } else {
            $this->login();
        }
    }

    public function news() {
//        $this->load->library('../controllers/News');
        if ($this->session->userdata("logged_user")) {
            $this->load->model('news_model');
            $data['news'] = $this->news_model->get_news();
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_news', $data);
            $this->load->view('admin/admin_footer');
        } else {
            $this->login();
        }
    }

    public function news_add() {        
        if ($this->session->userdata("logged_user")) {           
            $this->load->model('news_model');
            if (!$this->input->post('submit')) {
                $this->load->view('admin/admin_header');
                $this->load->view('admin/admin_news_add');
                $this->load->view('admin/admin_footer');
            } else {
                if ($this->news_model->set_news($this->input->post('title'), $this->input->post('subtitle'), $this->input->post('text'), $this->user_session->iduser)) {
                    $data["insert"] = true;
                    $this->load->view('admin/admin_header');
                    $this->load->view('admin/admin_news_add', $data);
                    $this->load->view('admin/admin_footer');
                }
            }
        } else {
            $this->login();
        }
    }

    public function login() {
        if ($this->session->userdata("logged_user")) {
            $this->index();
        } else {
            if ($this->input->post('submit')) {
                $this->user_session = $this->verify_login();
                if ($this->user_session) {                   
                    $this->session->set_userdata('user',$this->user_session);
                    $this->session->set_userdata('logged_user',TRUE);
                    redirect('admin', 'refresh');
                } else {
                    $this->load->view('admin/admin_header');
                    $this->load->view('admin/admin_login');
                    $this->load->view('admin/admin_footer');
                }
            } else {
                $this->load->view('admin/admin_header');
                $this->load->view('admin/admin_login');
                $this->load->view('admin/admin_footer');
            }
        }
    }

    public function verify_login() {        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            return false;
        } else {
            $this->load->model('user_model');
            return $this->user_model->login($this->input->post('user'), $this->input->post('password'));
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login', 'refresh');
    }

}
