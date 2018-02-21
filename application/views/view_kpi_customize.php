<!DOCTYPE html>
<html>
<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112474813-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112474813-1');
</script>

<!------------------------------------------------- CSS DO QUICK REPORT --------------------------------------------->

<link rel="stylesheet" media="screen" type="text/css" href="/npsmart/QuickReport/style_quickreport.css"/>

<!--------------------------------------------------------- CALENDARIO -------------------------------------->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quick Report</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
	<link rel="stylesheet" media="screen" type="text/css" href="/npsmart/ColorPicker/css/colorpicker.css"/>
	<script type="text/javascript" src="/npsmart/ColorPicker/js/colorpicker.js"></script>
	<script type="text/javascript" src="/npsmart/ColorPicker/js/eye.js"></script>
    <script type="text/javascript" src="/npsmart/ColorPicker/js/utils.js"></script>
    <!--<script type="text/javascript" src="/npsmart/ColorPicker/js/layout.js"></script>-->
	<script type="text/javascript" src="/npsmart/FontSelector/jquery.fontselect.js"></script>
	<!--<script type="text/javascript" src="/npsmart/FontSelector/jquery.fontselect.min.js"></script>-->
	<link rel="stylesheet" media="screen" type="text/css" href="/npsmart/FontSelector/fontselect-alternate.css"/>
	<!--<link rel="stylesheet" media="screen" type="text/css" href="/npsmart/FontSelector/fontselect-default.css"/>-->
	<script type="text/javascript" src="/npsmart/BlinkTitle/PageTitleNotification.js"></script>
	<!--<script src="http://blacklabel.github.io/annotations/js/annotations.js"></script>-->
  <script>
  $( function() {
    $( "#datepicker_inicial" ).datepicker();
	$( "#datepicker_final" ).datepicker();
  } );
  </script>
<!------------------------------------------------------- FIM DO CALENDÁRIO --------------------------------->
<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans);

.chart_number{
display:inline-block;
margin-right: 15px;
width: 100px;
border-collapse: collapse;
font-family: 'Open Sans', 'sans-serif';
border-radius: 5px;
font-size: 14px;
text-decoration: none;
color: #fff;
}

.templates{
width: 100px; 
font-size: 17px; 
color: red; 
text-align: center;
border: 1px solid black;
border-collapse: collapse;
}

.txt_chart_number{
border: 1px solid black;
border-collapse: collapse;
background-color: #e74c3c;
}

.txt_chart_number span{
margin-left: 2px;
font-weight: bold;
}

#btn_add2, #btn_add3,#btn_add4,#btn_add5,#btn_add6,#btn_add7,#btn_add8,#btn_add9{
vertical-align: top;	
}	

</style>
</head>
<body>


<div id="Resumo2">

<div class="Painel" style = "border-bottom: 2px solid black"><span style="position:absolute;display: inline-block;font-size: 25px;margin-left: 10px; margin-top: 5px; color: white"><b>Change All</b></span><label class="switch"><input id="slider_menu" type="checkbox"/><span class="slider round"></span></label><div style="font-size: 25px; text-align:center; color: white"><b>MENU</b><div style="float:right; display:inline-block; margin-right:10px"><button id="btn_add1" onclick="add_line()" class="w3-btn w3-xlarge w3-text-blue"><i class="fa fa-plus-square"></i></button></div></p></div></div>
<div class="Lines_Query" id= "Query1" style = "border-bottom: 2px solid black; width: 100%; display:inline-block"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query1" checked="checked"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu1" style="display:inline-block"><span id="Tecnologia_Texto_Teste1"></span><i id="Tecnologia_Seta_1" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste1"></span><i id="Elemento_Seta_1" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste1"></span><i id="KPI_Seta_1" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste1"></span><i id="Periodo_Seta_1" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste1"></span><span id="Date_Final_Texto_Teste1"></span><span id="Hora_Inicial_Texto_Teste1"></span><span id="Hora_Final_Texto_Teste1"></span><button id="chart_type1" class="w3-btn w3-xlarge"><i class="fa fa-line-chart w3-text-black w3-xxlarge"></i></button><button id="chart_position1" class="w3-btn w3-xlarge" style="background-color: transparent"><i class="fa fa-long-arrow-right w3-text-black w3-xxlarge"></i></button><button id="btn_confirm1" onclick="mostrar_charts1()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete1" onclick="delete_menu1()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><div class="chart_number"><div class="txt_chart_number"><span>Chart Number</span></div><div><input class="templates" id="template1" type="number" value="1" min="1" max="9"/></div></div><button id="btn_add2" onclick="remove_line1()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div class="Lines_Query" id= "Query2" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query2"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu2" style="display:none"><span id="Tecnologia_Texto_Teste2"></span><i id="Tecnologia_Seta_2" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste2"></span><i id="Elemento_Seta_2" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste2"></span><i id="KPI_Seta_2" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste2"></span><i id="Periodo_Seta_2" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste2"></span><span id="Date_Final_Texto_Teste2"></span><span id="Hora_Inicial_Texto_Teste2"></span><span id="Hora_Final_Texto_Teste2"></span><button id="chart_type2" class="w3-btn w3-xlarge"><i class="fa fa-line-chart w3-text-black w3-xxlarge"></i></button><button id="chart_position2" class="w3-btn w3-xlarge"><i class="fa fa-long-arrow-right w3-text-black w3-xxlarge"></i></button><button id="btn_confirm2" onclick="mostrar_charts2()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete2" onclick="delete_menu2()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><div class="chart_number"><div class="txt_chart_number"><span>Chart Number</span></div><div><input class="templates" id="template2" type="number" value="1" min="1" max="9"/></div></div><button id="btn_add2" onclick="remove_line2()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div class="Lines_Query" id= "Query3" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query3"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu3" style="display:none"><span id="Tecnologia_Texto_Teste3"></span><i id="Tecnologia_Seta_3" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste3"></span><i id="Elemento_Seta_3" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste3"></span><i id="KPI_Seta_3" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste3"></span><i id="Periodo_Seta_3" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste3"></span><span id="Date_Final_Texto_Teste3"></span><span id="Hora_Inicial_Texto_Teste3"></span><span id="Hora_Final_Texto_Teste3"></span><button id="chart_type3" class="w3-btn w3-xlarge"><i class="fa fa-line-chart w3-text-black w3-xxlarge"></i></button><button id="chart_position3" class="w3-btn w3-xlarge"><i class="fa fa-long-arrow-right w3-text-black w3-xxlarge"></i></button><button id="btn_confirm3" onclick="mostrar_charts3()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete3" onclick="delete_menu3()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><div class="chart_number"><div class="txt_chart_number"><span>Chart Number</span></div><div><input class="templates" id="template3" type="number" value="1" min="1" max="9"/></div></div><button id="btn_add3" onclick="remove_line3()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div class="Lines_Query" id= "Query4" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query4"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu4" style="display:none"><span id="Tecnologia_Texto_Teste4"></span><i id="Tecnologia_Seta_4" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste4"></span><i id="Elemento_Seta_4" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste4"></span><i id="KPI_Seta_4" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste4"></span><i id="Periodo_Seta_4" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste4"></span><span id="Date_Final_Texto_Teste4"></span><span id="Hora_Inicial_Texto_Teste4"></span><span id="Hora_Final_Texto_Teste4"></span><button id="chart_type4" class="w3-btn w3-xlarge"><i class="fa fa-line-chart w3-text-black w3-xxlarge"></i></button><button id="chart_position4" class="w3-btn w3-xlarge"><i class="fa fa-long-arrow-right w3-text-black w3-xxlarge"></i></button><button id="btn_confirm4" onclick="mostrar_charts4()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete4" onclick="delete_menu4()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><div class="chart_number"><div class="txt_chart_number"><span>Chart Number</span></div><div><input class="templates" id="template4" type="number" value="1" min="1" max="9"/></div></div><button id="btn_add4" onclick="remove_line4()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div class="Lines_Query" id= "Query5" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query5"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu5" style="display:none"><span id="Tecnologia_Texto_Teste5"></span><i id="Tecnologia_Seta_5" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste5"></span><i id="Elemento_Seta_5" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste5"></span><i id="KPI_Seta_5" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste5"></span><i id="Periodo_Seta_5" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste5"></span><span id="Date_Final_Texto_Teste5"></span><span id="Hora_Inicial_Texto_Teste5"></span><span id="Hora_Final_Texto_Teste5"></span><button id="chart_type5" class="w3-btn w3-xlarge"><i class="fa fa-line-chart w3-text-black w3-xxlarge"></i></button><button id="chart_position5" class="w3-btn w3-xlarge"><i class="fa fa-long-arrow-right w3-text-black w3-xxlarge"></i></button><button id="btn_confirm5" onclick="mostrar_charts5()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete5" onclick="delete_menu5()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><div class="chart_number"><div class="txt_chart_number"><span>Chart Number</span></div><div><input class="templates" id="template5" type="number" value="1" min="1" max="9"/></div></div><button id="btn_add5" onclick="remove_line5()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div class="Lines_Query" id= "Query6" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query6"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu6" style="display:none"><span id="Tecnologia_Texto_Teste6"></span><i id="Tecnologia_Seta_6" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste6"></span><i id="Elemento_Seta_6" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste6"></span><i id="KPI_Seta_6" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste6"></span><i id="Periodo_Seta_6" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste6"></span><span id="Date_Final_Texto_Teste6"></span><span id="Hora_Inicial_Texto_Teste6"></span><span id="Hora_Final_Texto_Teste6"></span><button id="chart_type6" class="w3-btn w3-xlarge"><i class="fa fa-line-chart w3-text-black w3-xxlarge"></i></button><button id="chart_position6" class="w3-btn w3-xlarge"><i class="fa fa-long-arrow-right w3-text-black w3-xxlarge"></i></button><button id="btn_confirm6" onclick="mostrar_charts6()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete6" onclick="delete_menu6()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><div class="chart_number"><div class="txt_chart_number"><span>Chart Number</span></div><div><input class="templates" id="template6" type="number" value="1" min="1" max="9"/></div></div><button id="btn_add6" onclick="remove_line6()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div class="Lines_Query" id= "Query7" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query7"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu7" style="display:none"><span id="Tecnologia_Texto_Teste7"></span><i id="Tecnologia_Seta_7" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste7"></span><i id="Elemento_Seta_7" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste7"></span><i id="KPI_Seta_7" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste7"></span><i id="Periodo_Seta_7" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste7"></span><span id="Date_Final_Texto_Teste7"></span><span id="Hora_Inicial_Texto_Teste7"></span><span id="Hora_Final_Texto_Teste7"></span><button id="chart_type7" class="w3-btn w3-xlarge"><i class="fa fa-line-chart w3-text-black w3-xxlarge"></i></button><button id="chart_position7" class="w3-btn w3-xlarge"><i class="fa fa-long-arrow-right w3-text-black w3-xxlarge"></i></button><button id="btn_confirm7" onclick="mostrar_charts7()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete7" onclick="delete_menu7()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><div class="chart_number"><div class="txt_chart_number"><span>Chart Number</span></div><div><input class="templates" id="template7" type="number" value="1" min="1" max="9"/></div></div><button id="btn_add7" onclick="remove_line7()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div class="Lines_Query" id= "Query8" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query8"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu8" style="display:none"><span id="Tecnologia_Texto_Teste8"></span><i id="Tecnologia_Seta_8" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste8"></span><i id="Elemento_Seta_8" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste8"></span><i id="KPI_Seta_8" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste8"></span><i id="Periodo_Seta_8" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste8"></span><span id="Date_Final_Texto_Teste8"></span><span id="Hora_Inicial_Texto_Teste8"></span><span id="Hora_Final_Texto_Teste8"></span><button id="chart_type8" class="w3-btn w3-xlarge"><i class="fa fa-line-chart w3-text-black w3-xxlarge"></i></button><button id="chart_position8" class="w3-btn w3-xlarge"><i class="fa fa-long-arrow-right w3-text-black w3-xxlarge"></i></button><button id="btn_confirm8" onclick="mostrar_charts8()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete8" onclick="delete_menu8()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><div class="chart_number"><div class="txt_chart_number"><span>Chart Number</span></div><div><input class="templates" id="template8" type="number" value="1" min="1" max="9"/></div></div><button id="btn_add8" onclick="remove_line8()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div class="Lines_Query" id= "Query9" style = "width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query9"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu9" style="display:none"><span id="Tecnologia_Texto_Teste9"></span><i id="Tecnologia_Seta_9" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste9"></span><i id="Elemento_Seta_9" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste9"></span><i id="KPI_Seta_9" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste9"></span><i id="Periodo_Seta_9" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste9"></span><span id="Date_Final_Texto_Teste9"></span><span id="Hora_Inicial_Texto_Teste9"></span><span id="Hora_Final_Texto_Teste9"></span><button id="chart_type9" class="w3-btn w3-xlarge"><i class="fa fa-line-chart w3-text-black w3-xxlarge"></i></button><button id="chart_position9" class="w3-btn w3-xlarge"><i class="fa fa-long-arrow-right w3-text-black w3-xxlarge" ></i></button><button id="btn_confirm9" onclick="mostrar_charts9()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete9" onclick="delete_menu9()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><div class="chart_number"><div class="txt_chart_number"><span>Chart Number</span></div><div><input class="templates" id="template9" type="number" value="1" min="1" max="9"/></div></div><button id="btn_add9" onclick="remove_line9()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
</div>

<div id="MENU" style="background-color:white; height:500px; margin:10px 10px 10px 10px">

<div  style="display:inline-block; width:45%; height:500px; position: relative; top:-47.5px; margin-left:10px; margin-top:5px">
<p style="font-size:30px; font-family: 'Rubik', sans-serif; color:white; border: 1px solid black; text-align:center;background-color: #3C6D7A;"><b>PARAMETERS</b></p>

<div id="SubParameters">

<div style="width:97.5%; height:20%; margin: 10px">

<div style="display:block">
<p style="font-size:25px; display:inline-block"><b>Technology</b></p>
<div class="dropdown" style="margin-left: 10px">
  <button class="dropbtn" id ="Technology">Select ...</button>
  <div class="dropdown-content">
	<form>
    <a href="javascript:void(0)" onclick="mostrar_GSM()"> GSM </a>
    <a href="javascript:void(0)" onclick="mostrar_UMTS()"> UMTS </a>
    <a href="javascript:void(0)" onclick="mostrar_LTE()"> LTE </a>
	</form>
  </div>
</div>

</div>

</div>

<div style="width:97.5%; height:20%; margin: 10px">

<div style="display:block">
<p style="font-size:25px; display:inline-block"><b>Period</b></p>
<div class="dropdown" style="display:inline-block; margin-left: 70px">
  <button class="dropbtn" id ="Time">Select ...</button>
  <div class="dropdown-content">
	<form>
	<a href="javascript:void(0)" onclick="mostrar_Hora()"> Hourly </a>
    <a href="javascript:void(0)" onclick="mostrar_Daily()"> Daily </a>
    <a href="javascript:void(0)" onclick="mostrar_Weekly()"> Weekly </a>
    <a href="javascript:void(0)" onclick="mostrar_Monthly()"> Monthly </a>
	</form>
  </div>
</div>
</div>

</div>
<div style="width:97.5%; height:10%; margin: 10px">

<div style="display:block">

<div id="Calendar" style="display:block; margin-top:15px">
<!----------------------------------------------- INSIRA O CALENDARIO AQUI ------------------------------------>
<div>
<p id="Texto_Hora_Inicial" style="font-size:25px; display:inline-block"><b>Inicial Date </b></p> <input type="text" id="datepicker_inicial" style="display:inline-block; margin-bottom:10px; width:150px">
<p id="Texto_Hora_Final" style="font-size:25px; display:inline-block; margin-left: 100px"><b>Final Date </b></p> <input type="text" id="datepicker_final" style="display:inline-block; margin-bottom:10px; width:150px;">
</div>
<!------------------------------------------------------- FIM -------------------------------------------------->
</div>

</div>

</div>

<div style="width:97.5%; height:10%; margin: 10px">

<div id="Div_Hora" style="display:none">
<div style="display:inline-block">
<p style="font-size:25px; display:inline-block"><b>Inicial Hour </b></p>
<select id = "Drop_Hora_Inicial" style="display:inline-block; width: 150px; height:25px">
<?php for($i = 0; $i <= 23; $i++): ?>
  <option  value="<?= $i; ?>"><?= $i % 24 ? $i % 24 : 00 ?>:00</option>
<?php endfor ?>
</select>
</div>
<div style="display:inline-block; margin-left:95px">
<p style="font-size:25px; display:inline-block"><b>Final Hour </b></p>
<select id = "Drop_Hora_Final" style="display:inline-block; width: 150px; height:25px">
<?php for($i = 23; $i >= 0; $i--): ?> 
  <option  value="<?= $i; ?>"><?= $i % 24 ? $i % 24 : 00 ?>:00</option>
<?php endfor ?>
</select>
</div>

</div>

</div>

<div style="width:97.5%; height:20% margin: 10px">

<div style="text-align:center">

<div style="display:inline-block; margin-top: 10px">
<p><button style="border-radius:30px" class="w3-btn w3-orange w3-xlarge" onclick="showUser()">Create<i class="w3-margin-left fa fa-line-chart"></i></button></p>
</div>

</div>

</div>

</div>
</div>

<div id="Div_Elementos" style="display:inline-block; width:25%; margin-left:10px; margin-top:5px">
<p style="font-size:30px; font-family: 'Rubik', sans-serif; color:white; border: 1px solid black; text-align:center;background-color: #3C6D7A;"><b>ELEMENTS</b></p>

<!--<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Elements" title="Type in a name" style="width:100%">-->

