<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get_userdata($id)
	{
		return $this->db->query("SELECT * FROM users WHERE id=$id")->row_array();
	}

	function get_all_conferences()
	{
		$q = "SELECT * FROM conferences ORDER BY title";
		return $this->db->query($q)->result_array();
	}

	function get_my_papers()
	{
		$id = $this->ion_auth->user()->row()->id;
		$q = "SELECT * FROM papers WHERE submittedby=$id";
		return $this->db->query($q)->result_array();
	}

	function upload_file($filename)
	{
		$config['upload_path'] = './assets/papers/';
		$config['allowed_types'] = 'pdf';
		$config['max_size']	= '512';
		$config['file_name'] = $filename;
		$config['overwrite'] = true;
		$this->load->library('upload', $config);
		return $this->upload->do_upload('paper_file');
	}

	function upload_paper($upload)
	{
		$filename = 'user'.$this->ion_auth->user()->row()->id.'_conference'.$upload['conference_id'];
		if(!$this->upload_file($filename)){return false;}
		$upload['filename'] = $filename.'.pdf';
		$upload['submittedby'] = $this->ion_auth->user()->row()->id;
		$upload['approved'] = 0;
		$this->db->insert('papers', $upload);
		return true;
	}
}
?>