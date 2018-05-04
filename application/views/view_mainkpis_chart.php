	<?php 
	foreach($node_daily_report as $row){
		$date[] = $row->date;
		$node = $row->node;
		$acc_rrc[] = $row->acc_rrc;
		$acc_cs[] = $row->acc_cs;
		$acc_ps[] = $row->acc_ps;
		$acc_hsdpa[] = $row->acc_hsdpa;
		$acc_hsdpa_f2h[] = $row->acc_hsdpa_f2h;
		$drop_cs[] = $row->drop_cs;
		$drop_ps[] = $row->drop_ps;
		$drop_hsdpa[] = $row->drop_hsdpa;
		$drop_hsupa[] = $row->drop_hsupa;	
		$sho_succ_rate[] = $row->sho_succ_rate;
		$soft_hand_succ_rate[] = $row->soft_hand_succ_rate;
		$hho_intra_freq_succ_rate[] = $row->hho_intra_freq_succ_rate;
		$cs_hho_intra_freq_rate[] = $row->cs_hho_intra_freq_rate;
		$ps_hho_intra_freq_succ_rate[] = $row->ps_hho_intra_freq_succ_rate;
		$hho_inter_freq_succ_rate[] = $row->hho_inter_freq_succ_rate;	
		$iratho_cs_succ_rate[] = $row->iratho_cs_succ_rate;
		$iratho_ps_succ_rate[] = $row->iratho_ps_succ_rate;
		$retention_cs_succ_rate[] = $row->retention_cs_succ_rate;
		$retention_ps_succ_rate[] = $row->retention_ps_succ_rate;	
		$sho_over[] = $row->sho_over;
		$rtwp[] = $row->rtwp;
		$availability[] = $row->availability;
		$data_hsdpa[] = $row->data_hsdpa;
		$data_hsupa[] = $row->data_hsupa;
		$ps_r99_ul[] = $row->ps_r99_ul;
		$ps_r99_dl[] = $row->ps_r99_dl;
		$voice_traffic_dl[] = $row->voice_traffic_dl;
		$voice_traffic_ul[] = $row->voice_traffic_ul;
		$hsdpa_users[] = $row->hsdpa_users;
		$hsupa_users[] = $row->hsupa_users;
		$dch_users[] = $row->dch_users;
		$pch_users[] = $row->pch_users;
		$fach_users[] = $row->fach_users;
		$ps_nonhs_users[] = $row->ps_nonhs_users;
		$thp_hsdpa[] = $row->thp_hsdpa;
		$thp_hsupa[] = $row->thp_hsupa;
		
		}	
		
			
		array_walk($date, create_function('&$str', '$str = "\"$str\"";')); //put quotes in datetime
		//echo "RNC= ".$rnc.", cellname= ".$cellname.", cellid= ".$cellid."<br><br>";
		
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
		$dch_users = array_map("tonull", $dch_users);
		$pch_users = array_map("tonull", $pch_users);
		$fach_users = array_map("tonull", $fach_users);
		$data_hsdpa = array_map("tonull", $data_hsdpa);
		$data_hsupa = array_map("tonull", $data_hsupa);
		$ps_r99_ul = array_map("tonull", $ps_r99_ul);
		$ps_r99_dl = array_map("tonull", $ps_r99_dl);
		$hsdpa_users = array_map("tonull", $hsdpa_users);
		$hsupa_users = array_map("tonull", $hsupa_users);
		$ps_nonhs_users = array_map("tonull", $ps_nonhs_users);
		$thp_hsdpa = array_map("tonull", $thp_hsdpa);
		$thp_hsupa = array_map("tonull", $thp_hsupa);
		$rtwp = array_map("tonull", $rtwp);
		$availability = array_map("tonull", $availability);
		
		// print_r(array_keys($thp_hsdpa, 0));
		// echo "<br><br>";
		// print_r($thp_hsdpa);
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
        width = 600;

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
	var estado_acc = true;
	var estado_retain = true;
	var estado_traffic = true;
	var estado_users = true;
	var estado_thpt = true;
	var estado_3gret = true;
	var estado_ho = true;
	var estado_sho = true;
	var estado_avail = true;
	var estado_rtwp = true;
	var toogle_availability = false;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
	resetZoomButton: {
        position: {
            align: 'left', // right by default
            verticalAlign: 'top', 
            x: 10,
            y: 10
        },
		    relativeTo: 'chart'
	},

	events: {
						click: function(e) {
						//console.log(e.xAxis[0].axis.categories[Math.round(e.xAxis[0].value)])
						// alert(e.xAxis[0].value);
						//acc.chart.series[1].show();
						if(estado_acc != false){
						if (e.shiftKey == 1) {
						acc.xAxis[0].options.plotLines[1].color = "red";
						acc.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						drop.xAxis[0].options.plotLines[1].color = "red";
						drop.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						traffic.xAxis[0].options.plotLines[1].color = "red";
						traffic.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						users.xAxis[0].options.plotLines[1].color = "red";
						users.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						thp.xAxis[0].options.plotLines[1].color = "red";
						thp.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;	
						retention.xAxis[0].options.plotLines[1].color = "red";
						retention.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						handover.xAxis[0].options.plotLines[1].color = "red";
						handover.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						sho_overhead.xAxis[0].options.plotLines[1].color = "red";
						sho_overhead.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						availability.xAxis[0].options.plotLines[1].color = "red";
						availability.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						rtwp.xAxis[0].options.plotLines[1].color = "red";
						rtwp.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;						
						acc.xAxis[0].update();
						drop.xAxis[0].update();
						traffic.xAxis[0].update();
						users.xAxis[0].update();
						thp.xAxis[0].update();
						retention.xAxis[0].update();
						handover.xAxis[0].update();
						sho_overhead.xAxis[0].update();
						availability.xAxis[0].update();
						rtwp.xAxis[0].update();						
						}else{	
						acc.xAxis[0].options.plotLines[0].color = "red";
						acc.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						drop.xAxis[0].options.plotLines[0].color = "red";
						drop.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						traffic.xAxis[0].options.plotLines[0].color = "red";
						traffic.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						users.xAxis[0].options.plotLines[0].color = "red";
						users.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						thp.xAxis[0].options.plotLines[0].color = "red";
						thp.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;	
						retention.xAxis[0].options.plotLines[0].color = "red";
						retention.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						handover.xAxis[0].options.plotLines[0].color = "red";
						handover.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						sho_overhead.xAxis[0].options.plotLines[0].color = "red";
						sho_overhead.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						availability.xAxis[0].options.plotLines[0].color = "red";
						availability.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						rtwp.xAxis[0].options.plotLines[0].color = "red";
						rtwp.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;						
						acc.xAxis[0].update();
						drop.xAxis[0].update();
						traffic.xAxis[0].update();
						users.xAxis[0].update();
						thp.xAxis[0].update();
						retention.xAxis[0].update();
						handover.xAxis[0].update();
						sho_overhead.xAxis[0].update();
						availability.xAxis[0].update();
						rtwp.xAxis[0].update();
						}
						}
      }
    }
				},
				//	colors: ['#000099', '#CC0000', '#006600', '#FFCC00', '#D9CDB6'],
					credits: {
					   enabled: false
					},		
					//exporting: { 
					
					exporting: {
						enabled: true,
					// buttons: {
						   // contextButton: {
							   // menuItems: [{
								   // textKey: 'downloadXLS',
								   // onclick: function () {
									   // this.downloadXLS();
								   // }
							   // }, {
								   // textKey: 'downloadCSV',
								   // onclick: function () {
									   // this.downloadCSV();
								   // }
							   // }]
						   // }
							// }
       },
					//},
					title: {
						text: '<b>Accessibility</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>],
						///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					plotLines: [{
								color: '#FF0000',
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
					yAxis: {
						max: 100,
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
					shared: false
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
								click: function( event ) {
								// Log to console
								var kpi = this.name;
								kpi = kpi.toLowerCase();
								kpi = kpi.trim();
								var strkpi = kpi.replace(/(^\s+|\s+$)/g, '');
								// alert(node.substring(0, 3));
								// if (node.substring(0, 3) == 'RNC' && reportagg == 'weekly') {
									document.getElementById('wcreportnename').value = node;
									document.getElementById('wcreportnetype').value = reportnetype;
									document.getElementById('wctimeagg').value = reportagg;
									document.getElementById('wcreportdate').value = date[event.point.x];
									document.getElementById('wckpi').value = this.name;
									document.wcform.submit();
								// } 
								//	else {
									// //alert("NPSmart current release does not support Worst Cells for the selected aggregation.")
								// }
								
								//var date = date[event.point.x];
								//alert(kpi + date + node);
								//alert(reportagg);
									// alert(kpi + ' clicked\n' + ' ' + node + ' ' +
									  // 'Alt: ' + event.altKey + '\n' +
									  // 'Control: ' + event.ctrlKey + '\n'+
									  // 'Shift: ' + event.shifkKey + '\n'+
									  // 'Datetime: ' + date[event.point.x]);
								},                
						legendItemClick: function () {
						if(this.name == "Marker"){
						if(this.visible == true){
						estado_acc = false;		
						acc.xAxis[0].options.plotLines[0].color = "transparent";
						drop.xAxis[0].options.plotLines[0].color = "transparent";
						traffic.xAxis[0].options.plotLines[0].color = "transparent";
						users.xAxis[0].options.plotLines[0].color = "transparent";
						thp.xAxis[0].options.plotLines[0].color = "transparent";
						retention.xAxis[0].options.plotLines[0].color = "transparent";
						handover.xAxis[0].options.plotLines[0].color = "transparent";
						sho_overhead.xAxis[0].options.plotLines[0].color = "transparent";
						availability.xAxis[0].options.plotLines[0].color = "transparent";
						rtwp.xAxis[0].options.plotLines[0].color = "transparent";
						acc.xAxis[0].options.plotLines[1].color = "transparent";
						drop.xAxis[0].options.plotLines[1].color = "transparent";
						traffic.xAxis[0].options.plotLines[1].color = "transparent";
						users.xAxis[0].options.plotLines[1].color = "transparent";
						thp.xAxis[0].options.plotLines[1].color = "transparent";
						retention.xAxis[0].options.plotLines[1].color = "transparent";
						handover.xAxis[0].options.plotLines[1].color = "transparent";
						sho_overhead.xAxis[0].options.plotLines[1].color = "transparent";
						availability.xAxis[0].options.plotLines[1].color = "transparent";
						rtwp.xAxis[0].options.plotLines[1].color = "transparent";						
						acc.xAxis[0].update();
						drop.xAxis[0].update();
						traffic.xAxis[0].update();
						users.xAxis[0].update();
						thp.xAxis[0].update();
						retention.xAxis[0].update();
						handover.xAxis[0].update();
						sho_overhead.xAxis[0].update();
						availability.xAxis[0].update();
						rtwp.xAxis[0].update();						
						}else
						if(this.visible == false){	
						estado_acc = true;	
						acc.xAxis[0].options.plotLines[0].color = "red";
						drop.xAxis[0].options.plotLines[0].color = "red";
						traffic.xAxis[0].options.plotLines[0].color = "red";
						users.xAxis[0].options.plotLines[0].color = "red";
						thp.xAxis[0].options.plotLines[0].color = "red";
						retention.xAxis[0].options.plotLines[0].color = "red";
						handover.xAxis[0].options.plotLines[0].color = "red";
						sho_overhead.xAxis[0].options.plotLines[0].color = "red";
						availability.xAxis[0].options.plotLines[0].color = "red";
						rtwp.xAxis[0].options.plotLines[0].color = "red";
						acc.xAxis[0].options.plotLines[1].color = "red";
						drop.xAxis[0].options.plotLines[1].color = "red";
						traffic.xAxis[0].options.plotLines[1].color = "red";
						users.xAxis[0].options.plotLines[1].color = "red";
						thp.xAxis[0].options.plotLines[1].color = "red";
						retention.xAxis[0].options.plotLines[1].color = "red";
						handover.xAxis[0].options.plotLines[1].color = "red";
						sho_overhead.xAxis[0].options.plotLines[1].color = "red";
						availability.xAxis[0].options.plotLines[1].color = "red";
						rtwp.xAxis[0].options.plotLines[1].color = "red";
						acc.xAxis[0].update();
						drop.xAxis[0].update();
						traffic.xAxis[0].update();
						users.xAxis[0].update();
						thp.xAxis[0].update();
						retention.xAxis[0].update();
						handover.xAxis[0].update();
						sho_overhead.xAxis[0].update();
						availability.xAxis[0].update();
						rtwp.xAxis[0].update();	
						}	
						}
				}
							}
						}
					},
					
					series: [{
					name: 'Marker',
					color:'red'
					},
					{
						name: 'RRC Acc',
						data: [<?php echo join($acc_rrc, ',') ?>]
					},
					{
			            name: 'PS Acc',
						data: [<?php echo join($acc_ps, ',') ?>]
			        },
					{
			            name: 'CS Acc',
						data: [<?php echo join($acc_cs, ',') ?>]
			        },
					{
			            name: 'HS Acc',
						data: [<?php echo join($acc_hsdpa_f2h, ',') ?>]
			        }
											
					]							
		});

