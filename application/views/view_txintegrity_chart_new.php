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
 colors: ['#90ee7e', '#7798BF', '#f45b5b', '#7798BF', '#aaeeee', '#ff0066',
       '#eeaaee', '#55BF3B', '#DF5353', '#7798BF', '#aaeeee'],
    chart: {
		renderTo: 'overview',
		backgroundColor: null,
		type: 'bar'
		},
 
    title: {
        text: "<b>TX TYPE QUANTITY</b>",
		style: {
         fontSize: '20px'
      }
    },

	subtitle: {
	 text: '<i>'+node+'</i>',
	 style: {
         textTransform: 'uppercase',
         fontSize: '15px'
      }
	},
	
credits: {
					   enabled: false
					},	

xAxis: {
	allowDecimals:false,
        categories: [ '<b>W'+week[0]+'</b>','<b>W'+week[1]+'</b>','<b>W'+week[2]+'</b>','<b>W'+week[3]+'</b>'],
    tickWidth: 0,
	},

	yAxis: {
		allowDecimals:false,
        min: 0,
    },
		
	legend: {
        reversed: true
    },
	
    plotOptions: {
      series: {
            stacking: 'normal',
			dataLabels: {
                enabled: true,
                color: '#363636',
				style:{
	color:null,
	fontSize:"11px",
	fontWeight:"bold",
	textOutline:"1px"
            },
        }
	  }
	},
	
    series: [
		{name: 'ATM', data: [atm[0]]},
		{name: 'IP', data: [ip[0]]},		
		{name: 'ATM_IP', data: [ip_atm[0]]}
    ], 
	
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
				