<div id="Div_Elementos_UMTS" style="display:none">
<input type="text" id="myInput_UMTS" onkeyup="myFunction_UMTS()" placeholder="Search for UMTS Elements" title="Type in a UMTS Element" style="width:100%">
<ul id="myUL_UMTS">
<?php
foreach ($kpi_customize_UMTS_Elementoos_City as $row){
echo '<li onclick="printclick_elementos_UMTS_City(this)" value="'.$row->uf.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos" value="'.$row->node.'"/><span style="margin-left:10px">'.$row->node.'</span> - <span>'.$row->uf.'</span></a></li>';
}
foreach ($kpi_customize_UMTS_Elementoos_Cluster as $row){
echo '<li onclick="printclick_elementos_UMTS_Cluster(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
foreach ($kpi_customize_UMTS_Elementoos_CustomCluster as $row){
echo '<li onclick="printclick_elementos_UMTS_CustomCluster(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
foreach ($kpi_customize_UMTS_Elementoos_NodeB as $row){	
echo '<li onclick="printclick_elementos_UMTS_NodeB(this)" id="'.$row->node.'"><a href="javascript:void(0)" ><input id="'.$row->node.'" class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
foreach ($kpi_customize_UMTS_Elementoos_Reg as $row){
echo '<li onclick="printclick_elementos_UMTS_Reg(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
foreach ($kpi_customize_UMTS_Elementoos_RNC as $row){
echo '<li onclick="printclick_elementos_UMTS_Rnc(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
foreach ($kpi_customize_UMTS_Elementoos_UF as $row){
echo '<li onclick="printclick_elementos_UMTS_UF(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
?>
</ul>
</div>

<div id="Div_Elementos_GSM" style="display:none">
<input type="text" id="myInput_GSM" onkeyup="myFunction_GSM()" placeholder="Search for GSM Elements" title="Type in a GSM Element" style="width:100%">
<ul id='myUL_GSM'>
<?php
foreach ($kpi_customize_GSM_Elementoos_BSC as $row){
echo '<li onclick="printclick_elementos_GSM_BSC(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
foreach ($kpi_customize_GSM_Elementoos_BTS as $row){
echo '<li onclick="printclick_elementos_GSM_BTS(this)" id="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
foreach ($kpi_customize_GSM_Elementoos_City as $row){
echo '<li onclick="printclick_elementos_GSM_City(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span> - <span>'.$row->uf.'</span></a></li>';
}
foreach ($kpi_customize_GSM_Elementoos_Reg as $row){
echo '<li onclick="printclick_elementos_GSM_Reg(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
foreach ($kpi_customize_GSM_Elementoos_UF as $row){
echo '<li onclick="printclick_elementos_GSM_UF(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
?>
</ul>
</div>

<div id="Div_Elementos_LTE" style="display:block">
<input type="text" id="myInput_LTE" onkeyup="myFunction_LTE()" placeholder="Search for LTE Elements" title="Type in a LTE Element" style="width:100%">
<ul id="myUL_LTE">
<?php
foreach ($kpi_customize_LTE_Elementoos_City as $row){
echo '<li onclick="printclick_elementos_lte_City(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span> - <span>'.$row->uf.'</span></a></li>';
}
foreach ($kpi_customize_LTE_Elementoos_Cluster as $row){
echo '<li onclick="printclick_elementos_lte_Cluster(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
foreach ($kpi_customize_LTE_Elementoos_eNodeB as $row){
echo '<li onclick="printclick_elementos_lte_eNodeB(this)" id="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
foreach ($kpi_customize_LTE_Elementoos_Reg as $row){
echo '<li onclick="printclick_elementos_lte_Reg(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
foreach ($kpi_customize_LTE_Elementoos_UF as $row){
echo '<li onclick="printclick_elementos_lte_UF(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}


?>
</ul>
</div>

</div>

<div id="Div_KPI" style="display:inline-block; width:25%; margin-left:10px">
<p style="font-size:30px; font-family: 'Rubik', sans-serif; color:white; border: 1px solid black; text-align:center;background-color: #3C6D7A;"><b>KPIs / Counters / NQIs</b></p>

<!--<input type="search" id="myInput_KPI" onkeyup="myFunction_KPI()" placeholder="Search for KPI's" title="Type in a name" style="width:100%" ng-model="querytext" ng-minlength="2">-->

<div id="Div_LTE" style="display:block">
<input type="search" id="myInput_KPI_LTE" onkeyup="myFunction_KPI_LTE()" placeholder="Search for LTE KPI's" title="Type in a LTE KPI " style="width:100%" ng-model="querytext" ng-minlength="2"/>
<ul id="myUL_KPI_LTE">
<li id="show_KPI_Lte"><a href="javascript:void(0)" ><input style="display:none" class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px"><b> KPIs </b></span><span style="float:right; margin-top:-12px"><button class="w3-btn w3-xlarge w3-text-black"><i id="Seta_KPI_Lte" class="fa fa-caret-down"></i></button></span></a></li>
<?php
foreach ($kpi_customize_db_lte as $row){
echo '<li onclick="printclick_kpi(this)" class="KPI_Lte" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node. '</span></a></li>';
}
?>
<li id="show_Counter_Lte"><a href="javascript:void(0)" ><input style="display:none" class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px"><b> Counters </b></span><span style="float:right; margin-top:-12px"><button class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Counter_Lte" class="fa fa-caret-down"></i></button></span></a></li>
<?php
foreach ($counter_customize_db_lte as $row){
echo '<li onclick="printclick_counter_LTE(this)" class="Counter_Lte" id="'.$row->counter_aggregation.'" value="'.$row->functionsubset_id.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node. '</span><span style="display:none">'.$row->counter_description.'</span><span style="float:right"><button class = "btn_info_counter_lte" style = "margin-top: -12px" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-info-circle" style="color:lightblue;font-size:25px"></i></button></span></a></li>';
}
?>
<li id="show_NQI_Lte"><a href="javascript:void(0)" ><input style="display:none" class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px"><b> NQI </b></span><span style="float:right; margin-top:-12px"><button class="w3-btn w3-xlarge w3-text-black"><i id="Seta_NQI_Lte" class="fa fa-caret-down"></i></button></span></a></li>
<?php
foreach ($nqi_kpi_customize_lte as $row){
echo '<li onclick="printclick_NQI(this)" class="NQI_Lte" id="'.$row->node.'" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node. '</span></a></li>';
}
?>
</ul>
</div>

<div id="Div_UMTS" style="display:none">
<input type="search" id="myInput_KPI_UMTS" onkeyup="myFunction_KPI_UMTS()" placeholder="Search for UMTS KPI's" title="Type in a UMTS KPI" style="width:100%" ng-model="querytext" ng-minlength="2">
<ul id="myUL_KPI_UMTS">
<li id="show_KPI_Umts"><a href="javascript:void(0)" ><input style="display:none" class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px"><b> KPIs </b></span><span style="float:right; margin-top:-12px"><button class="w3-btn w3-xlarge w3-text-black"><i id="Seta_KPI_Umts" class="fa fa-caret-down"></i></button></span></a></li>
<?php
foreach ($kpi_customize_db_umts as $row){
echo '<li onclick="printclick_kpi(this)" class="KPI_Umts" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
echo '<li onclick="printclick_erlang(this)" class="KPI_Umts"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">Erlang Equivalent</span></a></li>';
?>
<li id="show_Counter_Umts"><a href="javascript:void(0)" ><input style="display:none" class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px"><b> Counters </b></span><span style="float:right; margin-top:-12px"><button class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Counter_Umts" class="fa fa-caret-down"></i></button></span></a></li>
<?php
foreach ($counter_customize_db_umts as $row){
echo '<li onclick="printclick_counter_UMTS(this)" class="Counter_Umts" id="'.$row->counter_aggregation.'" value="'.$row->functionsubset_id.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node. '</span><span style="display:none">'.$row->counter_description.'</span><span style="float:right"><button class = "btn_info_counter_umts" style = "margin-top: -12px" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-info-circle" style="color:lightblue;font-size:25px"></i></button></span></a></li>';
}
?>
<li id="show_NQI_Umts"><a href="javascript:void(0)" ><input style="display:none" class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px"><b> NQI </b></span><span style="float:right; margin-top:-12px"><button class="w3-btn w3-xlarge w3-text-black"><i id="Seta_NQI_Umts" class="fa fa-caret-down"></i></button></span></a></li>
<?php
foreach ($nqi_kpi_customize_umts as $row){
echo '<li onclick="printclick_NQI(this)" class="NQI_Umts"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node. '</span></a></li>';
}
?>
</ul>
</div>

<div id="Div_GSM" style="display:none">
<input type="search" id="myInput_KPI_GSM" onkeyup="myFunction_KPI_GSM()" placeholder="Search for GSM KPI's" title="Type in a GSM KPI" style="width:100%" ng-model="querytext" ng-minlength="2">
<ul id="myUL_KPI_GSM">
<li id="show_KPI_Gsm"><a href="javascript:void(0)" ><input style="display:none" class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px"><b> KPIs </b></span><span style="float:right; margin-top:-12px"><button class="w3-btn w3-xlarge w3-text-black"><i id="Seta_KPI_Gsm" class="fa fa-caret-down"></i></button></span></a></li>
<?php
foreach ($kpi_customize_db_gsm as $row){
echo '<li onclick="printclick_kpi(this)" class="KPI_Gsm" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
?>
<li id="show_Counter_Gsm"><a href="javascript:void(0)" ><input style="display:none" class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px"><b> Counters </b></span><span style="float:right; margin-top:-12px"><button class="w3-btn w3-xlarge w3-text-black"><i id="Seta_Counter_Gsm" class="fa fa-caret-down"></i></button></span></a></li>
<?php
foreach ($counter_customize_db_gsm as $row){
echo '<li onclick="printclick_counter_GSM(this)" class="Counter_Gsm" id="'.$row->counter_aggregation.'" value="'.$row->functionsubset_id.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node. '</span><span style="display:none">'.$row->counter_description.'</span><span style="float:right"><button class = "btn_info_counter_gsm" style = "margin-top: -12px" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-info-circle" style="color:lightblue;font-size:25px"></i></button></span></span></a></li>';
}
?>
</ul>
</div>
</div>


</div>

<div id="Resumo" >

<div class="Painel" style = "border-bottom: 2px solid black;"><p style="font-size: 25px; text-align:center; color: white"><b>SQL SERVER MENU</b></p></div>
<div class="Lines_Query" style = "border-bottom: 2px solid black;"><p style= "margin:10px"><b>Query 1: </b><span id="Texto_Teste1" style="color:blue"></span></div>
<div class="Lines_Query" style = "border-bottom: 2px solid black;"><p style= "margin:10px"><b>Query 2: </b><span id="Texto_Teste2" style="color:blue"></span></div>
<div class="Lines_Query" style = "border-bottom: 2px solid black;"><p style= "margin:10px"><b>Query 3: </b><span id="Texto_Teste3" style="color:blue"></span></div>
<div class="Lines_Query" style = "border-bottom: 2px solid black;"><p style= "margin:10px"><b>Query 4: </b><span id="Texto_Teste4" style="color:blue"></span></div>
<div class="Lines_Query" style = "border-bottom: 2px solid black;"><p style= "margin:10px"><b>Query 5: </b><span id="Texto_Teste5" style="color:blue"></span></div>
<div class="Lines_Query" style = "border-bottom: 2px solid black;"><p style= "margin:10px"><b>Query 6: </b><span id="Texto_Teste6" style="color:blue"></span></div>
<div class="Lines_Query" style = "border-bottom: 2px solid black;"><p style= "margin:10px"><b>Query 7: </b><span id="Texto_Teste7" style="color:blue"></span></div>
<div class="Lines_Query" style = "border-bottom: 2px solid black;"><p style= "margin:10px"><b>Query 8: </b><span id="Texto_Teste8" style="color:blue"></span></div>
<p class="Lines_Query" style= "margin:10px"><b>Query 9: </b><span id="Texto_Teste9" style="color:blue"></span></p>
</div>


<div style="display:inline-block">
<div id="Show_Menu_Query" style="display:none; margin-left: 10px"><div id="Mostrar_Menu_Query" style="display:none"><button placeholder="Show/Hide the Menu" class="w3-btn w3-blue" style="font-size:24px"><b><i class="fa fa-angle-double-down w3-text-black"></i></b></button></div><div id="Esconder_Menu_Query" style="display:none"><button placeholder="Show/Hide the Menu" class="w3-btn w3-blue" style="font-size:24px"><b><i class="fa fa-angle-double-up w3-text-black"></i></b></button></div></div>
<div class='buttons' style="display:none" id="Abort_Query" >
  <div class='set red'>
    <a class='btn pri ico' onclick='fn_abort_query()' >Abort Query</a>
  </div>
</div>
</div>
</div>

<div id="loading" style="display:none">
    <p style="text-align:center;"><img src="https://www.pulsar-entertainment.com/assets/images/loading.gif" style="width:150px; height:150px;" alt="Loading" /></p>
</div>

<div id="Querys" style="display:block">

<div id="txtHint1"><b></b></div>	
<div id="txtHint2"><b></b></div>
<div id="txtHint3"><b></b></div>
<div id="txtHint4"><b></b></div>
<div id="txtHint5"><b></b></div>
<div id="txtHint6"><b></b></div>
<div id="txtHint7"><b></b></div>
<div id="txtHint8"><b></b></div>

</div>

<div id="info_counter" class="alert info">
  <span onclick="sumir_info()" id="closebtn">&times;</span>  
  <span id="info_text"><strong></strong></span>
</div>

<!------------------------------------------------------- END AJAX ----------------------------------------------->
<script>
var kpi1 = "";
var kpi2 = "";
var kpi3 = "";
var kpi4 = "";
var kpi5 = "";
var kpi6 = "";
var kpi7 = "";
var kpi8 = "";
var kpi9 = "";
var counter_name = "";
var table_name = "";
var nqi_name = "";
var nodeb = "";
var locell = "";
var rnc = "";
var rncc = ['rnc0','rnc1','rnc2','rnc3','rnc4','rnc5','rnc6','rnc7','rnc8','rnc9'];
var bsc = "";
var enodeb = "";
var cellid = "";
var cellidd = ['cellid0','cellid1','cellid2','cellid3','cellid4','cellid5','cellid6','cellid7','cellid8','cellid9'];
var uf = "";
var counter_aggregation = "";
var type_of_counter = "";
var lcorci = "";
var auth_change = false;
var estado = 0;  //Se estado for 1 eu estou em KPI se for 2 eu estou em Contadores ou caso seja 3 eu estou em NQI.
var contador = "";
var elemento = "";
var elemento1 = "";
var elemento2 = "";
var elemento3 = "";
var elemento4 = "";
var elemento5 = "";
var elemento6 = "";
var elemento7 = "";
var elemento8 = "";
var elemento9 = "";
var tecnologia1 = "";
var tecnologia2 = "";
var tecnologia3 = "";
var tecnologia4 = "";
var tecnologia5 = "";
var tecnologia6 = "";
var tecnologia7 = "";
var tecnologia8 = "";
var tecnologia9 = "";
var periodo = "";
var tempo = "";
var familia = "";
var abortar_query = false;
var data_inicial = ["data_inicial1","data_inicial2","data_inicial3","data_inicial4","data_inicial5","data_inicial6","data_inicial7","data_inicial8","data_inicial9"];
var data_final = "";
var hora_inicial = "";
var ano = ["","","","","","","","","",""];
var ano_final = ["","","","","","","","","",""];
var hora_final = "";
var autorizacao = false;
var autorization1 = true;
var autorization2 = true;
var autorization3 = true;
var autorization4 = true;
var autorization5 = true;
var autorization6 = true;
var autorization7 = true;
var autorization8 = true;
var autorization9 = true;
var hourly_selected = false;
var pointStartHour = "";
var lixeira1 = false;
var lixeira2 = false;
var lixeira3 = false;
var lixeira4 = false;
var lixeira5 = false;
var lixeira6 = false;
var lixeira7 = false;
var lixeira8 = false;
var lixeira9 = false;
var query_aux = "";
var query1 = "";
var query2 = "";
var query3 = "";
var query4 = "";
var query5 = "";
var query6 = "";
var query7 = "";
var query8 = "";
var query9 = "";
var nome1 = "";
var nome2 = "";
var nome3 = "";
var nome4 = "";
var nome5 = "";
var nome6 = "";
var nome7 = "";
var nome8 = "";
var nome9 = "";
var tipo_chart1 = 1;
var tipo_chart2 = 1;
var tipo_chart3 = 1;
var tipo_chart4 = 1;
var tipo_chart5 = 1;
var tipo_chart6 = 1;
var tipo_chart7 = 1;
var tipo_chart8 = 1;
var tipo_chart9 = 1;
var tipo_chart_position1 = 0;
var tipo_chart_position2 = 0;
var tipo_chart_position3 = 0;
var tipo_chart_position4 = 0;
var tipo_chart_position5 = 0;
var tipo_chart_position6 = 0;
var tipo_chart_position7 = 0;
var tipo_chart_position8 = 0;
var tipo_chart_position9 = 0;
var unidade1 = "";
var unidade2 = "";
var unidade3 = "";
var unidade4 = "";
var unidade5 = "";
var unidade6 = "";
var unidade7 = "";
var unidade8 = "";
var unidade9 = "";
var add_menu1 = false;
var add_menu2 = false;
var add_menu3 = false;
var add_menu4 = false;
var add_menu5 = false;
var add_menu6 = false;
var add_menu7 = false;
var add_menu8 = false;
var add_menu9 = false;
var VisibilidadeMenu = true;
var str = "SELECT date,Acc_Cs as node FROM gsm_kpi.vw_main_kpis_bsc_rate_daily where node != 'UNKNOWN' and node = 'BSCBA58' and date between '10/01/2017' and '10/10/2017' order by date";
var query_num = 1;
var query = "";
var query_cells = "";
var slider = false;
var vis_q1 = document.getElementById("Query1");
var vis_q2 = document.getElementById("Query2");
var vis_q3 = document.getElementById("Query3");
var vis_q4 = document.getElementById("Query4");
var vis_q5 = document.getElementById("Query5");
var vis_q6 = document.getElementById("Query6");
var vis_q7 = document.getElementById("Query7");
var vis_q8 = document.getElementById("Query8");
var vis_q9 = document.getElementById("Query9");
var btn_info_umts = false;
var btn_info_gsm = false;
var btn_info_lte = false;
var family = ["","","","","","","","","",""];
var count_template = [1,1,1,1,1,1,1,1,1,1];


/////////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////////

$('#slider_menu').click(function(){
	
var vis_q1 = document.getElementById("Query1");
var vis_q2 = document.getElementById("Query2");
var vis_q3 = document.getElementById("Query3");
var vis_q4 = document.getElementById("Query4");
var vis_q5 = document.getElementById("Query5");
var vis_q6 = document.getElementById("Query6");
var vis_q7 = document.getElementById("Query7");
var vis_q8 = document.getElementById("Query8");
var vis_q9 = document.getElementById("Query9");

	if(slider == false){
	//Ações ao clicar no Enable
		
	if(vis_q1.style.display == "inline-block"){
	autorization1 = true;
	}
	if(vis_q2.style.display == "inline-block"){
	autorization2 = true;
	}
	if(vis_q3.style.display == "inline-block"){	
	autorization3 = true;
	}
	if(vis_q4.style.display == "inline-block"){	
	autorization4 = true;
	}
	if(vis_q5.style.display == "inline-block"){	
	autorization5 = true;
	}
	if(vis_q6.style.display == "inline-block"){	
	autorization6 = true;
	}
	if(vis_q7.style.display == "inline-block"){	
	autorization7 = true;
	}
	if(vis_q8.style.display == "inline-block"){	
	autorization8 = true;
	}
	if(vis_q9.style.display == "inline-block"){	
	autorization9 = true;
	}	
		
	for(i = 1; i <= 9; i++){
	document.getElementById("Query_Menu"+i).style.opacity = 1;
	document.getElementById("btn_confirm"+i).style.visibility = "visible";
	document.getElementById("chart_type"+i).disabled = false;
	document.getElementById("chart_position"+i).disabled = false;	
	}
	
	auth_change = true;	
	
	slider = true;
	}else
	if(slider == true){
	//Ações ao clicar no Disable
	
	if(tecnologia1 == ""){   
	alert("Please select the Technology");
	} else
	if(elemento1 == ""){
	alert("Please select a Element");
	} else
	if(kpi1 == ""){
	alert("Please select a KPI");
	} else
	if(periodo == ""){
	alert("Please select a Period");
	} else
	if(document.getElementById("datepicker_inicial").value == ""){
	alert("Please select a Initial Date");
	} else
	if(document.getElementById("datepicker_final").value == ""){
	alert("Please select a Final Date");
	
	} else {
	autorizacao = true;
	}
	
	if(autorizacao == true){
	if((vis_q1.style.display == "inline-block") && (autorization1 == true)){
	mostrar_charts1();
	}
	if((vis_q2.style.display == "inline-block") && (autorization2 == true)){	
	mostrar_charts2();
	}
	if((vis_q3.style.display == "inline-block") && (autorization3 == true)){	
	mostrar_charts3();
	}
	if((vis_q4.style.display == "inline-block") && (autorization4 == true)){	
	mostrar_charts4();
	}
	if((vis_q5.style.display == "inline-block") && (autorization5 == true)){	
	mostrar_charts5();
	}
	if((vis_q6.style.display == "inline-block") && (autorization6 == true)){		
	mostrar_charts6();
	}
	if((vis_q7.style.display == "inline-block") && (autorization7 == true)){		
	mostrar_charts7();
	}
	if((vis_q8.style.display == "inline-block") && (autorization8 == true)){		
	mostrar_charts8();
	}
	if((vis_q9.style.display == "inline-block") && (autorization9 == true)){		
	mostrar_charts9();
	}	
	}else{
	$("#radio_query1").prop("checked", false);
	$("#radio_query2").prop("checked", false);
	$("#radio_query3").prop("checked", false);
	$("#radio_query4").prop("checked", false);
	$("#radio_query5").prop("checked", false);
	$("#radio_query6").prop("checked", false);
	$("#radio_query7").prop("checked", false);	
	$("#radio_query8").prop("checked", false);	
	$("#radio_query9").prop("checked", false);		
	}	
	
	if(vis_q1.style.display == "inline-block"){
	autorization1 = false;
	}
	if(vis_q2.style.display == "inline-block"){
	autorization2 = false;
	}
	if(vis_q3.style.display == "inline-block"){	
	autorization3 = false;
	}
	if(vis_q4.style.display == "inline-block"){	
	autorization4 = false;
	}
	if(vis_q5.style.display == "inline-block"){	
	autorization5 = false;
	}
	if(vis_q6.style.display == "inline-block"){	
	autorization6 = false;
	}
	if(vis_q7.style.display == "inline-block"){	
	autorization7 = false;
	}
	if(vis_q8.style.display == "inline-block"){	
	autorization8 = false;
	}
	if(vis_q9.style.display == "inline-block"){	
	autorization9 = false;
	}	
	
	for(i = 1; i <= 9; i++){
	document.getElementById("Query_Menu"+i).style.opacity = 0.3;
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
	document.getElementById("chart_type"+i).disabled = true;
	document.getElementById("chart_position"+i).disabled = true;	
	}
	
	slider = false;	
	}		
});

/////////////////////////////////////////////////////////////////////////////////////////////

$(document).on('change', 'select', function() {

hora_inicial = $("#Drop_Hora_Inicial option:selected").text();
hora_final = $("#Drop_Hora_Final option:selected").text();
if(autorization1 == true){
document.getElementById("Hora_Inicial_Texto_Teste1").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste1").innerHTML = hora_final;
}
if(autorization2 == true){
document.getElementById("Hora_Inicial_Texto_Teste2").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste2").innerHTML = hora_final;
}
if(autorization3 == true){
document.getElementById("Hora_Inicial_Texto_Teste3").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste3").innerHTML = hora_final;
}
if(autorization4 == true){
document.getElementById("Hora_Inicial_Texto_Teste4").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste4").innerHTML = hora_final;
}
if(autorization5 == true){
document.getElementById("Hora_Inicial_Texto_Teste5").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste5").innerHTML = hora_final;
}
if(autorization6 == true){
document.getElementById("Hora_Inicial_Texto_Teste6").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste6").innerHTML = hora_final;
}
if(autorization7 == true){
document.getElementById("Hora_Inicial_Texto_Teste7").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste7").innerHTML = hora_final;
}
if(autorization8 == true){
document.getElementById("Hora_Inicial_Texto_Teste8").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste8").innerHTML = hora_final;
}
if(autorization9 == true){
document.getElementById("Hora_Inicial_Texto_Teste9").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste9").innerHTML = hora_final;
}
auth_change = true;
});

/////////////////////////////////////////////////////////////////////////////////////////////

$(document).on('click', '#myUL_UMTS li', function () {
    var index = $(this).index();
    $('#myUL_UMTS input:radio').eq(index).prop('checked', true);
})

$(document).on('click', '#myUL_GSM li', function () {
    var index = $(this).index();
    $('#myUL_GSM input:radio').eq(index).prop('checked', true);
})

$(document).on('click', '#myUL_LTE li', function () {
    var index = $(this).index();
    $('#myUL_LTE input:radio').eq(index).prop('checked', true);
})

$(document).on('click', '#myUL_KPI_LTE li', function () {
    var index = $(this).index();
    $('#myUL_KPI_LTE input:radio').eq(index).prop('checked', true);
})

$(document).on('click', '#myUL_KPI_GSM li', function () {
    var index = $(this).index();
    $('#myUL_KPI_GSM input:radio').eq(index).prop('checked', true);
})

$(document).on('click', '#myUL_KPI_UMTS li', function () {
    var index = $(this).index();
    $('#myUL_KPI_UMTS input:radio').eq(index).prop('checked', true);
})

////////////////////////////////////////////////// GET WEEK NUMBER //////////////////////////

Date.prototype.getWeekNumber = function(){
  var d = new Date(Date.UTC(this.getFullYear(), this.getMonth(), this.getDate()));
  d.setUTCDate(d.getUTCDate() - d.getUTCDay());
  var yearStart = new Date(Date.UTC(d.getUTCFullYear(),0,1));
  return Math.ceil((((d - yearStart) / 86400000))/7)
};



/////////////////////////////////////////////////////////////////////////////////////////////

$('#Mostrar_Menu_Query').click(function(){
	if(VisibilidadeMenu == false){
		document.getElementById("Resumo").style.display = "block";
		document.getElementById("Resumo2").style.display = "block";
		document.getElementById("MENU").style.display = "block";
		// document.getElementById("Technology_Menu").style.display = "block";
		document.getElementById("Esconder_Menu_Query").style.display = "block";
		document.getElementById("Mostrar_Menu_Query").style.display = "none";
		pageTitleNotification.off();
		VisibilidadeMenu = true;
	} else 
	if(VisibilidadeMenu == true){
		document.getElementById("Resumo").style.display = "none";
		document.getElementById("Resumo2").style.display = "none";
		document.getElementById("MENU").style.display = "none";
		// document.getElementById("Technology_Menu").style.display = "none";
		document.getElementById("Esconder_Menu_Query").style.display = "none";
		document.getElementById("Mostrar_Menu_Query").style.display = "block";
		pageTitleNotification.off();
		VisibilidadeMenu = false;
	}
}
);

$('#Esconder_Menu_Query').click(function(){
	if(VisibilidadeMenu == false){
		document.getElementById("Resumo").style.display = "block";
		document.getElementById("Resumo2").style.display = "block";
		document.getElementById("MENU").style.display = "block";
		// document.getElementById("Technology_Menu").style.display = "block";
		document.getElementById("Esconder_Menu_Query").style.display = "block";
		document.getElementById("Mostrar_Menu_Query").style.display = "none";
		VisibilidadeMenu = true;
	} else 
	if(VisibilidadeMenu == true){
		document.getElementById("Resumo").style.display = "none";
		document.getElementById("Resumo2").style.display = "none";
		document.getElementById("MENU").style.display = "none";
		// document.getElementById("Technology_Menu").style.display = "none";
		document.getElementById("Esconder_Menu_Query").style.display = "none";
		document.getElementById("Mostrar_Menu_Query").style.display = "block";
		VisibilidadeMenu = false;
	}
}
);

$('#chart_type1').click(function(){
	if(tipo_chart1 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-line-chart fa-area-chart');
	tipo_chart1 = 2;
	}else if(tipo_chart1 == 2){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-area-chart fa-bar-chart');
	tipo_chart1 = 3;
	}else if(tipo_chart1 == 3){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-bar-chart fa-line-chart');
	tipo_chart1 = 1;
	}
});

$('#chart_type2').click(function(){
	if(tipo_chart2 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-line-chart fa-area-chart');
	tipo_chart2 = 2;
	}else if(tipo_chart2 == 2){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-area-chart fa-bar-chart');
	tipo_chart2 = 3;
	}else if(tipo_chart2 == 3){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-bar-chart fa-line-chart');
	tipo_chart2 = 1;
	}
});

$('#chart_type3').click(function(){
	if(tipo_chart3 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-line-chart fa-area-chart');
	tipo_chart3 = 2;
	}else if(tipo_chart3 == 2){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-area-chart fa-bar-chart');
	tipo_chart3 = 3;
	}else if(tipo_chart3 == 3){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-bar-chart fa-line-chart');
	tipo_chart3 = 1;
	}
});

$('#chart_type4').click(function(){
	if(tipo_chart4 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-line-chart fa-area-chart');
	tipo_chart4 = 2;
	}else if(tipo_chart4 == 2){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-area-chart fa-bar-chart');
	tipo_chart4 = 3;
	}else if(tipo_chart4 == 3){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-bar-chart fa-line-chart');
	tipo_chart4 = 1;
	}
});

$('#chart_type5').click(function(){
	if(tipo_chart5 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-line-chart fa-area-chart');
	tipo_chart5 = 2;
	}else if(tipo_chart5 == 2){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-area-chart fa-bar-chart');
	tipo_chart5 = 3;
	}else if(tipo_chart5 == 3){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-bar-chart fa-line-chart');
	tipo_chart5 = 1;
	}
});

$('#chart_type6').click(function(){
	if(tipo_chart6 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-line-chart fa-area-chart');
	tipo_chart6 = 2;
	}else if(tipo_chart6 == 2){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-area-chart fa-bar-chart');
	tipo_chart6 = 3;
	}else if(tipo_chart6 == 3){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-bar-chart fa-line-chart');
	tipo_chart6 = 1;
	}
});

$('#chart_type7').click(function(){
	if(tipo_chart7 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-line-chart fa-area-chart');
	tipo_chart7 = 2;
	}else if(tipo_chart7 == 2){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-area-chart fa-bar-chart');
	tipo_chart7 = 3;
	}else if(tipo_chart7 == 3){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-bar-chart fa-line-chart');
	tipo_chart7 = 1;
	}
});

$('#chart_type8').click(function(){
	if(tipo_chart8 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-line-chart fa-area-chart');
	tipo_chart8 = 2;
	}else if(tipo_chart8 == 2){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-area-chart fa-bar-chart');
	tipo_chart8 = 3;
	}else if(tipo_chart8 == 3){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-bar-chart fa-line-chart');
	tipo_chart8 = 1;
	}
});

$('#chart_type9').click(function(){
	if(tipo_chart9 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-line-chart fa-area-chart');
	tipo_chart9 = 2;
	}else if(tipo_chart9 == 2){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-area-chart fa-bar-chart');
	tipo_chart9 = 3;
	}else if(tipo_chart9 == 3){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-bar-chart fa-line-chart');
	tipo_chart9 = 1;
	}
});

$('#chart_position1').click(function(){
	if(tipo_chart_position1 == 0){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-right fa-long-arrow-left');
	tipo_chart_position1 = 1;
	}else if(tipo_chart_position1 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-left fa-long-arrow-right');
	tipo_chart_position1 = 0;
	}	
});

$('#chart_position2').click(function(){
	if(tipo_chart_position2 == 0){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-right fa-long-arrow-left');
	tipo_chart_position2 = 1;
	}else if(tipo_chart_position2 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-left fa-long-arrow-right');
	tipo_chart_position2 = 0;
	}	
});

$('#chart_position3').click(function(){
	if(tipo_chart_position3 == 0){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-right fa-long-arrow-left');
	tipo_chart_position3 = 1;
	}else if(tipo_chart_position3 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-left fa-long-arrow-right');
	tipo_chart_position3 = 0;
	}	
});

$('#chart_position4').click(function(){
	if(tipo_chart_position4 == 0){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-right fa-long-arrow-left');
	tipo_chart_position4 = 1;
	}else if(tipo_chart_position4 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-left fa-long-arrow-right');
	tipo_chart_position4 = 0;
	}	
});

$('#chart_position5').click(function(){
	if(tipo_chart_position5 == 0){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-right fa-long-arrow-left');
	tipo_chart_position5 = 1;
	}else if(tipo_chart_position5 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-left fa-long-arrow-right');
	tipo_chart_position5 = 0;
	}	
});

$('#chart_position6').click(function(){
	if(tipo_chart_position6 == 0){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-right fa-long-arrow-left');
	tipo_chart_position6 = 1;
	}else if(tipo_chart_position6 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-left fa-long-arrow-right');
	tipo_chart_position6 = 0;
	}	
});

$('#chart_position7').click(function(){
	if(tipo_chart_position7 == 0){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-right fa-long-arrow-left');
	tipo_chart_position7 = 1;
	}else if(tipo_chart_position7 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-left fa-long-arrow-right');
	tipo_chart_position7 = 0;
	}	
});

$('#chart_position8').click(function(){
	if(tipo_chart_position8 == 0){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-right fa-long-arrow-left');
	tipo_chart_position8 = 1;
	}else if(tipo_chart_position8 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-left fa-long-arrow-right');
	tipo_chart_position8 = 0;
	}	
});

$('#chart_position9').click(function(){
	if(tipo_chart_position9 == 0){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-right fa-long-arrow-left');
	tipo_chart_position9 = 1;
	}else if(tipo_chart_position9 == 1){
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-long-arrow-left fa-long-arrow-right');
	tipo_chart_position9 = 0;
	}	
});

/////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function () {
   $("#radio_query1").click(function(){
	if((vis_q2.style.display == "inline-block") && (autorization2 == true)){   
	mostrar_charts2();
	}
	if((vis_q3.style.display == "inline-block") && (autorization3 == true)){	
	mostrar_charts3();
    }
	if((vis_q4.style.display == "inline-block") && (autorization4 == true)){		
	mostrar_charts4();
	}
	if((vis_q5.style.display == "inline-block") && (autorization5 == true)){		
	mostrar_charts5();
	}
	if((vis_q6.style.display == "inline-block") && (autorization6 == true)){	
	mostrar_charts6();
	}
	if((vis_q7.style.display == "inline-block") && (autorization7 == true)){	
	mostrar_charts7();
	}
	if((vis_q8.style.display == "inline-block") && (autorization8 == true)){	
	mostrar_charts8();
	}
	if((vis_q9.style.display == "inline-block") && (autorization9 == true)){	
	mostrar_charts9();
	}	
	
	autorization1 = true;
	autorization2 = false;
	autorization3 = false;
	autorization4 = false;
	autorization5 = false;
	autorization6 = false;
	autorization7 = false;
	autorization8 = false;
	autorization9 = false;	
	//auth_change = false;

	for(i = 1; i <= 9; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm1").style.visibility = "visible";
	document.getElementById("Query_Menu1").style.opacity = 1;	
	
	document.getElementById("chart_type1").disabled = false;
	document.getElementById("chart_position1").disabled = false;
   });

   $("#radio_query2").click(function(){
	if((vis_q1.style.display == "inline-block") && (autorization1 == true)){   
	mostrar_charts1();
	}
	if((vis_q3.style.display == "inline-block") && (autorization3 == true)){	
	mostrar_charts3();
    }
	if((vis_q4.style.display == "inline-block") && (autorization4 == true)){		
	mostrar_charts4();
	}
	if((vis_q5.style.display == "inline-block") && (autorization5 == true)){		
	mostrar_charts5();
	}
	if((vis_q6.style.display == "inline-block") && (autorization6 == true)){	
	mostrar_charts6();
	}
	if((vis_q7.style.display == "inline-block") && (autorization7 == true)){	
	mostrar_charts7();
	}
	if((vis_q8.style.display == "inline-block") && (autorization8 == true)){	
	mostrar_charts8();
	} 
	if((vis_q9.style.display == "inline-block") && (autorization9 == true)){	
	mostrar_charts9();
	}  	
	   
	autorization1 = false;
	autorization2 = true;
	autorization3 = false;
	autorization4 = false;
	autorization5 = false;
	autorization6 = false;
	autorization7 = false;
	autorization8 = false;
	autorization9 = false;	
	//auth_change = false;
	
	for(i = 1; i <= 9; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm2").style.visibility = "visible";
	document.getElementById("Query_Menu2").style.opacity = 1;
	
	document.getElementById("chart_type2").disabled = false;
	document.getElementById("chart_position2").disabled = false;		
   });
   
    $("#radio_query3").click(function(){
	if((vis_q1.style.display == "inline-block") && (autorization1 == true)){   
	mostrar_charts1();
	}
	if((vis_q2.style.display == "inline-block") && (autorization2 == true)){	
	mostrar_charts2();
    }
	if((vis_q4.style.display == "inline-block") && (autorization4 == true)){		
	mostrar_charts4();
	}
	if((vis_q5.style.display == "inline-block") && (autorization5 == true)){		
	mostrar_charts5();
	}
	if((vis_q6.style.display == "inline-block") && (autorization6 == true)){	
	mostrar_charts6();
	}
	if((vis_q7.style.display == "inline-block") && (autorization7 == true)){	
	mostrar_charts7();
	}
	if((vis_q8.style.display == "inline-block") && (autorization8 == true)){	
	mostrar_charts8();
	}
	if((vis_q9.style.display == "inline-block") && (autorization9 == true)){	
	mostrar_charts9();
	}	
	
	autorization1 = false;
	autorization2 = false;
	autorization3 = true;
	autorization4 = false;
	autorization5 = false;
	autorization6 = false;
	autorization7 = false;
	autorization8 = false;
	autorization9 = false;	
	//auth_change = false;
	
	for(i = 1; i <= 9; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm3").style.visibility = "visible";
	document.getElementById("Query_Menu3").style.opacity = 1;
	
	document.getElementById("chart_type3").disabled = false;
	document.getElementById("chart_position3").disabled = false;	
   });
   
    $("#radio_query4").click(function(){
	if((vis_q1.style.display == "inline-block") && (autorization1 == true)){   
	mostrar_charts1();
	}
	if((vis_q2.style.display == "inline-block") && (autorization2 == true)){	
	mostrar_charts2();
    }
	if((vis_q3.style.display == "inline-block") && (autorization3 == true)){		
	mostrar_charts3();
	}
	if((vis_q5.style.display == "inline-block") && (autorization5 == true)){		
	mostrar_charts5();
	}
	if((vis_q6.style.display == "inline-block") && (autorization6 == true)){	
	mostrar_charts6();
	}
	if((vis_q7.style.display == "inline-block") && (autorization7 == true)){	
	mostrar_charts7();
	}
	if((vis_q8.style.display == "inline-block") && (autorization8 == true)){	
	mostrar_charts8();
	}
	if((vis_q9.style.display == "inline-block") && (autorization9 == true)){	
	mostrar_charts9();
	}	
	
	autorization1 = false;
	autorization2 = false;
	autorization3 = false;
	autorization4 = true;
	autorization5 = false;
	autorization6 = false;
	autorization7 = false;
	autorization8 = false;
	autorization9 = false;	
	//auth_change = false;
	
	for(i = 1; i <= 9; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm4").style.visibility = "visible";
	document.getElementById("Query_Menu4").style.opacity = 1;
	
	document.getElementById("chart_type4").disabled = false;
	document.getElementById("chart_position4").disabled = false;	
   });
   
    $("#radio_query5").click(function(){
	if((vis_q1.style.display == "inline-block") && (autorization1 == true)){   
	mostrar_charts1();
	}
	if((vis_q2.style.display == "inline-block") && (autorization2 == true)){	
	mostrar_charts2();
    }
	if((vis_q3.style.display == "inline-block") && (autorization3 == true)){		
	mostrar_charts3();
	}
	if((vis_q4.style.display == "inline-block") && (autorization4 == true)){		
	mostrar_charts4();
	}
	if((vis_q6.style.display == "inline-block") && (autorization6 == true)){	
	mostrar_charts6();
	}
	if((vis_q7.style.display == "inline-block") && (autorization7 == true)){	
	mostrar_charts7();
	}
	if((vis_q8.style.display == "inline-block") && (autorization8 == true)){	
	mostrar_charts8();
	}
	if((vis_q9.style.display == "inline-block") && (autorization9 == true)){	
	mostrar_charts9();
	}	
	
	autorization1 = false;
	autorization2 = false;
	autorization3 = false;
	autorization4 = false;
	autorization5 = true;
	autorization6 = false;
	autorization7 = false;
	autorization8 = false;
	autorization9 = false;	
	//auth_change = false;
	
	for(i = 1; i <= 9; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm5").style.visibility = "visible";
	document.getElementById("Query_Menu5").style.opacity = 1;
	
	document.getElementById("chart_type5").disabled = false;
	document.getElementById("chart_position5").disabled = false;		
   });
   
    $("#radio_query6").click(function(){
	if((vis_q1.style.display == "inline-block") && (autorization1 == true)){   
	mostrar_charts1();
	}
	if((vis_q2.style.display == "inline-block") && (autorization2 == true)){	
	mostrar_charts2();
    }
	if((vis_q3.style.display == "inline-block") && (autorization3 == true)){		
	mostrar_charts3();
	}
	if((vis_q4.style.display == "inline-block") && (autorization4 == true)){		
	mostrar_charts4();
	}
	if((vis_q5.style.display == "inline-block") && (autorization5 == true)){	
	mostrar_charts5();
	}
	if((vis_q7.style.display == "inline-block") && (autorization7 == true)){	
	mostrar_charts7();
	}
	if((vis_q8.style.display == "inline-block") && (autorization8 == true)){	
	mostrar_charts8();
	}
	if((vis_q9.style.display == "inline-block") && (autorization9 == true)){	
	mostrar_charts9();
	}	
	
	autorization1 = false;
	autorization2 = false;
	autorization3 = false;
	autorization4 = false;
	autorization5 = false;
	autorization6 = true;
	autorization7 = false;
	autorization8 = false;
	autorization9 = false;	
	//auth_change = false;
	
	for(i = 1; i <= 9; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm6").style.visibility = "visible";
	document.getElementById("Query_Menu6").style.opacity = 1;
	
	document.getElementById("chart_type6").disabled = false;
	document.getElementById("chart_position6").disabled = false;	
   });
   
    $("#radio_query7").click(function(){
	if((vis_q1.style.display == "inline-block") && (autorization1 == true)){   
	mostrar_charts1();
	}
	if((vis_q2.style.display == "inline-block") && (autorization2 == true)){	
	mostrar_charts2();
    }
	if((vis_q3.style.display == "inline-block") && (autorization3 == true)){		
	mostrar_charts3();
	}
	if((vis_q4.style.display == "inline-block") && (autorization4 == true)){		
	mostrar_charts4();
	}
	if((vis_q5.style.display == "inline-block") && (autorization5 == true)){	
	mostrar_charts5();
	}
	if((vis_q6.style.display == "inline-block") && (autorization6 == true)){	
	mostrar_charts7();
	}
	if((vis_q8.style.display == "inline-block") && (autorization8 == true)){	
	mostrar_charts8();
	}
	if((vis_q9.style.display == "inline-block") && (autorization9 == true)){	
	mostrar_charts9();
	}	
	
	autorization1 = false;
	autorization2 = false;
	autorization3 = false;
	autorization4 = false;
	autorization5 = false;
	autorization6 = false;
	autorization7 = true;
	autorization8 = false;
	autorization9 = false;	
	//auth_change = false;
	
	for(i = 1; i <= 9; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm7").style.visibility = "visible";
	document.getElementById("Query_Menu7").style.opacity = 1;
	
	document.getElementById("chart_type7").disabled = false;
	document.getElementById("chart_position7").disabled = false;	
   });
   
    $("#radio_query8").click(function(){
	if((vis_q1.style.display == "inline-block") && (autorization1 == true)){   
	mostrar_charts1();
	}
	if((vis_q2.style.display == "inline-block") && (autorization2 == true)){	
	mostrar_charts2();
    }
	if((vis_q3.style.display == "inline-block") && (autorization3 == true)){		
	mostrar_charts3();
	}
	if((vis_q4.style.display == "inline-block") && (autorization4 == true)){		
	mostrar_charts4();
	}
	if((vis_q5.style.display == "inline-block") && (autorization5 == true)){	
	mostrar_charts5();
	}
	if((vis_q6.style.display == "inline-block") && (autorization6 == true)){	
	mostrar_charts6();
	}
	if((vis_q7.style.display == "inline-block") && (autorization7 == true)){	
	mostrar_charts7();
	}
	if((vis_q9.style.display == "inline-block") && (autorization9 == true)){	
	mostrar_charts9();
	}	
	
	autorization1 = false;
	autorization2 = false;
	autorization3 = false;
	autorization4 = false;
	autorization5 = false;
	autorization6 = false;
	autorization7 = false;
	autorization8 = true;
	autorization9 = false;	
	//auth_change = false;
	
	for(i = 1; i <= 9; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm8").style.visibility = "visible";
	document.getElementById("Query_Menu8").style.opacity = 1;
	
	document.getElementById("chart_type8").disabled = false;
	document.getElementById("chart_position8").disabled = false;	
   });

    $("#radio_query9").click(function(){
	if((vis_q1.style.display == "inline-block") && (autorization1 == true)){   
	mostrar_charts1();
	}
	if((vis_q2.style.display == "inline-block") && (autorization2 == true)){	
	mostrar_charts2();
    }
	if((vis_q3.style.display == "inline-block") && (autorization3 == true)){		
	mostrar_charts3();
	}
	if((vis_q4.style.display == "inline-block") && (autorization4 == true)){		
	mostrar_charts4();
	}
	if((vis_q5.style.display == "inline-block") && (autorization5 == true)){	
	mostrar_charts5();
	}
	if((vis_q6.style.display == "inline-block") && (autorization6 == true)){	
	mostrar_charts9();
	}
	if((vis_q7.style.display == "inline-block") && (autorization7 == true)){	
	mostrar_charts7();
	}
	if((vis_q8.style.display == "inline-block") && (autorization8 == true)){	
	mostrar_charts8();
	}	
	
	autorization1 = false;
	autorization2 = false;
	autorization3 = false;
	autorization4 = false;
	autorization5 = false;
	autorization6 = false;
	autorization7 = false;
	autorization8 = false;
	autorization9 = true;	
	//auth_change = false;
	
	for(i = 1; i <= 9; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm9").style.visibility = "visible";
	document.getElementById("Query_Menu9").style.opacity = 1;
	
	document.getElementById("chart_type9").disabled = false;
	document.getElementById("chart_position9").disabled = false;	
   });   
   
});




///////////////////////////////////////////////////// TESTE AJAX ///////////////////////////////////////////
$( "#datepicker_inicial" ).datepicker({
	showWeek: true,
	maxDate: 'today',
     onClose: function(){
		if(autorization1 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Inicial_Texto_Teste1").innerHTML = document.getElementById("datepicker_inicial").value+" to";	
		}
		else if(periodo == "daily"){			
		document.getElementById("Date_Inicial_Texto_Teste1").innerHTML = document.getElementById("datepicker_inicial").value+" to";
		} else if(periodo == "weekly"){
		data_inicial[0] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[0];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[0] = m.toDate().getWeekNumber();
		ano[0] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste1").innerHTML = "Week "+data_inicial[0]+" to";
		} else if(periodo = "monthly"){
		data_inicial[0] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[0];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[0] = m.toDate().getUTCMonth() + 1;
		ano[0] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste1").innerHTML = "Month "+data_inicial[0]+" to";
		}
		}
		auth_change = true;
		}
		if(autorization2 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Inicial_Texto_Teste2").innerHTML = document.getElementById("datepicker_inicial").value+" to";	
		}
		else if(periodo == "daily"){	
		document.getElementById("Date_Inicial_Texto_Teste2").innerHTML = document.getElementById("datepicker_inicial").value+" to";
		} else if(periodo == "weekly"){
		data_inicial[1] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[1];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[1] = m.toDate().getWeekNumber();
		ano[1] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste2").innerHTML = "Week "+data_inicial[1]+" to";
		}else if(periodo = "monthly"){
		data_inicial[1] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[1];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[1] = m.toDate().getUTCMonth() + 1;
		ano[1] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste2").innerHTML = "Month "+data_inicial[1]+" to";
		}
		}
		auth_change = true;
		}
		if(autorization3 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Inicial_Texto_Teste3").innerHTML = document.getElementById("datepicker_inicial").value+" to";	
		}	
		else if(periodo == "daily"){	
		document.getElementById("Date_Inicial_Texto_Teste3").innerHTML = document.getElementById("datepicker_inicial").value+" to";
		} else if(periodo == "weekly"){
		data_inicial[2] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[2];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[2] = m.toDate().getWeekNumber();
		ano[2] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste3").innerHTML = "Week "+data_inicial[2]+" to";
		}else if(periodo = "monthly"){
		data_inicial[2] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[2];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[2] = m.toDate().getUTCMonth() + 1;
		ano[2] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste3").innerHTML = "Month "+data_inicial[2]+" to";
		}
		}
		auth_change = true;
		}
		if(autorization4 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Inicial_Texto_Teste4").innerHTML = document.getElementById("datepicker_inicial").value+" to";	
		}
		else if(periodo == "daily"){	
		document.getElementById("Date_Inicial_Texto_Teste4").innerHTML = document.getElementById("datepicker_inicial").value+" to";
		} else if(periodo == "weekly"){
		data_inicial[3] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[3];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[3] = m.toDate().getWeekNumber();
		ano[3] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste4").innerHTML = "Week "+data_inicial[3]+" to";
		}else if(periodo = "monthly"){
		data_inicial[3] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[3];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[3] = m.toDate().getUTCMonth() + 1;
		ano[3] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste4").innerHTML = "Month "+data_inicial[3]+" to";
		}
		}
		auth_change = true;
		}
		if(autorization5 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Inicial_Texto_Teste5").innerHTML = document.getElementById("datepicker_inicial").value+" to";	
		}
		else if(periodo == "daily"){	
		document.getElementById("Date_Inicial_Texto_Teste5").innerHTML = document.getElementById("datepicker_inicial").value+" to";
		} else if(periodo == "weekly"){
		data_inicial[4] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[4];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[4] = m.toDate().getWeekNumber();
		ano[4] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste5").innerHTML = "Week "+data_inicial[4]+" to";
		}else if(periodo = "monthly"){
		data_inicial[4] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[4];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[4] = m.toDate().getUTCMonth() + 1;
		ano[4] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste5").innerHTML = "Month "+data_inicial[4]+" to";
		}
		}
		auth_change = true;
		}
		if(autorization6 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Inicial_Texto_Teste6").innerHTML = document.getElementById("datepicker_inicial").value+" to";	
		}
		else if(periodo == "daily"){	
		document.getElementById("Date_Inicial_Texto_Teste6").innerHTML = document.getElementById("datepicker_inicial").value+" to";
		} else if(periodo == "weekly"){
		data_inicial[5] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[5];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[5] = m.toDate().getWeekNumber();
		ano[5] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste6").innerHTML = "Week "+data_inicial[5]+" to";
		}else if(periodo = "monthly"){
		data_inicial[5] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[5];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[5] = m.toDate().getUTCMonth() + 1;
		ano[5] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste6").innerHTML = "Month "+data_inicial[5]+" to";
		}
		}
		auth_change = true;
		}
		if(autorization7 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Inicial_Texto_Teste7").innerHTML = document.getElementById("datepicker_inicial").value+" to";	
		}
		else if(periodo == "daily"){	
		document.getElementById("Date_Inicial_Texto_Teste7").innerHTML = document.getElementById("datepicker_inicial").value+" to";
		} else if(periodo == "weekly"){
		data_inicial[6] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[6];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[6] = m.toDate().getWeekNumber();
		ano[6] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste7").innerHTML = "Week "+data_inicial[6]+" to";
		}else if(periodo = "monthly"){
		data_inicial[6] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[6];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[6] = m.toDate().getUTCMonth() + 1;
		ano[6] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste7").innerHTML = "Month "+data_inicial[6]+" to";
		}
		}
		auth_change = true;
		}
		if(autorization8 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Inicial_Texto_Teste8").innerHTML = document.getElementById("datepicker_inicial").value+" to";	
		}
		else if(periodo == "daily"){	
		document.getElementById("Date_Inicial_Texto_Teste8").innerHTML = document.getElementById("datepicker_inicial").value+" to";
		} else if(periodo == "weekly"){
		data_inicial[7] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[7];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[7] = m.toDate().getWeekNumber();
		ano[7] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste8").innerHTML = "Week "+data_inicial[7]+" to";
		}else if(periodo = "monthly"){
		data_inicial[7] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[7];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[7] = m.toDate().getUTCMonth() + 1;
		ano[7] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste8").innerHTML = "Month "+data_inicial[7]+" to";
		}
		}
		auth_change = true;
		}
		if(autorization9 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Inicial_Texto_Teste9").innerHTML = document.getElementById("datepicker_inicial").value+" to";	
		}
		else if(periodo == "daily"){	
		document.getElementById("Date_Inicial_Texto_Teste9").innerHTML = document.getElementById("datepicker_inicial").value+" to";
		} else if(periodo == "weekly"){
		data_inicial[8] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[8];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[8] = m.toDate().getWeekNumber();
		ano[8] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste9").innerHTML = "Week "+data_inicial[8]+" to";
		}else if(periodo = "monthly"){
		data_inicial[8] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[8];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[8] = m.toDate().getUTCMonth() + 1;
		ano[8] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Inicial_Texto_Teste9").innerHTML = "Month "+data_inicial[8]+" to";
		}
		}
		auth_change = true;
		}		
     }
});

$( "#datepicker_final" ).datepicker({
	 showWeek: true,
	 maxDate: 'today',
     onClose: function(){
		if(autorization1 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Final_Texto_Teste1").innerHTML = document.getElementById("datepicker_final").value+" from";
		hora_inicial = $("#Drop_Hora_Inicial option:selected").text();
		hora_final = $("#Drop_Hora_Final option:selected").text();
		document.getElementById("Hora_Inicial_Texto_Teste1").innerHTML = hora_inicial+" to ";
		document.getElementById("Hora_Final_Texto_Teste1").innerHTML = hora_final;
		}   
		else if(periodo == "daily"){	
		document.getElementById("Date_Final_Texto_Teste1").innerHTML = document.getElementById("datepicker_final").value;
		} else if(periodo == "weekly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getWeekNumber();
		ano_final[0] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste1").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
		ano_final[0] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste1").innerHTML = "Month "+data_final;
		}
		}
		auth_change = true;
		}
		if(autorization2 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Final_Texto_Teste2").innerHTML = document.getElementById("datepicker_final").value+" from";
		hora_inicial = $("#Drop_Hora_Inicial option:selected").text();
		hora_final = $("#Drop_Hora_Final option:selected").text();
		document.getElementById("Hora_Inicial_Texto_Teste2").innerHTML = hora_inicial+" to ";
		document.getElementById("Hora_Final_Texto_Teste2").innerHTML = hora_final;		
		}	
		else if(periodo == "daily"){	
		document.getElementById("Date_Final_Texto_Teste2").innerHTML = document.getElementById("datepicker_final").value;
		} else if(periodo == "weekly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getWeekNumber();
		ano_final[1] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste2").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
		ano_final[1] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste2").innerHTML = "Month "+data_final;
		}
		}
		auth_change = true;
		}
		if(autorization3 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Final_Texto_Teste3").innerHTML = document.getElementById("datepicker_final").value+" from";
		hora_inicial = $("#Drop_Hora_Inicial option:selected").text();
		hora_final = $("#Drop_Hora_Final option:selected").text();
		document.getElementById("Hora_Inicial_Texto_Teste3").innerHTML = hora_inicial+" to ";
		document.getElementById("Hora_Final_Texto_Teste3").innerHTML = hora_final;		
		}				
		else if(periodo == "daily"){	
		document.getElementById("Date_Final_Texto_Teste3").innerHTML = document.getElementById("datepicker_final").value;
		} else if(periodo == "weekly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getWeekNumber();
		ano_final[2] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste3").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
		ano_final[2] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste3").innerHTML = "Month "+data_final;
		}
		}
		auth_change = true;
		}
		if(autorization4 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Final_Texto_Teste4").innerHTML = document.getElementById("datepicker_final").value+" from";
		hora_inicial = $("#Drop_Hora_Inicial option:selected").text();
		hora_final = $("#Drop_Hora_Final option:selected").text();
		document.getElementById("Hora_Inicial_Texto_Teste4").innerHTML = hora_inicial+" to ";
		document.getElementById("Hora_Final_Texto_Teste4").innerHTML = hora_final;
		}				
		else if(periodo == "daily"){	
		document.getElementById("Date_Final_Texto_Teste4").innerHTML = document.getElementById("datepicker_final").value;
		} else if(periodo == "weekly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getWeekNumber();
		ano_final[3] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste4").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
		ano_final[3] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste4").innerHTML = "Month "+data_final;
		}
		}
		auth_change = true;
		}
		if(autorization5 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Final_Texto_Teste5").innerHTML = document.getElementById("datepicker_final").value+" from";
		hora_inicial = $("#Drop_Hora_Inicial option:selected").text();
		hora_final = $("#Drop_Hora_Final option:selected").text();
		document.getElementById("Hora_Inicial_Texto_Teste5").innerHTML = hora_inicial+" to ";
		document.getElementById("Hora_Final_Texto_Teste5").innerHTML = hora_final;
		}				
		else if(periodo == "daily"){	
		document.getElementById("Date_Final_Texto_Teste5").innerHTML = document.getElementById("datepicker_final").value;
		} else if(periodo == "weekly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getWeekNumber();
		ano_final[4] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste5").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
		ano_final[4] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste5").innerHTML = "Month "+data_final;
		}
		}
		auth_change = true;
		}
		if(autorization6 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Final_Texto_Teste6").innerHTML = document.getElementById("datepicker_final").value+" from";
		hora_inicial = $("#Drop_Hora_Inicial option:selected").text();
		hora_final = $("#Drop_Hora_Final option:selected").text();
		document.getElementById("Hora_Inicial_Texto_Teste6").innerHTML = hora_inicial+" to ";
		document.getElementById("Hora_Final_Texto_Teste6").innerHTML = hora_final;
		}				
		else if(periodo == "daily"){	
		document.getElementById("Date_Final_Texto_Teste6").innerHTML = document.getElementById("datepicker_final").value;
		} else if(periodo == "weekly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getWeekNumber();
		ano_final[5] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste6").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
		ano_final[5] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste6").innerHTML = "Month "+data_final;
		}
		}
		auth_change = true;
		}

		if(autorization7 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Final_Texto_Teste7").innerHTML = document.getElementById("datepicker_final").value+" from";
		hora_inicial = $("#Drop_Hora_Inicial option:selected").text();
		hora_final = $("#Drop_Hora_Final option:selected").text();
		document.getElementById("Hora_Inicial_Texto_Teste7").innerHTML = hora_inicial+" to ";
		document.getElementById("Hora_Final_Texto_Teste7").innerHTML = hora_final;
		}				
		else if(periodo == "daily"){	
		document.getElementById("Date_Final_Texto_Teste7").innerHTML = document.getElementById("datepicker_final").value;
		} else if(periodo == "weekly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getWeekNumber();
		ano_final[6] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste7").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
		ano_final[6] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste7").innerHTML = "Month "+data_final;
		}
		}
		auth_change = true;
		}

		if(autorization8 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Final_Texto_Teste8").innerHTML = document.getElementById("datepicker_final").value+" from";
		hora_inicial = $("#Drop_Hora_Inicial option:selected").text();
		hora_final = $("#Drop_Hora_Final option:selected").text();
		document.getElementById("Hora_Inicial_Texto_Teste8").innerHTML = hora_inicial+" to ";
		document.getElementById("Hora_Final_Texto_Teste8").innerHTML = hora_final;
		}				
		else if(periodo == "daily"){	
		document.getElementById("Date_Final_Texto_Teste8").innerHTML = document.getElementById("datepicker_final").value;
		} else if(periodo == "weekly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getWeekNumber();
		ano_final[7] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste8").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
		ano_final[7] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste8").innerHTML = "Month "+data_final;
		}
		}
		auth_change = true;
		}

		if(autorization9 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Final_Texto_Teste9").innerHTML = document.getElementById("datepicker_final").value+" from";
		hora_inicial = $("#Drop_Hora_Inicial option:selected").text();
		hora_final = $("#Drop_Hora_Final option:selected").text();
		document.getElementById("Hora_Inicial_Texto_Teste9").innerHTML = hora_inicial+" to ";
		document.getElementById("Hora_Final_Texto_Teste9").innerHTML = hora_final;
		}				
		else if(periodo == "daily"){	
		document.getElementById("Date_Final_Texto_Teste9").innerHTML = document.getElementById("datepicker_final").value;
		} else if(periodo == "weekly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getWeekNumber();
		ano_final[8] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste9").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
		ano_final[8] = m.toDate().getUTCFullYear();
		document.getElementById("Date_Final_Texto_Teste9").innerHTML = "Month "+data_final;
		}
		}
		auth_change = true;
		}		
		
     }
});
/////////////////////////////////////////////////// FIM TESTE AJAX /////////////////////////////////////////

