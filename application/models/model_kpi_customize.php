<?php 

class Model_KPI_Customize extends CI_Model{

	function kpi_customize_lte(){				
		$query = $this->db->query(
		"select INITCAP(column_name) as node from information_schema.columns where table_schema in ('lte_kpi') and table_name = 'vw_main_kpis_cell_rate_weekly'
and ordinal_position > 9 order by node");

	return $query->result();
	}
	
		function counter_customize_lte(){				
		$query = $this->db->query(
		"SELECT distinct counter_name as node,functionsubset_id,counter_aggregation,counter_description FROM lte_control.counter_reference
		where counter_enable = 't' AND counter_name not in ('first_paging_succ_times','paging_req_times','paging_succ_times') order by counter_name");
		
		return $query->result();
		}

		function nqi_customize_lte(){				
		$query = $this->db->query(
		"select INITCAP(column_name) as node from information_schema.columns where table_schema in ('lte_kpi') and table_name in ('vw_nqi_daily_cell') and ordinal_position > 10 order by table_name 
");
		
		return $query->result();
		}		

/////////////////////////////////////////////////////// UMTS ///////////////////////////////////
	
		function kpi_customize_umts(){				
		$query = $this->db->query(
"select INITCAP(column_name) as node from information_schema.columns where table_schema in ('umts_kpi') and table_name = 'vw_main_kpis_cell_rate_weekly'
and ordinal_position > 7 order by node" );

	return $query->result();
	}
	
		function counter_customize_umts(){				
		$query = $this->db->query(
		"SELECT distinct counter_name as node,functionsubset_id,counter_aggregation,counter_description
FROM umts_control.counter_reference
where counter_enable = 't' 
order by counter_name");
		
		return $query->result();
		}
		
		function nqi_customize_umts(){				
		$query = $this->db->query(
		"select INITCAP(column_name) as node from information_schema.columns where table_schema in ('umts_kpi') and table_name in ('vw_nqi_daily_cell')  and column_name not in('cellid','date','gp','node','region','rnc','week','year') order by node ");
		
		return $query->result();
		}

		
/////////////////////////////////////////////////////////////////////////////////////////////
		
	function kpi_customize_gsm(){				
		$query = $this->db->query(
		"select INITCAP(column_name) as node from information_schema.columns where table_schema in ('gsm_kpi') and table_name = 'vw_main_kpis_cell_rate_weekly'
and ordinal_position > 6 and column_name not in ('node') order by node");

	return $query->result();
	}
	
		function counter_customize_gsm(){				
		$query = $this->db->query(
		"SELECT distinct counter_name as node,functionsubset_id,counter_aggregation,counter_description FROM gsm_control.counter_reference
		where counter_enable = 't' order by counter_name");
		
		return $query->result();
		}		
	
/////////////////////////////////////////////////////// APAGUE AQUI ///////////////////////////////////////////////

/*	function kpi_customize_UMTS_Elementos(){				
		$query = $this->db->query(
		"select distinct rnc as node from umts_control.cells_db
union
select distinct concat('REG ', region) as node from umts_control.cells_database
union
select distinct concat ('UF ', substring(cluster,1,2))as node from umts_control.cells_database where cluster is not null
union
select distinct concat ('CITY ', cidade) as node from umts_control.cells_database where cidade is not null
union
select distinct concat ('CLUSTER ', cluster) as node from umts_control.cells_database
union
select distinct concat('CS_CLUSTER ',cluster) as node from umts_control.claro_cluster where user_created = true
union
SELECT distinct concat ('NodeB ',nodebname) as node FROM umts_configuration.ucellsetup
order by node");


	return $query->result();
	} */
	
	function kpi_customize_UMTS_Elementos_RNC(){				
		$query = $this->db->query(
		"select distinct rnc as node from umts_control.cells_db
		order by node");


	return $query->result();
	}
	
	function kpi_customize_UMTS_Elementos_Reg(){				
		$query = $this->db->query(
		"select distinct (region) as node from umts_control.cells_database
		order by node");


	return $query->result();
	}
	
	function kpi_customize_UMTS_Elementos_UF(){				
		$query = $this->db->query(
		"select distinct (substring(cluster,1,2))as node from umts_control.cells_database where cluster is not null
		order by node");


	return $query->result();
	}
	
	function kpi_customize_UMTS_Elementos_City(){				
		$query = $this->db->query(
		"select distinct (cidade) as node,uf from umts_control.cells_database where cidade is not null
		order by node");


	return $query->result();
	}
	
	function kpi_customize_UMTS_Elementos_Cluster(){				
		$query = $this->db->query(
		"select distinct (cluster) as node from umts_control.cells_database
		order by node");


	return $query->result();
	}
	
	function kpi_customize_UMTS_Elementos_CustomCluster(){				
		$query = $this->db->query(
		"select distinct (cluster) as node from umts_control.claro_cluster where user_created = true
		order by node");


	return $query->result();
	}
	
	function kpi_customize_UMTS_Elementos_NodeB(){				
		$query = $this->db->query(
		"SELECT distinct nodeb as node FROM umts_control.cells_database order by nodeb"); 


	return $query->result();
	}
	
	
	/*	function kpi_customize_GSM_Elementos(){				
		$query = $this->db->query(
		"SELECT DISTINCT concat('REG ',node) as node FROM gsm_kpi.vw_main_kpis_region_rate_daily WHERE date = (SELECT MAX(date)FROM gsm_control.log_daily)::date and node not in ('UNKNOWN')
union
SELECT DISTINCT concat('BSC ',node) as node FROM gsm_kpi.vw_main_kpis_bsc_rate_hourly WHERE date = (SELECT MAX(date) FROM gsm_control.log_daily)::date
union
select distinct concat('UF ',substring(cluster,1,2)) as node from umts_control.cells_database where cluster is not null
UNION
SELECT DISTINCT concat ('CITY ',node) FROM gsm_kpi.vw_main_kpis_cidade_rate_daily WHERE date = (SELECT MAX(date) FROM gsm_control.log_daily)::date
union
SELECT DISTINCT concat ('BTS ',node) FROM gsm_kpi.vw_main_kpis_bts_rate_daily WHERE date = (SELECT MAX(date) FROM gsm_control.log_daily)::date
order by node");

	return $query->result();
	} */
	
	function kpi_customize_GSM_Elementos_Reg(){				
		$query = $this->db->query(
		"SELECT DISTINCT (node) as node FROM gsm_kpi.vw_main_kpis_region_rate_daily WHERE date = (SELECT MAX(date)FROM gsm_control.log_daily)::date and node not in ('UNKNOWN')
		order by node");

	return $query->result();
	}
	
	function kpi_customize_GSM_Elementos_BSC(){				
		$query = $this->db->query(
		"SELECT DISTINCT node FROM gsm_kpi.vw_main_kpis_bsc_rate_daily order by node");

	return $query->result();
	}
	
	function kpi_customize_GSM_Elementos_UF(){				
		$query = $this->db->query(
		"select distinct (substring(cluster,1,2)) as node from umts_control.cells_database where cluster is not null
		order by node");

	return $query->result();
	}
	
	function kpi_customize_GSM_Elementos_City(){				
		$query = $this->db->query(
		"SELECT DISTINCT (node) as node,uf FROM gsm_kpi.vw_main_kpis_cidade_rate_daily WHERE date = (SELECT MAX(date) FROM gsm_control.log_daily)::date
		order by node");

	return $query->result();
	}
	
	function kpi_customize_GSM_Elementos_BTS(){				
		$query = $this->db->query(
		"SELECT DISTINCT (node) as node FROM gsm_kpi.vw_main_kpis_bts_rate_daily WHERE date = (SELECT MAX(date) FROM gsm_control.log_daily)::date
		order by node");

	return $query->result();
	}
	
	/*	function kpi_customize_LTE_Elementos(){				
		$query = $this->db->query(
		"select distinct concat ('CITY ', cidade) as node from umts_control.cells_database where cidade is not null
union
		select distinct concat('REG ',region) as node from lte_control.cells
union
		select distinct concat('UF ',substring(cluster,1,2)) as node from umts_control.cells_database where cluster is not null
union
		SELECT distinct concat('eNodeB ',get_enodeb_name(main_kpis_lte_daily.enodeb,'enodeb')) as node FROM lte_kpi.main_kpis_lte_daily WHERE date = (select max(date) FROM lte_control.log_daily)::date
union
select distinct concat('CLUSTER ',(cluster)) as node from LTE_control.claro_cluster

order by node"); 

	return $query->result();
	} */
	
	function kpi_customize_LTE_Elementos_City(){				
		$query = $this->db->query(
		"SELECT distinct cidade as node,uf FROM lte_control.cells order by node"); 

	return $query->result();
	}
	
	function kpi_customize_LTE_Elementos_Reg(){				
		$query = $this->db->query(
		"select distinct (region) as node from lte_control.cells
		order by node"); 

		return $query->result();
	}
	
	function kpi_customize_LTE_Elementos_UF(){				
		$query = $this->db->query(
		"select distinct (substring(cluster,1,2)) as node from umts_control.cells_database where cluster is not null and (substring(cluster,1,2)) not in ('')
		order by node"); 

	return $query->result();
	}
	
	function kpi_customize_LTE_Elementos_eNodeB(){				
		$query = $this->db->query(
		"SELECT DISTINCT ENODEB as node
FROM lte_control.cells
ORDER BY ENODEB"); 

	return $query->result();
	}
	
	function kpi_customize_LTE_Elementos_Cluster(){				
		$query = $this->db->query(
		"select distinct cluster as node,cluster_id from LTE_control.claro_cluster order by node"); 

	return $query->result();
	}
	

	
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

}