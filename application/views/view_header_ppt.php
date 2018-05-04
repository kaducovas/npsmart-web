<!DOCTYPE html>
<html lang="en">
	<head>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112474813-1"></script>
		<script>
		  var timeSincePageLoad = Math.round(performance.now());
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('event', 'timing_complete', {
		  'name': 'timingVar',
		  'value': timeSincePageLoad,
		  'event_category': 'timingCategory',
		  'event_label': 'timingLabel'
		});
		  gtag('config', 'UA-112474813-1');
		</script>
		<link rel="shortcut icon" href="http://freelogo2016cdn.b-cdn.net/wp-content/uploads/2016/12/huawei-logo.png"/>
		<meta charset="utf-8"/>

		<!----------------------------------------------------- JQUERY ---------------------------------------------->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<!------------------------------------------------------ HIGHCHARTS ----------------------------------------->
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/highcharts-3d.js"></script>
		<script src="https://code.highcharts.com/modules/series-label.js"></script>
		<script src="https://blacklabel.github.io/grouped_categories/grouped-categories.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/export-data.js"></script>
		
		<!------------------------------------------------------- PPT GEN ------------------------------------------->
		<script type="text/javascript" src="/npsmart/PptxGenJS-2.0.0/libs/jszip.min.js"></script>
		<script type="text/javascript" src="/npsmart/PptxGenJS-2.0.0/dist/pptxgen.js"></script>
		<script type="text/javascript" src="/npsmart/PptxGenJS-2.0.0/dist/pptxgen.bundle.js"></script>
		
		<!-------------------------------------------------- HTML TO CANVAS ----------------------------------------->
		<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
		
		<!------------------------------------------------------ BOOTSTRAP ------------------------------------------>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="/npsmart/NiceSelect/css/nice-select.css"/>
		
		<!------------------------------------------------------ DATEPICKER ----------------------------------------->
		<link rel="stylesheet" href="/npsmart/css/datepicker.min.css" />
		<link rel="stylesheet" href="/npsmart/css/datepicker3.min.css" />
		<script src="/npsmart/js/bootstrap-datepicker.min.js"></script>
		
		<!------------------------------------------------------ IMAGE TO CLIPBOARD --------------------------------->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.13/clipboard.min.js"></script>
		

		
  <style type="text/css"> 
