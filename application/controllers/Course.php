<?php
class Course extends CI_Controller
{
          function index()
          {
                    //$data['course'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/course'));
                    //$data['courselatest'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/course/latest'));
                    //$data['bundling'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/bundling'));
                    //$data['bundlingdetail'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/bundling/detail/1'));

                    $this->load->view('course/course');
          }

          public function details_course($course_id)
          {
                    $data['courselatest'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/course/latest'));
                    $data['coursedetail'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/course/detail/' . $course_id));

                    $this->load->view('course/details_course', $data, $data);
          }

          public function details_training()
          {
                    $this->load->view('course/details_training');
          }

          public function login_popup()
          {
                    $this->load->view('course/login_popup');
          }

          public function details_bundling($parameter)
          {
                    $data['courselatest'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/course/latest'));
                    $data['bundlingdetail'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/bundling/detail/' . $parameter));

                    $this->load->view('course/details_bundling', $data, $data);
          }

          public function quiz()
          {
                    $this->load->view('course/quiz');
          }

          public function curl_get_file_contents($URL)
          {
                    $c = curl_init();
                    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($c, CURLOPT_URL, $URL);
                    $contents = curl_exec($c);
                    curl_close($c);

                    if ($contents) return $contents;
                    else return FALSE;
          }
}
