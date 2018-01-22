<?php 

class Model_radar_lte extends CI_Model{
	// function cells(){
		// $query = $this->db->query(
		// "select * from lte_control.cells order by uf,cellname;");

	// return $query->result();
	// }

function maxdate(){
	
		 $query = $this->db->query(
		 "SELECT max(date) as date from lte_kpi.radar_network_daily where week = (select max(week) from lte_kpi.radar_network_weekly where year = (select max(year) from lte_kpi.radar_network_weekly));
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
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG('5.00'::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG('5.00'::text, ',' order by year,week) AS baseline,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG('5.00'::text, ',' order by year,week) AS overshooters,
STRING_AGG('5.00'::text, ',' order by year,week) AS cpich_power_ratio,
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
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG('5.00'::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG('5.00'::text, ',' order by year,week) AS baseline,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG('5.00'::text, ',' order by year,week) AS overshooters,
STRING_AGG('5.00'::text, ',' order by year,week) AS cpich_power_ratio,
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
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG('5.00'::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG('5.00'::text, ',' order by year,week) AS baseline,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG('5.00'::text, ',' order by year,week) AS overshooters,
STRING_AGG('5.00'::text, ',' order by year,week) AS cpich_power_ratio,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG('5.00'::text, ',' order by year,week) AS process_tools,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM lte_kpi.radar_uf_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and region = '".$node."'
		
		group by uf
		UNION
		SELECT 1 as sortcol, region as node, 'region'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG('5.00'::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG('5.00'::text, ',' order by year,week) AS baseline,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG('5.00'::text, ',' order by year,week) AS overshooters,
STRING_AGG('5.00'::text, ',' order by year,week) AS cpich_power_ratio,
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
		
		$query = $this->db->query(
		"
		select * from (SELECT 1 as sortcol, uf as node, 'uf'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG('5.00'::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG('5.00'::text, ',' order by year,week) AS baseline,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG('5.00'::text, ',' order by year,week) AS overshooters,
STRING_AGG('5.00'::text, ',' order by year,week) AS cpich_power_ratio,
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
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG('5.00'::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG('5.00'::text, ',' order by year,week) AS baseline,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG('5.00'::text, ',' order by year,week) AS overshooters,
STRING_AGG('5.00'::text, ',' order by year,week) AS cpich_power_ratio,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG('5.00'::text, ',' order by year,week) AS process_tools,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM lte_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and uf = '".$node."'	
		group by cellname) t
		where char_length(composite) = 19
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
		
		$this->load->model('model_cellsinfo');
		$uf_info = $this->model_cellsinfo->find_uf_lte($node);
		$uf = $uf_info[0]->uf;
		
		$query = $this->db->query(
		"
		select * from (SELECT 1 as sortcol, uf as node, 'uf'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG('5.00'::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG('5.00'::text, ',' order by year,week) AS baseline,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG('5.00'::text, ',' order by year,week) AS overshooters,
STRING_AGG('5.00'::text, ',' order by year,week) AS cpich_power_ratio,
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
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(voice_performance_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(data_performance_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(interface_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(lte_retention_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(efficiency_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG('5.00'::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(throughput_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG('5.00'::text, ',' order by year,week) AS baseline,
STRING_AGG(resources_blocking_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG('5.00'::text, ',' order by year,week) AS overshooters,
STRING_AGG('5.00'::text, ',' order by year,week) AS cpich_power_ratio,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG('5.00'::text, ',' order by year,week) AS process_tools,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM lte_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and uf = '".$uf."'		
		group by cellname) t
		where char_length(composite) = 19
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
	   voice_performance_radar_score AS cs_call_completion, 
	   data_performance_radar_score AS ps_call_completion, 
       interface_radar_score AS air_interface_dl, 
	   lte_retention_radar_score AS retention_3g, 
	   efficiency_radar_score AS air_interface_ul, 
       '5.00' AS sho_overhead, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   '5.00' AS baseline,
       resources_blocking_radar_score AS hardware_nodeb,
       '5.00' AS overshooters,
       '5.00' AS cpich_power_ratio,
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
	   voice_performance_radar_score AS cs_call_completion, 
	   data_performance_radar_score AS ps_call_completion, 
       interface_radar_score AS air_interface_dl, 
	   lte_retention_radar_score AS retention_3g, 
	   efficiency_radar_score AS air_interface_ul, 
       '5.00' AS sho_overhead, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   '5.00' AS baseline,
       resources_blocking_radar_score AS hardware_nodeb,
       '5.00' AS overshooters,
       '5.00' AS cpich_power_ratio,
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
	   voice_performance_radar_score AS cs_call_completion, 
	   data_performance_radar_score AS ps_call_completion, 
       interface_radar_score AS air_interface_dl, 
	   lte_retention_radar_score AS retention_3g, 
	   efficiency_radar_score AS air_interface_ul, 
       '5.00' AS sho_overhead, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   '5.00' AS baseline,
       resources_blocking_radar_score AS hardware_nodeb,
       '5.00' AS overshooters,
       '5.00' AS cpich_power_ratio,
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
	   voice_performance_radar_score AS cs_call_completion, 
	   data_performance_radar_score AS ps_call_completion, 
       interface_radar_score AS air_interface_dl, 
	   lte_retention_radar_score AS retention_3g, 
	   efficiency_radar_score AS air_interface_ul, 
       '5.00' AS sho_overhead, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   '5.00' AS baseline,
      resources_blocking_radar_score AS hardware_nodeb,
       '5.00' AS overshooters,
       '5.00' AS cpich_power_ratio,
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
	   voice_performance_radar_score AS cs_call_completion, 
	   data_performance_radar_score AS ps_call_completion, 
       interface_radar_score AS air_interface_dl, 
	   lte_retention_radar_score AS retention_3g, 
	   efficiency_radar_score AS air_interface_ul, 
       '5.00' AS sho_overhead, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   '5.00' AS baseline,
       resources_blocking_radar_score AS hardware_nodeb,
       '5.00' AS overshooters,
       '5.00' AS cpich_power_ratio,
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
	   voice_performance_radar_score AS cs_call_completion, 
	   data_performance_radar_score AS ps_call_completion, 
       interface_radar_score AS air_interface_dl, 
	   lte_retention_radar_score AS retention_3g, 
	   efficiency_radar_score AS air_interface_ul, 
       '5.00' AS sho_overhead, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   '5.00' AS baseline,
       resources_blocking_radar_score AS hardware_nodeb,
       '5.00' AS overshooters,
       '5.00' AS cpich_power_ratio,
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
	   voice_performance_radar_score AS cs_call_completion, 
	   data_performance_radar_score AS ps_call_completion, 
       interface_radar_score AS air_interface_dl, 
	   lte_retention_radar_score AS retention_3g, 
	   efficiency_radar_score AS air_interface_ul, 
       '5.00' AS sho_overhead, 
	   throughput_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   '5.00' AS baseline,
       resources_blocking_radar_score AS hardware_nodeb,
       '5.00' AS overshooters,
       '5.00' AS cpich_power_ratio,
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
	
}