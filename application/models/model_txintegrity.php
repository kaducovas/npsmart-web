<?php 

class Model_txintegrity extends CI_Model{
	// function cells(){
		// $query = $this->db->query(
		// "select * from umts_control.cells order by rnc,cellname;");

	// return $query->result();
	// }
function maxdate(){
	
		 $query = $this->db->query(
		 "select max(date) as date from umts_kpi.radar_network_daily where date_part('week', date + '1 day'::interval) = (select max(week) from umts_kpi.tx_weekly where year = (select max(year) from umts_kpi.tx_weekly));
;");
 return $query->result();
	}
	
	function txintegrity_network_chart($reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
select 'NETWORK' as node, 'network'::text as type,
*,
round((100*ip::real/total::real)::numeric,2) as ip_per,
round((100*atm::real/total::real)::numeric,2) as atm_per,
round((100*ip_atm::real/total::real)::numeric,2) as ip_atm_per,
 round((100*good_tx::real/total::real)::numeric,2) as good_tx_per, 
 100-round((100*good_tx::real/total::real)::numeric,2) as bad_tx_per
from
(
  SELECT count(*) FILTER (where transt = 'IP') as ip, 
	count(*) FILTER (where transt = 'ATM') as atm, 
	count(*) FILTER (where transt = 'ATM_IP') as ip_atm, 
	count(*) FILTER (where tx_integrity >=92) as good_tx,
	count(*) FILTER (where transt = 'IP' and tx_integrity < 92) as ip_bad, 
	count(*) FILTER (where transt = 'ATM' and tx_integrity < 92) as atm_bad, 
	count(*) FILTER (where transt = 'ATM_IP' and tx_integrity < 92) as ip_atm_bad,
	count(*) as total,
	year, week
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null 
  group by year, week) f
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
order by year desc, week desc, node
;");

	return $query->result();

	}
	function txintegrity_region_chart($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
select region as node, 'region'::text as type,
*,
round((100*ip::real/total::real)::numeric,2) as ip_per,
round((100*atm::real/total::real)::numeric,2) as atm_per,
round((100*ip_atm::real/total::real)::numeric,2) as ip_atm_per,
 round((100*good_tx::real/total::real)::numeric,2) as good_tx_per, 
 100-round((100*good_tx::real/total::real)::numeric,2) as bad_tx_per
from
(
  SELECT count(*) FILTER (where transt = 'IP') as ip, 
	count(*) FILTER (where transt = 'ATM') as atm, 
	count(*) FILTER (where transt = 'ATM_IP') as ip_atm, 
	count(*) FILTER (where tx_integrity >=92) as good_tx,
	count(*) FILTER (where transt = 'IP' and tx_integrity < 92) as ip_bad, 
	count(*) FILTER (where transt = 'ATM' and tx_integrity < 92) as atm_bad, 
	count(*) FILTER (where transt = 'ATM_IP' and tx_integrity < 92) as ip_atm_bad,
	count(*) as total,
	c.region, year, week
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null 
  group by c.region, year, week) f
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
and region = '".$node."'
order by year desc, week desc, node
;");

	return $query->result();

	}

	function txintegrity_rnc_chart($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
select rnc as node, 'rnc'::text as type,
*,
round((100*ip::real/total::real)::numeric,2) as ip_per,
round((100*atm::real/total::real)::numeric,2) as atm_per,
round((100*ip_atm::real/total::real)::numeric,2) as ip_atm_per,
 round((100*good_tx::real/total::real)::numeric,2) as good_tx_per, 
 100-round((100*good_tx::real/total::real)::numeric,2) as bad_tx_per
from
(
  SELECT count(*) FILTER (where transt = 'IP') as ip, 
	count(*) FILTER (where transt = 'ATM') as atm, 
	count(*) FILTER (where transt = 'ATM_IP') as ip_atm, 
	count(*) FILTER (where tx_integrity >=92) as good_tx,
	count(*) FILTER (where transt = 'IP' and tx_integrity < 92) as ip_bad, 
	count(*) FILTER (where transt = 'ATM' and tx_integrity < 92) as atm_bad, 
	count(*) FILTER (where transt = 'ATM_IP' and tx_integrity < 92) as ip_atm_bad,
	count(*) as total,
	c.rnc, year, week
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null 
  group by c.rnc, year, week) f
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
and rnc = '".$node."'
order by year desc, week desc, node
;");

	return $query->result();

	}	
	function txintegrity_nodeb_chart($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
select nodebname_norm as node, 'nodeb'::text as type,
*,
round((100*ip::real/total::real)::numeric,2) as ip_per,
round((100*atm::real/total::real)::numeric,2) as atm_per,
round((100*ip_atm::real/total::real)::numeric,2) as ip_atm_per,
 round((100*good_tx::real/total::real)::numeric,2) as good_tx_per, 
 100-round((100*good_tx::real/total::real)::numeric,2) as bad_tx_per
from
(
  SELECT count(*) FILTER (where transt = 'IP') as ip, 
	count(*) FILTER (where transt = 'ATM') as atm, 
	count(*) FILTER (where transt = 'ATM_IP') as ip_atm, 
	count(*) FILTER (where tx_integrity >=92) as good_tx,
	count(*) FILTER (where transt = 'IP' and tx_integrity < 92) as ip_bad, 
	count(*) FILTER (where transt = 'ATM' and tx_integrity < 92) as atm_bad, 
	count(*) FILTER (where transt = 'ATM_IP' and tx_integrity < 92) as ip_atm_bad,
	count(*) as total,
	c.nodebname_norm, year, week
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null 
  group by c.nodebname_norm, year, week) f
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
and nodebname_norm = '".$node."'
order by year desc, week desc, node
;");
	return $query->result();

}

	function txintegrity_uf_chart($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
select uf as node, 'uf'::text as type,
*,
round((100*ip::real/total::real)::numeric,2) as ip_per,
round((100*atm::real/total::real)::numeric,2) as atm_per,
round((100*ip_atm::real/total::real)::numeric,2) as ip_atm_per,
 round((100*good_tx::real/total::real)::numeric,2) as good_tx_per, 
 100-round((100*good_tx::real/total::real)::numeric,2) as bad_tx_per
from
(
  SELECT count(*) FILTER (where transt = 'IP') as ip, 
	count(*) FILTER (where transt = 'ATM') as atm, 
	count(*) FILTER (where transt = 'ATM_IP') as ip_atm, 
	count(*) FILTER (where tx_integrity >=92) as good_tx,
	count(*) FILTER (where transt = 'IP' and tx_integrity < 92) as ip_bad, 
	count(*) FILTER (where transt = 'ATM' and tx_integrity < 92) as atm_bad, 
	count(*) FILTER (where transt = 'ATM_IP' and tx_integrity < 92) as ip_atm_bad,
	count(*) as total,
	c.uf, year, week
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null 
  group by c.uf, year, week) f
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
and uf = '".$node."'
order by year desc, week desc, node
;");

	return $query->result();

	}

	function txintegrity_cidade_chart($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
select cidade as node, 'cidade'::text as type,
*,
round((100*ip::real/total::real)::numeric,2) as ip_per,
round((100*atm::real/total::real)::numeric,2) as atm_per,
round((100*ip_atm::real/total::real)::numeric,2) as ip_atm_per,
 round((100*good_tx::real/total::real)::numeric,2) as good_tx_per, 
 100-round((100*good_tx::real/total::real)::numeric,2) as bad_tx_per
from
(
  SELECT count(*) FILTER (where transt = 'IP') as ip, 
	count(*) FILTER (where transt = 'ATM') as atm, 
	count(*) FILTER (where transt = 'ATM_IP') as ip_atm, 
	count(*) FILTER (where tx_integrity >=92) as good_tx,
	count(*) FILTER (where transt = 'IP' and tx_integrity < 92) as ip_bad, 
	count(*) FILTER (where transt = 'ATM' and tx_integrity < 92) as atm_bad, 
	count(*) FILTER (where transt = 'ATM_IP' and tx_integrity < 92) as ip_atm_bad,
	count(*) as total,
	concat(c.cidade,' - ',c.uf) as cidade, year, week
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null 
  group by concat(c.cidade,' - ',uf), year, week) f
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
and cidade = '".$node."'
order by year desc, week desc, node
;");

	return $query->result();

	}

	function txintegrity_cluster_chart($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
select cluster as node, 'cluster'::text as type,
*,
round((100*ip::real/total::real)::numeric,2) as ip_per,
round((100*atm::real/total::real)::numeric,2) as atm_per,
round((100*ip_atm::real/total::real)::numeric,2) as ip_atm_per,
 round((100*good_tx::real/total::real)::numeric,2) as good_tx_per, 
 100-round((100*good_tx::real/total::real)::numeric,2) as bad_tx_per
from
(
  SELECT count(*) FILTER (where transt = 'IP') as ip, 
	count(*) FILTER (where transt = 'ATM') as atm, 
	count(*) FILTER (where transt = 'ATM_IP') as ip_atm, 
	count(*) FILTER (where tx_integrity >=92) as good_tx,
	count(*) FILTER (where transt = 'IP' and tx_integrity < 92) as ip_bad, 
	count(*) FILTER (where transt = 'ATM' and tx_integrity < 92) as atm_bad, 
	count(*) FILTER (where transt = 'ATM_IP' and tx_integrity < 92) as ip_atm_bad,
	count(*) as total,
	c.cluster, year, week
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null 
  group by c.cluster, year, week) f
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
and cluster = '".$node."'
order by year desc, week desc, node
;");

	return $query->result();

	}

	function txintegrity_network($reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
 SELECT 'network'::text as type, *
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null
  and (year,week) in ((".$yearnum4.",".$weeknum4."))
	order by region, c.rnc, node
;");

	return $query->result();

	}

	function txintegrity_region($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
SELECT 'region'::text as type, *
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null
  and (year,week) in ((".$yearnum4.",".$weeknum4."))
	and region = '".$node."'
	order by region, c.rnc, node
;");

	return $query->result();

	}	
	
	function txintegrity_rnc($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
SELECT 'rnc'::text as type, *
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null
  and (year,week) in ((".$yearnum4.",".$weeknum4."))	
	and c.rnc = '".$node."'
	order by region, c.rnc, node
;");

	return $query->result();

	}

	function txintegrity_nodeb($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
SELECT 'nodeb'::text as type, *
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null
	and (year,week) in ((".$yearnum4.",".$weeknum4."))	
	and node = '".$node."'
	order by region, c.rnc, node
;");

	return $query->result();

	}

	function txintegrity_uf($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
SELECT 'uf'::text as type, *
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null
  and (year,week) in ((".$yearnum4.",".$weeknum4."))
	and uf = '".$node."'
	order by region, c.rnc, node
;");

	return $query->result();

	}		

	function txintegrity_cidade($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
SELECT 'uf'::text as type, *
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null
  and (year,week) in ((".$yearnum4.",".$weeknum4."))
	and concat(cidade,' - ',uf) = '".$node."'
	order by region, c.rnc, node
;");

	return $query->result();

	}		
	
	function txintegrity_cluster($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' 0 day'));		
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2= $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2= $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");
		
