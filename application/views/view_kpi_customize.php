<!DOCTYPE html>
<html>
<head>
<style>

@import url("https://fonts.googleapis.com/css?family=Open+Sans:700");
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
.buttons {
  text-align: center;
}

.set:not(:last-child) {
  border-bottom: 1px dotted #aaa;
}

.btn {
  padding: 10px 15px 12px;
  font: 700 12px/1 "Open Sans", sans-serif;
  border-radius: 3px;
  margin-left:10px;
  box-shadow: inset 0 -1px 0 1px rgba(0, 0, 0, 0.1), inset 0 -10px 20px rgba(0, 0, 0, 0.1);
  cursor: pointer;
}

.btn.pri {
  color: #fff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
}

.set.red .btn.pri {
  background: #d33;
}

.set.red .btn.pri:hover {
  background: #c22;
}

.btn.pri.ico {
  position: relative;
  padding-left: 40px;
  text-align: left;
}

.btn.pri.ico:before {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 30px;
  padding: 10px 0 12px;
  font-family: fontawesome;
  text-align: center;
  border-radius: 3px 0 0 3px;
  background: rgba(0, 0, 0, 0.15);
}

.set.red .btn.pri.ico:before {
  content: "\f014";
}


select{

font-size:20px;
text-align:center;	
	
}

#btn_confirm1{	
visibility: visible;	
}

#btn_confirm2,#btn_confirm3,#btn_confirm4, #btn_confirm5, #btn_confirm6{	
visibility: hidden;	
}

#btn_delete1,#btn_delete2,#btn_delete3,#btn_delete4,#btn_delete5,#btn_delete6{
visibility: hidden;	
}

#Tecnologia_Texto_Teste1,#Elemento_Texto_Teste1,#KPI_Texto_Teste1, #Periodo_Texto_Teste1,
#Date_Inicial_Texto_Teste1, #Date_Final_Texto_Teste1,#Hora_Inicial_Texto_Teste1, #Hora_Final_Texto_Teste1{	
color:blue;
font-size: 20px;
margin-left: 10px;
margin-right: 10px;

}

#Tecnologia_Texto_Teste2,#Elemento_Texto_Teste2,#KPI_Texto_Teste2, #Periodo_Texto_Teste2,
#Date_Inicial_Texto_Teste2, #Date_Final_Texto_Teste2,#Hora_Inicial_Texto_Teste2, #Hora_Final_Texto_Teste2{	
color:blue;
font-size: 20px;
margin-left: 10px;
margin-right: 10px;

}

#Tecnologia_Texto_Teste3,#Elemento_Texto_Teste3,#KPI_Texto_Teste3, #Periodo_Texto_Teste3,
#Date_Inicial_Texto_Teste3, #Date_Final_Texto_Teste3, #Hora_Inicial_Texto_Teste3, #Hora_Final_Texto_Teste3{	
color:blue;
font-size: 20px;
margin-left: 10px;
margin-right: 10px;

}

#Tecnologia_Texto_Teste4,#Elemento_Texto_Teste4,#KPI_Texto_Teste4, #Periodo_Texto_Teste4,
#Date_Inicial_Texto_Teste4, #Date_Final_Texto_Teste4, #Hora_Inicial_Texto_Teste4, #Hora_Final_Texto_Teste4{	
color:blue;
font-size: 20px;
margin-left: 10px;
margin-right: 10px;

}

#Tecnologia_Texto_Teste5,#Elemento_Texto_Teste5,#KPI_Texto_Teste5, #Periodo_Texto_Teste5,
#Date_Inicial_Texto_Teste5, #Date_Final_Texto_Teste5, #Hora_Inicial_Texto_Teste5, #Hora_Final_Texto_Teste5{	
color:blue;
font-size: 20px;
margin-left: 10px;
margin-right: 10px;

}

#Tecnologia_Texto_Teste6,#Elemento_Texto_Teste6,#KPI_Texto_Teste6, #Periodo_Texto_Teste6,
#Date_Inicial_Texto_Teste6, #Date_Final_Texto_Teste6, #Hora_Inicial_Texto_Teste6, #Hora_Final_Texto_Teste6{	
color:blue;
font-size: 20px;
margin-left: 10px;
margin-right: 10px;

}

#Tecnologia_Seta_1,#Elemento_Seta_1,#KPI_Seta_1,#Periodo_Seta_1{

color:green;
font-size:25px;	
visibility:hidden;	
}

#Tecnologia_Seta_2,#Elemento_Seta_2,#KPI_Seta_2,#Periodo_Seta_2{

color:green;
font-size:25px;	
visibility:hidden;	
}

#Tecnologia_Seta_3,#Elemento_Seta_3,#KPI_Seta_3,#Periodo_Seta_3{

color:green;
font-size:25px;	
visibility:hidden;	
}

#Tecnologia_Seta_4,#Elemento_Seta_4,#KPI_Seta_4,#Periodo_Seta_4{

color:green;
font-size:25px;	
visibility:hidden;	
}

#Tecnologia_Seta_5,#Elemento_Seta_5,#KPI_Seta_5,#Periodo_Seta_5{

color:green;
font-size:25px;	
visibility:hidden;	
}

#Tecnologia_Seta_6,#Elemento_Seta_6,#KPI_Seta_6,#Periodo_Seta_6{

color:green;
font-size:25px;	
visibility:hidden;	
}

#containera {
	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto
}

#txtHint{
	
margin-left: 10px;
	
	
}

#MENU{
	
	border: 3px solid black;
	border-radius:8px;
	
}

#Resumo{
	
	margin: 10px;
	width: 98.5%;
	display:inline-block;
	border: 3px solid black;
	border-radius:8px;
	background-color:white;
	
}

#Resumo2{
	
	margin: 10px;
	width: 98.5%;
	display:inline-block;
	border: 3px solid black;
	border-radius:8px;
	background-color:white;
	
}

* {
  box-sizing: border-box;
}

#myInput_GSM{
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 25%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myInput_LTE{
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 25%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myInput_UMTS{
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 25%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myInput_KPI_UMTS{
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 25%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myInput_KPI_GSM{
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 25%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myInput_KPI_LTE{
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 25%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myUL_GSM{
  list-style-type: none;
  padding: 0;
  margin: 0;
  overflow-y:scroll;
  height:350px;
}

#myUL_LTE{
  list-style-type: none;
  padding: 0;
  margin: 0;
  overflow-y:scroll;
  height:350px;
}

#myUL_UMTS{
  list-style-type: none;
  padding: 0;
  margin: 0;
  overflow-y:scroll;
  height:350px;
}

#myUL_KPI_GSM{
  list-style-type: none;
  padding: 0;
  margin: 0;
  overflow-y:scroll;
  height:350px;
}

#myUL_KPI_UMTS{
  list-style-type: none;
  padding: 0;
  margin: 0;
  overflow-y:scroll;
  height:350px;
}

#myUL_KPI_LTE{
  list-style-type: none;
  padding: 0;
  margin: 0;
  overflow-y:scroll;
  height:350px;
}

#SubParameters {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  margin-top: 70px;
  width: 100%;
  height:350px;
  display: block;
}
 

#myUL_GSM li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
}

#myUL_UMTS li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
}




#myUL_LTE li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
}

#myUL_KPI_GSM li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
}

#myUL_KPI_UMTS li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
}

#myUL_KPI_LTE li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
}

#myUL_GSM li a:hover:not(.header) {
  background-color: #eee;
}

#myUL_UMTS li a:hover:not(.header) {
  background-color: #eee;
}

#myUL_LTE li a:hover:not(.header) {
  background-color: #eee;
}

#myUL_KPI_GSM li a:hover:not(.header) {
  background-color: #eee;
}

#myUL_KPI_UMTS li a:hover:not(.header) {
  background-color: #eee;
}

#myUL_KPI_LTE li a:hover:not(.header) {
  background-color: #eee;
}

#myInput_KPI{
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 25%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}



.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

#button_create{

	display:block;
    background-color: red;
    border: 2px solid black;
    color: white;
    padding:20px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
	border-radius: 8px;
	margin-bottom:20px;
	
	
}

.radiozinho{
	
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
	
  border-radius: 50%;
  width: 16px;
  height: 16px;

  border: 2px solid #999;
  transition: 0.2s all linear;
  outline: none;
  margin-right: 5px;

  position: relative;
  top: 4px;

  
	
}

.radiozinho:checked {
  border: 6px solid black;
}

#Querys{
	margin: 10px;	
}
	
</style>

<!--------------------------------------------------------- CALENDARIO -------------------------------------->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quick Report</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script>
  $( function() {
    $( "#datepicker_inicial" ).datepicker();
	$( "#datepicker_final" ).datepicker();
  } );
  </script>
<!------------------------------------------------------- FIM DO CALENDÁRIO --------------------------------->

</head>
<body>


<div id="Resumo2">

