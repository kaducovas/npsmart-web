	<?php 
	foreach($node_daily_report as $row){
		$date[] = $row->date;
		$node = $row->node;
		$rrc_service[] = $row->rrc_service;
		$fails_rrc_service[] = $row->fails_rrc_service;
		$rrc_signaling[] = $row->rrc_signaling;
		$fails_rrc_signaling[] = $row->fails_rrc_signaling;
		$s1sig[] = $row->s1sig;
		$fails_s1sig[] = $row->fails_s1sig;
		$e_rab[] = $row->e_rab;
		$fails_e_rab[] = $row->fails_e_rab;
		$call_setup[] = $row->call_setup;
		$csfb[] = $row->csfb;
		$fails_csfb[] = $row->fails_csfb;
		$availability[] = $row->availability;
		$intra_freq_hoo_out[] = $row->intra_freq_hoo_out;
		$inter_freq_hoo_out[] = $row->inter_freq_hoo_out;
		$handover_in[] = $row->handover_in;
		$iratho_l2c[] = $row->iratho_l2c;
		$iratho_l2w[] = $row->iratho_l2w;
		$iratho_l2g[] = $row->iratho_l2g;
		$iratho_l2t[] = $row->iratho_l2t;
		$retention_4g[] = $row->retention_4g;
		$service_drop[] = $row->service_drop;
		$cell_downlink_avg_thp[] = $row->cell_downlink_avg_thp;
		$cell_uplink_avg_thp[] = $row->cell_uplink_avg_thp;
		$rb_cell_downlink_avg_thp[] = $row->rb_cell_downlink_avg_thp;
		$rb_cell_uplink_avg_thp[] = $row->rb_cell_uplink_avg_thp;
		$downlink_traffic_volume[] = $row->downlink_traffic_volume;
		$uplink_traffic_volume[] = $row->uplink_traffic_volume;
		$average_user_volume[] = $row->average_user_volume;
		$rb_utilization_dl[] = $row->rb_utilization_dl;
		$rrc_signaling_ul[] = $row->rrc_signaling_ul;
		$rb_preschedule_rb_urul[] = $row->rb_preschedule_rb_urul;
		$interference[] = $row->interference;
		$cell_downlink_avg_thp_2600[] = $row->cell_downlink_avg_thp_2600;
		 $cell_downlink_avg_thp_1800[] = $row->cell_downlink_avg_thp_1800;
		 $cell_downlink_avg_thp_700[] = $row->cell_downlink_avg_thp_700;
		 $cell_uplink_avg_thp_2600[] = $row->cell_uplink_avg_thp_2600;
		 $cell_uplink_avg_thp_1800[] = $row->cell_uplink_avg_thp_1800;
		 $cell_uplink_avg_thp_700[] = $row->cell_uplink_avg_thp_700;
		 $average_user_volume_2600[] = $row->average_user_volume_2600;
		 $average_user_volume_1800[] = $row->average_user_volume_1800;
		 $average_user_volume_700[] = $row->average_user_volume_700;
		$average_user_volume_2cc[] = $row->average_user_volume_2cc;
		$average_user_volume_3cc[] = $row->average_user_volume_3cc;
		$cell_downlink_avg_thp_ca[] = $row->cell_downlink_avg_thp_ca;
		$weighted_thp[] = $row->weighted_thp;
		$interference_2600[] = $row->interference_2600;
		$interference_1800[] = $row->interference_1800;
		$interference_700[] = $row->interference_700;
		$csfb_prep[] = $row->csfb_prep;
		$data_volume[] = $row->data_volume;
		$data_volume_1800[] = $row->data_volume_1800;
		$data_volume_2600[] = $row->data_volume_2600;
		$data_volume_700[] = $row->data_volume_700;
		}

		#echo $node;
				 
		array_walk($date, create_function('&$str', '$str = "\"$str\"";')); //put quotes in datetime
		//echo "RNC= ".$rnc.", cellname= ".$cellname.", cellid= ".$cellid."<br><br>";
		//echo join($datetime, ',');
		//echo "<br><br>";
		//echo join($rrc_service, ',');
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
		$downlink_traffic_volume = array_map("tonull", $downlink_traffic_volume);
		$uplink_traffic_volume = array_map("tonull", $uplink_traffic_volume);
		$average_user_volume = array_map("tonull", $average_user_volume);
		$availability = array_map("tonull", $availability);
		$availability = array_map("tonull3", $availability);
		$interference = array_map("tonull2", $interference);
		$cell_downlink_avg_thp_2600 = array_map("tonull2", $cell_downlink_avg_thp_2600);
		$cell_uplink_avg_thp_2600 = array_map("tonull2", $cell_uplink_avg_thp_2600);
		$average_user_volume_2600 = array_map("tonull2", $average_user_volume_2600);
		$cell_downlink_avg_thp_1800 = array_map("tonull2", $cell_downlink_avg_thp_1800);
		$cell_uplink_avg_thp_1800 = array_map("tonull2", $cell_uplink_avg_thp_1800);
		$average_user_volume_1800 = array_map("tonull2", $average_user_volume_1800);
		$cell_downlink_avg_thp_700 = array_map("tonull2", $cell_downlink_avg_thp_700);
		$cell_uplink_avg_thp_700 = array_map("tonull2", $cell_uplink_avg_thp_700);
		$average_user_volume_700 = array_map("tonull2", $average_user_volume_700);
		$average_user_volume_2cc = array_map("tonull", $average_user_volume_2cc);
		$average_user_volume_3cc = array_map("tonull", $average_user_volume_3cc);
		$cell_downlink_avg_thp_ca = array_map("tonull2", $cell_downlink_avg_thp_ca);
		$weighted_thp = array_map("tonull", $weighted_thp);
		$interference_2600 = array_map("tonull2", $interference_2600);
		$interference_1800 = array_map("tonull2", $interference_1800);
		$interference_700 = array_map("tonull2", $interference_700);
		$csfb_prep = array_map("tonull2", $csfb_prep);
		$csfb_prep = array_map("tonull3", $csfb_prep);
		$csfb = array_map("tonull3", $csfb);
		$data_volume = array_map("tonull", $data_volume);
		$data_volume_1800 = array_map("tonull", $data_volume_1800);
		$data_volume_2600 = array_map("tonull", $data_volume_2600);
		$data_volume_700 = array_map("tonull", $data_volume_700);
		?>
		
