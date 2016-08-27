<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Editors extends MX_Controller
{
	function __construct()
	{
		parent::__construct(); 
		$this->load->model('users/users_model');
		$this->load->model('editors_model');
		$this->load->helper('date');
		$this->load->library('auth/ion_auth');
		if(!$this->ion_auth->logged_in())
		{
			redirect('/auth/login/','refresh');
		}
		if(!$this->ion_auth->in_group('editor'))
		{
			redirect('/users', 'refresh');
		}
	}

	function index()
	{
		//TODO : make some home page
		$this->unapproved_papers();
	}

	function render_page($page, $data)
	{
		$id = $this->ion_auth->user()->row()->id;
		$data['user'] = $this->users_model->get_userdata($id);
		$data['unapproved_number'] = count($this->editors_model->get_unapproved_papers());
		$this->load->view('editors_dash', $data);
		$this->load->view($page, $data);
		$this->load->view('footer', $data);
	}

	function unapproved_papers()
	{
		$data['papers'] = $this->editors_model->get_unapproved_papers();
		$this->render_page('unapproved_papers', $data);
	}

	function approve_paper()
	{
		if($this->input->post('action') && $this->input->post('id'))
		{
			$this->editors_model->approve_paper($this->input->post('action'), $this->input->post('id'));
		}
	}
}
?>