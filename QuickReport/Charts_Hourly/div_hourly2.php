<?php

$q1 = ($_GET['q1']);
$q2 = ($_GET['q2']);
$q3 = ($_GET['q3']);
$q4 = ($_GET['q4']);
$q5 = ($_GET['q5']);
$q6 = ($_GET['q6']);
$q7 = ($_GET['q7']);
$q8 = ($_GET['q8']);
$q9 = ($_GET['q9']);

$d1 = ($_GET['d1']);
$d2 = ($_GET['d2']);
$d3 = ($_GET['d3']);
$d4 = ($_GET['d4']);
$d5 = ($_GET['d5']);
$d6 = ($_GET['d6']);
$d7 = ($_GET['d7']);
$d8 = ($_GET['d8']);
$d9 = ($_GET['d9']);

$c1 = ($_GET['c1']);
$c2 = ($_GET['c2']);
$c3 = ($_GET['c3']);
$c4 = ($_GET['c4']);
$c5 = ($_GET['c5']);
$c6 = ($_GET['c6']);
$c7 = ($_GET['c7']);
$c8 = ($_GET['c8']);
$c9 = ($_GET['c9']);

$t1 = ($_GET['t1']);
$t2 = ($_GET['t2']);
$t3 = ($_GET['t3']);
$t4 = ($_GET['t4']);
$t5 = ($_GET['t5']);
$t6 = ($_GET['t6']);
$t7 = ($_GET['t7']);
$t8 = ($_GET['t8']);
$t9 = ($_GET['t9']);

$f1 = ($_GET['f1']);
$f2 = ($_GET['f2']);
$f3 = ($_GET['f3']);
$f4 = ($_GET['f4']);
$f5 = ($_GET['f5']);
$f6 = ($_GET['f6']);
$f7 = ($_GET['f7']);
$f8 = ($_GET['f8']);
$f9 = ($_GET['f9']);

$ct1 = ($_GET['ct1']);
$ct2 = ($_GET['ct2']);
$ct3 = ($_GET['ct3']);
$ct4 = ($_GET['ct4']);
$ct5 = ($_GET['ct5']);
$ct6 = ($_GET['ct6']);
$ct7 = ($_GET['ct7']);
$ct8 = ($_GET['ct8']);
$ct9 = ($_GET['ct9']);


if($q1 != ""){	
$kpi_query1 = $this->db->query("".$q1."");	
}	
	
if($q2 != ""){
$kpi_query2 = $this->db->query("".$q2."");
}
	
if($q3 != ""){	
$kpi_query3 = $this->db->query("".$q3."");
}
	
if($q4 != ""){
$kpi_query4 = $this->db->query("".$q4."");
}

if($q5 != ""){	
$kpi_query5 = $this->db->query("".$q5."");
}	

if($q6 != ""){
$kpi_query6 = $this->db->query("".$q6."");
}

if($q7 != ""){
$kpi_query7 = $this->db->query("".$q7."");
}	

if($q8 != ""){
$kpi_query8 = $this->db->query("".$q8."");
}

if($q9 != ""){
$kpi_query9 = $this->db->query("".$q9."");
}

if(($ct1 == 2) && ($q1 != "")){
$v1 = "true";	
}else{
$v1 = "false";
}

if(($ct2 == 2) && ($q2 != "")){
$v2 = "true";	
}else{
$v2 = "false";
}

if(($ct3 == 2) && ($q3 != "")){
$v3 = "true";	
}else{
$v3 = "false";
}

if(($ct4 == 2) && ($q4 != "")){
$v4 = "true";	
}else{
$v4 = "false";
}

if(($ct5 == 2) && ($q5 != "")){
$v5 = "true";	
}else{
$v5 = "false";
}

if(($ct6 == 2) && ($q6 != "")){
$v6 = "true";	
}else{
$v6 = "false";
}

if(($ct7 == 2) && ($q7 != "")){
$v7 = "true";	
}else{
$v7 = "false";
}

if(($ct8 == 2) && ($q8 != "")){
$v8 = "true";	
}else{
$v8 = "false";
}

if(($ct9 == 2) && ($q9 != "")){
$v9 = "true";	
}else{
$v9 = "false";
}	

?>

<!DOCTYPE html>
<html>
<head>
<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans);

.btn_show2 {
  
  writing-mode: tb-rl;
  cursor: pointer;
  font-family: 'Open Sans', 'sans-serif';
  border-radius: 5px;
  padding: 5px 1px;
  font-size: 22px;
  text-decoration: none;
  margin: 5px;
  color: #fff;
  display: inline-block;
}

.btn_show2:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}

.red {
  margin-top: 240px;
  background-color: #e74c3c;
  box-shadow: 0px 0px 0px 5px #CE3323;
  
}

.red:hover {
  background-color: #FF6656;
}

.outer2{
	
    width: 100%;
	max-width: 100%;
	max-height: 670px;
	overflow: hidden;
	white-space:nowrap;
	
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 40%;
}


td, th {
	
    border: 1px solid #aaaaaa;
    text-align:center;
    padding: 8px;
}

th {

font-size: 15px;	
font-weight: bold;	
	
}

tr:nth-child(even) {
    background-color: #dddddd;
}

#container2 {

display: none;
width: 95%;
height: 650px;
margin: 5px;
		
}

#buttons_show2{

margin: 5px;	
display: none;
width: 2.5%;
height: 650px;
background-color: lightgray;
vertical-align:top;
width:45px;
max-width: 45px;
	
}

#Resumex2{

width: 25%;
margin: 5px;
display: none;
height: 650px;
display: none;
vertical-align:top;

}

.cs_menu_theme2, .cs_menu_txt2, .cs_menu_color2, .cs_menu_line_style2{

margin:10px 10px 10px 0px; 
display:block; 
width: 100%;
background-color: #3C6D7A; 
text-align:center;
border: 1px solid black;

	
}

.cs_menu_txt2 p, .cs_menu_color2 p, .cs_menu_line_style2 p, .cs_menu_theme2 p{

text-align:left;
margin: 10px;
font-size:14px;

}

.cs_menu_txt2 p:first-child, .cs_menu_color2 p:first-child, .cs_menu_theme2 p:first-child, .cs_menu_line_style2 p:first-child {


width: 100%;
margin: 0px 0px 0px 10px;
text-align:left;
color:white;
font-size:20px;
font-family: 'Rubik', sans-serif;

}
	
</style>
</head>
<body>

<div id="escala2" style="display: none"><div style="display:inline-block">min Y: <input id="scale_min2" type="number" style="width:70px"/></div><div style="display:inline-block; margin-left: 20px">max Y: <input id="scale_max2" type="number" style="width:70px"/></div></div>
<div class= "outer2">


<div id="container2"></div>

<div id="buttons_show2">
 <span class="btn_show2 red">Customize Chart <i id="seta_show2" class="fa fa-arrow-left"></i></span>
</div>

<div id="Resumex2">

