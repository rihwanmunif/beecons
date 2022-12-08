<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_statistik extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('tbl_statistik')->result_array();
    }
}