<div style = "border-bottom: 2px solid black;"><div style="font-size: 25px; text-align:center"><b>MENU</b></p></div></div>
<div id= "Query1" style = "border-bottom: 2px solid black;"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query1" checked="checked"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu1" style="display:inline-block"><span id="Tecnologia_Texto_Teste1"></span><i id="Tecnologia_Seta_1" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste1"></span><i id="Elemento_Seta_1" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste1"></span><i id="KPI_Seta_1" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste1"></span><i id="Periodo_Seta_1" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste1"></span><span id="Date_Final_Texto_Teste1"></span><span id="Hora_Inicial_Texto_Teste1"></span><span id="Hora_Final_Texto_Teste1"></span><button id="chart_type1" class="w3-btn w3-white w3-xlarge"><i class="fa fa-line-chart w3-text-blue w3-xxlarge"></i></button><button id="chart_position1" class="w3-btn w3-white w3-xlarge"><i class="fa fa-long-arrow-right w3-text-blue w3-xxlarge"></i></button><button id="btn_confirm1" onclick="mostrar_charts1()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete1" onclick="delete_menu1()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><button id="btn_add1" onclick="add_line2()" class="w3-btn w3-xlarge w3-text-blue"><i class="fa fa-plus-square"></i></button></div></div></div>
<div id= "Query2" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query2"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu2" style="display:none"><span id="Tecnologia_Texto_Teste2"></span><i id="Tecnologia_Seta_2" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste2"></span><i id="Elemento_Seta_2" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste2"></span><i id="KPI_Seta_2" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste2"></span><i id="Periodo_Seta_2" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste2"></span><span id="Date_Final_Texto_Teste2"></span><span id="Hora_Inicial_Texto_Teste2"></span><span id="Hora_Final_Texto_Teste2"></span><button id="chart_type2" class="w3-btn w3-white w3-xlarge"><i class="fa fa-line-chart w3-text-green w3-xxlarge"></i></button><button id="chart_position2" class="w3-btn w3-white w3-xlarge"><i class="fa fa-long-arrow-right w3-text-green w3-xxlarge"></i></button><button id="btn_confirm2" onclick="mostrar_charts2()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete2" onclick="delete_menu2()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><button id="btn_add2" onclick="add_line3()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div id= "Query3" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query3"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu3" style="display:none"><span id="Tecnologia_Texto_Teste3"></span><i id="Tecnologia_Seta_3" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste3"></span><i id="Elemento_Seta_3" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste3"></span><i id="KPI_Seta_3" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste3"></span><i id="Periodo_Seta_3" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste3"></span><span id="Date_Final_Texto_Teste3"></span><span id="Hora_Inicial_Texto_Teste3"></span><span id="Hora_Final_Texto_Teste3"></span><button id="chart_type3" class="w3-btn w3-white w3-xlarge"><i class="fa fa-line-chart w3-text-orange w3-xxlarge"></i></button><button id="chart_position3" class="w3-btn w3-white w3-xlarge"><i class="fa fa-long-arrow-right w3-text-orange w3-xxlarge"></i></button><button id="btn_confirm3" onclick="mostrar_charts3()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete3" onclick="delete_menu3()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><button id="btn_add3" onclick="add_line4()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div id= "Query4" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query4"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu4" style="display:none"><span id="Tecnologia_Texto_Teste4"></span><i id="Tecnologia_Seta_4" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste4"></span><i id="Elemento_Seta_4" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste4"></span><i id="KPI_Seta_4" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste4"></span><i id="Periodo_Seta_4" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste4"></span><span id="Date_Final_Texto_Teste4"></span><span id="Hora_Inicial_Texto_Teste4"></span><span id="Hora_Final_Texto_Teste4"></span><button id="chart_type4" class="w3-btn w3-white w3-xlarge"><i class="fa fa-line-chart w3-text-yellow w3-xxlarge"></i></button><button id="chart_position4" class="w3-btn w3-white w3-xlarge"><i class="fa fa-long-arrow-right w3-text-yellow w3-xxlarge"></i></button><button id="btn_confirm4" onclick="mostrar_charts4()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete4" onclick="delete_menu4()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><button id="btn_add4" onclick="add_line5()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div id= "Query5" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query5"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu5" style="display:none"><span id="Tecnologia_Texto_Teste5"></span><i id="Tecnologia_Seta_5" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste5"></span><i id="Elemento_Seta_5" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste5"></span><i id="KPI_Seta_5" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste5"></span><i id="Periodo_Seta_5" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste5"></span><span id="Date_Final_Texto_Teste5"></span><span id="Hora_Inicial_Texto_Teste5"></span><span id="Hora_Final_Texto_Teste5"></span><button id="chart_type5" class="w3-btn w3-white w3-xlarge"><i class="fa fa-line-chart w3-xxlarge" style="color: #24CBE5" ></i></button><button id="chart_position5" class="w3-btn w3-white w3-xlarge"><i class="fa fa-long-arrow-right w3-xxlarge" style="color: #24CBE5"></i></button><button id="btn_confirm5" onclick="mostrar_charts5()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete5" onclick="delete_menu5()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><button id="btn_add5" onclick="add_line6()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div id= "Query6" style = "width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query6"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu6" style="display:none"><span id="Tecnologia_Texto_Teste6"></span><i id="Tecnologia_Seta_6" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste6"></span><i id="Elemento_Seta_6" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste6"></span><i id="KPI_Seta_6" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste6"></span><i id="Periodo_Seta_6" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste6"></span><span id="Date_Final_Texto_Teste6"></span><span id="Hora_Inicial_Texto_Teste6"></span><span id="Hora_Final_Texto_Teste6"></span><button id="chart_type6" class="w3-btn w3-white w3-xlarge"><i class="fa fa-line-chart w3-xxlarge" style="color: #64E572"></i></button><button id="chart_position6" class="w3-btn w3-white w3-xlarge"><i class="fa fa-long-arrow-right w3-xxlarge" style="color: #64E572" ></i></button><button id="btn_confirm6" onclick="mostrar_charts6()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete6" onclick="delete_menu6()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><button id="btn_add6" onclick="add_line7()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
</div>


<div id="MENU" style="background-color:white; height:500px; margin:10px 10px 10px 10px">

<div  style="display:inline-block; width:45%; height:500px; position: relative; top:-47.5px; margin-left:10px; margin-top:5px">
<p style="font-size:30px; font-family:Cornerstone; color:red; border: 1px solid black; text-align:center"><b>PARAMETERS</b></p>

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
<?php for($i = 1; $i <= 23; $i++): ?>
  <option  value="<?= $i; ?>"><?= $i % 23 ? $i % 23 : 23 ?>:00</option>
<?php endfor ?>
</select>
</div>
<div style="display:inline-block; margin-left:95px">
<p style="font-size:25px; display:inline-block"><b>Final Hour </b></p>
<select id = "Drop_Hora_Final" style="display:inline-block; width: 150px; height:25px">
<?php for($i = 1; $i <= 23; $i++): ?> 
  <option  value="<?= $i; ?>"><?= $i % 23 ? $i % 23 : 23 ?>:00</option>
<?php endfor ?>
</select>
</div>

</div>

</div>

<div style="width:97.5%; height:20% margin: 10px">

<div style="text-align:center">

<div style="display:inline-block; margin-top: 10px">
<p><button style="border-radius:15px" class="w3-btn w3-orange w3-xlarge" onclick="showUser()">Create<i class="w3-margin-left fa fa-line-chart"></i></button></p>
</div>

</div>

</div>

</div>
</div>

<div id="Div_Elementos" style="display:inline-block; width:25%; margin-left:10px; margin-top:5px">
<p style="font-size:30px; font-family:Cornerstone; color:red; border: 1px solid black; text-align:center"><b>ELEMENTS</b></p>

<!--<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Elements" title="Type in a name" style="width:100%">-->

