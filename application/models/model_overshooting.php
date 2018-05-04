<?php 

class Model_overshooting extends CI_Model{
	
	
	function getRFSRData($p_cellname, $p_tech, $p_resno, $p_cellname2)
	{
		//using nested query to display last x days
		$table = 'overshooters_v2_daily';
		$rnc_enodeb = 'rnc';
		$where2=''; 
		if ($p_tech=='4g') {
			$table = 'overshooters_lte_v2_daily';
			$rnc_enodeb = 'enodeb';
		}
		if ($p_cellname2!='') {
			$where2=' or cellname=\''.$p_cellname2.'\' ';
		}
		$query = $this->db->query(
		"WITH t AS ( 
		select distinct cellname, $rnc_enodeb as rnc, cellid, 
		abs(grid-pd_85) as distance, abs(nearest-pd_85) as distance_nr, grid, pd_85, nearest, sitesincov, 
		x1,x2,x3,x4,x5,  rfsr, isovershooter, to_char(dateday, 'Mon-DD') as tick, dateday 
		from common_gis.$table where cellname = '$p_cellname' $where2 
		order by dateday DESC LIMIT $p_resno 
		)
		SELECT * FROM t ORDER BY dateday ASC;");
		return $query->result();
	}
	
	
	function getRFSRDataForSRAN($p_cellname, $p_cellname2, $p_rnc, $p_tech, $where_dates)
	{
		//using nested query to display last x days
		$table = 'overshooters_v2_daily';
		$rnc_enodeb = 'rnc';
		$where_dates=" in ('".join($where_dates, "','")."') ";
		if ($p_tech=='4g') {
			$table = 'overshooters_lte_v2_daily';
			$rnc_enodeb = 'enodeb';
		}
		$query = $this->db->query(
		"WITH t AS ( 
		select distinct cellname, $rnc_enodeb as rnc, cellid, 
		abs(grid-pd_85) as distance, abs(nearest-pd_85) as distance_nr, grid, pd_85, nearest, sitesincov, 
		x1,x2,x3,x4,x5,  rfsr, isovershooter, to_char(dateday, 'Mon-DD') as tick, dateday 
		from common_gis.$table where rnc='$p_rnc' and cellname IN ('$p_cellname', '$p_cellname2') and dateday $where_dates 
		order by dateday DESC 
		)
		SELECT * FROM t ORDER BY dateday ASC;");
		return $query->result();
	}
	
