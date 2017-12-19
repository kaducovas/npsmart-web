<!DOCTYPE html>
<html>
<head>
<style>

.alert {
	position: absolute;
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
	z-index: 10;
	display:none;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

#closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

#closebtn:hover {
    color: black;
}

.switch {
  position: absolute;
  display: inline-block;
  width: 60px;
  height: 34px;
  margin-top: 5px;
  margin-left: 150px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


.KPI_Umts, .Counter_Umts,.KPI_Gsm, .Counter_Gsm,.KPI_Lte, .Counter_Lte, .NQI_Lte, .NQI_Umts{

display:none;
	
}	

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

<div style = "border-bottom: 2px solid black;"><span style="position:absolute;display: inline-block;font-size: 25px;margin-left: 10px; margin-top: 5px"><b>Change All</b></span><label class="switch"><input id="slider_menu" type="checkbox"><span class="slider round"></span></label><div style="font-size: 25px; text-align:center"><b>MENU</b><div style="float:right; display:inline-block; margin-right:10px"><button id="btn_add1" onclick="add_line()" class="w3-btn w3-xlarge w3-text-blue"><i class="fa fa-plus-square"></i></button></div></p></div></div>
<div id= "Query1" style = "border-bottom: 2px solid black; width: 100%; display:inline-block"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query1" checked="checked"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu1" style="display:inline-block"><span id="Tecnologia_Texto_Teste1"></span><i id="Tecnologia_Seta_1" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste1"></span><i id="Elemento_Seta_1" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste1"></span><i id="KPI_Seta_1" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste1"></span><i id="Periodo_Seta_1" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste1"></span><span id="Date_Final_Texto_Teste1"></span><span id="Hora_Inicial_Texto_Teste1"></span><span id="Hora_Final_Texto_Teste1"></span><button id="chart_type1" class="w3-btn w3-white w3-xlarge"><i class="fa fa-line-chart w3-text-blue w3-xxlarge"></i></button><button id="chart_position1" class="w3-btn w3-white w3-xlarge"><i class="fa fa-long-arrow-right w3-text-blue w3-xxlarge"></i></button><button id="btn_confirm1" onclick="mostrar_charts1()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete1" onclick="delete_menu1()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><button id="btn_add2" onclick="remove_line1()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div id= "Query2" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query2"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu2" style="display:none"><span id="Tecnologia_Texto_Teste2"></span><i id="Tecnologia_Seta_2" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste2"></span><i id="Elemento_Seta_2" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste2"></span><i id="KPI_Seta_2" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste2"></span><i id="Periodo_Seta_2" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste2"></span><span id="Date_Final_Texto_Teste2"></span><span id="Hora_Inicial_Texto_Teste2"></span><span id="Hora_Final_Texto_Teste2"></span><button id="chart_type2" class="w3-btn w3-white w3-xlarge"><i class="fa fa-line-chart w3-text-green w3-xxlarge"></i></button><button id="chart_position2" class="w3-btn w3-white w3-xlarge"><i class="fa fa-long-arrow-right w3-text-green w3-xxlarge"></i></button><button id="btn_confirm2" onclick="mostrar_charts2()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete2" onclick="delete_menu2()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><button id="btn_add2" onclick="remove_line2()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div id= "Query3" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query3"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu3" style="display:none"><span id="Tecnologia_Texto_Teste3"></span><i id="Tecnologia_Seta_3" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste3"></span><i id="Elemento_Seta_3" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste3"></span><i id="KPI_Seta_3" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste3"></span><i id="Periodo_Seta_3" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste3"></span><span id="Date_Final_Texto_Teste3"></span><span id="Hora_Inicial_Texto_Teste3"></span><span id="Hora_Final_Texto_Teste3"></span><button id="chart_type3" class="w3-btn w3-white w3-xlarge"><i class="fa fa-line-chart w3-text-orange w3-xxlarge"></i></button><button id="chart_position3" class="w3-btn w3-white w3-xlarge"><i class="fa fa-long-arrow-right w3-text-orange w3-xxlarge"></i></button><button id="btn_confirm3" onclick="mostrar_charts3()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete3" onclick="delete_menu3()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><button id="btn_add3" onclick="remove_line3()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div id= "Query4" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query4"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu4" style="display:none"><span id="Tecnologia_Texto_Teste4"></span><i id="Tecnologia_Seta_4" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste4"></span><i id="Elemento_Seta_4" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste4"></span><i id="KPI_Seta_4" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste4"></span><i id="Periodo_Seta_4" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste4"></span><span id="Date_Final_Texto_Teste4"></span><span id="Hora_Inicial_Texto_Teste4"></span><span id="Hora_Final_Texto_Teste4"></span><button id="chart_type4" class="w3-btn w3-white w3-xlarge"><i class="fa fa-line-chart w3-text-yellow w3-xxlarge"></i></button><button id="chart_position4" class="w3-btn w3-white w3-xlarge"><i class="fa fa-long-arrow-right w3-text-yellow w3-xxlarge"></i></button><button id="btn_confirm4" onclick="mostrar_charts4()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete4" onclick="delete_menu4()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><button id="btn_add4" onclick="remove_line4()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div id= "Query5" style = "border-bottom: 2px solid black; width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query5"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu5" style="display:none"><span id="Tecnologia_Texto_Teste5"></span><i id="Tecnologia_Seta_5" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste5"></span><i id="Elemento_Seta_5" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste5"></span><i id="KPI_Seta_5" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste5"></span><i id="Periodo_Seta_5" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste5"></span><span id="Date_Final_Texto_Teste5"></span><span id="Hora_Inicial_Texto_Teste5"></span><span id="Hora_Final_Texto_Teste5"></span><button id="chart_type5" class="w3-btn w3-white w3-xlarge"><i class="fa fa-line-chart w3-xxlarge" style="color: #24CBE5" ></i></button><button id="chart_position5" class="w3-btn w3-white w3-xlarge"><i class="fa fa-long-arrow-right w3-xxlarge" style="color: #24CBE5"></i></button><button id="btn_confirm5" onclick="mostrar_charts5()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete5" onclick="delete_menu5()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><button id="btn_add5" onclick="remove_line5()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
<div id= "Query6" style = "width: 100%; display:none"><div style= "margin:10px;"><input class ="radiozinho" type="radio" name="radio_menu" id="radio_query6"><span style="margin-left: 10px"><b></b></span><div id="Query_Menu6" style="display:none"><span id="Tecnologia_Texto_Teste6"></span><i id="Tecnologia_Seta_6" class="fa fa-arrow-right"></i><span id="Elemento_Texto_Teste6"></span><i id="Elemento_Seta_6" class="fa fa-arrow-right"></i><span id="KPI_Texto_Teste6"></span><i id="KPI_Seta_6" class="fa fa-arrow-right"></i><span id="Periodo_Texto_Teste6"></span><i id="Periodo_Seta_6" class="fa fa-arrow-right"></i><span id="Date_Inicial_Texto_Teste6"></span><span id="Date_Final_Texto_Teste6"></span><span id="Hora_Inicial_Texto_Teste6"></span><span id="Hora_Final_Texto_Teste6"></span><button id="chart_type6" class="w3-btn w3-white w3-xlarge"><i class="fa fa-line-chart w3-xxlarge" style="color: #64E572"></i></button><button id="chart_position6" class="w3-btn w3-white w3-xlarge"><i class="fa fa-long-arrow-right w3-xxlarge" style="color: #64E572" ></i></button><button id="btn_confirm6" onclick="mostrar_charts6()" class="w3-btn w3-xlarge w3-text-green"><i class="fa fa-check"></i></button><button id="btn_delete6" onclick="delete_menu6()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-trash"></i></button></div><div style="float:right; display:inline-block"><button id="btn_add6" onclick="remove_line6()" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-minus-square"></i></button></div></div></div>
</div>


<div id="MENU" style="background-color:white; height:500px; margin:10px 10px 10px 10px">

<div  style="display:inline-block; width:45%; height:500px; position: relative; top:-47.5px; margin-left:10px; margin-top:5px">
<p style="font-size:30px; font-family:Cornerstone; color:red; border: 1px solid black; text-align:center;background-color: #f6f6f6;"><b>PARAMETERS</b></p>

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
<p><button style="border-radius:15px" class="w3-btn w3-orange w3-xlarge" onclick="showUser()">Create<i class="w3-margin-left fa fa-line-chart"></i></button></p>
</div>

</div>

</div>

</div>
</div>

<div id="Div_Elementos" style="display:inline-block; width:25%; margin-left:10px; margin-top:5px">
<p style="font-size:30px; font-family:Cornerstone; color:red; border: 1px solid black; text-align:center;background-color: #f6f6f6;"><b>ELEMENTS</b></p>

<!--<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Elements" title="Type in a name" style="width:100%">-->

<div id="Div_Elementos_UMTS" style="display:block">
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

<div id="Div_Elementos_LTE" style="display:none">
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
<p style="font-size:30px; font-family:Cornerstone; color:red; border: 1px solid black; text-align:center;background-color: #f6f6f6;"><b>KPIs / Counters / NQIs</b></p>

<!--<input type="search" id="myInput_KPI" onkeyup="myFunction_KPI()" placeholder="Search for KPI's" title="Type in a name" style="width:100%" ng-model="querytext" ng-minlength="2">-->

<div id="Div_LTE" style="display:none">
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
echo '<li onclick="printclick_counter_LTE(this)" class="Counter_Lte" id="'.$row->counter_aggregation.'" value="'.$row->functionsubset_id.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node. '</span></a></li>';
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

<div id="Div_UMTS" style="display:block">
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
echo '<li onclick="printclick_counter_UMTS(this)" class="Counter_Umts" id="'.$row->counter_aggregation.'" value="'.$row->functionsubset_id.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node. '</span><span style="display:none">'.$row->counter_description.'</span><span style="float:right"><button style = "margin-top: -12px" class="w3-btn w3-xlarge w3-text-red"><i class="fa fa-info-circle" style="color:lightblue;font-size:25px"></i></button></span></a></li>';
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
echo '<li onclick="printclick_counter_GSM(this)" class="Counter_Gsm" id="'.$row->counter_aggregation.'" value="'.$row->functionsubset_id.'"><a href="javascript:void(0)" ><input class ="radiozinho" type="radio" name="radio_kpi"/><span style="margin-left:10px">'.$row->node. '</span></a></li>';
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
<p style= "margin:10px"><b>Query 6: </b><span id="Texto_Teste6" style="color:blue"></span></p>

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

<div id="info_counter" class="alert info">
  <span onclick="sumir_info()" id="closebtn">&times;</span>  
  <span id="info_text"><strong></strong></span>
</div>

<div id="loading" style="display:none">
    <p style="text-align:center;"><img src="https://www.pulsar-entertainment.com/assets/images/loading.gif" style="width:150px; height:150px;" alt="Loading" /></p>
</div>
<!------------------------------------------------------- END AJAX ----------------------------------------------->
<script>
var kpi1 = "";
var kpi2 = "";
var kpi3 = "";
var kpi4 = "";
var kpi5 = "";
var kpi6 = "";
var counter_name = "";
var table_name = "";
var nqi_name = "";
var nodeb = "";
var locell = "";
var rnc = "";
var rncc = ['rnc0','rnc1','rnc2','rnc3','rnc4','rnc5','rnc6'];
var bsc = "";
var enodeb = "";
var cellid = "";
var cellidd = ['cellid0','cellid1','cellid2','cellid3','cellid4','cellid5','cellid6'];
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
var tecnologia1 = "";
var tecnologia2 = "";
var tecnologia3 = "";
var tecnologia4 = "";
var tecnologia5 = "";
var tecnologia6 = "";
var periodo = "";
var tempo = "";
var familia = "";
var abortar_query = false;
var data_inicial = ["data_inicial1","data_inicial2","data_inicial3","data_inicial4","data_inicial5","data_inicial6"];
var data_final = "";
var hora_inicial = "";
var hora_final = "";
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
var query_aux = "";
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
var unidade1 = "";
var unidade2 = "";
var unidade3 = "";
var unidade4 = "";
var unidade5 = "";
var unidade6 = "";
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
var slider = false;
var vis_q1 = document.getElementById("Query1");
var vis_q2 = document.getElementById("Query2");
var vis_q3 = document.getElementById("Query3");
var vis_q4 = document.getElementById("Query4");
var vis_q5 = document.getElementById("Query5");
var vis_q6 = document.getElementById("Query6");

/////////////////////////////////////////////////////////////////////////////////////////////

$('#slider_menu').click(function(){
	
var vis_q1 = document.getElementById("Query1");
var vis_q2 = document.getElementById("Query2");
var vis_q3 = document.getElementById("Query3");
var vis_q4 = document.getElementById("Query4");
var vis_q5 = document.getElementById("Query5");
var vis_q6 = document.getElementById("Query6");

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
		
	for(i = 1; i <= 6; i++){
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
	}else{
	$("#radio_query1").prop("checked", false);
	$("#radio_query2").prop("checked", false);
	$("#radio_query3").prop("checked", false);
	$("#radio_query4").prop("checked", false);
	$("#radio_query5").prop("checked", false);
	$("#radio_query6").prop("checked", false);	
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
	
	for(i = 1; i <= 6; i++){
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
	if(vis_q2.style.display == "inline-block"){   
	mostrar_charts2();
	}
	if(vis_q3.style.display == "inline-block"){	
	mostrar_charts3();
    }
	if(vis_q4.style.display == "inline-block"){		
	mostrar_charts4();
	}
	if(vis_q5.style.display == "inline-block"){		
	mostrar_charts5();
	}
	if(vis_q6.style.display == "inline-block"){	
	mostrar_charts6();
	}
	
	autorization1 = true;
	autorization2 = false;
	autorization3 = false;
	autorization4 = false;
	autorization5 = false;
	autorization6 = false;
	//auth_change = false;

	for(i = 1; i <= 6; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm1").style.visibility = "visible";
	document.getElementById("Query_Menu1").style.opacity = 1;	
	
	document.getElementById("chart_type1").disabled = false;
	document.getElementById("chart_position1").disabled = false;
   });

   $("#radio_query2").click(function(){
	if(vis_q1.style.display == "inline-block"){   
	mostrar_charts1();
	}
	if(vis_q3.style.display == "inline-block"){	
	mostrar_charts3();
    }
	if(vis_q4.style.display == "inline-block"){		
	mostrar_charts4();
	}
	if(vis_q5.style.display == "inline-block"){		
	mostrar_charts5();
	}
	if(vis_q6.style.display == "inline-block"){	
	mostrar_charts6();
	}   
	   
	autorization1 = false;
	autorization2 = true;
	autorization3 = false;
	autorization4 = false;
	autorization5 = false;
	autorization6 = false;
	//auth_change = false;
	
	for(i = 1; i <= 6; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm2").style.visibility = "visible";
	document.getElementById("Query_Menu2").style.opacity = 1;
	
	document.getElementById("chart_type2").disabled = false;
	document.getElementById("chart_position2").disabled = false;		
   });
   
    $("#radio_query3").click(function(){
	if(vis_q1.style.display == "inline-block"){   
	mostrar_charts1();
	}
	if(vis_q2.style.display == "inline-block"){	
	mostrar_charts2();
    }
	if(vis_q4.style.display == "inline-block"){		
	mostrar_charts4();
	}
	if(vis_q5.style.display == "inline-block"){		
	mostrar_charts5();
	}
	if(vis_q6.style.display == "inline-block"){	
	mostrar_charts6();
	}
	
	autorization1 = false;
	autorization2 = false;
	autorization3 = true;
	autorization4 = false;
	autorization5 = false;
	autorization6 = false;
	//auth_change = false;
	
	for(i = 1; i <= 6; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm3").style.visibility = "visible";
	document.getElementById("Query_Menu3").style.opacity = 1;
	
	document.getElementById("chart_type3").disabled = false;
	document.getElementById("chart_position3").disabled = false;	
   });
   
    $("#radio_query4").click(function(){
	if(vis_q1.style.display == "inline-block"){   
	mostrar_charts1();
	}
	if(vis_q2.style.display == "inline-block"){	
	mostrar_charts2();
    }
	if(vis_q3.style.display == "inline-block"){		
	mostrar_charts3();
	}
	if(vis_q5.style.display == "inline-block"){		
	mostrar_charts5();
	}
	if(vis_q6.style.display == "inline-block"){	
	mostrar_charts6();
	}	
	
	autorization1 = false;
	autorization2 = false;
	autorization3 = false;
	autorization4 = true;
	autorization5 = false;
	autorization6 = false;
	//auth_change = false;
	
	for(i = 1; i <= 6; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm4").style.visibility = "visible";
	document.getElementById("Query_Menu4").style.opacity = 1;
	
	document.getElementById("chart_type4").disabled = false;
	document.getElementById("chart_position4").disabled = false;	
   });
   
    $("#radio_query5").click(function(){
	if(vis_q1.style.display == "inline-block"){   
	mostrar_charts1();
	}
	if(vis_q2.style.display == "inline-block"){	
	mostrar_charts2();
    }
	if(vis_q3.style.display == "inline-block"){		
	mostrar_charts3();
	}
	if(vis_q4.style.display == "inline-block"){		
	mostrar_charts4();
	}
	if(vis_q6.style.display == "inline-block"){	
	mostrar_charts6();
	}	
	
	autorization1 = false;
	autorization2 = false;
	autorization3 = false;
	autorization4 = false;
	autorization5 = true;
	autorization6 = false;
	//auth_change = false;
	
	for(i = 1; i <= 6; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm5").style.visibility = "visible";
	document.getElementById("Query_Menu5").style.opacity = 1;
	
	document.getElementById("chart_type5").disabled = false;
	document.getElementById("chart_position5").disabled = false;		
   });
   
    $("#radio_query6").click(function(){
	if(vis_q1.style.display == "inline-block"){   
	mostrar_charts1();
	}
	if(vis_q2.style.display == "inline-block"){	
	mostrar_charts2();
    }
	if(vis_q3.style.display == "inline-block"){		
	mostrar_charts3();
	}
	if(vis_q4.style.display == "inline-block"){		
	mostrar_charts4();
	}
	if(vis_q5.style.display == "inline-block"){	
	mostrar_charts5();
	}	
	
	autorization1 = false;
	autorization2 = false;
	autorization3 = false;
	autorization4 = false;
	autorization5 = false;
	autorization6 = true;
	//auth_change = false;
	
	for(i = 1; i <= 6; i++){
	document.getElementById("btn_confirm"+i).style.visibility = "hidden";
    document.getElementById("Query_Menu"+i).style.opacity = 0.3;	
	}

	document.getElementById("btn_confirm6").style.visibility = "visible";
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
		data_inicial[0] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[0];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[0] = m.toDate().getWeekNumber();
		document.getElementById("Date_Inicial_Texto_Teste1").innerHTML = "Week "+data_inicial[0]+" to";
		} else if(periodo = "monthly"){
		data_inicial[0] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[0];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[0] = m.toDate().getUTCMonth() + 1;
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
		document.getElementById("Date_Inicial_Texto_Teste2").innerHTML = "Week "+data_inicial[1]+" to";
		}else if(periodo = "monthly"){
		data_inicial[1] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[1];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[1] = m.toDate().getUTCMonth() + 1;
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
		document.getElementById("Date_Inicial_Texto_Teste3").innerHTML = "Week "+data_inicial[2]+" to";
		}else if(periodo = "monthly"){
		data_inicial[2] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[2];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[2] = m.toDate().getUTCMonth() + 1;
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
		document.getElementById("Date_Inicial_Texto_Teste4").innerHTML = "Week "+data_inicial[3]+" to";
		}else if(periodo = "monthly"){
		data_inicial[3] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[3];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[3] = m.toDate().getUTCMonth() + 1;
		document.getElementById("Date_Final_Texto_Teste4").innerHTML = "Month "+data_inicial[3]+" to";
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
		document.getElementById("Date_Inicial_Texto_Teste5").innerHTML = "Week "+data_inicial[4]+" to";
		}else if(periodo = "monthly"){
		data_inicial[4] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[4];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[4] = m.toDate().getUTCMonth() + 1;
		document.getElementById("Date_Final_Texto_Teste5").innerHTML = "Month "+data_inicial[4]+" to";
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
		document.getElementById("Date_Inicial_Texto_Teste6").innerHTML = "Week "+data_inicial[5]+" to";
		}else if(periodo = "monthly"){
		data_inicial[5] = document.getElementById("datepicker_inicial").value;
		var s = data_inicial[5];
		var m = moment(s, 'MM-DD-YYYY');
		data_inicial[5] = m.toDate().getUTCMonth() + 1;
		document.getElementById("Date_Final_Texto_Teste6").innerHTML = "Month "+data_inicial[5]+" to";
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
	
	auth_change = true;

	//document.getElementById("Texto_Teste").innerHTML = query;
	
}

function printclick_elementos_GSM_BSC(node){
	
	familia = "bsc";
	
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
	
	auth_change = true;
	//document.getElementById("Texto_Teste").innerHTML = query;
	
}

function printclick_elementos_GSM_BTS(node){
	
	familia = "bts";
	
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
	showCells();	
	
	
	auth_change = true;
	
}

function printclick_elementos_GSM_City(node){
	
	familia = "cidade";
	
	uf = $(node).find('span:eq(1)').text();
	
	elemento = $(node).find('span:eq(0)').text();
	
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).find('span:eq(0)').text();
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
	
	
	auth_change = true;
	
}

function printclick_elementos_GSM_Reg(node){
	
	familia = "region";
	
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
	
	
	auth_change = true;
	
}

function printclick_elementos_GSM_UF(node){
	
	familia = "uf";
	
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
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).text();
	rncc[2] = $(node).attr("value");
	cellidd[2] = $(node).attr("id");
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).text();
	rncc[3] = $(node).attr("value");
	cellidd[3] = $(node).attr("id");
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).text();
	rncc[4] = $(node).attr("value");
	cellidd[4] = $(node).attr("id");
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).text();
	rncc[5] = $(node).attr("value");
	cellidd[5] = $(node).attr("id");
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).text();
	rncc[6] = $(node).attr("value");
	cellidd[6] = $(node).attr("id");
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
	
	
	auth_change = true;
	
 }


function printclick_elementos_UMTS_City(node){
	
	familia = "cidade";
	uf = $(node).find('span:eq(1)').text();
	
	elemento = $(node).find('span:eq(0)').text();
	
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).find('span:eq(0)').text();
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

	auth_change = true;
	
}

function printclick_elementos_UMTS_Cluster(node){
	
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
	
	auth_change = true;
	
}

function printclick_elementos_UMTS_NodeB(node){
	
	
	familia = "NodeB";
	
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
	showCells(); 

	auth_change = true;
	
}

function printclick_elementos_UMTS_Reg(node){
	
	familia = "region";
	
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
	
	auth_change = true;
	
}

function printclick_elementos_UMTS_Rnc(node){
	
	familia = "rnc";
	
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
	
	auth_change = true;
	
}

function printclick_elementos_UMTS_UF(node){
	
	familia = "uf";
	
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
	
	auth_change = true;
}

////////////////////////////////////////////////// LTE //////////////////////////////////////////////////////

function printclick_elementos_LTE_Cells(node){
	
	familia = "cell";
	
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
	
	auth_change = true;
	
}

function printclick_elementos_lte_City(node){
	
	familia = "cidade";
	
	uf = $(node).find('span:eq(1)').text();
	
	elemento = $(node).find('span:eq(0)').text();
	
	if(((vis_q1.style.display == "inline-block") && (autorization1 == true)) || slider == true){
	elemento1 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q2.style.display == "inline-block") && (autorization2 == true)) || slider == true){
	elemento2 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q3.style.display == "inline-block") && (autorization3 == true)) || slider == true){
	elemento3 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q4.style.display == "inline-block") && (autorization4 == true)) || slider == true){
	elemento4 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q5.style.display == "inline-block") && (autorization5 == true)) || slider == true){
	elemento5 = $(node).find('span:eq(0)').text();
	}
	if(((vis_q6.style.display == "inline-block") && (autorization6 == true)) || slider == true){
	elemento6 = $(node).find('span:eq(0)').text();
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
	
	auth_change = true;
	
}

