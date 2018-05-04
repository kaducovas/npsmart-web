<?php 

class Model_process_monitoring extends CI_Model{
	
/////////////////////////////////////////////////// UMTS ////////////////////////////////////////////////////////////
	
	function maxdate($reportdate){
		
		$daterange = $reportdate;
		$inidate = date('Y-m-d', strtotime($daterange.' - 15 day'));
		
		 $query = $this->db->query("
			SELECT max(datetime::date) as date FROM (
			select amount.datetime,amount.oss,PM_Files_Donwloaded, PM_Files_FTP_Delay
			from
			(select datetime::date,oss,count(*) as PM_Files_Donwloaded from umts_control.log_etl 
			where datetime::date > '".$inidate."' -- and bulkload is not null
			group by datetime::date,oss
			order by datetime::date,oss) amount
			inner join
			(select datetime::date,oss,avg((EXTRACT(EPOCH FROM ftp) - EXTRACT(EPOCH FROM datetime))/60) as PM_Files_FTP_Delay from umts_control.log_etl 
			where datetime::date > '2011-01-01' -- and bulkload is not null
			group by datetime::date,oss
			order by datetime::date,oss) delay
			on amount.datetime = delay.datetime and amount.oss= delay.oss) a
		 ");

	return $query->result();
	}

	function main_monitoring($reportdate){
		
		$daterange = $reportdate;
		$inidate = date('Y-m-d', strtotime($daterange.' - 15 day'));
		
		 $query = $this->db->query("
			select amount.datetime,amount.oss,PM_Files_Donwloaded, ROUND(PM_Files_FTP_Delay) as PM_Files_FTP_Delay
			from
			(select datetime::date,oss,count(*) as PM_Files_Donwloaded from umts_control.log_etl 
			where datetime::date > '".$inidate."' -- and bulkload is not null
			group by datetime::date,oss
			order by datetime::date,oss) amount
			inner join
			(select datetime::date,oss,avg((EXTRACT(EPOCH FROM ftp) - EXTRACT(EPOCH FROM datetime))/60) as PM_Files_FTP_Delay from umts_control.log_etl 
			where datetime::date > '2011-01-01' -- and bulkload is not null
			group by datetime::date,oss
			order by datetime::date,oss) delay
			on amount.datetime = delay.datetime and amount.oss= delay.oss
		 ");

	return $query->result();
	}
	
	function quant_files($reportdate){
		
		$daterange = $reportdate;
		$inidate = date('Y-m-d', strtotime($daterange.' - 15 day'));
		
		 $query = $this->db->query("
			SELECT 'GSM'::TEXT as tech, COUNT(*) cnt, oss,
			to_timestamp(floor((extract('epoch' from ftp) / 600 )) * 600) 
			AT TIME ZONE 'UTC' as interval_alias
			FROM gsm_control.log_etl 
			where ftp > '".$inidate."'
			GROUP BY interval_alias,oss,'GSM'::TEXT


			union
				SELECT 'UMTS'::TEXT as tech, COUNT(*) cnt, oss,
			to_timestamp(floor((extract('epoch' from ftp) / 600 )) * 600) 
			AT TIME ZONE 'UTC' as interval_alias
			FROM umts_control.log_etl 
			where ftp > '".$inidate."'
			GROUP BY interval_alias,oss,'UMTS'::TEXT    
			   
			union    

			SELECT 'LTE'::TEXT as tech, COUNT(*) cnt, oss,
			to_timestamp(floor((extract('epoch' from ftp) / 600 )) * 600) 
			AT TIME ZONE 'UTC' as interval_alias
			FROM lte_control.log_etl 
			where ftp > '".$inidate."'
			GROUP BY interval_alias,oss,'LTE'::TEXT

			ORDER BY interval_alias

		 ");

	return $query->result();
	}

	function all_files(){		
		$query = $this->db->query("
			select 
			sum(case 
				when gp = 30 then count*48
				when gp = 60 then count*24
			end ) as total_files from
			(SELECT COUNT(DISTINCT functionsubset_id), gp from umts_control.counter_reference where counter_enable = true group by gp) t
		");

	return $query->result();
	}

///////////////////////////////////////////////////////// LTE ///////////////////////////////////////////////////////	

	function maxdate_lte($reportdate){
		
		$daterange = $reportdate;
		$inidate = date('Y-m-d', strtotime($daterange.' - 15 day'));
		
		 $query = $this->db->query("
			SELECT max(datetime::date) as date FROM (
			select amount.datetime,amount.oss,PM_Files_Donwloaded, PM_Files_FTP_Delay
			from
			(select datetime::date,oss,count(*) as PM_Files_Donwloaded from lte_control.log_etl 
			where datetime::date > '".$inidate."' -- and bulkload is not null
			group by datetime::date,oss
			order by datetime::date,oss) amount
			inner join
			(select datetime::date,oss,avg((EXTRACT(EPOCH FROM ftp) - EXTRACT(EPOCH FROM datetime))/60) as PM_Files_FTP_Delay from lte_control.log_etl 
			where datetime::date > '2011-01-01' -- and bulkload is not null
			group by datetime::date,oss
			order by datetime::date,oss) delay
			on amount.datetime = delay.datetime and amount.oss= delay.oss) a
		 ");

	return $query->result();
	}

	function main_monitoring_lte($reportdate){
		
		$daterange = $reportdate;
		$inidate = date('Y-m-d', strtotime($daterange.' - 15 day'));
		
		 $query = $this->db->query("
			select amount.datetime,amount.oss,PM_Files_Donwloaded, ROUND(PM_Files_FTP_Delay) as PM_Files_FTP_Delay
			from
			(select datetime::date,oss,count(*) as PM_Files_Donwloaded from lte_control.log_etl 
			where datetime::date > '".$inidate."' -- and bulkload is not null
			group by datetime::date,oss
			order by datetime::date,oss) amount
			inner join
			(select datetime::date,oss,avg((EXTRACT(EPOCH FROM ftp) - EXTRACT(EPOCH FROM datetime))/60) as PM_Files_FTP_Delay from lte_control.log_etl 
			where datetime::date > '2011-01-01' -- and bulkload is not null
			group by datetime::date,oss
			order by datetime::date,oss) delay
			on amount.datetime = delay.datetime and amount.oss= delay.oss
		 ");

	return $query->result();
	}

	function all_files_lte(){		
		$query = $this->db->query("
			select SUM(count*24)
			as total_files from
			(SELECT COUNT(DISTINCT functionsubset_id) from lte_control.counter_reference where counter_enable = true) t
		");

	return $query->result();
	}

////////////////////////////////////////////////////////////// GSM ///////////////////////////////////////////////////

	function maxdate_gsm($reportdate){
		
		$daterange = $reportdate;
		$inidate = date('Y-m-d', strtotime($daterange.' - 15 day'));
		
		 $query = $this->db->query("
			SELECT max(datetime::date) as date FROM (
			select amount.datetime,amount.oss,PM_Files_Donwloaded, PM_Files_FTP_Delay
			from
			(select datetime::date,oss,count(*) as PM_Files_Donwloaded from lte_control.log_etl 
			where datetime::date > '".$inidate."' -- and bulkload is not null
			group by datetime::date,oss
			order by datetime::date,oss) amount
			inner join
			(select datetime::date,oss,avg((EXTRACT(EPOCH FROM ftp) - EXTRACT(EPOCH FROM datetime))/60) as PM_Files_FTP_Delay from lte_control.log_etl 
			where datetime::date > '2011-01-01' -- and bulkload is not null
			group by datetime::date,oss
			order by datetime::date,oss) delay
			on amount.datetime = delay.datetime and amount.oss= delay.oss) a
		 ");

	return $query->result();
	}

	function main_monitoring_gsm($reportdate){
		
		$daterange = $reportdate;
		$inidate = date('Y-m-d', strtotime($daterange.' - 15 day'));
		
		 $query = $this->db->query("
			select amount.datetime,amount.oss,PM_Files_Donwloaded, ROUND(PM_Files_FTP_Delay) as PM_Files_FTP_Delay
			from
			(select datetime::date,oss,count(*) as PM_Files_Donwloaded from gsm_control.log_etl 
			where datetime::date > '".$inidate."' -- and bulkload is not null
			group by datetime::date,oss
			order by datetime::date,oss) amount
			inner join
			(select datetime::date,oss,avg((EXTRACT(EPOCH FROM ftp) - EXTRACT(EPOCH FROM datetime))/60) as PM_Files_FTP_Delay from gsm_control.log_etl 
			where datetime::date > '2011-01-01' -- and bulkload is not null
			group by datetime::date,oss
			order by datetime::date,oss) delay
			on amount.datetime = delay.datetime and amount.oss= delay.oss
		 ");

	return $query->result();
	}

	function all_files_gsm(){		
		$query = $this->db->query("
			select SUM(count*24)
			as total_files from
			(SELECT COUNT(DISTINCT functionsubset_id) from gsm_control.counter_reference where counter_enable = true) t
		");

	return $query->result();
	}	
}
?>	