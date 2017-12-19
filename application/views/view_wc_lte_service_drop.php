	<?php 
		foreach($result as $row){
			// $node = $row->region;
			#$cellname =  $row->cellname;
			#$cellid = $row->cellid;
			$datetime[] = $row->datetime;
			$service_drop[] = $row->service_drop;
			$service_drop_fails[] = $row->service_drop_fails;
			$l_e_rab_abnormrel[] = $row->l_e_rab_abnormrel;
			$l_e_rab_abnormrel_cong[] = $row->l_e_rab_abnormrel_cong;
			$l_e_rab_abnormrel_enbtot[] = $row->l_e_rab_abnormrel_enbtot;
			$l_e_rab_abnormrel_hofailure[] = $row->l_e_rab_abnormrel_hofailure;
			$l_e_rab_abnormrel_hoout[] = $row->l_e_rab_abnormrel_hoout;
			$l_e_rab_abnormrel_mme[] = $row->l_e_rab_abnormrel_mme;
			$l_e_rab_abnormrel_radio[] = $row->l_e_rab_abnormrel_radio;
			$l_e_rab_abnormrel_tnl[] = $row->l_e_rab_abnormrel_tnl;
		}
		#echo $cellid;
		#echo $cellname;
		#echo $node;
		array_walk($datetime, create_function('&$str', '$str = "\"$str\"";')); //put quotes in datetime
		//echo "RNC= ".$rnc.", cellname= ".$cellname.", cellid= ".$cellid."<br><br>";
		//echo join($datetime, ',');
		//echo "<br><br>";
		//echo join($eff_cs, ',');
		#echo '<span size="4" color="#E0E0E3">'.$ne.'</span>';
		function tonull2($n)
		{
			if($n == ''){
				$n = 'null';
				#return $n;				
			}
				return $n;
		}
		$l_e_rab_abnormrel = array_map("tonull2", $l_e_rab_abnormrel);
		$l_e_rab_abnormrel_cong = array_map("tonull2", $l_e_rab_abnormrel_cong);
		$l_e_rab_abnormrel_enbtot = array_map("tonull2", $l_e_rab_abnormrel_enbtot);
		$l_e_rab_abnormrel_hofailure = array_map("tonull2", $l_e_rab_abnormrel_hofailure);
		$l_e_rab_abnormrel_hoout = array_map("tonull2", $l_e_rab_abnormrel_hoout);
		$l_e_rab_abnormrel_mme = array_map("tonull2", $l_e_rab_abnormrel_mme);
		$l_e_rab_abnormrel_radio = array_map("tonull2", $l_e_rab_abnormrel_radio);
		$l_e_rab_abnormrel_tnl = array_map("tonull2", $l_e_rab_abnormrel_tnl);
		?>
		
<script>
///	for (i = 0; i < cars.length; i++) { 
///    text += cars[i] + "<br>";
///}
var node = "<?php echo $ne; ?>";
var datetime = <?php echo json_encode($datetime); ?>;	

var datetime = JSON.parse("[" + datetime + "]");
///alert(datetime[0]);	
$(function () {
    var chart;
    $(document).ready(function() {
	
///////////////////////////////////////////////////////////rrc/////////////////////////////////////////////	
		var service_drop = new Highcharts.Chart({
		chart: {
				renderTo: 'wcchart1',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'x'//,
				//borderWidth: 2
						///type: 'line',
						///height: 195		
				},
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: 'Service Retainability',
						x: -20 //center
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($datetime, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},

					yAxis: [{ // Primary yAxis
						labels: {
							format: '{value}%',
					///		style: {
					///			color: Highcharts.getOptions().colors[1]
					///		}
						},
						title: {
						///	text: '',
					///		style: {
					///			color: Highcharts.getOptions().colors[1]
					///		}
						},
						
						plotLines: [{
								value: 0,
								width: 1,
								color: '#808080'
							}]
					},{ // Secondary yAxis
						title: {
							text: 'Retainability Fails',
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
					
					// plotOptions: {
						// series: {
							// cursor: 'pointer',
							// events: {
								// click: function(e) {
								// // Log to console
									// alert(this.name + ' clicked\n' +
									  // 'Alt: ' + event.altKey + '\n' +
									  // 'Control: ' + event.ctrlKey + '\n'+
									  // 'Shift: ' + event.shifkKey + '\n'+
									  // 'Datetime: ' + datetime[event.point.x]);
								// }
							// }
						// }
					// },					
					series: [{
					///	showInLegend: false,
						name: 'Service Retainability',
						data: [<?php echo join($service_drop, ',') ?>]///[7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
						///data: JSON.parse("[" + acc_rrc + "]")
					},{
			            name: 'Retainability Fails',
						type: 'column',
						color: 'rgba(0, 255, 0, 0.8)',
						///borderColor:'#C80000',
						///borderColor:'rgba(0, 255, 0)',

						yAxis: 1,
			            ///data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
						data: [<?php echo join($service_drop_fails, ',') ?>]
			        }
					]							
		});
		
	///////////////////////////////////////////////////////////FAILS DROP/////////////////////////////////////////////		
	
		var fails_drop = new Highcharts.Chart({
		chart: {
				renderTo: 'wcchart2',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				//borderWidth: 2		
						type: 'column'//,
						///height: 195		
				},
					credits: {
					   enabled: false
					},		
					exporting: { 
					enabled: true 
					},
					title: {
						text: 'Drop Fails',
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + node + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($datetime, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},
					yAxis: {
						///max: 100,
						min: 0,
						title: {
							//text: 'Temperature (°C)'
						},
						//{  },
						plotLines: [{
							value: 0,
							width: 1,
							color: '#808080'
						}]
						
					},
					tooltip: {
					///	valueSuffix: '%'
					shared: true
					},
					plotOptions: {
								column: {
									stacking: 'normal',
									dataLabels: {
										enabled: false,
										color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
										style: {
											textShadow: '0 0 3px black'
										}
									}
								}
							},
					legend: {
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
					},
								
					series: [{
						name: 'Abnormal Release',
						data: [<?php echo join($l_e_rab_abnormrel, ',') ?>]
					},
					{
			            name: 'Congestion',
						data: [<?php echo join($l_e_rab_abnormrel_cong, ',') ?>]
			        },
					{
			            name: 'eNodeB Total',
						data: [<?php echo join($l_e_rab_abnormrel_enbtot, ',') ?>]
			        },
					{
			            name: 'Handover Failure',
						data: [<?php echo join($l_e_rab_abnormrel_hofailure, ',') ?>]
			        },
					{
			            name: 'Handover Out',
						data: [<?php echo join($l_e_rab_abnormrel_hoout, ',') ?>]
			        },
					
					{
			            name: 'MME',
						data: [<?php echo join($l_e_rab_abnormrel_mme, ',') ?>]
			        },
					
					{
			            name: 'Radio',
						data: [<?php echo join($l_e_rab_abnormrel_radio, ',') ?>]
			        },
					
					{
			            name: 'TNL',
						data: [<?php echo join($l_e_rab_abnormrel_tnl, ',') ?>]
			        }
					]							
		});

  });
    // $('.chart_content').bind('dblclick', function () {
        // var $this = $(this);
        // $this.toggleClass('modal');
        // $('.chart1', $this).highcharts().reflow();
    // });	
	
   });
</script>