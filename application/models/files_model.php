<?php
/**
* 
*/
class Files_Model extends CI_Model
{
	
	function __construct() {
        
        parent::__construct();
        
    }


	public function getAllUserFiles()
	{
		$query = $this->db->get('files');

        return $query->result_array();
	}

}