<div class="Painel" style = "border: 2px solid black; width: 100%"><div style="font-size: 25px; text-align:center; margin-top: 10px; color: white"><div style="display:inline-block; margin-right: 10px; float: middle"><b>Custom your Charts</b></div></div></div>
<div style = "border: 2px solid black; width: 100%; height: 600px">
<div class="cs_menu_theme2">
<p> Layout <span style="float:right; margin-top:-12px"><button id="btn_theme2" class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Theme2" class="fa fa-caret-down"></i></button></span></p>
<div id= "div_theme2" style="display:none; background-color:white">
<p style="color:black; font-size: 15px">Theme: <br><select class="tema" id="theme2" type="text"></p>
<option value="" selected="selected">Select a theme</option>
<option value="val_538">538</option>
<option value="DarkBlue">Dark Blue</option>
<option value="DarkGreen">Dark Green</option>
<option value="DarkUnika">Dark Unika</option>
<option value="Null">Empty</option>
<option value="FlatDark">Flat Dark</option>
<option value="val_ffx">FFX</option>
<option value="Skies">Google</option>
<option value="SandSignika">Sand Signika</option>
</select>
<p>Font Family: <br><input type="text" id="minha_Fonte2"></input></p>
<p>Font Size Axis: <br><input type="number" id="myFontSize_Axis2" value="11"></input></p>
<p>Font Size Title: <br><input type="number" id="myFontSize_Title2" value="18"></input></p>
<p>Color Axis: <br><input id="colorSelector_Axis2" type="text"></input></p>
<p>Color Title: <br><input id="colorSelector_Title2" type="text"></input></p>
</div>
</div>
<div class="cs_menu_txt2">
<p> Text <span style="float:right; margin-top:-12px"><button id="btn_text2" class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Text2" class="fa fa-caret-down"></i></button></span></p>
<div id= "div_text2" style="display:none; background-color:white">
<p style="color:black; font-size: 15px">Title: <br><input id="txt_title2" type="text"></input></p>
<p>Legend Item 1: <br><input id="txt_legend1_2" type="text"></input></p>
<p>Legend Item 2: <br><input id="txt_legend2_2" type="text"></input></p>
<p>Legend Item 3: <br><input id="txt_legend3_2" type="text"></input></p>
<p>Legend Item 4: <br><input id="txt_legend4_2" type="text"></input></p>
<p>Legend Item 5: <br><input id="txt_legend5_2" type="text"></input></p>
<p>Legend Item 6: <br><input id="txt_legend6_2" type="text"></input></p>
<p>Legend Item 7: <br><input id="txt_legend7_2" type="text"></input></p>
<p>Legend Item 8: <br><input id="txt_legend8_2" type="text"></input></p>
<p>Legend Item 9: <br><input id="txt_legend9_2" type="text"></input></p>
</div>
</div>
<div class="cs_menu_color2">
<p> Colors <span style="float:right; margin-top:-12px"><button id="btn_colors2" class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Colors2" class="fa fa-caret-down"></i></button></span></p>
<div id= "div_colors2" style="display:none; background-color:white">
<p style="color:black; font-size: 15px">Color Line 1: <br><input id="colorSelector1_2" type="text"></input></p>
<p>Color Line 2: <br><input id="colorSelector2_2" type="text"></input></p>
<p>Color Line 3: <br><input id="colorSelector3_2" type="text"></input></p>
<p>Color Line 4: <br><input id="colorSelector4_2" type="text"></input></p>
<p>Color Line 5: <br><input id="colorSelector5_2" type="text"></input></p>
<p>Color Line 6: <br><input id="colorSelector6_2" type="text"></input></p>
<p>Color Line 7: <br><input id="colorSelector7_2" type="text"></input></p>
<p>Color Line 8: <br><input id="colorSelector8_2" type="text"></input></p>
<p>Color Line 9: <br><input id="colorSelector9_2" type="text"></input></p>
</div>
</div>
<div class="cs_menu_line_style2">
<p> Line <span style="float:right; margin-top:-12px"><button id="btn_line_2" class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Line2" class="fa fa-caret-down"></i></button></span></p>
<div id= "div_colors2" style="display:block; background-color:white">
<div id="div_line2" style="display:none">
<div style="display:inline-block">
<p style="color:black; font-size: 14px">Line Style 1: <br><select id="linestyle1_2" type="text">
<option value="" selected="selected">Select a type</option>
<option value="Solid">Solid</option><span style="margin-left: 10px">
<option value="ShortDash">ShortDash</option>
<option value="ShortDot">ShortDot</option>
<option value="ShortDashDot">ShortDashDot</option>
<option value="ShortDashDotDot">ShortDashDotDot</option>
<option value="Dot">Dot</option>
<option value="Dash">Dash</option>
<option value="LongDash">LongDash</option>
<option value="DashDot">DashDot</option>
<option value="LongDashDot">LongDashDot</option>
<option value="LongDashDotDot">LongDashDotDot</option>
</select></p>
<p>Line Style 2: <br><select id="linestyle2_2" type="text">
<option value="" selected="selected">Select a type</option>
<option value="Solid">Solid</option>
<option value="ShortDash">ShortDash</option>
<option value="ShortDot">ShortDot</option>
<option value="ShortDashDot">ShortDashDot</option>
<option value="ShortDashDotDot">ShortDashDotDot</option>
<option value="Dot">Dot</option>
<option value="Dash">Dash</option>
<option value="LongDash">LongDash</option>
<option value="DashDot">DashDot</option>
<option value="LongDashDot">LongDashDot</option>
<option value="LongDashDotDot">LongDashDotDot</option>
</select></p>
<p>Line Style 3: <br><select id="linestyle3_2" type="text">
<option value="" selected="selected">Select a type</option>
<option value="Solid">Solid</option>
<option value="ShortDash">ShortDash</option>
<option value="ShortDot">ShortDot</option>
<option value="ShortDashDot">ShortDashDot</option>
<option value="ShortDashDotDot">ShortDashDotDot</option>
<option value="Dot">Dot</option>
<option value="Dash">Dash</option>
<option value="LongDash">LongDash</option>
<option value="DashDot">DashDot</option>
<option value="LongDashDot">LongDashDot</option>
<option value="LongDashDotDot">LongDashDotDot</option>
</select></p>
<p>Line Style 4: <br><select id="linestyle4_2" type="text">
<option value="" selected="selected">Select a type</option>
<option value="Solid">Solid</option>
<option value="ShortDash">ShortDash</option>
<option value="ShortDot">ShortDot</option>
<option value="ShortDashDot">ShortDashDot</option>
<option value="ShortDashDotDot">ShortDashDotDot</option>
<option value="Dot">Dot</option>
<option value="Dash">Dash</option>
<option value="LongDash">LongDash</option>
<option value="DashDot">DashDot</option>
<option value="LongDashDot">LongDashDot</option>
<option value="LongDashDotDot">LongDashDotDot</option>
</select></p>
<p>Line Style 5: <br><select id="linestyle5_2" type="text">
<option value="" selected="selected">Select a type</option>
<option value="Solid">Solid</option>
<option value="ShortDash">ShortDash</option>
<option value="ShortDot">ShortDot</option>
<option value="ShortDashDot">ShortDashDot</option>
<option value="ShortDashDotDot">ShortDashDotDot</option>
<option value="Dot">Dot</option>
<option value="Dash">Dash</option>
<option value="LongDash">LongDash</option>
<option value="DashDot">DashDot</option>
<option value="LongDashDot">LongDashDot</option>
<option value="LongDashDotDot">LongDashDotDot</option>
</select></p>
<p>Line Style 6: <br><select id="linestyle6_2" type="text">
<option value="" selected="selected">Select a type</option>
<option value="Solid">Solid</option>
<option value="ShortDash">ShortDash</option>
<option value="ShortDot">ShortDot</option>
<option value="ShortDashDot">ShortDashDot</option>
<option value="ShortDashDotDot">ShortDashDotDot</option>
<option value="Dot">Dot</option>
<option value="Dash">Dash</option>
<option value="LongDash">LongDash</option>
<option value="DashDot">DashDot</option>
<option value="LongDashDot">LongDashDot</option>
<option value="LongDashDotDot">LongDashDotDot</option>
</select></p>
<p>Line Style 7: <br><select id="linestyle7_2" type="text">
<option value="" selected="selected">Select a type</option>
<option value="Solid">Solid</option>
<option value="ShortDash">ShortDash</option>
<option value="ShortDot">ShortDot</option>
<option value="ShortDashDot">ShortDashDot</option>
<option value="ShortDashDotDot">ShortDashDotDot</option>
<option value="Dot">Dot</option>
<option value="Dash">Dash</option>
<option value="LongDash">LongDash</option>
<option value="DashDot">DashDot</option>
<option value="LongDashDot">LongDashDot</option>
<option value="LongDashDotDot">LongDashDotDot</option>
</select></p>
<p>Line Style 8: <br><select id="linestyle8_2" type="text">
<option value="" selected="selected">Select a type</option>
<option value="Solid">Solid</option>
<option value="ShortDash">ShortDash</option>
<option value="ShortDot">ShortDot</option>
<option value="ShortDashDot">ShortDashDot</option>
<option value="ShortDashDotDot">ShortDashDotDot</option>
<option value="Dot">Dot</option>
<option value="Dash">Dash</option>
<option value="LongDash">LongDash</option>
<option value="DashDot">DashDot</option>
<option value="LongDashDot">LongDashDot</option>
<option value="LongDashDotDot">LongDashDotDot</option>
</select></p>
<p>Line Style 9: <br><select id="linestyle9_2" type="text">
<option value="" selected="selected">Select a type</option>
<option value="Solid">Solid</option>
<option value="ShortDash">ShortDash</option>
<option value="ShortDot">ShortDot</option>
<option value="ShortDashDot">ShortDashDot</option>
<option value="ShortDashDotDot">ShortDashDotDot</option>
<option value="Dot">Dot</option>
<option value="Dash">Dash</option>
<option value="LongDash">LongDash</option>
<option value="DashDot">DashDot</option>
<option value="LongDashDot">LongDashDot</option>
<option value="LongDashDotDot">LongDashDotDot</option>
</select></p>
</div>
<div style="display:inline-block">
<p style="color:black; font-size: 14px">Width 1: <br><select id="linewidth1_2" type="text">
<option value="0" selected="selected">Select a Width</option>
<option value="1">1.0</option>
<option value="2">2.0</option>
<option value="3">3.0</option>
<option value="4">4.0</option>
<option value="5">5.0</option>
<option value="6">6.0</option>
<option value="7">7.0</option>
<option value="8">8.0</option>
<option value="9">9.0</option>
<option value="10">10.0</option>
</select></p>
<p>Width 2: <br><select id="linewidth2_2" type="text">
<option value="" selected="selected">Select a Width</option>
<option value="1">1.0</option>
<option value="2">2.0</option>
<option value="3">3.0</option>
<option value="4">4.0</option>
<option value="5">5.0</option>
<option value="6">6.0</option>
<option value="7">7.0</option>
<option value="8">8.0</option>
<option value="9">9.0</option>
<option value="10">10.0</option>
</select></p>
<p>Width 3: <br><select id="linewidth3_2" type="text">
<option value="" selected="selected">Select a Width</option>
<option value="1">1.0</option>
<option value="2">2.0</option>
<option value="3">3.0</option>
<option value="4">4.0</option>
<option value="5">5.0</option>
<option value="6">6.0</option>
<option value="7">7.0</option>
<option value="8">8.0</option>
<option value="9">9.0</option>
<option value="10">10.0</option>
</select></p>
<p>Width 4: <br><select id="linewidth4_2" type="text">
<option value="" selected="selected">Select a Width</option>
<option value="1">1.0</option>
<option value="2">2.0</option>
<option value="3">3.0</option>
<option value="4">4.0</option>
<option value="5">5.0</option>
<option value="6">6.0</option>
<option value="7">7.0</option>
<option value="8">8.0</option>
<option value="9">9.0</option>
<option value="10">10.0</option>
</select></p>
<p>Width 5: <br><select id="linewidth5_2" type="text">
<option value="" selected="selected">Select a Width</option>
<option value="1">1.0</option>
<option value="2">2.0</option>
<option value="3">3.0</option>
<option value="4">4.0</option>
<option value="5">5.0</option>
<option value="6">6.0</option>
<option value="7">7.0</option>
<option value="8">8.0</option>
<option value="9">9.0</option>
<option value="10">10.0</option>
</select></p>
<p>Width 6: <br><select id="linewidth6_2" type="text">
<option value="" selected="selected">Select a Width</option>
<option value="1">1.0</option>
<option value="2">2.0</option>
<option value="3">3.0</option>
<option value="4">4.0</option>
<option value="5">5.0</option>
<option value="6">6.0</option>
<option value="7">7.0</option>
<option value="8">8.0</option>
<option value="9">9.0</option>
<option value="10">10.0</option>
</select></p>
<p>Width 7: <br><select id="linewidth7_2" type="text">
<option value="" selected="selected">Select a Width</option>
<option value="1">1.0</option>
<option value="2">2.0</option>
<option value="3">3.0</option>
<option value="4">4.0</option>
<option value="5">5.0</option>
<option value="6">6.0</option>
<option value="7">7.0</option>
<option value="8">8.0</option>
<option value="9">9.0</option>
<option value="10">10.0</option>
</select></p>
<p>Width 8: <br><select id="linewidth8_2" type="text">
<option value="" selected="selected">Select a Width</option>
<option value="1">1.0</option>
<option value="2">2.0</option>
<option value="3">3.0</option>
<option value="4">4.0</option>
<option value="5">5.0</option>
<option value="6">6.0</option>
<option value="7">7.0</option>
<option value="8">8.0</option>
<option value="9">9.0</option>
<option value="10">10.0</option>
</select></p>
<p>Width 9: <br><select id="linewidth9_2" type="text">
<option value="" selected="selected">Select a Width</option>
<option value="1">1.0</option>
<option value="2">2.0</option>
<option value="3">3.0</option>
<option value="4">4.0</option>
<option value="5">5.0</option>
<option value="6">6.0</option>
<option value="7">7.0</option>
<option value="8">8.0</option>
<option value="9">9.0</option>
<option value="10">10.0</option>
</select></p>
</div>
</div>
</div>
</div>
<div style="width: 100%; height: 100px; margin-top: 50px; align:center; text-align:center">
<button id="btn_default2" style="border-radius:30px" class="w3-btn w3-gray w3-text-white w3-xlarge">Default</button>
</div>
</div>
</div>

