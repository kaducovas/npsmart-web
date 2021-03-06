<script type="text/javascript">

if ("<?php echo $reportnetype ?>" == 'cell') {
    if(!window.location.hash) {
		<?php echo $reportcell = false ?>
    }
}
<?php
ini_set('memory_limit', '2048M');
?>
//var reportnename = <?php echo $reportnename;?>
//var node = 'CO';
var reportnename = "<?php echo $reportnename; ?>";
var reportdate = "<?php echo $reportdate; ?>";
jQuery(window).load(function () {
    document.getElementById("loading").style.display = "none";
	document.getElementById("Table_CellMaping").style.visibility = "visible";
});
</script>
<div align="left">
&emsp;<a target="_blank" class="link" href="/npsmart/output/cellmapping.csv">Download Network Cell Mapping</a>
</div>
<div class="triage_menu_left">
&emsp;<font color="#8F8F8F" size="4"><b><a style = "color:#8F8F8F" href="#" onclick='selectkpitriage(this)'>Overview</a></b></font>
</div>
<div class="triage_menu_right">
<font color="#8F8F8F" size="4"><b><a style = "color:#8F8F8F" href="#" onclick='selectkpitriage(this)'>Cell Mapping</a></b></font>&emsp;
</div>
<div align="center">
<?php 
echo "<font color='#000000' size='5'><b>Week ".$triage_week[0]->week."</b></font>";
?>
</div>

<div id="loading" style="display:block">
    <p style="text-align:center;"><img src="/npsmart/images/loading_preto.gif" style="width:300px; height:300px;" alt="Loading" /></p>
