<?php 

class Model_check_neigh_umts extends CI_Model{
	

	function maxdate(){
		$query = $this->db->query(
			"
				SELECT MAX(date) as date FROM (
				SELECT date, node, SUM(count) checks FROM 
				(select count(*),date, 'NETWORK' AS node from umts_control.ext_u2l a GROUP BY date,node
				UNION
				select count(*),date, 'NETWORK' AS node from umts_control.ext_umts b GROUP BY date,node
				UNION
				select count(*),date,'NETWORK' AS node from umts_control.cosite_umts_intrafreq c GROUP BY date,node
				UNION
				select count(*),date,'NETWORK' AS node from umts_control.names_ext_umts_u2l d GROUP BY date,node
				UNION
				select count(*),date,'NETWORK' AS node from umts_control.conf_umts_bho d GROUP BY date,node
				UNION
				select count(*),date,'NETWORK' AS node from umts_control.cosite_umts_interfreq d GROUP BY date,node) checks
				WHERE node = 'NETWORK'
				GROUP BY date, node ORDER BY 1) a
			");

		return $query->result();
	
	}
	
	function network($reportdate,$node){
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT date, node, SUM(count) checks FROM 
				(select count(*),date, 'NETWORK' AS node from umts_control.ext_u2l a GROUP BY date,node
				UNION
				select count(*),date, 'NETWORK' AS node from umts_control.ext_umts b GROUP BY date,node
				UNION
				select count(*),date,'NETWORK' AS node from umts_control.cosite_umts_intrafreq c GROUP BY date,node
				UNION
				select count(*),date,'NETWORK' AS node from umts_control.names_ext_umts_u2l d GROUP BY date,node
				UNION
				select count(*),date,'NETWORK' AS node from umts_control.conf_umts_bho d GROUP BY date,node
				UNION
				select count(*),date,'NETWORK' AS node from umts_control.cosite_umts_interfreq d GROUP BY date,node) checks
				WHERE node = 'NETWORK' AND date <= '".$reportdate."'
				GROUP BY date, node ORDER BY 1, date desc
				LIMIT 60) a ORDER BY date
			");

		return $query->result();
	
	}

	function region($reportdate,$node){
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT date, node, SUM(count) checks FROM 
				(select count(*),date, \"Region\" AS node from umts_control.ext_u2l a GROUP BY date,\"Region\"
				UNION
				select count(*),date, region AS node from umts_control.ext_umts b GROUP BY date,region
				UNION
				select count(*),date,region AS node from umts_control.cosite_umts_intrafreq c GROUP BY date,region
				UNION
				select count(*),date,CASE
							WHEN substring(rncname,4,2) = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN substring(rncname,4,2) = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN substring(rncname,4,2) = 'BA' THEN 'BASE'
							WHEN substring(rncname,4,2) = 'MG' THEN 'MG'
							WHEN substring(rncname,4,2) = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN substring(rncname,4,2) = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END AS node from umts_control.names_ext_umts_u2l d 
				GROUP BY date,CASE
							WHEN substring(rncname,4,2) = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN substring(rncname,4,2) = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN substring(rncname,4,2) = 'BA' THEN 'BASE'
							WHEN substring(rncname,4,2) = 'MG' THEN 'MG'
							WHEN substring(rncname,4,2) = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN substring(rncname,4,2) = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END
				UNION
				select count(*),date,CASE
							WHEN uf = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN uf = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN uf = 'BA' THEN 'BASE'
							WHEN uf = 'MG' THEN 'MG'
							WHEN uf = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN uf = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END AS node from umts_control.conf_umts_bho e
				GROUP BY date,CASE
							WHEN uf = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN uf = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN uf = 'BA' THEN 'BASE'
							WHEN uf = 'MG' THEN 'MG'
							WHEN uf = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN uf = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END
				UNION
				select count(*),date,region from umts_control.cosite_umts_interfreq f GROUP BY date,region) checks
				WHERE node = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date, node ORDER BY 1, date desc
				LIMIT 60) a ORDER BY date
			");

