<?php

// Suropriyo Eterprise
// Howrah

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	 
	public function index()
	{
		$this->load->view('headerView');
		$this->load->view('homepageView');
		$this->load->view('footerView');
	}

	public function Home()
	{
		$this->load->view('headerView');
		$this->load->view('homepageView');
		$this->load->view('footerView');
	}

	 
	// public function Services()
	// {

	// 	$this->load->model('ServicesModel');
	// 	$all_srv = $this->ServicesModel->get_first_six_services();
	// 	$data = array(
	// 		'allserv' => $all_srv
	// 	);

	// 	$this->load->view('headerView');
	// 	$this->load->view('servicesView', $data);
	// 	$this->load->view('footerView');

	// }
/*
	public function Careers()
	{
		$this->load->view('headerView');
		$this->load->view('careerView');
		$this->load->view('footerView');
	}
	*/

	public function ContactUs()
	{
		$this->load->view('headerView');

		$this->load->model('TestimonialsModel');
		$tsm_data = $this->TestimonialsModel->get_testimonials();

		$con_tsm_data = array(
			'tsm_d' => $tsm_data
		);

		$this->load->view('contactusView', $con_tsm_data);
		$this->load->view('footerView');
	}

	public function Jobs()
	{
		$this->load->model('JobsModel');

		$search_query = $this->input->post();
		$ques = '';
		if (isset($search_query['search'])) {
			$ques = $search_query['search'];
		}
		;

		$query = $this->JobsModel->get_search_in_anyfield_query($ques);
		$result = $this->JobsModel->get_jobmodel_query_result($query);

		$viewData = array('res' => $result);

		$this->load->view('jobsView', $viewData);
		$this->load->view('footerView');
	}

}
