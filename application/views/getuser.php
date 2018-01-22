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

if(($ct1 == 1) && ($q1 != "")){
$v1 = "true";	
}else{
$v1 = "false";
}

if(($ct2 == 1) && ($q2 != "")){
$v2 = "true";	
}else{
$v2 = "false";
}

if(($ct3 == 1) && ($q3 != "")){
$v3 = "true";	
}else{
$v3 = "false";
}

if(($ct4 == 1) && ($q4 != "")){
$v4 = "true";	
}else{
$v4 = "false";
}

if(($ct5 == 1) && ($q5 != "")){
$v5 = "true";	
}else{
$v5 = "false";
}

if(($ct6 == 1) && ($q6 != "")){
$v6 = "true";	
}else{
$v6 = "false";
}

if(($ct7 == 1) && ($q7 != "")){
$v7 = "true";	
}else{
$v7 = "false";
}

if(($ct8 == 1) && ($q8 != "")){
$v8 = "true";	
}else{
$v8 = "false";
}

if(($ct9 == 1) && ($q9 != "")){
$v9 = "true";	
}else{
$v9 = "false";
}	

?>

<!DOCTYPE html>
<html>
<head>
<style>

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

#container {
	width: 74%;
	height: 650px;
	margin-top: 5px;
	
	
}

#container2, #container3, #container4, #container5, #container6, #container7, #container8, #container9 {
	width: 100%;
	height: 650px;
	margin-top: 5px;
	
	
}

.cs_menu_theme, .cs_menu_txt, .cs_menu_color, .cs_menu_line_style{

margin:10px 10px 10px 0px; 
display:block; 
width: 100%;
background-color: #3C6D7A; 
text-align:center;
border: 1px solid black;

	
}

.cs_menu_txt p, .cs_menu_color p, .cs_menu_line_style p, .cs_menu_theme p{

text-align:left;
margin: 10px;
font-size:14px;

}

.cs_menu_txt p:first-child, .cs_menu_color p:first-child, .cs_menu_theme p:first-child, .cs_menu_line_style p:first-child {


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

<div><div style="display:inline-block">min Y: <input id="scale_min" type="number" style="width:70px"/></div><div style="display:inline-block; margin-left: 20px">max Y: <input id="scale_max" type="number" style="width:70px"/></div></div>
<div style="width:100%">

<div id="container" style="display:inline-block"></div>


<div id="Resumex" style="display:inline-block; width: 25%; height: 650px; margin-top: 5px; position:absolute; margin-left:10px">

<div class="Painel" style = "border: 2px solid black; width: 100%"><div style="font-size: 25px; text-align:center; margin-top: 10px; color: white"><div style="display:inline-block; margin-right: 10px; float: middle"><b>Custom your Charts</b></div></div></div>
<div style = "border: 2px solid black; width: 100%; height: 600px">
<div class="cs_menu_theme">
<p> Layout <span style="float:right; margin-top:-12px"><button id="btn_theme" class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Theme" class="fa fa-caret-down"></i></button></span></p>
<div id= "div_theme" style="display:none; background-color:white">
<p style="color:black; font-size: 15px">Theme: <br><select class="tema" id="theme" type="text"></p>
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
<p>Font Family: <br><input type="text" id="myFont"></input></p>
<p>Font Size Axis: <br><input type="number" id="myFontSize_Axis" value="11"></input></p>
<p>Font Size Title: <br><input type="number" id="myFontSize_Title" value="18"></input></p>
<p>Color Axis: <br><input id="colorSelector_Axis" type="text"></input></p>
<p>Color Title: <br><input id="colorSelector_Title" type="text"></input></p>
</div>
</div>
<div class="cs_menu_txt">
<p> Text <span style="float:right; margin-top:-12px"><button id="btn_text" class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Text" class="fa fa-caret-down"></i></button></span></p>
<div id= "div_text" style="display:none; background-color:white">
<p style="color:black; font-size: 15px">Title: <br><input id="txt_title" type="text"></input></p>
<p>Legend Item 1: <br><input id="txt_legend1" type="text"></input></p>
<p>Legend Item 2: <br><input id="txt_legend2" type="text"></input></p>
<p>Legend Item 3: <br><input id="txt_legend3" type="text"></input></p>
<p>Legend Item 4: <br><input id="txt_legend4" type="text"></input></p>
<p>Legend Item 5: <br><input id="txt_legend5" type="text"></input></p>
<p>Legend Item 6: <br><input id="txt_legend6" type="text"></input></p>
<p>Legend Item 7: <br><input id="txt_legend7" type="text"></input></p>
<p>Legend Item 8: <br><input id="txt_legend8" type="text"></input></p>
<p>Legend Item 9: <br><input id="txt_legend9" type="text"></input></p>
</div>
</div>
<div class="cs_menu_color">
<p> Colors <span style="float:right; margin-top:-12px"><button id="btn_colors" class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Colors" class="fa fa-caret-down"></i></button></span></p>
<div id= "div_colors" style="display:none; background-color:white">
<p style="color:black; font-size: 15px">Color Line 1: <br><input id="colorSelector1" type="text"></input></p>
<p>Color Line 2: <br><input id="colorSelector2" type="text"></input></p>
<p>Color Line 3: <br><input id="colorSelector3" type="text"></input></p>
<p>Color Line 4: <br><input id="colorSelector4" type="text"></input></p>
<p>Color Line 5: <br><input id="colorSelector5" type="text"></input></p>
<p>Color Line 6: <br><input id="colorSelector6" type="text"></input></p>
<p>Color Line 7: <br><input id="colorSelector7" type="text"></input></p>
<p>Color Line 8: <br><input id="colorSelector8" type="text"></input></p>
<p>Color Line 9: <br><input id="colorSelector9" type="text"></input></p>
</div>
</div>
<div class="cs_menu_line_style">
<p> Line <span style="float:right; margin-top:-12px"><button id="btn_line" class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Line" class="fa fa-caret-down"></i></button></span></p>
<div id= "div_colors" style="display:block; background-color:white">
<div id="div_line" style="display:none">
<div style="display:inline-block">
<p style="color:black; font-size: 14px">Line Style 1: <br><select id="linestyle1" type="text">
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
<p>Line Style 2: <br><select id="linestyle2" type="text">
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
<p>Line Style 3: <br><select id="linestyle3" type="text">
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
<p>Line Style 4: <br><select id="linestyle4" type="text">
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
<p>Line Style 5: <br><select id="linestyle5" type="text">
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
<p>Line Style 6: <br><select id="linestyle6" type="text">
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
<p>Line Style 7: <br><select id="linestyle7" type="text">
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
<p>Line Style 8: <br><select id="linestyle8" type="text">
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
<p>Line Style 9: <br><select id="linestyle9" type="text">
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
<p style="color:black; font-size: 14px">Width 1: <br><select id="linewidth1" type="text">
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
<p>Width 2: <br><select id="linewidth2" type="text">
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
<p>Width 3: <br><select id="linewidth3" type="text">
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
<p>Width 4: <br><select id="linewidth4" type="text">
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
<p>Width 5: <br><select id="linewidth5" type="text">
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
<p>Width 6: <br><select id="linewidth6" type="text">
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
<p>Width 7: <br><select id="linewidth7" type="text">
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
<p>Width 8: <br><select id="linewidth8" type="text">
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
<p>Width 9: <br><select id="linewidth9" type="text">
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
<button id="btn_default" style="border-radius:30px" class="w3-btn w3-gray w3-text-white w3-xlarge">Default</button>
</div>
</div>
</div>

<div id="container2" style="display:none"></div>
<div id="container3" style="display:none"></div>
<div id="container4" style="display:none"></div>
<div id="container5" style="display:none"></div>
<div id="container6" style="display:none"></div>
<div id="container7" style="display:none"></div>
<div id="container8" style="display:none"></div>
<div id="container9" style="display:none"></div>

</div>
</body>

<!------------------------------------------------------------- TEMAS ----------------------------------------------->

<?php  $this->load->view('view_theme_dark_blue'); ?>
<?php  $this->load->view('view_theme_dark_unica'); ?>
<?php  $this->load->view('view_theme_sand_signika'); ?>
<?php  $this->load->view('view_theme_skies'); ?>
<?php  $this->load->view('view_theme_dark_green'); ?>
<?php  $this->load->view('view_theme_flat_dark'); ?>
<?php  $this->load->view('view_theme_null'); ?>
<?php  $this->load->view('view_theme_ffx'); ?>
<?php  $this->load->view('view_theme_538'); ?>


<!--------------------------------------------------------------- GRÁFICOS ------------------------------------------>

<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Hourly/div_hourly2.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Hourly/div_hourly3.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Hourly/div_hourly4.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Hourly/div_hourly5.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Hourly/div_hourly6.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Hourly/div_hourly7.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Hourly/div_hourly8.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Hourly/div_hourly9.php'); ?>

<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Daily/div_daily2.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Daily/div_daily3.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Daily/div_daily4.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Daily/div_daily5.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Daily/div_daily6.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Daily/div_daily7.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Daily/div_daily8.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Daily/div_daily9.php'); ?>

<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Weekly/div_weekly2.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Weekly/div_weekly3.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Weekly/div_weekly4.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Weekly/div_weekly5.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Weekly/div_weekly6.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Weekly/div_weekly7.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Weekly/div_weekly8.php'); ?>
<?php  $this->load->file('/var/www/html/npsmart/QuickReport/Charts_Weekly/div_weekly9.php'); ?>

<script type="text/javascript" id="runscript_hourly">
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

$(document).ready(function() {
	
Highcharts.createElement('link', {
	href: '//fonts.googleapis.com/css?family=Meddon',
	rel: 'stylesheet',
	type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);


var acc = new Highcharts.stockChart({
	chart: {
				renderTo: 'container',
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
						//acc.chart.series[1].show();
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
		if($ct1 == 1){
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
		if($ct2 == 1){
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
		if($ct3 == 1){
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
		if($ct4 == 1){
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
		if($ct5 == 1){
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
		if($ct6 == 1){
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
		if($ct7 == 1){
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
		if($ct8 == 1){
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
		if($ct9 == 1){
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

var acc = $("#container").highcharts();
$('#scale_max').val(acc.yAxis[0].getExtremes().dataMax);
$('#scale_min').val(acc.yAxis[0].getExtremes().dataMin);

});

//////////////////////////////////////////////////////// CORES DAS LINHAS ////////////////////////////////////////

$('#colorSelector1').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector1').css('backgroundColor', '#' + hex);
		color[1] = hex;
		acc.series[1].update({color: "#"+color[1]+""});
	}
});

$('#colorSelector2').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector2').css('backgroundColor', '#' + hex);
		color[2] = hex;
		acc.series[2].update({color: "#"+color[2]+""});
	}
});

$('#colorSelector3').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector3').css('backgroundColor', '#' + hex);
		color[3] = hex;
		acc.series[3].update({color: "#"+color[3]+""});
	}
});

$('#colorSelector4').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector4').css('backgroundColor', '#' + hex);
		color[4] = hex;
		acc.series[4].update({color: "#"+color[4]+""});
	}
});

$('#colorSelector5').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector5').css('backgroundColor', '#' + hex);
		color[5] = hex;
		acc.series[5].update({color: "#"+color[5]+""});
	}
});