	function getRFSRKPIs($p_cellname, $p_rnc, $p_cellid, $p_dateFrom, $p_dateTo)
	{
		$query = $this->db->query(
		"select r.cellname, m.rnc, m.cellid, r.sho_overhead_radar_score, m.hsdpa_users, to_char(r.date, 'Mon-DD') as tick, r.date as dateday
		from umts_kpi.radar_cell_daily as r
		inner join umts_kpi.main_kpis_daily as m
		on r.date=m.date and r.cellname=m.cellname
		where r.date between '$p_dateFrom' and '$p_dateTo' and m.date between '$p_dateFrom' and '$p_dateTo'
		and m.rnc='$p_rnc' and m.cellid=$p_cellid and r.cellname='$p_cellname' and not r.sho_overhead_radar_score isnull
		order by r.date ASC;");
		return $query->result();
	}
	
	
	//function getRFSRKPIsForSRAN($p_cellname, $p_cellname2, $p_tech, $where_dates)
	//{
	//	$where_dates=" in ('".join($where_dates, "','")."') ";
	//	$query = $this->db->query(
	//	"select r.cellname, m.rnc, m.cellid, r.sho_overhead_radar_score, m.hsdpa_users, to_char(r.date, 'Mon-DD') as tick, r.date as dateday
	//	from umts_kpi.radar_cell_daily as r
	//	inner join umts_kpi.main_kpis_daily as m
	//	on r.date=m.date and r.cellname=m.cellname
	//	where r.date $where_dates and m.date $where_dates
	//	and m.rnc='$p_rnc' and m.cellid=$p_cellid and (r.cellname='$p_cellname' or r.cellname='$p_cellname2') and not r.sho_overhead_radar_score isnull
	//	order by r.date ASC;");
	//	return $query->result();
	//}
	
	//function getRFSRKPIsForSRAN($p_rnc, $p_cellid, $p_cellid2, $p_tech, $where_dates)
	//{
	//	$where_dates=" in ('".join($where_dates, "','")."') ";
	//	$query = $this->db->query(
	//	"select m.cellname, m.rnc, m.cellid, 5 as sho_overhead_radar_score, m.hsdpa_users, to_char(m.date, 'Mon-DD') as tick, m.date as dateday
	//	from umts_kpi.main_kpis_daily as m
	//	where m.date $where_dates
	//	and m.rnc='$p_rnc' and (m.cellid=$p_cellid or m.cellid=$p_cellid2)  
	//	order by m.date ASC;");
	//	return $query->result();
	//}
	
	function getRFSRKPIsForSRAN($p_rnc, $p_cellid, $p_cellid2, $p_tech, $where_dates)
	{
		$where_dates=" in ('".join($where_dates, "','")."') ";
		$query = $this->db->query(
		"select m.cellname, m.rnc, m.cellid, max(cell_dl_data_volume_mb) as throughput, max(m.ee) as ee, to_char(m.datetime, 'yyyy-mm-dd') as tick, to_char(m.datetime, 'yyyy-mm-dd') as dateday
		from umts_kpi.amx_load as m
		where to_char(m.datetime, 'yyyy-mm-dd') $where_dates
		and m.rnc='$p_rnc' and (m.cellid=$p_cellid or m.cellid=$p_cellid2)  
		group by m.cellname, m.rnc, m.cellid, to_char(m.datetime, 'yyyy-mm-dd')
		order by to_char(m.datetime, 'yyyy-mm-dd') ASC;");
		return $query->result();
	}
	
	function completeName($p_partialName) {
	$query = $this->db->query(
		"select cell from umts_control.cells_database where cell like '%$p_partialName%'  
		union select cell from lte_control.cells where cell like '%$p_partialName%' limit 10;");
	return $query->result();
	}
	
	
	function getCellTech($p_name) {
		$query = $this->db->query(
		"select '4g' as tech, cell from lte_control.cells where cell='$p_name' 
		 union select '3g', cell from umts_control.cells_database where cell='$p_name';");
		return $query->result();
	}
	
	
/**/	
	function getRegionOvershootersWk($p_week, $p_tech)
	{
		$table = 'overshooters_v2_weekly';
		if ($p_tech=='4g') $table = 'overshooters_lte_v2_weekly';
		$query = $this->db->query(
			"SELECT week, region, round(100*sum(CASE WHEN isovershooter='YES' AND rfsr<=40 THEN 1 else 0 end )/ count(cellname)::numeric,2) cat_less_40,  
			round(100*sum(CASE WHEN isovershooter='YES' AND rfsr>40  and rfsr <=60 THEN 1 else 0 end )/ count(cellname)::numeric,2) cat_40_60, 
			round(100*sum(CASE WHEN isovershooter='YES' AND rfsr>60  and rfsr <=95 THEN 1 else 0 end )/ count(cellname)::numeric,2) cat_60_95,
			round(100*sum(CASE WHEN isovershooter='NO' OR rfsr>95 THEN 1 else 0 end )/ count(cellname)::numeric,2) cat_more_95 
			FROM common_gis.$table ov where week=$p_week  and not region isnull  group by region, week order by week, region;");
		return $query->result();
	}
	
	function getClusterOvershootersWk_tmp($p_week, $p_tech)
	{
			// manually set to work for NE region only for specific set of clusters - purpose is to attend trial at NE
			$table = 'overshooters_v2_weekly';
			if ($p_tech=='4g') $table = 'overshooters_lte_v2_weekly';
		$query = $this->db->query(
			"SELECT week, cluster, round(100*sum(CASE WHEN isovershooter='YES' AND rfsr<=40 THEN 1 else 0 end )/ count(cellname)::numeric,2) cat_less_40,  
			round(100*sum(CASE WHEN isovershooter='YES' AND rfsr>40  and rfsr <=60 THEN 1 else 0 end )/ count(cellname)::numeric,2) cat_40_60, 
			round(100*sum(CASE WHEN isovershooter='YES' AND rfsr>60  and rfsr <=95 THEN 1 else 0 end )/ count(cellname)::numeric,2) cat_60_95,
			round(100*sum(CASE WHEN isovershooter='NO' OR rfsr>95 THEN 1 else 0 end )/ count(cellname)::numeric,2) cat_more_95 
			FROM common_gis.$table ov where week=$p_week  and 
			region='NE' and 
			cluster in ('CAMPINA GRANDE', 'RECIFE', 'CARUARU', 'PARNAMIRIM', 'JOÃO PESSOA', 'NATAL')
			group by cluster, week order by week, cluster;");
		return $query->result();
	}
	
	function getRawOvershooters($p_week, $p_region, $p_tech)
	{
		$table = 'overshooters_v2_weekly';
		$rnc_enodeb = 'rnc';
		$regionWhereClause="and region = '".$p_region."'";
		if ($p_region=='ALL') { $regionWhereClause=''; }
		if ($p_tech=='4g') {
			$table = 'overshooters_lte_v2_weekly';
			$rnc_enodeb = 'enodeb';
		}
		$query = $this->db->query(
		"SELECT region, cellname, week, azimuth, pd_85, grid, isovershooter, ov.sitesincov, sites_str, 
		round(100*x1::numeric,2) X1, round(100*x2::numeric,2) X2, round(100*x3::numeric,2) X3, round(100*x4::numeric,2) X4, round(100*x5::numeric,2) X5,
		CASE WHEN isovershooter='YES' THEN rfsr ELSE 100 END rfsr 
		FROM common_gis.$table ov
		where week=$p_week $regionWhereClause
		order by region, $rnc_enodeb, cellname;");
		return $query->result();
	}
	
	
	function getGridNewSite($p_lat, $p_lon, $p_azm1, $p_azm2, $p_azm3)
	{
		//$this->db->set("search_path", "common_gis");
		$query = $this->db->query(
		"select * from common_gis.calculate_grid_new_site($p_lat, $p_lon, $p_azm1, $p_azm2, $p_azm3);");
		return $query->result();
	}
	
	function getTiltForGrid($p_grid)
	{
		$query = $this->db->query(
		"select tilt from common_gis.tilt_per_coverage where coverage=round($p_grid/1000)*1000;");
		return $query->result();
	}
	
	
	function getNewSites()
	{
		$query = $this->db->query(
		"select distinct missed1.nodebname, geo.latitude, geo.longitude
		from
		(
		select d2.nodebname, d2.rncid, d2.cellid, d2.cellname 
		from
		(select distinct to_char(datetime, 'YYYY-MM-DD') as dateday, nodebname, rncid, cellid, cellname from umts_configuration.ucellsetup) as d2
		left join
		(select distinct nodebname, rncid, cellid, cellname from umts_configuration.ucellsetup_history where datetime between NOW()::DATE-EXTRACT(DOW FROM NOW())::INTEGER-8   and NOW()::DATE-EXTRACT(DOW FROM NOW())::INTEGER-2   ) as d1
		on  d2.cellname = d1.cellname
		where  d1.cellname isnull and d1.nodebname isnull
		) missed1
		inner join 
		(
		select d2.nodebname, d2.rncid, d2.cellid, d2.cellname 
		from
		(select distinct to_char(datetime, 'YYYY-MM-DD') as dateday, nodebname, rncid, cellid, cellname from umts_configuration.ucellsetup) as d2
		left join
		(select distinct nodebname, rncid, cellid, cellname from umts_configuration.ucellsetup_history where datetime between NOW()::DATE-EXTRACT(DOW FROM NOW())::INTEGER-8   and NOW()::DATE-EXTRACT(DOW FROM NOW())::INTEGER-3   ) as d1
		on   d2.rncid=d1.rncid and d2.cellid=d1.cellid 
		where d1.cellid isnull  
		) missed2
		on missed1.cellname = missed2.cellname
		left join umts_control.cells_database as geo
		on missed1.cellname = geo.cell
		order by missed1.nodebname;");
		return $query->result();
	}
	
	
	
	function getNewSitesLTE()
	{
		$query = $this->db->query(
		"select distinct missed1.site, geo.latitude, geo.longitude
		from
		(
		select d2.site, d2.cell 
		from
		(select distinct site, cell from lte_control.cells) as d2
		left join
		(select distinct site, cell from lte_control.cells_history where date between NOW()::DATE-EXTRACT(DOW FROM NOW())::INTEGER-8   and NOW()::DATE-EXTRACT(DOW FROM NOW())::INTEGER-3   ) as d1
		on  d2.cell = d1.cell
		where  d1.cell isnull and d1.site isnull
		) missed1
		inner join 
		(
		select d2.site, d2.cellid, d2.cell 
		from
		(select distinct site, cellid, cell from lte_control.cells) as d2
		left join
		(select distinct site, cellid, cell from lte_control.cells_history where date between NOW()::DATE-EXTRACT(DOW FROM NOW())::INTEGER-8   and NOW()::DATE-EXTRACT(DOW FROM NOW())::INTEGER-2   ) as d1
		on   d2.site=d1.site and d2.cellid=d1.cellid 
		where d1.cellid isnull  
		) missed2
		on missed1.cell = missed2.cell
		left join lte_control.cells  as geo
		on missed1.cell = geo.cell
		order by missed1.site;");
		return $query->result();
	}
	
	function who_covers($p_lat, $p_lon, $p_radius)
	{
		$query = $this->db->query("select * from common_gis.calculate_who_covers_point($p_lat, $p_lon, $p_radius);");
		return $query->result();
	}
	
	function intersections($p_name)
	{
		$query = $this->db->query("select * from common_gis.calculate_coverage_intersection_plpgsql('$p_name', TRUE);");
		return $query->result();
	}
	
	function getLastCellAppearence($p_cellname, $p_tech)
	{
		//using nested query to display last x days
		$table = 'overshooters_v2_daily';
		if ($p_tech=='4g') {
			$table = 'overshooters_lte_v2_daily';
		}
		$query = $this->db->query(
		"select max(to_char(datetime, 'YYYY-MM-DD')) as d, rncname as rnc from umts_configuration.ucellsetup_history where cellname = '$p_cellname' group by rncname");
		return $query->result();
	}
	
	function getFirstCellAppearence($p_cellname, $p_tech)
	{
		//using nested query to display last x days
		$table = 'overshooters_v2_daily';
		if ($p_tech=='4g') {
			$table = 'overshooters_lte_v2_daily';
		}
		$query = $this->db->query(
		"select min(to_char(datetime, 'YYYY-MM-DD')) as d, rncname as rnc from umts_configuration.ucellsetup_history where cellname = '$p_cellname' group by rncname");
		return $query->result();
	}
	
	function getRFSRDaysBack($p_cellname, $p_cellname2, $p_rnc, $p_dateday, $p_tech, $p_resno)
	{
		//using nested query to display last x days
		$table = 'overshooters_v2_daily';
		if ($p_tech=='4g') {
			$table = 'overshooters_lte_v2_daily';
		}
		$query = $this->db->query(
		"select distinct dateday 
		from common_gis.$table where rnc='$p_rnc' and cellname IN ('$p_cellname', '$p_cellname2') and dateday<='$p_dateday' 
		order by dateday DESC LIMIT $p_resno ");
		return $query->result();
	}
	
	function getRFSRDaysAhead($p_cellname, $p_cellname2, $p_rnc, $p_dateday, $p_tech, $p_resno)
	{
		//using nested query to display last x days
		$table = 'overshooters_v2_daily';
		if ($p_tech=='4g') {
			$table = 'overshooters_lte_v2_daily';
		}
		$query = $this->db->query(
		"select distinct dateday 
		from common_gis.$table where rnc='$p_rnc' and cellname IN ('$p_cellname', '$p_cellname2') and dateday>='$p_dateday' 
		order by dateday ASC LIMIT $p_resno ");
		return $query->result();
	}
	
	function rncs(){
		$query = $this->db->query(
		"select distinct rnc as node from umts_control.cells_db order by rnc;");

	return $query->result();
	}
	
	function regional(){
		$query = $this->db->query(
		"select distinct region as node from umts_control.cells_database order by region;");

	return $query->result();
	}
	
	function regional_lte(){
		$query = $this->db->query(
		"select distinct region as node from lte_control.cells order by region;");

	return $query->result();
	}
	
	function regional_gsm(){
		$query = $this->db->query(
		"SELECT DISTINCT regional as node FROM gsm_control.cells_db ORDER BY regional;");

	return $query->result();
	}

	function ufs_gsm(){
		$query = $this->db->query(
		"select distinct uf as node from gsm_control.cells_db order by uf;");

	return $query->result();
	}
	
	function bsc(){
		$query = $this->db->query(
		"SELECT DISTINCT bsc as node FROM gsm_control.cells_db ORDER BY bsc;");

	return $query->result();
	}
	
	function bts(){
		$query = $this->db->query(
		"SELECT DISTINCT bts as node FROM gsm_control.cells_db ORDER BY bts;");

	return $query->result();
	}
	
	function cidades(){
		$query = $this->db->query(
		#"select distinct cidade as node, ibge from umts_control.cells_database where cidade is not null order by cidade;");
		"SELECT DISTINCT concat(cidade,' - ',uf) as node, ibge FROM umts_control.cells_db where cidade is not null order by node;");
	return $query->result();
	}
	
	function cidades_lte(){
		$query = $this->db->query(
		"SELECT DISTINCT concat(cidade,' - ',uf) as node, ibge FROM lte_control.cells where cidade is not null order by node;");

	return $query->result();
	}	
	
	function cidades_gsm(){
		$query = $this->db->query(
		"SELECT DISTINCT concat(cidade,' - ',uf) as node, ibge FROM gsm_control.cells_db WHERE not cidade is null ORDER BY node;");

	return $query->result();
	}
	
	function clusters(){
		$query = $this->db->query(
		"select distinct cluster as node from umts_control.cells_database order by cluster;");

	return $query->result();
	}

	function custom(){
		$query = $this->db->query(
		"select distinct cluster as node from umts_control.claro_cluster where user_created = true;");

	return $query->result();
	}	
	
	
	function clusters_lte(){
		$query = $this->db->query(
		"select distinct cluster as node,cluster_id from LTE_control.claro_cluster order by cluster_id;");

	return $query->result();
	}

	function clusters_nqi_lte(){
		$query = $this->db->query(
		"select distinct cluster as node,cluster_id from LTE_control.claro_cluster order by cluster_id;");

	return $query->result();
	}
	
	function ufs(){
		$query = $this->db->query(
		"select distinct substring(cluster,1,2) as node from umts_control.cells_database where cluster is not null order by substring(cluster,1,2);");

	return $query->result();
	}
	
	function ufs_lte(){
		$query = $this->db->query(
		"select distinct uf as node from lte_control.cells order by uf;");

	return $query->result();
	}

	function enodebs(){
		$query = $this->db->query(
		#"SELECT distinct get_enodeb_name(main_kpis_lte_daily.enodeb,'enodeb') as node FROM lte_kpi.main_kpis_lte_daily WHERE date = (select max(date) FROM lte_control.log_daily)::date ORDER BY get_enodeb_name(main_kpis_lte_daily.enodeb,'enodeb');");
		"SELECT distinct enodeb as node from lte_control.cells order by node;");
	return $query->result();
	}
	
	function enodebs_nqi(){
		$query = $this->db->query(
		#"SELECT distinct get_enodeb_name(main_kpis_lte_daily.enodeb,'enodeb') as node FROM lte_kpi.main_kpis_lte_daily WHERE date = (select max(date) FROM lte_control.log_daily)::date ORDER BY get_enodeb_name(main_kpis_lte_daily.enodeb,'enodeb');");
		"SELECT distinct site as node from lte_control.cells order by node;");
	return $query->result();
	}
	
	function find_cellid_from_enodebs($node){
		$query = $this->db->query(
		"select site,cellid from lte_control.cells where cell = '".$node."';");

	return $query->result();
	}	
	
	function nodebs(){
		$query = $this->db->query(
		"SELECT distinct nodebname_norm as node from umts_control.cells_database ORDER by nodebname_norm;");
		#"SELECT distinct get_nodeb_name(main_kpis_daily.cellname, 'cell'::text) AS node FROM umts_kpi.main_kpis_daily WHERE date = (select max(date) FROM umts_control.log_daily)::date ORDER BY get_nodeb_name(main_kpis_daily.cellname, 'cell'::text);");
		#		"SELECT distinct nodebname as node FROM umts_configuration.ucellsetup ORDER BY node;;");

	return $query->result();
	}
	
	function nodebs_cells_db(){
		$query = $this->db->query(
		"select distinct nodeb as node from umts_control.cells_database order by nodeb;");

	return $query->result();
	}	
	
	function cells(){
		$query = $this->db->query(
		"select distinct cellname as node from umts_configuration.ucellsetup order by cellname;");

	return $query->result();
	}	

	function mos(){
		$query = $this->db->query(
		"SELECT distinct table_name as mo FROM INFORMATION_SCHEMA.COLUMNS WHERE table_schema = 'umts_configuration' and table_name not in ('parameters') and table_name not like '%history%' order by table_name;");

	return $query->result();
	}
	
	function nodeb_mos(){
		$query = $this->db->query(
		"SELECT distinct table_name as mo FROM INFORMATION_SCHEMA.COLUMNS WHERE table_schema = 'umts_nodeb_configuration' and table_name not in ('parameters') order by table_name;");

	return $query->result();
	}

	function nodeb_mo(){
		$query = $this->db->query(
		"SELECT distinct table_name as mo FROM INFORMATION_SCHEMA.COLUMNS WHERE table_schema = 'nodeb_configuration' and table_name not in ('parameters') order by table_name;");

	return $query->result();
	}	
	
	function enodeb_mo(){
		$query = $this->db->query(
		"SELECT distinct table_name as mo FROM INFORMATION_SCHEMA.COLUMNS WHERE table_schema = 'enodeb_configuration' and table_name not in ('parameters') order by table_name;");

	return $query->result();
	}

	function sran_mo(){
		$query = $this->db->query(
		"SELECT distinct table_name as mo FROM INFORMATION_SCHEMA.COLUMNS WHERE table_schema = 'sran_configuration' and table_name not in ('parameters') order by table_name;");

	return $query->result();
	}		
	
	function adjnode(){
		$query = $this->db->query(
		"select distinct name as node from umts_configuration.adjnode order by name;");

	return $query->result();
	}

	function find_cidade_info_lte($cidade){
			$query = $this->db->query(
			"select distinct ibge,uf from lte_control.cells where cidade = split_part('".$cidade."',' - ',1) AND uf = split_part('".$cidade."',' - ',2);");

		return $query->result();
		}	
	
	function find_cidade_info($cidade){
			$query = $this->db->query(
			#"select distinct ibge,uf from umts_control.cells_database where cidade = '".$cidade."' and ibge not in (4117602);");
			"select distinct ibge,uf from umts_control.cells_database where cidade = split_part('".$cidade."',' - ',1) AND uf = split_part('".$cidade."',' - ',2);");
		return $query->result();
		}
		
	function find_cidade_info_gsm($cidade){
			$query = $this->db->query(
			"select distinct ibge,uf from gsm_control.cells_db where cidade = split_part('".$cidade."',' - ',1) AND uf = split_part('".$cidade."',' - ',2);");

		return $query->result();
		}

	function find_cluster_info($cluster){
			$query = $this->db->query(
			"SELECT cluster_id, uf FROM umts_control.claro_cluster where cluster = '".$cluster."';");

		return $query->result();
		}

	function find_cluster_info_lte($cluster){
			$query = $this->db->query(
			"SELECT cluster_id, uf FROM lte_control.claro_cluster where cluster = '".$cluster."';");

		return $query->result();
		}
		
	function find_cluster_uf_lte($cluster){
			$query = $this->db->query(
			"SELECT uf FROM lte_control.claro_cluster where cluster = '".$cluster."';");

		return $query->result();
		}
		
	function find_nodeb_from_cell($cell){
			$query = $this->db->query(
			"SELECT nodeb FROM umts_control.cells_database where cell = '".$cell."';");

		return $query->result();
		}
	function find_enodeb_from_cell($cell){
			$query = $this->db->query(
			"SELECT enodeb,enodebid,site FROM lte_control.cells where cell = '".$cell."' limit 1;");

		return $query->result();
		}
	function find_enodebid_from_enodeb($enodeb){
			$query = $this->db->query(
			"SELECT enodebid,site FROM lte_control.cells where enodeb = '".$enodeb."' limit 1;");

		return $query->result();
		}

	function find_max_datetime_from_main_kpis(){
			$query = $this->db->query(
			"select max(datetime) as datetime from umts_kpi.main_kpis_cluster;");

		return $query->result();
		}

	function find_max_datetime_from_main_kpis_lte(){
			$query = $this->db->query(
			"select max(datetime) as datetime from lte_kpi.main_kpis_lte_cluster;");

		return $query->result();
		}		
		
		
	function find_cellid($cellname){
		$query = $this->db->query(
		"select cellid,rnc from umts_control.cells_database where cell = '".$cellname."';");

	return $query->result();
	}

	function find_uf_lte($cellname){
		$query = $this->db->query(
		"select uf from lte_control.cells where cell = '".$cellname."';");

	return $query->result();
	}		

	function reference_date($node){
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		if($node == 'NETWORK'){
			$filter = "'ATAE','40','15'";
		}
		elseif (in_array($node, $regions)) {
			switch ($node) {
				case 'CO':
					$filter = "'ATAE','15'";
					break;
				case 'PRSC':
					$filter = "'ATAE'";
					break;
				case 'NE':
					$filter = "'40'";
					break;
				case 'BASE':
					$filter = "'40'";
					break;
				case 'ES':
					$filter = "'ATAE'";
					break;
				case 'MG':
					$filter = "'15'";
					break;	
			}
		}
		elseif(substr($node,0,3) == 'RNC'){
			$query = $this->db->query(
				"select partition from umts_control.reference_network where name = '".$node."';");
			$ossip = $query->row(0)->partition;
			
			if($ossip == '10.119.90.15'){
				$filter = "'15'";
			} elseif($ossip == '10.119.90.40'){
				$filter = "'40'";
			} elseif($ossip == '10.123.246.22' || $ossip == '10.123.246.23'){
				$filter = "'ATAE'";
			}
		} else {
			$filter = "'ATAE','40','15'";
		}
	
		$query = $this->db->query(
		"select max(datetime)::date from umts_control.log_kpi;");
#		"select max(datetime)::date from umts_control.log_kpi WHERE oss in (".$filter.");");
		#"select max(date) from umts_control.log_daily WHERE oss in (".$filter.");");
		if ($query->num_rows() > 0){
			$return = $query->row(0)->max;
		 } 
		if($return == ""){
			$query = $this->db->query(
			"select max(date) from umts_control.log_daily WHERE oss in (".$filter.");");
			#$referencedate = date("Y-m-d");
			#$referencedate = date('Y-m-d', strtotime($referencedate.' -1 day'));
			#return $referencedate;
			$return = $query->row(0)->max;
		}
		return $return;
	}

	// function reference_date_lte($node){	
	// $query = $this->db->query(
		// "select max(datetime)::date from lte_control.log_kpi;");
		// #"select max(date) from umts_control.log_daily WHERE oss in (".$filter.");");
		// if ($query->num_rows() > 0){
			// $return = $query->row(0)->max;
		 // } 
		// if($return == ""){
			// $query = $this->db->query(
			// "select max(date) from lte_control.log_daily;");
			// #$referencedate = date("Y-m-d");
			// #$referencedate = date('Y-m-d', strtotime($referencedate.' -1 day'));
			// #return $referencedate;
			// $return = $query->row(0)->max;
		// }
	// }
	function reference_date_lte($node){	
		$query = $this->db->query(
		"select max(datetime)::date from lte_control.log_kpi;");
		#"select max(date) from umts_control.log_daily WHERE oss in (".$filter.");");
		if ($query->num_rows() > 0){
			$return = $query->row(0)->max;
		 } 
		if($return == ""){
			$query = $this->db->query(
			"select max(date) from lte_control.log_daily;");
			#$referencedate = date("Y-m-d");
			#$referencedate = date('Y-m-d', strtotime($referencedate.' -1 day'));
			#return $referencedate;
			$return = $query->row(0)->max;
		}
		return $return;
	}	
	
	function reference_date_gsm($node){
		$query = $this->db->query(
		"select max(datetime)::date from lte_control.log_kpi;");
		#"select max(date) from gsm_control.log_daily WHERE oss in (".$filter.");");
		if ($query->num_rows() > 0){
			$return = $query->row(0)->max;
		 } 
		if($return == ""){
			$query = $this->db->query(
			"select max(date) from gsm_control.log_daily;");
			#$referencedate = date("Y-m-d");
			#$referencedate = date('Y-m-d', strtotime($referencedate.' -1 day'));
			#return $referencedate;
			$return = $query->row(0)->max;
		}
		return $return;
	}
	
function reference_date_daily($node){
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		if($node == 'NETWORK'){
			$filter = "'ATAE','15'";
		}
		elseif (in_array($node, $regions)) {
			switch ($node) {
				case 'CO':
					$filter = "'ATAE','15'";
					break;
				case 'PRSC':
					$filter = "'ATAE'";
					break;
				case 'NE':
					$filter = "'40'";
					break;
				case 'BASE':
					$filter = "'40'";
					break;
				case 'ES':
					$filter = "'ATAE'";
					break;
				case 'MG':
					$filter = "'15'";
					break;	
			}
		}
		elseif(substr($node,0,3) == 'RNC'){
			$query = $this->db->query(
				"select partition from umts_control.reference_network where name = '".$node."';");
			$ossip = $query->row(0)->partition;
			
			if($ossip == '10.119.90.15'){
				$filter = "'15'";
			} elseif($ossip == '10.119.90.40'){
				$filter = "'40'";
			} elseif($ossip == '10.123.246.22' || $ossip == '10.123.246.23'){
				$filter = "'ATAE'";
			}
		} else {
			$filter = "'ATAE','15'";
		}
	
		$query = $this->db->query(
		"select min(date) date from (select max(date) date,oss from umts_control.log_daily WHERE oss in (".$filter.") group by oss) t;");
		#"select max(date) from umts_control.log_daily WHERE oss in (".$filter.");");
		#$referencedate = date("Y-m-d");
		#$referencedate = date('Y-m-d', strtotime($referencedate.' -1 day'));
		#return $referencedate;
		$return = $query->row(0)->date;
		return $return;
	}	
	
function reference_date_($node){
			
		$query = $this->db->query(
		"select max(date) date from umts_control.log_daily;");
		$return = $query->row(0)->date;
		return $return;
	}	
	
}