</div>

</body>

<script type="text/javascript" id="runscript_hourly_2">
$(function () {
	
var chart;
var estado = true;
var zoom_menu = true;
var legend = ["","","","","","","","","",""];
var color = ["","","","","","","","","",""];
var typeline = ["","","","","","","","","",""];
var widthline = [0,0,0,0,0,0,0,0,0,0];
var legend_old1 = "<?php echo $f1; ?>";
var legend_old2 = "<?php echo $f2; ?>";
var legend_old3 = "<?php echo $f3; ?>";
var legend_old4 = "<?php echo $f4; ?>";
var legend_old5 = "<?php echo $f5; ?>";
var legend_old6 = "<?php echo $f6; ?>";
var legend_old7 = "<?php echo $f7; ?>";
var legend_old8 = "<?php echo $f8; ?>";
var legend_old9 = "<?php echo $f9; ?>";
var pipoco = 0;
var vis_theme = false;
var vis_text = false;
var vis_colors = false;
var vis_line = false;
var fonte = "Arial+Black";
var vis_menu_person = false;

$(document).ready(function() {
		
Highcharts.createElement('link', {
	href: '//fonts.googleapis.com/css?family=Meddon',
	rel: 'stylesheet',
	type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);


var acc2 = new Highcharts.stockChart({
	chart: {
				renderTo: 'container2',
				fontFamily: "Meddon, normal",
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				resetZoomButton: {
				position: {
					align: 'left', // right by default
					verticalAlign: 'top', 
					x: 47,
					y: 10
				},
				relativeTo: 'chart'
				},
				events: {
						click: function(e) {	
						//console.log(e.xAxis[0].axis.categories[Math.round(e.xAxis[0].value)])
						// alert(e.xAxis[0].value);
						//acc2.chart.series[1].show();
						if(estado != false){
						if (e.shiftKey == 1) {	
						acc2.xAxis[0].options.plotLines[1].color = "red";
						acc2.xAxis[0].options.plotLines[1].value = e.xAxis[0].value;
						acc2.xAxis[0].update();						
						}else{	
						acc2.xAxis[0].options.plotLines[0].color = "red";
						acc2.xAxis[0].options.plotLines[0].value = e.xAxis[0].value;
						acc2.xAxis[0].update();						
						}						
						}
      }
    }
	},
	        rangeSelector: {
            allButtonsEnabled: true,
			enabled: true,
            buttons: [{
                type: 'hour',
                count: 6,
                text: '6 Hours',
                dataGrouping: {
                    forced: true,
                    units: [['hour', [1]]]
                }
            },{
                type: 'hour',
                count: 12,
                text: '12 Hours',
                dataGrouping: {
                    forced: true,
                    units: [['hour', [1]]]
                }
            }, {
                type: 'day',
                count: 1,
                text: '1 Day',
                dataGrouping: {
                    forced: true,
                    units: [['hour', [1]]]
                }
            }, {
                type: 'week',
				count: 1,
                text: '1 Week',
                dataGrouping: {
                    forced: true,
                    units: [['hour', [1]]]
                }
            }, {
                type: 'month',
				count: 1,
                text: '1 Month',
                dataGrouping: {
                    forced: true,
                    units: [['hour', [1]]]
                }
            }, {
                type: 'all',
                text: 'All',
                dataGrouping: {
                    forced: true,
                    units: [['hour', [1]]]
                }
            }],
			buttonTheme: {
                width: 80
            },
            selected: 5
        },
			exporting: {
			buttons: {
            customButton: {
			    theme: {
                'stroke-width': 1,
                stroke: 'silver',
				fill:"lightgray",
                r: 0,
                states: {
                    hover: {
                        fill: 'gray'
                    },
                    select: {
                        stroke: '#039',
                        fill: '#a4edba'
                    }
                }
            },	
            text: '...',
            onclick: function () {
			if(zoom_menu == true){
            acc2.rangeSelector.inputGroup.hide();
			acc2.rangeSelector.zoomText.hide();
			$.each(acc2.rangeSelector.buttons,function(i,b){
            b.hide();
			zoom_menu = false;
			});
			}else if(zoom_menu == false){
            acc2.rangeSelector.inputGroup.show();
			acc2.rangeSelector.zoomText.show();
			$.each(acc2.rangeSelector.buttons,function(i,b){
            b.show();
			zoom_menu = true;
			});
			}
            }
            }
            },	
			enabled: true,
			chartOptions: {
				title: {
					x: 0,
					y: 35
                },
                rangeSelector: {
                    enabled: false
                }
            }
			},
	title: {
				text: "NPSmart",// - ' + node,
				x: -20, //center
	},	
    xAxis: {
        type: 'datetime',
		tickInterval: 1 * 3600 * 1000,		
			plotLines: [{
			dashStyle: 'dash',
			color: 'red',
			width: 2,
			zIndex: 3
      
			},{
			dashStyle: 'dash',
			color: 'red',
			width: 2,
			zIndex: 3
      
			}],
		labels: {
				format: '{value:%Y-%m-%d %H:%M:%S}',
				autoRotationLimit: 360
			}
    },
	yAxis: [{
		 labels: {
            align: 'right',
            x: -5,
        },
		offset: 10,
		startOnTick:true,
		endOnTick: true,
		max: null,
		min: null,
		tickInterval: null,
        lineWidth: 1,
		opposite: false,
        title: {
            text: ''
        }
		}, {
		labels: {
        align: 'left',
        x: 5,
        },	
		startOnTick:true,
		endOnTick: true,
		tickInterval: null,
        lineWidth: 1,
        opposite: true,
        title: {
            text: ''
        }
    }],
	
	tooltip: {
	shared: true,
	headerFormat: '<span>{point.key}</span><br/>',	
	pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
    changeDecimals: 3,
    valueDecimals: 3
	},
	
    plotOptions: {
		areaspline:{
		allowPointSelect: true,
			
		},	
        series: {
			//compare: 'value',
			marker: {
                enabled: false
            },
            events: {
				// click: function (){
				// this.group.toFront();	
				// },	
                legendItemClick: function () {
						this.group.toFront();
						if(this.name == "Marker"){
						if(this.visible == true){
						estado = false;		
						acc2.xAxis[0].options.plotLines[0].color = "transparent";
						acc2.xAxis[0].options.plotLines[1].color = "transparent";
						acc2.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado = true;	
						acc2.xAxis[0].options.plotLines[0].color = "red";
						acc2.xAxis[0].options.plotLines[1].color = "red";
						acc2.xAxis[0].update();
						}	
						}
				}
			}
		},
		areaspline: {
        softThreshold: true
        },
		column: {
        softThreshold: true
        }		
	},	
	
	legend: {
						enabled:true,
						layout: 'horizontal',
						align: 'center',
						verticalAlign: 'bottom',
						floating: false,
						borderWidth: 0
	},

    series: [{
	name: 'Marker',
	
	},{
		type: '<?php
						if($t1 == 1){
						echo 'spline';	
						}else if($t1 == 2){
						echo 'areaspline';	
						}else if($t1 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f1 ?>',
		
        data: [
		<?php
		if($ct1 == 2){
        if($q1 != ""){    
		for ($i = 0; $i < $kpi_query1->num_rows(); $i++) {
		$row = $kpi_query1->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}
		echo "[Date.parse('".$row['date']." GMT-0000'), ".$row['node']."], ";	
		}
		}
		}		
        ?>		
        ],
		
		showInLegend: <?php echo $v1 ?>,
		
		yAxis: <?php echo $c1 ?>
		
		},{
		type: '<?php
						if($t2 == 1){
						echo 'spline';	
						}else if($t2 == 2){
						echo 'areaspline';	
						}else if($t2 == 3){
						echo 'column';	
						}
						?>', 
						
		name: '<?php echo $f2 ?>',
		
        data: [
		<?php
		if($ct2 == 2){
        if($q2 != ""){    
		for ($i = 0; $i < $kpi_query2->num_rows(); $i++) {
		$row = $kpi_query2->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}
		echo "[Date.parse('".$row['date']." GMT-0000'), ".$row['node']."], ";	
		}
		}
		}
        ?>		
        ],
		
		showInLegend: <?php echo $v2 ?>,
		
		yAxis: <?php echo $c2 ?>
		
		},{
		type: '<?php
						if($t3 == 1){
						echo 'spline';	
						}else if($t3 == 2){
						echo 'areaspline';	
						}else if($t3 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f3 ?>',
		
        data: [
		<?php
		if($ct3 == 2){
        if($q3 != ""){    
		for ($i = 0; $i < $kpi_query3->num_rows(); $i++) {
		$row = $kpi_query3->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']." GMT-0000'), ".$row['node']."], ";	
		}
		}
		}
        ?>		
        ],
		
		showInLegend: <?php echo $v3 ?>,
		
		yAxis: <?php echo $c3 ?>
		
		},{
		type: '<?php
						if($t4 == 1){
						echo 'spline';	
						}else if($t4 == 2){
						echo 'areaspline';	
						}else if($t4 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f4 ?>',
		
        data: [
		<?php
		if($ct4 == 2){
        if($q4 != ""){    
		for ($i = 0; $i < $kpi_query4->num_rows(); $i++) {
		$row = $kpi_query4->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']." GMT-0000'), ".$row['node']."], ";	
		}
		}
		}
        ?>		
        ],
		
		showInLegend: <?php echo $v4 ?>,
		
		yAxis: <?php echo $c4 ?>
		
		},{
		type: '<?php
						if($t5 == 1){
						echo 'spline';	
						}else if($t5 == 2){
						echo 'areaspline';	
						}else if($t5 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f5 ?>',
		
        data: [
		<?php
		if($ct5 == 2){
        if($q5 != ""){    
		for ($i = 0; $i < $kpi_query5->num_rows(); $i++) {
		$row = $kpi_query5->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']." GMT-0000'), ".$row['node']."], ";	
		}
		}
		}
        ?>		
        ],
		
		showInLegend: <?php echo $v5 ?>,
		
		yAxis: <?php echo $c5 ?>
		
		},{
		type: '<?php
						if($t6 == 1){
						echo 'spline';	
						}else if($t6 == 2){
						echo 'areaspline';	
						}else if($t6 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f6 ?>',
		
        data: [
		<?php
		if($ct6 == 2){
        if($q6 != ""){    
		for ($i = 0; $i < $kpi_query6->num_rows(); $i++) {
		$row = $kpi_query6->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']." GMT-0000'), ".$row['node']."], ";	
		}
		}
		}
        ?>		
        ],
		
		showInLegend: <?php echo $v6 ?>,
		
		yAxis: <?php echo $c6 ?>
		
		},{
		type: '<?php
						if($t7 == 1){
						echo 'spline';	
						}else if($t7 == 2){
						echo 'areaspline';	
						}else if($t7 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f7 ?>',
		
        data: [
		<?php
		if($ct7 == 2){
        if($q7 != ""){    
		for ($i = 0; $i < $kpi_query7->num_rows(); $i++) {
		$row = $kpi_query7->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']." GMT-0000'), ".$row['node']."], ";	
		}
		}
		}
        ?>		
        ],
		
		showInLegend: <?php echo $v7 ?>,
		
		yAxis: <?php echo $c7 ?>
		
		},{
		type: '<?php
						if($t8 == 1){
						echo 'spline';	
						}else if($t8 == 2){
						echo 'areaspline';	
						}else if($t8 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f8 ?>',
		
        data: [
		<?php
		if($ct8 == 2){
        if($q8 != ""){    
		for ($i = 0; $i < $kpi_query8->num_rows(); $i++) {
		$row = $kpi_query8->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']." GMT-0000'), ".$row['node']."], ";	
		}
		}
		}
        ?>		
        ],
		
		showInLegend: <?php echo $v8 ?>,
		
		yAxis: <?php echo $c8 ?>
		
		},{
		type: '<?php
						if($t9 == 1){
						echo 'spline';	
						}else if($t9 == 2){
						echo 'areaspline';	
						}else if($t9 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f9 ?>',
		
        data: [
		<?php
		if($ct9 == 2){
        if($q9 != ""){    
		for ($i = 0; $i < $kpi_query9->num_rows(); $i++) {
		$row = $kpi_query9->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']." GMT-0000'), ".$row['node']."], ";	
		}
		}
		}
        ?>		
        ],
		
		showInLegend: <?php echo $v9 ?>,
		
		yAxis: <?php echo $c9 ?>
    }
	]
});

