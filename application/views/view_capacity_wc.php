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

<?php
if ($reportnetype == 'node') {
echo "<div id='acc' style='min-width: 80%; max-width: 80%; height: 500px; margin: 0 auto'></div>";
}
$nekpi = str_replace('_',' ',$nekpi);
$nekpi = strtoupper($nekpi);
?>

<br>
	<table id="table_id" class="cell-border compact hover" border="1 solid black" cellspacing="0" width="80%">

		<thead>
			<tr>
				<th rowspan="2" bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-size:20pt'"><?php echo strtoupper($capacity[0]->nodetype); ?></font></th>
				<th rowspan="2" bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-size:20pt'">REGION</font></th>
				<th rowspan="2" bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-size:20pt'">RNC</font></th>

				<?php 	
				echo "<th bgcolor='#3C6D7A'><font color='#FFFFFF' style='font-family: calibri; font-size:12pt''>W".$capacity[0]->week."</font></th>";
				?>
				
				</tr>			
				
		<tr>
		<th bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-size:20pt'"><?php echo $nekpi; ?><font></th>
		</tr>
		
		</thead>
	
		<tbody>	

			<?php
			$bad2 = "#FF7272";
			$good2 = "#B1D38D";
			$bad = "#FF0000";
			$good = "#92D050";
			$orange = "#FAA20A";
			$yellow = "yellow";
			$yellow2 = "#FCFA87";
			$title = "#3C6D7A";	
				foreach($capacity as $row)
				{	
					$region = $row->region;
					$rnc = $row->rnc;
					$node = $row->node;
					$utilization = $row->utilization;
					
					echo "<tr>";
					echo "<td bgcolor='#EDEDEB'><b><a href='#' onclick='selectne_cap(this)'>".$node."</a></b></td>";
					echo "<td bgcolor='#FFFFFF'>".$region."</td>";
					echo "<td bgcolor='#FFFFFF'>".$rnc."</td>";
					echo "<td bgcolor='#FFFFFF'>".$utilization."</td>";
					echo "</tr>";						
					
				}
				
			?>
	
		</tbody>
	</table>

</div>
<br>
</body>
</html>