<?php

$q1 = ($_GET['q1']);
$q2 = ($_GET['q2']);
$q3 = ($_GET['q3']);
$q4 = ($_GET['q4']);
$q5 = ($_GET['q5']);
$q6 = ($_GET['q6']);
$q7 = ($_GET['q7']);
$q8 = ($_GET['q8']);
$q9 = ($_GET['q9']);

$d1 = ($_GET['d1']);
$d2 = ($_GET['d2']);
$d3 = ($_GET['d3']);
$d4 = ($_GET['d4']);
$d5 = ($_GET['d5']);
$d6 = ($_GET['d6']);
$d7 = ($_GET['d7']);
$d8 = ($_GET['d8']);
$d9 = ($_GET['d9']);

$c1 = ($_GET['c1']);
$c2 = ($_GET['c2']);
$c3 = ($_GET['c3']);
$c4 = ($_GET['c4']);
$c5 = ($_GET['c5']);
$c6 = ($_GET['c6']);
$c7 = ($_GET['c7']);
$c8 = ($_GET['c8']);
$c9 = ($_GET['c9']);

$t1 = ($_GET['t1']);
$t2 = ($_GET['t2']);
$t3 = ($_GET['t3']);
$t4 = ($_GET['t4']);
$t5 = ($_GET['t5']);
$t6 = ($_GET['t6']);
$t7 = ($_GET['t7']);
$t8 = ($_GET['t8']);
$t9 = ($_GET['t9']);

$f1 = ($_GET['f1']);
$f2 = ($_GET['f2']);
$f3 = ($_GET['f3']);
$f4 = ($_GET['f4']);
$f5 = ($_GET['f5']);
$f6 = ($_GET['f6']);
$f7 = ($_GET['f7']);
$f8 = ($_GET['f8']);
$f9 = ($_GET['f9']);

$ct1 = ($_GET['ct1']);
$ct2 = ($_GET['ct2']);
$ct3 = ($_GET['ct3']);
$ct4 = ($_GET['ct4']);
$ct5 = ($_GET['ct5']);
$ct6 = ($_GET['ct6']);
$ct7 = ($_GET['ct7']);
$ct8 = ($_GET['ct8']);
$ct9 = ($_GET['ct9']);


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

if($q7 != ""){
$kpi_query7 = $this->db->query("".$q7."");
}	

if($q8 != ""){
$kpi_query8 = $this->db->query("".$q8."");
}

if($q9 != ""){
$kpi_query9 = $this->db->query("".$q9."");
}

if(($ct1 == 3) && ($q1 != "")){
$v1 = "true";	
}else{
$v1 = "false";
}

if(($ct2 == 3) && ($q2 != "")){
$v2 = "true";	
}else{
$v2 = "false";
}

if(($ct3 == 3) && ($q3 != "")){
$v3 = "true";	
}else{
$v3 = "false";
}

if(($ct4 == 3) && ($q4 != "")){
$v4 = "true";	
}else{
$v4 = "false";
}

if(($ct5 == 3) && ($q5 != "")){
$v5 = "true";	
}else{
$v5 = "false";
}

if(($ct6 == 3) && ($q6 != "")){
$v6 = "true";	
}else{
$v6 = "false";
}

if(($ct7 == 3) && ($q7 != "")){
$v7 = "true";	
}else{
$v7 = "false";
}

if(($ct8 == 3) && ($q8 != "")){
$v8 = "true";	
}else{
$v8 = "false";
}

if(($ct9 == 3) && ($q9 != "")){
$v9 = "true";	
}else{
$v9 = "false";
}	

?>

