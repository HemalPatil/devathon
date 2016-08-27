<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller
{
	function __construct()
	{
		parent::__construct(); 
		$this->load->model('admin_model');
		$this->load->model('users/users_model');
		$this->load->helper('date');
		$this->load->library('auth/ion_auth');
		if(!$this->ion_auth->logged_in())
		{
			redirect('/auth/login/','refresh');
		}
		if(!$this->ion_auth->in_group('admin'))
		{
			redirect('/users','refresh');
		}
	}

	function index()
	{
		//TODO : make some home page
		$this->add_conference();
	}

	function render_page($page, $data)
	{
		$id = $this->ion_auth->user()->row()->id;
		$data['user'] = $this->users_model->get_userdata($id);
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
		if(!$this->input->post('conference_managers')){return false;}
		return true;
	}

	function add_conference()
	{
		$data = array();
		if($this->check_conference_input())
		{
			/*$s = $this->admin_model->get_conference_input();
			print_r($s);
			return;*/
			$success = $this->admin_model->add_conference();
			$this->session->set_flashdata('conference_added', $success[0]);
			if($success[0])
			{
				$this->session->set_flashdata('modify_id', $success[1]);
			}
			redirect('admin/add_conference');
		}
		if(null !== $this->session->flashdata('conference_added'))
		{
			$data['conference_added'] = $this->session->flashdata('conference_added');
		}
		if(null !== $this->session->flashdata('modify_id'))
		{
			$data['modify_id'] = $this->session->flashdata('modify_id');
		}
		$data['users'] = $this->admin_model->get_all_users();
		$this->render_page('add_conference', $data);
	}

	function check_modify_conference_input()
	{
		if(!$this->check_conference_input()){return false;}
		if(!$this->input->post('managers_list')){return false;}
		if(!$this->input->post('pages_list')){return false;}
		if(!$this->input->post('modify_id')){return false;}
		return true;
	}

	function modify_conference()
	{
		$data = array();
		if(!$this->input->post('modify_id'))
		{
			redirect('admin/all_conferences');
		}
		if($this->check_modify_conference_input())
		{
			$this->session->set_flashdata('conference_modified', $this->admin_model->_conference());
			redirect('admin/all_conferences');
		}
		if(null !== $this->session->flashdata('conference_modified'))
		{
			$data['conference_modified'] = $this->session->flashdata('conference_modified');
		}
		$data['conference'] = $this->admin_model->get_conference($this->input->post('modify_id'));
		$data['users'] = $this->admin_model->get_all_users();
		$data['managers'] = $this->admin_model->get_managers($this->input->post('modify_id'));
		$this->render_page('modify_conference', $data);
	}

	function create_user()
	{
		$data=array();
		$this->render_page('create_user',$data);
	}
	function create_user_stat()
	{
		$data['first_name']=$this->input->post('first_name');
		$data['last_name']=$this->input->post('last_name');
		$data['email']=$this->input->post('email');
		$data['mobile']=$this->input->post('mobile');
		$id = $this->admin_model->create_single_user($data);
		echo 'User created'.$id.'done';
	}

	function lolz()
	{
		$data = array();
		$this->render_page('hello', $data);
	}
}
?>