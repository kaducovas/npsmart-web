	<?php 
	foreach($node_daily_report as $row){
		$date[] = $row->date;
		$node = $row->node;
		$rf_health_index[] = $row->rf_health_index;
		$mobility[] = $row->mobility;
		$throughput[] = $row->throughput;
		$retention_4g[] = $row->retention_4g;
		$data_performance[] = $row->data_performance;
		$voice_performance[] = $row->voice_performance;
		$availability[] = $row->availability;
		$resources_blocking[] = $row->resources_blocking;
		$efficiency[] = $row->efficiency;
		$interface[] = $row-> interface;	
		$quality_ul[] = $row-> quality_ul;
		$overshooters[] = $row-> overshooters;
		$quality_dl[] = $row-> quality_dl;
		$worst_aging_factor[] = $row-> worst_aging_factor;
		$traffic_load[] = $row-> traffic_load;
		$process_tools[] = $row-> process_tools;
		$composite[] = $row-> composite;
		}	
				 
		array_walk($date, create_function('&$str', '$str = "\"$str\"";')); //put quotes in datetime
		//echo "RNC= ".$rnc.", cellname= ".$cellname.", cellid= ".$cellid."<br><br>";
		//echo join($datetime, ',');
		//echo "<br><br>";
		//echo join($acc_rrc, ',');
		#echo '<span size="4" color="#E0E0E3">'.$ne.'</span>';
				 function tonull($n)
		{
			if($n == ''){
				$n = 0;
				#return $n;				
			}
				return $n;
		}
		function tonull2($n)
		{
			if($n == ''){
				$n = 'null';
				#return $n;				
			}
				return $n;
		}
		function tonull3($n)
		{
			if($n > 100){
				$n = 100;
				#return $n;				
			}
				return $n;
		}
		$rf_health_index = array_map("tonull2",$rf_health_index);
		$mobility = array_map("tonull2",$mobility);
		$throughput = array_map("tonull2",$throughput);
		$retention_4g = array_map("tonull2",$retention_4g);
		$data_performance = array_map("tonull2",$data_performance);
		$voice_performance = array_map("tonull2",$voice_performance);
		$availability = array_map("tonull2",$availability);
		$resources_blocking = array_map("tonull2",$resources_blocking);
		$efficiency = array_map("tonull2",$efficiency);
		$interface = array_map("tonull2",$interface);
		$quality_ul = array_map("tonull2",$quality_ul);
		$overshooters = array_map("tonull2",$overshooters);
		$quality_dl = array_map("tonull2",$quality_dl);
		$worst_aging_factor = array_map("tonull2",$worst_aging_factor);
		$traffic_load = array_map("tonull2",$traffic_load);
		$process_tools = array_map("tonull2",$process_tools);
		$composite = array_map("tonull2",$composite);
		?>
		
<script>
///	for (i = 0; i < cars.length; i++) { 
///    text += cars[i] + "<br>";
///}
var node = "<?php echo $node; ?>";
//alert(node);
var nekpi = "<?php echo $nekpi; ?>";
var date = <?php echo json_encode($date); ?>;	

var date = JSON.parse("[" + date + "]");
///alert(datetime[0]);


////////////////////////////////////////EXPORTING THING////////////////////////////////////////////

/**
 * Create a global getSVG method that takes an array of charts as an argument
 */
Highcharts.getSVG = function(charts) {
    var svgArr = [],
        top = 0,
        width = 0;

    $.each(charts, function(i, chart) {
        var svg = chart.getSVG();
        svg = svg.replace('<svg', '<g transform="translate(0,' + top + ')" ');
        svg = svg.replace('</svg>', '</g>');

        top += chart.chartHeight;
        width = Math.max(width, chart.chartWidth);

        svgArr.push(svg);
    });

    return '<svg height="'+ top +'" width="' + width + '" version="1.1" xmlns="http://www.w3.org/2000/svg">' + svgArr.join('') + '</svg>';
};

/**
 * Create a global exportCharts method that takes an array of charts as an argument,
 * and exporting options as the second argument
 */
