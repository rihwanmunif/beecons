<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_course extends CI_Model
{
          public function get_keyword($keyword)
          {
                    $this->api->select('*');
                    $this->api->from('https://lms.lazy2.codes/api/course');
                    $this->api->like('title', $keyword);

                    return $this->api->get()->result();
          }
}
