<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Editors_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get_unapproved_papers()
	{
		$unapproved_papers = $this->db->query("SELECT * FROM papers WHERE approved=0");
		return $unapproved_papers->result_array();
	}

	function approve_paper($action, $id)
	{
		if($action === 'approve')
		{
			$a = 1;
		}
		else if($action === 'reject')
		{
			$a = 2;
		}
		$q = "UPDATE papers SET approved=$a WHERE paper_id=$id";
		$this->db->query($q);
	}
}
?>