$('#colorSelector6').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector6').css('backgroundColor', '#' + hex);
		color[6] = hex;
		acc.series[6].update({color: "#"+color[6]+""});
	}
});

$('#colorSelector7').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector7').css('backgroundColor', '#' + hex);
		color[7] = hex;
		acc.series[7].update({color: "#"+color[7]+""});
	}
});

$('#colorSelector8').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector8').css('backgroundColor', '#' + hex);
		color[8] = hex;
		acc.series[8].update({color: "#"+color[1]+""});
	}
});

$('#colorSelector9').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector9').css('backgroundColor', '#' + hex);
		color[9] = hex;
		acc.series[9].update({color: "#"+color[1]+""});
	}
});

//////////////////////////////////////////////////////////////// TEMAS /////////////////////////////////////////////

$('#theme').change(function(){
var acc = $("#container").highcharts();		
var x = $(this).val();	
if(x == "SandSignika"){
acc.destroy();	
eval(document.getElementById("Sand_Signika").innerHTML);
Highcharts.setOptions(chart_Sand_Signika);
eval(document.getElementById("runscript_hourly").innerHTML);	 
}else
if(x == "DarkUnika"){
acc.destroy();	
eval(document.getElementById("Dark_Unika").innerHTML);
Highcharts.setOptions(chart_Dark_Unika);
eval(document.getElementById("runscript_hourly").innerHTML);	 
}else
if(x == "DarkBlue"){
acc.destroy();	
eval(document.getElementById("Dark_Blue").innerHTML);
Highcharts.setOptions(chart_Dark_Blue);
eval(document.getElementById("runscript_hourly").innerHTML);	 
}else
if(x == "Skies"){
acc.destroy();	
eval(document.getElementById("Nuvem").innerHTML);
Highcharts.setOptions(chart_Skies);
eval(document.getElementById("runscript_hourly").innerHTML);	 
}else
if(x == "DarkGreen"){
acc.destroy();	
eval(document.getElementById("Dark_Green").innerHTML);
Highcharts.setOptions(chart_Dark_Green);
eval(document.getElementById("runscript_hourly").innerHTML);	 
}else
if(x == "FlatDark"){
acc.destroy();	
eval(document.getElementById("Flat_Dark").innerHTML);
Highcharts.setOptions(chart_Flat_Dark);
eval(document.getElementById("runscript_hourly").innerHTML);	 
}else
if(x == "Null"){
acc.destroy();	
eval(document.getElementById("Empty").innerHTML);
Highcharts.setOptions(chart_null);
eval(document.getElementById("runscript_hourly").innerHTML);	 
}else
if(x == "val_ffx"){
acc.destroy();	
eval(document.getElementById("ffx").innerHTML);
Highcharts.setOptions(chart_ffx);
eval(document.getElementById("runscript_hourly").innerHTML);	 
}else
if(x == "val_538"){
acc.destroy();	
eval(document.getElementById("538").innerHTML);
Highcharts.setOptions(chart_538);
eval(document.getElementById("runscript_hourly").innerHTML);	 
}	
});

//////////////////////////////////////////////////////////////// TÍTULO ///////////////////////////////////////////

$('#txt_title').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
var title = document.getElementById('txt_title').value;	
if(title != ""){
acc.setTitle({text: ""+title+""});
}else{
acc.setTitle({text: "NPSmart"});
}	
});

//////////////////////////////////////////////////////////////// LEGENDAS //////////////////////////////////////////

$('#txt_legend1').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend1").val() != ""){
legend[1] = $("#txt_legend1").val();	
acc.legend.allItems[1].update({name:""+legend[1]+""});
}else{
acc.legend.allItems[1].update({name:""+legend_old1+""});
}	
});

$('#txt_legend2').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend2").val() != ""){
legend[2] = $("#txt_legend2").val();	
acc.legend.allItems[2].update({name:""+legend[2]+""});
}else{
acc.legend.allItems[2].update({name:""+legend_old2+""});
}	
});

$('#txt_legend3').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend3").val() != ""){
legend[3] = $("#txt_legend3").val();	
acc.legend.allItems[3].update({name:""+legend[3]+""});
}else{
acc.legend.allItems[3].update({name:""+legend_old3+""});
}	
});

$('#txt_legend4').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend4").val() != ""){
legend[4] = $("#txt_legend4").val();	
acc.legend.allItems[4].update({name:""+legend[4]+""});
}else{
acc.legend.allItems[4].update({name:""+legend_old4+""});
}	
});

$('#txt_legend5').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend5").val() != ""){
legend[5] = $("#txt_legend5").val();	
acc.legend.allItems[5].update({name:""+legend[5]+""});
}else{
acc.legend.allItems[5].update({name:""+legend_old5+""});
}	
});

$('#txt_legend6').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend6").val() != ""){
legend[6] = $("#txt_legend6").val();	
acc.legend.allItems[6].update({name:""+legend[6]+""});
}else{
acc.legend.allItems[6].update({name:""+legend_old6+""});
}	
});

$('#txt_legend7').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend7").val() != ""){
legend[7] = $("#txt_legend7").val();	
acc.legend.allItems[7].update({name:""+legend[7]+""});
}else{
acc.legend.allItems[7].update({name:""+legend_old7+""});
}	
});

$('#txt_legend8').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend8").val() != ""){
legend[8] = $("#txt_legend8").val();	
acc.legend.allItems[8].update({name:""+legend[8]+""});
}else{
acc.legend.allItems[8].update({name:""+legend_old8+""});
}	
});

$('#txt_legend9').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend9").val() != ""){
legend[9] = $("#txt_legend9").val();	
acc.legend.allItems[9].update({name:""+legend[9]+""});
}else{
acc.legend.allItems[9].update({name:""+legend_old9+""});
}	
});

//////////////////////////////////////////////////////////////// LINE STYLE ////////////////////////////////////////

$('#linestyle1').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle1").val() != ""){
typeline[1] = $("#linestyle1").val();
acc.series[1].update({dashStyle: ""+typeline[1]+""});
}else{
acc.series[1].update({dashStyle: "Solid"});	
}
});

$('#linestyle2').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle2").val() != ""){
typeline[2] = $("#linestyle2").val();
acc.series[2].update({dashStyle: ""+typeline[2]+""});
}else{
acc.series[2].update({dashStyle: "Solid"});	
}
});

$('#linestyle3').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle3").val() != ""){
typeline[3] = $("#linestyle3").val();
acc.series[3].update({dashStyle: ""+typeline[3]+""});
}else{
acc.series[3].update({dashStyle: "Solid"});	
}
});

$('#linestyle4').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle4").val() != ""){
typeline[4] = $("#linestyle4").val();
acc.series[4].update({dashStyle: ""+typeline[4]+""});
}else{
acc.series[4].update({dashStyle: "Solid"});	
}
});

$('#linestyle5').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle5").val() != ""){
typeline[5] = $("#linestyle5").val();
acc.series[5].update({dashStyle: ""+typeline[5]+""});
}else{
acc.series[5].update({dashStyle: "Solid"});	
}
});

$('#linestyle6').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle6").val() != ""){
typeline[6] = $("#linestyle6").val();
acc.series[6].update({dashStyle: ""+typeline[6]+""});
}else{
acc.series[6].update({dashStyle: "Solid"});	
}
});

$('#linestyle7').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle7").val() != ""){
typeline[7] = $("#linestyle7").val();
acc.series[7].update({dashStyle: ""+typeline[7]+""});
}else{
acc.series[7].update({dashStyle: "Solid"});	
}
});

$('#linestyle8').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle8").val() != ""){
typeline[8] = $("#linestyle8").val();
acc.series[8].update({dashStyle: ""+typeline[8]+""});
}else{
acc.series[8].update({dashStyle: "Solid"});	
}
});

$('#linestyle9').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle9").val() != ""){
typeline[9] = $("#linestyle9").val();
acc.series[9].update({dashStyle: ""+typeline[9]+""});
}else{
acc.series[9].update({dashStyle: "Solid"});	
}
});

//////////////////////////////////////////////////////////////// LINE WIDTH ////////////////////////////////////////

$('#linewidth1').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth1").val() != 0){
var width_line = $("#linewidth1").val();
var int_width_line	= parseInt(width_line);
acc.series[1].update({lineWidth: int_width_line});
}else{
acc.series[1].update({lineWidth: 2});	
}	
});

$('#linewidth2').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth2").val() != 0){
var width_line = $("#linewidth2").val();
var int_width_line	= parseInt(width_line);
acc.series[2].update({lineWidth: int_width_line});
}else{
acc.series[2].update({lineWidth: 2});	
}
});

