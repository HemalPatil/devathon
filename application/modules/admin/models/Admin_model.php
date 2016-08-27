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

	function get_all_users()
	{
		$q = "SELECT * FROM users ORDER BY first_name";
		return $this->db->query($q)->result_array();
	}

	function get_managers($conference_id)
	{
		$managers = $this->db->query("SELECT * FROM users WHERE id IN (SELECT userid FROM managers_list WHERE conference_id=$conference_id)");
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
		$conference['start_date']=date('Y-m-d', strtotime(str_replace('-', '/', $this->input->post('conference_start'))));
		$conference['end_date']=date('Y-m-d', strtotime(str_replace('-', '/', $this->input->post('conference_end'))));
		$conference['last_edited_by']=$this->ion_auth->user()->row()->id;
		$managers = array();
		$index = 0;
		$manager_array = $this->input->post('conference_managers');
		//foreach($)
		return $conference;
	}

	function get_conference($id){
		$conference=$this->db->query("SELECT * FROM conferences where conference_id=$id");
		return $conference->row_array();
	}

	function add_conference()
	{
		$conference = $this->get_conference_input();
		$this->db->insert('conferences', $conference);
		$link = $conference['urlname'];
		$q = "SELECT * FROM conferences WHERE urlname='$link'";
		$results = $this->db->query($q)->result_array();
		if(count($results) === 1)
		{
			return array(0=>true,1=>$results[0]['conference_id']);
		}
		else
		{
			return array(0=>false);
		}
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