<?php

class M_signin extends CI_Model
{
          function cek_signin($table, $where)
          {
                    return $this->db->get_where($table, $where);
          }
}