<script type="text/javascript" id="runscript_3">
$(function () {
	
var chart;
var estado = true;
var zoom_menu = true;
var legend = ["","","","","","","","","",""];
var color = ["","","","","","","","","",""];
var typeline = ["","","","","","","","","",""];
var widthline = [0,0,0,0,0,0,0,0,0,0];
var legend_old1 = "<?php echo $f1; ?>";
var legend_old2 = "<?php echo $f2; ?>";
var legend_old3 = "<?php echo $f3; ?>";
var legend_old4 = "<?php echo $f4; ?>";
var legend_old5 = "<?php echo $f5; ?>";
var legend_old6 = "<?php echo $f6; ?>";
var legend_old7 = "<?php echo $f7; ?>";
var legend_old8 = "<?php echo $f8; ?>";
var legend_old9 = "<?php echo $f9; ?>";
var pipoco = 0;
var vis_theme = false;
var vis_text = false;
var vis_colors = false;
var vis_line = false;
var fonte = "Arial+Black";

$(document).ready(function() {

var acc = new Highcharts.stockChart({
	chart: {
				renderTo: 'container3',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				resetZoomButton: {
				position: {
					align: 'left', // right by default
					verticalAlign: 'top', 
					x: 47,
					y: 10
				},
				relativeTo: 'chart'
				},
				events: {
						click: function(e) {
						//console.log(e.xAxis[0].axis.categories[Math.round(e.xAxis[0].value)])
						// alert(e.xAxis[0].value);
						if(estado != false){
						if (e.shiftKey == 1) {
						acc.xAxis[0].options.plotLines[1].color = "red";
						acc.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						acc.xAxis[0].update();						
						}else{	
						acc.xAxis[0].options.plotLines[0].color = "red";
						acc.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						acc.xAxis[0].update();
						}
						}
       }
    }
	},
		    rangeSelector: {
            allButtonsEnabled: true,
            buttons: [{
                type: 'week',
                count: 1,
                text: '1 Week',
                dataGrouping: {
                    forced: true,
                    units: [['day', [1]]]
                }
            },{
                type: 'week',
                count: 2,
                text: '2 Weeks',
                dataGrouping: {
                    forced: true,
                    units: [['day', [1]]]
                }
            }, {
                type: 'week',
                count: 3,
                text: '3 Weeks',
                dataGrouping: {
                    forced: true,
                    units: [['day', [1]]]
                }
            }, {
                type: 'month',
				count: 1,
                text: '1 Month',
                dataGrouping: {
                    forced: true,
                    units: [['day', [1]]]
                }
            }, {
                type: 'month',
				count: 6,
                text: '6 Months',
                dataGrouping: {
                    forced: true,
                    units: [['day', [1]]]
                }
            }, {
                type: 'all',
                text: 'All',
                dataGrouping: {
                    forced: true,
                    units: [['day', [1]]]
                }
            }],
			buttonTheme: {
                width: 80
            },
            selected: 5
        },
			exporting: {
			buttons: {
            customButton: {
			    theme: {
                'stroke-width': 1,
                stroke: 'silver',
				fill:"lightgray",
                r: 0,
                states: {
                    hover: {
                        fill: 'gray'
                    },
                    select: {
                        stroke: '#039',
                        fill: '#a4edba'
                    }
                }
            },	
            text: '...',
            onclick: function () {
			if(zoom_menu == true){
            acc.rangeSelector.inputGroup.hide();
			acc.rangeSelector.zoomText.hide();
			$.each(acc.rangeSelector.buttons,function(i,b){
            b.hide();
			zoom_menu = false;
			});
			}else if(zoom_menu == false){
            acc.rangeSelector.inputGroup.show();
			acc.rangeSelector.zoomText.show();
			$.each(acc.rangeSelector.buttons,function(i,b){
            b.show();
			zoom_menu = true;
			});
			}
            }
            }
            },	
			enabled: true,
			chartOptions: {
				title: {
					x: 0,
					y: 35
                },
                rangeSelector: {
                    enabled: false
                }
            }
			},
	
	title: {
				text: 'NPSmart',// - ' + node,
				x: -20, //center
	},	
	
    xAxis: {
			type: 'datetime',
			plotLines: [{
			value: 0,
			dashStyle: 'dash',
			color: 'red',
			width: 2,
			zIndex: 3
      
			},{
			value: 1,
			dashStyle: 'dash',
			color: 'red',
			width: 2,
			zIndex: 3
			}],			
		    labels: {
				format: '{value:%Y-%m-%d}',
				autoRotationLimit: 360
					},
			tickInterval: 24 * 3600 * 1000		
    },
	
yAxis: [{
		 labels: {
            align: 'right',
            x: -5,
        },
		offset: 10,
		startOnTick:true,
		endOnTick: true,
        lineWidth: 1,
		opposite: false,
        title: {
            text: ''
        }
		}, {
		labels: {
        align: 'left',
        x: 5,
        },	
		startOnTick:true,
		endOnTick: true,	
        lineWidth: 1,
        opposite: true,
        title: {
            text: ''
        }
    }],
	
	tooltip: {
	shared: true,
	headerFormat: '<span>{point.key}</span><br/>',		
	pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y:.2f}</b><br/>',	
	},	
	
    plotOptions: {
        series: {
			marker: {
                enabled: false
            },			
            events: {
                legendItemClick: function () {
						this.group.toFront();
						if(this.name == "Marker"){
						if(this.visible == true){
						estado = false;		
						acc.xAxis[0].options.plotLines[0].color = "transparent";
						acc.xAxis[0].options.plotLines[1].color = "transparent";
						acc.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado = true;	
						acc.xAxis[0].options.plotLines[0].color = "red";
						acc.xAxis[0].options.plotLines[1].color = "red";
						
						acc.xAxis[0].update();
						}	
						}
				}
			}
		},
		areaspline: {
        softThreshold: true
        },
		column: {
        softThreshold: true
        }
	},	
			
			
	
	legend: {			
						enabled:true,
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
	},
	
    series: [{
		name: 'Marker'
			},{
		type: '<?php
						if($t1 == 1){
						echo 'spline';	
						}else if($t1 == 2){
						echo 'areaspline';	
						}else if($t1 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f1 ?>',
		
        data: [<?php
		if($ct1 == 3){
        if($q1 != ""){    
		for ($i = 0; $i < $kpi_query1->num_rows(); $i++) {
		$row = $kpi_query1->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		// draggableY: true,
        // dragMinY: 0,
		// dragMaxY: 100,
		
		showInLegend: <?php echo $v1 ?>,
		
		yAxis: <?php echo $c1 ?>
    },{
		type: '<?php
						if($t2 == 1){
						echo 'spline';	
						}else if($t2 == 2){
						echo 'areaspline';	
						}else if($t2 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f2 ?>',
		
        data: [<?php
		if($ct2 == 3){
        if($q2 != ""){    
		for ($i = 0; $i < $kpi_query2->num_rows(); $i++) {
		$row = $kpi_query2->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v2 ?>,
		
		yAxis: <?php echo $c2 ?>
    },{
		type: '<?php
						if($t3 == 1){
						echo 'spline';	
						}else if($t3 == 2){
						echo 'areaspline';	
						}else if($t3 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f3 ?>',
		
        data: [<?php
		if($ct3 == 3){
        if($q3 != ""){    
		for ($i = 0; $i < $kpi_query3->num_rows(); $i++) {
		$row = $kpi_query3->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v3 ?>,
		
		yAxis: <?php echo $c3 ?>
    },{
		type: '<?php
						if($t4 == 1){
						echo 'spline';	
						}else if($t4 == 2){
						echo 'areaspline';	
						}else if($t4 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f4 ?>',

        data: [<?php
		if($ct4 == 3){
        if($q4 != ""){    
		for ($i = 0; $i < $kpi_query4->num_rows(); $i++) {
		$row = $kpi_query4->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v4 ?>,
		
		yAxis: <?php echo $c4 ?>,
    },{
		type: '<?php
						if($t5 == 1){
						echo 'spline';	
						}else if($t5 == 2){
						echo 'areaspline';	
						}else if($t5 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f5 ?>',

        data: [<?php
		if($ct5 == 3){
        if($q5 != ""){    
		for ($i = 0; $i < $kpi_query5->num_rows(); $i++) {
		$row = $kpi_query5->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v5 ?>,
		
		yAxis: <?php echo $c5 ?>,
    },{
		type: '<?php
						if($t6 == 1){
						echo 'spline';	
						}else if($t6 == 2){
						echo 'areaspline';	
						}else if($t6 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f6 ?>',

        data: [<?php
		if($ct6 == 3){
        if($q6 != ""){    
		for ($i = 0; $i < $kpi_query6->num_rows(); $i++) {
		$row = $kpi_query6->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v6 ?>,
		
		yAxis: <?php echo $c6 ?>,
    },{
		type: '<?php
						if($t7 == 1){
						echo 'spline';	
						}else if($t7 == 2){
						echo 'areaspline';	
						}else if($t7 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f7 ?>',

        data: [<?php
		if($ct7 == 3){
        if($q7 != ""){    
		for ($i = 0; $i < $kpi_query7->num_rows(); $i++) {
		$row = $kpi_query7->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v7 ?>,
		
		yAxis: <?php echo $c7 ?>,
    },{
		type: '<?php
						if($t8 == 1){
						echo 'spline';	
						}else if($t8 == 2){
						echo 'areaspline';	
						}else if($t8 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f8 ?>',

        data: [<?php
		if($ct8 == 3){
        if($q8 != ""){    
		for ($i = 0; $i < $kpi_query8->num_rows(); $i++) {
		$row = $kpi_query8->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v8 ?>,
		
		yAxis: <?php echo $c8 ?>,
    },{
		type: '<?php
						if($t9 == 1){
						echo 'spline';	
						}else if($t9 == 2){
						echo 'areaspline';	
						}else if($t9 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f9 ?>',

        data: [<?php
		if($ct9 == 3){
        if($q9 != ""){    
		for ($i = 0; $i < $kpi_query9->num_rows(); $i++) {
		$row = $kpi_query9->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v9 ?>,
		
		yAxis: <?php echo $c9 ?>,
    }
	]
});

//////////////////////////////////////// SETA O VALOR DEFAULT DAS INPUT TEXT DAS ESCALAS ///////////////////////////

var acc = $("#container").highcharts();
$('#scale_max').val(acc.yAxis[0].getExtremes().dataMax);
$('#scale_min').val(acc.yAxis[0].getExtremes().dataMin);

});

//////////////////////////////////////////////////////// CORES DAS LINHAS ////////////////////////////////////////

$('#colorSelector1').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc = $("#container").highcharts();
		$('#colorSelector1').css('backgroundColor', '#' + hex);
		color[1] = hex;
		acc.series[1].update({color: "#"+color[1]+""});
	}
});

$('#colorSelector2').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc = $("#container").highcharts();
		$('#colorSelector2').css('backgroundColor', '#' + hex);
		color[2] = hex;
		acc.series[2].update({color: "#"+color[2]+""});
	}
});

$('#colorSelector3').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc = $("#container").highcharts();
		$('#colorSelector3').css('backgroundColor', '#' + hex);
		color[3] = hex;
		acc.series[3].update({color: "#"+color[3]+""});
	}
});

$('#colorSelector4').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc = $("#container").highcharts();
		$('#colorSelector4').css('backgroundColor', '#' + hex);
		color[4] = hex;
		acc.series[4].update({color: "#"+color[4]+""});
	}
});

$('#colorSelector5').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc = $("#container").highcharts();
		$('#colorSelector5').css('backgroundColor', '#' + hex);
		color[5] = hex;
		acc.series[5].update({color: "#"+color[5]+""});
	}
});

$('#colorSelector6').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc = $("#container").highcharts();
		$('#colorSelector6').css('backgroundColor', '#' + hex);
		color[6] = hex;
		acc.series[6].update({color: "#"+color[6]+""});
	}
});

$('#colorSelector7').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc = $("#container").highcharts();
		$('#colorSelector7').css('backgroundColor', '#' + hex);
		color[7] = hex;
		acc.series[7].update({color: "#"+color[7]+""});
	}
});

$('#colorSelector8').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc = $("#container").highcharts();
		$('#colorSelector8').css('backgroundColor', '#' + hex);
		color[8] = hex;
		acc.series[8].update({color: "#"+color[1]+""});
	}
});

$('#colorSelector9').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc = $("#container").highcharts();
		$('#colorSelector9').css('backgroundColor', '#' + hex);
		color[9] = hex;
		acc.series[9].update({color: "#"+color[1]+""});
	}
});

//////////////////////////////////////////////////////////////// TEMAS /////////////////////////////////////////////

$('#theme').change(function(){
var acc = $("#container").highcharts();		
var x = $(this).val();	
if(x == "SandSignika"){
acc.destroy();	
eval(document.getElementById("Sand_Signika").innerHTML);
Highcharts.setOptions(chart_Sand_Signika);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "DarkUnika"){
acc.destroy();	
eval(document.getElementById("Dark_Unika").innerHTML);
Highcharts.setOptions(chart_Dark_Unika);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "DarkBlue"){
acc.destroy();	
eval(document.getElementById("Dark_Blue").innerHTML);
Highcharts.setOptions(chart_Dark_Blue);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "Skies"){
acc.destroy();	
eval(document.getElementById("Nuvem").innerHTML);
Highcharts.setOptions(chart_Skies);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "DarkGreen"){
acc.destroy();	
eval(document.getElementById("Dark_Green").innerHTML);
Highcharts.setOptions(chart_Dark_Green);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "FlatDark"){
acc.destroy();	
eval(document.getElementById("Flat_Dark").innerHTML);
Highcharts.setOptions(chart_Flat_Dark);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "Null"){
acc.destroy();	
eval(document.getElementById("Empty").innerHTML);
Highcharts.setOptions(chart_null);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "val_ffx"){
acc.destroy();	
eval(document.getElementById("ffx").innerHTML);
Highcharts.setOptions(chart_ffx);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "val_538"){
acc.destroy();	
eval(document.getElementById("538").innerHTML);
Highcharts.setOptions(chart_538);
eval(document.getElementById("runscript").innerHTML);	 
}	
});

//////////////////////////////////////////////////////////////// TÍTULO ///////////////////////////////////////////

$('#txt_title').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
var title = document.getElementById('txt_title').value;	
if(title != ""){
acc.setTitle({text: ""+title+""});
}else{
acc.setTitle({text: "NPSmart"});
}	
});

//////////////////////////////////////////////////////////////// LEGENDAS //////////////////////////////////////////

$('#txt_legend1').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend1").val() != ""){
legend[1] = $("#txt_legend1").val();	
acc.legend.allItems[1].update({name:""+legend[1]+""});
}else{
acc.legend.allItems[1].update({name:""+legend_old1+""});
}	
});

$('#txt_legend2').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend2").val() != ""){
legend[2] = $("#txt_legend2").val();	
acc.legend.allItems[2].update({name:""+legend[2]+""});
}else{
acc.legend.allItems[2].update({name:""+legend_old2+""});
}	
});

$('#txt_legend3').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend3").val() != ""){
legend[3] = $("#txt_legend3").val();	
acc.legend.allItems[3].update({name:""+legend[3]+""});
}else{
acc.legend.allItems[3].update({name:""+legend_old3+""});
}	
});

$('#txt_legend4').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend4").val() != ""){
legend[4] = $("#txt_legend4").val();	
acc.legend.allItems[4].update({name:""+legend[4]+""});
}else{
acc.legend.allItems[4].update({name:""+legend_old4+""});
}	
});

$('#txt_legend5').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend5").val() != ""){
legend[5] = $("#txt_legend5").val();	
acc.legend.allItems[5].update({name:""+legend[5]+""});
}else{
acc.legend.allItems[5].update({name:""+legend_old5+""});
}	
});

$('#txt_legend6').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend6").val() != ""){
legend[6] = $("#txt_legend6").val();	
acc.legend.allItems[6].update({name:""+legend[6]+""});
}else{
acc.legend.allItems[6].update({name:""+legend_old6+""});
}	
});

