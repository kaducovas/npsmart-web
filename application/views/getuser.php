<?php
$q1 = ($_GET['q1']);
$q2 = ($_GET['q2']);
$q3 = ($_GET['q3']);
$q4 = ($_GET['q4']);
$q5 = ($_GET['q5']);
$q6 = ($_GET['q6']);

$d1 = ($_GET['d1']);
$d2 = ($_GET['d2']);
$d3 = ($_GET['d3']);
$d4 = ($_GET['d4']);
$d5 = ($_GET['d5']);
$d6 = ($_GET['d6']);

$c1 = ($_GET['c1']);
$c2 = ($_GET['c2']);
$c3 = ($_GET['c3']);
$c4 = ($_GET['c4']);
$c5 = ($_GET['c5']);
$c6 = ($_GET['c6']);

$t1 = ($_GET['t1']);
$t2 = ($_GET['t2']);
$t3 = ($_GET['t3']);
$t4 = ($_GET['t4']);
$t5 = ($_GET['t5']);
$t6 = ($_GET['t6']);

$f1 = ($_GET['f1']);
$f2 = ($_GET['f2']);
$f3 = ($_GET['f3']);
$f4 = ($_GET['f4']);
$f5 = ($_GET['f5']);
$f6 = ($_GET['f6']);


if($q1 != ""){
$kpi_query1 = $this->db->query("".$q1."");
}
if($q2 != ""){
$kpi_query2 = $this->db->query("".$q2."");
}
if($q3 != ""){
$kpi_query3 = $this->db->query("".$q3."");
}
if($q4 != ""){
$kpi_query4 = $this->db->query("".$q4."");
}
if($q5 != ""){
$kpi_query5 = $this->db->query("".$q5."");
}
if($q6 != ""){
$kpi_query6 = $this->db->query("".$q6."");
}


?>

<!DOCTYPE html>
<html>
<head>
<style>

#containera {
	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto
}


</style>
</head>
<body>
<div id="container"></div>
</body>
<script type="text/javascript" id="runscript_hourly">
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
	exporting: {
						enabled: true,
	},
	title: {
				text: 'NPSmart',// - ' + node,
				x: -20, //center
	},	
    xAxis: {
        type: 'datetime',
		tickInterval: 1 * 3600 * 1000
    },
	yAxis: [{
		endOnTick: true,
        lineWidth: 1,
        title: {
            text: ''
        }
		}, {
        lineWidth: 1,
        opposite: true,
        title: {
            text: ''
        }
    }],
	legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
	},
	plotOptions: {
            series: {
                compare: 'percentet'
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
		
        data: [
		<?php
        if($q1 != ""){    
		for ($i = 0; $i < $kpi_query1->num_rows(); $i++) {
		$row = $kpi_query1->row_array($i);
		echo "[Date.parse('".$row['date']." GMT-0000'), ".$row['node']."], ";	
		}
		}		
        ?>		
        ],
		yAxis: <?php echo $c1 ?>
		},{
		type: '<?php
						if($t1 == 1){
						echo 'line';	
						}else if($t1 == 2){
						echo 'area';	
						}else if($t1 == 3){
						echo 'column';	
						}
						?>', 
						
		name: '<?php echo $f2 ?>',
		
        data: [
		<?php
        if($q2 != ""){    
		for ($i = 0; $i < $kpi_query2->num_rows(); $i++) {
		$row = $kpi_query2->row_array($i);
		echo "[Date.parse('".$row['date']." GMT-0000'), ".$row['node']."], ";	
		}
		}		
        ?>		
        ],
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
		
        data: [
		<?php
        if($q3 != ""){    
		for ($i = 0; $i < $kpi_query3->num_rows(); $i++) {
		$row = $kpi_query3->row_array($i);
		echo "[Date.parse('".$row['date']." GMT-0000'), ".$row['node']."], ";	
		}
		}		
        ?>		
        ],
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
		
        data: [
		<?php
        if($q4 != ""){    
		for ($i = 0; $i < $kpi_query4->num_rows(); $i++) {
		$row = $kpi_query2->row_array($i);
		echo "[Date.parse('".$row['date']." GMT-0000'), ".$row['node']."], ";	
		}
		}		
        ?>		
        ],
		yAxis: <?php echo $c4 ?>
		}]
});
});
});

  </script>
<script type="text/javascript" id="runscript">
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
	
	exporting: {
						enabled: true,
	},
	
	title: {
				text: 'NPSmart',// - ' + node,
				x: -20, //center
	},	
	
    xAxis: {
				type: 'datetime',
				dateTimeLabelFormats: {
				day: '%d %b'    //ex- 01 Jan 2016
		}
    },
	
	yAxis: [{
		endOnTick: true,
        lineWidth: 1,
        title: {
            text: ''
        }
		}, {
        lineWidth: 1,
        opposite: true,
        title: {
            text: ''
        }
    }],
	
	legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
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


  </script>
<script type="text/javascript" id="runscript_week">
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
	
	exporting: {
						enabled: true,
	},
	
	title: {
				text: 'NPSmart',// - ' + node,
				x: -20, //center
	},	
	
     xAxis: {
				// type: 'datetime',
				// dateTimeLabelFormats: {
				// day: '%d %b'    //ex- 01 Jan 2016
				tickInterval: 1
		// }
     },
	
	yAxis: [{
		endOnTick: true,
        lineWidth: 1,
        title: {
            text: ''
        }
		}, {
        lineWidth: 1,
        opposite: true,
        title: {
            text: ''
        }
    }],
	
	legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
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
		echo "[".$row['week'].", ".$row['node']."], ";	
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
		echo "[".$row['week'].", ".$row['node']."], ";	
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
		echo "[".$row['week'].", ".$row['node']."], ";	
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
		echo "[".$row['week'].", ".$row['node']."], ";	
		}
		}		
        ?>],
		
		yAxis: <?php echo $c4 ?>
    }
	]
});
});
});

</script>
<script type="text/javascript" id="runscript_month">
	///////////////////////////////////START charts////////////////////////////////////////////////
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
	
	exporting: {
						enabled: true,
	},
	
	title: {
				text: 'NPSmart',// - ' + node,
				x: -20, //center
	},	
	
     xAxis: {
				// type: 'datetime',
				// dateTimeLabelFormats: {
				// day: '%d %b'    //ex- 01 Jan 2016
				tickInterval: 1
		// }
     },
	
	yAxis: [{
		endOnTick: true,
        lineWidth: 1,
        title: {
            text: ''
        }
		}, {
        lineWidth: 1,
        opposite: true,
        title: {
            text: ''
        }
    }],
	
	legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
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
		echo "[".$row['month'].", ".$row['node']."], ";	
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
		echo "[".$row['month'].", ".$row['node']."], ";	
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
		echo "[".$row['month'].", ".$row['node']."], ";	
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
		echo "[".$row['month'].", ".$row['node']."], ";	
		}
		}		
        ?>],
		
		yAxis: <?php echo $c4 ?>
    }
	]
});
});
});
</script>
</html>