//////////////////////////////////////////////////// GSM /////////////////////////////////////////////////////

function printclick_elementos_GSM_Cells(node){
	

	familia = "cell";
	
	cellid = $(node).attr("id");
	bsc = $(node).attr("value");
	
	elemento = $(node).text();
	
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "cell";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "cell";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "cell";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "cell";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "cell";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "cell";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "cell";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "cell";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "cell";
	}	
		
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;

	//document.getElementById("Texto_Teste").innerHTML = query;
	
}

function printclick_elementos_GSM_BSC(node){
	
	familia = "bsc";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "bsc";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "bsc";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "bsc";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "bsc";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "bsc";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "bsc";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "bsc";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "bsc";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "bsc";
	}		
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;
	//document.getElementById("Texto_Teste").innerHTML = query;
	
}

function printclick_elementos_GSM_BTS(node){
	
	familia = "bts";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "bts";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "bts";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "bts";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "bts";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "bts";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "bts";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "bts";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "bts";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "bts";
	}	
	$(".CellsItems").remove();
	
	query_cells = "SELECT cellname,cellid,bsc FROM gsm_control.cells_db where bts='"+elemento+"' order by cellname DESC";

	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	showCells();	
	
	
	auth_change = true;
	
}

function printclick_elementos_GSM_City(node){
	
	familia = "cidade";
	
	uf = $(node).find('span:eq(1)').text();
	
	elemento = $(node).find('span:eq(0)').text();
	
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).find('span:eq(0)').text();
	family[1] = "cidade";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).find('span:eq(0)').text();
	family[2] = "cidade";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).find('span:eq(0)').text();
	family[3] = "cidade";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).find('span:eq(0)').text();
	family[4] = "cidade";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).find('span:eq(0)').text();
	family[5] = "cidade";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).find('span:eq(0)').text();
	family[6] = "cidade";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).find('span:eq(0)').text();
	family[7] = "cidade";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).find('span:eq(0)').text();
	family[8] = "cidade";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).find('span:eq(0)').text();
	family[9] = "cidade";
	}	

	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	
	auth_change = true;
	
}

function printclick_elementos_GSM_Reg(node){
	
	familia = "region";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "region";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "region";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "region";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "region";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "region";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "region";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "region";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "region";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "region";
	}	
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	
	auth_change = true;
	
}

function printclick_elementos_GSM_UF(node){
	
	familia = "uf";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "uf";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "uf";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "uf";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "uf";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "uf";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "uf";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "uf";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "uf";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "uf";
	}	
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	
	auth_change = true;
	
}

//////////////////////////////////////////////////// UMTS ////////////////////////////////////////////////////

 function printclick_elementos_UMTS_Cells(node){
	
	cellid = $(node).attr("id");
	rnc = $(node).attr("value");
	locell = $(node).find("a").attr("id");
	nodeb = $(node).find("a").attr("value");
	
	familia = "cell";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	rncc[1] = $(node).attr("value");
	cellidd[1] = $(node).attr("id");
	family[1] = "cell";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	rncc[2] = $(node).attr("value");
	cellidd[2] = $(node).attr("id");
	family[2] = "cell";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	rncc[3] = $(node).attr("value");
	cellidd[3] = $(node).attr("id");
	family[3] = "cell";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	rncc[4] = $(node).attr("value");
	cellidd[4] = $(node).attr("id");
	family[4] = "cell";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	rncc[5] = $(node).attr("value");
	cellidd[5] = $(node).attr("id");
	family[5] = "cell";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	rncc[6] = $(node).attr("value");
	cellidd[6] = $(node).attr("id");
	family[6] = "cell";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	rncc[7] = $(node).attr("value");
	cellidd[7] = $(node).attr("id");
	family[7] = "cell";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	rncc[8] = $(node).attr("value");
	cellidd[8] = $(node).attr("id");
	family[8] = "cell";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	rncc[9] = $(node).attr("value");
	cellidd[9] = $(node).attr("id");
	family[9] = "cell";
	}	
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	

	auth_change = true;
	
 }


function printclick_elementos_UMTS_City(node){
	
	familia = "cidade";
	uf = $(node).find('span:eq(1)').text();
	
	elemento = $(node).find('span:eq(0)').text();
	
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).find('span:eq(0)').text();
	family[1] = "cidade";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).find('span:eq(0)').text();
	family[2] = "cidade";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).find('span:eq(0)').text();
	family[3] = "cidade";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).find('span:eq(0)').text();
	family[4] = "cidade";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).find('span:eq(0)').text();
	family[5] = "cidade";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).find('span:eq(0)').text();
	family[6] = "cidade";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).find('span:eq(0)').text();
	family[7] = "cidade";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).find('span:eq(0)').text();
	family[8] = "cidade";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).find('span:eq(0)').text();
	family[9] = "cidade";
	}	
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	

	auth_change = true;
	
}

function printclick_elementos_UMTS_Cluster(node){
	
	familia = "cluster";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "cluster";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "cluster";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "cluster";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "cluster";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "cluster";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "cluster";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "cluster";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "cluster";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "cluster";
	}	
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;
	
}

function printclick_elementos_UMTS_CustomCluster(node){
	
	familia = "cluster";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	}	
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;
	
}

function printclick_elementos_UMTS_NodeB(node){
	
	
	familia = "NodeB";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "NodeB";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "NodeB";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "NodeB";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "NodeB";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "NodeB";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "NodeB";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "NodeB";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "NodeB";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "NodeB";
	}	
	query_cells = "SELECT distinct cell,rnc,cellid,locell,nodeb FROM umts_control.cells_database where nodeb = '"+elemento+"' order by cell DESC";
	
	$(".CellsItems").remove();
		
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	showCells(); 

	auth_change = true;
	
}

function printclick_elementos_UMTS_Reg(node){
	
	familia = "region";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "region";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "region";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "region";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "region";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "region";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "region";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "region";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "region";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "region";
	}	
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;
	
}

function printclick_elementos_UMTS_Rnc(node){
	
	familia = "rnc";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "rnc";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "rnc";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "rnc";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "rnc";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "rnc";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "rnc";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "rnc";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "rnc";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "rnc";
	}	
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;
	
}

function printclick_elementos_UMTS_UF(node){
	
	familia = "uf";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "uf";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "uf";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "uf";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "uf";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "uf";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "uf";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "uf";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "uf";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "uf";
	}	
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;
}

////////////////////////////////////////////////// LTE //////////////////////////////////////////////////////

function printclick_elementos_LTE_Cells(node){
	
	familia = "cell";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "cell";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "cell";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "cell";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "cell";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "cell";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "cell";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "cell";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "cell";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "cell";
	}	
	cellid = $(node).attr("id");
	enodeb = $(node).attr("value");
	
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;
	
}

function printclick_elementos_lte_City(node){
	
	familia = "cidade";
	
	uf = $(node).find('span:eq(1)').text();
	
	elemento = $(node).find('span:eq(0)').text();
	
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).find('span:eq(0)').text();
	family[1] = "cidade";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).find('span:eq(0)').text();
	family[2] = "cidade";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).find('span:eq(0)').text();
	family[3] = "cidade";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).find('span:eq(0)').text();
	family[4] = "cidade";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).find('span:eq(0)').text();
	family[5] = "cidade";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).find('span:eq(0)').text();
	family[6] = "cidade";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).find('span:eq(0)').text();
	family[7] = "cidade";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).find('span:eq(0)').text();
	family[8] = "cidade";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).find('span:eq(0)').text();
	family[9] = "cidade";
	}	
		
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;
	
}

function printclick_elementos_lte_Reg(node){
	
	familia = "Region";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "Region";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "Region";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "Region";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "Region";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "Region";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "Region";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "Region";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "Region";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "Region";
	}	
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;
	
}

function printclick_elementos_lte_UF(node){
	
	familia = "UF";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "UF";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "UF";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "UF";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "UF";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "UF";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "UF";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "UF";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "UF";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "UF";
	}	
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;
	
}

function printclick_elementos_lte_eNodeB(node){
	
	familia = "eNodeB";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "eNodeB";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "eNodeB";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "eNodeB";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "eNodeB";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "eNodeB";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "eNodeB";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "eNodeB";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "eNodeB";
	}	
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "eNodeB";
	}		
	
	$(".CellsItems").remove();
	
	
	query_cells = "SELECT CELL,cellid,enodeb FROM lte_control.cells WHERE ENODEB = '"+elemento+"' ORDER BY CELL DESC";
	
	// $(".CellsItems").remove();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	showCells();
	
	auth_change = true;
	
}

