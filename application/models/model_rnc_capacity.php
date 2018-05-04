<?php 

class Model_rnc_capacity extends CI_Model{

	function rnc_capacity_weekly($node,$reportdate){		
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -28 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -14 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -7 day'));		
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
		"select rnc as node, 'rnc'::text as type,
STRING_AGG(week::text, ',' order by year desc,week desc) AS weeks,
STRING_AGG(region::text, ',' order by year desc,week desc) AS region,
STRING_AGG(netype::text, ',' order by year desc,week desc) AS netype,
STRING_AGG(cpu_load::text, ',' order by year desc,week desc) AS cpu_load,
STRING_AGG(dsp_load::text, ',' order by year desc,week desc) AS dsp_load,
STRING_AGG(ib_cpu_load::text, ',' order by year desc,week desc) AS ib_cpu_load,
STRING_AGG(ib_forward_load::text, ',' order by year desc,week desc) AS ib_forward_load,
STRING_AGG(round((100*iu_ps::real)::numeric,2)::text, ',' order by year desc,week desc) AS iu_ps,
STRING_AGG(round((iub::real/10)::numeric,2)::text, ',' order by year desc,week desc) AS iub,
STRING_AGG(iups_tx::text, ',' order by year desc,week desc) AS iu_ps_tx,
STRING_AGG(iub_tx::text, ',' order by year desc,week desc) AS iub_tx
		FROM umts_capacity.vw_rnc_capacity
		where (year,week) in ((".$yearnum4.",".$weeknum4."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum1.",".$weeknum1."))
and rnc not in ('RNCPE01','RNCRJT2','RNCSC03','RNCDF02')
		group by rnc order by rnc
		;");

	return $query->result();
	}

	function rnc_capacity_report($node,$reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -28 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -14 day'));
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -7 day'));		
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
	"select a.year, a.week, a.date, a.node, a.region,
		a.rnc,
		cpu_load,
		dsp_load,
		ib_cpu_load,
		ib_forward_load,
		iu_ps,
		iub,
		iups_tx,
		iub_tx
 from (SELECT year, week, date, rnc as node, 
		region,
		rnc,
		cpu_load,
		dsp_load,
		ib_cpu_load,
		ib_forward_load,
		round((100*iu_ps::real)::numeric,2) as iu_ps,
		round((iub::real/10)::numeric,2) as iub
	FROM umts_capacity.vw_rnc_capacity_daily
	where (year,week) >= (".$yearnum1.",".$weeknum1.")
 	and rnc = '".$node."'
    order by date) a left join 
(SELECT year, week, date, rnc as node, 
	iups_tx,
	iub_tx
	FROM umts_capacity.vw_rnc_capacity_daily
	where (year,week) >= (".$yearnum1.",".$weeknum1.")
 	and rnc = '".$node."'
 	and iups_tx != 0 AND iub_tx!=0
    order by date) b on a.date::date = b.date::date and extract(hour from a.date) = extract(hour from b.date)
	;");

	return $query->result();
	
	}

}