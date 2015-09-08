<?php

class Test_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	public function get(){
		$result = $this->db->query('SELECT * FROM test_table');
		return $result->result_array();
	}
}