<div id="Div_Elementos_UMTS" style="display:block">
<input type="text" id="myInput_UMTS" onkeyup="myFunction_UMTS()" placeholder="Search for UMTS Elements" title="Type in a UMTS Element" style="width:100%">
<ul id="myUL_UMTS">
<?php
foreach ($kpi_customize_UMTS_Elementoos_City as $row){
echo '<li onclick="printclick_elementos_UMTS_City(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos" value="'.$row->node.'"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
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
foreach ($celulas_kpi_customize as $row){
echo '<li value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px; color:red">'.$row->node.'</span></a></li>';
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
echo '<li onclick="printclick_elementos_GSM_City(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
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

<div id="Div_Elementos_LTE" style="display:none">
<input type="text" id="myInput_LTE" onkeyup="myFunction_LTE()" placeholder="Search for LTE Elements" title="Type in a LTE Element" style="width:100%">
<ul id="myUL_LTE">
<?php
foreach ($kpi_customize_LTE_Elementoos_City as $row){
echo '<li onclick="printclick_elementos_lte_City(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_elementos"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
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
<p style="font-size:30px; font-family:Cornerstone; color:red; border: 1px solid black; text-align:center"><b>KPI's / Counters</b></p>

<!--<input type="search" id="myInput_KPI" onkeyup="myFunction_KPI()" placeholder="Search for KPI's" title="Type in a name" style="width:100%" ng-model="querytext" ng-minlength="2">-->

<div id="Div_LTE" style="display:none">
<input type="search" id="myInput_KPI_LTE" onkeyup="myFunction_KPI_LTE()" placeholder="Search for LTE KPI's" title="Type in a LTE KPI " style="width:100%" ng-model="querytext" ng-minlength="2">
<ul id="myUL_KPI_LTE">
<?php
foreach ($kpi_customize_db_lte as $row){
echo '<li onclick="printclick_kpi(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node. '</span></a></li>';
}
foreach ($counter_customize_db_lte as $row){
echo '<li onclick="printclick_counter_LTE(this)" id="'.$row->counter_aggregation.'" value="'.$row->functionsubset_id.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px; color:red">'.$row->node. '</span></a></li>';
}
?>
</ul>
</div>

<div id="Div_UMTS" style="display:block">
<input type="search" id="myInput_KPI_UMTS" onkeyup="myFunction_KPI_UMTS()" placeholder="Search for UMTS KPI's" title="Type in a UMTS KPI" style="width:100%" ng-model="querytext" ng-minlength="2">
<ul id="myUL_KPI_UMTS">
<?php
foreach ($kpi_customize_db_umts as $row){
echo '<li onclick="printclick_kpi(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
foreach ($counter_customize_db_umts as $row){
echo '<li onclick="printclick_counter_UMTS(this)" id="'.$row->counter_aggregation.'" value="'.$row->functionsubset_id.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px; color:red">'.$row->node. '</span></a></li>';
}
?>
</ul>
</div>

<div id="Div_GSM" style="display:none">
<input type="search" id="myInput_KPI_GSM" onkeyup="myFunction_KPI_GSM()" placeholder="Search for GSM KPI's" title="Type in a GSM KPI" style="width:100%" ng-model="querytext" ng-minlength="2">
<ul id="myUL_KPI_GSM">
<?php
foreach ($kpi_customize_db_gsm as $row){
echo '<li onclick="printclick_kpi(this)" value="'.$row->node.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node.'</span></a></li>';
}
foreach ($counter_customize_db_gsm as $row){
echo '<li onclick="printclick_counter_GSM(this)" id="'.$row->counter_aggregation.'" value="'.$row->functionsubset_id.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px; color:red">'.$row->node. '</span></a></li>';
}
?>
</ul>
</div>
</div>


</div>

<div id="Resumo" >

<div style = "border-bottom: 2px solid black;"><p style="font-size: 25px; text-align:center"><b>MENU</b></p></div>
<div style = "border-bottom: 2px solid black;"><p style= "margin:10px;"><b>Query 1: </b><span id="Texto_Teste1" style="color:blue"></span></div>
<div style = "border-bottom: 2px solid black;"><p style= "margin:10px"><b>Query 2: </b><span id="Texto_Teste2" style="color:blue"></span></div>
<div style = "border-bottom: 2px solid black;"><p style= "margin:10px"><b>Query 3: </b><span id="Texto_Teste3" style="color:blue"></span></div>
<div style = "border-bottom: 2px solid black;"><p style= "margin:10px"><b>Query 4: </b><span id="Texto_Teste4" style="color:blue"></span></div>
<div style = "border-bottom: 2px solid black;"><p style= "margin:10px"><b>Query 5: </b><span id="Texto_Teste5" style="color:blue"></span></div>
<p style= "margin:10px"><b>Query 6: </b><span id="Texto_Teste6" style="color:blue"></span>

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


<div id="Querys" style="display:block">

<div id="txtHint1"><b></b></div>	
<div id="txtHint2"><b></b></div>
<div id="txtHint3"><b></b></div>
<div id="txtHint4"><b></b></div>
<div id="txtHint5"><b></b></div>
<div id="txtHint6"><b></b></div>

</div>

<p id="Teste_Hora"></p>

<div id="loading" style="display:none">
    <p style="text-align:center;"><img src="https://www.pulsar-entertainment.com/assets/images/loading.gif" style="width:150px; height:150px;" alt="Loading" /></p>
</div>
<!------------------------------------------------------- END AJAX ----------------------------------------------->
<script>
var kpi = "";
var counter_name = "";
var table_name = "";
var rnc = "";
var bsc = "";
var cellid = "";
var counter_aggregation = "";
var auth_change = false;
var estado = true;  //Se estado for true eu estou em KPI se for falso eu estou em Contadores.
var contador = "";
var elemento = "";
var tecnologia = "";
var periodo ="";
var tempo = "";
var familia = "";
var data_inicial = "";
var data_final = "";
var hora_inicial = "";
var hora_final = "";
var data_inicial1 = "";
var data_inicial2 = "";
var data_inicial3 = "";
var data_inicial4 = "";
var data_inicial5 = "";
var data_inicial6 = "";
var autorizacao = false;
var autorization1 = true;
var autorization2 = true;
var autorization3 = true;
var autorization4 = true;
var autorization5 = true;
var autorization6 = true;
var hourly_selected = false;
var pointStartHour = "";
var lixeira1 = false;
var lixeira2 = false;
var lixeira3 = false;
var lixeira4 = false;
var lixeira5 = false;
var lixeira6 = false;
var query1 = "";
var query2 = "";
var query3 = "";
var query4 = "";
var query5 = "";
var query6 = "";
var nome1 = "";
var nome2 = "";
var nome3 = "";
var nome4 = "";
var nome5 = "";
var nome6 = "";
var tipo_chart1 = 1;
var tipo_chart2 = 1;
var tipo_chart3 = 1;
var tipo_chart4 = 1;
var tipo_chart5 = 1;
var tipo_chart6 = 1;
var tipo_chart_position1 = 0;
var tipo_chart_position2 = 0;
var tipo_chart_position3 = 0;
var tipo_chart_position4 = 0;
var tipo_chart_position5 = 0;
var tipo_chart_position6 = 0;
var add_menu1 = false;
var add_menu2 = false;
var add_menu3 = false;
var add_menu4 = false;
var add_menu5 = false;
var add_menu6 = false;
var VisibilidadeMenu = true;
var str = "SELECT date,Acc_Cs as node FROM gsm_kpi.vw_main_kpis_bsc_rate_daily where node != 'UNKNOWN' and node = 'BSCBA58' and date between '10/01/2017' and '10/10/2017' order by date";
var query_num = 1;
var query = "";
var query_cells = "";

/////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////////////

$(document).on('change', 'select', function() {

hora_inicial = $("#Drop_Hora_Inicial option:selected").text();
hora_final = $("#Drop_Hora_Final option:selected").text();
if(autorization1 == true){
document.getElementById("Hora_Inicial_Texto_Teste1").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste1").innerHTML = hora_final;
}else if(autorization2 == true){
document.getElementById("Hora_Inicial_Texto_Teste2").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste2").innerHTML = hora_final;
}else if(autorization3 == true){
document.getElementById("Hora_Inicial_Texto_Teste3").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste3").innerHTML = hora_final;
}else if(autorization4 == true){
document.getElementById("Hora_Inicial_Texto_Teste4").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste4").innerHTML = hora_final;
}else if(autorization5 == true){
document.getElementById("Hora_Inicial_Texto_Teste5").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste5").innerHTML = hora_final;
}else if(autorization6 == true){
document.getElementById("Hora_Inicial_Texto_Teste6").innerHTML = hora_inicial+" to ";
document.getElementById("Hora_Final_Texto_Teste6").innerHTML = hora_final;
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
  return Math.ceil((((d - yearStart) / 86400000) + 1)/7)
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

/////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function () {
   $("#radio_query1").click(function(){
	autorization1 = true;
	autorization2 = false;
	autorization3 = false;
	autorization4 = false;
	autorization5 = false;
	autorization6 = false;
	auth_change = false;
	document.getElementById("btn_confirm1").style.visibility = "visible";
	document.getElementById("btn_confirm2").style.visibility = "hidden";
	document.getElementById("btn_confirm3").style.visibility = "hidden";
	document.getElementById("btn_confirm4").style.visibility = "hidden";
	document.getElementById("btn_confirm5").style.visibility = "hidden";
	document.getElementById("btn_confirm6").style.visibility = "hidden";
	document.getElementById("btn_delete1").style.visibility = "hidden";
    document.getElementById("Query_Menu1").style.opacity = 1;
	document.getElementById("Query_Menu2").style.opacity = 0.3;
	document.getElementById("Query_Menu3").style.opacity = 0.3;
	document.getElementById("Query_Menu4").style.opacity = 0.3;
	document.getElementById("Query_Menu5").style.opacity = 0.3;
	document.getElementById("Query_Menu6").style.opacity = 0.3;
	document.getElementById("chart_type1").disabled = false;
	document.getElementById("chart_position1").disabled = false;	
   });

   $("#radio_query2").click(function(){
	autorization1 = false;
	autorization2 = true;
	autorization3 = false;
	autorization4 = false;
	autorization5 = false;
	autorization6 = false;
	auth_change = false;
	document.getElementById("btn_confirm1").style.visibility = "hidden";
	document.getElementById("btn_confirm2").style.visibility = "visible";
	document.getElementById("btn_confirm3").style.visibility = "hidden";
	document.getElementById("btn_confirm4").style.visibility = "hidden";
	document.getElementById("btn_confirm5").style.visibility = "hidden";
	document.getElementById("btn_confirm6").style.visibility = "hidden";
	document.getElementById("btn_delete2").style.visibility = "hidden";
    document.getElementById("Query_Menu1").style.opacity = 0.3;
	document.getElementById("Query_Menu2").style.opacity = 1;
	document.getElementById("Query_Menu3").style.opacity = 0.3;
	document.getElementById("Query_Menu4").style.opacity = 0.3;
	document.getElementById("Query_Menu5").style.opacity = 0.3;
	document.getElementById("Query_Menu6").style.opacity = 0.3;
	document.getElementById("chart_type2").disabled = false;
	document.getElementById("chart_position2").disabled = false;	
   });
   
    $("#radio_query3").click(function(){
	autorization1 = false;
	autorization2 = false;
	autorization3 = true;
	autorization4 = false;
	autorization5 = false;
	autorization6 = false;
	auth_change = false;
	document.getElementById("btn_confirm1").style.visibility = "hidden";
	document.getElementById("btn_confirm2").style.visibility = "hidden";
	document.getElementById("btn_confirm3").style.visibility = "visible";
	document.getElementById("btn_confirm4").style.visibility = "hidden";
	document.getElementById("btn_confirm5").style.visibility = "hidden";
	document.getElementById("btn_confirm6").style.visibility = "hidden";
	document.getElementById("btn_delete3").style.visibility = "hidden";
    document.getElementById("Query_Menu1").style.opacity = 0.3;
	document.getElementById("Query_Menu2").style.opacity = 0.3;
	document.getElementById("Query_Menu3").style.opacity = 1;
	document.getElementById("Query_Menu4").style.opacity = 0.3;
	document.getElementById("Query_Menu5").style.opacity = 0.3;
	document.getElementById("Query_Menu6").style.opacity = 0.3;
	document.getElementById("chart_type3").disabled = false;
	document.getElementById("chart_position3").disabled = false;	
   });
   
    $("#radio_query4").click(function(){
	autorization1 = false;
	autorization2 = false;
	autorization3 = false;
	autorization4 = true;
	autorization5 = false;
	autorization6 = false;
	auth_change = false;
	document.getElementById("btn_confirm1").style.visibility = "hidden";
	document.getElementById("btn_confirm2").style.visibility = "hidden";
	document.getElementById("btn_confirm3").style.visibility = "hidden";
	document.getElementById("btn_confirm4").style.visibility = "visible";
	document.getElementById("btn_confirm5").style.visibility = "hidden";
	document.getElementById("btn_confirm6").style.visibility = "hidden";
	document.getElementById("btn_delete4").style.visibility = "hidden";	
    document.getElementById("Query_Menu1").style.opacity = 0.3;
	document.getElementById("Query_Menu2").style.opacity = 0.3;
	document.getElementById("Query_Menu3").style.opacity = 0.3;
	document.getElementById("Query_Menu4").style.opacity = 1;
	document.getElementById("Query_Menu5").style.opacity = 0.3;
	document.getElementById("Query_Menu6").style.opacity = 0.3;	
	document.getElementById("chart_type4").disabled = false;
	document.getElementById("chart_position4").disabled = false;	
   });
   
    $("#radio_query5").click(function(){
	autorization1 = false;
	autorization2 = false;
	autorization3 = false;
	autorization4 = false;
	autorization5 = true;
	autorization6 = false;
	auth_change = false;
	document.getElementById("btn_confirm1").style.visibility = "hidden";
	document.getElementById("btn_confirm2").style.visibility = "hidden";
	document.getElementById("btn_confirm3").style.visibility = "hidden";
	document.getElementById("btn_confirm4").style.visibility = "hidden";
	document.getElementById("btn_confirm5").style.visibility = "visible";
	document.getElementById("btn_confirm6").style.visibility = "hidden";
	document.getElementById("btn_delete5").style.visibility = "hidden";	
    document.getElementById("Query_Menu1").style.opacity = 0.3;
	document.getElementById("Query_Menu2").style.opacity = 0.3;
	document.getElementById("Query_Menu3").style.opacity = 0.3;
	document.getElementById("Query_Menu4").style.opacity = 0.3;
	document.getElementById("Query_Menu5").style.opacity = 1;
	document.getElementById("Query_Menu6").style.opacity = 0.3;	
	document.getElementById("chart_type5").disabled = false;
	document.getElementById("chart_position5").disabled = false;	
   });
   
    $("#radio_query6").click(function(){
	autorization1 = false;
	autorization2 = false;
	autorization3 = false;
	autorization4 = false;
	autorization5 = false;
	autorization6 = true;
	auth_change = false;
	document.getElementById("btn_confirm1").style.visibility = "hidden";
	document.getElementById("btn_confirm2").style.visibility = "hidden";
	document.getElementById("btn_confirm3").style.visibility = "hidden";
	document.getElementById("btn_confirm4").style.visibility = "hidden";
	document.getElementById("btn_confirm5").style.visibility = "hidden";
	document.getElementById("btn_confirm6").style.visibility = "visible";
	document.getElementById("btn_delete6").style.visibility = "hidden";	
    document.getElementById("Query_Menu1").style.opacity = 0.3;
	document.getElementById("Query_Menu2").style.opacity = 0.3;
	document.getElementById("Query_Menu3").style.opacity = 0.3;
	document.getElementById("Query_Menu4").style.opacity = 0.3;
	document.getElementById("Query_Menu5").style.opacity = 0.3;
	document.getElementById("Query_Menu6").style.opacity = 1;
	document.getElementById("chart_type6").disabled = false;
	document.getElementById("chart_position6").disabled = false;	
   });
});




///////////////////////////////////////////////////// TESTE AJAX ///////////////////////////////////////////
$( "#datepicker_inicial" ).datepicker({
     onClose: function(){
		if(autorization1 == true){
		if(periodo != ""){
		if(hourly_selected == true){
		document.getElementById("Date_Inicial_Texto_Teste1").innerHTML = document.getElementById("datepicker_inicial").value+" to";	
		}
		else if(periodo == "daily"){			
		document.getElementById("Date_Inicial_Texto_Teste1").innerHTML = document.getElementById("datepicker_inicial").value+" to";
		} else if(periodo == "weekly"){
		data_inicial1 = document.getElementById("datepicker_inicial").value;
		var s = data_inicial1;
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial1 = m.toDate().getWeekNumber();
		document.getElementById("Date_Inicial_Texto_Teste1").innerHTML = "Week "+data_inicial1+" to";
		} else if(periodo = "monthly"){
		data_inicial1 = document.getElementById("datepicker_inicial").value;
		var s = data_inicial1;
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial1 = m.toDate().getUTCMonth() + 1;
		document.getElementById("Date_Inicial_Texto_Teste1").innerHTML = "Month "+data_inicial1+" to";
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
		data_inicial2 = document.getElementById("datepicker_inicial").value;
		var s = data_inicial2;
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial2 = m.toDate().getWeekNumber();
		document.getElementById("Date_Inicial_Texto_Teste2").innerHTML = "Week "+data_inicial2+" to";
		}else if(periodo = "monthly"){
		data_inicial2 = document.getElementById("datepicker_inicial").value;
		var s = data_inicial2;
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial2 = m.toDate().getUTCMonth() + 1;
		document.getElementById("Date_Inicial_Texto_Teste2").innerHTML = "Month "+data_inicial2+" to";
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
		data_inicial3 = document.getElementById("datepicker_inicial").value;
		var s = data_inicial3;
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial3 = m.toDate().getWeekNumber();
		document.getElementById("Date_Inicial_Texto_Teste3").innerHTML = "Week "+data_inicial3+" to";
		}else if(periodo = "monthly"){
		data_inicial3 = document.getElementById("datepicker_inicial").value;
		var s = data_inicial3;
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial3 = m.toDate().getUTCMonth() + 1;
		document.getElementById("Date_Inicial_Texto_Teste3").innerHTML = "Month "+data_inicial3+" to";
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
		data_inicial4 = document.getElementById("datepicker_inicial").value;
		var s = data_inicial4;
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial4 = m.toDate().getWeekNumber();
		document.getElementById("Date_Inicial_Texto_Teste4").innerHTML = "Week "+data_inicial4+" to";
		}else if(periodo = "monthly"){
		data_inicial4 = document.getElementById("datepicker_inicial").value;
		var s = data_inicial4;
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial4 = m.toDate().getUTCMonth() + 1;
		document.getElementById("Date_Final_Texto_Teste4").innerHTML = "Month "+data_inicial4+" to";
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
		data_inicial5 = document.getElementById("datepicker_inicial").value;
		var s = data_inicial5;
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial5 = m.toDate().getWeekNumber();
		document.getElementById("Date_Inicial_Texto_Teste5").innerHTML = "Week "+data_inicial5+" to";
		}else if(periodo = "monthly"){
		data_inicial5 = document.getElementById("datepicker_inicial").value;
		var s = data_inicial5;
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial5 = m.toDate().getUTCMonth() + 1;
		document.getElementById("Date_Final_Texto_Teste5").innerHTML = "Month "+data_inicial5+" to";
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
		data_inicial6 = document.getElementById("datepicker_inicial").value;
		var s = data_inicial6;
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial6 = m.toDate().getWeekNumber();
		document.getElementById("Date_Inicial_Texto_Teste6").innerHTML = "Week "+data_inicial6+" to";
		}else if(periodo = "monthly"){
		data_inicial6 = document.getElementById("datepicker_inicial").value;
		var s = data_inicial6;
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial6 = m.toDate().getUTCMonth() + 1;
		document.getElementById("Date_Final_Texto_Teste6").innerHTML = "Month "+data_inicial6+" to";
		}
		}
		auth_change = true;
		}
     }
});

$( "#datepicker_final" ).datepicker({
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
		document.getElementById("Date_Final_Texto_Teste1").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
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
		document.getElementById("Date_Final_Texto_Teste2").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
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
		document.getElementById("Date_Final_Texto_Teste3").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
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
		document.getElementById("Date_Final_Texto_Teste4").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
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
		document.getElementById("Date_Final_Texto_Teste5").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
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
		document.getElementById("Date_Final_Texto_Teste6").innerHTML = "Week "+data_final;
		}else if(periodo = "monthly"){
		data_final = document.getElementById("datepicker_final").value;
		var s = data_final;
		var m = moment(s, 'MM-DD-YYYY');
		data_final = m.toDate().getUTCMonth() + 1;
		document.getElementById("Date_Final_Texto_Teste6").innerHTML = "Month "+data_final;
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
		
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	
	auth_change = true;

	//document.getElementById("Texto_Teste").innerHTML = query;
	
}

function printclick_elementos_GSM_BSC(node){
	
	familia = "bsc";
	elemento = $(node).text();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	
	auth_change = true;
	//document.getElementById("Texto_Teste").innerHTML = query;
	
}

function printclick_elementos_GSM_BTS(node){
	
	familia = "bts";
	elemento = $(node).text();
	$(".CellsItems").remove();
	
	query_cells = "SELECT cellname,cellid,bsc FROM gsm_control.cells_db where bts='"+elemento+"' order by cellname DESC";

	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	showCells();	
	
	
	auth_change = true;
	
}

function printclick_elementos_GSM_City(node){
	
	familia = "cidade";
	elemento = $(node).text();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}	
	
	
	auth_change = true;
	
}

function printclick_elementos_GSM_Reg(node){
	
	familia = "region";
	elemento = $(node).text();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}	
	
	
	auth_change = true;
	
}

function printclick_elementos_GSM_UF(node){
	
	familia = "uf";
	elemento = $(node).text();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	
	auth_change = true;
	
}

//////////////////////////////////////////////////// UMTS ////////////////////////////////////////////////////

 function printclick_elementos_UMTS_Cells(node){
	
	cellid = $(node).attr("id");
	rnc = $(node).attr("value");
	
	familia = "cell";
	elemento = $(node).text();
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}	
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}		
	
	
	auth_change = true;
	
 }


function printclick_elementos_UMTS_City(node){
	
	familia = "cidade";
	elemento = $(node).text();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}	
	
	
	
	auth_change = true;
	
}

function printclick_elementos_UMTS_Cluster(node){
	
	familia = "cluster";
	elemento = $(node).text();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	
	auth_change = true;
	
}

function printclick_elementos_UMTS_CustomCluster(node){
	
	familia = "cluster";
	elemento = $(node).text();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}	
	
	auth_change = true;
	
}

