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
<br>
<div id="loading_table" align="center" style="visibility:hidden">

<div id="pie" style="min-width: 50%; max-width: 50%; height: 500px; margin: 0 auto"></div>

<br>
<br>

<div id="column" style="min-width: 70%; max-width: 70%; height: 600px; margin: 0 auto"></div>

<br>
</div>
</body>
</html>