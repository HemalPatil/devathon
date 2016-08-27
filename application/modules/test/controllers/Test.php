<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MX_Controller
{
	function __construct()
	{
		parent::__construct(); 
		$this->load->model('test_model');
		$this->load->helper('date');
		$this->load->library('auth/ion_auth');
	}

	function index()
	{
		$this->load->view('conference.php');
		$this->load->view('view1');
	}

	function view2()
	{
		$this->load->view('view2');
	}
}
?>