function printclick_elementos_UMTS_NodeB(node){
	
	
	familia = "NodeB";
	elemento = $(node).text();
	query_cells = "SELECT distinct cell,rnc,cellid FROM umts_control.cells_database where nodeb = '"+elemento+"' order by cell DESC";
	
	$(".CellsItems").remove();
		
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}		
	showCells(); 

	auth_change = true;
	
}

function printclick_elementos_UMTS_Reg(node){
	
	familia = "region";
	elemento = $(node).text();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}	
	
	auth_change = true;
	
}

function printclick_elementos_UMTS_Rnc(node){
	
	familia = "rnc";
	elemento = $(node).text();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	
	auth_change = true;
	
}

function printclick_elementos_UMTS_UF(node){
	
	familia = "uf";
	elemento = $(node).text();
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}	
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}	
	
	auth_change = true;
}

////////////////////////////////////////////////// LTE //////////////////////////////////////////////////////

function printclick_elementos_LTE_Cells(node){
	
	familia = "cell";
	
	
	cellname = $(node).text();
	
	elemento = cellname;
	
	cellid = $(node).attr("id");
	
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = cellname;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = cellname;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = cellname;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = cellname;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = cellname;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = cellname;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	
	auth_change = true;
	
}

function printclick_elementos_lte_City(node){
	
	familia = "cidade";
	elemento = $(node).text();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	
	auth_change = true;
	
}

function printclick_elementos_lte_Reg(node){
	
	familia = "Region";
	elemento = $(node).text();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}	
	
	auth_change = true;
	
}

function printclick_elementos_lte_UF(node){
	
	familia = "UF";
	elemento = $(node).text();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}	
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	
	auth_change = true;
	
}

function printclick_elementos_lte_eNodeB(node){
	
	familia = "eNodeB";
	elemento = $(node).text();
	$(".CellsItems").remove();
	
	
	query_cells = "SELECT CELL,cellid FROM lte_control.cells WHERE ENODEB = '"+elemento+"' ORDER BY CELL DESC";
	
	// $(".CellsItems").remove();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	showCells();
	
	auth_change = true;
	
}