$('#txt_legend7').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend7").val() != ""){
legend[7] = $("#txt_legend7").val();	
acc.legend.allItems[7].update({name:""+legend[7]+""});
}else{
acc.legend.allItems[7].update({name:""+legend_old7+""});
}	
});

$('#txt_legend8').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend8").val() != ""){
legend[8] = $("#txt_legend8").val();	
acc.legend.allItems[8].update({name:""+legend[8]+""});
}else{
acc.legend.allItems[8].update({name:""+legend_old8+""});
}	
});

$('#txt_legend9').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend9").val() != ""){
legend[9] = $("#txt_legend9").val();	
acc.legend.allItems[9].update({name:""+legend[9]+""});
}else{
acc.legend.allItems[9].update({name:""+legend_old9+""});
}	
});

//////////////////////////////////////////////////////////////// LINE STYLE ////////////////////////////////////////

$('#linestyle1').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle1").val() != ""){
typeline[1] = $("#linestyle1").val();
acc.series[1].update({dashStyle: ""+typeline[1]+""});
}else{
acc.series[1].update({dashStyle: "Solid"});	
}
});

$('#linestyle2').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle2").val() != ""){
typeline[2] = $("#linestyle2").val();
acc.series[2].update({dashStyle: ""+typeline[2]+""});
}else{
acc.series[2].update({dashStyle: "Solid"});	
}
});