$('#linewidth3').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth3").val() != 0){
var width_line = $("#linewidth3").val();
var int_width_line	= parseInt(width_line);
acc.series[3].update({lineWidth: int_width_line});
}else{
acc.series[3].update({lineWidth: 2});	
}
});

$('#linewidth4').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth4").val() != 0){
var width_line = $("#linewidth4").val();
var int_width_line	= parseInt(width_line);
acc.series[4].update({lineWidth: int_width_line});
}else{
acc.series[4].update({lineWidth: 2});	
}
});

$('#linewidth5').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth5").val() != 0){
var width_line = $("#linewidth5").val();
var int_width_line	= parseInt(width_line);
acc.series[5].update({lineWidth: int_width_line});
}else{
acc.series[5].update({lineWidth: 2});	
}
});

$('#linewidth6').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth6").val() != 0){
var width_line = $("#linewidth6").val();
var int_width_line	= parseInt(width_line);
acc.series[6].update({lineWidth: int_width_line});
}else{
acc.series[6].update({lineWidth: 2});	
}
});

$('#linewidth7').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth7").val() != 0){
var width_line = $("#linewidth7").val();
var int_width_line	= parseInt(width_line);
acc.series[7].update({lineWidth: int_width_line});
}else{
acc.series[7].update({lineWidth: 2});	
}
});

$('#linewidth8').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth8").val() != 0){
var width_line = $("#linewidth8").val();
var int_width_line	= parseInt(width_line);
acc.series[8].update({lineWidth: int_width_line});
}else{
acc.series[8].update({lineWidth: 2});	
}
});

$('#linewidth9').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth9").val() != 0){
var width_line = $("#linewidth9").val();
var int_width_line	= parseInt(width_line);
acc.series[9].update({lineWidth: int_width_line});
}else{
acc.series[9].update({lineWidth: 2});	
}
});

//////////////////////////////////////////////////////////////// SCALE /////////////////////////////////////////////

$('#scale_max').on('keyup mouseup', function(){
	
var x = $('#scale_max').val();
var acc = $("#container").highcharts();
if(x != ""){	
acc.yAxis[0].update({max: ""+x+""});
}else{
$('#scale_max').val(acc.yAxis[0].getExtremes().dataMax);	
acc.yAxis[0].update({max: null});
}	
});

$('#scale_min').on('keyup mouseup', function(){
	
var x = $('#scale_min').val();
var acc = $("#container").highcharts();
if(x != ""){	
acc.yAxis[0].update({min: ""+x+""});
}else{
$('#scale_min').val(acc.yAxis[0].getExtremes().dataMin);	
acc.yAxis[0].update({min: null});
}	
});

//////////////////////////////////////////////////////////////// FONT STYLE ///////////////////////////////////////

$('#myFont').fontselect().change(function(){
        
// replace + signs with spaces for css
var font = $(this).val().replace(/\+/g, ' ');
var acc = $("#container").highcharts();
// split font into family and weight
font = font.split(':');

// set family on paragraphs 
//$('p').css('font-family', font[0]);
 //console.log(font[0]);
fonte = font[0];
acc.update({
chart: {
style: {
fontFamily: "'"+fonte+"', sans-serif"
}
}
});
});

///////////////////////////////////////////////////////////////// FONT SIZE ////////////////////////////////////////

$('#myFontSize_Axis').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc = $("#container").highcharts();

console.log(SizeFont);
// acc.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc.update({
xAxis:{
labels: {
style:{
fontSize: ""+SizeFont+"px"	
}		
}		
}	
});

acc.update({
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

$('#myFontSize_Title').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc = $("#container").highcharts();

console.log(SizeFont);
// acc.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc.update({
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

$('#colorSelector_Axis').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector_Axis').css('backgroundColor', '#' + hex);
		acc.update({
		xAxis:{
		labels: {
		style:{
		color: '#' + hex	
		}		
		}		
		}	
		});

		acc.update({
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

$('#colorSelector_Title').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector_Title').css('backgroundColor', '#' + hex);
		acc.update({
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

$( "#btn_theme" ).click(function() {

if(vis_theme == true){
document.getElementById("div_theme").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
vis_theme = false;	
}else if(vis_theme == false){	
document.getElementById("div_theme").style.display = "block";
document.getElementById("div_text").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_theme = true;
}

});

$( "#btn_text" ).click(function() {

if(vis_text == true){
document.getElementById("div_text").style.display = "none";
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_text = false;	
}else if(vis_text == false){	
document.getElementById("div_text").style.display = "block";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-up");
vis_text = true;
}

});	

$( "#btn_colors" ).click(function() {

if(vis_colors == true){
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
vis_colors = false;	
}else if(vis_colors == false){	
document.getElementById("div_text").style.display = "none";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "block";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_colors = true;
}

});	

$( "#btn_line" ).click(function() {

if(vis_line == true){
document.getElementById("div_line").style.display = "none";
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
vis_line = false;	
}else if(vis_line == false){	
document.getElementById("div_text").style.display = "none";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "block";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_line = true;
}

});

$( "#btn_default" ).click(function() {
var acc = $("#container").highcharts();	
acc.destroy();
eval(document.getElementById("runscript_hourly").innerHTML);
});		
	
});
</script>

<script type="text/javascript" id="runscript">
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

$(document).ready(function() {

var acc = new Highcharts.stockChart({
	chart: {
				renderTo: 'container',
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
		if($ct1 == 1){
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
		if($ct2 == 1){
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
		if($ct3 == 1){
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
		if($ct4 == 1){
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
		if($ct5 == 1){
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
		if($ct6 == 1){
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
		if($ct7 == 1){
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
		if($ct8 == 1){
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
		if($ct9 == 1){
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

var acc = $("#container").highcharts();
$('#scale_max').val(acc.yAxis[0].getExtremes().dataMax);
$('#scale_min').val(acc.yAxis[0].getExtremes().dataMin);

});

//////////////////////////////////////////////////////// CORES DAS LINHAS ////////////////////////////////////////

$('#colorSelector1').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector1').css('backgroundColor', '#' + hex);
		color[1] = hex;
		acc.series[1].update({color: "#"+color[1]+""});
	}
});

$('#colorSelector2').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector2').css('backgroundColor', '#' + hex);
		color[2] = hex;
		acc.series[2].update({color: "#"+color[2]+""});
	}
});

$('#colorSelector3').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector3').css('backgroundColor', '#' + hex);
		color[3] = hex;
		acc.series[3].update({color: "#"+color[3]+""});
	}
});

$('#colorSelector4').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector4').css('backgroundColor', '#' + hex);
		color[4] = hex;
		acc.series[4].update({color: "#"+color[4]+""});
	}
});

$('#colorSelector5').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector5').css('backgroundColor', '#' + hex);
		color[5] = hex;
		acc.series[5].update({color: "#"+color[5]+""});
	}
});

$('#colorSelector6').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector6').css('backgroundColor', '#' + hex);
		color[6] = hex;
		acc.series[6].update({color: "#"+color[6]+""});
	}
});

$('#colorSelector7').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector7').css('backgroundColor', '#' + hex);
		color[7] = hex;
		acc.series[7].update({color: "#"+color[7]+""});
	}
});

$('#colorSelector8').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector8').css('backgroundColor', '#' + hex);
		color[8] = hex;
		acc.series[8].update({color: "#"+color[1]+""});
	}
});

$('#colorSelector9').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector9').css('backgroundColor', '#' + hex);
		color[9] = hex;
		acc.series[9].update({color: "#"+color[1]+""});
	}
});

//////////////////////////////////////////////////////////////// TEMAS /////////////////////////////////////////////

$('#theme').change(function(){
var acc = $("#container").highcharts();		
var x = $(this).val();	
if(x == "SandSignika"){
acc.destroy();	
eval(document.getElementById("Sand_Signika").innerHTML);
Highcharts.setOptions(chart_Sand_Signika);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "DarkUnika"){
acc.destroy();	
eval(document.getElementById("Dark_Unika").innerHTML);
Highcharts.setOptions(chart_Dark_Unika);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "DarkBlue"){
acc.destroy();	
eval(document.getElementById("Dark_Blue").innerHTML);
Highcharts.setOptions(chart_Dark_Blue);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "Skies"){
acc.destroy();	
eval(document.getElementById("Nuvem").innerHTML);
Highcharts.setOptions(chart_Skies);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "DarkGreen"){
acc.destroy();	
eval(document.getElementById("Dark_Green").innerHTML);
Highcharts.setOptions(chart_Dark_Green);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "FlatDark"){
acc.destroy();	
eval(document.getElementById("Flat_Dark").innerHTML);
Highcharts.setOptions(chart_Flat_Dark);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "Null"){
acc.destroy();	
eval(document.getElementById("Empty").innerHTML);
Highcharts.setOptions(chart_null);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "val_ffx"){
acc.destroy();	
eval(document.getElementById("ffx").innerHTML);
Highcharts.setOptions(chart_ffx);
eval(document.getElementById("runscript").innerHTML);	 
}else
if(x == "val_538"){
acc.destroy();	
eval(document.getElementById("538").innerHTML);
Highcharts.setOptions(chart_538);
eval(document.getElementById("runscript").innerHTML);	 
}	
});

//////////////////////////////////////////////////////////////// TÍTULO ///////////////////////////////////////////

$('#txt_title').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
var title = document.getElementById('txt_title').value;	
if(title != ""){
acc.setTitle({text: ""+title+""});
}else{
acc.setTitle({text: "NPSmart"});
}	
});

//////////////////////////////////////////////////////////////// LEGENDAS //////////////////////////////////////////

$('#txt_legend1').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend1").val() != ""){
legend[1] = $("#txt_legend1").val();	
acc.legend.allItems[1].update({name:""+legend[1]+""});
}else{
acc.legend.allItems[1].update({name:""+legend_old1+""});
}	
});