function printclick_elementos_lte_Cluster(node){
	
	familia = "Cluster";
	elemento = $(node).text();
	if(autorization1 == true){
	document.getElementById("Elemento_Texto_Teste1").innerHTML = elemento;
	document.getElementById("Elemento_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("Elemento_Texto_Teste2").innerHTML = elemento;
	document.getElementById("Elemento_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("Elemento_Texto_Teste3").innerHTML = elemento;
	document.getElementById("Elemento_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("Elemento_Texto_Teste4").innerHTML = elemento;
	document.getElementById("Elemento_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("Elemento_Texto_Teste5").innerHTML = elemento;
	document.getElementById("Elemento_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("Elemento_Texto_Teste6").innerHTML = elemento;
	document.getElementById("Elemento_Seta_6").style.visibility = "visible";
	}
	
	auth_change = true;
	
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function printclick_kpi(node){
	
	estado = true;
	
	kpi = $(node).text();
	if(autorization1 == true){
	document.getElementById("KPI_Texto_Teste1").innerHTML = kpi;
	document.getElementById("KPI_Seta_1").style.visibility = "visible";
	}
	if(autorization2 == true){
	document.getElementById("KPI_Texto_Teste2").innerHTML = kpi;
	document.getElementById("KPI_Seta_2").style.visibility = "visible";
	}
	if(autorization3 == true){
	document.getElementById("KPI_Texto_Teste3").innerHTML = kpi;
	document.getElementById("KPI_Seta_3").style.visibility = "visible";
	}
	if(autorization4 == true){
	document.getElementById("KPI_Texto_Teste4").innerHTML = kpi;
	document.getElementById("KPI_Seta_4").style.visibility = "visible";
	}
	if(autorization5 == true){
	document.getElementById("KPI_Texto_Teste5").innerHTML = kpi;
	document.getElementById("KPI_Seta_5").style.visibility = "visible";
	}
	if(autorization6 == true){
	document.getElementById("KPI_Texto_Teste6").innerHTML = kpi;
	document.getElementById("KPI_Seta_6").style.visibility = "visible";
	}	

	auth_change = true;
	
}

function printclick_counter_GSM(node){
	
	estado = false;
	contador = "GSM";
	
	counter_name = $(node).text();
	counter_aggregation = $(node).attr("id");
	table_name = $(node).attr("value");
	
	kpi = counter_name;
	
	data_inicial = document.getElementById("datepicker_inicial").value;
	data_final = document.getElementById("datepicker_final").value;
		
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

	auth_change = true;

}

function printclick_counter_UMTS(node){
	
	estado = false;
	contador = "UMTS";
	
	counter_name = $(node).text();
	counter_aggregation = $(node).attr("id");
	table_name = $(node).attr("value");
	
	kpi = counter_name;
	
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
	
	auth_change = true;

}

function printclick_counter_LTE(node){
	
	
	estado = false;
	contador = "LTE";
	
	counter_name = $(node).text();
	counter_aggregation = $(node).attr("id");
	table_name = $(node).attr("value");
	
	kpi = counter_name;
	
	data_inicial = document.getElementById("datepicker_inicial").value;
	data_final = document.getElementById("datepicker_final").value;
	
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

	auth_change = true;

}	

function delete_menu1(){
autorization1 = true;
document.getElementById("btn_delete1").style.visibility	= "hidden";
document.getElementById("btn_confirm1").style.visibility = "visible";
if(lixeira2 == false){
	
}
query_num = 1;
lixeira1 = true;
document.getElementById("chart_type1").disabled = false;
document.getElementById("chart_position1").disabled = false;
document.getElementById("Tecnologia_Texto_Teste1").innerHTML = "";
document.getElementById("Tecnologia_Seta_1").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste1").innerHTML = "";
document.getElementById("Elemento_Seta_1").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste1").innerHTML = "";
document.getElementById("KPI_Seta_1").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste1").innerHTML = "";
document.getElementById("Periodo_Seta_1").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste1").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste1").innerHTML = "";
query1 = "";
nome1 = "";	
}

function delete_menu2(){
autorization2 = true;
document.getElementById("btn_delete2").style.visibility	= "hidden";
document.getElementById("btn_confirm2").style.visibility = "visible";
query_num = 2;
lixeira2 = true;
document.getElementById("chart_type2").disabled = false;
document.getElementById("chart_position2").disabled = false;
document.getElementById("Tecnologia_Texto_Teste2").innerHTML = "";
document.getElementById("Tecnologia_Seta_2").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste2").innerHTML = "";
document.getElementById("Elemento_Seta_2").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste2").innerHTML = "";
document.getElementById("KPI_Seta_2").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste2").innerHTML = "";
document.getElementById("Periodo_Seta_2").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste2").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste2").innerHTML = "";	
query2 = "";
nome2 = "";			
}

function delete_menu3(){
autorization3 = true;
document.getElementById("btn_delete3").style.visibility	= "hidden";
document.getElementById("btn_confirm3").style.visibility = "visible";
query_num = 3;
lixeira3 = true;
document.getElementById("chart_type3").disabled = false;
document.getElementById("chart_position3").disabled = false;
document.getElementById("Tecnologia_Texto_Teste3").innerHTML = "";
document.getElementById("Tecnologia_Seta_3").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste3").innerHTML = "";
document.getElementById("Elemento_Seta_3").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste3").innerHTML = "";
document.getElementById("KPI_Seta_3").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste3").innerHTML = "";
document.getElementById("Periodo_Seta_3").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste3").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste3").innerHTML = "";	
query3 = "";
nome3 = "";			
}

function delete_menu4(){
autorization4 = true;
document.getElementById("btn_delete4").style.visibility	= "hidden";
document.getElementById("btn_confirm4").style.visibility = "visible";
query_num = 4;
lixeira4 = true;
document.getElementById("chart_type4").disabled = false;
document.getElementById("chart_position4").disabled = false;
document.getElementById("Tecnologia_Texto_Teste4").innerHTML = "";
document.getElementById("Tecnologia_Seta_4").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste4").innerHTML = "";
document.getElementById("Elemento_Seta_4").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste4").innerHTML = "";
document.getElementById("KPI_Seta_4").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste4").innerHTML = "";
document.getElementById("Periodo_Seta_4").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste4").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste4").innerHTML = "";	
query4 = "";
nome4 = "";			
}

function add_line2(){
	
if(autorization1 == false){		
if(add_menu1 == true){	
document.getElementById("Query2").style.display = "inline-block";
document.getElementById("Query_Menu2").style.display = "inline-block";

if($("#btn_add1").find('i').hasClass("fa-plus-square") == true){
$("#btn_add1").find('i').toggleClass('fa-plus-square fa-minus-square');
$("#btn_add1").find('i').css('color','red');
}

lixeira1 = true;
add_menu1 = false;

}else
if(add_menu1 == false){
document.getElementById("Query1").style.display = "none";
document.getElementById("Query_Menu1").style.display = "none";

add_menu1 = true;
//autorization2 = true;

document.getElementById("chart_type1").disabled = false;
document.getElementById("chart_position1").disabled = false;
document.getElementById("Tecnologia_Texto_Teste1").innerHTML = "";
document.getElementById("Tecnologia_Seta_1").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste1").innerHTML = "";
document.getElementById("Elemento_Seta_1").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste1").innerHTML = "";
document.getElementById("KPI_Seta_1").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste1").innerHTML = "";
document.getElementById("Periodo_Seta_1").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste1").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste1").innerHTML = "";	
query1 = "";
nome1 = "";
}	
}
}


function add_line3(){
	
if(autorization2 == false){		
if(add_menu2 == true){	
document.getElementById("Query3").style.display = "inline-block";
document.getElementById("Query_Menu3").style.display = "inline-block";

if($("#btn_add2").find('i').hasClass("fa-plus-square") == true){
$("#btn_add2").find('i').toggleClass('fa-plus-square fa-minus-square');
$("#btn_add2").find('i').css('color','red');
}

lixeira2 = true;
add_menu2 = false;

}else
if(add_menu2 == false){
document.getElementById("Query2").style.display = "none";
document.getElementById("Query_Menu2").style.display = "none";

add_menu2 = true;
//autorization2 = true;

document.getElementById("chart_type2").disabled = false;
document.getElementById("chart_position2").disabled = false;
document.getElementById("Tecnologia_Texto_Teste2").innerHTML = "";
document.getElementById("Tecnologia_Seta_2").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste2").innerHTML = "";
document.getElementById("Elemento_Seta_2").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste2").innerHTML = "";
document.getElementById("KPI_Seta_2").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste2").innerHTML = "";
document.getElementById("Periodo_Seta_2").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste2").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste2").innerHTML = "";	
query2 = "";
nome2 = "";
}	
} else 
if(autorization2 == true){
document.getElementById("Query2").style.display = "none";
document.getElementById("Query_Menu2").style.display = "none";	

//autorization2 = true;
document.getElementById("chart_type2").disabled = false;
document.getElementById("chart_position2").disabled = false;
document.getElementById("Tecnologia_Texto_Teste2").innerHTML = "";
document.getElementById("Tecnologia_Seta_2").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste2").innerHTML = "";
document.getElementById("Elemento_Seta_2").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste2").innerHTML = "";
document.getElementById("KPI_Seta_2").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste2").innerHTML = "";
document.getElementById("Periodo_Seta_2").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste2").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste2").innerHTML = "";	
query2 = "";
nome2 = "";	
}	
}

function add_line4(){
		
if(autorization3 == false){
if(add_menu3 == true){	
document.getElementById("Query4").style.display = "inline-block";
document.getElementById("Query_Menu4").style.display = "inline-block";

if($("#btn_add3").find('i').hasClass("fa-plus-square") == true){
$("#btn_add3").find('i').toggleClass('fa-plus-square fa-minus-square');
$("#btn_add3").find('i').css('color','red');
}

lixeira3 = true;
add_menu3 = false;
}else
if(add_menu3 == false){
document.getElementById("Query3").style.display = "none";
document.getElementById("Query_Menu3").style.display = "none";
add_menu3 = true;

//autorization3 = true;
document.getElementById("chart_type3").disabled = false;
document.getElementById("chart_position3").disabled = false;
document.getElementById("Tecnologia_Texto_Teste3").innerHTML = "";
document.getElementById("Tecnologia_Seta_3").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste3").innerHTML = "";
document.getElementById("Elemento_Seta_3").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste3").innerHTML = "";
document.getElementById("KPI_Seta_3").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste3").innerHTML = "";
document.getElementById("Periodo_Seta_3").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste3").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste3").innerHTML = "";	
query3 = "";
nome3 = "";	
}		
} else 
if(autorization3 == true){
//autorization3 = true;	
document.getElementById("Query3").style.display = "none";
document.getElementById("Query_Menu3").style.display = "none";
document.getElementById("chart_type3").disabled = false;
document.getElementById("chart_position3").disabled = false;
document.getElementById("Tecnologia_Texto_Teste3").innerHTML = "";
document.getElementById("Tecnologia_Seta_3").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste3").innerHTML = "";
document.getElementById("Elemento_Seta_3").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste3").innerHTML = "";
document.getElementById("KPI_Seta_3").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste3").innerHTML = "";
document.getElementById("Periodo_Seta_3").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste3").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste3").innerHTML = "";	
query3 = "";
nome3 = "";	
}
}

