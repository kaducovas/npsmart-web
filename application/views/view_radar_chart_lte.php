	<?php 
	foreach($chart_weekly as $row){
	    $week[] = $row->week;
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
		$node = $row->node;
		}	
				 
		?>
		
<script>
///	for (i = 0; i < cars.length; i++) { 
///    text += cars[i] + "<br>";
///}
var node = "<?php echo $node; ?>";

week = new Array(4);
week[0] = "<?php echo $week[0]; ?>";
week[1] = "<?php echo $week[1]; ?>";
week[2] = "<?php echo $week[2] ?>";
week[3] = "<?php echo $week[3]; ?>";

rf_health_index = new Array(4);
rf_health_index[0] = <?php echo $rf_health_index[0]; ?>;
rf_health_index[1] = <?php echo $rf_health_index[1]; ?>;
rf_health_index[2] = <?php echo $rf_health_index[2] ?>;
rf_health_index[3] = <?php echo $rf_health_index[3]; ?>;

mobility = new Array(4);
mobility[0] = <?php echo $mobility[0]; ?>;
mobility[1] = <?php echo $mobility[1]; ?>;
mobility[2] = <?php echo $mobility[2]; ?>;
mobility[3] = <?php echo $mobility[3]; ?>;

throughput = new Array(4);
throughput[0] = <?php echo $throughput[0]; ?>;
throughput[1] = <?php echo $throughput[1]; ?>;
throughput[2] = <?php echo $throughput[2]; ?>;
throughput[3] = <?php echo $throughput[3]; ?>;

retention_4g = new Array(4);
retention_4g[0] = <?php echo $retention_4g[0]; ?>;
retention_4g[1] = <?php echo $retention_4g[1]; ?>;
retention_4g[2] = <?php echo $retention_4g[2]; ?>;
retention_4g[3] = <?php echo $retention_4g[3]; ?>;

data_performance = new Array(4);
data_performance[0] = <?php echo $data_performance[0]; ?>;
data_performance[1] = <?php echo $data_performance[1]; ?>;
data_performance[2] = <?php echo $data_performance[2]; ?>;
data_performance[3] = <?php echo $data_performance[3]; ?>;

voice_performance = new Array(4);
voice_performance[0] = <?php echo $voice_performance[0]; ?>;
voice_performance[1] = <?php echo $voice_performance[1]; ?>;
voice_performance[2] = <?php echo $voice_performance[2]; ?>;
voice_performance[3] = <?php echo $voice_performance[3]; ?>;

availability = new Array(4);
availability[0] = <?php echo $availability[0]; ?>;
availability[1] = <?php echo $availability[1]; ?>;
availability[2] = <?php echo $availability[2]; ?>;
availability[3] = <?php echo $availability[3]; ?>;

resources_blocking = new Array(4);
resources_blocking[0] = <?php echo $resources_blocking[0]; ?>;
resources_blocking[1] = <?php echo $resources_blocking[1]; ?>;
resources_blocking[2] = <?php echo $resources_blocking[2]; ?>;
resources_blocking[3] = <?php echo $resources_blocking[3]; ?>;

efficiency = new Array(4);
efficiency[0] = <?php echo $efficiency[0]; ?>;
efficiency[1] = <?php echo $efficiency[1]; ?>;
efficiency[2] = <?php echo $efficiency[2]; ?>;
efficiency[3] = <?php echo $efficiency[3]; ?>;

interface = new Array(4);
interface[0] = <?php echo $interface[0]; ?>;	
interface[1] = <?php echo $interface[1]; ?>;	
interface[2] = <?php echo $interface[2]; ?>;	
interface[3] = <?php echo $interface[3]; ?>;	

quality_ul = new Array(4);
quality_ul[0] = <?php echo $quality_ul[0]; ?>;
quality_ul[1] = <?php echo $quality_ul[1]; ?>;
quality_ul[2] = <?php echo $quality_ul[2]; ?>;
quality_ul[3] = <?php echo $quality_ul[3]; ?>;

overshooters = new Array(4);
overshooters[0] = <?php echo $overshooters[0]; ?>;
overshooters[1] = <?php echo $overshooters[1]; ?>;
overshooters[2] = <?php echo $overshooters[2]; ?>;
overshooters[3] = <?php echo $overshooters[3]; ?>;

quality_dl = new Array(4);
quality_dl[0] = <?php echo $quality_dl[0]; ?>;
quality_dl[1] = <?php echo $quality_dl[1]; ?>;
quality_dl[2] = <?php echo $quality_dl[2]; ?>;
quality_dl[3] = <?php echo $quality_dl[3]; ?>;

worst_aging_factor = new Array(4);
worst_aging_factor[0] = <?php echo $worst_aging_factor[0]; ?>;
worst_aging_factor[1] = <?php echo $worst_aging_factor[1]; ?>;
worst_aging_factor[2] = <?php echo $worst_aging_factor[2]; ?>;
worst_aging_factor[3] = <?php echo $worst_aging_factor[3]; ?>;