$('#txt_legend2').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend2").val() != ""){
legend[2] = $("#txt_legend2").val();	
acc.legend.allItems[2].update({name:""+legend[2]+""});
}else{
acc.legend.allItems[2].update({name:""+legend_old2+""});
}	
});

$('#txt_legend3').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend3").val() != ""){
legend[3] = $("#txt_legend3").val();	
acc.legend.allItems[3].update({name:""+legend[3]+""});
}else{
acc.legend.allItems[3].update({name:""+legend_old3+""});
}	
});

$('#txt_legend4').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend4").val() != ""){
legend[4] = $("#txt_legend4").val();	
acc.legend.allItems[4].update({name:""+legend[4]+""});
}else{
acc.legend.allItems[4].update({name:""+legend_old4+""});
}	
});

$('#txt_legend5').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend5").val() != ""){
legend[5] = $("#txt_legend5").val();	
acc.legend.allItems[5].update({name:""+legend[5]+""});
}else{
acc.legend.allItems[5].update({name:""+legend_old5+""});
}	
});

$('#txt_legend6').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend6").val() != ""){
legend[6] = $("#txt_legend6").val();	
acc.legend.allItems[6].update({name:""+legend[6]+""});
}else{
acc.legend.allItems[6].update({name:""+legend_old6+""});
}	
});

$('#txt_legend7').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend7").val() != ""){
legend[7] = $("#txt_legend7").val();	
acc.legend.allItems[7].update({name:""+legend[7]+""});
}else{
acc.legend.allItems[7].update({name:""+legend_old7+""});
}	
});

$('#txt_legend8').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend8").val() != ""){
legend[8] = $("#txt_legend8").val();	
acc.legend.allItems[8].update({name:""+legend[8]+""});
}else{
acc.legend.allItems[8].update({name:""+legend_old8+""});
}	
});

$('#txt_legend9').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend9").val() != ""){
legend[9] = $("#txt_legend9").val();	
acc.legend.allItems[9].update({name:""+legend[9]+""});
}else{
acc.legend.allItems[9].update({name:""+legend_old9+""});
}	
});

//////////////////////////////////////////////////////////////// LINE STYLE ////////////////////////////////////////

$('#linestyle1').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle1").val() != ""){
typeline[1] = $("#linestyle1").val();
acc.series[1].update({dashStyle: ""+typeline[1]+""});
}else{
acc.series[1].update({dashStyle: "Solid"});	
}
});

$('#linestyle2').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle2").val() != ""){
typeline[2] = $("#linestyle2").val();
acc.series[2].update({dashStyle: ""+typeline[2]+""});
}else{
acc.series[2].update({dashStyle: "Solid"});	
}
});

$('#linestyle3').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle3").val() != ""){
typeline[3] = $("#linestyle3").val();
acc.series[3].update({dashStyle: ""+typeline[3]+""});
}else{
acc.series[3].update({dashStyle: "Solid"});	
}
});

$('#linestyle4').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle4").val() != ""){
typeline[4] = $("#linestyle4").val();
acc.series[4].update({dashStyle: ""+typeline[4]+""});
}else{
acc.series[4].update({dashStyle: "Solid"});	
}
});

$('#linestyle5').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle5").val() != ""){
typeline[5] = $("#linestyle5").val();
acc.series[5].update({dashStyle: ""+typeline[5]+""});
}else{
acc.series[5].update({dashStyle: "Solid"});	
}
});

$('#linestyle6').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle6").val() != ""){
typeline[6] = $("#linestyle6").val();
acc.series[6].update({dashStyle: ""+typeline[6]+""});
}else{
acc.series[6].update({dashStyle: "Solid"});	
}
});

$('#linestyle7').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle7").val() != ""){
typeline[7] = $("#linestyle7").val();
acc.series[7].update({dashStyle: ""+typeline[7]+""});
}else{
acc.series[7].update({dashStyle: "Solid"});	
}
});

$('#linestyle8').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle8").val() != ""){
typeline[8] = $("#linestyle8").val();
acc.series[8].update({dashStyle: ""+typeline[8]+""});
}else{
acc.series[8].update({dashStyle: "Solid"});	
}
});

$('#linestyle9').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle9").val() != ""){
typeline[9] = $("#linestyle9").val();
acc.series[9].update({dashStyle: ""+typeline[9]+""});
}else{
acc.series[9].update({dashStyle: "Solid"});	
}
});

//////////////////////////////////////////////////////////////// LINE WIDTH ////////////////////////////////////////

$('#linewidth1').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth1").val() != 0){
var width_line = $("#linewidth1").val();
var int_width_line	= parseInt(width_line);
acc.series[1].update({lineWidth: int_width_line});
}else{
acc.series[1].update({lineWidth: 2});	
}	
});

$('#linewidth2').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth2").val() != 0){
var width_line = $("#linewidth2").val();
var int_width_line	= parseInt(width_line);
acc.series[2].update({lineWidth: int_width_line});
}else{
acc.series[2].update({lineWidth: 2});	
}
});

$('#linewidth3').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth3").val() != 0){
var width_line = $("#linewidth3").val();
var int_width_line	= parseInt(width_line);
acc.series[3].update({lineWidth: int_width_line});
}else{
acc.series[3].update({lineWidth: 2});	
}
});

$('#linewidth4').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth4").val() != 0){
var width_line = $("#linewidth4").val();
var int_width_line	= parseInt(width_line);
acc.series[4].update({lineWidth: int_width_line});
}else{
acc.series[4].update({lineWidth: 2});	
}
});

$('#linewidth5').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth5").val() != 0){
var width_line = $("#linewidth5").val();
var int_width_line	= parseInt(width_line);
acc.series[5].update({lineWidth: int_width_line});
}else{
acc.series[5].update({lineWidth: 2});	
}
});

$('#linewidth6').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth6").val() != 0){
var width_line = $("#linewidth6").val();
var int_width_line	= parseInt(width_line);
acc.series[6].update({lineWidth: int_width_line});
}else{
acc.series[6].update({lineWidth: 2});	
}
});

$('#linewidth7').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth7").val() != 0){
var width_line = $("#linewidth7").val();
var int_width_line	= parseInt(width_line);
acc.series[7].update({lineWidth: int_width_line});
}else{
acc.series[7].update({lineWidth: 2});	
}
});

$('#linewidth8').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth8").val() != 0){
var width_line = $("#linewidth8").val();
var int_width_line	= parseInt(width_line);
acc.series[8].update({lineWidth: int_width_line});
}else{
acc.series[8].update({lineWidth: 2});	
}
});

$('#linewidth9').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth9").val() != 0){
var width_line = $("#linewidth9").val();
var int_width_line	= parseInt(width_line);
acc.series[9].update({lineWidth: int_width_line});
}else{
acc.series[9].update({lineWidth: 2});	
}
});

//////////////////////////////////////////////////////////////// SCALE /////////////////////////////////////////////

$('#scale_max').on('keyup mouseup', function(){
	
var x = $('#scale_max').val();
var acc = $("#container").highcharts();
if(x != ""){	
acc.yAxis[0].update({max: ""+x+""});
}else{
$('#scale_max').val(acc.yAxis[0].getExtremes().dataMax);	
acc.yAxis[0].update({max: null});
}	
});

$('#scale_min').on('keyup mouseup', function(){
	
var x = $('#scale_min').val();
var acc = $("#container").highcharts();
if(x != ""){	
acc.yAxis[0].update({min: ""+x+""});
}else{
$('#scale_min').val(acc.yAxis[0].getExtremes().dataMin);	
acc.yAxis[0].update({min: null});
}	
});

//////////////////////////////////////////////////////////////// FONT STYLE ///////////////////////////////////////

$('#myFont').fontselect().change(function(){
        
// replace + signs with spaces for css
var font = $(this).val().replace(/\+/g, ' ');
var acc = $("#container").highcharts();
// split font into family and weight
font = font.split(':');

// set family on paragraphs 
//$('p').css('font-family', font[0]);
 //console.log(font[0]);
fonte = font[0];
acc.update({
chart: {
style: {
fontFamily: "'"+fonte+"', sans-serif"
}
}
});
});

///////////////////////////////////////////////////////////////// FONT SIZE ////////////////////////////////////////

$('#myFontSize_Axis').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc = $("#container").highcharts();

console.log(SizeFont);
// acc.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc.update({
xAxis:{
labels: {
style:{
fontSize: ""+SizeFont+"px"	
}		
}		
}	
});