.navbar-custom {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;	 
  background-color: #000000;
  border-color: #454545;
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(#454545), to(#000000));
  background-image: -webkit-linear-gradient(top, #454545, 0%, #000000, 100%);
  background-image: -moz-linear-gradient(top, #454545 0%, #000000 100%);
  background-image: linear-gradient(to bottom, #454545 0%, #000000 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0E1112', endColorstr='#2D3437', GradientType=0);
}
.navbar-custom .navbar-brand {
  color: #ffffff;
}
.navbar-custom .navbar-brand:hover,
.navbar-custom .navbar-brand:focus {
  color: #637881;
  background-color: transparent;
}
.navbar-custom .navbar-text {
  color: #ffffff;
}
.navbar-custom .navbar-nav > li:last-child > a {
  border-right: 1px solid #0E1112;
}
.navbar-custom .navbar-nav > li > a {
  color: #ffffff;
  border-left: 1px solid #0E1112;
}
.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus {
  color: #000000;
  background-color: #94AFBC;
}
.navbar-custom .navbar-nav > .active > a,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus {
  color: #637881;
  background-color: #0E1112;
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(#0E1112), to(#2D3437));
  background-image: -webkit-linear-gradient(top, #0E1112, 0%, #2D3437, 100%);
  background-image: -moz-linear-gradient(top, #0E1112 0%, #2D3437 100%);
  background-image: linear-gradient(to bottom, #0E1112 0%, #2D3437 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2D3437', endColorstr='#0E1112', GradientType=0);
}
.navbar-custom .navbar-nav > .disabled > a,
.navbar-custom .navbar-nav > .disabled > a:hover,
.navbar-custom .navbar-nav > .disabled > a:focus {
  color: #637881;
  background-color: transparent;
}
.navbar-custom .navbar-toggle {
  border-color: #637881;
}
.navbar-custom .navbar-toggle:hover,
.navbar-custom .navbar-toggle:focus {
  background-color: #637881;
}
.navbar-custom .navbar-toggle .icon-bar {
  background-color: #637881;
}
.navbar-custom .navbar-collapse,
.navbar-custom .navbar-form {
  border-color: #0E1112;
}
.navbar-custom .navbar-nav > .dropdown > a:hover .caret,
.navbar-custom .navbar-nav > .dropdown > a:focus .caret {
  border-top-color: #637881;
  border-bottom-color: #637881;
}
.navbar-custom .navbar-nav > .open > a,
.navbar-custom .navbar-nav > .open > a:hover,
.navbar-custom .navbar-nav > .open > a:focus {
  background-color: #0E1112;
  color: #637881;
}
.navbar-custom .navbar-nav > .open > a .caret,
.navbar-custom .navbar-nav > .open > a:hover .caret,
.navbar-custom .navbar-nav > .open > a:focus .caret {
  border-top-color: #637881;
  border-bottom-color: #637881;
}
.navbar-custom .navbar-nav > .dropdown > a .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}

.navbar-custom .navbar-nav .open .dropdown-menu > li > a {
    color: #000000;

  }
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffffff;

    background-color: #637881;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #637881;
    background-color: #0E1112;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #6A7D86;
    background-color: transparent;
  }
.navbar-custom .navbar-link {
  color: #ffffff;
}
.navbar-custom .navbar-link:hover {
  color: #C1CCD2;
}
</style>
 <style type="text/css">

 body {
    /* background-color: #E0E0E3; */ 
	 background-color: #F8F8F8 ;
	 padding-top: 70px; }
	 
 .whitebody {
    /* background-color: #E0E0E3; */ 
	 background-color: #FFFFFF ;
	 padding-top: 0px; }
	 
	 
@media screen and (max-width: 768px) {
    body { padding-top: 0px; }
}	 


.borda
{
    box-shadow: 7px 5px 3px grey;
	border: 1px solid #CCCCCC;
	Border-radius: 0px;
	margin-left: 0.25%;
    margin-right: 0.25%;
	margin-top:0.25%;
	margin-bottom:0.25%;
	height: 400px;
    width: 49%;
    background-color: #ffffff;
    text-align: center;
    padding: 0.2%;
	position: relative;
	float:left;
}
 
.main {
	/*background-color: #E0E0E3;*/
    width: 100%;
	clear:both;
	text-align:center;
}

.ne{
	float:left;
	margin-left:5%;
}

.chart {
    
    max-width: 100%;
    height: 400px;
	clear:both;
    
}

.border{
	box-shadow: 7px 5px 3px grey;
	border: 1px solid #CCCCCC;
	Border-radius: 0px;
	
}

.chart_content {
	
    box-shadow: 7px 5px 3px grey;
	margin-left: 0.5%;
    margin-right: 0.5%;
	margin-top:0.25%;
	margin-bottom:0.25%;
	border: 1px solid #CCCCCC;
	Border-radius: 0px;
   width: 49%;
   height: 400px;
   float: left;
   position:relative;
}

.chart_content_large {
	
    box-shadow: 7px 5px 3px grey;
	margin-left: 1%;
    margin-right: 1%;
	margin-top:0.25%;
	margin-bottom:0.25%;
	border: 1px solid #CCCCCC;
	Border-radius: 0px;
   width: 98%;
   height: 400px;
   position:relative;
}



.wc_chart_content {
	
   /* box-shadow: 7px 5px 3px grey;*/
	margin-left: 0.5%;
    margin-right: 0.5%;
	margin-top:0.25%;
	margin-bottom:0.25%;
	/*border: 1px solid #CCCCCC;*/
	/*Border-radius: 0px;*/
   width: 49%;
   /* height: 440px; */
   float: left;
   position:relative;
}

.wc {
	background-color: #ffffff;
   width: 49%;
   height: 65%;
   margin-left: 0.5%;
   margin-right: 0.5%;
   margin-top:0.25%;
   margin-bottom:0.25%;
   float: left;
   position:relative;
}

.dashboard {
    background-color: #E0E0E3;    
    max-width: 100%;
}

.alert_dashboard {
    background-color: #FFFFFF;    
    max-width: 100%;
}

.chart1 {
    
    max-width: 100%;
    height: 400px;
	clear:both;
    
}


.modal {
    width: 1400px;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
	right: 0;
	text-align: center;

    background: rgba(0, 0, 0, 0.7);
}
.modal .chart {
    min-width: 300px;
    max-width: 90%;
	height: 90%;
	
}
.modal .chart1 {
    min-width: 300px;
    max-width: 98%;
	height: 100%;	
}

#result {
	text-align: right;
	color: gray;
	min-height: 2em;
}
#table-sparkline {
	margin: 0 auto;
    border-collapse: collapse;
}

table.dataTable thead th, table.dataTable thead td {
    text-align: center;
}

th {
    font-weight: bold;
    text-align: center;
}

td {
    text-align: center;
}

td, th {
    padding: 5px;
  /*  border-bottom: 1px solid silver; */ 
    height: 20px;
}

thead th {
    border-top: 2px solid gray;
  /*  border-bottom: 2px solid gray; */ 
	text-align: center;
	
}
.highcharts-tooltip>span {
	background: white;
	border: 1px solid silver;
	border-radius: 3px;
	box-shadow: 1px 1px 2px #888;
	padding: 8px;
}

.dataTables_filter {  
	margin-top: 12px; 
	margin-left: 40px; 
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 0px;
}

.dataTables_wrapper .dataTables_paginate{
    padding: 0px;
	margin: 0 0 0 0 ; 
}

.link{
	text-align: left;
}

a.dt-button.buttons-excel.buttons-html5 {

display:inline-block;

}	



.shorty {
	    background: red; 
    height: 166px;
    min-width: 90px; 
    /* 
      min-width is large enough to stop 
      the longest header text you will have from 
      overlapping when the table is the smallest it will be 
    */
	
    min-width: 10px;
    padding: 0px;
	margin: 0 0 0 0 ; 
	display: block;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    transform: rotate(-90deg);
    font-weight: normal;
    text-transform: uppercase;
    color: #FFF;
    /*
      max-width contains the span and 
      must match the height of the th minus 
      any padding you want 
    */
}

/* 
   You could give a class like this
   to your shorter headers if you wanted 
   maybe apply it with javascript or
   if you use PHP / whatever you could
   apply it to strings of a certain size.
*/	

.rotate > div {
  	-webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
 	width: 10px;
 	height: 50px;
}

.textH{
    overflow:visible:
        height: 50px !important;
        width: 150px !important;
    text-align:left;
    margin-bottom:0px;
	
    
}

.vrt {
  width: 10px;
  margin: 0 auto;
  writing-mode: vertical-rl;
 -webkit-transform:rotate(180deg);

}

.vrt_radar {
  width: 10px;
  margin: 0 auto;
  writing-mode: vertical-rl;
  -webkit-transform:rotate(180deg);
  height: 230px;
}

.baseline_content {
	
	margin-left: 0.5%;
    margin-right: 0.5%;
	margin-top:0.25%;
	margin-bottom:0.25%;
	border: 1px solid #CCCCCC;
	Border-radius: 0px;
   width: 49%;
   height: 800px;
   float: left;
   position:relative;
}
.baseline_chart {
    
    max-width: 100%;
    height: 800px;
	clear:both;
    
}

.vrt {
  writing-mode: vertical-rl;
  -webkit-transform:rotate(180deg);
  width: 10px;
}

.vrt_long_triage {
  writing-mode: vertical-rl;
  -webkit-transform:rotate(180deg);
  width: 10px;
  height: 200px;
}

.vrt_triage {
  margin: 0 auto;
  writing-mode: vertical-rl;
  -webkit-transform:rotate(180deg);
  height: 180px;
}
.radar_content {	
	position: absolute;
	margin-left: 1%;
    margin-right: 1%;
	margin-top:0.1%;
	margin-bottom:1%;
	Border-radius: 0px;
    max-width: 48%;
	min-width: 48%;
    height: 630px;
}

.radar_info {	
	position: absolute;
	margin-left: 1%;
    margin-right: 1%;
	margin-top:0.1%;
	margin-bottom:1%;
	Border-radius: 0px;
    max-width: 48%;
	min-width: 48%;
    height: 630px;
}

.radar_table {	
	margin-left: 1%;
    margin-right: 1%;
	margin-top:0.1%;
	margin-bottom:1%;
	Border-radius: 0px;
    max-width: 48%;
	min-width: 48%;
    height: 630px;
	float: right;
}
.radar_chart {
    max-width: 50%;
	min-width: 50%;
    height: 100%;
}
.pie_content {	
	Border-radius: 0px;
    max-width: 25%;
	min-width: 25%;
    height: 300px;
	float: left;
}
.radar_menu {	
	float: left;
}
.radar_menu_footer_left {
	margin-top:560px;
	float: left;
}
.radar_menu_footer_right {
	margin-left: 90%;
	margin-top:560px;
}

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

<script>
$(function() {
	
	$('#daterange').datepicker({
    calendarWeeks: true,
	dateFormat: "yy-mm-dd"
	})

	.on('changeDate', function(date) {
		var day = $('#daterange').datepicker('getDate').getDate();
		var year = $('#daterange').datepicker('getDate').getFullYear();
		var month = $('#daterange').datepicker('getDate').getMonth()+1;
		var date = year+'-'+month+'-'+day;
		document.getElementById('reportdate').value = date;
		//$('#bs-example-navbar-collapse-1 ul li #daterange').find('#spDate').text('Week'+week);
		//document.reportopt.submit();
	});
});

</script>
<META HTTP-EQUIV="Pragma" CONTENT="no cache">
</head>