		$query = $this->db->query(
		"
SELECT 'cluster'::text as type, *
  FROM umts_kpi.tx_weekly t inner join (select distinct rnc, region, uf, cidade, cluster, nodebname_norm from umts_control.cells_database) c on t.node = c.nodebname_norm
  where t.rnc is not null
  and (year,week) in ((".$yearnum4.",".$weeknum4."))
	and cluster = '".$node."'
	order by region, c.rnc, node
;");

	return $query->result();

	}

	function txintegrity_nodeb_daily($node,$reportdate){
		$daterange = $reportdate;
		$inidate = date('Y-m-d', strtotime($daterange.' -7 day'));
		$findate = date('Y-m-d', strtotime($daterange));
		$date4 = new DateTime($reportdate);
		$weeknum4 = $date4->format("W");
		$yearnum4 = $date4->format("o");
		
			 $query = $this->db->query(
			 "
select a.node, transt, date, ping_meanlost, ping_meanjitter, ping_meandelay, atm_dl_utilization, atm_ul_utilization
FROM
(
(select
CASE
WHEN left(node,char_length(node)- 2) like '%%S02%%' and char_length(node)> 8 then concat('U',substring(node,position('S02' in node) + 3,(char_length(node) - position('S02' in node) + 3)))                       
WHEN left(node,char_length(node)- 2) like '%%S01%%' and char_length(node)> 8 then concat('U',substring(node,position('S01' in node) + 3,(char_length(node) - position('S01' in node) + 3)))
WHEN left(node,char_length(node)- 2) like '%%IMP_%%' and node not like '%%S01%%' then substring(node,position('IMP_' in node) + 4,char_length(node) - position('IMP_' in node) + 4)
else node
end as node, datetime as date,
sum(ping_meanlost) as ping_meanlost, 
sum(ping_meanjitter) as ping_meanjitter, 
sum(ping_meandelay) as ping_meandelay, 
sum(atm_dl_utilization) as atm_dl_utilization, 
sum(atm_ul_utilization) as atm_ul_utilization
FROM
(
(
SELECT node, date_trunc('hour'::text, tx_integrity.datetime + '00:30:00'::interval) AS datetime, 
round(avg(ping_meanlost)::numeric,2) as ping_meanlost, 
round(avg(ping_meanjitter)::numeric,2) as ping_meanjitter, 
round(avg(ping_meandelay)::numeric,2) as ping_meandelay, 
null as atm_dl_utilization, 
null as atm_ul_utilization 
FROM umts_kpi.tx_integrity 
where datetime between '".$inidate."' and '".$findate."' 
and CASE
WHEN left(node,char_length(node)- 2) like '%%S02%%' and char_length(node)> 8 then concat('U',substring(node,position('S02' in node) + 3,(char_length(node) - position('S02' in node) + 3)))                       
WHEN left(node,char_length(node)- 2) like '%%S01%%' and char_length(node)> 8 then concat('U',substring(node,position('S01' in node) + 3,(char_length(node) - position('S01' in node) + 3)))
WHEN left(node,char_length(node)- 2) like '%%IMP_%%' and node not like '%%S01%%' then substring(node,position('IMP_' in node) + 4,char_length(node) - position('IMP_' in node) + 4)
else node
end = '".$node."'
group by node, date_trunc('hour'::text, tx_integrity.datetime + '00:30:00'::interval)
)
union
(
SELECT nodeb as node, datetime, 
null as ping_meanlost, 
null as ping_meanjitter, 
null as ping_meandelay, 
round((100::real * COALESCE(vs_atmdlmaxused_1 / NULLIF(vs_atmdltotal_1, 0::real), 0::real))::numeric, 2) AS atm_dl_utilization,
round((100::real * COALESCE(vs_atmulmaxused_1 / NULLIF(vs_atmultotal_1, 0::real), 0::real))::numeric, 2) AS atm_ul_utilization
FROM umts_kpi.tx_atm
where datetime between '".$inidate."' and '".$findate."' 
and CASE
WHEN left(nodeb,char_length(nodeb)- 2) like '%%S02%%' and char_length(nodeb)> 8 then concat('U',substring(nodeb,position('S02' in nodeb) + 3,(char_length(nodeb) - position('S02' in nodeb) + 3)))                       
WHEN left(nodeb,char_length(nodeb)- 2) like '%%S01%%' and char_length(nodeb)> 8 then concat('U',substring(nodeb,position('S01' in nodeb) + 3,(char_length(nodeb) - position('S01' in nodeb) + 3)))
WHEN left(nodeb,char_length(nodeb)- 2) like '%%IMP_%%' and nodeb not like '%%S01%%' then substring(nodeb,position('IMP_' in nodeb) + 4,char_length(nodeb) - position('IMP_' in nodeb) + 4)
else nodeb
end = '".$node."'
)
) f group by node,datetime) a left join 
(SELECT node, transt
FROM umts_kpi.tx_weekly where (year,week) in ((".$yearnum4.",".$weeknum4."))) b on a.node = b.node
)
order by date
	;");	

	return $query->result();
	}	
}