acc.update({
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

$('#myFontSize_Title').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc = $("#container").highcharts();

console.log(SizeFont);
// acc.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc.update({
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

$('#colorSelector_Axis').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector_Axis').css('backgroundColor', '#' + hex);
		acc.update({
		xAxis:{
		labels: {
		style:{
		color: '#' + hex	
		}		
		}		
		}	
		});

		acc.update({
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

$('#colorSelector_Title').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector_Title').css('backgroundColor', '#' + hex);
		acc.update({
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

$( "#btn_theme" ).click(function() {

if(vis_theme == true){
document.getElementById("div_theme").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
vis_theme = false;	
}else if(vis_theme == false){	
document.getElementById("div_theme").style.display = "block";
document.getElementById("div_text").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_theme = true;
}

});

$( "#btn_text" ).click(function() {

if(vis_text == true){
document.getElementById("div_text").style.display = "none";
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_text = false;	
}else if(vis_text == false){	
document.getElementById("div_text").style.display = "block";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-up");
vis_text = true;
}

});	

$( "#btn_colors" ).click(function() {

if(vis_colors == true){
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
vis_colors = false;	
}else if(vis_colors == false){	
document.getElementById("div_text").style.display = "none";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "block";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_colors = true;
}

});	

$( "#btn_line" ).click(function() {

if(vis_line == true){
document.getElementById("div_line").style.display = "none";
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
vis_line = false;	
}else if(vis_line == false){	
document.getElementById("div_text").style.display = "none";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "block";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_line = true;
}

});

$( "#btn_default" ).click(function() {
var acc = $("#container").highcharts();	
acc.destroy();
eval(document.getElementById("runscript").innerHTML);
});		
	
});
  </script>

<script type="text/javascript" id="runscript_week">
$(function () {
	
var chart;
var estado = true;
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

$(document).ready(function() {
	
var acc = new Highcharts.Chart({
	chart: {
				renderTo: 'container',
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
						if(estado != false){
						if(e.shiftKey == 1){
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
	
	exporting: {
			enabled: true,
			chartOptions: {
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
				// type: 'datetime',
				// dateTimeLabelFormats: {
				// day: '%d %b'    //ex- 01 Jan 2016
			type: "category",	
			tickInterval: 1,
			tickmarkPlacement: 'on',
			plotLines: [{
			dashStyle: 'dash',
			color: 'red',
			width: 2,
			zIndex: 10
			},{
			dashStyle: 'dash',
			color: 'red',
			width: 2,
			zIndex: 10
			}],
		// }
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
	headerFormat: '<span>Week {point.key}</span><br/>',	
	pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',	
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
        if($q1 != ""){    
		for ($i = 0; $i < $kpi_query1->num_rows(); $i++) {
		$row = $kpi_query1->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['week']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
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
        if($q2 != ""){    
		for ($i = 0; $i < $kpi_query2->num_rows(); $i++) {
		$row = $kpi_query2->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['week']."', ".$row['node']."], ";	
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
        if($q3 != ""){    
		for ($i = 0; $i < $kpi_query3->num_rows(); $i++) {
		$row = $kpi_query3->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['week']."', ".$row['node']."], ";	
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
        if($q4 != ""){    
		for ($i = 0; $i < $kpi_query4->num_rows(); $i++) {
		$row = $kpi_query4->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['week']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
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
		
        data: [<?php
        if($q5 != ""){    
		for ($i = 0; $i < $kpi_query5->num_rows(); $i++) {
		$row = $kpi_query5->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['week']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
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
		
        data: [<?php
        if($q6 != ""){    
		for ($i = 0; $i < $kpi_query6->num_rows(); $i++) {
		$row = $kpi_query6->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['week']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
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
		
        data: [<?php
        if($q7 != ""){    
		for ($i = 0; $i < $kpi_query7->num_rows(); $i++) {
		$row = $kpi_query7->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['week']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
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
		
        data: [<?php
        if($q8 != ""){    
		for ($i = 0; $i < $kpi_query8->num_rows(); $i++) {
		$row = $kpi_query8->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['week']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
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
		
        data: [<?php
        if($q9 != ""){    
		for ($i = 0; $i < $kpi_query9->num_rows(); $i++) {
		$row = $kpi_query9->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['week']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
		showInLegend: <?php echo $v9 ?>,
		
		yAxis: <?php echo $c9 ?>
    }
	]
});

//////////////////////////////////////// SETA O VALOR DEFAULT DAS INPUT TEXT DAS ESCALAS ///////////////////////////

var acc = $("#container").highcharts();
$('#scale_max').val(acc.yAxis[0].getExtremes().dataMax);
$('#scale_min').val(acc.yAxis[0].getExtremes().dataMin);

});

//////////////////////////////////////////////////////// CORES DAS LINHAS ////////////////////////////////////////

$('#colorSelector1').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector1').css('backgroundColor', '#' + hex);
		color[1] = hex;
		acc.series[1].update({color: "#"+color[1]+""});
	}
});

$('#colorSelector2').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector2').css('backgroundColor', '#' + hex);
		color[2] = hex;
		acc.series[2].update({color: "#"+color[2]+""});
	}
});

$('#colorSelector3').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector3').css('backgroundColor', '#' + hex);
		color[3] = hex;
		acc.series[3].update({color: "#"+color[3]+""});
	}
});

$('#colorSelector4').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector4').css('backgroundColor', '#' + hex);
		color[4] = hex;
		acc.series[4].update({color: "#"+color[4]+""});
	}
});

$('#colorSelector5').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector5').css('backgroundColor', '#' + hex);
		color[5] = hex;
		acc.series[5].update({color: "#"+color[5]+""});
	}
});

$('#colorSelector6').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector6').css('backgroundColor', '#' + hex);
		color[6] = hex;
		acc.series[6].update({color: "#"+color[6]+""});
	}
});

$('#colorSelector7').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector7').css('backgroundColor', '#' + hex);
		color[7] = hex;
		acc.series[7].update({color: "#"+color[7]+""});
	}
});

$('#colorSelector8').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector8').css('backgroundColor', '#' + hex);
		color[8] = hex;
		acc.series[8].update({color: "#"+color[1]+""});
	}
});

$('#colorSelector9').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector9').css('backgroundColor', '#' + hex);
		color[9] = hex;
		acc.series[9].update({color: "#"+color[1]+""});
	}
});

//////////////////////////////////////////////////////////////// TEMAS /////////////////////////////////////////////

$('#theme').change(function(){
var acc = $("#container").highcharts();		
var x = $(this).val();	
if(x == "SandSignika"){
acc.destroy();	
eval(document.getElementById("Sand_Signika").innerHTML);
Highcharts.setOptions(chart_Sand_Signika);
eval(document.getElementById("runscript_week").innerHTML);	 
}else
if(x == "DarkUnika"){
acc.destroy();	
eval(document.getElementById("Dark_Unika").innerHTML);
Highcharts.setOptions(chart_Dark_Unika);
eval(document.getElementById("runscript_week").innerHTML);	 
}else
if(x == "DarkBlue"){
acc.destroy();	
eval(document.getElementById("Dark_Blue").innerHTML);
Highcharts.setOptions(chart_Dark_Blue);
eval(document.getElementById("runscript_week").innerHTML);	 
}else
if(x == "Skies"){
acc.destroy();	
eval(document.getElementById("Nuvem").innerHTML);
Highcharts.setOptions(chart_Skies);
eval(document.getElementById("runscript_week").innerHTML);	 
}else
if(x == "DarkGreen"){
acc.destroy();	
eval(document.getElementById("Dark_Green").innerHTML);
Highcharts.setOptions(chart_Dark_Green);
eval(document.getElementById("runscript_week").innerHTML);	 
}else
if(x == "FlatDark"){
acc.destroy();	
eval(document.getElementById("Flat_Dark").innerHTML);
Highcharts.setOptions(chart_Flat_Dark);
eval(document.getElementById("runscript_week").innerHTML);	 
}else
if(x == "Null"){
acc.destroy();	
eval(document.getElementById("Empty").innerHTML);
Highcharts.setOptions(chart_null);
eval(document.getElementById("runscript_week").innerHTML);	 
}else
if(x == "val_ffx"){
acc.destroy();	
eval(document.getElementById("ffx").innerHTML);
Highcharts.setOptions(chart_ffx);
eval(document.getElementById("runscript_week").innerHTML);	 
}else
if(x == "val_538"){
acc.destroy();	
eval(document.getElementById("538").innerHTML);
Highcharts.setOptions(chart_538);
eval(document.getElementById("runscript_week").innerHTML);	 
}	
});

//////////////////////////////////////////////////////////////// TÍTULO ///////////////////////////////////////////

$('#txt_title').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
var title = document.getElementById('txt_title').value;	
if(title != ""){
acc.setTitle({text: ""+title+""});
}else{
acc.setTitle({text: "NPSmart"});
}	
});

//////////////////////////////////////////////////////////////// LEGENDAS //////////////////////////////////////////

$('#txt_legend1').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend1").val() != ""){
legend[1] = $("#txt_legend1").val();	
acc.legend.allItems[1].update({name:""+legend[1]+""});
}else{
acc.legend.allItems[1].update({name:""+legend_old1+""});
}	
});

$('#txt_legend2').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend2").val() != ""){
legend[2] = $("#txt_legend2").val();	
acc.legend.allItems[2].update({name:""+legend[2]+""});
}else{
acc.legend.allItems[2].update({name:""+legend_old2+""});
}	
});

$('#txt_legend3').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend3").val() != ""){
legend[3] = $("#txt_legend3").val();	
acc.legend.allItems[3].update({name:""+legend[3]+""});
}else{
acc.legend.allItems[3].update({name:""+legend_old3+""});
}	
});

$('#txt_legend4').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend4").val() != ""){
legend[4] = $("#txt_legend4").val();	
acc.legend.allItems[4].update({name:""+legend[4]+""});
}else{
acc.legend.allItems[4].update({name:""+legend_old4+""});
}	
});

$('#txt_legend5').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend5").val() != ""){
legend[5] = $("#txt_legend5").val();	
acc.legend.allItems[5].update({name:""+legend[5]+""});
}else{
acc.legend.allItems[5].update({name:""+legend_old5+""});
}	
});

$('#txt_legend6').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend6").val() != ""){
legend[6] = $("#txt_legend6").val();	
acc.legend.allItems[6].update({name:""+legend[6]+""});
}else{
acc.legend.allItems[6].update({name:""+legend_old6+""});
}	
});

$('#txt_legend7').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend7").val() != ""){
legend[7] = $("#txt_legend7").val();	
acc.legend.allItems[7].update({name:""+legend[7]+""});
}else{
acc.legend.allItems[7].update({name:""+legend_old7+""});
}	
});

$('#txt_legend8').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend8").val() != ""){
legend[8] = $("#txt_legend8").val();	
acc.legend.allItems[8].update({name:""+legend[8]+""});
}else{
acc.legend.allItems[8].update({name:""+legend_old8+""});
}	
});

$('#txt_legend9').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend9").val() != ""){
legend[9] = $("#txt_legend9").val();	
acc.legend.allItems[9].update({name:""+legend[9]+""});
}else{
acc.legend.allItems[9].update({name:""+legend_old9+""});
}	
});

//////////////////////////////////////////////////////////////// LINE STYLE ////////////////////////////////////////

$('#linestyle1').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle1").val() != ""){
typeline[1] = $("#linestyle1").val();
acc.series[1].update({dashStyle: ""+typeline[1]+""});
}else{
acc.series[1].update({dashStyle: "Solid"});	
}
});

