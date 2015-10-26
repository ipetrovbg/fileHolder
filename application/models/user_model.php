<?php

Class User_Model extends CI_Model
{

 function login($username, $password)
 {
   $this ->db-> select('id, user_name, password');
   $this ->db-> from('users');
   $this ->db-> where('user_name', $username);
   $this ->db-> where('password', sha1($password));
   $this ->db-> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 public function getInfo($arg){

	$this ->db-> select('*');
	$this ->db-> from('users');
	$this ->db-> where('id', $arg);
 
	$query = $this->db->get();

	if($query -> num_rows() == 1)
	{
	 return $query->row_array();
	}
	else
	{
	 return false;
	}

 }

}