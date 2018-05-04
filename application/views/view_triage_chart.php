	<?php 
	foreach($triage_chart as $row){
	    $week[] = $row->week;
		$node = $row->node;
		$analysis[] = $row->analysis;
		$cap[] = $row->cap;
		$imp[] = $row->imp;
		$normal[] = $row->normal;
		$omr[] = $row->omr;
		$otm[] = $row->otm;
		$rf[] = $row->rf;
		$tx_omr[] = $row->tx_omr;
		$analysis_no[] = $row->analysis_no;
		$cap_no[] = $row->cap_no;
		$imp_no[] = $row->imp_no;
		$normal_no[] = $row->normal_no;
		$omr_no[] = $row->omr_no;
		$otm_no[] = $row->otm_no;
		$rf_no[] = $row->rf_no;
		$tx_omr_no[] = $row->tx_omr_no;
		}	
		?>
<script>
week = new Array(4);
week[0] = "<?php echo $week[0]; ?>";

var node = "<?php echo $node; ?>";

order = new Array(8);
order[0] = {name: 'NORMAL'+'<br>'+<?php echo $normal_no[0]; ?>, y: <?php echo $normal[0]; ?>, color: '#00B050',k: <?php echo $normal_no[0]; ?>};
order[1] = {name: 'ANALYSIS'+'<br>'+<?php echo $analysis_no[0]; ?>, y: <?php echo $analysis[0]; ?>, color: '#8F8F8F'};
order[2] = {name: 'OMR'+'<br>'+<?php echo $omr_no[0]; ?>, y: <?php echo $omr[0]; ?>, color: '#7A30A0'};
order[3] = {name: 'TX/OMR'+'<br>'+<?php echo $tx_omr_no[0]; ?>, y: <?php echo $tx_omr[0]; ?>, color: '#F4E1E1'};
order[4] = {name: 'OTM'+'<br>'+<?php echo $otm_no[0]; ?>, y: <?php echo $otm[0]; ?>, color: '#0070C0'};
order[5] = {name: 'CAP'+'<br>'+<?php echo $cap_no[0]; ?>, y: <?php echo $cap[0]; ?>, color: '#FFC000'};
order[6] = {name: 'PLAN/ENG RF'+'<br>'+<?php echo $rf_no[0]; ?>, y: <?php echo $rf[0]; ?>, color: '#C00000'};
order[7] = {name: 'IMP'+'<br>'+<?php echo $imp_no[0]; ?>, y: <?php echo $imp[0]; ?>, color: '#002060'};

for (i=0; i<8; i++){
	for (j=0; j<8; j++) {
		if (order[i].y > order[j].y){
			aux = order[i]
			order[i] = order[j]
			order[j] = aux;
		}
}
}
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

Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
    return {
        radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        },
        stops: [
            [0, color],
            [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
        ]
    };
});
	///////////////////////////////////START charts////////////////////////////////////////////////