function add_line5(){
		
if(autorization4 == false){
if(add_menu4 == true){	
 document.getElementById("Query5").style.display = "inline-block";
 document.getElementById("Query_Menu5").style.display = "inline-block";

if($("#btn_add4").find('i').hasClass("fa-plus-square") == true){
$("#btn_add4").find('i').toggleClass('fa-plus-square fa-minus-square');
$("#btn_add4").find('i').css('color','red');
}
 
lixeira4 = true;
add_menu4 = false;
}else
if(add_menu4 == false){
document.getElementById("Query4").style.display = "none";
document.getElementById("Query_Menu4").style.display = "none";
add_menu4 = true;

//autorization3 = true;
document.getElementById("chart_type4").disabled = false;
document.getElementById("chart_position4").disabled = false;
document.getElementById("Tecnologia_Texto_Teste4").innerHTML = "";
document.getElementById("Tecnologia_Seta_4").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste4").innerHTML = "";
document.getElementById("Elemento_Seta_4").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste4").innerHTML = "";
document.getElementById("KPI_Seta_4").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste4").innerHTML = "";
document.getElementById("Periodo_Seta_4").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste4").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste4").innerHTML = "";	
query4 = "";
nome4 = "";	
}		
} else 
if(autorization4 == true){
//autorization3 = true;	
document.getElementById("Query4").style.display = "none";
document.getElementById("Query_Menu4").style.display = "none";
document.getElementById("chart_type4").disabled = false;
document.getElementById("chart_position4").disabled = false;
document.getElementById("Tecnologia_Texto_Teste4").innerHTML = "";
document.getElementById("Tecnologia_Seta_4").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste4").innerHTML = "";
document.getElementById("Elemento_Seta_4").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste4").innerHTML = "";
document.getElementById("KPI_Seta_4").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste4").innerHTML = "";
document.getElementById("Periodo_Seta_4").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste4").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste4").innerHTML = "";	
query4 = "";
nome4 = "";	
}
}

function add_line6(){
		
if(autorization5 == false){
if(add_menu5 == true){	
 document.getElementById("Query6").style.display = "inline-block";
 document.getElementById("Query_Menu6").style.display = "inline-block";

if($("#btn_add5").find('i').hasClass("fa-plus-square") == true){
$("#btn_add5").find('i').toggleClass('fa-plus-square fa-minus-square');
$("#btn_add5").find('i').css('color','red');
}

lixeira5 = true;
add_menu5 = false;
}else
if(add_menu5 == false){
document.getElementById("Query5").style.display = "none";
document.getElementById("Query_Menu5").style.display = "none";
add_menu5 = true;

//autorization3 = true;
document.getElementById("chart_type5").disabled = false;
document.getElementById("chart_position5").disabled = false;
document.getElementById("Tecnologia_Texto_Teste5").innerHTML = "";
document.getElementById("Tecnologia_Seta_5").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste5").innerHTML = "";
document.getElementById("Elemento_Seta_5").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste5").innerHTML = "";
document.getElementById("KPI_Seta_5").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste5").innerHTML = "";
document.getElementById("Periodo_Seta_5").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste5").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste5").innerHTML = "";	
query5 = "";
nome5 = "";	
}		
} else 
if(autorization5 == true){
//autorization3 = true;	
document.getElementById("Query5").style.display = "none";
document.getElementById("Query_Menu5").style.display = "none";
document.getElementById("chart_type5").disabled = false;
document.getElementById("chart_position5").disabled = false;
document.getElementById("Tecnologia_Texto_Teste5").innerHTML = "";
document.getElementById("Tecnologia_Seta_5").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste5").innerHTML = "";
document.getElementById("Elemento_Seta_5").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste5").innerHTML = "";
document.getElementById("KPI_Seta_5").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste5").innerHTML = "";
document.getElementById("Periodo_Seta_5").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste5").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste5").innerHTML = "";	
query5 = "";
nome5 = "";	
}
}

function add_line7(){
		
if(autorization6 == false){
if(add_menu6 == true){	
if($("#btn_add6").find('i').hasClass("fa-plus-square") == true){
$("#btn_add6").find('i').toggleClass('fa-plus-square fa-minus-square');
$("#btn_add6").find('i').css('color','red');
}

lixeira6 = true;
add_menu6 = false;
}else
if(add_menu6 == false){
document.getElementById("Query6").style.display = "none";
document.getElementById("Query_Menu6").style.display = "none";
add_menu6 = true;

//autorization3 = true;
document.getElementById("chart_type6").disabled = false;
document.getElementById("chart_position6").disabled = false;
document.getElementById("Tecnologia_Texto_Teste6").innerHTML = "";
document.getElementById("Tecnologia_Seta_6").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste6").innerHTML = "";
document.getElementById("Elemento_Seta_6").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste6").innerHTML = "";
document.getElementById("KPI_Seta_6").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste6").innerHTML = "";
document.getElementById("Periodo_Seta_6").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste6").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste6").innerHTML = "";	
query6 = "";
nome6 = "";	
}		
} else 
if(autorization6 == true){
//autorization3 = true;	
document.getElementById("Query6").style.display = "none";
document.getElementById("Query_Menu6").style.display = "none";
document.getElementById("chart_type6").disabled = false;
document.getElementById("chart_position6").disabled = false;
document.getElementById("Tecnologia_Texto_Teste6").innerHTML = "";
document.getElementById("Tecnologia_Seta_6").style.visibility = "hidden";
document.getElementById("Elemento_Texto_Teste6").innerHTML = "";
document.getElementById("Elemento_Seta_6").style.visibility = "hidden";
document.getElementById("KPI_Texto_Teste6").innerHTML = "";
document.getElementById("KPI_Seta_6").style.visibility = "hidden";
document.getElementById("Periodo_Texto_Teste6").innerHTML = "";
document.getElementById("Periodo_Seta_6").style.visibility = "hidden";
document.getElementById("Date_Inicial_Texto_Teste6").innerHTML = "";
document.getElementById("Date_Final_Texto_Teste6").innerHTML = "";	
query6 = "";
nome6 = "";	
}
}

function mostrar_charts1(){
	
if(tecnologia == ""){   
	alert("Please select the Technology");
} else
if(elemento == ""){
	alert("Please select a Element");
} else
if(kpi == ""){
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
if(auth_change == true){	
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial1 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial1+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}	else if(periodo == "daily"){	
data_inicial1 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == true){
query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial1+"' and '"+data_final
+"' order by "+tempo+"";
}else if((estado == false) && (contador == "GSM")){
if(familia == "cell"){	
query = "SELECT date,"+counter_name+" as node FROM gsm_counter.fss_"+table_name+"_daily WHERE BSC = '"+bsc+"' AND CELLID = '"+cellid+"' AND DATE BETWEEN '"+data_inicial1+"' AND '"+data_final+"'";	
} else if(familia == "bsc"){
query = "SELECT date,"+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily WHERE BSC = '"+elemento+"' AND DATE BETWEEN '"+data_inicial1+"' AND '"+data_final+"' GROUP BY BSC,DATE ORDER BY DATE";	
}	
} else if((estado == false) && (contador == "UMTS")){
if(familia == "cell"){	
query = "SELECT  date, "+counter_name+" as node FROM umts_counter.fss_"+table_name+"_daily WHERE RNC = '"+rnc+"' AND CELLID = '"+cellid+"' AND DATE BETWEEN '"+data_inicial1+"' AND '"+data_final+"'";	
} else if(familia == "rnc"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") AS NODE FROM umts_counter.fss_"+table_name+"_daily WHERE RNC = '"+elemento+"' AND DATE BETWEEN '"+data_inicial1+"' AND '"+data_final+"' GROUP BY RNC,DATE ORDER BY DATE";	
}	
} else if((estado == false) && (contador == "LTE")){
if(familia == "cell"){	
query = "SELECT  date, "+counter_name+" as node FROM lte_counter.fss_"+table_name+"_daily WHERE enodeb = '"+elemento+"' AND locellid = '"+cellid+"' AND DATE BETWEEN '"+data_inicial1+"' AND '"+data_final+"'";	
} else if(familia == "eNodeB"){
query = "SELECT date, "+counter_aggregation+"("+counter_name+") AS node FROM lte_counter.fss_"+table_name+"_daily WHERE enodeb = '"+elemento+"' AND DATE BETWEEN '"+data_inicial1+"' AND '"+data_final+"'GROUP BY ENODEB,DATE ORDER BY DATE";
}	
}
}
else if(periodo == "weekly"){
data_inicial1 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial1;
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
//document.getElementById("Teste_MonthNumber").innerHTML = m.toDate().getUTCMonth() + 1;
data_inicial1 = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial1+"' and '"+data_final
+"' order by "+tempo+"";
} else if(periodo == "monthly"){
data_inicial1 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial1;
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial1 = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial1+"' and '"+data_final
+"' order by "+tempo+"";	
}

query_num = 2;
nome1 = elemento+" "+kpi;
query1 = query;

document.getElementById("Texto_Teste1").innerHTML = query1;

autorization1 = false;
add_menu1 = true;

document.getElementById("btn_confirm1").style.visibility = "hidden";
// document.getElementById("btn_delete1").style.visibility = "visible";
if(lixeira1 == false){
document.getElementById("btn_confirm2").style.visibility = "visible";
}
document.getElementById("Query_Menu1").style.opacity = 0.3;
$("#radio_query2").prop("checked", true);
document.getElementById("chart_type1").disabled = true;
document.getElementById("chart_position1").disabled = true;	
}
document.getElementById("btn_confirm1").style.visibility = "hidden";
document.getElementById("Query_Menu1").style.opacity = 0.3;
}	
}

function mostrar_charts2(){

if(auth_change == true){	
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial2 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial2+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}	else if(periodo == "daily"){	
data_inicial2 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == true){
query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial2+"' and '"+data_final
+"' order by "+tempo+"";
}else if((estado == false) && (contador == "GSM")){
if(familia == "cell"){	
query = "SELECT date,"+counter_name+" as node FROM gsm_counter.fss_"+table_name+"_daily WHERE BSC = '"+bsc+"' AND CELLID = '"+cellid+"' AND DATE BETWEEN '"+data_inicial2+"' AND '"+data_final+"'";	
} else if(familia == "bsc"){
query = "SELECT date,"+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily WHERE BSC = '"+elemento+"' AND DATE BETWEEN '"+data_inicial2+"' AND '"+data_final+"' GROUP BY BSC,DATE ORDER BY DATE";	
}	
} else if((estado == false) && (contador == "UMTS")){
if(familia == "cell"){	
query = "SELECT  date, "+counter_name+" as node FROM umts_counter.fss_"+table_name+"_daily WHERE RNC = '"+rnc+"' AND CELLID = '"+cellid+"' AND DATE BETWEEN '"+data_inicial2+"' AND '"+data_final+"'";	
} else if(familia == "rnc"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") AS NODE FROM umts_counter.fss_"+table_name+"_daily WHERE RNC = '"+elemento+"' AND DATE BETWEEN '"+data_inicial2+"' AND '"+data_final+"' GROUP BY RNC,DATE ORDER BY DATE";	
}	
} else if((estado == false) && (contador == "LTE")){
if(familia == "cell"){	
query = "SELECT  date, "+counter_name+" as node FROM lte_counter.fss_"+table_name+"_daily WHERE enodeb = '"+elemento+"' AND locellid = '"+cellid+"' AND DATE BETWEEN '"+data_inicial2+"' AND '"+data_final+"'";	
} else if(familia == "eNodeB"){
query = "SELECT date, "+counter_aggregation+"("+counter_name+") AS node FROM lte_counter.fss_"+table_name+"_daily WHERE enodeb = '"+elemento+"' AND DATE BETWEEN '"+data_inicial2+"' AND '"+data_final+"'GROUP BY ENODEB,DATE ORDER BY DATE";
}	
}
}
else if(periodo == "weekly"){
data_inicial2 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial2;
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial2 = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial2+"' and '"+data_final
+"' order by "+tempo+"";
}else if(periodo == "monthly"){
data_inicial2 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial2;
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial2 = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial2+"' and '"+data_final
+"' order by "+tempo+"";	
}



