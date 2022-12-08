<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_header extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('tbl_header')->result_array();
    }
}
