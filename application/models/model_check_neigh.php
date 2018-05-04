<?php 

class Model_check_neigh extends CI_Model{
	

	function maxdate(){
		$query = $this->db->query(
			"
				SELECT MAX(date) as date FROM (
				SELECT date, node, SUM(count) checks FROM 
				(select count(*),date, 'NETWORK' AS node from lte_control.cosite_lte_l2u a GROUP BY date,node
				UNION
				select count(*),date,'NETWORK' AS node from lte_control.ext_lte b GROUP BY date,node
				UNION
				select count(*),date,'NETWORK' AS node from lte_control.ext_l2u c GROUP BY date,node) checks
				WHERE node = 'NETWORK'
				GROUP BY date, node ORDER BY 1) a
			");

		return $query->result();
	
	}
	
	function network($reportdate,$node){
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT date, node, SUM(count) checks FROM 
				(select count(*),date, 'NETWORK' AS node from lte_control.cosite_lte_l2u a GROUP BY date,node
				UNION
				select count(*),date,'NETWORK' AS node from lte_control.ext_lte b GROUP BY date,node
				UNION
				select count(*),date,'NETWORK' AS node from lte_control.ext_l2u c GROUP BY date,node) checks
				WHERE node = 'NETWORK'  AND date <= '".$reportdate."'
				GROUP BY date, node ORDER BY 1, date desc
				LIMIT 60) a ORDER BY date
			");

		return $query->result();
	
	}

	function region($reportdate,$node){
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT date, node, SUM(count) checks FROM 
				(select count(*),date, regional AS node from lte_control.cosite_lte_l2u a GROUP BY date,regional
				UNION
				select count(*),date,region AS node from lte_control.ext_lte b GROUP BY date,region
				UNION
				select count(*),date, region AS node from lte_control.ext_l2u c GROUP BY date,region) checks
				WHERE node = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date, node ORDER BY 1, date desc
				LIMIT 60) a ORDER BY date
			");

