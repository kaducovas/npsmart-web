	<?php 
		foreach($result as $row){
		$date[] = $row->date;
		$node = $row->node;
		$qda[] = $row->qda;
		$qda_s1sig[] = $row->qda_s1sig;
		$qda_e_rab[] = $row->qda_e_rab;
		$qda_rrc[] = $row->qda_rrc;
		$qda_s1sig_fails[] = $row->qda_s1sig_fails;
		$qda_e_rab_fails[] = $row->qda_e_rab_fails;
		$qda_rrc_fails[] = $row->qda_rrc_fails;
		}
		#echo $cellid;
		#echo $cellname;
		#echo $node;
		array_walk($date, create_function('&$str', '$str = "\"$str\"";')); //put quotes in datetime
		//echo "RNC= ".$rnc.", cellname= ".$cellname.", cellid= ".$cellid."<br><br>";
		//echo join($datetime, ',');
		//echo "<br><br>";
		//echo join($eff_cs, ',');
		#echo '<span size="4" color="#E0E0E3">'.$ne.'</span>';

		?>
		
<script>
///	for (i = 0; i < cars.length; i++) { 
///    text += cars[i] + "<br>";
///}
var node = "<?php echo $ne; ?>";
var datetime = <?php echo json_encode($date); ?>;

		

var datetime = JSON.parse("[" + datetime + "]");
///alert(datetime[0]);	
$(function () {
    var chart;
    $(document).ready(function() {
	
///////////////////////////////////////////////////////////Availability/////////////////////////////////////////////	
		var acc_rrc = new Highcharts.Chart({
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
						text: 'QDA',
						x: -20 //center
					},
					subtitle: {
						text: '<i>' + "<?php echo $ne; ?>" + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
					},

					yAxis: [{ // Primary yAxis
						max: 100,
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
					
					
					
					series: [{
					///	showInLegend: false,
						name: 'QDA',
						data: [<?php echo join($qda, ',') ?>]///[7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
						///data: JSON.parse("[" + acc_rrc + "]")
					},{name: 'QDA S1 SIG',
						data: [<?php echo join($qda_s1sig, ',') ?>]///[7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
						},{name: 'QDA E-RAB',
						data: [<?php echo join($qda_e_rab, ',') ?>]///[7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
						},{name: 'QDA RRC',
						data: [<?php echo join($qda_rrc, ',') ?>]///[7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
						}
					]							
		});
///////////////////////////////////////////////////////////FAILS QDA/////////////////////////////////////////////		
	
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
						text: 'QDA Fails',
					//	 floating: true,
						x: -20, //center
						//y: 0
					},
					subtitle: {
						text: '<i>' + "<?php echo $ne; ?>" + '</i>',
						x: -20
					},
					xAxis: {
						categories: [<?php echo join($date, ',') ?>]///["2015-09-06 07:00:00","2015-09-06 07:30:00","2015-09-06 08:00:00","2015-09-06 08:30:00","2015-09-06 09:00:00","2015-09-06 09:30:00","2015-09-06 10:00:00","2015-09-06 10:30:00","2015-09-06 11:00:00","2015-09-06 11:30:00","2015-09-06 12:00:00","2015-09-06 12:30:00"]
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
						name: 'S1 Signalling',
						data: [<?php echo join($qda_s1sig_fails, ',') ?>]
					},
					{
			            name: 'E-RAB',
						data: [<?php echo join($qda_e_rab_fails, ',') ?>]
			        },
					{
			            name: 'RRC',
						data: [<?php echo join($qda_rrc_fails, ',') ?>]
			        }
					]							
		});

    // $('.chart_content').bind('dblclick', function () {
        // var $this = $(this);
        // $this.toggleClass('modal');
        // $('.chart1', $this).highcharts().reflow();
    // });	
	});
   });
</script>