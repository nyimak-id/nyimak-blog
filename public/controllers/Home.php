<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('home/part/header');
		$this->load->view('home/home/home');
		$this->load->view('home/part/sidebar');
		$this->load->view('home/part/footer');
	
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */