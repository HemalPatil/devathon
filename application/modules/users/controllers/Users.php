<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('users_model');
		$this->load->helper('date');
		$this->load->library('auth/ion_auth');
		if(!$this->ion_auth->logged_in() || !$this->ion_auth->in_group('user'))
		{
			redirect('/auth/login/','refresh');
		}
	}

	function index()
	{
		//TODO : make some home page
		$this->my_papers();
	}

	function render_page($page, $data)
	{
		$id = $this->ion_auth->user()->row()->id;
		$data['user'] = $this->users_model->get_userdata($id);
		$this->load->view('users_dash', $data);
		$this->load->view($page, $data);
		$this->load->view('footer', $data);
	}

	function my_papers()
	{
		$data['mypapers'] = $this->users_model->get_my_papers();
		$this->render_page('my_papers', $data);
	}

	function upload_paper()
	{
		$data = array();
		if($this->input->post('paper_title') && $this->input->post('paper_desc') && $this->input->post('conference_id') && isset($_FILES['paper_file']))
		{
			$upload['title'] = $this->input->post('paper_title');
			$upload['description'] = $this->input->post('paper_desc');
			$upload['conference_id'] = $this->input->post('conference_id');
			$this->session->set_flashdata('uploaded', $this->users_model->upload_paper($upload));
			redirect('users/upload_paper');
		}
		if(null !== $this->session->flashdata('uploaded'))
		{
			$data['uploaded'] = $this->session->flashdata('uploaded');
		}
		$data['conferences'] = $this->users_model->get_all_conferences();
		$this->render_page('upload_paper', $data);
	}
}
?>