	<?php 
	foreach($node_report as $row){
		$date[] = $row->date;
		$node = $row->node;
		$cpu_load[] = $row-> cpu_load;
		$dsp_load[] = $row-> dsp_load;
		$ib_cpu_load[] = $row-> ib_cpu_load;
		$ib_forward_load[] = $row-> ib_forward_load;
		$iu_ps[] = $row-> iu_ps;
		$iub[] = $row-> iub;
		$iups_tx[] = $row-> iups_tx;
		$iub_tx[] = $row-> iub_tx;
		}	
				 
		array_walk($date, create_function('&$str', '$str = "\"$str\"";')); //put quotes in datetime
		//echo "RNC= ".$rnc.", cellname= ".$cellname.", cellid= ".$cellid."<br><br>";
		//echo join($datetime, ',');
		//echo "<br><br>";
		//echo join($acc_rrc, ',');
		#echo '<span size="4" color="#E0E0E3">'.$ne.'</span>';

		function tonull2($n)
		{
			if($n == ''){
				$n = 'null';
				#return $n;				
			}
			if($n == 0.00){
				$n = 'null';
				#return $n;				
			}
				return $n;
		}
		
		$iups_tx = array_map("tonull2",$iups_tx);
		$iub_tx = array_map("tonull2",$iub_tx);
		?>
		
<script>
///	for (i = 0; i < cars.length; i++) { 
///    text += cars[i] + "<br>";
///}
var node = "<?php echo $node; ?>";
//alert(node);
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
$(function () {
    var chart;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy'
				,
			//	backgroundColor: {
            //    linearGradient: [0, 0, 500, 500],
            //    stops: [
            //        [0, 'rgb(255, 255, 255)'],
            //        [1, 'rgb(200, 200, 255)']
            //    ]
           // }
				//borderWidth: 2		
						///type: 'line',
						///height: 195		
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>RNC CAPACITY DAILY</b>',// - ' + node,
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
						//max: 100,
						///min: 0,
						title: {
							text: '%'
						},
						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					valueSuffix: '%',
					shared: true
					},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},	
					// plotOptions: {
						// series: {
							// cursor: 'pointer',
							// events: {
								// click: function( event ) {
								// // Log to console
								// var kpis = ["QDA CS", "QDR CS","3G-Retention CS", "Weighted-Availability"];
								// var regions = ["CO", "PRSC", "NE", "BASE","ES","MG"];								
								// var kpi = this.name;
								// kpi = kpi.toLowerCase();
								// kpi = kpi.trim();
								// var strkpi = kpi.replace(/(^\s+|\s+$)/g, '');
								// //alert(node.substring(0, 3));
								
								// if (node.substring(0, 3) == 'RNC' && $.inArray(this.name, kpis) > -1) {
									// //alert(node);
									// document.getElementById('rnc').value = node;
									// document.getElementById('date').value = date[event.point.x];
									// document.getElementById('kpi').value = this.name;
									// document.wcform.submit();
								// } else if ($.inArray(node, regions) > -1) {
									// document.getElementById('node').value = node;
									// document.getElementById('week').value = date[event.point.x];
									// document.getElementById('weeklykpi').value = this.name;
									// document.weekwcform.submit();
								// } 
								
								// else {
									// alert("NPSmart current release does not support Worst Cells for the selected aggregation.")
								// }								
								
								// }
							// }
						// }
					// },
					
					series: [{
						name: 'CPU Load',
						data: [<?php echo join($cpu_load, ',') ?>]
					},
					{
			            name: 'DSP Load',
						data: [<?php echo join($dsp_load, ',') ?>]
			        },
					{
			            name: 'Interface Board CPU Load',
						data: [<?php echo join($ib_cpu_load, ',') ?>]
			        },
					{
			            name: 'Interface Board Fowarding Load',
						data: [<?php echo join($ib_forward_load, ',') ?>]
			        },
					{
			            name: 'IuPS Utilizantion',
						data: [<?php echo join($iu_ps, ',') ?>]
			        },				
					{
			            name: 'IuB Utilizantion',
						data: [<?php echo join($iub, ',') ?>]
			        },									
					{
			            name: 'IuPS TX',
						data: [<?php echo join($iups_tx, ',') ?>]
			        },				
					{
			            name: 'IuB TX',
						data: [<?php echo join($iub_tx, ',') ?>]
			        }	
					]							
		});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([acc,drop,traffic,users,thp,retention,handover,sho_overhead,availability,rtwp]);
});		
  });	


  });
  


    $('.chart_content').bind('dblclick', function () {
        var $this = $(this);
        $this.toggleClass('modal');
        $('.chart1', $this).highcharts().reflow();
    });	
</script>				
				