<script>
///	for (i = 0; i < cars.length; i++) { 
///    text += cars[i] + "<br>";
///}
var node = "<?php echo $node; ?>";
//alert(node);
var date = <?php echo json_encode($date); ?>;

var reportnetype = <?php echo '"'.$reportnetype.'"'; ?>;
// var reportnetype = document.getElementById('wcreportnetype').value;

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
	
////////////////////////////////////////////////////Accessibility//////////////////////////////////////////////////////////////////	
$(function () {
    var chart;
	var estado_acc = true;
	var estado_csfb = true;
	var estado_drop = true;
	var estado_retention = true;
	var estado_traffic = true;
	var estado_users = true;
	var estado_dlthp = true;
	var estado_ulthp = true;
	var estado_utilization = true;
	var estado_handover = true;
	var estado_availability = true;
	var estado_interference = true;
	var toogle_availability = false;
    $(document).ready(function() {
		var acc = new Highcharts.Chart({
		chart: {
				renderTo: 'acc',
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
						if(estado_acc != false){
						if (e.shiftKey == 1) {
						acc.xAxis[0].options.plotLines[1].color = "red";
						acc.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						csfb.xAxis[0].options.plotLines[1].color = "red";
						csfb.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						drop.xAxis[0].options.plotLines[1].color = "red";
						drop.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						retention.xAxis[0].options.plotLines[1].color = "red";
						retention.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						traffic.xAxis[0].options.plotLines[1].color = "red";
						traffic.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						users.xAxis[0].options.plotLines[1].color = "red";
						users.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						dlthp.xAxis[0].options.plotLines[1].color = "red";
						dlthp.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						ulthp.xAxis[0].options.plotLines[1].color = "red";
						ulthp.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						utilization.xAxis[0].options.plotLines[1].color = "red";
						utilization.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						handover.xAxis[0].options.plotLines[1].color = "red";
						handover.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						availability.xAxis[0].options.plotLines[1].color = "red";
						availability.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						interference.xAxis[0].options.plotLines[1].color = "red";
						interference.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;					
						acc.xAxis[0].update();
						csfb.xAxis[0].update();
						drop.xAxis[0].update();
						retention.xAxis[0].update();
						traffic.xAxis[0].update();
						users.xAxis[0].update();
						dlthp.xAxis[0].update();
						ulthp.xAxis[0].update();
						utilization.xAxis[0].update();
						handover.xAxis[0].update();
						availability.xAxis[0].update();
						interference.xAxis[0].update();
						}
						else{
						acc.xAxis[0].options.plotLines[0].color = "red";
						acc.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						csfb.xAxis[0].options.plotLines[0].color = "red";
						csfb.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						drop.xAxis[0].options.plotLines[0].color = "red";
						drop.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						retention.xAxis[0].options.plotLines[0].color = "red";
						retention.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						traffic.xAxis[0].options.plotLines[0].color = "red";
						traffic.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						users.xAxis[0].options.plotLines[0].color = "red";
						users.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						dlthp.xAxis[0].options.plotLines[0].color = "red";
						dlthp.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						ulthp.xAxis[0].options.plotLines[0].color = "red";
						ulthp.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						utilization.xAxis[0].options.plotLines[0].color = "red";
						utilization.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						handover.xAxis[0].options.plotLines[0].color = "red";
						handover.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						availability.xAxis[0].options.plotLines[0].color = "red";
						availability.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						interference.xAxis[0].options.plotLines[0].color = "red";
						interference.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;					
						acc.xAxis[0].update();
						csfb.xAxis[0].update();
						drop.xAxis[0].update();
						retention.xAxis[0].update();
						traffic.xAxis[0].update();
						users.xAxis[0].update();
						dlthp.xAxis[0].update();
						ulthp.xAxis[0].update();
						utilization.xAxis[0].update();
						handover.xAxis[0].update();
						availability.xAxis[0].update();
						interference.xAxis[0].update();
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
						text: '<b>Acessibility</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php
						if($reportagg == "monthly"){
						foreach($node_daily_report as $row){
							echo "'".$row->year ." - ".$row->date ."',";
						}
						}else{
							echo join($date, ',');
						}	
						?>],
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
							}]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
					
				//if (reportnetype == "cell")
				//{
					plotOptions: {
						series: {
							cursor: 'pointer',
							point: {
								events: {
									click: function () {
										var date = this.category;
										var date_str = String(date);
										var fields = date_str.split(" - ");
										var year = fields[0];
										var week = fields[1];
										var year_number = parseInt(year);
										var week_number = parseInt(week);
										alert('Ano: ' + year_number + ', Semana: ' + week_number);
									}
								}
							},
							events: {
								click: function( event ) {
								// Log to console
								var kpi = this.name;
								alert(kpi);
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
									if(this.name != "Call Setup SR" && reportnetype != "cell"){
									document.wcform.submit();
									} 
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
						csfb.xAxis[0].options.plotLines[0].color = "transparent";
						drop.xAxis[0].options.plotLines[0].color = "transparent";
						retention.xAxis[0].options.plotLines[0].color = "transparent";
						traffic.xAxis[0].options.plotLines[0].color = "transparent";
						users.xAxis[0].options.plotLines[0].color = "transparent";
						dlthp.xAxis[0].options.plotLines[0].color = "transparent";
						ulthp.xAxis[0].options.plotLines[0].color = "transparent";
						utilization.xAxis[0].options.plotLines[0].color = "transparent";
						handover.xAxis[0].options.plotLines[0].color = "transparent";
						availability.xAxis[0].options.plotLines[0].color = "transparent";
						interference.xAxis[0].options.plotLines[0].color = "transparent";
						
						acc.xAxis[0].options.plotLines[1].color = "transparent";
						csfb.xAxis[0].options.plotLines[1].color = "transparent";
						drop.xAxis[0].options.plotLines[1].color = "transparent";
						retention.xAxis[0].options.plotLines[1].color = "transparent";
						traffic.xAxis[0].options.plotLines[1].color = "transparent";
						users.xAxis[0].options.plotLines[1].color = "transparent";
						dlthp.xAxis[0].options.plotLines[1].color = "transparent";
						ulthp.xAxis[0].options.plotLines[1].color = "transparent";
						utilization.xAxis[0].options.plotLines[1].color = "transparent";
						handover.xAxis[0].options.plotLines[1].color = "transparent";
						availability.xAxis[0].options.plotLines[1].color = "transparent";
						interference.xAxis[0].options.plotLines[1].color = "transparent";
						
						acc.xAxis[0].update();
						csfb.xAxis[0].update();
						drop.xAxis[0].update();
						retention.xAxis[0].update();
						traffic.xAxis[0].update();
						users.xAxis[0].update();
						dlthp.xAxis[0].update();
						ulthp.xAxis[0].update();
						utilization.xAxis[0].update();
						handover.xAxis[0].update();
						availability.xAxis[0].update();
						interference.xAxis[0].update();					
						}else
						if(this.visible == false){	
						estado_acc = true;	
						acc.xAxis[0].options.plotLines[0].color = "red";
						csfb.xAxis[0].options.plotLines[0].color = "red";
						drop.xAxis[0].options.plotLines[0].color = "red";
						retention.xAxis[0].options.plotLines[0].color = "red";
						traffic.xAxis[0].options.plotLines[0].color = "red";
						users.xAxis[0].options.plotLines[0].color = "red";
						dlthp.xAxis[0].options.plotLines[0].color = "red";
						ulthp.xAxis[0].options.plotLines[0].color = "red";
						utilization.xAxis[0].options.plotLines[0].color = "red";
						handover.xAxis[0].options.plotLines[0].color = "red";
						availability.xAxis[0].options.plotLines[0].color = "red";
						interference.xAxis[0].options.plotLines[0].color = "red";
						
						acc.xAxis[0].options.plotLines[1].color = "red";
						csfb.xAxis[0].options.plotLines[1].color = "red";
						drop.xAxis[0].options.plotLines[1].color = "red";
						retention.xAxis[0].options.plotLines[1].color = "red";
						traffic.xAxis[0].options.plotLines[1].color = "red";
						users.xAxis[0].options.plotLines[1].color = "red";
						dlthp.xAxis[0].options.plotLines[1].color = "red";
						ulthp.xAxis[0].options.plotLines[1].color = "red";
						utilization.xAxis[0].options.plotLines[1].color = "red";
						handover.xAxis[0].options.plotLines[1].color = "red";
						availability.xAxis[0].options.plotLines[1].color = "red";
						interference.xAxis[0].options.plotLines[1].color = "red";
						
						acc.xAxis[0].update();
						csfb.xAxis[0].update();
						drop.xAxis[0].update();
						retention.xAxis[0].update();
						traffic.xAxis[0].update();
						users.xAxis[0].update();
						dlthp.xAxis[0].update();
						ulthp.xAxis[0].update();
						utilization.xAxis[0].update();
						handover.xAxis[0].update();
						availability.xAxis[0].update();
						interference.xAxis[0].update();	
						}	
						}
				}
							}
						}
					},

					// plotOptions: {
						// series: {
							// cursor: 'pointer',
								// events: {
								// click: function( event ) {
								// //alert('oi');	
								// // Log to console
								// var regions = ["CO", "PRSC", "NE", "BASE","ES","MG"];
								// var kpi = this.name;
								// kpi = kpi.toLowerCase();
								// kpi = kpi.trim();
								// var strkpi = kpi.replace(/(^\s+|\s+$)/g, '');
								// //alert(node.substring(0, 3));
								// //alert(strkpi);
								// if ($.inArray(node, regions) > -1 && strkpi !== 'call setup sr') {
									// document.getElementById('node').value = node;
									// document.getElementById('date').value = date[event.point.x];
									// document.getElementById('kpi').value = this.name;
									// document.wcform.submit();
								// } else {
									// alert("NPSmart current release does not support.")
								// }

								// }
							// }
						// }
					// },
			
					series: [{
					name: 'Marker',
					color:'red'
					},{
						name: 'RRC Service',
						data: [<?php echo join($rrc_service, ',') ?>]
					},
					{
						name: 'RRC Signaling',
						data: [<?php echo join($rrc_signaling, ',') ?>]
					},
					{
			            name: 'S1 Signaling',
						data: [<?php echo join($s1sig, ',') ?>]
			        },
					{
			            name: 'E-Rab Acc',
						data: [<?php echo join($e_rab, ',') ?>]
			        },
					{
			            name: 'Call Setup SR',
						data: [<?php echo join($call_setup, ',') ?>]
			         }
					 //,
					// {
			            // name: 'CSFB SR',
						// data: [<?php echo join($csfb, ',') ?>]
			        // }
					
											
					]							
		});

				
//////////////////////////////////////////////////////////////////////////////////////////CSFB//////////////////////////////////////////////////////////////////////////////////////////////////////////////

		var csfb = new Highcharts.Chart({
				chart: {
						renderTo: 'csfb',
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
						if(estado_csfb != false){
						if (e.shiftKey == 1) {
						csfb.xAxis[0].options.plotLines[1].color = "red";
						csfb.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						csfb.xAxis[0].update();						
						}else{
						csfb.xAxis[0].options.plotLines[0].color = "red";
						csfb.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						csfb.xAxis[0].update();						
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
								text: '<b>CSFB</b>',// - ' + node,
							//	 floating: true,
								x: -20, //center
								//y: 0
							},
							subtitle: {
								text: '<i>' + node + '</i>',
								x: -20
							},
							xAxis: {
								categories: [<?php
						if($reportagg == "monthly"){
						foreach($node_daily_report as $row){
							echo "'".$row->year ." - ".$row->date ."',";
						}
						}else{
							echo join($date, ',');
						}	
						?>],
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
							}]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
									if(reportnetype != "cell"){
									document.wcform.submit();
									} 
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
						estado_csfb = false;		
						csfb.xAxis[0].options.plotLines[0].color = "transparent";
						csfb.xAxis[0].options.plotLines[1].color = "transparent";
						csfb.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_csfb = true;	
						csfb.xAxis[0].options.plotLines[0].color = "red";
						csfb.xAxis[0].options.plotLines[1].color = "red";
						csfb.xAxis[0].update();
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
								name: 'CSFB SR',
								data: [<?php echo join($csfb, ',') ?>]
							},
							{
								name: 'CSFB PREP',
								data: [<?php echo join($csfb_prep, ',') ?>]
							}]
							
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
						if(estado_drop != false){
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
						categories: [<?php
						if($reportagg == "monthly"){
						foreach($node_daily_report as $row){
							echo "'".$row->year ." - ".$row->date ."',";
						}
						}else{
							echo join($date, ',');
						}	
						?>],
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
							}]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
									if(reportnetype != "cell"){
									document.wcform.submit();
									} 
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
						estado_drop = false;		
						drop.xAxis[0].options.plotLines[0].color = "transparent";
						drop.xAxis[0].options.plotLines[1].color = "transparent";
						drop.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_drop = true;	
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
						name: 'Service Retainability',
						data: [<?php echo join($service_drop, ',') ?>]
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
						if(estado_retention != false){
						
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
								text: '<b>4G Retention</b>',// - ' + node,
							//	 floating: true,
								x: -20, //center
								//y: 0
							},
							subtitle: {
								text: '<i>' + node + '</i>',
								x: -20
							},
							xAxis: {
								categories: [<?php
						if($reportagg == "monthly"){
						foreach($node_daily_report as $row){
							echo "'".$row->year ." - ".$row->date ."',";
						}
						}else{
							echo join($date, ',');
						}	
						?>],
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
							}]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
									if(reportnetype != "cell"){
									document.wcform.submit();
									}
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
						estado_retention = false;		
						retention.xAxis[0].options.plotLines[0].color = "transparent";
						retention.xAxis[0].options.plotLines[1].color = "transparent";
						retention.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_retention = true;	
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
								name: '4G Retention',
								data: [<?php echo join($retention_4g, ',') ?>]
							}													
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
								categories: [<?php
						if($reportagg == "monthly"){
						foreach($node_daily_report as $row){
							echo "'".$row->year ." - ".$row->date ."',";
						}
						}else{
							echo join($date, ',');
						}	
						?>],
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
							}]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
							},
					yAxis: [{ // Primary yAxis
						//max: 100,
						labels: {
							//format: '{value}',
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
								name: 'Data volume',
								data: [<?php echo join($data_volume, ',') ?>]
							},{
								name: 'Data volume 2600',
								data: [<?php echo join($data_volume_2600, ',') ?>]
							},{
								name: 'Data volume 1800',
								data: [<?php echo join($data_volume_1800, ',') ?>]
							},{
								name: 'Data volume 700',
								data: [<?php echo join($data_volume_700, ',') ?>]
							}]							
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
								categories: [<?php
						if($reportagg == "monthly"){
						foreach($node_daily_report as $row){
							echo "'".$row->year ." - ".$row->date ."',";
						}
						}else{
							echo join($date, ',');
						}	
						?>],
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
							}]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
							},
							yAxis: {
								//max: 100,
								min: 0,
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
								name: 'Users',
								data: [<?php echo join($average_user_volume, ',') ?>]
							},
							{
								name: 'Users 2600',
								data: [<?php echo join($average_user_volume_2600, ',') ?>]
							},
							{
								name: 'Users 1800',
								data: [<?php echo join($average_user_volume_1800, ',') ?>]
							},
							{
								name: 'Users 700',
								data: [<?php echo join($average_user_volume_700, ',') ?>]
							},
							{
								name: 'Users 2CC',
								data: [<?php echo join($average_user_volume_2cc, ',') ?>]
							},
							{
								name: 'Users 3CC',
								data: [<?php echo join($average_user_volume_3cc, ',') ?>]
							}
							]							
				});				