//////////////////////////////////////// SETA O VALOR DEFAULT DAS INPUT TEXT DAS ESCALAS ///////////////////////////

var acc2 = $("#container2").highcharts();
$('#scale_max2').val(acc2.yAxis[0].getExtremes().dataMax);
$('#scale_min2').val(acc2.yAxis[0].getExtremes().dataMin);

});

//////////////////////////////////////////////////////// CORES DAS LINHAS ////////////////////////////////////////

$('#colorSelector1_2').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc2 = $("#container2").highcharts();
		$('#colorSelector1_2').css('backgroundColor', '#' + hex);
		color[1] = hex;
		acc2.series[1].update({color: "#"+color[1]+""});
	}
});

$('#colorSelector2_2').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc2 = $("#container2").highcharts();
		$('#colorSelector2_2').css('backgroundColor', '#' + hex);
		color[2] = hex;
		acc2.series[2].update({color: "#"+color[2]+""});
	}
});

$('#colorSelector3_2').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc2 = $("#container2").highcharts();
		$('#colorSelector3_2').css('backgroundColor', '#' + hex);
		color[3] = hex;
		acc2.series[3].update({color: "#"+color[3]+""});
	}
});

$('#colorSelector4_2').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc2 = $("#container2").highcharts();
		$('#colorSelector4_2').css('backgroundColor', '#' + hex);
		color[4] = hex;
		acc2.series[4].update({color: "#"+color[4]+""});
	}
});

