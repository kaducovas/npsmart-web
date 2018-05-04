<?php

$bad = "#FF0000";
$bgbad = "#e81313";	
$good = "#327cf2";
$middle = "green";
$bggood = "green";
$yellow = "#FFFF00";
$title = "#C0504D";

$bbgbad = "#ffd2bc";
$bbggood = "white";
?>

<!DOCTYPE html>
<html>
	<head>
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
			}

			.button:hover {background-color:#1f5fa8 }

			.button:active {
			  background-color: #3e8e41;
			  box-shadow: 0 2px #666;
			  transform: translateY(4px);
			}

			.graficos{
				
				width:100%;
				height: 800px;
				margin-top: 20px;
			
			}
			
			td{
				text-align:center;
				font-weight: bold;
				font-family: calibri;
				font-size:14pt;
			}
			
			th{
				
				background-color:#C0504D;
				
			}	
			
			#tabela4,#tabela5,#tabela6{
				
				table-layout: auto;
				width: 500px;
			
			}	
					
		</style>
	</head>
	<body>
			<div class="graficos" id="grafics"></div>
			<div class="graficos" id="grafics2"></div>
			<div class="graficos" id="grafics3"></div>
			<div class="graficos" id="grafics4"></div>
			<div class="graficos" id="grafics5"></div>
			<div class="graficos" id="grafics6"></div>
			<div class="graficos" id="grafics7"></div>
			<div class="graficos" id="grafics8"></div>
			<div class="graficos" id="grafics9"></div>
			<div class="graficos" id="grafics10"></div>
			<div class="graficos" id="grafics11"></div>
			<div class="graficos" id="grafics12"></div>
			<div class="graficos" id="grafics13"></div>
			<div class="graficos" id="grafics14"></div>
			<div class="graficos" id="grafics15"></div>
			<div class="graficos" id="grafics16"></div>
			<div class="graficos" id="grafics17"></div>
			<div class="graficos" id="grafics18"></div>
			<div class="graficos" id="grafics19"></div>
			<div class="graficos" id="grafics20"></div>
			<div class="graficos" id="grafics21"></div>
			<div class="graficos" id="grafics22"></div>
			<div class="graficos" id="grafics23"></div>
			<div class="graficos" id="grafics24"></div>
			<div class="graficos" id="grafics25"></div>
			<div class="graficos" id="grafics26"></div>
			<div class="graficos" id="grafics27"></div>
			<div class="graficos" id="grafics28"></div>
			<div class="graficos" id="grafics29"></div>
			<div class="graficos" id="grafics30"></div>
			<div class="graficos" id="grafics31"></div>
			<div class="graficos" id="grafics32"></div>
			<div class="graficos" id="grafics33"></div>
			<div class="graficos" id="grafics34"></div>
			<div class="graficos" id="grafics35"></div>
			<div class="graficos" id="grafics36"></div>
			<div class="graficos" id="grafics37"></div>
			<div class="graficos" id="grafics38"></div>
			<div class="graficos" id="grafics39"></div>
			<div class="graficos" id="grafics40"></div>
			<div class="graficos" id="grafics41"></div>
			<div class="graficos" id="grafics42"></div>
			<div class="graficos" id="grafics43"></div>
			<div class="graficos" id="grafics44"></div>
			<div class="graficos" id="grafics45"></div>
			<div class="graficos" id="grafics46"></div>
			<div class="graficos" id="grafics47"></div>
			<div class="graficos" id="grafics48"></div>
			<div class="graficos" id="grafics49"></div>
			<div class="graficos" id="grafics50"></div>
			<div class="graficos" id="grafics51"></div>
			<div class="graficos" id="grafics52"></div>
			<div class="graficos" id="grafics53"></div>
			<div class="graficos" id="grafics54"></div>
			<div class="graficos" id="grafics55"></div>		
			
			<div id="tabela">
				<table id="table_id" class="cell-border compact hover" border="1 solid black" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th rowspan="3" >City</th>
							<th colspan="4" >Accessibility CS (%)</th>
							<th colspan="4" >Retainability CS (%)</th>
							<th colspan="4" >Availability CS (%)</th>
							<th colspan="4" >CQI CS (%)</th>
						</tr>
						<tr>
							<th colspan="4" style="background-color: white;color: black"><span style="color:red"><b>TARGET </b></span><span style="color:green"><b>&#8805 99</b></span></th>
							<th colspan="4" style="background-color: white;color: black"><span style="color:red"><b>TARGET </b></span><span style="color:green"><b>&#8805 99</b></span></th>
							<th colspan="4" style="background-color: white;color: black"><span style="color:red"><b>TARGET </b></span><span style="color:green"><b>&#8805 99</b></span></th>
							<th style="background-color: red"><span><b> &#8804 </b></span><span><b>95</b></span></th>
							<th style="background-color: yellow"><span><b>&#8805 </b></span><span><b>95</b></span></th>
							<th style="background-color: green"><span><b>&#8805 </b></span><span><b>97</b></span></th>
							<th style="background-color: #327cf2"><span><b>&#8805 </b></span><span><b> 98.5</b></span></th>
						</tr>					
						<tr>
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>
							
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>
							
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>
							
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><b>BELO HORIZONTE</b></td>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "BELO HORIZONTE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->acc_cs) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->acc_cs."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "BELO HORIZONTE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->drop_cs) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->drop_cs."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "BELO HORIZONTE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->availability) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "BELO HORIZONTE"){
										if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 98.5 && (sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 97.5 && (sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";	
										}
									}
								}
							?>						
						</tr>
						<tr>
							<td><b>BRASÍLIA</b></td>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "BRASÍLIA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->acc_cs) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->acc_cs."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "BRASÍLIA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->drop_cs) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->drop_cs."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "BRASÍLIA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->availability) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "BRASÍLIA"){
										if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 98.5 && (sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 97.5 && (sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";	
										}
									}
								}
							?>						
						</tr>
						<tr>
							<td><b>CURITIBA</b></td>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "CURITIBA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->acc_cs) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->acc_cs."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "CURITIBA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->drop_cs) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->drop_cs."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "CURITIBA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->availability) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "CURITIBA"){
										if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 98.5 && (sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 97.5 && (sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";	
										}
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>FLORIANÓPOLIS</b></td>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "FLORIANÓPOLIS" && $umts_kpi_cs[$i]->uf == "SC"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->acc_cs) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->acc_cs."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "FLORIANÓPOLIS" && $umts_kpi_cs[$i]->uf == "SC"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->drop_cs) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->drop_cs."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "FLORIANÓPOLIS" && $umts_kpi_cs[$i]->uf == "SC"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->availability) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if(($umts_kpi_cs[$i]->node == "FLORIANÓPOLIS") && ($umts_kpi_cs[$i]->uf == "SC")){
										if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 98.5 && (sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 97.5 && (sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";	
										}
									}
								}
							?>						
						</tr>
						<tr>
							<td><b>RECIFE</b></td>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "RECIFE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->acc_cs) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->acc_cs."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "RECIFE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->drop_cs) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->drop_cs."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "RECIFE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->availability) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "RECIFE"){
										if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 98.5 && (sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 97.5 && (sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";	
										}
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>SALVADOR</b></td>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "SALVADOR"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->acc_cs) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->acc_cs."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "SALVADOR"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->drop_cs) >= 99?$bggood:$bgbad)."'>".$umts_kpi_cs[$i]->drop_cs."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "SALVADOR"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_cs[$i]->availability) >= 99?$bggood:$bgbad)."'>".(sprintf('%0.2f',($umts_kpi_cs[$i]->availability)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_cs); $i++) {
									if($umts_kpi_cs[$i]->node == "SALVADOR"){
										if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 98.5 && (sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 97.5 && (sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($umts_kpi_cs[$i]->availability) * ($umts_kpi_cs[$i]->drop_cs) * ($umts_kpi_cs[$i]->acc_cs))/10000)))."</td>
										";	
										}
									}
								}
							?>						
						</tr>				
						
					</tbody>
				</table>
			</div>

			<div id="tabela2">
				<table id="table_id" class="cell-border compact hover" border="1 solid black" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th rowspan="3" >City</th>
							<th style='display:none;'rowspan="3" bgcolor="#3b5998">City</th>			
							<th style='display:none;'rowspan="3" bgcolor="#3b5998">City</th>
							<th colspan="4" >Accessibility HS (%)</th>
							<th colspan="4" >Retainability HS (%)</th>
							<th colspan="4" >Availability HS (%)</th>
							<th colspan="4" >CQI HS (%)</th>
							<th rowspan="2" colspan="4" >HSDPA User Throughput (Kbps)</th>
						</tr>
						<tr>
							<th colspan="4" style="background-color: white;color: black"><span style="color:red"><b>TARGET </b></span><span style="color:green"><b>&#8805 99</b></span></th>
							<th colspan="4" style="background-color: white;color: black"><span style="color:red"><b>TARGET </b></span><span style="color:green"><b>&#8805 99</b></span></th>
							<th colspan="4" style="background-color: white;color: black"><span style="color:red"><b>TARGET </b></span><span style="color:green"><b>&#8805 99</b></span></th>
							<th style="background-color: red"><span><b> &#8804 </b></span><span><b>95</b></span></th>
							<th style="background-color: yellow"><span><b>&#8805 </b></span><span><b>95</b></span></th>
							<th style="background-color: green"><span><b>&#8805 </b></span><span><b>97</b></span></th>
							<th style="background-color: #327cf2"><span><b>&#8805 </b></span><span><b> 98.5</b></span></th>
						</tr>					
						<tr>
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>
							
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>
							
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>
							
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>
							
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>					
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><b>BELO HORIZONTE</b></td>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "BELO HORIZONTE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->acc_ps) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->acc_ps."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "BELO HORIZONTE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->drop_ps) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->drop_ps."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "BELO HORIZONTE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->availability) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "BELO HORIZONTE"){
										if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 98.5 && (sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 97.5 && (sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";	
										}
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "BELO HORIZONTE"){
										echo "
											<td>".$umts_kpi_hs[$i]->thp_hsdpa."</td>
										";
									}
								}
							?>						
						</tr>
						<tr>
							<td><b>BRASÍLIA</b></td>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "BRASÍLIA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->acc_ps) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->acc_ps."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "BRASÍLIA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->drop_ps) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->drop_ps."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "BRASÍLIA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->availability) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "BRASÍLIA"){
										if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 98.5 && (sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 97.5 && (sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";	
										}
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "BRASÍLIA"){
										echo "
											<td>".$umts_kpi_hs[$i]->thp_hsdpa."</td>
										";
									}
								}
							?>						
						</tr>
						<tr>
							<td><b>CURITIBA</b></td>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "CURITIBA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->acc_ps) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->acc_ps."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "CURITIBA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->drop_ps) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->drop_ps."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "CURITIBA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->availability) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "CURITIBA"){
										if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 98.5 && (sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 97.5 && (sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";	
										}
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "CURITIBA"){
										echo "
											<td>".$umts_kpi_hs[$i]->thp_hsdpa."</td>
										";
									}
								}
							?>						
						</tr>
						<tr>
							<td><b>FLORIANÓPOLIS</b></td>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "FLORIANÓPOLIS" && $umts_kpi_hs[$i]->uf == "SC"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->acc_ps) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->acc_ps."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "FLORIANÓPOLIS" && $umts_kpi_hs[$i]->uf == "SC"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->drop_ps) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->drop_ps."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "FLORIANÓPOLIS" && $umts_kpi_hs[$i]->uf == "SC"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->availability) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if(($umts_kpi_hs[$i]->node == "FLORIANÓPOLIS") && ($umts_kpi_hs[$i]->uf == "SC")){
										if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 98.5 && (sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 97.5 && (sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";	
										}
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "FLORIANÓPOLIS" && ($umts_kpi_hs[$i]->uf == "SC")){
										echo "
											<td>".$umts_kpi_hs[$i]->thp_hsdpa."</td>
										";
									}
								}
							?>						
						</tr>
						<tr>
							<td><b>RECIFE</b></td>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "RECIFE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->acc_ps) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->acc_ps."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "RECIFE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->drop_ps) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->drop_ps."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "RECIFE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->availability) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "RECIFE"){
										if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 98.5 && (sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 97.5 && (sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";	
										}
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "RECIFE"){
										echo "
											<td>".$umts_kpi_hs[$i]->thp_hsdpa."</td>
										";
									}
								}
							?>							
						</tr>
						<tr>
							<td><b>SALVADOR</b></td>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "SALVADOR"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->acc_ps) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->acc_ps."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "SALVADOR"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->drop_ps) >= 99?$bggood:$bgbad)."'>".$umts_kpi_hs[$i]->drop_ps."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "SALVADOR"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$umts_kpi_hs[$i]->availability) >= 99?$bggood:$bgbad)."'>".(sprintf('%0.2f',($umts_kpi_hs[$i]->availability)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "SALVADOR"){
										if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 98.5 && (sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 97.5 && (sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($umts_kpi_hs[$i]->availability) * ($umts_kpi_hs[$i]->drop_ps) * ($umts_kpi_hs[$i]->acc_ps))/10000)))."</td>
										";	
										}
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($umts_kpi_hs); $i++) {
									if($umts_kpi_hs[$i]->node == "SALVADOR"){
										echo "
											<td>".$umts_kpi_hs[$i]->thp_hsdpa."</td>
										";
									}
								}
							?>							
						</tr>				
						
					</tbody>
				</table>
			</div>

			<div id="tabela3">
				<table id="table_id3" class="cell-border compact hover" border="1 solid black" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th rowspan="3" >City</th>
							<th style='display:none;'rowspan="3" bgcolor="#3b5998">City</th>			
							<th style='display:none;'rowspan="3" bgcolor="#3b5998">City</th>
							<th colspan="4" >Accessibility (%)</th>
							<th colspan="4" >Retainability (%)</th>
							<th colspan="4" >Availability (%)</th>
							<th colspan="4" >CQI (%)</th>
							<th rowspan="2" colspan="4" >DL Avg User Throughput (Mbps)</th>
						</tr>
						<tr>
							<th colspan="4" style="background-color: white;color: black"><span style="color:red"><b>TARGET </b></span><span style="color:green"><b>&#8805 99</b></span></th>
							<th colspan="4" style="background-color: white;color: black"><span style="color:red"><b>TARGET </b></span><span style="color:green"><b>&#8805 99</b></span></th>
							<th colspan="4" style="background-color: white;color: black"><span style="color:red"><b>TARGET </b></span><span style="color:green"><b>&#8805 99</b></span></th>
							<th style="background-color: red"><span><b> &#8804 </b></span><span><b>95</b></span></th>
							<th style="background-color: yellow"><span><b>&#8805 </b></span><span><b>95</b></span></th>
							<th style="background-color: green"><span><b>&#8805 </b></span><span><b>97</b></span></th>
							<th style="background-color: #327cf2"><span><b>&#8805 </b></span><span><b> 98.5</b></span></th>
						</tr>					
						<tr>
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>
							
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>
							
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>
							
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>
							
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>					
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><b>BELO HORIZONTE</b></td>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "BELO HORIZONTE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab)) >= 99?$bggood:$bgbad)."'>".(sprintf('%0.2f',($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/100)."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "BELO HORIZONTE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$cqi_lte[$i]->service_drop) >= 99?$bggood:$bgbad)."'>".$cqi_lte[$i]->service_drop."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "BELO HORIZONTE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$cqi_lte[$i]->availability) >= 99?$bggood:$bgbad)."'>".$cqi_lte[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "BELO HORIZONTE"){
										if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 98.5 && (sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 97.5 && (sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";	
										}
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "BELO HORIZONTE"){
										echo "
											<td>".$cqi_lte[$i]->cell_downlink_avg_thp."</td>
										";
									}
								}
							?>						
						</tr>
						<tr>
							<td><b>BRASÍLIA</b></td>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "BRASÍLIA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab)) >= 99?$bggood:$bgbad)."'>".(sprintf('%0.2f',($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/100)."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "BRASÍLIA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$cqi_lte[$i]->service_drop) >= 99?$bggood:$bgbad)."'>".$cqi_lte[$i]->service_drop."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "BRASÍLIA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$cqi_lte[$i]->availability) >= 99?$bggood:$bgbad)."'>".$cqi_lte[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "BRASÍLIA"){
										if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 98.5 && (sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 97.5 && (sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";	
										}
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "BRASÍLIA"){
										echo "
											<td>".$cqi_lte[$i]->cell_downlink_avg_thp."</td>
										";
									}
								}
							?>						
						</tr>
						<tr>
							<td><b>CURITIBA</b></td>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "CURITIBA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab)) >= 99?$bggood:$bgbad)."'>".(sprintf('%0.2f',($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/100)."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "CURITIBA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$cqi_lte[$i]->service_drop) >= 99?$bggood:$bgbad)."'>".$cqi_lte[$i]->service_drop."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "CURITIBA"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$cqi_lte[$i]->availability) >= 99?$bggood:$bgbad)."'>".$cqi_lte[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "CURITIBA"){
										if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 98.5 && (sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 97.5 && (sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";	
										}
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "CURITIBA"){
										echo "
											<td>".$cqi_lte[$i]->cell_downlink_avg_thp."</td>
										";
									}
								}
							?>						
						</tr>
						<tr>
							<td><b>FLORIANÓPOLIS</b></td>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "FLORIANÓPOLIS" && $cqi_lte[$i]->uf == "SC"){
										echo "
											<td style='color: ".(sprintf('%0.2f',($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab)) >= 99?$bggood:$bgbad)."'>".(sprintf('%0.2f',($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/100)."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "FLORIANÓPOLIS" && $cqi_lte[$i]->uf == "SC"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$cqi_lte[$i]->service_drop) >= 99?$bggood:$bgbad)."'>".$cqi_lte[$i]->service_drop."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "FLORIANÓPOLIS" && $cqi_lte[$i]->uf == "SC"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$cqi_lte[$i]->availability) >= 99?$bggood:$bgbad)."'>".$cqi_lte[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "FLORIANÓPOLIS" && $cqi_lte[$i]->uf == "SC"){
										if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 98.5 && (sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 97.5 && (sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";	
										}
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "FLORIANÓPOLIS" && ($cqi_lte[$i]->uf == "SC")){
										echo "
											<td>".$cqi_lte[$i]->cell_downlink_avg_thp."</td>
										";
									}
								}
							?>						
						</tr>
						<tr>
							<td><b>RECIFE</b></td>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "RECIFE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab)) >= 99?$bggood:$bgbad)."'>".(sprintf('%0.2f',($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/100)."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "RECIFE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$cqi_lte[$i]->service_drop) >= 99?$bggood:$bgbad)."'>".$cqi_lte[$i]->service_drop."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "RECIFE"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$cqi_lte[$i]->availability) >= 99?$bggood:$bgbad)."'>".$cqi_lte[$i]->availability."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "RECIFE"){
										if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 98.5 && (sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 97.5 && (sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";	
										}
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "RECIFE"){
										echo "
											<td>".$cqi_lte[$i]->cell_downlink_avg_thp."</td>
										";
									}
								}
							?>							
						</tr>
						<tr>
							<td><b>SALVADOR</b></td>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "SALVADOR"){
										echo "
											<td style='color: ".(sprintf('%0.2f',($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab)) >= 99?$bggood:$bgbad)."'>".(sprintf('%0.2f',($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/100)."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "SALVADOR"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$cqi_lte[$i]->service_drop) >= 99?$bggood:$bgbad)."'>".$cqi_lte[$i]->service_drop."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "SALVADOR"){
										echo "
											<td style='color: ".(sprintf('%0.2f',$cqi_lte[$i]->availability) >= 99?$bggood:$bgbad)."'>".(sprintf('%0.2f',($cqi_lte[$i]->availability)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "SALVADOR"){
										if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 98.5){
										echo "
										<td bgcolor='#327cf2'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 98.5 && (sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 97){
										echo "
										<td bgcolor='green'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 97.5 && (sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) >= 95){	
										echo "
										<td bgcolor='yellow'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";							
										}else if((sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000))) < 95){
										echo "
										<td bgcolor='red'>".(sprintf('%0.2f',((($cqi_lte[$i]->availability) * ($cqi_lte[$i]->service_drop) * ($cqi_lte[$i]->rrc_service) * ($cqi_lte[$i]->e_rab))/1000000)))."</td>
										";	
										}
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($cqi_lte); $i++) {
									if($cqi_lte[$i]->node == "SALVADOR"){
										echo "
											<td>".$cqi_lte[$i]->cell_downlink_avg_thp."</td>
										";
									}
								}
							?>							
						</tr>				
						
					</tbody>
				</table>
			</div>

			<div id="tabela4">
				<table id="table_id4" class="cell-border compact hover" border="1 solid black" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th >Cidades</th>
							<th >#Total</th>			
							<th >#Out</th>
							<th >% Cell Críticas</th>
						</tr>					
					</thead>
					<tbody>
						<tr>
							<td><b>BELO HORIZONTE</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "BELO HORIZONTE") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_cs[$i]->premiums) + ($vw_cqi_cs[$i]->bons) + ($vw_cqi_cs[$i]->ruins) + ($vw_cqi_cs[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "BELO HORIZONTE") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_cs[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "BELO HORIZONTE") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_cs[$i]->criticos)/(($vw_cqi_cs[$i]->premiums) + ($vw_cqi_cs[$i]->bons) + ($vw_cqi_cs[$i]->ruins) + ($vw_cqi_cs[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>BRASÍLIA</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "BRASÍLIA") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_cs[$i]->premiums) + ($vw_cqi_cs[$i]->bons) + ($vw_cqi_cs[$i]->ruins) + ($vw_cqi_cs[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "BRASÍLIA") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_cs[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "BRASÍLIA") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_cs[$i]->criticos)/(($vw_cqi_cs[$i]->premiums) + ($vw_cqi_cs[$i]->bons) + ($vw_cqi_cs[$i]->ruins) + ($vw_cqi_cs[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>CURITIBA</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "CURITIBA") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_cs[$i]->premiums) + ($vw_cqi_cs[$i]->bons) + ($vw_cqi_cs[$i]->ruins) + ($vw_cqi_cs[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "CURITIBA") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_cs[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "CURITIBA") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_cs[$i]->criticos)/(($vw_cqi_cs[$i]->premiums) + ($vw_cqi_cs[$i]->bons) + ($vw_cqi_cs[$i]->ruins) + ($vw_cqi_cs[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>FLORIANÓPOLIS</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "FLORIANÓPOLIS") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_cs[$i]->premiums) + ($vw_cqi_cs[$i]->bons) + ($vw_cqi_cs[$i]->ruins) + ($vw_cqi_cs[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "FLORIANÓPOLIS") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_cs[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "FLORIANÓPOLIS") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_cs[$i]->criticos)/(($vw_cqi_cs[$i]->premiums) + ($vw_cqi_cs[$i]->bons) + ($vw_cqi_cs[$i]->ruins) + ($vw_cqi_cs[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>RECIFE</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "RECIFE") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_cs[$i]->premiums) + ($vw_cqi_cs[$i]->bons) + ($vw_cqi_cs[$i]->ruins) + ($vw_cqi_cs[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "RECIFE") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_cs[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "RECIFE") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_cs[$i]->criticos)/(($vw_cqi_cs[$i]->premiums) + ($vw_cqi_cs[$i]->bons) + ($vw_cqi_cs[$i]->ruins) + ($vw_cqi_cs[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>SALVADOR</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "SALVADOR") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_cs[$i]->premiums) + ($vw_cqi_cs[$i]->bons) + ($vw_cqi_cs[$i]->ruins) + ($vw_cqi_cs[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "SALVADOR") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_cs[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_cs); $i++) {
									if(($vw_cqi_cs[$i]->cidade == "SALVADOR") && ($vw_cqi_cs[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_cs[$i]->criticos)/(($vw_cqi_cs[$i]->premiums) + ($vw_cqi_cs[$i]->bons) + ($vw_cqi_cs[$i]->ruins) + ($vw_cqi_cs[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>					
					</tbody>
				</table>
			</div>	

			<div id="tabela5">
				<table id="table_id5" class="cell-border compact hover" border="1 solid black" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th >Cidades</th>
							<th >#Total</th>			
							<th >#Out</th>
							<th >% Cell Críticas</th>
						</tr>					
					</thead>
					<tbody>
						<tr>
							<td><b>BELO HORIZONTE</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "BELO HORIZONTE") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_hs[$i]->premiums) + ($vw_cqi_hs[$i]->bons) + ($vw_cqi_hs[$i]->ruins) + ($vw_cqi_hs[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "BELO HORIZONTE") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_hs[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "BELO HORIZONTE") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_hs[$i]->criticos)/(($vw_cqi_hs[$i]->premiums) + ($vw_cqi_hs[$i]->bons) + ($vw_cqi_hs[$i]->ruins) + ($vw_cqi_hs[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>BRASÍLIA</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "BRASÍLIA") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_hs[$i]->premiums) + ($vw_cqi_hs[$i]->bons) + ($vw_cqi_hs[$i]->ruins) + ($vw_cqi_hs[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "BRASÍLIA") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_hs[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "BRASÍLIA") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_hs[$i]->criticos)/(($vw_cqi_hs[$i]->premiums) + ($vw_cqi_hs[$i]->bons) + ($vw_cqi_hs[$i]->ruins) + ($vw_cqi_hs[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>CURITIBA</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "CURITIBA") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_hs[$i]->premiums) + ($vw_cqi_hs[$i]->bons) + ($vw_cqi_hs[$i]->ruins) + ($vw_cqi_hs[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "CURITIBA") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_hs[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "CURITIBA") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_hs[$i]->criticos)/(($vw_cqi_hs[$i]->premiums) + ($vw_cqi_hs[$i]->bons) + ($vw_cqi_hs[$i]->ruins) + ($vw_cqi_hs[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>FLORIANÓPOLIS</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "FLORIANÓPOLIS") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_hs[$i]->premiums) + ($vw_cqi_hs[$i]->bons) + ($vw_cqi_hs[$i]->ruins) + ($vw_cqi_hs[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "FLORIANÓPOLIS") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_hs[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "FLORIANÓPOLIS") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_hs[$i]->criticos)/(($vw_cqi_hs[$i]->premiums) + ($vw_cqi_hs[$i]->bons) + ($vw_cqi_hs[$i]->ruins) + ($vw_cqi_hs[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>RECIFE</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "RECIFE") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_hs[$i]->premiums) + ($vw_cqi_hs[$i]->bons) + ($vw_cqi_hs[$i]->ruins) + ($vw_cqi_hs[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "RECIFE") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_hs[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "RECIFE") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_hs[$i]->criticos)/(($vw_cqi_hs[$i]->premiums) + ($vw_cqi_hs[$i]->bons) + ($vw_cqi_hs[$i]->ruins) + ($vw_cqi_hs[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>SALVADOR</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "SALVADOR") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_hs[$i]->premiums) + ($vw_cqi_hs[$i]->bons) + ($vw_cqi_hs[$i]->ruins) + ($vw_cqi_hs[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "SALVADOR") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_hs[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_hs); $i++) {
									if(($vw_cqi_hs[$i]->cidade == "SALVADOR") && ($vw_cqi_hs[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_hs[$i]->criticos)/(($vw_cqi_hs[$i]->premiums) + ($vw_cqi_hs[$i]->bons) + ($vw_cqi_hs[$i]->ruins) + ($vw_cqi_hs[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>					
					</tbody>
				</table>
			</div>

			<div id="tabela6">
				<table id="table_id6" class="cell-border compact hover" border="1 solid black" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th >Cidades</th>
							<th >#Total</th>			
							<th >#Out</th>
							<th >% Cell Críticas</th>
						</tr>					
					</thead>
					<tbody>
						<tr>
							<td><b>BELO HORIZONTE</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 3106200) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_lte[$i]->premiums) + ($vw_cqi_lte[$i]->bons) + ($vw_cqi_lte[$i]->ruins) + ($vw_cqi_lte[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 3106200) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_lte[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 3106200) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_lte[$i]->criticos)/(($vw_cqi_lte[$i]->premiums) + ($vw_cqi_lte[$i]->bons) + ($vw_cqi_lte[$i]->ruins) + ($vw_cqi_lte[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>BRASÍLIA</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 5300108) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_lte[$i]->premiums) + ($vw_cqi_lte[$i]->bons) + ($vw_cqi_lte[$i]->ruins) + ($vw_cqi_lte[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 5300108) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_lte[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 5300108) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_lte[$i]->criticos)/(($vw_cqi_lte[$i]->premiums) + ($vw_cqi_lte[$i]->bons) + ($vw_cqi_lte[$i]->ruins) + ($vw_cqi_lte[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>CURITIBA</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 4106902) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_lte[$i]->premiums) + ($vw_cqi_lte[$i]->bons) + ($vw_cqi_lte[$i]->ruins) + ($vw_cqi_lte[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 4106902) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_lte[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 4106902) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_lte[$i]->criticos)/(($vw_cqi_lte[$i]->premiums) + ($vw_cqi_lte[$i]->bons) + ($vw_cqi_lte[$i]->ruins) + ($vw_cqi_lte[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>FLORIANÓPOLIS</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 4205407) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_lte[$i]->premiums) + ($vw_cqi_lte[$i]->bons) + ($vw_cqi_lte[$i]->ruins) + ($vw_cqi_lte[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 4205407) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_lte[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 4205407) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_lte[$i]->criticos)/(($vw_cqi_lte[$i]->premiums) + ($vw_cqi_lte[$i]->bons) + ($vw_cqi_lte[$i]->ruins) + ($vw_cqi_lte[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>RECIFE</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 2611606) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_lte[$i]->premiums) + ($vw_cqi_lte[$i]->bons) + ($vw_cqi_lte[$i]->ruins) + ($vw_cqi_lte[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 2611606) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_lte[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 2611606) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_lte[$i]->criticos)/(($vw_cqi_lte[$i]->premiums) + ($vw_cqi_lte[$i]->bons) + ($vw_cqi_lte[$i]->ruins) + ($vw_cqi_lte[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>
						<tr>
							<td><b>SALVADOR</b></td>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 2927408) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td>".(sprintf('%0.0f',($vw_cqi_lte[$i]->premiums) + ($vw_cqi_lte[$i]->bons) + ($vw_cqi_lte[$i]->ruins) + ($vw_cqi_lte[$i]->criticos)))."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 2927408) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td>".$vw_cqi_lte[$i]->criticos."</td>
										";
									}
								}
							?>
							<?php	
								for ($i = 0; $i < sizeof($vw_cqi_lte); $i++) {
									if(($vw_cqi_lte[$i]->ibge == 2927408) && ($vw_cqi_lte[$i]->week == "".$w1."")){
										echo "
											<td bgcolor='#fff714'>".(sprintf('%0.2f',(($vw_cqi_lte[$i]->criticos)/(($vw_cqi_lte[$i]->premiums) + ($vw_cqi_lte[$i]->bons) + ($vw_cqi_lte[$i]->ruins) + ($vw_cqi_lte[$i]->criticos))) * 100))."</td>
										";
									}
								}
							?>					
						</tr>					
					</tbody>
				</table>
			</div>

			<div id="tabela7">
				<table id="table_id7" class="cell-border compact hover" border="1 solid black" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th >Region</th>
							<th >W<?php echo $w4;  ?></th>
							<th >W<?php echo $w3;  ?></th>
							<th >W<?php echo $w2;  ?></th>
							<th >W<?php echo $w1;  ?></th>						
						</tr>					
					</thead>
					<tbody>
						<tr>
						<td><b>BASE</b></td>
						<?php
							foreach($nqi_impact_table as $row){
								if($row->regional == "BASE"){
									echo "				
										<td><b>".$row->efc."%</b></td>
									";
								}
							}
						?>
						</tr>
						<tr>
						<td><b>CO</b></td>
						<?php
							foreach($nqi_impact_table as $row){
								if($row->regional == "CO"){
									echo "				
										<td><b>".$row->efc."%</b></td>
									";
								}
							}
						?>
						</tr>
						<tr>
						<td><b>MG</b></td>
						<?php
							foreach($nqi_impact_table as $row){
								if($row->regional == "MG"){
									echo "				
										<td><b>".$row->efc."%</b></td>
									";
								}
							}
						?>
						</tr>
						<tr>
						<td><b>NE</b></td>
						<?php
							foreach($nqi_impact_table as $row){
								if($row->regional == "NE"){
									echo "				
										<td><b>".$row->efc."%</b></td>
									";
								}
							}
						?>
						</tr>
						<tr>
						<td><b>PRSC</b></td>
						<?php
							foreach($nqi_impact_table as $row){
								if($row->regional == "PRSC"){
									echo "				
										<td><b>".$row->efc."%</b></td>
									";
								}
							}
						?>
						</tr>					
					</tbody>
				</table>
			</div>		
			
			<img src='' alt='' id='img' />
			<img src='' alt='' id='img2' style='width:500px' />
	</body>
</html>		
		
<script>

	var pptx = new PptxGenJS();
	
	var canvas_bh = "";
	var newCanvas = "";
	
	var numbers_slide = 19;
	var current_slide = 1;
	
	var posX = 0;
	var posY = 0;
	var xWidth = 1;
	var yHeight = 1;
	
	var grafico = [];
		
	// Add a slide, then add objects
	var slide = new Array(numbers_slide);
	for (i = 1; i < slide.length; i++){
		slide[i]  = pptx.addNewSlide();
	}
	
	order = new Array(8);
	order[0] = {name: 'NORMAL', y: <?php echo $cidades_cs[0]->normal_no +  $cidades_cs[1]->normal_no +  $cidades_cs[2]->normal_no +  $cidades_cs[3]->normal_no +  $cidades_cs[4]->normal_no +  $cidades_cs[5]->normal_no?> , color: '#00B050'};
	order[1] = {name: 'ANALYSIS', y: <?php echo $cidades_cs[0]->analysis_no + $cidades_cs[1]->analysis_no + $cidades_cs[2]->analysis_no + $cidades_cs[3]->analysis_no + $cidades_cs[4]->analysis_no + $cidades_cs[5]->analysis_no ?>, color: '#8F8F8F'};
	order[2] = {name: 'OMR', y: <?php echo $cidades_cs[0]->omr_no + $cidades_cs[1]->omr_no + $cidades_cs[2]->omr_no  + $cidades_cs[3]->omr_no  + $cidades_cs[4]->omr_no  + $cidades_cs[5]->omr_no  ?>, color: '#7A30A0'};
	order[3] = {name: 'TX/OMR', y: <?php echo $cidades_cs[0]->tx_omr_no + $cidades_cs[1]->tx_omr_no + $cidades_cs[2]->tx_omr_no + $cidades_cs[3]->tx_omr_no + $cidades_cs[4]->tx_omr_no + $cidades_cs[5]->tx_omr_no  ?>, color: '#F4E1E1'};
	order[4] = {name: 'OTM', y: <?php echo $cidades_cs[0]->otm_no + $cidades_cs[1]->otm_no + $cidades_cs[2]->otm_no + $cidades_cs[3]->otm_no + $cidades_cs[4]->otm_no + $cidades_cs[5]->otm_no  ?>, color: '#0070C0'};
	order[5] = {name: 'CAP', y: <?php echo $cidades_cs[0]->cap_no + $cidades_cs[1]->cap_no + $cidades_cs[2]->cap_no + $cidades_cs[3]->cap_no + $cidades_cs[4]->cap_no + $cidades_cs[5]->cap_no  ?>, color: '#FFC000'};
	order[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_cs[0]->rf_no + $cidades_cs[1]->rf_no + $cidades_cs[2]->rf_no + $cidades_cs[3]->rf_no + $cidades_cs[4]->rf_no + $cidades_cs[5]->rf_no  ?>, color: '#C00000'};
	order[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_cs[0]->imp_no + $cidades_cs[1]->imp_no + $cidades_cs[2]->imp_no + $cidades_cs[3]->imp_no + $cidades_cs[4]->imp_no + $cidades_cs[5]->imp_no  ?>, color: '#002060'};

	order_hs = new Array(8);
	order_hs[0] = {name: 'NORMAL', y: <?php echo $cidades_hs[0]->normal_no +  $cidades_hs[1]->normal_no +  $cidades_hs[2]->normal_no +  $cidades_hs[3]->normal_no +  $cidades_hs[4]->normal_no +  $cidades_hs[5]->normal_no?> , color: '#00B050'};
	order_hs[1] = {name: 'ANALYSIS', y: <?php echo $cidades_hs[0]->analysis_no + $cidades_hs[1]->analysis_no + $cidades_hs[2]->analysis_no + $cidades_hs[3]->analysis_no + $cidades_hs[4]->analysis_no + $cidades_hs[5]->analysis_no ?>, color: '#8F8F8F'};
	order_hs[2] = {name: 'OMR', y: <?php echo $cidades_hs[0]->omr_no + $cidades_hs[1]->omr_no + $cidades_hs[2]->omr_no  + $cidades_hs[3]->omr_no  + $cidades_hs[4]->omr_no  + $cidades_hs[5]->omr_no  ?>, color: '#7A30A0'};
	order_hs[3] = {name: 'TX/OMR', y: <?php echo $cidades_hs[0]->tx_omr_no + $cidades_hs[1]->tx_omr_no + $cidades_hs[2]->tx_omr_no + $cidades_hs[3]->tx_omr_no + $cidades_hs[4]->tx_omr_no + $cidades_hs[5]->tx_omr_no  ?>, color: '#F4E1E1'};
	order_hs[4] = {name: 'OTM', y: <?php echo $cidades_hs[0]->otm_no + $cidades_hs[1]->otm_no + $cidades_hs[2]->otm_no + $cidades_hs[3]->otm_no + $cidades_hs[4]->otm_no + $cidades_hs[5]->otm_no  ?>, color: '#0070C0'};
	order_hs[5] = {name: 'CAP', y: <?php echo $cidades_hs[0]->cap_no + $cidades_hs[1]->cap_no + $cidades_hs[2]->cap_no + $cidades_hs[3]->cap_no + $cidades_hs[4]->cap_no + $cidades_hs[5]->cap_no  ?>, color: '#FFC000'};
	order_hs[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_hs[0]->rf_no + $cidades_hs[1]->rf_no + $cidades_hs[2]->rf_no + $cidades_hs[3]->rf_no + $cidades_hs[4]->rf_no + $cidades_hs[5]->rf_no  ?>, color: '#C00000'};
	order_hs[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_hs[0]->imp_no + $cidades_hs[1]->imp_no + $cidades_hs[2]->imp_no + $cidades_hs[3]->imp_no + $cidades_hs[4]->imp_no + $cidades_hs[5]->imp_no  ?>, color: '#002060'};
	
	order_lte = new Array(6);
	order_lte[0] = {name: 'NORMAL', y: 
	<?php
	$soma = 0;
	foreach($cidades_lte as $row){
		$soma = $row->normal_no + $soma;
	}
	echo $soma;
	?> , color: '#00B050'};
	order_lte[1] = {name: 'ANALYSIS', y: 
	<?php
	$soma = 0;
	foreach($cidades_lte as $row){
		$soma = $row->analysis_no + $soma;
	}
	echo $soma;
	?>, color: '#8F8F8F'};
	order_lte[2] = {name: 'OMR', y:
	<?php
	$soma = 0;
	foreach($cidades_lte as $row){
		$soma = $row->omr_no + $soma;
	}
	echo $soma;
	?>, color: '#7A30A0'};
	order_lte[3] = {name: 'TX/OMR', y: 
	<?php
	$soma = 0;
	foreach($cidades_lte as $row){
		$soma = $row->tx_omr_no + $soma;
	}
	echo $soma;
	?>, color: '#F4E1E1'};
	order_lte[4] = {name: 'OTM', y: 
	<?php
	$soma = 0;
	foreach($cidades_lte as $row){
		$soma = $row->otm_no + $soma;
	}
	echo $soma;
	?>, color: '#0070C0'};
	order_lte[5] = {name: 'IMP'+'<br>', y: 
	<?php
	$soma = 0;
	foreach($cidades_lte as $row){
		$soma = $row->imp_no + $soma;
	}
	echo $soma;
	?>, color: '#002060'};
	
	//////////////////////////////////////////////////// PIZZA DAS CIDADES ////////////////////////////////////////
	
	cidades_cs_bh = new Array(8);
	cidades_cs_bh[0] = {name: 'NORMAL', y: <?php echo $cidades_cs[0]->normal_no  ?> , color: '#00B050'};
	cidades_cs_bh[1] = {name: 'ANALYSIS', y: <?php echo $cidades_cs[0]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_cs_bh[2] = {name: 'OMR', y: <?php echo $cidades_cs[0]->omr_no  ?>, color: '#7A30A0'};
	cidades_cs_bh[3] = {name: 'TX/OMR', y: <?php echo $cidades_cs[0]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_cs_bh[4] = {name: 'OTM', y: <?php echo $cidades_cs[0]->otm_no  ?>, color: '#0070C0'};
	cidades_cs_bh[5] = {name: 'CAP', y: <?php echo $cidades_cs[0]->cap_no  ?>, color: '#FFC000'};
	cidades_cs_bh[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_cs[0]->rf_no  ?>, color: '#C00000'};
	cidades_cs_bh[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_cs[0]->imp_no  ?>, color: '#002060'};

	cidades_cs_br = new Array(8);
	cidades_cs_br[0] = {name: 'NORMAL', y: <?php echo $cidades_cs[1]->normal_no  ?> , color: '#00B050'};
	cidades_cs_br[1] = {name: 'ANALYSIS', y: <?php echo $cidades_cs[1]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_cs_br[2] = {name: 'OMR', y: <?php echo $cidades_cs[1]->omr_no  ?>, color: '#7A30A0'};
	cidades_cs_br[3] = {name: 'TX/OMR', y: <?php echo $cidades_cs[1]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_cs_br[4] = {name: 'OTM', y: <?php echo $cidades_cs[1]->otm_no  ?>, color: '#0070C0'};
	cidades_cs_br[5] = {name: 'CAP', y: <?php echo $cidades_cs[1]->cap_no  ?>, color: '#FFC000'};
	cidades_cs_br[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_cs[1]->rf_no  ?>, color: '#C00000'};
	cidades_cs_br[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_cs[1]->imp_no  ?>, color: '#002060'};

	cidades_cs_cu = new Array(8);
	cidades_cs_cu[0] = {name: 'NORMAL', y: <?php echo $cidades_cs[2]->normal_no  ?> , color: '#00B050'};
	cidades_cs_cu[1] = {name: 'ANALYSIS', y: <?php echo $cidades_cs[2]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_cs_cu[2] = {name: 'OMR', y: <?php echo $cidades_cs[2]->omr_no  ?>, color: '#7A30A0'};
	cidades_cs_cu[3] = {name: 'TX/OMR', y: <?php echo $cidades_cs[2]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_cs_cu[4] = {name: 'OTM', y: <?php echo $cidades_cs[2]->otm_no  ?>, color: '#0070C0'};
	cidades_cs_cu[5] = {name: 'CAP', y: <?php echo $cidades_cs[2]->cap_no  ?>, color: '#FFC000'};
	cidades_cs_cu[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_cs[2]->rf_no  ?>, color: '#C00000'};
	cidades_cs_cu[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_cs[2]->imp_no  ?>, color: '#002060'};

	cidades_cs_fl = new Array(8);
	cidades_cs_fl[0] = {name: 'NORMAL', y: <?php echo $cidades_cs[3]->normal_no  ?> , color: '#00B050'};
	cidades_cs_fl[1] = {name: 'ANALYSIS', y: <?php echo $cidades_cs[3]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_cs_fl[2] = {name: 'OMR', y: <?php echo $cidades_cs[3]->omr_no  ?>, color: '#7A30A0'};
	cidades_cs_fl[3] = {name: 'TX/OMR', y: <?php echo $cidades_cs[3]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_cs_fl[4] = {name: 'OTM', y: <?php echo $cidades_cs[3]->otm_no  ?>, color: '#0070C0'};
	cidades_cs_fl[5] = {name: 'CAP', y: <?php echo $cidades_cs[3]->cap_no  ?>, color: '#FFC000'};
	cidades_cs_fl[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_cs[3]->rf_no  ?>, color: '#C00000'};
	cidades_cs_fl[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_cs[3]->imp_no  ?>, color: '#002060'};

	cidades_cs_re = new Array(8);
	cidades_cs_re[0] = {name: 'NORMAL', y: <?php echo $cidades_cs[4]->normal_no  ?> , color: '#00B050'};
	cidades_cs_re[1] = {name: 'ANALYSIS', y: <?php echo $cidades_cs[4]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_cs_re[2] = {name: 'OMR', y: <?php echo $cidades_cs[4]->omr_no  ?>, color: '#7A30A0'};
	cidades_cs_re[3] = {name: 'TX/OMR', y: <?php echo $cidades_cs[4]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_cs_re[4] = {name: 'OTM', y: <?php echo $cidades_cs[4]->otm_no  ?>, color: '#0070C0'};
	cidades_cs_re[5] = {name: 'CAP', y: <?php echo $cidades_cs[4]->cap_no  ?>, color: '#FFC000'};
	cidades_cs_re[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_cs[4]->rf_no  ?>, color: '#C00000'};
	cidades_cs_re[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_cs[4]->imp_no  ?>, color: '#002060'};

	cidades_cs_sa = new Array(8);
	cidades_cs_sa[0] = {name: 'NORMAL', y: <?php echo $cidades_cs[5]->normal_no  ?> , color: '#00B050'};
	cidades_cs_sa[1] = {name: 'ANALYSIS', y: <?php echo $cidades_cs[5]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_cs_sa[2] = {name: 'OMR', y: <?php echo $cidades_cs[5]->omr_no  ?>, color: '#7A30A0'};
	cidades_cs_sa[3] = {name: 'TX/OMR', y: <?php echo $cidades_cs[5]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_cs_sa[4] = {name: 'OTM', y: <?php echo $cidades_cs[5]->otm_no  ?>, color: '#0070C0'};
	cidades_cs_sa[5] = {name: 'CAP', y: <?php echo $cidades_cs[5]->cap_no  ?>, color: '#FFC000'};
	cidades_cs_sa[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_cs[5]->rf_no  ?>, color: '#C00000'};
	cidades_cs_sa[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_cs[5]->imp_no  ?>, color: '#002060'};	
	
	
	cidades_hs_bh = new Array(8);
	cidades_hs_bh[0] = {name: 'NORMAL', y: <?php echo $cidades_hs[0]->normal_no  ?> , color: '#00B050'};
	cidades_hs_bh[1] = {name: 'ANALYSIS', y: <?php echo $cidades_hs[0]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_hs_bh[2] = {name: 'OMR', y: <?php echo $cidades_hs[0]->omr_no  ?>, color: '#7A30A0'};
	cidades_hs_bh[3] = {name: 'TX/OMR', y: <?php echo $cidades_hs[0]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_hs_bh[4] = {name: 'OTM', y: <?php echo $cidades_hs[0]->otm_no  ?>, color: '#0070C0'};
	cidades_hs_bh[5] = {name: 'CAP', y: <?php echo $cidades_hs[0]->cap_no  ?>, color: '#FFC000'};
	cidades_hs_bh[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_hs[0]->rf_no  ?>, color: '#C00000'};
	cidades_hs_bh[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_hs[0]->imp_no  ?>, color: '#002060'};

	cidades_hs_br = new Array(8);
	cidades_hs_br[0] = {name: 'NORMAL', y: <?php echo $cidades_hs[1]->normal_no  ?> , color: '#00B050'};
	cidades_hs_br[1] = {name: 'ANALYSIS', y: <?php echo $cidades_hs[1]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_hs_br[2] = {name: 'OMR', y: <?php echo $cidades_hs[1]->omr_no  ?>, color: '#7A30A0'};
	cidades_hs_br[3] = {name: 'TX/OMR', y: <?php echo $cidades_hs[1]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_hs_br[4] = {name: 'OTM', y: <?php echo $cidades_hs[1]->otm_no  ?>, color: '#0070C0'};
	cidades_hs_br[5] = {name: 'CAP', y: <?php echo $cidades_hs[1]->cap_no  ?>, color: '#FFC000'};
	cidades_hs_br[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_hs[1]->rf_no  ?>, color: '#C00000'};
	cidades_hs_br[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_hs[1]->imp_no  ?>, color: '#002060'};

	cidades_hs_cu = new Array(8);
	cidades_hs_cu[0] = {name: 'NORMAL', y: <?php echo $cidades_hs[2]->normal_no  ?> , color: '#00B050'};
	cidades_hs_cu[1] = {name: 'ANALYSIS', y: <?php echo $cidades_hs[2]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_hs_cu[2] = {name: 'OMR', y: <?php echo $cidades_hs[2]->omr_no  ?>, color: '#7A30A0'};
	cidades_hs_cu[3] = {name: 'TX/OMR', y: <?php echo $cidades_hs[2]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_hs_cu[4] = {name: 'OTM', y: <?php echo $cidades_hs[2]->otm_no  ?>, color: '#0070C0'};
	cidades_hs_cu[5] = {name: 'CAP', y: <?php echo $cidades_hs[2]->cap_no  ?>, color: '#FFC000'};
	cidades_hs_cu[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_hs[2]->rf_no  ?>, color: '#C00000'};
	cidades_hs_cu[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_hs[2]->imp_no  ?>, color: '#002060'};

	cidades_hs_fl = new Array(8);
	cidades_hs_fl[0] = {name: 'NORMAL', y: <?php echo $cidades_hs[3]->normal_no  ?> , color: '#00B050'};
	cidades_hs_fl[1] = {name: 'ANALYSIS', y: <?php echo $cidades_hs[3]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_hs_fl[2] = {name: 'OMR', y: <?php echo $cidades_hs[3]->omr_no  ?>, color: '#7A30A0'};
	cidades_hs_fl[3] = {name: 'TX/OMR', y: <?php echo $cidades_hs[3]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_hs_fl[4] = {name: 'OTM', y: <?php echo $cidades_hs[3]->otm_no  ?>, color: '#0070C0'};
	cidades_hs_fl[5] = {name: 'CAP', y: <?php echo $cidades_hs[3]->cap_no  ?>, color: '#FFC000'};
	cidades_hs_fl[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_hs[3]->rf_no  ?>, color: '#C00000'};
	cidades_hs_fl[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_hs[3]->imp_no  ?>, color: '#002060'};

	cidades_hs_re = new Array(8);
	cidades_hs_re[0] = {name: 'NORMAL', y: <?php echo $cidades_hs[4]->normal_no  ?> , color: '#00B050'};
	cidades_hs_re[1] = {name: 'ANALYSIS', y: <?php echo $cidades_hs[4]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_hs_re[2] = {name: 'OMR', y: <?php echo $cidades_hs[4]->omr_no  ?>, color: '#7A30A0'};
	cidades_hs_re[3] = {name: 'TX/OMR', y: <?php echo $cidades_hs[4]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_hs_re[4] = {name: 'OTM', y: <?php echo $cidades_hs[4]->otm_no  ?>, color: '#0070C0'};
	cidades_hs_re[5] = {name: 'CAP', y: <?php echo $cidades_hs[4]->cap_no  ?>, color: '#FFC000'};
	cidades_hs_re[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_hs[4]->rf_no  ?>, color: '#C00000'};
	cidades_hs_re[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_hs[4]->imp_no  ?>, color: '#002060'};

	cidades_hs_sa = new Array(8);
	cidades_hs_sa[0] = {name: 'NORMAL', y: <?php echo $cidades_hs[5]->normal_no  ?> , color: '#00B050'};
	cidades_hs_sa[1] = {name: 'ANALYSIS', y: <?php echo $cidades_hs[5]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_hs_sa[2] = {name: 'OMR', y: <?php echo $cidades_hs[5]->omr_no  ?>, color: '#7A30A0'};
	cidades_hs_sa[3] = {name: 'TX/OMR', y: <?php echo $cidades_hs[5]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_hs_sa[4] = {name: 'OTM', y: <?php echo $cidades_hs[5]->otm_no  ?>, color: '#0070C0'};
	cidades_hs_sa[5] = {name: 'CAP', y: <?php echo $cidades_hs[5]->cap_no  ?>, color: '#FFC000'};
	cidades_hs_sa[6] = {name: 'PLAN/ENG RF', y: <?php echo $cidades_hs[5]->rf_no  ?>, color: '#C00000'};
	cidades_hs_sa[7] = {name: 'IMP'+'<br>', y:<?php echo $cidades_hs[5]->imp_no  ?>, color: '#002060'};


	cidades_lte_bh = new Array(6);
	cidades_lte_bh[0] = {name: 'NORMAL', y: <?php echo $cidades_lte[0]->normal_no  ?> , color: '#00B050'};
	cidades_lte_bh[1] = {name: 'ANALYSIS', y: <?php echo $cidades_lte[0]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_lte_bh[2] = {name: 'OMR', y: <?php echo $cidades_lte[0]->omr_no  ?>, color: '#7A30A0'};
	cidades_lte_bh[3] = {name: 'TX/OMR', y: <?php echo $cidades_lte[0]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_lte_bh[4] = {name: 'OTM', y: <?php echo $cidades_lte[0]->otm_no  ?>, color: '#0070C0'};
	cidades_lte_bh[5] = {name: 'IMP'+'<br>', y:<?php echo $cidades_lte[0]->imp_no  ?>, color: '#002060'};

	cidades_lte_br = new Array(6);
	cidades_lte_br[0] = {name: 'NORMAL', y: <?php echo $cidades_lte[1]->normal_no  ?> , color: '#00B050'};
	cidades_lte_br[1] = {name: 'ANALYSIS', y: <?php echo $cidades_lte[1]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_lte_br[2] = {name: 'OMR', y: <?php echo $cidades_lte[1]->omr_no  ?>, color: '#7A30A0'};
	cidades_lte_br[3] = {name: 'TX/OMR', y: <?php echo $cidades_lte[1]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_lte_br[4] = {name: 'OTM', y: <?php echo $cidades_lte[1]->otm_no  ?>, color: '#0070C0'};
	cidades_lte_br[5] = {name: 'IMP'+'<br>', y:<?php echo $cidades_lte[1]->imp_no  ?>, color: '#002060'};

	cidades_lte_cu = new Array(6);
	cidades_lte_cu[0] = {name: 'NORMAL', y: <?php echo $cidades_lte[2]->normal_no  ?> , color: '#00B050'};
	cidades_lte_cu[1] = {name: 'ANALYSIS', y: <?php echo $cidades_lte[2]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_lte_cu[2] = {name: 'OMR', y: <?php echo $cidades_lte[2]->omr_no  ?>, color: '#7A30A0'};
	cidades_lte_cu[3] = {name: 'TX/OMR', y: <?php echo $cidades_lte[2]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_lte_cu[4] = {name: 'OTM', y: <?php echo $cidades_lte[2]->otm_no  ?>, color: '#0070C0'};
	cidades_lte_cu[5] = {name: 'IMP'+'<br>', y:<?php echo $cidades_lte[2]->imp_no  ?>, color: '#002060'};

	cidades_lte_fl = new Array(6);
	cidades_lte_fl[0] = {name: 'NORMAL', y: <?php echo $cidades_lte[3]->normal_no  ?> , color: '#00B050'};
	cidades_lte_fl[1] = {name: 'ANALYSIS', y: <?php echo $cidades_lte[3]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_lte_fl[2] = {name: 'OMR', y: <?php echo $cidades_lte[3]->omr_no  ?>, color: '#7A30A0'};
	cidades_lte_fl[3] = {name: 'TX/OMR', y: <?php echo $cidades_lte[3]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_lte_fl[4] = {name: 'OTM', y: <?php echo $cidades_lte[3]->otm_no  ?>, color: '#0070C0'};
	cidades_lte_fl[5] = {name: 'IMP'+'<br>', y:<?php echo $cidades_lte[3]->imp_no  ?>, color: '#002060'};

	cidades_lte_re = new Array(6);
	cidades_lte_re[0] = {name: 'NORMAL', y: <?php echo $cidades_lte[4]->normal_no  ?> , color: '#00B050'};
	cidades_lte_re[1] = {name: 'ANALYSIS', y: <?php echo $cidades_lte[4]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_lte_re[2] = {name: 'OMR', y: <?php echo $cidades_lte[4]->omr_no  ?>, color: '#7A30A0'};
	cidades_lte_re[3] = {name: 'TX/OMR', y: <?php echo $cidades_lte[4]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_lte_re[4] = {name: 'OTM', y: <?php echo $cidades_lte[4]->otm_no  ?>, color: '#0070C0'};
	cidades_lte_re[5] = {name: 'IMP'+'<br>', y:<?php echo $cidades_lte[4]->imp_no  ?>, color: '#002060'};

	cidades_lte_sa = new Array(6);
	cidades_lte_sa[0] = {name: 'NORMAL', y: <?php echo $cidades_lte[5]->normal_no  ?> , color: '#00B050'};
	cidades_lte_sa[1] = {name: 'ANALYSIS', y: <?php echo $cidades_lte[5]->analysis_no  ?>, color: '#8F8F8F'};
	cidades_lte_sa[2] = {name: 'OMR', y: <?php echo $cidades_lte[5]->omr_no  ?>, color: '#7A30A0'};
	cidades_lte_sa[3] = {name: 'TX/OMR', y: <?php echo $cidades_lte[5]->tx_omr_no  ?>, color: '#F4E1E1'};
	cidades_lte_sa[4] = {name: 'OTM', y: <?php echo $cidades_lte[5]->otm_no  ?>, color: '#0070C0'};
	cidades_lte_sa[5] = {name: 'IMP'+'<br>', y:<?php echo $cidades_lte[5]->imp_no  ?>, color: '#002060'};		
	
	
		
	////////////////////////////////////////////// TRANSFORMANDO OS GRÁFICOS EM IMAGEM /////////////////////////////
	
	EXPORT_WIDTH = 1900;
	
	function save_chart(chart,posX,posY,xWidth,yHeight,current_slide) {
		var render_width = EXPORT_WIDTH;
		var render_height = render_width * chart.chartHeight / chart.chartWidth;

		// Get the cart's SVG code
		var svg = chart.getSVG({
			exporting: {
				sourceWidth: chart.chartWidth,
				sourceHeight: chart.chartHeight
			}
		});

		// Create a canvas
		var canvas = document.createElement('canvas');
		canvas.height = render_height;
		canvas.width = render_width;
		document.body.appendChild(canvas);

		// Create an image and draw the SVG onto the canvas
		var image = new Image;
		image.onload = function() {
			canvas.getContext('2d').drawImage(this, 0, 0, render_width, render_height);
			canvas_bh = canvas.toDataURL('image/png',1);
			newCanvas = canvas_bh.replace("data:image/png;base64,","");
			slide[current_slide].addImage({ data:'image/svg+xml;base64,'+newCanvas+'', x:posX, y:posY, w:xWidth, h:yHeight });
		};
		image.src = 'data:image/svg+xml;base64,' + window.btoa(svg);

	}
	
	function gerar_tabelas (table_id,posX,posY,xWidth,yHeight,current_slide){
		
		html2canvas($('#'+table_id+'').get(0)).then(function (canvas) {
		  var base64encodedstring = canvas.toDataURL("image/png", 1);
		  var newCanvas = base64encodedstring.replace("data:image/png;base64,","");
		  slide[current_slide].addImage({ data:'image/svg+xml;base64,'+newCanvas+'', x:posX, y:posY, w:xWidth, h:yHeight });

		  $('#img').attr('src', base64encodedstring);
		});	
		
	}
					
	///////////////////////////////////////////////// CRIANDO OS GRÁFICOS //////////////////////////////////////////
	
	
	//LTE USERS - BELO HORIZONTE
	grafico[0] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "User_Avg_700",
			color: "#42f47d",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							if($row->average_user_volume_700 == null){
								$row->average_user_volume_700 = "null";
								echo $row->average_user_volume_700.",";
							}else{	
							echo $row->average_user_volume_700.",";
							}
						}	
					}
				?>	
			]
			},{
			name: "User_Avg_1800",
			color: "#0424FF",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							if($row->average_user_volume_1800 == null){
								$row->average_user_volume_1800 = "null";
								echo $row->average_user_volume_1800.",";
							}else{	
							echo $row->average_user_volume_1800.",";
							}
						}	
					}
				?>	
			]
			},{
			name: "User_Avg_2600",
			color: "#f4cf29",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							if($row->average_user_volume_2600 == null){
								$row->average_user_volume_2600 = "null";
								echo $row->average_user_volume_2600.",";
							}else{	
							echo $row->average_user_volume_2600.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "LTE_Avg_User_Total",
			color: "#f7a918",
			type: "line",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							if($row->average_user_volume == null){
								$row->average_user_volume = "null";
								echo $row->average_user_volume.",";
							}else{	
							echo $row->average_user_volume.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//LTE DL THPT - BELO HORIZONTE
	grafico[1] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics2',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			},
			title: {
				enabled: true,
				text: '<b>MBPS</b>',
				style: {
					fontWeight: 'bold',
					color: 'red',
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "DL_THR_Avg_700",
			color: "#42f47d",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							if($row->cell_downlink_avg_thp_700 == null){
								$row->cell_downlink_avg_thp_700 = "null";
								echo $row->cell_downlink_avg_thp_700.",";
							}else{	
							echo $row->cell_downlink_avg_thp_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "DL_THR_Avg_1800",
			color: "#3093e5",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							if($row->cell_downlink_avg_thp_1800 == null){
								$row->cell_downlink_avg_thp_1800 = "null";
								echo $row->cell_downlink_avg_thp_1800.",";
							}else{	
							echo $row->cell_downlink_avg_thp_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "DL_THR_Avg_2600",
			color: "#aaa4a4",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							if($row->cell_downlink_avg_thp_2600 == null){
								$row->cell_downlink_avg_thp_2600 = "null";
								echo $row->cell_downlink_avg_thp_2600.",";
							}else{	
							echo $row->cell_downlink_avg_thp_2600.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//LTE PS DL TRAFFIC - BELO HORIZONTE
	grafico[2] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics3',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			},
			title: {
				enabled: true,
				text: '<b>TB</b>',
				style: {
					fontWeight: 'bold',
					color: 'red',
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "PS DL Traffic_700",
			color: "#42f47d",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							if($row->data_volume_700 == null){
								$row->data_volume_700 = "null";
								echo $row->data_volume_700.",";
							}else{	
							echo $row->data_volume_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_1800",
			color: "#3093e5",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							if($row->data_volume_1800 == null){
								$row->data_volume_1800 = "null";
								echo $row->data_volume_1800.",";
							}else{	
							echo $row->data_volume_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_2600",
			color: "#aaa4a4",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							if($row->data_volume_2600 == null){
								$row->data_volume_2600 = "null";
								echo $row->data_volume_2600.",";
							}else{	
							echo $row->data_volume_2600.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_Total",
			color: "#fc0000",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BELO HORIZONTE"){
							if($row->data_volume == null){
								$row->data_volume = "null";
								echo $row->data_volume.",";
							}else{	
							echo $row->data_volume.",";
							}
						}	
					}
				?>	
			]
		}]
	});				

	// LTE USERS - BRASÍLIA
	grafico[3] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics4',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "User_Avg_700",
			color: "#42f47d",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							if($row->average_user_volume_700 == null){
								$row->average_user_volume_700 = "null";
								echo $row->average_user_volume_700.",";
							}else{	
							echo $row->average_user_volume_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "User_Avg_1800",
			color: "#0424FF",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							if($row->average_user_volume_1800 == null){
								$row->average_user_volume_1800 = "null";
								echo $row->average_user_volume_1800.",";
							}else{	
							echo $row->average_user_volume_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "User_Avg_2600",
			color: "#f4cf29",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							if($row->average_user_volume_2600 == null){
								$row->average_user_volume_2600 = "null";
								echo $row->average_user_volume_2600.",";
							}else{	
							echo $row->average_user_volume_2600.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "LTE_Avg_User_Total",
			color: "#f7a918",
			type: "line",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							if($row->average_user_volume == null){
								$row->average_user_volume = "null";
								echo $row->average_user_volume.",";
							}else{	
							echo $row->average_user_volume.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//LTE DL THPT - BRASÍLIA
	grafico[4] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics5',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			},
			title: {
				enabled: true,
				text: '<b>MBPS</b>',
				style: {
					fontWeight: 'bold',
					color: 'red',
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "DL_THR_Avg_700",
			color: "#42f47d",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							if($row->cell_downlink_avg_thp_700 == null){
								$row->cell_downlink_avg_thp_700 = "null";
								echo $row->cell_downlink_avg_thp_700.",";
							}else{	
							echo $row->cell_downlink_avg_thp_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "DL_THR_Avg_1800",
			color: "#3093e5",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							if($row->cell_downlink_avg_thp_1800 == null){
								$row->cell_downlink_avg_thp_1800 = "null";
								echo $row->cell_downlink_avg_thp_1800.",";
							}else{	
							echo $row->cell_downlink_avg_thp_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "DL_THR_Avg_2600",
			color: "#aaa4a4",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							if($row->cell_downlink_avg_thp_2600 == null){
								$row->cell_downlink_avg_thp_2600 = "null";
								echo $row->cell_downlink_avg_thp_2600.",";
							}else{	
							echo $row->cell_downlink_avg_thp_2600.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//LTE PS DL TRAFFIC	- BRASÍLIA
	grafico[5] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics6',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			},
			title: {
				enabled: true,
				text: '<b>TB</b>',
				style: {
					fontWeight: 'bold',
					color: 'red',
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "PS DL Traffic_700",
			color: "#42f47d",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							if($row->data_volume_700 == null){
								$row->data_volume_700 = "null";
								echo $row->data_volume_700.",";
							}else{	
							echo $row->data_volume_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_1800",
			color: "#3093e5",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							if($row->data_volume_1800 == null){
								$row->data_volume_1800 = "null";
								echo $row->data_volume_1800.",";
							}else{	
							echo $row->data_volume_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_2600",
			color: "#aaa4a4",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							if($row->data_volume_2600 == null){
								$row->data_volume_2600 = "null";
								echo $row->data_volume_2600.",";
							}else{	
							echo $row->data_volume_2600.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_Total",
			color: "#fc0000",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "BRASÍLIA"){
							if($row->data_volume == null){
								$row->data_volume = "null";
								echo $row->data_volume.",";
							}else{	
							echo $row->data_volume.",";
							}
						}	
					}
				?>	
			]
		}]
	});				

	//LTE USERS - CURITIBA
	grafico[6] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics7',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "User_Avg_700",
			color: "#42f47d",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							if($row->average_user_volume_700 == null){
								$row->average_user_volume_700 = "null";
								echo $row->average_user_volume_700.",";
							}else{	
							echo $row->average_user_volume_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "User_Avg_1800",
			color: "#0424FF",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							if($row->average_user_volume_1800 == null){
								$row->average_user_volume_1800 = "null";
								echo $row->average_user_volume_1800.",";
							}else{	
							echo $row->average_user_volume_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "User_Avg_2600",
			color: "#f4cf29",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							if($row->average_user_volume_2600 == null){
								$row->average_user_volume_2600 = "null";
								echo $row->average_user_volume_2600.",";
							}else{	
							echo $row->average_user_volume_2600.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "LTE_Avg_User_Total",
			color: "#f7a918",
			type: "line",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							if($row->average_user_volume == null){
								$row->average_user_volume = "null";
								echo $row->average_user_volume.",";
							}else{	
							echo $row->average_user_volume.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//LTE DL THPT - CURITIBA	
	grafico[7] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics8',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			},
			title: {
				enabled: true,
				text: '<b>MBPS</b>',
				style: {
					fontWeight: 'bold',
					color: 'red',
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "DL_THR_Avg_700",
			color: "#42f47d",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							if($row->cell_downlink_avg_thp_700 == null){
								$row->cell_downlink_avg_thp_700 = "null";
								echo $row->cell_downlink_avg_thp_700.",";
							}else{	
							echo $row->cell_downlink_avg_thp_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "DL_THR_Avg_1800",
			color: "#3093e5",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							if($row->cell_downlink_avg_thp_1800 == null){
								$row->cell_downlink_avg_thp_1800 = "null";
								echo $row->cell_downlink_avg_thp_1800.",";
							}else{	
							echo $row->cell_downlink_avg_thp_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "DL_THR_Avg_2600",
			color: "#aaa4a4",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							if($row->cell_downlink_avg_thp_2600 == null){
								$row->cell_downlink_avg_thp_2600 = "null";
								echo $row->cell_downlink_avg_thp_2600.",";
							}else{	
							echo $row->cell_downlink_avg_thp_2600.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//LTE PS DL TRAFFIC - CURITIBA	
	grafico[8] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics9',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			},
			title: {
				enabled: true,
				text: '<b>TB</b>',
				style: {
					fontWeight: 'bold',
					color: 'red',
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "PS DL Traffic_700",
			color: "#42f47d",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							if($row->data_volume_700 == null){
								$row->data_volume_700 = "null";
								echo $row->data_volume_700.",";
							}else{	
							echo $row->data_volume_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_1800",
			color: "#3093e5",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							if($row->data_volume_1800 == null){
								$row->data_volume_1800 = "null";
								echo $row->data_volume_1800.",";
							}else{	
							echo $row->data_volume_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_2600",
			color: "#aaa4a4",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							if($row->data_volume_2600 == null){
								$row->data_volume_2600 = "null";
								echo $row->data_volume_2600.",";
							}else{	
							echo $row->data_volume_2600.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_Total",
			color: "#fc0000",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "CURITIBA"){
							if($row->data_volume == null){
								$row->data_volume = "null";
								echo $row->data_volume.",";
							}else{	
							echo $row->data_volume.",";
							}
						}	
					}
				?>	
			]
		}]
	});				

	//LTE USERS - FLORIANÓPOLIS
	grafico[9] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics10',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "User_Avg_700",
			color: "#42f47d",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							if($row->average_user_volume_700 == null){
								$row->average_user_volume_700 = "null";
								echo $row->average_user_volume_700.",";
							}else{	
							echo $row->average_user_volume_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "User_Avg_1800",
			color: "#0424FF",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							if($row->average_user_volume_1800 == null){
								$row->average_user_volume_1800 = "null";
								echo $row->average_user_volume_1800.",";
							}else{	
							echo $row->average_user_volume_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "User_Avg_2600",
			color: "#f4cf29",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							if($row->average_user_volume_2600 == null){
								$row->average_user_volume_2600 = "null";
								echo $row->average_user_volume_2600.",";
							}else{	
							echo $row->average_user_volume_2600.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "LTE_Avg_User_Total",
			color: "#f7a918",
			type: "line",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							if($row->average_user_volume == null){
								$row->average_user_volume = "null";
								echo $row->average_user_volume.",";
							}else{	
							echo $row->average_user_volume.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//LTE DL THPT - FLORIANÓPOLIS
	grafico[10] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics11',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			},
			title: {
				enabled: true,
				text: '<b>MBPS</b>',
				style: {
					fontWeight: 'bold',
					color: 'red',
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "DL_THR_Avg_700",
			color: "#42f47d",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							if($row->cell_downlink_avg_thp_700 == null){
								$row->cell_downlink_avg_thp_700 = "null";
								echo $row->cell_downlink_avg_thp_700.",";
							}else{	
							echo $row->cell_downlink_avg_thp_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "DL_THR_Avg_1800",
			color: "#3093e5",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							if($row->cell_downlink_avg_thp_1800 == null){
								$row->cell_downlink_avg_thp_1800 = "null";
								echo $row->cell_downlink_avg_thp_1800.",";
							}else{	
							echo $row->cell_downlink_avg_thp_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "DL_THR_Avg_2600",
			color: "#aaa4a4",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							if($row->cell_downlink_avg_thp_2600 == null){
								$row->cell_downlink_avg_thp_2600 = "null";
								echo $row->cell_downlink_avg_thp_2600.",";
							}else{	
							echo $row->cell_downlink_avg_thp_2600.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//LTE PS DL TRAFFIC - FLORIANÓPOLIS	
	grafico[11] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics12',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			},
			title: {
				enabled: true,
				text: '<b>TB</b>',
				style: {
					fontWeight: 'bold',
					color: 'red',
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "PS DL Traffic_700",
			color: "#42f47d",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							if($row->data_volume_700 == null){
								$row->data_volume_700 = "null";
								echo $row->data_volume_700.",";
							}else{	
							echo $row->data_volume_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_1800",
			color: "#3093e5",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							if($row->data_volume_1800 == null){
								$row->data_volume_1800 = "null";
								echo $row->data_volume_1800.",";
							}else{	
							echo $row->data_volume_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_2600",
			color: "#aaa4a4",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							if($row->data_volume_2600 == null){
								$row->data_volume_2600 = "null";
								echo $row->data_volume_2600.",";
							}else{	
							echo $row->data_volume_2600.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_Total",
			color: "#fc0000",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							if($row->data_volume == null){
								$row->data_volume = "null";
								echo $row->data_volume.",";
							}else{	
							echo $row->data_volume.",";
							}
						}	
					}
				?>	
			]
		}]
	});				

	//LTE USERS - RECIFE
	grafico[12] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics13',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "User_Avg_700",
			color: "#42f47d",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							if($row->average_user_volume_700 == null){
								$row->average_user_volume_700 = "null";
								echo $row->average_user_volume_700.",";
							}else{	
							echo $row->average_user_volume_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "User_Avg_1800",
			color: "#0424FF",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							if($row->average_user_volume_1800 == null){
								$row->average_user_volume_1800 = "null";
								echo $row->average_user_volume_1800.",";
							}else{	
							echo $row->average_user_volume_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "User_Avg_2600",
			color: "#f4cf29",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							if($row->average_user_volume_2600 == null){
								$row->average_user_volume_2600 = "null";
								echo $row->average_user_volume_2600.",";
							}else{	
							echo $row->average_user_volume_2600.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "LTE_Avg_User_Total",
			color: "#f7a918",
			type: "line",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							if($row->average_user_volume == null){
								$row->average_user_volume = "null";
								echo $row->average_user_volume.",";
							}else{	
							echo $row->average_user_volume.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//LTE DL THPT - RECIFE	
	grafico[13] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics14',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			},
			title: {
				enabled: true,
				text: '<b>MBPS</b>',
				style: {
					fontWeight: 'bold',
					color: 'red',
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "DL_THR_Avg_700",
			color: "#42f47d",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							if($row->cell_downlink_avg_thp_700 == null){
								$row->cell_downlink_avg_thp_700 = "null";
								echo $row->cell_downlink_avg_thp_700.",";
							}else{	
							echo $row->cell_downlink_avg_thp_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "DL_THR_Avg_1800",
			color: "#3093e5",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							if($row->cell_downlink_avg_thp_1800 == null){
								$row->cell_downlink_avg_thp_1800 = "null";
								echo $row->cell_downlink_avg_thp_1800.",";
							}else{	
							echo $row->cell_downlink_avg_thp_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "DL_THR_Avg_2600",
			color: "#aaa4a4",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							if($row->cell_downlink_avg_thp_2600 == null){
								$row->cell_downlink_avg_thp_2600 = "null";
								echo $row->cell_downlink_avg_thp_2600.",";
							}else{	
							echo $row->cell_downlink_avg_thp_2600.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//LTE PS DL TRAFFIC - RECIFE	
	grafico[14] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics15',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			},
			title: {
				enabled: true,
				text: '<b>TB</b>',
				style: {
					fontWeight: 'bold',
					color: 'red',
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "PS DL Traffic_700",
			color: "#42f47d",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							if($row->data_volume_700 == null){
								$row->data_volume_700 = "null";
								echo $row->data_volume_700.",";
							}else{	
							echo $row->data_volume_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_1800",
			color: "#3093e5",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							if($row->data_volume_1800 == null){
								$row->data_volume_1800 = "null";
								echo $row->data_volume_1800.",";
							}else{	
							echo $row->data_volume_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_2600",
			color: "#aaa4a4",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							if($row->data_volume_2600 == null){
								$row->data_volume_2600 = "null";
								echo $row->data_volume_2600.",";
							}else{	
							echo $row->data_volume_2600.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_Total",
			color: "#fc0000",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "RECIFE"){
							if($row->data_volume == null){
								$row->data_volume = "null";
								echo $row->data_volume.",";
							}else{	
							echo $row->data_volume.",";
							}
						}	
					}
				?>	
			]
		}]
	});				

	//LTE USERS - SALVADOR
	grafico[15] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics16',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "User_Avg_700",
			color: "#42f47d",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							if($row->average_user_volume_700 == null){
								$row->average_user_volume_700 = "null";
								echo $row->average_user_volume_700.",";
							}else{	
							echo $row->average_user_volume_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "User_Avg_1800",
			color: "#0424FF",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							if($row->average_user_volume_1800 == null){
								$row->average_user_volume_1800 = "null";
								echo $row->average_user_volume_1800.",";
							}else{	
							echo $row->average_user_volume_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "User_Avg_2600",
			color: "#f4cf29",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							if($row->average_user_volume_2600 == null){
								$row->average_user_volume_2600 = "null";
								echo $row->average_user_volume_2600.",";
							}else{	
							echo $row->average_user_volume_2600.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "LTE_Avg_User_Total",
			color: "#f7a918",
			type: "line",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							if($row->average_user_volume == null){
								$row->average_user_volume = "null";
								echo $row->average_user_volume.",";
							}else{	
							echo $row->average_user_volume.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//LTE DL THPT - SALVADOR	
	grafico[16] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics17',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			},
			title: {
				enabled: true,
				text: '<b>MBPS</b>',
				style: {
					fontWeight: 'bold',
					color: 'red',
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "DL_THR_Avg_700",
			color: "#42f47d",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							if($row->cell_downlink_avg_thp_700 == null){
								$row->cell_downlink_avg_thp_700 = "null";
								echo $row->cell_downlink_avg_thp_700.",";
							}else{	
							echo $row->cell_downlink_avg_thp_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "DL_THR_Avg_1800",
			color: "#3093e5",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							if($row->cell_downlink_avg_thp_1800 == null){
								$row->cell_downlink_avg_thp_1800 = "null";
								echo $row->cell_downlink_avg_thp_1800.",";
							}else{	
							echo $row->cell_downlink_avg_thp_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "DL_THR_Avg_2600",
			color: "#aaa4a4",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							if($row->cell_downlink_avg_thp_2600 == null){
								$row->cell_downlink_avg_thp_2600 = "null";
								echo $row->cell_downlink_avg_thp_2600.",";
							}else{	
							echo $row->cell_downlink_avg_thp_2600.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//LTE PS DL TRAFFIC - SALVADOR	
	grafico[17] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics18',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'25px'
				}
			},
			title: {
				enabled: true,
				text: '<b>TB</b>',
				style: {
					fontWeight: 'bold',
					color: 'red',
					fontSize:'25px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '25px',
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
			name: "PS DL Traffic_700",
			color: "#42f47d",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							if($row->data_volume_700 == null){
								$row->data_volume_700 = "null";
								echo $row->data_volume_700.",";
							}else{	
							echo $row->data_volume_700.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_1800",
			color: "#3093e5",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							if($row->data_volume_1800 == null){
								$row->data_volume_1800 = "null";
								echo $row->data_volume_1800.",";
							}else{	
							echo $row->data_volume_1800.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_2600",
			color: "#aaa4a4",
			type: "column",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							if($row->data_volume_2600 == null){
								$row->data_volume_2600 = "null";
								echo $row->data_volume_2600.",";
							}else{	
							echo $row->data_volume_2600.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "PS DL Traffic_Total",
			color: "#fc0000",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_dashboard as $row){
						if($row->node == "SALVADOR"){
							if($row->data_volume == null){
								$row->data_volume = "null";
								echo $row->data_volume.",";
							}else{	
							echo $row->data_volume.",";
							}
						}	
					}
				?>	
			]
		}]
	});				
	
	//LTE & UMTS Quality (NQI) - BELO HORIZONTE
	grafico[18] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics19',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_nqi as $row){
						if($row->cidade == "BELO HORIZONTE"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'20px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'20px'
				}
			},
			title: {
				enabled: false
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px',
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
			name: "NQI_LTE",
			color: "#3093e5",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_nqi as $row){
						if($row->cidade == "BELO HORIZONTE"){
							if($row->nqi == null){
								$row->nqi = "null";
								echo $row->nqi.",";
							}else{	
							echo $row->nqi.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "3G_NQI_HS",
			color: "#aaa4a4",
			type: "spline",
			data: [
				<?php
					foreach($umts_cities_nqi_hs as $row){
						if($row->node == "BELO HORIZONTE"){
							if($row->nqi_ps == null){
								$row->nqi_ps = "null";
								echo $row->nqi_ps.",";
							}else{	
							echo $row->nqi_ps.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//LTE & UMTS Quality (NQI) - BRASÍLIA
	grafico[19] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics20',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_nqi as $row){
						if($row->cidade == "BRASÍLIA"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'20px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'20px'
				}
			},
			title: {
				enabled: false
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px',
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
			name: "NQI_LTE",
			color: "#3093e5",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_nqi as $row){
						if($row->cidade == "BRASÍLIA"){
							if($row->nqi == null){
								$row->nqi = "null";
								echo $row->nqi.",";
							}else{	
							echo $row->nqi.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "3G_NQI_HS",
			color: "#aaa4a4",
			type: "spline",
			data: [
				<?php
					foreach($umts_cities_nqi_hs as $row){
						if($row->node == "BRASÍLIA"){
							if($row->nqi_ps == null){
								$row->nqi_ps = "null";
								echo $row->nqi_ps.",";
							}else{	
							echo $row->nqi_ps.",";
							}
						}	
					}
				?>	
			]
		}]
	});	

	//LTE & UMTS Quality (NQI) - CURITIBA
	grafico[20] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics21',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_nqi as $row){
						if($row->cidade == "CURITIBA"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'20px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'20px'
				}
			},
			title: {
				enabled: false
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px',
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
			name: "NQI_LTE",
			color: "#3093e5",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_nqi as $row){
						if($row->cidade == "CURITIBA"){
							if($row->nqi == null){
								$row->nqi = "null";
								echo $row->nqi.",";
							}else{	
							echo $row->nqi.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "3G_NQI_HS",
			color: "#aaa4a4",
			type: "spline",
			data: [
				<?php
					foreach($umts_cities_nqi_hs as $row){
						if($row->node == "CURITIBA"){
							if($row->nqi_ps == null){
								$row->nqi_ps = "null";
								echo $row->nqi_ps.",";
							}else{	
							echo $row->nqi_ps.",";
							}
						}	
					}
				?>	
			]
		}]
	});	

	//LTE & UMTS Quality (NQI) - FLORIANÓPOLIS
	grafico[21] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics22',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_nqi as $row){
						if($row->cidade == "FLORIANÓPOLIS" && $row->uf == "SC"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'20px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'20px'
				}
			},
			title: {
				enabled: false
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px',
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
			name: "NQI_LTE",
			color: "#3093e5",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_nqi as $row){
						if($row->cidade == "FLORIANÓPOLIS" && $row->uf == "SC"){
								if($row->nqi == null){
									$row->nqi = "null";
									echo $row->nqi.",";
								}else{	
								echo $row->nqi.",";
								}
						}	
					}
				?>	
			]
		},{
			name: "3G_NQI_HS",
			color: "#aaa4a4",
			type: "spline",
			data: [
				<?php
					foreach($umts_cities_nqi_hs as $row){
						if($row->node == "FLORIANÓPOLIS" && $row->uf == "SC"){
							if($row->nqi_ps == null){
								$row->nqi_ps = "null";
								echo $row->nqi_ps.",";
							}else{	
							echo $row->nqi_ps.",";
							}
						}	
					}
				?>	
			]
		}]
	});	

	//LTE & UMTS Quality (NQI) - RECIFE
	grafico[22] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics23',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_nqi as $row){
						if($row->cidade == "RECIFE"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'20px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'20px'
				}
			},
			title: {
				enabled: false
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px',
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
			name: "NQI_LTE",
			color: "#3093e5",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_nqi as $row){
						if($row->cidade == "RECIFE"){
							if($row->nqi == null){
								$row->nqi = "null";
								echo $row->nqi.",";
							}else{	
							echo $row->nqi.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "3G_NQI_HS",
			color: "#aaa4a4",
			type: "spline",
			data: [
				<?php
					foreach($umts_cities_nqi_hs as $row){
						if($row->node == "RECIFE"){
							if($row->nqi_ps == null){
								$row->nqi_ps = "null";
								echo $row->nqi_ps.",";
							}else{	
							echo $row->nqi_ps.",";
							}
						}	
					}
				?>	
			]
		}]
	});

	//LTE & UMTS Quality (NQI) - SALVADOR
	grafico[23] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics24',
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
			text: ""	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($lte_cities_nqi as $row){
						if($row->cidade == "SALVADOR"){
							echo "'".$row->year." - ".$row->week."',";
						}	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'20px'
				}
			}
		},
		yAxis:{
			labels: {
				style: {
					fontSize:'20px'
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px',
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
			name: "NQI_LTE",
			color: "#3093e5",
			type: "spline",
			data: [
				<?php
					foreach($lte_cities_nqi as $row){
						if($row->cidade == "SALVADOR"){
							if($row->nqi == null){
								$row->nqi = "null";
								echo $row->nqi.",";
							}else{	
							echo $row->nqi.",";
							}
						}	
					}
				?>	
			]
		},{
			name: "3G_NQI_HS",
			color: "#aaa4a4",
			type: "spline",
			data: [
				<?php
					foreach($umts_cities_nqi_hs as $row){
						if($row->node == "SALVADOR"){
							if($row->nqi_ps == null){
								$row->nqi_ps = "null";
								echo $row->nqi_ps.",";
							}else{	
							echo $row->nqi_ps.",";
							}
						}	
					}
				?>	
			]
		}]
	});
	
	//Cell Maping 3G - CQI CS (GRÁFICO DE COLUNA)
	grafico[24] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics25',
			type: "column",
			alignTicks:false,
			zoomType: 'xy',
			borderWidth: 1,
			borderColor: '#ddd',
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
		title: {
			x: -10,
			y: 20,
			text: '<b>Cell Maping 3G - CQI CS</b>',
			style: {
				fontSize: "20px"
			}	
		},
		yAxis:{
			title: {
				enabled: false
			},	
			labels: {
				style: {
					fontSize:'25px',
					fontWeight: "bold"
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px'
			}
		},	
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},				
		xAxis: {
			labels: { 
				x: -5,
				style: {
					fontSize:'15px',
					fontWeight: "bold"
				},
				groupedOptions: [{   
					style: {
						fontSize: "20px",
						backgroundColor: "#f7f7f7",
						color: "#000000"
					}
				}, {
					rotation: 0, 
					align: 'left'
				}],
					rotation: 0 
				},
			categories: [{
				name: "BELO HORIZONTE",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "BRASILIA",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "CURITIBA",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "FLORIANOPOLIS",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "RECIFE",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "SALVADOR",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}]
		},				
		plotOptions: {
		column: {
			stacking: 'normal',
			dataLabels: {
				enabled: true,
				crop: false,
				verticalAlign: 'top',
				y: -20,
				overflow: 'none',
				textOutline: false,
				color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
			}
		}
		},    
		series: [{
			name: 'Critico',
			color: "#e20d0d",
			data: [
			<?php
			foreach($vw_cqi_cs as $row){
			echo $row->criticos.",";
			}
			?>
			],
			dataLabels: {
				color: 'red',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		}, {
			name: 'Ruim',
			color: "#edde10",
			data: [
			<?php
			foreach($vw_cqi_cs as $row){
			echo $row->ruins.",";
			}
			?>
			],
			dataLabels: {
				enabled: false
			}
		}, {
			name: 'Bom',
			color: "#26d613",
			data: [
			<?php
			foreach($vw_cqi_cs as $row){
			echo $row->bons.",";
			}
			?>
			],
			dataLabels: {
				enabled: false
			}
		}, {
			name: 'Premium',
			color: "#0971e8",
			data: [
			<?php
			foreach($vw_cqi_cs as $row){
			echo $row->premiums.",";
			}
			?>
			],
			dataLabels: {
				verticalAlign: 'middle',
				rotation: 270,
				color: 'black',
				style: {
					fontSize: '20px',
					fontWeight: 'bold',
					textOutline: false
				}						
			}
		}]
	});	
	
	//Cell Maping 3G - CQI HS (GRÁFICO DE COLUNA)
	grafico[25] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics26',
			type: "column",
			alignTicks:false,
			zoomType: 'xy',
			borderWidth: 1,
			borderColor: '#ddd',
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
		title: {
			x: -10,
			y: 20,
			text: '<b>Cell Maping 3G - CQI HS</b>',
			style: {
				fontSize: "20px"
			}	
		},
		yAxis:{
			title: {
				enabled: false
			},	
			labels: {
				style: {
					fontSize:'25px',
					fontWeight: "bold"
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px'
			}
		},	
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},				
		xAxis: {
			labels: { 
				x: -5,
				style: {
					fontSize:'15px',
					fontWeight: "bold"
				},
				groupedOptions: [{   
					style: {
						fontSize: "20px",
						backgroundColor: "#f7f7f7",
						color: "#000000"
					}
				}, {
					rotation: 0, 
					align: 'left'
				}],
					rotation: 0 
				},
			categories: [{
				name: "BELO HORIZONTE",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "BRASILIA",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "CURITIBA",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "FLORIANOPOLIS",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "RECIFE",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "SALVADOR",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}]
		},				
		plotOptions: {
		column: {
			stacking: 'normal',
			dataLabels: {
				enabled: true,
				crop: false,
				verticalAlign: 'top',
				y: -20,
				overflow: 'none',
				color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
			}
		}
		},    
		series: [{
			name: 'Critico',
			color: "#e20d0d",
			data: [
			<?php
			foreach($vw_cqi_hs as $row){
			echo $row->criticos.",";
			}
			?>
			],
			dataLabels: {
				color: 'red',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		}, {
			name: 'Ruim',
			color: "#edde10",
			data: [
			<?php
			foreach($vw_cqi_hs as $row){
			echo $row->ruins.",";
			}
			?>
			],
			dataLabels: {
				enabled: false
			}
		}, {
			name: 'Bom',
			color: "#26d613",
			data: [
			<?php
			foreach($vw_cqi_hs as $row){
			echo $row->bons.",";
			}
			?>
			],
			dataLabels: {
				enabled: false
			}
		}, {
			name: 'Premium',
			color: "#0971e8",
			data: [
			<?php
			foreach($vw_cqi_hs as $row){
			echo $row->premiums.",";
			}
			?>
			],
			dataLabels: {
				verticalAlign: 'middle',
				rotation: 270,
				color: 'black',
				shadow: false,
				style: {
					fontSize: '20px',
					fontWeight: 'bold',
					textOutline: false
				}						
			}
		}]
	});	

	//Cell Maping 4G - CQI (GRÁFICO DE COLUNA)
	grafico[26] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics27',
			type: "column",
			alignTicks:false,
			zoomType: 'xy',
			borderWidth: 1,
			borderColor: '#ddd',
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
		title: {
			x: -10,
			y: 20,
			text: '<b>Cell Maping 4G - CQI</b>',
			style: {
				fontSize: "20px"
			}	
		},
		yAxis:{
			title: {
				enabled: false
			},	
			labels: {
				style: {
					fontSize:'25px',
					fontWeight: "bold"
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px'
			}
		},	
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},				
		xAxis: {
			labels: { 
				x: -5,
				style: {
					fontSize:'15px',
					fontWeight: "bold"
				},
				groupedOptions: [{   
					style: {
						fontSize: "20px",
						backgroundColor: "#f7f7f7",
						color: "#000000"
					}
				}, {
					rotation: 0, 
					align: 'left'
				}],
					rotation: 0 
				},
			categories: [{
				name: "BELO HORIZONTE",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "BRASILIA",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "CURITIBA",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "FLORIANOPOLIS",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "RECIFE",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}, {
				name: "SALVADOR",
				categories: [
				<?php
				echo "'W".$w4."', 'W".$w3."', 'W".$w2."', 'W".$w1."'
				";
				?>
				]
			}]
		},				
		plotOptions: {
		column: {
			stacking: 'normal',
			dataLabels: {
				enabled: true,
				crop: false,
				verticalAlign: 'top',
				y: -20,
				overflow: 'none',
				textOutline: false,
				color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
			}
		}
		},    
		series: [{
			name: 'Critico',
			color: "#e20d0d",
			data: [
			<?php
			foreach($vw_cqi_lte as $row){
			echo $row->criticos.",";
			}
			?>
			],
			dataLabels: {
				color: 'red',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		}, {
			name: 'Ruim',
			color: "#edde10",
			data: [
			<?php
			foreach($vw_cqi_lte as $row){
			echo $row->ruins.",";
			}
			?>
			],
			dataLabels: {
				enabled: false
			}
		}, {
			name: 'Bom',
			color: "#26d613",
			data: [
			<?php
			foreach($vw_cqi_lte as $row){
			echo $row->bons.",";
			}
			?>
			],
			dataLabels: {
				enabled: false
			}
		}, {
			name: 'Premium',
			color: "#0971e8",
			data: [
			<?php
			foreach($vw_cqi_lte as $row){
			echo $row->premiums.",";
			}
			?>
			],
			dataLabels: {
				verticalAlign: 'middle',
				rotation: 270,
				color: 'black',
				shadow: false,
				textOutline: false,
				style: {
					fontSize: '20px',
					fontWeight: 'bold',
					textOutline: false
				}						
			}
		}]
	});

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

	//PIZZA 3G - CQI CS
	grafico[27] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics28',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>3G - CQI CS</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: 'W<?php echo $w1 ?>',
			data:[
				
				{name: order[0].name, y: order[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order[0].color],
						   [1, Highcharts.Color(order[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order[1].name, y: order[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order[1].color],
						   [1, Highcharts.Color(order[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order[2].name, y: order[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order[2].color],
						   [1, Highcharts.Color(order[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order[3].name, y: order[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order[3].color],
						   [1, Highcharts.Color(order[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order[4].name, y: order[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order[4].color],
						   [1, Highcharts.Color(order[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order[5].name, y: order[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order[5].color],
						   [1, Highcharts.Color(order[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order[6].name, y: order[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order[6].color],
						   [1, Highcharts.Color(order[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order[7].name, y: order[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order[7].color],
						   [1, Highcharts.Color(order[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//PIZZA 3G - CQI HS
	grafico[28] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics29',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>3G - CQI HS</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: 'W<?php echo $w1 ?>',
			data:[
				
				{name: order_hs[0].name, y: order_hs[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_hs[0].color],
						   [1, Highcharts.Color(order_hs[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order_hs[1].name, y: order_hs[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_hs[1].color],
						   [1, Highcharts.Color(order_hs[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order_hs[2].name, y: order_hs[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_hs[2].color],
						   [1, Highcharts.Color(order_hs[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order_hs[3].name, y: order_hs[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_hs[3].color],
						   [1, Highcharts.Color(order_hs[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order_hs[4].name, y: order_hs[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_hs[4].color],
						   [1, Highcharts.Color(order_hs[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order_hs[5].name, y: order_hs[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_hs[5].color],
						   [1, Highcharts.Color(order_hs[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order_hs[6].name, y: order_hs[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_hs[6].color],
						   [1, Highcharts.Color(order_hs[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order_hs[7].name, y: order_hs[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_hs[7].color],
						   [1, Highcharts.Color(order_hs[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});

	//PIZZA 4G - CQI
	grafico[41] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics42',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>4G - CQI</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: 'W<?php echo $w1 ?>',
			data:[
				
				{name: order_lte[0].name, y: order_lte[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_lte[0].color],
						   [1, Highcharts.Color(order_lte[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order_lte[1].name, y: order_lte[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_lte[1].color],
						   [1, Highcharts.Color(order_lte[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order_lte[2].name, y: order_lte[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_lte[2].color],
						   [1, Highcharts.Color(order_lte[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order_lte[3].name, y: order_lte[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_lte[3].color],
						   [1, Highcharts.Color(order_lte[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order_lte[4].name, y: order_lte[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_lte[4].color],
						   [1, Highcharts.Color(order_lte[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: order_lte[5].name, y: order_lte[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, order_lte[5].color],
						   [1, Highcharts.Color(order_lte[5].color).brighten(-0.3).get('rgb')]]
				}}
				
			]
		}]
	});	
	
	//Cell Maping Analytics 3G CQI CS - BELO HORIZONTE
	grafico[29] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics30',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>BELO HORIZONTE</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_cs_bh[0].name, y: cidades_cs_bh[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_bh[0].color],
						   [1, Highcharts.Color(cidades_cs_bh[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_bh[1].name, y: cidades_cs_bh[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_bh[1].color],
						   [1, Highcharts.Color(cidades_cs_bh[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_bh[2].name, y: cidades_cs_bh[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_bh[2].color],
						   [1, Highcharts.Color(cidades_cs_bh[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_bh[3].name, y: cidades_cs_bh[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_bh[3].color],
						   [1, Highcharts.Color(cidades_cs_bh[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_bh[4].name, y: cidades_cs_bh[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_bh[4].color],
						   [1, Highcharts.Color(cidades_cs_bh[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_bh[5].name, y: cidades_cs_bh[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_bh[5].color],
						   [1, Highcharts.Color(cidades_cs_bh[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_bh[6].name, y: cidades_cs_bh[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_bh[6].color],
						   [1, Highcharts.Color(cidades_cs_bh[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_bh[7].name, y: cidades_cs_bh[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_bh[7].color],
						   [1, Highcharts.Color(cidades_cs_bh[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//Cell Maping Analytics 3G CQI CS - BRASÍLIA
	grafico[30] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics31',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>BRASILIA</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_cs_br[0].name, y: cidades_cs_br[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_br[0].color],
						   [1, Highcharts.Color(cidades_cs_br[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_br[1].name, y: cidades_cs_br[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_br[1].color],
						   [1, Highcharts.Color(cidades_cs_br[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_br[2].name, y: cidades_cs_br[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_br[2].color],
						   [1, Highcharts.Color(cidades_cs_br[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_br[3].name, y: cidades_cs_br[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_br[3].color],
						   [1, Highcharts.Color(cidades_cs_br[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_br[4].name, y: cidades_cs_br[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_br[4].color],
						   [1, Highcharts.Color(cidades_cs_br[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_br[5].name, y: cidades_cs_br[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_br[5].color],
						   [1, Highcharts.Color(cidades_cs_br[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_br[6].name, y: cidades_cs_br[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_br[6].color],
						   [1, Highcharts.Color(cidades_cs_br[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_br[7].name, y: cidades_cs_br[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_br[7].color],
						   [1, Highcharts.Color(cidades_cs_br[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//Cell Maping Analytics 3G CQI CS - CURITIBA
	grafico[31] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics32',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>CURITIBA</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_cs_cu[0].name, y: cidades_cs_cu[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_cu[0].color],
						   [1, Highcharts.Color(cidades_cs_cu[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_cu[1].name, y: cidades_cs_cu[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_cu[1].color],
						   [1, Highcharts.Color(cidades_cs_cu[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_cu[2].name, y: cidades_cs_cu[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_cu[2].color],
						   [1, Highcharts.Color(cidades_cs_cu[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_cu[3].name, y: cidades_cs_cu[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_cu[3].color],
						   [1, Highcharts.Color(cidades_cs_cu[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_cu[4].name, y: cidades_cs_cu[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_cu[4].color],
						   [1, Highcharts.Color(cidades_cs_cu[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_cu[5].name, y: cidades_cs_cu[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_cu[5].color],
						   [1, Highcharts.Color(cidades_cs_cu[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_cu[6].name, y: cidades_cs_cu[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_cu[6].color],
						   [1, Highcharts.Color(cidades_cs_cu[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_cu[7].name, y: cidades_cs_cu[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_cu[7].color],
						   [1, Highcharts.Color(cidades_cs_cu[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//Cell Maping Analytics 3G CQI CS - FLORIANÓPOLIS
	grafico[32] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics33',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>FLORIANOPOLIS</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_cs_fl[0].name, y: cidades_cs_fl[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_fl[0].color],
						   [1, Highcharts.Color(cidades_cs_fl[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_fl[1].name, y: cidades_cs_fl[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_fl[1].color],
						   [1, Highcharts.Color(cidades_cs_fl[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_fl[2].name, y: cidades_cs_fl[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_fl[2].color],
						   [1, Highcharts.Color(cidades_cs_fl[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_fl[3].name, y: cidades_cs_fl[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_fl[3].color],
						   [1, Highcharts.Color(cidades_cs_fl[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_fl[4].name, y: cidades_cs_fl[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_fl[4].color],
						   [1, Highcharts.Color(cidades_cs_fl[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_fl[5].name, y: cidades_cs_fl[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_fl[5].color],
						   [1, Highcharts.Color(cidades_cs_fl[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_fl[6].name, y: cidades_cs_fl[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_fl[6].color],
						   [1, Highcharts.Color(cidades_cs_fl[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_fl[7].name, y: cidades_cs_fl[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_fl[7].color],
						   [1, Highcharts.Color(cidades_cs_fl[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	

	//Cell Maping Analytics 3G CQI CS - RECIFE
	grafico[33] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics34',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>RECIFE</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_cs_re[0].name, y: cidades_cs_re[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_re[0].color],
						   [1, Highcharts.Color(cidades_cs_re[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_re[1].name, y: cidades_cs_re[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_re[1].color],
						   [1, Highcharts.Color(cidades_cs_re[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_re[2].name, y: cidades_cs_re[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_re[2].color],
						   [1, Highcharts.Color(cidades_cs_re[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_re[3].name, y: cidades_cs_re[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_re[3].color],
						   [1, Highcharts.Color(cidades_cs_re[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_re[4].name, y: cidades_cs_re[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_re[4].color],
						   [1, Highcharts.Color(cidades_cs_re[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_re[5].name, y: cidades_cs_re[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_re[5].color],
						   [1, Highcharts.Color(cidades_cs_re[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_re[6].name, y: cidades_cs_re[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_re[6].color],
						   [1, Highcharts.Color(cidades_cs_re[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_re[7].name, y: cidades_cs_re[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_re[7].color],
						   [1, Highcharts.Color(cidades_cs_re[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//Cell Maping Analytics 3G CQI CS - SALVADOR
	grafico[34] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics35',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>SALVADOR</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_cs_sa[0].name, y: cidades_cs_sa[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_sa[0].color],
						   [1, Highcharts.Color(cidades_cs_sa[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_sa[1].name, y: cidades_cs_sa[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_sa[1].color],
						   [1, Highcharts.Color(cidades_cs_sa[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_sa[2].name, y: cidades_cs_sa[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_sa[2].color],
						   [1, Highcharts.Color(cidades_cs_sa[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_sa[3].name, y: cidades_cs_sa[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_sa[3].color],
						   [1, Highcharts.Color(cidades_cs_sa[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_sa[4].name, y: cidades_cs_sa[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_sa[4].color],
						   [1, Highcharts.Color(cidades_cs_sa[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_sa[5].name, y: cidades_cs_sa[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_sa[5].color],
						   [1, Highcharts.Color(cidades_cs_sa[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_sa[6].name, y: cidades_cs_sa[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_sa[6].color],
						   [1, Highcharts.Color(cidades_cs_sa[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_cs_sa[7].name, y: cidades_cs_sa[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_cs_sa[7].color],
						   [1, Highcharts.Color(cidades_cs_sa[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//Cell Maping Analytics 3G CQI HS - BELO HORIZONTE
	grafico[43] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics44',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>BELO HORIZONTE</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_hs_bh[0].name, y: cidades_hs_bh[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_bh[0].color],
						   [1, Highcharts.Color(cidades_hs_bh[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_bh[1].name, y: cidades_hs_bh[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_bh[1].color],
						   [1, Highcharts.Color(cidades_hs_bh[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_bh[2].name, y: cidades_hs_bh[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_bh[2].color],
						   [1, Highcharts.Color(cidades_hs_bh[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_bh[3].name, y: cidades_hs_bh[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_bh[3].color],
						   [1, Highcharts.Color(cidades_hs_bh[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_bh[4].name, y: cidades_hs_bh[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_bh[4].color],
						   [1, Highcharts.Color(cidades_hs_bh[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_bh[5].name, y: cidades_hs_bh[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_bh[5].color],
						   [1, Highcharts.Color(cidades_hs_bh[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_bh[6].name, y: cidades_hs_bh[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_bh[6].color],
						   [1, Highcharts.Color(cidades_hs_bh[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_bh[7].name, y: cidades_hs_bh[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_bh[7].color],
						   [1, Highcharts.Color(cidades_hs_bh[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//Cell Maping Analytics 3G CQI HS - BRASÍLIA
	grafico[44] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics45',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>BRASILIA</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_hs_br[0].name, y: cidades_hs_br[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_br[0].color],
						   [1, Highcharts.Color(cidades_hs_br[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_br[1].name, y: cidades_hs_br[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_br[1].color],
						   [1, Highcharts.Color(cidades_hs_br[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_br[2].name, y: cidades_hs_br[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_br[2].color],
						   [1, Highcharts.Color(cidades_hs_br[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_br[3].name, y: cidades_hs_br[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_br[3].color],
						   [1, Highcharts.Color(cidades_hs_br[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_br[4].name, y: cidades_hs_br[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_br[4].color],
						   [1, Highcharts.Color(cidades_hs_br[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_br[5].name, y: cidades_hs_br[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_br[5].color],
						   [1, Highcharts.Color(cidades_hs_br[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_br[6].name, y: cidades_hs_br[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_br[6].color],
						   [1, Highcharts.Color(cidades_hs_br[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_br[7].name, y: cidades_hs_br[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_br[7].color],
						   [1, Highcharts.Color(cidades_hs_br[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//Cell Maping Analytics 3G CQI HS - CURITIBA
	grafico[45] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics46',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>CURITIBA</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_hs_cu[0].name, y: cidades_hs_cu[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_cu[0].color],
						   [1, Highcharts.Color(cidades_hs_cu[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_cu[1].name, y: cidades_hs_cu[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_cu[1].color],
						   [1, Highcharts.Color(cidades_hs_cu[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_cu[2].name, y: cidades_hs_cu[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_cu[2].color],
						   [1, Highcharts.Color(cidades_hs_cu[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_cu[3].name, y: cidades_hs_cu[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_cu[3].color],
						   [1, Highcharts.Color(cidades_hs_cu[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_cu[4].name, y: cidades_hs_cu[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_cu[4].color],
						   [1, Highcharts.Color(cidades_hs_cu[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_cu[5].name, y: cidades_hs_cu[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_cu[5].color],
						   [1, Highcharts.Color(cidades_hs_cu[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_cu[6].name, y: cidades_hs_cu[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_cu[6].color],
						   [1, Highcharts.Color(cidades_hs_cu[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_cu[7].name, y: cidades_hs_cu[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_cu[7].color],
						   [1, Highcharts.Color(cidades_hs_cu[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//Cell Maping Analytics 3G CQI HS - FLORIANÓPOLIS
	grafico[46] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics47',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>FLORIANOPOLIS</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_hs_fl[0].name, y: cidades_hs_fl[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_fl[0].color],
						   [1, Highcharts.Color(cidades_hs_fl[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_fl[1].name, y: cidades_hs_fl[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_fl[1].color],
						   [1, Highcharts.Color(cidades_hs_fl[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_fl[2].name, y: cidades_hs_fl[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_fl[2].color],
						   [1, Highcharts.Color(cidades_hs_fl[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_fl[3].name, y: cidades_hs_fl[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_fl[3].color],
						   [1, Highcharts.Color(cidades_hs_fl[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_fl[4].name, y: cidades_hs_fl[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_fl[4].color],
						   [1, Highcharts.Color(cidades_hs_fl[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_fl[5].name, y: cidades_hs_fl[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_fl[5].color],
						   [1, Highcharts.Color(cidades_hs_fl[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_fl[6].name, y: cidades_hs_fl[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_fl[6].color],
						   [1, Highcharts.Color(cidades_hs_fl[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_fl[7].name, y: cidades_hs_fl[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_fl[7].color],
						   [1, Highcharts.Color(cidades_hs_fl[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	

	//Cell Maping Analytics 3G CQI HS - RECIFE
	grafico[47] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics48',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>RECIFE</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_hs_re[0].name, y: cidades_hs_re[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_re[0].color],
						   [1, Highcharts.Color(cidades_hs_re[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_re[1].name, y: cidades_hs_re[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_re[1].color],
						   [1, Highcharts.Color(cidades_hs_re[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_re[2].name, y: cidades_hs_re[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_re[2].color],
						   [1, Highcharts.Color(cidades_hs_re[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_re[3].name, y: cidades_hs_re[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_re[3].color],
						   [1, Highcharts.Color(cidades_hs_re[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_re[4].name, y: cidades_hs_re[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_re[4].color],
						   [1, Highcharts.Color(cidades_hs_re[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_re[5].name, y: cidades_hs_re[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_re[5].color],
						   [1, Highcharts.Color(cidades_hs_re[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_re[6].name, y: cidades_hs_re[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_re[6].color],
						   [1, Highcharts.Color(cidades_hs_re[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_re[7].name, y: cidades_hs_re[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_re[7].color],
						   [1, Highcharts.Color(cidades_hs_re[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//Cell Maping Analytics 3G CQI HS - SALVADOR
	grafico[48] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics49',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>SALVADOR</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_hs_sa[0].name, y: cidades_hs_sa[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_sa[0].color],
						   [1, Highcharts.Color(cidades_hs_sa[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_sa[1].name, y: cidades_hs_sa[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_sa[1].color],
						   [1, Highcharts.Color(cidades_hs_sa[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_sa[2].name, y: cidades_hs_sa[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_sa[2].color],
						   [1, Highcharts.Color(cidades_hs_sa[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_sa[3].name, y: cidades_hs_sa[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_sa[3].color],
						   [1, Highcharts.Color(cidades_hs_sa[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_sa[4].name, y: cidades_hs_sa[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_sa[4].color],
						   [1, Highcharts.Color(cidades_hs_sa[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_sa[5].name, y: cidades_hs_sa[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_sa[5].color],
						   [1, Highcharts.Color(cidades_hs_sa[5].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_sa[6].name, y: cidades_hs_sa[6].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_sa[6].color],
						   [1, Highcharts.Color(cidades_hs_sa[6].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_hs_sa[7].name, y: cidades_hs_sa[7].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_hs_sa[7].color],
						   [1, Highcharts.Color(cidades_hs_sa[7].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});

	//Cell Maping Analytics 4G - BELO HORIZONTE
	grafico[49] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics50',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>BELO HORIZONTE</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_lte_bh[0].name, y: cidades_lte_bh[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_bh[0].color],
						   [1, Highcharts.Color(cidades_lte_bh[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_bh[1].name, y: cidades_lte_bh[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_bh[1].color],
						   [1, Highcharts.Color(cidades_lte_bh[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_bh[2].name, y: cidades_lte_bh[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_bh[2].color],
						   [1, Highcharts.Color(cidades_lte_bh[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_bh[3].name, y: cidades_lte_bh[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_bh[3].color],
						   [1, Highcharts.Color(cidades_lte_bh[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_bh[4].name, y: cidades_lte_bh[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_bh[4].color],
						   [1, Highcharts.Color(cidades_lte_bh[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_bh[5].name, y: cidades_lte_bh[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_bh[5].color],
						   [1, Highcharts.Color(cidades_lte_bh[5].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//Cell Maping Analytics 4G - BRASÍLIA
	grafico[50] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics51',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>BRASILIA</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_lte_br[0].name, y: cidades_lte_br[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_br[0].color],
						   [1, Highcharts.Color(cidades_lte_br[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_br[1].name, y: cidades_lte_br[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_br[1].color],
						   [1, Highcharts.Color(cidades_lte_br[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_br[2].name, y: cidades_lte_br[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_br[2].color],
						   [1, Highcharts.Color(cidades_lte_br[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_br[3].name, y: cidades_lte_br[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_br[3].color],
						   [1, Highcharts.Color(cidades_lte_br[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_br[4].name, y: cidades_lte_br[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_br[4].color],
						   [1, Highcharts.Color(cidades_lte_br[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_br[5].name, y: cidades_lte_br[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_br[5].color],
						   [1, Highcharts.Color(cidades_lte_br[5].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//Cell Maping Analytics 4G - CURITIBA
	grafico[51] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics52',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>CURITIBA</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_lte_cu[0].name, y: cidades_lte_cu[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_cu[0].color],
						   [1, Highcharts.Color(cidades_lte_cu[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_cu[1].name, y: cidades_lte_cu[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_cu[1].color],
						   [1, Highcharts.Color(cidades_lte_cu[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_cu[2].name, y: cidades_lte_cu[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_cu[2].color],
						   [1, Highcharts.Color(cidades_lte_cu[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_cu[3].name, y: cidades_lte_cu[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_cu[3].color],
						   [1, Highcharts.Color(cidades_lte_cu[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_cu[4].name, y: cidades_lte_cu[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_cu[4].color],
						   [1, Highcharts.Color(cidades_lte_cu[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_cu[5].name, y: cidades_lte_cu[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_cu[5].color],
						   [1, Highcharts.Color(cidades_lte_cu[5].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//Cell Maping Analytics 4G - FLORIANÓPOLIS
	grafico[52] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics53',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>FLORIANOPOLIS</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_lte_fl[0].name, y: cidades_lte_fl[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_fl[0].color],
						   [1, Highcharts.Color(cidades_lte_fl[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_fl[1].name, y: cidades_lte_fl[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_fl[1].color],
						   [1, Highcharts.Color(cidades_lte_fl[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_fl[2].name, y: cidades_lte_fl[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_fl[2].color],
						   [1, Highcharts.Color(cidades_lte_fl[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_fl[3].name, y: cidades_lte_fl[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_fl[3].color],
						   [1, Highcharts.Color(cidades_lte_fl[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_fl[4].name, y: cidades_lte_fl[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_fl[4].color],
						   [1, Highcharts.Color(cidades_lte_fl[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_fl[5].name, y: cidades_lte_fl[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_fl[5].color],
						   [1, Highcharts.Color(cidades_lte_fl[5].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	

	//Cell Maping Analytics 4G - RECIFE
	grafico[53] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics54',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>RECIFE</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_lte_re[0].name, y: cidades_lte_re[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_re[0].color],
						   [1, Highcharts.Color(cidades_lte_re[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_re[1].name, y: cidades_lte_re[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_re[1].color],
						   [1, Highcharts.Color(cidades_lte_re[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_re[2].name, y: cidades_lte_re[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_re[2].color],
						   [1, Highcharts.Color(cidades_lte_re[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_re[3].name, y: cidades_lte_re[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_re[3].color],
						   [1, Highcharts.Color(cidades_lte_re[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_re[4].name, y: cidades_lte_re[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_re[4].color],
						   [1, Highcharts.Color(cidades_lte_re[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_re[5].name, y: cidades_lte_re[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_re[5].color],
						   [1, Highcharts.Color(cidades_lte_re[5].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//Cell Maping Analytics 4G - SALVADOR
	grafico[54] = new Highcharts.chart({
		chart: {
			renderTo: 'grafics55',
			type: 'pie',
			options3d: {
				enabled: true,
				alpha: 65,
			},
			backgroundColor: null,
		},
		title: {
			text: "<b>W<?php echo $w1 ?> CELL MAPPING</b>",
			y: 130,
		 floating: true,
			style: {
			 fontSize: '23px'
		  }
		},
		legend: {
			floating:true,
			y: -80,
			labelFormatter: function () {
				return this.name.split('<br>')[0];
			},
			itemStyle: {
				fontSize: '20px'
			}
		},
		subtitle: {
		 text: '<i>SALVADOR</i>',
		 y: 160,
		 floating: true,
		 style: {
			 textTransform: 'uppercase',
			 fontSize: '15px'
		  }
		},
		credits: {
				   enabled: false
		},			
		tooltip: {
		shared: true,
		headerFormat: '<span>{point.key}</span><br/>',	
		pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} | {point.percentage:.2f}%</b><br/>',
		changeDecimals: 0,
		valueDecimals: 0
		},
		plotOptions: {
			pie: {
				allowPointSelect: true,
				cursor: 'pointer',
				depth: 100,
				showInLegend: true,
				dataLabels: {
					enabled: true,
					formatter: function () {
						if (this.point.y != 0) {
							return [this.point.name+' | '+this.point.y+' | '+ (this.point.percentage).toFixed(2)+'%'];
						}
					},
					style:{
						fontSize: '25px',
					},
					connectorWidth:2,
				},
			}
		},
		series: [{
			type: 'pie',
			slicedOffset:25,
			name: '<?php echo $w1 ?>',
			data:[
				
				{name: cidades_lte_sa[0].name, y: cidades_lte_sa[0].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_sa[0].color],
						   [1, Highcharts.Color(cidades_lte_sa[0].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_sa[1].name, y: cidades_lte_sa[1].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_sa[1].color],
						   [1, Highcharts.Color(cidades_lte_sa[1].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_sa[2].name, y: cidades_lte_sa[2].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_sa[2].color],
						   [1, Highcharts.Color(cidades_lte_sa[2].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_sa[3].name, y: cidades_lte_sa[3].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_sa[3].color],
						   [1, Highcharts.Color(cidades_lte_sa[3].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_sa[4].name, y: cidades_lte_sa[4].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_sa[4].color],
						   [1, Highcharts.Color(cidades_lte_sa[4].color).brighten(-0.3).get('rgb')]]
				}},
				
				{name: cidades_lte_sa[5].name, y: cidades_lte_sa[5].y, sliced:true,
				color: { 
					radialGradient: {
						cx: 0.5,
						cy: 0.3,
						r: 0.7
					}, 
					stops: [[0, cidades_lte_sa[5].color],
						   [1, Highcharts.Color(cidades_lte_sa[5].color).brighten(-0.3).get('rgb')]]
				}}
			]
		}]
	});	
	
	//BASE SITES - BELO HORIZONTE MG
	grafico[35] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics36',
			type: "column",
			alignTicks:false,
			zoomType: 'xy',
			borderWidth: 1,
			borderColor: '#ddd',
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
		title: {
			text: ""
		},
		yAxis:{
			title: {
				enabled: false
			},	
			labels: {
				style: {
					fontSize:'25px',
					fontWeight: "bold"
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px'
			}
		},	
		tooltip: {
			shared: true,
			headerFormat: '<span>{point.key}</span><br/>',	
			pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
			changeDecimals: 0,
			valueDecimals: 0
		},
		xAxis: {
			labels: { 
				x: -5,
				style: {
					fontSize:'15px',
					fontWeight: "bold"
				},
				groupedOptions: [{   
					style: {
						fontSize: "20px",
						backgroundColor: "#f7f7f7",
						color: "#000000"
					}
				}, {
					rotation: 0, 
					align: 'left'
				}],
					rotation: 0 
			},				
			categories: [{
				name: "2G Sites"
			}, {
				name: "3G Sites"
			}, {
				name: "4G Sites"
			}, {
				name: "4G eNodeB 2600"
			}, {
				name: "4G eNodeB 1800"
			}, {
				name: "4G eNodeB 700"
			}]
		},
		plotOptions: {
			column: {
				dataLabels: {
					enabled: true,
					crop: false,
					verticalAlign: 'top',
					y: 0,
					overflow: 'none',
					textOutline: false,
					color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
				}
			}
		},		
		series: [{
			name: "2016 - Set",
			data: [0, 229, 203, 203, 0, 0],
			color: "#fca72f",
			dataLabels: {
				color: 'black',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		},{
			name: "2018- Abril",
			data: [
			<?php
				echo $gsm_number_of_sites[0]->count .",".$umts_number_of_sites[0]->count .",".$lte_number_of_sites[0]->count .",".$lte_2600_sites[0]->count .",".$lte_1800_sites[0]->count .",". 0;
			?>
			],
			color: "#4280f4",
			dataLabels: {
				color: 'black',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		}],
	});	

	//BASE SITES - BRASÍLIA
	grafico[36] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics37',
			type: "column",
			alignTicks:false,
			zoomType: 'xy',
			borderWidth: 1,
			borderColor: '#ddd',
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
		title: {
			text: ""
		},
		yAxis:{
			title: {
				enabled: false
			},	
			labels: {
				style: {
					fontSize:'25px',
					fontWeight: "bold"
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px'
			}
		},	
		tooltip: {
			shared: true,
			headerFormat: '<span>{point.key}</span><br/>',	
			pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
			changeDecimals: 0,
			valueDecimals: 0
		},
		xAxis: {
			labels: { 
				x: -5,
				style: {
					fontSize:'15px',
					fontWeight: "bold"
				},
				groupedOptions: [{   
					style: {
						fontSize: "20px",
						backgroundColor: "#f7f7f7",
						color: "#000000"
					}
				}, {
					rotation: 0, 
					align: 'left'
				}],
					rotation: 0 
			},				
			categories: [{
				name: "2G Sites"
			}, {
				name: "3G Sites"
			}, {
				name: "4G Sites"
			}, {
				name: "4G eNodeB 2600"
			}, {
				name: "4G eNodeB 1800"
			}, {
				name: "4G eNodeB 700"
			}]
		},
		plotOptions: {
			column: {
				dataLabels: {
					enabled: true,
					crop: false,
					verticalAlign: 'top',
					y: 0,
					overflow: 'none',
					textOutline: false,
					color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
				}
			}
		},		
		series: [{
			name: "2016 - Set",
			data: [0, 424, 252, 252, 0, 0],
			color: "#fca72f",
			dataLabels: {
				color: 'black',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		},{
			name: "2018- Abril",
			data: [
			<?php
				echo $gsm_number_of_sites[1]->count .",".$umts_number_of_sites[1]->count .",".$lte_number_of_sites[1]->count .",".$lte_2600_sites[1]->count .",".$lte_1800_sites[1]->count .",".$lte_700_sites[0]->count;
			?>
			],
			color: "#4280f4",
			dataLabels: {
				color: 'black',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		}],
	});

	//BASE SITES - CURITIBA
	grafico[37] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics38',
			type: "column",
			alignTicks:false,
			zoomType: 'xy',
			borderWidth: 1,
			borderColor: '#ddd',
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
		title: {
			text: ""
		},
		yAxis:{
			title: {
				enabled: false
			},	
			labels: {
				style: {
					fontSize:'25px',
					fontWeight: "bold"
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px'
			}
		},	
		tooltip: {
			shared: true,
			headerFormat: '<span>{point.key}</span><br/>',	
			pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
			changeDecimals: 0,
			valueDecimals: 0
		},
		xAxis: {
			labels: { 
				x: -5,
				style: {
					fontSize:'15px',
					fontWeight: "bold"
				},
				groupedOptions: [{   
					style: {
						fontSize: "20px",
						backgroundColor: "#f7f7f7",
						color: "#000000"
					}
				}, {
					rotation: 0, 
					align: 'left'
				}],
					rotation: 0 
			},				
			categories: [{
				name: "2G Sites"
			}, {
				name: "3G Sites"
			}, {
				name: "4G Sites"
			}, {
				name: "4G eNodeB 2600"
			}, {
				name: "4G eNodeB 1800"
			}, {
				name: "4G eNodeB 700"
			}]
		},
		plotOptions: {
			column: {
				dataLabels: {
					enabled: true,
					crop: false,
					verticalAlign: 'top',
					y: 0,
					overflow: 'none',
					textOutline: false,
					color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
				}
			}
		},		
		series: [{
			name: "2016 - Set",
			data: [0, 184, 175, 175, 0, 0],
			color: "#fca72f",
			dataLabels: {
				color: 'black',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		},{
			name: "2018- Abril",
			data: [
			<?php
				echo $gsm_number_of_sites[2]->count .",".$umts_number_of_sites[2]->count .",".$lte_number_of_sites[2]->count .",".$lte_2600_sites[2]->count .",".$lte_1800_sites[2]->count .",". 0;
			?>
			],
			color: "#4280f4",
			dataLabels: {
				color: 'black',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		}],
	});

	//BASE SITES - FLORIANÓPOLIS
	grafico[38] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics39',
			type: "column",
			alignTicks:false,
			zoomType: 'xy',
			borderWidth: 1,
			borderColor: '#ddd',
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
		title: {
			text: ""
		},
		yAxis:{
			title: {
				enabled: false
			},	
			labels: {
				style: {
					fontSize:'25px',
					fontWeight: "bold"
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px'
			}
		},	
		tooltip: {
			shared: true,
			headerFormat: '<span>{point.key}</span><br/>',	
			pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
			changeDecimals: 0,
			valueDecimals: 0
		},
		xAxis: {
			labels: { 
				x: -5,
				style: {
					fontSize:'15px',
					fontWeight: "bold"
				},
				groupedOptions: [{   
					style: {
						fontSize: "20px",
						backgroundColor: "#f7f7f7",
						color: "#000000"
					}
				}, {
					rotation: 0, 
					align: 'left'
				}],
					rotation: 0 
			},				
			categories: [{
				name: "2G Sites"
			}, {
				name: "3G Sites"
			}, {
				name: "4G Sites"
			}, {
				name: "4G eNodeB 2600"
			}, {
				name: "4G eNodeB 1800"
			}, {
				name: "4G eNodeB 700"
			}]
		},
		plotOptions: {
			column: {
				dataLabels: {
					enabled: true,
					crop: false,
					verticalAlign: 'top',
					y: 0,
					overflow: 'none',
					textOutline: false,
					color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
				}
			}
		},		
		series: [{
			name: "2016 - Set",
			data: [0, 184, 175, 175, 0, 0],
			color: "#fca72f",
			dataLabels: {
				color: 'black',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		},{
			name: "2018- Abril",
			data: [
			<?php
				echo $gsm_number_of_sites[3]->count .",".$umts_number_of_sites[3]->count .",".$lte_number_of_sites[3]->count .",".$lte_2600_sites[3]->count .",".$lte_1800_sites[3]->count .",". 0;
			?>
			],
			color: "#4280f4",
			dataLabels: {
				color: 'black',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		}],
	});

	//BASE SITES - RECIFE
	grafico[39] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics40',
			type: "column",
			alignTicks:false,
			zoomType: 'xy',
			borderWidth: 1,
			borderColor: '#ddd',
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
		title: {
			text: ""
		},
		yAxis:{
			title: {
				enabled: false
			},	
			labels: {
				style: {
					fontSize:'25px',
					fontWeight: "bold"
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px'
			}
		},	
		tooltip: {
			shared: true,
			headerFormat: '<span>{point.key}</span><br/>',	
			pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
			changeDecimals: 0,
			valueDecimals: 0
		},
		xAxis: {
			labels: { 
				x: -5,
				style: {
					fontSize:'15px',
					fontWeight: "bold"
				},
				groupedOptions: [{   
					style: {
						fontSize: "20px",
						backgroundColor: "#f7f7f7",
						color: "#000000"
					}
				}, {
					rotation: 0, 
					align: 'left'
				}],
					rotation: 0 
			},				
			categories: [{
				name: "2G Sites"
			}, {
				name: "3G Sites"
			}, {
				name: "4G Sites"
			}, {
				name: "4G eNodeB 2600"
			}, {
				name: "4G eNodeB 1800"
			}, {
				name: "4G eNodeB 700"
			}]
		},
		plotOptions: {
			column: {
				dataLabels: {
					enabled: true,
					crop: false,
					verticalAlign: 'top',
					y: 0,
					overflow: 'none',
					textOutline: false,
					color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
				}
			}
		},		
		series: [{
			name: "2016 - Set",
			data: [0, 129, 111, 111, 0, 0],
			color: "#fca72f",
			dataLabels: {
				color: 'black',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		},{
			name: "2018- Abril",
			data: [
			<?php
				echo $gsm_number_of_sites[1]->count .",".$umts_number_of_sites[1]->count .",".$lte_number_of_sites[1]->count .",".$lte_2600_sites[1]->count .",".$lte_1800_sites[1]->count .",".$lte_700_sites[1]->count;
			?>
			],
			color: "#4280f4",
			dataLabels: {
				color: 'black',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		}],
	});

	//BASE SITES - SALVADOR
	grafico[40] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics41',
			type: "column",
			alignTicks:false,
			zoomType: 'xy',
			borderWidth: 1,
			borderColor: '#ddd',
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
		title: {
			text: ""
		},
		yAxis:{
			title: {
				enabled: false
			},	
			labels: {
				style: {
					fontSize:'25px',
					fontWeight: "bold"
				}
			}	
		},
		legend:{
			itemStyle: {
				fontSize: '20px'
			}
		},	
		tooltip: {
			shared: true,
			headerFormat: '<span>{point.key}</span><br/>',	
			pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
			changeDecimals: 0,
			valueDecimals: 0
		},
		xAxis: {
			labels: { 
				x: -5,
				style: {
					fontSize:'15px',
					fontWeight: "bold"
				},
				groupedOptions: [{   
					style: {
						fontSize: "20px",
						backgroundColor: "#f7f7f7",
						color: "#000000"
					}
				}, {
					rotation: 0, 
					align: 'left'
				}],
					rotation: 0 
			},				
			categories: [{
				name: "2G Sites"
			}, {
				name: "3G Sites"
			}, {
				name: "4G Sites"
			}, {
				name: "4G eNodeB 2600"
			}, {
				name: "4G eNodeB 1800"
			}, {
				name: "4G eNodeB 700"
			}]
		},
		plotOptions: {
			column: {
				dataLabels: {
					enabled: true,
					crop: false,
					verticalAlign: 'top',
					y: 0,
					overflow: 'none',
					textOutline: false,
					color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
				}
			}
		},		
		series: [{
			name: "2016 - Set",
			data: [0, 199, 155, 155, 0, 0],
			color: "#fca72f",
			dataLabels: {
				color: 'black',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		},{
			name: "2018- Abril",
			data: [
			<?php
				echo $gsm_number_of_sites[2]->count .",".$umts_number_of_sites[2]->count .",".$lte_number_of_sites[2]->count .",".$lte_2600_sites[2]->count .",".$lte_1800_sites[2]->count .",".$lte_700_sites[2]->count;
			?>
			],
			color: "#4280f4",
			dataLabels: {
				color: 'black',
				y: -30,
				style: {
					fontSize: '20px',
					fontWeight: 'bold'
				}
			}
		}],
	});
	
	//IMPACTO NO NQI APÓS ATIVIDADES - GRAFICO
	grafico[42] = new Highcharts.Chart({
		chart: {
			renderTo: 'grafics43',
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
			text: "NQI IMPACT NETWORK"	
		},	
		xAxis: {
			categories: [
				<?php
					foreach($total_degradations as $row){
							echo "'".$row->year." - ".$row->week."',";	
					}
				?>
			],
			labels: {
				style: {
					fontSize:'25px'
				}
			}
		},
		yAxis: [{
			lineWidth: 1,
			min: 0,
			max: 400,
			title: {
				text: ''
			},
			labels: {
				style: {
					fontSize:'20px'
				}
			}	
		}, {
			lineWidth: 1,
			opposite: true,
			min: 0,
			max: 100,			
			title: {
				text: ''
			},
			labels: {
                formatter: function () {
                    return this.axis.defaultLabelFormatter.call(this) + '%';
                },				
				style: {
					fontSize:'20px'
				}
			}	
		}],
		legend:{
			itemStyle: {
				fontSize: '25px',
			}
		},
		plotOptions: {
		column: {
			stacking: 'normal',
			dataLabels: {
				enabled: true,
				crop: false,
				verticalAlign: 'top',
				y: -30,
				overflow: 'none',
				textOutline: false,
				color: "black",
			style: {
				fontSize: '15px',
			}
			}
		},
        line: {
            dataLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    fontSize: '15px'
                }
            }
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
			name: "Total of Sites",
			color: "#0424FF",
			type: "column",
			data: [
				<?php
					foreach($total_degradations as $row){
								echo $row->total_sites.",";
					}
				?>	
			]
		},{
			name: "Efficiency",
			color: "#f4c542",
			type: "line",
			data: [
				<?php
					foreach($total_degradations as $row){
								echo $row->efc.",";
					}
				?>	
			],
			yAxis: 1,
			dataLabels: {
				enabled: true,
				format: '{y} %',
				borderRadius: 2,
				y: -10,
				shape: 'callout',
			itemStyle: {
				fontSize: '25px',
			}
			}
		}]
	});	


	/////////////////////////////////////// INÍCIO DA CRIAÇÃO DOS SLIDES ///////////////////////////////////////////

	//SLIDE 1
	slide[1].addImage({ path:'/npsmart/PptxGenJS-2.0.0/slides/slides01/main_background.png', x:0, y:0, w:10, h:5.63 });
	slide[1].addText(
		[
			{ text:'AM/Claro Brasil', options:{ fontSize:32, color:'ff0000', align:'l', bold: true,breakLine:true } },
			{ text:'Indicadores de Qualidade e cidades HFC', options:{ fontSize:32, color:'7F7F7F', align:'l', bold: true } },
			{ text:'Huawei', options:{ fontSize:20, color:'000000', align:'l', bold: true } },
			{ text:'YYYY. MMM', options:{ fontSize:20, color:'0000ff', align:'r', bold: true } }
		],
		{ x:0.32, y:1.47, w:9.24, h:2.68, fill:'FFFFFF' }
	);

	//SLIDE 2
	slide[2].addImage({ path:'/npsmart/PptxGenJS-2.0.0/slides/slides02/background.png', x:0, y:0, w:10, h:5.63 });
	slide[2].addText('Tópicos', { x:0, y:0.18, fontFace:'Arial', fontSize:28, color:'595959', bold:true } );
	slide[2].addText(
		[
			{ text:'1. Evolução Cidades HFC', options:{ fontSize:28, color:'C00000', align:'l',breakLine:true } },
			{ text:'2. CQI x Cell Maping', options:{ fontSize:28, color:'595959', align:'l' } }

		],
		{ x:0.12, y:1.47, w:5.49, h:1.28, fill:'FFFFFF' }
	);

	//SLIDE 3
	slide[3].addText(
		[
			{ text:'HFC Cities LTE Dashboard', options:{ fontSize:28, color:'CC0000', bold: true} },
			{ text:' - Belo Horizonte - MG', options:{ fontSize:28, color:'595959', bold: true } }
		],
		{ x:0.4, y:0, w:9.21, h:0.57 }
	);			
	slide[3].addText(
		'Base Sites',
		{
			x:0.4, y:0.59,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[3].addText(
		'LTE - Users',
		{
			x:5.14, y:0.59,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[3].addText(
		'LTE - DL Throughput',
		{
			x:0.4, y:2.98,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[3].addText(
		'LTE PS DL Traffic',
		{
			x:5.14, y:2.98,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);

	//SLIDE 4
	slide[4].addText(
		[
			{ text:'HFC Cities LTE Dashboard', options:{ fontSize:28, color:'CC0000', bold: true} },
			{ text:' - Brasília - DF', options:{ fontSize:28, color:'595959', bold: true } }
		],
		{ x:0.4, y:0, w:9.21, h:0.57 }
	);			
	slide[4].addText(
		'Base Sites',
		{
			x:0.4, y:0.59,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[4].addText(
		'LTE - Users',
		{
			x:5.14, y:0.59,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[4].addText(
		'LTE - DL Throughput',
		{
			x:0.4, y:2.98,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[4].addText(
		'LTE PS DL Traffic',
		{
			x:5.14, y:2.98,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);	

	//SLIDE 5
	slide[5].addText(
		[
			{ text:'HFC Cities LTE Dashboard', options:{ fontSize:28, color:'CC0000', bold: true} },
			{ text:' - Curitiba - PR', options:{ fontSize:28, color:'595959', bold: true } }
		],
		{ x:0.4, y:0, w:9.21, h:0.57 }
	);			
	slide[5].addText(
		'Base Sites',
		{
			x:0.4, y:0.59,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[5].addText(
		'LTE - Users',
		{
			x:5.14, y:0.59,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[5].addText(
		'LTE - DL Throughput',
		{
			x:0.4, y:2.98,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[5].addText(
		'LTE PS DL Traffic',
		{
			x:5.14, y:2.98,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);	

	//SLIDE 6
	slide[6].addText(
		[
			{ text:'HFC Cities LTE Dashboard', options:{ fontSize:28, color:'CC0000', bold: true} },
			{ text:' - Florianópolis - SC', options:{ fontSize:28, color:'595959', bold: true } }
		],
		{ x:0.4, y:0, w:9.21, h:0.57 }
	);			
	slide[6].addText(
		'Base Sites',
		{
			x:0.4, y:0.59,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[6].addText(
		'LTE - Users',
		{
			x:5.14, y:0.59,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[6].addText(
		'LTE - DL Throughput',
		{
			x:0.4, y:2.98,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[6].addText(
		'LTE PS DL Traffic',
		{
			x:5.14, y:2.98,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);

	//SLIDE 7
	slide[7].addText(
		[
			{ text:'HFC Cities LTE Dashboard', options:{ fontSize:28, color:'CC0000', bold: true} },
			{ text:' - Recife - PE', options:{ fontSize:28, color:'595959', bold: true } }
		],
		{ x:0.4, y:0, w:9.21, h:0.57 }
	);			
	slide[7].addText(
		'Base Sites',
		{
			x:0.4, y:0.59,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[7].addText(
		'LTE - Users',
		{
			x:5.14, y:0.59,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[7].addText(
		'LTE - DL Throughput',
		{
			x:0.4, y:2.98,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[7].addText(
		'LTE PS DL Traffic',
		{
			x:5.14, y:2.98,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);	

	//SLIDE 8
	slide[8].addText(
		[
			{ text:'HFC Cities LTE Dashboard', options:{ fontSize:28, color:'CC0000', bold: true} },
			{ text:' - Salvador - BA', options:{ fontSize:28, color:'595959', bold: true } }
		],
		{ x:0.4, y:0, w:9.21, h:0.57 }
	);			
	slide[8].addText(
		'Base Sites',
		{
			x:0.4, y:0.59,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[8].addText(
		'LTE - Users',
		{
			x:5.14, y:0.59,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[8].addText(
		'LTE - DL Throughput',
		{
			x:0.4, y:2.98,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);
	slide[8].addText(
		'LTE PS DL Traffic',
		{
			x:5.14, y:2.98,w:4.39, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: 'c41f1f',
			outline: {size:3.0, color:'595959'}
		}
	);

	//SLIDE 9
	slide[9].addText(
		[
			{ text:'HFC Cities', options:{ fontSize:32, color:'CC0000', bold: true} },
			{ text:' - LTE & UMTS Quality (NQI)', options:{ fontSize:32, color:'002060', bold: true } }
		],
		{ x:0.87, y:0.06, w:8.43, h:0.57 }
	);			
	slide[9].addText(
		'Belo Horizonte - MG',
		{
			x:0.4, y:1.09,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[9].addText(
		'Brasília - DF',
		{
			x:3.58, y:1.09,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[9].addText(
		'Curitiba - PR',
		{
			x:6.77, y:1.09,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[9].addText(
		'Florianópolis - SC',
		{
			x:0.4, y:3.28,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[9].addText(
		'Recife - PE',
		{
			x:3.58, y:3.28,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);	
	slide[9].addText(
		'Salvador - BA',
		{
			x:6.77, y:3.28,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	
	//SLIDE 10
	slide[10].addImage({ path:'/npsmart/PptxGenJS-2.0.0/slides/slides02/background.png', x:0, y:0, w:10, h:5.63 });
	slide[10].addText('Tópicos', { x:0, y:0.18, fontFace:'Arial', fontSize:28, color:'595959', bold:true } );
	slide[10].addText(
		[
			{ text:'1. Evolução Cidades HFC', options:{ fontSize:28, color:'595959', align:'l',breakLine:true } },
			{ text:'2. CQI x Cell Maping', options:{ fontSize:28, color:'C00000', align:'l' } }

		],
		{ x:0.12, y:1.47, w:5.49, h:1.28, fill:'FFFFFF' }
	);

	//SLIDE 11
	slide[11].addImage({ path:'/npsmart/PptxGenJS-2.0.0/slides/slides11/Seta.png', x:8.17, y:1.92, w:0.83, h:1.25 });
	slide[11].addText(
		[
			{ text:'CQI CS', options:{ fontSize:28, color:'CC0000', bold: true} },
			{ text:' - Indicadores Rede de Acesso', options:{ fontSize:28, color:'002060', bold: true } }
		],
		{ x:0.15, y:0, w:8.43, h:0.57 }
	);

	//SLIDE 12
	slide[12].addImage({ path:'/npsmart/PptxGenJS-2.0.0/slides/slides11/Seta.png', x:8.17, y:1.92, w:0.83, h:1.25 });
	slide[12].addText(
		[
			{ text:'CQI HS', options:{ fontSize:28, color:'CC0000', bold: true} },
			{ text:' - Indicadores Rede de Acesso', options:{ fontSize:28, color:'002060', bold: true } }
		],
		{ x:0.15, y:0, w:8.43, h:0.57 }
	);
	
	//SLIDE 13
	slide[13].addImage({ path:'/npsmart/PptxGenJS-2.0.0/slides/slides11/Seta.png', x:8.17, y:1.92, w:0.83, h:1.25 });
	slide[13].addText(
		[
			{ text:'CQI LTE', options:{ fontSize:28, color:'CC0000', bold: true} },
			{ text:' - Indicadores Rede de Acesso', options:{ fontSize:28, color:'002060', bold: true } }
		],
		{ x:0.15, y:0, w:8.43, h:0.57 }
	);	
	
	//SLIDE 14
	slide[14].addText(
		[
			{ text:'HFC Cities - ', options:{ fontSize:32, color:'CC0000', bold: true} },
			{ text:'Cell Maping Analytics 3G CQI CS', options:{ fontSize:32, color:'002060', bold: true } }
		],
		{ x:0.13, y:0.06, w:9.79, h:0.57 }
	);			
	slide[14].addText(
		'Belo Horizonte - MG',
		{
			x:0.4, y:1.09,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[14].addText(
		'Brasília - DF',
		{
			x:3.58, y:1.09,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[14].addText(
		'Curitiba - PR',
		{
			x:6.77, y:1.09,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[14].addText(
		'Florianópolis - SC',
		{
			x:0.4, y:3.28,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[14].addText(
		'Recife - PE',
		{
			x:3.58, y:3.28,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);	
	slide[14].addText(
		'Salvador - BA',
		{
			x:6.77, y:3.28,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	
	//SLIDE 15
	slide[15].addText(
		[
			{ text:'HFC Cities - ', options:{ fontSize:32, color:'CC0000', bold: true} },
			{ text:'Cell Maping Analytics 3G CQI HS', options:{ fontSize:32, color:'002060', bold: true } }
		],
		{ x:0.13, y:0.06, w:9.79, h:0.57 }
	);			
	slide[15].addText(
		'Belo Horizonte - MG',
		{
			x:0.4, y:1.09,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[15].addText(
		'Brasília - DF',
		{
			x:3.58, y:1.09,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[15].addText(
		'Curitiba - PR',
		{
			x:6.77, y:1.09,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[15].addText(
		'Florianópolis - SC',
		{
			x:0.4, y:3.28,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[15].addText(
		'Recife - PE',
		{
			x:3.58, y:3.28,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);	
	slide[15].addText(
		'Salvador - BA',
		{
			x:6.77, y:3.28,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);

	//SLIDE 16
	slide[16].addText(
		[
			{ text:'HFC Cities - ', options:{ fontSize:32, color:'CC0000', bold: true} },
			{ text:'Cell Maping Analytics 4G', options:{ fontSize:32, color:'002060', bold: true } }
		],
		{ x:0.77, y:0.06, w:8.43, h:0.57 }
	);			
	slide[16].addText(
		'Belo Horizonte - MG',
		{
			x:0.4, y:1.09,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[16].addText(
		'Brasília - DF',
		{
			x:3.58, y:1.09,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[16].addText(
		'Curitiba - PR',
		{
			x:6.77, y:1.09,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[16].addText(
		'Florianópolis - SC',
		{
			x:0.4, y:3.28,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);
	slide[16].addText(
		'Recife - PE',
		{
			x:3.58, y:3.28,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);	
	slide[16].addText(
		'Salvador - BA',
		{
			x:6.77, y:3.28,w:2.88, h:0.4, fontSize:18, align: 'c', bold:true, color:'FFFFFF',fill: '0DB1D7',
			outline: {size:3.0, color:'0DB1D7'}
		}
	);	

	//SLIDE 15
	slide[17].addText(
		[
			{ text:'EFICIÊNCIA (%)', options:{ fontSize:24, color:'CC0000', bold: true} },
			{ text:' - Volume de Atividades vs Degradações', options:{ fontSize:24, color:'002060', bold: true } }
		],
		{ x:0.15, y:0, w:9.55, h:0.57 }
	);
	slide[17].addText(
		'1) Impacto no NQI após atividades',
		{
			x:2.7, y:0.58,w:4.29, h:0.4, fontSize:18, align: 'l', bold:true
		}
	);
	slide[17].addText(
		'2) Tabela de Eficência por Regional',
		{
			x:2.7, y:3.55,w:5.49, h:0.4, fontSize:18, align: 'l', bold:true
		}
	);	
	
	//SLIDE 16
	slide[18].addImage({ path:'/npsmart/PptxGenJS-2.0.0/slides/slides16/obrigado.png', x:0, y:0, w:10, h:5.0 });
	slide[18].addText('OBRIGADO', { x:1.35, y:2.35, fontFace:'Arial', fontSize:28, color:'1c14aa', bold:true } );
	
	//////////////////////////////////////////////////// EXPORTA PPT ///////////////////////////////////////////////

	function export_png(){
		
		// Export Presentation
		pptx.save('Claro - CTO Meeting Presentation W<?php echo $w1 ?>');
	
	}
	
	/////////////////////////////////////////// TRANSFORMA HTML EM IMAGEM //////////////////////////////////////////
	
	function html_to_canvas() {
		
		//(NOME DA FIGURA, POSIÇÃO X, POSIÇÃO Y, LARGURA, ALTURA, SLIDE NUMBER)
		save_chart(grafico[35],0.4,1.1,4.39,1.88,3);
		save_chart(grafico[0],5.14,1.04,4.39,1.88,3);
		save_chart(grafico[1],0.4,3.49,4.39,1.88,3);
		save_chart(grafico[2],5.14,3.49,4.39,1.88,3);
		
		save_chart(grafico[36],0.4,1.1,4.39,1.88,4);
		save_chart(grafico[3],5.14,1.04,4.39,1.88,4);
		save_chart(grafico[4],0.4,3.49,4.39,1.88,4);
		save_chart(grafico[5],5.14,3.49,4.39,1.88,4);
		
		save_chart(grafico[37],0.4,1.1,4.39,1.88,5);
		save_chart(grafico[6],5.14,1.04,4.39,1.88,5);
		save_chart(grafico[7],0.4,3.49,4.39,1.88,5);
		save_chart(grafico[8],5.14,3.49,4.39,1.88,5);
		
		save_chart(grafico[38],0.4,1.1,4.39,1.88,6);
		save_chart(grafico[9],5.14,1.04,4.39,1.88,6);
		save_chart(grafico[10],0.4,3.49,4.39,1.88,6);
		save_chart(grafico[11],5.14,3.49,4.39,1.88,6);
		
		save_chart(grafico[39],0.4,1.1,4.39,1.88,7);
		save_chart(grafico[12],5.14,1.04,4.39,1.88,7);
		save_chart(grafico[13],0.4,3.49,4.39,1.88,7);
		save_chart(grafico[14],5.14,3.49,4.39,1.88,7);
		
		save_chart(grafico[40],0.4,1.1,4.39,1.88,8);
		save_chart(grafico[15],5.14,1.04,4.39,1.88,8);
		save_chart(grafico[16],0.4,3.49,4.39,1.88,8);
		save_chart(grafico[17],5.14,3.49,4.39,1.88,8);
		
		save_chart(grafico[18],0.4,1.77,2.88,1.23,9);
		save_chart(grafico[19],3.58,1.77,2.88,1.23,9);
		save_chart(grafico[20],6.77,1.77,2.88,1.23,9);
		save_chart(grafico[21],0.4,3.96,2.88,1.23,9);
		save_chart(grafico[22],3.58,3.96,2.88,1.23,9);
		save_chart(grafico[23],6.77,3.96,2.88,1.23,9);
		
		gerar_tabelas("tabela",0.15,0.6,9.48,1.22,11);
		gerar_tabelas("tabela4",6.05,1.92,2.11,1.25,11);
		save_chart(grafico[24],0.15,1.92,5.8,3.45,11);
		save_chart(grafico[27],5.06,2.9,5.57,2.47,11);
		
		gerar_tabelas("tabela2",0.15,0.6,9.48,1.22,12);
		gerar_tabelas("tabela5",6.05,1.92,2.11,1.25,12);
		save_chart(grafico[25],0.15,1.92,5.8,3.45,12);
		save_chart(grafico[28],5.06,2.9,5.57,2.47,12);
		
		gerar_tabelas("tabela3",0.15,0.6,9.48,1.22,13);
		gerar_tabelas("tabela6",6.05,1.92,2.11,1.25,13);
		save_chart(grafico[26],0.15,1.92,5.8,3.45,13);
		save_chart(grafico[41],5.06,2.9,5.57,2.47,13);
		
		save_chart(grafico[29],-0.47,1.39,4.27,1.89,14);
		save_chart(grafico[30],2.76,1.39,4.27,1.89,14);
		save_chart(grafico[31],5.98,1.39,4.27,1.89,14);
		save_chart(grafico[32],-0.47,3.68,4.27,1.89,14);
		save_chart(grafico[33],2.76,3.68,4.27,1.89,14);
		save_chart(grafico[34],5.98,3.68,4.27,1.89,14);
		
		save_chart(grafico[43],-0.47,1.39,4.27,1.89,15);
		save_chart(grafico[44],2.76,1.39,4.27,1.89,15);
		save_chart(grafico[45],5.98,1.39,4.27,1.89,15);
		save_chart(grafico[46],-0.47,3.68,4.27,1.89,15);
		save_chart(grafico[47],2.76,3.68,4.27,1.89,15);
		save_chart(grafico[48],5.98,3.68,4.27,1.89,15);

		save_chart(grafico[49],-0.47,1.39,4.27,1.89,16);
		save_chart(grafico[50],2.76,1.39,4.27,1.89,16);
		save_chart(grafico[51],5.98,1.39,4.27,1.89,16);
		save_chart(grafico[52],-0.47,3.68,4.27,1.89,16);
		save_chart(grafico[53],2.76,3.68,4.27,1.89,16);
		save_chart(grafico[54],5.98,3.68,4.27,1.89,16);		
		
		save_chart(grafico[42],1.57,0.96,7.26,2.62,17);
		gerar_tabelas("tabela7",1.57,3.96,7.26,1.17,17);
	}
	
	$( document ).ready(function() {
		html_to_canvas(); // PRIMEIRO EU TRANSFORMO TODO HTML EM IMAGEM
		export_png(); // DEPOIS EU FAÇO O DOWNLOAD DO PPT
		document.getElementById("loading_ppt").style.display = "none"; // DEPOIS EU SUMO COM O GIF DO LOADING
	});		
	
</script>
