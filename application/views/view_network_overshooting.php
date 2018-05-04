<script language=javascript src="/npsmart/lib/js/jqplot/jquery.jqplot.js"></script>
<script type="text/javascript" src="/npsmart/lib/js/jqplot/jqplot.barRenderer.js"></script>
 
<script type="text/javascript" src="/npsmart/lib/js/jqplot/jqplot.categoryAxisRenderer.js"></script>
 
<link rel="stylesheet" type="text/css" href="/npsmart/lib/js/jqplot/jquery.jqplot.css" />
    
<script type="text/javascript" >
	
$(document).ready( function () {
  $('#table_id').DataTable( {
    "bPaginate": true,
	processing: true,
	"aaSorting": [],
	"bInfo": false,
	"pageLength": 15
  } );
} );






$(function() {	
	$('#weekdate').datepicker()
  .on('changeDate', function(date){
	var date = $(this).val();
	var week = $.datepicker.iso8601Week(date);
	alert(week);
	    });
  });

// var chocolates = [
    // {display: "Dark chocolate", value: "dark-chocolate" },
    // {display: "Milk chocolate", value: "milk-chocolate" },
    // {display: "White chocolate", value: "white-chocolate" },
    // {display: "Gianduja chocolate", value: "gianduja-chocolate" }];

// //If parent option is changed
// $("#parent_selection").change(function() {
        // var parent = $(this).val(); //get option value from parent
       
        // switch(parent){ //using switch compare selected option and populate child
              // case 'rncs':
                // list(chocolates);
                // break;
              // case 'regional':
                // list(regional);
                // break;             
              // case 'cidades':
                // list(cidades);
                // break;
			  // case 'cluster':
                // list(cluster);
                // break;	
            // default: //default child option is blank
                // $("#child_selection").html('');  
                // break;
           // }
// });

// //function to populate child select box
// function list(array_list)
// {
	// alert("ola");
    // $("#child_selection").html(""); //reset child options
    // $(array_list).each(function (i) { //populate child options
        // $("#child_selection").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
    // });
// }	
	
$(document).ready(function(){

//If parent option is changed
$("#parent_selection").change(function() {
        var parent = $(this).val(); //get option value from parent
       
        switch(parent){ //using switch compare selected option and populate child
              case 'rnc':
                list(rnc);
                break;
              case 'region':
                list(region);
                break;             
              case 'cidade':
                list(cidade);
                break;
              case 'uf':
                list(uf);
                break;
              case 'nodeb':
                list(nodeb);
                break;				
			case 'cluster':
                list(cluster);
                break;
			case 'custom':
                list(custom);
                break;					
            default: //default child option is blank
                $("#child_selection").html('');  
                break;
           }
		    $(function() {
  $('#child_selection').filterByText($('#myInput'));
});
});

//function to populate child select box
function list(array_list)
{
    $("#child_selection").html(""); //reset child options
    $(array_list).each(function (i) { //populate child options
        $("#child_selection").append("<option value=\""+array_list[i].node+"\">"+array_list[i].node+"</option>");
    });
}

//jQuery extension method:
jQuery.fn.filterByText = function(textbox) {
  return this.each(function() {
    var select = this;
    var options = [];
    $(select).find('option').each(function() {
      options.push({
        value: $(this).val(),
        text: $(this).text()
      });
    });
    $(select).data('options', options);

    $(textbox).bind('change keyup', function() {
      var options = $(select).empty().data('options');
      var search = $.trim($(this).val());
      var regex = new RegExp(search, "gi");

      $.each(options, function(i) {
        var option = options[i];
        if (option.text.match(regex) !== null) {
          $(select).append(
            $('<option>').text(option.text).val(option.value)
          );
        }
      });
    });
  });
};



});
	
	
function downloadCSV(p_week)
{
var v_region=$('#regcsv').val();
var v_tech='<?php echo $tech; ?>';
$.post("overshcsv",
		{
			week: p_week,
			region: v_region,
			tech: v_tech
		},
		function(data, status){
			//alert(data);
		 window.location = "/npsmart/output/" + $.trim(data);
		//	$('#linkD').val('<a href=/npsmart/output/'+$.trim(data)+'>'+$.trim(data)+'</a>');
		});
	
}
 
</script>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style>
 
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    white-space: nowrap;
}
th, td {
    padding: 3px;
    text-align: left;
    white-space: nowrap;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
table#t02 tr:nth-child(even) {
    background-color: #eee;
}
table#t02 tr:nth-child(odd) {
   background-color:#fff;
}
table#t02 th {
    background-color: black;
    color: white;
}
</style>


<style>
#Filtro {
  width: 200px;
  font-size: 16px;
  padding: 5px 5px 6px 5px;
  border: 1px solid #ddd;
  margin-bottom: 5px;
  margin-top: 5px;
}

#myInput{
border: 1px solid transparent;
margin-left: 10px;
width:120px;
}

#myInput:focus{
outline:none;
}

</style>


