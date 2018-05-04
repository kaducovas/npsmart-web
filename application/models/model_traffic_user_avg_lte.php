<?php 

class Model_traffic_user_avg_lte extends CI_Model{
	
	function traffic_user_avg_daily($node,$reportdate){
		
		$query = $this->db->query(
		"SELECT '".$node."' as node, 
  cell,
  locellid, 
  STRING_AGG(datetime::text, ',' order by datetime) as date,
  STRING_AGG(l_traffic_user_avg::text, ',' order by datetime) as l_traffic_user_avg
  FROM (select locellid, cell, c.datetime, 
  case when l_traffic_user_avg is null then 'null'::text 
else l_traffic_user_avg::text
end 
from (select * from (SELECT cellid, cell from lte_control.cells where enodeb = '".$node."') a
cross join (select distinct datetime from lte_counter.fss_1526726705_hourly where datetime > '".$reportdate."'::timestamp - '10 days'::interval
and (locellid) in (SELECT cellid from lte_control.cells where enodeb = '".$node."')) b) c
left join (select datetime, locellid, l_traffic_user_avg from lte_counter.fss_1526726705_hourly where datetime > '".$reportdate."'::timestamp - '10 days'::interval
and (locellid) in (SELECT cellid from lte_control.cells where enodeb = '".$node."')) d on c.datetime = d.datetime and c.cellid = d.locellid ) f
 group by locellid, cell order by cell
 ;");

	return $query->result();

	}
			

}