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

	function render_page($page, $data)
	{
		$data['user'] = $this->admin_model->get_userdata($this->ion_auth->user()->row()->id);
		$this->load->view('admin_dash', $data);
		$this->load->view($page, $data);
		$this->load->view('footer', $data);
	}

	function add_conference()
	{
		if($this->input->post('conference_title') && $this->input->post('conference_description'))
	}
}
?>