$('#colorSelector5_2').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc2 = $("#container2").highcharts();
		$('#colorSelector5_2').css('backgroundColor', '#' + hex);
		color[5] = hex;
		acc2.series[5].update({color: "#"+color[5]+""});
	}
});

$('#colorSelector6_2').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc2 = $("#container2").highcharts();
		$('#colorSelector6_2').css('backgroundColor', '#' + hex);
		color[6] = hex;
		acc2.series[6].update({color: "#"+color[6]+""});
	}
});

$('#colorSelector7_2').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc2 = $("#container2").highcharts();
		$('#colorSelector7_2').css('backgroundColor', '#' + hex);
		color[7] = hex;
		acc2.series[7].update({color: "#"+color[7]+""});
	}
});

$('#colorSelector8_2').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc2 = $("#container2").highcharts();
		$('#colorSelector8_2').css('backgroundColor', '#' + hex);
		color[8] = hex;
		acc2.series[8].update({color: "#"+color[8]+""});
	}
});

$('#colorSelector9_2').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc2 = $("#container2").highcharts();
		$('#colorSelector9_2').css('backgroundColor', '#' + hex);
		color[9] = hex;
		acc2.series[9].update({color: "#"+color[9]+""});
	}
});

//////////////////////////////////////////////////////////////// TEMAS /////////////////////////////////////////////

