<?php

class Model_Crud extends CI_Model{
	
function popular_uf_lte(){
	
	$query = $this->db->query("SELECT distinct uf FROM lte_control.claro_cluster order by uf");

	return $query->result();
}

function popular_site_lte(){
	
	$query = $this->db->query("SELECT distinct site, uf FROM lte_control.cells order by site");

	return $query->result();
}		
	
	
}
?>	