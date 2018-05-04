	<?php 
		$total_cell = count($unbalance_daily);
		$node = $unbalance_daily[0]->node;
		$date = $unbalance_daily[0]->date;
		$array_date = explode(",", $date);	
		for ($i = 0; $i < $total_cell; $i++) {
		$ee[$i] = $unbalance_daily[$i]->ee;
		$array_ee[$i] = explode(",", $ee[$i]);	
		$cell[$i] = $unbalance_daily[$i]->cell;
		$visible[$i] = 'true';
		}
		for ($i = $total_cell; $i < 30; $i++) {
		$ee[$i] = null;
		$array_ee[$i] = explode(",", $ee[$i]);	
		$cell[$i] = null;
		$visible[$i] = 'false';
		}

		array_walk($array_date, create_function('&$str', '$str = "\"$str\"";')); //put quotes in datetime
		?>
		
<script>

var node = "<?php echo $node; ?>";
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
				zoomType: 'xy',
				events: {
						click: function(e) {
						//console.log(e.xAxis[0].axis.categories[Math.round(e.xAxis[0].value)])
						// alert(e.xAxis[0].value);
						//acc.chart.series[1].show();
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
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: '<b>EE CHART DAILY</b>',	
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
						categories: [<?php echo join($array_date, ',') ?>],
						plotLines: [{
								width: 2,
								dashStyle: 'dash',
								color: 'red',
								width: 2,
								zIndex: 10
							},{
								color: '#FF0000',
								width: 2,
								dashStyle: 'dash',
								color: 'red',
								width: 2,
								zIndex: 10
							}]
						},
					yAxis: [{ // Primary yAxis
						title: {
							text: null,
						},
						plotLines: [{
								value: 0,
								width: 1,
								color: '#808080'
							}]
					}, ],
					
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

					plotOptions: {
						series: {
							cursor: 'pointer',
							events: {       
						legendItemClick: function () {
						if(this.name == "Marker"){
						if(this.visible == true){
						estado_retain = false;		
						acc.xAxis[0].options.plotLines[0].color = "transparent";
						acc.xAxis[0].options.plotLines[1].color = "transparent";						
						acc.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_retain = true;	
						acc.xAxis[0].options.plotLines[0].color = "red";
						acc.xAxis[0].options.plotLines[1].color = "red";						
						acc.xAxis[0].update();
						}	
						}
				}
							}
						}
					},
					
					series: [
					{
					name: 'Marker',
					color:'red'
					},
					{
					name: "<?php echo $cell[0]; ?>",
					data: [<?php echo join($array_ee[0], ',') ?>],
					visible: <?php echo $visible[0]; ?>,
					showInLegend: <?php echo $visible[0]; ?>,
					},		
					{
					name: "<?php echo $cell[1]; ?>",
					data: [<?php echo join($array_ee[1], ',') ?>],
					visible: <?php echo $visible[1]; ?>,
					showInLegend: <?php echo $visible[1]; ?>,
					},			
					{
					name: "<?php echo $cell[2]; ?>",
					data: [<?php echo join($array_ee[2], ',') ?>],
					visible: <?php echo $visible[2]; ?>,
					showInLegend: <?php echo $visible[2]; ?>,
					},	
					{
					name: "<?php echo $cell[3]; ?>",
					data: [<?php echo join($array_ee[3], ',') ?>],
					visible: <?php echo $visible[3]; ?>,
					showInLegend: <?php echo $visible[3]; ?>,
					},	
					{
					name: "<?php echo $cell[4]; ?>",
					data: [<?php echo join($array_ee[4], ',') ?>],
					visible: <?php echo $visible[4]; ?>,
					showInLegend: <?php echo $visible[4]; ?>,
					},	
					{
					name: "<?php echo $cell[5]; ?>",
					data: [<?php echo join($array_ee[5], ',') ?>],
					visible: <?php echo $visible[5]; ?>,
					showInLegend: <?php echo $visible[5]; ?>,
					},	
					{
					name: "<?php echo $cell[6]; ?>",
					data: [<?php echo join($array_ee[6], ',') ?>],
					visible: <?php echo $visible[6]; ?>,
					showInLegend: <?php echo $visible[6]; ?>,
					},	
					{
					name: "<?php echo $cell[7]; ?>",
					data: [<?php echo join($array_ee[7], ',') ?>],
					visible: <?php echo $visible[7]; ?>,
					showInLegend: <?php echo $visible[7]; ?>,
					},	
					{
					name: "<?php echo $cell[8]; ?>",
					data: [<?php echo join($array_ee[8], ',') ?>],
					visible: <?php echo $visible[8]; ?>,
					showInLegend: <?php echo $visible[8]; ?>,
					},	
					{
					name: "<?php echo $cell[9]; ?>",
					data: [<?php echo join($array_ee[9], ',') ?>],
					visible: <?php echo $visible[9]; ?>,
					showInLegend: <?php echo $visible[9]; ?>,
					},	
					{
					name: "<?php echo $cell[10]; ?>",
					data: [<?php echo join($array_ee[10], ',') ?>],
					visible: <?php echo $visible[10]; ?>,
					showInLegend: <?php echo $visible[10]; ?>,
					},		
					{
					name: "<?php echo $cell[11]; ?>",
					data: [<?php echo join($array_ee[11], ',') ?>],
					visible: <?php echo $visible[11]; ?>,
					showInLegend: <?php echo $visible[11]; ?>,
					},						
					{
					name: "<?php echo $cell[12]; ?>",
					data: [<?php echo join($array_ee[12], ',') ?>],
					visible: <?php echo $visible[12]; ?>,
					showInLegend: <?php echo $visible[12]; ?>,
					},	
					{
					name: "<?php echo $cell[13]; ?>",
					data: [<?php echo join($array_ee[13], ',') ?>],
					visible: <?php echo $visible[13]; ?>,
					showInLegend: <?php echo $visible[13]; ?>,
					},	
					{
					name: "<?php echo $cell[14]; ?>",
					data: [<?php echo join($array_ee[14], ',') ?>],
					visible: <?php echo $visible[14]; ?>,
					showInLegend: <?php echo $visible[14]; ?>,
					},	
					{
					name: "<?php echo $cell[15]; ?>",
					data: [<?php echo join($array_ee[15], ',') ?>],
					visible: <?php echo $visible[15]; ?>,
					showInLegend: <?php echo $visible[15]; ?>,
					},	
					{
					name: "<?php echo $cell[16]; ?>",
					data: [<?php echo join($array_ee[16], ',') ?>],
					visible: <?php echo $visible[16]; ?>,
					showInLegend: <?php echo $visible[16]; ?>,
					},	
					{
					name: "<?php echo $cell[17]; ?>",
					data: [<?php echo join($array_ee[17], ',') ?>],
					visible: <?php echo $visible[17]; ?>,
					showInLegend: <?php echo $visible[17]; ?>,
					},	
					{
					name: "<?php echo $cell[18]; ?>",
					data: [<?php echo join($array_ee[18], ',') ?>],
					visible: <?php echo $visible[18]; ?>,
					showInLegend: <?php echo $visible[18]; ?>,
					},	
					{
					name: "<?php echo $cell[19]; ?>",
					data: [<?php echo join($array_ee[19], ',') ?>],
					visible: <?php echo $visible[19]; ?>,
					showInLegend: <?php echo $visible[19]; ?>,
					},	
					{
					name: "<?php echo $cell[20]; ?>",
					data: [<?php echo join($array_ee[20], ',') ?>],
					visible: <?php echo $visible[20]; ?>,
					showInLegend: <?php echo $visible[20]; ?>,
					},	
					{
					name: "<?php echo $cell[21]; ?>",
					data: [<?php echo join($array_ee[21], ',') ?>],
					visible: <?php echo $visible[21]; ?>,
					showInLegend: <?php echo $visible[21]; ?>,
					},	
					{
					name: "<?php echo $cell[22]; ?>",
					data: [<?php echo join($array_ee[22], ',') ?>],
					visible: <?php echo $visible[22]; ?>,
					showInLegend: <?php echo $visible[22]; ?>,
					},	
					{
					name: "<?php echo $cell[23]; ?>",
					data: [<?php echo join($array_ee[23], ',') ?>],
					visible: <?php echo $visible[23]; ?>,
					showInLegend: <?php echo $visible[23]; ?>,
					},	
					{
					name: "<?php echo $cell[24]; ?>",
					data: [<?php echo join($array_ee[24], ',') ?>],
					visible: <?php echo $visible[24]; ?>,
					showInLegend: <?php echo $visible[24]; ?>,
					},	
					{
					name: "<?php echo $cell[25]; ?>",
					data: [<?php echo join($array_ee[25], ',') ?>],
					visible: <?php echo $visible[25]; ?>,
					showInLegend: <?php echo $visible[25]; ?>,
					},	
					{
					name: "<?php echo $cell[26]; ?>",
					data: [<?php echo join($array_ee[26], ',') ?>],
					visible: <?php echo $visible[26]; ?>,
					showInLegend: <?php echo $visible[26]; ?>,
					},	
					{
					name: "<?php echo $cell[27]; ?>",
					data: [<?php echo join($array_ee[27], ',') ?>],
					visible: <?php echo $visible[27]; ?>,
					showInLegend: <?php echo $visible[27]; ?>,
					},	
					{
					name: "<?php echo $cell[28]; ?>",
					data: [<?php echo join($array_ee[28], ',') ?>],
					visible: <?php echo $visible[28]; ?>,
					showInLegend: <?php echo $visible[28]; ?>,
					},	
					{
					name: "<?php echo $cell[29]; ?>",
					data: [<?php echo join($array_ee[29], ',') ?>],
					visible: <?php echo $visible[29]; ?>,
					showInLegend: <?php echo $visible[29]; ?>,
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
				