		return $query->result();
	
	}

	function uf($reportdate,$node){
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT date, node, SUM(count) checks FROM 
				(select count(*),date, \"UF\" AS node from umts_control.ext_u2l a GROUP BY date,\"UF\"
				UNION
				select count(*),date, uf AS node from umts_control.ext_umts b GROUP BY date,uf
				UNION
				select count(*),date,uf AS node from umts_control.cosite_umts_intrafreq c GROUP BY date,uf
				UNION
				select count(*),date,substring(rncname,4,2) AS node from umts_control.names_ext_umts_u2l d 
				GROUP BY substring(rncname,4,2),date
				UNION
				select count(*),date,uf as node from umts_control.conf_umts_bho e GROUP BY date,uf
				UNION
				select count(*),date,uf from umts_control.cosite_umts_interfreq f GROUP BY date,uf) checks
				WHERE node = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date, node ORDER BY 1, date desc
				LIMIT 60) a ORDER BY date
			");

		return $query->result();
	
	}

	function city($reportdate,$ibge,$uf){
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT date, node, SUM(count) checks FROM 
				(select count(*),date, ibge AS node from umts_control.ext_u2l a JOIN lte_control.cells d on a.\"Cell\" = d.cell GROUP BY date,ibge
				UNION
				select count(*),date, ibge AS node from umts_control.ext_umts b JOIN umts_control.cells_database d ON b.rncname = d.rnc AND b.cellid = d.cellid GROUP BY date,ibge
				UNION
				select count(*),date, ibge AS node from umts_control.cosite_umts_intrafreq c JOIN umts_control.cells_database d ON c.rnc = d.rnc AND c.cellid = d.cellid GROUP BY date,ibge
				UNION
				select count(*),date,ibge AS node from umts_control.names_ext_umts_u2l e JOIN lte_control.cells d on e.cellname_db = d.cell GROUP BY date,ibge
				UNION
				select count(*),date,ibge as node from umts_control.conf_umts_bho f JOIN umts_control.cells_database d ON f.rncname = d.rnc AND f.cellid = d.cellid GROUP BY date,ibge
				UNION
				select count(*),date,ibge from umts_control.cosite_umts_interfreq g JOIN umts_control.cells_database d ON g.rnc = d.rnc AND g.cellid = d.cellid GROUP BY date,ibge) checks
				WHERE node = ".$ibge." AND date <= '".$reportdate."'
				GROUP BY date, node ORDER BY 1, date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function cluster($reportdate,$node){
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT date, node, SUM(count) filter (WHERE chk = 'ext_u2l') ext_u2l,
				SUM(count) filter (WHERE chk = 'ext_umts') ext_umts,
				SUM(count) filter (WHERE chk = 'cosite_umts_intrafreq') cosite_umts_intrafreq,
				SUM(count) filter (WHERE chk = 'names_ext_umts_u2l') names_ext_umts_u2l,
				SUM(count) filter (WHERE chk = 'conf_umts_bho') conf_umts_bho,
				SUM(count) filter (WHERE chk = 'cosite_umts_interfreq') cosite_umts_interfreq
				FROM
				(select count(*),date, claro_cluster.cluster AS node, 'ext_u2l' AS chk from umts_control.ext_u2l a JOIN lte_control.cells d on a.\"Cell\" = d.cell JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
					JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date,claro_cluster.cluster AS node, 'ext_umts' AS chk from umts_control.ext_umts b JOIN umts_control.cells_database d ON b.rncname = d.rnc AND b.cellid = d.cellid JOIN umts_control.cluster_cell ON d.rnc = cluster_cell.rnc AND d.cellid = cluster_cell.cellid
					JOIN umts_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date, claro_cluster.cluster AS node, 'cosite_umts_intrafreq' AS chk from umts_control.cosite_umts_intrafreq c JOIN umts_control.cells_database d ON c.rnc = d.rnc AND c.cellid = d.cellid JOIN umts_control.cluster_cell ON d.rnc = cluster_cell.rnc AND d.cellid = cluster_cell.cellid
					JOIN umts_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date, claro_cluster.cluster AS node, 'names_ext_umts_u2l' AS chk from umts_control.names_ext_umts_u2l e JOIN lte_control.cells d on e.cellname_db = d.cell JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
					JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date, claro_cluster.cluster as node, 'conf_umts_bho' AS chk from umts_control.conf_umts_bho f JOIN umts_control.cells_database d ON f.rncname = d.rnc AND f.cellid = d.cellid JOIN umts_control.cluster_cell ON d.rnc = cluster_cell.rnc AND d.cellid = cluster_cell.cellid
					JOIN umts_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date, claro_cluster.cluster AS node, 'cosite_umts_interfreq' AS chk from umts_control.cosite_umts_interfreq g JOIN umts_control.cells_database d ON g.rnc = d.rnc AND g.cellid = d.cellid JOIN umts_control.cluster_cell ON d.rnc = cluster_cell.rnc AND d.cellid = cluster_cell.cellid
					JOIN umts_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				) checks
				WHERE date = '2018-02-28' 
				AND node = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date, node, date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	// function nodebs($reportdate,$node){
		// $query = $this->db->query(
			// "
				// SELECT date, node, SUM(count) checks FROM 
				// (select count(*),date, ne AS node from lte_control.cosite_lte_l2u a GROUP BY date,ne
				// UNION
				// select count(*),date, node AS node from lte_control.ext_lte b GROUP BY date,node
				// UNION
				// select count(*),date, node AS node from lte_control.ext_l2u c GROUP BY date,node) checks
				// WHERE node = '".$node."'
				// GROUP BY date, node ORDER BY 1
			// "
		// );

		// return $query->result();
	
	// }
	
	function rnc($reportdate,$node){
		$cellname = '"cellname cell db"';
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT date, node, SUM(count) checks FROM 
				(select count(*),date, \"RNC\" AS node from umts_control.ext_u2l a GROUP BY date,\"RNC\"
				UNION
				select count(*),date, rncname AS node from umts_control.ext_umts b GROUP BY date,rncname
				UNION
				select count(*),date,rnc AS node from umts_control.cosite_umts_intrafreq c GROUP BY date,rnc
				UNION
				select count(*),date,rncname AS node from umts_control.names_ext_umts_u2l d GROUP BY rncname,date
				UNION
				select count(*),date,rncname as node from umts_control.conf_umts_bho e GROUP BY date,rncname
				UNION
				select count(*),date,rnc from umts_control.cosite_umts_interfreq f GROUP BY date,rnc) checks
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
				SELECT * FROM (SELECT 'NETWORK' as node, count(\"Earfcn\") earfcn, count(\"PCI_CHECK\") psc, count(\"TAC\") lac, date
				FROM umts_control.ext_u2l 
				WHERE date <= '".$reportdate."'
				GROUP BY date
				ORDER BY date desc
				LIMIT 15) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_region($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT \"Region\" region, count(\"Earfcn\") earfcn, count(\"PCI_CHECK\") psc, count(\"TAC\") lac, date
				FROM umts_control.ext_u2l
				WHERE \"Region\" = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,\"Region\"
				ORDER BY date desc,\"Region\"
				LIMIT 15) a ORDER BY date,\"Region\"
			"
		);

		return $query->result();
	
	}

	function external_uf($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT \"UF\" uf, count(\"Earfcn\") earfcn, count(\"PCI_CHECK\") psc, count(\"TAC\") lac, date
				FROM umts_control.ext_u2l
				WHERE \"UF\" = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,\"UF\"
				ORDER BY date desc,\"UF\"
				LIMIT 15) a ORDER BY date,\"UF\"
			"
		);

		return $query->result();
	
	}

	function external_cidades($reportdate,$ibge,$uf){
		
		$query = $this->db->query(
			"
				SELECT * FROM (select ibge, count(\"Earfcn\") earfcn, count(\"PCI_CHECK\") psc, count(\"TAC\") lac, date
				FROM umts_control.ext_u2l a JOIN lte_control.cells d on a.\"Cell\" = d.cell 
				WHERE ibge = ".$ibge." AND date <= '".$reportdate."'
				GROUP BY ibge,date
				ORDER BY date desc
				LIMIT 15) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_cluster($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (select claro_cluster.cluster, count(\"Earfcn\") earfcn, count(\"PCI_CHECK\") psc, count(\"TAC\") lac, date
				FROM umts_control.ext_u2l a JOIN lte_control.cells d on a.\"Cell\" = d.cell JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
				JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id 
				WHERE claro_cluster.cluster = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,claro_cluster.cluster
				ORDER BY date desc
				LIMIT 15) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	// function external_nodebs($reportdate,$node){
		
		// $query = $this->db->query(
			// "
				// SELECT node, count(\"Uarfcn\") uarfcn, count(\"PSC\") psc, count(\"LAC\") lac, date
				// FROM lte_control.ext_l2u 
				// WHERE node = '".$node."'
				// GROUP BY node,date
				// ORDER BY date
			// "
		// );

		// return $query->result();
	
	// }
	
	function external_rnc($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT \"RNC\" rnc, count(\"Earfcn\") earfcn, count(\"PCI_CHECK\") psc, count(\"TAC\") lac, date
				FROM umts_control.ext_u2l
				WHERE \"RNC\" = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,\"RNC\"
				ORDER BY date desc,\"RNC\"
				LIMIT 15) a ORDER BY date,\"RNC\"
			"
		);

		return $query->result();
	
	}	

///////////////////////////////////////////// EXTERNAL LTE TO LTE //////////////////////////////////////////////////	
	
	function external_network_lte_to_lte($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT 'NETWORK' as node, count(\"PSC\") psc, count(\"UARFCN\") uarfcn, count(\"LAC\") lac, date
				FROM umts_control.ext_umts
				WHERE date <= '".$reportdate."'
				GROUP BY date
				ORDER BY date desc
				LIMIT 15) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_region_lte_to_lte($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT region, count(\"PSC\") psc, count(\"UARFCN\") uarfcn, count(\"LAC\") lac, date
				FROM umts_control.ext_umts 
				WHERE region = '".$node."' AND date <= '".$reportdate."'
				GROUP BY region,date
				ORDER BY date desc
				LIMIT 15) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	// function external_nodebs_lte_to_lte($reportdate,$node){
		
		// $query = $this->db->query(
			// "
				// SELECT node, count(\"PCI\") pci, count(\"EARFCN\") earfcn, count(\"TAC\") tac, date
				// FROM lte_control.ext_lte
				// WHERE node = '".$node."'
				// GROUP BY node,date
				// ORDER BY date
			// "
		// );

		// return $query->result();
	
	// }

	function external_uf_lte_to_lte($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT uf, count(\"PSC\") psc, count(\"UARFCN\") uarfcn, count(\"LAC\") lac, date
				FROM umts_control.ext_umts 
				WHERE uf = '".$node."' AND date <= '".$reportdate."'
				GROUP BY uf,date
				ORDER BY date desc
				LIMIT 15) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_cidades_lte_to_lte($reportdate,$ibge,$uf){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT ibge,count(\"PSC\") psc, count(\"UARFCN\") uarfcn, count(a.\"LAC\") lac, date
				FROM umts_control.ext_umts a JOIN umts_control.cells_database d ON a.rncname = d.rnc AND a.cellid = d.cellid
				WHERE ibge = ".$ibge." AND date <= '".$reportdate."'
				GROUP BY ibge,date
				ORDER BY date desc
				LIMIT 15) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function external_clusters_lte_to_lte($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT claro_cluster.cluster, count(\"PSC\") psc, count(\"UARFCN\") uarfcn, count(b.\"LAC\") lac, date
				FROM umts_control.ext_umts b JOIN umts_control.cells_database d ON b.rncname = d.rnc AND b.cellid = d.cellid JOIN umts_control.cluster_cell ON d.rnc = cluster_cell.rnc AND d.cellid = cluster_cell.cellid
				JOIN umts_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id
				WHERE claro_cluster.cluster = '".$node."' AND date <= '".$reportdate."'
				GROUP BY claro_cluster.cluster,date
				ORDER BY date desc
				LIMIT 15) a ORDER BY date 
			"
		);

		return $query->result();
	
	}
	
	function external_rnc_lte_to_lte($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT rncname, count(\"PSC\") psc, count(\"UARFCN\") uarfcn, count(\"LAC\") lac, date
				FROM umts_control.ext_umts 
				WHERE rncname = '".$node."' AND date <= '".$reportdate."'
				GROUP BY rncname,date
				ORDER BY date desc
				LIMIT 15) a ORDER BY date 
			"
		);

		return $query->result();
	
	}	

//////////////////////////////////////////////////// COSITES LTE TO UMTS ////////////////////////////////////////////

	function coSites_network_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT 'NETWORK' as node, count(*) checks,date
				FROM umts_control.cosite_umts_intrafreq
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
				SELECT * FROM (SELECT region, count(*) checks, date
				FROM umts_control.cosite_umts_intrafreq
				where region = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,region
				ORDER BY date desc
				LIMIT 60) a ORDER BY date 
			"
		);

		return $query->result();
	
	}

	// function coSites_nodebs_lte_to_umts($reportdate,$node){
		
		// $query = $this->db->query(
			// "
				// SELECT ne, count(*) checks, date
				// FROM lte_control.cosite_lte_l2u 
				// where ne = '".$node."'
				// GROUP BY date,ne
				// ORDER BY date
			// "
		// );

		// return $query->result();
	
	// }

	function coSites_uf_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT uf, count(*) checks, date
				FROM umts_control.cosite_umts_intrafreq
				where uf = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,uf
				ORDER BY date desc
				LIMIT 60) a ORDER BY date 
			"
		);

		return $query->result();
	
	}

	function coSites_cidades_lte_to_umts($reportdate,$ibge,$uf){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT ibge, count(*) checks, date
				FROM umts_control.cosite_umts_intrafreq c JOIN umts_control.cells_database d ON c.rnc = d.rnc AND c.cellid = d.cellid
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
				SELECT * FROM (SELECT claro_cluster.cluster, count(*) checks, date
				FROM umts_control.cosite_umts_intrafreq c JOIN umts_control.cells_database d ON c.rnc = d.rnc AND c.cellid = d.cellid JOIN umts_control.cluster_cell ON d.rnc = cluster_cell.rnc AND d.cellid = cluster_cell.cellid
				JOIN umts_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id
				WHERE claro_cluster.cluster = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,claro_cluster.cluster
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}
	
	function coSites_rnc_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT rnc, count(*) checks, date
				FROM umts_control.cosite_umts_intrafreq
				where rnc = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,rnc
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

/////////////////////////////////////////////////// NAMES EXTERNAL UMTS TO LTE ///////////////////////////////////////////

	function names_external_network_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT 'NETWORK' as node, count(*) checks, date
				FROM umts_control.names_ext_umts_u2l 
				WHERE date <= '".$reportdate."'
				GROUP BY date
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function names_external_region_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT count(*) checks,CASE
						WHEN substring(rncname,4,2) = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
						WHEN substring(rncname,4,2) = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
						WHEN substring(rncname,4,2) = 'BA' THEN 'BASE'
						WHEN substring(rncname,4,2) = 'MG' THEN 'MG'
						WHEN substring(rncname,4,2) = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
						WHEN substring(rncname,4,2) = 'ES' THEN 'ES'
						ELSE 'UNKNOWN'
					END AS region, date
				FROM umts_control.names_ext_umts_u2l
				WHERE CASE
						WHEN substring(rncname,4,2) = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
						WHEN substring(rncname,4,2) = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
						WHEN substring(rncname,4,2) = 'BA' THEN 'BASE'
						WHEN substring(rncname,4,2) = 'MG' THEN 'MG'
						WHEN substring(rncname,4,2) = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
						WHEN substring(rncname,4,2) = 'ES' THEN 'ES'
						ELSE 'UNKNOWN'
					END = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,CASE
						WHEN substring(rncname,4,2) = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
						WHEN substring(rncname,4,2) = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
						WHEN substring(rncname,4,2) = 'BA' THEN 'BASE'
						WHEN substring(rncname,4,2) = 'MG' THEN 'MG'
						WHEN substring(rncname,4,2) = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
						WHEN substring(rncname,4,2) = 'ES' THEN 'ES'
						ELSE 'UNKNOWN'
					END
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	// function names_external_nodebs_lte_to_umts($reportdate,$node){
		
		// $query = $this->db->query(
			// "
				// SELECT ne, count(*) checks, date
				// FROM lte_control.cosite_lte_l2u 
				// where ne = '".$node."'
				// GROUP BY date,ne
				// ORDER BY date
			// "
		// );

		// return $query->result();
	
	// }

	function names_external_uf_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT count(*) checks,substring(rncname,4,2), date
				FROM umts_control.names_ext_umts_u2l
				WHERE substring(rncname,4,2) = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,substring(rncname,4,2)
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function names_external_cidades_lte_to_umts($reportdate,$ibge,$uf){
		
		$query = $this->db->query(
			"
				SELECT * FROM (select ibge, count(*) checks, date
				FROM umts_control.names_ext_umts_u2l e JOIN lte_control.cells d on e.cellname_db = d.cell
				WHERE ibge = ".$ibge." AND date <= '".$reportdate."'
				GROUP BY ibge,date
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function names_external_clusters_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (select claro_cluster.cluster, count(*) checks, date
				FROM umts_control.names_ext_umts_u2l e JOIN lte_control.cells d on e.cellname_db = d.cell JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
				JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id 
				WHERE claro_cluster.cluster = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,claro_cluster.cluster
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}
	
	function names_external_rnc_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT count(*) checks,rncname rnc, date
				FROM umts_control.names_ext_umts_u2l
				WHERE rncname = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,rncname
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

/////////////////////////////////////////////////////////// Conf Blind Handover UMTS /////////////////////////////////////

	function conf_blind_network_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT 'NETWORK' as node, count(*) checks, date
				FROM umts_control.conf_umts_bho 
				WHERE date <= '".$reportdate."'
				GROUP BY date
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function conf_blind_region_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT count(*) checks,CASE
							WHEN uf = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN uf = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN uf = 'BA' THEN 'BASE'
							WHEN uf = 'MG' THEN 'MG'
							WHEN uf = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN uf = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END AS region, date
					FROM umts_control.conf_umts_bho
					WHERE CASE
							WHEN uf = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN uf = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN uf = 'BA' THEN 'BASE'
							WHEN uf = 'MG' THEN 'MG'
							WHEN uf = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN uf = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END = '".$node."' AND date <= '".$reportdate."'
					GROUP BY date,CASE
							WHEN uf = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN uf = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN uf = 'BA' THEN 'BASE'
							WHEN uf = 'MG' THEN 'MG'
							WHEN uf = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN uf = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END
					ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	// function conf_blind_nodebs_lte_to_umts($reportdate,$node){
		
		// $query = $this->db->query(
			// "
				// SELECT ne, count(*) checks, date
				// FROM lte_control.cosite_lte_l2u 
				// where ne = '".$node."'
				// GROUP BY date,ne
				// ORDER BY date
			// "
		// );

		// return $query->result();
	
	// }

	function conf_blind_uf_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT count(*) checks,uf, date
				FROM umts_control.conf_umts_bho
				WHERE uf = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,uf
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function conf_blind_cidades_lte_to_umts($reportdate,$ibge,$uf){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT ibge, count(*) checks, date
				FROM umts_control.conf_umts_bho f JOIN umts_control.cells_database d ON f.rncname = d.rnc AND f.cellid = d.cellid
				WHERE ibge = ".$ibge." AND date <= '".$reportdate."'
				GROUP BY ibge,date
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

	function conf_blind_clusters_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT claro_cluster.cluster, count(*) checks, date
				FROM umts_control.conf_umts_bho f JOIN umts_control.cells_database d ON f.rncname = d.rnc AND f.cellid = d.cellid JOIN umts_control.cluster_cell ON d.rnc = cluster_cell.rnc AND d.cellid = cluster_cell.cellid
				JOIN umts_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id 
				WHERE claro_cluster.cluster = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,claro_cluster.cluster
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}
	
	function conf_blind_rnc_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT * FROM (SELECT count(*) checks,rncname rnc, date
				FROM umts_control.conf_umts_bho
				WHERE rncname = '".$node."' AND date <= '".$reportdate."'
				GROUP BY date,rncname
				ORDER BY date desc
				LIMIT 60) a ORDER BY date
			"
		);

		return $query->result();
	
	}

///////////////////////////////////////////////////////////// CoSites UMTS Interfreq /////////////////////////////////////

	function coSites_inter_network_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT 'NETWORK' as node, count(*) checks,date
				FROM umts_control.cosite_umts_interfreq 
				GROUP BY date
				ORDER BY date
			"
		);

		return $query->result();
	
	}

	function coSites_inter_region_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT region, count(*) checks, date
				FROM umts_control.cosite_umts_interfreq
				where region = '".$node."'
				GROUP BY date,region
				ORDER BY date
			"
		);

		return $query->result();
	
	}

	// function coSites_inter_nodebs_lte_to_umts($reportdate,$node){
		
		// $query = $this->db->query(
			// "
				// SELECT ne, count(*) checks, date
				// FROM lte_control.cosite_lte_l2u 
				// where ne = '".$node."'
				// GROUP BY date,ne
				// ORDER BY date
			// "
		// );

		// return $query->result();
	
	// }

	function coSites_inter_uf_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT uf, count(*) checks, date
				FROM umts_control.cosite_umts_interfreq
				where uf = '".$node."'
				GROUP BY date,uf
				ORDER BY date
			"
		);

		return $query->result();
	
	}

	function coSites_inter_cidades_lte_to_umts($reportdate,$ibge,$uf){
		
		$query = $this->db->query(
			"
				SELECT ibge, count(*) checks, date
				FROM umts_control.cosite_umts_interfreq c JOIN umts_control.cells_database d ON c.rnc = d.rnc AND c.cellid = d.cellid
				WHERE ibge = ".$ibge."
				GROUP BY date,ibge
				ORDER BY date
			"
		);

		return $query->result();
	
	}

	function coSites_inter_clusters_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT claro_cluster.cluster, count(*) checks, date
				FROM umts_control.cosite_umts_interfreq c JOIN umts_control.cells_database d ON c.rnc = d.rnc AND c.cellid = d.cellid JOIN umts_control.cluster_cell ON d.rnc = cluster_cell.rnc AND d.cellid = cluster_cell.cellid
				JOIN umts_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id
				WHERE claro_cluster.cluster = '".$node."'
				GROUP BY date,claro_cluster.cluster
				ORDER BY date
			"
		);

		return $query->result();
	
	}
	
	function coSites_inter_rnc_lte_to_umts($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT rnc, count(*) checks, date
				FROM umts_control.cosite_umts_interfreq
				where rnc = '".$node."'
				GROUP BY date,rnc
				ORDER BY date
			"
		);

		return $query->result();
	
	}	

