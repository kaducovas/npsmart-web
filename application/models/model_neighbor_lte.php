<?php 

class Model_baseline_enodeb extends CI_Model{

	function maxdate(){
	
		 $query = $this->db->query(
		 "SELECT max(date) as date from lte_control.ext_lte;
;");

	 return $query->result();
	 }
	 
	function mos($reportdate){
	
		 $query = $this->db->query(
		 "SELECT  
    string_agg(t.mo, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo,
    string_agg(t.mo_total_discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo_total_discrepancies, 
    sum(t.mo_total_discrepancies) as total
   FROM (
   select distinct mo, mo_total_discrepancies
   from(
   SELECT   mo,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo) AS mo_total_discrepancies
           from (select site node,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct site,mo,parameter from (select * from lte_control.cells) test1 cross join (select distinct mo,parameter from lte_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from lte_baseline.consistency_check_nok_hist
          WHERE (baseline_date = '".$reportdate."')) cck 
		  on cdb.site = cck.node and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
		  ) g where mo_total_discrepancies != 0) t
;");
 return $query->result();
	}
	 
	 function baseline_by_mo($reportdate){
	
		 $query = $this->db->query(
		 "SELECT  
    t.node, type,
    sum(t.discrepancies) AS total_discrepancies,
    round(avg(t.discrepancies), 2) AS avg_discrepancies,
    string_agg(t.mo, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo,
    string_agg(t.discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS discrepancies, 
    string_agg(t.mo_total_discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo_total_discrepancies, 
    sum(t.mo_total_discrepancies) as total
   FROM (
   SELECT distinct 'enodebs'::text as type, 
            node,mo,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,node) AS discrepancies,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo) AS mo_total_discrepancies
           from (select site node,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct site,mo,parameter from (select * from lte_control.cells) test1 cross join (select distinct mo,parameter from lte_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from lte_baseline.consistency_check_nok_hist
          WHERE (baseline_date = '".$reportdate."')) cck 
		  on cdb.site = cck.node and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
		  ) t
  GROUP BY t.node,type
  order by total_discrepancies DESC;
;");

	 return $query->result();
	 }

	 function ne_discrepancies($reportdate,$reportmoname){
		 $cond = '';
		 if($reportmoname){
			$cond = " where r.mo = '".$reportmoname."' "; 
		 }
		 $query = $this->db->query(
		 "select baseline_date,sum(case label when 'NOK' then 1 else 0 end) discrepancies from
(select r.baseline_date,r.mo,r.parameter,
case when status = 'NOK' then 'NOK' else 'OK' END AS label from 
(select distinct baseline_date,mo,parameter from umts_baseline.rules  
cross join (select distinct baseline_date from lte_baseline.consistency_check_nok_hist) test
where act = true) r 
left join 
(select baseline_date,mo,parameter,status from lte_baseline.consistency_check_nok_hist CCK INNER JOIN (select distinct site from lte_control.cells) CB on cck.node = cb.site) c
on r.mo = c.mo and r.parameter = c.parameter and r.baseline_date = c.baseline_date
".$cond.") t
where baseline_date between '".date('Y-m-d', strtotime($reportdate.' -25 day'))."' and '".$reportdate."'
group by baseline_date order by baseline_date
;");

	 return $query->result();
	 }	  
	 
	 function parameters_mo($reportdate,$reportmoname){
		
		 $query = $this->db->query(
		 "SELECT distinct
            mo,parameter,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,parameter) AS discrepancies
            from (select site,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct site,mo,parameter from (select * from lte_control.cells) test1 cross join (select distinct mo,parameter from lte_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from lte_baseline.consistency_check_nok_hist
          WHERE (baseline_date = '".$reportdate."')) cck 
		  on cdb.site = cck.node and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
where mo = '".$reportmoname."'
;");

	 return $query->result();
	 }	

####################REGION#############################
#######	 
	 function region_baseline_by_mo($reportdate,$node){
	
		 $query = $this->db->query(
		 "SELECT  
    t.node, type,
    sum(t.discrepancies) AS total_discrepancies,
    round(avg_discrepancies, 2) AS avg_discrepancies,
    string_agg(t.mo, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo,
    string_agg(t.discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS discrepancies, 
    string_agg(t.mo_total_discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo_total_discrepancies, 
    sum(t.mo_total_discrepancies) as total
   FROM (
   select *, max(discrepancies) OVER (PARTITION BY type) as avg_discrepancies from
   (
   (SELECT distinct 'region'::text as type, 
            node,mo,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,node) AS discrepancies,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo) AS mo_total_discrepancies
           from (select region as node, site,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct region,site,mo,parameter from (select * from lte_control.cells) test1 cross join (select distinct mo,parameter from lte_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from lte_baseline.consistency_check_nok_hist
          WHERE (baseline_date = '".$reportdate."')) cck 
		  on cdb.site = cck.node and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter)t1
		  )
    ) g )t
  GROUP BY t.node,type, avg_discrepancies
  order by total_discrepancies DESC
;");
	 return $query->result();
	 }	
#######
	 function region_parameters_mo($reportdate,$reportmoname,$node){
		
		 $query = $this->db->query(
		 "SELECT distinct
            mo,parameter,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,parameter) AS discrepancies
            from (select REGION node,site,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct REGION,site,mo,parameter from (select * from lte_control.cells where REGION = '".$node."') test1 cross join (select distinct mo,parameter from lte_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from lte_baseline.consistency_check_nok_hist
          WHERE (baseline_date = '".$reportdate."')) cck 
		  on cdb.site = cck.node and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
where mo = '".$reportmoname."'
;");

	 return $query->result();
	 }
#######	 
	 function region_ne_discrepancies($reportdate,$reportmoname,$node){	
	 	$cond = '';
		 if($reportmoname){
			$cond = " and r.mo = '".$reportmoname."' "; 
		 }
		 $query = $this->db->query(
		 "select baseline_date,node,sum(case label when 'NOK' then 1 else 0 end) discrepancies from
(select r.baseline_date,r.mo,r.parameter,r.node,
case when status = 'NOK' then 'NOK' else 'OK' END AS label from 
(select distinct baseline_date,node,mo,parameter from umts_baseline.rules  
cross join (select distinct baseline_date from lte_baseline.consistency_check_nok_hist) test
cross join (select REGION node from lte_control.cells where REGION = '".$node."') test2
where act = true) r 
left join 
(select baseline_date,REGION as node,mo,parameter,status from lte_baseline.consistency_check_nok_hist CCK INNER JOIN (select distinct site, region from lte_control.cells) CB on cck.node = cb.site) c
on r.mo = c.mo and r.parameter = c.parameter and r.baseline_date = c.baseline_date and r.node = c.node
where r.node = '".$node."'
".$cond.") t
where baseline_date between '".date('Y-m-d', strtotime($reportdate.' -25 day'))."' and '".$reportdate."'
group by baseline_date,node order by baseline_date
;");

	 return $query->result();
	 }
######################################################
	 
####################NODEB#############################
#######	 
	 function enodeb_baseline_by_mo($reportdate,$node){
	
		 $query = $this->db->query(
		 "SELECT  
    t.node, type,
    sum(t.discrepancies) AS total_discrepancies,
    round(avg_discrepancies, 2) AS avg_discrepancies,
    string_agg(t.mo, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo,
    string_agg(t.discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS discrepancies, 
    string_agg(t.mo_total_discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo_total_discrepancies, 
    sum(t.mo_total_discrepancies) as total
   FROM (
   select *, max(discrepancies) OVER (PARTITION BY type) as avg_discrepancies from
   (
   SELECT distinct 'enodebs'::text as type, 
            node,mo,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,node) AS discrepancies,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo) AS mo_total_discrepancies
           from (select site node,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct site,mo,parameter from (select * from lte_control.cells) test1 cross join (select distinct mo,parameter from lte_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from lte_baseline.consistency_check_nok_hist
          WHERE (baseline_date = '".$reportdate."')) cck 
		  on cdb.site = cck.node and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
		  where node = '".$node."' ) g )t
  GROUP BY t.node,type, avg_discrepancies
  order by total_discrepancies DESC
;");
	 return $query->result();
	 }	
#######
	 function enodeb_parameters_mo($reportdate,$reportmoname,$node){
		
		 $query = $this->db->query(
		 "SELECT distinct
            mo,parameter,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,parameter) AS discrepancies
            from (select site node,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct site,mo,parameter from (select * from lte_control.cells where site = '".$node."') test1 cross join (select distinct mo,parameter from lte_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from lte_baseline.consistency_check_nok_hist
          WHERE (baseline_date = '".$reportdate."')) cck 
		  on cdb.site = cck.node and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
where mo = '".$reportmoname."'
;");

	 return $query->result();
	 }
#######	 
	 function enodeb_ne_discrepancies($reportdate,$reportmoname,$node){	
	 	$cond = '';
		 if($reportmoname){
			$cond = " and r.mo = '".$reportmoname."' "; 
		 }
		 $query = $this->db->query(
		 "select baseline_date,node,sum(case label when 'NOK' then 1 else 0 end) discrepancies from
(select r.baseline_date,r.mo,r.parameter,r.node,
case when status = 'NOK' then 'NOK' else 'OK' END AS label from 
(select distinct baseline_date,node,mo,parameter from umts_baseline.rules  
cross join (select distinct baseline_date from lte_baseline.consistency_check_nok_hist) test
cross join (select site node from lte_control.cells where site = '".$node."') test2
where act = true) r 
left join 
(select baseline_date,site node,mo,parameter,status from lte_baseline.consistency_check_nok_hist CCK INNER JOIN (select distinct site from lte_control.cells) CB on cck.node = cb.site) c
on r.mo = c.mo and r.parameter = c.parameter and r.baseline_date = c.baseline_date and r.node = c.node
where r.node = '".$node."'
".$cond.") t
where baseline_date between '".date('Y-m-d', strtotime($reportdate.' -25 day'))."' and '".$reportdate."'
group by baseline_date,node order by baseline_date
;");

	 return $query->result();
	 }

####################CIDADE#############################
#######	 
	 function cidade_baseline_by_mo($reportdate,$node){
		$this->load->model('model_cellsinfo');
		$cidade_info = $this->model_cellsinfo->find_cidade_info($node);
		$ibge = $cidade_info[0]->ibge;
		$uf = $cidade_info[0]->uf;		
		 $query = $this->db->query(
		 " SELECT type, 
    concat(t.node,' - ','".$uf."') as node,
    sum(t.discrepancies) AS total_discrepancies,
    round(avg_discrepancies, 2) AS avg_discrepancies,
    string_agg(t.mo, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo,
    string_agg(t.discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS discrepancies, 
    string_agg(t.mo_total_discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo_total_discrepancies, 
    sum(t.mo_total_discrepancies) as total
   FROM (
   select *, max(discrepancies) OVER (PARTITION BY type) as avg_discrepancies from
   (
   SELECT distinct 'cidades'::text as type,
            node,mo,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,node) AS discrepancies,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo) AS mo_total_discrepancies
           from (select cidade node,site,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct cidade,site,mo,parameter from (select * from lte_control.cells where ibge = '".$ibge."') test1 cross join (select distinct mo,parameter from lte_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from lte_baseline.consistency_check_nok_hist
          WHERE (baseline_date = '".$reportdate."')) cck 
		  on cdb.site = cck.node and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
		    ) g )t
  GROUP BY concat(t.node,' - ','".$uf."'),type, avg_discrepancies
  order by total_discrepancies DESC
;");
	 return $query->result();
	 }	
#######
	 function cidade_parameters_mo($reportdate,$reportmoname,$node){
		$this->load->model('model_cellsinfo');
		$cidade_info = $this->model_cellsinfo->find_cidade_info($node);
		$ibge = $cidade_info[0]->ibge;	
		 $query = $this->db->query(
		 "SELECT distinct
            mo,parameter,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,parameter) AS discrepancies
            from (select cidade node,site,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct cidade,site,mo,parameter from (select * from lte_control.cells where ibge = '".$ibge."') test1 cross join (select distinct mo,parameter from lte_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from lte_baseline.consistency_check_nok_hist
          WHERE (baseline_date = '".$reportdate."')) cck 
		  on cdb.site = cck.node and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
where mo = '".$reportmoname."'
;");

	 return $query->result();
	 }
#######	 
	 function cidade_ne_discrepancies($reportdate,$reportmoname,$node){
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
cross join (select distinct baseline_date from lte_baseline.consistency_check_nok_hist) test
cross join (select cidade node from lte_control.cells where ibge = '".$ibge."') test2
where act = true) r 
left join 
(select baseline_date,cidade node,mo,parameter,status from lte_baseline.consistency_check_nok_hist CCK INNER JOIN (select distinct site, cidade from lte_control.cells) CB on cck.node = cb.site) c
on r.mo = c.mo and r.parameter = c.parameter and r.baseline_date = c.baseline_date and r.node = c.node
where r.node = split_part('".$node."',' - ',1)
".$cond.") t
where baseline_date between '".date('Y-m-d', strtotime($reportdate.' -25 day'))."' and '".$reportdate."'
group by baseline_date,node order by baseline_date
;");

	 return $query->result();
	 }
######################################################

####################CLUSTER#############################
#######	 
	 function cluster_baseline_by_mo($reportdate,$node){
		$this->load->model('model_cellsinfo');
		$cluster_info = $this->model_cellsinfo->find_cluster_info($node);
		$cluster_id = $cluster_info[0]->cluster_id;
		$uf = $cluster_info[0]->uf;	
		 $query = $this->db->query(
		 " SELECT type, 
    t.node as node,
    sum(t.discrepancies) AS total_discrepancies,
    round(avg_discrepancies, 2) AS avg_discrepancies,
    string_agg(t.mo, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo,
    string_agg(t.discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS discrepancies, 
    string_agg(t.mo_total_discrepancies::text, ','::text ORDER BY t.mo_total_discrepancies DESC) AS mo_total_discrepancies, 
    sum(t.mo_total_discrepancies) as total
   FROM (
   select *, max(discrepancies) OVER (PARTITION BY type) as avg_discrepancies from
   (
   SELECT distinct 'clusters'::text as type,
            node,mo,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,node) AS discrepancies,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo) AS mo_total_discrepancies
           from (select cluster node,site,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct cluster,site,mo,parameter from (select * from lte_control.cells where cluster = '".$node."') test1 cross join (select distinct mo,parameter from lte_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from lte_baseline.consistency_check_nok_hist
          WHERE (baseline_date = '".$reportdate."')) cck 
		  on cdb.site = cck.node and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
    ) g )t
  GROUP BY t.node,type, avg_discrepancies
  order by total_discrepancies DESC
;");
	 return $query->result();
	 }	
#######
	 function cluster_parameters_mo($reportdate,$reportmoname,$node){
		$this->load->model('model_cellsinfo');
		$cluster_info = $this->model_cellsinfo->find_cluster_info($node);
		$cluster_id = $cluster_info[0]->cluster_id;
		$uf = $cluster_info[0]->uf;		
		 $query = $this->db->query(
		 "SELECT distinct
            mo,parameter,
            sum(case label when 'NOK' then 1 else 0 end) OVER (PARTITION BY mo,parameter) AS discrepancies
            from (select cluster node,site,cdb.mo,cdb.parameter,case when status = 'NOK' then 'NOK' else 'OK' END AS label
		  from (select distinct cluster,site,mo,parameter from (select * from lte_control.cells where cluster = '".$node."') test1 cross join (select distinct mo,parameter from lte_baseline.consistency_check_nok_hist) test2) cdb
		   left join 
		   (select * from lte_baseline.consistency_check_nok_hist
          WHERE (baseline_date = '".$reportdate."')) cck 
		  on cdb.site = cck.node and cdb.mo::text = cck.mo and cdb.parameter::text = cck.parameter) t1
where mo = '".$reportmoname."'
;");

	 return $query->result();
	 }
#######	 
	 function cluster_ne_discrepancies($reportdate,$reportmoname,$node){
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
cross join (select distinct baseline_date from lte_baseline.consistency_check_nok_hist) test
cross join (select cluster node from lte_control.cells where cluster = '".$node."') test2
where act = true) r 
left join 
(select baseline_date,cluster node,mo,parameter,status from lte_baseline.consistency_check_nok_hist CCK INNER JOIN (select distinct site, cluster from lte_control.cells) CB on cck.node = cb.site) c
on r.mo = c.mo and r.parameter = c.parameter and r.baseline_date = c.baseline_date and r.node = c.node
where r.node = '".$node."'
".$cond.") t
where baseline_date between '".date('Y-m-d', strtotime($reportdate.' -25 day'))."' and '".$reportdate."'
group by baseline_date,node order by baseline_date
;");

	 return $query->result();
	 }
}
