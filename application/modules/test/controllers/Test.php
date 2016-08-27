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
		//echo 'test1';
		//print_r($this->test_model->matata());
		$data['batat'] = 'hello bitches';
		$this->load->view('view1', $data);
	}
}
?>