/////////////////////////////////////////////////////////////////////////////////////////////////////DROP//////////////////////////

		var drop = new Highcharts.Chart({
		chart: {
				renderTo: 'drop',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy'
				,
	resetZoomButton: {
        position: {
            align: 'left', // right by default
            verticalAlign: 'top', 
            x: 10,
            y: 10
        },
        relativeTo: 'chart'
    },
		events: {
						click: function(e) {
						//console.log(e.xAxis[0].axis.categories[Math.round(e.xAxis[0].value)])
						// alert(e.xAxis[0].value);
						//acc.chart.series[1].show();
						if(estado_retain != false){
						if (e.shiftKey == 1) {
						drop.xAxis[0].options.plotLines[1].color = "red";
						drop.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						drop.xAxis[0].update();
						}else{
						drop.xAxis[0].options.plotLines[0].color = "red";
						drop.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						drop.xAxis[0].update();
						}
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
						text: '<b>Retainability</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>],///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
					yAxis: {
						max: 100,
						//min: 98.5,
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
					shared: false
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
								click: function( event ) {
								// Log to console
								var kpi = this.name;
								kpi = kpi.toLowerCase();
								kpi = kpi.trim();
								var strkpi = kpi.replace(/(^\s+|\s+$)/g, '');
								//alert(node.substring(0, 3));
								//if (node.substring(0, 3) == 'RNC' && reportagg == 'weekly') {
									document.getElementById('wcreportnename').value = node;
									document.getElementById('wcreportnetype').value = reportnetype;
									document.getElementById('wctimeagg').value = reportagg;
									document.getElementById('wcreportdate').value = date[event.point.x];
									document.getElementById('wckpi').value = this.name;
									document.wcform.submit();
								// } else {
									// alert("NPSmart current release does not support Worst Cells for the selected aggregation.")
								// }
								},                
						legendItemClick: function () {
						if(this.name == "Marker"){
						if(this.visible == true){
						estado_retain = false;		
						drop.xAxis[0].options.plotLines[0].color = "transparent";
						drop.xAxis[0].options.plotLines[1].color = "transparent";						
						drop.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_retain = true;	
						drop.xAxis[0].options.plotLines[0].color = "red";
						drop.xAxis[0].options.plotLines[1].color = "red";						
						drop.xAxis[0].update();
						}	
						}
				}
							}
						}
					},
					
					series: [{
					name: 'Marker',
					color:'red'
					},{
						name: 'Retainability CS',
						data: [<?php echo join($drop_cs, ',') ?>]
					},
					{
			            name: 'Retainability PS',
						data: [<?php echo join($drop_ps, ',') ?>]
			         }//,
					// {
			            // name: 'Retainability HSDPA',
						// data: [<?php echo join($drop_hsdpa, ',') ?>]
			        // },
					// {
			            // name: 'Retainability HSUPA',
						// data: [<?php echo join($drop_hsupa, ',') ?>]
			        // }
											
					]							
		});
//////////////////////////////////////////////////////////////////////////////////////////TRAFFIC//////////////////////////////////////////////////////////////////////////////////////////////////////////////

		var traffic = new Highcharts.Chart({
				chart: {
						renderTo: 'traffic',
						alignTicks:false,
						//backgroundColor:'transparent',
						zoomType: 'xy'
						,
			resetZoomButton: {
				position: {
					align: 'left', // right by default
					verticalAlign: 'top', 
					x: 10,
					y: 10
				},
				relativeTo: 'chart'
			},
		events: {
						click: function(e) {
						//console.log(e.xAxis[0].axis.categories[Math.round(e.xAxis[0].value)])
						// alert(e.xAxis[0].value);
						//acc.chart.series[1].show();
						if(estado_traffic != false){
						if (e.shiftKey == 1) {
						traffic.xAxis[0].options.plotLines[1].color = "red";
						traffic.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						traffic.xAxis[0].update();
						}else{
						traffic.xAxis[0].options.plotLines[0].color = "red";
						traffic.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						traffic.xAxis[0].update();
						}
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
								text: '<b>Traffic</b>',// - ' + node,
							//	 floating: true,
								x: -20, //center
								//y: 0
							},
							subtitle: {
								text: '<i>' + node + '</i>',
								x: -20
							},
							xAxis: {
								categories: [<?php echo join($date, ',') ?>],///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
						//max: 100,
						labels: {
					//		format: '{value}',
					///		style: {
					///			color: Highcharts.getOptions().colors[1]
					///		}
						},
						title: {
							text: 'GB',
					///		style: {
					///			color: Highcharts.getOptions().colors[1]
					///		}
						},
						
						plotLines: [{
								value: 0,
								width: 1,
								color: '#808080'
							}]
					}, { // Secondary yAxis
						title: {
							text: 'GB',
				///			style: {
				///				color: Highcharts.getOptions().colors[0]
				///			}
						},
						labels: {
						 //format: '{value}',
				///			style: {
				///				color: Highcharts.getOptions().colors[0]
				///			}
						},
						opposite: true
					}],
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
						estado_traffic = false;		
						traffic.xAxis[0].options.plotLines[0].color = "transparent";
						traffic.xAxis[0].options.plotLines[1].color = "transparent";
						traffic.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_traffic = true;	
						traffic.xAxis[0].options.plotLines[0].color = "red";
						traffic.xAxis[0].options.plotLines[1].color = "red";
						traffic.xAxis[0].update();
						}	
						}
				}
							}
						}
					},
							
							series: [{
								name: 'Marker',
								color:'red'
							},{
								name: 'R99 DL',
								data: [<?php echo join($ps_r99_ul, ',') ?>]
							},
							{
								name: 'R99 UL',
								data: [<?php echo join($ps_r99_dl, ',') ?>]
							},
							{
								name: 'HSDPA',
								yAxis: 1,
								data: [<?php echo join($data_hsdpa, ',') ?>]
							},
							{
								name: 'HSUPA',
								yAxis: 1,
								data: [<?php echo join($data_hsupa, ',') ?>]
							}
													
							]							
				});
				
