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
}
?>