		return $query->result();
	
	}

	function uf($reportdate,$node){
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT date, node, SUM(count) checks FROM 
				(select count(*),date, uf_lte AS node from lte_control.cosite_lte_l2u a GROUP BY date,uf_lte
				UNION
				select count(*),date,uf AS node from lte_control.ext_lte b GROUP BY date,uf
				UNION
				select count(*),date, uf AS node from lte_control.ext_l2u c GROUP BY date,uf) checks
				WHERE node = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date, node ORDER BY 1, date desc
				LIMIT 60) a ORDER BY date
			");

		return $query->result();
	
	}

	function city($reportdate,$ibge,$uf){
		$cellname = '"cellname cell db"';
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT date, node, SUM(count) checks FROM 
				(select count(*),date, ibge AS node from lte_control.cosite_lte_l2u a JOIN lte_control.cells d on a.cell_lte = d.cell GROUP BY date,ibge
				UNION
				select count(*),date, ibge AS node from lte_control.ext_lte b JOIN lte_control.cells d ON b.".$cellname." = d.cell GROUP BY date,ibge
				UNION
				select count(*),date, ibge AS node from lte_control.ext_l2u c JOIN (select distinct node, ibge from lte_control.cells) d ON c.node = d.node GROUP BY date,ibge) checks
				WHERE node = '".$ibge."' AND date <= '".$reportdate."'
				GROUP BY date, node ORDER BY 1, date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function cluster($reportdate,$node){
		$cellname = '"cellname cell db"';
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT date, node, SUM(count) checks FROM 
				(select count(*),date, claro_cluster.cluster AS node from lte_control.cosite_lte_l2u a JOIN lte_control.cells d on a.cell_lte = d.cell JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
					 JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date, claro_cluster.cluster AS node from lte_control.ext_lte b JOIN lte_control.cells d ON b.".$cellname." = d.cell JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
					 JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date, cluster AS node from lte_control.ext_l2u c JOIN (select distinct node, claro_cluster.cluster from lte_control.cells d JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
					 JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id) d ON c.node = d.node GROUP BY date,cluster) checks 
					 WHERE node = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date, node ORDER BY 1, date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function enodebs($reportdate,$node){
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT date, node, SUM(count) checks FROM 
				(select count(*),date, ne AS node from lte_control.cosite_lte_l2u a GROUP BY date,ne
				UNION
				select count(*),date, node AS node from lte_control.ext_lte b GROUP BY date,node
				UNION
				select count(*),date, node AS node from lte_control.ext_l2u c GROUP BY date,node) checks
				WHERE node = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date, node ORDER BY 1, date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}
	
///////////////////////////////////////////////// EXTERNAL LTE TO UMTS //////////////////////////////////////////////	

	function external_network($reportdate,$node){
		
		$query = $this->db->query(
			"
			SELECT * FROM (
			SELECT 'NETWORK' as node, count(\"Uarfcn\") uarfcn, count(\"PSC\") psc, count(\"LAC\") lac, date
			FROM lte_control.ext_l2u
			WHERE date <= '".$reportdate."'
			GROUP BY date
			ORDER BY date desc
			LIMIT 15
			)a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_region($reportdate,$node){
		
		$query = $this->db->query(
			"
			SELECT * FROM (
			SELECT region, count(\"Uarfcn\") uarfcn, count(\"PSC\") psc, count(\"LAC\") lac, date
			FROM lte_control.ext_l2u 
			WHERE region = '".$node."' AND date <= '".$reportdate."'
			GROUP BY region,date
			ORDER BY date desc
			LIMIT 15
			)a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_uf($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT uf, count(\"Uarfcn\") uarfcn, count(\"PSC\") psc, count(\"LAC\") lac, date
				FROM lte_control.ext_l2u 
				WHERE uf = '".$node."' AND date <= '".$reportdate."'
				GROUP BY uf,date
				ORDER BY date desc
				LIMIT 15
				)a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_cidades($reportdate,$ibge,$uf){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT ibge,count(\"Uarfcn\") uarfcn, count(\"PSC\") psc, count(\"LAC\") lac, date
				FROM lte_control.ext_l2u a JOIN (select distinct node, ibge from lte_control.cells) d ON a.node = d.node 
				WHERE ibge = ".$ibge." AND date <= '".$reportdate."'
				GROUP BY ibge,date
				ORDER BY date desc
				LIMIT 15
				)a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_cluster($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT cluster, count(\"Uarfcn\") uarfcn, count(\"PSC\") psc, count(\"LAC\") lac, date
				FROM lte_control.ext_l2u a JOIN (select distinct node, claro_cluster.cluster from lte_control.cells d JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
				 JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id) d ON a.node = d.node 
				WHERE cluster = '".$node."' AND date <= '".$reportdate."'
				GROUP BY cluster,date
				ORDER BY date desc
				LIMIT 15
				)a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_enodebs($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT node, count(\"Uarfcn\") uarfcn, count(\"PSC\") psc, count(\"LAC\") lac, date
				FROM lte_control.ext_l2u 
				WHERE node = '".$node."' AND date <= '".$reportdate."'
				GROUP BY node,date
				ORDER BY date desc
				LIMIT 15
				)a ORDER BY date
			"
		);

		return $query->result();
	
	}

///////////////////////////////////////////// EXTERNAL LTE TO LTE //////////////////////////////////////////////////	
	
	function external_network_lte_to_lte($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT 'NETWORK' as node, count(\"PCI\") pci, count(\"EARFCN\") earfcn, count(\"TAC\") tac, date
				FROM lte_control.ext_lte
				WHERE date <= '".$reportdate."' 
				GROUP BY date
				ORDER BY date desc
				LIMIT 15
				)a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_region_lte_to_lte($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT region, count(\"PCI\") pci, count(\"EARFCN\") earfcn, count(\"TAC\") tac, date
				FROM lte_control.ext_lte
				WHERE region = '".$node."' AND date <= '".$reportdate."'
				GROUP BY region,date
				ORDER BY date desc
				LIMIT 15
				)a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_enodebs_lte_to_lte($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT node, count(\"PCI\") pci, count(\"EARFCN\") earfcn, count(\"TAC\") tac, date
				FROM lte_control.ext_lte
				WHERE node = '".$node."' AND date <= '".$reportdate."'
				GROUP BY node,date
				ORDER BY date desc
				LIMIT 15
				)a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_uf_lte_to_lte($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT uf, count(\"PCI\") pci, count(\"EARFCN\") earfcn, count(\"TAC\") tac, date
				FROM lte_control.ext_lte
				WHERE uf = '".$node."' AND date <= '".$reportdate."'
				GROUP BY uf,date
				ORDER BY date desc
				LIMIT 15
				)a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_cidades_lte_to_lte($reportdate,$ibge,$uf){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT ibge,count(\"PCI\") pci, count(\"EARFCN\") earfcn, count(\"TAC\") tac, date
				FROM lte_control.ext_lte a JOIN lte_control.cells d ON a.\"cellname cell db\" = d.cell 
				WHERE ibge = ".$ibge." AND date <= '".$reportdate."'
				GROUP BY ibge,date
				ORDER BY date desc
				LIMIT 15
				)a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_clusters_lte_to_lte($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT claro_cluster.cluster, count(\"PCI\") pci, count(\"EARFCN\") earfcn, count(\"TAC\") tac, date
				FROM lte_control.ext_lte b JOIN lte_control.cells d ON b.\"cellname cell db\" = d.cell JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
				JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id
				WHERE claro_cluster.cluster = '".$node."' AND date <= '".$reportdate."'
				GROUP BY claro_cluster.cluster,date
				ORDER BY date desc
				LIMIT 15
				)a ORDER BY date
			"
		);

		return $query->result();
	
	}

//////////////////////////////////////////////////// COSITES LTE TO UMTS ////////////////////////////////////////////

	function coSites_network_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT 'NETWORK' as node, count(*) checks,date
				FROM lte_control.cosite_lte_l2u
				WHERE date <= '".$reportdate."'
				GROUP BY date
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function coSites_region_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT regional, count(*) checks, date
				FROM lte_control.cosite_lte_l2u 
				where regional = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,regional
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function coSites_enodebs_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT ne, count(*) checks, date
				FROM lte_control.cosite_lte_l2u 
				where ne = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,ne
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function coSites_uf_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (
				SELECT uf_lte, count(*) checks, date
				FROM lte_control.cosite_lte_l2u 
				where uf_lte = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,uf_lte
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function coSites_cidades_lte_to_umts($reportdate,$ibge,$uf){
		
		$query = $this->db->query(
			"
				SELECT * FROM(
				SELECT ibge, count(*) checks, date
				FROM lte_control.cosite_lte_l2u a JOIN lte_control.cells d on a.cell_lte = d.cell
				WHERE ibge = ".$ibge." AND date <= '".$reportdate."'
				GROUP BY date,ibge
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function coSites_clusters_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM(
				SELECT claro_cluster.cluster, count(*) checks, date
				FROM lte_control.cosite_lte_l2u a JOIN lte_control.cells d on a.cell_lte = d.cell JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
				JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id 
				WHERE claro_cluster.cluster = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,claro_cluster.cluster
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

///////////////////////////////////////////////////////////////// TABELA ////////////////////////////////////////////

	function tabela_network($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT date, 'NETWORK' AS node, COALESCE(SUM(count) filter (WHERE chk = 'ext_l2u'),0) ext_l2u,
				COALESCE(SUM(count) filter (WHERE chk = 'ext_lte'),0) ext_lte,
				COALESCE(SUM(count) filter (WHERE chk = 'cosite_lte_l2u'),0) cosite_lte_l2u, 1 as sortcol FROM
				(select count(*) as count ,date, 'cosite_lte_l2u' AS chk from lte_control.cosite_lte_l2u a GROUP BY date
				UNION
				select count(*) as count,date,'ext_lte' AS chk from lte_control.ext_lte b GROUP BY date
				UNION
				select count(*) as count,date,'ext_l2u' AS chk from lte_control.ext_l2u c GROUP BY date) checks
				WHERE date = '".$reportdate."'
				GROUP BY date
				UNION
				SELECT date, node, COALESCE(SUM(count) filter (WHERE chk = 'ext_l2u'),0) ext_l2u,
				COALESCE(SUM(count) filter (WHERE chk = 'ext_lte'),0) ext_lte,
				COALESCE(SUM(count) filter (WHERE chk = 'cosite_lte_l2u'),0) cosite_lte_l2u, 2 as sortcol FROM
				(select count(*),date, regional AS node, 'cosite_lte_l2u' AS chk from lte_control.cosite_lte_l2u a GROUP BY date,regional
				UNION
				select count(*),date,region AS node, 'ext_lte' AS chk from lte_control.ext_lte b GROUP BY date,region
				UNION
				select count(*),date, region AS node, 'ext_l2u' AS chk from lte_control.ext_l2u c GROUP BY date,region) checks
				WHERE date = '".$reportdate."'
				GROUP BY date, node
				ORDER BY 1,sortcol,node
			"
		);

		return $query->result();
	
	}
	
	function tabela_region($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_l2u') ext_l2u,
				SUM(count) filter (WHERE chk = 'ext_lte') ext_lte,
				SUM(count) filter (WHERE chk = 'cosite_lte_l2u') cosite_lte_l2u, 1 as sortcol FROM
				(select count(*),date, regional AS node, 'cosite_lte_l2u' AS chk from lte_control.cosite_lte_l2u a GROUP BY date,regional
				UNION
				select count(*),date,region AS node, 'ext_lte' AS chk from lte_control.ext_lte b GROUP BY date,region
				UNION
				select count(*),date, region AS node, 'ext_l2u' AS chk from lte_control.ext_l2u c GROUP BY date,region) checks
				WHERE date = '".$reportdate."' AND node = '".$node."'
				GROUP BY date, node
				UNION
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_l2u') ext_l2u,
				SUM(count) filter (WHERE chk = 'ext_lte') ext_lte,
				SUM(count) filter (WHERE chk = 'cosite_lte_l2u') cosite_lte_l2u, 2 as sortcol FROM
				(select count(*),date, uf_lte AS node, 'cosite_lte_l2u' AS chk from lte_control.cosite_lte_l2u a GROUP BY date,uf_lte
				UNION
				select count(*),date,uf AS node, 'ext_lte' AS chk from lte_control.ext_lte b GROUP BY date,uf
				UNION
				select count(*),date, uf AS node, 'ext_l2u' AS chk from lte_control.ext_l2u c GROUP BY date,uf) checks
				WHERE date = '".$reportdate."' AND
				CASE
							WHEN node = ANY (ARRAY['AC'::text, 'DF'::text, 'MS'::text, 'MT'::text, 'RO'::text, 'GO'::text, 'TO'::text]) THEN 'CO'::text
							WHEN node = ANY (ARRAY['AL'::text, 'CE'::text, 'PB'::text, 'PE'::text, 'PI'::text, 'RN'::text]) THEN 'NE'::text
							WHEN node = 'BA'::text THEN 'BASE'::text
							WHEN node = 'MG'::text THEN 'MG'::text
							WHEN node = ANY (ARRAY['PR'::text, 'SC'::text]) THEN 'PRSC'::text
							WHEN node = 'ES'::text THEN 'ES'::text
							ELSE 'UNKNOWN'::text
				END = '".$node."'
				GROUP BY date, node
				ORDER BY 1,sortcol,node
			"
		);

		return $query->result();
	
	}

	function tabela_enodebs($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_l2u') ext_l2u,
				SUM(count) filter (WHERE chk = 'ext_lte') ext_lte,
				SUM(count) filter (WHERE chk = 'cosite_lte_l2u') cosite_lte_l2u FROM
				(select count(*),date, ne AS node, 'cosite_lte_l2u' AS chk from lte_control.cosite_lte_l2u a GROUP BY date,ne
				UNION
				select count(*),date,node AS node, 'ext_lte' AS chk from lte_control.ext_lte b GROUP BY date,node
				UNION
				select count(*),date, node AS node, 'ext_l2u' AS chk from lte_control.ext_l2u c GROUP BY date,node) checks
				WHERE date = '".$reportdate."' 
				AND node = '".$node."'
				GROUP BY date, node
			"
		);

		return $query->result();
	
	}

	function tabela_uf($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_l2u') ext_l2u,
				SUM(count) filter (WHERE chk = 'ext_lte') ext_lte,
				SUM(count) filter (WHERE chk = 'cosite_lte_l2u') cosite_lte_l2u, 1 as sortcol FROM
				(select count(*),date, regional AS node, 'cosite_lte_l2u' AS chk from lte_control.cosite_lte_l2u a GROUP BY date,regional
				UNION
				select count(*),date,region AS node, 'ext_lte' AS chk from lte_control.ext_lte b GROUP BY date,region
				UNION
				select count(*),date, region AS node, 'ext_l2u' AS chk from lte_control.ext_l2u c GROUP BY date,region) checks
				WHERE date = '".$reportdate."' AND node = CASE
							WHEN '".$node."' = ANY (ARRAY['AC'::text, 'DF'::text, 'MS'::text, 'MT'::text, 'RO'::text, 'GO'::text, 'TO'::text]) THEN 'CO'::text
							WHEN '".$node."' = ANY (ARRAY['AL'::text, 'CE'::text, 'PB'::text, 'PE'::text, 'PI'::text, 'RN'::text]) THEN 'NE'::text
							WHEN '".$node."' = 'BA'::text THEN 'BASE'::text
							WHEN '".$node."' = 'MG'::text THEN 'MG'::text
							WHEN '".$node."' = ANY (ARRAY['PR'::text, 'SC'::text]) THEN 'PRSC'::text
							WHEN '".$node."' = 'ES'::text THEN 'ES'::text
				END
				GROUP BY date, node
				UNION
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_l2u') ext_l2u,
				SUM(count) filter (WHERE chk = 'ext_lte') ext_lte,
				SUM(count) filter (WHERE chk = 'cosite_lte_l2u') cosite_lte_l2u, 2 as sortcol FROM
				(select count(*),date, uf_lte AS node, 'cosite_lte_l2u' AS chk from lte_control.cosite_lte_l2u a GROUP BY date,uf_lte
				UNION
				select count(*),date,uf AS node, 'ext_lte' AS chk from lte_control.ext_lte b GROUP BY date,uf
				UNION
				select count(*),date, uf AS node, 'ext_l2u' AS chk from lte_control.ext_l2u c GROUP BY date,uf) checks
				WHERE date = '".$reportdate."' AND node = '".$node."'
				GROUP BY date, node
				ORDER BY 1,sortcol,node
			"
		);

		return $query->result();
	
	}

	function tabela_cidades($reportdate,$ibge,$uf){
		
		$query = $this->db->query(
			"
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_l2u') ext_l2u,
				SUM(count) filter (WHERE chk = 'ext_lte') ext_lte,
				SUM(count) filter (WHERE chk = 'cosite_lte_l2u') cosite_lte_l2u FROM
				(select count(*),date, concat(cidade,' - ',d.uf) AS node,ibge, 'cosite_lte_l2u' AS chk from lte_control.cosite_lte_l2u a JOIN lte_control.cells d on a.cell_lte = d.cell GROUP BY date,ibge,concat(cidade,' - ',d.uf)
				UNION
				select count(*),date,concat(cidade,' - ',d.uf) AS node,ibge, 'ext_lte' AS chk from lte_control.ext_lte b JOIN lte_control.cells d ON \"cellname cell db\" = d.cell GROUP BY date,ibge,concat(cidade,' - ',d.uf)
				UNION
				select count(*),date, concat(cidade,' - ',d.uf) AS node,ibge, 'ext_l2u' AS chk from lte_control.ext_l2u c JOIN (select distinct node, cidade, uf, ibge from lte_control.cells) d ON c.node = d.node GROUP BY date,ibge,concat(cidade,' - ',d.uf)) checks
				WHERE date = '".$reportdate."'
				AND ibge = ".$ibge."
				GROUP BY date, node
			"
		);

		return $query->result();
	
	}

	function tabela_clusters($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_l2u') ext_l2u,
				SUM(count) filter (WHERE chk = 'ext_lte') ext_lte,
				SUM(count) filter (WHERE chk = 'cosite_lte_l2u') cosite_lte_l2u FROM
				(select count(*),date, claro_cluster.cluster AS node, 'cosite_lte_l2u' AS chk from lte_control.cosite_lte_l2u a JOIN lte_control.cells d on a.cell_lte = d.cell JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
					 JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date,claro_cluster.cluster AS node, 'ext_lte' AS chk from lte_control.ext_lte b JOIN lte_control.cells d ON b.\"cellname cell db\" = d.cell JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
					 JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date, cluster AS node, 'ext_l2u' AS chk from lte_control.ext_l2u c JOIN (select distinct node, claro_cluster.cluster from lte_control.cells d JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
					 JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id) d ON c.node = d.node GROUP BY date,cluster) checks
				WHERE date = '".$reportdate."' 
				AND node = '".$node."'
				GROUP BY date, node
			"
		);

		return $query->result();
	
	}	
	
		
}
	