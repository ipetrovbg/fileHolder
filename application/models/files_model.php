<?php
/**
* 
*/
class Files_Model extends CI_Model
{
	
	function __construct() {
        
        parent::__construct();
        
    }


	public function getAllUserFiles($arg)
	{
		$query = $this->db->select('*');
		$query = $this->db->from('files');
		$query = $this->db->where('id_user', $arg);

		$query = $this->db->get();

        return $query->result_array();
	}

}