//////////////////////////////////////////////////////////////////////////////////////////THROUGHPUT DL//////////////////////////////////////////////////////////////////////////////////////////////////////////////

		var dlthp = new Highcharts.Chart({
				chart: {
						renderTo: 'dlthp',
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
						if(estado_dlthp != false){
						
						if (e.shiftKey == 1) {						
						dlthp.xAxis[0].options.plotLines[1].color = "red";
						dlthp.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						dlthp.xAxis[0].update();						
						}else{	
						dlthp.xAxis[0].options.plotLines[0].color = "red";
						dlthp.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						dlthp.xAxis[0].update();						
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
								text: '<b>Downlink Throughput</b>',// - ' + node,
							//	 floating: true,
								x: -20, //center
								//y: 0
							},
							subtitle: {
								text: '<i>' + node + '</i>',
								x: -20
							},
							xAxis: {
								categories: [<?php
						if($reportagg == "monthly"){
						foreach($node_daily_report as $row){
							echo "'".$row->year ." - ".$row->date ."',";
						}
						}else{
							echo join($date, ',');
						}	
						?>],
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
							}]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
							},
							yAxis: {
						//max: 100,
						///min: 0,
						title: {
							text: 'Mbps'
						},
						//{  },
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
									if((this.name == "DL THP" || this.name == "DL THP CA") && reportnetype != "cell" ){
									document.wcform.submit();
									} 
									
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
						estado_dlthp = false;		
						dlthp.xAxis[0].options.plotLines[0].color = "transparent";
						dlthp.xAxis[0].options.plotLines[1].color = "transparent";
						dlthp.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_dlthp = true;	
						dlthp.xAxis[0].options.plotLines[0].color = "red";
						dlthp.xAxis[0].options.plotLines[1].color = "red";
						dlthp.xAxis[0].update();
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
						name: 'DL THP',
								data: [<?php echo join($cell_downlink_avg_thp, ',') ?>]
						///data: JSON.parse("[" + acc_rrc + "]")
					}
					,{
			           name: 'DL THP 2600',
						//color: 'rgba(0, 255, 0, 0.8)',

						data: [<?php echo join($cell_downlink_avg_thp_2600, ',') ?>]
			        },{
			           name: 'DL THP 1800',
						//color: 'rgba(0, 255, 0, 0.8)',

						data: [<?php echo join($cell_downlink_avg_thp_1800, ',') ?>]
			        },{
			           name: 'DL THP 700',
						//color: 'rgba(0, 255, 0, 0.8)',

						data: [<?php echo join($cell_downlink_avg_thp_700, ',') ?>]
			        },{
			           name: 'DL THP CA',
						//color: 'rgba(0, 255, 0, 0.8)',

						data: [<?php echo join($cell_downlink_avg_thp_ca, ',') ?>]
			        },{
			           name: 'DL Weighted-THP',
						//color: 'rgba(0, 255, 0, 0.8)',

						data: [<?php echo join($weighted_thp, ',') ?>]
			        }
					]							
				});
