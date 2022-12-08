<?php

class Signin extends CI_Controller
{

          function __construct()
          {
                    parent::__construct();
                    $this->load->model('m_signin');
          }

          function index()
          {
                    $this->load->view('signin');
          }

          function aksi_signin()
          {
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    $where = array(
                              'username' => $username,
                              'password' => md5($password)
                    );
                    $cek = $this->m_signin->cek_signin("tbl_user", $where)->num_rows();
                    if ($cek > 0) {

                              $data_session = array(
                                        'nama' => $username,
                                        'status' => "signin"
                              );

                              $this->session->set_userdata($data_session);

                              redirect(base_url("admin"));
                    } else {
                              echo "Username dan password salah !";
                    }
          }

          function logout()
          {
                    $this->session->sess_destroy();
                    redirect(base_url('signin'));
          }
}
