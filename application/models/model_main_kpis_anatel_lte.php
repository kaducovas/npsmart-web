<?php 

class Model_main_kpis_anatel_lte extends CI_Model{
	
	function maxdate(){
		$query = $this->db->query(
			"
				SELECT MAX (date) as date FROM lte_kpi.vw_main_kpis_region_rate_daily
			");

		return $query->result();
	
	}
	
		
	//////////////////////////////////////////////////////// DAILY ////////////////////////////////////////////////////////
	
	function network($date,$reportdate){
		$query = $this->db->query(
			"
				SELECT date, smp_8, smp_9
				FROM lte_kpi.vw_main_kpis_network_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:00'
				ORDER BY date
			");

		return $query->result();
	
	}
	
	function region($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, date
				FROM lte_kpi.vw_main_kpis_region_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:00' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}

	function uf($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, date
				FROM lte_kpi.vw_main_kpis_uf_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:00' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}
	
	function cidade($date,$reportdate,$ibge,$uf){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, date
				FROM lte_kpi.vw_main_kpis_cidade_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:00' AND ibge = '".$ibge."' and uf = '".$uf."'
				order by date
			");

		return $query->result();
	
	}	
	
	function clusters($date,$reportdate,$cluster_id,$uf){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, date
				FROM lte_kpi.vw_main_kpis_cluster_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:00' and cluster_id = '".$cluster_id."' and uf = '".$uf."'
				order by date
			");

		return $query->result();
	
	}

	function enodeb($date,$reportdate,$enodebid){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, date
				FROM lte_kpi.vw_main_kpis_enodeb_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:00' AND enodebid = '".$enodebid."'
				order by date
			");

		return $query->result();
	
	}
	
	/////////////////////////////////////////////////////////// WEEKLY /////////////////////////////////////////////////////
	
	function weekly_network($date,$reportdate){		
		$query = $this->db->query(
			"
				SELECT date, smp_8, smp_9
				FROM lte_kpi.vw_main_kpis_network_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."'
				ORDER BY date
			");

		return $query->result();
	
	}
	
	function weekly_region($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, date
				FROM lte_kpi.vw_main_kpis_region_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}

	function weekly_uf($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, date
				FROM lte_kpi.vw_main_kpis_uf_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}
	
	function weekly_cidade($date,$reportdate,$ibge,$uf){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, date
				FROM lte_kpi.vw_main_kpis_cidade_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND ibge = '".$ibge."' and uf = '".$uf."'
				order by date
			");

		return $query->result();
	
	}	
	
	function weekly_cluster($date,$reportdate,$cluster_id,$uf){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, date
				FROM lte_kpi.vw_main_kpis_cluster_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND cluster_id = '".$cluster_id."' and uf = '".$uf."'
				order by date
			");

		return $query->result();
	
	}

	function weekly_enodeb($date,$reportdate,$enodebid){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, date
				FROM lte_kpi.vw_main_kpis_enodeb_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND enodebid = '".$enodebid."'
				order by date
			");

		return $query->result();
	
	}
	
	//////////////////////////////////////////////////////////// MONTHLY ////////////////////////////////////////////////////
	
	function monthly_network($year,$week,$final_year,$final_week){
		$query = $this->db->query(
			"
				SELECT week as date, smp_8, smp_9
				FROM lte_kpi.vw_main_kpis_network_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."')
				ORDER BY year,week
			");

		return $query->result();
	
	}
	
	function monthly_region($year,$week,$final_year,$final_week,$node){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, week as date
				FROM lte_kpi.vw_main_kpis_region_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND node = '".$node."'
				ORDER BY year,week
			");

		return $query->result();
	
	}

	function monthly_uf($year,$week,$final_year,$final_week,$node){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, week as date
				FROM lte_kpi.vw_main_kpis_uf_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND node = '".$node."'
				ORDER BY year,week
			");

		return $query->result();
	
	}
	
	function monthly_cidade($year,$week,$final_year,$final_week,$ibge,$uf){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, week as date, year
				FROM lte_kpi.vw_main_kpis_cidade_rate_weekly
				WHERE (year,week) >= (2018,15)
				AND (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND ibge = '".$ibge."' and uf = '".$uf."'
				UNION
				SELECT smp8_lte, smp9_lte, week as date, year
				FROM smp_cidades_hfc_claro 
				WHERE (year,week) < (2018,15)
				AND (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND ibge = '".$ibge."' and uf = '".$uf."'
				ORDER BY year,date
			");

		return $query->result();
	
	}	
	
	function monthly_cluster($year,$week,$final_year,$final_week,$cluster_id,$uf){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, week as date
				FROM lte_kpi.vw_main_kpis_cluster_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND cluster_id = '".$cluster_id."' and uf = '".$uf."'
				ORDER BY year,week
			");

		return $query->result();
	
	}

	function monthly_enodeb($year,$week,$final_year,$final_week,$enodebid){
		$query = $this->db->query(
			"
				SELECT smp_8, smp_9, week as date
				FROM lte_kpi.vw_main_kpis_enodeb_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND enodebid = '".$enodebid."'
				order by year,week
			");

		return $query->result();
	
	}	
	
}
	