//////////////////////////////////////////////////////////////////////////////////////////USERS//////////////////////////////////////////////////////////////////////////////////////////////////////////////

		var users = new Highcharts.Chart({
				chart: {
						renderTo: 'users',
							alignTicks:false,
							//backgroundColor:'transparent',
							zoomType: 'xy'
							,
				resetZoomButton: {
					position: {
						align: 'left', // right by default
						verticalAlign: 'top', 
						x: 10,
						y: 10
					},
					relativeTo: 'chart'
				},
		events: {
						click: function(e) {
						//console.log(e.xAxis[0].axis.categories[Math.round(e.xAxis[0].value)])
						// alert(e.xAxis[0].value);
						//acc.chart.series[1].show();
						if(estado_users != false){
						if (e.shiftKey == 1) {
						users.xAxis[0].options.plotLines[1].color = "red";
						users.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						users.xAxis[0].update();						
						}else{
						users.xAxis[0].options.plotLines[0].color = "red";
						users.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						users.xAxis[0].update();
						}
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
								text: '<b>Users</b>',// - ' + node,
							//	 floating: true,
								x: -20, //center
								//y: 0
							},
							subtitle: {
								text: '<i>' + node + '</i>',
								x: -20
							},
							xAxis: {
								categories: [<?php echo join($date, ',') ?>],///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
							yAxis: {
								//max: 100,
								///min: 0,
								title: {
									text: 'Users'
								},
								//{  },
								plotLines: [{
									value: 0,
									width: 1,
									color: '#808080'
								}]
								
							},
							tooltip: {
							valueSuffix: ' Users',
							shared: false
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
						estado_users = false;		
						users.xAxis[0].options.plotLines[0].color = "transparent";
						users.xAxis[0].options.plotLines[1].color = "transparent";
						users.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_users = true;	
						users.xAxis[0].options.plotLines[0].color = "red";
						users.xAxis[0].options.plotLines[1].color = "red";
						users.xAxis[0].update();
						}	
						}
				}
							}
						}
					},
							
							series: [{
								name: 'Marker',
								color:'red'
							},{
								name: 'HSDPA',
								data: [<?php echo join($hsdpa_users, ',') ?>]
							},
							{
								name: 'HSUPA',
								data: [<?php echo join($hsupa_users, ',') ?>]
							},
							{
								name: 'R99',
								data: [<?php echo join($ps_nonhs_users, ',') ?>]
							}
							,
							{
								name: 'DCH',
								data: [<?php echo join($dch_users, ',') ?>]
							},
							{
								name: 'PCH',
								data: [<?php echo join($pch_users, ',') ?>]
							},
							{
								name: 'FACH',
								data: [<?php echo join($fach_users, ',') ?>]
							}
													
							]							
				});				

