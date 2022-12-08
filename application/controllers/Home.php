<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$data["tbl_faq"] = $this->M_faq->SemuaData();
		$data["tbl_artikel"] = $this->M_artikel->SemuaData();
		$data["tbl_header"] = $this->M_header->SemuaData();
		$data["tbl_statistik"] = $this->M_statistik->SemuaData();
		$data["tbl_portfolio"] = $this->M_portofolio->SemuaData();

		$data['courselatest'] = json_decode(file_get_contents($this->config->item('url_server') . 'api/course/latest'));

		$this->load->view("home", $data);
	}

	public function kebijakan_privasi()
	{
		$this->load->view("kebijakan_privasi");
	}

	public function kirim_proses()
	{
		$this->load->view("kirim_proses");
	}

	public function artikel_all()
	{
		$this->load->view("artikel_all");
	}

	public function artikel_details1()
	{
		$this->load->view("artikel_details1");
	}
	public function artikel_details2()
	{
		$this->load->view("artikel_details2");
	}
	public function artikel_details3()
	{
		$this->load->view("artikel_details3");
	}
	public function details_course()
	{
		$this->load->view("details_course");
	}

	public function proyek_1()
	{
		$this->load->view("proyek_1");
	}
	public function proyek_2()
	{
		$this->load->view("proyek_2");
	}
	public function proyek_3()
	{
		$this->load->view("proyek_3");
	}
	public function proyek_4()
	{
		$this->load->view("proyek_4");
	}
	public function proyek_5()
	{
		$this->load->view("proyek_5");
	}
	public function proyek_6()
	{
		$this->load->view("proyek_6");
	}
	public function proyek_7()
	{
		$this->load->view("proyek_7");
	}
}
