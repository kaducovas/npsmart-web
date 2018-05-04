<!DOCTYPE html5>
<html>
	<head>

		<title>Process Monitoring UMTS</title>

		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

	</head>
	<body>
	
		<table id="example" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Date</th>
					<th>Server</th>
					<th>PM Files Downloaded</th>
					<th>PM Files FTP Delay (min)</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($main_monitoring as $row){
						echo '
							<tr>
								<td>'.$row->datetime.'</td>
								<td>'.$row->oss.'</td>
								<td>'.$row->pm_files_donwloaded.'</td>
								<td>'.$row->pm_files_ftp_delay.'</td>				
							</tr>
						';
					}	
				?>
			</tbody>
		</table>
		<script>	
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>
		
		<div id="files_downloaded" style="height: 400px; margin-top: 10px"></div>
		<script>
			var files_downloaded = new Highcharts.Chart({
				chart: {
					renderTo: 'files_downloaded',
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
					}
				},
				title:{
					text: '<b>PM Files Downloaded</b>',
					x: -20,	
				},
				subtitle: {
						text: '<i>UMTS</i>',
						x: -20
				},					
				xAxis: {
					type: 'datetime',
					labels: {
						format: '{value:%Y-%m-%d}',
						autoRotationLimit: 360
					},
					tickInterval: 24 * 3600 * 1000
				},
				yAxis:{
					title:{
						text : 'Files'
					}
				},
				tooltip: {
				shared: true,
				headerFormat: '<span>{point.key}</span><br/>',	
				pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
				changeDecimals: 0,
				valueDecimals: 0
				},				
				series: [{
					name: " ATAE",
					color: "orange",
					type: "column",
					data: [
						<?php
							foreach($main_monitoring as $row){
								if($row->oss == "ATAE"){
									echo "[Date.parse('".$row->datetime."'), ".$row->pm_files_donwloaded."], ";
								}
							}
						?>	
					]
				},{
					name: " ATAE 2",
					color: "purple",
					type: "column",
					data: [
						<?php
							foreach($main_monitoring as $row){
								if($row->oss == "ATAE2"){
									echo "[Date.parse('".$row->datetime."'), ".$row->pm_files_donwloaded."], ";
								}
							}
						?>	
					]
				}]
			});
		</script>
		
		<div id="avg_files_downloaded" style="height: 400px; margin-top: 10px"></div>
		<script>
			var avg_files_downloaded = new Highcharts.Chart({
				chart: {
					renderTo: 'avg_files_downloaded',
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
					}
				},
				title:{
					text: '<b>PM Files FTP Delay</b>',
					x: -20,	
				},
				subtitle: {
						text: '<i>UMTS</i>',
						x: -20
				},				
				xAxis: {
					type: 'datetime',
					labels: {
						format: '{value:%Y-%m-%d}',
						autoRotationLimit: 360
					},
					tickInterval: 24 * 3600 * 1000
				},
				yAxis:{
					title:{
						text : "Minutes"
					}
				},	
				tooltip: {
				shared: true,
				headerFormat: '<span>{point.key}</span><br/>',	
				pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
				changeDecimals: 0,
				valueDecimals: 0
				},
				series: [{
					name: " ATAE",
					color: "orange",
					type: "spline",
					data: [
						<?php
							foreach($main_monitoring as $row){
								if($row->oss == "ATAE"){
									echo "[Date.parse('".$row->datetime."'), ".$row->pm_files_ftp_delay."], ";
								}
							}
						?>	
					]
				},{
					name: " ATAE 2",
					color: "purple",
					type: "spline",
					data: [
						<?php
							foreach($main_monitoring as $row){
								if($row->oss == "ATAE2"){
									echo "[Date.parse('".$row->datetime."'), ".$row->pm_files_ftp_delay."], ";
								}
							}
						?>	
					]
				}]
			});
		</script>
		
		<div id="quant_of_files_servers" style="height: 400px; margin-top: 10px"></div>
		<script>
			var quant_of_files_servers = new Highcharts.Chart({
				chart: {
					renderTo: 'quant_of_files_servers',
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
					}
				},
				title:{
					text: '<b># of Files Downloaded in 10 min</b>',
					x: -20,	
				},
				subtitle: {
						text: '<i>UMTS</i>',
						x: -20
				},				
				xAxis: {
					type: 'datetime',
					labels: {
						format: '{value:%Y-%m-%d %H:%M:%S}',
						autoRotationLimit: 360
					},
					tickInterval: 0.5 * 3600 * 1000,
				},
				yAxis:{
					title:{
						text : "Files"
					}
				},
				tooltip: {
					shared: true,
					headerFormat: '<span>{point.key}</span><br/>',	
					pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
				},				
				series: [{
					name: " ATAE",
					color: "orange",
					type: "spline",
					data: [
						<?php
							foreach($quant_of_files as $row){
								if(($row->oss == "ATAE") && ($row->tech == "UMTS")){
									echo "[Date.parse('".$row->interval_alias." GMT-0000'), ".$row->cnt."], ";
								}
							}
						?>	
					]
				},{
					name: " ATAE 2",
					color: "purple",
					type: "spline",
					data: [
						<?php
							foreach($quant_of_files as $row){
								if(($row->oss == "ATAE2") && ($row->tech == "UMTS")){
									echo "[Date.parse('".$row->interval_alias." GMT-0000'), ".$row->cnt."], ";
								}
							}
						?>	
					]
				}]
			});
		</script>
		
		<div id="menu_quant_files" style="width: 100%;max-width: 100%;max-height: 670px;overflow: hidden;white-space:nowrap; margin-top: 10px">
			<div id="quant_of_files_ATAE" style="width: 50%; display:inline-block; margin-right: 5px"></div>
			<script>
				var quant_of_files_ATAE = new Highcharts.Chart({
					chart: {
						renderTo: 'quant_of_files_ATAE',
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
						}
					},
					title:{
						text: '<b># of Files Downloaded in 10 min</b>',
						x: -20,	
					},
					subtitle: {
						text: '<i>ATAE</i>',
						x: -20
					},				
					xAxis: {
						type: 'datetime',
						labels: {
							format: '{value:%Y-%m-%d %H:%M:%S}',
							autoRotationLimit: 360
						},
						tickInterval: 0.5 * 3600 * 1000,
					},
					yAxis:{
						title:{
							text : "Files"
						}
					},
					tooltip: {
						shared: true,
						headerFormat: '<span>{point.key}</span><br/>',	
						pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
					},				
					series: [{
						name: " GSM",
						color: "green",
						type: "spline",
						data: [
							<?php
								foreach($quant_of_files as $row){
									if(($row->oss == "ATAE") && ($row->tech == "GSM")){
										echo "[Date.parse('".$row->interval_alias." GMT-0000'), ".$row->cnt."], ";
									}
								}
							?>	
						]
					},{
						name: " UMTS",
						color: "red",
						type: "spline",
						data: [
							<?php
								foreach($quant_of_files as $row){
									if(($row->oss == "ATAE") && ($row->tech == "UMTS")){
										echo "[Date.parse('".$row->interval_alias." GMT-0000'), ".$row->cnt."], ";
									}
								}
							?>	
						]
					},{
						name: " LTE",
						color: "blue",
						type: "spline",
						data: [
							<?php
								foreach($quant_of_files as $row){
									if(($row->oss == "ATAE") && ($row->tech == "LTE")){
										echo "[Date.parse('".$row->interval_alias." GMT-0000'), ".$row->cnt."], ";
									}
								}
							?>	
						]
					}]
				});
			</script>
			<div id="quant_of_files_ATAE2" style="width: 50%; display:inline-block; margin-left: 5px"></div>
			<script>
				var quant_of_files_ATAE2 = new Highcharts.Chart({
					chart: {
						renderTo: 'quant_of_files_ATAE2',
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
						}
					},
					title:{
						text: '<b># of Files Downloaded in 10 min</b>',
						x: -20,	
					},
					subtitle: {
						text: '<i>ATAE 2</i>',
						x: -20
					},				
					xAxis: {
						type: 'datetime',
						labels: {
							format: '{value:%Y-%m-%d %H:%M:%S}',
							autoRotationLimit: 360
						},
						tickInterval: 0.5 * 3600 * 1000,
						},
					yAxis:{
						title:{
							text : "Files"
						}
					},						
					tooltip: {
						shared: true,
						headerFormat: '<span>{point.key}</span><br/>',	
						pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
					},				
					series: [{
						name: " GSM",
						color: "green",
						type: "spline",
						data: [
							<?php
								foreach($quant_of_files as $row){
									if(($row->oss == "ATAE2") && ($row->tech == "GSM")){
										echo "[Date.parse('".$row->interval_alias." GMT-0000'), ".$row->cnt."], ";
									}
								}
							?>	
						]
					},{
						name: " UMTS",
						color: "red",
						type: "spline",
						data: [
							<?php
								foreach($quant_of_files as $row){
									if(($row->oss == "ATAE2") && ($row->tech == "UMTS")){
										echo "[Date.parse('".$row->interval_alias." GMT-0000'), ".$row->cnt."], ";
									}
								}
							?>	
						]
					},{
						name: " LTE",
						color: "blue",
						type: "spline",
						data: [
							<?php
								foreach($quant_of_files as $row){
									if(($row->oss == "ATAE2") && ($row->tech == "LTE")){
										echo "[Date.parse('".$row->interval_alias." GMT-0000'), ".$row->cnt."], ";
									}
								}
							?>	
						]
					}]
				});
			</script>
		</div>
		<table id="files_remaining" class="display" cellspacing="0" width="100%" style="margin-top: 10px">
			<thead>
				<tr>
					<th>Date</th>
					<th>Server</th>
					<th>PM Files Downloaded</th>
					<th>PM Files Missing</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$quant_of_all_files_aux = $this->model_process_monitoring->all_files();
					$quant_of_all_files = $quant_of_all_files_aux[0]->total_files;
					foreach($main_monitoring as $row){
						echo '
							<tr>
								<td>'.$row->datetime.'</td>
								<td>'.$row->oss.'</td>
								<td style="color: green">'.$row->pm_files_donwloaded.'</td>
								<td style="color: red">'.(($quant_of_all_files - $row->pm_files_donwloaded) > 0?($quant_of_all_files - $row->pm_files_donwloaded):0).'</td>							
							</tr>
						';
					}	
				?>
			</tbody>
		</table>
		<script>	
			$(document).ready(function() {
				$('#files_remaining').DataTable();
			} );
		</script>
	</body>
</html>