//////////////////////////////////////////////////////////////////////////////////////////THROUGHPUT UL//////////////////////////////////////////////////////////////////////////////////////////////////////////////

		var ulthp = new Highcharts.Chart({
				chart: {
						renderTo: 'ulthp',
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
						if(estado_ulthp != false){
						
						if (e.shiftKey == 1) {						
						ulthp.xAxis[0].options.plotLines[1].color = "red";
						ulthp.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						ulthp.xAxis[0].update();
						}else{	
						ulthp.xAxis[0].options.plotLines[0].color = "red";
						ulthp.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						ulthp.xAxis[0].update();
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
								text: '<b>Uplink Throughput</b>',// - ' + node,
							//	 floating: true,
								x: -20, //center
								//y: 0
							},
							subtitle: {
								text: '<i>' + node + '</i>',
								x: -20
							},
							xAxis: {
								categories: [<?php
						if($reportagg == "monthly"){
						foreach($node_daily_report as $row){
							echo "'".$row->year ." - ".$row->date ."',";
						}
						}else{
							echo join($date, ',');
						}	
						?>],
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
							}]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
							},
							yAxis: {
						//max: 100,
						///min: 0,
						title: {
							text: 'Mbps'
						},
						//{  },
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
									if(this.name == "UL THP" && reportnetype != "cell" ){
									document.wcform.submit();
									}
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
						estado_ulthp = false;		
						ulthp.xAxis[0].options.plotLines[0].color = "transparent";
						ulthp.xAxis[0].options.plotLines[1].color = "transparent";
						ulthp.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_ulthp = true;	
						ulthp.xAxis[0].options.plotLines[0].color = "red";
						ulthp.xAxis[0].options.plotLines[1].color = "red";
						ulthp.xAxis[0].update();
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
						name: 'UL THP',
								data: [<?php echo join($cell_uplink_avg_thp, ',') ?>]
						///data: JSON.parse("[" + acc_rrc + "]")
					}
					,{
			           name: 'UL THP 2600',
						//color: 'rgba(0, 255, 0, 0.8)',

						data: [<?php echo join($cell_uplink_avg_thp_2600, ',') ?>]
			        },{
			           name: 'UL THP 1800',
						//color: 'rgba(0, 255, 0, 0.8)',

						data: [<?php echo join($cell_uplink_avg_thp_1800, ',') ?>]
			        },{
			           name: 'UL THP 700',
						//color: 'rgba(0, 255, 0, 0.8)',

						data: [<?php echo join($cell_uplink_avg_thp_700, ',') ?>]
			        }
					]							
				});
				
