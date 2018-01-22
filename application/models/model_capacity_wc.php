<?php 

class Model_capacity_wc extends CI_Model{
	
	function maxdate(){
		 $query = $this->db->query(
		 "select max(date) as date from umts_kpi.radar_network_daily where date_part('week', date + '1 day'::interval) = (select max(week) from umts_capacity.nodeb_utilization_weekly where year = (select max(year) from umts_capacity.nodeb_utilization_weekly));
;");
 return $query->result();
	}
	
	function rnc_capacity($yearnum,$weeknum,$node,$nekpi){
	
	if ($nekpi == 'cnbap_utilization' or $nekpi == 'dlce_utilization' or $nekpi == 'ulce_utilization') {
	$nodetable = 'nodeb';
	$nodeline = 'nodeb';
	}
	else {
	$nodetable = 'cell';
	$nodeline = 'cellname';
	}	
			 $query = $this->db->query(
			 "select year, week, region, rnc, ".$nodeline." as node, 'rnc'::text as type, ".$nekpi." as utilization, '".$nodeline."' as nodetype from umts_capacity.".$nodetable."_utilization_weekly
where year = '".$yearnum."'
and week = '".$weeknum."'
and rnc = '".$node."'
and ".$nekpi." is not null
order by ".$nekpi." desc

	;");

	return $query->result();
	}	
	
	function region_capacity($yearnum,$weeknum,$node,$nekpi){
	if ($nekpi == 'cnbap_utilization' or $nekpi == 'dlce_utilization' or $nekpi == 'ulce_utilization') {
	$nodetable = 'nodeb';
	$nodeline = 'nodeb';
	}
	else {
	$nodetable = 'cell';
	$nodeline = 'cellname';
	}	
			 $query = $this->db->query(
			 "
			 select year, week, region, rnc, ".$nodeline." as node, 'region'::text as type, ".$nekpi." as utilization, '".$nodeline."' as nodetype from umts_capacity.".$nodetable."_utilization_weekly
where year = '".$yearnum."'
and week = '".$weeknum."'
and region = '".$node."'
and ".$nekpi." is not null
order by ".$nekpi." desc
	;");

	return $query->result();
	}	

	function network_capacity($yearnum,$weeknum,$nekpi){
	if ($nekpi == 'cnbap_utilization' or $nekpi == 'dlce_utilization' or $nekpi == 'ulce_utilization') {
	$nodetable = 'nodeb';
	$nodeline = 'nodeb';
	}
	else {
	$nodetable = 'cell';
	$nodeline = 'cellname';
	}	
			 $query = $this->db->query(
			 "select year, week, region, rnc, ".$nodeline." as node, 'network'::text as type, ".$nekpi." as utilization, '".$nodeline."' as nodetype from umts_capacity.".$nodetable."_utilization_weekly
where year = '".$yearnum."'
and week = '".$weeknum."'
and ".$nekpi." is not null
order by ".$nekpi." desc
	;");

	return $query->result();
	}
	
	function node_capacity($yearnum,$weeknum,$node,$nekpi){
	if ($nekpi == 'cnbap_utilization' or $nekpi == 'dlce_utilization' or $nekpi == 'ulce_utilization') {
	$nodetable = 'nodeb';
	$nodeline = 'nodeb';
	}
	else {
	$nodetable = 'cell';
	$nodeline = 'cellname';
	}	
			 $query = $this->db->query(
			 "
			 select year, week, region, rnc, ".$nodeline." as node, '".$nodetable."'::text as type, ".$nekpi." as utilization, '".$nodeline."' as nodetype from umts_capacity.".$nodetable."_utilization_weekly
where year = '".$yearnum."'
and week = '".$weeknum."'
and ".$nodeline." = '".$node."'
and ".$nekpi." is not null
order by ".$nekpi." desc
	;");
	
	return $query->result();
	
	}

	function node_capacity_daily($reportdate,$node,$nekpi){
	if ($nekpi == 'cnbap_utilization' or $nekpi == 'dlce_utilization' or $nekpi == 'ulce_utilization') {
	$nodetable = 'nodeb';
	$nodeline = 'nodeb';
	}
	else {
	$nodetable = 'cell';
	$nodeline = 'cellname';
	}	
			$daterange = $reportdate;
		$inidate = date('Y-m-d', strtotime($daterange.' -30 day'));
		$findate = date('Y-m-d', strtotime($daterange));
			 $query = $this->db->query(
			 "
			 SELECT date, ".$nodeline." as node, ".$nekpi." as utilization, '".$nekpi."' as nekpi
  FROM umts_capacity.vw_".$nekpi."_daily
where date between '".$inidate."' and '".$findate."' 
and ".$nodeline." = '".$node."'
order by date
	;");
	
	return $query->result();
	
	}
}