nome2 = elemento+" "+kpi; 
query2 = query;	
document.getElementById("Texto_Teste2").innerHTML = query2;

autorization2 = false;
add_menu2 = true;

document.getElementById("btn_confirm2").style.visibility = "hidden";
// document.getElementById("btn_delete2").style.visibility = "visible";
if(lixeira2 == false){
document.getElementById("btn_confirm3").style.visibility = "visible";
}
document.getElementById("Query_Menu2").style.opacity = 0.3;
if(add_menu2 == true){
$("#btn_add2").find('i').toggleClass('fa-minus-square fa-plus-square');
$("#btn_add2").find('i').css('color','#058DC7');
//add_menu2 = false;
}
$("#radio_query3").prop("checked", true);

document.getElementById("Query_Menu3").style.display = "inline-block";
document.getElementById("chart_type2").disabled = true;
document.getElementById("chart_position2").disabled = true;
query_num = 3;
}
document.getElementById("btn_confirm2").style.visibility = "hidden";
document.getElementById("Query_Menu2").style.opacity = 0.3;
}			


function mostrar_charts3(){
	
query_num = 4;

if(auth_change == true){
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial3 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial3+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}	else if(periodo == "daily"){	
data_inicial3 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == true){
query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial3+"' and '"+data_final
+"' order by "+tempo+"";
}else if((estado == false) && (contador == "GSM")){
if(familia == "cell"){	
query = "SELECT date,"+counter_name+" as node FROM gsm_counter.fss_"+table_name+"_daily WHERE BSC = '"+bsc+"' AND CELLID = '"+cellid+"' AND DATE BETWEEN '"+data_inicial3+"' AND '"+data_final+"'";	
} else if(familia == "bsc"){
query = "SELECT date,"+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily WHERE BSC = '"+elemento+"' AND DATE BETWEEN '"+data_inicial3+"' AND '"+data_final+"' GROUP BY BSC,DATE ORDER BY DATE";	
}	
} else if((estado == false) && (contador == "UMTS")){
if(familia == "cell"){	
query = "SELECT  date, "+counter_name+" as node FROM umts_counter.fss_"+table_name+"_daily WHERE RNC = '"+rnc+"' AND CELLID = '"+cellid+"' AND DATE BETWEEN '"+data_inicial3+"' AND '"+data_final+"'";	
} else if(familia == "rnc"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") AS NODE FROM umts_counter.fss_"+table_name+"_daily WHERE RNC = '"+elemento+"' AND DATE BETWEEN '"+data_inicial3+"' AND '"+data_final+"' GROUP BY RNC,DATE ORDER BY DATE";	
}	
} else if((estado == false) && (contador == "LTE")){
if(familia == "cell"){	
query = "SELECT  date, "+counter_name+" as node FROM lte_counter.fss_"+table_name+"_daily WHERE enodeb = '"+elemento+"' AND locellid = '"+cellid+"' AND DATE BETWEEN '"+data_inicial3+"' AND '"+data_final+"'";	
} else if(familia == "eNodeB"){
query = "SELECT date, "+counter_aggregation+"("+counter_name+") AS node FROM lte_counter.fss_"+table_name+"_daily WHERE enodeb = '"+elemento+"' AND DATE BETWEEN '"+data_inicial3+"' AND '"+data_final+"'GROUP BY ENODEB,DATE ORDER BY DATE";
}	
}
}
else if(periodo == "weekly"){
data_inicial3 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial3;
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial3 = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial3+"' and '"+data_final
+"' order by "+tempo+"";
}else if(periodo == "monthly"){
data_inicial3 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial3;
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial3 = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial3+"' and '"+data_final
+"' order by "+tempo+"";	
}

nome3 = elemento+" "+kpi; 
query3 = query;
document.getElementById("Texto_Teste3").innerHTML = query3;

autorization3 = false;
add_menu3 = true;

document.getElementById("btn_confirm3").style.visibility = "hidden";
// document.getElementById("btn_delete3").style.visibility = "visible";
if(lixeira3 == false){
document.getElementById("btn_confirm4").style.visibility = "visible";
}
document.getElementById("Query_Menu3").style.opacity = 0.3;
if(add_menu3 == true){
$("#btn_add3").find('i').toggleClass('fa-minus-square fa-plus-square');
$("#btn_add3").find('i').css('color','#058DC7');
}
$("#radio_query4").prop("checked", true);

document.getElementById("Query_Menu4").style.display = "inline-block";
document.getElementById("chart_type3").disabled = true;
document.getElementById("chart_position3").disabled = true;
}
document.getElementById("btn_confirm3").style.visibility = "hidden";
document.getElementById("Query_Menu3").style.opacity = 0.3;
}			


function mostrar_charts4(){
	
query_num = 5;

if(auth_change == true){
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial4 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial4+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}	else if(periodo == "daily"){	
data_inicial4 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == true){
query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial1+"' and '"+data_final
+"' order by "+tempo+"";
}else if((estado == false) && (contador == "GSM")){
if(familia == "cell"){	
query = "SELECT date,"+counter_name+" as node FROM gsm_counter.fss_"+table_name+"_daily WHERE BSC = '"+bsc+"' AND CELLID = '"+cellid+"' AND DATE BETWEEN '"+data_inicial4+"' AND '"+data_final+"'";	
} else if(familia == "bsc"){
query = "SELECT date,"+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily WHERE BSC = '"+elemento+"' AND DATE BETWEEN '"+data_inicial4+"' AND '"+data_final+"' GROUP BY BSC,DATE ORDER BY DATE";	
}	
} else if((estado == false) && (contador == "UMTS")){
if(familia == "cell"){	
query = "SELECT  date, "+counter_name+" as node FROM umts_counter.fss_"+table_name+"_daily WHERE RNC = '"+rnc+"' AND CELLID = '"+cellid+"' AND DATE BETWEEN '"+data_inicial4+"' AND '"+data_final+"'";	
} else if(familia == "rnc"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") AS NODE FROM umts_counter.fss_"+table_name+"_daily WHERE RNC = '"+elemento+"' AND DATE BETWEEN '"+data_inicial4+"' AND '"+data_final+"' GROUP BY RNC,DATE ORDER BY DATE";	
}	
} else if((estado == false) && (contador == "LTE")){
if(familia == "cell"){	
query = "SELECT  date, "+counter_name+" as node FROM lte_counter.fss_"+table_name+"_daily WHERE enodeb = '"+elemento+"' AND locellid = '"+cellid+"' AND DATE BETWEEN '"+data_inicial4+"' AND '"+data_final+"'";	
} else if(familia == "eNodeB"){
query = "SELECT date, "+counter_aggregation+"("+counter_name+") AS node FROM lte_counter.fss_"+table_name+"_daily WHERE enodeb = '"+elemento+"' AND DATE BETWEEN '"+data_inicial4+"' AND '"+data_final+"'GROUP BY ENODEB,DATE ORDER BY DATE";
}	
}
}
else if(periodo == "weekly"){
data_inicial4 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial4;
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial4 = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial4+"' and '"+data_final
+"' order by "+tempo+"";
}else if(periodo == "monthly"){
data_inicial4 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial4;
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial4 = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial4+"' and '"+data_final
+"' order by "+tempo+"";	
}

nome4 = elemento+" "+kpi; 
query4 = query;
document.getElementById("Texto_Teste4").innerHTML = query4;

autorization4 = false;
add_menu4 = true;

document.getElementById("btn_confirm4").style.visibility = "hidden";
// document.getElementById("btn_delete3").style.visibility = "visible";
if(lixeira4 == false){
document.getElementById("btn_confirm5").style.visibility = "visible";
}
document.getElementById("Query_Menu4").style.opacity = 0.3;
if(add_menu4 == true){
$("#btn_add4").find('i').toggleClass('fa-minus-square fa-plus-square');
$("#btn_add4").find('i').css('color','#058DC7');
}
$("#radio_query5").prop("checked", true);

document.getElementById("Query_Menu5").style.display = "inline-block";
document.getElementById("chart_type4").disabled = true;
document.getElementById("chart_position4").disabled = true;
}
document.getElementById("btn_confirm4").style.visibility = "hidden";
document.getElementById("Query_Menu4").style.opacity = 0.3;
}

function mostrar_charts5(){
	
query_num = 6;

if(auth_change == true){
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial5 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial5+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}	else if(periodo == "daily"){	
data_inicial5 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == true){
query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial5+"' and '"+data_final
+"' order by "+tempo+"";
}else if((estado == false) && (contador == "GSM")){
if(familia == "cell"){	
query = "SELECT date,"+counter_name+" as node FROM gsm_counter.fss_"+table_name+"_daily WHERE BSC = '"+bsc+"' AND CELLID = '"+cellid+"' AND DATE BETWEEN '"+data_inicial5+"' AND '"+data_final+"'";	
} else if(familia == "bsc"){
query = "SELECT date,"+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily WHERE BSC = '"+elemento+"' AND DATE BETWEEN '"+data_inicial5+"' AND '"+data_final+"' GROUP BY BSC,DATE ORDER BY DATE";	
}	
} else if((estado == false) && (contador == "UMTS")){
if(familia == "cell"){	
query = "SELECT  date, "+counter_name+" as node FROM umts_counter.fss_"+table_name+"_daily WHERE RNC = '"+rnc+"' AND CELLID = '"+cellid+"' AND DATE BETWEEN '"+data_inicial5+"' AND '"+data_final+"'";	
} else if(familia == "rnc"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") AS NODE FROM umts_counter.fss_"+table_name+"_daily WHERE RNC = '"+elemento+"' AND DATE BETWEEN '"+data_inicial5+"' AND '"+data_final+"' GROUP BY RNC,DATE ORDER BY DATE";	
}	
} else if((estado == false) && (contador == "LTE")){
if(familia == "cell"){	
query = "SELECT  date, "+counter_name+" as node FROM lte_counter.fss_"+table_name+"_daily WHERE enodeb = '"+elemento+"' AND locellid = '"+cellid+"' AND DATE BETWEEN '"+data_inicial5+"' AND '"+data_final+"'";	
} else if(familia == "eNodeB"){
query = "SELECT date, "+counter_aggregation+"("+counter_name+") AS node FROM lte_counter.fss_"+table_name+"_daily WHERE enodeb = '"+elemento+"' AND DATE BETWEEN '"+data_inicial5+"' AND '"+data_final+"'GROUP BY ENODEB,DATE ORDER BY DATE";
}	
}
}
else if(periodo == "weekly"){
data_inicial5 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial5;
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial5 = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial5+"' and '"+data_final
+"' order by "+tempo+"";
}else if(periodo == "monthly"){
data_inicial5 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial5;
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial5 = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial5+"' and '"+data_final
+"' order by "+tempo+"";	
}