//////////////////////////////////////////////////////////////////////////////////////////Utilization//////////////////////////////////////////////////////////////////////////////////////////////////////////////

		var utilization = new Highcharts.Chart({
				chart: {
						renderTo: 'utilization',
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
						if(estado_utilization != false){
						if (e.shiftKey == 1) {
						utilization.xAxis[0].options.plotLines[1].color = "red";
						utilization.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						utilization.xAxis[0].update();
						}else{
						utilization.xAxis[0].options.plotLines[0].color = "red";
						utilization.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						utilization.xAxis[0].update();
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
								text: '<b>Utilization</b>',// - ' + node,
							//	 floating: true,
								x: -20, //center
								//y: 0
							},
							subtitle: {
								text: '<i>' + node + '</i>',
								x: -20
							},
							xAxis: {
								categories: [<?php
						if($reportagg == "monthly"){
						foreach($node_daily_report as $row){
							echo "'".$row->year ." - ".$row->date ."',";
						}
						}else{
							echo join($date, ',');
						}	
						?>],
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
							}]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
							},
							yAxis: {
								//max: 100,
								min: 0,
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
						estado_utilization = false;		
						utilization.xAxis[0].options.plotLines[0].color = "transparent";
						utilization.xAxis[0].options.plotLines[1].color = "transparent";
						utilization.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_utilization = true;	
						utilization.xAxis[0].options.plotLines[0].color = "red";
						utilization.xAxis[0].options.plotLines[1].color = "red";
						utilization.xAxis[0].update();
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
								name: 'RB Utilization DL',
								data: [<?php echo join($rb_utilization_dl, ',') ?>]
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
						if(estado_handover != false){
						
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
								categories: [<?php
						if($reportagg == "monthly"){
						foreach($node_daily_report as $row){
							echo "'".$row->year ." - ".$row->date ."',";
						}
						}else{
							echo join($date, ',');
						}	
						?>],
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
							}]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
									if(reportnetype != "cell" ){
									document.wcform.submit();
									}
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
						estado_handover = false;		
						handover.xAxis[0].options.plotLines[0].color = "transparent";
						handover.xAxis[0].options.plotLines[1].color = "transparent";
						handover.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_handover = true;	
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
								name: 'Intra Freq Out',
								data: [<?php echo join($intra_freq_hoo_out, ',') ?>]
							},
							{
								name: 'Inter Freq Out',
								data: [<?php echo join($inter_freq_hoo_out, ',') ?>]
							},
							{
								name: 'HO In',
								data: [<?php echo join($handover_in, ',') ?>]
							},
							{
								name: 'IRAT LTE to WCDMA',
								data: [<?php echo join($iratho_l2w, ',') ?>]
							},
							{
								name: 'IRAT LTE to GSM',
								data: [<?php echo join($iratho_l2g, ',') ?>]
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
						if(estado_availability != false){
							
						if (e.shiftKey == 1) {	
						availability.xAxis[0].options.plotLines[0].color = "red";
						availability.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
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
								categories: [<?php
						if($reportagg == "monthly"){
						foreach($node_daily_report as $row){
							echo "'".$row->year ." - ".$row->date ."',";
						}
						}else{
							echo join($date, ',');
						}	
						?>],
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
							}]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
									if(reportnetype != "cell" ){
									document.wcform.submit();
									}
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
						estado_availability = false;		
						availability.xAxis[0].options.plotLines[0].color = "transparent";
						availability.xAxis[0].options.plotLines[1].color = "transparent";
						availability.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_availability = true;	
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
				
//////////////////////////////////////////////////////////////////////INTERFERENCE//////////////////////////

		var interference = new Highcharts.Chart({
		chart: {
				renderTo: 'interference',
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
						if(estado_interference != false){
						
						if (e.shiftKey == 1) {						
						interference.xAxis[0].options.plotLines[0].color = "red";
						interference.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						interference.xAxis[0].update();						
						}else{	
						interference.xAxis[0].options.plotLines[0].color = "red";
						interference.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						interference.xAxis[0].update();
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
						text: '<b>Interference</b>',// - ' + node,
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php
						if($reportagg == "monthly"){
						foreach($node_daily_report as $row){
							echo "'".$row->year ." - ".$row->date ."',";
						}
						}else{
							echo join($date, ',');
						}	
						?>],
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
							}]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
								// alert(node.substring(0, 3));
								// if (node.substring(0, 3) == 'RNC' && reportagg == 'weekly') {
									document.getElementById('wcreportnename').value = node;
									document.getElementById('wcreportnetype').value = reportnetype;
									document.getElementById('wctimeagg').value = reportagg;
									document.getElementById('wcreportdate').value = date[event.point.x];
									document.getElementById('wckpi').value = this.name;
									if(reportnetype != "cell" ){
									document.wcform.submit();
									}
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
						estado_interference = false;		
						interference.xAxis[0].options.plotLines[0].color = "transparent";
						interference.xAxis[0].options.plotLines[1].color = "transparent";
						interference.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado_interference = true;	
						interference.xAxis[0].options.plotLines[0].color = "red";
						interference.xAxis[0].options.plotLines[1].color = "red";
						interference.xAxis[0].update();
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
						name: 'Interference',
						data: [<?php echo join($interference, ',') ?>]
					},{
						name: 'Interference 2600',
						data: [<?php echo join($interference_2600, ',') ?>]
					},{
						name: 'Interference 1800',
						data: [<?php echo join($interference_1800, ',') ?>]
					},{
						name: 'Interference 700',
						data: [<?php echo join($interference_700, ',') ?>]
					}
											
					]							
		});
		
var kpi = [];
var scale = [];

kpi[0] = "acc";
kpi[1] = "csfb";
kpi[2] = "drop";
kpi[3] = "retention";
kpi[4] = "traffic";
kpi[5] = "users";
kpi[6] = "dlthp";
kpi[7] = "ulthp";
kpi[8] = "utilization";
kpi[9] = "handover";
kpi[10] = "availability";
kpi[11] = "interference";

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
    Highcharts.exportCharts([acc,csfb,drop,retention,traffic,users,dlthp,ulthp,utilization,handover,availability,interference]);
});		
  });	


  });
  


    $('.chart_content').bind('dblclick', function () {
        var $this = $(this);
        $this.toggleClass('modal');
        $('.chart1', $this).highcharts().reflow();
    });	
	
</script>				
				