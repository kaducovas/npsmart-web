<script type="text/javascript">
//var reportnename = <?php echo $reportnename;?>
//var node = 'CO';
var reportnename = "<?php echo $reportnename; ?>";
var reportdate = "<?php echo $reportdate; ?>";
<?php
$bad = "#FF0000";
$good = "#92D050";
$orange = "#FAA20A";
$yellow = "yellow";
$title = "#394E58";			
	foreach($chart_weekly as $row)
	{
		$week[] = $row->week;
		$node[] = $row->node;
		$rf_health_index[] = $row->rf_health_index;
		$mobility[] = $row->mobility;
		$throughput[] = $row->throughput;
		$retention_4g[] = $row->retention_4g;
		$data_performance[] = $row->data_performance;
		$voice_performance[] = $row->voice_performance;
		$availability[] = $row->availability;
		$resources_blocking[] = $row->resources_blocking;
		$efficiency[] = $row->efficiency;
		$interface[] = $row-> interface;	
		$quality_ul[] = $row-> quality_ul;
		$overshooters[] = $row-> overshooters;
		$quality_dl[] = $row-> quality_dl;
		$worst_aging_factor[] = $row-> worst_aging_factor;
		$traffic_load[] = $row-> traffic_load;
		$process_tools[] = $row-> process_tools;
        $composite[] = $row-> composite;			
	}
