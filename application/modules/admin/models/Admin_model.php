<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get_all_conferences()
	{
		$all_conferences= $this->db->query("SELECT * FROM conferences");
		return $all_conferences->result_array();
	}

	function get_managers($conference_id)
	{
		$managers = $this->db->query("SELECT * FROM users WHERE id=(SELECT userid FROM managers_list WHERE conference_id=$conference_id)");
		return $managers->result_array();
	}

	function get_papers($conference_id)
	{
		$papers = $this->db->query("SELECT * FROM papers");
		return $papers->result_array();
	}

	function get_userdata()
	{
		$id=$this->ion_auth->user()->row()->id;
		$userdata = $this->db->query("SELECT * FROM users WHERE id=$id");
	}

	function get_all_papers()
	{
		$all_papers = $this->db->query("SELECT * FROM papers");
		return $all_papers->result_array();
	}

	function get_conference_input()
	{
		$conference['title']=$this->input->post('conference_title');
		$conference['description']=$this->input->post('conference_description');
		$conference['urlname']=$this->input->post('conference_url');
		$conference['start_date']=$this->input->post('conference_start');
		$conference['end_date']=$this->input->post('conference_end');
		$conference['last_edited_by']=$this->ion_auth->user()->row()->id;
		return $conference;
	}

	function get_conference($id){
		$conference=$this->db->query("SELECT * FROM conferences where conference_id=$id");
		return $conference->row_array();
	}

	function add_conference()
	{
		$this->db->insert('conferences', $this->get_conference_input());
		return true;
	}

	function check_modify_conference_input()
	{
		if($this->input->post('conference_title')) {return false;}
		if($this->input->post('conference_description')) {return false;}
		if($this->input->post('conference_url')) {return false;}
		if($this->input->post('conference_start')) {return false;}
		if($this->input->post('conference_end')) {return false;}
	}
}
?>