function printclick_elementos_lte_Cluster(node){
	
	familia = "Cluster";
	
	elemento = $(node).text();
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).text();
	family[1] = "Cluster";
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	family[2] = "Cluster";
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	family[3] = "Cluster";
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	family[4] = "Cluster";
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	family[5] = "Cluster";
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	family[6] = "Cluster";
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	elemento7 = $(node).text();
	family[7] = "Cluster";
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	elemento8 = $(node).text();
	family[8] = "Cluster";
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	elemento9 = $(node).text();
	family[9] = "Cluster";
	}	
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento1;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento2;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento3;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento4;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento5;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento6;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("Elemento_Texto_Teste7").innerHTML = elemento7;
	document.getElementById("Elemento_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("Elemento_Texto_Teste8").innerHTML = elemento8;
	document.getElementById("Elemento_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("Elemento_Texto_Teste9").innerHTML = elemento9;
	document.getElementById("Elemento_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;
	
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function printclick_kpi(node){
	
	estado = 1;
	
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	kpi1 = $(node).text();
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	kpi2 = $(node).text();
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	kpi3 = $(node).text();
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	kpi4 = $(node).text();
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	kpi5 = $(node).text();
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	kpi6 = $(node).text();
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	kpi7 = $(node).text();
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	kpi8 = $(node).text();
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	kpi9 = $(node).text();
	}	
	
	if((autorization1 == true) && (vis_q1.style.display == "inline-block")){
	if ((kpi1 == "Ps_R99_Dl") || (kpi1 == "Ps_R99_Ul") || (kpi1 == "Data_Hsdpa") || (kpi1 == "Data_Hsupa") || (kpi1 == "Downlink_Traffic_Volume") || (kpi1 == "Uplink_Traffic_Volume")  || (kpi1 == "Sdcch_Traffic") || (kpi1 == "Tch_Traffic_Fr") || (kpi1 == "Tch_Traffic_Hr")){
	unidade1 = "GB";
	}else
	if((kpi1 == "Hsdpa_Users") || (kpi1 == "Hsupa_Users") || (kpi1 == "Ps_Nonhs_Users") || (kpi1 == "Dch_Users") || (kpi1 == "Pch_Users") || (kpi1 == "Fach_Users") || (kpi1 == "Average_User_Volume") || (kpi1 == "Average_User_Volume_1800") || (kpi1 == "Average_User_Volume_2600") || (kpi1 == "Average_User_Volume_2cc") || (kpi1 == "Average_User_Volume_700") || (kpi1 == "Average_User_Volume_3cc")){
	unidade1 = "Users";
	}else
	if((kpi1 == "Thp_Hsdpa") || (kpi1 == "Thp_Hsupa")){
	unidade1 = "Kbps";
	}else
	if((kpi1 == "Rtwp") || (kpi1 == "Interference") || (kpi1 == "Interference_1800") || (kpi1 == "Interference_2600") || (kpi1 == "Interference_700")){
	unidade1 = "dBm";
	}else
	if((kpi1 == "Cell_Downlink_Avg_Thp") || (kpi1 == "Cell_Downlink_Avg_Thp_1800") || (kpi1 == "Cell_Downlink_Avg_Thp_2600") || (kpi1 == "Cell_Downlink_Avg_Thp_700") || (kpi1 == "Cell_Downlink_Avg_Thp_Ca") || (kpi1 == "Cell_Uplink_Avg_Thp") || (kpi1 == "Cell_Uplink_Avg_Thp_1800") || (kpi1 == "Cell_Uplink_Avg_Thp_2600") || (kpi1 == "Cell_Uplink_Avg_Thp_700") || (kpi1 == "Rb_Cell_Downlink_Avg_Thp") || (kpi1 == "Rb_Cell_Uplink_Avg_Thp") || (kpi1 == "Weighted_Thp")){
	unidade1 = "Mbps";
	}else	{
	unidade1 = "%";
	}
	}
	
	if((autorization2 == true) && (vis_q2.style.display == "inline-block")){
	if ((kpi2 == "Ps_R99_Dl") || (kpi2 == "Ps_R99_Ul") || (kpi2 == "Data_Hsdpa") || (kpi2 == "Data_Hsupa") || (kpi2 == "Downlink_Traffic_Volume") || (kpi2 == "Uplink_Traffic_Volume")  || (kpi2 == "Sdcch_Traffic") || (kpi2 == "Tch_Traffic_Fr") || (kpi2 == "Tch_Traffic_Hr")){
	unidade2 = "GB";
	}else
	if((kpi2 == "Hsdpa_Users") || (kpi2 == "Hsupa_Users") || (kpi2 == "Ps_Nonhs_Users") || (kpi2 == "Dch_Users") || (kpi2 == "Pch_Users") || (kpi2 == "Fach_Users") || (kpi2 == "Average_User_Volume") || (kpi2 == "Average_User_Volume_1800") || (kpi2 == "Average_User_Volume_2600") || (kpi2 == "Average_User_Volume_2cc") || (kpi2 == "Average_User_Volume_700") || (kpi2 == "Average_User_Volume_3cc")){
	unidade2 = "Users";
	}else
	if((kpi2 == "Thp_Hsdpa") || (kpi2 == "Thp_Hsupa")){
	unidade2 = "Kbps";
	}else
	if((kpi2 == "Rtwp") || (kpi2 == "Interference") || (kpi2 == "Interference_1800") || (kpi2 == "Interference_2600") || (kpi2 == "Interference_700")){
	unidade2 = "dBm";
	}else
	if((kpi2 == "Cell_Downlink_Avg_Thp") || (kpi2 == "Cell_Downlink_Avg_Thp_1800") || (kpi2 == "Cell_Downlink_Avg_Thp_2600") || (kpi2 == "Cell_Downlink_Avg_Thp_700") || (kpi2 == "Cell_Downlink_Avg_Thp_Ca") || (kpi2 == "Cell_Uplink_Avg_Thp") || (kpi2 == "Cell_Uplink_Avg_Thp_1800") || (kpi2 == "Cell_Uplink_Avg_Thp_2600") || (kpi2 == "Cell_Uplink_Avg_Thp_700") || (kpi2 == "Rb_Cell_Downlink_Avg_Thp") || (kpi2 == "Rb_Cell_Uplink_Avg_Thp") || (kpi2 == "Weighted_Thp")){
	unidade2 = "Mbps";
	}else	{
	unidade2 = "%";
	}
	}

	if((autorization3 == true) && (vis_q3.style.display == "inline-block")){
	if ((kpi3 == "Ps_R99_Dl") || (kpi3 == "Ps_R99_Ul") || (kpi3 == "Data_Hsdpa") || (kpi3 == "Data_Hsupa") || (kpi3 == "Downlink_Traffic_Volume") || (kpi3 == "Uplink_Traffic_Volume")  || (kpi3 == "Sdcch_Traffic") || (kpi3 == "Tch_Traffic_Fr") || (kpi3 == "Tch_Traffic_Hr")){
	unidade3 = "GB";
	}else
	if((kpi3 == "Hsdpa_Users") || (kpi3 == "Hsupa_Users") || (kpi3 == "Ps_Nonhs_Users") || (kpi3 == "Dch_Users") || (kpi3 == "Pch_Users") || (kpi3 == "Fach_Users") || (kpi3 == "Average_User_Volume") || (kpi3 == "Average_User_Volume_1800") || (kpi3 == "Average_User_Volume_2600") || (kpi3 == "Average_User_Volume_2cc") || (kpi3 == "Average_User_Volume_700") || (kpi3 == "Average_User_Volume_3cc")){
	unidade3 = "Users";
	}else
	if((kpi3 == "Thp_Hsdpa") || (kpi3 == "Thp_Hsupa")){
	unidade3 = "Kbps";
	}else
	if((kpi3 == "Rtwp") || (kpi3 == "Interference") || (kpi3 == "Interference_1800") || (kpi3 == "Interference_2600") || (kpi3 == "Interference_700")){
	unidade3 = "dBm";
	}else
	if((kpi3 == "Cell_Downlink_Avg_Thp") || (kpi3 == "Cell_Downlink_Avg_Thp_1800") || (kpi3 == "Cell_Downlink_Avg_Thp_2600") || (kpi3 == "Cell_Downlink_Avg_Thp_700") || (kpi3 == "Cell_Downlink_Avg_Thp_Ca") || (kpi3 == "Cell_Uplink_Avg_Thp") || (kpi3 == "Cell_Uplink_Avg_Thp_1800") || (kpi3 == "Cell_Uplink_Avg_Thp_2600") || (kpi3 == "Cell_Uplink_Avg_Thp_700") || (kpi3 == "Rb_Cell_Downlink_Avg_Thp") || (kpi3 == "Rb_Cell_Uplink_Avg_Thp") || (kpi3 == "Weighted_Thp")){
	unidade3 = "Mbps";
	}else	{
	unidade3 = "%";
	}
	}

	if((autorization4 == true) && (vis_q4.style.display == "inline-block")){
	if ((kpi4 == "Ps_R99_Dl") || (kpi4 == "Ps_R99_Ul") || (kpi4 == "Data_Hsdpa") || (kpi4 == "Data_Hsupa") || (kpi4 == "Downlink_Traffic_Volume") || (kpi4 == "Uplink_Traffic_Volume")  || (kpi4 == "Sdcch_Traffic") || (kpi4 == "Tch_Traffic_Fr") || (kpi4 == "Tch_Traffic_Hr")){
	unidade4 = "GB";
	}else
	if((kpi4 == "Hsdpa_Users") || (kpi4 == "Hsupa_Users") || (kpi4 == "Ps_Nonhs_Users") || (kpi4 == "Dch_Users") || (kpi4 == "Pch_Users") || (kpi4 == "Fach_Users") || (kpi4 == "Average_User_Volume") || (kpi4 == "Average_User_Volume_1800") || (kpi4 == "Average_User_Volume_2600") || (kpi4 == "Average_User_Volume_2cc") || (kpi4 == "Average_User_Volume_700") || (kpi4 == "Average_User_Volume_3cc")){
	unidade4 = "Users";
	}else
	if((kpi4 == "Thp_Hsdpa") || (kpi4 == "Thp_Hsupa")){
	unidade4 = "Kbps";
	}else
	if((kpi4 == "Rtwp") || (kpi4 == "Interference") || (kpi4 == "Interference_1800") || (kpi4 == "Interference_2600") || (kpi4 == "Interference_700")){
	unidade4 = "dBm";
	}else
	if((kpi4 == "Cell_Downlink_Avg_Thp") || (kpi4 == "Cell_Downlink_Avg_Thp_1800") || (kpi4 == "Cell_Downlink_Avg_Thp_2600") || (kpi4 == "Cell_Downlink_Avg_Thp_700") || (kpi4 == "Cell_Downlink_Avg_Thp_Ca") || (kpi4 == "Cell_Uplink_Avg_Thp") || (kpi4 == "Cell_Uplink_Avg_Thp_1800") || (kpi4 == "Cell_Uplink_Avg_Thp_2600") || (kpi4 == "Cell_Uplink_Avg_Thp_700") || (kpi4 == "Rb_Cell_Downlink_Avg_Thp") || (kpi4 == "Rb_Cell_Uplink_Avg_Thp") || (kpi4 == "Weighted_Thp")){
	unidade4 = "Mbps";
	}else	{
	unidade4 = "%";
	}
	}

	if((autorization5 == true) && (vis_q5.style.display == "inline-block")){
	if ((kpi5 == "Ps_R99_Dl") || (kpi5 == "Ps_R99_Ul") || (kpi5 == "Data_Hsdpa") || (kpi5 == "Data_Hsupa") || (kpi5 == "Downlink_Traffic_Volume") || (kpi5 == "Uplink_Traffic_Volume")  || (kpi5 == "Sdcch_Traffic") || (kpi5 == "Tch_Traffic_Fr") || (kpi5 == "Tch_Traffic_Hr")){
	unidade5 = "GB";
	}else
	if((kpi5 == "Hsdpa_Users") || (kpi5 == "Hsupa_Users") || (kpi5 == "Ps_Nonhs_Users") || (kpi5 == "Dch_Users") || (kpi5 == "Pch_Users") || (kpi5 == "Fach_Users") || (kpi5 == "Average_User_Volume") || (kpi5 == "Average_User_Volume_1800") || (kpi5 == "Average_User_Volume_2600") || (kpi5 == "Average_User_Volume_2cc") || (kpi5 == "Average_User_Volume_700") || (kpi5 == "Average_User_Volume_3cc")){
	unidade5 = "Users";
	}else
	if((kpi5 == "Thp_Hsdpa") || (kpi5 == "Thp_Hsupa")){
	unidade5 = "Kbps";
	}else
	if((kpi5 == "Rtwp") || (kpi5 == "Interference") || (kpi5 == "Interference_1800") || (kpi5 == "Interference_2600") || (kpi5 == "Interference_700")){
	unidade5 = "dBm";
	}else
	if((kpi5 == "Cell_Downlink_Avg_Thp") || (kpi5 == "Cell_Downlink_Avg_Thp_1800") || (kpi5 == "Cell_Downlink_Avg_Thp_2600") || (kpi5 == "Cell_Downlink_Avg_Thp_700") || (kpi5 == "Cell_Downlink_Avg_Thp_Ca") || (kpi5 == "Cell_Uplink_Avg_Thp") || (kpi5 == "Cell_Uplink_Avg_Thp_1800") || (kpi5 == "Cell_Uplink_Avg_Thp_2600") || (kpi5 == "Cell_Uplink_Avg_Thp_700") || (kpi5 == "Rb_Cell_Downlink_Avg_Thp") || (kpi5 == "Rb_Cell_Uplink_Avg_Thp") || (kpi5 == "Weighted_Thp")){
	unidade5 = "Mbps";
	}else	{
	unidade5 = "%";
	}
	}

	if((autorization6 == true) && (vis_q6.style.display == "inline-block")){
	if ((kpi6 == "Ps_R99_Dl") || (kpi6 == "Ps_R99_Ul") || (kpi6 == "Data_Hsdpa") || (kpi6 == "Data_Hsupa") || (kpi6 == "Downlink_Traffic_Volume") || (kpi6 == "Uplink_Traffic_Volume")  || (kpi6 == "Sdcch_Traffic") || (kpi6 == "Tch_Traffic_Fr") || (kpi6 == "Tch_Traffic_Hr")){
	unidade6 = "GB";
	}else
	if((kpi6 == "Hsdpa_Users") || (kpi6 == "Hsupa_Users") || (kpi6 == "Ps_Nonhs_Users") || (kpi6 == "Dch_Users") || (kpi6 == "Pch_Users") || (kpi6 == "Fach_Users") || (kpi6 == "Average_User_Volume") || (kpi6 == "Average_User_Volume_1800") || (kpi6 == "Average_User_Volume_2600") || (kpi6 == "Average_User_Volume_2cc") || (kpi6 == "Average_User_Volume_700") || (kpi6 == "Average_User_Volume_3cc")){
	unidade6= "Users";
	}else
	if((kpi6 == "Thp_Hsdpa") || (kpi6 == "Thp_Hsupa")){
	unidade6 = "Kbps";
	}else
	if((kpi6 == "Rtwp") || (kpi6 == "Interference") || (kpi6 == "Interference_1800") || (kpi6 == "Interference_2600") || (kpi6 == "Interference_700")){
	unidade6 = "dBm";
	}else
	if((kpi6 == "Cell_Downlink_Avg_Thp") || (kpi6 == "Cell_Downlink_Avg_Thp_1800") || (kpi6 == "Cell_Downlink_Avg_Thp_2600") || (kpi6 == "Cell_Downlink_Avg_Thp_700") || (kpi6 == "Cell_Downlink_Avg_Thp_Ca") || (kpi6 == "Cell_Uplink_Avg_Thp") || (kpi6 == "Cell_Uplink_Avg_Thp_1800") || (kpi6 == "Cell_Uplink_Avg_Thp_2600") || (kpi6 == "Cell_Uplink_Avg_Thp_700") || (kpi6 == "Rb_Cell_Downlink_Avg_Thp") || (kpi6 == "Rb_Cell_Uplink_Avg_Thp") || (kpi6 == "Weighted_Thp")){
	unidade6 = "Mbps";
	}else	{
	unidade6 = "%";
	}
	}

	if((autorization7 == true) && (vis_q7.style.display == "inline-block")){
	if ((kpi7 == "Ps_R99_Dl") || (kpi7 == "Ps_R99_Ul") || (kpi7 == "Data_Hsdpa") || (kpi7 == "Data_Hsupa") || (kpi7 == "Downlink_Traffic_Volume") || (kpi7 == "Uplink_Traffic_Volume")  || (kpi7 == "Sdcch_Traffic") || (kpi7 == "Tch_Traffic_Fr") || (kpi7 == "Tch_Traffic_Hr")){
	unidade7 = "GB";
	}else
	if((kpi7 == "Hsdpa_Users") || (kpi7 == "Hsupa_Users") || (kpi7 == "Ps_Nonhs_Users") || (kpi7 == "Dch_Users") || (kpi7 == "Pch_Users") || (kpi7 == "Fach_Users") || (kpi7 == "Average_User_Volume") || (kpi7 == "Average_User_Volume_1800") || (kpi7 == "Average_User_Volume_2600") || (kpi7 == "Average_User_Volume_2cc") || (kpi7 == "Average_User_Volume_700") || (kpi7 == "Average_User_Volume_3cc")){
	unidade7= "Users";
	}else
	if((kpi7 == "Thp_Hsdpa") || (kpi7 == "Thp_Hsupa")){
	unidade7 = "Kbps";
	}else
	if((kpi7 == "Rtwp") || (kpi7 == "Interference") || (kpi7 == "Interference_1800") || (kpi7 == "Interference_2600") || (kpi7 == "Interference_700")){
	unidade7 = "dBm";
	}else
	if((kpi7 == "Cell_Downlink_Avg_Thp") || (kpi7 == "Cell_Downlink_Avg_Thp_1800") || (kpi7 == "Cell_Downlink_Avg_Thp_2600") || (kpi7 == "Cell_Downlink_Avg_Thp_700") || (kpi7 == "Cell_Downlink_Avg_Thp_Ca") || (kpi7 == "Cell_Uplink_Avg_Thp") || (kpi7 == "Cell_Uplink_Avg_Thp_1800") || (kpi7 == "Cell_Uplink_Avg_Thp_2600") || (kpi7 == "Cell_Uplink_Avg_Thp_700") || (kpi7 == "Rb_Cell_Downlink_Avg_Thp") || (kpi7 == "Rb_Cell_Uplink_Avg_Thp") || (kpi7 == "Weighted_Thp")){
	unidade7 = "Mbps";
	}else	{
	unidade7 = "%";
	}
	}

	if((autorization8 == true) && (vis_q8.style.display == "inline-block")){
	if ((kpi8 == "Ps_R99_Dl") || (kpi8 == "Ps_R99_Ul") || (kpi8 == "Data_Hsdpa") || (kpi8 == "Data_Hsupa") || (kpi8 == "Downlink_Traffic_Volume") || (kpi8 == "Uplink_Traffic_Volume")  || (kpi8 == "Sdcch_Traffic") || (kpi8 == "Tch_Traffic_Fr") || (kpi8 == "Tch_Traffic_Hr")){
	unidade8 = "GB";
	}else
	if((kpi8 == "Hsdpa_Users") || (kpi8 == "Hsupa_Users") || (kpi8 == "Ps_Nonhs_Users") || (kpi8 == "Dch_Users") || (kpi8 == "Pch_Users") || (kpi8 == "Fach_Users") || (kpi8 == "Average_User_Volume") || (kpi8 == "Average_User_Volume_1800") || (kpi8 == "Average_User_Volume_2600") || (kpi8 == "Average_User_Volume_2cc") || (kpi8 == "Average_User_Volume_700") || (kpi8 == "Average_User_Volume_3cc")){
	unidade8= "Users";
	}else
	if((kpi8 == "Thp_Hsdpa") || (kpi8 == "Thp_Hsupa")){
	unidade8 = "Kbps";
	}else
	if((kpi8 == "Rtwp") || (kpi8 == "Interference") || (kpi8 == "Interference_1800") || (kpi8 == "Interference_2600") || (kpi8 == "Interference_700")){
	unidade8 = "dBm";
	}else
	if((kpi8 == "Cell_Downlink_Avg_Thp") || (kpi8 == "Cell_Downlink_Avg_Thp_1800") || (kpi8 == "Cell_Downlink_Avg_Thp_2600") || (kpi8 == "Cell_Downlink_Avg_Thp_700") || (kpi8 == "Cell_Downlink_Avg_Thp_Ca") || (kpi8 == "Cell_Uplink_Avg_Thp") || (kpi8 == "Cell_Uplink_Avg_Thp_1800") || (kpi8 == "Cell_Uplink_Avg_Thp_2600") || (kpi8 == "Cell_Uplink_Avg_Thp_700") || (kpi8 == "Rb_Cell_Downlink_Avg_Thp") || (kpi8 == "Rb_Cell_Uplink_Avg_Thp") || (kpi8 == "Weighted_Thp")){
	unidade8 = "Mbps";
	}else	{
	unidade8 = "%";
	}
	}

	if((autorization9 == true) && (vis_q9.style.display == "inline-block")){
	if ((kpi9 == "Ps_R99_Dl") || (kpi9 == "Ps_R99_Ul") || (kpi9 == "Data_Hsdpa") || (kpi9 == "Data_Hsupa") || (kpi9 == "Downlink_Traffic_Volume") || (kpi9 == "Uplink_Traffic_Volume")  || (kpi9 == "Sdcch_Traffic") || (kpi9 == "Tch_Traffic_Fr") || (kpi9 == "Tch_Traffic_Hr")){
	unidade9 = "GB";
	}else
	if((kpi9 == "Hsdpa_Users") || (kpi9 == "Hsupa_Users") || (kpi9 == "Ps_Nonhs_Users") || (kpi9 == "Dch_Users") || (kpi9 == "Pch_Users") || (kpi9 == "Fach_Users") || (kpi9 == "Average_User_Volume") || (kpi9 == "Average_User_Volume_1800") || (kpi9 == "Average_User_Volume_2600") || (kpi9 == "Average_User_Volume_2cc") || (kpi9 == "Average_User_Volume_700") || (kpi9 == "Average_User_Volume_3cc")){
	unidade9= "Users";
	}else
	if((kpi9 == "Thp_Hsdpa") || (kpi9 == "Thp_Hsupa")){
	unidade9 = "Kbps";
	}else
	if((kpi9 == "Rtwp") || (kpi9 == "Interference") || (kpi9 == "Interference_1800") || (kpi9 == "Interference_2600") || (kpi9 == "Interference_700")){
	unidade9 = "dBm";
	}else
	if((kpi9 == "Cell_Downlink_Avg_Thp") || (kpi9 == "Cell_Downlink_Avg_Thp_1800") || (kpi9 == "Cell_Downlink_Avg_Thp_2600") || (kpi9 == "Cell_Downlink_Avg_Thp_700") || (kpi9 == "Cell_Downlink_Avg_Thp_Ca") || (kpi9 == "Cell_Uplink_Avg_Thp") || (kpi9 == "Cell_Uplink_Avg_Thp_1800") || (kpi9 == "Cell_Uplink_Avg_Thp_2600") || (kpi9 == "Cell_Uplink_Avg_Thp_700") || (kpi9 == "Rb_Cell_Downlink_Avg_Thp") || (kpi9 == "Rb_Cell_Uplink_Avg_Thp") || (kpi9 == "Weighted_Thp")){
	unidade9 = "Mbps";
	}else	{
	unidade9 = "%";
	}
	}	
	
	if(autorization1 == true){
	document.getElementById("KPI_Texto_Teste1").innerHTML = kpi1;
	document.getElementById("KPI_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("KPI_Texto_Teste2").innerHTML = kpi2;
	document.getElementById("KPI_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("KPI_Texto_Teste3").innerHTML = kpi3;
	document.getElementById("KPI_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("KPI_Texto_Teste4").innerHTML = kpi4;
	document.getElementById("KPI_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("KPI_Texto_Teste5").innerHTML = kpi5;
	document.getElementById("KPI_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("KPI_Texto_Teste6").innerHTML = kpi6;
	document.getElementById("KPI_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("KPI_Texto_Teste7").innerHTML = kpi7;
	document.getElementById("KPI_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("KPI_Texto_Teste8").innerHTML = kpi8;
	document.getElementById("KPI_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("KPI_Texto_Teste9").innerHTML = kpi9;
	document.getElementById("KPI_Seta_9").style.visibility = "visible";
	}	

	auth_change = true;
	
}

$('.btn_info_counter_gsm').click(function(node){

btn_info_gsm = true;
	
});

function printclick_counter_GSM(node){
	
	if(periodo != "hourly"){
	estado = 2;
	contador = "GSM";
	
	counter_name = $(node).find('span:eq(0)').text();
	counter_aggregation = $(node).attr("id");
	table_name = $(node).attr("value");
	
	if(btn_info_gsm == true){
	var index = $(node).index();
    // $('#myUL_GSM input:radio').eq(index).prop('checked', true);
	
	var p = $( "#myUL_KPI_GSM input:radio" ).eq(index);
	var position = p.position();
	var y = (position.top) - 20;
	var text_info = $(node).find('span:eq(1)').text();
	if(text_info == ""){
	text_info = "No information for this Counter";
	}
	
	document.getElementById("info_counter").style.top = y+"px";
	document.getElementById("info_counter").style.right = "30%";
	document.getElementById("info_text").textContent = text_info;
	document.getElementById("info_counter").style.display = "block";
	btn_info_gsm = false;
	}
	
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	kpi1 = counter_name;
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	kpi2 = counter_name;
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	kpi3 = counter_name;
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	kpi4 = counter_name;
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	kpi5 = counter_name;
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	kpi6 = counter_name;
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	kpi7 = counter_name;
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	kpi8 = counter_name;
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	kpi9 = counter_name;
	}	
			
	if(autorization1 == true){
	document.getElementById("KPI_Texto_Teste1").innerHTML = counter_name;
	document.getElementById("KPI_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("KPI_Texto_Teste2").innerHTML = counter_name;
	document.getElementById("KPI_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("KPI_Texto_Teste3").innerHTML = counter_name;
	document.getElementById("KPI_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("KPI_Texto_Teste4").innerHTML = counter_name;
	document.getElementById("KPI_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("KPI_Texto_Teste5").innerHTML = counter_name;
	document.getElementById("KPI_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("KPI_Texto_Teste6").innerHTML = counter_name;
	document.getElementById("KPI_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("KPI_Texto_Teste7").innerHTML = counter_name;
	document.getElementById("KPI_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("KPI_Texto_Teste8").innerHTML = counter_name;
	document.getElementById("KPI_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("KPI_Texto_Teste9").innerHTML = counter_name;
	document.getElementById("KPI_Seta_9").style.visibility = "visible";
	}	

	auth_change = true;
	}else if(periodo == "hourly"){
	alert("The QuickReport doesn't support hourly period to Counter Information. Please change the period for Daily, Weekly or Monthly to continue.");	
	}	
}

$('.btn_info_counter_umts').click(function(node){

btn_info_umts = true;
	
});

function printclick_counter_UMTS(node){
	
	if(periodo != "hourly"){
	estado = 2;
	contador = "UMTS";
	
	counter_name = $(node).find('span:eq(0)').text();
	counter_aggregation = $(node).attr("id");
	table_name = $(node).attr("value");
	
	if(btn_info_umts == true){
	var index = $(node).index();
    // $('#myUL_GSM input:radio').eq(index).prop('checked', true);
	
	var p = $( "#myUL_KPI_UMTS input:radio" ).eq(index);
	var position = p.position();
	var y = (position.top) - 20;
	var text_info = $(node).find('span:eq(1)').text();
	if(text_info == ""){
	text_info = "No information for this Counter";
	}
	
	document.getElementById("info_counter").style.top = y+"px";
	document.getElementById("info_counter").style.right = "30%";
	document.getElementById("info_text").textContent = text_info;
	document.getElementById("info_counter").style.display = "block";
	btn_info_umts = false;
	}
	
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	kpi1 = counter_name;
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	kpi2 = counter_name;
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	kpi3 = counter_name;
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	kpi4 = counter_name;
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	kpi5 = counter_name;
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	kpi6 = counter_name;
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	kpi7 = counter_name;
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	kpi8 = counter_name;
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	kpi9 = counter_name;
	}	
	

	if(autorization1 == true){
	document.getElementById("KPI_Texto_Teste1").innerHTML = counter_name;
	document.getElementById("KPI_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("KPI_Texto_Teste2").innerHTML = counter_name;
	document.getElementById("KPI_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("KPI_Texto_Teste3").innerHTML = counter_name;
	document.getElementById("KPI_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("KPI_Texto_Teste4").innerHTML = counter_name;
	document.getElementById("KPI_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("KPI_Texto_Teste5").innerHTML = counter_name;
	document.getElementById("KPI_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("KPI_Texto_Teste6").innerHTML = counter_name;
	document.getElementById("KPI_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("KPI_Texto_Teste7").innerHTML = counter_name;
	document.getElementById("KPI_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("KPI_Texto_Teste8").innerHTML = counter_name;
	document.getElementById("KPI_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("KPI_Texto_Teste9").innerHTML = counter_name;
	document.getElementById("KPI_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;
	
	query_aux = "SELECT attname FROM pg_attribute WHERE attrelid = (SELECT oid FROM pg_class WHERE relname = 'fss_"+table_name+"_daily') AND attname = 'rnc'";
	
	showContador();
	
	}else if(periodo == "hourly"){
	alert("The QuickReport doesn't support hourly period to Counter Information. Please change the period for Daily, Weekly or Monthly to continue.");	
	}	
}

function printclick_NQI(node){
	
	estado = 3;
	// contador = "UMTS";
	
	nqi_name = $(node).text();
	
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	kpi1 = nqi_name;
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	kpi2 = nqi_name;
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	kpi3 = nqi_name;
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	kpi4 = nqi_name;
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	kpi5 = nqi_name;
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	kpi6 = nqi_name;
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	kpi7 = nqi_name;
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	kpi8 = nqi_name;
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	kpi9 = nqi_name;
	}	

	if(autorization1 == true){
	document.getElementById("KPI_Texto_Teste1").innerHTML = nqi_name;
	document.getElementById("KPI_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("KPI_Texto_Teste2").innerHTML = nqi_name;
	document.getElementById("KPI_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("KPI_Texto_Teste3").innerHTML = nqi_name;
	document.getElementById("KPI_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("KPI_Texto_Teste4").innerHTML = nqi_name;
	document.getElementById("KPI_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("KPI_Texto_Teste5").innerHTML = nqi_name;
	document.getElementById("KPI_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("KPI_Texto_Teste6").innerHTML = nqi_name;
	document.getElementById("KPI_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("KPI_Texto_Teste7").innerHTML = nqi_name;
	document.getElementById("KPI_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("KPI_Texto_Teste8").innerHTML = nqi_name;
	document.getElementById("KPI_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("KPI_Texto_Teste9").innerHTML = nqi_name;
	document.getElementById("KPI_Seta_9").style.visibility = "visible";
	}	
	
	auth_change = true;
	
}

$('.btn_info_counter_lte').click(function(node){

btn_info_lte = true;
	
});	

function printclick_counter_LTE(node){
	
	if(periodo != "hourly"){
	estado = 2;
	contador = "LTE";
	
	counter_name = $(node).find('span:eq(0)').text();
	counter_aggregation = $(node).attr("id");
	table_name = $(node).attr("value");
	
	if(btn_info_lte == true){
	var index = $(node).index();
    // $('#myUL_GSM input:radio').eq(index).prop('checked', true);
	
	var p = $( "#myUL_KPI_LTE input:radio" ).eq(index);
	var position = p.position();
	var y = (position.top) - 20;
	var text_info = $(node).find('span:eq(1)').text();
	if(text_info == ""){
	text_info = "No information for this Counter";
	}
	
	document.getElementById("info_counter").style.top = y+"px";
	document.getElementById("info_counter").style.right = "30%";
	document.getElementById("info_text").textContent = text_info;
	document.getElementById("info_counter").style.display = "block";
	btn_info_lte = false;
	}
	
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	kpi1 = counter_name;
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	kpi2 = counter_name;
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	kpi3 = counter_name;
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	kpi4 = counter_name;
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	kpi5 = counter_name;
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	kpi6 = counter_name;
	}
	if(((vis_q7.style.display == "inline-block") && (autorization7 == true)) || slider == true){
	kpi7 = counter_name;
	}
	if(((vis_q8.style.display == "inline-block") && (autorization8 == true)) || slider == true){
	kpi8 = counter_name;
	}
	if(((vis_q9.style.display == "inline-block") && (autorization9 == true)) || slider == true){
	kpi9 = counter_name;
	}	
		
	if(autorization1 == true){
	document.getElementById("KPI_Texto_Teste1").innerHTML = counter_name;
	document.getElementById("KPI_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("KPI_Texto_Teste2").innerHTML = counter_name;
	document.getElementById("KPI_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("KPI_Texto_Teste3").innerHTML = counter_name;
	document.getElementById("KPI_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("KPI_Texto_Teste4").innerHTML = counter_name;
	document.getElementById("KPI_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("KPI_Texto_Teste5").innerHTML = counter_name;
	document.getElementById("KPI_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("KPI_Texto_Teste6").innerHTML = counter_name;
	document.getElementById("KPI_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("KPI_Texto_Teste7").innerHTML = counter_name;
	document.getElementById("KPI_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("KPI_Texto_Teste8").innerHTML = counter_name;
	document.getElementById("KPI_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("KPI_Texto_Teste9").innerHTML = counter_name;
	document.getElementById("KPI_Seta_9").style.visibility = "visible";
	}	

	auth_change = true;
	}else if(periodo == "hourly"){
	alert("The QuickReport doesn't support hourly period to Counter Information. Please change the period for Daily, Weekly or Monthly to continue.");		
	}	
}

function printclick_erlang(node){
	
	if(hourly_selected == true){
	if(familia == "cell"){	
	estado = 4;
	
	if((vis_q1.style.display == "inline-block") || slider == true){
	kpi1 = $(node).text();
	}
	if((vis_q2.style.display == "inline-block") || slider == true){
	kpi2 = $(node).text();
	}
	if((vis_q3.style.display == "inline-block") || slider == true){
	kpi3 = $(node).text();
	}
	if((vis_q4.style.display == "inline-block") || slider == true){
	kpi4 = $(node).text();
	}
	if((vis_q5.style.display == "inline-block") || slider == true){
	kpi5 = $(node).text();
	}
	if((vis_q6.style.display == "inline-block") || slider == true){
	kpi6 = $(node).text();
	}
	if((vis_q7.style.display == "inline-block") || slider == true){
	kpi7 = $(node).text();
	}
	if((vis_q8.style.display == "inline-block") || slider == true){
	kpi8 = $(node).text();
	}
	if((vis_q9.style.display == "inline-block") || slider == true){
	kpi9 = $(node).text();
	}	
	
	if(autorization1 == true){
	document.getElementById("KPI_Texto_Teste1").innerHTML = kpi1;
	document.getElementById("KPI_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("KPI_Texto_Teste2").innerHTML = kpi2;
	document.getElementById("KPI_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("KPI_Texto_Teste3").innerHTML = kpi3;
	document.getElementById("KPI_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("KPI_Texto_Teste4").innerHTML = kpi4;
	document.getElementById("KPI_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("KPI_Texto_Teste5").innerHTML = kpi5;
	document.getElementById("KPI_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("KPI_Texto_Teste6").innerHTML = kpi6;
	document.getElementById("KPI_Seta_6").style.visibility = "visible";
	}
	if(autorization7 == true){
	document.getElementById("KPI_Texto_Teste7").innerHTML = kpi7;
	document.getElementById("KPI_Seta_7").style.visibility = "visible";
	}
	if(autorization8 == true){
	document.getElementById("KPI_Texto_Teste8").innerHTML = kpi8;
	document.getElementById("KPI_Seta_8").style.visibility = "visible";
	}
	if(autorization9 == true){
	document.getElementById("KPI_Texto_Teste9").innerHTML = kpi9;
	document.getElementById("KPI_Seta_9").style.visibility = "visible";
	}	

	auth_change = true;
	}else{
	alert("The Voice Erlang Equivalent KPI only support Cell Information, please change the element to yours respective cells to check the Eralng Equivalent.");	
	}	
	}else {	
	alert("The Voice Erlang Equivalent KPI only support Hourly Period, please change the Period to hourly or change the KPI.");
	}	
		
}	

function add_line(){

var vis_q1 = document.getElementById("Query1");
var vis_q2 = document.getElementById("Query2");
var vis_q3 = document.getElementById("Query3");
var vis_q4 = document.getElementById("Query4");
var vis_q5 = document.getElementById("Query5");
var vis_q6 = document.getElementById("Query6");
var vis_q7 = document.getElementById("Query7");
var vis_q8 = document.getElementById("Query8");
var vis_q9 = document.getElementById("Query9");

var vis_qm1 = document.getElementById("Query_Menu1");
var vis_qm2 = document.getElementById("Query_Menu2");
var vis_qm3 = document.getElementById("Query_Menu3");
var vis_qm4 = document.getElementById("Query_Menu4");
var vis_qm5 = document.getElementById("Query_Menu5");
var vis_qm6 = document.getElementById("Query_Menu6");
var vis_qm7 = document.getElementById("Query_Menu7");
var vis_qm8 = document.getElementById("Query_Menu8");
var vis_qm9 = document.getElementById("Query_Menu9");

var vis_btnconf1 = document.getElementById("btn_confirm1");
var vis_btnconf2 = document.getElementById("btn_confirm2");
var vis_btnconf3 = document.getElementById("btn_confirm3");
var vis_btnconf4 = document.getElementById("btn_confirm4");
var vis_btnconf5 = document.getElementById("btn_confirm5");
var vis_btnconf6 = document.getElementById("btn_confirm6");
var vis_btnconf7 = document.getElementById("btn_confirm7");
var vis_btnconf8 = document.getElementById("btn_confirm8");
var vis_btnconf9 = document.getElementById("btn_confirm9");

var opa_qm1 = document.getElementById("Query_Menu1");
var opa_qm2 = document.getElementById("Query_Menu2");
var opa_qm3 = document.getElementById("Query_Menu3");
var opa_qm4 = document.getElementById("Query_Menu4");
var opa_qm5 = document.getElementById("Query_Menu5");
var opa_qm6 = document.getElementById("Query_Menu6");
var opa_qm7 = document.getElementById("Query_Menu7");
var opa_qm8 = document.getElementById("Query_Menu8");
var opa_qm9 = document.getElementById("Query_Menu9");

var txt_tec1 = document.getElementById("Tecnologia_Texto_Teste1");
var txt_tec2 = document.getElementById("Tecnologia_Texto_Teste2");
var txt_tec3 = document.getElementById("Tecnologia_Texto_Teste3");
var txt_tec4 = document.getElementById("Tecnologia_Texto_Teste4");
var txt_tec5 = document.getElementById("Tecnologia_Texto_Teste5");
var txt_tec6 = document.getElementById("Tecnologia_Texto_Teste6");
var txt_tec7 = document.getElementById("Tecnologia_Texto_Teste7");
var txt_tec8 = document.getElementById("Tecnologia_Texto_Teste8");
var txt_tec9 = document.getElementById("Tecnologia_Texto_Teste9");

var txt_ele1 = document.getElementById("Elemento_Texto_Teste1");
var txt_ele2 = document.getElementById("Elemento_Texto_Teste2");
var txt_ele3 = document.getElementById("Elemento_Texto_Teste3");
var txt_ele4 = document.getElementById("Elemento_Texto_Teste4");
var txt_ele5 = document.getElementById("Elemento_Texto_Teste5");
var txt_ele6 = document.getElementById("Elemento_Texto_Teste6");
var txt_ele7 = document.getElementById("Elemento_Texto_Teste7");
var txt_ele8 = document.getElementById("Elemento_Texto_Teste8");
var txt_ele9 = document.getElementById("Elemento_Texto_Teste9");

var txt_kpi1 = document.getElementById("KPI_Texto_Teste1");
var txt_kpi2 = document.getElementById("KPI_Texto_Teste2");
var txt_kpi3 = document.getElementById("KPI_Texto_Teste3");
var txt_kpi4 = document.getElementById("KPI_Texto_Teste4");
var txt_kpi5 = document.getElementById("KPI_Texto_Teste5");
var txt_kpi6 = document.getElementById("KPI_Texto_Teste6");
var txt_kpi7 = document.getElementById("KPI_Texto_Teste7");
var txt_kpi8 = document.getElementById("KPI_Texto_Teste8");
var txt_kpi9 = document.getElementById("KPI_Texto_Teste9");

var vis_seta_tec1 = document.getElementById("Tecnologia_Seta_1");
var vis_seta_tec2 = document.getElementById("Tecnologia_Seta_2");
var vis_seta_tec3 = document.getElementById("Tecnologia_Seta_3");
var vis_seta_tec4 = document.getElementById("Tecnologia_Seta_4");
var vis_seta_tec5 = document.getElementById("Tecnologia_Seta_5");
var vis_seta_tec6 = document.getElementById("Tecnologia_Seta_6");
var vis_seta_tec7 = document.getElementById("Tecnologia_Seta_7");
var vis_seta_tec8 = document.getElementById("Tecnologia_Seta_8");
var vis_seta_tec9 = document.getElementById("Tecnologia_Seta_9");

var vis_seta_ele1 = document.getElementById("Elemento_Seta_1");
var vis_seta_ele2 = document.getElementById("Elemento_Seta_2");
var vis_seta_ele3 = document.getElementById("Elemento_Seta_3");
var vis_seta_ele4 = document.getElementById("Elemento_Seta_4");
var vis_seta_ele5 = document.getElementById("Elemento_Seta_5");
var vis_seta_ele6 = document.getElementById("Elemento_Seta_6");
var vis_seta_ele7 = document.getElementById("Elemento_Seta_7");
var vis_seta_ele8 = document.getElementById("Elemento_Seta_8");
var vis_seta_ele9 = document.getElementById("Elemento_Seta_9");

var vis_seta_kpi1 = document.getElementById("KPI_Seta_1");
var vis_seta_kpi2 = document.getElementById("KPI_Seta_2");
var vis_seta_kpi3 = document.getElementById("KPI_Seta_3");
var vis_seta_kpi4 = document.getElementById("KPI_Seta_4");
var vis_seta_kpi5 = document.getElementById("KPI_Seta_5");
var vis_seta_kpi6 = document.getElementById("KPI_Seta_6");
var vis_seta_kpi7 = document.getElementById("KPI_Seta_7");
var vis_seta_kpi8 = document.getElementById("KPI_Seta_8");
var vis_seta_kpi9 = document.getElementById("KPI_Seta_9");

if(vis_q1.style.display == "none"){
vis_q1.style.display = "inline-block";
vis_qm1.style.display = "inline-block";
$("#radio_query1").prop("checked", true);
vis_btnconf1.style.visibility = "visible";
opa_qm1.style.opacity = 1;
document.getElementById("chart_type1").disabled = false;
document.getElementById("chart_position1").disabled = false;
autorization1 = true;	
} else	
if(vis_q2.style.display == "none"){
vis_q2.style.display = "inline-block";
vis_qm2.style.display = "inline-block";
$("#radio_query2").prop("checked", true);
vis_btnconf2.style.visibility = "visible";
opa_qm2.style.opacity = 1;
if(tecnologia1 != ""){
tecnologia2 = tecnologia1;
txt_tec2.innerHTML = txt_tec1.innerHTML;
vis_seta_tec2.style.visibility = "visible";
}
if(elemento1 != ""){
elemento2 = elemento1;
txt_ele2.innerHTML = txt_ele1.innerHTML;
family[2] = family[1];
vis_seta_ele2.style.visibility = "visible";
}
if(kpi1 != ""){
kpi2 = kpi1;
txt_kpi2.innerHTML = txt_kpi1.innerHTML;
vis_seta_kpi2.style.visibility = "visible";
}
document.getElementById("chart_type2").disabled = false;
document.getElementById("chart_position2").disabled = false;	
autorization2 = true;		
} else
if(vis_q3.style.display == "none"){
vis_q3.style.display = "inline-block";
vis_qm3.style.display = "inline-block";
$("#radio_query3").prop("checked", true);
vis_btnconf3.style.visibility = "visible";
opa_qm3.style.opacity = 1;
if(tecnologia2 != ""){
tecnologia3 = tecnologia2;
txt_tec3.innerHTML = txt_tec2.innerHTML;
vis_seta_tec3.style.visibility = "visible";
}
if(elemento2 != ""){
elemento3 = elemento2;
txt_ele3.innerHTML = txt_ele2.innerHTML;
family[3] = family[2];
vis_seta_ele3.style.visibility = "visible";
}
if(kpi2 != ""){
kpi3 = kpi2;
txt_kpi3.innerHTML = txt_kpi2.innerHTML;
vis_seta_kpi3.style.visibility = "visible";
}
document.getElementById("chart_type3").disabled = false;
document.getElementById("chart_position3").disabled = false;	
autorization3 = true;		
} else
if(vis_q4.style.display == "none"){
vis_q4.style.display = "inline-block";
vis_qm4.style.display = "inline-block";
$("#radio_query4").prop("checked", true);
vis_btnconf4.style.visibility = "visible";
opa_qm4.style.opacity = 1;
if(tecnologia3 != ""){
tecnologia4 = tecnologia3;
txt_tec4.innerHTML = txt_tec3.innerHTML;
vis_seta_tec4.style.visibility = "visible";
}
if(elemento3 != ""){
elemento4 = elemento3;
txt_ele4.innerHTML = txt_ele3.innerHTML;
family[4] = family[3];
vis_seta_ele4.style.visibility = "visible";
}
if(kpi3 != ""){
kpi4 = kpi3;
txt_kpi4.innerHTML = txt_kpi3.innerHTML;
vis_seta_kpi4.style.visibility = "visible";
}
document.getElementById("chart_type4").disabled = false;
document.getElementById("chart_position4").disabled = false;	
autorization4 = true;			
} else
if(vis_q5.style.display == "none"){
vis_q5.style.display = "inline-block";
vis_qm5.style.display = "inline-block";
$("#radio_query5").prop("checked", true);
vis_btnconf5.style.visibility = "visible";
opa_qm5.style.opacity = 1;
if(tecnologia4 != ""){
tecnologia5 = tecnologia4;
txt_tec5.innerHTML = txt_tec4.innerHTML;
vis_seta_tec5.style.visibility = "visible";
}
if(elemento4 != ""){
elemento5 = elemento4;
txt_ele5.innerHTML = txt_ele4.innerHTML;
family[5] = family[4];
vis_seta_ele5.style.visibility = "visible";
}
if(kpi4 != ""){
kpi5 = kpi4;
txt_kpi5.innerHTML = txt_kpi4.innerHTML;
vis_seta_kpi5.style.visibility = "visible";
}
document.getElementById("chart_type5").disabled = false;
document.getElementById("chart_position5").disabled = false;	
autorization5 = true;			
} else
if(vis_q6.style.display == "none"){
vis_q6.style.display = "inline-block";
vis_qm6.style.display = "inline-block";	
$("#radio_query6").prop("checked", true);
vis_btnconf6.style.visibility = "visible";
opa_qm6.style.opacity = 1;
if(tecnologia5 != ""){
tecnologia6 = tecnologia5;
txt_tec6.innerHTML = txt_tec5.innerHTML;
vis_seta_tec6.style.visibility = "visible";
}
if(elemento5 != ""){
elemento6 = elemento5;
txt_ele6.innerHTML = txt_ele5.innerHTML;
family[6] = family[5];
vis_seta_ele6.style.visibility = "visible";
}
if(kpi5 != ""){
kpi6 = kpi5;
txt_kpi6.innerHTML = txt_kpi5.innerHTML;
vis_seta_kpi6.style.visibility = "visible";
}
document.getElementById("chart_type6").disabled = false;
document.getElementById("chart_position6").disabled = false;
autorization6 = true;		
}else
if(vis_q7.style.display == "none"){
vis_q7.style.display = "inline-block";
vis_qm7.style.display = "inline-block";	
$("#radio_query7").prop("checked", true);
vis_btnconf7.style.visibility = "visible";
opa_qm7.style.opacity = 1;
if(tecnologia6 != ""){
tecnologia7 = tecnologia6;
txt_tec7.innerHTML = txt_tec6.innerHTML;
vis_seta_tec7.style.visibility = "visible";
}
if(elemento6 != ""){
elemento7 = elemento6;
txt_ele7.innerHTML = txt_ele6.innerHTML;
family[7] = family[6];
vis_seta_ele7.style.visibility = "visible";
}
if(kpi6 != ""){
kpi7 = kpi6;
txt_kpi7.innerHTML = txt_kpi6.innerHTML;
vis_seta_kpi7.style.visibility = "visible";
}
document.getElementById("chart_type7").disabled = false;
document.getElementById("chart_position7").disabled = false;
autorization7 = true;		
}else
if(vis_q8.style.display == "none"){
vis_q8.style.display = "inline-block";
vis_qm8.style.display = "inline-block";	
$("#radio_query8").prop("checked", true);
vis_btnconf8.style.visibility = "visible";
opa_qm8.style.opacity = 1;
if(tecnologia7 != ""){
tecnologia8 = tecnologia7;
txt_tec8.innerHTML = txt_tec7.innerHTML;
vis_seta_tec8.style.visibility = "visible";
}
if(elemento7 != ""){
elemento8 = elemento7;
txt_ele8.innerHTML = txt_ele7.innerHTML;
family[8] = family[7];
vis_seta_ele8.style.visibility = "visible";
}
if(kpi7 != ""){
kpi8 = kpi7;
txt_kpi8.innerHTML = txt_kpi7.innerHTML;
vis_seta_kpi8.style.visibility = "visible";
}
document.getElementById("chart_type8").disabled = false;
document.getElementById("chart_position8").disabled = false;
autorization8 = true;		
}else
if(vis_q9.style.display == "none"){
vis_q9.style.display = "inline-block";
vis_qm9.style.display = "inline-block";	
$("#radio_query9").prop("checked", true);
vis_btnconf9.style.visibility = "visible";
opa_qm9.style.opacity = 1;
if(tecnologia8 != ""){
tecnologia9 = tecnologia8;
txt_tec9.innerHTML = txt_tec8.innerHTML;
vis_seta_tec9.style.visibility = "visible";
}
if(elemento8 != ""){
elemento9 = elemento8;
txt_ele9.innerHTML = txt_ele8.innerHTML;
family[9] = family[8];
vis_seta_ele9.style.visibility = "visible";
}
if(kpi8 != ""){
kpi9 = kpi8;
txt_kpi9.innerHTML = txt_kpi8.innerHTML;
vis_seta_kpi9.style.visibility = "visible";
}
document.getElementById("chart_type9").disabled = false;
document.getElementById("chart_position9").disabled = false;
autorization9 = true;		
} else
{
alert("It's not possible include more querys.");
}	
	
}	

function remove_line1(){
	
document.getElementById("Query1").style.display = "none";
document.getElementById("Query_Menu1").style.display = "none";

query1 = "";
nome1 = "";
document.getElementById("Texto_Teste1").innerHTML = "";

}	



function remove_line2(){
	
document.getElementById("Query2").style.display = "none";
document.getElementById("Query_Menu2").style.display = "none";

query2 = "";
nome2 = "";
document.getElementById("Texto_Teste2").innerHTML = "";

}	

	
function remove_line3(){

document.getElementById("Query3").style.display = "none";
document.getElementById("Query_Menu3").style.display = "none";

query3 = "";
nome3 = "";
document.getElementById("Texto_Teste3").innerHTML = "";

}	
	
	

function remove_line4(){
	
document.getElementById("Query4").style.display = "none";
document.getElementById("Query_Menu4").style.display = "none";

query4 = "";
nome4 = "";
document.getElementById("Texto_Teste4").innerHTML = "";

}
	

function remove_line5(){
	
document.getElementById("Query5").style.display = "none";
document.getElementById("Query_Menu5").style.display = "none";

query5 = "";
nome5 = "";
document.getElementById("Texto_Teste5").innerHTML = "";

}
	


function remove_line6(){
	
document.getElementById("Query6").style.display = "none";
document.getElementById("Query_Menu6").style.display = "none";

query6 = "";
nome6 = "";
document.getElementById("Texto_Teste6").innerHTML = "";

}

function remove_line7(){
	
document.getElementById("Query7").style.display = "none";
document.getElementById("Query_Menu7").style.display = "none";

query7 = "";
nome7 = "";
document.getElementById("Texto_Teste7").innerHTML = "";

}

function remove_line8(){
	
document.getElementById("Query8").style.display = "none";
document.getElementById("Query_Menu8").style.display = "none";

query8 = "";
nome8 = "";
document.getElementById("Texto_Teste8").innerHTML = "";

}

function remove_line9(){
	
document.getElementById("Query9").style.display = "none";
document.getElementById("Query_Menu9").style.display = "none";

query9 = "";
nome9 = "";
document.getElementById("Texto_Teste9").innerHTML = "";

}	


function mostrar_charts1(){
		
if(tecnologia1 == ""){   
	alert("Please select the Technology");
} else
if(elemento1 == ""){
	alert("Please select a Element");
} else
if(kpi1 == ""){
	alert("Please select a KPI");
} else
if(periodo == ""){
	alert("Please select a Period");
} else
if(document.getElementById("datepicker_inicial").value == ""){
	alert("Please select a Initial Date");
} else
if(document.getElementById("datepicker_final").value == ""){
	alert("Please select a Final Date");
	
} else {
	autorizacao = true;
}	

if(autorizacao == true){
elemento1 = document.getElementById("Elemento_Texto_Teste1").innerHTML;	
kpi1 = document.getElementById("KPI_Texto_Teste1").innerHTML;
counter_name = document.getElementById("KPI_Texto_Teste1").innerHTML;
nqi_name = document.getElementById("KPI_Texto_Teste1").innerHTML;
if(auth_change == true){	
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[0] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[1] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_main_kpis_"+family[1]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento1+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM " +tecnologia1 +"_kpi.vw_main_kpis_"+family[1] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento1 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}
}else
if(estado == 4){
if((rncc[1] != "rnc1") && (cellidd[1] != "cellid1")){	
query = "SELECT datetime as date, ee as node FROM umts_kpi.amx_load WHERE rnc = '"+rncc[1]+"' and cellid = '"+cellidd[1]+"' and datetime between '"+data_inicial[0]+"' and '"+data_final+" 23:30' and datetime::time between '"+hora_inicial+"' and '"+hora_final+"' order by datetime";
}else{
alert("The Voice Eralng Equivalent is only supported for cells.");
return 0;	
}	
}	
} else if(periodo == "daily"){

// alert(type_of_counter);
	
data_inicial[0] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[1] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_main_kpis_"+family[1]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento1+"' and date between '"+data_inicial[0]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM " +tecnologia1 +"_kpi.vw_main_kpis_"+family[1] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento1 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){
	
if(tecnologia1 == "umts"){	
if(family[1] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[1]+" = '"+elemento1+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+family[1]+",DATE ORDER BY DATE";
}else
if(family[1] == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[1]+" = '"+elemento1+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+family[1]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[1]+" = '"+elemento1+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+family[1]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia1 == "lte"){	
if(family[1] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[1]+" = '"+elemento1+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+family[1]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[1]+" = '"+elemento1+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+family[1]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia1 == "gsm"){
if(family[1] == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento1+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(family[1] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[1]+" = '"+elemento1+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+family[1]+",DATE ORDER BY DATE";
}else
if(family[1] == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento1+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[1]+" = '"+elemento1+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+family[1]+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia1 == "umts"){
	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+family[1]
+" where node != 'UNKNOWN' and node = '"+elemento1 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia1 == "lte"){	

if(family[1] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+family[1]+" where "+family[1]+" != 'UNKNOWN' and "+family[1]+" = (SELECT get_enodeb_name('"+elemento1+"','enodeb'))::TEXT and date between '"+data_inicial[0]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+family[1]
+" where "+family[1]+" != 'UNKNOWN' and "+family[1]+" = '"+elemento1 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
+"' order by "+tempo+"";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Daily Period.");
return 0;
}	
}
else if(periodo == "weekly"){
data_inicial[0] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[0];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
//document.getElementById("Teste_MonthNumber").innerHTML = m.toDate().getUTCMonth() + 1;
data_inicial[0] = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();
ano[0] = m.toDate().getUTCFullYear();
ano_final[0] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[1] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_main_kpis_"+family[1]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento1+"' and (year,week) between ("+ano[0]+","+data_inicial[0]+") and ("+ano_final[0]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_main_kpis_"+family[1]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento1+"' and (year,week) between ("+ano[0]+","+data_inicial[0]+") and ("+ano_final[0]+","+data_final+") order by year,week";
}
}else if(estado == 2){

if(tecnologia1 == "umts"){	
if(family[1] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[1]+" = '"+elemento1+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b."+family[1]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[1]+" = '"+elemento1+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b."+family[1]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia1 == "lte"){	
if(family[1] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[1]+" = '"+elemento1+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b."+family[1]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[1]+" = '"+elemento1+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b."+family[1]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia1 == "gsm"){	
if(family[1] == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento1+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[1] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[1]+" = '"+elemento1+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b."+family[1]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[1] == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento1+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[1]+" = '"+elemento1+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b."+family[1]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}	
	
}else if(estado == 3){

if(tecnologia1 == "umts"){
	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+family[1]+" where node != 'UNKNOWN' and node = '"+elemento1 +"' and (year,week) between ("+ano[0]+","+data_inicial[0]+") and ("+ano_final[0]+","+data_final+") order by year,week";

}else

if(tecnologia1 == "lte"){	

if(family[1] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+family[1]+" where "+family[1]+" != 'UNKNOWN' and "+family[1]+" = (SELECT get_enodeb_name('"+elemento1+"','enodeb'))::TEXT and (year,week) between ("+ano[0]+","+data_inicial[0]+") and ("+ano_final[0]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+family[1]+" where "+family[1]+" != 'UNKNOWN' and "+family[1]+" = '"+elemento1 +"' and (year,week) between ("+ano[0]+","+data_inicial[0]+") and ("+ano_final[0]+","+data_final+") order by year,week";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Weekly Period.");
return 0;
}

} else if(periodo == "monthly"){
data_inicial[0] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[0];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial[0] = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;
ano[0] = m.toDate().getUTCFullYear();
ano_final[0] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[1] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_main_kpis_"+family[1]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento1+"' and (year,month) between ('"+ano[0]+"','"+data_inicial[0]+"') and ('"+ano_final[0]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_main_kpis_"+family[1]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento1+"' and (year,month) between ('"+ano[0]+"','"+data_inicial[0]+"') and ('"+ano_final[0]+"','"+data_final+"') order by year,month";
}
}else if(estado == 2){

if(tecnologia1 == "umts"){	
if(family[1] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[1]+" = '"+elemento1+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b."+family[1]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[1]+" = '"+elemento1+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b."+family[1]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";	
}	
}else
if(tecnologia1 == "lte"){	
if(family[1] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[1]+" = '"+elemento1+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b."+family[1]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[1]+" = '"+elemento1+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b."+family[1]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}else
if(tecnologia1 == "gsm"){	
if(family[1] == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento1+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[1] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[1]+" = '"+elemento1+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b."+family[1]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[1] == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento1+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[1]+" = '"+elemento1+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[0]+"','"+data_inicial[0]+"') AND ('"+ano_final[0]+"','"+data_final+"') GROUP BY b."+family[1]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}	
	
}else if(estado == 3){

if(tecnologia1 == "umts"){
	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+family[1]+" where node != 'UNKNOWN' and node = '"+elemento1 +"' and (year,month) between ('"+ano[0]+"','"+data_inicial[0]+"') and ('"+ano_final[0]+"','"+data_final+"') order by year,month";

}else

if(tecnologia1 == "lte"){	

if(family[1] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+family[1]+" where "+family[1]+" != 'UNKNOWN' and "+family[1]+" = (SELECT get_enodeb_name('"+elemento1+"','enodeb'))::TEXT and (year,month) between ('"+ano[0]+"','"+data_inicial[0]+"') and ('"+ano_final[0]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+family[1]+" where "+family[1]+" != 'UNKNOWN' and "+family[1]+" = '"+elemento1 +"' and (year,month) between ('"+ano[0]+"','"+data_inicial[0]+"') and ('"+ano_final[0]+"','"+data_final+"') order by year,month";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Monthly Period.");
return 0;
}	
}

query_num = 2;

if(estado != 2){
nome1 = elemento1+" "+kpi1+" ("+unidade1+")";
}else{
nome1 = elemento1+" "+kpi1;	
}
	
query1 = query;

document.getElementById("Texto_Teste1").innerHTML = query1;

autorization1 = false;
add_menu1 = true;

document.getElementById("btn_confirm1").style.visibility = "hidden";
// document.getElementById("btn_delete1").style.visibility = "visible";
// if(lixeira1 == false){
// document.getElementById("btn_confirm2").style.visibility = "visible";
// }
document.getElementById("Query_Menu1").style.opacity = 0.3;
$("#radio_query1").prop("checked", false);
document.getElementById("chart_type1").disabled = true;
document.getElementById("chart_position1").disabled = true;	
}
$("#radio_query1").prop("checked", false);
document.getElementById("btn_confirm1").style.visibility = "hidden";
document.getElementById("Query_Menu1").style.opacity = 0.3;
}	
}

function mostrar_charts2(){
		
if(auth_change == true){
elemento2 = document.getElementById("Elemento_Texto_Teste2").innerHTML;	
kpi2 = document.getElementById("KPI_Texto_Teste2").innerHTML;
counter_name = document.getElementById("KPI_Texto_Teste2").innerHTML;
nqi_name = document.getElementById("KPI_Texto_Teste2").innerHTML;	
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[1] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[2] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_main_kpis_"+family[2]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento2+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[1]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM " +tecnologia2 +"_kpi.vw_main_kpis_"+family[2] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento2 +"' and "+tempo+" between '"+data_inicial[1]+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}
}else
if(estado == 4){
if((rncc[2] != "rnc1") && (cellidd[2] != "cellid1")){	
query = "SELECT datetime as date, ee as node FROM umts_kpi.amx_load WHERE rnc = '"+rncc[2]+"' and cellid = '"+cellidd[2]+"' and datetime between '"+data_inicial[1]+"' and '"+data_final+" 23:30' and datetime::time between '"+hora_inicial+"' and '"+hora_final+"' order by datetime";
}else{
alert("The Voice Eralng Equivalent is only supported for cells.");
return 0;	
}	
}	
}	else if(periodo == "daily"){

// alert(type_of_counter);
	
data_inicial[1] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[2] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_main_kpis_"+family[2]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento2+"' and date between '"+data_inicial[1]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM " +tecnologia2 +"_kpi.vw_main_kpis_"+family[2] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento2 +"' and "+tempo+" between '"+data_inicial[1]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia2 == "umts"){	
if(family[2] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[2]+" = '"+elemento2+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+family[2]+",DATE ORDER BY DATE";
}else
if(family[2] == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[2]+" = '"+elemento2+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+family[2]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[2]+" = '"+elemento2+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+family[2]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia2 == "lte"){	
if(family[2] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[2]+" = '"+elemento2+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+family[2]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[2]+" = '"+elemento2+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+family[2]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia2 == "gsm"){	
if(family[2] == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento2+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(family[2] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[2]+" = '"+elemento2+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+family[2]+",DATE ORDER BY DATE";
}else
if(family[2] == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento2+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[2]+" = '"+elemento2+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+family[2]+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia2 == "umts"){
	
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+family[2]
+" where node != 'UNKNOWN' and node = '"+elemento2 +"' and "+tempo+" between '"+data_inicial[1]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia2 == "lte"){	

if(family[2] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+family[2]+" where "+family[2]+" != 'UNKNOWN' and "+family[2]+" = (SELECT get_enodeb_name('"+elemento2+"','enodeb'))::TEXT and date between '"+data_inicial[1]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+family[2]
+" where "+family[2]+" != 'UNKNOWN' and "+family[2]+" = '"+elemento2 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
+"' order by "+tempo+"";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Daily Period.");
return 0;
}
}
else if(periodo == "weekly"){
data_inicial[1] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[1];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
//document.getElementById("Teste_MonthNumber").innerHTML = m.toDate().getUTCMonth() + 1;
data_inicial[1] = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();
ano[1] = m.toDate().getUTCFullYear();
ano_final[1] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[2] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_main_kpis_"+family[2]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento2+"' and (year,week) between ("+ano[1]+","+data_inicial[1]+") and ("+ano_final[1]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM " +tecnologia2 +"_kpi.vw_main_kpis_"+family[2] +"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento2 +"' and (year,week) between ("+ano[1]+","+data_inicial[1]+") and ("+ano_final[1]+","+data_final+") order by year,week";
}
}else if(estado == 2){

if(tecnologia2 == "umts"){	
if(family[2] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[2]+" = '"+elemento2+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b."+family[2]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[2]+" = '"+elemento2+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b."+family[2]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia2 == "lte"){	
if(family[2] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[2]+" = '"+elemento2+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b."+family[2]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[2]+" = '"+elemento2+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b."+family[2]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia2 == "gsm"){	
if(family[2] == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento2+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[2] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[2]+" = '"+elemento2+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b."+family[2]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[2] == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento2+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[2]+" = '"+elemento2+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b."+family[2]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}	
	
}else if(estado == 3){

if(tecnologia2 == "umts"){	
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+family[2]+" where node != 'UNKNOWN' and node = '"+elemento2 +"' and (year,week) between ("+ano[1]+","+data_inicial[1]+") and ("+ano_final[1]+","+data_final+") order by year,week";
}else

if(tecnologia2 == "lte"){	

if(family[2] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+family[2]+" where "+family[2]+" != 'UNKNOWN' and "+family[2]+" = (SELECT get_enodeb_name('"+elemento2+"','enodeb'))::TEXT and (year,week) between ("+ano[1]+","+data_inicial[1]+") and ("+ano_final[1]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+family[2]+" where "+family[2]+" != 'UNKNOWN' and "+family[2]+" = '"+elemento2 +"' and (year,week) between ("+ano[1]+","+data_inicial[1]+") and ("+ano_final[1]+","+data_final+") order by year,week";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Weekly Period.");
return 0;
}
}else if(periodo == "monthly"){
data_inicial[1] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[1];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial[1] = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;
ano[1] = m.toDate().getUTCFullYear();
ano_final[1] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[2] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_main_kpis_"+family[2]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento2+"' and (year,month) between ('"+ano[1]+"','"+data_inicial[1]+"') and ('"+ano_final[1]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_main_kpis_"+family[2]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento2+"' and (year,month) between ('"+ano[1]+"','"+data_inicial[1]+"') and ('"+ano_final[1]+"','"+data_final+"') order by year,month";
}
}else if(estado == 2){

if(tecnologia2 == "umts"){	
if(family[2] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[2]+" = '"+elemento2+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b."+family[2]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[2]+" = '"+elemento2+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b."+family[2]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";	
}	
}else
if(tecnologia2 == "lte"){	
if(family[2] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[2]+" = '"+elemento2+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b."+family[2]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[2]+" = '"+elemento2+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b."+family[2]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}else
if(tecnologia2 == "gsm"){	
if(family[2] == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento2+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[2] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[2]+" = '"+elemento2+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b."+family[2]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[2] == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento2+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[2]+" = '"+elemento2+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[1]+"','"+data_inicial[1]+"') AND ('"+ano_final[1]+"','"+data_final+"') GROUP BY b."+family[2]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
	
}
}else if(estado == 3){

if(tecnologia2 == "umts"){
	
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+family[2]+" where node != 'UNKNOWN' and node = '"+elemento2 +"' and (year,month) between ('"+ano[1]+"','"+data_inicial[1]+"') and ('"+ano_final[1]+"','"+data_final+"') order by year,month";

}else

if(tecnologia2 == "lte"){	

if(family[2] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+family[2]+" where "+family[2]+" != 'UNKNOWN' and "+family[2]+" = (SELECT get_enodeb_name('"+elemento2+"','enodeb'))::TEXT and (year,month) between ('"+ano[1]+"','"+data_inicial[1]+"') and ('"+ano_final[1]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+family[2]+" where "+family[2]+" != 'UNKNOWN' and "+family[2]+" = '"+elemento2 +"' and (year,month) between ('"+ano[1]+"','"+data_inicial[1]+"') and ('"+ano_final[1]+"','"+data_final+"') order by year,month";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Monthly Period.");
return 0;
}	
}

if(estado != 2){
nome2 = elemento2+" "+kpi2+" ("+unidade2+")";
}else{
nome2 = elemento2+" "+kpi2;	
}

query2 = query;	
document.getElementById("Texto_Teste2").innerHTML = query2;

autorization2 = false;
// add_menu2 = true;

document.getElementById("btn_confirm2").style.visibility = "hidden";
// document.getElementById("btn_delete2").style.visibility = "visible";
// if(lixeira2 == false){
// document.getElementById("btn_confirm3").style.visibility = "visible";
// }
document.getElementById("Query_Menu2").style.opacity = 0.3;

$("#radio_query2").prop("checked", false);

document.getElementById("Query_Menu3").style.display = "inline-block";
document.getElementById("chart_type2").disabled = true;
document.getElementById("chart_position2").disabled = true;
query_num = 3;
}
$("#radio_query2").prop("checked", false);
document.getElementById("chart_type2").disabled = true;
document.getElementById("chart_position2").disabled = true;
document.getElementById("btn_confirm2").style.visibility = "hidden";
document.getElementById("Query_Menu2").style.opacity = 0.3;
}			


function mostrar_charts3(){
			
query_num = 4;

if(auth_change == true){
elemento3 = document.getElementById("Elemento_Texto_Teste3").innerHTML;	
kpi3 = document.getElementById("KPI_Texto_Teste3").innerHTML;
counter_name = document.getElementById("KPI_Texto_Teste3").innerHTML;
nqi_name = document.getElementById("KPI_Texto_Teste3").innerHTML;	
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[2] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[3] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_main_kpis_"+family[3]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento3+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM " +tecnologia3 +"_kpi.vw_main_kpis_"+family[3] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento3 +"' and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}
}else
if(estado == 4){
if((rncc[3] != "rnc1") && (cellidd[3] != "cellid1")){	
query = "SELECT datetime as date, ee as node FROM umts_kpi.amx_load WHERE rnc = '"+rncc[3]+"' and cellid = '"+cellidd[3]+"' and datetime between '"+data_inicial[2]+"' and '"+data_final+" 23:30' and datetime::time between '"+hora_inicial+"' and '"+hora_final+"' order by datetime";
}else{
alert("The Voice Eralng Equivalent is only supported for cells.");
return 0;	
}	
}	
}	else if(periodo == "daily"){

// alert(type_of_counter);
	
data_inicial[2] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[3] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_main_kpis_"+family[3]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento3+"' and date between '"+data_inicial[2]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM " +tecnologia3 +"_kpi.vw_main_kpis_"+family[3] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento3 +"' and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia3 == "umts"){	
if(family[3] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[3]+" = '"+elemento3+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+family[3]+",DATE ORDER BY DATE";
}else
if(family[3] == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[3]+" = '"+elemento3+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+family[3]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[3]+" = '"+elemento3+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+family[3]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia3 == "lte"){	
if(family[3] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[3]+" = '"+elemento3+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+family[3]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[3]+" = '"+elemento3+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+family[3]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia3 == "gsm"){	
if(family[3] == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento3+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(family[3] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[3]+" = '"+elemento3+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+family[3]+",DATE ORDER BY DATE";
}else
if(family[3] == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento3+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[3]+" = '"+elemento3+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+family[3]+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia3 == "umts"){
	
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+family[3]
+" where node != 'UNKNOWN' and node = '"+elemento3 +"' and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia3 == "lte"){	

if(family[3] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+family[3]+" where "+family[3]+" != 'UNKNOWN' and "+family[3]+" = (SELECT get_enodeb_name('"+elemento3+"','enodeb'))::TEXT and date between '"+data_inicial[2]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+family[3]
+" where "+family[3]+" != 'UNKNOWN' and "+family[3]+" = '"+elemento3 +"' and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final
+"' order by "+tempo+"";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Daily Period.");
return 0;
}
}
else if(periodo == "weekly"){
data_inicial[2] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[2];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
//document.getElementById("Teste_MonthNumber").innerHTML = m.toDate().getUTCMonth() + 1;
data_inicial[2] = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();
ano[2] = m.toDate().getUTCFullYear();
ano_final[2] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[3] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_main_kpis_"+family[3]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento3+"' and (year,week) between ("+ano[2]+","+data_inicial[2]+") and ("+ano_final[2]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM " +tecnologia3 +"_kpi.vw_main_kpis_"+family[3] +"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento3 +"' and (year,week) between ("+ano[2]+","+data_inicial[2]+") and ("+ano_final[2]+","+data_final+") order by year,week";
}
}else if(estado == 2){

if(tecnologia3 == "umts"){	
if(family[3] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[3]+" = '"+elemento3+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b."+family[3]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[3]+" = '"+elemento3+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b."+family[3]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia3 == "lte"){	
if(family[3] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[3]+" = '"+elemento3+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b."+family[3]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[3]+" = '"+elemento3+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b."+family[3]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia3 == "gsm"){	
if(family[3] == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento3+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[3] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[3]+" = '"+elemento3+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b."+family[3]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[3] == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento3+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[3]+" = '"+elemento3+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b."+family[3]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}	
	
}else if(estado == 3){

if(tecnologia3 == "umts"){
	
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+family[3]+" where node != 'UNKNOWN' and node = '"+elemento3 +"' and (year,week) between ("+ano[2]+","+data_inicial[2]+") and ("+ano_final[2]+","+data_final+") order by year,week";

}else

if(tecnologia3 == "lte"){	

if(family[3] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+family[3]+" where "+family[3]+" != 'UNKNOWN' and "+family[3]+" = (SELECT get_enodeb_name('"+elemento3+"','enodeb'))::TEXT and (year,week) between ("+ano[2]+","+data_inicial[2]+") and ("+ano_final[2]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+family[3]+" where "+family[3]+" != 'UNKNOWN' and "+family[3]+" = '"+elemento3 +"' and (year,week) between ("+ano[2]+","+data_inicial[2]+") and ("+ano_final[2]+","+data_final+") order by year,week";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Weekly Period.");
return 0;
}
}else if(periodo == "monthly"){
data_inicial[2] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[2];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial[2] = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;
ano[2] = m.toDate().getUTCFullYear();
ano_final[2] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[3] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_main_kpis_"+family[3]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento3+"' and (year,month) between ('"+ano[2]+"','"+data_inicial[2]+"') and ('"+ano_final[2]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_main_kpis_"+family[3]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento3+"' and (year,month) between ('"+ano[2]+"','"+data_inicial[2]+"') and ('"+ano_final[2]+"','"+data_final+"') order by year,month";
}
}else if(estado == 2){

if(tecnologia3 == "umts"){	
if(family[3] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[3]+" = '"+elemento3+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b."+family[3]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[3]+" = '"+elemento3+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b."+family[3]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";	
}	
}else
if(tecnologia3 == "lte"){	
if(family[3] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[3]+" = '"+elemento3+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b."+family[3]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[3]+" = '"+elemento3+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b."+family[3]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}else
if(tecnologia3 == "gsm"){	
if(family[3] == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento3+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[3] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[3]+" = '"+elemento3+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b."+family[3]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[3] == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento3+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[3]+" = '"+elemento3+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[2]+"','"+data_inicial[2]+"') AND ('"+ano_final[2]+"','"+data_final+"') GROUP BY b."+family[3]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
	
}
}else if(estado == 3){

if(tecnologia3 == "umts"){
	
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+family[3]+" where node != 'UNKNOWN' and node = '"+elemento3 +"' and (year,month) between ('"+ano[2]+"','"+data_inicial[2]+"') and ('"+ano_final[2]+"','"+data_final+"') order by year,month";

}else

if(tecnologia3 == "lte"){	

if(family[3] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+family[3]+" where "+family[3]+" != 'UNKNOWN' and "+family[3]+" = (SELECT get_enodeb_name('"+elemento3+"','enodeb'))::TEXT and (year,month) between ('"+ano[2]+"','"+data_inicial[2]+"') and ('"+ano_final[2]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+family[3]+" where "+family[3]+" != 'UNKNOWN' and "+family[3]+" = '"+elemento3 +"' and (year,month) between ('"+ano[2]+"','"+data_inicial[2]+"') and ('"+ano_final[2]+"','"+data_final+"') order by year,month";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Monthly Period.");
return 0;
}	
}

if(estado != 2){
nome3 = elemento3+" "+kpi3+" ("+unidade3+")";
}else{
nome3 = elemento3+" "+kpi3;	
}

query3 = query;
document.getElementById("Texto_Teste3").innerHTML = query3;

autorization3 = false;
add_menu3 = true;

document.getElementById("btn_confirm3").style.visibility = "hidden";
// document.getElementById("btn_delete3").style.visibility = "visible";
// if(lixeira3 == false){
// document.getElementById("btn_confirm4").style.visibility = "visible";
// }
document.getElementById("Query_Menu3").style.opacity = 0.3;


$("#radio_query3").prop("checked", false);

document.getElementById("Query_Menu4").style.display = "inline-block";
document.getElementById("chart_type3").disabled = true;
document.getElementById("chart_position3").disabled = true;
}
$("#radio_query3").prop("checked", false);
document.getElementById("chart_type3").disabled = true;
document.getElementById("chart_position3").disabled = true;
document.getElementById("btn_confirm3").style.visibility = "hidden";
document.getElementById("Query_Menu3").style.opacity = 0.3;
}			


function mostrar_charts4(){
		
query_num = 5;

if(auth_change == true){
elemento4 = document.getElementById("Elemento_Texto_Teste4").innerHTML;	
kpi4 = document.getElementById("KPI_Texto_Teste4").innerHTML;
counter_name = document.getElementById("KPI_Texto_Teste4").innerHTML;
nqi_name = document.getElementById("KPI_Texto_Teste4").innerHTML;	
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[3] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[4] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_main_kpis_"+family[4]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento4+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM " +tecnologia4 +"_kpi.vw_main_kpis_"+family[4] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento4 +"' and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}
}else
if(estado == 4){
if((rncc[4] != "rnc1") && (cellidd[4] != "cellid1")){	
query = "SELECT datetime as date, ee as node FROM umts_kpi.amx_load WHERE rnc = '"+rncc[4]+"' and cellid = '"+cellidd[4]+"' and datetime between '"+data_inicial[3]+"' and '"+data_final+" 23:30' and datetime::time between '"+hora_inicial+"' and '"+hora_final+"' order by datetime";
}else{
alert("The Voice Eralng Equivalent is only supported for cells.");
return 0;	
}	
}
}	else if(periodo == "daily"){

// alert(type_of_counter);
	
data_inicial[3] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[4] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_main_kpis_"+family[4]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento4+"' and date between '"+data_inicial[3]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM " +tecnologia4 +"_kpi.vw_main_kpis_"+family[4] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento4 +"' and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia4 == "umts"){	
if(family[4] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[4]+" = '"+elemento4+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+family[4]+",DATE ORDER BY DATE";
}else
if(family[4] == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[4]+" = '"+elemento4+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+family[4]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[4]+" = '"+elemento4+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+family[4]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia4 == "lte"){	
if(family[4] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[4]+" = '"+elemento4+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+family[4]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[4]+" = '"+elemento4+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+family[4]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia4 == "gsm"){	
if(family[4] == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento4+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(family[4] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[4]+" = '"+elemento4+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+family[4]+",DATE ORDER BY DATE";
}else
if(family[4] == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento4+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[4]+" = '"+elemento4+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+family[4]+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia4 == "umts"){
	
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+family[4]
+" where node != 'UNKNOWN' and node = '"+elemento4 +"' and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia4 == "lte"){	

if(family[4] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+family[4]+" where "+family[4]+" != 'UNKNOWN' and "+family[4]+" = (SELECT get_enodeb_name('"+elemento4+"','enodeb'))::TEXT and date between '"+data_inicial[3]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+family[4]
+" where "+family[4]+" != 'UNKNOWN' and "+family[4]+" = '"+elemento4 +"' and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final
+"' order by "+tempo+"";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Daily Period.");
return 0;
}
}
else if(periodo == "weekly"){
data_inicial[3] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[3];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
//document.getElementById("Teste_MonthNumber").innerHTML = m.toDate().getUTCMonth() + 1;
data_inicial[3] = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();
ano[3] = m.toDate().getUTCFullYear();
ano_final[3] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[4] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_main_kpis_"+family[4]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento4+"' and (year,week) between ("+ano[3]+","+data_inicial[3]+") and ("+ano_final[3]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM " +tecnologia4 +"_kpi.vw_main_kpis_"+family[4] +"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento4 +"' and (year,week) between ("+ano[3]+","+data_inicial[3]+") and ("+ano_final[3]+","+data_final+") order by year,week";
}
}else if(estado == 2){

if(tecnologia4 == "umts"){	
if(family[4] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[4]+" = '"+elemento4+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b."+family[4]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[4]+" = '"+elemento4+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b."+family[4]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia4 == "lte"){	
if(family[4] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[4]+" = '"+elemento4+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b."+family[4]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[4]+" = '"+elemento4+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b."+family[4]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia4 == "gsm"){	
if(family[4] == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento4+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[4] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[4]+" = '"+elemento4+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b."+family[4]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[4] == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento4+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[4]+" = '"+elemento4+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b."+family[4]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}	
	
}else if(estado == 3){

if(tecnologia4 == "umts"){	
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+family[4]+" where node != 'UNKNOWN' and node = '"+elemento4 +"' and (year,week) between ("+ano[3]+","+data_inicial[3]+") and ("+ano_final[3]+","+data_final+") order by year,week";
}else

if(tecnologia4 == "lte"){	

if(family[4] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+family[4]+" where "+family[4]+" != 'UNKNOWN' and "+family[4]+" = (SELECT get_enodeb_name('"+elemento4+"','enodeb'))::TEXT and (year,week) between ("+ano[3]+","+data_inicial[3]+") and ("+ano_final[4]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+family[4]+" where "+family[4]+" != 'UNKNOWN' and "+family[4]+" = '"+elemento4 +"' and (year,week) between ("+ano[3]+","+data_inicial[3]+") and ("+ano_final[3]+","+data_final+") order by year,week";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Weekly Period.");
return 0;
}
}else if(periodo == "monthly"){
data_inicial[3] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[3];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial[3] = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;
ano[3] = m.toDate().getUTCFullYear();
ano_final[3] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[4] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_main_kpis_"+family[4]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento4+"' and (year,month) between ('"+ano[3]+"','"+data_inicial[3]+"') and ('"+ano_final[3]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_main_kpis_"+family[4]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento4+"' and (year,month) between ('"+ano[3]+"','"+data_inicial[3]+"') and ('"+ano_final[3]+"','"+data_final+"') order by year,month";
}
}else if(estado == 2){

if(tecnologia4 == "umts"){	
if(family[4] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[4]+" = '"+elemento4+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b."+family[4]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[4]+" = '"+elemento4+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b."+family[4]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";	
}	
}else
if(tecnologia4 == "lte"){	
if(family[4] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[4]+" = '"+elemento4+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b."+family[4]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[4]+" = '"+elemento4+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b."+family[4]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}else
if(tecnologia4 == "gsm"){	
if(family[4] == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento4+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[4] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[4]+" = '"+elemento4+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b."+family[4]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[4] == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento4+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[4]+" = '"+elemento4+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[3]+"','"+data_inicial[3]+"') AND ('"+ano_final[3]+"','"+data_final+"') GROUP BY b."+family[4]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
	
}
}else if(estado == 3){

if(tecnologia4 == "umts"){
	
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+family[4]+" where node != 'UNKNOWN' and node = '"+elemento4 +"' and (year,month) between ('"+ano[3]+"','"+data_inicial[3]+"') and ('"+ano_final[3]+"','"+data_final+"') order by year,month";

}else

if(tecnologia4 == "lte"){	

if(family[4] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+family[4]+" where "+family[4]+" != 'UNKNOWN' and "+family[4]+" = (SELECT get_enodeb_name('"+elemento4+"','enodeb'))::TEXT and (year,month) between ('"+ano[3]+"','"+data_inicial[3]+"') and ('"+ano_final[3]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+family[4]+" where "+family[4]+" != 'UNKNOWN' and "+family[4]+" = '"+elemento4 +"' and (year,month) between ('"+ano[3]+"','"+data_inicial[3]+"') and ('"+ano_final[3]+"','"+data_final+"') order by year,month";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Monthly Period.");
return 0;
}	
}

if(estado != 2){
nome4 = elemento4+" "+kpi4+" ("+unidade4+")";
}else{
nome4 = elemento4+" "+kpi4;	
}
 
query4 = query;
document.getElementById("Texto_Teste4").innerHTML = query4;

autorization4 = false;
add_menu4 = true;

document.getElementById("btn_confirm4").style.visibility = "hidden";
// document.getElementById("btn_delete3").style.visibility = "visible";
// if(lixeira4 == false){
// document.getElementById("btn_confirm5").style.visibility = "visible";
// }
document.getElementById("Query_Menu4").style.opacity = 0.3;

$("#radio_query4").prop("checked", false);

document.getElementById("Query_Menu5").style.display = "inline-block";
document.getElementById("chart_type4").disabled = true;
document.getElementById("chart_position4").disabled = true;
}
$("#radio_query4").prop("checked", false);
document.getElementById("chart_type4").disabled = true;
document.getElementById("chart_position4").disabled = true;
document.getElementById("btn_confirm4").style.visibility = "hidden";
document.getElementById("Query_Menu4").style.opacity = 0.3;
}

function mostrar_charts5(){
		
query_num = 6;

if(auth_change == true){
elemento5 = document.getElementById("Elemento_Texto_Teste5").innerHTML;	
kpi5 = document.getElementById("KPI_Texto_Teste5").innerHTML;
counter_name = document.getElementById("KPI_Texto_Teste5").innerHTML;
nqi_name = document.getElementById("KPI_Texto_Teste5").innerHTML;	
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[4] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[5] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_main_kpis_"+family[5]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento5+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM " +tecnologia5 +"_kpi.vw_main_kpis_"+family[5] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento5 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}
}else
if(estado == 4){
if((rncc[5] != "rnc1") && (cellidd[5] != "cellid1")){	
query = "SELECT datetime as date, ee as node FROM umts_kpi.amx_load WHERE rnc = '"+rncc[5]+"' and cellid = '"+cellidd[5]+"' and datetime between '"+data_inicial[4]+"' and '"+data_final+" 23:30' and datetime::time between '"+hora_inicial+"' and '"+hora_final+"' order by datetime";
}else{
alert("The Voice Eralng Equivalent is only supported for cells.");
return 0;	
}	
}
}	else if(periodo == "daily"){

// alert(type_of_counter);
	
data_inicial[4] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[5] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_main_kpis_"+family[5]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento5+"' and date between '"+data_inicial[4]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM " +tecnologia5 +"_kpi.vw_main_kpis_"+family[5] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento5 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia5 == "umts"){	
if(family[5] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[5]+" = '"+elemento5+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+family[5]+",DATE ORDER BY DATE";
}else
if(family[5] == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[5]+" = '"+elemento5+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+family[5]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[5]+" = '"+elemento5+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+family[5]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia5 == "lte"){	
if(family[5] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[5]+" = '"+elemento5+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+family[5]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[5]+" = '"+elemento5+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+family[5]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia5 == "gsm"){	
if(family[5] == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento5+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(family[5] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[5]+" = '"+elemento5+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+family[5]+",DATE ORDER BY DATE";
}else
if(family[5] == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento5+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[5]+" = '"+elemento5+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+family[5]+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia5 == "umts"){
	
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+family[5]
+" where node != 'UNKNOWN' and node = '"+elemento5 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia5 == "lte"){	

if(family[5] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+family[5]+" where "+family[5]+" != 'UNKNOWN' and "+family[5]+" = (SELECT get_enodeb_name('"+elemento5+"','enodeb'))::TEXT and date between '"+data_inicial[4]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+family[5]
+" where "+family[5]+" != 'UNKNOWN' and "+family[5]+" = '"+elemento5 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
+"' order by "+tempo+"";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Daily Period.");
return 0;
}
}
else if(periodo == "weekly"){
data_inicial[4] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[4];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
//document.getElementById("Teste_MonthNumber").innerHTML = m.toDate().getUTCMonth() + 1;
data_inicial[4] = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();
ano[4] = m.toDate().getUTCFullYear();
ano_final[4] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[5] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_main_kpis_"+family[5]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento5+"' and (year,week) between ("+ano[4]+","+data_inicial[4]+") and ("+ano_final[4]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM " +tecnologia5 +"_kpi.vw_main_kpis_"+family[5] +"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento5 +"' and (year,week) between ("+ano[4]+","+data_inicial[4]+") and ("+ano_final[4]+","+data_final+") order by year,week";
}
}else if(estado == 2){

if(tecnologia5 == "umts"){	
if(family[5] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[5]+" = '"+elemento5+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b."+family[5]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY  date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[5]+" = '"+elemento5+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b."+family[5]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia5 == "lte"){	
if(family[5] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[5]+" = '"+elemento5+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b."+family[5]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[5]+" = '"+elemento5+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b."+family[5]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia5 == "gsm"){	
if(family[5] == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento5+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[5] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[5]+" = '"+elemento5+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b."+family[5]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[5] == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento5+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[5]+" = '"+elemento5+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b."+family[5]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}
	
}else if(estado == 3){

if(tecnologia5 == "umts"){
	
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+family[5]+" where node != 'UNKNOWN' and node = '"+elemento5 +"' and (year,week) between ("+ano[4]+","+data_inicial[4]+") and ("+ano_final[4]+","+data_final+") order by year,week";

}else

if(tecnologia5 == "lte"){	

if(family[5] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+family[5]+" where "+family[5]+" != 'UNKNOWN' and "+family[5]+" = (SELECT get_enodeb_name('"+elemento5+"','enodeb'))::TEXT and (year,week) between ("+ano[4]+","+data_inicial[4]+") and ("+ano_final[4]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+family[5]+" where "+family[5]+" != 'UNKNOWN' and "+family[5]+" = '"+elemento5 +"' and (year,week) between ("+ano[4]+","+data_inicial[4]+") and ("+ano_final[4]+","+data_final+") order by year,week";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Weekly Period.");
return 0;
}
}else if(periodo == "monthly"){
data_inicial[4] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[4];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial[4] = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;
ano[4] = m.toDate().getUTCFullYear();
ano_final[4] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[5] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_main_kpis_"+family[5]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento5+"' and (year,month) between ('"+ano[4]+"','"+data_inicial[4]+"') and ('"+ano_final[4]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_main_kpis_"+family[5]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento5+"' and (year,month) between ('"+ano[4]+"','"+data_inicial[4]+"') and ('"+ano_final[4]+"','"+data_final+"') order by year,month";
}
}else if(estado == 2){

if(tecnologia5 == "umts"){	
if(family[5] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[5]+" = '"+elemento5+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b."+family[5]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[5]+" = '"+elemento5+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b."+family[5]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";	
}	
}else
if(tecnologia5 == "lte"){	
if(family[5] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[5]+" = '"+elemento5+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b."+family[5]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[5]+" = '"+elemento5+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b."+family[5]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}else
if(tecnologia5 == "gsm"){	
if(family[5] == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento5+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[5] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[5]+" = '"+elemento5+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b."+family[5]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[5] == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento5+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[5]+" = '"+elemento5+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[4]+"','"+data_inicial[4]+"') AND ('"+ano_final[4]+"','"+data_final+"') GROUP BY b."+family[5]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}	
	
}else if(estado == 3){

if(tecnologia5 == "umts"){
	
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+family[5]+" where node != 'UNKNOWN' and node = '"+elemento5 +"' and (year,month) between ('"+ano[4]+"','"+data_inicial[4]+"') and ('"+ano_final[4]+"','"+data_final+"') order by year,month";

}else

if(tecnologia4 == "lte"){	

if(family[5] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+family[5]+" where "+family[5]+" != 'UNKNOWN' and "+family[5]+" = (SELECT get_enodeb_name('"+elemento5+"','enodeb'))::TEXT and (year,month) between ('"+ano[4]+"','"+data_inicial[4]+"') and ('"+ano_final[4]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+family[5]+" where "+family[5]+" != 'UNKNOWN' and "+family[5]+" = '"+elemento5 +"' and (year,month) between ('"+ano[4]+"','"+data_inicial[4]+"') and ('"+ano_final[4]+"','"+data_final+"') order by year,month";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Daily Period.");
return 0;
}	
}

if(estado != 2){
nome5 = elemento5+" "+kpi5+" ("+unidade5+")";
}else{
nome5 = elemento5+" "+kpi5;	
}

query5 = query;
document.getElementById("Texto_Teste5").innerHTML = query5;

autorization5 = false;
add_menu5 = true;

document.getElementById("btn_confirm5").style.visibility = "hidden";
// document.getElementById("btn_delete3").style.visibility = "visible";
// if(lixeira5 == false){
// document.getElementById("btn_confirm6").style.visibility = "visible";
// }
document.getElementById("Query_Menu5").style.opacity = 0.3;

$("#radio_query5").prop("checked", false);

document.getElementById("Query_Menu6").style.display = "inline-block";
document.getElementById("chart_type5").disabled = true;
document.getElementById("chart_position5").disabled = true;
}
$("#radio_query5").prop("checked", false);
document.getElementById("chart_type5").disabled = true;
document.getElementById("chart_position5").disabled = true;
document.getElementById("btn_confirm5").style.visibility = "hidden";
document.getElementById("Query_Menu5").style.opacity = 0.3;
}

function mostrar_charts6(){
		
query_num = 7;

if(auth_change == true){
elemento6 = document.getElementById("Elemento_Texto_Teste6").innerHTML;	
kpi6 = document.getElementById("KPI_Texto_Teste6").innerHTML;
counter_name = document.getElementById("KPI_Texto_Teste6").innerHTML;
nqi_name = document.getElementById("KPI_Texto_Teste6").innerHTML;	
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[5] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[6] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_main_kpis_"+family[6]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento6+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM " +tecnologia6 +"_kpi.vw_main_kpis_"+family[6] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento6 +"' and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}
}else
if(estado == 4){
if((rncc[6] != "rnc1") && (cellidd[6] != "cellid1")){	
query = "SELECT datetime as date, ee as node FROM umts_kpi.amx_load WHERE rnc = '"+rncc[6]+"' and cellid = '"+cellidd[6]+"' and datetime between '"+data_inicial[5]+"' and '"+data_final+" 23:30' and datetime::time between '"+hora_inicial+"' and '"+hora_final+"' order by datetime";
}else{
alert("The Voice Eralng Equivalent is only supported for cells.");
return 0;	
}	
}
}	else if(periodo == "daily"){

// alert(type_of_counter);
	
data_inicial[5] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[6] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_main_kpis_"+family[6]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento6+"' and date between '"+data_inicial[5]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM " +tecnologia6 +"_kpi.vw_main_kpis_"+family[6] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento6 +"' and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia6 == "umts"){	
if(family[6] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[6]+" = '"+elemento6+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+family[6]+",DATE ORDER BY DATE";
}else
if(family[6] == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[6]+" = '"+elemento6+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+family[6]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[6]+" = '"+elemento6+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+family[6]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia6 == "lte"){	
if(family[6] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[6]+" = '"+elemento6+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+family[6]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[6]+" = '"+elemento6+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+family[6]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia6 == "gsm"){	
if(family[6] == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento6+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(family[6] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[6]+" = '"+elemento6+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+family[6]+",DATE ORDER BY DATE";
}else
if(family[6] == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento6+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[6]+" = '"+elemento6+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+family[6]+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia6 == "umts"){
	
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+family[6]
+" where node != 'UNKNOWN' and node = '"+elemento6 +"' and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia6 == "lte"){	

if(family[6] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+family[6]+" where "+family[6]+" != 'UNKNOWN' and "+family[6]+" = (SELECT get_enodeb_name('"+elemento6+"','enodeb'))::TEXT and date between '"+data_inicial[5]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+family[6]
+" where "+family[6]+" != 'UNKNOWN' and "+family[6]+" = '"+elemento6 +"' and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final
+"' order by "+tempo+"";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Daily Period.");
return 0;
}
}
else if(periodo == "weekly"){
data_inicial[5] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[5];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
//document.getElementById("Teste_MonthNumber").innerHTML = m.toDate().getUTCMonth() + 1;
data_inicial[5] = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();
ano[5] = m.toDate().getUTCFullYear();
ano_final[5] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[6] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_main_kpis_"+family[6]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento6+"' and (year,week) between ("+ano[5]+","+data_inicial[5]+") and ("+ano_final[5]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM " +tecnologia6 +"_kpi.vw_main_kpis_"+family[6] +"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento6 +"' and (year,week) between ("+ano[5]+","+data_inicial[5]+") and ("+ano_final[5]+","+data_final+") order by year,week";
}
}else if(estado == 2){

if(tecnologia6 == "umts"){	
if(family[6] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[6]+" = '"+elemento6+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b."+family[6]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY  date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[6]+" = '"+elemento6+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b."+family[6]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia6 == "lte"){	
if(family[6] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[6]+" = '"+elemento6+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b."+family[6]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[6]+" = '"+elemento6+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b."+family[6]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia6 == "gsm"){	
if(family[6] == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento6+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[6] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[6]+" = '"+elemento6+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b."+family[6]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[6] == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento6+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[6]+" = '"+elemento6+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b."+family[6]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}	
	
}else if(estado == 3){

if(tecnologia6 == "umts"){
	
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+family[6]+" where node != 'UNKNOWN' and node = '"+elemento6 +"' and (year,week) between ("+ano[5]+","+data_inicial[5]+") and ("+ano_final[5]+","+data_final+") order by year,week";

}else

if(tecnologia6 == "lte"){	

if(family[6] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+family[6]+" where "+family[6]+" != 'UNKNOWN' and "+family[6]+" = (SELECT get_enodeb_name('"+elemento6+"','enodeb'))::TEXT and (year,week) between ("+ano[5]+","+data_inicial[5]+") and ("+ano_final[5]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+family[6]+" where "+family[6]+" != 'UNKNOWN' and "+family[6]+" = '"+elemento6 +"' and (year,week) between ("+ano[5]+","+data_inicial[5]+") and ("+ano_final[5]+","+data_final+") order by year,week";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Weekly Period.");
return 0;
}
}else if(periodo == "monthly"){
data_inicial[5] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[5];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial[5] = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;
ano[5] = m.toDate().getUTCFullYear();
ano_final[5] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[6] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_main_kpis_"+family[6]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento6+"' and (year,month) between ('"+ano[5]+"','"+data_inicial[5]+"') and ('"+ano_final[5]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_main_kpis_"+family[6]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento6+"' and (year,month) between ('"+ano[5]+"','"+data_inicial[5]+"') and ('"+ano_final[5]+"','"+data_final+"') order by year,month";
}
}else if(estado == 2){

if(tecnologia6 == "umts"){	
if(family[6] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[6]+" = '"+elemento6+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b."+family[6]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[6]+" = '"+elemento6+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b."+family[6]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";	
}	
}else
if(tecnologia6 == "lte"){	
if(family[6] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[6]+" = '"+elemento6+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b."+family[6]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[6]+" = '"+elemento6+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b."+family[6]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}else
if(tecnologia6 == "gsm"){	
if(family[6] == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento6+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[6] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[6]+" = '"+elemento6+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b."+family[6]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[6] == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento6+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[6]+" = '"+elemento6+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[5]+"','"+data_inicial[5]+"') AND ('"+ano_final[5]+"','"+data_final+"') GROUP BY b."+family[6]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}	
	
}else if(estado == 3){

if(tecnologia6 == "umts"){
	
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+family[6]+" where node != 'UNKNOWN' and node = '"+elemento6 +"' and (year,month) between ('"+ano[5]+"','"+data_inicial[5]+"') and ('"+ano_final[5]+"','"+data_final+"') order by year,month";

}else

if(tecnologia6 == "lte"){	

if(family[6] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+family[6]+" where "+family[6]+" != 'UNKNOWN' and "+family[6]+" = (SELECT get_enodeb_name('"+elemento6+"','enodeb'))::TEXT and (year,month) between ('"+ano[5]+"','"+data_inicial[5]+"') and ('"+ano_final[5]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+family[6]+" where "+family[6]+" != 'UNKNOWN' and "+family[6]+" = '"+elemento6 +"' and (year,month) between ('"+ano[5]+"','"+data_inicial[5]+"') and ('"+ano_final[5]+"','"+data_final+"') order by year,month";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Monthly Period.");
return 0;
}	
}

if(estado != 2){
nome6 = elemento6+" "+kpi6+" ("+unidade6+")";
}else{
nome6 = elemento6+" "+kpi6;	
}

query6 = query;
document.getElementById("Texto_Teste6").innerHTML = query6;

autorization6 = false;
add_menu6 = true;

document.getElementById("btn_confirm6").style.visibility = "hidden";
// document.getElementById("btn_delete3").style.visibility = "visible";
if(lixeira6 == false){
// document.getElementById("btn_confirm7").style.visibility = "visible";
}
$("#radio_query6").prop("checked", false);
document.getElementById("Query_Menu6").style.opacity = 0.3;

document.getElementById("chart_type6").disabled = true;
document.getElementById("chart_position6").disabled = true;
}
document.getElementById("btn_confirm6").style.visibility = "hidden";
$("#radio_query6").prop("checked", false);
document.getElementById("chart_type6").disabled = true;
document.getElementById("chart_position6").disabled = true;
document.getElementById("Query_Menu6").style.opacity = 0.3;
}

function mostrar_charts7(){
		
query_num = 8;

if(auth_change == true){
elemento7 = document.getElementById("Elemento_Texto_Teste7").innerHTML;	
kpi7 = document.getElementById("KPI_Texto_Teste7").innerHTML;
counter_name = document.getElementById("KPI_Texto_Teste7").innerHTML;
nqi_name = document.getElementById("KPI_Texto_Teste7").innerHTML;	
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[6] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[7] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_main_kpis_"+family[7]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento7+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[6]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi7+" as node FROM " +tecnologia7 +"_kpi.vw_main_kpis_"+family[7] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento7 +"' and "+tempo+" between '"+data_inicial[6]+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}
}else
if(estado == 4){
if((rncc[7] != "rnc1") && (cellidd[7] != "cellid1")){	
query = "SELECT datetime as date, ee as node FROM umts_kpi.amx_load WHERE rnc = '"+rncc[7]+"' and cellid = '"+cellidd[7]+"' and datetime between '"+data_inicial[6]+"' and '"+data_final+" 23:30' and datetime::time between '"+hora_inicial+"' and '"+hora_final+"' order by datetime";
}else{
alert("The Voice Eralng Equivalent is only supported for cells.");
return 0;	
}	
}
}	else if(periodo == "daily"){

// alert(type_of_counter);
	
data_inicial[6] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[7] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_main_kpis_"+family[7]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento7+"' and date between '"+data_inicial[6]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi7+" as node FROM " +tecnologia7 +"_kpi.vw_main_kpis_"+family[7] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento7 +"' and "+tempo+" between '"+data_inicial[6]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia7 == "umts"){	
if(family[7] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[7]+" = '"+elemento7+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[6]+"' AND '"+data_final+"' GROUP BY b."+family[7]+",DATE ORDER BY DATE";
}else
if(family[7] == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[7]+" = '"+elemento7+"' and DATE BETWEEN '"+data_inicial[6]+"' AND '"+data_final+"' GROUP BY b."+family[7]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[7]+" = '"+elemento7+"' and DATE BETWEEN '"+data_inicial[6]+"' AND '"+data_final+"' GROUP BY b."+family[7]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia7 == "lte"){	
if(family[7] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[7]+" = '"+elemento7+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[6]+"' AND '"+data_final+"' GROUP BY b."+family[7]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[7]+" = '"+elemento7+"' and DATE BETWEEN '"+data_inicial[6]+"' AND '"+data_final+"' GROUP BY b."+family[7]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia7 == "gsm"){	
if(family[7] == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento7+"' and DATE BETWEEN '"+data_inicial[6]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(family[7] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[7]+" = '"+elemento7+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[6]+"' AND '"+data_final+"' GROUP BY b."+family[7]+",DATE ORDER BY DATE";
}else
if(family[7] == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento7+"' and DATE BETWEEN '"+data_inicial[6]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[7]+" = '"+elemento7+"' and DATE BETWEEN '"+data_inicial[6]+"' AND '"+data_final+"' GROUP BY b."+family[7]+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia7 == "umts"){
	
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_nqi_"+periodo+"_"+family[7]
+" where node != 'UNKNOWN' and node = '"+elemento7 +"' and "+tempo+" between '"+data_inicial[6]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia7 == "lte"){	

if(family[7] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_nqi_"+periodo+"_"+family[7]+" where "+family[7]+" != 'UNKNOWN' and "+family[7]+" = (SELECT get_enodeb_name('"+elemento7+"','enodeb'))::TEXT and date between '"+data_inicial[6]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_nqi_"+periodo+"_"+family[7]
+" where "+family[7]+" != 'UNKNOWN' and "+family[7]+" = '"+elemento7 +"' and "+tempo+" between '"+data_inicial[6]+"' and '"+data_final
+"' order by "+tempo+"";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Daily Period.");
return 0;
}
}
else if(periodo == "weekly"){
data_inicial[6] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[6];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
//document.getElementById("Teste_MonthNumber").innerHTML = m.toDate().getUTCMonth() + 1;
data_inicial[6] = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();
ano[6] = m.toDate().getUTCFullYear();
ano_final[6] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[7] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_main_kpis_"+family[7]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento7+"' and (year,week) between ("+ano[6]+","+data_inicial[6]+") and ("+ano_final[6]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi7+" as node FROM " +tecnologia7 +"_kpi.vw_main_kpis_"+family[7] +"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento7 +"' and (year,week) between ("+ano[6]+","+data_inicial[6]+") and ("+ano_final[6]+","+data_final+") order by year,week";
}
}else if(estado == 2){

if(tecnologia7 == "umts"){	
if(family[7] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[7]+" = '"+elemento7+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b."+family[7]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY  date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[7]+" = '"+elemento7+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b."+family[7]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia7 == "lte"){	
if(family[7] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[7]+" = '"+elemento7+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b."+family[7]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[7]+" = '"+elemento7+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b."+family[7]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia7 == "gsm"){	
if(family[7] == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento7+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[7] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[7]+" = '"+elemento7+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b."+family[7]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[7] == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento7+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[7]+" = '"+elemento7+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b."+family[7]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}	
	
}else if(estado == 3){

if(tecnologia7 == "umts"){
	
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_nqi_"+periodo+"_"+family[7]+" where node != 'UNKNOWN' and node = '"+elemento7 +"' and (year,week) between ("+ano[6]+","+data_inicial[6]+") and ("+ano_final[6]+","+data_final+") order by year,week";

}else

if(tecnologia7 == "lte"){	

if(family[7] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_nqi_"+periodo+"_"+family[7]+" where "+family[7]+" != 'UNKNOWN' and "+family[7]+" = (SELECT get_enodeb_name('"+elemento7+"','enodeb'))::TEXT and (year,week) between ("+ano[6]+","+data_inicial[6]+") and ("+ano_final[6]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_nqi_"+periodo+"_"+family[7]+" where "+family[7]+" != 'UNKNOWN' and "+family[7]+" = '"+elemento7 +"' and (year,week) between ("+ano[6]+","+data_inicial[6]+") and ("+ano_final[6]+","+data_final+") order by year,week";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Weekly Period.");
return 0;
}
}else if(periodo == "monthly"){
data_inicial[6] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[6];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial[6] = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;
ano[6] = m.toDate().getUTCFullYear();
ano_final[6] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[7] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_main_kpis_"+family[7]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento7+"' and (year,month) between ('"+ano[6]+"','"+data_inicial[6]+"') and ('"+ano_final[6]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_main_kpis_"+family[7]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento7+"' and (year,month) between ('"+ano[6]+"','"+data_inicial[6]+"') and ('"+ano_final[6]+"','"+data_final+"') order by year,month";
}
}else if(estado == 2){

if(tecnologia7 == "umts"){	
if(family[7] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[7]+" = '"+elemento7+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b."+family[7]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[7]+" = '"+elemento7+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b."+family[7]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";	
}	
}else
if(tecnologia7 == "lte"){	
if(family[7] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[7]+" = '"+elemento7+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b."+family[7]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[7]+" = '"+elemento7+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b."+family[7]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}else
if(tecnologia7 == "gsm"){	
if(family[7] == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento7+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[7] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[7]+" = '"+elemento7+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b."+family[7]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[7] == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento7+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[7]+" = '"+elemento7+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[6]+"','"+data_inicial[6]+"') AND ('"+ano_final[6]+"','"+data_final+"') GROUP BY b."+family[7]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}	
	
}else if(estado == 3){

if(tecnologia7 == "umts"){
	
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_nqi_"+periodo+"_"+family[7]+" where node != 'UNKNOWN' and node = '"+elemento7 +"' and (year,month) between ('"+ano[6]+"','"+data_inicial[6]+"') and ('"+ano_final[6]+"','"+data_final+"') order by year,month";

}else

if(tecnologia7 == "lte"){	

if(family[7] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_nqi_"+periodo+"_"+family[7]+" where "+family[7]+" != 'UNKNOWN' and "+family[7]+" = (SELECT get_enodeb_name('"+elemento7+"','enodeb'))::TEXT and (year,month) between ('"+ano[6]+"','"+data_inicial[6]+"') and ('"+ano_final[6]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi7+" as node FROM "+tecnologia7+"_kpi.vw_nqi_"+periodo+"_"+family[7]+" where "+family[7]+" != 'UNKNOWN' and "+family[7]+" = '"+elemento7 +"' and (year,month) between ('"+ano[6]+"','"+data_inicial[6]+"') and ('"+ano_final[6]+"','"+data_final+"') order by year,month";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Monthly Period.");
return 0;
}	
}

if(estado != 2){
nome7 = elemento7+" "+kpi7+" ("+unidade7+")";
}else{
nome7 = elemento7+" "+kpi7;	
}

query7 = query;
document.getElementById("Texto_Teste7").innerHTML = query7;

autorization7 = false;
add_menu7 = true;

document.getElementById("btn_confirm7").style.visibility = "hidden";
// document.getElementById("btn_delete3").style.visibility = "visible";
if(lixeira7 == false){
// document.getElementById("btn_confirm7").style.visibility = "visible";
}
$("#radio_query7").prop("checked", false);
document.getElementById("Query_Menu7").style.opacity = 0.3;

document.getElementById("chart_type7").disabled = true;
document.getElementById("chart_position7").disabled = true;
}
document.getElementById("btn_confirm7").style.visibility = "hidden";
$("#radio_query7").prop("checked", false);
document.getElementById("chart_type7").disabled = true;
document.getElementById("chart_position7").disabled = true;
document.getElementById("Query_Menu7").style.opacity = 0.3;
}

function mostrar_charts8(){
		
query_num = 8;

if(auth_change == true){
elemento8 = document.getElementById("Elemento_Texto_Teste8").innerHTML;	
kpi8 = document.getElementById("KPI_Texto_Teste8").innerHTML;
counter_name = document.getElementById("KPI_Texto_Teste8").innerHTML;
nqi_name = document.getElementById("KPI_Texto_Teste8").innerHTML;	
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[7] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[8] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_main_kpis_"+family[8]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento8+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[7]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi8+" as node FROM " +tecnologia8 +"_kpi.vw_main_kpis_"+family[8] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento8 +"' and "+tempo+" between '"+data_inicial[7]+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}
}else
if(estado == 4){
if((rncc[8] != "rnc1") && (cellidd[8] != "cellid1")){	
query = "SELECT datetime as date, ee as node FROM umts_kpi.amx_load WHERE rnc = '"+rncc[8]+"' and cellid = '"+cellidd[8]+"' and datetime between '"+data_inicial[7]+"' and '"+data_final+" 23:30' and datetime::time between '"+hora_inicial+"' and '"+hora_final+"' order by datetime";
}else{
alert("The Voice Eralng Equivalent is only supported for cells.");
return 0;	
}	
}
}	else if(periodo == "daily"){

// alert(type_of_counter);
	
data_inicial[7] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[8] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_main_kpis_"+family[8]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento8+"' and date between '"+data_inicial[7]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi8+" as node FROM " +tecnologia8 +"_kpi.vw_main_kpis_"+family[8] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento8 +"' and "+tempo+" between '"+data_inicial[7]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia8 == "umts"){	
if(family[8] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[8]+" = '"+elemento8+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[7]+"' AND '"+data_final+"' GROUP BY b."+family[8]+",DATE ORDER BY DATE";
}else
if(family[8] == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[8]+" = '"+elemento8+"' and DATE BETWEEN '"+data_inicial[7]+"' AND '"+data_final+"' GROUP BY b."+family[8]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[8]+" = '"+elemento8+"' and DATE BETWEEN '"+data_inicial[7]+"' AND '"+data_final+"' GROUP BY b."+family[8]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia8 == "lte"){	
if(family[8] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[8]+" = '"+elemento8+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[7]+"' AND '"+data_final+"' GROUP BY b."+family[8]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[8]+" = '"+elemento8+"' and DATE BETWEEN '"+data_inicial[7]+"' AND '"+data_final+"' GROUP BY b."+family[8]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia8 == "gsm"){	
if(family[8] == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento8+"' and DATE BETWEEN '"+data_inicial[7]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(family[8] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[8]+" = '"+elemento8+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[7]+"' AND '"+data_final+"' GROUP BY b."+family[8]+",DATE ORDER BY DATE";
}else
if(family[8] == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento8+"' and DATE BETWEEN '"+data_inicial[7]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[8]+" = '"+elemento8+"' and DATE BETWEEN '"+data_inicial[7]+"' AND '"+data_final+"' GROUP BY b."+family[8]+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia8 == "umts"){
	
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_nqi_"+periodo+"_"+family[8]
+" where node != 'UNKNOWN' and node = '"+elemento8 +"' and "+tempo+" between '"+data_inicial[7]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia8 == "lte"){	

if(family[8] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_nqi_"+periodo+"_"+family[8]+" where "+family[8]+" != 'UNKNOWN' and "+family[8]+" = (SELECT get_enodeb_name('"+elemento8+"','enodeb'))::TEXT and date between '"+data_inicial[7]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_nqi_"+periodo+"_"+family[8]
+" where "+family[8]+" != 'UNKNOWN' and "+family[8]+" = '"+elemento8 +"' and "+tempo+" between '"+data_inicial[7]+"' and '"+data_final
+"' order by "+tempo+"";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Daily Period.");
return 0;
}
}
else if(periodo == "weekly"){
data_inicial[7] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[7];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
//document.getElementById("Teste_MonthNumber").innerHTML = m.toDate().getUTCMonth() + 1;
data_inicial[7] = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();
ano[7] = m.toDate().getUTCFullYear();
ano_final[7] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[8] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_main_kpis_"+family[8]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento8+"' and (year,week) between ("+ano[7]+","+data_inicial[7]+") and ("+ano_final[7]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi8+" as node FROM " +tecnologia8 +"_kpi.vw_main_kpis_"+family[8] +"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento8 +"' and (year,week) between ("+ano[7]+","+data_inicial[7]+") and ("+ano_final[7]+","+data_final+") order by year,week";
}
}else if(estado == 2){

if(tecnologia8 == "umts"){	
if(family[8] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[8]+" = '"+elemento8+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b."+family[8]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[8]+" = '"+elemento8+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b."+family[8]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia8 == "lte"){	
if(family[8] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[8]+" = '"+elemento8+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b."+family[8]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[8]+" = '"+elemento8+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b."+family[8]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia8 == "gsm"){	
if(family[8] == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento8+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[8] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[8]+" = '"+elemento8+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b."+family[8]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[8] == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento8+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[8]+" = '"+elemento8+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b."+family[8]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}	
	
}else if(estado == 3){

if(tecnologia8 == "umts"){
	
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_nqi_"+periodo+"_"+family[8]+" where node != 'UNKNOWN' and node = '"+elemento8 +"' and (year,week) between ("+ano[7]+","+data_inicial[7]+") and ("+ano_final[7]+","+data_final+") order by year,week";

}else

if(tecnologia8 == "lte"){	

if(family[8] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_nqi_"+periodo+"_"+family[8]+" where "+family[8]+" != 'UNKNOWN' and "+family[8]+" = (SELECT get_enodeb_name('"+elemento8+"','enodeb'))::TEXT and (year,week) between ("+ano[7]+","+data_inicial[7]+") and ("+ano_final[7]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_nqi_"+periodo+"_"+family[8]+" where "+family[8]+" != 'UNKNOWN' and "+family[8]+" = '"+elemento8 +"' and (year,week) between ("+ano[7]+","+data_inicial[7]+") and ("+ano_final[7]+","+data_final+") order by year,week";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Weekly Period.");
return 0;
}
}else if(periodo == "monthly"){
data_inicial[7] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[7];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial[7] = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;
ano[7] = m.toDate().getUTCFullYear();
ano_final[7] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[8] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_main_kpis_"+family[8]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento8+"' and (year,month) between ('"+ano[7]+"','"+data_inicial[7]+"') and ('"+ano_final[7]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_main_kpis_"+family[8]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento8+"' and (year,month) between ('"+ano[7]+"','"+data_inicial[7]+"') and ('"+ano_final[7]+"','"+data_final+"') order by year,month";
}
}else if(estado == 2){

if(tecnologia8 == "umts"){	
if(family[8] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[8]+" = '"+elemento8+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b."+family[8]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[8]+" = '"+elemento8+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b."+family[8]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";	
}	
}else
if(tecnologia8 == "lte"){	
if(family[8] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[8]+" = '"+elemento8+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b."+family[8]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[8]+" = '"+elemento8+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b."+family[8]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}else
if(tecnologia8 == "gsm"){	
if(family[8] == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento8+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[8] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[8]+" = '"+elemento8+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b."+family[8]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[8] == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento8+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[8]+" = '"+elemento8+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[7]+"','"+data_inicial[7]+"') AND ('"+ano_final[7]+"','"+data_final+"') GROUP BY b."+family[8]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}	
	
}else if(estado == 3){

if(tecnologia8 == "umts"){
	
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_nqi_"+periodo+"_"+family[8]+" where node != 'UNKNOWN' and node = '"+elemento8 +"' and (year,month) between ('"+ano[7]+"','"+data_inicial[7]+"') and ('"+ano_final[7]+"','"+data_final+"') order by year,month";

}else

if(tecnologia8 == "lte"){	

if(family[8] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_nqi_"+periodo+"_"+family[8]+" where "+family[8]+" != 'UNKNOWN' and "+family[8]+" = (SELECT get_enodeb_name('"+elemento8+"','enodeb'))::TEXT and (year,month) between ('"+ano[7]+"','"+data_inicial[7]+"') and ('"+ano_final[7]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi8+" as node FROM "+tecnologia8+"_kpi.vw_nqi_"+periodo+"_"+family[8]+" where "+family[8]+" != 'UNKNOWN' and "+family[8]+" = '"+elemento8 +"' and (year,month) between ('"+ano[7]+"','"+data_inicial[7]+"') and ('"+ano_final[7]+"','"+data_final+"') order by year,month";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Monthly Period.");
return 0;
}	
}

if(estado != 2){
nome8 = elemento8+" "+kpi8+" ("+unidade8+")";
}else{
nome8 = elemento8+" "+kpi8;	
}

query8 = query;
document.getElementById("Texto_Teste8").innerHTML = query8;

autorization8 = false;
add_menu8 = true;

document.getElementById("btn_confirm8").style.visibility = "hidden";
// document.getElementById("btn_delete3").style.visibility = "visible";
if(lixeira8 == false){
// document.getElementById("btn_confirm8").style.visibility = "visible";
}
$("#radio_query8").prop("checked", false);
document.getElementById("Query_Menu8").style.opacity = 0.3;

document.getElementById("chart_type8").disabled = true;
document.getElementById("chart_position8").disabled = true;
}
document.getElementById("btn_confirm8").style.visibility = "hidden";
$("#radio_query8").prop("checked", false);
document.getElementById("chart_type8").disabled = true;
document.getElementById("chart_position8").disabled = true;
document.getElementById("Query_Menu8").style.opacity = 0.3;
}

function mostrar_charts9(){
		
query_num = 9;

if(auth_change == true){
elemento9 = document.getElementById("Elemento_Texto_Teste9").innerHTML;	
kpi9 = document.getElementById("KPI_Texto_Teste9").innerHTML;
counter_name = document.getElementById("KPI_Texto_Teste9").innerHTML;
nqi_name = document.getElementById("KPI_Texto_Teste9").innerHTML;	
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[8] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[9] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_main_kpis_"+family[9]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento9+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[8]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi9+" as node FROM " +tecnologia9 +"_kpi.vw_main_kpis_"+family[9] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento9 +"' and "+tempo+" between '"+data_inicial[8]+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}
}else
if(estado == 4){
if((rncc[9] != "rnc1") && (cellidd[9] != "cellid1")){	
query = "SELECT datetime as date, ee as node FROM umts_kpi.amx_load WHERE rnc = '"+rncc[9]+"' and cellid = '"+cellidd[9]+"' and datetime between '"+data_inicial[8]+"' and '"+data_final+" 23:30' and datetime::time between '"+hora_inicial+"' and '"+hora_final+"' order by datetime";
}else{
alert("The Voice Eralng Equivalent is only supported for cells.");
return 0;	
}	
}
}	else if(periodo == "daily"){

// alert(type_of_counter);
	
data_inicial[8] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(family[9] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_main_kpis_"+family[9]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento9+"' and date between '"+data_inicial[8]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi9+" as node FROM " +tecnologia9 +"_kpi.vw_main_kpis_"+family[9] +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento9 +"' and "+tempo+" between '"+data_inicial[8]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia9 == "umts"){	
if(family[9] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[9]+" = '"+elemento9+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[8]+"' AND '"+data_final+"' GROUP BY b."+family[9]+",DATE ORDER BY DATE";
}else
if(family[9] == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[9]+" = '"+elemento9+"' and DATE BETWEEN '"+data_inicial[8]+"' AND '"+data_final+"' GROUP BY b."+family[9]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[9]+" = '"+elemento9+"' and DATE BETWEEN '"+data_inicial[8]+"' AND '"+data_final+"' GROUP BY b."+family[9]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia9 == "lte"){	
if(family[9] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[9]+" = '"+elemento9+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[8]+"' AND '"+data_final+"' GROUP BY b."+family[9]+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[9]+" = '"+elemento9+"' and DATE BETWEEN '"+data_inicial[8]+"' AND '"+data_final+"' GROUP BY b."+family[9]+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia9 == "gsm"){	
if(family[9] == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento9+"' and DATE BETWEEN '"+data_inicial[8]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(family[9] == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[9]+" = '"+elemento9+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[8]+"' AND '"+data_final+"' GROUP BY b."+family[9]+",DATE ORDER BY DATE";
}else
if(family[9] == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento9+"' and DATE BETWEEN '"+data_inicial[8]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[9]+" = '"+elemento9+"' and DATE BETWEEN '"+data_inicial[8]+"' AND '"+data_final+"' GROUP BY b."+family[9]+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia9 == "umts"){
	
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_nqi_"+periodo+"_"+family[9]
+" where node != 'UNKNOWN' and node = '"+elemento9 +"' and "+tempo+" between '"+data_inicial[8]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia9 == "lte"){	

if(family[9] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_nqi_"+periodo+"_"+family[9]+" where "+family[9]+" != 'UNKNOWN' and "+family[9]+" = (SELECT get_enodeb_name('"+elemento9+"','enodeb'))::TEXT and date between '"+data_inicial[8]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_nqi_"+periodo+"_"+family[9]
+" where "+family[9]+" != 'UNKNOWN' and "+family[9]+" = '"+elemento9 +"' and "+tempo+" between '"+data_inicial[8]+"' and '"+data_final
+"' order by "+tempo+"";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Daily Period.");
return 0;
}
}
else if(periodo == "weekly"){
data_inicial[8] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[8];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
//document.getElementById("Teste_MonthNumber").innerHTML = m.toDate().getUTCMonth() + 1;
data_inicial[8] = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();
ano[8] = m.toDate().getUTCFullYear();
ano_final[8] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[9] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_main_kpis_"+family[9]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento9+"' and (year,week) between ("+ano[8]+","+data_inicial[8]+") and ("+ano_final[8]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi9+" as node FROM " +tecnologia9 +"_kpi.vw_main_kpis_"+family[9] +"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento9 +"' and (year,week) between ("+ano[8]+","+data_inicial[8]+") and ("+ano_final[8]+","+data_final+") order by year,week";
}
}else if(estado == 2){

if(tecnologia9 == "umts"){	
if(family[9] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[9]+" = '"+elemento9+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b."+family[9]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY  date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[9]+" = '"+elemento9+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b."+family[9]+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia9 == "lte"){	
if(family[9] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[9]+" = '"+elemento9+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[2]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b."+family[9]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[9]+" = '"+elemento9+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b."+family[9]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia9 == "gsm"){	
if(family[9] == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento9+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[9] == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[9]+" = '"+elemento9+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b."+family[9]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else
if(family[9] == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento9+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[9]+" = '"+elemento9+"' and (date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b."+family[9]+",date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('year'::text, date), date_part('week'::text, date %2B '1 day'::interval)";
}	
}
	
}else if(estado == 3){

if(tecnologia9 == "umts"){
	
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_nqi_"+periodo+"_"+family[9]+" where node != 'UNKNOWN' and node = '"+elemento9 +"' and (year,week) between ("+ano[8]+","+data_inicial[8]+") and ("+ano_final[8]+","+data_final+") order by year,week";

}else

if(tecnologia9 == "lte"){	

if(family[9] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_nqi_"+periodo+"_"+family[9]+" where "+family[9]+" != 'UNKNOWN' and "+family[9]+" = (SELECT get_enodeb_name('"+elemento9+"','enodeb'))::TEXT and (year,week) between ("+ano[8]+","+data_inicial[8]+") and ("+ano_final[8]+","+data_final+") order by year,week";
}else {	
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_nqi_"+periodo+"_"+family[9]+" where "+family[9]+" != 'UNKNOWN' and "+family[9]+" = '"+elemento9 +"' and (year,week) between ("+ano[8]+","+data_inicial[8]+") and ("+ano_final[8]+","+data_final+") order by year,week";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Weekly Period.");
return 0;
}
}else if(periodo == "monthly"){
data_inicial[8] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[8];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial[8] = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;
ano[8] = m.toDate().getUTCFullYear();
ano_final[8] = n.toDate().getUTCFullYear();

if(estado == 1){
if(family[9] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_main_kpis_"+family[9]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento9+"' and (year,month) between ('"+ano[8]+"','"+data_inicial[8]+"') and ('"+ano_final[8]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_main_kpis_"+family[9]+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento9+"' and (year,month) between ('"+ano[8]+"','"+data_inicial[8]+"') and ('"+ano_final[8]+"','"+data_final+"') order by year,month";
}
}else if(estado == 2){

if(tecnologia9 == "umts"){	
if(family[9] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[9]+" = '"+elemento9+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b."+family[9]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+family[9]+" = '"+elemento9+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b."+family[9]+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";	
}	
}else
if(tecnologia9 == "lte"){	
if(family[9] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[9]+" = '"+elemento9+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b."+family[9]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+family[9]+" = '"+elemento9+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b."+family[9]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}else
if(tecnologia9 == "gsm"){	
if(family[9] == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento9+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b.cellname,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[9] == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[9]+" = '"+elemento9+"' and uf = '"+uf+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b."+family[9]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else
if(family[9] == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento9+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b.regional,date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+family[9]+" = '"+elemento9+"' and (date_part('year'::text, date),date_part('month'::text, date)) BETWEEN ('"+ano[8]+"','"+data_inicial[8]+"') AND ('"+ano_final[8]+"','"+data_final+"') GROUP BY b."+family[9]+",date_part('year'::text, date), date_part('month'::text, date) ORDER BY date_part('year'::text, date), date_part('month'::text, date)";
}	
}	
	
}else if(estado == 3){

if(tecnologia9 == "umts"){
	
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_nqi_"+periodo+"_"+family[9]+" where node != 'UNKNOWN' and node = '"+elemento9 +"' and (year,month) between ('"+ano[8]+"','"+data_inicial[8]+"') and ('"+ano_final[8]+"','"+data_final+"') order by year,month";

}else

if(tecnologia9 == "lte"){	

if(family[9] == "eNodeB"){
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_nqi_"+periodo+"_"+family[9]+" where "+family[9]+" != 'UNKNOWN' and "+family[9]+" = (SELECT get_enodeb_name('"+elemento9+"','enodeb'))::TEXT and (year,month) between ('"+ano[8]+"','"+data_inicial[8]+"') and ('"+ano_final[8]+"','"+data_final+"') order by year,month";
}else {	
query = "SELECT "+tempo+", "+kpi9+" as node FROM "+tecnologia9+"_kpi.vw_nqi_"+periodo+"_"+family[9]+" where "+family[9]+" != 'UNKNOWN' and "+family[9]+" = '"+elemento9 +"' and (year,month) between ('"+ano[8]+"','"+data_inicial[8]+"') and ('"+ano_final[8]+"','"+data_final+"') order by year,month";
}
}

}else if(estado == 4){
alert("The Voice Eralng Equivalent is not supported for Monthly Period.");
return 0;
}	
}

if(estado != 2){
nome9 = elemento9+" "+kpi9+" ("+unidade9+")";
}else{
nome9 = elemento9+" "+kpi9;	
}

query9 = query;
document.getElementById("Texto_Teste9").innerHTML = query9;

autorization9 = false;
add_menu9 = true;

document.getElementById("btn_confirm9").style.visibility = "hidden";
// document.getElementById("btn_delete3").style.visibility = "visible";
if(lixeira9 == false){
// document.getElementById("btn_confirm9").style.visibility = "visible";
}
$("#radio_query9").prop("checked", false);
document.getElementById("Query_Menu9").style.opacity = 0.3;

document.getElementById("chart_type9").disabled = true;
document.getElementById("chart_position9").disabled = true;
}
document.getElementById("btn_confirm9").style.visibility = "hidden";
$("#radio_query9").prop("checked", false);
document.getElementById("chart_type9").disabled = true;
document.getElementById("chart_position9").disabled = true;
document.getElementById("Query_Menu9").style.opacity = 0.3;
}			


function mostrar_GSM(){
	
var vis_q1 = document.getElementById("Query1");
var vis_q2 = document.getElementById("Query2");
var vis_q3 = document.getElementById("Query3");
var vis_q4 = document.getElementById("Query4");
var vis_q5 = document.getElementById("Query5");
var vis_q6 = document.getElementById("Query6");
var vis_q7 = document.getElementById("Query7");
var vis_q8 = document.getElementById("Query8");
var vis_q9 = document.getElementById("Query9");	

if((vis_q1.style.display == "inline-block") || slider == true){
tecnologia1 = "gsm";
}
if((vis_q2.style.display == "inline-block") || slider == true){
tecnologia2 = "gsm";
}
if((vis_q3.style.display == "inline-block") || slider == true){
tecnologia3 = "gsm";
}
if((vis_q4.style.display == "inline-block") || slider == true){
tecnologia4 = "gsm";
}
if((vis_q5.style.display == "inline-block") || slider == true){
tecnologia5 = "gsm";
}
if((vis_q6.style.display == "inline-block") || slider == true){
tecnologia6 = "gsm";
}
if((vis_q7.style.display == "inline-block") || slider == true){
tecnologia7 = "gsm";
}
if((vis_q8.style.display == "inline-block") || slider == true){
tecnologia8 = "gsm";
}
if((vis_q9.style.display == "inline-block") || slider == true){
tecnologia9 = "gsm";
}


if(autorization1 == true){
document.getElementById("Tecnologia_Texto_Teste1").innerHTML = "GSM";
document.getElementById("Tecnologia_Seta_1").style.visibility = "visible";
}
if(autorization2 == true){
document.getElementById("Tecnologia_Texto_Teste2").innerHTML = "GSM";
document.getElementById("Tecnologia_Seta_2").style.visibility = "visible";
}
if(autorization3 == true){
document.getElementById("Tecnologia_Texto_Teste3").innerHTML = "GSM";
document.getElementById("Tecnologia_Seta_3").style.visibility = "visible";
}
if(autorization4 == true){
document.getElementById("Tecnologia_Texto_Teste4").innerHTML = "GSM";
document.getElementById("Tecnologia_Seta_4").style.visibility = "visible";
}
if(autorization5 == true){
document.getElementById("Tecnologia_Texto_Teste5").innerHTML = "GSM";
document.getElementById("Tecnologia_Seta_5").style.visibility = "visible";
}
if(autorization6 == true){
document.getElementById("Tecnologia_Texto_Teste6").innerHTML = "GSM";
document.getElementById("Tecnologia_Seta_6").style.visibility = "visible";
}
if(autorization7 == true){
document.getElementById("Tecnologia_Texto_Teste7").innerHTML = "GSM";
document.getElementById("Tecnologia_Seta_7").style.visibility = "visible";
}
if(autorization8 == true){
document.getElementById("Tecnologia_Texto_Teste8").innerHTML = "GSM";
document.getElementById("Tecnologia_Seta_8").style.visibility = "visible";
}
if(autorization9 == true){
document.getElementById("Tecnologia_Texto_Teste9").innerHTML = "GSM";
document.getElementById("Tecnologia_Seta_9").style.visibility = "visible";
}

//document.getElementById("Texto_Teste").innerHTML = query;
	
document.getElementById("Technology").innerHTML = "GSM";
document.getElementById("Div_GSM").style.display = "block";
document.getElementById("Div_UMTS").style.display = "none";
document.getElementById("Div_LTE").style.display = "none";
document.getElementById("Div_Elementos_GSM").style.display = "block";
document.getElementById("Div_Elementos_UMTS").style.display = "none";
document.getElementById("Div_Elementos_LTE").style.display = "none";

auth_change = true;

}

function mostrar_UMTS(){

var vis_q1 = document.getElementById("Query1");
var vis_q2 = document.getElementById("Query2");
var vis_q3 = document.getElementById("Query3");
var vis_q4 = document.getElementById("Query4");
var vis_q5 = document.getElementById("Query5");
var vis_q6 = document.getElementById("Query6");	
var vis_q7 = document.getElementById("Query7");
var vis_q8 = document.getElementById("Query8");
var vis_q9 = document.getElementById("Query9");	
	
if((vis_q1.style.display == "inline-block") || slider == true){
tecnologia1 = "umts";
}
if((vis_q2.style.display == "inline-block") || slider == true){
tecnologia2 = "umts";
}
if((vis_q3.style.display == "inline-block") || slider == true){
tecnologia3 = "umts";
}
if((vis_q4.style.display == "inline-block") || slider == true){
tecnologia4 = "umts";
}
if((vis_q5.style.display == "inline-block") || slider == true){
tecnologia5 = "umts";
}
if((vis_q6.style.display == "inline-block") || slider == true){
tecnologia6 = "umts";
}
if((vis_q7.style.display == "inline-block") || slider == true){
tecnologia7 = "umts";
}
if((vis_q8.style.display == "inline-block") || slider == true){
tecnologia8 = "umts";
}
if((vis_q9.style.display == "inline-block") || slider == true){
tecnologia9 = "umts";
}


if(autorization1 == true){
document.getElementById("Tecnologia_Texto_Teste1").innerHTML = "UMTS";
document.getElementById("Tecnologia_Seta_1").style.visibility = "visible";
}
if(autorization2 == true){
document.getElementById("Tecnologia_Texto_Teste2").innerHTML = "UMTS";
document.getElementById("Tecnologia_Seta_2").style.visibility = "visible";
}
if(autorization3 == true){
document.getElementById("Tecnologia_Texto_Teste3").innerHTML = "UMTS";
document.getElementById("Tecnologia_Seta_3").style.visibility = "visible";
}
if(autorization4 == true){
document.getElementById("Tecnologia_Texto_Teste4").innerHTML = "UMTS";
document.getElementById("Tecnologia_Seta_4").style.visibility = "visible";
}
if(autorization5 == true){
document.getElementById("Tecnologia_Texto_Teste5").innerHTML = "UMTS";
document.getElementById("Tecnologia_Seta_5").style.visibility = "visible";
}
if(autorization6 == true){
document.getElementById("Tecnologia_Texto_Teste6").innerHTML = "UMTS";
document.getElementById("Tecnologia_Seta_6").style.visibility = "visible";
}
if(autorization7 == true){
document.getElementById("Tecnologia_Texto_Teste7").innerHTML = "UMTS";
document.getElementById("Tecnologia_Seta_7").style.visibility = "visible";
}
if(autorization8 == true){
document.getElementById("Tecnologia_Texto_Teste8").innerHTML = "UMTS";
document.getElementById("Tecnologia_Seta_8").style.visibility = "visible";
}
if(autorization9 == true){
document.getElementById("Tecnologia_Texto_Teste9").innerHTML = "UMTS";
document.getElementById("Tecnologia_Seta_9").style.visibility = "visible";
}
//document.getElementById("Texto_Teste").innerHTML = query;	

document.getElementById("Technology").innerHTML = "UMTS";
document.getElementById("Div_UMTS").style.display = "block";
document.getElementById("Div_GSM").style.display = "none";
document.getElementById("Div_LTE").style.display = "none";
document.getElementById("Div_Elementos_UMTS").style.display = "block";
document.getElementById("Div_Elementos_LTE").style.display = "none";
document.getElementById("Div_Elementos_GSM").style.display = "none";

auth_change = true;

}

function mostrar_LTE(){
	
var vis_q1 = document.getElementById("Query1");
var vis_q2 = document.getElementById("Query2");
var vis_q3 = document.getElementById("Query3");
var vis_q4 = document.getElementById("Query4");
var vis_q5 = document.getElementById("Query5");
var vis_q6 = document.getElementById("Query6");
var vis_q7 = document.getElementById("Query7");
var vis_q8 = document.getElementById("Query8");
var vis_q9 = document.getElementById("Query9");	
	
if((vis_q1.style.display == "inline-block") || slider == true){
tecnologia1 = "lte";
}
if((vis_q2.style.display == "inline-block") || slider == true){
tecnologia2 = "lte";
}
if((vis_q3.style.display == "inline-block") || slider == true){
tecnologia3 = "lte";
}
if((vis_q4.style.display == "inline-block") || slider == true){
tecnologia4 = "lte";
}
if((vis_q5.style.display == "inline-block") || slider == true){
tecnologia5 = "lte";
}
if((vis_q6.style.display == "inline-block") || slider == true){
tecnologia6 = "lte";
}
if((vis_q7.style.display == "inline-block") || slider == true){
tecnologia7 = "lte";
}
if((vis_q8.style.display == "inline-block") || slider == true){
tecnologia8 = "lte";
}
if((vis_q9.style.display == "inline-block") || slider == true){
tecnologia9 = "lte";
}

if(autorization1 == true){
document.getElementById("Tecnologia_Texto_Teste1").innerHTML = "LTE";
document.getElementById("Tecnologia_Seta_1").style.visibility = "visible";
}
if(autorization2 == true){
document.getElementById("Tecnologia_Texto_Teste2").innerHTML = "LTE";
document.getElementById("Tecnologia_Seta_2").style.visibility = "visible";
}
if(autorization3 == true){
document.getElementById("Tecnologia_Texto_Teste3").innerHTML = "LTE";
document.getElementById("Tecnologia_Seta_3").style.visibility = "visible";
}
if(autorization4 == true){
document.getElementById("Tecnologia_Texto_Teste4").innerHTML = "LTE";
document.getElementById("Tecnologia_Seta_4").style.visibility = "visible";
}
if(autorization5 == true){
document.getElementById("Tecnologia_Texto_Teste5").innerHTML = "LTE";
document.getElementById("Tecnologia_Seta_5").style.visibility = "visible";
}
if(autorization6 == true){
document.getElementById("Tecnologia_Texto_Teste6").innerHTML = "LTE";
document.getElementById("Tecnologia_Seta_6").style.visibility = "visible";
}
if(autorization7 == true){
document.getElementById("Tecnologia_Texto_Teste7").innerHTML = "LTE";
document.getElementById("Tecnologia_Seta_7").style.visibility = "visible";
}
if(autorization8 == true){
document.getElementById("Tecnologia_Texto_Teste8").innerHTML = "LTE";
document.getElementById("Tecnologia_Seta_8").style.visibility = "visible";
}
if(autorization9 == true){
document.getElementById("Tecnologia_Texto_Teste9").innerHTML = "LTE";
document.getElementById("Tecnologia_Seta_9").style.visibility = "visible";
}
//document.getElementById("Texto_Teste").innerHTML = query;	

document.getElementById("Technology").innerHTML = "LTE";
document.getElementById("Div_LTE").style.display = "block";
document.getElementById("Div_GSM").style.display = "none";
document.getElementById("Div_UMTS").style.display = "none";
document.getElementById("Div_Elementos_LTE").style.display = "block";
document.getElementById("Div_Elementos_UMTS").style.display = "none";
document.getElementById("Div_Elementos_GSM").style.display = "none";

auth_change = true;

}

function mostrar_Hora(){

if(periodo != ""){
for(i = 0; i<= 8; i++){
data_inicial[i] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

var f = i + 1;

var di = "Date_Inicial_Texto_Teste"+f;
var df = "Date_Final_Texto_Teste"+f;
var hi = "Hora_Inicial_Texto_Teste"+f;
var hf = "Hora_Final_Texto_Teste"+f;

document.getElementById(di).innerHTML = data_inicial[i]+" to";
document.getElementById(df).innerHTML = data_final+ " from";

hora_inicial = $("#Drop_Hora_Inicial option:selected").text();
hora_final = $("#Drop_Hora_Final option:selected").text();
document.getElementById(hi).innerHTML = hora_inicial+" to ";
document.getElementById(hf).innerHTML = hora_final;	
}
}

if((estado == 0) || (estado == 1) || (estado == 4)){	
hourly_selected = true;	
auth_change = true;
periodo = "hourly";	
tempo = "date";

document.getElementById("Div_Hora").style.display = "block";

for(i = 1; i <= 9; i++){
document.getElementById("Hora_Inicial_Texto_Teste"+i).style.display = "inline-block";
document.getElementById("Hora_Final_Texto_Teste"+i).style.display = "inline-block";
}

if(autorization1 == true){
document.getElementById("Periodo_Texto_Teste1").innerHTML = "Hourly";
document.getElementById("Periodo_Seta_1").style.visibility = "visible";
}
if(autorization2 == true){
document.getElementById("Periodo_Texto_Teste2").innerHTML = "Hourly";
document.getElementById("Periodo_Seta_2").style.visibility = "visible";
}
if(autorization3 == true){
document.getElementById("Periodo_Texto_Teste3").innerHTML = "Hourly";
document.getElementById("Periodo_Seta_3").style.visibility = "visible";
}
if(autorization4 == true){
document.getElementById("Periodo_Texto_Teste4").innerHTML = "Hourly";
document.getElementById("Periodo_Seta_4").style.visibility = "visible";
}
if(autorization5 == true){
document.getElementById("Periodo_Texto_Teste5").innerHTML = "Hourly";
document.getElementById("Periodo_Seta_5").style.visibility = "visible";
}
if(autorization6 == true){
document.getElementById("Periodo_Texto_Teste6").innerHTML = "Hourly";
document.getElementById("Periodo_Seta_6").style.visibility = "visible";
}
if(autorization7 == true){
document.getElementById("Periodo_Texto_Teste7").innerHTML = "Hourly";
document.getElementById("Periodo_Seta_7").style.visibility = "visible";
}
if(autorization8 == true){
document.getElementById("Periodo_Texto_Teste8").innerHTML = "Hourly";
document.getElementById("Periodo_Seta_8").style.visibility = "visible";
}
if(autorization9 == true){
document.getElementById("Periodo_Texto_Teste9").innerHTML = "Hourly";
document.getElementById("Periodo_Seta_9").style.visibility = "visible";
}
//document.getElementById("Texto_Teste").innerHTML = query;	
document.getElementById("Time").innerHTML = "Hourly";
}else
if(estado == 2){
alert("The QuickReport doesn't support Hourly Period for Counters. Please change the Period to check Counters informations.")
}else
if(estado == 3){
alert("The QuickReport doesn't support Hourly Period for NQI. Please change the Period to check NQI informations.")
}
}	

function mostrar_Daily(){

if(periodo != ""){
for(i = 0; i<= 8; i++){
data_inicial[i] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

var f = i + 1;

var di = "Date_Inicial_Texto_Teste"+f;
var df = "Date_Final_Texto_Teste"+f;

document.getElementById(di).innerHTML = data_inicial[i]+" to";
document.getElementById(df).innerHTML = data_final;	
}
}

for(i = 1; i <= 9; i++){
document.getElementById("Hora_Inicial_Texto_Teste"+i).style.display = "none";
document.getElementById("Hora_Final_Texto_Teste"+i).style.display = "none";
}

document.getElementById("Div_Hora").style.display = "none";
document.getElementById("Texto_Hora_Inicial").textContent = "Initial Date";
document.getElementById("Texto_Hora_Inicial").style.fontWeight =  "bold";
document.getElementById("Texto_Hora_Final").textContent = "Final Date";
document.getElementById("Texto_Hora_Final").style.fontWeight =  "bold";

hourly_selected = false;
auth_change = true; 
periodo = "daily";
tempo = "date";

document.getElementById("Time").innerHTML = "Daily";

if(autorization1 == true){
document.getElementById("Periodo_Texto_Teste1").innerHTML = "Daily";
document.getElementById("Periodo_Seta_1").style.visibility = "visible";
}
if(autorization2 == true){
document.getElementById("Periodo_Texto_Teste2").innerHTML = "Daily";
document.getElementById("Periodo_Seta_2").style.visibility = "visible";
}
if(autorization3 == true){
document.getElementById("Periodo_Texto_Teste3").innerHTML = "Daily";
document.getElementById("Periodo_Seta_3").style.visibility = "visible";
}
if(autorization4 == true){
document.getElementById("Periodo_Texto_Teste4").innerHTML = "Daily";
document.getElementById("Periodo_Seta_4").style.visibility = "visible";
}
if(autorization5 == true){
document.getElementById("Periodo_Texto_Teste5").innerHTML = "Daily";
document.getElementById("Periodo_Seta_5").style.visibility = "visible";
}
if(autorization6 == true){
document.getElementById("Periodo_Texto_Teste6").innerHTML = "Daily";
document.getElementById("Periodo_Seta_6").style.visibility = "visible";
}
if(autorization7 == true){
document.getElementById("Periodo_Texto_Teste7").innerHTML = "Daily";
document.getElementById("Periodo_Seta_7").style.visibility = "visible";
}
if(autorization8 == true){
document.getElementById("Periodo_Texto_Teste8").innerHTML = "Daily";
document.getElementById("Periodo_Seta_8").style.visibility = "visible";
}
if(autorization9 == true){
document.getElementById("Periodo_Texto_Teste9").innerHTML = "Daily";
document.getElementById("Periodo_Seta_9").style.visibility = "visible";
}
//document.getElementById("Texto_Teste").innerHTML = query;	
document.getElementById("Time").innerHTML = "Daily";

auth_change = true;

}

function mostrar_Weekly(){

if(periodo != ""){
for(i = 0; i<= 8; i++){
data_inicial[i] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[i];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
var f = i + 1;
var di = "Date_Inicial_Texto_Teste"+f;
var df = "Date_Final_Texto_Teste"+f;
//document.getElementById("Teste_MonthNumber").innerHTML = m.toDate().getUTCMonth() + 1;
data_inicial[i] = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();
		
document.getElementById(di).innerHTML = "Week "+data_inicial[i]+" to";
document.getElementById(df).innerHTML = "Week "+data_final;
}
}

for(i = 1; i <= 9; i++){
document.getElementById("Hora_Inicial_Texto_Teste"+i).style.display = "none";
document.getElementById("Hora_Final_Texto_Teste"+i).style.display = "none";
}

document.getElementById("Div_Hora").style.display = "none";
document.getElementById("Texto_Hora_Inicial").textContent = "Initial Week";
document.getElementById("Texto_Hora_Inicial").style.fontWeight =  "bold";
document.getElementById("Texto_Hora_Final").textContent = "Final Week";
document.getElementById("Texto_Hora_Final").style.fontWeight =  "bold";

hourly_selected = false;
auth_change = true; 	
periodo = "weekly";
tempo = "week";

document.getElementById("Time").innerHTML = "Weekly";

if(autorization1 == true){
document.getElementById("Periodo_Texto_Teste1").innerHTML = "Weekly";
document.getElementById("Periodo_Seta_1").style.visibility = "visible";
}
if(autorization2 == true){
document.getElementById("Periodo_Texto_Teste2").innerHTML = "Weekly";
document.getElementById("Periodo_Seta_2").style.visibility = "visible";
}
if(autorization3 == true){
document.getElementById("Periodo_Texto_Teste3").innerHTML = "Weekly";
document.getElementById("Periodo_Seta_3").style.visibility = "visible";
}
if(autorization4 == true){
document.getElementById("Periodo_Texto_Teste4").innerHTML = "Weekly";
document.getElementById("Periodo_Seta_4").style.visibility = "visible";
}
if(autorization5 == true){
document.getElementById("Periodo_Texto_Teste5").innerHTML = "Weekly";
document.getElementById("Periodo_Seta_5").style.visibility = "visible";
}
if(autorization6 == true){
document.getElementById("Periodo_Texto_Teste6").innerHTML = "Weekly";
document.getElementById("Periodo_Seta_6").style.visibility = "visible";
}
if(autorization7 == true){
document.getElementById("Periodo_Texto_Teste7").innerHTML = "Weekly";
document.getElementById("Periodo_Seta_7").style.visibility = "visible";
}
if(autorization8 == true){
document.getElementById("Periodo_Texto_Teste8").innerHTML = "Weekly";
document.getElementById("Periodo_Seta_8").style.visibility = "visible";
}
if(autorization9 == true){
document.getElementById("Periodo_Texto_Teste9").innerHTML = "Weekly";
document.getElementById("Periodo_Seta_9").style.visibility = "visible";
}

auth_change = true;
}

function mostrar_Monthly(){

if(periodo != ""){
for(i = 0; i<= 8; i++){
data_inicial[i] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[i];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
var f = i + 1;
var di = "Date_Inicial_Texto_Teste"+f;
var df = "Date_Final_Texto_Teste"+f;

data_inicial[i] = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;
		
document.getElementById(di).innerHTML = "Month "+data_inicial[i]+" to";
document.getElementById(df).innerHTML = "Month "+data_final;
}
}

for(i = 1; i <= 9; i++){
document.getElementById("Hora_Inicial_Texto_Teste"+i).style.display = "none";
document.getElementById("Hora_Final_Texto_Teste"+i).style.display = "none";
}

document.getElementById("Div_Hora").style.display = "none";
document.getElementById("Texto_Hora_Inicial").textContent = "Initial Month";
document.getElementById("Texto_Hora_Inicial").style.fontWeight =  "bold";
document.getElementById("Texto_Hora_Final").textContent = "Final Month";
document.getElementById("Texto_Hora_Final").style.fontWeight =  "bold";

document.getElementById("Time").innerHTML = "Monthly";

hourly_selected = false;
auth_change = true; 
periodo = "monthly";
tempo = "month";

if(autorization1 == true){
document.getElementById("Periodo_Texto_Teste1").innerHTML = "Monthly";
document.getElementById("Periodo_Seta_1").style.visibility = "visible";
}
if(autorization2 == true){
document.getElementById("Periodo_Texto_Teste2").innerHTML = "Monthly";
document.getElementById("Periodo_Seta_2").style.visibility = "visible";
}
if(autorization3 == true){
document.getElementById("Periodo_Texto_Teste3").innerHTML = "Monthly";
document.getElementById("Periodo_Seta_3").style.visibility = "visible";
}
if(autorization4 == true){
document.getElementById("Periodo_Texto_Teste4").innerHTML = "Monthly";
document.getElementById("Periodo_Seta_4").style.visibility = "visible";
}
if(autorization5 == true){
document.getElementById("Periodo_Texto_Teste5").innerHTML = "Monthly";
document.getElementById("Periodo_Seta_5").style.visibility = "visible";
}
if(autorization6 == true){
document.getElementById("Periodo_Texto_Teste6").innerHTML = "Monthly";
document.getElementById("Periodo_Seta_6").style.visibility = "visible";
}
if(autorization7 == true){
document.getElementById("Periodo_Texto_Teste7").innerHTML = "Monthly";
document.getElementById("Periodo_Seta_7").style.visibility = "visible";
}
if(autorization8 == true){
document.getElementById("Periodo_Texto_Teste8").innerHTML = "Monthly";
document.getElementById("Periodo_Seta_8").style.visibility = "visible";
}
if(autorization9 == true){
document.getElementById("Periodo_Texto_Teste9").innerHTML = "Monthly";
document.getElementById("Periodo_Seta_9").style.visibility = "visible";
}

auth_change = true;
}


function myFunction_UMTS() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput_UMTS");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL_UMTS");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}

function myFunction_GSM() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput_GSM");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL_GSM");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}

function myFunction_LTE() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput_LTE");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL_LTE");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}

function myFunction_KPI_GSM() {
    var input, filter, ul, li_kpi, a, i;
    input = document.getElementById("myInput_KPI_GSM");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL_KPI_GSM");
    li_kpi = ul.getElementsByClassName("KPI_Gsm");
	li_counter = ul.getElementsByClassName("Counter_Gsm");
	
	$(".KPI_Gsm").css("display", "block");
	$(".Counter_Gsm").css("display", "block");	
	$( "#Seta_KPI_Gsm" ).attr( "class", "fa fa-caret-up");
	$( "#Seta_Counter_Gsm" ).attr( "class", "fa fa-caret-up");
		
    for (i = 0; i < li_kpi.length; i++) {
        a = li_kpi[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li_kpi[i].style.display = "block";
        } else {
            li_kpi[i].style.display = "none";
        }
    }
	
    for (i = 0; i < li_counter.length; i++) {
        a = li_counter[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li_counter[i].style.display = "block";
        } else {
            li_counter[i].style.display = "none";
        }
    }

	if(input.value == ""){
	$( "#Seta_KPI_Gsm" ).attr( "class", "fa fa-caret-down");
	$( "#Seta_Counter_Gsm" ).attr( "class", "fa fa-caret-down");
	$(".KPI_Gsm").css("display", "none");
	$(".Counter_Gsm").css("display", "none");
	estado = 0;
	}	

}

function myFunction_KPI_LTE() {
    var input, filter, ul, li_kpi, a, i;
    input = document.getElementById("myInput_KPI_LTE");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL_KPI_LTE");
    li_kpi = ul.getElementsByClassName("KPI_Lte");
	li_counter = ul.getElementsByClassName("Counter_Lte");
	
	$(".KPI_Lte").css("display", "block");
	$(".Counter_Lte").css("display", "block");	
	$( "#Seta_KPI_Lte" ).attr( "class", "fa fa-caret-up");
	$( "#Seta_Counter_Lte" ).attr( "class", "fa fa-caret-up");
		
    for (i = 0; i < li_kpi.length; i++) {
        a = li_kpi[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li_kpi[i].style.display = "block";
        } else {
            li_kpi[i].style.display = "none";
        }
    }
	
    for (i = 0; i < li_counter.length; i++) {
        a = li_counter[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li_counter[i].style.display = "block";
        } else {
            li_counter[i].style.display = "none";
        }
    }

	if(input.value == ""){
	$( "#Seta_KPI_Lte" ).attr( "class", "fa fa-caret-down");
	$( "#Seta_Counter_Lte" ).attr( "class", "fa fa-caret-down");
	$(".KPI_Lte").css("display", "none");
	$(".Counter_Lte").css("display", "none");
	estado = 0;
	}	

}

function myFunction_KPI_UMTS() {
    var input, filter, ul, li_kpi, a, i;
    input = document.getElementById("myInput_KPI_UMTS");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL_KPI_UMTS");
    li_kpi = ul.getElementsByClassName("KPI_Umts");
	li_counter = ul.getElementsByClassName("Counter_Umts");
	
	$(".KPI_Umts").css("display", "block");
	$(".Counter_Umts").css("display", "block");	
	$( "#Seta_KPI_Umts" ).attr( "class", "fa fa-caret-up");
	$( "#Seta_Counter_Umts" ).attr( "class", "fa fa-caret-up");
		
    for (i = 0; i < li_kpi.length; i++) {
        a = li_kpi[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li_kpi[i].style.display = "block";
        } else {
            li_kpi[i].style.display = "none";
        }
    }
	
    for (i = 0; i < li_counter.length; i++) {
        a = li_counter[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li_counter[i].style.display = "block";
        } else {
            li_counter[i].style.display = "none";
        }
    }

	if(input.value == ""){
	$( "#Seta_KPI_Umts" ).attr( "class", "fa fa-caret-down");
	$( "#Seta_Counter_Umts" ).attr( "class", "fa fa-caret-down");
	$(".KPI_Umts").css("display", "none");
	$(".Counter_Umts").css("display", "none");
	estado = 0;
	}	

}

function fn_abort_query(){

abortar_query = true;
showUser();
	
}

$( "#show_KPI_Umts" ).click(function() {
  
  if ( $('#Seta_KPI_Umts').attr('class') == 'fa fa-caret-up' ) {
  $(".KPI_Umts").css("display", "none");
  $( "#Seta_KPI_Umts" ).attr( "class", "fa fa-caret-down");
  }else
  if ( $('#Seta_KPI_Umts').attr('class') == 'fa fa-caret-down' ) {
  $(".KPI_Umts").css("display", "block");
  $( "#Seta_KPI_Umts" ).attr( "class", "fa fa-caret-up");
  }	  
 
});

$( "#show_Counter_Umts" ).click(function() {
  
  if(periodo != "hourly"){
  if ( $('#Seta_Counter_Umts').attr('class') == 'fa fa-caret-up' ) {
  $(".Counter_Umts").css("display", "none");
  $( "#Seta_Counter_Umts" ).attr( "class", "fa fa-caret-down");
  }else
  if ( $('#Seta_Counter_Umts').attr('class') == 'fa fa-caret-down' ) {
  $(".Counter_Umts").css("display", "block");
  $( "#Seta_Counter_Umts" ).attr( "class", "fa fa-caret-up");
  }
  }else
  if(periodo == "hourly"){
  alert("The QuickReport doesn't support Counters for Hourly Period. Please change the Period to check Counters informations.")
  }	  
 
});

$( "#show_NQI_Umts" ).click(function() {
  
  if(periodo != "hourly"){
  if($('.NQI_Umts').css('display') == 'none')
{
  $(".NQI_Umts").css("display", "block");
  $( "#Seta_NQI_Umts" ).toggleClass( "fa-caret-up fa-caret-down");
}else
  if($('.NQI_Umts').css('display') == 'block')
{
  $(".NQI_Umts").css("display", "none");
  $( "#Seta_NQI_Umts" ).toggleClass( "fa-caret-down fa-caret-up");
}
  }else
  if(periodo == "hourly"){
  alert("The QuickReport doesn't support NQI for Hourly Period. Please change the Period to check NQI informations.")
  }	  
  
});		

$( "#show_KPI_Lte" ).click(function() {
  
  if ( $('#Seta_KPI_Lte').attr('class') == 'fa fa-caret-up' ) {
  $(".KPI_Lte").css("display", "none");
  $( "#Seta_KPI_Lte" ).attr( "class", "fa fa-caret-down");
  }else
  if ( $('#Seta_KPI_Lte').attr('class') == 'fa fa-caret-down' ) {
  $(".KPI_Lte").css("display", "block");
  $( "#Seta_KPI_Lte" ).attr( "class", "fa fa-caret-up");
  }	  
 
});

$( "#show_Counter_Lte" ).click(function() {
  
  if(periodo != "hourly"){
  if ( $('#Seta_Counter_Lte').attr('class') == 'fa fa-caret-up' ) {
  $(".Counter_Lte").css("display", "none");
  $( "#Seta_Counter_Lte" ).attr( "class", "fa fa-caret-down");
  }else
  if ( $('#Seta_Counter_Lte').attr('class') == 'fa fa-caret-down' ) {
  $(".Counter_Lte").css("display", "block");
  $( "#Seta_Counter_Lte" ).attr( "class", "fa fa-caret-up");
  }
  }else
  if(periodo == "hourly"){
  alert("The QuickReport doesn't support Counters for Hourly Period. Please change the Period to check Counters informations.")
  }	  
 
});

$( "#show_NQI_Lte" ).click(function() {
  
  if(periodo != "hourly"){  
  if($('.NQI_Lte').css('display') == 'none')
{
  $(".NQI_Lte").css("display", "block");
  $( "#Seta_NQI_Lte" ).toggleClass( "fa-caret-up fa-caret-down");
}else
  if($('.NQI_Lte').css('display') == 'block')
{
  $(".NQI_Lte").css("display", "none");
  $( "#Seta_NQI_Lte" ).toggleClass( "fa-caret-down fa-caret-up");
}
  }else
  if(periodo == "hourly"){
  alert("The QuickReport doesn't support Counters for Hourly Period. Please change the Period to check Counters informations.")
  } 	  
  
});	

$( "#show_KPI_Gsm" ).click(function() {
  
  if ( $('#Seta_KPI_Gsm').attr('class') == 'fa fa-caret-up' ) {
  $(".KPI_Gsm").css("display", "none");
  $( "#Seta_KPI_Gsm" ).attr( "class", "fa fa-caret-down");
  }else
  if ( $('#Seta_KPI_Gsm').attr('class') == 'fa fa-caret-down' ) {
  $(".KPI_Gsm").css("display", "block");
  $( "#Seta_KPI_Gsm" ).attr( "class", "fa fa-caret-up");
  }	  
 
});

$( "#show_Counter_Gsm" ).click(function() {
  
  if(periodo != "hourly"){
  if ( $('#Seta_Counter_Gsm').attr('class') == 'fa fa-caret-up' ) {
  $(".Counter_Gsm").css("display", "none");
  $( "#Seta_Counter_Gsm" ).attr( "class", "fa fa-caret-down");
  }else
  if ( $('#Seta_Counter_Gsm').attr('class') == 'fa fa-caret-down' ) {
  $(".Counter_Gsm").css("display", "block");
  $( "#Seta_Counter_Gsm" ).attr( "class", "fa fa-caret-up");
  }
  }else
  if(periodo == "hourly"){
  alert("The QuickReport doesn't support Counters for Hourly Period. Please change the Period to check Counters informations.")
  }	  
 
});

function sumir_info(){

document.getElementById("info_counter").style.display = "none";

}

///////////////////////////////////////////////////////////// TEMPLATES ///////////////////////////////////////////

$('#template1').on('keyup mouseup', function(){
count_template[1] = $("#template1").val();	
});

$('#template2').on('keyup mouseup', function(){
count_template[2] = $("#template2").val();	
});

$('#template3').on('keyup mouseup', function(){
count_template[3] = $("#template3").val();	
});

$('#template4').on('keyup mouseup', function(){
count_template[4] = $("#template4").val();	
});

$('#template5').on('keyup mouseup', function(){
count_template[5] = $("#template5").val();	
});

$('#template6').on('keyup mouseup', function(){
count_template[6] = $("#template6").val();	
});

$('#template7').on('keyup mouseup', function(){
count_template[7] = $("#template7").val();	
});

$('#template8').on('keyup mouseup', function(){
count_template[8] = $("#template8").val();	
});

$('#template9').on('keyup mouseup', function(){
count_template[9] = $("#template9").val();	
});


/////////////////////////////////////////////////////////// AJAX REQUEST //////////////////////////////////////////////



function showUser() {
			
		if(abortar_query == false){
		if(autorizacao == true){
		document.getElementById("Resumo").style.display = "none";
		document.getElementById("Resumo2").style.display = "none";
		document.getElementById("MENU").style.display = "none";
		// document.getElementById("Technology_Menu").style.display = "none";
		document.getElementById("Show_Menu_Query").style.display = "inline-block";
		document.getElementById("Mostrar_Menu_Query").style.display = "inline-block";
		document.getElementById("Esconder_Menu_Query").style.display = "none";
		document.getElementById("Abort_Query").style.display = "inline-block";
		VisibilidadeMenu = false;
		var vis_qm1 = document.getElementById("Query_Menu1");
		var vis_qm2 = document.getElementById("Query_Menu2");
		var vis_qm3 = document.getElementById("Query_Menu3");
		var vis_qm4 = document.getElementById("Query_Menu4");
		var vis_qm5 = document.getElementById("Query_Menu5");
		var vis_qm6 = document.getElementById("Query_Menu6");
		var vis_qm7 = document.getElementById("Query_Menu7");
		var vis_qm8 = document.getElementById("Query_Menu8");
		var vis_qm9 = document.getElementById("Query_Menu9");		
			
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
			document.getElementById("loading").style.display = "block";
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {	// SE QUERY FOR VÁLIDA		
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint1").innerHTML = this.responseText;
				document.getElementById("loading").style.display = "none";
				document.getElementById("Abort_Query").style.display = "none";
				pageTitleNotification.on("Query Done !", 1000);
				if(hourly_selected == true){	
				eval(document.getElementById("runscript_hourly").innerHTML);
				
				if((((count_template[1] == 2) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 2) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 2) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 2) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 2) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 2) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 2) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 2) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 2) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_hourly_2").innerHTML);
				document.getElementById("container2").style.display = "inline-block";
				document.getElementById("buttons_show2").style.display = "inline-block";
				document.getElementById("escala2").style.display = "block";
				}else{	
				document.getElementById("container2").style.display = "none";
				document.getElementById("buttons_show2").style.display = "none";
				document.getElementById("escala2").style.display = "none";	
				}	
				if((((count_template[1] == 3) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 3) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 3) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 3) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 3) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 3) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 3) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 3) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 3) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_hourly_3").innerHTML);
				document.getElementById("container3").style.display = "inline-block";
				document.getElementById("buttons_show3").style.display = "inline-block";
				document.getElementById("escala3").style.display = "block";	
				}else{
				document.getElementById("container3").style.display = "none";
				document.getElementById("buttons_show3").style.display = "none";
				document.getElementById("escala3").style.display = "none";	
				}
				if((((count_template[1] == 4) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 4) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 4) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 4) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 4) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 4) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 4) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 4) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 4) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_hourly_4").innerHTML);
				document.getElementById("container4").style.display = "inline-block";
				document.getElementById("buttons_show4").style.display = "inline-block";
				document.getElementById("escala4").style.display = "block";	
				}else{
				document.getElementById("container4").style.display = "none";
				document.getElementById("buttons_show4").style.display = "none";
				document.getElementById("escala4").style.display = "none";	
				}
				if((((count_template[1] == 5) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 5) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 5) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 5) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 5) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 5) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 5) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 5) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 5) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_hourly_5").innerHTML);
				document.getElementById("container5").style.display = "inline-block";
				document.getElementById("buttons_show5").style.display = "inline-block";
				document.getElementById("escala5").style.display = "block";	
				}else{
				document.getElementById("container5").style.display = "none";
				document.getElementById("buttons_show5").style.display = "none";
				document.getElementById("escala5").style.display = "none";	
				}
				if((((count_template[1] == 6) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 6) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 6) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 6) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 6) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 6) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 6) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 6) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 6) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_hourly_6").innerHTML);
				document.getElementById("container6").style.display = "inline-block";
				document.getElementById("buttons_show6").style.display = "inline-block";
				document.getElementById("escala6").style.display = "block";	
				}else{
				document.getElementById("container6").style.display = "none";
				document.getElementById("buttons_show6").style.display = "none";
				document.getElementById("escala6").style.display = "none";	
				}
				if((((count_template[1] == 7) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 7) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 7) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 7) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 7) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 7) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 7) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 7) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 7) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_hourly_7").innerHTML);
				document.getElementById("container7").style.display = "inline-block";
				document.getElementById("buttons_show7").style.display = "inline-block";
				document.getElementById("escala7").style.display = "block";	
				}else{
				document.getElementById("container7").style.display = "none";
				document.getElementById("buttons_show7").style.display = "none";
				document.getElementById("escala7").style.display = "none";	
				}
				if((((count_template[1] == 8) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 8) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 8) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 8) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 8) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 8) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 8) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 8) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 8) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_hourly_8").innerHTML);
				document.getElementById("container8").style.display = "inline-block";
				document.getElementById("buttons_show8").style.display = "inline-block";
				document.getElementById("escala8").style.display = "block";	
				}else{
				document.getElementById("container8").style.display = "none";
				document.getElementById("buttons_show8").style.display = "none";
				document.getElementById("escala8").style.display = "none";	
				}
				if((((count_template[1] == 9) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 9) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 9) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 9) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 9) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 9) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 9) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 9) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 9) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_hourly_9").innerHTML);
				document.getElementById("container9").style.display = "inline-block";
				document.getElementById("buttons_show9").style.display = "inline-block";
				document.getElementById("escala9").style.display = "block";	
				}else{
				document.getElementById("container9").style.display = "none";
				document.getElementById("buttons_show9").style.display = "none";
				document.getElementById("escala9").style.display = "none";	
				}				
				}else if(periodo == "daily"){
				eval(document.getElementById("runscript").innerHTML);
				
				if((((count_template[1] == 2) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 2) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 2) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 2) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 2) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 2) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 2) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 2) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 2) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_2").innerHTML);
				document.getElementById("container2d").style.display = "inline-block";
				document.getElementById("buttons_show2d").style.display = "inline-block";
				document.getElementById("escala2d").style.display = "block";
				}else{	
				document.getElementById("container2d").style.display = "none";
				document.getElementById("buttons_show2d").style.display = "none";
				document.getElementById("escala2d").style.display = "none";	
				}	
				if((((count_template[1] == 3) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 3) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 3) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 3) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 3) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 3) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 3) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 3) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 3) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_3").innerHTML);
				document.getElementById("container3d").style.display = "inline-block";
				document.getElementById("buttons_show3d").style.display = "inline-block";
				document.getElementById("escala3d").style.display = "block";
				}else{	
				document.getElementById("container3d").style.display = "none";
				document.getElementById("buttons_show3d").style.display = "none";
				document.getElementById("escala3d").style.display = "none";	
				}
				if((((count_template[1] == 4) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 4) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 4) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 4) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 4) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 4) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 4) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 4) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 4) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_4").innerHTML);
				document.getElementById("container4d").style.display = "inline-block";
				document.getElementById("buttons_show4d").style.display = "inline-block";
				document.getElementById("escala4d").style.display = "block";
				}else{	
				document.getElementById("container4d").style.display = "none";
				document.getElementById("buttons_show4d").style.display = "none";
				document.getElementById("escala4d").style.display = "none";	
				}
				if((((count_template[1] == 5) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 5) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 5) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 5) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 5) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 5) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 5) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 5) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 5) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_5").innerHTML);
				document.getElementById("container5d").style.display = "inline-block";
				document.getElementById("buttons_show5d").style.display = "inline-block";
				document.getElementById("escala5d").style.display = "block";
				}else{	
				document.getElementById("container5d").style.display = "none";
				document.getElementById("buttons_show5d").style.display = "none";
				document.getElementById("escala5d").style.display = "none";	
				}
				if((((count_template[1] == 6) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 6) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 6) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 6) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 6) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 6) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 6) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 6) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 6) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_6").innerHTML);
				document.getElementById("container6d").style.display = "inline-block";
				document.getElementById("buttons_show6d").style.display = "inline-block";
				document.getElementById("escala6d").style.display = "block";
				}else{	
				document.getElementById("container6d").style.display = "none";
				document.getElementById("buttons_show6d").style.display = "none";
				document.getElementById("escala6d").style.display = "none";	
				}
				if((((count_template[1] == 7) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 7) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 7) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 7) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 7) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 7) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 7) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 7) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 7) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_7").innerHTML);
				document.getElementById("container7d").style.display = "inline-block";
				document.getElementById("buttons_show7d").style.display = "inline-block";
				document.getElementById("escala7d").style.display = "block";
				}else{	
				document.getElementById("container7d").style.display = "none";
				document.getElementById("buttons_show7d").style.display = "none";
				document.getElementById("escala7d").style.display = "none";	
				}
				if((((count_template[1] == 8) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 8) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 8) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 8) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 8) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 8) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 8) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 8) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 8) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_8").innerHTML);
				document.getElementById("container8d").style.display = "inline-block";
				document.getElementById("buttons_show8d").style.display = "inline-block";
				document.getElementById("escala8d").style.display = "block";
				}else{	
				document.getElementById("container8d").style.display = "none";
				document.getElementById("buttons_show8d").style.display = "none";
				document.getElementById("escala8d").style.display = "none";	
				}
				if((((count_template[1] == 9) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 9) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 9) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 9) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 9) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 9) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 9) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 9) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 9) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_9").innerHTML);
				document.getElementById("container9d").style.display = "inline-block";
				document.getElementById("buttons_show9d").style.display = "inline-block";
				document.getElementById("escala9d").style.display = "block";
				}else{	
				document.getElementById("container9d").style.display = "none";
				document.getElementById("buttons_show9d").style.display = "none";
				document.getElementById("escala9d").style.display = "none";	
				}
				}else if(periodo == "weekly"){
				eval(document.getElementById("runscript_week").innerHTML);

				if((((count_template[1] == 2) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 2) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 2) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 2) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 2) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 2) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 2) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 2) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 2) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_week2").innerHTML);
				document.getElementById("container2w").style.display = "inline-block";
				document.getElementById("buttons_show2w").style.display = "inline-block";
				document.getElementById("escala2w").style.display = "block";
				}else{	
				document.getElementById("container2w").style.display = "none";
				document.getElementById("buttons_show2w").style.display = "none";
				document.getElementById("escala2w").style.display = "none";	
				}
				if((((count_template[1] == 3) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 3) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 3) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 3) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 3) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 3) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 3) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 3) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 3) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_week3").innerHTML);
				document.getElementById("container3w").style.display = "inline-block";
				document.getElementById("buttons_show3w").style.display = "inline-block";
				document.getElementById("escala3w").style.display = "block";
				}else{	
				document.getElementById("container3w").style.display = "none";
				document.getElementById("buttons_show3w").style.display = "none";
				document.getElementById("escala3w").style.display = "none";	
				}
				if((((count_template[1] == 4) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 4) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 4) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 4) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 4) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 4) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 4) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 4) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 4) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_week4").innerHTML);
				document.getElementById("container4w").style.display = "inline-block";
				document.getElementById("buttons_show4w").style.display = "inline-block";
				document.getElementById("escala4w").style.display = "block";
				}else{	
				document.getElementById("container4w").style.display = "none";
				document.getElementById("buttons_show4w").style.display = "none";
				document.getElementById("escala4w").style.display = "none";	
				}
				if((((count_template[1] == 5) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 5) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 5) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 5) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 5) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 5) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 5) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 5) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 5) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_week5").innerHTML);
				document.getElementById("container5w").style.display = "inline-block";
				document.getElementById("buttons_show5w").style.display = "inline-block";
				document.getElementById("escala5w").style.display = "block";
				}else{	
				document.getElementById("container5w").style.display = "none";
				document.getElementById("buttons_show5w").style.display = "none";
				document.getElementById("escala5w").style.display = "none";	
				}
				if((((count_template[1] == 6) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 6) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 6) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 6) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 6) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 6) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 6) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 6) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 6) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_week6").innerHTML);
				document.getElementById("container6w").style.display = "inline-block";
				document.getElementById("buttons_show6w").style.display = "inline-block";
				document.getElementById("escala6w").style.display = "block";
				}else{	
				document.getElementById("container6w").style.display = "none";
				document.getElementById("buttons_show6w").style.display = "none";
				document.getElementById("escala6w").style.display = "none";	
				}
				if((((count_template[1] == 7) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 7) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 7) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 7) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 7) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 7) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 7) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 7) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 7) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_week7").innerHTML);
				document.getElementById("container7w").style.display = "inline-block";
				document.getElementById("buttons_show7w").style.display = "inline-block";
				document.getElementById("escala7w").style.display = "block";
				}else{	
				document.getElementById("container7w").style.display = "none";
				document.getElementById("buttons_show7w").style.display = "none";
				document.getElementById("escala7w").style.display = "none";	
				}
				if((((count_template[1] == 8) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 8) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 8) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 8) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 8) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 8) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 8) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 8) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 8) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_week8").innerHTML);
				document.getElementById("container8w").style.display = "inline-block";
				document.getElementById("buttons_show8w").style.display = "inline-block";
				document.getElementById("escala8w").style.display = "block";
				}else{	
				document.getElementById("container8w").style.display = "none";
				document.getElementById("buttons_show8w").style.display = "none";
				document.getElementById("escala8w").style.display = "none";	
				}
				if((((count_template[1] == 9) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 9) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 9) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 9) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 9) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 9) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 9) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 9) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 9) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_week9").innerHTML);
				document.getElementById("container9w").style.display = "inline-block";
				document.getElementById("buttons_show9w").style.display = "inline-block";
				document.getElementById("escala9w").style.display = "block";
				}else{	
				document.getElementById("container9w").style.display = "none";
				document.getElementById("buttons_show9w").style.display = "none";
				document.getElementById("escala9w").style.display = "none";	
				}				
				}else if(periodo == "monthly"){
				eval(document.getElementById("runscript_month").innerHTML);

				if((((count_template[1] == 2) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 2) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 2) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 2) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 2) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 2) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 2) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 2) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 2) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_month2").innerHTML);
				document.getElementById("container2m").style.display = "inline-block";
				document.getElementById("buttons_show2m").style.display = "inline-block";
				document.getElementById("escala2m").style.display = "block";
				}else{	
				document.getElementById("container2m").style.display = "none";
				document.getElementById("buttons_show2m").style.display = "none";
				document.getElementById("escala2m").style.display = "none";	
				}
				if((((count_template[1] == 3) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 3) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 3) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 3) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 3) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 3) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 3) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 3) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 3) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_month3").innerHTML);
				document.getElementById("container3m").style.display = "inline-block";
				document.getElementById("buttons_show3m").style.display = "inline-block";
				document.getElementById("escala3m").style.display = "block";
				}else{	
				document.getElementById("container3m").style.display = "none";
				document.getElementById("buttons_show3m").style.display = "none";
				document.getElementById("escala3m").style.display = "none";	
				}
				if((((count_template[1] == 4) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 4) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 4) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 4) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 4) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 4) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 4) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 4) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 4) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_month4").innerHTML);
				document.getElementById("container4m").style.display = "inline-block";
				document.getElementById("buttons_show4m").style.display = "inline-block";
				document.getElementById("escala4m").style.display = "block";
				}else{	
				document.getElementById("container4m").style.display = "none";
				document.getElementById("buttons_show4m").style.display = "none";
				document.getElementById("escala4m").style.display = "none";	
				}
				if((((count_template[1] == 5) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 5) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 5) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 5) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 5) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 5) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 5) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 5) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 5) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_month5").innerHTML);
				document.getElementById("container5m").style.display = "inline-block";
				document.getElementById("buttons_show5m").style.display = "inline-block";
				document.getElementById("escala5m").style.display = "block";
				}else{	
				document.getElementById("container5m").style.display = "none";
				document.getElementById("buttons_show5m").style.display = "none";
				document.getElementById("escala5m").style.display = "none";	
				}
				if((((count_template[1] == 6) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 6) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 6) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 6) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 6) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 6) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 6) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 6) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 6) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_month6").innerHTML);
				document.getElementById("container6m").style.display = "inline-block";
				document.getElementById("buttons_show6m").style.display = "inline-block";
				document.getElementById("escala6m").style.display = "block";
				}else{	
				document.getElementById("container6m").style.display = "none";
				document.getElementById("buttons_show6m").style.display = "none";
				document.getElementById("escala6m").style.display = "none";	
				}
				if((((count_template[1] == 7) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 7) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 7) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 7) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 7) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 7) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 7) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 7) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 7) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_month7").innerHTML);
				document.getElementById("container7m").style.display = "inline-block";
				document.getElementById("buttons_show7m").style.display = "inline-block";
				document.getElementById("escala7m").style.display = "block";
				}else{	
				document.getElementById("container7m").style.display = "none";
				document.getElementById("buttons_show7m").style.display = "none";
				document.getElementById("escala7m").style.display = "none";	
				}
				if((((count_template[1] == 8) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 8) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 8) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 8) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 8) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 8) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 8) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 8) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 8) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_month8").innerHTML);
				document.getElementById("container8m").style.display = "inline-block";
				document.getElementById("buttons_show8m").style.display = "inline-block";
				document.getElementById("escala8m").style.display = "block";
				}else{	
				document.getElementById("container8m").style.display = "none";
				document.getElementById("buttons_show8m").style.display = "none";
				document.getElementById("escala8m").style.display = "none";	
				}
				if((((count_template[1] == 9) && (vis_qm1.style.display == "inline-block")) || ((count_template[2] == 9) && (vis_qm2.style.display == "inline-block")) || ((count_template[3] == 9) && (vis_qm3.style.display == "inline-block")) || ((count_template[4] == 9) && (vis_qm4.style.display == "inline-block")) || ((count_template[5] == 9) && (vis_qm5.style.display == "inline-block")) || ((count_template[6] == 9) && (vis_qm6.style.display == "inline-block")) || ((count_template[7] == 9) && (vis_qm7.style.display == "inline-block")) || ((count_template[8] == 9) && (vis_qm8.style.display == "inline-block")) || ((count_template[9] == 9) && (vis_qm9.style.display == "inline-block")))){
				eval(document.getElementById("runscript_month9").innerHTML);
				document.getElementById("container9m").style.display = "inline-block";
				document.getElementById("buttons_show9m").style.display = "inline-block";
				document.getElementById("escala9m").style.display = "block";
				}else{	
				document.getElementById("container9m").style.display = "none";
				document.getElementById("buttons_show9m").style.display = "none";
				document.getElementById("escala9m").style.display = "none";	
				}				
				}
            }
			 if (xmlhttp.status >= 500){ //SE DER ERRO !
			document.getElementById("loading").style.display = "none";	 
			alert('It was not possible to perform the selected Query. Please confirm if the Elements or KPIs/Counters belongs to the Technology.');
			}
			
			
        };
        xmlhttp.open("GET","/npsmart/quickreport/showCharts/?q1="+query1+"&q2="+query2+"&q3="+query3+"&q4="+query4+"&q5="+query5+"&q6="+query6+"&q7="+query7+"&q8="+query8+"&q9="+query9+"&f1="+nome1+"&f2="+nome2+"&f3="+nome3+"&f4="+nome4+"&f5="+nome5+"&f6="+nome6+"&f7="+nome7+"&f8="+nome8+"&f9="+nome9+"&d1="+data_inicial[0]+"&d2="+data_inicial[1]+"&d3="+data_inicial[2]+"&d4="+data_inicial[3]+"&d5="+data_inicial[4]+"&d6="+data_inicial[5]+"&d7="+data_inicial[6]+"&d8="+data_inicial[7]+"&d9="+data_inicial[8]+"&t1="+tipo_chart1+"&t2="+tipo_chart2+"&t3="+tipo_chart3+"&t4="+tipo_chart4+"&t5="+tipo_chart5+"&t6="+tipo_chart6+"&t7="+tipo_chart7+"&t8="+tipo_chart8+"&t9="+tipo_chart9+"&c1="+tipo_chart_position1+"&c2="+tipo_chart_position2+"&c3="+tipo_chart_position3+"&c4="+tipo_chart_position4+"&c5="+tipo_chart_position5+"&c6="+tipo_chart_position6+"&c7="+tipo_chart_position7+"&c8="+tipo_chart_position8+"&c9="+tipo_chart_position9+"&ct1="+count_template[1]+"&ct2="+count_template[2]+"&ct3="+count_template[3]+"&ct4="+count_template[4]+"&ct5="+count_template[5]+"&ct6="+count_template[6]+"&ct7="+count_template[7]+"&ct8="+count_template[8]+"&ct9="+count_template[9],true);
        xmlhttp.send();
		
     
		} else {
		alert("You have to perform at least one query to create the chart");
		}
		} else if(abortar_query == true){
			xmlhttp.abort();
			document.getElementById("loading").style.display = "none";
			abortar_query = false;
		}
}


function showCells() {

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint2").innerHTML = this.responseText;
				if(familia == "NodeB"){
				eval(document.getElementById("runscript_cells_umts").innerHTML);
				}else if(familia == "eNodeB"){
				eval(document.getElementById("runscript_cells_lte").innerHTML);	
				 }else if(familia == "bts"){	
				eval(document.getElementById("runscript_cells_GSM").innerHTML);	
				}
            }
        };
        xmlhttp.open("GET","/npsmart/quickreport/showCelulas/?q1="+query_cells+"&e="+elemento,true);
        xmlhttp.send();
		
    }

function showContador() {

        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint3").innerHTML = this.responseText;
				eval(document.getElementById("tipo_de_contador").innerHTML);
            }
        };
        xmlhttp.open("GET","/npsmart/quickreport/showCounter/?qa="+query_aux,true);
        xmlhttp.send();
		
    }
	
</script>

</body>
</html>

