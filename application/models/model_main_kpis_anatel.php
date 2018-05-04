<?php 

class Model_main_kpis_anatel extends CI_Model{
	
	function maxdate(){
		$query = $this->db->query(
			"
				SELECT MAX (date) as date FROM umts_kpi.vw_main_kpis_region_rate_daily
			");

		return $query->result();
	
	}
	
	function maxweek(){
		$query = $this->db->query(
			"
				SELECT MAX (week) as date FROM umts_kpi.vw_main_kpis_region_rate_weekly where year = '2018'
			");

		return $query->result();
	
	}	
	
	//////////////////////////////////////////////////////// DAILY ////////////////////////////////////////////////////////
	
	function network($date,$reportdate){
		$query = $this->db->query(
			"
				SELECT date, smp_5, smp_7, smp_8, smp_9
				FROM umts_kpi.vw_main_kpis_network_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30'
				ORDER BY date
			");

		return $query->result();
	
	}
	
	function region($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, date
				FROM umts_kpi.vw_main_kpis_region_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}

	function uf($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, date
				FROM umts_kpi.vw_main_kpis_uf_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}
	
	function cidade($date,$reportdate,$ibge,$uf){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, date
				FROM umts_kpi.vw_main_kpis_cidade_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30' AND ibge = '".$ibge."' and uf = '".$uf."'
				order by date
			");

		return $query->result();
	
	}	
	
	function cluster($date,$reportdate,$cluster_id, $uf){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, date
				FROM umts_kpi.vw_main_kpis_cluster_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30' AND cluster_id = '".$cluster_id."' and uf = '".$uf."'
				order by date
			");

		return $query->result();
	
	}

	function rnc($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, date
				FROM umts_kpi.vw_main_kpis_rnc_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}

	function nodeb($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, date
				FROM umts_kpi.vw_main_kpis_nodeb_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30' AND
					CASE
					WHEN left(node,char_length(node)- 2) like '%%S02%%' and char_length(node)> 8 then concat('U',substring(node,position('S02' in node) + 3,(char_length(node) - position('S02' in node) + 3)))                       
					WHEN left(node,char_length(node)- 2) like '%%S01%%' and char_length(node)> 8 then concat('U',substring(node,position('S01' in node) + 3,(char_length(node) - position('S01' in node) + 3)))
					WHEN left(node,char_length(node)- 2) like '%%IMP_%%' and node not like '%%S01%%' then substring(node,position('IMP_' in node) + 4,char_length(node) - position('IMP_' in node) + 4)
					else node
					end = '".$node."'
				order by date
			");

		return $query->result();
	
	}
	
	/////////////////////////////////////////////////////////// WEEKLY /////////////////////////////////////////////////////
	
	function weekly_network($date,$reportdate){		
		$query = $this->db->query(
			"
				SELECT date, smp_5, smp_7, smp_8, smp_9
				FROM umts_kpi.vw_main_kpis_network_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."'
				ORDER BY date
			");

		return $query->result();
	
	}
	
	function weekly_region($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, date
				FROM umts_kpi.vw_main_kpis_region_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}

	function weekly_uf($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, date
				FROM umts_kpi.vw_main_kpis_uf_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}
	
	function weekly_cidade($date,$reportdate,$ibge,$uf){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, date
				FROM umts_kpi.vw_main_kpis_cidade_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND ibge = '".$ibge."' and uf = '".$uf."'
				order by date
			");

		return $query->result();
	
	}	
	
	function weekly_cluster($date,$reportdate,$cluster_id, $uf){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, date
				FROM umts_kpi.vw_main_kpis_cluster_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND cluster_id = '".$cluster_id."' and uf = '".$uf."'
				order by date
			");

		return $query->result();
	
	}

	function weekly_rnc($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, date
				FROM umts_kpi.vw_main_kpis_rnc_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}

	function weekly_nodeb($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, date
				FROM umts_kpi.vw_main_kpis_nodeb_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND
					CASE
					WHEN left(node,char_length(node)- 2) like '%%S02%%' and char_length(node)> 8 then concat('U',substring(node,position('S02' in node) + 3,(char_length(node) - position('S02' in node) + 3)))                       
					WHEN left(node,char_length(node)- 2) like '%%S01%%' and char_length(node)> 8 then concat('U',substring(node,position('S01' in node) + 3,(char_length(node) - position('S01' in node) + 3)))
					WHEN left(node,char_length(node)- 2) like '%%IMP_%%' and node not like '%%S01%%' then substring(node,position('IMP_' in node) + 4,char_length(node) - position('IMP_' in node) + 4)
					else node
					end = '".$node."'
				order by date
			");

		return $query->result();
	
	}
	
	//////////////////////////////////////////////////////////// MONTHLY ////////////////////////////////////////////////////
	
	function monthly_network($year,$week,$final_year,$final_week){
		$query = $this->db->query(
			"
				SELECT week as date, smp_5, smp_7, smp_8, smp_9
				FROM umts_kpi.vw_main_kpis_network_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."')
				ORDER BY year,week
			");

		return $query->result();
	
	}
	
	function monthly_region($year,$week,$final_year,$final_week,$node){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, week as date
				FROM umts_kpi.vw_main_kpis_region_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND node = '".$node."'
				ORDER BY year,week
			");

		return $query->result();
	
	}

	function monthly_uf($year,$week,$final_year,$final_week,$node){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, week as date
				FROM umts_kpi.vw_main_kpis_uf_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND node = '".$node."'
				ORDER BY year,week
			");

		return $query->result();
	
	}
	
	function monthly_cidade($year,$week,$final_year,$final_week,$ibge,$uf){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, week as date, year
				FROM umts_kpi.vw_main_kpis_cidade_rate_weekly
				WHERE (year,week) >= (2018,15)
				AND ibge = '".$ibge."' and uf = '".$uf."'
				UNION
				SELECT smp5_umts, smp7_umts, smp8_umts, smp9_umts, week as date, year
				FROM smp_cidades_hfc_claro 
				WHERE (year,week) <= (2018,14)
				AND (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND ibge = '".$ibge."' and uf = '".$uf."'
				ORDER BY year,date
			");

		return $query->result();
	
	}	
	
	function monthly_cluster($year,$week,$final_year,$final_week,$cluster_id, $uf){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, week as date
				FROM umts_kpi.vw_main_kpis_cluster_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND cluster_id = '".$cluster_id."' and uf = '".$uf."'
				ORDER BY year,week
			");

		return $query->result();
	
	}

	function monthly_rnc($year,$week,$final_year,$final_week,$node){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, week as date
				FROM umts_kpi.vw_main_kpis_rnc_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND node = '".$node."'
				ORDER BY year,week
			");

		return $query->result();
	
	}

	function monthly_nodeb($year,$week,$final_year,$final_week,$node){
		$query = $this->db->query(
			"
				SELECT smp_5, smp_7, smp_8, smp_9, week as date
				FROM umts_kpi.vw_main_kpis_nodeb_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND
					CASE
					WHEN left(node,char_length(node)- 2) like '%%S02%%' and char_length(node)> 8 then concat('U',substring(node,position('S02' in node) + 3,(char_length(node) - position('S02' in node) + 3)))                       
					WHEN left(node,char_length(node)- 2) like '%%S01%%' and char_length(node)> 8 then concat('U',substring(node,position('S01' in node) + 3,(char_length(node) - position('S01' in node) + 3)))
					WHEN left(node,char_length(node)- 2) like '%%IMP_%%' and node not like '%%S01%%' then substring(node,position('IMP_' in node) + 4,char_length(node) - position('IMP_' in node) + 4)
					else node
					end = '".$node."'
				ORDER BY year,week
			");

		return $query->result();
	
	}	
	
}
	