function printclick_elementos_lte_Reg(node){
	
	familia = "Region";
	
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
	
	auth_change = true;
	
}

function printclick_elementos_lte_UF(node){
	
	familia = "UF";
	
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
	
	auth_change = true;
	
}

function printclick_elementos_lte_eNodeB(node){
	
	familia = "eNodeB";
	
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
	showCells();
	
	auth_change = true;
	
}

function printclick_elementos_lte_Cluster(node){
	
	familia = "Cluster";
	
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
	unidade6 = "Users";
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

	auth_change = true;
	
}

function printclick_counter_GSM(node){
	
	estado = 2;
	contador = "GSM";
	
	counter_name = $(node).text();
	counter_aggregation = $(node).attr("id");
	table_name = $(node).attr("value");
	
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
	
	estado = 2;
	contador = "UMTS";
	
	counter_name = $(node).find('span:eq(0)').text();
	counter_aggregation = $(node).attr("id");
	table_name = $(node).attr("value");
	
	var index = $(node).index();
    // $('#myUL_GSM input:radio').eq(index).prop('checked', true);
	
	var p = $( "#myUL_KPI_UMTS input:radio" ).eq(index);
	var position = p.position();
	var y = (position.top) - 20;
	var text_info = $(node).find('span:eq(1)').text();
	
	document.getElementById("info_counter").style.top = y+"px";
	document.getElementById("info_counter").style.right = "550px";
	document.getElementById("info_text").textContent = text_info;
	document.getElementById("info_counter").style.display = "block";
	
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
	
	query_aux = "SELECT attname FROM pg_attribute WHERE attrelid = (SELECT oid FROM pg_class WHERE relname = 'fss_"+table_name+"_daily') AND attname = 'rnc'";
	
	showContador();
	

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
	
	auth_change = true;
	
}	

