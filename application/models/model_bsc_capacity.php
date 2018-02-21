<?php 

class Model_bsc_capacity extends CI_Model{

	function bsc_capacity_weekly($node,$reportdate){		
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
		"select bsc as node, 'bsc'::text as type,
STRING_AGG(week::text, ',' order by year desc,week desc) AS weeks,
STRING_AGG(trx::text, ',' order by year desc,week desc) AS trx,
STRING_AGG(pcu::text, ',' order by year desc,week desc) AS pcu,
STRING_AGG(interface_a_tdm::text, ',' order by year desc,week desc) AS interface_a_tdm
		FROM gsm_kpi.vw_bsc_capacity
		where (year,week) in ((".$yearnum4.",".$weeknum4."),(".$yearnum2.",".$weeknum2."),(".$yearnum3.",".$weeknum3."),(".$yearnum1.",".$weeknum1."))
and bsc in (select bsc from bsc_capacity_den)
		group by bsc order by bsc
		;");

	return $query->result();
	}

	function bsc_capacity_report($node,$reportdate){
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
	"SELECT year, week, date, bsc as node, 
		bsc,
		trx,
		pcu,
		interface_a_tdm
    FROM gsm_kpi.vw_bsc_capacity_daily
	where (year,week) >= (".$yearnum1.",".$weeknum1.")
 	and bsc = '".$node."'
    order by date
	;");

	return $query->result();
	
	}

}