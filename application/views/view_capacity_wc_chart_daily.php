	<?php 
	foreach($capacity_daily as $row){
		$date[] = $row->date;
		$node = $row->node;
		$utilization[] = $row->utilization;
		$nekpi = $row->nekpi;
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
		$utilization = array_map("tonull2",$utilization);
		
		?>
		
<script>
///	for (i = 0; i < cars.length; i++) { 
///    text += cars[i] + "<br>";
///}
var node = "<?php echo $node; ?>";
var nekpi = "<?php echo $nekpi; ?>";
kpi = nekpi.toUpperCase();
kpi = kpi.trim();
var strkpi = kpi.replace(/(^\s+|\s+$)/g, '');
mystring = strkpi.replace(/\_/g, ' ');

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
				backgroundColor:null,
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
						text: '<b>DAILY '+mystring+'</b>',	
						style: {
         fontSize: '20px'
      }
						},
					subtitle: {
						text: '<i>' + node + '</i>',
						style: {
         fontSize: '15px'
      }
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: [{ // Primary yAxis
						title: {
							text: '%',
						},
						plotLines: [{
								value: 0,
								width: 1,
								color: '#808080'
							}]
					},],
					
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

					series: [
					{
						tooltip: {valueSuffix: ' %',},
			            name: mystring,
						data: [<?php echo join($utilization, ',') ?>],
			        },											
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
				