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
<div align="left">
&emsp;<a target="_blank" class="link" href="/npsmart/output/weekly_tx_integrity.csv">Download TX Integrity</a>
</div>
<div class="triage_menu">
&emsp;<font color="#8F8F8F" size="4"><b><a style = "color:#8F8F8F" href="#" onclick='selectkpitriage(this)'>Overview</a></b></font>
</div>
<div align="right">
<?php
echo "<font color='#8F8F8F' size='4'><b><a style = 'color:#8F8F8F' href='#' onclick='selectkpitriage(this)'>TX Integrity</a></b></font>&emsp;";
?>
</div>

<div align="center">
<?php 
echo "<font color='#000000' size='5'><b>Week ".$txintegrity_week[0]->week."</b></font>";
?>
</div>

<div id="loading" style="display:block">
<p style="text-align:center;"><img src="/npsmart/images/loading_preto.gif" style="width:300px; height:300px;" alt="Loading" /></p>
</div>

<br>

<div id="loading_table" align="center" style="visibility:hidden">

<?php
if ($reportnetype == 'nodeb') {
echo "<div id='acc' style='min-width: 80%; max-width: 80%; height: 500px; margin: 0 auto'></div>";
}
?>

<br>

	<table id="table_id" class="cell-border compact hover nowrap" border="1 solid black" cellspacing="0" width="95%">

		<thead>
			<tr>
			    <th rowspan="2" bgcolor="#1C1C1C"><font color="#FFFFFF">NODEB</font></th>
				<th rowspan="2" bgcolor="#1C1C1C"><font color="#FFFFFF">REGION</font></th>
				<th rowspan="2" bgcolor="#1C1C1C"><font color="#FFFFFF">RNC</font></th>
				<th rowspan="2" bgcolor="#1C1C1C"><font color="#FFFFFF">UF</font></th>
				<th rowspan="2" bgcolor="#1C1C1C"><font color="#FFFFFF">CIDADE</font></th>
				<th rowspan="2" bgcolor="#1C1C1C"><font color="#FFFFFF">CLUSTER</font></th>
				<th rowspan="2" bgcolor="#1C1C1C"><font color="#FFFFFF">ANI</font></th>
				<!--<th rowspan="2" bgcolor="#1C1C1C"><font color="#FFFFFF">NODET</font></th>-->

								<?php 
					// foreach($unbalance_weekly as $row){
					// $weeks = $row->weeks;
					// }	
 
					if (isset($monthnum)){
						$months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
						echo "<th colspan='11' bgcolor='#1C1C1C' width='50%'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt''>".$months[(int)$week[0]]."</font></th>";	
					}
					elseif (isset($weeknum)){
						echo "<th colspan='11' bgcolor='#1C1C1C' width='50%'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt'>W".$txintegrity_week[0]->week."</font></th>";
					}
				?>
				</tr>			
				<tr>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">TX TYPE</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">DELAY</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">JITTER</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">LOST</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">IUB FLOWCTRL DL DROP</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">IUB FLOWCTRL UL DROP</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">IUB FLOWCTRL DL CONG</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">IUB FLOWCTRL UL CONG</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">ATM DL UTILIZATION</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">ATM UL UTILIZATION</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">TX INTEGRITY</font></div></th>
			</tr>		
		</thead>
	<tbody>	

			<?php
			$verde = '#92D050';
			$amarelo = '#FFFF00';
			$laranja = '#FFC000';
			$vermelho = '#EE0000';
			$bad2 = "#FF7272";
			$good2 = "#B1D38D";
			$bad = "#EE0000";
			$good = "#92D050";
			$orange = "#FAA20A";
			$yellow = "#FFFF00";
			$yellow2 = "#FCFA87";
			$title = "#436260";	
			$bgbad = "#FDE9D9";	
			$bggood = "#FFFFFF";
				

				foreach($txintegrity_week as $row)
				{
					$region = $row->region;
					$uf = $row->uf;
					$cidade = $row->cidade;
					$cluster = $row->cluster;
					$rnc = $row->rnc;
					$nodeb = $row->node;
					$nodet = $row->nodet;
					$tx_type = $row->transt;
					$ani = $row->ani;
					$delay = $row->ping_meandelay;
					$jitter = $row->ping_meanjitter;
					$lost = $row->ping_meanlost;
					$dl_dropnum_lgcport1 = $row->vs_iub_flowctrol_dl_dropnum_lgcport1;
					$ul_dropnum_lgcport1 = $row->vs_iub_flowctrol_ul_dropnum_lgcport1;
					$dl_congtime_lgcport1 = $row->vs_iub_flowctrol_dl_congtime_lgcport1;
					$ul_congtime_lgcport1 = $row->vs_iub_flowctrol_ul_congtime_lgcport1;
					$dl_utilization = $row->atm_dl_utilization;
					$ul_utilization = $row->atm_ul_utilization;
					$tx_integrity = $row->tx_integrity;
				
				echo "<tr>";
					echo "<td bgcolor='#EDEDEB'><b><a href='#' onclick='selectne(this)'>".$nodeb."</a></b></td>";
					echo "<td bgcolor='#FFFFFF'>".$region."</td>";
					echo "<td bgcolor='#FFFFFF'>".$rnc."</td>";
					echo "<td bgcolor='#FFFFFF'>".$uf."</td>";
					echo "<td bgcolor='#FFFFFF'>".$cidade."</td>";
					echo "<td bgcolor='#FFFFFF'>".$cluster."</td>";
					echo "<td bgcolor='#FFFFFF'>".$ani."</td>";
					//echo "<td bgcolor='#FFFFFF'>".$nodet."</td>";
					
					echo "<td bgcolor='#FFFFFF'>".$tx_type."</td>";
					echo "<td bgcolor='".($delay <= 80?$bggood:$bgbad)."'><font color='".($delay <=80?$good:$bad)."'>".$delay."</font></td>";
					echo "<td bgcolor='".($jitter <= 5?$bggood:$bgbad)."'><font color='".($jitter <=5?$good:$bad)."'>".$jitter."</font></td>";
					echo "<td bgcolor='".($lost <= 5?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($lost <=5?$good:$bad)."'>".$lost."</font></td>";
					echo "<td bgcolor='#FFFFFF'>".$dl_dropnum_lgcport1."</td>";
					echo "<td bgcolor='#FFFFFF'>".$ul_dropnum_lgcport1."</td>";
					echo "<td bgcolor='#FFFFFF'>".$dl_congtime_lgcport1."</td>";
					echo "<td bgcolor='#FFFFFF'>".$ul_congtime_lgcport1."</td>";					
					echo "<td bgcolor='".($dl_utilization <= 80?$bggood:$bgbad)."'><font color='".($dl_utilization <=80?$good:$bad)."'>".$dl_utilization."</font></td>";
					echo "<td bgcolor='".($ul_utilization <= 80?$bggood:$bgbad)."'><font color='".($ul_utilization <=80?$good:$bad)."'>".$ul_utilization."</font></td>";
					echo "<td bgcolor='".($tx_integrity >= 92?$bggood:$bgbad)."'><font color='".($tx_integrity >=92?$good:$bad)."'>".$tx_integrity."</font></td>";
				}
				
			?>
	
		</tbody>
	</table>


<br>
</div>
</body>
</html>