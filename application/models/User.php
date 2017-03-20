<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        $this->tableName = 'user';
		$this->primaryKey = 'id';
    }
	
	function get_user($email, $pwd)
	{
		$this->db->where('email', $email);
		$this->db->where('password', md5($pwd));
        $query = $this->db->get('user');
        $data['modified'] = date("Y-m-d H:i:s");
		$update = $this->db->update('user',$data);
		return $query->result();
	}
	function get_account($uid)
	{
		$this->db->where('uid', $uid);
        $query = $this->db->get('account');
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
    	$data['created'] = date("Y-m-d H:i:s");
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
	public function showdesign($id)
	{
		$this->db->where('id', $id);
		$query=$this->db->get('library');;
		return $query->result();
	}

	function insert_view($id,$view)
	{
		$data1 = array('view'=>$view);
		$this->db->where('id', $id);
        return $this->db->update('library', $data1);
	}
	function shortlist($id,$uid)
	{
		$data = array('lib'=>$id,'uid'=>$uid);
        return $this->db->insert('shortlist', $data);
	}
	
}?>