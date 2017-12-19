<script type="text/javascript">
//var reportnename = <?php echo $reportnename;?>
//var node = 'CO';

</script>
 
 <div id="container" class="main"> 

<form action="/npsmart/umts/worstcells" name="wcform" method="post">
<input type="hidden" id="wcreportnename" name="reportnename" value="" />
<input type="hidden" id="wcreportnetype" name="reportnetype" value="" />
<input type="hidden" id="wctimeagg" name="timeagg" value="" />
<input type="hidden" id="wcreportdate" name="reportdate" value="" />
<input type="hidden" id="wckpi" name="kpi" value="" />

<div width="50%">
	
</div>

<br><br>
<div id="content" class="chart_content"><div id="acc" class="chart1"></div></div>
<div id="content" class="chart_content"><div id="drop" class="chart"></div></div>
<div style="clear: both;"></div>			
<div id="content" class="chart_content"><div id="traffic" class="chart"></div></div>			
<div id="content" class="chart_content"><div id="users" class="chart"></div></div>
<div style="clear: both;"></div>
<div id="content" class="chart_content"><div id="thp" class="chart"></div></div>
<div id="content" class="chart_content"><div id="retention" class="chart"></div></div>	
<div style="clear: both;"></div>			
<div id="content" class="chart_content"><div id="handover" class="chart"></div></div>
<div id="content" class="chart_content"><div id="sho_overhead" class="chart"></div></div>
<div style="clear: both;"></div>			
<div id="content" class="chart_content"><div id="availability" class="chart"></div></div>			
<div id="content" class="chart_content"><div id="rtwp" class="chart"></div></div>
<div style="clear: both;"></div>			
<!--	<div id="content" class="chart_content"><div id="fails_rrc" class="chart1"></div></div>
	<div id="content" class="chart_content"><div id="fails_hs" class="chart1"></div></div>
	<div style="clear: both;"></div>
	<div id="content" class="chart_content"><div id="acc_cs" class="chart1"></div></div>
	<div id="content" class="chart_content"><div id="acc_ps" class="chart1"></div></div>
	<div style="clear: both;"></div>
	<div id="content" class="chart_content"><div id="fails_cs" class="chart"></div></div>
	<div id="content" class="chart_content"><div id="fails_ps" class="chart"></div></div>
	<div style="clear: both;"></div>-->
</form>
</div>
	<button id="export">Export all</button>
</body>
</html>