$('#linestyle3').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle3").val() != ""){
typeline[3] = $("#linestyle3").val();
acc.series[3].update({dashStyle: ""+typeline[3]+""});
}else{
acc.series[3].update({dashStyle: "Solid"});	
}
});

$('#linestyle4').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle4").val() != ""){
typeline[4] = $("#linestyle4").val();
acc.series[4].update({dashStyle: ""+typeline[4]+""});
}else{
acc.series[4].update({dashStyle: "Solid"});	
}
});

$('#linestyle5').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle5").val() != ""){
typeline[5] = $("#linestyle5").val();
acc.series[5].update({dashStyle: ""+typeline[5]+""});
}else{
acc.series[5].update({dashStyle: "Solid"});	
}
});

$('#linestyle6').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle6").val() != ""){
typeline[6] = $("#linestyle6").val();
acc.series[6].update({dashStyle: ""+typeline[6]+""});
}else{
acc.series[6].update({dashStyle: "Solid"});	
}
});

$('#linestyle7').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle7").val() != ""){
typeline[7] = $("#linestyle7").val();
acc.series[7].update({dashStyle: ""+typeline[7]+""});
}else{
acc.series[7].update({dashStyle: "Solid"});	
}
});

$('#linestyle8').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle8").val() != ""){
typeline[8] = $("#linestyle8").val();
acc.series[8].update({dashStyle: ""+typeline[8]+""});
}else{
acc.series[8].update({dashStyle: "Solid"});	
}
});

