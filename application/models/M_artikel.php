<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_artikel extends CI_Model
{
	public function SemuaData()
	{
		return $this->db->get('tbl_artikel')->result_array();
	}
}
