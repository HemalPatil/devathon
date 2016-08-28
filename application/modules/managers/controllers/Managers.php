<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Managers extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('users/users_model');
		$this->load->model('managers_model');
		$this->load->helper('date');
		$this->load->library('auth/ion_auth');
	}

	function index()
	{
		$data['user'] = $this->users_model->get_userdata($this->ion_auth->user()->row()->id);
		$this->load->view('managers_dash', $data);
		$this->load->view('footer', $data);
	}

	function render_page($page, $data)
	{
		$data['user'] = $this->users_model->get_userdata($this->ion_auth->user()->row()->id);
		$this->load->view('managers_dash', $data);
		$this->load->view($page, $data);
		$this->load->view('footer', $data);
	}

	function add_content()
	{
		$data = array();
		if($this->input->post('content_title') && $this->input->post('content'))
		{
			$this->managers_model->add_content($this->input->post('content_title'), $this->input->post('content'));
			$this->session->set_flashdata('content_added', true);
			redirect('managers/add_content');
		}
		if(null !== $this->session->flashdata('content_added'))
		{
			$data['content_added'] = $this->session->flashdata('content_added');
		}
		$this->render_page('add_content', $data);
	}

	function add_page()
	{
		$id=$this->ion_auth->user()->row()->id;
		$data['my_conferences'] = $this->managers_model->get_my_conferences();
		$data['editors'] = $this->managers_model->get_all_editors();
		if($this->input->post('page_title') && $this->input->post('page_description') && $this->input->post('page_conference'))
		{
			$page['title'] = $this->input->post('page_title');
			$page['description'] = $this->input->post('page_description');
			$page['conference_id']=$this->input->post('page_conference');
			$page['last_edited_by'] = $this->ion_auth->user()->row()->id;
			$this->managers_model->add_page($page);
			$this->session->set_flashdata('page_added', true);
			redirect('managers/add_page');
		}
		if(null !== $this->session->flashdata('page_added'))
		{
			$data['page_added'] = $this->session->flashdata('page_added');
		}
		$this->render_page('add_page', $data);
	}

}
?>