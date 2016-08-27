<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function matata()
	{
		return array('fg'=>'we', 'qa'=>'sd');
	}
}
?>