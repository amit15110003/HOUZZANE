<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model
{
	
	
	function get_user($name, $pwd)
	{
		$this->db->where('username', $name);
		$this->db->where('password', md5($pwd));
        $query = $this->db->get('admin');
		return $query->result();
	}
	
	function get_client()
	{
        $query = $this->db->get('user');
		return $query->result();
	}
	

	// get user
	function get_user_by_id($id)
	{
		$this->db->where('id', $id);
        $query = $this->db->get('user');
		return $query->result();
	}
	
	// insert
	function insert_user($data)
    {
		return $this->db->insert('user', $data);
	}

	function update($id, $fname, $lname, $contact)
    {	
    	$data = array('fname'=>$fname, 'lname'=>$lname, 'contact'=>$contact);
    	$this->db->where('id', $id);
		return $this->db->update('user', $data);
	}

	public function checkUser($data = array()){
		$this->db->select($this->primaryKey);
		$this->db->from($this->tableName);
		$this->db->where(array('oauth_provider'=>$data['oauth_provider'],'oauth_uid'=>$data['oauth_uid']));
		$prevQuery = $this->db->get();
		$prevCheck = $prevQuery->num_rows();
		
		if($prevCheck > 0){
			$prevResult = $prevQuery->row_array();
			$data['modified'] = date("Y-m-d H:i:s");
			$update = $this->db->update($this->tableName,$data,array('id'=>$prevResult['id']));
			$userID = $prevResult['id'];
		}else{
			$data['created'] = date("Y-m-d H:i:s");
			$data['modified'] = date("Y-m-d H:i:s");
			$insert = $this->db->insert($this->tableName,$data);
			$userID = $this->db->insert_id();
		}

		return $userID?$userID:FALSE;
    }
    function insert_image($data)
    {
		return $this->db->insert('imagelib', $data);
	}

	function insert_category($data)
    {
		return $this->db->insert('category', $data);
	}
	public function showcategory()
	{
		$query=$this->db->get('category');;
		return $query->result();
	}
	public function deletecategory($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('category'));
	}

	public function showarchitect()
	{
		$query=$this->db->get('architect');;
		return $query->result();
	}
	function insert_architect($name,$descr,$categorys)
    {
    	$data = array('name'=>$name,'descr'=>$descr,'category'=>$categorys);
		return $this->db->insert('architect', $data);
	}
	public function deletearchitect($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('architect'));
	}
	function insert_space($data)
    {
		return $this->db->insert('space', $data);
	}
	public function showspace()
	{
		$query=$this->db->get('space');;
		return $query->result();
	}
	public function deletespace($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('space'));
	}
	function insert_type($data)
    {
		return $this->db->insert('type', $data);
	}
	public function showtype()
	{
		$query=$this->db->get('type');;
		return $query->result();
	}
	public function deletetype($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('type'));
	}
	public function showlibrary()
	{
		$query=$this->db->get('library');;
		return $query->result();
	}
	function insert_library($data)
    {
    	return $this->db->insert('library', $data);
	}
	public function deletelibrary($id)
	{
		$this->db->where('id', $id);
	return($this->db->delete('library'));
	}

	public function libraryedit($id)
	{
		$this->db->where('id', $id);
		$query=$this->db->get('library');
		return $query->result();
	}
	function insert_libraryedit($data,$id)
    {
    	$this->db->where('id',$id);
		return $this->db->update('library', $data);
	}
	
}?>