$('#linestyle9').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle9").val() != ""){
typeline[9] = $("#linestyle9").val();
acc.series[9].update({dashStyle: ""+typeline[9]+""});
}else{
acc.series[9].update({dashStyle: "Solid"});	
}
});

//////////////////////////////////////////////////////////////// LINE WIDTH ////////////////////////////////////////

$('#linewidth1').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth1").val() != 0){
var width_line = $("#linewidth1").val();
var int_width_line	= parseInt(width_line);
acc.series[1].update({lineWidth: int_width_line});
}else{
acc.series[1].update({lineWidth: 2});	
}	
});

$('#linewidth2').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth2").val() != 0){
var width_line = $("#linewidth2").val();
var int_width_line	= parseInt(width_line);
acc.series[2].update({lineWidth: int_width_line});
}else{
acc.series[2].update({lineWidth: 2});	
}
});

$('#linewidth3').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth3").val() != 0){
var width_line = $("#linewidth3").val();
var int_width_line	= parseInt(width_line);
acc.series[3].update({lineWidth: int_width_line});
}else{
acc.series[3].update({lineWidth: 2});	
}
});

$('#linewidth4').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth4").val() != 0){
var width_line = $("#linewidth4").val();
var int_width_line	= parseInt(width_line);
acc.series[4].update({lineWidth: int_width_line});
}else{
acc.series[4].update({lineWidth: 2});	
}
});

