<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		$this->load->model('main_model');
	}

	public function index()
	{
		$this->all_conferences();
	}

	function render_page($page, $data)
	{
		$this->load->view('main_dash', $data);
		$this->load->view($page, $data);
		$this->load->view('footer', $data);
	}

	function all_conferences()
	{
		$data['conferences'] = $this->main_model->get_all_conferences();
		$this->render_page('all_conferences', $data);
	}
}
?>