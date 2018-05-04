	<?php 
	foreach($txintegrity_chart as $row){
	    $week[] = $row->week;
		$node = $row->node;
		$ip[] = $row->ip;
		$atm[] = $row->atm;
		$ip_atm[] = $row->ip_atm;
		$ip_bad[] = $row->ip_bad;
		$atm_bad[] = $row->atm_bad;
		$ip_atm_bad[] = $row->ip_atm_bad;
		$ip_per[] = $row->ip_per;
		$atm_per[] = $row->atm_per;
		$ip_atm_per[] = $row->ip_atm_per;
		$good_tx_per[] = $row->good_tx_per;
		$bad_tx_per[] = $row->bad_tx_per;
		}	
		?>
<script>
week = new Array(4);
week[0] = "<?php echo $week[0]; ?>";
week[1] = "<?php echo $week[1]; ?>";
week[2] = "<?php echo $week[2]; ?>";
week[3] = "<?php echo $week[3]; ?>";

var node = "<?php echo $node; ?>";

ip = new Array(4);
ip[0] = <?php echo $ip[0]; ?>;
ip[1] = <?php echo $ip[1]; ?>;
ip[2] = <?php echo $ip[2]; ?>;
ip[3] = <?php echo $ip[3]; ?>;

atm = new Array(4);
atm[0] = <?php echo $atm[0]; ?>;
atm[1] = <?php echo $atm[1]; ?>;
atm[2] = <?php echo $atm[2]; ?>;
atm[3] = <?php echo $atm[3]; ?>;

ip_atm = new Array(4);
ip_atm[0] = <?php echo $ip_atm[0]; ?>;
ip_atm[1] = <?php echo $ip_atm[1]; ?>;
ip_atm[2] = <?php echo $ip_atm[2]; ?>;
ip_atm[3] = <?php echo $ip_atm[3]; ?>;

ip_bad = new Array(4);
ip_bad[0] = <?php echo $ip_bad[0]; ?>;
ip_bad[1] = <?php echo $ip_bad[1]; ?>;
ip_bad[2] = <?php echo $ip_bad[2]; ?>;
ip_bad[3] = <?php echo $ip_bad[3]; ?>;

atm_bad = new Array(4);
atm_bad[0] = <?php echo $atm_bad[0]; ?>;
atm_bad[1] = <?php echo $atm_bad[1]; ?>;
atm_bad[2] = <?php echo $atm_bad[2]; ?>;
atm_bad[3] = <?php echo $atm_bad[3]; ?>;

ip_atm_bad = new Array(4);
ip_atm_bad[0] = <?php echo $ip_atm_bad[0]; ?>;
ip_atm_bad[1] = <?php echo $ip_atm_bad[1]; ?>;
ip_atm_bad[2] = <?php echo $ip_atm_bad[2]; ?>;
ip_atm_bad[3] = <?php echo $ip_atm_bad[3]; ?>;

ip_per = new Array(4);
ip_per[0] = <?php echo $ip_per[0]; ?>;
ip_per[1] = <?php echo $ip_per[1]; ?>;
ip_per[2] = <?php echo $ip_per[2]; ?>;
ip_per[3] = <?php echo $ip_per[3]; ?>;

atm_per = new Array(4);
atm_per[0] = <?php echo $atm_per[0]; ?>;
atm_per[1] = <?php echo $atm_per[1]; ?>;
atm_per[2] = <?php echo $atm_per[2]; ?>;
atm_per[3] = <?php echo $atm_per[3]; ?>;

ip_atm_per = new Array(4);
ip_atm_per[0] = <?php echo $ip_atm_per[0]; ?>;
ip_atm_per[1] = <?php echo $ip_atm_per[1]; ?>;
ip_atm_per[2] = <?php echo $ip_atm_per[2]; ?>;
ip_atm_per[3] = <?php echo $ip_atm_per[3]; ?>;

good_tx_per = new Array(4);
good_tx_per[0] = <?php echo $good_tx_per[0]; ?>;
good_tx_per[1] = <?php echo $good_tx_per[1]; ?>;
good_tx_per[2] = <?php echo $good_tx_per[2]; ?>;
good_tx_per[3] = <?php echo $good_tx_per[3]; ?>;