$('#linewidth5').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth5").val() != 0){
var width_line = $("#linewidth5").val();
var int_width_line	= parseInt(width_line);
acc.series[5].update({lineWidth: int_width_line});
}else{
acc.series[5].update({lineWidth: 2});	
}
});

$('#linewidth6').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth6").val() != 0){
var width_line = $("#linewidth6").val();
var int_width_line	= parseInt(width_line);
acc.series[6].update({lineWidth: int_width_line});
}else{
acc.series[6].update({lineWidth: 2});	
}
});

$('#linewidth7').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth7").val() != 0){
var width_line = $("#linewidth7").val();
var int_width_line	= parseInt(width_line);
acc.series[7].update({lineWidth: int_width_line});
}else{
acc.series[7].update({lineWidth: 2});	
}
});

$('#linewidth8').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth8").val() != 0){
var width_line = $("#linewidth8").val();
var int_width_line	= parseInt(width_line);
acc.series[8].update({lineWidth: int_width_line});
}else{
acc.series[8].update({lineWidth: 2});	
}
});

$('#linewidth9').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth9").val() != 0){
var width_line = $("#linewidth9").val();
var int_width_line	= parseInt(width_line);
acc.series[9].update({lineWidth: int_width_line});
}else{
acc.series[9].update({lineWidth: 2});	
}
});

//////////////////////////////////////////////////////////////// SCALE /////////////////////////////////////////////

