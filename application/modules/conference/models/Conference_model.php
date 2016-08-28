<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Conference_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function url_exists($url)
	{
		$q = "SELECT * FROM conferences WHERE urlname='$url'";
		return (count($this->db->query($q)->result_array()) === 1);
	}

	function get_conference_data($url)
	{
		$q = "SELECT * FROM conferences WHERE urlname='$url'";
		$conference = $this->db->query($q)->row_array();
		$q = "SELECT * FROM pages WHERE conference_id={$conference['conference_id']}";
		$pages = $this->db->query($q)->result_array();
		$pageindex = 0;
		$pagecount = count($pages);
		for($pageindex = 0; $pageindex<$pagecount;$pageindex++)
		{
			$pageid = $pages[$pageindex]['page_id'];
			$q = "SELECT * FROM pages_contents NATURAL JOIN content WHERE pages_contents.page_id=$pageid";
			$pages[$pageindex]['contents'] = $this->db->query($q)->result_array();
		}
		return $pages;
	}
}
?>