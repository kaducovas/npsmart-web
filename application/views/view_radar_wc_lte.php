<script type="text/javascript">
//var reportnename = <?php echo $reportnename;?>
//var node = 'CO';
var reportnename = "<?php echo $reportnename; ?>";
var reportdate = "<?php echo $reportdate; ?>";
jQuery(window).load(function () {
    document.getElementById("loading").style.display = "none";
	document.getElementById("loading_table").style.visibility = "visible";
});
</script>
<div id="loading" style="display:block">
    <p style="text-align:center;"><img src="/npsmart/images/loading_preto.gif" style="width:300px; height:300px;" alt="Loading" /></p>
</div>
<div id="loading_table" align="center" style="visibility:hidden">
<div id="content" class="chart_content_large"><div id="acc" class="chart1"></div></div>
<br>
<div width="100%">

	<form action="/npsmart/umts/worstcells" name="wcform" method="post">
		<input type="hidden" id="wcreportnename" name="reportnename" value="" />
		<input type="hidden" id="wcreportnetype" name="reportnetype" value="" />
		<input type="hidden" id="wctimeagg" name="timeagg" value="" />
		<input type="hidden" id="wcreportdate" name="reportdate" value="" />
		<input type="hidden" id="wckpi" name="kpi" value="" />

		<!--<form action="/npsmart/umts/worstcells" name="wcform" method="post">
		<input type="hidden" id="rnc" name="rnc" value="" />
		<input type="hidden" id="date" name="wcdate" value="" />
		<input type="hidden" id="kpi" name="kpi" value="" />-->
	</form>

	<form action="/npsmart/umts/weeklyworstcells" name="weekwcform" method="post">
		<input type="hidden" id="node" name="node" value="" />
		<input type="hidden" id="week" name="week" value="" />
		<input type="hidden" id="weeklykpi" name="kpi" value="" />
	</form>

	<table id="table_id" class="cell-border compact hover" border="1 solid black" cellspacing="0" width="75%">

		<thead>
			<tr>
				<th rowspan="2" bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Node</font></th>
				<th style='display:none;'rowspan="2" bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Node</font></th>
				<?php
				if($nekpi == 'process_tools') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>SW Release & Features Score</font></th>";
				}
				else if($nekpi == 'worst_aging_factor') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Worst Aging Factor Score</font></th>";	
				}
				else if($nekpi == 'mobility') {
				if($reportnetype == 'cell' or $reportnetype == 'uf' or $reportnetype == 'wc'){
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Good Cells-hour HO X2 Ratio (%)</div></font></th>";	
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Good Cells-hour HO X2 Ratio (Number)</div></font></th>";	
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Bad Cells-hour HO X2 Ratio (Number)</div></font></th>";		
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>HO X2 Ratio SCORE</div></font></th>";	
					echo "<th colspan='1' bgcolor='#7A858A' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Good Cells-hour HO IntraFreq SR (%)</div></font></th>";	
					echo "<th colspan='1' bgcolor='#7A858A' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Good Cells-hour HO IntraFreq SR (Number)</div></font></th>";	
					echo "<th colspan='1' bgcolor='#7A858A' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Bad Cells-hour HO IntraFreq SR (Number)</div></font></th>";		
					echo "<th colspan='1' bgcolor='#7A858A' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>HO IntraFreq SR SCORE</div></font></th>";	
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Good Cells-hour HO InterFreq SR (%)</div></font></th>";	
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Good Cells-hour HO InterFreq SR (Number)</div></font></th>";	
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Bad Cells-hour HO InterFreq SR (Number)</div></font></th>";		
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>HO InterFreq SR SCORE</div></font></th>";						
				}
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Mobility Score</font></th>";
				}
				else if($nekpi == 'throughput') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>User Throughput (DL & UL) Score</font></th>";
				}
				else if($nekpi == 'retention_4g') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Service Retention in 4G Score</font></th>";
				}
				else if($nekpi == 'data_performance') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Data Performance Score</font></th>";
				}
				else if($nekpi == 'voice_performance') {
				if($reportnetype == 'cell' or $reportnetype == 'uf' or $reportnetype == 'wc'){
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Good Cells-hour (%)</div></font></th>";	
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Good Cells-hour (Number)</div></font></th>";	
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Bad Cells-hour (Number)</div></font></th>";		
				}
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Voice Performance Score</font></th>";
				}
				else if($nekpi == 'availability') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Availability Score</font></th>";
				}
				else if($nekpi == 'traffic_load') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Traffic Load Score</font></th>";			
				}
				else if($nekpi == 'resources_blocking') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Resources Blocking Score</font></th>";		
				}
				else if($nekpi == 'efficiency') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Efficiency Score</font></th>";		
				}
				else if($nekpi == 'interface') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Interface (UL RSSI) Score</font></th>";		
				}
				else if($nekpi == 'overshooters') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Overshooters Score</font></th>";		
				}				
				else if($nekpi == 'quality_ul') {
				if($reportnetype == 'cell' or $reportnetype == 'uf' or $reportnetype == 'wc'){
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Good UL Samples (%)</div></font></th>";	
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Good UL Samples (Number)</div></font></th>";	
					echo "<th colspan='1' bgcolor='#909EA4' width='70px'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'><div class='vrt_radar'>Bad UL Samples (Number)</div></font></th>";		
				}
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Quality UL Score</font></th>";		
				}
				else if($nekpi == 'quality_dl') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Quality DL Score</font></th>";	
				}
				else if ($nekpi == 'rf_health_index') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>RF Health Index Score</font></th>";
				}
				else if($nekpi == 'composite') {
				echo "<th colspan='4' bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>Composite RADAR Score</font></th>";
				}
				else{}
				?>
				</tr>
			<tr>
				<?php 
					// foreach($nqi_weekly_region as $row){
					// $weeks = $row->weeks;
					// }
					$weeks = $radar_weekly_region[0]->weeks;
					$week = explode(",", $weeks);		
 
					if (isset($monthnum))
					{
						$months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
						#$months[(int)$monthnum]."</td>"; 

							echo "<th bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>".$months[(int)$week[0]]."</font></th>";
							echo "<th bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>".$months[(int)$week[1]]."</font></th>";
							echo "<th bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>".$months[(int)$week[2]]."</font></th>";
							echo "<th bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>".$months[(int)$week[3]]."</font></th>";	
	
					}
					else if (isset($weeknum))
					{						
					if($reportnetype == 'cell' or $reportnetype == 'uf' or $reportnetype == 'wc'){
					if($nekpi == 'voice_performance' or $nekpi == 'quality_ul') {
					echo "<th colspan='3' bgcolor='#C1CCD2'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>W".$week[3]."</font></th>";	
					}
					if($nekpi == 'mobility') {
					echo "<th colspan='12' bgcolor='#C1CCD2'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>W".$week[3]."</font></th>";	
					}
					}				
							echo "<th bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>W".$week[0]."</font></th>";
							echo "<th bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>W".$week[1]."</font></th>";
							echo "<th bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>W".$week[2]."</font></th>";
							echo "<th bgcolor='#394E58'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>W".$week[3]."</font></th>";
					
					
					}
				?>
			</tr>
		</thead>
	
		<tbody>		

			<?php
			
				$bad = "#FF0000";
				$good = "#92D050";
				$orange = "#FAA20A";
				$yellow = "yellow";
				$title = "#394E58";
				
				foreach($radar_weekly_region as $row)
				{					
					$rf_health_index = $row->rf_health_index;
					$array_0 = array_fill(0, 3, 0);	
					$array_rf_health_index = explode(",", $rf_health_index);	
					$array_rf_health_index = array_merge($array_rf_health_index, $array_0);

					$process_tools = $row->process_tools;
					$array_0 = array_fill(0, 3, 0);	
					$array_process_tools = explode(",", $process_tools);	
					$array_process_tools = array_merge($array_process_tools, $array_0);
					
					$worst_aging_factor = $row->worst_aging_factor;
					$array_0 = array_fill(0, 3, 0);	
					$array_worst_aging_factor = explode(",", $worst_aging_factor);
					$array_worst_aging_factor = array_merge($array_worst_aging_factor, $array_0);

					$mobility = $row->mobility;
					$array_0 = array_fill(0, 3, 0);	
					$array_mobility = explode(",", $mobility);
					$array_mobility = array_merge($array_mobility, $array_0);	
					
					$throughput = $row->throughput;
					$array_0 = array_fill(0, 3, 0);	
					$array_throughput = explode(",", $throughput);
					$array_throughput = array_merge($array_throughput, $array_0);	
					
					$retention_4g = $row->retention_4g;
					$array_0 = array_fill(0, 3, 0);	
					$array_retention_4g = explode(",", $retention_4g);
					$array_retention_4g = array_merge($array_retention_4g, $array_0);	
					
					$data_performance = $row->data_performance;
					$array_0 = array_fill(0, 3, 0);	
					$array_data_performance = explode(",", $data_performance);
					$array_data_performance = array_merge($array_data_performance, $array_0);	
					
					$voice_performance = $row->voice_performance;
					$array_0 = array_fill(0, 3, 0);	
					$array_voice_performance = explode(",", $voice_performance);
					$array_voice_performance = array_merge($array_voice_performance, $array_0);	
					
					$availability = $row->availability;
					$array_0 = array_fill(0, 3, 0);	
					$array_availability = explode(",", $availability);
					$array_availability = array_merge($array_availability, $array_0);	
										
					$traffic_load = $row->traffic_load;
					$array_0 = array_fill(0, 3, 0);	
					$array_traffic_load = explode(",", $traffic_load);
					$array_traffic_load = array_merge($array_traffic_load, $array_0);
					
					$resources_blocking = $row->resources_blocking;
					$array_0 = array_fill(0, 3, 0);	
					$array_resources_blocking = explode(",", $resources_blocking);
					$array_resources_blocking = array_merge($array_resources_blocking, $array_0);	
					
					$efficiency = $row->efficiency;
					$array_0 = array_fill(0, 3, 0);	
					$array_efficiency = explode(",", $efficiency);
					$array_efficiency = array_merge($array_efficiency, $array_0);
					
					$interface = $row->interface;
					$array_0 = array_fill(0, 3, 0);	
					$array_interface = explode(",", $interface);
					$array_interface = array_merge($array_interface, $array_0);	
					
					$quality_ul = $row->quality_ul;
					$array_0 = array_fill(0, 3, 0);	
					$array_quality_ul = explode(",", $quality_ul);
					$array_quality_ul = array_merge($array_quality_ul, $array_0);
					
					$overshooters = $row->overshooters;
					$array_0 = array_fill(0, 3, 0);	
					$array_overshooters = explode(",", $overshooters);
					$array_overshooters = array_merge($array_overshooters, $array_0);	
					
					$quality_dl = $row->quality_dl;
					$array_0 = array_fill(0, 3, 0);	
					$array_quality_dl = explode(",", $quality_dl);
					$array_quality_dl = array_merge($array_quality_dl, $array_0);
					
					$composite = $row->composite;
					$array_0 = array_fill(0, 3, 0);	
					$array_composite = explode(",", $composite);
					$array_composite = array_merge($array_composite, $array_0);

					echo "<tr>";		
					echo "<td value='".$row->node."'><font style='font-family: calibri; font-size:12pt'><a id='".$row->node."' onclick='selectne(this)' class='node' value='".$row->node."'>".$row->node."</a></font></td>";		
					echo "<td style='display:none;'>".$row->type."</td>";	

					if ($nekpi == 'process_tools'){
					echo "<td bgcolor='".($array_process_tools[0] >= 8?$good:($array_process_tools[0] >= 6?$yellow:($array_process_tools[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_process_tools[0]."</font></td>";
					echo "<td bgcolor='".($array_process_tools[1] >= 8?$good:($array_process_tools[1] >= 6?$yellow:($array_process_tools[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_process_tools[1]."</font></td>";
					echo "<td bgcolor='".($array_process_tools[2] >= 8?$good:($array_process_tools[2] >= 6?$yellow:($array_process_tools[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_process_tools[2]."</font></td>";
					echo "<td bgcolor='".($array_process_tools[3] >= 8?$good:($array_process_tools[3] >= 6?$yellow:($array_process_tools[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_process_tools[3]."</font></td>";
					}
					else if ($nekpi == 'worst_aging_factor'){
					echo "<td bgcolor='".($array_worst_aging_factor[0] >= 8?$good:($array_worst_aging_factor[0] >= 6?$yellow:($array_worst_aging_factor[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_worst_aging_factor[0]."</font></td>";
					echo "<td bgcolor='".($array_worst_aging_factor[1] >= 8?$good:($array_worst_aging_factor[1] >= 6?$yellow:($array_worst_aging_factor[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_worst_aging_factor[1]."</font></td>";
					echo "<td bgcolor='".($array_worst_aging_factor[2] >= 8?$good:($array_worst_aging_factor[2] >= 6?$yellow:($array_worst_aging_factor[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_worst_aging_factor[2]."</font></td>";
					echo "<td bgcolor='".($array_worst_aging_factor[3] >= 8?$good:($array_worst_aging_factor[3] >= 6?$yellow:($array_worst_aging_factor[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_worst_aging_factor[3]."</font></td>";
					}
					else if ($nekpi == 'mobility'){
					if($reportnetype == 'cell' or $reportnetype == 'uf' or $reportnetype == 'wc'){
						$total_cell = count($extra_info);
						$j = 0;
						for ($i = 0; $i < $total_cell; $i++) {
								if($extra_info[$i]->node == $row->node){
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->good_cell_x2_handover."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->good_cell_x2_handover_no."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->bad_cell_x2_handover_no."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->x2_handover_radar_score."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->good_cell_intra_freq_ho."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->good_cell_intra_freq_ho_no."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->bad_cell_intra_freq_ho_no."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->intra_freq_ho_radar_score."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->good_cell_inter_freq_ho."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->good_cell_inter_freq_ho_no."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->bad_cell_inter_freq_ho_no."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->inter_freq_ho_radar_score."</font></td>";
									break;
								}
								$j = $j+1;
						}
						if ($j == $total_cell){
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";					
						}
					}
					echo "<td bgcolor='".($array_mobility[0] >= 8?$good:($array_mobility[0] >= 6?$yellow:($array_mobility[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_mobility[0]."</font></td>";
					echo "<td bgcolor='".($array_mobility[1] >= 8?$good:($array_mobility[1] >= 6?$yellow:($array_mobility[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_mobility[1]."</font></td>";
					echo "<td bgcolor='".($array_mobility[2] >= 8?$good:($array_mobility[2] >= 6?$yellow:($array_mobility[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_mobility[2]."</font></td>";
					echo "<td bgcolor='".($array_mobility[3] >= 8?$good:($array_mobility[3] >= 6?$yellow:($array_mobility[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_mobility[3]."</font></td>";
					}
					else if ($nekpi == 'throughput'){
					echo "<td bgcolor='".($array_throughput[0] >= 8?$good:($array_throughput[0] >= 6?$yellow:($array_throughput[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_throughput[0]."</font></td>";
					echo "<td bgcolor='".($array_throughput[1] >= 8?$good:($array_throughput[1] >= 6?$yellow:($array_throughput[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_throughput[1]."</font></td>";
					echo "<td bgcolor='".($array_throughput[2] >= 8?$good:($array_throughput[2] >= 6?$yellow:($array_throughput[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_throughput[2]."</font></td>";
					echo "<td bgcolor='".($array_throughput[3] >= 8?$good:($array_throughput[3] >= 6?$yellow:($array_throughput[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_throughput[3]."</font></td>";
					}
					else if ($nekpi == 'retention_4g'){
					echo "<td bgcolor='".($array_retention_4g[0] >= 8?$good:($array_retention_4g[0] >= 6?$yellow:($array_retention_4g[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_retention_4g[0]."</font></td>";
					echo "<td bgcolor='".($array_retention_4g[1] >= 8?$good:($array_retention_4g[1] >= 6?$yellow:($array_retention_4g[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_retention_4g[1]."</font></td>";
					echo "<td bgcolor='".($array_retention_4g[2] >= 8?$good:($array_retention_4g[2] >= 6?$yellow:($array_retention_4g[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_retention_4g[2]."</font></td>";
					echo "<td bgcolor='".($array_retention_4g[3] >= 8?$good:($array_retention_4g[3] >= 6?$yellow:($array_retention_4g[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_retention_4g[3]."</font></td>";
					}
					else if ($nekpi == 'data_performance'){
					echo "<td bgcolor='".($array_data_performance[0] >= 8?$good:($array_data_performance[0] >= 6?$yellow:($array_data_performance[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_data_performance[0]."</font></td>";
					echo "<td bgcolor='".($array_data_performance[1] >= 8?$good:($array_data_performance[1] >= 6?$yellow:($array_data_performance[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_data_performance[1]."</font></td>";
					echo "<td bgcolor='".($array_data_performance[2] >= 8?$good:($array_data_performance[2] >= 6?$yellow:($array_data_performance[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_data_performance[2]."</font></td>";
					echo "<td bgcolor='".($array_data_performance[3] >= 8?$good:($array_data_performance[3] >= 6?$yellow:($array_data_performance[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_data_performance[3]."</font></td>";
					}
					else if ($nekpi == 'voice_performance'){
					if($reportnetype == 'cell' or $reportnetype == 'uf' or $reportnetype == 'wc'){
						$total_cell = count($extra_info);
						$j = 0;
						for ($i = 0; $i < $total_cell; $i++) {
								if($extra_info[$i]->node == $row->node){
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->good_cells."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->good_cells_no."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->bad_cells_no."</font></td>";
									break;
								}
								$j = $j+1;
						}
						if ($j == $total_cell){
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";					
						}
					}
					echo "<td bgcolor='".($array_voice_performance[0] >= 8?$good:($array_voice_performance[0] >= 6?$yellow:($array_voice_performance[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_voice_performance[0]."</font></td>";
					echo "<td bgcolor='".($array_voice_performance[1] >= 8?$good:($array_voice_performance[1] >= 6?$yellow:($array_voice_performance[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_voice_performance[1]."</font></td>";
					echo "<td bgcolor='".($array_voice_performance[2] >= 8?$good:($array_voice_performance[2] >= 6?$yellow:($array_voice_performance[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_voice_performance[2]."</font></td>";
					echo "<td bgcolor='".($array_voice_performance[3] >= 8?$good:($array_voice_performance[3] >= 6?$yellow:($array_voice_performance[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_voice_performance[3]."</font></td>";
					}
					else if ($nekpi == 'availability'){
					echo "<td bgcolor='".($array_availability[0] >= 8?$good:($array_availability[0] >= 6?$yellow:($array_availability[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_availability[0]."</font></td>";
					echo "<td bgcolor='".($array_availability[1] >= 8?$good:($array_availability[1] >= 6?$yellow:($array_availability[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_availability[1]."</font></td>";
					echo "<td bgcolor='".($array_availability[2] >= 8?$good:($array_availability[2] >= 6?$yellow:($array_availability[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_availability[2]."</font></td>";
					echo "<td bgcolor='".($array_availability[3] >= 8?$good:($array_availability[3] >= 6?$yellow:($array_availability[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_availability[3]."</font></td>";
					}
					else if ($nekpi == 'traffic_load'){
					echo "<td bgcolor='".($array_traffic_load[0] >= 8?$good:($array_traffic_load[0] >= 6?$yellow:($array_traffic_load[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_traffic_load[0]."</font></td>";
					echo "<td bgcolor='".($array_traffic_load[1] >= 8?$good:($array_traffic_load[1] >= 6?$yellow:($array_traffic_load[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_traffic_load[1]."</font></td>";
					echo "<td bgcolor='".($array_traffic_load[2] >= 8?$good:($array_traffic_load[2] >= 6?$yellow:($array_traffic_load[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_traffic_load[2]."</font></td>";
					echo "<td bgcolor='".($array_traffic_load[3] >= 8?$good:($array_traffic_load[3] >= 6?$yellow:($array_traffic_load[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_traffic_load[3]."</font></td>";
					}
					else if ($nekpi == 'resources_blocking'){
					echo "<td bgcolor='".($array_resources_blocking[0] >= 8?$good:($array_resources_blocking[0] >= 6?$yellow:($array_resources_blocking[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_resources_blocking[0]."</font></td>";
					echo "<td bgcolor='".($array_resources_blocking[1] >= 8?$good:($array_resources_blocking[1] >= 6?$yellow:($array_resources_blocking[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_resources_blocking[1]."</font></td>";
					echo "<td bgcolor='".($array_resources_blocking[2] >= 8?$good:($array_resources_blocking[2] >= 6?$yellow:($array_resources_blocking[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_resources_blocking[2]."</font></td>";
					echo "<td bgcolor='".($array_resources_blocking[3] >= 8?$good:($array_resources_blocking[3] >= 6?$yellow:($array_resources_blocking[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_resources_blocking[3]."</font></td>";
					}
					else if ($nekpi == 'efficiency'){
					echo "<td bgcolor='".($array_efficiency[0] >= 8?$good:($array_efficiency[0] >= 6?$yellow:($array_efficiency[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_efficiency[0]."</font></td>";
					echo "<td bgcolor='".($array_efficiency[1] >= 8?$good:($array_efficiency[1] >= 6?$yellow:($array_efficiency[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_efficiency[1]."</font></td>";
					echo "<td bgcolor='".($array_efficiency[2] >= 8?$good:($array_efficiency[2] >= 6?$yellow:($array_efficiency[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_efficiency[2]."</font></td>";
					echo "<td bgcolor='".($array_efficiency[3] >= 8?$good:($array_efficiency[3] >= 6?$yellow:($array_efficiency[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_efficiency[3]."</font></td>";
					}
					else if ($nekpi == 'interface'){
					echo "<td bgcolor='".($array_interface[0] >= 8?$good:($array_interface[0] >= 6?$yellow:($array_interface[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_interface[0]."</font></td>";
					echo "<td bgcolor='".($array_interface[1] >= 8?$good:($array_interface[1] >= 6?$yellow:($array_interface[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_interface[1]."</font></td>";
					echo "<td bgcolor='".($array_interface[2] >= 8?$good:($array_interface[2] >= 6?$yellow:($array_interface[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_interface[2]."</font></td>";
					echo "<td bgcolor='".($array_interface[3] >= 8?$good:($array_interface[3] >= 6?$yellow:($array_interface[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_interface[3]."</font></td>";
					}
					else if ($nekpi == 'overshooters'){
					echo "<td bgcolor='".($array_overshooters[0] >= 8?$good:($array_overshooters[0] >= 6?$yellow:($array_overshooters[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_overshooters[0]."</font></td>";
					echo "<td bgcolor='".($array_overshooters[1] >= 8?$good:($array_overshooters[1] >= 6?$yellow:($array_overshooters[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_overshooters[1]."</font></td>";
					echo "<td bgcolor='".($array_overshooters[2] >= 8?$good:($array_overshooters[2] >= 6?$yellow:($array_overshooters[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_overshooters[2]."</font></td>";
					echo "<td bgcolor='".($array_overshooters[3] >= 8?$good:($array_overshooters[3] >= 6?$yellow:($array_overshooters[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_overshooters[3]."</font></td>";
					}
					else if ($nekpi == 'quality_ul'){
					if($reportnetype == 'cell' or $reportnetype == 'uf' or $reportnetype == 'wc'){
						$total_cell = count($extra_info);
						$j = 0;
						for ($i = 0; $i < $total_cell; $i++) {
								if($extra_info[$i]->node == $row->node){
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->good_ul_samples."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->good_samples_no."</font></td>";
									echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$extra_info[$i]->bad_samples_no."</font></td>";
									break;
								}
								$j = $j+1;
						}
						if ($j == $total_cell){
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";
							echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>-</font></td>";					
						}
					}
					echo "<td bgcolor='".($array_quality_ul[0] >= 8?$good:($array_quality_ul[0] >= 6?$yellow:($array_quality_ul[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_quality_ul[0]."</font></td>";
					echo "<td bgcolor='".($array_quality_ul[1] >= 8?$good:($array_quality_ul[1] >= 6?$yellow:($array_quality_ul[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_quality_ul[1]."</font></td>";
					echo "<td bgcolor='".($array_quality_ul[2] >= 8?$good:($array_quality_ul[2] >= 6?$yellow:($array_quality_ul[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_quality_ul[2]."</font></td>";
					echo "<td bgcolor='".($array_quality_ul[3] >= 8?$good:($array_quality_ul[3] >= 6?$yellow:($array_quality_ul[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_quality_ul[3]."</font></td>";
					}
					else if ($nekpi == 'quality_dl'){
					echo "<td bgcolor='".($array_quality_dl[0] >= 8?$good:($array_quality_dl[0] >= 6?$yellow:($array_quality_dl[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_quality_dl[0]."</font></td>";
					echo "<td bgcolor='".($array_quality_dl[1] >= 8?$good:($array_quality_dl[1] >= 6?$yellow:($array_quality_dl[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_quality_dl[1]."</font></td>";
					echo "<td bgcolor='".($array_quality_dl[2] >= 8?$good:($array_quality_dl[2] >= 6?$yellow:($array_quality_dl[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_quality_dl[2]."</font></td>";
					echo "<td bgcolor='".($array_quality_dl[3] >= 8?$good:($array_quality_dl[3] >= 6?$yellow:($array_quality_dl[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_quality_dl[3]."</font></td>";
					}
					else if ($nekpi == 'rf_health_index'){
					echo "<td bgcolor='".($array_rf_health_index[0] >= 8?$good:($array_rf_health_index[0] >= 6?$yellow:($array_rf_health_index[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_rf_health_index[0]."</font></td>";
					echo "<td bgcolor='".($array_rf_health_index[1] >= 8?$good:($array_rf_health_index[1] >= 6?$yellow:($array_rf_health_index[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_rf_health_index[1]."</font></td>";
					echo "<td bgcolor='".($array_rf_health_index[2] >= 8?$good:($array_rf_health_index[2] >= 6?$yellow:($array_rf_health_index[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_rf_health_index[2]."</font></td>";
					echo "<td bgcolor='".($array_rf_health_index[3] >= 8?$good:($array_rf_health_index[3] >= 6?$yellow:($array_rf_health_index[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_rf_health_index[3]."</font></td>";
					}
					else if ($nekpi == 'composite'){
					echo "<td bgcolor='".($array_composite[0] >= 8?$good:($array_composite[0] >= 6?$yellow:($array_composite[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_composite[0]."</font></td>";
					echo "<td bgcolor='".($array_composite[1] >= 8?$good:($array_composite[1] >= 6?$yellow:($array_composite[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_composite[1]."</font></td>";
					echo "<td bgcolor='".($array_composite[2] >= 8?$good:($array_composite[2] >= 6?$yellow:($array_composite[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_composite[2]."</font></td>";
					echo "<td bgcolor='".($array_composite[3] >= 8?$good:($array_composite[3] >= 6?$yellow:($array_composite[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_composite[3]."</font></td>";
					}
					else{}
					echo "</tr>";	
				}
			?>
	
		</tbody>
	</table>
</div>
</div>
<br>
</body>
</html>