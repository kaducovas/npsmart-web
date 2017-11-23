<!DOCTYPE html>
<html>
<body>

<div id="container" style="height: 400px; min-width: 600px"></div>

</body>
<script type="text/javascript" id="runscript">
$.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=large-dataset.json&callback=?', function (data) {
$(function () {
var chart;
$(document).ready(function() {
	Highcharts.setOptions({
    colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4']
});
	
var acc = new Highcharts.Chart({
        chart: {
            renderTo: 'container',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
        },
        title: {
            text: 'Scrollbar on Y axis'
        },
        subtitle: {
            text: 'Zoom in to see the scrollbar'
        },
		xAxis: {
				type: 'datetime',
				dateTimeLabelFormats: {
				day: '%d %b'    //ex- 01 Jan 2016
		}
    },
        yAxis: {
            scrollbar: {
                enabled: true,
                showFull: false
            }
        },
        series: [{
		type: '<?php
						if($t1 == 1){
						echo 'line';	
						}else if($t1 == 2){
						echo 'area';	
						}else if($t1 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f1 ?>',
		
        data: [<?php
        if($q1 != ""){    
		for ($i = 0; $i < $kpi_query1->num_rows(); $i++) {
		$row = $kpi_query1->row_array($i);
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}		
        ?>],
		
		yAxis: <?php echo $c1 ?>
    },{
		type: '<?php
						if($t2 == 1){
						echo 'line';	
						}else if($t2 == 2){
						echo 'area';	
						}else if($t2 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f2 ?>',
		
        data: [<?php
        if($q2 != ""){    
		for ($i = 0; $i < $kpi_query2->num_rows(); $i++) {
		$row = $kpi_query2->row_array($i);
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}		
        ?>],
		
		yAxis: <?php echo $c2 ?>
    },{
		type: '<?php
						if($t3 == 1){
						echo 'line';	
						}else if($t3 == 2){
						echo 'area';	
						}else if($t3 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f3 ?>',
		
        data: [<?php
        if($q3 != ""){    
		for ($i = 0; $i < $kpi_query3->num_rows(); $i++) {
		$row = $kpi_query3->row_array($i);
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}		
        ?>],
		
		yAxis: <?php echo $c3 ?>
    },{
		type: '<?php
						if($t4 == 1){
						echo 'line';	
						}else if($t4 == 2){
						echo 'area';	
						}else if($t4 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f4 ?>',
		
        data: [<?php
        if($q4 != ""){    
		for ($i = 0; $i < $kpi_query4->num_rows(); $i++) {
		$row = $kpi_query4->row_array($i);
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}		
        ?>],
		
		yAxis: <?php echo $c4 ?>,
    },{
		type: '<?php
						if($t5 == 1){
						echo 'line';	
						}else if($t5 == 2){
						echo 'area';	
						}else if($t5 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f5 ?>',
		
        data: [<?php
        if($q5 != ""){    
		for ($i = 0; $i < $kpi_query5->num_rows(); $i++) {
		$row = $kpi_query5->row_array($i);
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}		
        ?>],
		
		yAxis: <?php echo $c6 ?>,
    },{
		type: '<?php
						if($t6 == 1){
						echo 'line';	
						}else if($t6 == 2){
						echo 'area';	
						}else if($t6 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f6 ?>',
		
        data: [<?php
        if($q6 != ""){    
		for ($i = 0; $i < $kpi_query6->num_rows(); $i++) {
		$row = $kpi_query6->row_array($i);
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}		
        ?>],
		
		yAxis: <?php echo $c6 ?>,
    }
	]
    });
});
});
});

  </script>
</html>