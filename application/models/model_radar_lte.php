<?php 

class Model_radar_lte extends CI_Model{
	// function cells(){
		// $query = $this->db->query(
		// "select * from lte_control.cells order by uf,cellname;");

	// return $query->result();
	// }

function maxdate(){
	
		 $query = $this->db->query(
		 "SELECT max(date) as date from lte_kpi.radar_network_daily where week = (select max(week) from lte_kpi.radar_network_weekly where year = (select max(year) from lte_kpi.radar_network_weekly where composite_radar_score is not null) and composite_radar_score is not null);
;");
 return $query->result();
	}
	
	function radar_weekly_network($reportdate, $nekpi){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -0 day'));		
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
		select * from (SELECT 1 as sortcol, 'NETWORK'::text as node, 'network'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS voice_performance,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS data_performance,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS interface,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_4g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS efficiency,
STRING_AGG(quality_ul_radar_score::text, ',' order by year,week) AS quality_ul,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(mobility_radar_score::text, ',' order by year,week) AS mobility,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS resources_blocking,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(quality_dl_radar_score::text, ',' order by year,week) AS quality_dl,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG('5.00'::text, ',' order by year,week) AS process_tools,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
FROM lte_kpi.radar_network_weekly
		where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		group by 'NETWORK'::text
		UNION
		SELECT 2 as sortcol, region as node, 'region'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS voice_performance,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS data_performance,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS interface,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_4g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS efficiency,
STRING_AGG(quality_ul_radar_score::text, ',' order by year,week) AS quality_ul,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(mobility_radar_score::text, ',' order by year,week) AS mobility,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS resources_blocking,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(quality_dl_radar_score::text, ',' order by year,week) AS quality_dl,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG('5.00'::text, ',' order by year,week) AS process_tools,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM lte_kpi.radar_region_weekly
		where region not in ('UNKNOWN')
		and  (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		group by region) t
		order by sortcol, node
;");

	return $query->result();

	}
	
	function radar_weekly_region($node,$reportdate, $nekpi){		
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));	
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -0 day'));
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
		select * from (SELECT 2 as sortcol, uf as node, 'uf'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS voice_performance,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS data_performance,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS interface,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_4g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS efficiency,
STRING_AGG(quality_ul_radar_score::text, ',' order by year,week) AS quality_ul,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(mobility_radar_score::text, ',' order by year,week) AS mobility,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS resources_blocking,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(quality_dl_radar_score::text, ',' order by year,week) AS quality_dl,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG('5.00'::text, ',' order by year,week) AS process_tools,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM lte_kpi.radar_uf_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and region = '".$node."'
		
		group by uf
		UNION
		SELECT 1 as sortcol, region as node, 'wc'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS voice_performance,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS data_performance,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS interface,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_4g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS efficiency,
STRING_AGG(quality_ul_radar_score::text, ',' order by year,week) AS quality_ul,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(mobility_radar_score::text, ',' order by year,week) AS mobility,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS resources_blocking,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(quality_dl_radar_score::text, ',' order by year,week) AS quality_dl,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG('5.00'::text, ',' order by year,week) AS process_tools,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM lte_kpi.radar_region_weekly
		where region not in ('UNKNOWN')
and (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and region = '".$node."'
		group by region) t
		order by sortcol, node
;");

	return $query->result();
	}
	
	function radar_weekly_uf($node,$reportdate, $nekpi){		
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -0 day'));		
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
		
		if(($nekpi ==  'rf_health_index')or($nekpi ==  'worst_aging_factor')or($nekpi ==  'mobility')
			or($nekpi ==  'throughput')or($nekpi ==  'retention_4g')or($nekpi ==  'data_performance')or
			($nekpi ==  'voice_performance')or($nekpi ==  'availability')or($nekpi ==  'traffic_load')or
			($nekpi ==  'resources_blocking')or($nekpi ==  'efficiency')or($nekpi ==  'interface')or
			($nekpi ==  'quality_ul')or($nekpi ==  'overshooters')or($nekpi ==  'quality_dl')or
			($nekpi ==  'composite')){
		$condition = "where ".$nekpi." != '-,-,-,-'";
		}
		else {
		$condition = "where composite != '-,-,-,-'";	
		}
		
		$query = $this->db->query(
		"
		select * from (SELECT 1 as sortcol, uf as node, 'uf'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS voice_performance,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS data_performance,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS interface,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_4g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS efficiency,
STRING_AGG(quality_ul_radar_score::text, ',' order by year,week) AS quality_ul,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(mobility_radar_score::text, ',' order by year,week) AS mobility,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS resources_blocking,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(quality_dl_radar_score::text, ',' order by year,week) AS quality_dl,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG('5.00'::text, ',' order by year,week) AS process_tools,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM lte_kpi.radar_uf_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and uf = '".$node."'
		group by uf
		UNION
		SELECT 2 as sortcol, cellname as node, 'cell'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(COALESCE(availability_radar_score::text,'-'), ',' order by year,week) AS availability,
STRING_AGG(COALESCE(voice_performance_radar_score::text,'-'), ',' order by year,week) AS voice_performance,
STRING_AGG(COALESCE(data_performance_radar_score::text,'-'), ',' order by year,week) AS data_performance,
STRING_AGG(COALESCE(interface_radar_score::text,'-'), ',' order by year,week) AS interface,
STRING_AGG(COALESCE(lte_retention_radar_score::text,'-'), ',' order by year,week) AS retention_4g,
STRING_AGG(COALESCE(efficiency_radar_score::text,'-'), ',' order by year,week) AS efficiency,
STRING_AGG(COALESCE(quality_ul_radar_score::text,'-'), ',' order by year,week) AS quality_ul,
STRING_AGG(COALESCE(throughput_radar_score::text,'-'), ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(COALESCE(mobility_radar_score::text,'-'), ',' order by year,week) AS mobility,
STRING_AGG(COALESCE(resources_blocking_radar_score::text,'-'), ',' order by year,week) AS resources_blocking,
STRING_AGG(COALESCE(overshooter_radar_score::text,'-'), ',' order by year,week) AS overshooters,
STRING_AGG(COALESCE(quality_dl_radar_score::text,'-'), ',' order by year,week) AS quality_dl,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(COALESCE(traffic_load_radar_score::text,'-'), ',' order by year,week) AS traffic_load,
STRING_AGG('5.00'::text, ',' order by year,week) AS process_tools,
STRING_AGG(COALESCE(composite_radar_score::text,'-'), ',' order by year,week) AS composite
		FROM (select year, week, region, uf, cellname, availability_radar_score, voice_performance_radar_score, 
       data_performance_radar_score, interface_radar_score, lte_retention_radar_score, 
       efficiency_radar_score, quality_ul_radar_score, throughput_radar_score, 
       quality_dl_radar_score, traffic_load_radar_score, resources_blocking_radar_score, 
       overshooter_radar_score, mobility_radar_score, composite_radar_score from 
(select * from (select distinct week, year from lte_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))) a cross join
		(select distinct cellname, region, uf from lte_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4.")) and uf = '".$node."' ) b) c 
left join  
(select year as year2, week as week2, cellname as cellname2, availability_radar_score, voice_performance_radar_score, 
       data_performance_radar_score, interface_radar_score, lte_retention_radar_score, 
       efficiency_radar_score, quality_ul_radar_score, throughput_radar_score, 
       quality_dl_radar_score, traffic_load_radar_score, resources_blocking_radar_score, 
       overshooter_radar_score, mobility_radar_score, composite_radar_score from lte_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4.")) and uf = '".$node."') d on c.week = d.week2 and c.cellname = d.cellname2
) f
		group by cellname) t
		".$condition."
		order by sortcol, node
;");

	return $query->result();
	}

	function radar_weekly_cell($node,$reportdate, $nekpi){		
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));	
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -0 day'));
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
		
		if(($nekpi ==  'rf_health_index')or($nekpi ==  'worst_aging_factor')or($nekpi ==  'mobility')
			or($nekpi ==  'throughput')or($nekpi ==  'retention_4g')or($nekpi ==  'data_performance')or
			($nekpi ==  'voice_performance')or($nekpi ==  'availability')or($nekpi ==  'traffic_load')or
			($nekpi ==  'resources_blocking')or($nekpi ==  'efficiency')or($nekpi ==  'interface')or
			($nekpi ==  'quality_ul')or($nekpi ==  'overshooters')or($nekpi ==  'quality_dl')or
			($nekpi ==  'composite')){
		$condition = "where ".$nekpi." != '-,-,-,-'";
		}
		else {
		$condition = "where composite != '-,-,-,-'";	
		}
		
		$this->load->model('model_cellsinfo');
		$uf_info = $this->model_cellsinfo->find_uf_lte($node);
		$uf = $uf_info[0]->uf;
		
		$query = $this->db->query(
		"
		select * from (SELECT 1 as sortcol, uf as node, 'uf'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS voice_performance,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS data_performance,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS interface,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_4g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS efficiency,
STRING_AGG(quality_ul_radar_score::text, ',' order by year,week) AS quality_ul,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(mobility_radar_score::text, ',' order by year,week) AS mobility,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS resources_blocking,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(quality_dl_radar_score::text, ',' order by year,week) AS quality_dl,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG('5.00'::text, ',' order by year,week) AS process_tools,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM lte_kpi.radar_uf_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and uf = '".$uf."'		
		group by uf
		UNION
		SELECT 2 as sortcol, cellname as node, 'cell'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(COALESCE(availability_radar_score::text,'-'), ',' order by year,week) AS availability,
STRING_AGG(COALESCE(voice_performance_radar_score::text,'-'), ',' order by year,week) AS voice_performance,
STRING_AGG(COALESCE(data_performance_radar_score::text,'-'), ',' order by year,week) AS data_performance,
STRING_AGG(COALESCE(interface_radar_score::text,'-'), ',' order by year,week) AS interface,
STRING_AGG(COALESCE(lte_retention_radar_score::text,'-'), ',' order by year,week) AS retention_4g,
STRING_AGG(COALESCE(efficiency_radar_score::text,'-'), ',' order by year,week) AS efficiency,
STRING_AGG(COALESCE(quality_ul_radar_score::text,'-'), ',' order by year,week) AS quality_ul,
STRING_AGG(COALESCE(throughput_radar_score::text,'-'), ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(COALESCE(mobility_radar_score::text,'-'), ',' order by year,week) AS mobility,
STRING_AGG(COALESCE(resources_blocking_radar_score::text,'-'), ',' order by year,week) AS resources_blocking,
STRING_AGG(COALESCE(overshooter_radar_score::text,'-'), ',' order by year,week) AS overshooters,
STRING_AGG(COALESCE(quality_dl_radar_score::text,'-'), ',' order by year,week) AS quality_dl,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(COALESCE(traffic_load_radar_score::text,'-'), ',' order by year,week) AS traffic_load,
STRING_AGG('5.00'::text, ',' order by year,week) AS process_tools,
STRING_AGG(COALESCE(composite_radar_score::text,'-'), ',' order by year,week) AS composite
		FROM (select year, week, region, uf, cellname, availability_radar_score, voice_performance_radar_score, 
       data_performance_radar_score, interface_radar_score, lte_retention_radar_score, 
       efficiency_radar_score, quality_ul_radar_score, throughput_radar_score, 
       quality_dl_radar_score, traffic_load_radar_score, resources_blocking_radar_score, 
       overshooter_radar_score, mobility_radar_score, composite_radar_score from 
(select * from (select distinct week, year from lte_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))) a cross join
		(select distinct cellname, region, uf from lte_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4.")) and uf = '".$uf."' ) b) c 
left join  
(select year as year2, week as week2, cellname as cellname2, availability_radar_score, voice_performance_radar_score, 
       data_performance_radar_score, interface_radar_score, lte_retention_radar_score, 
       efficiency_radar_score, quality_ul_radar_score, throughput_radar_score, 
       quality_dl_radar_score, traffic_load_radar_score, resources_blocking_radar_score, 
       overshooter_radar_score, mobility_radar_score, composite_radar_score from lte_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4.")) and uf = '".$uf."') d on c.week = d.week2 and c.cellname = d.cellname2
) f	
		group by cellname) t
		".$condition."
		order by sortcol, node
;");

	return $query->result();
	}
	
	function radar_weekly_wc($node,$reportdate, $nekpi){		
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -0 day'));		
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
		
		if(($nekpi ==  'rf_health_index')or($nekpi ==  'worst_aging_factor')or($nekpi ==  'mobility')
			or($nekpi ==  'throughput')or($nekpi ==  'retention_4g')or($nekpi ==  'data_performance')or
			($nekpi ==  'voice_performance')or($nekpi ==  'availability')or($nekpi ==  'traffic_load')or
			($nekpi ==  'resources_blocking')or($nekpi ==  'efficiency')or($nekpi ==  'interface')or
			($nekpi ==  'quality_ul')or($nekpi ==  'overshooters')or($nekpi ==  'quality_dl')or
			($nekpi ==  'composite')){
		$condition = "where ".$nekpi." != '-,-,-,-'";
		}
		else {
		$condition = "where composite != '-,-,-,-'";	
		}
		
		$query = $this->db->query(
		"
		select * from (SELECT 1 as sortcol, region as node, 'region'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS voice_performance,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS data_performance,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS interface,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_4g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS efficiency,
STRING_AGG(quality_ul_radar_score::text, ',' order by year,week) AS quality_ul,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(mobility_radar_score::text, ',' order by year,week) AS mobility,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS resources_blocking,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(quality_dl_radar_score::text, ',' order by year,week) AS quality_dl,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG('5.00'::text, ',' order by year,week) AS process_tools,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM lte_kpi.radar_region_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and region = '".$node."'
		group by region
		UNION
		SELECT 2 as sortcol, cellname as node, 'cell'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(COALESCE(availability_radar_score::text,'-'), ',' order by year,week) AS availability,
STRING_AGG(COALESCE(voice_performance_radar_score::text,'-'), ',' order by year,week) AS voice_performance,
STRING_AGG(COALESCE(data_performance_radar_score::text,'-'), ',' order by year,week) AS data_performance,
STRING_AGG(COALESCE(interface_radar_score::text,'-'), ',' order by year,week) AS interface,
STRING_AGG(COALESCE(lte_retention_radar_score::text,'-'), ',' order by year,week) AS retention_4g,
STRING_AGG(COALESCE(efficiency_radar_score::text,'-'), ',' order by year,week) AS efficiency,
STRING_AGG(COALESCE(quality_ul_radar_score::text,'-'), ',' order by year,week) AS quality_ul,
STRING_AGG(COALESCE(throughput_radar_score::text,'-'), ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(COALESCE(mobility_radar_score::text,'-'), ',' order by year,week) AS mobility,
STRING_AGG(COALESCE(resources_blocking_radar_score::text,'-'), ',' order by year,week) AS resources_blocking,
STRING_AGG(COALESCE(overshooter_radar_score::text,'-'), ',' order by year,week) AS overshooters,
STRING_AGG(COALESCE(quality_dl_radar_score::text,'-'), ',' order by year,week) AS quality_dl,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(COALESCE(traffic_load_radar_score::text,'-'), ',' order by year,week) AS traffic_load,
STRING_AGG('5.00'::text, ',' order by year,week) AS process_tools,
STRING_AGG(COALESCE(composite_radar_score::text,'-'), ',' order by year,week) AS composite
		FROM (select year, week, region, uf, cellname, availability_radar_score, voice_performance_radar_score, 
       data_performance_radar_score, interface_radar_score, lte_retention_radar_score, 
       efficiency_radar_score, quality_ul_radar_score, throughput_radar_score, 
       quality_dl_radar_score, traffic_load_radar_score, resources_blocking_radar_score, 
       overshooter_radar_score, mobility_radar_score, composite_radar_score from 
(select * from (select distinct week, year from lte_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))) a cross join
		(select distinct cellname, region, uf from lte_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4.")) and region = '".$node."' ) b) c 
left join  
(select year as year2, week as week2, cellname as cellname2, availability_radar_score, voice_performance_radar_score, 
       data_performance_radar_score, interface_radar_score, lte_retention_radar_score, 
       efficiency_radar_score, quality_ul_radar_score, throughput_radar_score, 
       quality_dl_radar_score, traffic_load_radar_score, resources_blocking_radar_score, 
       overshooter_radar_score, mobility_radar_score, composite_radar_score from lte_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4.")) and region = '".$node."') d on c.week = d.week2 and c.cellname = d.cellname2
) f
		group by cellname) t
		".$condition."
		order by sortcol, node
;");

	return $query->result();
	}
	
	function chart_weekly_network($reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -0 day'));
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
	"SELECT year, week, 'NETWORK'::text as node, 
	   availability_radar_score AS availability, 
	   voice_performance_radar_score AS voice_performance, 
	   data_performance_radar_score AS data_performance, 
       interface_radar_score AS interface, 
	   lte_retention_radar_score AS retention_4g, 
	   efficiency_radar_score AS efficiency, 
       quality_ul_radar_score AS quality_ul, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   mobility_radar_score AS mobility,
       resources_blocking_radar_score AS resources_blocking,
       overshooter_radar_score AS overshooters,
       quality_dl_radar_score AS quality_dl,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   '5.00'::text AS process_tools,
	   composite_radar_score AS composite
    FROM lte_kpi.radar_network_weekly
	where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
    order by year, week
	;");

	return $query->result();

	}	

	function chart_weekly_region($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));	
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -0 day'));
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
	"SELECT year, week, region as node, 
	   availability_radar_score AS availability, 
	   voice_performance_radar_score AS voice_performance, 
	   data_performance_radar_score AS data_performance, 
       interface_radar_score AS interface, 
	   lte_retention_radar_score AS retention_4g, 
	   efficiency_radar_score AS efficiency, 
       quality_ul_radar_score AS quality_ul, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   mobility_radar_score AS mobility,
       resources_blocking_radar_score AS resources_blocking,
       overshooter_radar_score AS overshooters,
       quality_dl_radar_score AS quality_dl,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   '5.00'::text AS process_tools,
	    composite_radar_score AS composite
    FROM lte_kpi.radar_region_weekly
	where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
 	and region = '".$node."'
    order by year, week
	;");

	return $query->result();

	}	
	
	function chart_weekly_uf($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -0 day'));		
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
	"SELECT year, week, uf as node, 
	   availability_radar_score AS availability, 
	   voice_performance_radar_score AS voice_performance, 
	   data_performance_radar_score AS data_performance, 
       interface_radar_score AS interface, 
	   lte_retention_radar_score AS retention_4g, 
	   efficiency_radar_score AS efficiency, 
       quality_ul_radar_score AS quality_ul, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   mobility_radar_score AS mobility,
       resources_blocking_radar_score AS resources_blocking,
       overshooter_radar_score AS overshooters,
       quality_dl_radar_score AS quality_dl,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   '5.00'::text AS process_tools,
	    composite_radar_score AS composite
    FROM lte_kpi.radar_uf_weekly
	where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
 	and uf = '".$node."'
    order by year, week
	;");

	return $query->result();
	
	}
	
	function network_daily_report($reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -0 day'));
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
	"SELECT year, week, date, 'NETWORK'::text as node, 
	   availability_radar_score AS availability, 
	   voice_performance_radar_score AS voice_performance, 
	   data_performance_radar_score AS data_performance, 
       interface_radar_score AS interface, 
	   lte_retention_radar_score AS retention_4g, 
	   efficiency_radar_score AS efficiency, 
       quality_ul_radar_score AS quality_ul, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   mobility_radar_score AS mobility,
      resources_blocking_radar_score AS resources_blocking,
       overshooter_radar_score AS overshooters,
       quality_dl_radar_score AS quality_dl,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   '5.00'::text AS process_tools,
	   composite_radar_score AS composite
    FROM lte_kpi.radar_network_daily
	where (year,week) >= (".$yearnum1.",".$weeknum1.")
    
	order by date
	;");

	return $query->result();

	}	

	function region_daily_report($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));	
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -0 day'));
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
	"SELECT year, week, date, region as node, 
	   availability_radar_score AS availability, 
	   voice_performance_radar_score AS voice_performance, 
	   data_performance_radar_score AS data_performance, 
       interface_radar_score AS interface, 
	   lte_retention_radar_score AS retention_4g, 
	   efficiency_radar_score AS efficiency, 
       quality_ul_radar_score AS quality_ul, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   mobility_radar_score AS mobility,
       resources_blocking_radar_score AS resources_blocking,
       overshooter_radar_score AS overshooters,
       quality_dl_radar_score AS quality_dl,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   '5.00'::text AS process_tools,
	    composite_radar_score AS composite
    FROM lte_kpi.radar_region_daily
	where (year,week) >= (".$yearnum1.",".$weeknum1.")
 	and region = '".$node."'
    
    order by date
	;");

	return $query->result();

	}

	function uf_daily_report($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));	
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -0 day'));
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
	"SELECT year, week, date, uf as node, 
	   availability_radar_score AS availability, 
	   voice_performance_radar_score AS voice_performance, 
	   data_performance_radar_score AS data_performance, 
       interface_radar_score AS interface, 
	   lte_retention_radar_score AS retention_4g, 
	   efficiency_radar_score AS efficiency, 
       quality_ul_radar_score AS quality_ul, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   mobility_radar_score AS mobility,
       resources_blocking_radar_score AS resources_blocking,
       overshooter_radar_score AS overshooters,
       quality_dl_radar_score AS quality_dl,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   '5.00'::text AS process_tools,
	    composite_radar_score AS composite
    FROM lte_kpi.radar_uf_daily
	where (year,week) >= (".$yearnum1.",".$weeknum1.")
 	and uf = '".$node."'
	
    order by date
	;");

	return $query->result();
	
	}
	
	function cell_daily_report($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -7 day'));	
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -0 day'));
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
	"SELECT year, week, date, cellname as node, 
	   availability_radar_score AS availability, 
	   voice_performance_radar_score AS voice_performance, 
	   data_performance_radar_score AS data_performance, 
       interface_radar_score AS interface, 
	   lte_retention_radar_score AS retention_4g, 
	   efficiency_radar_score AS efficiency, 
       quality_ul_radar_score AS quality_ul, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   mobility_radar_score AS mobility,
       resources_blocking_radar_score AS resources_blocking,
       overshooter_radar_score AS overshooters,
       quality_dl_radar_score AS quality_dl,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   '5.00'::text AS process_tools,
	    composite_radar_score AS composite
    FROM lte_kpi.radar_cell_daily
	where (year,week) >= (".$yearnum1.",".$weeknum1.")
 	and cellname = '".$node."'
	
    order by date
	;");

	return $query->result();
	
	}
	
	function extra_info($node,$reportdate,$nekpi,$netype){		
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
		
		if ($netype == 'cell'){
		$this->load->model('model_cellsinfo');
		$uf_info = $this->model_cellsinfo->find_uf_lte($node);
		$uf = $uf_info[0]->uf;
		$condition = "and uf = '".$uf."'";
		}
		elseif($netype == 'wc'){
		$uf = $node;
		$condition = "and region = '".$node."'";	
		}
		elseif ($netype == 'uf'){
		$uf = $node;
		$condition = "and uf = '".$node."'";
		}
		
		if ($nekpi == 'voice_performance') {
		$query = $this->db->query(
		"
		(SELECT 1 as sortcol, '-'::text as year, '-'::text as week, '-'::text as region, '-'::text as uf, '".$uf."' as node, '-'::text as good_cells, '-'::text as good_cells_no, '-'::text as bad_cells_no)
		UNION
		(SELECT 2 as sortcol, year::text, week::text, region, uf, cellname as node, round(good_cells::numeric,2)::text as good_cells, good_cells_no::text, bad_cells_no::text
		FROM radar_voice_performance_cell_weekly
		where (year,week) in ((".$yearnum4.",".$weeknum4."))
		".$condition.")
        order by sortcol, node
		;");
	return $query->result();
		}
		
		if ($nekpi == 'quality_ul') {
		$query = $this->db->query(
		"
		(SELECT 1 as sortcol, '-'::text as year, '-'::text as week, '-'::text as region, '-'::text as uf, '".$uf."' as node, '-'::text as good_ul_samples, '-'::text as good_samples_no, '-'::text as bad_samples_no)
		UNION
		(SELECT 2 as sortcol, year::text, week::text, region, uf, cellname as node, round(good_ul_samples::numeric,2)::text as good_ul_samples, good_samples_no::text, bad_samples_no::text
		FROM radar_quality_ul_cell_weekly
		where (year,week) in ((".$yearnum4.",".$weeknum4."))
		".$condition.")
        order by sortcol, node
		;");
	return $query->result();
		}
		
		if ($nekpi == 'mobility') {
		$query = $this->db->query(
		"
		(SELECT 1 as sortcol, '-'::text as year, '-'::text as week, '-'::text as region, '-'::text as uf, '".$uf."' as node,
		'-'::text as good_cell_x2_handover, '-'::text as good_cell_x2_handover_no, '-'::text as bad_cell_x2_handover_no, '-'::text as x2_handover_radar_score,
		'-'::text as good_cell_intra_freq_ho, '-'::text as good_cell_intra_freq_ho_no, '-'::text as bad_cell_intra_freq_ho_no, '-'::text as intra_freq_ho_radar_score,
		'-'::text as good_cell_inter_freq_ho, '-'::text as good_cell_inter_freq_ho_no, '-'::text as bad_cell_inter_freq_ho_no, '-'::text as inter_freq_ho_radar_score)		
		UNION
		(SELECT 2 as sortcol, year::text, week::text, region, uf, cellname as node, 
		good_cell_x2_handover::text, good_cell_x2_handover_no::text, bad_cell_x2_handover_no::text, x2_handover_radar_score::text,
		good_cell_intra_freq_ho::text, good_cell_intra_freq_ho_no::text, bad_cell_intra_freq_ho_no::text, intra_freq_ho_radar_score::text,
		good_cell_inter_freq_ho::text, good_cell_inter_freq_ho_no::text, bad_cell_inter_freq_ho_no::text, inter_freq_ho_radar_score::text
		FROM lte_kpi.radar_mobility_cell_weekly
		where (week) in ((".$weeknum4."))
		".$condition.")
        order by sortcol, node
		;");
	return $query->result();
		}

	}
}