$('#scale_max').on('keyup mouseup', function(){
	
var x = $('#scale_max').val();
var acc = $("#container").highcharts();
if(x != ""){	
acc.yAxis[0].update({max: ""+x+""});
}else{
$('#scale_max').val(acc.yAxis[0].getExtremes().dataMax);	
acc.yAxis[0].update({max: null});
}	
});

$('#scale_min').on('keyup mouseup', function(){
	
var x = $('#scale_min').val();
var acc = $("#container").highcharts();
if(x != ""){	
acc.yAxis[0].update({min: ""+x+""});
}else{
$('#scale_min').val(acc.yAxis[0].getExtremes().dataMin);	
acc.yAxis[0].update({min: null});
}	
});

//////////////////////////////////////////////////////////////// FONT STYLE ///////////////////////////////////////

$('#myFont').fontselect().change(function(){
        
// replace + signs with spaces for css
var font = $(this).val().replace(/\+/g, ' ');
var acc = $("#container").highcharts();
// split font into family and weight
font = font.split(':');

// set family on paragraphs 
//$('p').css('font-family', font[0]);
 //console.log(font[0]);
fonte = font[0];
acc.update({
chart: {
style: {
fontFamily: "'"+fonte+"', sans-serif"
}
}
});
});

///////////////////////////////////////////////////////////////// FONT SIZE ////////////////////////////////////////

$('#myFontSize_Axis').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc = $("#container").highcharts();

console.log(SizeFont);
// acc.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc.update({
xAxis:{
labels: {
style:{
fontSize: ""+SizeFont+"px"	
}		
}		
}	
});

acc.update({
yAxis:{
labels: {
style:{
fontSize: ""+SizeFont+"px"	
}		
}		
}	
});
	
});

/////////////////////////////////////////////////////// FONT SIZE TITLE ////////////////////////////////////////////

$('#myFontSize_Title').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc = $("#container").highcharts();

console.log(SizeFont);
// acc.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc.update({
title:{
// labels: {
style:{
fontSize: ""+SizeFont+"px"	
}		
// }		
}	
});
	
});

////////////////////////////////////////////////////////////////// COR DOS EIXOS ///////////////////////////////////

$('#colorSelector_Axis').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc = $("#container").highcharts();
		$('#colorSelector_Axis').css('backgroundColor', '#' + hex);
		acc.update({
		xAxis:{
		labels: {
		style:{
		color: '#' + hex	
		}		
		}		
		}	
		});

		acc.update({
		yAxis:{
		labels: {
		style:{
		color: '#' + hex	
		}		
		}		
		}	
		});		
	}
});

////////////////////////////////////////////////////// COR DO TÍTULO ////////////////////////////////////////////////

$('#colorSelector_Title').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc = $("#container").highcharts();
		$('#colorSelector_Title').css('backgroundColor', '#' + hex);
		acc.update({
		title:{
		// labels: {
		style:{
		color: '#' + hex	
		}		
		// }		
		}	
		});		
	}
});

/////////////////////////////////////////// FUNÇOES AO CLICAR NA SETINHA ///////////////////////////////////////////

$( "#btn_theme" ).click(function() {

if(vis_theme == true){
document.getElementById("div_theme").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
vis_theme = false;	
}else if(vis_theme == false){	
document.getElementById("div_theme").style.display = "block";
document.getElementById("div_text").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_theme = true;
}

});

$( "#btn_text" ).click(function() {

if(vis_text == true){
document.getElementById("div_text").style.display = "none";
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_text = false;	
}else if(vis_text == false){	
document.getElementById("div_text").style.display = "block";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-up");
vis_text = true;
}

});	

$( "#btn_colors" ).click(function() {

if(vis_colors == true){
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
vis_colors = false;	
}else if(vis_colors == false){	
document.getElementById("div_text").style.display = "none";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "block";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_colors = true;
}

});	

$( "#btn_line" ).click(function() {

if(vis_line == true){
document.getElementById("div_line").style.display = "none";
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
vis_line = false;	
}else if(vis_line == false){	
document.getElementById("div_text").style.display = "none";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "block";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_line = true;
}

});

$( "#btn_default" ).click(function() {
var acc = $("#container").highcharts();	
acc.destroy();
eval(document.getElementById("runscript").innerHTML);
});		
	
});
  </script>