?>
</script>
<div class="radar_info">
<div class="radar_menu"><font style="font-family: calibri; font-size:18pt" color="#525151">COVERAGE</font></div>
<div align="right"><font style="font-family: calibri; font-size:18pt" color="#525151">INFORMATION</font></div>
<div class="radar_menu_footer_left"><font style="font-family: calibri; font-size:18pt" color="#525151">CAPACITY</font></div>
<div class="radar_menu_footer_right"><font style="font-family: calibri; font-size:18pt" color="#525151">SERVICE</font></div>
</div>	
<div id="acc" class="radar_content">
</div>	
<div class="radar_table">
<table id="table2" class="cell-border stripe hover" border="1 solid black" cellspacing="0" width="100%">
			<tr>
				<?php
				echo "<th rowspan='2' bgcolor='#394E58'><a style= 'color:#FFFFFF' href='#' onclick='selectkpiradar(this)'>".$node[0]."</a></th>";
				?>			
				<th colspan="4" bgcolor="#394E58"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">Radar KPI Score</font></th>
				</tr>
				
			<tr>
				<?php 	
					if (isset($monthnum))
					{
						$months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
						#$months[(int)$monthnum]."</td>"; 

							echo "<th bgcolor='#637881'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>".$months[(int)$week[0]]."</font></th>";
							echo "<th bgcolor='#637881'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>".$months[(int)$week[1]]."</font></th>";
							echo "<th bgcolor='#637881'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>".$months[(int)$week[2]]."</font></th>";
							echo "<th bgcolor='#637881'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>".$months[(int)$week[3]]."</font></th>";
	
					}
					elseif (isset($weeknum))
					{
							echo "<th bgcolor='#637881'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>W".$week[0]."</font></th>";
							echo "<th bgcolor='#637881'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>W".$week[1]."</font></th>";
							echo "<th bgcolor='#637881'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>W".$week[2]."</font></th>";
							echo "<th bgcolor='#637881'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>W".$week[3]."</font></th>";
						
					}
				?>
			</tr>
			
			<tr>
			<th bgcolor="#FFFFFF"><font color = '#B0B0B0'>SW Release & Features</font></th>
			<?php					
				echo "<td bgcolor='orange'><font color = '#B0B0B0' style='font-family: calibri; font-size:12pt'>".$process_tools[0]."</font></td>";
				echo "<td bgcolor='orange'><font color = '#B0B0B0' style='font-family: calibri; font-size:12pt'>".$process_tools[1]."</font></td>";
				echo "<td bgcolor='orange'><font color = '#B0B0B0' style='font-family: calibri; font-size:12pt'>".$process_tools[2]."</font></td>";
				echo "<td bgcolor='orange'><font color = '#B0B0B0' style='font-family: calibri; font-size:12pt'>".$process_tools[3]."</font></td>";
				?>
			</tr>


			<tr>
			<th bgcolor="#FFFFFF"><font color = '#B0B0B0'>Worst Aging Factor</font></th>
			<?php		
				echo "<td bgcolor='orange'><font color = '#B0B0B0' style='font-family: calibri; font-size:12pt'>".$worst_aging_factor[0]."</font></td>";
				echo "<td bgcolor='orange'><font color = '#B0B0B0' style='font-family: calibri; font-size:12pt'>".$worst_aging_factor[1]."</font></td>";
				echo "<td bgcolor='orange'><font color = '#B0B0B0' style='font-family: calibri; font-size:12pt'>".$worst_aging_factor[2]."</font></td>";
				echo "<td bgcolor='orange'><font color = '#B0B0B0' style='font-family: calibri; font-size:12pt'>".$worst_aging_factor[3]."</font></td>";
			    ?>
			</tr>

			<tr>
			<th bgcolor="#FFFFFF"><a style= "color:black" href='#' onclick='selectkpiradar(this)'>Mobility</a></th>
			<?php		
				echo "<td bgcolor='".($mobility[0] >= 8?$good:($mobility[0] >= 6?$yellow:($mobility[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$mobility[0]."</font></td>";
				echo "<td bgcolor='".($mobility[1] >= 8?$good:($mobility[1] >= 6?$yellow:($mobility[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$mobility[1]."</font></td>";
				echo "<td bgcolor='".($mobility[2] >= 8?$good:($mobility[2] >= 6?$yellow:($mobility[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$mobility[2]."</font></td>";
				echo "<td bgcolor='".($mobility[3] >= 8?$good:($mobility[3] >= 6?$yellow:($mobility[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$mobility[3]."</font></td>";
			    ?>
			</tr>

			<tr>
			<th bgcolor="#FFFFFF"><a style= "color:black" href='#' onclick='selectkpiradar(this)'>User Throughput (DL and UL)</a></th>
			<?php						
				echo "<td bgcolor='".($throughput[0] >= 8?$good:($throughput[0] >= 6?$yellow:($throughput[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$throughput[0]."</font></td>";
				echo "<td bgcolor='".($throughput[1] >= 8?$good:($throughput[1] >= 6?$yellow:($throughput[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$throughput[1]."</font></td>";
				echo "<td bgcolor='".($throughput[2] >= 8?$good:($throughput[2] >= 6?$yellow:($throughput[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$throughput[2]."</font></td>";
				echo "<td bgcolor='".($throughput[3] >= 8?$good:($throughput[3] >= 6?$yellow:($throughput[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$throughput[3]."</font></td>";
			    ?>
			</tr>
			
			<tr>
			<th bgcolor="#FFFFFF"><a style= "color:black" href='#' onclick='selectkpiradar(this)'>Service Retention in 4G</a></th>
			<?php		
				echo "<td bgcolor='".($retention_4g[0] >= 8?$good:($retention_4g[0] >= 6?$yellow:($retention_4g[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$retention_4g[0]."</font></td>";
				echo "<td bgcolor='".($retention_4g[1] >= 8?$good:($retention_4g[1] >= 6?$yellow:($retention_4g[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$retention_4g[1]."</font></td>";
				echo "<td bgcolor='".($retention_4g[2] >= 8?$good:($retention_4g[2] >= 6?$yellow:($retention_4g[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$retention_4g[2]."</font></td>";
				echo "<td bgcolor='".($retention_4g[3] >= 8?$good:($retention_4g[3] >= 6?$yellow:($retention_4g[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$retention_4g[3]."</font></td>";
			    ?>
			</tr>
			
			<tr>
			<th bgcolor="#FFFFFF"><a style= "color:black" href='#' onclick='selectkpiradar(this)'>Data Performance</a></th>
			<?php		
				echo "<td bgcolor='".($data_performance[0] >= 8?$good:($data_performance[0] >= 6?$yellow:($data_performance[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$data_performance[0]."</font></td>";
				echo "<td bgcolor='".($data_performance[1] >= 8?$good:($data_performance[1] >= 6?$yellow:($data_performance[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$data_performance[1]."</font></td>";
				echo "<td bgcolor='".($data_performance[2] >= 8?$good:($data_performance[2] >= 6?$yellow:($data_performance[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$data_performance[2]."</font></td>";
				echo "<td bgcolor='".($data_performance[3] >= 8?$good:($data_performance[3] >= 6?$yellow:($data_performance[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$data_performance[3]."</font></td>";
			    ?>
			</tr>
			
			<tr>
			<th bgcolor="#FFFFFF"><a style= "color:black" href='#' onclick='selectkpiradar(this)'>Voice Performance</a></th>
			<?php		
				echo "<td bgcolor='".($voice_performance[0] >= 8?$good:($voice_performance[0] >= 6?$yellow:($voice_performance[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$voice_performance[0]."</font></td>";
				echo "<td bgcolor='".($voice_performance[1] >= 8?$good:($voice_performance[1] >= 6?$yellow:($voice_performance[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$voice_performance[1]."</font></td>";
				echo "<td bgcolor='".($voice_performance[2] >= 8?$good:($voice_performance[2] >= 6?$yellow:($voice_performance[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$voice_performance[2]."</font></td>";
				echo "<td bgcolor='".($voice_performance[3] >= 8?$good:($voice_performance[3] >= 6?$yellow:($voice_performance[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$voice_performance[3]."</font></td>";
			    ?>
			</tr>
			
			<tr>
			<th bgcolor="#FFFFFF"><a style= "color:blue" href='#' onclick='selectkpiradar(this)'>Availability</a></th>
			<?php		
				echo "<td bgcolor='".($availability[0] >= 8?$good:($availability[0] >= 6?$yellow:($availability[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$availability[0]."</font></td>";
				echo "<td bgcolor='".($availability[1] >= 8?$good:($availability[1] >= 6?$yellow:($availability[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$availability[1]."</font></td>";
				echo "<td bgcolor='".($availability[2] >= 8?$good:($availability[2] >= 6?$yellow:($availability[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$availability[2]."</font></td>";
				echo "<td bgcolor='".($availability[3] >= 8?$good:($availability[3] >= 6?$yellow:($availability[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$availability[3]."</font></td>";
			    ?>
			</tr>
			
			<tr>
			<th bgcolor="#FFFFFF"><a style= "color:black" href='#' onclick='selectkpiradar(this)'>Traffic Load</a></th>
			<?php		
				echo "<td bgcolor='".($traffic_load[0] >= 8?$good:($traffic_load[0] >= 6?$yellow:($traffic_load[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$traffic_load[0]."</font></td>";
				echo "<td bgcolor='".($traffic_load[1] >= 8?$good:($traffic_load[1] >= 6?$yellow:($traffic_load[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$traffic_load[1]."</font></td>";
				echo "<td bgcolor='".($traffic_load[2] >= 8?$good:($traffic_load[2] >= 6?$yellow:($traffic_load[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$traffic_load[2]."</font></td>";
				echo "<td bgcolor='".($traffic_load[3] >= 8?$good:($traffic_load[3] >= 6?$yellow:($traffic_load[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$traffic_load[3]."</font></td>";
			    ?>
			</tr>
			
			<tr>
			<th bgcolor="#FFFFFF"><a style= "color:black" href='#' onclick='selectkpiradar(this)'>Resources Blocking</a></th>
			<?php		
				echo "<td bgcolor='".($resources_blocking[0] >= 8?$good:($resources_blocking[0] >= 6?$yellow:($resources_blocking[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$resources_blocking[0]."</font></td>";
				echo "<td bgcolor='".($resources_blocking[1] >= 8?$good:($resources_blocking[1] >= 6?$yellow:($resources_blocking[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$resources_blocking[1]."</font></td>";
				echo "<td bgcolor='".($resources_blocking[2] >= 8?$good:($resources_blocking[2] >= 6?$yellow:($resources_blocking[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$resources_blocking[2]."</font></td>";
				echo "<td bgcolor='".($resources_blocking[3] >= 8?$good:($resources_blocking[3] >= 6?$yellow:($resources_blocking[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$resources_blocking[3]."</font></td>";
			    ?>
			</tr>
			
			<tr>
			<th bgcolor="#FFFFFF"><a style= "color:black" href='#' onclick='selectkpiradar(this)'>Efficiency</a></th>
			<?php		
				echo "<td bgcolor='".($efficiency[0] >= 8?$good:($efficiency[0] >= 6?$yellow:($efficiency[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$efficiency[0]."</font></td>";
				echo "<td bgcolor='".($efficiency[1] >= 8?$good:($efficiency[1] >= 6?$yellow:($efficiency[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$efficiency[1]."</font></td>";
				echo "<td bgcolor='".($efficiency[2] >= 8?$good:($efficiency[2] >= 6?$yellow:($efficiency[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$efficiency[2]."</font></td>";
				echo "<td bgcolor='".($efficiency[3] >= 8?$good:($efficiency[3] >= 6?$yellow:($efficiency[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$efficiency[3]."</font></td>";
			    ?>
			</tr>
			
			<tr>
			<th bgcolor="#FFFFFF"><a style= "color:black" href='#' onclick='selectkpiradar(this)'>Interface (UL RSSI)</a></th>
			<?php		
				echo "<td bgcolor='".($interface[0] >= 8?$good:($interface[0] >= 6?$yellow:($interface[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$interface[0]."</font></td>";
				echo "<td bgcolor='".($interface[1] >= 8?$good:($interface[1] >= 6?$yellow:($interface[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$interface[1]."</font></td>";
				echo "<td bgcolor='".($interface[2] >= 8?$good:($interface[2] >= 6?$yellow:($interface[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$interface[2]."</font></td>";
				echo "<td bgcolor='".($interface[3] >= 8?$good:($interface[3] >= 6?$yellow:($interface[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$interface[3]."</font></td>";
			    ?>
			</tr>
			
			<tr>
			<th bgcolor="#FFFFFF"><a style= "color:black" href='#' onclick='selectkpiradar(this)'>Overshooters</a></th>
			<?php		
				echo "<td bgcolor='".($overshooters[0] >= 8?$good:($overshooters[0] >= 6?$yellow:($overshooters[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$overshooters[0]."</font></td>";
				echo "<td bgcolor='".($overshooters[1] >= 8?$good:($overshooters[1] >= 6?$yellow:($overshooters[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$overshooters[1]."</font></td>";
				echo "<td bgcolor='".($overshooters[2] >= 8?$good:($overshooters[2] >= 6?$yellow:($overshooters[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$overshooters[2]."</font></td>";
				echo "<td bgcolor='".($overshooters[3] >= 8?$good:($overshooters[3] >= 6?$yellow:($overshooters[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$overshooters[3]."</font></td>";
			    ?>
			</tr>
			
			<tr>
			<th bgcolor="#FFFFFF"><a style= "color:black" href='#' onclick='selectkpiradar(this)'>Quality UL</a></th>
			<?php		
				echo "<td bgcolor='".($quality_ul[0] >= 8?$good:($quality_ul[0] >= 6?$yellow:($quality_ul[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$quality_ul[0]."</font></td>";
				echo "<td bgcolor='".($quality_ul[1] >= 8?$good:($quality_ul[1] >= 6?$yellow:($quality_ul[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$quality_ul[1]."</font></td>";
				echo "<td bgcolor='".($quality_ul[2] >= 8?$good:($quality_ul[2] >= 6?$yellow:($quality_ul[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$quality_ul[2]."</font></td>";
				echo "<td bgcolor='".($quality_ul[3] >= 8?$good:($quality_ul[3] >= 6?$yellow:($quality_ul[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$quality_ul[3]."</font></td>";

			    ?>
			</tr>
			
			<tr>
			<th bgcolor="#FFFFFF"><a style= "color:black" href='#' onclick='selectkpiradar(this)'>Quality DL</a></th>
			<?php		
				echo "<td bgcolor='".($quality_dl[0] >= 8?$good:($quality_dl[0] >= 6?$yellow:($quality_dl[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$quality_dl[0]."</font></td>";
				echo "<td bgcolor='".($quality_dl[1] >= 8?$good:($quality_dl[1] >= 6?$yellow:($quality_dl[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$quality_dl[1]."</font></td>";
				echo "<td bgcolor='".($quality_dl[2] >= 8?$good:($quality_dl[2] >= 6?$yellow:($quality_dl[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$quality_dl[2]."</font></td>";
				echo "<td bgcolor='".($quality_dl[3] >= 8?$good:($quality_dl[3] >= 6?$yellow:($quality_dl[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$quality_dl[3]."</font></td>";
			    ?>
			</tr>
			
			<tr>
			<th bgcolor="#FFFFFF"><font color = '#B0B0B0'>RF Health Index</font></th>		
			<?php				   					
				echo "<td bgcolor='orange'><font color = '#B0B0B0' style='font-family: calibri; font-size:12pt'>".$rf_health_index[0]."</font></td>";	
				echo "<td bgcolor='orange'><font color = '#B0B0B0' style='font-family: calibri; font-size:12pt'>".$rf_health_index[1]."</font></td>";	
				echo "<td bgcolor='orange'><font color = '#B0B0B0' style='font-family: calibri; font-size:12pt'>".$rf_health_index[2]."</font></td>";	
				echo "<td bgcolor='orange'><font color = '#B0B0B0' style='font-family: calibri; font-size:12pt'>".$rf_health_index[3]."</font></td>";	
			    ?>
			</tr>
			
			<tr>
			<th bgcolor="#C1CCD2"><a style= "color:#0404B4" href='#' onclick='selectkpiradar(this)'><i>Composite Radar Score</i></a></th>
			<?php		
				echo "<td bgcolor='".($composite[0] >= 8?$good:($composite[0] >= 6?$yellow:($composite[0] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'><b>".$composite[0]."</b></font></td>";
				echo "<td bgcolor='".($composite[1] >= 8?$good:($composite[1] >= 6?$yellow:($composite[1] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'><b>".$composite[1]."</b></font></td>";
				echo "<td bgcolor='".($composite[2] >= 8?$good:($composite[2] >= 6?$yellow:($composite[2] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'><b>".$composite[2]."</b></font></td>";
				echo "<td bgcolor='".($composite[3] >= 8?$good:($composite[3] >= 6?$yellow:($composite[3] >= 4?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'><b>".$composite[3]."</b></font></td>";
			    ?>
			</tr>
	</table>
	</div>
</body>
</html>