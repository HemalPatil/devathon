<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Managers_model extends CI_Model
{
	function get_pages($conference_id)
	{
		$pages = $this->db->query("SELECT * FROM pages");
		return $pages->result_array();
	}

	function get_all_pages()
	{
		$all_pages = $this->db->query("SELECT * FROM pages");
		return $all_pages->result_array();
	}

	function get_all_contents()
	{
		$all_contents = $this->db->query("SELECT * FROM contents");
		return $all_contents->result_array();
	}

	function get_approved_papers()
	{
		$approved_papers= $this->db->query("SELECT * FROM papers WHERE approved=1");
		return $approved_papers->result_array();
	}

	function add_page($page)
	{
		$this->db->insert('pages', $page);
		$q = "SELECT page_id FROM pages WHERE title='{$page['title']}'";
		$result = $this->db->query($q)->row_array();
		$this->db->insert('page_editors', array('page_id'=>$result['page_id'], 'userid'=>$this->ion_auth->user()->row()->id));
		return true;
	}

	function get_all_editors()
	{
		return $this->db->query("SELECT * from users where id in (select user_id from users_groups where group_id=3)")->result_array();
	}

	function add_content($title, $content)
	{
		$this->db->insert('content', array('title'=>$title, 'content'=>$content, 'last_edited_by'=>$this->ion_auth->user()->row()->id));
	}

	function get_my_conferences()
	{
		if($this->ion_auth->in_group('admin'))
		{
			return $this->db->get('conferences')->result_array();
		}
		else if($this->ion_auth->in_group('managers'))
		{
			return $this->db->query("SELECT * FROM conferences WHERE conference_id in (SELECT conference_id from managers_list where userid=$id)")->result_array();
		}
	}
}
?>