$(function () {
    var chart;
    $(document).ready(function() {
		var overview = new Highcharts.chart({
// colors: ['#8F8F8F', '#7A30A0', '#F4E1E1', '#0070C0', '#FFC000', '#C00000', '#002060',
// '#00B050', '#DF5353', '#7798BF', '#aaeeee'],
    chart: {
		renderTo: 'overview',
		type: 'pie',
		options3d: {
            enabled: true,
            alpha: 65,
        },
		backgroundColor: null,
      },
 
    title: {
        text: "<b>W"+week[0]+" CELL MAPPING</b>",
		y: 130,
     floating: true,
		style: {
         fontSize: '23px'
      }
    },
	
	legend: {
	floating:true,
	y: -80,
	labelFormatter: function () {
            return this.name.split('<br>')[0];
        }
	},

	subtitle: {
	 text: '<i>'+node+'</i>',
	 //x: 100,
     y: 160,
     floating: true,
	 style: {
         textTransform: 'uppercase',
         fontSize: '15px'
      }
	},
credits: {
					   enabled: false
					},			
	 tooltip: {
		 headerFormat: null,
		 //enabled: false,
        pointFormat: '{point.name} | {point.y}%'
							// series: {
							// cursor: 'pointer',
							// // events: {
								// // click: function( event ) {
								// // var kpi = this.name;
								// // kpi = kpi.toLowerCase();
								// // kpi = kpi.trim();
								// // var strkpi = kpi.replace(/(^\s+|\s+$)/g, '');
									// // document.getElementById('wcreportnename').value = node;
									// // document.getElementById('wcreportnetype').value = reportnetype;
									// // document.getElementById('wctimeagg').value = reportagg;
									// // document.getElementById('wcreportdate').value = date[event.point.x];
									// // document.getElementById('wckpi').value = this.name;
									// // document.wcform.submit();

								// // }
							// // }
						// }
    },
	
    plotOptions: {
      pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 100,
			showInLegend: true,
            dataLabels: {
            enabled: true,
			//formart: '{point.name} <br> {point.y}%',
            formatter: function () {
        if (this.point.y != 0) {
            return [this.point.name+' | '+this.point.y+'%'];
        }
    },
style:{
fontSize: '12px',
}	,
			connectorWidth:2,
            },
    },
	},
	
    series: [
	{	type: 'pie',
		slicedOffset:65,
        name: 'W'+week[0],
        data:
		[
		
		{name: order[0].name, y: order[0].y, sliced:true,
		color: { 
		radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        }, 
		stops: [[0, order[0].color],
			   [1, Highcharts.Color(order[0].color).brighten(-0.3).get('rgb')]]
		}},
		
		{name: order[1].name, y: order[1].y, sliced:true,
		color: { 
		radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        }, 
		stops: [[0, order[1].color],
			   [1, Highcharts.Color(order[1].color).brighten(-0.3).get('rgb')]]
		}},
		
		{name: order[2].name, y: order[2].y, sliced:true,
		color: { 
		radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        }, 
		stops: [[0, order[2].color],
			   [1, Highcharts.Color(order[2].color).brighten(-0.3).get('rgb')]]
		}},
		
		{name: order[3].name, y: order[3].y, sliced:true,
		color: { 
		radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        }, 
		stops: [[0, order[3].color],
			   [1, Highcharts.Color(order[3].color).brighten(-0.3).get('rgb')]]
		}},
		
		{name: order[4].name, y: order[4].y, sliced:true,
		color: { 
		radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        }, 
		stops: [[0, order[4].color],
			   [1, Highcharts.Color(order[4].color).brighten(-0.3).get('rgb')]]
		}},
		
		{name: order[5].name, y: order[5].y, sliced:true,
		color: { 
		radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        }, 
		stops: [[0, order[5].color],
			   [1, Highcharts.Color(order[5].color).brighten(-0.3).get('rgb')]]
		}},
		
		{name: order[6].name, y: order[6].y, sliced:true,
		color: { 
		radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        }, 
		stops: [[0, order[6].color],
			   [1, Highcharts.Color(order[6].color).brighten(-0.3).get('rgb')]]
		}},
		
		{name: order[7].name, y: order[7].y, sliced:true,
		color: { 
		radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        }, 
		stops: [[0, order[7].color],
			   [1, Highcharts.Color(order[7].color).brighten(-0.3).get('rgb')]]
		}}
		]
		// [
		// {legendIndex: parseInt(100 - analysis[0]), name: 'ANALYSIS', y: analysis[0]},
		// {legendIndex: parseInt(100 - omr[0]), name: 'OMR', y: omr[0]},
		// {legendIndex: parseInt(100 - tx_omr[0]), name: 'TX/OMR', y: tx_omr[0]},
		// {legendIndex: parseInt(100 - otm[0]), name: 'OTM', y: otm[0]},
		// {legendIndex: parseInt(100 - cap[0]), name: 'CAP', y: cap[0]},
		// {legendIndex: parseInt(100 - rf[0]), name: 'PLAN/ENG RF', y: rf[0]},
		// {legendIndex: parseInt(100 - imp[0]), name: 'IMP', y: imp[0]},
		// {legendIndex: parseInt(100 - normal[0]), name: 'NORMAL', y: normal[0]}]
    }, 
	]
});

//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([overview]);
});		
  });	


  });

    $('.chart_content').bind('dblclick', function () {
        var $this = $(this);
        $this.toggleClass('modal');
        $('.chart1', $this).highcharts().reflow();
    });	
	
</script>				
				