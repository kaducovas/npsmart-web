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

if(($ct1 == 9) && ($q1 != "")){
$v1 = "true";	
}else{
$v1 = "false";
}

if(($ct2 == 9) && ($q2 != "")){
$v2 = "true";	
}else{
$v2 = "false";
}

if(($ct3 == 9) && ($q3 != "")){
$v3 = "true";	
}else{
$v3 = "false";
}

if(($ct4 == 9) && ($q4 != "")){
$v4 = "true";	
}else{
$v4 = "false";
}

if(($ct5 == 9) && ($q5 != "")){
$v5 = "true";	
}else{
$v5 = "false";
}

if(($ct6 == 9) && ($q6 != "")){
$v6 = "true";	
}else{
$v6 = "false";
}

if(($ct7 == 9) && ($q7 != "")){
$v7 = "true";	
}else{
$v7 = "false";
}

if(($ct8 == 9) && ($q8 != "")){
$v8 = "true";	
}else{
$v8 = "false";
}

if(($ct9 == 9) && ($q9 != "")){
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

.btn_show9d {
  
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

.btn_show9d:active {
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

.outer9d{
	
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

#container9d {

display: none;
width: 95%;
height: 650px;
margin: 5px;
		
}

#buttons_show9d{

margin: 5px;	
display: none;
width: 2.5%;
height: 650px;
background-color: lightgray;
vertical-align:top;
width:45px;
max-width: 45px;
	
}

#Resumex9d{

width: 25%;
margin: 5px;
display: none;
height: 650px;
display: none;
vertical-align:top;

}

.cs_menu_theme9d, .cs_menu_txt9d, .cs_menu_color9d, .cs_menu_line_style9d{

margin:10px 10px 10px 0px; 
display:block; 
width: 100%;
background-color: #3C6D7A; 
text-align:center;
border: 1px solid black;

	
}

.cs_menu_txt9d p, .cs_menu_color9d p, .cs_menu_line_style9d p, .cs_menu_theme9d p{

text-align:left;
margin: 10px;
font-size:14px;

}

.cs_menu_txt9d p:first-child, .cs_menu_color9d p:first-child, .cs_menu_theme9d p:first-child, .cs_menu_line_style9d p:first-child {


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

<div id="escala9d" style="display: none"><div style="display:inline-block">min Y: <input id="scale_min9d" type="number" style="width:70px"/></div><div style="display:inline-block; margin-left: 20px">max Y: <input id="scale_max9d" type="number" style="width:70px"/></div></div>
<div class= "outer9d">


<div id="container9d"></div>

<div id="buttons_show9d">
 <span class="btn_show9d red">Customize Chart <i id="seta_show9d" class="fa fa-arrow-left"></i></span>
</div>

<div id="Resumex9d">

<div class="Painel" style = "border: 2px solid black; width: 100%"><div style="font-size: 25px; text-align:center; margin-top: 10px; color: white"><div style="display:inline-block; margin-right: 10px; float: middle"><b>Custom your Charts</b></div></div></div>
<div style = "border: 2px solid black; width: 100%; height: 600px">
<div class="cs_menu_theme9d">
<p> Layout <span style="float:right; margin-top:-12px"><button id="btn_theme9d" class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Theme9d" class="fa fa-caret-down"></i></button></span></p>
<div id= "div_theme9d" style="display:none; background-color:white">
<p style="color:black; font-size: 15px">Theme: <br><select class="tema" id="theme9d" type="text"></p>
<option value="" selected="selected">Select a theme</option>
<option value="val_938">538</option>
<option value="DarkBlue">Dark Blue</option>
<option value="DarkGreen">Dark Green</option>
<option value="DarkUnika">Dark Unika</option>
<option value="Null">Empty</option>
<option value="FlatDark">Flat Dark</option>
<option value="val_ffx">FFX</option>
<option value="Skies">Google</option>
<option value="SandSignika">Sand Signika</option>
</select>
<p>Font Family: <br><input type="text" id="minha_Fonte9d"></input></p>
<p>Font Size Axis: <br><input type="number" id="myFontSize_Axis9d" value="11"></input></p>
<p>Font Size Title: <br><input type="number" id="myFontSize_Title9d" value="18"></input></p>
<p>Color Axis: <br><input id="colorSelector_Axis9d" type="text"></input></p>
<p>Color Title: <br><input id="colorSelector_Title9d" type="text"></input></p>
</div>
</div>
<div class="cs_menu_txt9d">
<p> Text <span style="float:right; margin-top:-12px"><button id="btn_text9d" class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Text9d" class="fa fa-caret-down"></i></button></span></p>
<div id= "div_text9d" style="display:none; background-color:white">
<p style="color:black; font-size: 15px">Title: <br><input id="txt_title9d" type="text"></input></p>
<p>Legend Item 1: <br><input id="txt_legend1_9d" type="text"></input></p>
<p>Legend Item 2: <br><input id="txt_legend2_9d" type="text"></input></p>
<p>Legend Item 3: <br><input id="txt_legend3_9d" type="text"></input></p>
<p>Legend Item 4: <br><input id="txt_legend4_9d" type="text"></input></p>
<p>Legend Item 5: <br><input id="txt_legend5_9d" type="text"></input></p>
<p>Legend Item 6: <br><input id="txt_legend6_9d" type="text"></input></p>
<p>Legend Item 7: <br><input id="txt_legend7_9d" type="text"></input></p>
<p>Legend Item 8: <br><input id="txt_legend8_9d" type="text"></input></p>
<p>Legend Item 9: <br><input id="txt_legend9_9d" type="text"></input></p>
</div>
</div>
<div class="cs_menu_color9d">
<p> Colors <span style="float:right; margin-top:-12px"><button id="btn_colors9d" class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Colors9d" class="fa fa-caret-down"></i></button></span></p>
<div id= "div_colors9d" style="display:none; background-color:white">
<p style="color:black; font-size: 15px">Color Line 1: <br><input id="colorSelector1_9d" type="text"></input></p>
<p>Color Line 2: <br><input id="colorSelector2_9d" type="text"></input></p>
<p>Color Line 3: <br><input id="colorSelector3_9d" type="text"></input></p>
<p>Color Line 4: <br><input id="colorSelector4_9d" type="text"></input></p>
<p>Color Line 5: <br><input id="colorSelector5_9d" type="text"></input></p>
<p>Color Line 6: <br><input id="colorSelector6_9d" type="text"></input></p>
<p>Color Line 7: <br><input id="colorSelector7_9d" type="text"></input></p>
<p>Color Line 8: <br><input id="colorSelector8_9d" type="text"></input></p>
<p>Color Line 9: <br><input id="colorSelector9_9d" type="text"></input></p>
</div>
</div>
<div class="cs_menu_line_style9d">
<p> Line <span style="float:right; margin-top:-12px"><button id="btn_line_9d" class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Line9d" class="fa fa-caret-down"></i></button></span></p>
<div id= "div_colors9d" style="display:block; background-color:white">
<div id="div_line9d" style="display:none">
<div style="display:inline-block">
<p style="color:black; font-size: 14px">Line Style 1: <br><select id="linestyle1_9d" type="text">
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
<p>Line Style 2: <br><select id="linestyle2_9d" type="text">
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
<p>Line Style 3: <br><select id="linestyle3_9d" type="text">
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
<p>Line Style 4: <br><select id="linestyle4_9d" type="text">
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
<p>Line Style 5: <br><select id="linestyle5_9d" type="text">
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
<p>Line Style 6: <br><select id="linestyle6_9d" type="text">
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
<p>Line Style 7: <br><select id="linestyle7_9d" type="text">
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
<p>Line Style 8: <br><select id="linestyle8_9d" type="text">
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
<p>Line Style 9: <br><select id="linestyle9_9d" type="text">
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
<p style="color:black; font-size: 14px">Width 1: <br><select id="linewidth1_9d" type="text">
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
<p>Width 2: <br><select id="linewidth2_9d" type="text">
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
<p>Width 3: <br><select id="linewidth3_9d" type="text">
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
<p>Width 4: <br><select id="linewidth4_9d" type="text">
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
<p>Width 5: <br><select id="linewidth5_9d" type="text">
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
<p>Width 6: <br><select id="linewidth6_9d" type="text">
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
<p>Width 7: <br><select id="linewidth7_9d" type="text">
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
<p>Width 8: <br><select id="linewidth8_9d" type="text">
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
<p>Width 9: <br><select id="linewidth9_9d" type="text">
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
<button id="btn_default9d" style="border-radius:30px" class="w3-btn w3-gray w3-text-white w3-xlarge">Default</button>
</div>
</div>
</div>

</div>

</body>

<script type="text/javascript" id="runscript_9">
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

var acc = new Highcharts.stockChart({
	chart: {
				renderTo: 'container9d',
				alignTicks:false,
				width: 1800,
				height: 650,
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
						if(estado != false){
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
    }
	},
		    rangeSelector: {
            allButtonsEnabled: true,
            buttons: [{
                type: 'week',
                count: 1,
                text: '1 Week',
                dataGrouping: {
                    forced: true,
                    units: [['day', [1]]]
                }
            },{
                type: 'week',
                count: 2,
                text: '2 Weeks',
                dataGrouping: {
                    forced: true,
                    units: [['day', [1]]]
                }
            }, {
                type: 'week',
                count: 3,
                text: '3 Weeks',
                dataGrouping: {
                    forced: true,
                    units: [['day', [1]]]
                }
            }, {
                type: 'month',
				count: 1,
                text: '1 Month',
                dataGrouping: {
                    forced: true,
                    units: [['day', [1]]]
                }
            }, {
                type: 'month',
				count: 6,
                text: '6 Months',
                dataGrouping: {
                    forced: true,
                    units: [['day', [1]]]
                }
            }, {
                type: 'all',
                text: 'All',
                dataGrouping: {
                    forced: true,
                    units: [['day', [1]]]
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
            acc.rangeSelector.inputGroup.hide();
			acc.rangeSelector.zoomText.hide();
			$.each(acc.rangeSelector.buttons,function(i,b){
            b.hide();
			zoom_menu = false;
			});
			}else if(zoom_menu == false){
            acc.rangeSelector.inputGroup.show();
			acc.rangeSelector.zoomText.show();
			$.each(acc.rangeSelector.buttons,function(i,b){
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
				text: 'NPSmart',// - ' + node,
				x: -20, //center
	},	
	
    xAxis: {
			type: 'datetime',
			plotLines: [{
			value: 0,
			dashStyle: 'dash',
			color: 'red',
			width: 2,
			zIndex: 3
      
			},{
			value: 1,
			dashStyle: 'dash',
			color: 'red',
			width: 2,
			zIndex: 3
			}],			
		    labels: {
				format: '{value:%Y-%m-%d}',
				autoRotationLimit: 360
					},
			tickInterval: 24 * 3600 * 1000		
    },
	
yAxis: [{
		 labels: {
            align: 'right',
            x: -5,
        },
		offset: 10,
		startOnTick:true,
		endOnTick: true,
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
        lineWidth: 1,
        opposite: true,
        title: {
            text: ''
        }
    }],
	
	tooltip: {
	shared: true,
	headerFormat: '<span>{point.key}</span><br/>',		
	pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y:.2f}</b><br/>',	
	},	
	
    plotOptions: {
        series: {
			marker: {
                enabled: false
            },			
            events: {
                legendItemClick: function () {
						this.group.toFront();
						if(this.name == "Marker"){
						if(this.visible == true){
						estado = false;		
						acc.xAxis[0].options.plotLines[0].color = "transparent";
						acc.xAxis[0].options.plotLines[1].color = "transparent";
						acc.xAxis[0].update();
						}else
						if(this.visible == false){	
						estado = true;	
						acc.xAxis[0].options.plotLines[0].color = "red";
						acc.xAxis[0].options.plotLines[1].color = "red";
						
						acc.xAxis[0].update();
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
		name: 'Marker'
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
		
        data: [<?php
		if($ct1 == 9){
        if($q1 != ""){    
		for ($i = 0; $i < $kpi_query1->num_rows(); $i++) {
		$row = $kpi_query1->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		// draggableY: true,
        // dragMinY: 0,
		// dragMaxY: 100,
		
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
		
        data: [<?php
		if($ct2 == 9){
        if($q2 != ""){    
		for ($i = 0; $i < $kpi_query2->num_rows(); $i++) {
		$row = $kpi_query2->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
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
		
        data: [<?php
		if($ct3 == 9){
        if($q3 != ""){    
		for ($i = 0; $i < $kpi_query3->num_rows(); $i++) {
		$row = $kpi_query3->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
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

        data: [<?php
		if($ct4 == 9){
        if($q4 != ""){    
		for ($i = 0; $i < $kpi_query4->num_rows(); $i++) {
		$row = $kpi_query4->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v4 ?>,
		
		yAxis: <?php echo $c4 ?>,
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

        data: [<?php
		if($ct5 == 9){
        if($q5 != ""){    
		for ($i = 0; $i < $kpi_query5->num_rows(); $i++) {
		$row = $kpi_query5->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v5 ?>,
		
		yAxis: <?php echo $c5 ?>,
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

        data: [<?php
		if($ct6 == 9){
        if($q6 != ""){    
		for ($i = 0; $i < $kpi_query6->num_rows(); $i++) {
		$row = $kpi_query6->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v6 ?>,
		
		yAxis: <?php echo $c6 ?>,
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

        data: [<?php
		if($ct7 == 9){
        if($q7 != ""){    
		for ($i = 0; $i < $kpi_query7->num_rows(); $i++) {
		$row = $kpi_query7->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v7 ?>,
		
		yAxis: <?php echo $c7 ?>,
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

        data: [<?php
		if($ct8 == 9){
        if($q8 != ""){    
		for ($i = 0; $i < $kpi_query8->num_rows(); $i++) {
		$row = $kpi_query8->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v8 ?>,
		
		yAxis: <?php echo $c8 ?>,
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

        data: [<?php
		if($ct9 == 9){
        if($q9 != ""){    
		for ($i = 0; $i < $kpi_query9->num_rows(); $i++) {
		$row = $kpi_query9->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "[Date.parse('".$row['date']."'), ".$row['node']."], ";	
		}
		}
		}
        ?>],
		
		showInLegend: <?php echo $v9 ?>,
		
		yAxis: <?php echo $c9 ?>,
    }
	]
});

//////////////////////////////////////// SETA O VALOR DEFAULT DAS INPUT TEXT DAS ESCALAS ///////////////////////////

var acc9d = $("#container9d").highcharts();
$('#scale_max9d').val(acc9d.yAxis[0].getExtremes().dataMax);
$('#scale_min9d').val(acc9d.yAxis[0].getExtremes().dataMin);

});

//////////////////////////////////////////////////////// CORES DAS LINHAS ////////////////////////////////////////

$('#colorSelector1_9d').ColorPicker({
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
		var acc9d = $("#container9d").highcharts();
		$('#colorSelector1_9d').css('backgroundColor', '#' + hex);
		color[1] = hex;
		acc9d.series[1].update({color: "#"+color[1]+""});
	}
});

$('#colorSelector2_9d').ColorPicker({
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
		var acc9d = $("#container9d").highcharts();
		$('#colorSelector2_9d').css('backgroundColor', '#' + hex);
		color[2] = hex;
		acc9d.series[2].update({color: "#"+color[2]+""});
	}
});

$('#colorSelector3_9d').ColorPicker({
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
		var acc9d = $("#container9d").highcharts();
		$('#colorSelector3_9d').css('backgroundColor', '#' + hex);
		color[3] = hex;
		acc9d.series[3].update({color: "#"+color[3]+""});
	}
});

$('#colorSelector4_9d').ColorPicker({
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
		var acc9d = $("#container9d").highcharts();
		$('#colorSelector4_9d').css('backgroundColor', '#' + hex);
		color[4] = hex;
		acc9d.series[4].update({color: "#"+color[4]+""});
	}
});

$('#colorSelector5_9d').ColorPicker({
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
		var acc9d = $("#container9d").highcharts();
		$('#colorSelector5_9d').css('backgroundColor', '#' + hex);
		color[5] = hex;
		acc9d.series[5].update({color: "#"+color[5]+""});
	}
});

$('#colorSelector6_9d').ColorPicker({
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
		var acc9d = $("#container9d").highcharts();
		$('#colorSelector6_9d').css('backgroundColor', '#' + hex);
		color[6] = hex;
		acc9d.series[6].update({color: "#"+color[6]+""});
	}
});

$('#colorSelector7_9d').ColorPicker({
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
		var acc9d = $("#container9d").highcharts();
		$('#colorSelector7_9d').css('backgroundColor', '#' + hex);
		color[7] = hex;
		acc9d.series[7].update({color: "#"+color[7]+""});
	}
});

$('#colorSelector8_9d').ColorPicker({
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
		var acc9d = $("#container9d").highcharts();
		$('#colorSelector8_9d').css('backgroundColor', '#' + hex);
		color[8] = hex;
		acc9d.series[8].update({color: "#"+color[8]+""});
	}
});

$('#colorSelector9_9d').ColorPicker({
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
		var acc9d = $("#container9d").highcharts();
		$('#colorSelector9_9d').css('backgroundColor', '#' + hex);
		color[9] = hex;
		acc9d.series[9].update({color: "#"+color[9]+""});
	}
});

//////////////////////////////////////////////////////////////// TEMAS /////////////////////////////////////////////

$('#theme9d').change(function(){
var acc9d = $("#container9d").highcharts();		
var x = $(this).val();	
if(x == "SandSignika"){
acc9d.destroy();	
eval(document.getElementById("Sand_Signika").innerHTML);
Highcharts.setOptions(chart_Sand_Signika);
$( "#seta_show9d" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_9").innerHTML);	 
}else
if(x == "DarkUnika"){
acc9d.destroy();	
eval(document.getElementById("Dark_Unika").innerHTML);
Highcharts.setOptions(chart_Dark_Unika);
$( "#seta_show9d" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_9").innerHTML);	 
}else
if(x == "DarkBlue"){
acc9d.destroy();	
eval(document.getElementById("Dark_Blue").innerHTML);
Highcharts.setOptions(chart_Dark_Blue);
$( "#seta_show9d" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_9").innerHTML);	 
}else
if(x == "Skies"){
acc9d.destroy();	
eval(document.getElementById("Nuvem").innerHTML);
Highcharts.setOptions(chart_Skies);
$( "#seta_show9d" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_9").innerHTML);	 
}else
if(x == "DarkGreen"){
acc9d.destroy();	
eval(document.getElementById("Dark_Green").innerHTML);
Highcharts.setOptions(chart_Dark_Green);
$( "#seta_show9d" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_9").innerHTML);	 
}else
if(x == "FlatDark"){
acc9d.destroy();	
eval(document.getElementById("Flat_Dark").innerHTML);
Highcharts.setOptions(chart_Flat_Dark);
$( "#seta_show9d" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_9").innerHTML);	 
}else
if(x == "Null"){
acc9d.destroy();	
eval(document.getElementById("Empty").innerHTML);
Highcharts.setOptions(chart_null);
$( "#seta_show9d" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_9").innerHTML);	 
}else
if(x == "val_ffx"){
acc9d.destroy();	
eval(document.getElementById("ffx").innerHTML);
Highcharts.setOptions(chart_ffx);
$( "#seta_show9d" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_9").innerHTML);	 
}else
if(x == "val_938"){
acc9d.destroy();	
eval(document.getElementById("538").innerHTML);
Highcharts.setOptions(chart_938);
$( "#seta_show9d" ).attr( "class", "fa fa-arrow-left");
eval(document.getElementById("runscript_9").innerHTML);	 
}	
});

//////////////////////////////////////////////////////////////// TÍTULO ///////////////////////////////////////////

$('#txt_title9d').on('keyup mouseup', function(){
var acc9d = $("#container9d").highcharts();	
var title = document.getElementById('txt_title9d').value;	
if(title != ""){
acc9d.setTitle({text: ""+title+""});
}else{
acc9d.setTitle({text: "NPSmart"});
}	
});

//////////////////////////////////////////////////////////////// LEGENDAS //////////////////////////////////////////

$('#txt_legend1_9d').on('keyup mouseup', function(){
var acc9d = $("#container9d").highcharts();	
if($("#txt_legend1_9d").val() != ""){
legend[1] = $("#txt_legend1_9d").val();	
acc9d.legend.allItems[1].update({name:""+legend[1]+""});
}else{
acc9d.legend.allItems[1].update({name:""+legend_old1+""});
}	
});

$('#txt_legend2_9d').on('keyup mouseup', function(){
var acc9d = $("#container9d").highcharts();	
if($("#txt_legend2_9d").val() != ""){
legend[2] = $("#txt_legend2_9d").val();	
acc9d.legend.allItems[2].update({name:""+legend[2]+""});
}else{
acc9d.legend.allItems[2].update({name:""+legend_old2+""});
}	
});

$('#txt_legend3_9d').on('keyup mouseup', function(){
var acc9d = $("#container9d").highcharts();	
if($("#txt_legend3_9d").val() != ""){
legend[3] = $("#txt_legend3_9d").val();	
acc9d.legend.allItems[3].update({name:""+legend[3]+""});
}else{
acc9d.legend.allItems[3].update({name:""+legend_old3+""});
}	
});

$('#txt_legend4_9d').on('keyup mouseup', function(){
var acc9d = $("#container9d").highcharts();	
if($("#txt_legend4_9d").val() != ""){
legend[4] = $("#txt_legend4_9d").val();	
acc9d.legend.allItems[4].update({name:""+legend[4]+""});
}else{
acc9d.legend.allItems[4].update({name:""+legend_old4+""});
}	
});

$('#txt_legend5_9d').on('keyup mouseup', function(){
var acc9d = $("#container9d").highcharts();	
if($("#txt_legend5_9d").val() != ""){
legend[5] = $("#txt_legend5_9d").val();	
acc9d.legend.allItems[5].update({name:""+legend[5]+""});
}else{
acc9d.legend.allItems[5].update({name:""+legend_old5+""});
}	
});

$('#txt_legend6_9d').on('keyup mouseup', function(){
var acc9d = $("#container9d").highcharts();	
if($("#txt_legend6_9d").val() != ""){
legend[6] = $("#txt_legend6_9d").val();	
acc9d.legend.allItems[6].update({name:""+legend[6]+""});
}else{
acc9d.legend.allItems[6].update({name:""+legend_old6+""});
}	
});

$('#txt_legend7_9d').on('keyup mouseup', function(){
var acc9d = $("#container9d").highcharts();	
if($("#txt_legend7_9d").val() != ""){
legend[7] = $("#txt_legend7_9d").val();	
acc9d.legend.allItems[7].update({name:""+legend[7]+""});
}else{
acc9d.legend.allItems[7].update({name:""+legend_old7+""});
}	
});

$('#txt_legend8_9d').on('keyup mouseup', function(){
var acc9d = $("#container9d").highcharts();	
if($("#txt_legend8_9d").val() != ""){
legend[8] = $("#txt_legend8_9d").val();	
acc9d.legend.allItems[8].update({name:""+legend[8]+""});
}else{
acc9d.legend.allItems[8].update({name:""+legend_old8+""});
}	
});

$('#txt_legend9_9d').on('keyup mouseup', function(){
var acc9d = $("#container9d").highcharts();	
if($("#txt_legend9_9d").val() != ""){
legend[9] = $("#txt_legend9_9d").val();	
acc9d.legend.allItems[9].update({name:""+legend[9]+""});
}else{
acc9d.legend.allItems[9].update({name:""+legend_old9+""});
}	
});

//////////////////////////////////////////////////////////////// LINE STYLE ////////////////////////////////////////

$('#linestyle1_9d').change(function(){
var acc9d = $("#container9d").highcharts();
if($("#linestyle1_9d").val() != ""){
typeline[1] = $("#linestyle1_9d").val();
acc9d.series[1].update({dashStyle: ""+typeline[1]+""});
}else{
acc9d.series[1].update({dashStyle: "Solid"});	
}
});

$('#linestyle2_9d').change(function(){
var acc9d = $("#container9d").highcharts();
if($("#linestyle2_9d").val() != ""){
typeline[2] = $("#linestyle2_9d").val();
acc9d.series[2].update({dashStyle: ""+typeline[2]+""});
}else{
acc9d.series[2].update({dashStyle: "Solid"});	
}
});

$('#linestyle3_9d').change(function(){
var acc9d = $("#container9d").highcharts();
if($("#linestyle3_9d").val() != ""){
typeline[3] = $("#linestyle3_9d").val();
acc9d.series[3].update({dashStyle: ""+typeline[3]+""});
}else{
acc9d.series[3].update({dashStyle: "Solid"});	
}
});

$('#linestyle4_9d').change(function(){
var acc9d = $("#container9d").highcharts();
if($("#linestyle4_9d").val() != ""){
typeline[4] = $("#linestyle4_9d").val();
acc9d.series[4].update({dashStyle: ""+typeline[4]+""});
}else{
acc9d.series[4].update({dashStyle: "Solid"});	
}
});

$('#linestyle5_9d').change(function(){
var acc9d = $("#container9d").highcharts();
if($("#linestyle5_9d").val() != ""){
typeline[5] = $("#linestyle5_9d").val();
acc9d.series[5].update({dashStyle: ""+typeline[5]+""});
}else{
acc9d.series[5].update({dashStyle: "Solid"});	
}
});

$('#linestyle6_9d').change(function(){
var acc9d = $("#container9d").highcharts();
if($("#linestyle6_9d").val() != ""){
typeline[6] = $("#linestyle6_9d").val();
acc9d.series[6].update({dashStyle: ""+typeline[6]+""});
}else{
acc9d.series[6].update({dashStyle: "Solid"});	
}
});

$('#linestyle7_9d').change(function(){
var acc9d = $("#container9d").highcharts();
if($("#linestyle7_9d").val() != ""){
typeline[7] = $("#linestyle7_9d").val();
acc9d.series[7].update({dashStyle: ""+typeline[7]+""});
}else{
acc9d.series[7].update({dashStyle: "Solid"});	
}
});

$('#linestyle8_9d').change(function(){
var acc9d = $("#container9d").highcharts();
if($("#linestyle8_9d").val() != ""){
typeline[8] = $("#linestyle8_9d").val();
acc9d.series[8].update({dashStyle: ""+typeline[8]+""});
}else{
acc9d.series[8].update({dashStyle: "Solid"});	
}
});

$('#linestyle9_9d').change(function(){
var acc9d = $("#container9d").highcharts();
if($("#linestyle9_9d").val() != ""){
typeline[9] = $("#linestyle9_9d").val();
acc9d.series[9].update({dashStyle: ""+typeline[9]+""});
}else{
acc9d.series[9].update({dashStyle: "Solid"});	
}
});

//////////////////////////////////////////////////////////////// LINE WIDTH ////////////////////////////////////////

$('#linewidth1_9d').change(function(){
var acc9d = $("#container9d").highcharts();	
if($("#linewidth1_9d").val() != 0){
var width_line = $("#linewidth1_9d").val();
var int_width_line	= parseInt(width_line);
acc9d.series[1].update({lineWidth: int_width_line});
}else{
acc9d.series[1].update({lineWidth: 2});	
}	
});

$('#linewidth2_9d').change(function(){
var acc9d = $("#container9d").highcharts();	
if($("#linewidth2_9d").val() != 0){
var width_line = $("#linewidth2_9d").val();
var int_width_line	= parseInt(width_line);
acc9d.series[2].update({lineWidth: int_width_line});
}else{
acc9d.series[2].update({lineWidth: 2});	
}
});

$('#linewidth3_9d').change(function(){
var acc9d = $("#container9d").highcharts();	
if($("#linewidth3_9d").val() != 0){
var width_line = $("#linewidth3_9d").val();
var int_width_line	= parseInt(width_line);
acc9d.series[3].update({lineWidth: int_width_line});
}else{
acc9d.series[3].update({lineWidth: 2});	
}
});

$('#linewidth4_9d').change(function(){
var acc9d = $("#container9d").highcharts();	
if($("#linewidth4_9d").val() != 0){
var width_line = $("#linewidth4_9d").val();
var int_width_line	= parseInt(width_line);
acc9d.series[4].update({lineWidth: int_width_line});
}else{
acc9d.series[4].update({lineWidth: 2});	
}
});

$('#linewidth5_9d').change(function(){
var acc9d = $("#container9d").highcharts();	
if($("#linewidth5_9d").val() != 0){
var width_line = $("#linewidth5_9d").val();
var int_width_line	= parseInt(width_line);
acc9d.series[5].update({lineWidth: int_width_line});
}else{
acc9d.series[5].update({lineWidth: 2});	
}
});

$('#linewidth6_9d').change(function(){
var acc9d = $("#container9d").highcharts();	
if($("#linewidth6_9d").val() != 0){
var width_line = $("#linewidth6_9d").val();
var int_width_line	= parseInt(width_line);
acc9d.series[6].update({lineWidth: int_width_line});
}else{
acc9d.series[6].update({lineWidth: 2});	
}
});

$('#linewidth7_9d').change(function(){
var acc9d = $("#container9d").highcharts();	
if($("#linewidth7_9d").val() != 0){
var width_line = $("#linewidth7_9d").val();
var int_width_line	= parseInt(width_line);
acc9d.series[7].update({lineWidth: int_width_line});
}else{
acc9d.series[7].update({lineWidth: 2});	
}
});

$('#linewidth8_9d').change(function(){
var acc9d = $("#container9d").highcharts();	
if($("#linewidth8_9d").val() != 0){
var width_line = $("#linewidth8_9d").val();
var int_width_line	= parseInt(width_line);
acc9d.series[8].update({lineWidth: int_width_line});
}else{
acc9d.series[8].update({lineWidth: 2});	
}
});

$('#linewidth9_9d').change(function(){
var acc9d = $("#container9d").highcharts();	
if($("#linewidth9_9d").val() != 0){
var width_line = $("#linewidth9_9d").val();
var int_width_line	= parseInt(width_line);
acc9d.series[9].update({lineWidth: int_width_line});
}else{
acc9d.series[9].update({lineWidth: 2});	
}
});

//////////////////////////////////////////////////////////////// SCALE /////////////////////////////////////////////

$('#scale_max9d').on('keyup mouseup', function(){
	
var x = $('#scale_max9d').val();
var acc9d = $("#container9d").highcharts();
if(x != ""){	
acc9d.yAxis[0].update({max: ""+x+""});
}else{
$('#scale_max9d').val(acc9d.yAxis[0].getExtremes().dataMax);	
acc9d.yAxis[0].update({max: null});
}	
});

$('#scale_min9d').on('keyup mouseup', function(){
	
var x = $('#scale_min9d').val();
var acc9d = $("#container9d").highcharts();
if(x != ""){	
acc9d.yAxis[0].update({min: ""+x+""});
}else{
$('#scale_min9d').val(acc9d.yAxis[0].getExtremes().dataMin);	
acc9d.yAxis[0].update({min: null});
}	
});

//////////////////////////////////////////////////////////////// FONT STYLE ///////////////////////////////////////

$('#minha_Fonte9d').fontselect().change(function(){
        
// replace + signs with spaces for css
var font = $(this).val().replace(/\+/g, ' ');
var acc9d = $("#container9d").highcharts();
// split font into family and weight
font = font.split(':');

// set family on paragraphs 
//$('p').css('font-family', font[0]);
 //console.log(font[0]);
fonte = font[0];
acc9d.update({
chart: {
style: {
fontFamily: "'"+fonte+"', sans-serif"
}
}
});
});

///////////////////////////////////////////////////////////////// FONT SIZE ////////////////////////////////////////

$('#myFontSize_Axis9d').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc9d = $("#container9d").highcharts();

console.log(SizeFont);
// acc9d.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc9d.update({
xAxis:{
labels: {
style:{
fontSize: ""+SizeFont+"px"	
}		
}		
}	
});

acc9d.update({
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

$('#myFontSize_Title9d').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc9d = $("#container9d").highcharts();

console.log(SizeFont);
// acc9d.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc9d.update({
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

$('#colorSelector_Axis9d').ColorPicker({
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
		var acc9d = $("#container9d").highcharts();
		$('#colorSelector_Axis9d').css('backgroundColor', '#' + hex);
		acc9d.update({
		xAxis:{
		labels: {
		style:{
		color: '#' + hex	
		}		
		}		
		}	
		});

		acc9d.update({
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

$('#colorSelector_Title9d').ColorPicker({
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
		var acc9d = $("#container9d").highcharts();
		$('#colorSelector_Title9d').css('backgroundColor', '#' + hex);
		acc9d.update({
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

$( "#btn_theme9d" ).click(function() {

if(vis_theme == true){
document.getElementById("div_theme9d").style.display = "none";
$( "#Seta_Theme9d" ).attr( "class", "fa fa-caret-down");
vis_theme = false;	
}else if(vis_theme == false){	
document.getElementById("div_theme9d").style.display = "block";
document.getElementById("div_text9d").style.display = "none";
document.getElementById("div_line9d").style.display = "none";
document.getElementById("div_colors9d").style.display = "none";
$( "#Seta_Theme9d" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Line9d" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors9d" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text9d" ).attr( "class", "fa fa-caret-down");
vis_theme = true;
}

});

$( "#btn_text9d" ).click(function() {

if(vis_text == true){
document.getElementById("div_text9d").style.display = "none";
$( "#Seta_Text9d" ).attr( "class", "fa fa-caret-down");
vis_text = false;	
}else if(vis_text == false){	
document.getElementById("div_text9d").style.display = "block";
document.getElementById("div_theme9d").style.display = "none";
document.getElementById("div_line9d").style.display = "none";
document.getElementById("div_colors9d").style.display = "none";
$( "#Seta_Theme9d" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line9d" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors9d" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text9d" ).attr( "class", "fa fa-caret-up");
vis_text = true;
}

});	

$( "#btn_colors9d" ).click(function() {

if(vis_colors == true){
document.getElementById("div_colors9d").style.display = "none";
$( "#Seta_Colors9d" ).attr( "class", "fa fa-caret-down");
vis_colors = false;	
}else if(vis_colors == false){	
document.getElementById("div_text9d").style.display = "none";
document.getElementById("div_theme9d").style.display = "none";
document.getElementById("div_line9d").style.display = "none";
document.getElementById("div_colors9d").style.display = "block";
$( "#Seta_Theme9d" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line9d" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors9d" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Text9d" ).attr( "class", "fa fa-caret-down");
vis_colors = true;
}

});	

$( "#btn_line_9d" ).click(function() {

if(vis_line == true){
document.getElementById("div_line9d").style.display = "none";
$( "#Seta_Line9d" ).attr( "class", "fa fa-caret-down");
vis_line = false;	
}else if(vis_line == false){	
document.getElementById("div_text9d").style.display = "none";
document.getElementById("div_theme9d").style.display = "none";
document.getElementById("div_line9d").style.display = "block";
document.getElementById("div_colors9d").style.display = "none";
$( "#Seta_Theme9d" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line9d" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Colors9d" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text9d" ).attr( "class", "fa fa-caret-down");
vis_line = true;
}

});

$( "#btn_default9d" ).click(function() {
var acc9d = $("#container9d").highcharts();	
acc9d.destroy();
eval(document.getElementById("runscript_9").innerHTML);
});	

$( ".btn_show9d" ).click(function() {
var acc9d = $("#container9d").highcharts();
var cont9d = $("#container9d"); 	
if(vis_menu_person == false){
cont9d.css('width','70%');
acc9d.setSize(cont9d.width(), 650, true);
document.getElementById("Resumex9d").style.display = "inline-block";
$( "#seta_show9d" ).attr( "class", "fa fa-arrow-right");
vis_menu_person = true;
}else if (vis_menu_person == true){
document.getElementById("Resumex9d").style.display = "none";
cont9d.css('width','95%');
acc9d.setSize(cont9d.width(), 650, true);
$( "#seta_show9d" ).attr( "class", "fa fa-arrow-left");
vis_menu_person = false;
}	
});
	
});
</script>