$('#theme2').change(function(){
var acc2 = $("#container2").highcharts();		
var x = $(this).val();	
if(x == "SandSignika"){
acc2.destroy();	
eval(document.getElementById("Sand_Signika").innerHTML);
Highcharts.setOptions(chart_Sand_Signika);
$( "#seta_show2" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_hourly_2").innerHTML);	 
}else
if(x == "DarkUnika"){
acc2.destroy();	
eval(document.getElementById("Dark_Unika").innerHTML);
Highcharts.setOptions(chart_Dark_Unika);
$( "#seta_show2" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_hourly_2").innerHTML);	 
}else
if(x == "DarkBlue"){
acc2.destroy();	
eval(document.getElementById("Dark_Blue").innerHTML);
Highcharts.setOptions(chart_Dark_Blue);
$( "#seta_show2" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_hourly_2").innerHTML);	 
}else
if(x == "Skies"){
acc2.destroy();	
eval(document.getElementById("Nuvem").innerHTML);
Highcharts.setOptions(chart_Skies);
$( "#seta_show2" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_hourly_2").innerHTML);	 
}else
if(x == "DarkGreen"){
acc2.destroy();	
eval(document.getElementById("Dark_Green").innerHTML);
Highcharts.setOptions(chart_Dark_Green);
$( "#seta_show2" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_hourly_2").innerHTML);	 
}else
if(x == "FlatDark"){
acc2.destroy();	
eval(document.getElementById("Flat_Dark").innerHTML);
Highcharts.setOptions(chart_Flat_Dark);
$( "#seta_show2" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_hourly_2").innerHTML);	 
}else
if(x == "Null"){
acc2.destroy();	
eval(document.getElementById("Empty").innerHTML);
Highcharts.setOptions(chart_null);
$( "#seta_show2" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_hourly_2").innerHTML);	 
}else
if(x == "val_ffx"){
acc2.destroy();	
eval(document.getElementById("ffx").innerHTML);
Highcharts.setOptions(chart_ffx);
$( "#seta_show2" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_hourly_2").innerHTML);	 
}else
if(x == "val_538"){
acc2.destroy();	
eval(document.getElementById("538").innerHTML);
Highcharts.setOptions(chart_538);
$( "#seta_show2" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_hourly_2").innerHTML);	 
}	
});

//////////////////////////////////////////////////////////////// TÍTULO ///////////////////////////////////////////

$('#txt_title2').on('keyup mouseup', function(){
var acc2 = $("#container2").highcharts();	
var title = document.getElementById('txt_title2').value;	
if(title != ""){
acc2.setTitle({text: ""+title+""});
}else{
acc2.setTitle({text: "NPSmart"});
}	
});

//////////////////////////////////////////////////////////////// LEGENDAS //////////////////////////////////////////

$('#txt_legend1_2').on('keyup mouseup', function(){
var acc2 = $("#container2").highcharts();	
if($("#txt_legend1_2").val() != ""){
legend[1] = $("#txt_legend1_2").val();	
acc2.legend.allItems[1].update({name:""+legend[1]+""});
}else{
acc2.legend.allItems[1].update({name:""+legend_old1+""});
}	
});

$('#txt_legend2_2').on('keyup mouseup', function(){
var acc2 = $("#container2").highcharts();	
if($("#txt_legend2_2").val() != ""){
legend[2] = $("#txt_legend2_2").val();	
acc2.legend.allItems[2].update({name:""+legend[2]+""});
}else{
acc2.legend.allItems[2].update({name:""+legend_old2+""});
}	
});

$('#txt_legend3_2').on('keyup mouseup', function(){
var acc2 = $("#container2").highcharts();	
if($("#txt_legend3_2").val() != ""){
legend[3] = $("#txt_legend3_2").val();	
acc2.legend.allItems[3].update({name:""+legend[3]+""});
}else{
acc2.legend.allItems[3].update({name:""+legend_old3+""});
}	
});

$('#txt_legend4_2').on('keyup mouseup', function(){
var acc2 = $("#container2").highcharts();	
if($("#txt_legend4_2").val() != ""){
legend[4] = $("#txt_legend4_2").val();	
acc2.legend.allItems[4].update({name:""+legend[4]+""});
}else{
acc2.legend.allItems[4].update({name:""+legend_old4+""});
}	
});

$('#txt_legend5_2').on('keyup mouseup', function(){
var acc2 = $("#container2").highcharts();	
if($("#txt_legend5_2").val() != ""){
legend[5] = $("#txt_legend5_2").val();	
acc2.legend.allItems[5].update({name:""+legend[5]+""});
}else{
acc2.legend.allItems[5].update({name:""+legend_old5+""});
}	
});

$('#txt_legend6_2').on('keyup mouseup', function(){
var acc2 = $("#container2").highcharts();	
if($("#txt_legend6_2").val() != ""){
legend[6] = $("#txt_legend6_2").val();	
acc2.legend.allItems[6].update({name:""+legend[6]+""});
}else{
acc2.legend.allItems[6].update({name:""+legend_old6+""});
}	
});

$('#txt_legend7_2').on('keyup mouseup', function(){
var acc2 = $("#container2").highcharts();	
if($("#txt_legend7_2").val() != ""){
legend[7] = $("#txt_legend7_2").val();	
acc2.legend.allItems[7].update({name:""+legend[7]+""});
}else{
acc2.legend.allItems[7].update({name:""+legend_old7+""});
}	
});

$('#txt_legend8_2').on('keyup mouseup', function(){
var acc2 = $("#container2").highcharts();	
if($("#txt_legend8_2").val() != ""){
legend[8] = $("#txt_legend8_2").val();	
acc2.legend.allItems[8].update({name:""+legend[8]+""});
}else{
acc2.legend.allItems[8].update({name:""+legend_old8+""});
}	
});

$('#txt_legend9_2').on('keyup mouseup', function(){
var acc2 = $("#container2").highcharts();	
if($("#txt_legend9_2").val() != ""){
legend[9] = $("#txt_legend9_2").val();	
acc2.legend.allItems[9].update({name:""+legend[9]+""});
}else{
acc2.legend.allItems[9].update({name:""+legend_old9+""});
}	
});

//////////////////////////////////////////////////////////////// LINE STYLE ////////////////////////////////////////

$('#linestyle1_2').change(function(){
var acc2 = $("#container2").highcharts();
if($("#linestyle1_2").val() != ""){
typeline[1] = $("#linestyle1_2").val();
acc2.series[1].update({dashStyle: ""+typeline[1]+""});
}else{
acc2.series[1].update({dashStyle: "Solid"});	
}
});

$('#linestyle2_2').change(function(){
var acc2 = $("#container2").highcharts();
if($("#linestyle2_2").val() != ""){
typeline[2] = $("#linestyle2_2").val();
acc2.series[2].update({dashStyle: ""+typeline[2]+""});
}else{
acc2.series[2].update({dashStyle: "Solid"});	
}
});

$('#linestyle3_2').change(function(){
var acc2 = $("#container2").highcharts();
if($("#linestyle3_2").val() != ""){
typeline[3] = $("#linestyle3_2").val();
acc2.series[3].update({dashStyle: ""+typeline[3]+""});
}else{
acc2.series[3].update({dashStyle: "Solid"});	
}
});

$('#linestyle4_2').change(function(){
var acc2 = $("#container2").highcharts();
if($("#linestyle4_2").val() != ""){
typeline[4] = $("#linestyle4_2").val();
acc2.series[4].update({dashStyle: ""+typeline[4]+""});
}else{
acc2.series[4].update({dashStyle: "Solid"});	
}
});

$('#linestyle5_2').change(function(){
var acc2 = $("#container2").highcharts();
if($("#linestyle5_2").val() != ""){
typeline[5] = $("#linestyle5_2").val();
acc2.series[5].update({dashStyle: ""+typeline[5]+""});
}else{
acc2.series[5].update({dashStyle: "Solid"});	
}
});

$('#linestyle6_2').change(function(){
var acc2 = $("#container2").highcharts();
if($("#linestyle6_2").val() != ""){
typeline[6] = $("#linestyle6_2").val();
acc2.series[6].update({dashStyle: ""+typeline[6]+""});
}else{
acc2.series[6].update({dashStyle: "Solid"});	
}
});

$('#linestyle7_2').change(function(){
var acc2 = $("#container2").highcharts();
if($("#linestyle7_2").val() != ""){
typeline[7] = $("#linestyle7_2").val();
acc2.series[7].update({dashStyle: ""+typeline[7]+""});
}else{
acc2.series[7].update({dashStyle: "Solid"});	
}
});

$('#linestyle8_2').change(function(){
var acc2 = $("#container2").highcharts();
if($("#linestyle8_2").val() != ""){
typeline[8] = $("#linestyle8_2").val();
acc2.series[8].update({dashStyle: ""+typeline[8]+""});
}else{
acc2.series[8].update({dashStyle: "Solid"});	
}
});

$('#linestyle9_2').change(function(){
var acc2 = $("#container2").highcharts();
if($("#linestyle9_2").val() != ""){
typeline[9] = $("#linestyle9_2").val();
acc2.series[9].update({dashStyle: ""+typeline[9]+""});
}else{
acc2.series[9].update({dashStyle: "Solid"});	
}
});

//////////////////////////////////////////////////////////////// LINE WIDTH ////////////////////////////////////////

$('#linewidth1_2').change(function(){
var acc2 = $("#container2").highcharts();	
if($("#linewidth1_2").val() != 0){
var width_line = $("#linewidth1_2").val();
var int_width_line	= parseInt(width_line);
acc2.series[1].update({lineWidth: int_width_line});
}else{
acc2.series[1].update({lineWidth: 2});	
}	
});

$('#linewidth2_2').change(function(){
var acc2 = $("#container2").highcharts();	
if($("#linewidth2_2").val() != 0){
var width_line = $("#linewidth2_2").val();
var int_width_line	= parseInt(width_line);
acc2.series[2].update({lineWidth: int_width_line});
}else{
acc2.series[2].update({lineWidth: 2});	
}
});

$('#linewidth3_2').change(function(){
var acc2 = $("#container2").highcharts();	
if($("#linewidth3_2").val() != 0){
var width_line = $("#linewidth3_2").val();
var int_width_line	= parseInt(width_line);
acc2.series[3].update({lineWidth: int_width_line});
}else{
acc2.series[3].update({lineWidth: 2});	
}
});

$('#linewidth4_2').change(function(){
var acc2 = $("#container2").highcharts();	
if($("#linewidth4_2").val() != 0){
var width_line = $("#linewidth4_2").val();
var int_width_line	= parseInt(width_line);
acc2.series[4].update({lineWidth: int_width_line});
}else{
acc2.series[4].update({lineWidth: 2});	
}
});

$('#linewidth5_2').change(function(){
var acc2 = $("#container2").highcharts();	
if($("#linewidth5_2").val() != 0){
var width_line = $("#linewidth5_2").val();
var int_width_line	= parseInt(width_line);
acc2.series[5].update({lineWidth: int_width_line});
}else{
acc2.series[5].update({lineWidth: 2});	
}
});

$('#linewidth6_2').change(function(){
var acc2 = $("#container2").highcharts();	
if($("#linewidth6_2").val() != 0){
var width_line = $("#linewidth6_2").val();
var int_width_line	= parseInt(width_line);
acc2.series[6].update({lineWidth: int_width_line});
}else{
acc2.series[6].update({lineWidth: 2});	
}
});

$('#linewidth7_2').change(function(){
var acc2 = $("#container2").highcharts();	
if($("#linewidth7_2").val() != 0){
var width_line = $("#linewidth7_2").val();
var int_width_line	= parseInt(width_line);
acc2.series[7].update({lineWidth: int_width_line});
}else{
acc2.series[7].update({lineWidth: 2});	
}
});

$('#linewidth8_2').change(function(){
var acc2 = $("#container2").highcharts();	
if($("#linewidth8_2").val() != 0){
var width_line = $("#linewidth8_2").val();
var int_width_line	= parseInt(width_line);
acc2.series[8].update({lineWidth: int_width_line});
}else{
acc2.series[8].update({lineWidth: 2});	
}
});

$('#linewidth9_2').change(function(){
var acc2 = $("#container2").highcharts();	
if($("#linewidth9_2").val() != 0){
var width_line = $("#linewidth9_2").val();
var int_width_line	= parseInt(width_line);
acc2.series[9].update({lineWidth: int_width_line});
}else{
acc2.series[9].update({lineWidth: 2});	
}
});

//////////////////////////////////////////////////////////////// SCALE /////////////////////////////////////////////

$('#scale_max2').on('keyup mouseup', function(){
	
var x = $('#scale_max2').val();
var acc2 = $("#container2").highcharts();
if(x != ""){	
acc2.yAxis[0].update({max: ""+x+""});
}else{
$('#scale_max2').val(acc2.yAxis[0].getExtremes().dataMax);	
acc2.yAxis[0].update({max: null});
}	
});

$('#scale_min2').on('keyup mouseup', function(){
	
var x = $('#scale_min2').val();
var acc2 = $("#container2").highcharts();
if(x != ""){	
acc2.yAxis[0].update({min: ""+x+""});
}else{
$('#scale_min2').val(acc2.yAxis[0].getExtremes().dataMin);	
acc2.yAxis[0].update({min: null});
}	
});

//////////////////////////////////////////////////////////////// FONT STYLE ///////////////////////////////////////

$('#minha_Fonte2').fontselect().change(function(){
        
// replace + signs with spaces for css
var font = $(this).val().replace(/\+/g, ' ');
var acc2 = $("#container2").highcharts();
// split font into family and weight
font = font.split(':');

// set family on paragraphs 
//$('p').css('font-family', font[0]);
 //console.log(font[0]);
fonte = font[0];
acc2.update({
chart: {
style: {
fontFamily: "'"+fonte+"', sans-serif"
}
}
});
});

///////////////////////////////////////////////////////////////// FONT SIZE ////////////////////////////////////////

$('#myFontSize_Axis2').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc2 = $("#container2").highcharts();

console.log(SizeFont);
// acc2.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc2.update({
xAxis:{
labels: {
style:{
fontSize: ""+SizeFont+"px"	
}		
}		
}	
});

acc2.update({
yAxis:{
labels: {
style:{
fontSize: ""+SizeFont+"px"	
}		
}		
}	
});
	
});

/////////////////////////////////////////////////////// FONT SIZE TITLE ////////////////////////////////////////////

$('#myFontSize_Title2').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc2 = $("#container2").highcharts();

console.log(SizeFont);
// acc2.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc2.update({
title:{
// labels: {
style:{
fontSize: ""+SizeFont+"px"	
}		
// }		
}	
});
	
});

////////////////////////////////////////////////////////////////// COR DOS EIXOS ///////////////////////////////////

$('#colorSelector_Axis2').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc2 = $("#container2").highcharts();
		$('#colorSelector_Axis2').css('backgroundColor', '#' + hex);
		acc2.update({
		xAxis:{
		labels: {
		style:{
		color: '#' + hex	
		}		
		}		
		}	
		});

		acc2.update({
		yAxis:{
		labels: {
		style:{
		color: '#' + hex	
		}		
		}		
		}	
		});		
	}
});

