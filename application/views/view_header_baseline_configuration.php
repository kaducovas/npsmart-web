<!DOCTYPE html>
<html lang="en">
	<head>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112474813-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-112474813-1');
		</script>
		
		<meta charset="utf-8"/>
		
		<link rel="shortcut icon" href="http://freelogo2016cdn.b-cdn.net/wp-content/uploads/2016/12/huawei-logo.png"/>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		
		<script src="https://momentjs.com/downloads/moment-with-locales.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<script src="/npsmart/FooTables/js/footable.js"></script>
		
		<script src="/npsmart/js/bootstrap-datepicker.min.js"></script>
		
		<script src="/npsmart/NiceSelect/js/jquery.nice-select.js"></script>
		
		<script src="https://rawgit.com/RickStrahl/jquery-resizable/master/src/jquery-resizable.js"></script>
		
		<script src="https://rawgit.com/RickStrahl/jquery-resizable/master/src/jquery-resizableTableColumns.js"></script>
				
		<link rel="stylesheet" href="/npsmart/css/datepicker.min.css" />
		
		<link rel="stylesheet" href="/npsmart/css/datepicker3.min.css" />
	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
			
		<link rel="stylesheet" href="/npsmart/FooTables/css/footable.bootstrap.css" />

		<link rel="stylesheet" href="/npsmart/NiceSelect/css/nice-select.css"/>
		
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		
		<style>	
			#editing-example {
				font-family: 'Roboto', sans-serif;
				border-collapse: collapse;
				table-layout: fixed;
				width: 100%;
			}
			
			#editing-example td, #editing-example th {
				border: 1px solid #ddd;
				padding: 8px;
				overflow: hidden;
				white-space: nowrap;
			}

			#editing-example tr:nth-child(even){background-color: #f2f2f2;}

			#editing-example tr:hover {background-color: #ddd;}

			#editing-example th.footable-sortable {
				padding-top: 12px;
				padding-bottom: 12px;
				text-align: center;
				color: white;
				background:#13afb2;
			}
			
			#editing-example th {
				
				overflow: visible;
				white-space: nowrap;
				font-weight: bold;
			
			}	
			
			form.form-inline{
				
				float: right;
			
			}
			
			th.footable-editing.footable-last-visible{
				
				background-color: #13afb2;
				
			}
			
			td.footable-editing.footable-last-visible{
				
				text-align: left;
				
			}

			button.btn.btn-default.footable-edit{
				
				background-color: #ff9000;
				width: 30px;
				height: 30px;
			
			}	
			
			
			button.btn.btn-default.footable-delete{
				
				margin-right: 20px;
				background-color: #ce3b3b;
				width: 30px;
				height: 30px;
				
			}
			
			#loading {
				
				position:absolute;
				top:30%;
				left: 50%;
				z-index: 999;
			
			}
			
			.dimmer {
			  display: none;
				background: #000;
				opacity: 0.5;
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				z-index: 100;
			}
			
			.example {
				display: none;
			}			
			
		</style>
			
		<style type="text/css"> 
			.navbar-custom {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 10;	 
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
				background-color: #F8F8F8 ;
				padding-top: 70px; 
			}
			 
			.whitebody {
				background-color: #FFFFFF ;
				padding-top: 0px; 
			}
			 
			 
			@media screen and (max-width: 768px) {
				body {
					padding-top: 0px; 
				}
			}	 


			.borda{
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
				margin-left: 0.5%;
				margin-right: 0.5%;
				margin-top:0.25%;
				margin-bottom:0.25%;
				width: 49%;
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
				height: 20px;
			}

			thead th {
				border-top: 2px solid gray;
				text-align: center;
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
			
			.dropbtn {
				background-color:#3ed89b;
				color: black;
				padding: 16px;
				font-size: 16px;
				border: none;
				margin-bottom: 10px;
				font-weight: bold;
			}

			.dropdown {
				position: relative;
				display: inline-block;
			}

			.dropdown-content {
				display: none;
				position: absolute;
				background-color: #f1f1f1;
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

			.dropdown-content a:hover {
				background-color: #ddd;
				cursor: pointer;
				}

			.dropdown:hover .dropdown-content {
				display: block;
			}

			.dropdown:hover .dropbtn {
				background-color: #25e880;
			}
			
			
			/* The container */
			.container {
				display: block;
				position: relative;
				padding-left: 35px;
				margin-bottom: 12px;
				cursor: pointer;
				font-size: 22px;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}

			/* Hide the browser's default radio button */
			.container input {
				position: absolute;
				opacity: 0;
				cursor: pointer;
			}

			/* Create a custom radio button */
			.checkmark {
				position: absolute;
				top: 0;
				left: 0;
				height: 20px;
				width: 20px;
				background-color: #eee;
				border-radius: 50%;
			}

			/* On mouse-over, add a grey background color */
			.container:hover input ~ .checkmark {
				background-color: #ccc;
			}

			/* When the radio button is checked, add a blue background */
			.container input:checked ~ .checkmark {
				background-color: #2196F3;
			}

			/* Create the indicator (the dot/circle - hidden when not checked) */
			.checkmark:after {
				content: "";
				position: absolute;
				display: none;
			}

			/* Show the indicator (dot/circle) when checked */
			.container input:checked ~ .checkmark:after {
				display: block;
			}

			/* Style the indicator (dot/circle) */
			.container .checkmark:after {
				top: 7px;
				left: 7px;
				width: 6px;
				height: 6px;
				border-radius: 50%;
				background: white;
			}
			
			div.nice-select {
				
			width: 100%;	
			
			}
			
			label.container{
				
			text-align:left;
			font-size: 15px;
			
			}

			#modal-edit{
				
				width:100%;
			
			}

			.alert {
				padding: 20px;
				position: absolute;
				top:20%;
				z-index: 935082539583;
				width: 100%;
				text-align: center;
				font-size: 30px;
				background-color: #f44336;
				color: white;
				opacity: 1;
				display: none;
				transition: opacity 0.6s;
				margin-bottom: 15px;
			}

			.alert.success {background-color: #4CAF50;}
			.alert.info {background-color: #2196F3;}
			.alert.warning {background-color: #ff9800;}

			.closebtn {
				top: 120px;
				margin-left: 15px;
				color: white;
				font-weight: bold;
				float: right;
				font-size: 35px;
				line-height: 20px;
				cursor: pointer;
				transition: 0.3s;
			}

			.closebtn:hover {
				color: black;
			}			
			
			.filtro_column {
				width: 100%;
				box-sizing: border-box;
				border: 2px solid #ccc;
				border-radius: 4px;
				font-size: 16px;
				background-color: white;
				background-image: url('/npsmart/images/active-search-16.ico');
				background-position: 10px 10px;				
				background-repeat: no-repeat;
				padding: 12px 20px 12px 40px;
				-webkit-transition: width 0.4s ease-in-out;
				transition: width 0.4s ease-in-out;
			}			
		</style>
		<META HTTP-EQUIV="Pragma" CONTENT="no cache"/>
	</head>
</html>