</head>
<body>


  <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle collapsed" id="toggleButton" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://support.huawei.com"><img src="/npsmart/images/huawei_logo_icon.png" style="padding:0px; top:0px; width:30px; margin-top:-15%; height:30px;"/></a>
               
                <a class="navbar-brand" id="aTitleVersion" href="/npsmart/umts/" style="width:170px;"><span id="aTitle">NPSmart</span>&nbsp; <span id="sVersion" style="font-size:12px; font-family:Calibri;">
                     v2.1</span></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <ul class="nav navbar-nav" id="mainMenu">
                     <li id="menuItemnqi" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Performance<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="menuItemnqi"><a href="/npsmart/umts/">Main KPIs</a></li>
                            <li class="menuItemnqi"><a onclick='selectreportname(this)'>AMX NQI HS</a></li>
                            <li class="menuItemnqi"><a onclick='selectreportname(this)'>AMX NQI CS</a></li>
                            <li class="menuItemnqi"><a href="/npsmart/umts/tx_integrity">TX Integrity</a></li>
                            <li class="menuItemnqi"><a href="/npsmart/umts/overshooters">Overshooters</a></li>
                            <!--<li class="menuItemnqi"><a href="/npsmart/umts/feature_phase2">Feature Report</a></li>-->
                            <li class="menuItemnqi"><a href="/npsmart/umts/radar">AMX Radar</a></li>
							<li class="menuItemnqi"><a href="/npsmart/umts/unbalance">EE/Load Unbalance</a></li>
                        </ul>
                    </li>

                    <li id="menuItemwaf" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Capacity<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
						<li class="menuItemnqi"><a href="/npsmart/umts/capacity">Cell & NodeB Capacity</a></li>
						<li class="menuItemnqi"><a href="/npsmart/umts/rnc_capacity">RNC Capacity</a></li>
                        </ul>
						</li>	
  
                    <li id="menuItemwaf" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">RNP<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="menuItemnqi"><a href="/npsmart/umts/rfpar">Cells Database</a></li>
                            <li><a href="/npsmart/umts/cfg">RNC & Cell Configuration</a></li>
                            <li class="menuItemnqi"><a href="/npsmart/umts/nodebcfg">NodeB Configuration</a></li>  
                            <li class="menuItemnqi"><a href="/npsmart/umts/srancfg">Single-RAN Configuration</a></li>  
							<li class="menuItemnqi"><a href="/npsmart/umts/inventory">Inventory</a></li>							  
							<!--<li class="menuItemnqi"><a href="/npsmart/umts/gis">GIS</a></li>-->
							<li class="disabled"><a href="#">GIS</a></li>
							<li class="menuItemnqi"><a href="/npsmart/umts/alarm">Alarm</a></li>	
                        </ul>
                    </li>	

                    <li id="menuItemwaf" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Baseline<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
							<li class="menuItemnqi"><a href="/npsmart/umts/baseline_nodeb">Baseline NodeB Audit</a></li>
                            <li class="menuItemnqi"><a href="/npsmart/umts/baseline">Baseline Cell & RNC Audit</a></li>
                        </ul>
                    </li>
					
					<li class="menuItemnqi"><a href="/npsmart/umts/triage">Cell Mapping</a></li>
					
					<!--<li class="disabled"><a href="#">Degradation Summary</a></li>-->
					<li id="menuItemwaf" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="disabled"><a href="#">Counters</a></li>
							<li class="disabled"><a href="#">KPIs Target</a></li>
                        </ul>
					</li>
                
                    <li class="disabled"><a href="#">Log</a></li>
					<li><a href="/npsmart/quickreport">Quick Report</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
	
                </ul>
            </div>
        </div>
    </nav>
	
	

 <form name="frmOv" id="frmOv" method="post" action="cellov/overshcsv">
 
    
    <div id=container style=' background-color:#ccc'>
</div>

<div id="linkD"></div>

<br>
Download data for <select id="regcsv" name="regcsv">
<option value=ALL>ALL</option>
<option value=NE>NE</option>
<option value=CO>CO</option>
<option value=PRSC>PRSC</option>
<option value=BASE>BASE</option>
<option value=ES>ES</option>
<option value=MG>MG</option>
</select>
</form>
:<br>
<ul>
<li><a href=# onclick="downloadCSV(<?php echo $last4weeks[0]; ?>)">Week <?php echo $last4weeks[0]?></a></li>
<li><a href=# onclick="downloadCSV(<?php echo $last4weeks[1]; ?>)">Week <?php echo $last4weeks[1]?></a></li>
<li><a href=# onclick="downloadCSV(<?php echo $last4weeks[2]; ?>)">Week <?php echo $last4weeks[2]?></a></li>
<li><a href=# onclick="downloadCSV(<?php echo $last4weeks[3]; ?>)">Week <?php echo $last4weeks[3]?></a></li>
</ul>
    <script language = javascript>
    
$(document).ready(function(){


Highcharts.chart('container', {

    chart: {
		backgroundColor: '#f2f2f2',
        type: 'column'
    },

    title: {
        text: 'Cell Mapping - Overshooters <?php echo strtoupper($tech)."; Weeks: ".$last4weeks[3].", ".$last4weeks[2].", ".$last4weeks[1].", ".$last4weeks[0]." " ?> '
    },

    xAxis: {
        categories: ['<?php echo join('\',\'', $regions); ?>']
    },

    yAxis: {
        allowDecimals: true,
        min: 0,
        title: {
            text: '%'
        }
    },

    tooltip: {
        formatter: function () {
            return '<b>' + this.x + '</b><br/>' +
                this.series.name + ': ' + this.y + '<br/>' +
                'Total: ' + this.point.stackTotal;
        }
    },
//style: 'text-outline:none; fontSize:5px; font-weight: bold'
    plotOptions: {
        column: {
            stacking: 'normal',
			dataLabels: {
                enabled: true,
				color: '#000000'
				
            },
			borderColor: 'black'
        }
    },

    <?php echo join(chr(13), $seriesCode); ?>
});

     
    });
    
    
    
    </script>
    
    
</body>
</html>
