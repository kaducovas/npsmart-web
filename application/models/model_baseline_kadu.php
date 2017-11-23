<?php 

class Model_baseline extends CI_Model{

	function maxdate(){
	
		 $query = $this->db->query(
		 "SELECT max(baseline_date) as date from umts_baseline.consistency_check_nok_hist;
;");
 return $query->result();
	}

	function mos(){
	
		 $query = $this->db->query(
		 "select string_agg(mo, ','::text order by nok desc,mo) as mo
from
(SELECT mo, count(*) as nok from umts_baseline.consistency_check_nok_hist WHERE (baseline_date IN ( SELECT max(baseline_date) AS max FROM umts_baseline.consistency_check_nok_hist)) group by mo) g
;");
 return $query->result();
	}
	
	 function baseline_by_rnc($reportdate){
		
		 $query = $this->db->query(

		 "select * from umts_baseline.vw_current_consistency_check_rnc where node not in ('RNCPE01') order by node
		 --select * from consistency_check_rnc4 order by node
		 ;");

	 return $query->result();
	 }

	 function baseline_by_mo($reportdate){
	
		 $query = $this->db->query(
		 "select *,'rnc'::text as type from umts_baseline.vw_currenct_consistency_check_rnc_by_mo_2 --order by node
		 --select * from temp_consistency_bymo3 where week = 18 order by mo
		 --select * from umts_baseline.vw_consistency_check_rnc_by_mo order by mo;
;");

	 return $query->result();
	 }

	 function ne_discrepancies($reportmoname){
		 $cond = '';
		 if($reportmoname){
			$cond = " where r.mo = '".$reportmoname."' "; 
		 }
		 $query = $this->db->query(
		 "select baseline_date,'NETWORK'::text as node,sum(case label when 'NOK' then 1 else 0 end) discrepancies 
from
(select r.baseline_date,r.mo,r.parameter,
case
when status = 'NOK' then 'NOK'
else 'OK'
END AS label
 from 
(select distinct baseline_date,mo,parameter from umts_baseline.rules cross join (select distinct baseline_date from umts_baseline.consistency_check_nok_hist) test
where act = true) r 
left join 
(select * from umts_baseline.consistency_check_nok_hist) c
on r.mo = c.mo and r.parameter = c.parameter and r.baseline_date = c.baseline_date
".$cond.") t
group by baseline_date,'NETWORK'::text order by baseline_date
;");

	 return $query->result();
	 }	 
	 
	 function rnc_ne_discrepancies($reportmoname,$node){	
	 	$cond = '';
		 if($reportmoname){
			$cond = " and r.mo = '".$reportmoname."' "; 
		 }
		 $query = $this->db->query(
		 "select baseline_date,node,sum(case label when 'NOK' then 1 else 0 end) discrepancies from
(select r.baseline_date,r.mo,r.parameter,r.node,
case when status = 'NOK' then 'NOK' else 'OK' END AS label from 
(select distinct baseline_date,node,mo,parameter from umts_baseline.rules  
cross join (select distinct baseline_date from umts_baseline.consistency_check_nok_hist) test
cross join (select rnc node from umts_control.cells_database) test2
where act = true) r 
left join 
(select * from umts_baseline.consistency_check_nok_hist) c
on r.mo = c.mo and r.parameter = c.parameter and r.baseline_date = c.baseline_date and r.node = c.node
where r.node = '".$node."'
".$cond.") t
group by baseline_date,node order by baseline_date
;");

	 return $query->result();
	 }		 

	 
	 function rnc_baseline_by_mo($reportdate){
	
		 $query = $this->db->query(
		 "select *,'rnc'::text as type from umts_baseline.vw_currenct_consistency_check_rnc_by_mo_2 --order by node
		 --select * from temp_consistency_bymo3 where week = 18 order by mo
		 --select * from umts_baseline.vw_consistency_check_rnc_by_mo order by mo;
;");

	 return $query->result();
	 }	 
	 
	 function parameters_mo($reportmoname){
		
		 $query = $this->db->query(
		 "select mo,parameter,sum(case label when 'NOK' then 1 else 0 end) discrepancies from 
(select r.mo,r.parameter,
case
when status = 'NOK' then 'NOK'
else 'OK'
END AS label
 from 
(select distinct mo,parameter from umts_baseline.rules where act = true) r 
left join 
(select * from umts_baseline.consistency_check_nok_hist where baseline_date in (select max(baseline_date) from umts_baseline.consistency_check_nok_hist)) c
on r.mo = c.mo and r.parameter = c.parameter
where r.mo = '".$reportmoname."') t
group by mo,parameter 
;");

	 return $query->result();
	 }	

	 function rnc_parameters_mo($reportmoname,$node){
		
		 $query = $this->db->query(
		 "select mo,parameter,sum(case label when 'NOK' then 1 else 0 end) discrepancies from 
(select r.mo,r.parameter,
case
when status = 'NOK' then 'NOK'
else 'OK'
END AS label
 from 
(select distinct mo,parameter from umts_baseline.rules where act = true) r 
left join 
(select * from umts_baseline.consistency_check_nok_hist where baseline_date in (select max(baseline_date) from umts_baseline.consistency_check_nok_hist)
and node = '".$node."'
) c
on r.mo = c.mo and r.parameter = c.parameter
where r.mo = '".$reportmoname."') t
group by mo,parameter 
;");

	 return $query->result();
	 }	 

####################REGION#############################
#######	 
	 function region_baseline_by_mo($reportdate){
	
		 $query = $this->db->query(
		 "SELECT t.baseline_date,'region'::text as type,
    t.node,
    sum(t.discrepancies) AS total_discrepancies,
    round(avg(t.discrepancies), 2) AS avg_discrepancies,
    string_agg(t.mo, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo,
    string_agg(t.discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS discrepancies
  
   FROM ( SELECT DISTINCT
            baseline_class_hist.baseline_date,
             CASE
            WHEN substring(baseline_class_hist.NODE, 4, 2) = ANY (ARRAY['AC'::text, 'DF'::text, 'MS'::text, 'MT'::text, 'RO'::text, 'GO'::text, 'TO'::text]) THEN 'CO'::text
            WHEN substring(baseline_class_hist.NODE, 4, 2) = ANY (ARRAY['AL'::text, 'CE'::text, 'PB'::text, 'PE'::text, 'PI'::text, 'RN'::text]) THEN 'NE'::text
            WHEN substring(baseline_class_hist.NODE, 4, 2) = 'BA'::text THEN 'BASE'::text
            WHEN substring(baseline_class_hist.NODE, 4, 2) = 'MG'::text THEN 'MG'::text
            WHEN substring(baseline_class_hist.NODE, 4, 2) = ANY (ARRAY['PR'::text, 'SC'::text]) THEN 'PRSC'::text
            WHEN substring(baseline_class_hist.NODE, 4, 2) = 'ES'::text THEN 'ES'::text
            ELSE 'UNKNOWN'::text
        END AS node,          
            baseline_class_hist.mo,
            sum(baseline_class_hist.discrepancies) OVER (PARTITION BY baseline_class_hist.baseline_date, baseline_class_hist.mo,CASE
            WHEN substring(baseline_class_hist.NODE, 4, 2) = ANY (ARRAY['AC'::text, 'DF'::text, 'MS'::text, 'MT'::text, 'RO'::text, 'GO'::text, 'TO'::text]) THEN 'CO'::text
            WHEN substring(baseline_class_hist.NODE, 4, 2) = ANY (ARRAY['AL'::text, 'CE'::text, 'PB'::text, 'PE'::text, 'PI'::text, 'RN'::text]) THEN 'NE'::text
            WHEN substring(baseline_class_hist.NODE, 4, 2) = 'BA'::text THEN 'BASE'::text
            WHEN substring(baseline_class_hist.NODE, 4, 2) = 'MG'::text THEN 'MG'::text
            WHEN substring(baseline_class_hist.NODE, 4, 2) = ANY (ARRAY['PR'::text, 'SC'::text]) THEN 'PRSC'::text
            WHEN substring(baseline_class_hist.NODE, 4, 2) = 'ES'::text THEN 'ES'::text
            ELSE 'UNKNOWN'::text
        END) AS discrepancies,
            sum(baseline_class_hist.discrepancies) OVER (PARTITION BY baseline_class_hist.baseline_date, baseline_class_hist.mo) AS mo_total_discrepancies
           FROM umts_baseline.baseline_class_hist
          WHERE (baseline_class_hist.baseline_date IN ( SELECT max(consistency_check_1.baseline_date) AS max
                   FROM umts_baseline.baseline_class_hist consistency_check_1))
                   ) t
  GROUP BY t.node, t.baseline_date
  ORDER BY (sum(t.discrepancies)) DESC


;");
	 return $query->result();
	 }	
#######
	 function region_parameters_mo($reportmoname,$node){
		
		 $query = $this->db->query(
		 "SELECT distinct
            mo,parameter,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,parameter) AS discrepancies
            from (select REGION node,rnc,cellid,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct REGION,rnc,cellid,mo,parameter from (select * from umts_control.cells_database where REGION = '".$node."') test1 cross join (select distinct mo,parameter from umts_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from umts_baseline.consistency_check_nok_hist
          WHERE (baseline_date IN ( SELECT max(baseline_date) AS max FROM umts_baseline.consistency_check_nok_hist consistency_check_1))) cck 
		  on cdb.rnc = cck.node and cdb.cellid::text = cck.element_id and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
where mo = '".$reportmoname."'
;");

	 return $query->result();
	 }
#######	 
	 function region_ne_discrepancies($reportmoname,$node){	
	 	$cond = '';
		 if($reportmoname){
			$cond = " and r.mo = '".$reportmoname."' "; 
		 }
		 $query = $this->db->query(
		 "select baseline_date,node,sum(case label when 'NOK' then 1 else 0 end) discrepancies from
(select r.baseline_date,r.mo,r.parameter,r.node,
case when status = 'NOK' then 'NOK' else 'OK' END AS label from 
(select distinct baseline_date,node,mo,parameter from umts_baseline.rules  
cross join (select distinct baseline_date from umts_baseline.consistency_check_nok_hist) test
cross join (select REGION node from umts_control.cells_database where REGION = '".$node."') test2
where act = true) r 
left join 
(select baseline_date,REGION node,rnc,mo,parameter,status from umts_baseline.consistency_check_nok_hist CCK INNER JOIN umts_control.cells_database CB on cck.node = cb.rnc and cck.element_id = cb.cellid::text) c
on r.mo = c.mo and r.parameter = c.parameter and r.baseline_date = c.baseline_date and r.node = c.node
where r.node = '".$node."'
".$cond.") t
group by baseline_date,node order by baseline_date
;");

	 return $query->result();
	 }
######################################################
	 
####################NODEB#############################
#######	 
	 function nodeb_baseline_by_mo($node){
	
		 $query = $this->db->query(
		 " SELECT  
    t.node, type,
    sum(t.discrepancies) AS total_discrepancies,
    round(avg(t.discrepancies), 2) AS avg_discrepancies,
    string_agg(t.mo, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo,
    string_agg(t.discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS discrepancies
   FROM (
   SELECT distinct 'nodeb'::text as type,
            node,mo,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,node) AS discrepancies,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo) AS mo_total_discrepancies
           from (select nodebname_norm node,rnc,cellid,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct nodebname_norm,rnc,cellid,mo,parameter from (select * from umts_control.cells_database where nodebname_norm = '".$node."') test1 cross join (select distinct mo,parameter from umts_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from umts_baseline.consistency_check_nok_hist
          WHERE (baseline_date IN ( SELECT max(baseline_date) AS max FROM umts_baseline.consistency_check_nok_hist consistency_check_1))) cck 
		  on cdb.rnc = cck.node and cdb.cellid::text = cck.element_id and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
union
SELECT distinct 'cell'::text as type,
            node,mo,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,node) AS discrepancies,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo) AS mo_total_discrepancies
           from (select cell node,rnc,cellid,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct cell,rnc,cellid,mo,parameter from (select * from umts_control.cells_database where nodebname_norm = '".$node."' ) test1 cross join (select distinct mo,parameter from umts_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from umts_baseline.consistency_check_nok_hist
          WHERE (baseline_date IN ( SELECT max(baseline_date) AS max FROM umts_baseline.consistency_check_nok_hist consistency_check_1))) cck 
		  on cdb.rnc = cck.node and cdb.cellid::text = cck.element_id and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
		  ) t
  GROUP BY t.node,type
  ORDER BY (sum(t.discrepancies)) DESC;
;");
	 return $query->result();
	 }	
#######
	 function nodeb_parameters_mo($reportmoname,$node){
		
		 $query = $this->db->query(
		 "SELECT distinct
            mo,parameter,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,parameter) AS discrepancies
            from (select nodebname_norm node,rnc,cellid,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct nodebname_norm,rnc,cellid,mo,parameter from (select * from umts_control.cells_database where nodebname_norm = '".$node."') test1 cross join (select distinct mo,parameter from umts_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from umts_baseline.consistency_check_nok_hist
          WHERE (baseline_date IN ( SELECT max(baseline_date) AS max FROM umts_baseline.consistency_check_nok_hist consistency_check_1))) cck 
		  on cdb.rnc = cck.node and cdb.cellid::text = cck.element_id and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
where mo = '".$reportmoname."'
;");

	 return $query->result();
	 }
#######	 
	 function nodeb_ne_discrepancies($reportmoname,$node){	
	 	$cond = '';
		 if($reportmoname){
			$cond = " and r.mo = '".$reportmoname."' "; 
		 }
		 $query = $this->db->query(
		 "select baseline_date,node,sum(case label when 'NOK' then 1 else 0 end) discrepancies from
(select r.baseline_date,r.mo,r.parameter,r.node,
case when status = 'NOK' then 'NOK' else 'OK' END AS label from 
(select distinct baseline_date,node,mo,parameter from umts_baseline.rules  
cross join (select distinct baseline_date from umts_baseline.consistency_check_nok_hist) test
cross join (select nodebname_norm node from umts_control.cells_database where nodebname_norm = '".$node."') test2
where act = true) r 
left join 
(select baseline_date,nodebname_norm node,rnc,mo,parameter,status from umts_baseline.consistency_check_nok_hist CCK INNER JOIN umts_control.cells_database CB on cck.node = cb.rnc and cck.element_id = cb.cellid::text) c
on r.mo = c.mo and r.parameter = c.parameter and r.baseline_date = c.baseline_date and r.node = c.node
where r.node = '".$node."'
".$cond.") t
group by baseline_date,node order by baseline_date
;");

	 return $query->result();
	 }
######################################################
	 
####################CELL#############################
#######	 
	 function cell_baseline_by_mo($node){
	
		 $query = $this->db->query(
		 " SELECT type, 
    t.node,
    sum(t.discrepancies) AS total_discrepancies,
    round(avg(t.discrepancies), 2) AS avg_discrepancies,
    string_agg(t.mo, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo,
    string_agg(t.discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS discrepancies
   FROM (
   SELECT distinct 'nodeb'::text as type,
            node,mo,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,node) AS discrepancies,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo) AS mo_total_discrepancies
           from (select nodebname_norm node,rnc,cellid,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct nodebname_norm,rnc,cellid,mo,parameter from (select * from umts_control.cells_database where get_nodeb_name('".$node."','cell') = nodebname_norm) test1 cross join (select distinct mo,parameter from umts_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from umts_baseline.consistency_check_nok_hist
          WHERE (baseline_date IN ( SELECT max(baseline_date) AS max FROM umts_baseline.consistency_check_nok_hist consistency_check_1))) cck 
		  on cdb.rnc = cck.node and cdb.cellid::text = cck.element_id and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
union
SELECT distinct 'cell'::text as type,
            node,mo,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,node) AS discrepancies,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo) AS mo_total_discrepancies
           from (select cell node,rnc,cellid,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct cell,rnc,cellid,mo,parameter from (select * from umts_control.cells_database where get_nodeb_name('".$node."','cell') = nodebname_norm ) test1 cross join (select distinct mo,parameter from umts_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from umts_baseline.consistency_check_nok_hist
          WHERE (baseline_date IN ( SELECT max(baseline_date) AS max FROM umts_baseline.consistency_check_nok_hist consistency_check_1))) cck 
		  on cdb.rnc = cck.node and cdb.cellid::text = cck.element_id and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
		  ) t
  GROUP BY t.node,type
  ORDER BY (sum(t.discrepancies)) DESC;
;");
	 return $query->result();
	 }	
#######
	 function cell_parameters_mo($reportmoname,$node){
		
		 $query = $this->db->query(
		 "SELECT distinct
            mo,parameter,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,parameter) AS discrepancies
            from (select cell node,rnc,cellid,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct cell,rnc,cellid,mo,parameter from (select * from umts_control.cells_database where cell = '".$node."') test1 cross join (select distinct mo,parameter from umts_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from umts_baseline.consistency_check_nok_hist
          WHERE (baseline_date IN ( SELECT max(baseline_date) AS max FROM umts_baseline.consistency_check_nok_hist consistency_check_1))) cck 
		  on cdb.rnc = cck.node and cdb.cellid::text = cck.element_id and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
where mo = '".$reportmoname."'
;");

	 return $query->result();
	 }
#######	 
	 function cell_ne_discrepancies($reportmoname,$node){	
	 	$cond = '';
		 if($reportmoname){
			$cond = " and r.mo = '".$reportmoname."' "; 
		 }
		 $query = $this->db->query(
		 "select baseline_date,node,sum(case label when 'NOK' then 1 else 0 end) discrepancies from
(select r.baseline_date,r.mo,r.parameter,r.node,
case when status = 'NOK' then 'NOK' else 'OK' END AS label from 
(select distinct baseline_date,node,mo,parameter from umts_baseline.rules  
cross join (select distinct baseline_date from umts_baseline.consistency_check_nok_hist) test
cross join (select cell node from umts_control.cells_database where cell = '".$node."') test2
where act = true) r 
left join 
(select baseline_date,cell node,rnc,mo,parameter,status from umts_baseline.consistency_check_nok_hist CCK INNER JOIN umts_control.cells_database CB on cck.node = cb.rnc and cck.element_id = cb.cellid::text) c
on r.mo = c.mo and r.parameter = c.parameter and r.baseline_date = c.baseline_date and r.node = c.node
where r.node = '".$node."'
".$cond.") t
group by baseline_date,node order by baseline_date
;");

	 return $query->result();
	 }
######################################################

####################CIDADE#############################
#######	 
	 function cidade_baseline_by_mo($node){
		$this->load->model('model_cellsinfo');
		$cidade_info = $this->model_cellsinfo->find_cidade_info($node);
		$ibge = $cidade_info[0]->ibge;
		$uf = $cidade_info[0]->uf;		
		 $query = $this->db->query(
		 " SELECT 'cidade'::text as type, 
    concat(t.node,' - ','".$uf."') as node,
    sum(t.discrepancies) AS total_discrepancies,
    round(avg(t.discrepancies), 2) AS avg_discrepancies,
    string_agg(t.mo, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo,
    string_agg(t.discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS discrepancies
   FROM (
   SELECT distinct
            node,mo,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,node) AS discrepancies,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo) AS mo_total_discrepancies
           from (select cidade node,rnc,cellid,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct cidade,rnc,cellid,mo,parameter from (select * from umts_control.cells_database where ibge = '".$ibge."') test1 cross join (select distinct mo,parameter from umts_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from umts_baseline.consistency_check_nok_hist
          WHERE (baseline_date IN ( SELECT max(baseline_date) AS max FROM umts_baseline.consistency_check_nok_hist consistency_check_1))) cck 
		  on cdb.rnc = cck.node and cdb.cellid::text = cck.element_id and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
		  ) t
  GROUP BY concat(t.node,' - ','".$uf."')
  ORDER BY (sum(t.discrepancies)) DESC;
;");
	 return $query->result();
	 }	
#######
	 function cidade_parameters_mo($reportmoname,$node){
		$this->load->model('model_cellsinfo');
		$cidade_info = $this->model_cellsinfo->find_cidade_info($node);
		$ibge = $cidade_info[0]->ibge;	
		 $query = $this->db->query(
		 "SELECT distinct
            mo,parameter,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,parameter) AS discrepancies
            from (select cidade node,rnc,cellid,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct cidade,rnc,cellid,mo,parameter from (select * from umts_control.cells_database where ibge = '".$ibge."') test1 cross join (select distinct mo,parameter from umts_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from umts_baseline.consistency_check_nok_hist
          WHERE (baseline_date IN ( SELECT max(baseline_date) AS max FROM umts_baseline.consistency_check_nok_hist consistency_check_1))) cck 
		  on cdb.rnc = cck.node and cdb.cellid::text = cck.element_id and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
where mo = '".$reportmoname."'
;");

	 return $query->result();
	 }
#######	 
	 function cidade_ne_discrepancies($reportmoname,$node){
		$this->load->model('model_cellsinfo');
		$cidade_info = $this->model_cellsinfo->find_cidade_info($node);
		$ibge = $cidade_info[0]->ibge;		 
	 	$cond = '';
		 if($reportmoname){
			$cond = " and r.mo = '".$reportmoname."' "; 
		 }
		 $query = $this->db->query(
		 "select baseline_date,node,sum(case label when 'NOK' then 1 else 0 end) discrepancies from
(select r.baseline_date,r.mo,r.parameter,r.node,
case when status = 'NOK' then 'NOK' else 'OK' END AS label from 
(select distinct baseline_date,node,mo,parameter from umts_baseline.rules  
cross join (select distinct baseline_date from umts_baseline.consistency_check_nok_hist) test
cross join (select cidade node from umts_control.cells_database where ibge = '".$ibge."') test2
where act = true) r 
left join 
(select baseline_date,cidade node,rnc,mo,parameter,status from umts_baseline.consistency_check_nok_hist CCK INNER JOIN umts_control.cells_database CB on cck.node = cb.rnc and cck.element_id = cb.cellid::text) c
on r.mo = c.mo and r.parameter = c.parameter and r.baseline_date = c.baseline_date and r.node = c.node
where r.node = split_part('".$node."',' - ',1)
".$cond.") t
group by baseline_date,node order by baseline_date
;");

	 return $query->result();
	 }
######################################################

####################CLUSTER#############################
#######	 
	 function cluster_baseline_by_mo($node){
		$this->load->model('model_cellsinfo');
		$cluster_info = $this->model_cellsinfo->find_cluster_info($node);
		$cluster_id = $cluster_info[0]->cluster_id;
		$uf = $cluster_info[0]->uf;	
		 $query = $this->db->query(
		 " SELECT 'cluster'::text as type, 
    t.node as node,
    sum(t.discrepancies) AS total_discrepancies,
    round(avg(t.discrepancies), 2) AS avg_discrepancies,
    string_agg(t.mo, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo,
    string_agg(t.discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS discrepancies
   FROM (
   SELECT distinct
            node,mo,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,node) AS discrepancies,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo) AS mo_total_discrepancies
           from (select cluster node,rnc,cellid,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct cluster,rnc,cellid,mo,parameter from (select * from umts_control.cells_database where cluster = '".$node."') test1 cross join (select distinct mo,parameter from umts_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from umts_baseline.consistency_check_nok_hist
          WHERE (baseline_date IN ( SELECT max(baseline_date) AS max FROM umts_baseline.consistency_check_nok_hist consistency_check_1))) cck 
		  on cdb.rnc = cck.node and cdb.cellid::text = cck.element_id and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
		  ) t
  GROUP BY t.node
  ORDER BY (sum(t.discrepancies)) DESC;
;");
	 return $query->result();
	 }	
#######
	 function cluster_parameters_mo($reportmoname,$node){
		$this->load->model('model_cellsinfo');
		$cluster_info = $this->model_cellsinfo->find_cluster_info($node);
		$cluster_id = $cluster_info[0]->cluster_id;
		$uf = $cluster_info[0]->uf;		
		 $query = $this->db->query(
		 "SELECT distinct
            mo,parameter,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,parameter) AS discrepancies
            from (select cluster node,rnc,cellid,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct cluster,rnc,cellid,mo,parameter from (select * from umts_control.cells_database where cluster = '".$node."') test1 cross join (select distinct mo,parameter from umts_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from umts_baseline.consistency_check_nok_hist
          WHERE (baseline_date IN ( SELECT max(baseline_date) AS max FROM umts_baseline.consistency_check_nok_hist consistency_check_1))) cck 
		  on cdb.rnc = cck.node and cdb.cellid::text = cck.element_id and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
where mo = '".$reportmoname."'
;");

	 return $query->result();
	 }
#######	 
	 function cluster_ne_discrepancies($reportmoname,$node){
		$this->load->model('model_cellsinfo');
		$cluster_info = $this->model_cellsinfo->find_cluster_info($node);
		$cluster_id = $cluster_info[0]->cluster_id;
		$uf = $cluster_info[0]->uf;			 
	 	$cond = '';
		 if($reportmoname){
			$cond = " and r.mo = '".$reportmoname."' "; 
		 }
		 $query = $this->db->query(
		 "select baseline_date,node,sum(case label when 'NOK' then 1 else 0 end) discrepancies from
(select r.baseline_date,r.mo,r.parameter,r.node,
case when status = 'NOK' then 'NOK' else 'OK' END AS label from 
(select distinct baseline_date,node,mo,parameter from umts_baseline.rules  
cross join (select distinct baseline_date from umts_baseline.consistency_check_nok_hist) test
cross join (select cluster node from umts_control.cells_database where cluster = '".$node."') test2
where act = true) r 
left join 
(select baseline_date,cluster node,rnc,mo,parameter,status from umts_baseline.consistency_check_nok_hist CCK INNER JOIN umts_control.cells_database CB on cck.node = cb.rnc and cck.element_id = cb.cellid::text) c
on r.mo = c.mo and r.parameter = c.parameter and r.baseline_date = c.baseline_date and r.node = c.node
where r.node = '".$node."'
".$cond.") t
group by baseline_date,node order by baseline_date
;");

	 return $query->result();
	 }
######################################################

####################UF#############################
#######	 
	 function uf_baseline_by_mo($reportdate){
	
		 $query = $this->db->query(
		 "SELECT t.baseline_date,'uf'::text as type,
    t.node,
    sum(t.discrepancies) AS total_discrepancies,
    round(avg(t.discrepancies), 2) AS avg_discrepancies,
    string_agg(t.mo, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo,
    string_agg(t.discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS discrepancies
  
   FROM ( SELECT DISTINCT
            baseline_class_hist.baseline_date,
			substring(baseline_class_hist.NODE, 4, 2) as node,           
            baseline_class_hist.mo,
            sum(baseline_class_hist.discrepancies) OVER (PARTITION BY baseline_class_hist.baseline_date, baseline_class_hist.mo,substring(baseline_class_hist.NODE, 4, 2)) AS discrepancies,
            sum(baseline_class_hist.discrepancies) OVER (PARTITION BY baseline_class_hist.baseline_date, baseline_class_hist.mo) AS mo_total_discrepancies
           FROM umts_baseline.baseline_class_hist
          WHERE (baseline_class_hist.baseline_date IN ( SELECT max(consistency_check_1.baseline_date) AS max
                   FROM umts_baseline.baseline_class_hist consistency_check_1))
                   ) t
  GROUP BY t.node, t.baseline_date
  ORDER BY (sum(t.discrepancies)) DESC


;");
	 return $query->result();
	 }	
#######
	 function uf_parameters_mo($reportmoname,$node){
		
		 $query = $this->db->query(
		 "SELECT distinct
            mo,parameter,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,parameter) AS discrepancies
            from (select uf node,rnc,cellid,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct uf,rnc,cellid,mo,parameter from (select * from umts_control.cells_database where substring(rnc, 4, 2) = '".$node."') test1 cross join (select distinct mo,parameter from umts_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from umts_baseline.consistency_check_nok_hist
          WHERE (baseline_date IN ( SELECT max(baseline_date) AS max FROM umts_baseline.consistency_check_nok_hist consistency_check_1))) cck 
		  on cdb.rnc = cck.node and cdb.cellid::text = cck.element_id and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
where mo = '".$reportmoname."'
;");

	 return $query->result();
	 }
#######	 
	 function uf_ne_discrepancies($reportmoname,$node){	
	 	$cond = '';
		 if($reportmoname){
			$cond = " and r.mo = '".$reportmoname."' "; 
		 }
		 $query = $this->db->query(
		 "select baseline_date,node,sum(case label when 'NOK' then 1 else 0 end) discrepancies from
(select r.baseline_date,r.mo,r.parameter,r.node,
case when status = 'NOK' then 'NOK' else 'OK' END AS label from 
(select distinct baseline_date,node,mo,parameter from umts_baseline.rules  
cross join (select distinct baseline_date from umts_baseline.consistency_check_nok_hist) test
cross join (select uf node from umts_control.cells_database where substring(rnc, 4, 2) = '".$node."') test2
where act = true) r 
left join 
(select baseline_date,uf node,rnc,mo,parameter,status from umts_baseline.consistency_check_nok_hist CCK INNER JOIN umts_control.cells_database CB on cck.node = cb.rnc and cck.element_id = cb.cellid::text) c
on r.mo = c.mo and r.parameter = c.parameter and r.baseline_date = c.baseline_date and r.node = c.node
where r.node = '".$node."'
".$cond.") t
group by baseline_date,node order by baseline_date
;");

	 return $query->result();
	 }
######################################################
	 
	 
	 function baseline_enodeb_by_uf($reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -28 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -7 day'));	
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2 = $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2 = $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");		
		 $query = $this->db->query(

		 "select year,week,region,get_uf_by_enodeb as node,
sum(discrepancies) discrepancies,
round((100::double precision *  sum(correct)::real/ NULLIF(sum(total)::real, 0::double precision))::numeric, 2)::real percentage
from uf_by_mo5
    where region not in ('UNKNOWN')
group by year,week,region, get_uf_by_enodeb
		 ;");

	 return $query->result();
	 }	 
	 
	 function baseline_enodeb_by_mo($reportdate){
		$dayweek1 = date('Y-m-d', strtotime($reportdate.' -28 day'));	
		$dayweek2 = date('Y-m-d', strtotime($reportdate.' -21 day'));	
		$dayweek3 = date('Y-m-d', strtotime($reportdate.' -14 day'));	
		$dayweek4 = date('Y-m-d', strtotime($reportdate.' -7 day'));	
		$date1 = new DateTime($dayweek1);
		$date2 = new DateTime($dayweek2);
		$date3 = new DateTime($dayweek3);
		$date4 = new DateTime($dayweek4);
		$weeknum1= $date1->format("W");
		$weeknum2 = $date2->format("W");
		$weeknum3 = $date3->format("W");
		$weeknum4 = $date4->format("W");
		$yearnum1= $date1->format("o");
		$yearnum2 = $date2->format("o");
		$yearnum3 = $date3->format("o");
		$yearnum4 = $date4->format("o");		
		 $query = $this->db->query(
		 "SELECT 
    year,
    week,
    mo,
    sum(discrepancies) AS total_discrepancies,
    round(avg(discrepancies), 2) AS avg_discrepancies,
    string_agg(region, ','::text ORDER BY region, get_uf_by_enodeb) AS regions,
    string_agg(get_uf_by_enodeb, ','::text ORDER BY region, get_uf_by_enodeb) AS nodes,
    string_agg(discrepancies::text, ','::text ORDER BY region, get_uf_by_enodeb) AS discrepancies,
    string_agg(round((100::double precision *  correct::real/ NULLIF(total::real, 0::double precision))::numeric, 2)::real::text, ','::text ORDER BY region, get_uf_by_enodeb) AS percentage
    from (select * from uf_by_mo5 where region not in ('UNKNOWN')) uf_by_mo
    GROUP BY year, week, mo;
;");

	 return $query->result();
	 }	 	 
	
function getRules($networktype){
	$query = $this->db->query("SELECT distinct id, name FROM baseline_rules as a where a.network_type='$networktype';");
	return $query->result();
}
	
	
function getClusters($networktype){
	$query = $this->db->query("SELECT distinct cluster FROM clusters as a where a.network_type='$networktype' AND element_type='RNC';");
	return $query->result();
}

	
	
function getCheckDone($networktype, $cluster, $baselineRuleID)
{
	ini_set('memory_limit', '2048M');
	//echo __DIR__;
	//include_once("baselineStructure.php"); 
	include_once(__DIR__."/baselineStructure.php"); 
		
	$g_MOs = array();
	$g_rules = array();

	$page = 1;
	$total_pages = 1;
	$count = 5;

	// STEP 1
	// PART 1 - Loading Rules from DB

	$SQL = "SELECT a.id, a.MO as \"MO\", a.parameter, a.subparameter,a.MML as \"MML\",
			a.value1,a.value2,a.value3, value4,  value5,  value6,  value7 
			FROM baseline_rules_details as a where a.id=$baselineRuleID;";

	$query = $this->db->query($SQL);
	//if ($query->num_rows() > 0)
	//if( !$query )
	//{
	//   $errNo   = $this->db->error();// $this->db->_error_number();
	
	$i=0;
	foreach($query->result() as $row){
		if ($row->parameter!='' && $row->value1!='') {
			
			$v_rule = new Rule();
			$v_rule->setRuleDetails2($row);
			$g_rules[] = $v_rule;
		}
		$i++;
	} 

	$count = $i;
 

	// PART 2: Generate where clause based on cluster selected


	$g_elements = array();
//	$SQL = "SELECT element_name FROM clusters where cluster='$cluster' and network_type='3G' and element_type='RNC';";
//	$SQL = "SELECT distinct RNC as element_name FROM umts_control.cells where regional='$cluster';";
	$SQL = "SELECT distinct RNC as element_name FROM umts_control.cells where regional='$cluster' OR rnc='$cluster';";	
	$query = $this->db->query($SQL);

	foreach($query->result() as $row){
		$g_elements[] = $row->element_name;
	}
	$whereRNC = "IN ('".join("','",$g_elements)."')"; //$whereRNC = "IN ('RNCDF01', 'RNCDF02', 'RNCDF03')";

		
	// STEP 2: For each rule check discrepancies

	$responce = new stdClass();

	$responce->page = $page;
	$responce->total = $total_pages;
	$responce->records = $count;


	$logFileName="logFile.xls";

	$responce->userdata = $logFileName;



	$i=0;
	//		echo getcwd();

	$logFile = fopen(__DIR__."/../../output/$logFileName", "w") or die("Unable to open file!"); // TODO: create dynamic naming
	 
	$txt = "RNC \t ElementID \t MO \t Parameter \t Baseline \t Value found \t BASELINE_OK\r\n";
	fwrite($logFile, $txt);

		foreach ($g_rules as &$v_rule) {
		
		//in MO we have table name so it can be used to create SQL query
		//using $cluster we can get list of RNC (or other elements ) ... TODO: implement later
		
		$paramToCheck = strtolower($v_rule->parameterToCheck);
		$subParamToCheck = strtolower($v_rule->subParameterToCheck);
		$tableToCheck = strtolower($v_rule->command);
		$isSubParameter = false;
		
		if (!(is_null($subParamToCheck) || empty($subParamToCheck))) $isSubParameter = true;
	 
		//mysql_select_db('udb_configuration') or die("Error conecting to db.");

		//TODO: MySQL - check if column exists
		//$SQL = "SHOW COLUMNS FROM udb_configuration.$tableToCheck;";
		

		$SQL = "select column_name, data_type, character_maximum_length	from INFORMATION_SCHEMA.COLUMNS where table_name = '$tableToCheck';";
	
		$query = $this->db->query($SQL);
		$v_tableColumns = "";
		$v_hasRNCColumn=false;
		$v_hasCIDColumn=false;
		$t_clm="";
		$MMLCMD="";

		foreach($query->result() as $row){
			$t_clm=strtoupper($row->column_name);
			if ($t_clm=='RNCNAME') $v_hasRNCColumn=true;
			if ($t_clm=='CELLID') $v_hasCIDColumn=true;
			$v_tableColumns = $v_tableColumns.$row->column_name.",";
		}
		
		$v_elementID="";
		$v_controller="";
		$v_elementToUseAsID='a.rncname'; // later should be modified to work with 2g, 4g, etc
		
		
		if ($v_hasCIDColumn) $v_elementToUseAsID='a.cellId';
		
		$SQL = "select a.rncname, $v_elementToUseAsID as \"v_elementID\", a.$paramToCheck as \"realValue\"
		FROM umts_configuration.$tableToCheck as a 
		where rncname $whereRNC;";
		
		$query = $this->db->query("select count(*) as count FROM umts_configuration.$tableToCheck as a where rncname $whereRNC;");
		
		$row = $query->row(); 
		$rowsCount = $row->count;
		
		if ($rowsCount==0) {
			//throw some warning;
			$v_rule->elementsChecked=1; // this is to avoid exception
		}
		
			
		$query = $this->db->query($SQL);

		foreach($query->result() as $row){
			
			$t_parameterCorrect = false;
			$v_rule->elementsChecked++;
			
			$txt ="";
			
			$v_elementID=$row->v_elementID;
			$v_controller=$row->rncname; // modify later for 2g/4g
			
			
			if ($isSubParameter) {
				//check value should be compared to value of subparameter parsed from realvalue
				$v_subParameters=explode('&',$row->realValue);
				$isSubFound=false;
				foreach($v_subParameters as &$t_subPair) {
					$t_pair = explode('-',$t_subPair);
					if ($t_pair[0]==$v_rule->subParameterToCheck)
					{
						$isSubFound=true;
						
						if ($v_rule->isMultipleCheckValue)
						{
							$valueBaseline = implode(",",$v_rule->checkValue);
							if (in_array($t_pair[1], $v_rule->checkValue)) $t_parameterCorrect = true;
							$v_result= $t_parameterCorrect ? 'OK' : 'NOK';
							$txt = "$v_controller\t$v_elementID\t$v_rule->command\t$v_rule->parameterToCheck - $v_rule->subParameterToCheck\t$valueBaseline\t$t_pair[1]\t$v_result\t";
						}
						else
						{
							if ($t_pair[1]==$v_rule->checkValue) $t_parameterCorrect = true;
							$v_result= $t_parameterCorrect ? 'OK' : 'NOK';
							$txt = "$v_controller\t$v_elementID\t$v_rule->command\t$v_rule->parameterToCheck - $v_rule->subParameterToCheck\t$v_rule->checkValue\t$t_pair[1]\t$v_result\t";
						}
					
						
					}
				}
				//if (!$isSubFound) throw some warning;
				
			} else
			{		
				$valueFound=$row->realValue;
				
				if ($v_rule->isMultipleCheckValue)
				{
					$valueBaseline = implode(",",$v_rule->checkValue);
					if (in_array($row->realValue, $v_rule->checkValue)) $t_parameterCorrect = true;
					$v_result= $t_parameterCorrect ? 'OK' : 'NOK';
					$txt = "$v_controller\t$v_elementID\t$v_rule->command\t$v_rule->parameterToCheck\t$valueBaseline\t$valueFound\t$v_result\t"; // TODO: verify in can be joined with lower line
				}
				else
				{
					if ($row->realValue==$v_rule->checkValue) $t_parameterCorrect = true;
					$v_result= $t_parameterCorrect ? 'OK' : 'NOK';
					$txt = "$v_controller\t$v_elementID\t$v_rule->command\t$v_rule->parameterToCheck\t$v_rule->checkValue\t$valueFound\t$v_result\t";
				}
			}
			// TODO: add check for subparameters and multiple values
			
			//$txt = "MO\tParameter\tBaseline\tValue found\r\n";



			if (!$t_parameterCorrect) {
				$v_rule->discrepanciesFound++;
				
				if ($v_hasCIDColumn ) $MMLCMD=str_replace("%CELLID%", $v_elementID, $v_rule->MML);
				if (!$v_hasCIDColumn ) $MMLCMD=$v_rule->MML;
				
				// TODO: generate table with output
				
			}
			
			$txt=$txt."$MMLCMD\r\n";		
			fwrite($logFile, $txt);		
			

		}        

	$i++;	


	// print result for current param 

	//$responce->rows[$i-1]['mo']=$v_rule->command.$v_rule->parameterToCheck;
	//$responce->rows[$i-1]['num_param']=1;
	//$responce->rows[$i-1]['discrepancy']=$v_rule->discrepanciesFound;
	//$responce->rows[$i-1]['percentage']=number_format(100 * $v_rule->discrepanciesFound / $v_rule->elementsChecked,2);

	} 


	//var_dump($g_rules);

	// populate MO structure
	foreach ($g_rules as &$v_rule) {

		$v_foundFlag=false;
		foreach ($g_MOs as &$t_MO) {
			if ($t_MO->MOName==$v_rule->command) $v_foundFlag=true;
		}
		 
		if (!$v_foundFlag) {
			unset($v_MO);
			$v_MO = new MO();
			$v_MO->MOName=$v_rule->command;
			$g_MOs[]=$v_MO;
		}
	}
	 
	// Update it with results of verification
	foreach ($g_rules as &$v_rule) {

		foreach ($g_MOs as &$v_MO) {
			if ($v_MO->MOName==$v_rule->command) {
				$v_MO->NumParameters++;
				$v_MO->NumElements=$v_rule->elementsChecked + $v_rule->elementsSkipped;
				$v_MO->NumDescrepancies = $v_MO->NumDescrepancies + $v_rule->discrepanciesFound;
			}
		}
	}



	//generate output
	$i=0;
	foreach ($g_MOs as &$v_MO) {
		
		$responce->rows[$i]['mo']=$v_MO->MOName;
		$responce->rows[$i]['num_param']=$v_MO->NumElements;
		$responce->rows[$i]['discrepancy']=$v_MO->NumDescrepancies;
		$responce->rows[$i]['percentage']=$v_MO->getPercentage();
		$i++;
	}


	//$SQL = "SELECT a.id, a.invdate, b.name, a.amount,a.tax,a.total,a.note FROM invheader a, clients b WHERE a.client_id=b.client_id ORDER BY $sidx $sord LIMIT $start , $limit";
	//$result = pg_query( $SQL ) or die("Couldn t execute query.".pg_last_error());

	/** 
	TODO: 
		  output warnings
		  generate & output MMLs

	$i=0;
	while($row = pg_fetch_array($result,MYSQL_ASSOC)) {
		$responce->rows[$i]['id']=$row[id];
		$responce->rows[$i]['cell']=array($row[id],$row[invdate],$row[name],$row[amount],$row[tax],$row[total],$row[note]);
		$i++;
	}        

	**/

	fclose($logFile);

	echo json_encode($responce);
	}
		
}
