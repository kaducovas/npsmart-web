<?php
class Model_baseline_configuration extends CI_Model{

	function main_rules(){
	
		$query = $this->db->query("SELECT * FROM umts_baseline.rules ORDER BY rank");
		 
		return $query->result();
	}
	
	function all_id(){
	
		$query = $this->db->query("SELECT DISTINCT (ID) FROM umts_baseline.rules ORDER BY id");
		 
		return $query->result();
	}

	function last_row_id(){

		$query = $this->db->query("SELECT rank FROM umts_baseline.rules order by rank desc limit 1");
		 
		return $query->result();
	
	}	
}
	