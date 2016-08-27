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
		$this->add_conference();
	}

	function render_page($page, $data)
	{
		$data['user'] = $this->admin_model->get_userdata($this->ion_auth->user()->row()->id);
		$this->load->view('admin_dash', $data);
		$this->load->view($page, $data);
		$this->load->view('footer', $data);
	}

	function check_conference_input()
	{
		if(!$this->input->post('conference_title')){return false;}
		if(!$this->input->post('conference_description')){return false;}
		if(!$this->input->post('conference_url')){return false;}
		if(!$this->input->post('conference_start')){return false;}
		if(!$this->input->post('conference_end')){return false;}
		return true;
	}

	function add_conference()
	{
		$data = array();
		if($this->check_conference_input())
		{
			$this->session->set_flashdata('conference_added', $this->admin_model->add_conference());
			redirect('admin/add_conference');
		}
		if(null !== $this->session->flashdata('conference_added'))
		{
			$data['conference_added'] = $this->session->flashdata('conference_added');
		}
		$this->render_page('add_conference', $data);
	}

	function check_modify_conference_input()
	{
		if(!$this->check_conference_input()){return false;}
		if(!$this->input->post('managers_list')){return false;}
		if(!$this->input->post('pages_list')){return false;}
	}

	function modify_conference()
	{
		$data = array();
		if($this->check_modify_conference_input())
		{
			$this->session->set_flashdata('conference_modified', $this->admin_model->_conference());
			redirect('admin/all_conferences');
		}
		if(null !== $this->session->flashdata('conference_modified'))
		{
			$data['conference_modified'] = $this->session->flashdata('conference_modified');
		}
		$this->render_page('modify_conference', $data);
	}
}
?>