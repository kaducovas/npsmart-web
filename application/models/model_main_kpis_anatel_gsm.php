<?php 

class Model_main_kpis_anatel_gsm extends CI_Model{
	
	function maxdate(){
		$query = $this->db->query(
			"
				SELECT MAX (date) as date FROM gsm_kpi.vw_main_kpis_region_rate_daily
			");

		return $query->result();
	
	}
	
		
	//////////////////////////////////////////////////////// DAILY ////////////////////////////////////////////////////////
	
	function network($date,$reportdate){
		$query = $this->db->query(
			"
				SELECT date, smp_5,smp_7,smp_8, smp_9
				FROM gsm_kpi.vw_main_kpis_network_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30'
				ORDER BY date
			");

		return $query->result();
	
	}
	
	function region($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, date
				FROM gsm_kpi.vw_main_kpis_region_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}

	function uf($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, date
				FROM gsm_kpi.vw_main_kpis_uf_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}
	
	function cidade($date,$reportdate,$ibge){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, date
				FROM gsm_kpi.vw_main_kpis_cidade_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30' AND ibge = '".$ibge."'
				order by date
			");

		return $query->result();
	
	}	
	
	function bts($date,$reportdate,$enodebid){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, date
				FROM gsm_kpi.vw_main_kpis_bts_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30' AND node = '".$enodebid."'
				order by date
			");

		return $query->result();
	
	}
	
	function bsc($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, date
				FROM gsm_kpi.vw_main_kpis_bsc_rate_hourly
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}	
	
	/////////////////////////////////////////////////////////// WEEKLY /////////////////////////////////////////////////////
	
	function weekly_network($date,$reportdate){		
		$query = $this->db->query(
			"
				SELECT date, smp_5,smp_7,smp_8, smp_9
				FROM gsm_kpi.vw_main_kpis_network_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."'
				ORDER BY date
			");

		return $query->result();
	
	}
	
	function weekly_region($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, date
				FROM gsm_kpi.vw_main_kpis_region_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}

	function weekly_uf($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, date
				FROM gsm_kpi.vw_main_kpis_uf_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}
	
	function weekly_cidade($date,$reportdate,$ibge){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, date
				FROM gsm_kpi.vw_main_kpis_cidade_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND ibge = '".$ibge."'
				order by date
			");

		return $query->result();
	
	}	
	
	function weekly_bsc($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, date
				FROM gsm_kpi.vw_main_kpis_bsc_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate."' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}

	function weekly_bts($date,$reportdate,$node){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, date
				FROM gsm_kpi.vw_main_kpis_bts_rate_daily
				WHERE date >= '".$date."' and date <= '".$reportdate." 23:30' AND node = '".$node."'
				order by date
			");

		return $query->result();
	
	}
	
	//////////////////////////////////////////////////////////// MONTHLY ////////////////////////////////////////////////////
	
	function monthly_network($year,$week,$final_year,$final_week){
		$query = $this->db->query(
			"
				SELECT week as date, smp_5,smp_7,smp_8, smp_9
				FROM gsm_kpi.vw_main_kpis_network_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."')
				ORDER BY year,week
			");

		return $query->result();
	
	}
	
	function monthly_region($year,$week,$final_year,$final_week,$node){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, week as date
				FROM gsm_kpi.vw_main_kpis_region_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND node = '".$node."'
				ORDER BY year,week
			");

		return $query->result();
	
	}

	function monthly_uf($year,$week,$final_year,$final_week,$node){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, week as date
				FROM gsm_kpi.vw_main_kpis_uf_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND node = '".$node."'
				ORDER BY year,week
			");

		return $query->result();
	
	}
	
	function monthly_cidade($year,$week,$final_year,$final_week,$ibge,$uf){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, week as date
				FROM gsm_kpi.vw_main_kpis_cidade_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND ibge = '".$ibge."' and uf = '".$uf."'
				ORDER BY year,week
			");

		return $query->result();
	
	}	
	
	function monthly_bsc($year,$week,$final_year,$final_week,$node){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, week as date
				FROM gsm_kpi.vw_main_kpis_bsc_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND node = '".$node."'
				ORDER BY year,week
			");

		return $query->result();
	
	}

	function monthly_bts($year,$week,$final_year,$final_week,$node){
		$query = $this->db->query(
			"
				SELECT smp_5,smp_7,smp_8, smp_9, week as date
				FROM gsm_kpi.vw_main_kpis_bts_rate_weekly
				WHERE (year,week) >= ('".$year."','".$week."') and (year,week) <= ('".$final_year."','".$final_week."') AND node = '".$node."'
				order by year,week
			");

		return $query->result();
	
	}	
	
}
	