$('#linestyle2').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle2").val() != ""){
typeline[2] = $("#linestyle2").val();
acc.series[2].update({dashStyle: ""+typeline[2]+""});
}else{
acc.series[2].update({dashStyle: "Solid"});	
}
});

$('#linestyle3').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle3").val() != ""){
typeline[3] = $("#linestyle3").val();
acc.series[3].update({dashStyle: ""+typeline[3]+""});
}else{
acc.series[3].update({dashStyle: "Solid"});	
}
});

$('#linestyle4').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle4").val() != ""){
typeline[4] = $("#linestyle4").val();
acc.series[4].update({dashStyle: ""+typeline[4]+""});
}else{
acc.series[4].update({dashStyle: "Solid"});	
}
});

$('#linestyle5').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle5").val() != ""){
typeline[5] = $("#linestyle5").val();
acc.series[5].update({dashStyle: ""+typeline[5]+""});
}else{
acc.series[5].update({dashStyle: "Solid"});	
}
});

$('#linestyle6').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle6").val() != ""){
typeline[6] = $("#linestyle6").val();
acc.series[6].update({dashStyle: ""+typeline[6]+""});
}else{
acc.series[6].update({dashStyle: "Solid"});	
}
});

$('#linestyle7').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle7").val() != ""){
typeline[7] = $("#linestyle7").val();
acc.series[7].update({dashStyle: ""+typeline[7]+""});
}else{
acc.series[7].update({dashStyle: "Solid"});	
}
});

$('#linestyle8').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle8").val() != ""){
typeline[8] = $("#linestyle8").val();
acc.series[8].update({dashStyle: ""+typeline[8]+""});
}else{
acc.series[8].update({dashStyle: "Solid"});	
}
});

$('#linestyle9').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle9").val() != ""){
typeline[9] = $("#linestyle9").val();
acc.series[9].update({dashStyle: ""+typeline[9]+""});
}else{
acc.series[9].update({dashStyle: "Solid"});	
}
});

//////////////////////////////////////////////////////////////// LINE WIDTH ////////////////////////////////////////

$('#linewidth1').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth1").val() != 0){
var width_line = $("#linewidth1").val();
var int_width_line	= parseInt(width_line);
acc.series[1].update({lineWidth: int_width_line});
}else{
acc.series[1].update({lineWidth: 2});	
}	
});

$('#linewidth2').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth2").val() != 0){
var width_line = $("#linewidth2").val();
var int_width_line	= parseInt(width_line);
acc.series[2].update({lineWidth: int_width_line});
}else{
acc.series[2].update({lineWidth: 2});	
}
});

$('#linewidth3').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth3").val() != 0){
var width_line = $("#linewidth3").val();
var int_width_line	= parseInt(width_line);
acc.series[3].update({lineWidth: int_width_line});
}else{
acc.series[3].update({lineWidth: 2});	
}
});

$('#linewidth4').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth4").val() != 0){
var width_line = $("#linewidth4").val();
var int_width_line	= parseInt(width_line);
acc.series[4].update({lineWidth: int_width_line});
}else{
acc.series[4].update({lineWidth: 2});	
}
});

$('#linewidth5').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth5").val() != 0){
var width_line = $("#linewidth5").val();
var int_width_line	= parseInt(width_line);
acc.series[5].update({lineWidth: int_width_line});
}else{
acc.series[5].update({lineWidth: 2});	
}
});

$('#linewidth6').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth6").val() != 0){
var width_line = $("#linewidth6").val();
var int_width_line	= parseInt(width_line);
acc.series[6].update({lineWidth: int_width_line});
}else{
acc.series[6].update({lineWidth: 2});	
}
});

$('#linewidth7').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth7").val() != 0){
var width_line = $("#linewidth7").val();
var int_width_line	= parseInt(width_line);
acc.series[7].update({lineWidth: int_width_line});
}else{
acc.series[7].update({lineWidth: 2});	
}
});

$('#linewidth8').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth8").val() != 0){
var width_line = $("#linewidth8").val();
var int_width_line	= parseInt(width_line);
acc.series[8].update({lineWidth: int_width_line});
}else{
acc.series[8].update({lineWidth: 2});	
}
});

$('#linewidth9').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth9").val() != 0){
var width_line = $("#linewidth9").val();
var int_width_line	= parseInt(width_line);
acc.series[9].update({lineWidth: int_width_line});
}else{
acc.series[9].update({lineWidth: 2});	
}
});

//////////////////////////////////////////////////////////////// SCALE /////////////////////////////////////////////

$('#scale_max').on('keyup mouseup', function(){
	
var x = $('#scale_max').val();
var acc = $("#container").highcharts();
if(x != ""){	
acc.yAxis[0].update({max: ""+x+""});
}else{
$('#scale_max').val(acc.yAxis[0].getExtremes().dataMax);	
acc.yAxis[0].update({max: null});
}	
});

$('#scale_min').on('keyup mouseup', function(){
	
var x = $('#scale_min').val();
var acc = $("#container").highcharts();
if(x != ""){	
acc.yAxis[0].update({min: ""+x+""});
}else{
$('#scale_min').val(acc.yAxis[0].getExtremes().dataMin);	
acc.yAxis[0].update({min: null});
}	
});

//////////////////////////////////////////////////////////////// FONT STYLE ///////////////////////////////////////

$('#myFont').fontselect().change(function(){
        
// replace + signs with spaces for css
var font = $(this).val().replace(/\+/g, ' ');
var acc = $("#container").highcharts();
// split font into family and weight
font = font.split(':');

// set family on paragraphs 
//$('p').css('font-family', font[0]);
 //console.log(font[0]);
fonte = font[0];
acc.update({
chart: {
style: {
fontFamily: "'"+fonte+"', sans-serif"
}
}
});
});

///////////////////////////////////////////////////////////////// FONT SIZE ////////////////////////////////////////

$('#myFontSize_Axis').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc = $("#container").highcharts();

console.log(SizeFont);
// acc.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc.update({
xAxis:{
labels: {
style:{
fontSize: ""+SizeFont+"px"	
}		
}		
}	
});

