<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Videos_model
 *
 * @author gill
 */
class Videos_model extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_videos($id = FALSE) {
        if ($id === FALSE) {
            $this->db->order_by('idvideos', 'DESC');
            $query = $this->db->get('videos');
            return $query->result_array();
        }
        $query = $this->db->get_where('videos', array('idnews' => $id));
        return $query->row_array();
    }

    public function set_videos($title, $src, $userId) {
        $this->videos_title = $title;
        $this->videos_src = $src;
        $this->user_iduser = $userId;
        return $this->db->insert('videos', $this);
    }

}
