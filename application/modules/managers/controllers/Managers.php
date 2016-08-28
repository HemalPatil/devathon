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
		if(!$this->ion_auth->logged_in())
		{
			redirect('/auth/login/','refresh');
		}
		if(!$this->ion_auth->in_group('managers'))
		{
			redirect('/users','refresh');
		}
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
		if($this->input->post('page_title') && $this->input->post('page_description') && $this->input->post('page_conference') && $this->input->post('page_editors'))
		{
			$page['title'] = $this->input->post('page_title');
			$page['description'] = $this->input->post('page_description');
			$page['conference_id']=$this->input->post('page_conference');
			$page['last_edited_by'] = $this->ion_auth->user()->row()->id;
			$editors = $this->input->post('page_editors');
			$this->managers_model->add_page($page, $editors);
			$this->session->set_flashdata('page_added', true);
			redirect('managers/add_page');
		}
		if(null !== $this->session->flashdata('page_added'))
		{
			$data['page_added'] = $this->session->flashdata('page_added');
		}
		$this->render_page('add_page', $data);
	}

	function assign_content()
	{
		$data = array();
		if($this->input->post('page') && $this->input->post('assigned_contents'))
		{
			$assign['page_id'] = $this->input->post('page');
			$assign['contents'] = $this->input->post('assigned_contents');
			$this->managers_model->assign_content($assign);
			$this->session->set_flashdata('assigned', true);
			redirect('managers/assign_content');
		}
		if(null !== $this->session->flashdata('assigned'))
		{
			$data['assigned'] = $this->session->flashdata('assigned');
		}
		$data['contents'] = $this->managers_model->get_all_contents();
		$data['pages'] = $this->managers_model->get_my_pages();
		$this->render_page('assign_content', $data);
	}

	function edit_pages()
	{
		$data['my_pages']= $this->managers_model->get_my_pages();
		$this->render_page('edit_page', $data);
	}

	function update_page()
	{
		$this->db->query("UPDATE pages SET title=$this->input->post('page_title') where page_id=$this->input->post('page_conference')");
		$this->db->query("UPDATE pages SET description=$this->input->post('page_description') where page_id=$this->input->post('page_conference')");
	}

}
?>