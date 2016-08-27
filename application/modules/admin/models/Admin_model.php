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

	function get_all_contents()
	{
		$all_contents = $this->db->query("SELECT * FROM contents");
		return $all_contents->result_array();
	}

	function get_all_pages()
	{
		$all_pages = $this->db->query("SELECT * FROM pages");
		return $all_pages->result_array();
	}

	function get_all_papers()
	{
		$all_papers = $this->db->query("SELECT * FROM papers");
		return $all_papers->result_array();
	}

	function get_managers()
}
?>