///////////////////////////////////////////////////////////////// TABELA ////////////////////////////////////////////

	function tabela_network($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT date, 'NETWORK' AS node, SUM(count) filter (WHERE chk = 'ext_u2l') ext_u2l,
				SUM(count) filter (WHERE chk = 'ext_umts') ext_umts,
				SUM(count) filter (WHERE chk = 'cosite_umts_intrafreq') cosite_umts_intrafreq,
				SUM(count) filter (WHERE chk = 'names_ext_umts_u2l') names_ext_umts_u2l,
				SUM(count) filter (WHERE chk = 'conf_umts_bho') conf_umts_bho,
				SUM(count) filter (WHERE chk = 'cosite_umts_interfreq') cosite_umts_interfreq
				, 1 as sortcol FROM
				(select count(*) as count, date, 'ext_u2l' as chk from umts_control.ext_u2l a GROUP BY date
				UNION
				select count(*) as count,date,'ext_umts' AS chk from umts_control.ext_umts b GROUP BY date
				UNION
				select count(*) as count,date,'cosite_umts_intrafreq' AS chk from umts_control.cosite_umts_intrafreq c GROUP BY date
				UNION
				select count(*) as count,date,'names_ext_umts_u2l' AS chk from umts_control.names_ext_umts_u2l d GROUP BY date
				UNION
				select count(*) as count,date,'conf_umts_bho' AS chk from umts_control.conf_umts_bho e GROUP BY date
				UNION
				select count(*) as count,date,'cosite_umts_interfreq' AS chk from umts_control.cosite_umts_interfreq f GROUP BY date
				) checks
				WHERE date = '".$reportdate."'
				GROUP BY date
				UNION
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_u2l') ext_u2l,
				SUM(count) filter (WHERE chk = 'ext_umts') ext_umts,
				SUM(count) filter (WHERE chk = 'cosite_umts_intrafreq') cosite_umts_intrafreq,
				SUM(count) filter (WHERE chk = 'names_ext_umts_u2l') names_ext_umts_u2l,
				SUM(count) filter (WHERE chk = 'conf_umts_bho') conf_umts_bho,
				SUM(count) filter (WHERE chk = 'cosite_umts_interfreq') cosite_umts_interfreq
				, 2 as sortcol FROM
				(select count(*) as count, date, \"Region\" as node, 'ext_u2l' as chk from umts_control.ext_u2l a GROUP BY date, \"Region\"
				UNION
				select count(*) as count,date,region as node ,'ext_umts' AS chk from umts_control.ext_umts b GROUP BY date,region
				UNION
				select count(*) as count,date,region as node,'cosite_umts_intrafreq' AS chk from umts_control.cosite_umts_intrafreq c GROUP BY date,region
				UNION
				select count(*) as count,date,CASE
							WHEN substring(rncname,4,2) = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN substring(rncname,4,2) = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN substring(rncname,4,2) = 'BA' THEN 'BASE'
							WHEN substring(rncname,4,2) = 'MG' THEN 'MG'
							WHEN substring(rncname,4,2) = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN substring(rncname,4,2) = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END AS node,'names_ext_umts_u2l' AS chk from umts_control.names_ext_umts_u2l d GROUP BY date,CASE
							WHEN substring(rncname,4,2) = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN substring(rncname,4,2) = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN substring(rncname,4,2) = 'BA' THEN 'BASE'
							WHEN substring(rncname,4,2) = 'MG' THEN 'MG'
							WHEN substring(rncname,4,2) = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN substring(rncname,4,2) = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END
				UNION
				select count(*) as count,date,CASE
							WHEN uf = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN uf = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN uf = 'BA' THEN 'BASE'
							WHEN uf = 'MG' THEN 'MG'
							WHEN uf = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN uf = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END AS node,'conf_umts_bho' AS chk from umts_control.conf_umts_bho e GROUP BY date,CASE
							WHEN uf = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN uf = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN uf = 'BA' THEN 'BASE'
							WHEN uf = 'MG' THEN 'MG'
							WHEN uf = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN uf = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END
				UNION
				select count(*) as count,date,region as node,'cosite_umts_interfreq' AS chk from umts_control.cosite_umts_interfreq f GROUP BY date,region
				) checks
				WHERE date = '".$reportdate."'
				GROUP BY date,node
				ORDER BY 1,sortcol,node
			"
		);

		return $query->result();
	
	}
	
	function tabela_region($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_u2l') ext_u2l,
				SUM(count) filter (WHERE chk = 'ext_umts') ext_umts,
				SUM(count) filter (WHERE chk = 'cosite_umts_intrafreq') cosite_umts_intrafreq,
				SUM(count) filter (WHERE chk = 'names_ext_umts_u2l') names_ext_umts_u2l,
				SUM(count) filter (WHERE chk = 'conf_umts_bho') conf_umts_bho,
				SUM(count) filter (WHERE chk = 'cosite_umts_interfreq') cosite_umts_interfreq
				, 1 as sortcol FROM
				(select count(*) as count, date, \"Region\" as node, 'ext_u2l' as chk from umts_control.ext_u2l a GROUP BY date, \"Region\"
				UNION
				select count(*) as count,date,region as node ,'ext_umts' AS chk from umts_control.ext_umts b GROUP BY date,region
				UNION
				select count(*) as count,date,region as node,'cosite_umts_intrafreq' AS chk from umts_control.cosite_umts_intrafreq c GROUP BY date,region
				UNION
				select count(*) as count,date,CASE
							WHEN substring(rncname,4,2) = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN substring(rncname,4,2) = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN substring(rncname,4,2) = 'BA' THEN 'BASE'
							WHEN substring(rncname,4,2) = 'MG' THEN 'MG'
							WHEN substring(rncname,4,2) = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN substring(rncname,4,2) = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END AS node,'names_ext_umts_u2l' AS chk from umts_control.names_ext_umts_u2l d GROUP BY date,CASE
							WHEN substring(rncname,4,2) = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN substring(rncname,4,2) = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN substring(rncname,4,2) = 'BA' THEN 'BASE'
							WHEN substring(rncname,4,2) = 'MG' THEN 'MG'
							WHEN substring(rncname,4,2) = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN substring(rncname,4,2) = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END
				UNION
				select count(*) as count,date,CASE
							WHEN uf = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN uf = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN uf = 'BA' THEN 'BASE'
							WHEN uf = 'MG' THEN 'MG'
							WHEN uf = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN uf = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END AS node,'conf_umts_bho' AS chk from umts_control.conf_umts_bho e GROUP BY date,CASE
							WHEN uf = ANY (ARRAY['AC', 'DF', 'MS', 'MT', 'RO', 'GO', 'TO']) THEN 'CO'
							WHEN uf = ANY (ARRAY['AL', 'CE', 'PB', 'PE', 'PI', 'RN']) THEN 'NE'
							WHEN uf = 'BA' THEN 'BASE'
							WHEN uf = 'MG' THEN 'MG'
							WHEN uf = ANY (ARRAY['PR', 'SC']) THEN 'PRSC'
							WHEN uf = 'ES' THEN 'ES'
							ELSE 'UNKNOWN'
						END
				UNION
				select count(*) as count,date,region as node,'cosite_umts_interfreq' AS chk from umts_control.cosite_umts_interfreq f GROUP BY date,region
				) checks
				WHERE date = '".$reportdate."' AND node = '".$node."'
				GROUP BY date,node
				UNION
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_u2l') ext_u2l,
				SUM(count) filter (WHERE chk = 'ext_umts') ext_umts,
				SUM(count) filter (WHERE chk = 'cosite_umts_intrafreq') cosite_umts_intrafreq,
				SUM(count) filter (WHERE chk = 'names_ext_umts_u2l') names_ext_umts_u2l,
				SUM(count) filter (WHERE chk = 'conf_umts_bho') conf_umts_bho,
				SUM(count) filter (WHERE chk = 'cosite_umts_interfreq') cosite_umts_interfreq
				, 2 as sortcol FROM
				(select count(*) as count, date, \"UF\" as node, 'ext_u2l' as chk from umts_control.ext_u2l a GROUP BY date, \"UF\"
				UNION
				select count(*) as count,date,uf as node ,'ext_umts' AS chk from umts_control.ext_umts b GROUP BY date,uf
				UNION
				select count(*) as count,date,uf as node,'cosite_umts_intrafreq' AS chk from umts_control.cosite_umts_intrafreq c GROUP BY date,uf
				UNION
				select count(*) as count,date,substring(rncname,4,2) AS node,'names_ext_umts_u2l' AS chk from umts_control.names_ext_umts_u2l d 
				 GROUP BY date,substring(rncname,4,2)
				UNION
				select count(*) as count,date,uf node,'conf_umts_bho' AS chk from umts_control.conf_umts_bho e GROUP BY date,uf
				UNION
				select count(*) as count,date,uf as node,'cosite_umts_interfreq' AS chk from umts_control.cosite_umts_interfreq f GROUP BY date,uf
				) checks
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

	// function tabela_nodebs($reportdate,$node){
		
		// $query = $this->db->query(
			// "
				// SELECT date, node, SUM(count) filter (WHERE chk = 'ext_l2u') ext_l2u,
				// SUM(count) filter (WHERE chk = 'ext_lte') ext_lte,
				// SUM(count) filter (WHERE chk = 'cosite_lte_l2u') cosite_lte_l2u FROM
				// (select count(*),date, ne AS node, 'cosite_lte_l2u' AS chk from lte_control.cosite_lte_l2u a GROUP BY date,ne
				// UNION
				// select count(*),date,node AS node, 'ext_lte' AS chk from lte_control.ext_lte b GROUP BY date,node
				// UNION
				// select count(*),date, node AS node, 'ext_l2u' AS chk from lte_control.ext_l2u c GROUP BY date,node) checks
				// WHERE date = '".$reportdate."' 
				// AND node = '".$node."'
				// GROUP BY date, node
			// "
		// );

		// return $query->result();
	
	// }

	function tabela_uf($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_u2l') ext_u2l,
				SUM(count) filter (WHERE chk = 'ext_umts') ext_umts,
				SUM(count) filter (WHERE chk = 'cosite_umts_intrafreq') cosite_umts_intrafreq,
				SUM(count) filter (WHERE chk = 'names_ext_umts_u2l') names_ext_umts_u2l,
				SUM(count) filter (WHERE chk = 'conf_umts_bho') conf_umts_bho,
				SUM(count) filter (WHERE chk = 'cosite_umts_interfreq') cosite_umts_interfreq
				, 1 as sortcol FROM
				(select count(*) as count, date, \"UF\" as node, 'ext_u2l' as chk from umts_control.ext_u2l a GROUP BY date, \"UF\"
				UNION
				select count(*) as count,date,uf as node ,'ext_umts' AS chk from umts_control.ext_umts b GROUP BY date,uf
				UNION
				select count(*) as count,date,uf as node,'cosite_umts_intrafreq' AS chk from umts_control.cosite_umts_intrafreq c GROUP BY date,uf
				UNION
				select count(*) as count,date,substring(rncname,4,2) AS node,'names_ext_umts_u2l' AS chk from umts_control.names_ext_umts_u2l d 
				 GROUP BY date,substring(rncname,4,2)
				UNION
				select count(*) as count,date,uf node,'conf_umts_bho' AS chk from umts_control.conf_umts_bho e GROUP BY date,uf
				UNION
				select count(*) as count,date,uf as node,'cosite_umts_interfreq' AS chk from umts_control.cosite_umts_interfreq f GROUP BY date,uf
				) checks
				WHERE date = '".$reportdate."' AND node = 
				CASE
							WHEN '".$node."' = ANY (ARRAY['AC'::text, 'DF'::text, 'MS'::text, 'MT'::text, 'RO'::text, 'GO'::text, 'TO'::text]) THEN 'CO'::text
							WHEN '".$node."' = ANY (ARRAY['AL'::text, 'CE'::text, 'PB'::text, 'PE'::text, 'PI'::text, 'RN'::text]) THEN 'NE'::text
							WHEN '".$node."' = 'BA'::text THEN 'BASE'::text
							WHEN '".$node."' = 'MG'::text THEN 'MG'::text
							WHEN '".$node."' = ANY (ARRAY['PR'::text, 'SC'::text]) THEN 'PRSC'::text
							WHEN '".$node."' = 'ES'::text THEN 'ES'::text
							ELSE 'UNKNOWN'::text
				END
				GROUP BY date, node
				UNION
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_u2l') ext_u2l,
				SUM(count) filter (WHERE chk = 'ext_umts') ext_umts,
				SUM(count) filter (WHERE chk = 'cosite_umts_intrafreq') cosite_umts_intrafreq,
				SUM(count) filter (WHERE chk = 'names_ext_umts_u2l') names_ext_umts_u2l,
				SUM(count) filter (WHERE chk = 'conf_umts_bho') conf_umts_bho,
				SUM(count) filter (WHERE chk = 'cosite_umts_interfreq') cosite_umts_interfreq
				, 2 as sortcol FROM
				(select count(*) as count, date, \"UF\" as node, 'ext_u2l' as chk from umts_control.ext_u2l a GROUP BY date, \"UF\"
				UNION
				select count(*) as count,date,uf as node ,'ext_umts' AS chk from umts_control.ext_umts b GROUP BY date,uf
				UNION
				select count(*) as count,date,uf as node,'cosite_umts_intrafreq' AS chk from umts_control.cosite_umts_intrafreq c GROUP BY date,uf
				UNION
				select count(*) as count,date,substring(rncname,4,2) AS node,'names_ext_umts_u2l' AS chk from umts_control.names_ext_umts_u2l d 
				 GROUP BY date,substring(rncname,4,2)
				UNION
				select count(*) as count,date,uf node,'conf_umts_bho' AS chk from umts_control.conf_umts_bho e GROUP BY date,uf
				UNION
				select count(*) as count,date,uf as node,'cosite_umts_interfreq' AS chk from umts_control.cosite_umts_interfreq f GROUP BY date,uf
				) checks
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
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_u2l') ext_u2l,
				SUM(count) filter (WHERE chk = 'ext_umts') ext_umts,
				SUM(count) filter (WHERE chk = 'cosite_umts_intrafreq') cosite_umts_intrafreq,
				SUM(count) filter (WHERE chk = 'names_ext_umts_u2l') names_ext_umts_u2l,
				SUM(count) filter (WHERE chk = 'conf_umts_bho') conf_umts_bho,
				SUM(count) filter (WHERE chk = 'cosite_umts_interfreq') cosite_umts_interfreq
				FROM
				(select count(*),date, ibge AS node, 'ext_u2l' AS chk from umts_control.ext_u2l a JOIN lte_control.cells d on a.\"Cell\" = d.cell GROUP BY date,ibge
				UNION
				select count(*),date,ibge AS node, 'ext_umts' AS chk from umts_control.ext_umts b JOIN umts_control.cells_database d ON b.rncname = d.rnc AND b.cellid = d.cellid GROUP BY date,ibge
				UNION
				select count(*),date, ibge AS node, 'cosite_umts_intrafreq' AS chk from umts_control.cosite_umts_intrafreq c JOIN umts_control.cells_database d ON c.rnc = d.rnc AND c.cellid = d.cellid GROUP BY date,ibge
				UNION
				select count(*),date, ibge AS node, 'names_ext_umts_u2l' AS chk from umts_control.names_ext_umts_u2l e JOIN lte_control.cells d on e.cellname_db = d.cell GROUP BY date,ibge
				 UNION
				select count(*),date, ibge as node, 'conf_umts_bho' AS chk from umts_control.conf_umts_bho f JOIN umts_control.cells_database d ON f.rncname = d.rnc AND f.cellid = d.cellid GROUP BY date,ibge
				 UNION
				select count(*),date, ibge AS node, 'cosite_umts_interfreq' AS chk from umts_control.cosite_umts_interfreq g JOIN umts_control.cells_database d ON g.rnc = d.rnc AND g.cellid = d.cellid GROUP BY date,ibge
				) checks
				WHERE date = '".$reportdate."' 
				AND node = ".$ibge."
				GROUP BY date, node
			"
		);

		return $query->result();
	
	}

	function tabela_clusters($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_u2l') ext_u2l,
				SUM(count) filter (WHERE chk = 'ext_umts') ext_umts,
				SUM(count) filter (WHERE chk = 'cosite_umts_intrafreq') cosite_umts_intrafreq,
				SUM(count) filter (WHERE chk = 'names_ext_umts_u2l') names_ext_umts_u2l,
				SUM(count) filter (WHERE chk = 'conf_umts_bho') conf_umts_bho,
				SUM(count) filter (WHERE chk = 'cosite_umts_interfreq') cosite_umts_interfreq
				FROM
				(select count(*),date, claro_cluster.cluster AS node, 'ext_u2l' AS chk from umts_control.ext_u2l a JOIN lte_control.cells d on a.\"Cell\" = d.cell JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
					JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date,claro_cluster.cluster AS node, 'ext_umts' AS chk from umts_control.ext_umts b JOIN umts_control.cells_database d ON b.rncname = d.rnc AND b.cellid = d.cellid JOIN umts_control.cluster_cell ON d.rnc = cluster_cell.rnc AND d.cellid = cluster_cell.cellid
					JOIN umts_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date, claro_cluster.cluster AS node, 'cosite_umts_intrafreq' AS chk from umts_control.cosite_umts_intrafreq c JOIN umts_control.cells_database d ON c.rnc = d.rnc AND c.cellid = d.cellid JOIN umts_control.cluster_cell ON d.rnc = cluster_cell.rnc AND d.cellid = cluster_cell.cellid
					JOIN umts_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date, claro_cluster.cluster AS node, 'names_ext_umts_u2l' AS chk from umts_control.names_ext_umts_u2l e JOIN lte_control.cells d on e.cellname_db = d.cell JOIN lte_control.cluster_cell ON d.site = cluster_cell.enodeb AND d.cellid = cluster_cell.locellid
					JOIN lte_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date, claro_cluster.cluster as node, 'conf_umts_bho' AS chk from umts_control.conf_umts_bho f JOIN umts_control.cells_database d ON f.rncname = d.rnc AND f.cellid = d.cellid JOIN umts_control.cluster_cell ON d.rnc = cluster_cell.rnc AND d.cellid = cluster_cell.cellid
					JOIN umts_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster
				UNION
				select count(*),date, claro_cluster.cluster AS node, 'cosite_umts_interfreq' AS chk from umts_control.cosite_umts_interfreq g JOIN umts_control.cells_database d ON g.rnc = d.rnc AND g.cellid = d.cellid JOIN umts_control.cluster_cell ON d.rnc = cluster_cell.rnc AND d.cellid = cluster_cell.cellid
					JOIN umts_control.claro_cluster ON cluster_cell.clusterid = claro_cluster.cluster_id GROUP BY date,claro_cluster.cluster) checks
				WHERE date = '".$reportdate."' 
				AND node = '".$node."'
				GROUP BY date, node
			"
		);

		return $query->result();
	
	}

	function tabela_rnc($reportdate,$node){
		
		$query = $this->db->query(
			"
				SELECT date, node, SUM(count) filter (WHERE chk = 'ext_u2l') ext_u2l,
				SUM(count) filter (WHERE chk = 'ext_umts') ext_umts,
				SUM(count) filter (WHERE chk = 'cosite_umts_intrafreq') cosite_umts_intrafreq,
				SUM(count) filter (WHERE chk = 'names_ext_umts_u2l') names_ext_umts_u2l,
				SUM(count) filter (WHERE chk = 'conf_umts_bho') conf_umts_bho,
				SUM(count) filter (WHERE chk = 'cosite_umts_interfreq') cosite_umts_interfreq
				FROM
				(select count(*),date, \"RNC\" AS node, 'ext_u2l' AS chk from umts_control.ext_u2l a GROUP BY date,\"RNC\"
				UNION
				select count(*),date,rncname AS node, 'ext_umts' AS chk from umts_control.ext_umts b GROUP BY date,rncname
				UNION
				select count(*),date, rnc AS node, 'cosite_umts_intrafreq' AS chk from umts_control.cosite_umts_intrafreq c GROUP BY date,rnc
				UNION
				select count(*),date, rncname AS node, 'names_ext_umts_u2l' AS chk from umts_control.names_ext_umts_u2l d GROUP BY date,rncname
				 UNION
				select count(*),date, rncname as node, 'conf_umts_bho' AS chk from umts_control.conf_umts_bho e GROUP BY date,rncname
				 UNION
				select count(*),date, rnc AS node, 'cosite_umts_interfreq' AS chk from umts_control.cosite_umts_interfreq f GROUP BY date,rnc
				) checks
				WHERE date = '".$reportdate."' 
				AND node = '".$node."'
				GROUP BY date, node
			"
		);

		return $query->result();
	
	}	
	
		
}
	