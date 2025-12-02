<?php
defined('BASEPATH') or exit('No direct script allowed');

class Ortu_model extends CI_Model
{
    private $_table = "ortu";

    public function get_all()
    {
        $query = $this->db->get($this->_table);
        return $query->result_array();
    }
}