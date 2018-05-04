<!DOCTYPE html5>
<html>
	<head>

		<title>Neighborhood Check LTE</title>

		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
		
		<style>

			#example td, #example th {
				border: 1px solid #ddd;
				padding: 8px;
			}

			#example tr:nth-child(even){background-color: #f2f2f2;}

			#example tr:hover {background-color: #ddd;}

			#example tr:first-child{
				background:lightblue;
			}
					
		</style>

	</head>
	<body>
		<table id="example" border="1 solid black" cellspacing="0" width="100%">
			<thead>
				<tr>	
					<th colspan="1" bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">Node</th>
					<th colspan="1" bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">External UMTS to LTE</th>
					<th colspan="1" bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">External UMTS to UMTS</th>
					<th colspan="1" bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">CoSites UMTS to LTE</th>
					<th colspan="1" bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">Names External UMTS to LTE</th>
					<th colspan="1" bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">Conf Blind Handover UMTS</th>
					<th colspan="1" bgcolor="#3C6D7A"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">CoSites UMTS Interfreq</th>					
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($tabela as $row){
						if($row->ext_u2l == ""){
						$row->ext_u2l = 0;
						}
						if($row->ext_umts == ""){
						$row->ext_umts = 0;
						}
						if($row->cosite_umts_intrafreq == ""){
						$row->cosite_umts_intrafreq = 0;
						}
						if($row->names_ext_umts_u2l == ""){
						$row->names_ext_umts_u2l = 0;
						}
						if($row->conf_umts_bho == ""){
						$row->conf_umts_bho = 0;
						}
						if($row->cosite_umts_interfreq == ""){
						$row->cosite_umts_interfreq = 0;
						}						
						echo '
							<tr>
								<td value="'.$reportnetype.'"><a style="cursor:pointer" onclick="selectne(this)">'.$row->node.'</a></td>
								<td>'.$row->ext_u2l.'</td>
								<td>'.$row->ext_umts.'</td>
								<td>'.$row->cosite_umts_intrafreq.'</td>
								<td>'.$row->names_ext_umts_u2l.'</td>
								<td>'.$row->conf_umts_bho.'</td>
								<td>'.$row->cosite_umts_interfreq.'</td>								
							</tr>
						';
					}	
				?>
			</tbody>
		</table>
		<script>	
			$(document).ready(function() {
				$('#example').DataTable({
				
				"order": [[ 1, "desc" ]],
				
				});
			} );
		</script>
		<div id="teste" style="height: 400px; margin-top: 10px; width:100%">
			<div id="main_network" style="height: 100%; margin-top: 10px;width:100%"></div>
		</div>
		<div id="external_group" style="width: 100%;max-width: 100%;max-height: 670px;overflow: hidden;white-space:nowrap; margin-top: 10px">
			<div id="external_network" style="width: 50%; display:inline-block; margin-right: 5px"></div>
			<div id="external_network_lte_to_lte" style="width: 50%; display:inline-block; margin-right: 5px"></div>
		</div>
		<div id="external_group2" style="width: 100%;max-width: 100%;max-height: 670px;overflow: hidden;white-space:nowrap; margin-top: 10px">
			<div id="coSites" style="width: 50%; display:inline-block; margin-right: 5px"></div>
			<div id="coSites_inter" style="width: 50%; display:inline-block; margin-right: 5px"></div>
		</div>
		<div id="external_group3" style="width: 100%;max-width: 100%;max-height: 670px;overflow: hidden;white-space:nowrap; margin-top: 10px">
			<div id="names_external" style="width: 50%; display:inline-block; margin-right: 5px"></div>
			<div id="conf_blind" style="width: 50%; display:inline-block; margin-right: 5px"></div>
		</div>
		<script>
			//Highcharts.setOptions(chart_Sand_Signika);			
			var files_downloaded = new Highcharts.Chart({
				chart: {
					renderTo: 'main_network',
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
					text: '<b>Neighborhood Check</b>',
					x: -20,	
				},
				subtitle: {
						text: '<i><?php echo $reportnename ?></i>',
						x: -20
				},					
				xAxis: {
					categories: [
						<?php
							foreach($main as $row){
									echo "'".$row->date."',";
							}
						?>
					]
				},
				yAxis:{
					title:{
						text : 'Checks'
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
					name: " Inconsistencies",
					color: "#F42400",
					type: "line",
					data: [
						<?php
							foreach($main as $row){
									echo $row->checks.",";
							}
						?>	
					]
				}]
			});
			
			$( "#teste" ).resizable({
			  resize: function( event, ui ) {
				var acc = $("#main_network").highcharts();
				var cont = $("#main_network"); 	  
				var width = $('#teste').width();
				var height = $('#teste').height();
				cont.css('width',width);
				cont.css('height',height);
				acc.setSize(cont.width(), cont.height(), true);
			  }
			});
		</script>
		<script>
					
			var files_downloaded = new Highcharts.Chart({
				chart: {
					renderTo: 'external_network',
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
					text: '<b>External UMTS to LTE</b>',
					x: -20,	
				},
				subtitle: {
						text: '<i><?php echo $reportnename ?></i>',
						x: -20
				},					
				xAxis: {
					categories: [
						<?php
							foreach($external as $row){
									echo "'".$row->date."',";
							}
						?>
					]
				},
				yAxis:{
					title:{
						enabled: false,
						//text : 'Checks'
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
					name: " EARFCN",
					color: "orange",
					type: "column",
					data: [
						<?php
							foreach($external as $row){
									echo $row->earfcn.",";
							}
						?>	
					]
				},{
					name: " PCI",
					color: "blue",
					type: "column",
					data: [
						<?php
							foreach($external as $row){
									echo $row->psc.",";
							}
						?>	
					]
				},{
					name: " TAC",
					color: "green",
					type: "column",
					data: [
						<?php
							foreach($external as $row){
									echo $row->lac.",";
							}
						?>	
					]
				}]
			});
		</script>
		<script>
					
			var files_downloaded = new Highcharts.Chart({
				chart: {
					renderTo: 'external_network_lte_to_lte',
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
					text: '<b>External UMTS to UMTS</b>',
					x: -20,	
				},
				subtitle: {
						text: '<i><?php echo $reportnename ?></i>',
						x: -20
				},					
				xAxis: {
					categories: [
						<?php
							foreach($external_lte_to_lte as $row){
									echo "'".$row->date."',";
							}
						?>
					]
				},
				yAxis:{
					title:{
						enabled: false,
						//text : 'Checks'
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
					name: " UARFCN",
					color: "#00AACC",
					type: "column",
					data: [
						<?php
							foreach($external_lte_to_lte as $row){
									echo $row->uarfcn.",";
							}
						?>	
					]
				},{
					name: " PSC",
					color: "#FF4E00",
					type: "column",
					data: [
						<?php
							foreach($external_lte_to_lte as $row){
									echo $row->psc.",";
							}
						?>	
					]
				},{
					name: " LAC",
					color: "#A21F9E",
					type: "column",
					data: [
						<?php
							foreach($external_lte_to_lte as $row){
									echo $row->lac.",";
							}
						?>	
					]
				}]
			});
		</script>
		
		<script>
					
			var files_downloaded = new Highcharts.Chart({
				chart: {
					renderTo: 'coSites',
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
					text: '<b>CoSites UMTS Intrafreq</b>',
					x: -20,	
				},
				subtitle: {
						text: '<i><?php echo $reportnename ?></i>',
						x: -20
				},					
				xAxis: {
					categories: [
						<?php
							foreach($coSites_lte_to_umts as $row){
									echo "'".$row->date."',";
							}
						?>
					]
				},
				yAxis:{
					title:{
						text : 'Checks'
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
					name: " Inconsistencies",
					color: "#F42400",
					type: "line",
					data: [
						<?php
							foreach($coSites_lte_to_umts as $row){
									echo $row->checks.",";
							}
						?>	
					]
				}]
			});
		</script>		

		<script>
					
			var files_downloaded = new Highcharts.Chart({
				chart: {
					renderTo: 'names_external',
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
					text: '<b>Names External UMTS to LTE</b>',
					x: -20,	
				},
				subtitle: {
						text: '<i><?php echo $reportnename ?></i>',
						x: -20
				},					
				xAxis: {
					categories: [
						<?php
							foreach($names_external_lte_to_umts as $row){
									echo "'".$row->date."',";
							}
						?>
					]
				},
				yAxis:{
					title:{
						text : 'Checks'
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
					name: " Inconsistencies",
					color: "#F42400",
					type: "line",
					data: [
						<?php
							foreach($names_external_lte_to_umts as $row){
									echo $row->checks.",";
							}
						?>	
					]
				}]
			});
		</script>

		<script>
					
			var files_downloaded = new Highcharts.Chart({
				chart: {
					renderTo: 'conf_blind',
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
					text: '<b>Conf Blind Handover UMTS</b>',
					x: -20,	
				},
				subtitle: {
						text: '<i><?php echo $reportnename ?></i>',
						x: -20
				},					
				xAxis: {
					categories: [
						<?php
							foreach($conf_blind_lte_to_umts as $row){
									echo "'".$row->date."',";
							}
						?>
					]
				},
				yAxis:{
					title:{
						text : 'Checks'
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
					name: " Inconsistencies",
					color: "#F42400",
					type: "line",
					data: [
						<?php
							foreach($conf_blind_lte_to_umts as $row){
									echo $row->checks.",";
							}
						?>	
					]
				}]
			});
		</script>
		<script>
					
			var files_downloaded = new Highcharts.Chart({
				chart: {
					renderTo: 'coSites_inter',
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
					text: '<b>CoSites UMTS Interfreq</b>',
					x: -20,	
				},
				subtitle: {
						text: '<i><?php echo $reportnename ?></i>',
						x: -20
				},					
				xAxis: {
					categories: [
						<?php
							foreach($coSites_inter_lte_to_umts as $row){
									echo "'".$row->date."',";
							}
						?>
					]
				},
				yAxis:{
					title:{
						text : 'Checks'
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
					name: " Inconsistencies",
					color: "#F42400",
					type: "line",
					data: [
						<?php
							foreach($coSites_inter_lte_to_umts as $row){
									echo $row->checks.",";
							}
						?>	
					]
				}]
			});
		</script>
	</body>
</html>