//////////////////////////////////////////////////////////////////////////////////////////THROUGHPUT//////////////////////////////////////////////////////////////////////////////////////////////////////////////
		var thp = new Highcharts.Chart({
				chart: {
						renderTo: 'thp',
							alignTicks:false,
							//backgroundColor:'transparent',
							zoomType: 'xy'
							,
				resetZoomButton: {
					position: {
						align: 'left', // right by default
						verticalAlign: 'top', 
						x: 10,
						y: 10
					},
					relativeTo: 'chart'
				},
		events: {
						click: function(e) {
						//console.log(e.xAxis[0].axis.categories[Math.round(e.xAxis[0].value)])
						// alert(e.xAxis[0].value);
						//acc.chart.series[1].show();
						if(estado_thpt != false){
						if (e.shiftKey == 1) {
						thp.xAxis[0].options.plotLines[1].color = "red";
						thp.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						thp.xAxis[0].update();						
						}else{
						thp.xAxis[0].options.plotLines[0].color = "red";
						thp.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						thp.xAxis[0].update();
						}
						}
      }
    }
							},
			
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: 'Throughput',
						x: -20 //center
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>],///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
						//max: 100,
						labels: {
							format: '{value}',
					///		style: {
					///			color: Highcharts.getOptions().colors[1]
					///		}
						},
						title: {
							text: 'Kbps',
					///		style: {
					///			color: Highcharts.getOptions().colors[1]
					///		}
						},
						
						plotLines: [{
								value: 0,
								width: 1,
								color: '#808080'
							}]
					}, { // Secondary yAxis
						title: {
							text: 'Kbps',
				///			style: {
				///				color: Highcharts.getOptions().colors[0]
				///			}
						},
						labels: {
						///	format: '{value}%',
				///			style: {
				///				color: Highcharts.getOptions().colors[0]
				///			}
						},
						opposite: true
					}],
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
								click: function( event ) {
								// Log to console
								var kpi = this.name;
								kpi = kpi.toLowerCase();
								kpi = kpi.trim();
								var strkpi = kpi.replace(/(^\s+|\s+$)/g, '');
								//alert(node.substring(0, 3));
								//if (node.substring(0, 3) == 'RNC' && reportagg == 'weekly') {
									document.getElementById('wcreportnename').value = node;
									document.getElementById('wcreportnetype').value = reportnetype;
									document.getElementById('wctimeagg').value = reportagg;
									document.getElementById('wcreportdate').value = date[event.point.x];
									document.getElementById('wckpi').value = this.name;
									document.wcform.submit();
								// } else {
									// alert("NPSmart current release does not support Worst Cells for the selected aggregation.")
								// }
								},                
						legendItemClick: function () {
						if(this.name == "Marker"){
						if(this.visible == true){
						estado_thpt = false;		
						thp.xAxis[0].options.plotLines[0].color = "transparent";
						thp.xAxis[0].options.plotLines[1].color = "transparent";
						thp.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_thpt = true;	
						thp.xAxis[0].options.plotLines[0].color = "red";
						thp.xAxis[0].options.plotLines[1].color = "red";
						thp.xAxis[0].update();
						}	
						}
				}
							}
						}
					},
					
					series: [{
								name: 'Marker',
								color:'red'
							},{
					///	showInLegend: false,
						name: 'HSDPA THP',
						data: [<?php echo join($thp_hsdpa, ',') ?>]///[7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
						///data: JSON.parse("[" + acc_rrc + "]")
					}
					,{
			            name: 'HSUPA THP',
						//type: 'column',
						color: 'rgba(0, 255, 0, 0.8)',
						///borderColor:'#C80000',
						///borderColor:'rgba(0, 255, 0)',

						yAxis: 1,
			            ///data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
						data: [<?php echo join($thp_hsupa, ',') ?>]
			        }
					]							
		});

