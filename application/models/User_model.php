<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_model
 *
 * @author gill
 */
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login($user, $password) {
        $this->db->select('iduser, login');
        $query = $this->db->get_where('user', array('login' => $user, 'password' => $password));
        if ($query->num_rows() == 1) {            
            $user = $query->result_object();            
            return $user[0];    
        } else {            
            return false;
        }
    }

}
