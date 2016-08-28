<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get_all_conferences()
	{
		return $this->db->get('conferences')->result_array();
	}
}
?>