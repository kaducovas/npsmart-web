<script type="text/javascript">
//var reportnename = <?php echo $reportnename;?>
//var node = 'CO';
var reportnename = "<?php echo $reportnename; ?>";
var reportdate = "<?php echo $reportdate; ?>";
</script>
<div class="triage_menu">
&emsp;<font color="#A4A4A4" size="4"><b><a style = "color:#A4A4A4" onclick='selectkpitriage(this)'>Overview</a></b></font>
</div>
<div align="right">
<font color="#A4A4A4" size="4"><b><a style = "color:#A4A4A4" onclick='selectkpitriage(this)'>Cell Mapping</a></b></font>&emsp;
</div>
<br>
<div width="100%">

	<form action="/npsmart/umts/worstcells" name="wcform" method="post">
		<input type="hidden" id="wcreportnename" name="reportnename" value="" />
		<input type="hidden" id="wcreportrnc" name="reportrnc" value="" />
		<input type="hidden" id="wctimeagg" name="timeagg" value="" />
		<input type="hidden" id="wcreportdate" name="reportdate" value="" />
		<input type="hidden" id="wckpi" name="kpi" value="" />
	</form>

	<form action="/npsmart/umts/weeklyworstcells" name="weekwcform" method="post">
		<input type="hidden" id="node" name="node" value="" />
		<input type="hidden" id="week" name="week" value="" />
		<input type="hidden" id="weeklykpi" name="kpi" value="" />
	</form>

	<table id="table_id" class="cell-border compact hover" border="1 solid black" cellspacing="0" width="95%">

		<thead>
			<tr>
				<th rowspan="2" bgcolor="#424242"><font color="#FFFFFF" style="font-size:20pt'">Node</font></th>
				<th rowspan="2" bgcolor="#424242"><font color="#FFFFFF" style="font-size:20pt'">Region</font></th>
				<th rowspan="2" bgcolor="#424242"><font color="#FFFFFF" style="font-size:20pt'">RNC</font></th>
				<th rowspan="2" bgcolor="#424242"><font color="#FFFFFF" style="font-size:20pt'">NodeB</font></th>			
				<?php 
					foreach($triage_week as $row){
						$week = $row->week;
					}	
				

					if (isset($monthnum))
					{
						$months = array (1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
						#$months[(int)$monthnum]; 

						echo "<th colspan='70' bgcolor='#424242'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt''>".$months[(int)$week]."</font></th>";
						
	
					}
					elseif (isset($weeknum))
					{

						echo "<th colspan='70' bgcolor='#424242'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt''>W".$week."</font></th>";
						
					}
					
				?>
				</tr>
				<tr>
				<th style='display:none;' bgcolor="#A4A4A4"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">QDA CS</font></div></th>
				<th style='display:none;' bgcolor="#A4A4A4"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">QDA HS</font></div></th>
				<th style='display:none;' bgcolor="#A4A4A4"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">QDR CS</font></div></th>
				<th style='display:none;' bgcolor="#A4A4A4"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">QDR HS</font></div></th>
				<th style='display:none;' bgcolor="#A4A4A4"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">THROUGHPUT</font></div></th>
				<th style='display:none;' bgcolor="#A4A4A4"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">AVAIABILITY</font></div></th>
				<th style='display:none;' bgcolor="#A4A4A4"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">CS RETENTION</font></div></th>
				<th style='display:none;' bgcolor="#A4A4A4"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">PS RETENTION</font></div></th>
				<th style='display:none;' bgcolor="#A4A4A4"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">HSDPA USER RATIO</font></div></th>				
				<th style='display:none;' bgcolor="#A4A4A4"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">RTWP</font></div></th>
				<th style='display:none;' bgcolor="#A4A4A4"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">NQI CS</font></div></th>
				<th style='display:none;' bgcolor="#A4A4A4"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">NQI HS<font></div></th>
				<th bgcolor="#A4A4A4"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'"><a style= "color:#FFFFFF" onclick='selectshowcolumn(this)'>KPI</a></font></div></th>
				
				<th style='display:none;' bgcolor="#B23AEE"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">STATUS AVAILABILITY<font></div></th>
				<th style='display:none;' bgcolor="#B23AEE"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">UNCLEARED ALARMS<font></div></th>
				<th style='display:none;' bgcolor="#B23AEE"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">NOTE<font></div></th>
				<th bgcolor="#B23AEE"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'"><a style= "color:#FFFFFF" onclick='selectshowcolumn(this)'>OMR</a></font></div></th>
				
				<th style='display:none;' bgcolor="#66CDAA"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">TX TYPE<font></div></th>
				<th style='display:none;' bgcolor="#66CDAA"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">DELAY<font></div></th>
				<th style='display:none;' bgcolor="#66CDAA"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">JITTER<font></div></th>
				<th style='display:none;' bgcolor="#66CDAA"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">LOST<font></div></th>
				<th style='display:none;' bgcolor="#66CDAA"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">IUB FLOWCTRL DL DROP<font></div></th>
				<th style='display:none;' bgcolor="#66CDAA"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">IUB FLOWCTRL UL DROP<font></div></th>
				<th style='display:none;' bgcolor="#66CDAA"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">IUB FLOWCTRL DL CONG<font></div></th>
				<th style='display:none;' bgcolor="#66CDAA"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">IUB FLOWCTRL UL CONG<font></div></th>
				<th style='display:none;' bgcolor="#66CDAA"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">ATM DL UTILIZATION<font></div></th>
				<th style='display:none;' bgcolor="#66CDAA"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">ATM UL UTILIZATION<font></div></th>
				<th style='display:none;' bgcolor="#66CDAA"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">TX INTEGRITY<font></div></th>
				<th style='display:none;' bgcolor="#66CDAA"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">NOTE<font></div></th>	
				<th bgcolor="#66CDAA"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'"><a style= "color:#FFFFFF" onclick='selectshowcolumn(this)'>TX/OMR</a></font></div></th>
				
				<th style='display:none;' bgcolor="#2E9AFE"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">RTWP CHECK<font></div></th>
				<th style='display:none;' bgcolor="#2E9AFE"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">UNBALANCE<font></div></th>
				<th style='display:none;' bgcolor="#2E9AFE"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">OVERSHOOTER<font></div></th>
				<th style='display:none;' bgcolor="#2E9AFE"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">COVERED SITES<font></div></th>
				<th style='display:none;' bgcolor="#2E9AFE"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">COVERED SITES NAME<font></div></th>
				<th style='display:none;' bgcolor="#2E9AFE"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">PARAMETER CHECK<font></div></th>
				<th style='display:none;' bgcolor="#2E9AFE"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">MOS OUT OF BASELINE<font></div></th>
				<th bgcolor="#2E9AFE"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'"><a style= "color:#FFFFFF" onclick='selectshowcolumn(this)'>OTM</a></font></div></th>
				
				<th style='display:none;' bgcolor="#EEDC82"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">EE<font></div></th>
				<th style='display:none;' bgcolor="#EEDC82"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">LOAD<font></div></th>
				<th style='display:none;' bgcolor="#EEDC82"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">CODE<font></div></th>
				<th style='display:none;' bgcolor="#EEDC82"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">DL POWER<font></div></th>
				<th style='display:none;' bgcolor="#EEDC82"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">FACH<font></div></th>
				<th style='display:none;' bgcolor="#EEDC82"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">RACH<font></div></th>
				<th style='display:none;' bgcolor="#EEDC82"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">PCH<font></div></th>
				<th style='display:none;' bgcolor="#EEDC82"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">CNBAP<font></div></th>
				<th style='display:none;' bgcolor="#EEDC82"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">DL CE<font></div></th>
				<th style='display:none;' bgcolor="#EEDC82"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">UL CE<font></div></th>
				<th bgcolor="#EEDC82"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'"><a style= "color:#FFFFFF" onclick='selectshowcolumn(this)'>CAPACITY</a></font></div></th>

				<th style='display:none;' bgcolor="#FE642E"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">BOARD FOUND<font></div></th>
				<th style='display:none;' bgcolor="#FE642E"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">BOARD CHECK<font></div></th>
				<th style='display:none;' bgcolor="#FE642E"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">NP ACTION FOUND<font></div></th>
				<th style='display:none;' bgcolor="#FE642E"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">NP SOLUTION<font></div></th>
				<th style='display:none;' bgcolor="#FE642E"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">NOTE<font></div></th>				
				<th bgcolor="#FE642E"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'"><a style= "color:#FFFFFF" onclick='selectshowcolumn(this)'>PLAN/ENG RF</a></font></div></th>
				
				<th bgcolor="#000000"><div class='vrt_triage'><font color="#FFFFFF" style="font-size:20pt'">AREA/STATUS</font></div></th>

			</tr>		
		</thead>
	
		<tbody>	

			<?php
			$bad2 = "#FF7272";
			$good2 = "#B1D38D";
			$bad = "#FF0000";
			$good = "#92D050";
			$orange = "#FAA20A";
			$yellow = "#FFFF00";
			$yellow2 = "#FCFA87";
			$title = "#436260";	
			$bgbad = "#FDE9D9";	
			$bggood = "#FFFFFF";
				

				foreach($triage_week as $row)
				{
					$region = $row->region;
					$rnc = $row->rnc;
					$nodeb = $row->nodeb;
					$kpi = $row->kpi;
					$omr = $row->omr;
					$tx_omr = $row->tx_omr;
					$otm = $row->otm;
					$cap = $row->capacity;
					$rf = $row->plan_eng_rf;
					$area = $row->area;
					$qda_cs = $row->qda_cs;
					$qda_hs = $row->qda_hs;
					$qdr_cs = $row->qdr_cs;
					$qdr_ps = $row->qdr_ps;
					$throughput = $row->throughput;
					$availability = $row->availability;
					$retention_cs = $row->retention_cs;
					$retention_ps = $row->retention_ps;
					$hsdpa_users_ratio = $row->hsdpa_users_ratio;
					$rtwp = $row->rtwp;
					$nqi_cs = $row->nqi_cs;
					$nqi_hs = $row->nqi_hs;
					$wbbp_total = $row->wbbp_total;
					$status_availability = $row->status_availability;
					$uncleared_alarms = $row->uncleared_alarms;
					$note_omr = $row->note_omr;
					$tx_type = $row->tx_type;
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
					$note_tx_omr = $row->note_tx_omr;
					$rtwp_check = $row->rtwp_check;
					$ee_balanced = $row->ee_balanced;
					$no_overshooter = $row->no_overshooter;
					$covered_sites_count = $row->covered_sites_count;
					$covered_sites = $row->covered_sites;
					$parameter_check = $row->parameter_check;
					$mo_out = $row->mo_out;
					$ee = $row->ee;
					$load = $row->load;
					$code_utilization = $row->code_utilization;
					$dlpower_utilization = $row->dlpower_utilization;
					$user_fach_utilization = $row->user_fach_utilization;
					$rach_utilization = $row->rach_utilization;
					$pch_utilization = $row->pch_utilization;
					$cnbap_utilization = $row->cnbap_utilization;
					$dlce_utilization = $row->dlce_utilization;
					$ulce_utilization = $row->ulce_utilization;
					$board_found = $row->board_found;
					$status_board = $row->status_board;
					$np_action_found = $row->np_action_found;
					$np_solution = $row->np_solution;
					$note_rf = $row->note_rf;
				
					echo "<tr>";		
					echo "<td bgcolor='#EDEDEB' value='".$row->node."'><font style='font-family: calibri; font-size:12pt'><b>".$row->node."</b></font></td>";		

					echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$region."</font></td>";
					echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$rnc."</font></td>";
					echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$nodeb."</font></td>";
					

					echo "<td style='display:none;' bgcolor='".($qda_cs >= 90?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($qda_cs >= 90?$good:$bad)."'>".$qda_cs."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($qda_hs >= 92?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($qda_hs >= 92?$good:$bad)."'>".$qda_hs."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($qdr_cs >= 90?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($qdr_cs >= 90?$good:$bad)."'>".$qdr_cs."%</font></td>";					
					echo "<td style='display:none;' bgcolor='".($qdr_ps >= 95?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($qdr_ps >= 95?$good:$bad)."'>".$qdr_ps."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($throughput >= 92?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($throughput >= 92?$good:$bad)."'>".$throughput."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($availability >= 99.50?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($availability >= 99.50?$good:$bad)."'>".$availability."%</font></td>";					
					echo "<td style='display:none;' bgcolor='".($retention_cs >= 99.50?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($retention_cs >= 99.50?$good:$bad)."'>".$retention_cs."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($retention_ps >= 100?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($retention_ps >= 100?$good:$bad)."'>".$retention_ps."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($hsdpa_users_ratio >= 99.50?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($hsdpa_users_ratio >= 99.50?$good:$bad)."'>".$hsdpa_users_ratio."%</font></td>";					
					echo "<td style='display:none;' bgcolor='".($rtwp <= -90?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($rtwp <= -90?$good:$bad)."'>".$rtwp."</font></td>";
					echo "<td style='display:none;' bgcolor='".($nqi_cs >= 85?$good:($nqi_cs >= 70?$yellow:$bad))."'><font style='font-family: calibri; font-size:12pt'>".$nqi_cs."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($nqi_hs >= 85?$good:($nqi_hs >= 70?$yellow:$bad))."'><font style='font-family: calibri; font-size:12pt'>".$nqi_hs."%</font></td>";
					echo "<td bgcolor='".($kpi == 'OK'?$good2:$bad2)."'><font style='font-family: calibri; font-size:12pt'>".$kpi."</font></td>";
					
					echo "<td style='display:none;' bgcolor='".($status_availability == 'OK'?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($status_availability == 'OK'?$good:$bad)."'>".$status_availability."</font></td>";
					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$uncleared_alarms."</font></td>";					
					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$note_omr."</font></td>";					
					echo "<td bgcolor='".($omr == 'OK'?$good2:$bad2)."'><font style='font-family: calibri; font-size:12pt'>".$omr."</font></td>";
					
					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$tx_type."</font></td>";
					echo "<td style='display:none;' bgcolor='".($delay <= 80?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($delay <=80?$good:$bad)."'>".$delay."</font></td>";
					echo "<td style='display:none;' bgcolor='".($jitter <= 5?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($jitter <=5?$good:$bad)."'>".$jitter."</font></td>";
					echo "<td style='display:none;' bgcolor='".($lost <= 5?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($lost <=5?$good:$bad)."'>".$lost."</font></td>";
					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$dl_dropnum_lgcport1."</font></td>";
					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$ul_dropnum_lgcport1."</font></td>";
					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$dl_congtime_lgcport1."</font></td>";
					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$ul_congtime_lgcport1."</font></td>";					
					echo "<td style='display:none;' bgcolor='".($dl_utilization <= 80?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($dl_utilization <=80?$good:$bad)."'>".$dl_utilization."</font></td>";
					echo "<td style='display:none;' bgcolor='".($ul_utilization <= 80?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($ul_utilization <=80?$good:$bad)."'>".$ul_utilization."</font></td>";
					echo "<td style='display:none;' bgcolor='".($tx_integrity <= 92?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($tx_integrity <=92?$good:$bad)."'>".$tx_integrity."</font></td>";
					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$note_tx_omr."</font></td>";
					echo "<td bgcolor='".($tx_omr == 'OK'?$good2:$bad2)."'><font style='font-family: calibri; font-size:12pt'>".$tx_omr."</font></td>";

					echo "<td style='display:none;' bgcolor='".($rtwp_check == 'OK'?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($rtwp_check == 'OK'?$good:$bad)."'>".$rtwp_check."</font></td>";
					echo "<td style='display:none;' bgcolor='".($ee_balanced == 'OK'?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($ee_balanced == 'OK'?$good:$bad)."'>".$ee_balanced."</font></td>";
					echo "<td style='display:none;' bgcolor='".($no_overshooter == 'OK'?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($no_overshooter == 'OK'?$good:$bad)."'>".$no_overshooter."</font></td>";
					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$covered_sites_count."</font></td>";	
					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$covered_sites."</font></td>";	
					echo "<td style='display:none;' bgcolor='".($parameter_check == 'OK'?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($parameter_check == 'OK'?$good:$bad)."'>".$parameter_check."</font></td>";
					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$mo_out."</font></td>";							
					echo "<td bgcolor='".($otm == 'OK'?$good2:$bad2)."'><font style='font-family: calibri; font-size:12pt'>".$otm."</font></td>";

					echo "<td style='display:none;' bgcolor='".($ee <=38?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($ee <=38?$good:$bad)."'>".$ee."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($load <=80?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($load <=80?$good:$bad)."'>".$load."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($code_utilization <=70?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($code_utilization <=70?$good:$bad)."'>".$code_utilization."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($dlpower_utilization <=70?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($dlpower_utilization <=70?$good:$bad)."'>".$dlpower_utilization."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($user_fach_utilization <=70?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($user_fach_utilization <=70?$good:$bad)."'>".$user_fach_utilization."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($rach_utilization <=70?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($rach_utilization <=70?$good:$bad)."'>".$rach_utilization."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($pch_utilization <=60?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($pch_utilization <=60?$good:$bad)."'>".$pch_utilization."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($cnbap_utilization <=60?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($cnbap_utilization <=60?$good:$bad)."'>".$cnbap_utilization."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($dlce_utilization <=70?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($dlce_utilization <=70?$good:$bad)."'>".$dlce_utilization."%</font></td>";
					echo "<td style='display:none;' bgcolor='".($ulce_utilization <=70?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($ulce_utilization <=70?$good:$bad)."'>".$ulce_utilization."%</font></td>";					
					echo "<td bgcolor='".($cap == 'OK'?$good2:$bad2)."'><font style='font-family: calibri; font-size:12pt'>".$cap."</font></td>";

					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$board_found."</font></td>";
					echo "<td style='display:none;' bgcolor='".($status_board == 'OK'?$bggood:$bgbad)."'><font style='font-family: calibri; font-size:12pt' color='".($status_board == 'OK'?$good:$bad)."'>".$status_board."</font></td>";
					echo "<td style='display:none;' bgcolor='".($np_action_found == 'Yes'?$bgbad:$bggood)."'><font style='font-family: calibri; font-size:12pt' color='".($np_action_found == 'Yes'?$bad:$good)."'>".$np_action_found."</font></td>";
					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$np_solution."</font></td>";
					echo "<td style='display:none;' bgcolor='#FFFFFF'>".$note_rf."</font></td>";					
					echo "<td bgcolor='".($rf == 'OK'?$good2:$bad2)."'><font style='font-family: calibri; font-size:12pt'>".$rf."</font></td>";
					
					echo "<td bgcolor='".($area == 'ANALYSIS'?"#A4A4A4":($area == 'OMR'?"#B23AEE":($area == 'TX/OMR'?"#66CDAA":($area == "OTM"?"#2E9AFE":($area == 'CAP'?"#EEDC82":($area == 'PLAN/ENG RF'?"#FE642E":($area == 'NORMAL'?$good:$good)))))))."'><font style='font-family: calibri; font-size:12pt'><b>".$area."</b></font></td>";

					echo "</tr>";						
					
				}
				
			?>
	
		</tbody>
	</table>
</div>
<br>
</body>
</html>