Highcharts.exportCharts = function(charts, options) {
    var form
        svg = Highcharts.getSVG(charts);

    // merge the options
    options = Highcharts.merge(Highcharts.getOptions().exporting, options);

    // create the form
    form = Highcharts.createElement('form', {
        method: 'post',
        action: options.url
    }, {
        display: 'none'
    }, document.body);

    // add the values
    Highcharts.each(['filename', 'type', 'width', 'svg'], function(name) {
        Highcharts.createElement('input', {
            type: 'hidden',
            name: name,
            value: {
                filename: options.filename || 'npsmart-export',
                type: 'application/pdf',//options.type,
                width: '2000px',//options.width,
                svg: svg
            }[name]
        }, null, form);
    });
    //console.log(svg); return;
    // submit
    form.submit();

    // clean up
    form.parentNode.removeChild(form);
};
	///////////////////////////////////START charts////////////////////////////////////////////////
if (nekpi == "composite") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: true
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [{
						name: 'mobility',
						data: [<?php echo join($mobility, ',') ?>]
					},	
					{
						name: 'throughput',
						data: [<?php echo join($throughput, ',') ?>]
					},		
					{
						name: 'retention_4g',
						data: [<?php echo join($retention_4g, ',') ?>]
					},		
					{
						name: 'data_performance',
						data: [<?php echo join($data_performance, ',') ?>]
					},		
					{
						name: 'voice_performance',
						data: [<?php echo join($voice_performance, ',') ?>]
					},		
					{
						name: 'availability',
						data: [<?php echo join($availability, ',') ?>]
					},		
					{
						name: 'resources_blocking',
						data: [<?php echo join($resources_blocking, ',') ?>]
					},		
					{
						name: 'efficiency',
						data: [<?php echo join($efficiency, ',') ?>]
					},	
					{
						name: 'interface',
						data: [<?php echo join($interface, ',') ?>]
					},	
					{
						name: 'quality_ul',
						data: [<?php echo join($quality_ul, ',') ?>]
					},	
					{
						name: 'overshooters',
						data: [<?php echo join($overshooters, ',') ?>]
					},	
					{
						name: 'quality_dl',
						data: [<?php echo join($quality_dl, ',') ?>]
					},
					{
						name: 'traffic_load',
						data: [<?php echo join($traffic_load, ',') ?>]
					},	
					{
						name: 'composite',
						data: [<?php echo join($composite, ',') ?>]
					}						
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}

if (nekpi == "mobility") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: false
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [{
						name: 'mobility',
						data: [<?php echo join($mobility, ',') ?>]
					},							
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}

if (nekpi == "throughput") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: false
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [
					{
						name: 'throughput',
						data: [<?php echo join($throughput, ',') ?>]
					},		
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}

if (nekpi == "retention_4g") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: false
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [
					{
						name: 'retention_4g',
						data: [<?php echo join($retention_4g, ',') ?>]
					},		
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}
if (nekpi == "data_performance") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: false
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [
					{
						name: 'data_performance',
						data: [<?php echo join($data_performance, ',') ?>]
					},		
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}

if (nekpi == "voice_performance") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: false
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [
					{
						name: 'voice_performance',
						data: [<?php echo join($voice_performance, ',') ?>]
					},		
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}

if (nekpi == "availability") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: false
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [		
					{
						name: 'availability',
						data: [<?php echo join($availability, ',') ?>]
					},		
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}

if (nekpi == "resources_blocking") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: false
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [		
					{
						name: 'resources_blocking',
						data: [<?php echo join($resources_blocking, ',') ?>]
					},		
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}

if (nekpi == "efficiency") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: false
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [		
					{
						name: 'efficiency',
						data: [<?php echo join($efficiency, ',') ?>]
					},		
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}

if (nekpi == "interface") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: false
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [		
					{
						name: 'interface',
						data: [<?php echo join($interface, ',') ?>]
					},		
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}

if (nekpi == "quality_ul") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: false
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [		
					{
						name: 'quality_ul',
						data: [<?php echo join($quality_ul, ',') ?>]
					},		
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}

if (nekpi == "overshooters") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: false
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [		
					{
						name: 'overshooters',
						data: [<?php echo join($overshooters, ',') ?>]
					},		
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}

if (nekpi == "quality_dl") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: false
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [		
					{
						name: 'quality_dl',
						data: [<?php echo join($quality_dl, ',') ?>]
					},		
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}

if (nekpi == "traffic_load") {
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>DAILY SCORE</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						max: 10,
						///min: 0,						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					shared: false
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					
					series: [		
					{
						name: 'traffic_load',
						data: [<?php echo join($traffic_load, ',') ?>]
					},		
					]
					
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


});}
  


    $('.chart_content').bind('dblclick', function () {
        var $this = $(this);
        $this.toggleClass('modal');
        $('.chart1', $this).highcharts().reflow();
    });	
	
</script>				
				