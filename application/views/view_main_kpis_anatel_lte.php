<DOCTYPE html5>
<html>
	<head>
		<title>KPIs Anatel LTE</title>
		
		<style>
		
			.button {
			  display: inline-block;
			  padding: 15px 25px;
			  font-size: 20px;
			  cursor: pointer;
			  text-align: center;
			  text-decoration: none;
			  outline: none;
			  color: #fff;
			  background-color:#1476e5 ;
			  border: none;
			  border-radius: 15px;
			  box-shadow: 0 5px #999;
			  margin-top: 20px;
			}

			.button:hover {background-color:#1f5fa8 }

			.button:active {
			  background-color: #3e8e41;
			  box-shadow: 0 2px #666;
			  transform: translateY(4px);
			}		
		
		</style>
	</head>
	<body>
		<div class="sortable1">	
			<div id="content0" class="chart_content"><div id="smp_8" class="chart"></div></div>			
			<div id="content1" class="chart_content"><div id="smp_9" class="chart"></div></div>
		</div>
		<div style="text-align:center">
			<button class="button" id="export">Export all</button>
		</div>
	</body>
		<script>
		
			var estado_smp_8 = true;
			var estado_smp_9 = true;
			var toogle_availability = false;		
		
			Highcharts.setOptions(chart_Sand_Signika);			
			var smp_8 = new Highcharts.Chart({
				chart: {
					renderTo: 'smp_8',
					alignTicks:false,
					zoomType: 'xy',
					resetZoomButton: {
						position: {
							align: 'left',
							verticalAlign: 'top', 
							x: 10,
							y: 10
					},
						relativeTo: 'chart'
					},
					events: {
						
						click: function(e){
							
							if(estado_smp_8 != false){
								if (e.shiftKey == 1) {
								smp_8.xAxis[0].options.plotLines[1].color = "red";
								smp_8.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
								smp_9.xAxis[0].options.plotLines[1].color = "red";
								smp_9.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;						
								smp_8.xAxis[0].update();
								smp_9.xAxis[0].update();						
								}else{
								smp_8.xAxis[0].options.plotLines[0].color = "red";
								smp_8.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
								smp_9.xAxis[0].options.plotLines[0].color = "red";
								smp_9.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;						
								smp_8.xAxis[0].update();
								smp_9.xAxis[0].update();
								}
							}
			
						}	
			
					}
				},
				title:{
					text: '<b>SMP 8</b>',
					x: -20,	
				},
				subtitle: {
						text: '<i><?php echo $reportnename ?></i>',
						x: -20
				},					
				xAxis: {
					categories: [
						<?php
							foreach($smp as $row){
								if($row->date == "53"){
									$row->date = "1";
								}									
									echo "'".$row->date."',";
							}
						?>
					],
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
					}],
					labels: {
						style: {
							fontSize:'18px'
						}
					}
				},
				yAxis:{
					title:{
						text : '(%)'
					},
					max: 100,
					labels: {
						style: {
							fontSize:'18px'
						}
					}
				},
				
				legend:{
					itemStyle: {
						fontSize: '18px',
					}
				},				
				
				plotOptions: {
					series: {
						cursor: 'pointer',
						events: {
							
							legendItemClick: function () {
								if(this.name == "Marker"){
								if(this.visible == true){
								estado_smp_8 = false;		
								smp_8.xAxis[0].options.plotLines[0].color = "transparent";
								smp_9.xAxis[0].options.plotLines[0].color = "transparent";
								smp_8.xAxis[0].options.plotLines[1].color = "transparent";
								smp_9.xAxis[0].options.plotLines[1].color = "transparent";								
								smp_8.xAxis[0].update();
								smp_9.xAxis[0].update();					
								}else
								if(this.visible == false){
								estado_smp_8 = true;
								smp_8.xAxis[0].options.plotLines[0].color = "red";
								smp_9.xAxis[0].options.plotLines[0].color = "red";
								smp_8.xAxis[0].options.plotLines[1].color = "red";
								smp_9.xAxis[0].options.plotLines[1].color = "red";								
								smp_8.xAxis[0].update();
								smp_9.xAxis[0].update();
								}	
								}
							}
							
						}
					}
				},
				tooltip: {
					shared: true,
					headerFormat: '<span>{point.key}</span><br/>',	
					pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
					changeDecimals: 2,
					valueDecimals: 2
				},				
				series: [{
					name: 'Marker',
					color:'red'
					},{
					name: " SMP 8",
					color: "#0872d6",
					type: "spline",
					data: [
						<?php
							foreach($smp as $row){
								if($row->smp_8 == ""){
									$row->smp_8 = "null";	
								}else if($row->smp_8 > 100){
									$row->smp_8 = 100;
								}
								echo $row->smp_8.",";
							}
						?>	
					]
				}]
			});
			
	</script>
		<script>
			Highcharts.setOptions(chart_Sand_Signika);			
			var smp_9 = new Highcharts.Chart({
				chart: {
					renderTo: 'smp_9',
					alignTicks:false,
					zoomType: 'xy',
					resetZoomButton: {
						position: {
							align: 'left',
							verticalAlign: 'top', 
							x: 10,
							y: 10
					},
						relativeTo: 'chart'
					},
					events: {
						
						click: function(e){
							
							if(estado_smp_8 != false){
								if (e.shiftKey == 1) {
								smp_9.xAxis[0].options.plotLines[1].color = "red";
								smp_9.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;						
								smp_9.xAxis[0].update();						
								}else{
								smp_9.xAxis[0].options.plotLines[0].color = "red";
								smp_9.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;						
								smp_9.xAxis[0].update();
								}
							}
			
						}	
			
					}
				},
				title:{
					text: '<b>SMP 9</b>',
					x: -20,	
				},
				subtitle: {
						text: '<i><?php echo $reportnename ?></i>',
						x: -20
				},					
				xAxis: {
					categories: [
						<?php
							foreach($smp as $row){
								if($row->date == "53"){
									$row->date = "1";
								}									
									echo "'".$row->date."',";
							}
						?>
					],
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
					}],
					labels: {
						style: {
							fontSize:'18px'
						}
					}
				},
				yAxis:{
					title:{
						text : '(%)'
					},
					min: 0,
					labels: {
						style: {
							fontSize:'18px'
						}
					}
				},
				
				legend:{
					itemStyle: {
						fontSize: '18px',
					}
				},				
				
				plotOptions: {
					series: {
						cursor: 'pointer',
						events: {
							
							legendItemClick: function () {
								if(this.name == "Marker"){
								if(this.visible == true){
								estado_smp_8 = false;		
								smp_9.xAxis[0].options.plotLines[0].color = "transparent";
								smp_9.xAxis[0].options.plotLines[1].color = "transparent";								
								smp_9.xAxis[0].update();					
								}else
								if(this.visible == false){
								estado_smp_8 = true;
								smp_9.xAxis[0].options.plotLines[0].color = "red";
								smp_9.xAxis[0].options.plotLines[1].color = "red";
								smp_9.xAxis[0].update();
								}	
								}
							}
							
						}
					}
				},
				
				tooltip: {
					shared: true,
					headerFormat: '<span>{point.key}</span><br/>',	
					pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
					changeDecimals: 2,
					valueDecimals: 2
				},				
				series: [{
					name: 'Marker',
					color:'red'
					},{
					name: " SMP 9",
					color: "#0872d6",
					type: "spline",
					data: [
						<?php
							foreach($smp as $row){
								if($row->smp_9 == ""){
									$row->smp_9 = "null";	
								}else if($row->smp_9 < 0){
									$row->smp_9 = 0;
								}
									echo $row->smp_9.",";
							}
						?>	
					]
				}]
			});
			
			var kpi = [];
			var scale = [];

			kpi[0] = "smp_8";
			kpi[1] = "smp_9";

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

			$('#export').click(function() {
				Highcharts.exportCharts([smp_8,smp_9]);
			});			
			
	</script>
	
</html>
	
