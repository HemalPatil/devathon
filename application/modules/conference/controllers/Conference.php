<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Conference extends MX_Controller
{
	function __construct()
	{
		parent::__construct(); 
		$this->load->model('conference_model');
		$this->load->helper('date');
	}

	function index()
	{
		//TODO : make some home page
		redirect('/', 'refresh');
	}

	function render_page($page, $data)
	{
		$this->load->view('conference_dash', $data);
		$this->load->view($page, $data);
		$this->load->view('footer', $data);
	}

	function show_conference($conference_url = null)
	{
		if($conference_url == null)
		{
			redirect('/', 'refresh');
			return;
		}
		if($this->conference_model->url_exists($conference_url))
		{
			$data['pages'] = $this->conference_model->get_conference_data($conference_url);
			$this->render_page('show_conference', $data);
		}
		else
		{
			show_404();
		}
	}
}
?>