<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show extends CI_Model
{
	public function showcategory()
	{
		$query=$this->db->get('category');;
		return $query->result();
	}
	

	public function showarchitect()
	{
		$query=$this->db->get('architect');;
		return $query->result();
	}
	
	public function showspace()
	{
		$query=$this->db->get('space');;
		return $query->result();
	}
	public function showtype()
	{
		$query=$this->db->get('type');;
		return $query->result();
	}
	
	public function showlibrary()
	{
		$query=$this->db->get('library');;
		return $query->result();
	}
	
}?>