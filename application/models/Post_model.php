<?php

class Post_model extends CI_Model
{
    public function get_all_posts()
    {
       $query = $this->db->get('tlb_blogs');
       return $query->result();
    }
}