function printclick_counter_LTE(node){
	
	
	estado = 2;
	contador = "LTE";
	
	counter_name = $(node).text();
	counter_aggregation = $(node).attr("id");
	table_name = $(node).attr("value");
	
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

function printclick_erlang(node){
	
	if(hourly_selected == true){
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

	auth_change = true;
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

var vis_qm1 = document.getElementById("Query_Menu1");
var vis_qm2 = document.getElementById("Query_Menu2");
var vis_qm3 = document.getElementById("Query_Menu3");
var vis_qm4 = document.getElementById("Query_Menu4");
var vis_qm5 = document.getElementById("Query_Menu5");
var vis_qm6 = document.getElementById("Query_Menu6");

var vis_btnconf1 = document.getElementById("btn_confirm1");
var vis_btnconf2 = document.getElementById("btn_confirm2");
var vis_btnconf3 = document.getElementById("btn_confirm3");
var vis_btnconf4 = document.getElementById("btn_confirm4");
var vis_btnconf5 = document.getElementById("btn_confirm5");
var vis_btnconf6 = document.getElementById("btn_confirm6");

var opa_qm1 = document.getElementById("Query_Menu1");
var opa_qm2 = document.getElementById("Query_Menu2");
var opa_qm3 = document.getElementById("Query_Menu3");
var opa_qm4 = document.getElementById("Query_Menu4");
var opa_qm5 = document.getElementById("Query_Menu5");
var opa_qm6 = document.getElementById("Query_Menu6");

var txt_tec1 = document.getElementById("Tecnologia_Texto_Teste1");
var txt_tec2 = document.getElementById("Tecnologia_Texto_Teste2");
var txt_tec3 = document.getElementById("Tecnologia_Texto_Teste3");
var txt_tec4 = document.getElementById("Tecnologia_Texto_Teste4");
var txt_tec5 = document.getElementById("Tecnologia_Texto_Teste5");
var txt_tec6 = document.getElementById("Tecnologia_Texto_Teste6");

var txt_ele1 = document.getElementById("Elemento_Texto_Teste1");
var txt_ele2 = document.getElementById("Elemento_Texto_Teste2");
var txt_ele3 = document.getElementById("Elemento_Texto_Teste3");
var txt_ele4 = document.getElementById("Elemento_Texto_Teste4");
var txt_ele5 = document.getElementById("Elemento_Texto_Teste5");
var txt_ele6 = document.getElementById("Elemento_Texto_Teste6");

var txt_kpi1 = document.getElementById("KPI_Texto_Teste1");
var txt_kpi2 = document.getElementById("KPI_Texto_Teste2");
var txt_kpi3 = document.getElementById("KPI_Texto_Teste3");
var txt_kpi4 = document.getElementById("KPI_Texto_Teste4");
var txt_kpi5 = document.getElementById("KPI_Texto_Teste5");
var txt_kpi6 = document.getElementById("KPI_Texto_Teste6");

var vis_seta_tec1 = document.getElementById("Tecnologia_Seta_1");
var vis_seta_tec2 = document.getElementById("Tecnologia_Seta_2");
var vis_seta_tec3 = document.getElementById("Tecnologia_Seta_3");
var vis_seta_tec4 = document.getElementById("Tecnologia_Seta_4");
var vis_seta_tec5 = document.getElementById("Tecnologia_Seta_5");
var vis_seta_tec6 = document.getElementById("Tecnologia_Seta_6");

var vis_seta_ele1 = document.getElementById("Elemento_Seta_1");
var vis_seta_ele2 = document.getElementById("Elemento_Seta_2");
var vis_seta_ele3 = document.getElementById("Elemento_Seta_3");
var vis_seta_ele4 = document.getElementById("Elemento_Seta_4");
var vis_seta_ele5 = document.getElementById("Elemento_Seta_5");
var vis_seta_ele6 = document.getElementById("Elemento_Seta_6");

var vis_seta_kpi1 = document.getElementById("KPI_Seta_1");
var vis_seta_kpi2 = document.getElementById("KPI_Seta_2");
var vis_seta_kpi3 = document.getElementById("KPI_Seta_3");
var vis_seta_kpi4 = document.getElementById("KPI_Seta_4");
var vis_seta_kpi5 = document.getElementById("KPI_Seta_5");
var vis_seta_kpi6 = document.getElementById("KPI_Seta_6");


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
if(auth_change == true){	
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[0] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento1+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM " +tecnologia1 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
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
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento1+"' and date between '"+data_inicial[0]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM " +tecnologia1 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento1 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){
	
if(tecnologia1 == "umts"){	
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento1+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else
if(familia == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento1+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento1+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia1 == "lte"){	
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento1+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento1+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia1 == "gsm"){
if(familia == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento1+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento1+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else
if(familia == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento1+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento1+"' and DATE BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia1 == "umts"){
	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento1 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia1 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento1+"','enodeb'))::TEXT and date between '"+data_inicial[0]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento1 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
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

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento1+"' and week between '"+data_inicial[0]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM " +tecnologia1 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento1 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia1 == "umts"){	
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento1+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento1+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia1 == "lte"){	
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento1+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento1+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia1 == "gsm"){	
if(familia == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento1+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b.cellname,date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento1+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else
if(familia == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento1+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b.regional,date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento1+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}	
}	
	
}else if(estado == 3){

if(tecnologia1 == "umts"){
	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento1 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia1 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento1+"','enodeb'))::TEXT and week between '"+data_inicial[0]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento1 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
+"' order by "+tempo+"";
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

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento1+"' and month between '"+data_inicial[0]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM " +tecnologia1 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento1 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia1 == "umts"){	
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento1+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date),date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento1+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('month'::text, date)";	
}	
}else
if(tecnologia1 == "lte"){	
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento1+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento1+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}	
}else
if(tecnologia1 == "gsm"){	
if(familia == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento1+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b.cellname,date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento1+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else
if(familia == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento1+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b.regional,date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento1+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[0]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}	
}	
	
}else if(estado == 3){

if(tecnologia1 == "umts"){
	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento1 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia1 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento1+"','enodeb'))::TEXT and month between '"+data_inicial[0]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi1+" as node FROM "+tecnologia1+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento1 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
+"' order by "+tempo+"";
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
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[1] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento2+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[1]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM " +tecnologia2 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
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
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento2+"' and date between '"+data_inicial[1]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM " +tecnologia2 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento2 +"' and "+tempo+" between '"+data_inicial[1]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia2 == "umts"){	
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento2+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else
if(familia == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento2+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento2+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia2 == "lte"){	
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento2+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento2+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia2 == "gsm"){	
if(familia == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento2+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento2+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else
if(familia == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento2+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento2+"' and DATE BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia2 == "umts"){
	
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento2 +"' and "+tempo+" between '"+data_inicial[1]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia2 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento2+"','enodeb'))::TEXT and date between '"+data_inicial[1]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento2 +"' and "+tempo+" between '"+data_inicial[0]+"' and '"+data_final
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

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento2+"' and week between '"+data_inicial[1]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM " +tecnologia2 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento2 +"' and "+tempo+" between '"+data_inicial[1]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia2 == "umts"){	
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento2+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento2+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia2 == "lte"){	
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento2+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento2+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia2 == "gsm"){	
if(familia == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento2+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b.cellname,date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento2+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else
if(familia == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento2+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b.regional,date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento2+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}	
}	
	
}else if(estado == 3){

if(tecnologia2 == "umts"){
	
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento2 +"' and "+tempo+" between '"+data_inicial[1]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia2 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento2+"','enodeb'))::TEXT and week between '"+data_inicial[1]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento2 +"' and "+tempo+" between '"+data_inicial[1]+"' and '"+data_final
+"' order by "+tempo+"";
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

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento2+"' and month between '"+data_inicial[1]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM " +tecnologia2 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento2 +"' and "+tempo+" between '"+data_inicial[1]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia2 == "umts"){	
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento2+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date),date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento2+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('month'::text, date)";	
}	
}else
if(tecnologia2 == "lte"){	
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento2+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento2+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}	
}else
if(tecnologia2 == "gsm"){	
if(familia == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento2+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b.cellname,date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento2+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else
if(familia == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento2+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b.regional,date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento2+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[1]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}	
}	
	
}else if(estado == 3){

if(tecnologia2 == "umts"){
	
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento2 +"' and "+tempo+" between '"+data_inicial[1]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia2 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento2+"','enodeb'))::TEXT and month between '"+data_inicial[1]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi2+" as node FROM "+tecnologia2+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento2 +"' and "+tempo+" between '"+data_inicial[1]+"' and '"+data_final
+"' order by "+tempo+"";
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
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[2] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento3+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM " +tecnologia3 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
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
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento3+"' and date between '"+data_inicial[2]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM " +tecnologia3 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento3 +"' and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia3 == "umts"){	
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento3+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else
if(familia == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento3+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento3+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia3 == "lte"){	
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento3+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento3+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia3 == "gsm"){	
if(familia == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento3+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento3+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else
if(familia == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento3+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento3+"' and DATE BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia3 == "umts"){
	
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento3 +"' and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia3 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento3+"','enodeb'))::TEXT and date between '"+data_inicial[2]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento3 +"' and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final
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

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento3+"' and week between '"+data_inicial[2]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM " +tecnologia3 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento3 +"' and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia3 == "umts"){	
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento3+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento3+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia3 == "lte"){	
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento3+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento3+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia3 == "gsm"){	
if(familia == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento3+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b.cellname,date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento3+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else
if(familia == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento3+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b.regional,date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento3+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}	
}	
	
}else if(estado == 3){

if(tecnologia3 == "umts"){
	
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento3 +"' and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia3 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento3+"','enodeb'))::TEXT and week between '"+data_inicial[2]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento3 +"' and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final
+"' order by "+tempo+"";
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

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento3+"' and month between '"+data_inicial[2]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM " +tecnologia3 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento3 +"' and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia3 == "umts"){	
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento3+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date),date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento3+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('month'::text, date)";	
}	
}else
if(tecnologia3 == "lte"){	
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento3+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento3+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}	
}else
if(tecnologia3 == "gsm"){	
if(familia == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento3+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b.cellname,date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento3+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else
if(familia == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento3+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b.regional,date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento3+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[2]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}	
}	
	
}else if(estado == 3){

if(tecnologia3 == "umts"){
	
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento3 +"' and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia3 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento3+"','enodeb'))::TEXT and month between '"+data_inicial[2]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi3+" as node FROM "+tecnologia3+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento3 +"' and "+tempo+" between '"+data_inicial[2]+"' and '"+data_final
+"' order by "+tempo+"";
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
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[3] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento4+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM " +tecnologia4 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
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
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento4+"' and date between '"+data_inicial[3]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM " +tecnologia4 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento4 +"' and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia4 == "umts"){	
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento4+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else
if(familia == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento4+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento4+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia4 == "lte"){	
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento4+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento4+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia4 == "gsm"){	
if(familia == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento4+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento4+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else
if(familia == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento4+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento4+"' and DATE BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia4 == "umts"){
	
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento4 +"' and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia4 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento4+"','enodeb'))::TEXT and date between '"+data_inicial[3]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento4 +"' and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final
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

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento4+"' and week between '"+data_inicial[3]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM " +tecnologia4 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento4 +"' and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia4 == "umts"){	
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento4+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento4+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia4 == "lte"){	
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento4+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento4+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia4 == "gsm"){	
if(familia == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento4+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b.cellname,date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento4+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else
if(familia == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento4+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b.regional,date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento4+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}	
}	
	
}else if(estado == 3){

if(tecnologia4 == "umts"){
	
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento4 +"' and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia4 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento4+"','enodeb'))::TEXT and week between '"+data_inicial[3]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento4 +"' and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final
+"' order by "+tempo+"";
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

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento4+"' and month between '"+data_inicial[3]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM " +tecnologia4 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento4 +"' and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia4 == "umts"){	
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento4+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date),date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento4+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('month'::text, date)";	
}	
}else
if(tecnologia4 == "lte"){	
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento4+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento4+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}	
}else
if(tecnologia4 == "gsm"){	
if(familia == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento4+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b.cellname,date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento4+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else
if(familia == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento4+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b.regional,date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento4+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[3]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}	
}	
	
}else if(estado == 3){

if(tecnologia4 == "umts"){
	
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento4 +"' and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia4 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento4+"','enodeb'))::TEXT and month between '"+data_inicial[3]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi4+" as node FROM "+tecnologia4+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento4 +"' and "+tempo+" between '"+data_inicial[3]+"' and '"+data_final
+"' order by "+tempo+"";
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
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[4] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento5+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM " +tecnologia5 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
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
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento5+"' and date between '"+data_inicial[4]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM " +tecnologia5 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento5 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia5 == "umts"){	
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento5+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else
if(familia == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento5+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento5+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia5 == "lte"){	
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento5+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento5+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia5 == "gsm"){	
if(familia == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento5+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento5+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else
if(familia == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento5+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento5+"' and DATE BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia5 == "umts"){
	
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento5 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia5 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento5+"','enodeb'))::TEXT and date between '"+data_inicial[4]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento5 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
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

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento5+"' and week between '"+data_inicial[4]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM " +tecnologia5 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento5 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia5 == "umts"){	
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento5+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento5+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia5 == "lte"){	
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento5+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento5+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia5 == "gsm"){	
if(familia == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento5+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b.cellname,date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento5+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else
if(familia == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento5+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b.regional,date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento5+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}	
}	
	
}else if(estado == 3){

if(tecnologia5 == "umts"){
	
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento5 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia5 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento5+"','enodeb'))::TEXT and week between '"+data_inicial[4]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento5 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
+"' order by "+tempo+"";
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

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento5+"' and month between '"+data_inicial[4]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM " +tecnologia5 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento5 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia5 == "umts"){	
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento5+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date),date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento5+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('month'::text, date)";	
}	
}else
if(tecnologia5 == "lte"){	
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento5+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento5+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}	
}else
if(tecnologia5 == "gsm"){	
if(familia == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento5+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b.cellname,date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento5+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else
if(familia == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento5+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b.regional,date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento5+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[4]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}	
}	
	
}else if(estado == 3){

if(tecnologia5 == "umts"){
	
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento5 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia4 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento5+"','enodeb'))::TEXT and month between '"+data_inicial[4]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi5+" as node FROM "+tecnologia5+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento5 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
+"' order by "+tempo+"";
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
if(hourly_selected == true){
periodo = "hourly";	
hora_inicial = 	$( "#Drop_Hora_Inicial option:selected" ).text();
hora_final = 	$( "#Drop_Hora_Final option:selected" ).text();
data_inicial[5] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = (SELECT get_enodeb_name('"+elemento6+"','enodeb'))::TEXT and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final+" 23:30' and date::time between '"+hora_inicial+"' and '"+hora_final+"'  order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM " +tecnologia6 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
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
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento6+"' and date between '"+data_inicial[5]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM " +tecnologia6 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento6 +"' and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia6 == "umts"){	
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento6+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else
if(familia == "rnc"){	
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento6+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento6+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia6 == "lte"){	
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento6+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else {
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento6+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";	
}	
}else
if(tecnologia6 == "gsm"){	
if(familia == "cell"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento6+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b.cellname,DATE ORDER BY DATE";
}else
if(familia == "cidade"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento6+"' and uf = '"+uf+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}else
if(familia == "region"){
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento6+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b.regional,DATE ORDER BY DATE";
}else	{
query = "SELECT DATE, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento6+"' and DATE BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",DATE ORDER BY DATE";
}	
}	
	
}else if(estado == 3){

if(tecnologia6 == "umts"){
	
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento6 +"' and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia6 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento6+"','enodeb'))::TEXT and date between '"+data_inicial[5]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento6 +"' and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final
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

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento6+"' and week between '"+data_inicial[5]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM " +tecnologia6 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento6 +"' and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia6 == "umts"){	
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento6+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento6+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";	
}	
}else
if(tecnologia6 == "lte"){	
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento6+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else {
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento6+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}	
}else
if(tecnologia6 == "gsm"){	
if(familia == "cell"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento6+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b.cellname,date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else
if(familia == "cidade"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento6+"' and uf = '"+uf+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else
if(familia == "region"){
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento6+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b.regional,date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}else	{
query = "SELECT date_part('week'::text, date %2B '1 day'::interval) as week, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento6+"' and date_part('week'::text, date %2B '1 day'::interval) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('week'::text, date %2B '1 day'::interval) ORDER BY date_part('week'::text, date %2B '1 day'::interval)";
}	
}	
	
}else if(estado == 3){

if(tecnologia6 == "umts"){
	
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento6 +"' and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia5 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento6+"','enodeb'))::TEXT and week between '"+data_inicial[4]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento6 +"' and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final
+"' order by "+tempo+"";
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

if(estado == 1){
if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_main_kpis_"+familia+"_rate_"+periodo+" where node != 'UNKNOWN' and node = '"+elemento6+"' and month between '"+data_inicial[5]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM " +tecnologia6 +"_kpi.vw_main_kpis_"+familia +"_rate_"+periodo
+" where node != 'UNKNOWN' and node = '"+elemento6 +"' and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final
+"' order by "+tempo+"";
}
}else if(estado == 2){

if(tecnologia6 == "umts"){	
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento6+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date),date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM umts_counter.fss_"+table_name+"_daily a JOIN umts_control.cells_database b on a."+type_of_counter+" = b."+type_of_counter+" and a."+lcorci+" = b."+lcorci+" WHERE b."+familia+" = '"+elemento6+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('year'::text, date),date_part('month'::text, date) ORDER BY date_part('month'::text, date)";	
}	
}else
if(tecnologia6 == "lte"){	
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento6+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else {
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM lte_counter.fss_"+table_name+"_daily a JOIN lte_control.cells b on a.enodeb = b.enodeb and a.locellid = b.cellid WHERE b."+familia+" = '"+elemento6+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}	
}else
if(tecnologia6 == "gsm"){	
if(familia == "cell"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.cellname = '"+elemento6+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b.cellname,date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else
if(familia == "cidade"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento6+"' and uf = '"+uf+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else
if(familia == "region"){
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b.regional = '"+elemento6+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b.regional,date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}else	{
query = "SELECT date_part('month'::text, date) as month, "+counter_aggregation+"("+counter_name+") as node FROM gsm_counter.fss_"+table_name+"_daily a JOIN gsm_control.cells_db b on a.bsc = b.bsc and a.cellid = b.cellid WHERE b."+familia+" = '"+elemento6+"' and date_part('month'::text, date) BETWEEN '"+data_inicial[5]+"' AND '"+data_final+"' GROUP BY b."+familia+",date_part('month'::text, date) ORDER BY date_part('month'::text, date)";
}	
}	
	
}else if(estado == 3){

if(tecnologia5 == "umts"){
	
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where node != 'UNKNOWN' and node = '"+elemento6 +"' and "+tempo+" between '"+data_inicial[5]+"' and '"+data_final
+"' order by "+tempo+"";

}else

if(tecnologia4 == "lte"){	

if(familia == "eNodeB"){
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+familia+" where "+familia+" != 'UNKNOWN' and "+familia+" = (SELECT get_enodeb_name('"+elemento6+"','enodeb'))::TEXT and month between '"+data_inicial[5]+"' and '"+data_final+"' order by "+tempo+"";
}else {	
query = "SELECT "+tempo+", "+kpi6+" as node FROM "+tecnologia6+"_kpi.vw_nqi_"+periodo+"_"+familia
+" where "+familia+" != 'UNKNOWN' and "+familia+" = '"+elemento6 +"' and "+tempo+" between '"+data_inicial[4]+"' and '"+data_final
+"' order by "+tempo+"";
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


function mostrar_GSM(){
	
var vis_q1 = document.getElementById("Query1");
var vis_q2 = document.getElementById("Query2");
var vis_q3 = document.getElementById("Query3");
var vis_q4 = document.getElementById("Query4");
var vis_q5 = document.getElementById("Query5");
var vis_q6 = document.getElementById("Query6");	

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

var vis_q1 = document.getElementById("Query1");
var vis_q2 = document.getElementById("Query2");
var vis_q3 = document.getElementById("Query3");
var vis_q4 = document.getElementById("Query4");
var vis_q5 = document.getElementById("Query5");
var vis_q6 = document.getElementById("Query6");	
	
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
	
var vis_q1 = document.getElementById("Query1");
var vis_q2 = document.getElementById("Query2");
var vis_q3 = document.getElementById("Query3");
var vis_q4 = document.getElementById("Query4");
var vis_q5 = document.getElementById("Query5");
var vis_q6 = document.getElementById("Query6");	
	
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

if(periodo != ""){
for(i = 0; i<= 5; i++){
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

for(i = 1; i <= 6; i++){
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
for(i = 0; i<= 5; i++){
data_inicial[i] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;

var f = i + 1;

var di = "Date_Inicial_Texto_Teste"+f;
var df = "Date_Final_Texto_Teste"+f;

document.getElementById(di).innerHTML = data_inicial[i]+" to";
document.getElementById(df).innerHTML = data_final;	
}
}

for(i = 1; i <= 6; i++){
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
//document.getElementById("Texto_Teste").innerHTML = query;	
document.getElementById("Time").innerHTML = "Daily";

auth_change = true;

}

function mostrar_Weekly(){

if(periodo != ""){
for(i = 0; i<= 5; i++){
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

for(i = 1; i <= 6; i++){
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

auth_change = true;
}

function mostrar_Monthly(){

if(periodo != ""){
for(i = 0; i<= 5; i++){
data_inicial[i] = document.getElementById("datepicker_inicial").value;
data_final = document.getElementById("datepicker_final").value;	
var s = data_inicial[i];
var t = data_final;
var m = moment(s, 'MM-DD-YYYY');
var n = moment(t, 'MM-DD-YYYY');
var f = i + 1;
var di = "Date_Inicial_Texto_Teste"+f;
var df = "Date_Final_Texto_Teste"+f;

data_inicial[i] = m.toDate().getUTCMonth();
data_final = n.toDate().getUTCMonth();
		
document.getElementById(di).innerHTML = "Month "+data_inicial[i]+" to";
document.getElementById(df).innerHTML = "Month "+data_final;
}
}

for(i = 1; i <= 6; i++){
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
        xmlhttp.open("GET","/npsmart/quickreport/showCharts/?q1="+query1+"&q2="+query2+"&q3="+query3+"&q4="+query4+"&q5="+query5+"&q6="+query6+"&f1="+nome1+"&f2="+nome2+"&f3="+nome3+"&f4="+nome4+"&f5="+nome5+"&f6="+nome6+"&d1="+data_inicial[0]+"&d2="+data_inicial[1]+"&d3="+data_inicial[2]+"&d4="+data_inicial[3]+"&d5="+data_inicial[4]+"&d6="+data_inicial[5]+"&t1="+tipo_chart1+"&t2="+tipo_chart2+"&t3="+tipo_chart3+"&t4="+tipo_chart4+"&t5="+tipo_chart5+"&t6="+tipo_chart6+"&c1="+tipo_chart_position1+"&c2="+tipo_chart_position2+"&c3="+tipo_chart_position3+"&c4="+tipo_chart_position4+"&c5="+tipo_chart_position5+"&c6="+tipo_chart_position6,true);
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