acc.update({
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

$('#myFontSize_Title').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc = $("#container").highcharts();

console.log(SizeFont);
// acc.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc.update({
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

$('#colorSelector_Axis').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector_Axis').css('backgroundColor', '#' + hex);
		acc.update({
		xAxis:{
		labels: {
		style:{
		color: '#' + hex	
		}		
		}		
		}	
		});

		acc.update({
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

$('#colorSelector_Title').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector_Title').css('backgroundColor', '#' + hex);
		acc.update({
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

$( "#btn_theme" ).click(function() {

if(vis_theme == true){
document.getElementById("div_theme").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
vis_theme = false;	
}else if(vis_theme == false){	
document.getElementById("div_theme").style.display = "block";
document.getElementById("div_text").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_theme = true;
}

});

$( "#btn_text" ).click(function() {

if(vis_text == true){
document.getElementById("div_text").style.display = "none";
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_text = false;	
}else if(vis_text == false){	
document.getElementById("div_text").style.display = "block";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-up");
vis_text = true;
}

});	

$( "#btn_colors" ).click(function() {

if(vis_colors == true){
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
vis_colors = false;	
}else if(vis_colors == false){	
document.getElementById("div_text").style.display = "none";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "block";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_colors = true;
}

});	

$( "#btn_line" ).click(function() {

if(vis_line == true){
document.getElementById("div_line").style.display = "none";
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
vis_line = false;	
}else if(vis_line == false){	
document.getElementById("div_text").style.display = "none";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "block";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_line = true;
}

});

$( "#btn_default" ).click(function() {
var acc = $("#container").highcharts();	
acc.destroy();
eval(document.getElementById("runscript_week").innerHTML);
});		
	
});
</script>

<script type="text/javascript" id="runscript_month">
	///////////////////////////////////START charts////////////////////////////////////////////////
$(function () {
	
var chart;
var estado = true;
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

$(document).ready(function() {

// if(pipoco == 1){	
 // eval(document.getElementById("Sand_Signika").innerHTML);
 // Highcharts.setOptions(chart_Sand_Signika);
// }else 
// if(pipoco == 2){
 // eval(document.getElementById("Grid").innerHTML);
 // Highcharts.setOptions(chart_Grid);	
// }else
// if(pipoco == 3){
 // eval(document.getElementById("Dark_Unika").innerHTML);
 // Highcharts.setOptions(chart_Dark_Unika);	
// }else 
 // if(pipoco == 4){
 // eval(document.getElementById("Dark_Blue").innerHTML);
 // Highcharts.setOptions(chart_Dark_Blue);	
// }

// Highcharts.setOptions({
// colors: ['red','#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4']
// });

Highcharts.createElement('link', {
   href: '//fonts.googleapis.com/css?family='+fonte+'',
   rel: 'stylesheet',
   type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);	

var acc = new Highcharts.Chart({
	chart: {
				renderTo: 'container',
				alignTicks:false,
				//backgroundColor:'transparent',
				zoomType: 'xy',
				style: {
					fontFamily: "'"+fonte+"', sans-serif"
					//fontSize: "60px"
				},
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
						if(e.shiftKey == 1){	
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
	
	exporting: {
			enabled: true,
			chartOptions: {
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
				// type: 'datetime',
				// dateTimeLabelFormats: {
				// day: '%d %b'    //ex- 01 Jan 2016
			type: "category",	
			tickInterval: 1,	
			tickmarkPlacement: 'on',
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
		// }
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
	headerFormat: '<span>Month {point.key}</span><br/>',	
	pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',		
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
		area: {
        softThreshold: true
        },
		column: {
        softThreshold: true
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
		name: 'Marker',	
		},{
		type: '<?php
						if($t1 == 1){
						echo 'spline';	
						}else if($t1 == 2){
						echo 'area';	
						}else if($t1 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f1 ?>',
		
        data: [<?php
        if($q1 != ""){    
		for ($i = 0; $i < $kpi_query1->num_rows(); $i++) {
		$row = $kpi_query1->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['month']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
		showInLegend: <?php echo $v1 ?>,
		
		yAxis: <?php echo $c1 ?>
    },{
		type: '<?php
						if($t2 == 1){
						echo 'spline';	
						}else if($t2 == 2){
						echo 'area';	
						}else if($t2 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f2 ?>',
		
        data: [<?php
        if($q2 != ""){    
		for ($i = 0; $i < $kpi_query2->num_rows(); $i++) {
		$row = $kpi_query2->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['month']."', ".$row['node']."], ";	
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
						echo 'area';	
						}else if($t3 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f3 ?>',
		
        data: [<?php
        if($q3 != ""){    
		for ($i = 0; $i < $kpi_query3->num_rows(); $i++) {
		$row = $kpi_query3->row_array($i);
		echo "['".$row['month']."', ".$row['node']."], ";	
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
						echo 'area';	
						}else if($t4 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f4 ?>',
		
        data: [<?php
        if($q4 != ""){    
		for ($i = 0; $i < $kpi_query4->num_rows(); $i++) {
		$row = $kpi_query4->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['month']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
		showInLegend: <?php echo $v4 ?>,
		
		yAxis: <?php echo $c4 ?>
    },{
		type: '<?php
						if($t5 == 1){
						echo 'spline';	
						}else if($t5 == 2){
						echo 'area';	
						}else if($t5 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f5 ?>',
		
        data: [<?php
        if($q5 != ""){    
		for ($i = 0; $i < $kpi_query5->num_rows(); $i++) {
		$row = $kpi_query5->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['month']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
		showInLegend: <?php echo $v5 ?>,
		
		yAxis: <?php echo $c5 ?>
    },{
		type: '<?php
						if($t6 == 1){
						echo 'spline';	
						}else if($t6 == 2){
						echo 'area';	
						}else if($t6 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f6 ?>',
		
        data: [<?php
        if($q6 != ""){    
		for ($i = 0; $i < $kpi_query6->num_rows(); $i++) {
		$row = $kpi_query6->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['month']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
		showInLegend: <?php echo $v6 ?>,
		
		yAxis: <?php echo $c6 ?>
    },{
		type: '<?php
						if($t7 == 1){
						echo 'spline';	
						}else if($t7 == 2){
						echo 'area';	
						}else if($t7 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f7 ?>',
		
        data: [<?php
        if($q7 != ""){    
		for ($i = 0; $i < $kpi_query7->num_rows(); $i++) {
		$row = $kpi_query7->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['month']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
		showInLegend: <?php echo $v7 ?>,
		
		yAxis: <?php echo $c7 ?>
    },{
		type: '<?php
						if($t8 == 1){
						echo 'spline';	
						}else if($t8 == 2){
						echo 'area';	
						}else if($t8 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f8 ?>',
		
        data: [<?php
        if($q8 != ""){    
		for ($i = 0; $i < $kpi_query8->num_rows(); $i++) {
		$row = $kpi_query8->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['month']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
		showInLegend: <?php echo $v8 ?>,
		
		yAxis: <?php echo $c8 ?>
    },{
		type: '<?php
						if($t9 == 1){
						echo 'spline';	
						}else if($t9 == 2){
						echo 'area';	
						}else if($t9 == 3){
						echo 'column';	
						}
						?>',
						
		name: '<?php echo $f9 ?>',
		
        data: [<?php
        if($q9 != ""){    
		for ($i = 0; $i < $kpi_query9->num_rows(); $i++) {
		$row = $kpi_query9->row_array($i);
		if($row['node'] == ""){	
		$row['node'] = "null";
		}		
		echo "['".$row['month']."', ".$row['node']."], ";	
		}
		}		
        ?>],
		
		showInLegend: <?php echo $v9 ?>,
		
		yAxis: <?php echo $c9 ?>
    }
	]
});

//////////////////////////////////////// SETA O VALOR DEFAULT DAS INPUT TEXT DAS ESCALAS ///////////////////////////

var acc = $("#container").highcharts();
$('#scale_max').val(acc.yAxis[0].getExtremes().dataMax);
$('#scale_min').val(acc.yAxis[0].getExtremes().dataMin);

});

//////////////////////////////////////////////////////// CORES DAS LINHAS ////////////////////////////////////////

$('#colorSelector1').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector1').css('backgroundColor', '#' + hex);
		color[1] = hex;
		acc.series[1].update({color: "#"+color[1]+""});
	}
});

$('#colorSelector2').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector2').css('backgroundColor', '#' + hex);
		color[2] = hex;
		acc.series[2].update({color: "#"+color[2]+""});
	}
});

$('#colorSelector3').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector3').css('backgroundColor', '#' + hex);
		color[3] = hex;
		acc.series[3].update({color: "#"+color[3]+""});
	}
});

$('#colorSelector4').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector4').css('backgroundColor', '#' + hex);
		color[4] = hex;
		acc.series[4].update({color: "#"+color[4]+""});
	}
});

$('#colorSelector5').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector5').css('backgroundColor', '#' + hex);
		color[5] = hex;
		acc.series[5].update({color: "#"+color[5]+""});
	}
});

$('#colorSelector6').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector6').css('backgroundColor', '#' + hex);
		color[6] = hex;
		acc.series[6].update({color: "#"+color[6]+""});
	}
});

$('#colorSelector7').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector7').css('backgroundColor', '#' + hex);
		color[7] = hex;
		acc.series[7].update({color: "#"+color[7]+""});
	}
});

$('#colorSelector8').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector8').css('backgroundColor', '#' + hex);
		color[8] = hex;
		acc.series[8].update({color: "#"+color[1]+""});
	}
});

$('#colorSelector9').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector9').css('backgroundColor', '#' + hex);
		color[9] = hex;
		acc.series[9].update({color: "#"+color[1]+""});
	}
});

//////////////////////////////////////////////////////////////// TEMAS /////////////////////////////////////////////

$('#theme').change(function(){
var acc = $("#container").highcharts();		
var x = $(this).val();	
if(x == "SandSignika"){
acc.destroy();	
eval(document.getElementById("Sand_Signika").innerHTML);
Highcharts.setOptions(chart_Sand_Signika);
eval(document.getElementById("runscript_month").innerHTML);	 
}else
if(x == "DarkUnika"){
acc.destroy();	
eval(document.getElementById("Dark_Unika").innerHTML);
Highcharts.setOptions(chart_Dark_Unika);
eval(document.getElementById("runscript_month").innerHTML);	 
}else
if(x == "DarkBlue"){
acc.destroy();	
eval(document.getElementById("Dark_Blue").innerHTML);
Highcharts.setOptions(chart_Dark_Blue);
eval(document.getElementById("runscript_month").innerHTML);	 
}else
if(x == "Skies"){
acc.destroy();	
eval(document.getElementById("Nuvem").innerHTML);
Highcharts.setOptions(chart_Skies);
eval(document.getElementById("runscript_month").innerHTML);	 
}else
if(x == "DarkGreen"){
acc.destroy();	
eval(document.getElementById("Dark_Green").innerHTML);
Highcharts.setOptions(chart_Dark_Green);
eval(document.getElementById("runscript_month").innerHTML);	 
}else
if(x == "FlatDark"){
acc.destroy();	
eval(document.getElementById("Flat_Dark").innerHTML);
Highcharts.setOptions(chart_Flat_Dark);
eval(document.getElementById("runscript_month").innerHTML);	 
}else
if(x == "Null"){
acc.destroy();	
eval(document.getElementById("Empty").innerHTML);
Highcharts.setOptions(chart_null);
eval(document.getElementById("runscript_month").innerHTML);	 
}else
if(x == "val_ffx"){
acc.destroy();	
eval(document.getElementById("ffx").innerHTML);
Highcharts.setOptions(chart_ffx);
eval(document.getElementById("runscript_month").innerHTML);	 
}else
if(x == "val_538"){
acc.destroy();	
eval(document.getElementById("538").innerHTML);
Highcharts.setOptions(chart_538);
eval(document.getElementById("runscript_month").innerHTML);	 
}	
});

//////////////////////////////////////////////////////////////// TÍTULO ///////////////////////////////////////////

$('#txt_title').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
var title = document.getElementById('txt_title').value;	
if(title != ""){
acc.setTitle({text: ""+title+""});
}else{
acc.setTitle({text: "NPSmart"});
}	
});

//////////////////////////////////////////////////////////////// LEGENDAS //////////////////////////////////////////

$('#txt_legend1').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend1").val() != ""){
legend[1] = $("#txt_legend1").val();	
acc.legend.allItems[1].update({name:""+legend[1]+""});
}else{
acc.legend.allItems[1].update({name:""+legend_old1+""});
}	
});

$('#txt_legend2').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend2").val() != ""){
legend[2] = $("#txt_legend2").val();	
acc.legend.allItems[2].update({name:""+legend[2]+""});
}else{
acc.legend.allItems[2].update({name:""+legend_old2+""});
}	
});

$('#txt_legend3').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend3").val() != ""){
legend[3] = $("#txt_legend3").val();	
acc.legend.allItems[3].update({name:""+legend[3]+""});
}else{
acc.legend.allItems[3].update({name:""+legend_old3+""});
}	
});

$('#txt_legend4').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend4").val() != ""){
legend[4] = $("#txt_legend4").val();	
acc.legend.allItems[4].update({name:""+legend[4]+""});
}else{
acc.legend.allItems[4].update({name:""+legend_old4+""});
}	
});

$('#txt_legend5').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend5").val() != ""){
legend[5] = $("#txt_legend5").val();	
acc.legend.allItems[5].update({name:""+legend[5]+""});
}else{
acc.legend.allItems[5].update({name:""+legend_old5+""});
}	
});

