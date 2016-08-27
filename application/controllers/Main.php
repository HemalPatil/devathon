<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function index()
	{
		$this->all_conferences();
		$this->load->model('managers')
	}

	function all_conferences()
	{
		$this->load->view()
	}
}
?>