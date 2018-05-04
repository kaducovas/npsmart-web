<?php 

class Model_ppt extends CI_Model{
	
	public function maxdate(){
		
		$query = $this->db->query(
			"
				select max(date) date from umts_control.log_daily
			");
			
			$return = $query->row(0)->date;

		return $return;
	
	}	
	
	public function gsm_number_of_sites(){
		
		$query = $this->db->query(
			"
				SELECT cidade, COUNT (DISTINCT site)
				FROM gsm_control.cells_db
				WHERE (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				GROUP BY cidade
			");

		return $query->result();
	
	}	
	
	public function umts_number_of_sites(){
		
		$query = $this->db->query(
			"
				SELECT cidade, COUNT( DISTINCT nodeb)
				FROM umts_control.cells_database
				WHERE (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA')) 
				GROUP BY cidade
			");

		return $query->result();
	
	}	
	
	public function lte_number_of_sites(){
		
		$query = $this->db->query(
			"
				SELECT cidade, COUNT( DISTINCT site)
				FROM lte_control.cells
				WHERE (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				GROUP BY cidade
			");

		return $query->result();
	
	}

	public function lte_2600_sites(){
		
		$query = $this->db->query(
			"
				SELECT cidade, COUNT (DISTINCT site)
				FROM lte_control.cells
				WHERE frequency = 2600 AND (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				GROUP BY cidade
			");

		return $query->result();
	
	}

	public function lte_1800_sites(){
		
		$query = $this->db->query(
			"
				SELECT cidade, COUNT (DISTINCT site)
				FROM lte_control.cells
				WHERE frequency = 1800 AND (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				GROUP BY cidade
			");

		return $query->result();
	
	}

	public function lte_700_sites(){
		
		$query = $this->db->query(
			"
				SELECT cidade, COUNT (DISTINCT site)
				FROM lte_control.cells
				WHERE frequency = 700 AND (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				GROUP BY cidade
			");

		return $query->result();
	
	}	
	
	public function lte_cities_dashboard($year,$w1,$w4){
		
		$query = $this->db->query(
			"
				SELECT year, week, uf, ibge, node, average_user_volume, average_user_volume_2600, average_user_volume_1800, average_user_volume_700, cell_downlink_avg_thp_2600, cell_downlink_avg_thp_1800, cell_downlink_avg_thp_700, data_volume_2600, data_volume_1800, data_volume_700, data_volume
				FROM lte_kpi.vw_main_kpis_cidade_rate_weekly
				WHERE (year,week) BETWEEN (2017,10) AND (".$year.",'".$w1."')  and node in ('BELO HORIZONTE','BRASÍLIA','CURITIBA','FLORIANÓPOLIS','RECIFE','SALVADOR') and uf in ('MG','DF','PR','SC','PE','BA')
				ORDER BY year,week
			");

		return $query->result();
	
	}
	
	public function lte_cities_nqi($year,$w1,$w4){
		
		$query = $this->db->query(
			"
				SELECT year, week, cidade, uf, nqi
				FROM lte_kpi.vw_nqi_weekly_cidade
				WHERE (year,week) BETWEEN (2017,10) AND (".$year.",'".$w1."') and cidade in ('BELO HORIZONTE','BRASÍLIA','CURITIBA','FLORIANÓPOLIS','RECIFE','SALVADOR') and uf in ('MG','DF','PR','SC','PE','BA')
				ORDER BY year,week
			");

		return $query->result();
	
	}

	public function umts_cities_nqi_hs($year,$w1,$w4){
		
		$query = $this->db->query(
			"
				SELECT year, week, uf, ibge, node, nqi_ps
				FROM umts_kpi.vw_nqi_weekly_cidade
				WHERE (year,week) BETWEEN (2017,10) AND (".$year.",'".$w1."') and node in ('BELO HORIZONTE','BRASÍLIA','CURITIBA','FLORIANÓPOLIS','RECIFE','SALVADOR') and uf in ('MG','DF','PR','SC','PE','BA')
				ORDER BY year,week
			");

		return $query->result();
	
	}
	
	public function umts_kpi_cs($year,$w1,$w4){
				
		$query = $this->db->query(
			"
				SELECT year, week, uf, ibge, node, acc_cs, drop_cs, availability
				FROM umts_kpi.vw_main_kpis_cidade_rate_weekly
				WHERE (year,week) BETWEEN (".$year.",".$w4.") AND (".$year.",".$w1.") and (node,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				ORDER BY year,week
			");

		return $query->result();
	
	}
	
	public function umts_kpi_hs($year,$w1,$w4){
				
		$query = $this->db->query(
			"
				SELECT year, week, uf, ibge, node, acc_ps, drop_ps, availability, thp_hsdpa
				FROM umts_kpi.vw_main_kpis_cidade_rate_weekly
				WHERE (year,week) BETWEEN (".$year.",".$w4.") AND (".$year.",".$w1.") and (node,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				ORDER BY year,week
			");

		return $query->result();
	
	}
	
	public function cqi_lte($year,$w1,$w4){
				
		$query = $this->db->query(
			"
				SELECT year, week, gp, uf, ibge, node, rrc_service, e_rab, availability, service_drop,cell_downlink_avg_thp
				FROM lte_kpi.vw_main_kpis_cidade_rate_weekly
				WHERE (year,week) BETWEEN (".$year.",".$w4.") AND (".$year.",".$w1.") and (node,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				ORDER BY year,week
			");

		return $query->result();
	
	}
	
	public function vw_cqi_cs($year,$w1,$w4){
				
		$query = $this->db->query(
			"
				select year, cidade, b.ibge, week,
				count(*) filter (where round(((acc_cs*drop_cs*availability)/(10000))::numeric,2) < 95)  AS criticos,
				count(*) filter (where round(((acc_cs*drop_cs*availability)/(10000))::numeric,2) >= 95
								AND round(((acc_cs*drop_cs*availability)/(10000))::numeric,2) < 97)  AS ruins,
				count(*) filter (where round(((acc_cs*drop_cs*availability)/(10000))::numeric,2) >= 97
								AND round(((acc_cs*drop_cs*availability)/(10000))::numeric,2) < 98.5)  AS bons,
				count(*) filter (where round(((acc_cs*drop_cs*availability)/(10000))::numeric,2) >= 98.5)  AS premiums
				from umts_kpi.vw_main_kpis_cell_rate_weekly a left join umts_control.cells_database b ON a.cellid = b.cellid AND a.rnc = b.rnc
				where (year,week) BETWEEN (".$year.",".$w4.") AND (".$year.",".$w1.")  AND (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				group by year, week, b.ibge, b.cidade
				order by cidade,week
			");

		return $query->result();
	
	}
	
	public function vw_cqi_hs($year,$w1,$w4){
				
		$query = $this->db->query(
			"
				select year, cidade, b.ibge, week,
				count(*) filter (where round(((acc_ps*drop_ps*availability)/(10000))::numeric,2) < 95)  AS criticos,
				count(*) filter (where round(((acc_ps*drop_ps*availability)/(10000))::numeric,2) >= 95
								AND round(((acc_ps*drop_ps*availability)/(10000))::numeric,2) < 97)  AS ruins,
				count(*) filter (where round(((acc_ps*drop_ps*availability)/(10000))::numeric,2) >= 97
								AND round(((acc_ps*drop_ps*availability)/(10000))::numeric,2) < 98.5)  AS bons,
				count(*) filter (where round(((acc_ps*drop_ps*availability)/(10000))::numeric,2) >= 98.5)  AS premiums
				from umts_kpi.vw_main_kpis_cell_rate_weekly a left join umts_control.cells_database b ON a.cellid = b.cellid AND a.rnc = b.rnc
				where (year,week) BETWEEN (".$year.",".$w4.") AND (".$year.",".$w1.") AND (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				group by year, week, b.ibge, b.cidade
				order by cidade,week

			");

		return $query->result();
	
	}	
	
	public function vw_cqi_lte($year,$w1,$w4){
		
		$query = $this->db->query(
			"
				SELECT year, ibge, week,
				count(*) filter (where round(((a.rrc_service * a.e_rab * a.service_drop * a.availability)/(1000000))::numeric,2) < 95)  AS criticos,

				count(*) filter (where round(((a.rrc_service * a.e_rab * a.service_drop * a.availability)/(1000000))::numeric,2) >= 95
				AND round(((a.rrc_service * a.e_rab * a.service_drop * a.availability)/(1000000))::numeric,2) < 97)  AS ruins,

				count(*) filter (where round(((a.rrc_service * a.e_rab * a.service_drop * a.availability)/(1000000))::numeric,2) >= 97
				AND round(((a.rrc_service * a.e_rab * a.service_drop * a.availability)/(1000000))::numeric,2) < 98.5)  AS bons,

				count(*) filter (where round(((a.rrc_service * a.e_rab * a.service_drop * a.availability)/(1000000))::numeric,2) >= 98.5)  AS premiums
													
				FROM lte_kpi.vw_main_kpis_cell_rate_weekly a  join lte_control.cells_history b ON a.node = b.cell and a.enodebid = b.enodebid
				WHERE (year,week) BETWEEN (".$year.",".$w4.") AND (".$year.",".$w1.") AND b.ibge in (3106200,5300108,4106902,4205407,2611606,2927408) AND cell_state = 'ACTIVE'
				AND b.date = (SELECT date( to_date('".$year."-".$w1."', 'iyyy-iw') + interval '5 day'))
				GROUP BY a.year, a.week, b.ibge
				ORDER BY CASE
				WHEN ibge = 3106200 THEN 1
				WHEN ibge = 5300108 THEN 2
				WHEN ibge = 4106902 THEN 3
				WHEN ibge = 4205407 THEN 4
				WHEN ibge = 2611606 THEN 5
				ELSE 6
				END, year,week
			");

		return $query->result();
	
	}
	
	public function vw_cell_maping_cs($year,$w1,$w4){
				
		$query = $this->db->query(
			"
				SELECT SUM(analysis_no) as analysis_no, SUM(cap_no) as cap_no, SUM(imp_no) as imp_no, SUM(normal_no) as normal_no, SUM(omr_no) as omr_no, SUM(otm_no) as otm_no, SUM(rf_no) as rf_no, SUM(tx_omr_no) as tx_omr_no 
				FROM
				(
				SELECT c.year, c.cidade, c.week, c.rnc, c.cellid, d.analysis_no, d.cap_no, d.imp_no, d.normal_no, d.omr_no, d.otm_no, d.rf_no, d.tx_omr_no FROM
				(
				SELECT year, b.nodeb, ibge, cidade, week, b.rnc, b.cellid
				FROM umts_kpi.vw_main_kpis_cell_rate_weekly a left join umts_control.cells_database b ON a.cellid = b.cellid AND a.rnc = b.rnc
				WHERE (year,week) = (".$year.",".$w1.") AND b.ibge in (3106200,5300108,4106902,4205407,2611606,2927408) AND round(((acc_cs*drop_cs*availability)/(10000))::numeric,2) < 95
				ORDER BY cidade,nodeb,cell
				) c
				LEFT JOIN 
				(
				SELECT year, week, region, rnc, node, cellid,
				analysis as analysis_no,
				cap as cap_no,
				imp as imp_no,
				normal as normal_no,
				omr as omr_no,
				otm as otm_no,
				rf as rf_no,
				tx_omr as tx_omr_no
				FROM
				(
				SELECT year, week, region, rnc, node, cellid, cidade, uf,
				count(*) FILTER (where area = 'ANALYSIS') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as analysis,
				count(*) FILTER (where area = 'CAP') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as cap,
				count(*) FILTER (where area = 'IMP') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as imp,
				count(*) FILTER (where area = 'NORMAL') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as normal,
				count(*) FILTER (where area = 'OMR') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as omr,
				count(*) FILTER (where area = 'OTM') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as otm,
				count(*) FILTER (where area = 'PLAN/ENG RF') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as rf,
				count(*) FILTER (where area = 'TX/OMR') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as tx_omr,
				count(*) OVER (PARTITION BY year,week,region,rnc,nodebname,node) as total
				FROM umts_kpi.triage
				)f
				WHERE (year,week) = (".$year.",".$w1.") and (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				GROUP BY year,week,region,cidade,uf,rnc,node,cellid,analysis,cap,imp,normal,omr,otm,rf,tx_omr
				ORDER BY year desc, week desc, node
				) d ON c.cellid = d.cellid AND c.rnc = d.rnc AND c.week = d.week
				) g
			");

		return $query->result();
	
	}

	public function vw_cell_maping_hs($year,$w1,$w4){
				
		$query = $this->db->query(
			"
				SELECT SUM(analysis_no) as analysis_no, SUM(cap_no) as cap_no, SUM(imp_no) as imp_no, SUM(normal_no) as normal_no, SUM(omr_no) as omr_no, SUM(otm_no) as otm_no, SUM(rf_no) as rf_no, SUM(tx_omr_no) as tx_omr_no 
				FROM
				(
				SELECT c.year, c.cidade, c.week, c.rnc, c.cellid, d.analysis_no, d.cap_no, d.imp_no, d.normal_no, d.omr_no, d.otm_no, d.rf_no, d.tx_omr_no FROM
				(
				SELECT year, b.nodeb, ibge, cidade, week, b.rnc, b.cellid
				FROM umts_kpi.vw_main_kpis_cell_rate_weekly a left join umts_control.cells_database b ON a.cellid = b.cellid AND a.rnc = b.rnc
				WHERE (year,week) = (".$year.",".$w1.") AND b.ibge in (3106200,5300108,4106902,4205407,2611606,2927408) AND round(((acc_ps*drop_ps*availability)/(10000))::numeric,2) < 95
				ORDER BY cidade,nodeb,cell
				) c
				LEFT JOIN 
				(
				SELECT year, week, region, rnc, node, cellid,
				analysis as analysis_no,
				cap as cap_no,
				imp as imp_no,
				normal as normal_no,
				omr as omr_no,
				otm as otm_no,
				rf as rf_no,
				tx_omr as tx_omr_no
				FROM
				(
				SELECT year, week, region, rnc, node, cellid, cidade, uf,
				count(*) FILTER (where area = 'ANALYSIS') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as analysis,
				count(*) FILTER (where area = 'CAP') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as cap,
				count(*) FILTER (where area = 'IMP') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as imp,
				count(*) FILTER (where area = 'NORMAL') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as normal,
				count(*) FILTER (where area = 'OMR') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as omr,
				count(*) FILTER (where area = 'OTM') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as otm,
				count(*) FILTER (where area = 'PLAN/ENG RF') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as rf,
				count(*) FILTER (where area = 'TX/OMR') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as tx_omr,
				count(*) OVER (PARTITION BY year,week,region,rnc,nodebname,node) as total
				FROM umts_kpi.triage
				)f
				WHERE (year,week) = (".$year.",".$w1.") and (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				GROUP BY year,week,region,cidade,uf,rnc,node,cellid,analysis,cap,imp,normal,omr,otm,rf,tx_omr
				ORDER BY year desc, week desc, node
				) d ON c.cellid = d.cellid AND c.rnc = d.rnc AND c.week = d.week
				) g
			");

		return $query->result();
	
	}
	
	public function vw_cell_maping_lte($year,$w1,$w4){
				
		$query = $this->db->query(
			"
				SELECT SUM(analysis_no) as analysis_no, SUM(imp_no) as imp_no, SUM(normal_no) as normal_no, SUM(omr_no) as omr_no, SUM(otm_no) as otm_no, SUM(tx_omr_no) as tx_omr_no  FROM(				
					SELECT c.year, c.ibge, c.week, c.site, c.cell, d.analysis_no, d.imp_no, d.normal_no, d.omr_no, d.otm_no, d.tx_omr_no FROM
					(				
						SELECT year, b.site, ibge, week, b.enodebid,b.cell				
						FROM lte_kpi.vw_main_kpis_cell_rate_weekly a  join lte_control.cells_history b ON a.node = b.cell and a.enodebid = b.enodebid
						WHERE (year,week) = (".$year.",".$w1.") AND b.ibge in (3106200,5300108,4106902,4205407,2611606,2927408) AND cell_state = 'ACTIVE'
						AND b.date = (SELECT date( to_date('".$year."-".$w1."', 'iyyy-iw') + interval '5 day'))
						and round(((a.rrc_service * a.e_rab * a.service_drop * a.availability)/(1000000))::numeric,2) < 95		
						ORDER BY ibge, cell
					) c
					
					left JOIN 
					
					(
						SELECT year, week, region, enodeb, cell,
						analysis as analysis_no,
						imp as imp_no,
						normal as normal_no,
						omr as omr_no,
						otm as otm_no,
						tx_omr as tx_omr_no
						FROM
						(
							SELECT year, week, region, enodeb, cell, cidade, uf,
							count(*) FILTER (where area = 'ANALYSIS') OVER (PARTITION BY year,week,cell) as analysis,
							count(*) FILTER (where area = 'IMP') OVER (PARTITION BY year,week,cell) as imp,
							count(*) FILTER (where area = 'NORMAL') OVER (PARTITION BY year,week,cell) as normal,
							count(*) FILTER (where area = 'OMR') OVER (PARTITION BY year,week,cell) as omr,
							count(*) FILTER (where area = 'OTM') OVER (PARTITION BY year,week,cell) as otm,
							count(*) FILTER (where area = 'TX/OMR') OVER (PARTITION BY year,week,cell) as tx_omr,
							count(*) OVER (PARTITION BY year,week,cell) as total
							FROM lte_kpi.cell_mapping_lte
							WHERE (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
						)f
						WHERE (year,week) = (".$year.",".$w1.") and (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
						GROUP BY year,week,region,cidade,uf,enodeb,cell,analysis,imp,normal,omr,otm,tx_omr
						ORDER BY cidade,week
					) d 
					
					ON c.cell = d.cell AND c.week = d.week AND c.year = d.year
				)g

			");

		return $query->result();
	
	}	

	public function cidades_cs($year,$w1,$w4){
				
		$query = $this->db->query(
			"
				SELECT cidade, SUM(analysis_no) as analysis_no, SUM(cap_no) as cap_no, SUM(imp_no) as imp_no, SUM(normal_no) as normal_no, SUM(omr_no) as omr_no, SUM(otm_no) as otm_no, SUM(rf_no) as rf_no, SUM(tx_omr_no) as tx_omr_no 
				FROM
				(				
				SELECT cidade, SUM(analysis_no) as analysis_no, SUM(cap_no) as cap_no, SUM(imp_no) as imp_no, SUM(normal_no) as normal_no, SUM(omr_no) as omr_no, SUM(otm_no) as otm_no, SUM(rf_no) as rf_no, SUM(tx_omr_no) as tx_omr_no 
				FROM
				(
				SELECT c.year, c.cidade, c.week, c.rnc, c.cellid, d.analysis_no, d.cap_no, d.imp_no, d.normal_no, d.omr_no, d.otm_no, d.rf_no, d.tx_omr_no FROM
				(
				SELECT year, b.nodeb, ibge, cidade, week, b.rnc, b.cellid
				FROM umts_kpi.vw_main_kpis_cell_rate_weekly a left join umts_control.cells_database b ON a.cellid = b.cellid AND a.rnc = b.rnc
				WHERE (year,week) = (".$year.",".$w1.") AND b.ibge in (3106200,5300108,4106902,4205407,2611606,2927408) AND round(((acc_cs*drop_cs*availability)/(10000))::numeric,2) < 95
				ORDER BY cidade,nodeb,cell
				) c
				LEFT JOIN 
				(
				SELECT year, week, region, rnc, node, cellid,
				analysis as analysis_no,
				cap as cap_no,
				imp as imp_no,
				normal as normal_no,
				omr as omr_no,
				otm as otm_no,
				rf as rf_no,
				tx_omr as tx_omr_no
				FROM
				(
				SELECT year, week, region, rnc, node, cellid, cidade, uf,
				count(*) FILTER (where area = 'ANALYSIS') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as analysis,
				count(*) FILTER (where area = 'CAP') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as cap,
				count(*) FILTER (where area = 'IMP') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as imp,
				count(*) FILTER (where area = 'NORMAL') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as normal,
				count(*) FILTER (where area = 'OMR') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as omr,
				count(*) FILTER (where area = 'OTM') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as otm,
				count(*) FILTER (where area = 'PLAN/ENG RF') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as rf,
				count(*) FILTER (where area = 'TX/OMR') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as tx_omr,
				count(*) OVER (PARTITION BY year,week,region,rnc,nodebname,node) as total
				FROM umts_kpi.triage
				)f
				WHERE (year,week) = (".$year.",".$w1.") and (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				GROUP BY year,week,region,cidade,uf,rnc,node,cellid,analysis,cap,imp,normal,omr,otm,rf,tx_omr
				ORDER BY year desc, week desc, node
				) d ON c.cellid = d.cellid AND c.rnc = d.rnc AND c.week = d.week AND c.year = d.year
				) g
				GROUP BY CIDADE
				UNION
				SELECT * FROM public.umts_cqi_aux) s
				GROUP BY cidade
				ORDER BY cidade
			");

		return $query->result();
	
	}

	public function cidades_hs($year,$w1,$w4){
				
		$query = $this->db->query(
			"
				SELECT cidade, SUM(analysis_no) as analysis_no, SUM(cap_no) as cap_no, SUM(imp_no) as imp_no, SUM(normal_no) as normal_no, SUM(omr_no) as omr_no, SUM(otm_no) as otm_no, SUM(rf_no) as rf_no, SUM(tx_omr_no) as tx_omr_no 
				FROM
				(				
				SELECT cidade, SUM(analysis_no) as analysis_no, SUM(cap_no) as cap_no, SUM(imp_no) as imp_no, SUM(normal_no) as normal_no, SUM(omr_no) as omr_no, SUM(otm_no) as otm_no, SUM(rf_no) as rf_no, SUM(tx_omr_no) as tx_omr_no 
				FROM
				(
				SELECT c.year, c.cidade, c.week, c.rnc, c.cellid, d.analysis_no, d.cap_no, d.imp_no, d.normal_no, d.omr_no, d.otm_no, d.rf_no, d.tx_omr_no FROM
				(
				SELECT year, b.nodeb, ibge, cidade, week, b.rnc, b.cellid
				FROM umts_kpi.vw_main_kpis_cell_rate_weekly a left join umts_control.cells_database b ON a.cellid = b.cellid AND a.rnc = b.rnc
				WHERE (year,week) = (".$year.",".$w1.") AND b.ibge in (3106200,5300108,4106902,4205407,2611606,2927408) AND round(((acc_ps*drop_ps*availability)/(10000))::numeric,2) < 95
				ORDER BY cidade,nodeb,cell
				) c
				LEFT JOIN 
				(
				SELECT year, week, region, rnc, node, cellid,
				analysis as analysis_no,
				cap as cap_no,
				imp as imp_no,
				normal as normal_no,
				omr as omr_no,
				otm as otm_no,
				rf as rf_no,
				tx_omr as tx_omr_no
				FROM
				(
				SELECT year, week, region, rnc, node, cellid, cidade, uf,
				count(*) FILTER (where area = 'ANALYSIS') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as analysis,
				count(*) FILTER (where area = 'CAP') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as cap,
				count(*) FILTER (where area = 'IMP') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as imp,
				count(*) FILTER (where area = 'NORMAL') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as normal,
				count(*) FILTER (where area = 'OMR') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as omr,
				count(*) FILTER (where area = 'OTM') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as otm,
				count(*) FILTER (where area = 'PLAN/ENG RF') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as rf,
				count(*) FILTER (where area = 'TX/OMR') OVER (PARTITION BY year,week,region,rnc,nodebname,node) as tx_omr,
				count(*) OVER (PARTITION BY year,week,region,rnc,nodebname,node) as total
				FROM umts_kpi.triage
				)f
				WHERE (year,week) = (".$year.",".$w1.") and (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
				GROUP BY year,week,region,cidade,uf,rnc,node,cellid,analysis,cap,imp,normal,omr,otm,rf,tx_omr
				ORDER BY year desc, week desc, node
				) d ON c.cellid = d.cellid AND c.rnc = d.rnc AND c.week = d.week AND c.year = d.year
				) g
				GROUP BY CIDADE
				UNION
				SELECT * FROM public.umts_cqi_aux) s
				GROUP BY cidade
				ORDER BY cidade
			");

		return $query->result();
	
	}

	public function cidades_lte($year,$w1,$w4){
				
		$query = $this->db->query(
			"
				SELECT ibge,SUM(analysis_no) as analysis_no, SUM(imp_no) as imp_no, SUM(normal_no) as normal_no, SUM(omr_no) as omr_no, SUM(otm_no) as otm_no, SUM(tx_omr_no) as tx_omr_no  FROM(
				SELECT ibge,SUM(analysis_no) as analysis_no, SUM(imp_no) as imp_no, SUM(normal_no) as normal_no, SUM(omr_no) as omr_no, SUM(otm_no) as otm_no, SUM(tx_omr_no) as tx_omr_no  FROM(				
					SELECT c.year, c.ibge, c.week, c.site, c.cell, d.analysis_no, d.imp_no, d.normal_no, d.omr_no, d.otm_no, d.tx_omr_no FROM
					(				
						SELECT year, b.site, ibge, week, b.enodebid,b.cell				
						FROM lte_kpi.vw_main_kpis_cell_rate_weekly a  join lte_control.cells_history b ON a.node = b.cell and a.enodebid = b.enodebid
						WHERE (year,week) = (".$year.",".$w1.") AND b.ibge in (3106200,5300108,4106902,4205407,2611606,2927408) AND cell_state = 'ACTIVE'
						AND b.date = (SELECT date( to_date('".$year."-".$w1."', 'iyyy-iw') + interval '5 day'))
						and round(((a.rrc_service * a.e_rab * a.service_drop * a.availability)/(1000000))::numeric,2) < 95		
						ORDER BY ibge, cell
					) c
					
					left JOIN 
					
					(
						SELECT year, week, region, enodeb, cell,
						analysis as analysis_no,
						imp as imp_no,
						normal as normal_no,
						omr as omr_no,
						otm as otm_no,
						tx_omr as tx_omr_no
						FROM
						(
							SELECT year, week, region, enodeb, cell, cidade, uf,
							count(*) FILTER (where area = 'ANALYSIS') OVER (PARTITION BY year,week,cell) as analysis,
							count(*) FILTER (where area = 'IMP') OVER (PARTITION BY year,week,cell) as imp,
							count(*) FILTER (where area = 'NORMAL') OVER (PARTITION BY year,week,cell) as normal,
							count(*) FILTER (where area = 'OMR') OVER (PARTITION BY year,week,cell) as omr,
							count(*) FILTER (where area = 'OTM') OVER (PARTITION BY year,week,cell) as otm,
							count(*) FILTER (where area = 'TX/OMR') OVER (PARTITION BY year,week,cell) as tx_omr,
							count(*) OVER (PARTITION BY year,week,cell) as total
							FROM lte_kpi.cell_mapping_lte
							WHERE (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
						)f
						WHERE (year,week) = (".$year.",".$w1.") and (cidade,uf) in (('BELO HORIZONTE','MG'),('BRASÍLIA','DF'),('CURITIBA','PR'),('FLORIANÓPOLIS','SC'),('RECIFE','PE'),('SALVADOR','BA'))
						GROUP BY year,week,region,cidade,uf,enodeb,cell,analysis,imp,normal,omr,otm,tx_omr
						ORDER BY cidade,week
					) d 
					
					ON c.cell = d.cell AND c.week = d.week AND c.year = d.year
				)g
				GROUP BY ibge				
				UNION
				SELECT * FROM public.lte_cqi_aux) s
				GROUP BY ibge
				ORDER BY CASE
				WHEN ibge = 3106200 THEN 1
				WHEN ibge = 5300108 THEN 2
				WHEN ibge = 4106902 THEN 3
				WHEN ibge = 4205407 THEN 4
				WHEN ibge = 2611606 THEN 5
				ELSE 6
				END
			");

		return $query->result();
	
	}	


	public function nqi_impact_table($year,$w1,$w4){
				
		$query = $this->db->query(
			"
				SELECT *
				FROM open_traffic.vw_nqi_impact_region_weekly_v2
				WHERE (year,week) between (".$year.",".$w4.") AND (".$year.",".$w1.")
				ORDER BY regional,year,week
			");

		return $query->result();
	
	}

	public function total_degradations($year,$w1,$w4){
				
		$query = $this->db->query(
			"
				SELECT year,week,total_sites,efc FROM open_traffic.vw_nqi_impact_network_weekly WHERE (year,week) > (2017,36) ORDER BY year,week
			");

		return $query->result();
	
	}	
				
}
?>	