traffic_load = new Array(4);
traffic_load[0] = <?php echo $traffic_load[0]; ?>;
traffic_load[1] = <?php echo $traffic_load[1]; ?>;
traffic_load[2] = <?php echo $traffic_load[2]; ?>;
traffic_load[3] = <?php echo $traffic_load[3]; ?>;

process_tools = new Array(4);
process_tools[0] = <?php echo $process_tools[0]; ?>;
process_tools[1] = <?php echo $process_tools[1]; ?>;
process_tools[2] = <?php echo $process_tools[2]; ?>;
process_tools[3] = <?php echo $process_tools[3]; ?>;
//alert(node);
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
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.chart({
    chart: {
		renderTo: 'acc',
        polar: true,
		backgroundColor: null 
    },
	
	pane: {
        startAngle: 0,
        endAngle: 360
		
    },
    title: {
        text: '<b>RADAR CHART</b>',
		style: {
         fontSize: '20px'
      }
    },
	
	subtitle: {
	 text: '<i>'+node+'</i>',
	 style: {
         textTransform: 'uppercase',
         fontSize: '14px'
      }
	},

credits: { enabled: false },	

exporting: { enabled: false },					

    xAxis: {
        categories: ['SW Release & Features','Worst Aging Factor', 'Mobility','User Throughput (DL & UL)', 'Service Retention in 4G', 
	  'Data Performance', 'Voice Performance','Availability','Traffic Load','Resources Blocking','Efficiency', 'Interface (UL RSSI)',
	  'Overshooters','Quality UL','Quality DL','RF Health Index'],
		 labels: {
			 autoRotation:[0],
			 distance:12,
			 overflow:false,
            style: {
                color: '#525151',
                font: '12px Calilbri',
                fontWeight: 'bold'
            }
			}
    },
    yAxis: {
 	    tickInterval: 1,
        max: 10,
		min:0,
		reversed: Boolean,		
        labels: {
            style: {
                color: '#525151',
    }}},
	
    // legend: {
        // enabled: false
    // },
	
 
    plotOptions: {
        column: {
		    pointPadding: 0,
            groupPadding: 0,
            stacking: 'normal',
			shadow: true,
			showInLegend: false,
			enableMouseTracking: false,
        },
		line: {
            lineWidth: 3.5,
            states: {
                hover: {
                    lineWidth: 5
                }
            },
            marker: {
                enabled: false
            },
        }
    },
    series: [
		{
		type: 'column',
		color: '#90EE90',
        data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    }, 
	{
		type: 'column',
		color: '#90EE90',
        data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    }, 
	{
		type: 'column',
		color: '#90EE90',
        data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    },{
		type: 'column',
		color: '#FFF68F',
        data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    },{
		type: 'column',
		color: '#FFF68F',
        data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    },{
		type: 'column',
		color: '#FFA54F',
        data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    },{
		type: 'column',
		color: '#FFA54F',
        data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    },{
		type: 'column',
		color: '#FF4040',
        data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    },{
		type: 'column',
		color: '#FF4040',
        data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    },{
		type: 'column',
		color: '#FF4040',
        data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    },{
		type: 'column',
		color: '#FF4040',
        data: [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    },{
	    type: 'line',
		color: '#DF0101',
        name: 'W'+week[0],
        data: [process_tools[0], worst_aging_factor[0], mobility[0], throughput[0], 
		retention_4g[0], data_performance[0], voice_performance[0], 
		availability[0], traffic_load[0], resources_blocking[0], efficiency[0], interface[0], 
		overshooters[0], quality_ul[0], quality_dl[0], rf_health_index[0]],
    },{
	    type: 'line',
		color: 'green',
        name: 'W'+week[1],
        data: [process_tools[1], worst_aging_factor[1], mobility[1], throughput[1], 
		retention_4g[1], data_performance[1], voice_performance[1], 
		availability[1], traffic_load[1], resources_blocking[1], efficiency[1], interface[1], 
		overshooters[1], quality_ul[1], quality_dl[1], rf_health_index[1]],
    },{
	    type: 'line',
		color: '#000000',
        name: 'W'+week[2],
        data: [process_tools[2], worst_aging_factor[2], mobility[2], throughput[2], 
		retention_4g[2], data_performance[2], voice_performance[2], 
		availability[2], traffic_load[2], resources_blocking[2], efficiency[2], interface[2], 
		overshooters[2], quality_ul[2], quality_dl[2], rf_health_index[2]],
    },{
	    type: 'line',
		color: 'blue',
        name: 'W'+week[3],
        data: [process_tools[3], worst_aging_factor[3], mobility[3], throughput[3], 
		retention_4g[3], data_performance[3], voice_performance[3], 
		availability[3], traffic_load[3], resources_blocking[3], efficiency[3], interface[3], 
		overshooters[3], quality_ul[3], quality_dl[3], rf_health_index[3]],
    },]
});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,quality_ul,availability,rtwp]);
});		
  });	


  });

    $('.chart_content').bind('dblclick', function () {
        var $this = $(this);
        $this.toggleClass('modal');
        $('.chart1', $this).highcharts().reflow();
    });	
	
</script>				
				