<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller
{
	function __construct()
	{
		parent::__construct(); 
		$this->load->model('admin_model');
		$this->load->helper('date');
		$this->load->library('auth/ion_auth');
	}

	function index()
	{
		//TODO : make some home page
	}

	function add_content()
	{
		if($this->input->post('content_title') && $this->input->post('content'))
		{
			$this->admin_model->add_content($this->input->post('content_title'), $this->input->post('content'));
			$this->session->set_flashdata('content_added', true);
		}
	}
}
?>