bad_tx_per = new Array(4);
bad_tx_per[0] = <?php echo $bad_tx_per[0]; ?>;
bad_tx_per[1] = <?php echo $bad_tx_per[1]; ?>;
bad_tx_per[2] = <?php echo $bad_tx_per[2]; ?>;
bad_tx_per[3] = <?php echo $bad_tx_per[3]; ?>;

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
		var pie = new Highcharts.chart({
   colors: ['#EE0000','#228B22'],
   
    chart: {
		renderTo: 'pie',
		type: 'pie',
		options3d: {
            enabled: true,
            alpha: 70,
        },
		backgroundColor: "#F8F8F8"
      },
 
    title: {
        text: '<big><b>TX INTEGRITY</b></big>',
    		style: {
         fontSize: '23px'
      }
	},
	credits: {
					   enabled: false
					},		
	subtitle: {
	 text: '<i>'+node+'</i>',
	 	 style: {
         textTransform: 'uppercase',
         fontSize: '15px'
      }
	},
	
	 tooltip: {
        pointFormat: ''
    },
	
    plotOptions: {
      pie: {
         depth: 65,
		 innerSize: 140
    },
	},
	
    series: [
	{	type: 'pie',
		slicedOffset:30,
        name: 'W'+week[0],
        data:[
            {   sliced: true, name: 'NOK '+bad_tx_per[0]+'%',
                y: bad_tx_per[0]
            },
			{sliced: true, name: 'OK '+good_tx_per[0]+'%', y: good_tx_per[0]}]
    }, 
	],
	
});

	// var column_nok = new Highcharts.chart({
	// colors: ['#f45b5b', '#2b908f', '#90ee7e', '#7798BF', '#aaeeee', '#ff0066',
      // '#eeaaee', '#55BF3B', '#DF5353', '#7798BF', '#aaeeee'],
  // //colors: ['#EE0000','#228B22'],
	
    // chart: {
		// renderTo: 'column_nok',
		// type: 'column',
		// backgroundColor: "#F8F8F8"
      // },

    // title: {
        // text: '<b>TX TYPE NOK</b>',
    // },
	
	// subtitle: {
	 // text: '<i>'+node+'</i>',
	// },
	// credits: {
					   // enabled: false
					// },		
    // xAxis: {
		// allowDecimals:false,
        // categories: ['ATM_IP', 'IP', 'ATM'],
    // },

    // yAxis: {
        // min: 0,
		// tickWidth: 1,
		// gridLineColor: '#707073',
      // labels: {
		// formatter: function () {
        // return this.value;
        // }    
      // },
      // tickWidth: 1,
      // title: null
    // },

		// plotOptions: {
        // column: {
            // pointPadding: 0.1,
            // borderWidth: 0,
			// dataLabels: {
                // enabled: true,
                // color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || '#363636'
            // }
        // },
		// },
		
		// // tooltip: {
        // // headerFormat: '<span style="font-size:12px"><b>{point.key}</b></span><table>',
        // // pointFormat: '<tr><td style="color:{series.color};padding:0"><b>{series.name}: </b></td>' +
            // // '<td style="padding:0"><b>{point.y}</b></td></tr>',
        // // footerFormat: '</table>',
        // // shared: true,
        // // useHTML: true,
    // // },
	
    // series: [
	// {colorByPoint: true,
	// showInLegend: false,
        // data: [ip_atm_bad[0], ip_bad[0], atm_bad[0]]
    // }, 
	
	// ]
// });

	var column = new Highcharts.chart({
	colors: ['#7798BF','#EE0000'],
	
    chart: {
		renderTo: 'column',
		type: 'column',
		backgroundColor: "#F8F8F8"
      },

    title: {
        text: '<b>TX TYPE</b>',
		style: {
         fontSize: '23px'
      }
    },
	
	subtitle: {
	 text: '<i>'+node+'</i>',
	 style: {
         fontSize: '15px'
      }
	},
	credits: {
					   enabled: false
					},		
    xAxis: {
		allowDecimals:false,
        categories: ['ATM_IP', 'IP', 'ATM'],
    },

    yAxis: {
        min: 0,
		tickWidth: 1,
		gridLineColor: '#707073',
      labels: {
		formatter: function () {
        return this.value;
        }    
      },
      tickWidth: 1,
      title: null
    },

		plotOptions: {
        column: {
            pointPadding: 0.1,
            borderWidth: 0,
			dataLabels: {
                enabled: true,
                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || '#363636'
            }
        },
		},
		
		// tooltip: {
        // headerFormat: '<span style="font-size:12px"><b>{point.key}</b></span><table>',
        // pointFormat: '<tr><td style="color:{series.color};padding:0"><b>{series.name}: </b></td>' +
            // '<td style="padding:0"><b>{point.y}</b></td></tr>',
        // footerFormat: '</table>',
        // shared: true,
        // useHTML: true,
    // },
	
    series: [
	{name: 'QUANTITY',
	data: [ip_atm[0], ip[0], atm[0]]
    }, 
	{name: 'NOK',
	data: [ip_atm_bad[0], ip_bad[0], atm_bad[0]]
    },
	]
});
//////////////////////////////////////////////////////////////////////////////////////////FIM//////////////////////////////////////////////////////////////////////////////////////////////////////////////
  $('#export').click(function() {
    Highcharts.exportCharts([pie,column_nok,column]);
});		
  });	


  });

    $('.chart_content').bind('dblclick', function () {
        var $this = $(this);
        $this.toggleClass('modal');
        $('.chart1', $this).highcharts().reflow();
    });	
	
</script>				
				