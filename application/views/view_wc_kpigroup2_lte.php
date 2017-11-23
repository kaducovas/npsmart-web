<script type="text/javascript" >
$(document).ready( function () {
  $('#table-sparkline').DataTable( {
    "bPaginate": true,
	"aaSorting": [],
	"bInfo": true,
	"bFilter": true,
	"dom": '<"top">rt<"bottom"ifp><"clear">',
	"iDisplayLength": 24,
	
	"language": {
            //"lengthMenu": "Display _MENU_ cells per page",
            "lengthMenu": "",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing _PAGE_ page of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        }
  } );
} );

var kpi = "<?php echo $this->input->post('kpi'); ?>";
var wcdate = "<?php echo $this->input->post('wcdate'); ?>";
var node = "<?php echo $this->input->post('node'); ?>";
</script>
<form action="/npsmart/lte/worstcells" name="wcform" method="post">
<input type="hidden" id="node" name="node" value="" />
<input type="hidden" id="cellname" name="cellname" value="" />
<input type="hidden" id="date" name="wcdate" value="" />
<input type="hidden" id="kpi" name="kpi" value="" />
<div class="dashboard">
<div id="content" class="wc_chart_content">	
		
		<div id="wcchart1" class="border" style="margin-bottom:1%; height:98%;"></div>
		<div id="wcchart2" class="border" style="margin-top:1%; height:98%;"></div>
</div>

<div class="wc border">

<?php

if ($this->input->post('kpi') == 'DL THP'){
	$target = 15;
	$bad = "#FF0000";	
	$good = "#009900";
} elseif ($this->input->post('kpi') == 'UL THP'){
	$target = 2;
	$bad = "#FF0000";	
	$good = "#009900";
} elseif ($this->input->post('kpi') == 'Interference'){
	$target = -115;
	$good = "#FF0000";	
	$bad = "#009900";
}  

// //replace retainability for drop as drop kpis is shown on worst cells page
// if (strpos($this->input->post('kpi'),'retainability')) {
	// $kpi = $this->input->post('kpi');
// } else {
	// $kpi = $this->input->post('kpi');
// }


?>

<table id="table-sparkline" class="stripe hover compact row-border" bgcolor="#ffffff">
    <thead>
        <tr>
            <!--<th bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">Date</font></th>-->
            <th bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">Worst Cells</font></th>
            <th bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt"><?php echo  $this->input->post('kpi');?></font></th>
            <!--<th>Daily KPI</th>-->
            <th bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt"><?php echo  "Daily ".$this->input->post('kpi');?></font></th>
			<th bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">Node Mean KPI</font></th>
			<th bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">New Node Mean KPI</font></th>
        </tr>
    </thead>
    <tbody id="tbody-sparkline">
	
	
	<?php
			foreach($wc as $row){
		
			#echo "<tr><th onclick='selected(this)'>";
			echo "<tr><th>";

			#echo $row->date."</th>";
			echo $row->cellname."</th>";
			echo "<td><font color='".($row->kpi_cell_rate >= $target?$good:$bad)."'>".$row->kpi_cell_rate."</font></td>";
			#echo '<td data-sparkline="'.str_replace(',', ', ', $row->daily_kpi_cell_rate).'" />';		
			echo '<td data-sparkline="'.str_replace(',', ', ', $row->daily_kpi_cell_rate).'" />';
			echo "<td><font color='".($row->kpi_node_rate >= $target?$good:$bad)."'>".$row->kpi_node_rate."</font></td>";
			echo "<td><font color='".($row->new_node_kpi >= $target?$good:$bad)."'>".$row->new_node_kpi."</font></td>";		
		#	echo '<td data-sparkline="-20, 90, -21, 74 ; column"/>';
			echo "</tr>";
			}
	?>
    </tbody>
</table>
</div>
<div style="clear: both;"></div>
</div>
</form>

	