</div>
<div id="Table_CellMaping" align="center" style="visibility:hidden">
	<table id="table_id" class="cell-border compact hover" border="1 solid black" cellspacing="0" width="100%">

		<thead>
			<tr>
			    <th bgcolor="#000000" style="white-space:nowrap"><font color="#FFFFFF">CELL</font></th>
				<th bgcolor="#000000" style="white-space:nowrap"><font color="#FFFFFF">REGION</font></th>
				<th bgcolor="#000000" style="white-space:nowrap"><font color="#FFFFFF">UF</font></th>
				<th bgcolor="#000000" style="white-space:nowrap"><font color="#FFFFFF">CIDADE</font></th>
				<th bgcolor="#000000" style="white-space:nowrap"><font color="#FFFFFF">CLUSTER</font></th>
				<th bgcolor="#000000" style="white-space:nowrap"><font color="#FFFFFF">RNC</font></th>
				<th bgcolor="#000000" style="white-space:nowrap"><font color="#FFFFFF">NODEB</font></th>
				<th bgcolor="#000000" style="white-space:nowrap"><font color="#FFFFFF">RNC ID</font></th>
				<th bgcolor="#000000" style="white-space:nowrap"><font color="#FFFFFF">ANI</font></th>
				<th bgcolor="#000000" style="white-space:nowrap"><font color="#FFFFFF">CELL ID</font></th>
				<th bgcolor="#000000" style="white-space:nowrap"><font color="#FFFFFF">PSC</font></th>
				
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">QDA CS</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">QDA HS</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">QDR CS</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">QDR HS</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">THROUGHPUT</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">THP HSDPA (kbps)</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">THP HSUPA (kbps)</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">AVAIABILITY</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">CS RETENTION</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">PS RETENTION</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">HSDPA USER RATIO</font></div></th>				
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">RTWP</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">NQI CS</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">NQI HS</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">KPIS OUT</font></div></th>
				<th bgcolor="#8F8F8F"><div class='vrt_triage'><font color="#FFFFFF">KPI</font></div></th>
				
				<th bgcolor="#7A30A0"><div class='vrt_triage'><font color="#FFFFFF">STATUS AVAILABILITY</font></div></th>
				<th bgcolor="#7A30A0"><div class='vrt_triage'><font color="#FFFFFF">VSWRs</font></div></th>
				<th bgcolor="#7A30A0"><div class='vrt_triage'><font color="#FFFFFF">STATUS VSWR</font></div></th>
				<th bgcolor="#7A30A0"><div class='vrt_triage'><font color="#FFFFFF">UNCLEARED ALARMS</font></div></th>
				<th bgcolor="#7A30A0"><div class='vrt_triage'><font color="#FFFFFF">NOTE</font></div></th>
				<th bgcolor="#7A30A0"><div class='vrt_triage'><font color="#FFFFFF">OMR</font></div></th>
				
				<th bgcolor="#F4E1E1"><div class='vrt_triage'><font color="#FFFFFF">TX TYPE</font></div></th>
				<th bgcolor="#F4E1E1"><div class='vrt_triage'><font color="#FFFFFF">DELAY</font></div></th>
				<th bgcolor="#F4E1E1"><div class='vrt_triage'><font color="#FFFFFF">JITTER</font></div></th>
				<th bgcolor="#F4E1E1"><div class='vrt_triage'><font color="#FFFFFF">LOST</font></div></th>
				<th bgcolor="#F4E1E1"><div class='vrt_triage'><font color="#FFFFFF">IUB FLOWCTRL DL DROP</font></div></th>
				<th bgcolor="#F4E1E1"><div class='vrt_triage'><font color="#FFFFFF">IUB FLOWCTRL UL DROP</font></div></th>
				<th bgcolor="#F4E1E1"><div class='vrt_triage'><font color="#FFFFFF">IUB FLOWCTRL DL CONG</font></div></th>
				<th bgcolor="#F4E1E1"><div class='vrt_triage'><font color="#FFFFFF">IUB FLOWCTRL UL CONG</font></div></th>
				<th bgcolor="#F4E1E1"><div class='vrt_triage'><font color="#FFFFFF">ATM DL UTILIZATION</font></div></th>
				<th bgcolor="#F4E1E1"><div class='vrt_triage'><font color="#FFFFFF">ATM UL UTILIZATION</font></div></th>
				<th bgcolor="#F4E1E1"><div class='vrt_triage'><font color="#FFFFFF">TX INTEGRITY</font></div></th>
				<th bgcolor="#F4E1E1"><div class='vrt_triage'><font color="#FFFFFF">NOTE</font></div></th>	
				<th bgcolor="#F4E1E1"><div class='vrt_triage'><font color="#FFFFFF">TX/OMR</font></div></th>
				
				<th bgcolor="#0070C0"><div class='vrt_triage'><font color="#FFFFFF">RTWP CHECK</font></div></th>
				<th bgcolor="#0070C0"><div class='vrt_triage'><font color="#FFFFFF">UNBALANCE</font></div></th>
				<th bgcolor="#0070C0"><div class='vrt_triage'><font color="#FFFFFF">RF SHAPING RATE</font></div></th>
				<th bgcolor="#0070C0"><div class='vrt_triage'><font color="#FFFFFF">COVERED SITES</font></div></th>
				<th bgcolor="#0070C0"><div class='vrt_triage'><font color="#FFFFFF">COVERED SITES NAME</font></div></th>
				<th bgcolor="#0070C0"><div class='vrt_triage'><font color="#FFFFFF">OVERSHOOTER</font></div></th>
				<th bgcolor="#0070C0"><div class='vrt_triage'><font color="#FFFFFF">RET STATUS</font></div></th>
				<th bgcolor="#0070C0"><div class='vrt_triage'><font color="#FFFFFF">RET VALUE</font></div></th>
				<th bgcolor="#0070C0"><div class='vrt_triage'><font color="#FFFFFF">PARAMETER CHECK</font></div></th>
				<th bgcolor="#0070C0"><div class='vrt_triage'><font color="#FFFFFF">MOS OUT OF BASELINE</font></div></th>
				<th bgcolor="#0070C0"><div class='vrt_triage'><font color="#FFFFFF">NEIGHBOURING CHECK</font></div></th>
				<th bgcolor="#0070C0"><div class='vrt_triage'><font color="#FFFFFF">OTM</font></div></th>
				
				<th bgcolor="#FFC000"><div class='vrt_triage'><font color="#FFFFFF">EE</font></div></th>
				<th bgcolor="#FFC000"><div class='vrt_triage'><font color="#FFFFFF">EE STATUS</font></div></th>
				<th bgcolor="#FFC000"><div class='vrt_triage'><font color="#FFFFFF">LOAD %</font></div></th>
				<th bgcolor="#FFC000"><div class='vrt_triage'><font color="#FFFFFF">CODE %</font></div></th>
				<th bgcolor="#FFC000"><div class='vrt_triage'><font color="#FFFFFF">DL POWER %</font></div></th>
				<th bgcolor="#FFC000"><div class='vrt_triage'><font color="#FFFFFF">FACH %</font></div></th>
				<th bgcolor="#FFC000"><div class='vrt_triage'><font color="#FFFFFF">RACH %</font></div></th>
				<th bgcolor="#FFC000"><div class='vrt_triage'><font color="#FFFFFF">PCH %</font></div></th>
				<th bgcolor="#FFC000"><div class='vrt_triage'><font color="#FFFFFF">CNBAP %</font></div></th>
				<th bgcolor="#FFC000"><div class='vrt_triage'><font color="#FFFFFF">DL CE %</font></div></th>
				<th bgcolor="#FFC000"><div class='vrt_triage'><font color="#FFFFFF">UL CE %</font></div></th>
				<th bgcolor="#FFC000"><div class='vrt_triage'><font color="#FFFFFF">CAPACITY</font></div></th>

				<th bgcolor="#C00000" style="white-space:nowrap"><div class='vrt_triage'><font color="#FFFFFF">BOARD FOUND</font></div></th>
				<th bgcolor="#C00000"><div class='vrt_triage'><font color="#FFFFFF">BOARD CHECK</font></div></th>
				<th bgcolor="#C00000"><div class='vrt_triage'><font color="#FFFFFF">NP ACTION FOUND</font></div></th>
				<th bgcolor="#C00000"><div class='vrt_triage'><font color="#FFFFFF">NP SOLUTION</font></div></th>
				<th bgcolor="#C00000"><div class='vrt_triage'><font color="#FFFFFF">NOTE</font></div></th>				
				<th bgcolor="#C00000"><div class='vrt_triage'><font color="#FFFFFF">END DATE PLANNED</font></div></th>				
				<th bgcolor="#C00000"><div class='vrt_triage'><font color="#FFFFFF">END DATE ACTUAL</font></div></th>				
				<th bgcolor="#C00000"><div class='vrt_triage'><font color="#FFFFFF">PLAN/ENG RF</font></div></th>

				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW964QAM01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9CCPIC01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9CCPIC201</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9CEEFF01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9CEOVER01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9CCPIC301</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9DDC01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9DLCE01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9DHCPMP01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9CQIPC01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9DYNCCE01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9HSDPA01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9HDCODE01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9HSUPA01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9UPATDS01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9HU2MS01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9UIC01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9LOCELL01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9UTIC01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9ULSHA01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9ULCE01</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">LQW9COLPC01</font></div></th>
				<th bgcolor="#002060" style="white-space:nowrap"><div class='vrt_triage'><font color="#FFFFFF">IMP INFO</font></div></th>
				<th bgcolor="#002060"><div class='vrt_triage'><font color="#FFFFFF">IMP</font></div></th>
				
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">4W REC</font><font color="#8F8F8F"> KPI</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">4W REC</font><font color="#D3D3D3"> ANALYSIS</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">4W REC</font><font color="#7A30A0"> OMR</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">4W REC</font><font color="#F4E1E1"> TX/OMR</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">4W REC</font><font color="#0070C0"> OTM</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">4W REC</font><font color="#FFC000"> CAP</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">4W REC</font><font color="#C00000"> PLAN/ENG RF</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">4W REC</font><font color="#002060"> IMP</font></div></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">4W REC</font><font color="#00B050"> NORMAL</font></div></th>
				<th bgcolor="#363636" style="white-space:nowrap"><font color="#FFFFFF">AREA/STATUS HISTORY</font></th>
				<th bgcolor="#363636"><div class='vrt_triage'><font color="#FFFFFF">AREA/STATUS</font></div></th>

				<th bgcolor="#E74C3C"><div class='vrt_triage'><font color="#FFFFFF">ID</font></div></th>
				<th bgcolor="#E74C3C"><div class='vrt_triage'><font color="#FFFFFF">AREA</font></div></th>				
				<th bgcolor="#E74C3C"><div class='vrt_triage'><font color="#FFFFFF">CAUSAS</font></div></th>
				<th bgcolor="#E74C3C"><div class='vrt_triage'><font color="#FFFFFF">DATA CRIACAO WEEK</font></div></th>
				<th bgcolor="#E74C3C"><div class='vrt_triage'><font color="#FFFFFF">PLANEJAMENTO WEEK</font></div></th>
				<th bgcolor="#E74C3C"><div class='vrt_triage'><font color="#FFFFFF">CONCLUSAO WEEK</font></div></th>
				<th bgcolor="#E74C3C"><div class='vrt_triage'><font color="#FFFFFF">COMENTARIOS</font></div></th>
				<th bgcolor="#E74C3C"><div class='vrt_triage'><font color="#FFFFFF">ATIVIDADE</font></div></th>
				<th bgcolor="#E74C3C"><div class='vrt_triage'><font color="#FFFFFF">STATUS</font></div></th>
				<th bgcolor="#E74C3C"><div class='vrt_triage'><font color="#FFFFFF">ACTION PLAN</font></div></th>

				<th bgcolor="#246575"><div class='vrt_triage'><font color="#FFFFFF">INC ID</font></div></th>
				<th bgcolor="#246575"><div class='vrt_triage'><font color="#FFFFFF">DESCRIPTION</font></div></th>
				<th bgcolor="#246575"><div class='vrt_triage'><font color="#FFFFFF">INC STATUS</font></div></th>
				<th bgcolor="#246575"><div class='vrt_triage'><font color="#FFFFFF">LAST UPDATE</font></div></th>
				<th bgcolor="#246575"><div class='vrt_triage'><font color="#FFFFFF">GROUP</font></div></th>
				<th bgcolor="#246575"><div class='vrt_triage'><font color="#FFFFFF">INCIDENT</font></div></th>				
				
			</tr>		
		</thead>
		<tfoot>
			<tr>
			    <th style="white-space:nowrap">CELL</th>
				<th style="white-space:nowrap">REGION</th>
				<th style="white-space:nowrap">UF</th>
				<th style="white-space:nowrap">CIDADE</th>
				<th style="white-space:nowrap">CLUSTER</th>
				<th style="white-space:nowrap">RNC</th>
				<th style="white-space:nowrap">NODEB</th>
				<th style="white-space:nowrap">RNC ID</th>
				<th style="white-space:nowrap">ANI</th>
				<th style="white-space:nowrap">CELL ID</th>
				<th style="white-space:nowrap">PSC</th>
				
				<th>QDA CS</th>
				<th>QDA HS</th>
				<th>QDR CS</th>
				<th>QDR HS</th>
				<th>THROUGHPUT</th>
				<th>THP HSDPA</th>
				<th>THP HSUPA</th>
				<th>AVAIABILITY</th>
				<th>CS RETENTION</th>
				<th>PS RETENTION</th>
				<th>HSDPA USER RATIO</th>				
				<th>RTWP</th>
				<th>NQI CS</th>
				<th>NQI HS</th>
				<th>KPIS OUT</th>
				<th>KPI</th>
				
				<th>STATUS AVAILABILITY</th>
				<th>VSWRs</th>
				<th>STATUS VSWR</th>
				<th>UNCLEARED ALARMS</th>
				<th>NOTE</th>
				<th>OMR</th>
				
				<th>TX TYPE</th>
				<th>DELAY</th>
				<th>JITTER</th>
				<th>LOST</th>
				<th>IUB FLOWCTRL DL DROP</th>
				<th>IUB FLOWCTRL UL DROP</th>
				<th>IUB FLOWCTRL DL CONG</th>
				<th>IUB FLOWCTRL UL CONG</th>
				<th>ATM DL UTILIZATION</th>
				<th>ATM UL UTILIZATION</th>
				<th>TX INTEGRITY</th>
				<th>NOTE</th>	
				<th>TX/OMR</th>
				
				<th>RTWP CHECK</th>
				<th>UNBALANCE</th>
				<th>RF SHAPING RATE</th>
				<th>COVERED SITES</th>
				<th>COVERED SITES NAME</th>
				<th>OVERSHOOTER</th>
				<th>RET STATUS</th>
				<th>RET VALUE</th>
				<th>PARAMETER CHECK</th>
				<th>MOS OUT OF BASELINE</th>
				<th>NEIGHBOURING CHECK</th>
				<th>OTM</th>
				
				<th>EE</th>
				<th>EE STATUS</th>
				<th>LOAD %</th>
				<th>CODE %</th>
				<th>DL POWER %</th>
				<th>FACH %</th>
				<th>RACH %</th>
				<th>PCH %</th>
				<th>CNBAP %</th>
				<th>DL CE %</th>
				<th>UL CE %</th>
				<th>CAPACITY</th>

				<th style="white-space:nowrap">BOARD FOUND</th>
				<th>BOARD CHECK</th>
				<th>NP ACTION FOUND</th>
				<th>NP SOLUTION</th>
				<th>NOTE</th>				
				<th>END DATE PLANNED</th>				
				<th>END DATE ACTUAL</th>				
				<th>PLAN/ENG RF</th>

				<th>LQW964QAM01</th>
				<th>LQW9CCPIC01</th>
				<th>LQW9CCPIC201</th>
				<th>LQW9CEEFF01</th>
				<th>LQW9CEOVER01</th>
				<th>LQW9CCPIC301</th>
				<th>LQW9DDC01</th>
				<th>LQW9DLCE01</th>
				<th>LQW9DHCPMP01</th>
				<th>LQW9CQIPC01</th>
				<th>LQW9DYNCCE01</th>
				<th>LQW9HSDPA01</th>
				<th>LQW9HDCODE01</th>
				<th>LQW9HSUPA01</th>
				<th>LQW9UPATDS01</th>
				<th>LQW9HU2MS01</th>
				<th>LQW9UIC01</th>
				<th>LQW9LOCELL01</th>
				<th>LQW9UTIC01</th>
				<th>LQW9ULSHA01</th>
				<th>LQW9ULCE01</th>
				<th>LQW9COLPC01</th>
				<th style="white-space:nowrap">IMP</th>
				<th>IMP INFO</th>
				
				<th>4W REC KPI</th>
				<th>4W REC ANALYSIS</th>
				<th>4W REC OMR</th>
				<th>4W REC TX/OMR</th>
				<th>4W REC OTM</th>
				<th>4W REC CAP</th>
				<th>4W REC PLAN/ENG RF</th>
				<th>4W REC IMP</th>
				<th>4W REC NORMAL</th>
				<th style="white-space:nowrap">AREA/STATUS HISTORY</th>
				<th>AREA/STATUS</th>

				<th>ID</th>
				<th>AREA</th>				
				<th>CAUSAS</th>
				<th>DATA CRIACAO WEEK</th>
				<th>PLANEJAMENTO WEEK</th>
				<th>CONCLUSAO WEEK</th>
				<th>COMENTARIOS</th>
				<th>ATIVIDADE</th>
				<th>STATUS</th>
				<th>ACTION PLAN</th>
				
				<th>INC ID</th>
				<th>DESCRIPTION</th>
				<th>INC STATUS</th>
				<th>LAST UPDATE</th>
				<th>GROUP</th>
				<th>INCIDENT</th>	
			
				
			</tr>		
		</tfoot>
	
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

				foreach($triage_week as $row)
				{
					$region = $row->region;
					$uf = $row->uf;
					$cidade = $row->cidade;
					$cluster = $row->cluster;
					$rnc = $row->rnc;
					$nodeb = $row->nodebname;
					$rncid = $row->rncid;
					$ani = $row->ani;
					$cellid = $row->cellid;
					$psc = $row->psc;
					$kpi = $row->kpi;
					$omr = $row->omr;
					$tx_omr = $row->tx_omr;
					$otm = $row->otm;
					$cap = $row->capacity;
					$rf = $row->plan_eng_rf;
					$imp = $row->imp;
					$imp_status = $row->imp_status;
					$area = $row->area;
					$qda_cs = $row->qda_cs;
					$qda_hs = $row->qda_hs;
					$qdr_cs = $row->qdr_cs;
					$qdr_ps = $row->qdr_ps;
					$throughput = $row->throughput;
					$thp_hsdpa = $row->thp_hsdpa;
					$thp_hsupa = $row->thp_hsupa;
					$availability = $row->availability;
					$retention_cs = $row->retention_cs;
					$retention_ps = $row->retention_ps;
					$hsdpa_users_ratio = $row->hsdpa_users_ratio;
					$rtwp = $row->rtwp;
					$nqi_cs = $row->nqi_cs;
					$nqi_hs = $row->nqi_hs;
					$kpis_out = $row->kpis_out;
					//$wbbp_total = $row->wbbp_total;
					$status_availability = $row->status_availability;
					$vswrs = $row->vswrs;
					$status_vswr = $row->status_vswr;
					$uncleared_alarms = $row->uncleared_alarms;
					$note_omr = $row->omr_note;
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
					$note_tx_omr = $row->tx_note;
					$rtwp_check = $row->rtwp_check;
					$ee_balanced = $row->ee_balanced;
					$no_overshooter = $row->no_overshooter;
					$rf_shaping_rate = $row->rf_shaping_rate;
					$covered_sites_count = $row->covered_sites_count;
					$covered_sites = $row->covered_sites;
					$online_status = $row->online_status;
					$actual_tilt = $row->actual_tilt;
					$parameter_check = $row->parameter_check;
					$mo_out = $row->mo_out;
					$neighbour_check = $row->neighbour_check;
					$ee = $row->ee;
					$ee_status = $row->ee_status;
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
					$note_rf = $row->plan_eng_nota;
					$end_integration_plan = $row->end_integration_plan;
					$end_integration_actual = $row->end_integration_actual;
					$lqw964qam01 = $row->lqw964qam01; 
					$lqw9ccpic01 = $row->lqw9ccpic01; 
					$lqw9ccpic201 = $row->lqw9ccpic201; 
					$lqw9ceeff01 = $row->lqw9ceeff01; 
					$lqw9ceover01 = $row->lqw9ceover01; 
					$lqw9ccpic301 = $row->lqw9ccpic301; 
					$lqw9ddc01  = $row->lqw9ddc01 ; 
					$lqw9dlce01 = $row->lqw9dlce01; 
					$lqw9dhcpmp01 = $row->lqw9dhcpmp01; 
					$lqw9cqipc01 = $row->lqw9cqipc01; 
					$lqw9dyncce01 = $row->lqw9dyncce01; 
					$lqw9hsdpa01  = $row->lqw9hsdpa01 ; 
					$lqw9hdcode01 = $row->lqw9hdcode01; 
					$lqw9hsupa01 = $row->lqw9hsupa01; 
					$lqw9upatds01 = $row->lqw9upatds01; 
					$lqw9hu2ms01 = $row->lqw9hu2ms01; 
					$lqw9uic01  = $row->lqw9uic01; 
					$lqw9locell01 = $row->lqw9locell01; 
					$lqw9utic01 = $row->lqw9utic01; 
					$lqw9ulsha01 = $row->lqw9ulsha01; 
					$lqw9ulce01 = $row->lqw9ulce01; 
					$lqw9colpc01  = $row->lqw9colpc01; 					
					$count_of_kpi = $row->count_of_kpi;
					$count_of_analysis = $row->count_of_analysis;
					$count_of_omr = $row->count_of_omr;
					$count_of_tx_omr = $row->count_of_tx_omr;
					$count_of_otm = $row->count_of_otm;
					$count_of_cap = $row->count_of_cap;
					$count_of_plan_eng_rf = $row->count_of_plan_eng_rf;
					$count_of_imp = $row->count_of_imp;
					$count_of_normal = $row->count_of_normal;
					$area_hist = $row->area_hist;
					$plan_area = $row->plan_area;
					$id = $row->id;
					$causas = $row->causas;
					$data_criacao_week = $row->data_criacao_week;
					$planejamento_week = $row->planejamento_week;
					$conclusao_week = $row->conclusao_week;
					$comentarios = $row->comentarios;
					$atividade_plano_nominal = $row->atividade_plano_nominal;
					$status_acao = $row->status_acao;
					$overall_plan_area = $row->overall_plan_area;
					$inc_num = $row->inc_num;
					$inc_description = $row->inc_description;
					$inc_status = $row->inc_status;
					$inc_update = $row->inc_update;
					$inc_group = $row->inc_group;
					$inc_area = $row->inc_area;
				
					echo "<tr>";			

					//echo "<td bgcolor='EDEDEB' style='white-space:nowrap' value='".$row->node."'><font style='font-family: calibri; font-size:12pt'><a id='".$row->node."' style='color:black'onclick='selectne(this)' class='node' value='".$row->node."'>".$row->node."</a></font></td>";
					echo "<td bgcolor='EDEDEB'>".$row->node."</td>";
					
					echo "<td bgcolor='#FFFFFF' style='white-space:nowrap'>".$region."</td>";
					echo "<td bgcolor='#FFFFFF' style='white-space:nowrap'>".$uf."</td>";
					echo "<td bgcolor='#FFFFFF' style='white-space:nowrap'>".$cidade."</td>";
					echo "<td bgcolor='#FFFFFF' style='white-space:nowrap'>".$cluster."</td>";
					echo "<td bgcolor='#FFFFFF' style='white-space:nowrap'>".$rnc."</td>";
					echo "<td bgcolor='#FFFFFF' style='white-space:nowrap'>".$nodeb."</td>";
					echo "<td bgcolor='#FFFFFF' style='white-space:nowrap'>".$rncid."</td>";
					echo "<td bgcolor='#FFFFFF' style='white-space:nowrap'>".$ani."</td>";
					echo "<td bgcolor='#FFFFFF' style='white-space:nowrap'>".$cellid."</td>";
					echo "<td bgcolor='#FFFFFF' style='white-space:nowrap'>".$psc."</td>";					

					echo "<td bgcolor='".($qda_cs >= 92?$bggood:$bgbad)."'><font color='".($qda_cs >= 92?$good:$bad)."'>".$qda_cs."</font></td>";
					echo "<td bgcolor='".($qda_hs >= 90?$bggood:$bgbad)."'><font color='".($qda_hs >= 90?$good:$bad)."'>".$qda_hs."</font></td>";
					echo "<td bgcolor='".($qdr_cs >= 92?$bggood:$bgbad)."'><font color='".($qdr_cs >= 92?$good:$bad)."'>".$qdr_cs."</font></td>";					
					echo "<td bgcolor='".($qdr_ps >= 95?$bggood:$bgbad)."'><font color='".($qdr_ps >= 95?$good:$bad)."'>".$qdr_ps."</font></td>";
					echo "<td bgcolor='".($throughput >= 92?$bggood:$bgbad)."'><font color='".($throughput >= 92?$good:$bad)."'>".$throughput."</font></td>";
					echo "<td bgcolor='".($thp_hsdpa >= 400?$bggood:$bgbad)."'><font color='".($thp_hsdpa >= 400?$good:$bad)."'>".$thp_hsdpa."</font></td>";
					echo "<td bgcolor='".($thp_hsupa >= 40?$bggood:$bgbad)."'><font color='".($thp_hsupa >= 40?$good:$bad)."'>".$thp_hsupa."</font></td>";
					echo "<td bgcolor='".($availability >= 99.50?$bggood:$bgbad)."'><font color='".($availability >= 99.50?$good:$bad)."'>".$availability."</font></td>";					
					echo "<td bgcolor='".($retention_cs >= 99.50?$bggood:$bgbad)."'><font color='".($retention_cs >= 99.50?$good:$bad)."'>".$retention_cs."</font></td>";
					echo "<td bgcolor='".($retention_ps >= 100?$bggood:$bgbad)."'><font color='".($retention_ps >= 100?$good:$bad)."'>".$retention_ps."</font></td>";
					echo "<td bgcolor='".($hsdpa_users_ratio >= 99.50?$bggood:$bgbad)."'><font color='".($hsdpa_users_ratio >= 99.50?$good:$bad)."'>".$hsdpa_users_ratio."</font></td>";					
					echo "<td bgcolor='".($rtwp <= -90?$bggood:$bgbad)."'><font color='".($rtwp <= -90?$good:$bad)."'>".$rtwp."</font></td>";
					echo "<td bgcolor='".($nqi_cs >= 85?$good:($nqi_cs >= 70?$yellow:$bad))."'>".$nqi_cs."</td>";
					echo "<td bgcolor='".($nqi_hs >= 85?$good:($nqi_hs >= 70?$yellow:$bad))."'>".$nqi_hs."</td>";
					echo "<td bgcolor='#FFFFFF'><font color='red'>".$kpis_out."</font></td>";
					echo "<th bgcolor='".($kpi == 'OK'?$good:$bad)."'>".$kpi."</th>";
					
					echo "<td bgcolor='".($status_availability == 'OK'?$bggood:$bgbad)."'><font color='".($status_availability == 'OK'?$good:$bad)."'>".$status_availability."</font></td>";
					echo "<td bgcolor='#FFFFFF'>".$vswrs."</td>";
					echo "<td bgcolor='".($status_vswr == 'OK'?$bggood:$bgbad)."'><font color='".($status_vswr == 'OK'?$good:$bad)."'>".$status_vswr."</font></td>";
					echo "<td bgcolor='#FFFFFF'>".$uncleared_alarms."</td>";					
					echo "<td bgcolor='#FFFFFF'>".$note_omr."</td>";					
					echo "<th bgcolor='".($omr == 'OK'?$good:$bad)."'>".$omr."</th>";
					
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
					echo "<td bgcolor='#FFFFFF'>".$note_tx_omr."</td>";
					echo "<th bgcolor='".($tx_omr == 'OK'?$good:$bad)."'>".$tx_omr."</th>";

					echo "<td bgcolor='".($rtwp_check == 'OK'?$bggood:$bgbad)."'><font color='".($rtwp_check == 'OK'?$good:$bad)."'>".$rtwp_check."</font></td>";
					echo "<td bgcolor='".($ee_balanced == 'OK'?$bggood:$bgbad)."'><font color='".($ee_balanced == 'OK'?$good:$bad)."'>".$ee_balanced."</font></td>";
					echo "<td bgcolor='".($rf_shaping_rate>=95?"#B1D38D":($rf_shaping_rate>=60?"#FCFA87":($rf_shaping_rate>=40?"#FDBD4F":($rf_shaping_rate<40?"#FF7272":("#FFFFFF")))))."'>".$rf_shaping_rate."</td>";
					echo "<td bgcolor='#FFFFFF'>".$covered_sites_count."</td>";
					echo "<td bgcolor='#FFFFFF'>".$covered_sites."</td>";
					echo "<td bgcolor='".($no_overshooter == 'OK'?$bggood:$bgbad)."'><font color='".($no_overshooter == 'OK'?$good:$bad)."'>".$no_overshooter."</font></td>";
					echo "<td bgcolor='#FFFFFF'><font color='".($online_status == 'AVAILABLE'?$good:$bad)."'>".$online_status."</font></td>";					
					echo "<td bgcolor='#FFFFFF'>".$actual_tilt."</td>";		
					echo "<td bgcolor='".($parameter_check == 'OK'?$bggood:$bgbad)."'><font color='".($parameter_check == 'OK'?$good:$bad)."'>".$parameter_check."</font></td>";
					echo "<td bgcolor='#FFFFFF'>".$mo_out."</td>";	
					echo "<td bgcolor='#FFFFFF'>".$neighbour_check."</td>";						
					echo "<th bgcolor='".($otm == 'OK'?$good:$bad)."'>".$otm."</th>";

					echo "<td bgcolor='".($ee <=15?$bggood:($ee <=40?"#FFF788":$bgbad))."'><font color='".($ee <=15?$good:($ee <=40?"#B8860B":$bad))."'>".$ee."</font></td>";
					echo "<td bgcolor='".($ee_status =='NORMAL'?"#B1D38D":($ee_status =='CORRECTIVE'?"#FCFA87":($ee_status =='CRITICAL'?"#FF7272":"#FFFFFF")))."'><font color='#000000'>".$ee_status."</font></td>";
					echo "<td bgcolor='".($load <=80?$bggood:$bgbad)."'><font color='".($load <=80?$good:$bad)."'>".$load."</font></td>";
					echo "<td bgcolor='".($code_utilization <=70?$bggood:$bgbad)."'><font color='".($code_utilization <=70?$good:$bad)."'>".$code_utilization."</font></td>";
					echo "<td bgcolor='".($dlpower_utilization <=70?$bggood:$bgbad)."'><font color='".($dlpower_utilization <=70?$good:$bad)."'>".$dlpower_utilization."</font></td>";
					echo "<td bgcolor='".($user_fach_utilization <=70?$bggood:$bgbad)."'><font color='".($user_fach_utilization <=70?$good:$bad)."'>".$user_fach_utilization."</font></td>";
					echo "<td bgcolor='".($rach_utilization <=70?$bggood:$bgbad)."'><font color='".($rach_utilization <=70?$good:$bad)."'>".$rach_utilization."</font></td>";
					echo "<td bgcolor='".($pch_utilization <=60?$bggood:$bgbad)."'><font color='".($pch_utilization <=60?$good:$bad)."'>".$pch_utilization."</font></td>";
					echo "<td bgcolor='".($cnbap_utilization <=60?$bggood:$bgbad)."'><font color='".($cnbap_utilization <=60?$good:$bad)."'>".$cnbap_utilization."</font></td>";
					echo "<td bgcolor='".($dlce_utilization <=70?$bggood:$bgbad)."'><font color='".($dlce_utilization <=70?$good:$bad)."'>".$dlce_utilization."</font></td>";
					echo "<td bgcolor='".($ulce_utilization <=70?$bggood:$bgbad)."'><font color='".($ulce_utilization <=70?$good:$bad)."'>".$ulce_utilization."</font></td>";					
					echo "<th bgcolor='".($cap == 'OK'?$good:$bad)."'>".$cap."</th>";

					echo "<td bgcolor='#FFFFFF' style='white-space:nowrap'>".$board_found."</td>";
					echo "<td bgcolor='".($status_board == 'OK'?$bggood:$bgbad)."'><font color='".($status_board == 'OK'?$good:$bad)."'>".$status_board."</font></td>";
					echo "<td bgcolor='".($np_action_found == 'Yes'?$bgbad:$bggood)."'><font color='".($np_action_found == 'Yes'?$bad:$good)."'>".$np_action_found."</font></td>";
					echo "<td bgcolor='#FFFFFF'>".$np_solution."</td>";
					echo "<td bgcolor='#FFFFFF'>".$note_rf."</td>";					
					echo "<td bgcolor='#FFFFFF'>".$end_integration_plan."</td>";					
					echo "<td bgcolor='#FFFFFF'>".$end_integration_actual."</td>";					
					echo "<th bgcolor='".($rf == 'OK'?$good:$bad)."'>".$rf."</th>";
					
					echo "<td bgcolor='#FFFFFF'>".$lqw964qam01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9ccpic01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9ccpic201."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9ceeff01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9ceover01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9ccpic301."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9ddc01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9dlce01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9dhcpmp01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9cqipc01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9dyncce01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9hsdpa01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9hdcode01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9hsupa01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9upatds01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9hu2ms01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9uic01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9locell01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9utic01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9ulsha01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9ulce01."</td>";
					echo "<td bgcolor='#FFFFFF'>".$lqw9colpc01."</td>";
					echo "<th bgcolor='#FFFFFF' style='white-space:nowrap'>".$imp."</th>";
					echo "<th bgcolor='".($imp_status == 'OK'?$good:($imp_status == 'NOK'?$bad:"#FFFFFF"))."'>".$imp_status."</th>";
					
					echo "<td bgcolor='".($count_of_kpi == 0?$verde:($count_of_kpi == 1?$amarelo:(($count_of_kpi == 2 or $count_of_kpi == 3)?$laranja:($count_of_kpi == 4?$vermelho:'#FFFFFF'))))."'>".$count_of_kpi."</td>";
					echo "<td bgcolor='".($count_of_analysis == 0?$verde:($count_of_analysis == 1?$amarelo:(($count_of_analysis == 2 or $count_of_analysis == 3)?$laranja:($count_of_analysis == 4?$vermelho:'#FFFFFF'))))."'>".$count_of_analysis."</td>";
					echo "<td bgcolor='".($count_of_omr == 0?$verde:($count_of_omr == 1?$amarelo:(($count_of_omr == 2 or $count_of_omr == 3)?$laranja:($count_of_omr == 4?$vermelho:'#FFFFFF'))))."'>".$count_of_omr."</td>";
					echo "<td bgcolor='".($count_of_tx_omr == 0?$verde:($count_of_tx_omr == 1?$amarelo:(($count_of_tx_omr == 2 or $count_of_tx_omr == 3)?$laranja:($count_of_tx_omr == 4?$vermelho:'#FFFFFF'))))."'>".$count_of_tx_omr."</td>";
					echo "<td bgcolor='".($count_of_otm == 0?$verde:($count_of_otm == 1?$amarelo:(($count_of_otm == 2 or $count_of_otm == 3)?$laranja:($count_of_otm == 4?$vermelho:'#FFFFFF'))))."'>".$count_of_otm."</td>";
					echo "<td bgcolor='".($count_of_cap == 0?$verde:($count_of_cap == 1?$amarelo:(($count_of_kpi == 2 or $count_of_cap == 3)?$laranja:($count_of_cap == 4?$vermelho:'#FFFFFF'))))."'>".$count_of_cap."</td>";
					echo "<td bgcolor='".($count_of_plan_eng_rf == 0?$verde:($count_of_plan_eng_rf == 1?$amarelo:(($count_of_plan_eng_rf == 2 or $count_of_plan_eng_rf == 3)?$laranja:($count_of_plan_eng_rf == 4?$vermelho:'#FFFFFF'))))."'>".$count_of_plan_eng_rf."</td>";
					echo "<td bgcolor='".($count_of_imp == 0?$verde:($count_of_imp == 1?$amarelo:(($count_of_imp == 2 or $count_of_imp == 3)?$laranja:($count_of_imp == 4?$vermelho:'#FFFFFF'))))."'>".$count_of_imp."</font></td>";
					echo "<td bgcolor='".($count_of_normal == 4?$verde:($count_of_normal == 3?$amarelo:(($count_of_normal == 2 or $count_of_normal == 1)?$laranja:($count_of_normal == 0?$vermelho:'#FFFFFF'))))."'>".$count_of_normal."</td>";
					echo "<td bgcolor='#FFFFFF' style='white-space:nowrap'>".$area_hist."</td>";				
					echo "<th bgcolor='".($area == 'ANALYSIS'?"#D3D3D3":($area == 'OMR'?"#7A30A0":($area == 'TX/OMR'?"#F4E1E1":($area == "OTM"?"#0070C0":($area == 'CAP'?"#FFC000":($area == 'PLAN/ENG RF'?"#C00000":($area == 'NORMAL'?'#00B050':($area == 'IMP'?'#002060':'#FFFFFF'))))))))."'><font color='".($area == 'IMP'?"#FFFFFF":"#000000")."'>".$area."</font></th>";

					echo "<td bgcolor='#FFFFFF'>".$id."</td>";
					echo "<td bgcolor='#FFFFFF'>".$plan_area."</td>";
					echo "<td bgcolor='#FFFFFF'>".$causas."</td>";
					echo "<td bgcolor='#FFFFFF'>".$data_criacao_week."</td>";
					echo "<td bgcolor='#FFFFFF'>".$planejamento_week."</td>";
					echo "<td bgcolor='#FFFFFF'>".$conclusao_week."</td>";
					if($reportnetype=='cell'){
					echo "<td bgcolor='#FFFFFF'><input type='text' name='comentarios' value=".$comentarios."></td>";
					}
					else{
					echo "<td bgcolor='#FFFFFF'>".$comentarios."</td>";	
					}
					echo "<td bgcolor='#FFFFFF'>".$atividade_plano_nominal."</td>";
					echo "<td bgcolor='#FFFFFF'>".$status_acao."</td>";
					echo "<th bgcolor='#FFFFFF'>".$overall_plan_area."</th>";
					
					echo "<td bgcolor='#FFFFFF'>".$inc_num."</td>";
					echo "<td bgcolor='#FFFFFF'>".$inc_description."</td>";
					echo "<td bgcolor='#FFFFFF'>".$inc_status."</td>";
					echo "<td bgcolor='#FFFFFF'>".$inc_update."</td>";
					echo "<td bgcolor='#FFFFFF'>".$inc_group."</td>";
					echo "<th bgcolor='#FFFFFF'>".$inc_area."</th>";
					
					echo "</tr>";						
				}
				
			?>
	
		</tbody>
	</table>
</div>
<br>
</body>
</html>