$('#txt_legend6').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend6").val() != ""){
legend[6] = $("#txt_legend6").val();	
acc.legend.allItems[6].update({name:""+legend[6]+""});
}else{
acc.legend.allItems[6].update({name:""+legend_old6+""});
}	
});

$('#txt_legend7').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend7").val() != ""){
legend[7] = $("#txt_legend7").val();	
acc.legend.allItems[7].update({name:""+legend[7]+""});
}else{
acc.legend.allItems[7].update({name:""+legend_old7+""});
}	
});

$('#txt_legend8').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend8").val() != ""){
legend[8] = $("#txt_legend8").val();	
acc.legend.allItems[8].update({name:""+legend[8]+""});
}else{
acc.legend.allItems[8].update({name:""+legend_old8+""});
}	
});

$('#txt_legend9').on('keyup mouseup', function(){
var acc = $("#container").highcharts();	
if($("#txt_legend9").val() != ""){
legend[9] = $("#txt_legend9").val();	
acc.legend.allItems[9].update({name:""+legend[9]+""});
}else{
acc.legend.allItems[9].update({name:""+legend_old9+""});
}	
});

//////////////////////////////////////////////////////////////// LINE STYLE ////////////////////////////////////////

$('#linestyle1').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle1").val() != ""){
typeline[1] = $("#linestyle1").val();
acc.series[1].update({dashStyle: ""+typeline[1]+""});
}else{
acc.series[1].update({dashStyle: "Solid"});	
}
});

$('#linestyle2').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle2").val() != ""){
typeline[2] = $("#linestyle2").val();
acc.series[2].update({dashStyle: ""+typeline[2]+""});
}else{
acc.series[2].update({dashStyle: "Solid"});	
}
});

$('#linestyle3').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle3").val() != ""){
typeline[3] = $("#linestyle3").val();
acc.series[3].update({dashStyle: ""+typeline[3]+""});
}else{
acc.series[3].update({dashStyle: "Solid"});	
}
});

$('#linestyle4').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle4").val() != ""){
typeline[4] = $("#linestyle4").val();
acc.series[4].update({dashStyle: ""+typeline[4]+""});
}else{
acc.series[4].update({dashStyle: "Solid"});	
}
});

$('#linestyle5').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle5").val() != ""){
typeline[5] = $("#linestyle5").val();
acc.series[5].update({dashStyle: ""+typeline[5]+""});
}else{
acc.series[5].update({dashStyle: "Solid"});	
}
});

$('#linestyle6').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle6").val() != ""){
typeline[6] = $("#linestyle6").val();
acc.series[6].update({dashStyle: ""+typeline[6]+""});
}else{
acc.series[6].update({dashStyle: "Solid"});	
}
});

$('#linestyle7').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle7").val() != ""){
typeline[7] = $("#linestyle7").val();
acc.series[7].update({dashStyle: ""+typeline[7]+""});
}else{
acc.series[7].update({dashStyle: "Solid"});	
}
});

$('#linestyle8').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle8").val() != ""){
typeline[8] = $("#linestyle8").val();
acc.series[8].update({dashStyle: ""+typeline[8]+""});
}else{
acc.series[8].update({dashStyle: "Solid"});	
}
});

$('#linestyle9').change(function(){
var acc = $("#container").highcharts();
if($("#linestyle9").val() != ""){
typeline[9] = $("#linestyle9").val();
acc.series[9].update({dashStyle: ""+typeline[9]+""});
}else{
acc.series[9].update({dashStyle: "Solid"});	
}
});

//////////////////////////////////////////////////////////////// LINE WIDTH ////////////////////////////////////////

$('#linewidth1').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth1").val() != 0){
var width_line = $("#linewidth1").val();
var int_width_line	= parseInt(width_line);
acc.series[1].update({lineWidth: int_width_line});
}else{
acc.series[1].update({lineWidth: 2});	
}	
});

$('#linewidth2').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth2").val() != 0){
var width_line = $("#linewidth2").val();
var int_width_line	= parseInt(width_line);
acc.series[2].update({lineWidth: int_width_line});
}else{
acc.series[2].update({lineWidth: 2});	
}
});

$('#linewidth3').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth3").val() != 0){
var width_line = $("#linewidth3").val();
var int_width_line	= parseInt(width_line);
acc.series[3].update({lineWidth: int_width_line});
}else{
acc.series[3].update({lineWidth: 2});	
}
});

$('#linewidth4').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth4").val() != 0){
var width_line = $("#linewidth4").val();
var int_width_line	= parseInt(width_line);
acc.series[4].update({lineWidth: int_width_line});
}else{
acc.series[4].update({lineWidth: 2});	
}
});

$('#linewidth5').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth5").val() != 0){
var width_line = $("#linewidth5").val();
var int_width_line	= parseInt(width_line);
acc.series[5].update({lineWidth: int_width_line});
}else{
acc.series[5].update({lineWidth: 2});	
}
});

$('#linewidth6').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth6").val() != 0){
var width_line = $("#linewidth6").val();
var int_width_line	= parseInt(width_line);
acc.series[6].update({lineWidth: int_width_line});
}else{
acc.series[6].update({lineWidth: 2});	
}
});

$('#linewidth7').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth7").val() != 0){
var width_line = $("#linewidth7").val();
var int_width_line	= parseInt(width_line);
acc.series[7].update({lineWidth: int_width_line});
}else{
acc.series[7].update({lineWidth: 2});	
}
});

$('#linewidth8').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth8").val() != 0){
var width_line = $("#linewidth8").val();
var int_width_line	= parseInt(width_line);
acc.series[8].update({lineWidth: int_width_line});
}else{
acc.series[8].update({lineWidth: 2});	
}
});

$('#linewidth9').change(function(){
var acc = $("#container").highcharts();	
if($("#linewidth9").val() != 0){
var width_line = $("#linewidth9").val();
var int_width_line	= parseInt(width_line);
acc.series[9].update({lineWidth: int_width_line});
}else{
acc.series[9].update({lineWidth: 2});	
}
});

//////////////////////////////////////////////////////////////// SCALE /////////////////////////////////////////////

$('#scale_max').on('keyup mouseup', function(){
	
var x = $('#scale_max').val();
var acc = $("#container").highcharts();
if(x != ""){	
acc.yAxis[0].update({max: ""+x+""});
}else{
$('#scale_max').val(acc.yAxis[0].getExtremes().dataMax);	
acc.yAxis[0].update({max: null});
}	
});

$('#scale_min').on('keyup mouseup', function(){
	
var x = $('#scale_min').val();
var acc = $("#container").highcharts();
if(x != ""){	
acc.yAxis[0].update({min: ""+x+""});
}else{
$('#scale_min').val(acc.yAxis[0].getExtremes().dataMin);	
acc.yAxis[0].update({min: null});
}	
});

//////////////////////////////////////////////////////////////// FONT STYLE ///////////////////////////////////////

$('#myFont').fontselect().change(function(){
        
// replace + signs with spaces for css
var font = $(this).val().replace(/\+/g, ' ');
var acc = $("#container").highcharts();
// split font into family and weight
font = font.split(':');

// set family on paragraphs 
//$('p').css('font-family', font[0]);
 //console.log(font[0]);
fonte = font[0];
acc.update({
chart: {
style: {
fontFamily: "'"+fonte+"', sans-serif"
}
}
});
});

///////////////////////////////////////////////////////////////// FONT SIZE ////////////////////////////////////////

$('#myFontSize_Axis').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc = $("#container").highcharts();

console.log(SizeFont);
// acc.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc.update({
xAxis:{
labels: {
style:{
fontSize: ""+SizeFont+"px"	
}		
}		
}	
});

acc.update({
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

$('#myFontSize_Title').on('keyup mouseup', function(){

var SizeFont = $(this).val();
var acc = $("#container").highcharts();

console.log(SizeFont);
// acc.xAxis[0].options.labels.style.fontSize = "'"+SizeFont+"px'";
acc.update({
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

$('#colorSelector_Axis').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector_Axis').css('backgroundColor', '#' + hex);
		acc.update({
		xAxis:{
		labels: {
		style:{
		color: '#' + hex	
		}		
		}		
		}	
		});

		acc.update({
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

$('#colorSelector_Title').ColorPicker({
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
		var acc = $("#container").highcharts();
		$('#colorSelector_Title').css('backgroundColor', '#' + hex);
		acc.update({
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

$( "#btn_theme" ).click(function() {

if(vis_theme == true){
document.getElementById("div_theme").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
vis_theme = false;	
}else if(vis_theme == false){	
document.getElementById("div_theme").style.display = "block";
document.getElementById("div_text").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_theme = true;
}

});

$( "#btn_text" ).click(function() {

if(vis_text == true){
document.getElementById("div_text").style.display = "none";
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_text = false;	
}else if(vis_text == false){	
document.getElementById("div_text").style.display = "block";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-up");
vis_text = true;
}

});	

$( "#btn_colors" ).click(function() {

if(vis_colors == true){
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
vis_colors = false;	
}else if(vis_colors == false){	
document.getElementById("div_text").style.display = "none";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "none";
document.getElementById("div_colors").style.display = "block";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_colors = true;
}

});	

$( "#btn_line" ).click(function() {

if(vis_line == true){
document.getElementById("div_line").style.display = "none";
$( "#Seta_Line" ).attr( "class", "fa fa-caret-down");
vis_line = false;	
}else if(vis_line == false){	
document.getElementById("div_text").style.display = "none";
document.getElementById("div_theme").style.display = "none";
document.getElementById("div_line").style.display = "block";
document.getElementById("div_colors").style.display = "none";
$( "#Seta_Theme" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Line" ).attr( "class", "fa fa-caret-up");
$( "#Seta_Colors" ).attr( "class", "fa fa-caret-down");
$( "#Seta_Text" ).attr( "class", "fa fa-caret-down");
vis_line = true;
}

});

$( "#btn_default" ).click(function() {
var acc = $("#container").highcharts();	
acc.destroy();
eval(document.getElementById("runscript_month").innerHTML);
});		
	
});
</script>

</html>