////////////////////////////////////////////////////// COR DO TÍTULO ////////////////////////////////////////////////

$('#colorSelector_Title2').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		var acc2 = $("#container2").highcharts();
		$('#colorSelector_Title2').css('backgroundColor', '#' + hex);
		acc2.update({
		title:{
		// labels: {
		style:{
		color: '#' + hex	
		}		
		// }		
		}	
		});		
	}
});

/////////////////////////////////////////// FUNÇOES AO CLICAR NA SETINHA ///////////////////////////////////////////

$( "#btn_theme2" ).click(function() {

if(vis_theme == true){
document.getElementById("div_theme2").style.display = "none";
$( "#Seta_Theme2" ).attr( "class", "fa fa-caret-down");
vis_theme = false;	
}else if(vis_theme == false){	
document.getElementById("div_theme2").style.display = "block";
document.getElementById("div_text2").style.display = "none";
document.getElementById("div_line2").style.display = "none";
document.getElementById("div_colors2").style.display = "none";
$( "#Seta_Theme2" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Line2" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors2" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text2" ).attr( "class", "fa fa-caret-down");
vis_theme = true;
}

});

$( "#btn_text2" ).click(function() {

if(vis_text == true){
document.getElementById("div_text2").style.display = "none";
$( "#Seta_Text2" ).attr( "class", "fa fa-caret-down");
vis_text = false;	
}else if(vis_text == false){	
document.getElementById("div_text2").style.display = "block";
document.getElementById("div_theme2").style.display = "none";
document.getElementById("div_line2").style.display = "none";
document.getElementById("div_colors2").style.display = "none";
$( "#Seta_Theme2" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line2" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors2" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text2" ).attr( "class", "fa fa-caret-up");
vis_text = true;
}

});	

$( "#btn_colors2" ).click(function() {

if(vis_colors == true){
document.getElementById("div_colors2").style.display = "none";
$( "#Seta_Colors2" ).attr( "class", "fa fa-caret-down");
vis_colors = false;	
}else if(vis_colors == false){	
document.getElementById("div_text2").style.display = "none";
document.getElementById("div_theme2").style.display = "none";
document.getElementById("div_line2").style.display = "none";
document.getElementById("div_colors2").style.display = "block";
$( "#Seta_Theme2" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line2" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors2" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Text2" ).attr( "class", "fa fa-caret-down");
vis_colors = true;
}

});	

$( "#btn_line_2" ).click(function() {

if(vis_line == true){
document.getElementById("div_line2").style.display = "none";
$( "#Seta_Line2" ).attr( "class", "fa fa-caret-down");
vis_line = false;	
}else if(vis_line == false){	
document.getElementById("div_text2").style.display = "none";
document.getElementById("div_theme2").style.display = "none";
document.getElementById("div_line2").style.display = "block";
document.getElementById("div_colors2").style.display = "none";
$( "#Seta_Theme2" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line2" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Colors2" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text2" ).attr( "class", "fa fa-caret-down");
vis_line = true;
}

});

$( "#btn_default2" ).click(function() {
var acc2 = $("#container2").highcharts();	
acc2.destroy();
eval(document.getElementById("runscript_hourly_2").innerHTML);
});	

$( ".btn_show2" ).click(function() {
var acc2 = $("#container2").highcharts();
var cont2 = $("#container2"); 	
if(vis_menu_person == false){
cont2.css('width','70%');
acc2.setSize(cont2.width(), 650, true);
document.getElementById("Resumex2").style.display = "inline-block";
$( "#seta_show2" ).attr( "class", "fa fa-arrow-right");
vis_menu_person = true;
}else if (vis_menu_person == true){
document.getElementById("Resumex2").style.display = "none";
cont2.css('width','95%');
acc2.setSize(cont2.width(), 650, true);
$( "#seta_show2" ).attr( "class", "fa fa-arrow-left");
vis_menu_person = false;
}	
});		
	
});
</script>