<?php
/**
 * Description of News_model
 *
 * @author gill
 */
class News_model extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_news($id = FALSE) {
        if ($id === FALSE) {
            $this->db->order_by('idnews', 'DESC');
            $query = $this->db->get('news');
            return $query->result_array();
        }
        $query = $this->db->get_where('news', array('idnews' => $id));
        return $query->row_array();
    }
    
    public function set_news($title,$subtitle,$text,$userId){
        $this->news_title = $title;
        $this->news_subtitle = $subtitle;
        $this->news_text = $text;
        $this->user_iduser = $userId;
        return $this->db->insert('news', $this);
    }
}
