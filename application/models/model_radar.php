<?php 

class Model_radar extends CI_Model{
	// function cells(){
		// $query = $this->db->query(
		// "select * from umts_control.cells order by rnc,cellname;");

	// return $query->result();
	// }

function maxdate(){
	
		 $query = $this->db->query(
		 "SELECT max(date) as date from umts_kpi.radar_network_daily where week = (select max(week) from umts_kpi.radar_network_weekly where year = (select max(year) from umts_kpi.radar_network_weekly where composite_radar_score is not null) and composite_radar_score is not null);
;");
 return $query->result();
	}
	
	function radar_weekly_network($reportdate, $nekpi){
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
		select * from (SELECT 1 as sortcol, 'NETWORK'::text as node, 'network'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(cs_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(ps_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(dl_codes_power_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(retention_3g_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(rtwp_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG(sho_overhead_radar_score::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(thp_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(baseline_radar_score::text, ',' order by year,week) AS baseline,
STRING_AGG(hardware_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(pcpich_radar_score::text, ',' order by year,week) AS cpich_power_ratio,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG(sw_releases_features_radar_score::text, ',' order by year,week) AS sw_releases_features,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
FROM umts_kpi.radar_network_weekly
		where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		group by 'NETWORK'::text
		UNION
		SELECT 2 as sortcol, region as node, 'region'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(cs_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(ps_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(dl_codes_power_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(retention_3g_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(rtwp_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG(sho_overhead_radar_score::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(thp_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(baseline_radar_score::text, ',' order by year,week) AS baseline,
STRING_AGG(hardware_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(pcpich_radar_score::text, ',' order by year,week) AS cpich_power_ratio,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG(sw_releases_features_radar_score::text, ',' order by year,week) AS sw_releases_features,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM umts_kpi.radar_region_weekly
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
		select * from (SELECT 2 as sortcol, rnc as node, 'rnc'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(cs_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(ps_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(dl_codes_power_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(retention_3g_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(rtwp_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG(sho_overhead_radar_score::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(thp_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(baseline_radar_score::text, ',' order by year,week) AS baseline,
STRING_AGG(hardware_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(pcpich_radar_score::text, ',' order by year,week) AS cpich_power_ratio,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG(sw_releases_features_radar_score::text, ',' order by year,week) AS sw_releases_features,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM umts_kpi.radar_rnc_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and region = '".$node."'
		and rnc not in ('RNCPE01','RNCRJT2','RNCSC03','RNCDF03','RNCDF02')
		group by rnc
		UNION
		SELECT 1 as sortcol, region as node, 'wc'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(cs_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(ps_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(dl_codes_power_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(retention_3g_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(rtwp_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG(sho_overhead_radar_score::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(thp_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(baseline_radar_score::text, ',' order by year,week) AS baseline,
STRING_AGG(hardware_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(pcpich_radar_score::text, ',' order by year,week) AS cpich_power_ratio,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG(sw_releases_features_radar_score::text, ',' order by year,week) AS sw_releases_features,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM umts_kpi.radar_region_weekly
		where region not in ('UNKNOWN')
and (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and region = '".$node."'
		group by region) t
		order by sortcol, node
;");

	return $query->result();
	}
	
	function radar_weekly_rnc($node,$reportdate, $nekpi){		
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
		
		if(($nekpi ==  'rf_health_index')or($nekpi ==  'worst_aging_factor')or($nekpi ==  'baseline')
			or($nekpi ==  'throughput')or($nekpi ==  'retention_3g')or($nekpi ==  'ps_call_completion')or
			($nekpi ==  'cs_call_completion')or($nekpi ==  'availability')or($nekpi ==  'traffic_load')or
			($nekpi ==  'hardware_nodeb')or($nekpi ==  'air_interface_ul')or($nekpi ==  'air_interface_dl')or
			($nekpi ==  'sho_overhead')or($nekpi ==  'overshooters')or($nekpi ==  'cpich_power_ratio')or
			($nekpi ==  'sw_releases_features')or($nekpi ==  'composite')){
		$condition = "where ".$nekpi." != '-,-,-,-'";
		}
		else {
		$condition = "where composite != '-,-,-,-'";	
		}		
		
		$query = $this->db->query(
		"
		select * from (SELECT 1 as sortcol, rnc as node, 'rnc'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(cs_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(ps_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(dl_codes_power_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(retention_3g_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(rtwp_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG(sho_overhead_radar_score::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(thp_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(baseline_radar_score::text, ',' order by year,week) AS baseline,
STRING_AGG(hardware_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(pcpich_radar_score::text, ',' order by year,week) AS cpich_power_ratio,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG(sw_releases_features_radar_score::text, ',' order by year,week) AS sw_releases_features,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM umts_kpi.radar_rnc_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and rnc = '".$node."'
		and rnc not in ('RNCPE01','RNCRJT2','RNCSC03','RNCDF03','RNCDF02')
		group by rnc
		UNION
		SELECT 2 as sortcol, cellname as node, 'cell'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(COALESCE(availability_radar_score::text,'-'), ',' order by year,week) AS availability,
STRING_AGG(COALESCE(cs_radar_score::text,'-'), ',' order by year,week) AS cs_call_completion,
STRING_AGG(COALESCE(ps_radar_score::text,'-'), ',' order by year,week) AS ps_call_completion,
STRING_AGG(COALESCE(dl_codes_power_radar_score::text,'-'), ',' order by year,week) AS air_interface_dl,
STRING_AGG(COALESCE(retention_3g_radar_score::text,'-'), ',' order by year,week) AS retention_3g,
STRING_AGG(COALESCE(rtwp_radar_score::text,'-'), ',' order by year,week) AS air_interface_ul,
STRING_AGG(COALESCE(sho_overhead_radar_score::text,'-'), ',' order by year,week) AS sho_overhead,
STRING_AGG(COALESCE(thp_radar_score::text,'-'), ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(COALESCE(baseline_radar_score::text,'-'), ',' order by year,week) AS baseline,
STRING_AGG('-'::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG(COALESCE(overshooter_radar_score::text,'-'), ',' order by year,week) AS overshooters,
STRING_AGG(COALESCE(pcpich_radar_score::text,'-'), ',' order by year,week) AS cpich_power_ratio,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(COALESCE(traffic_load_radar_score::text,'-'), ',' order by year,week) AS traffic_load,
STRING_AGG(COALESCE(sw_releases_features_radar_score::text,'-'), ',' order by year,week) AS sw_releases_features,
STRING_AGG(COALESCE(composite_radar_score::text,'-'), ',' order by year,week) AS composite
		FROM (select year, week, region, rnc, cellname, availability_radar_score, 
       cs_radar_score, ps_radar_score, dl_codes_power_radar_score, retention_3g_radar_score, 
       rtwp_radar_score, sho_overhead_radar_score, thp_radar_score, 
       composite_radar_score, pcpich_radar_score, traffic_load_radar_score, 
       hardware_radar_score, overshooter_radar_score, baseline_radar_score, 
       sw_releases_features_radar_score from 
(select * from (select distinct week, year from umts_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))) a cross join
		(select distinct cellname, region, rnc from umts_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4.")) and rnc = '".$node."' ) b) c 
left join  
(select year as year2, week as week2, cellname as cellname2, availability_radar_score, 
       cs_radar_score, ps_radar_score, dl_codes_power_radar_score, retention_3g_radar_score, 
       rtwp_radar_score, sho_overhead_radar_score, thp_radar_score, 
       composite_radar_score, pcpich_radar_score, traffic_load_radar_score, 
       hardware_radar_score, overshooter_radar_score, baseline_radar_score, 
       sw_releases_features_radar_score from umts_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4.")) and rnc = '".$node."') d on c.week = d.week2 and c.cellname = d.cellname2
and rnc not in ('RNCPE01','RNCRJT2','RNCSC03','RNCDF03','RNCDF02')) f
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
		
		if(($nekpi ==  'rf_health_index')or($nekpi ==  'worst_aging_factor')or($nekpi ==  'baseline')
			or($nekpi ==  'throughput')or($nekpi ==  'retention_3g')or($nekpi ==  'ps_call_completion')or
			($nekpi ==  'cs_call_completion')or($nekpi ==  'availability')or($nekpi ==  'traffic_load')or
			($nekpi ==  'hardware_nodeb')or($nekpi ==  'air_interface_ul')or($nekpi ==  'air_interface_dl')or
			($nekpi ==  'sho_overhead')or($nekpi ==  'overshooters')or($nekpi ==  'cpich_power_ratio')or
			($nekpi ==  'sw_releases_features')or($nekpi ==  'composite')){
		$condition = "where ".$nekpi." != '-,-,-,-'";
		}
		else {
		$condition = "where composite != '-,-,-,-'";	
		}
		
		$this->load->model('model_cellsinfo');
		$rnc_info = $this->model_cellsinfo->find_cellid($node);
		$rnc = $rnc_info[0]->rnc;
		
		$query = $this->db->query(
		"
		select * from (SELECT 1 as sortcol, rnc as node, 'rnc'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(availability_radar_score::text, ',' order by year,week) AS availability,
STRING_AGG(cs_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(ps_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(dl_codes_power_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(retention_3g_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(rtwp_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG(sho_overhead_radar_score::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(thp_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(baseline_radar_score::text, ',' order by year,week) AS baseline,
STRING_AGG(hardware_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(pcpich_radar_score::text, ',' order by year,week) AS cpich_power_ratio,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG(sw_releases_features_radar_score::text, ',' order by year,week) AS sw_releases_features,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM umts_kpi.radar_rnc_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and rnc = '".$rnc."'
		and rnc not in ('RNCPE01','RNCRJT2','RNCSC03','RNCDF03','RNCDF02')
		group by rnc
		UNION
		SELECT 2 as sortcol, cellname as node, 'cell'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(COALESCE(availability_radar_score::text,'-'), ',' order by year,week) AS availability,
STRING_AGG(COALESCE(cs_radar_score::text,'-'), ',' order by year,week) AS cs_call_completion,
STRING_AGG(COALESCE(ps_radar_score::text,'-'), ',' order by year,week) AS ps_call_completion,
STRING_AGG(COALESCE(dl_codes_power_radar_score::text,'-'), ',' order by year,week) AS air_interface_dl,
STRING_AGG(COALESCE(retention_3g_radar_score::text,'-'), ',' order by year,week) AS retention_3g,
STRING_AGG(COALESCE(rtwp_radar_score::text,'-'), ',' order by year,week) AS air_interface_ul,
STRING_AGG(COALESCE(sho_overhead_radar_score::text,'-'), ',' order by year,week) AS sho_overhead,
STRING_AGG(COALESCE(thp_radar_score::text,'-'), ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(COALESCE(baseline_radar_score::text,'-'), ',' order by year,week) AS baseline,
STRING_AGG('-'::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG(COALESCE(overshooter_radar_score::text,'-'), ',' order by year,week) AS overshooters,
STRING_AGG(COALESCE(pcpich_radar_score::text,'-'), ',' order by year,week) AS cpich_power_ratio,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(COALESCE(traffic_load_radar_score::text,'-'), ',' order by year,week) AS traffic_load,
STRING_AGG(COALESCE(sw_releases_features_radar_score::text,'-'), ',' order by year,week) AS sw_releases_features,
STRING_AGG(COALESCE(composite_radar_score::text,'-'), ',' order by year,week) AS composite
		FROM (select year, week, region, rnc, cellname, availability_radar_score, 
       cs_radar_score, ps_radar_score, dl_codes_power_radar_score, retention_3g_radar_score, 
       rtwp_radar_score, sho_overhead_radar_score, thp_radar_score, 
       composite_radar_score, pcpich_radar_score, traffic_load_radar_score, 
       hardware_radar_score, overshooter_radar_score, baseline_radar_score, 
       sw_releases_features_radar_score from 
(select * from (select distinct week, year from umts_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))) a cross join
		(select distinct cellname, region, rnc from umts_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4.")) and rnc = '".$rnc."' ) b) c 
left join  
(select year as year2, week as week2, cellname as cellname2, availability_radar_score, 
       cs_radar_score, ps_radar_score, dl_codes_power_radar_score, retention_3g_radar_score, 
       rtwp_radar_score, sho_overhead_radar_score, thp_radar_score, 
       composite_radar_score, pcpich_radar_score, traffic_load_radar_score, 
       hardware_radar_score, overshooter_radar_score, baseline_radar_score, 
       sw_releases_features_radar_score from umts_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4.")) and rnc = '".$rnc."') d on c.week = d.week2 and c.cellname = d.cellname2
and rnc not in ('RNCPE01','RNCRJT2','RNCSC03','RNCDF03','RNCDF02')) f
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
		
		if(($nekpi ==  'rf_health_index')or($nekpi ==  'worst_aging_factor')or($nekpi ==  'baseline')
			or($nekpi ==  'throughput')or($nekpi ==  'retention_3g')or($nekpi ==  'ps_call_completion')or
			($nekpi ==  'cs_call_completion')or($nekpi ==  'availability')or($nekpi ==  'traffic_load')or
			($nekpi ==  'hardware_nodeb')or($nekpi ==  'air_interface_ul')or($nekpi ==  'air_interface_dl')or
			($nekpi ==  'sho_overhead')or($nekpi ==  'overshooters')or($nekpi ==  'cpich_power_ratio')or
			($nekpi ==  'sw_releases_features')or($nekpi ==  'composite')){
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
STRING_AGG(cs_radar_score::text, ',' order by year,week) AS cs_call_completion,
STRING_AGG(ps_radar_score::text, ',' order by year,week) AS ps_call_completion,
STRING_AGG(dl_codes_power_radar_score::text, ',' order by year,week) AS air_interface_dl,
STRING_AGG(retention_3g_radar_score::text, ',' order by year,week) AS retention_3g,
STRING_AGG(rtwp_radar_score::text, ',' order by year,week) AS air_interface_ul,
STRING_AGG(sho_overhead_radar_score::text, ',' order by year,week) AS sho_overhead,
STRING_AGG(thp_radar_score::text, ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(baseline_radar_score::text, ',' order by year,week) AS baseline,
STRING_AGG(hardware_radar_score::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG(overshooter_radar_score::text, ',' order by year,week) AS overshooters,
STRING_AGG(pcpich_radar_score::text, ',' order by year,week) AS cpich_power_ratio,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(traffic_load_radar_score::text, ',' order by year,week) AS traffic_load,
STRING_AGG(sw_releases_features_radar_score::text, ',' order by year,week) AS sw_releases_features,
STRING_AGG(composite_radar_score::text, ',' order by year,week) AS composite
		FROM umts_kpi.radar_region_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
		and region = '".$node."'
		group by region
		UNION
		SELECT 2 as sortcol, cellname as node, 'cell'::text as type,
STRING_AGG(week::text, ',' order by year,week) AS weeks,
STRING_AGG(COALESCE(availability_radar_score::text,'-'), ',' order by year,week) AS availability,
STRING_AGG(COALESCE(cs_radar_score::text,'-'), ',' order by year,week) AS cs_call_completion,
STRING_AGG(COALESCE(ps_radar_score::text,'-'), ',' order by year,week) AS ps_call_completion,
STRING_AGG(COALESCE(dl_codes_power_radar_score::text,'-'), ',' order by year,week) AS air_interface_dl,
STRING_AGG(COALESCE(retention_3g_radar_score::text,'-'), ',' order by year,week) AS retention_3g,
STRING_AGG(COALESCE(rtwp_radar_score::text,'-'), ',' order by year,week) AS air_interface_ul,
STRING_AGG(COALESCE(sho_overhead_radar_score::text,'-'), ',' order by year,week) AS sho_overhead,
STRING_AGG(COALESCE(thp_radar_score::text,'-'), ',' order by year,week) AS throughput,
STRING_AGG('5.00'::text, ',' order by year,week) AS rf_health_index,
STRING_AGG(COALESCE(baseline_radar_score::text,'-'), ',' order by year,week) AS baseline,
STRING_AGG('-'::text, ',' order by year,week) AS hardware_nodeb,
STRING_AGG(COALESCE(overshooter_radar_score::text,'-'), ',' order by year,week) AS overshooters,
STRING_AGG(COALESCE(pcpich_radar_score::text,'-'), ',' order by year,week) AS cpich_power_ratio,
STRING_AGG('5.00'::text, ',' order by year,week) AS worst_aging_factor,
STRING_AGG(COALESCE(traffic_load_radar_score::text,'-'), ',' order by year,week) AS traffic_load,
STRING_AGG(COALESCE(sw_releases_features_radar_score::text,'-'), ',' order by year,week) AS sw_releases_features,
STRING_AGG(COALESCE(composite_radar_score::text,'-'), ',' order by year,week) AS composite
		FROM (select year, week, region, rnc, cellname, availability_radar_score, 
       cs_radar_score, ps_radar_score, dl_codes_power_radar_score, retention_3g_radar_score, 
       rtwp_radar_score, sho_overhead_radar_score, thp_radar_score, 
       composite_radar_score, pcpich_radar_score, traffic_load_radar_score, 
       hardware_radar_score, overshooter_radar_score, baseline_radar_score, 
       sw_releases_features_radar_score from 
(select * from (select distinct week, year from umts_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))) a cross join
		(select distinct cellname, region, rnc from umts_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4.")) and region = '".$node."' ) b) c 
left join  
(select year as year2, week as week2, cellname as cellname2, availability_radar_score, 
       cs_radar_score, ps_radar_score, dl_codes_power_radar_score, retention_3g_radar_score, 
       rtwp_radar_score, sho_overhead_radar_score, thp_radar_score, 
       composite_radar_score, pcpich_radar_score, traffic_load_radar_score, 
       hardware_radar_score, overshooter_radar_score, baseline_radar_score, 
       sw_releases_features_radar_score from umts_kpi.radar_cell_weekly
where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4.")) and region = '".$node."') d on c.week = d.week2 and c.cellname = d.cellname2
and rnc not in ('RNCPE01','RNCRJT2','RNCSC03','RNCDF03','RNCDF02')) f
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
	"SELECT year, week, 'NETWORK'::text as node, 
	   availability_radar_score AS availability, 
	   cs_radar_score AS cs_call_completion, 
	   ps_radar_score AS ps_call_completion, 
       dl_codes_power_radar_score AS air_interface_dl, 
	   retention_3g_radar_score AS retention_3g, 
	   rtwp_radar_score AS air_interface_ul, 
       sho_overhead_radar_score AS sho_overhead, 
	   thp_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   baseline_radar_score AS baseline,
       hardware_radar_score AS hardware_nodeb,
       overshooter_radar_score AS overshooters,
       pcpich_radar_score AS cpich_power_ratio,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   sw_releases_features_radar_score AS sw_releases_features,
	   composite_radar_score AS composite
    FROM umts_kpi.radar_network_weekly
	where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
    order by year, week
	;");

	return $query->result();

	}	

	function chart_weekly_region($node,$reportdate){
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
	"SELECT year, week, region as node, 
	   availability_radar_score AS availability, 
	   cs_radar_score AS cs_call_completion, 
	   ps_radar_score AS ps_call_completion, 
       dl_codes_power_radar_score AS air_interface_dl, 
	   retention_3g_radar_score AS retention_3g, 
	   rtwp_radar_score AS air_interface_ul, 
       sho_overhead_radar_score AS sho_overhead, 
	   thp_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   baseline_radar_score AS baseline,
       hardware_radar_score AS hardware_nodeb,
       overshooter_radar_score AS overshooters,
       pcpich_radar_score AS cpich_power_ratio,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   sw_releases_features_radar_score AS sw_releases_features,
	    composite_radar_score AS composite
    FROM umts_kpi.radar_region_weekly
	where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
 	and region = '".$node."'
    order by year, week
	;");

	return $query->result();

	}	
	
	function chart_weekly_rnc($node,$reportdate){
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
	"SELECT year, week, rnc as node, 
	   availability_radar_score AS availability, 
	   cs_radar_score AS cs_call_completion, 
	   ps_radar_score AS ps_call_completion, 
       dl_codes_power_radar_score AS air_interface_dl, 
	   retention_3g_radar_score AS retention_3g, 
	   rtwp_radar_score AS air_interface_ul, 
       sho_overhead_radar_score AS sho_overhead, 
	   thp_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   baseline_radar_score AS baseline,
       hardware_radar_score AS hardware_nodeb,
       overshooter_radar_score AS overshooters,
       pcpich_radar_score AS cpich_power_ratio,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   sw_releases_features_radar_score AS sw_releases_features,
	    composite_radar_score AS composite
    FROM umts_kpi.radar_rnc_weekly
	where (year,week) in ((".$yearnum1.",".$weeknum1."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum4.",".$weeknum4."))
 	and rnc = '".$node."'
    order by year, week
	;");

	return $query->result();
	
	}
	
	function network_daily_report($reportdate){
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
	"SELECT year, week, date, 'NETWORK'::text as node, 
	   availability_radar_score AS availability, 
	   cs_radar_score AS cs_call_completion, 
	   ps_radar_score AS ps_call_completion, 
       dl_codes_power_radar_score::text AS air_interface_dl, 
	   retention_3g_radar_score AS retention_3g, 
	   rtwp_radar_score AS air_interface_ul, 
       sho_overhead_radar_score AS sho_overhead, 
	   thp_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   baseline_radar_score AS baseline,
       hardware_radar_score AS hardware_nodeb,
       overshooter_radar_score AS overshooters,
       pcpich_radar_score AS cpich_power_ratio,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   sw_releases_features_radar_score AS sw_releases_features,
	   composite_radar_score AS composite
    FROM umts_kpi.radar_network_daily
	where (year,week) >= (".$yearnum1.",".$weeknum1.")
    
	order by date
	;");

	return $query->result();

	}	

	function region_daily_report($node,$reportdate){
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
	"SELECT year, week, date, region as node, 
	   availability_radar_score AS availability, 
	   cs_radar_score AS cs_call_completion, 
	   ps_radar_score AS ps_call_completion, 
       dl_codes_power_radar_score AS air_interface_dl, 
	   retention_3g_radar_score AS retention_3g, 
	   rtwp_radar_score AS air_interface_ul, 
       sho_overhead_radar_score AS sho_overhead, 
	   thp_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   baseline_radar_score AS baseline,
       hardware_radar_score AS hardware_nodeb,
       overshooter_radar_score AS overshooters,
       pcpich_radar_score AS cpich_power_ratio,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   sw_releases_features_radar_score AS sw_releases_features,
	    composite_radar_score AS composite
    FROM umts_kpi.radar_region_daily
	where (year,week) >= (".$yearnum1.",".$weeknum1.")
 	and region = '".$node."'
    
    order by date
	;");

	return $query->result();

	}

	function rnc_daily_report($node,$reportdate){
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
	"SELECT year, week, date, rnc as node, 
	   availability_radar_score AS availability, 
	   cs_radar_score AS cs_call_completion, 
	   ps_radar_score AS ps_call_completion, 
       dl_codes_power_radar_score AS air_interface_dl, 
	   retention_3g_radar_score AS retention_3g, 
	   rtwp_radar_score AS air_interface_ul, 
       sho_overhead_radar_score AS sho_overhead, 
	   thp_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   baseline_radar_score AS baseline,
       hardware_radar_score AS hardware_nodeb,
       overshooter_radar_score AS overshooters,
       pcpich_radar_score AS cpich_power_ratio,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   sw_releases_features_radar_score AS sw_releases_features,
	    composite_radar_score AS composite
    FROM umts_kpi.radar_rnc_daily
	where (year,week) >= (".$yearnum1.",".$weeknum1.")
 	and rnc = '".$node."'
	
    order by date
	;");

	return $query->result();
	
	}
	
	function cell_daily_report($node,$reportdate){
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
	"SELECT year, week, date, cellname as node, 
	   availability_radar_score AS availability, 
	   cs_radar_score AS cs_call_completion, 
	   ps_radar_score AS ps_call_completion, 
       dl_codes_power_radar_score AS air_interface_dl, 
	   retention_3g_radar_score AS retention_3g, 
	   rtwp_radar_score AS air_interface_ul, 
       sho_overhead_radar_score AS sho_overhead, 
	   thp_radar_score AS throughput, 
	   '5.00'::text AS rf_health_index,
	   baseline_radar_score AS baseline,
       'null'::text AS hardware_nodeb,
       overshooter_radar_score AS overshooters,
       pcpich_radar_score AS cpich_power_ratio,
	   '5.00'::text AS worst_aging_factor,
       traffic_load_radar_score AS traffic_load,
	   sw_releases_features_radar_score AS sw_releases_features,
	    composite_radar_score AS composite
    FROM umts_kpi.radar_cell_daily
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
		$rnc_info = $this->model_cellsinfo->find_cellid($node);
		$rnc = $rnc_info[0]->rnc;
		$condition = "and rnc = '".$rnc."'";
		}
		elseif($netype == 'wc'){
		$rnc = $node;
		$condition = "and region = '".$node."'";	
		}
		elseif ($netype == 'rnc'){
		$rnc = $node;
		$condition = "and rnc = '".$node."'";
		}
		
		if ($nekpi == 'cpich_power_ratio') {
		$query = $this->db->query(
		"
		select 1 as sortcol, '-'::text as year, '-'::text as week, '-'::text as region, '-'::text as rnc, '".$rnc."' as node, '-'::text as cellid, '-'::text as category, '-'::text as cpich, '-'::text as pcpichpower, '-'::text as maxtxpower
		UNION
		(SELECT 2 as sortcol, year::text, week::text, region::text, rnc::text, cellname::text as node, cellid::text, category::text, cpich::text, pcpichpower::text, maxtxpower::text
		FROM umts_kpi.radar_cpich_cell_weekly
		where (year,week) in ((".$yearnum4.",".$weeknum4."))
		--and rnc = '".$rnc."'
		".$condition."
		and rnc not in ('RNCPE01','RNCRJT2','RNCSC03','RNCDF03','RNCDF02')) order by sortcol, node
		;");
	return $query->result();
		}
		
		if ($nekpi == 'sw_releases_features') {
		$query = $this->db->query(
		"
		select 1 as sortcol, '-'::text as year, '-'::text as week, '-'::text as region, '-'::text as rnc, '".$rnc."' as node,
'-'::text as ura_pch_radar, 
'-'::text as amr_59_radar, 
'-'::text as hsupa2ms_radar, 
'-'::text as el2_64qam_radar, 
'-'::text as ic_radar, 
'-'::text as enhfd_radar, 
'-'::text as srbonhs_radar,
'-'::text as efach_edrx_radar,
'-'::text as dc_radar,
'-'::text as cpc_radar,
'-'::text as ran_features_score, 
'-'::text as ran_sw_release_score
union
(SELECT 2 as sortcol, year::text, week::text, region::text, rnc::text, cellname::text as node, 
ura_pch_radar::text, 
amr_59_radar::text, 
hsupa2ms_radar::text, 
el2_64qam_radar::text, 
ic_radar::text, 
enhfd_radar::text, 
srbonhs_radar::text,
efach_edrx_radar::text,
dc_radar::text,
cpc_radar::text,
ran_features_score::text, 
ran_sw_release_score::text
FROM public.radar_sw_release_features_cell_history
where (year,week) in ((".$yearnum4.",".$weeknum4."))
".$condition."
and rnc not in ('RNCPE01','RNCRJT2','RNCSC03','RNCDF03','RNCDF02')) order by sortcol, node
		;");
	return $query->result();
		}

	}
	
}