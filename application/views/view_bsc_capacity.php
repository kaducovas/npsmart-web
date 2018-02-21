<script type="text/javascript">
//var reportnename = <?php echo $reportnename;?>
//var node = 'CO';
var reportnename = "<?php echo $reportnename; ?>";
var reportdate = "<?php echo $reportdate; ?>";
</script>
<?php
if ($reportnetype == 'bsc') {
echo "<div id='content' class='chart_content_large'><div id='acc' class='chart1'></div></div>";
}
?>
<br>
<div align="left">
<a target="_blank" class="link" href="/npsmart/output/weekly_bsc_capacity.csv">Download BSC Capacity</a>
</div>
<div width="100%">

	<table id="table_id" class="cell-border compact hover" border="1 solid black" cellspacing="0" width="80%">

		<thead>
			<tr>
				<th rowspan="6" bgcolor="#2A4641" width="3%"><font color="#FFFFFF" style="font-size:20pt'">BSC</font></th>
				<th style='display:none;'rowspan="6" bgcolor="#3b5998"><font color="#FFFFFF" style="font-size:20pt'">Node</font></th>			
				<th colspan="1" bgcolor="#2A4641" width="24%"><font color="#FFFFFF" style="font-family: calibri; font-size:14pt'">TRX Capacity %</font></th>
				<th colspan="1" bgcolor="#2A4641" width="24%"><font color="#FFFFFF" style="font-family: calibri; font-size:14pt'">PCU %</th>
				<th colspan="1" bgcolor="#2A4641" width="24%"><font color="#FFFFFF" style="font-family: calibri; font-size:14pt'">Interface A (TDM) %</font></th>		
			</tr>
				<tr><th colspan="3" bgcolor="#FF7272"><font style="font-family: calibri; font-size:10pt">Critical: > 80%</font></th></tr>
				<tr><th colspan="3" bgcolor="#FDBD4F"><font style="font-family: calibri; font-size:10pt">Corrective: > 65% - <= 80%</font></th></tr>
				<tr><th colspan="3" bgcolor="#FCFA87"><font style='font-family: calibri; font-size:10pt'>Warning: > 50% - <= 65%</font></th></tr>
				<tr><th colspan="3" bgcolor="#B1D38D"><font style='font-family: calibri; font-size:10pt'>Normal: <= 50%</font></th></tr>	
			<tr>
				<?php 
					// foreach($bsc_capacity_weekly as $row){
					// $weeks = $row->weeks;
					// }
					$weeks = $bsc_capacity_weekly[0]->weeks;
					$week = explode(",", $weeks);		
 
					if (isset($monthnum))
					{
						$months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
						#$months[(int)$monthnum]; 

						for ($i = 1; $i <= 3; $i++) 
						{
						echo "<th bgcolor='#8CA5A0' width='3%'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt''>".$months[(int)$week[3]]."</font></th>";
						echo "<th bgcolor='#8CA5A0' width='3%'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt''>".$months[(int)$week[2]]."</font></th>";
						echo "<th bgcolor='#8CA5A0' width='3%'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt''>".$months[(int)$week[1]]."</font></th>";
						echo "<th bgcolor='#8CA5A0' width='3%'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt''>".$months[(int)$week[0]]."</font></th>";
						}	
	
					}
					elseif (isset($weeknum))
					{
						for ($i = 1; $i <= 3; $i++) 
						{
						//echo "<th style='border-left-width: 1px; border-left-color: #2A4641;' bgcolor='#8CA5A0' width='3%'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt''>W".$week[3]."</font></th>";						
						//echo "<th bgcolor='#8CA5A0' width='8%'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt''>W".$week[2]."</font></th>";
						//echo "<th bgcolor='#8CA5A0' width='8%'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt''>W".$week[1]."</font></th>";
						echo "<th style='border-right-width: 1px; border-right-color: #2A4641;' bgcolor='#8CA5A0' width='8%'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt''>W".$week[0]."</font></th>";
						}
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
			$title = "#2A4641";	
				foreach($bsc_capacity_weekly as $row)
				{	

					$trx = $row->trx;
					$array_0 = array_fill(0, 3, 0);	
					$array_trx = explode(",", $trx);
					$array_trx = array_merge($array_trx, $array_0);	

					$pcu = $row->pcu;
					$array_0 = array_fill(0, 3, 0);	
					$array_pcu = explode(",", $pcu);	
					$array_pcu = array_merge($array_pcu, $array_0);	

					$interface_a_tdm = $row->interface_a_tdm;
					$array_0 = array_fill(0, 3, 0);	
					$array_interface_a_tdm = explode(",", $interface_a_tdm); 
					$array_interface_a_tdm = array_merge($array_interface_a_tdm, $array_0);
						

					echo "<tr>";		
					echo "<td value='".$row->node."'><font style='font-family: calibri; font-size:12pt''><a id='".$row->node."' onclick='selectne(this)' class='node' value='".$row->node."'>".$row->node."</a></font></td>";		
					echo "<td style='display:none;'>".$row->type."</td>";	
										
				//echo "<td style='border-left-width: 1px; border-left-color: #2A4641;' bgcolor='".($array_trx[3] <= 50?$good:($array_trx[3] <= 65?$yellow:($array_trx[3] <= 80?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_trx[3]."%</font></td>";	
				//echo "<td bgcolor='".($array_trx[2] <= 50?$good:($array_trx[2] <= 65?$yellow:($array_trx[2] <= 80?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_trx[2]."</font></td>";	
				//echo "<td bgcolor='".($array_trx[1] <= 50?$good:($array_trx[1] <= 65?$yellow:($array_trx[1] <= 80?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_trx[1]."</font></td>";	
				echo "<td style='border-right-width: 1px; border-right-color: #2A4641;' bgcolor='".($array_trx[0] <= 50?$good:($array_trx[0] <= 65?$yellow:($array_trx[0] <= 80?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_trx[0]."</font></td>";	
				
				//echo "<td style='border-left-width: 1px; border-left-color: #2A4641;' bgcolor='".($array_pcu[3] <= 50?$good:($array_pcu[3] <= 65?$yellow:($array_pcu[3] <= 80?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_pcu[3]."%</font></td>";		
				//echo "<td bgcolor='".($array_pcu[2] <= 50?$good:($array_pcu[2] <= 65?$yellow:($array_pcu[2] <= 80?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_pcu[2]."</font></td>";		
				//echo "<td bgcolor='".($array_pcu[1] <= 50?$good:($array_pcu[1] <= 65?$yellow:($array_pcu[1] <= 80?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_pcu[1]."</font></td>";		
				echo "<td style='border-right-width: 1px; border-right-color: #2A4641;' bgcolor='".($array_pcu[0] <= 50?$good:($array_pcu[0] <= 65?$yellow:($array_pcu[0] <= 80?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_pcu[0]."</font></td>";		

				//echo "<td style='border-left-width: 1px; border-left-color: #2A4641;' bgcolor='".($array_interface_a_tdm[3] <= 50?$good:($array_interface_a_tdm[3] <= 65?$yellow:($array_interface_a_tdm[3] <= 80?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_interface_a_tdm[3]."%</font></td>";
				//echo "<td bgcolor='".($array_interface_a_tdm[2] <= 50?$good:($array_interface_a_tdm[2] <= 65?$yellow:($array_interface_a_tdm[2] <= 80?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_interface_a_tdm[2]."</font></td>";
				//echo "<td bgcolor='".($array_interface_a_tdm[1] <= 50?$good:($array_interface_a_tdm[1] <= 65?$yellow:($array_interface_a_tdm[1] <= 80?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_interface_a_tdm[1]."</font></td>";
				echo "<td style='border-right-width: 1px; border-right-color: #2A4641;' bgcolor='".($array_interface_a_tdm[0] <= 50?$good:($array_interface_a_tdm[0] <= 65?$yellow:($array_interface_a_tdm[0] <= 80?$orange:$bad)))."'><font style='font-family: calibri; font-size:12pt'>".$array_interface_a_tdm[0]."</font></td>";

					echo "</tr>";			
				}
			?>
	
		</tbody>
	</table>

</div>
<br>
</body>
</html>