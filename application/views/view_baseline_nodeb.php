<script type="text/javascript">
//var reportnename = <?php echo $reportnename;?>
//var node = 'CO';
$(document).ready( function () {
  $('#table2').DataTable( {
    "bPaginate": true,
	processing: true,
	"aaSorting": [],
	"bInfo": false,
	"pageLength": 45
  } );
} );

var reportnename = "<?php echo $reportnename; ?>";
var reportdate = "<?php echo $reportdate; ?>";
</script>
<?php
if ($reportmoname) {
echo "<div id='acc' style='min-width: 98%; max-width: 98%; height: 400px; margin: 0 auto'></div>";
}
?>
<!--<form action="/npsmart/umts/worstcells" name="wcform" method="post">
<input type="hidden" id="rnc" name="rnc" value="" />
<input type="hidden" id="date" name="wcdate" value="" />
<input type="hidden" id="kpi" name="kpi" value="" />
</form>

<form action="/npsmart/umts/weeklyworstcells" name="weekwcform" method="post">
<input type="hidden" id="node" name="node" value="" />
<input type="hidden" id="week" name="week" value="" />
<input type="hidden" id="weeklykpi" name="kpi" value="" />
</form>-->


<div align="left">
<a target="_blank" class="link" href="/npsmart/output/baseline_nodeb_nok.csv">Download MML</a>
</div>
<table id="table_id" class="cell-border stripe compact hover" border="1 solid black" cellspacing="0" width="98%">
    <thead>
        <tr>
			<th rowspan="1" bgcolor="#363636"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">MO</font></th>
			<th style='display:none;'rowspan="1" bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">Type</font></th>
  <?php 
		 $mos = $mos[0]->mo;
		 $mo = explode(",", $mos);	
		 $count = count($mo);
			
 for ($i = 0; $i < $count; $i++) {
	 echo "<th bgcolor='#363636'><div class='vrt'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><a style= 'color:WHITE' onclick='selectmobaselinenodeb(this)'>".$mo[$i]."</a></font></div></th>"; 
 }
 ?>
  			<th rowspan="1" bgcolor="#1C1C1C"><div class='vrt'><font color="#FFFFFF" style="font-family: calibri; font-size:14pt"><a style= 'color:WHITE' onclick='selectmobaselinenodeb(this)'>TOTAL</a></font></div></th>

	</tr>
	</thead>
	<tbody>		

	<?php
	// $bad = "#FAA20A";	
	// #$good = "#009900";
	// $good = "#008000";
	// $yellow = "#FFFF00";
	// $title = "#fd0e07";
	// #$yellow = "#E9AB17";
			$orange = "#FF5E00";
			$bad = "#EE0000";
			$green = "#ADFF2F";
			#$orange = "#FAA20A";
			$yellow = "yellow";
			$title = "#2A4641";
			$good = "92D050";
	
//onclick='selected(this)'
$contador = 0;
foreach($baseline_by_mo as $row){		
	
			 echo "<tr>";		
					echo "<td bgcolor='#E8E8E8' value='".$row->node."'><font style='font-family: calibri; font-size:12pt'><a style='color:#363636' id='".$row->node."' onclick='selectne_baseline(this)' class='node' value='".$row->node."'>".$row->node."</a></font></td>";		
					echo "<td style='display:none;'>".$row->type."</td>";
//$allnodes = $baseline_by_mo[0]->mo;
$allnodes_array = explode(",", $mos);	
//$key = array_search('green', $allnodes_array); 

$avg_discrepancies = $row->avg_discrepancies;
$total_discrepancies = $row->total_discrepancies;
$discrepancies = $row->discrepancies;
$nodes = $row->mo;
$discrepancies_array = explode(",", $discrepancies);	
$nodes_array = explode(",", $nodes);
#$discrepancies[] = $baseline_by_mo[$contador]->discrepancies;

$count_allnodes = count($allnodes_array);
$count = count($discrepancies_array);
$contador = 0;
	for ($i = 0; $i < $count_allnodes; $i++) {
		for ($j = 0; $j < $count; $j++) {
			if($nodes_array[$j] == $allnodes_array[$i]){
				echo "<td bgcolor='".($discrepancies_array[$j] == 0?$good:($discrepancies_array[$j] <= $avg_discrepancies / 4?$yellow:($discrepancies_array[$j] <= $avg_discrepancies/2?'#FFC125':($discrepancies_array[$j] <= ($avg_discrepancies*(3/4))?$orange:$bad))))."'>".$discrepancies_array[$j]."</td>";
				#echo "<td bgcolor='".($discrepancies_array[$j] >= $avg_discrepancies?$bad:($discrepancies_array[$j] > 0?$yellow:$good))."'>".$discrepancies_array[$j]."</td>";
#			 	echo "<td onclick='wcweek(this)'><font color='".($array_overshooters[1] >= 0?$good:$bad)."'>".$array_overshooters[1]."</font></td>";
				#$i++;
				break;
				}
				$contador = $contador +1; 
			}
				if($contador == $count){
				echo "<td>-</td>";	
				}
				$contador = 0;
		
	}
echo "<td bgcolor='#FFFFFF'><font color='#363636'>".$total_discrepancies."</font></td>";
	echo "</tr>";
		}
		
if ($reportnetype == 'rnc' or $reportnetype == 'network') {
		
	echo "<tr>";
	echo "<th bgcolor='#CFCFCF'><font color='#1C1C1C' style='font-family: calibri; font-size:14pt'>TOTAL</font></th>";
	echo "<td style='display:none;'>".$row->type."</td>";
	
$allnodes_array = explode(",", $mos);
$total = $row->total;
$mo_total = $row->mo_total_discrepancies;
$nodes = $row->mo;
$mos_total = explode(",", $mo_total);	
$nodes_array = explode(",", $nodes);

$count_allnodes = count($allnodes_array);
$count = count($mos_total);
$contador = 0;
	for ($i = 0; $i < $count_allnodes; $i++) {
		for ($j = 0; $j < $count; $j++) {
			if($nodes_array[$j] == $allnodes_array[$i]){
				echo "<td bgcolor='#FFFFFF'><font color='#363636''>".$mos_total[$j]."</font></td>";
				break;
				}
				$contador = $contador +1; 
			}
				if($contador == $count){
				echo "<td>-</td>";	
				}
				$contador = 0;
		
	}
		
	echo "<th bgcolor='#FFFFFF'><font color='#1C1C1C'>".$total."</font></th>";
	echo "</tr>";
}	
	?>
	
	</tbody>
</table>

<br><br>
</tbody>
</table>
<!--<div><div id='discrepancies_daily'></div></div>-->
<div id="container" style='min-width: 98%; max-width: 98%; height: 400px; margin: 0 auto'></div>
<br>
</body>
</html>