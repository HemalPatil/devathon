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
		$this->load->view('view1');
	}

	function papertest()
	{
		$this->load->view('paper');
	}
	function add_conference()
	{
		$this->load->view('add_conference');
	}
	function login_form()
	{
		$this->load->view('user');
	}
	function dynamic()
	{
		$this->load->view('sample');
	}
	function card()
	{
		$this->load->view('card');
	}
}
?>