nome5 = elemento+" "+kpi; 
query5 = query;
document.getElementById("Texto_Teste5").innerHTML = query5;

autorization5 = false;
add_menu5 = true;

document.getElementById("btn_confirm5").style.visibility = "hidden";
// document.getElementById("btn_delete3").style.visibility = "visible";
if(lixeira5 == false){
document.getElementById("btn_confirm6").style.visibility = "visible";
}
document.getElementById("Query_Menu5").style.opacity = 0.3;
if(add_menu5 == true){
$("#btn_add5").find('i').toggleClass('fa-minus-square fa-plus-square');
$("#btn_add5").find('i').css('color','#058DC7');
}
$("#radio_query6").prop("checked", true);

document.getElementById("Query_Menu6").style.display = "inline-block";
document.getElementById("chart_type5").disabled = true;
document.getElementById("chart_position5").disabled = true;
}
document.getElementById("btn_confirm5").style.visibility = "hidden";
document.getElementById("Query_Menu5").style.opacity = 0.3;
}

function mostrar_charts6(){
	
query_num = 7;

if(auth_change == true){
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial6 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial6+"' and '"+data_final
+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}	else if(periodo == "daily"){	
data_inicial6 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == true){
query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial6+"' and '"+data_final
+"' order by "+tempo+"";
}else if((estado == false) && (contador == "GSM")){
if(familia == "cell"){	
query = "SELECT date,"+counter_name+" as node FROM gsm_counter.fss_"+table_name+"_daily WHERE BSC = '"+bsc+"' AND CELLID = '"+cellid+"' AND DATE BETWEEN '"+data_inicial6+"' AND '"+data_final+"'";	
} else if(familia == "bsc"){
query = "SELECT date,"+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily WHERE BSC = '"+elemento+"' AND DATE BETWEEN '"+data_inicial6+"' AND '"+data_final+"' GROUP BY BSC,DATE ORDER BY DATE";	
}	
} else if((estado == false) && (contador == "UMTS")){
if(familia == "cell"){	
query = "SELECT  date, "+counter_name+" as node FROM umts_counter.fss_"+table_name+"_daily WHERE RNC = '"+rnc+"' AND CELLID = '"+cellid+"' AND DATE BETWEEN '"+data_inicial6+"' AND '"+data_final+"'";	
} else if(familia == "rnc"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") AS NODE FROM umts_counter.fss_"+table_name+"_daily WHERE RNC = '"+elemento+"' AND DATE BETWEEN '"+data_inicial6+"' AND '"+data_final+"' GROUP BY RNC,DATE ORDER BY DATE";	
}	
} else if((estado == false) && (contador == "LTE")){
if(familia == "cell"){	
query = "SELECT  date, "+counter_name+" as node FROM lte_counter.fss_"+table_name+"_daily WHERE enodeb = '"+elemento+"' AND locellid = '"+cellid+"' AND DATE BETWEEN '"+data_inicial6+"' AND '"+data_final+"'";	
} else if(familia == "eNodeB"){
query = "SELECT date, "+counter_aggregation+"("+counter_name+") AS node FROM lte_counter.fss_"+table_name+"_daily WHERE enodeb = '"+elemento+"' AND DATE BETWEEN '"+data_inicial6+"' AND '"+data_final+"'GROUP BY ENODEB,DATE ORDER BY DATE";
}	
}
}
else if(periodo == "weekly"){
data_inicial6 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial6;
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial6 = m.toDate().getWeekNumber();
data_final = n.toDate().getWeekNumber();

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial6+"' and '"+data_final
+"' order by "+tempo+"";
}else if(periodo == "monthly"){
data_inicial6 = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial6;
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
data_inicial6 = m.toDate().getUTCMonth() + 1;
data_final = n.toDate().getUTCMonth() + 1;

query = "SELECT "+tempo+", "+kpi+" as node FROM " +tecnologia +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento +"' and "+tempo+" between '"+data_inicial6+"' and '"+data_final
+"' order by "+tempo+"";	
}

nome6 = elemento+" "+kpi; 
query6 = query;
document.getElementById("Texto_Teste6").innerHTML = query6;

autorization6 = false;
add_menu6 = true;

document.getElementById("btn_confirm6").style.visibility = "hidden";
// document.getElementById("btn_delete3").style.visibility = "visible";
if(lixeira6 == false){
// document.getElementById("btn_confirm7").style.visibility = "visible";
}
document.getElementById("Query_Menu6").style.opacity = 0.3;
// if(add_menu6 == true){
// $("#btn_add6").find('i').toggleClass('fa-minus-square fa-plus-square');
// $("#btn_add6").find('i').css('color','#058DC7');
// }
// $("#radio_query6").prop("checked", true);

// document.getElementById("Query_Menu6").style.display = "inline-block";
document.getElementById("chart_type6").disabled = true;
document.getElementById("chart_position6").disabled = true;
}
document.getElementById("Query_Menu6").style.opacity = 0.3;
}			


function mostrar_GSM(){

tecnologia = "gsm";

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
	
tecnologia = "umts";
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
	
tecnologia = "lte";
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
	
hourly_selected = true;	
periodo = "hourly";	
tempo = "date";

document.getElementById("Div_Hora").style.display = "block";

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
//document.getElementById("Texto_Teste").innerHTML = query;	
document.getElementById("Time").innerHTML = "Hourly";	
}

function mostrar_Daily(){

//var r = confirm("This period will be the same for all the following query's. Are you sure about it ?");
hourly_selected = false; 
periodo = "daily";
tempo = "date";

document.getElementById("Div_Hora").style.display = "none";

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
//document.getElementById("Texto_Teste").innerHTML = query;	
document.getElementById("Time").innerHTML = "Daily";

auth_change = true;

}

function mostrar_Weekly(){

hourly_selected = false; 	
periodo = "weekly";
tempo = "week";

document.getElementById("Div_Hora").style.display = "none";
document.getElementById("Texto_Hora_Inicial").textContent = "Initial Week";
document.getElementById("Texto_Hora_Inicial").style.fontWeight =  "bold";
document.getElementById("Texto_Hora_Final").textContent = "Final Week";
document.getElementById("Texto_Hora_Final").style.fontWeight =  "bold";

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

auth_change = true;
}

function mostrar_Monthly(){

hourly_selected = false; 
periodo = "monthly";
tempo = "month";

document.getElementById("Div_Hora").style.display = "none";
document.getElementById("Texto_Hora_Inicial").textContent = "Initial Month";
document.getElementById("Texto_Hora_Inicial").style.fontWeight =  "bold";
document.getElementById("Texto_Hora_Final").textContent = "Final Month";
document.getElementById("Texto_Hora_Final").style.fontWeight =  "bold";

document.getElementById("Div_Hora").style.display = "none";

document.getElementById("Time").innerHTML = "Monthly";

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
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput_KPI_GSM");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL_KPI_GSM");
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

function myFunction_KPI_LTE() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput_KPI_LTE");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL_KPI_LTE");
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

function myFunction_KPI_UMTS() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput_KPI_UMTS");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL_KPI_UMTS");
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

function showUser() {
		
		if(autorizacao == true){
		if(query1 == ""){
		alert("Your first query can't be null !");	
		} else {
		document.getElementById("Resumo").style.display = "none";
		document.getElementById("Resumo2").style.display = "none";
		document.getElementById("MENU").style.display = "none";
		// document.getElementById("Technology_Menu").style.display = "none";
		document.getElementById("Show_Menu_Query").style.display = "inline-block";
		document.getElementById("Mostrar_Menu_Query").style.display = "inline-block";
		document.getElementById("Esconder_Menu_Query").style.display = "none";
		document.getElementById("Abort_Query").style.display = "inline-block";
		VisibilidadeMenu = false;	
			
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
				if(hourly_selected == true){
				eval(document.getElementById("runscript_hourly").innerHTML);
				}else if(periodo == "daily"){
				eval(document.getElementById("runscript").innerHTML);
				}else if(periodo == "weekly"){
				eval(document.getElementById("runscript_week").innerHTML);	
				}else if(periodo == "monthly"){
				eval(document.getElementById("runscript_month").innerHTML);	
				}
            }
			 if (xmlhttp.status >= 500){ //SE DER ERRO !
			document.getElementById("loading").style.display = "none";	 
			alert('It was not possible to perform the selected Query. Please confirm if the Elements or KPIs/Counters belongs to the Technology.');
			}
			
			
        };
        xmlhttp.open("GET","/npsmart/umts/action_plano/?q1="+query1+"&q2="+query2+"&q3="+query3+"&q4="+query4+"&q5="+query5+"&q6="+query6+"&f1="+nome1+"&f2="+nome2+"&f3="+nome3+"&f4="+nome4+"&f5="+nome5+"&f6="+nome6+"&d1="+data_inicial1+"&d2="+data_inicial2+"&d3="+data_inicial3+"&d4="+data_inicial4+"&d5="+data_inicial5+"&d6="+data_inicial6+"&t1="+tipo_chart1+"&t2="+tipo_chart2+"&t3="+tipo_chart3+"&t4="+tipo_chart4+"&t5="+tipo_chart5+"&t6="+tipo_chart6+"&c1="+tipo_chart_position1+"&c2="+tipo_chart_position2+"&c3="+tipo_chart_position3+"&c4="+tipo_chart_position4+"&c5="+tipo_chart_position5+"&c6="+tipo_chart_position6,true);
        xmlhttp.send();
		
    } 
		} else {
		alert("You have to perform at least one query to create the chart");
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
        xmlhttp.open("GET","/npsmart/umts/showCelulas/?q1="+query_cells+"&e="+elemento,true);
        xmlhttp.send();
		
    } 
	
</script>

</body>
</html>
