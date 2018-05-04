<?php 

class Model_unbalance extends CI_Model{
	// function cells(){
		// $query = $this->db->query(
		// "select * from umts_control.cells order by rnc,cellname;");

	// return $query->result();
	// }
	
	function maxdate(){
	
		 $query = $this->db->query(
		 "select max(date) as date from umts_kpi.radar_network_daily where date_part('week', date + '1 day'::interval) = (select max(week) from umts_kpi.load_ee where year = (select max(year) from umts_kpi.load_ee));
;");
 return $query->result();
	}

	function unbalance_network($reportdate){
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
		"select node, 'region' as type,
STRING_AGG(week::text, ',' order by year desc,week desc) AS weeks,
STRING_AGG(azimuth_no::text, ',' order by year desc,week desc) AS azimuth_no
from
(select node, 'region' as type,
week, year, sum(no_nok) as azimuth_no
from
((select distinct azimuth,  nodeb, region as node, 1 as no_nok, year, week
from 
(select distinct azimuth, nodeb, region, balanced, year, week
FROM umts_kpi.load_ee 
		where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and balanced = 'NOK'
		group by region,azimuth, nodeb, balanced, year, week) t group by azimuth,  nodeb, region, year, week) 
union
(select distinct azimuth,  nodeb, region as node, 0 as no_nok, year, week
from 
(select distinct azimuth,  nodeb, region, balanced, year, week
FROM umts_kpi.load_ee 
		where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and balanced = 'OK'
		group by region,azimuth, nodeb, balanced, year, week) t group by azimuth, region, nodeb, year, week))
f group by node, week,year order by week, node) t group by node
;");

	return $query->result();

	}
			
			
	function unbalance_region($node,$reportdate){
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
		"select node, 'region'::text as type,
STRING_AGG(week::text, ',' order by year desc,week desc) AS weeks,
STRING_AGG(region::text, ',' order by year desc,week desc) AS region,
STRING_AGG(rnc::text, ',' order by year desc,week desc) AS rnc,
STRING_AGG(nodeb::text, ',' order by year desc,week desc) AS nodeb,
STRING_AGG(carrier::text, ',' order by year desc,week desc) AS carrier,
STRING_AGG(azimuth::text, ',' order by year desc,week desc) AS azimuth,
STRING_AGG(round(ee,2)::text, ',' order by year desc,week desc) AS ee,
STRING_AGG(round(load,2)::text, ',' order by year desc,week desc) AS load,
STRING_AGG(round(avg_ee,2)::text, ',' order by year desc,week desc) AS avg_ee,
STRING_AGG(balanced::text, ',' order by year desc,week desc) AS balanced,
STRING_AGG(highly_loaded_cell::text, ',' order by year desc,week desc) AS hl_cell
FROM umts_kpi.load_ee
		where (year,week) in ((".$yearnum4.",".$weeknum4."))
		and region = '".$node."'
		group by node
		order by nodeb,azimuth,carrier
;");

	return $query->result();

	}

	function unbalance_rnc($node,$reportdate){
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
		select node, 'rnc'::text as type,
STRING_AGG(week::text, ',' order by year desc,week desc) AS weeks,
STRING_AGG(region::text, ',' order by year desc,week desc) AS region,
STRING_AGG(rnc::text, ',' order by year desc,week desc) AS rnc,
STRING_AGG(nodeb::text, ',' order by year desc,week desc) AS nodeb,
STRING_AGG(carrier::text, ',' order by year desc,week desc) AS carrier,
STRING_AGG(azimuth::text, ',' order by year desc,week desc) AS azimuth,
STRING_AGG(round(ee,2)::text, ',' order by year desc,week desc) AS ee,
STRING_AGG(round(load,2)::text, ',' order by year desc,week desc) AS load,
STRING_AGG(round(avg_ee,2)::text, ',' order by year desc,week desc) AS avg_ee,
STRING_AGG(balanced::text, ',' order by year desc,week desc) AS balanced,
STRING_AGG(highly_loaded_cell::text, ',' order by year desc,week desc) AS hl_cell
FROM umts_kpi.load_ee
		where (year,week) in ((".$yearnum4.",".$weeknum4."))
		and rnc = '".$node."'
		group by node
		order by nodeb,azimuth,carrier
;");

	return $query->result();

	}

function unbalance_nodeb($node,$reportdate){
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
		select node, 'nodeb'::text as type,
STRING_AGG(week::text, ',' order by year desc,week desc) AS weeks,
STRING_AGG(region::text, ',' order by year desc,week desc) AS region,
STRING_AGG(rnc::text, ',' order by year desc,week desc) AS rnc,
STRING_AGG(nodeb::text, ',' order by year desc,week desc) AS nodeb,
STRING_AGG(carrier::text, ',' order by year desc,week desc) AS carrier,
STRING_AGG(azimuth::text, ',' order by year desc,week desc) AS azimuth,
STRING_AGG(round(ee,2)::text, ',' order by year desc,week desc) AS ee,
STRING_AGG(round(load,2)::text, ',' order by year desc,week desc) AS load,
STRING_AGG(round(avg_ee,2)::text, ',' order by year desc,week desc) AS avg_ee,
STRING_AGG(balanced::text, ',' order by year desc,week desc) AS balanced,
STRING_AGG(highly_loaded_cell::text, ',' order by year desc,week desc) AS hl_cell
FROM umts_kpi.load_ee
		where (year,week) in ((".$yearnum4.",".$weeknum4."))	
		and 
		CASE
				WHEN left(nodeb,char_length(nodeb)- 2) like '%%S02%%' and char_length(nodeb)> 8 then concat('U',substring(nodeb,position('S02' in nodeb) + 3,(char_length(nodeb) - position('S02' in nodeb) + 3)))                       
				WHEN left(nodeb,char_length(nodeb)- 2) like '%%S01%%' and char_length(nodeb)> 8 then concat('U',substring(nodeb,position('S01' in nodeb) + 3,(char_length(nodeb) - position('S01' in nodeb) + 3)))
				WHEN left(nodeb,char_length(nodeb)- 2) like '%%IMP_%%' and nodeb not like '%%S01%%' then substring(nodeb,position('IMP_' in nodeb) + 4,char_length(nodeb) - position('IMP_' in nodeb) + 4)
				else nodeb
	end	  = '".$node."'
		group by node
		order by nodeb,azimuth,carrier
;");

	return $query->result();

	}

	function unbalance_cell($node,$reportdate){
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
		select node, 'cell'::text as type,
STRING_AGG(week::text, ',' order by year desc,week desc) AS weeks,
STRING_AGG(region::text, ',' order by year desc,week desc) AS region,
STRING_AGG(rnc::text, ',' order by year desc,week desc) AS rnc,
STRING_AGG(nodeb::text, ',' order by year desc,week desc) AS nodeb,
STRING_AGG(carrier::text, ',' order by year desc,week desc) AS carrier,
STRING_AGG(azimuth::text, ',' order by year desc,week desc) AS azimuth,
STRING_AGG(round(ee,2)::text, ',' order by year desc,week desc) AS ee,
STRING_AGG(round(load,2)::text, ',' order by year desc,week desc) AS load,
STRING_AGG(round(avg_ee,2)::text, ',' order by year desc,week desc) AS avg_ee,
STRING_AGG(balanced::text, ',' order by year desc,week desc) AS balanced,
STRING_AGG(highly_loaded_cell::text, ',' order by year desc,week desc) AS hl_cell
FROM umts_kpi.load_ee
		where (year,week) in ((".$yearnum4.",".$weeknum4."))	
		and 
		node = '".$node."'
		group by node
		order by nodeb,azimuth,carrier
;");

	return $query->result();

	}
function unbalance_chart($reportdate){
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
		"select node, 'region' as type,
year, week, sum(no_nok) as azimuth_no
from
((select distinct azimuth,  nodeb, region as node, 1 as no_nok, year, week
from 
(select distinct azimuth, nodeb, region, balanced, year, week
FROM umts_kpi.load_ee 
		where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and balanced = 'NOK'
		group by region,azimuth, nodeb, balanced, year, week) t group by azimuth,  nodeb, region, year, week) 
union
(select distinct azimuth,  nodeb, region as node, 0 as no_nok, year, week
from 
(select distinct azimuth,  nodeb, region, balanced, year, week
FROM umts_kpi.load_ee 
		where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and balanced = 'OK'
		group by region,azimuth, nodeb, balanced, year, week) t group by azimuth, region, nodeb, year, week))
f group by node, year, week order by year, week, node
;");

	return $query->result();

	}
	
	function unbalance_daily($node,$reportdate){
		
		$query = $this->db->query(
		"SELECT nodeb as node, 
  a.rnc,
  b.cell,
  a.cellid, 
  STRING_AGG(datetime::text, ',' order by datetime) as date,
  STRING_AGG(ee::text, ',' order by datetime) as ee
  FROM (select c.rnc, c.cellid, c.datetime, 
  case when d.ee is null then 'null'::text 
else d.ee::text
end 
from (select * from (select distinct rnc,cellid from umts_kpi.amx_load where datetime > '".$reportdate."'::timestamp - '10 days'::interval
and (rnc,cellid) in (SELECT rnc,cellid from umts_control.cells_database where nodebname_norm = '".$node."')) a
cross join (select distinct datetime from umts_kpi.amx_load where datetime > '".$reportdate."'::timestamp - '10 days'::interval
and (rnc,cellid) in (SELECT rnc,cellid from umts_control.cells_database where nodebname_norm = '".$node."')) b) c
left join (select * from umts_kpi.amx_load where datetime > '".$reportdate."'::timestamp - '10 days'::interval
and (rnc,cellid) in (SELECT rnc,cellid from umts_control.cells_database where nodebname_norm = '".$node."')) d on c.datetime = d.datetime and c.cellid = d.cellid ) a
  join (SELECT rnc,cellid,cell,nodeb from umts_control.cells_database where nodebname_norm = '".$node."') b on a.cellid = b.cellid
 group by a.cellid, a.rnc, b.cell, nodeb order by cell
 ;");

	return $query->result();

	}
			

}