//////////////////////////////////////////////////////////////////////////////////////////RETENTION//////////////////////////////////////////////////////////////////////////////////////////////////////////////

		var retention = new Highcharts.Chart({
				chart: {
						renderTo: 'retention',
									alignTicks:false,
								//backgroundColor:'transparent',
								zoomType: 'xy'
								,
					resetZoomButton: {
						position: {
							align: 'left', // right by default
							verticalAlign: 'top', 
							x: 10,
							y: 10
						},
						relativeTo: 'chart'
					},
		events: {
						click: function(e) {
						//console.log(e.xAxis[0].axis.categories[Math.round(e.xAxis[0].value)])
						// alert(e.xAxis[0].value);
						//acc.chart.series[1].show();
						if(estado_3gret != false){
						if (e.shiftKey == 1) {
						retention.xAxis[0].options.plotLines[1].color = "red";
						retention.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						retention.xAxis[0].update();						
						}else{
						retention.xAxis[0].options.plotLines[0].color = "red";
						retention.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						retention.xAxis[0].update();
						}
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
								text: '<b>3G Retention</b>',// - ' + node,
							//	 floating: true,
								x: -20, //center
								//y: 0
							},
							subtitle: {
								text: '<i>' + node + '</i>',
								x: -20
							},
							xAxis: {
								categories: [<?php echo join($date, ',') ?>],///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
							yAxis: {
								max: 100,
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
							shared: false
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
								click: function( event ) {
								// Log to console
								var kpi = this.name;
								kpi = kpi.toLowerCase();
								kpi = kpi.trim();
								var strkpi = kpi.replace(/(^\s+|\s+$)/g, '');
								//alert(node.substring(0, 3));
								//if (node.substring(0, 3) == 'RNC' && reportagg == 'weekly') {
									document.getElementById('wcreportnename').value = node;
									document.getElementById('wcreportnetype').value = reportnetype;
									document.getElementById('wctimeagg').value = reportagg;
									document.getElementById('wcreportdate').value = date[event.point.x];
									document.getElementById('wckpi').value = this.name;
									document.wcform.submit();
								// } else {
									// alert("NPSmart current release does not support Worst Cells for the selected aggregation.")
								// }
								},                
						legendItemClick: function () {
						if(this.name == "Marker"){
						if(this.visible == true){
						estado_3gret = false;		
						retention.xAxis[0].options.plotLines[0].color = "transparent";
						retention.xAxis[0].options.plotLines[1].color = "transparent";
						retention.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_3gret = true;	
						retention.xAxis[0].options.plotLines[0].color = "red";
						retention.xAxis[0].options.plotLines[1].color = "red";
						retention.xAxis[0].update();
						}	
						}
				}
							}
						}
					},
							
							series: [{
								name: 'Marker',
								color:'red'
							},{
								name: 'CS Retention',
								data: [<?php echo join($retention_cs_succ_rate, ',') ?>]
							},
							{
								name: 'PS Retention',
								data: [<?php echo join($retention_ps_succ_rate, ',') ?>]
							}													
							]							
				});

//////////////////////////////////////////////////////////////////////////////////////////HANDOVER//////////////////////////////////////////////////////////////////////////////////////////////////////////////

		var handover = new Highcharts.Chart({
				chart: {
						renderTo: 'handover',
									alignTicks:false,
									//backgroundColor:'transparent',
									zoomType: 'xy'
									,
						resetZoomButton: {
							position: {
								align: 'left', // right by default
								verticalAlign: 'top', 
								x: 10,
								y: 10
							},
							relativeTo: 'chart'
						},
		events: {
						click: function(e) {
						//console.log(e.xAxis[0].axis.categories[Math.round(e.xAxis[0].value)])
						// alert(e.xAxis[0].value);
						//acc.chart.series[1].show();
						if(estado_ho != false){
						if (e.shiftKey == 1) {
						handover.xAxis[0].options.plotLines[1].color = "red";
						handover.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						handover.xAxis[0].update();						
						}else{
						handover.xAxis[0].options.plotLines[0].color = "red";
						handover.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						handover.xAxis[0].update();
						}
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
								text: '<b>Handover</b>',// - ' + node,
							//	 floating: true,
								x: -20, //center
								//y: 0
							},
							subtitle: {
								text: '<i>' + node + '</i>',
								x: -20
							},
							xAxis: {
								categories: [<?php echo join($date, ',') ?>],///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
							yAxis: {
								max: 100,
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
							shared: false
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
								click: function( event ) {
								// Log to console
								var kpi = this.name;
								kpi = kpi.toLowerCase();
								kpi = kpi.trim();
								var strkpi = kpi.replace(/(^\s+|\s+$)/g, '');
								//alert(node.substring(0, 3));
								//if (node.substring(0, 3) == 'RNC' && reportagg == 'weekly') {
									document.getElementById('wcreportnename').value = node;
									document.getElementById('wcreportnetype').value = reportnetype;
									document.getElementById('wctimeagg').value = reportagg;
									document.getElementById('wcreportdate').value = date[event.point.x];
									document.getElementById('wckpi').value = this.name;
									document.wcform.submit();
								// } else {
									// alert("NPSmart current release does not support Worst Cells for the selected aggregation.")
								// }
								},                
						legendItemClick: function () {
						if(this.name == "Marker"){
						if(this.visible == true){
						estado_ho = false;		
						handover.xAxis[0].options.plotLines[0].color = "transparent";
						handover.xAxis[0].options.plotLines[1].color = "transparent";
						handover.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_ho = true;	
						handover.xAxis[0].options.plotLines[0].color = "red";
						handover.xAxis[0].options.plotLines[1].color = "red";
						handover.xAxis[0].update();
						}	
						}
				}
							}
						}
					},						
							series: [{
								name: 'Marker',
								color:'red'
							},{
								name: 'Soft HO',
								data: [<?php echo join($soft_hand_succ_rate, ',') ?>]
							},
						//	{
							//	name: 'HHO Intra Freq',
							//	data: [<?php echo join($hho_intra_freq_succ_rate, ',') ?>]
							//},
							{
								name: 'CS HHO Intra Freq',
								data: [<?php echo join($cs_hho_intra_freq_rate, ',') ?>]
							},
							{
								name: 'PS HHO Intra Freq',
								data: [<?php echo join($ps_hho_intra_freq_succ_rate, ',') ?>]
							},
							{
								name: 'HHO Inter Freq',
								data: [<?php echo join($hho_inter_freq_succ_rate, ',') ?>]
							},
							{
								name: 'IRATHO CS',
								data: [<?php echo join($iratho_cs_succ_rate, ',') ?>]
							},
							{
								name: 'IRATHO PS',
								data: [<?php echo join($iratho_ps_succ_rate, ',') ?>]
							}
										
							]							
				});

//////////////////////////////////////////////////////////////////////////////////////////SHO OVERHEAD//////////////////////////////////////////////////////////////////////////////////////////////////////////////

		var sho_overhead = new Highcharts.Chart({
				chart: {
						renderTo: 'sho_overhead',
									alignTicks:false,
									//backgroundColor:'transparent',
									zoomType: 'xy'
									,
						resetZoomButton: {
							position: {
								align: 'left', // right by default
								verticalAlign: 'top', 
								x: 10,
								y: 10
							},
							relativeTo: 'chart'
						},
		events: {
						click: function(e) {
						//console.log(e.xAxis[0].axis.categories[Math.round(e.xAxis[0].value)])
						// alert(e.xAxis[0].value);
						//acc.chart.series[1].show();
						if(estado_sho != false){
						if (e.shiftKey == 1) {
						sho_overhead.xAxis[0].options.plotLines[1].color = "red";
						sho_overhead.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						sho_overhead.xAxis[0].update();						
						}else{
						sho_overhead.xAxis[0].options.plotLines[0].color = "red";
						sho_overhead.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						sho_overhead.xAxis[0].update();
						}
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
								text: '<b>Soft Handover Overhead</b>',// - ' + node,
							//	 floating: true,
								x: -20, //center
								//y: 0
							},
							subtitle: {
								text: '<i>' + node + '</i>',
								x: -20
							},
							xAxis: {
								categories: [<?php echo join($date, ',') ?>],///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
							shared: false
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
						estado_sho = false;		
						sho_overhead.xAxis[0].options.plotLines[0].color = "transparent";
						sho_overhead.xAxis[0].options.plotLines[1].color = "transparent";
						sho_overhead.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_sho = true;	
						sho_overhead.xAxis[0].options.plotLines[0].color = "red";
						sho_overhead.xAxis[0].options.plotLines[1].color = "red";
						sho_overhead.xAxis[0].update();
						}	
						}
				}
							}
						}
					},
							
							series: [{
								name: 'Marker',
								color:'red'
							},{
								name: 'SHO Overhead',
								data: [<?php echo join($sho_over, ',') ?>]
							}
										
							]							
				});				
				
//////////////////////////////////////////////////////////////////////////////////////////AVAILABILITY//////////////////////////////////////////////////////////////////////////////////////////////////////////////

		var availability = new Highcharts.Chart({
				chart: {
						renderTo: 'availability',
											alignTicks:false,
										//backgroundColor:'transparent',
										zoomType: 'xy'
										,
							resetZoomButton: {
								position: {
									align: 'left', // right by default
									verticalAlign: 'top', 
									x: 10,
									y: 10
								},
								relativeTo: 'chart'
							},
		events: {
						click: function(e) {
						//console.log(e.xAxis[0].axis.categories[Math.round(e.xAxis[0].value)])
						// alert(e.xAxis[0].value);
						//acc.chart.series[1].show();
						if(estado_avail != false){
						if (e.shiftKey == 1) {
						availability.xAxis[0].options.plotLines[1].color = "red";
						availability.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						availability.xAxis[0].update();						
						}else{
						availability.xAxis[0].options.plotLines[0].color = "red";
						availability.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						availability.xAxis[0].update();
						}
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
								text: '<b>Availability</b>',// - ' + node,
							//	 floating: true,
								x: -20, //center
								//y: 0
							},
							subtitle: {
								text: '<i>' + node + '</i>',
								x: -20
							},
							xAxis: {
								categories: [<?php echo join($date, ',') ?>],///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
							yAxis: {
								max: 100,
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
							shared: false
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
								click: function( event ) {
								// Log to console
								var kpi = this.name;
								kpi = kpi.toLowerCase();
								kpi = kpi.trim();
								var strkpi = kpi.replace(/(^\s+|\s+$)/g, '');
								//alert(node.substring(0, 3));
								//if (node.substring(0, 3) == 'RNC' && reportagg == 'weekly') {
									document.getElementById('wcreportnename').value = node;
									document.getElementById('wcreportnetype').value = reportnetype;
									document.getElementById('wctimeagg').value = reportagg;
									document.getElementById('wcreportdate').value = date[event.point.x];
									document.getElementById('wckpi').value = this.name;
									document.wcform.submit();
								// } else {
									// alert("NPSmart current release does not support Worst Cells for the selected aggregation.")
								// }
								},                
						legendItemClick: function () {
						if(this.name == "Marker"){
						if(this.visible == true){
						estado_avail = false;		
						availability.xAxis[0].options.plotLines[0].color = "transparent";
						availability.xAxis[0].options.plotLines[1].color = "transparent";
						availability.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_avail = true;	
						availability.xAxis[0].options.plotLines[0].color = "red";
						availability.xAxis[0].options.plotLines[1].color = "red";
						availability.xAxis[0].update();
						}	
						}
				}
							}
						}
					},
						
							series: [{
								name: 'Marker',
								color:'red'
							},{
								name: 'Availability',
								data: [<?php echo join($availability, ',') ?>]
							}
													
							]							
				});

//////////////////////////////////////////////////////////////////////////////////////////RTWP//////////////////////////////////////////////////////////////////////////////////////////////////////////////

		var rtwp = new Highcharts.Chart({
				chart: {
						renderTo: 'rtwp',
									alignTicks:false,
									//backgroundColor:'transparent',
									zoomType: 'xy'
									,
						resetZoomButton: {
							position: {
								align: 'left', // right by default
								verticalAlign: 'top', 
								x: 10,
								y: 10
							},
							relativeTo: 'chart'
						},
		events: {
						click: function(e) {
						//console.log(e.xAxis[0].axis.categories[Math.round(e.xAxis[0].value)])
						// alert(e.xAxis[0].value);
						//acc.chart.series[1].show();
						if(estado_rtwp != false){
						if (e.shiftKey == 1) {
						rtwp.xAxis[0].options.plotLines[1].color = "red";
						rtwp.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						rtwp.xAxis[0].update();						
						}else{
						rtwp.xAxis[0].options.plotLines[0].color = "red";
						rtwp.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						rtwp.xAxis[0].update();
						}
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
								text: '<b>RTWP</b>',// - ' + node,
							//	 floating: true,
								x: -20, //center
								//y: 0
							},
							subtitle: {
								text: '<i>' + node + '</i>',
								x: -20
							},
							xAxis: {
								categories: [<?php echo join($date, ',') ?>],///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
							yAxis: {
								//max: 100,
								///min: 0,
								title: {
									text: 'dBm'
								},
								//{  },
								plotLines: [{
									value: 0,
									width: 1,
									color: '#808080'
								}]
								
							},
							tooltip: {
							valueSuffix: 'dBm',
							shared: false
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
								click: function( event ) {
								// Log to console
								var kpi = this.name;
								kpi = kpi.toLowerCase();
								kpi = kpi.trim();
								var strkpi = kpi.replace(/(^\s+|\s+$)/g, '');
								//alert(node.substring(0, 3));
								//if (node.substring(0, 3) == 'RNC' && reportagg == 'weekly') {
									document.getElementById('wcreportnename').value = node;
									document.getElementById('wcreportnetype').value = reportnetype;
									document.getElementById('wctimeagg').value = reportagg;
									document.getElementById('wcreportdate').value = date[event.point.x];
									document.getElementById('wckpi').value = this.name;
									document.wcform.submit();
								// } else {
									// alert("NPSmart current release does not support Worst Cells for the selected aggregation.")
								// }
								},                
						legendItemClick: function () {
						if(this.name == "Marker"){
						if(this.visible == true){
						estado_rtwp = false;		
						rtwp.xAxis[0].options.plotLines[0].color = "transparent";
						rtwp.xAxis[0].options.plotLines[1].color = "transparent";
						rtwp.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_rtwp = true;	
						rtwp.xAxis[0].options.plotLines[0].color = "red";
						rtwp.xAxis[0].options.plotLines[1].color = "red";
						rtwp.xAxis[0].update();
						}	
						}
				}
							}
						}
					},
							
							series: [{
								name: 'Marker',
								color:'red'
							},{
								name: 'RTWP',
								data: [<?php echo join($rtwp, ',') ?>]
							}						
													
							]							
				});
				
var kpi = [];
var scale = [];

kpi[0] = "acc";
kpi[1] = "drop";
kpi[2] = "traffic";
kpi[3] = "users";
kpi[4] = "thp";
kpi[5] = "retention";
kpi[6] = "handover";
kpi[7] = "sho_overhead";
kpi[8] = "availability";
kpi[9] = "rtwp";


function altera_escala(iscale){

	scale[iscale] = $("#"+kpi[iscale]+"").highcharts();
	$( '<div id="'+kpi[iscale]+'" style="text-align:left; margin-left: 10px; display:none"><div style="display:inline-block">min Y: <input id="scale_min'+i+'" type="number" style="width:70px"/></div><div style="display:inline-block">max Y: <input id="scale_max'+i+'" type="number" style="width:70px"/></div></div>' ).insertBefore( "#content"+i+"" );
	$('#scale_max'+iscale+'').val(scale[iscale].yAxis[0].getExtremes().dataMax);
	$('#scale_min'+iscale+'').val(scale[iscale].yAxis[0].getExtremes().dataMin);
	
	$('#scale_max'+iscale+'').on('keyup mouseup', function(){

		var x = $('#scale_max'+iscale+'').val();
		if(x != ""){	
		scale[iscale].yAxis[0].update({max: ""+x+""});
		}else{
		$('#scale_max'+iscale+'').val(scale[iscale].yAxis[0].getExtremes().dataMax);	
		scale[iscale].yAxis[0].update({max: null});
		}
		
	});
	
	$('#scale_min'+iscale+'').on('keyup mouseup', function(){
		
		var x = $('#scale_min'+iscale+'').val();
		if(x != ""){	
			scale[iscale].yAxis[0].update({min: ""+x+""});
		}else{
		$('#scale_min'+iscale+'').val(scale[iscale].yAxis[0].getExtremes().dataMin);	
			scale[iscale].yAxis[0].update({min: null});
		}
		
	});	
}	

for(i = 0; i < kpi.length; i++ ){

altera_escala(i);

}

Highcharts.getOptions().exporting.buttons.contextButton.menuItems.push({
	text: 'Scale Options',
	onclick: function (e) {
		for(i = 0; i < kpi.length; i++){		
			if(toogle_availability == false){
			$('#'+kpi[i]+'').show();
			}else{
			$('#'+kpi[i]+'').hide();
			}	
		}
		if(toogle_availability == false){
		toogle_availability = true;	
		}else{
		toogle_availability = false;	
		}
	}
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
				