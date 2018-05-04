<script language=javascript src="/npsmart/lib/js/jqplot/jquery.jqplot.js"></script>
<script type="text/javascript" src="/npsmart/lib/js/jqplot/jqplot.barRenderer.js"></script>
 
<script type="text/javascript" src="/npsmart/lib/js/jqplot/jqplot.categoryAxisRenderer.js"></script>
 
<link rel="stylesheet" type="text/css" href="/npsmart/lib/js/jqplot/jquery.jqplot.css" />
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
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
	
	
	
function runKeyPress(e) {
    if (e.which == 13 || e.keyCode == 13) {
		e.preventDefault();
        var tb = document.getElementById("txtCellName");
		var v_partName=tb.value;
		
		$.post("cellov/completeName",
		{
			partialname: v_partName,
			tech: "3G"
		},
		function(data, status){
			document.getElementById("txtCellName").value=$.trim(data);
			if ($.trim(data).toUpperCase()==v_partName.toUpperCase()) 
			{
				//name was alread ok, so just call form submit
				//$.post( "cellov", { txtCellName: v_partName, tech: "3G" } );
				$('#txtCellName').val(v_partName.toUpperCase());
				$('form#frmCellov').submit();
			}
		});
		
	
    }
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
	
	


 <form name="frmCellov" id="frmCellov" method="post" action="sran">
	
<!--<input type=text id='txtCellName' name='txtCellName' value='<?php echo $cellname.",".$cellname2; ?>' onkeypress="return runKeyPress(event)">	 -->


 <div class="ui-widget">
    <label style="color: #DD0000" for="cell">Cells Old style/SRAN: </label>
    <input id="cell" name='cell'  value='<?php echo $cellname; ?>'>
    <input id="cell2" name='cell2'  value='<?php echo $cellname2; ?>'>
	<select id="resno" name="resno">
	<option value=15<?php if ($resno==15) echo " selected";?>>15 last days</option>
	<option value=20<?php if ($resno==20) echo " selected";?>>20 last days</option>
	<option value=25<?php if ($resno==25) echo " selected";?>>25 last days</option>
	<option value=30<?php if ($resno==30) echo " selected";?>>30 last days</option>
	<option value=60<?php if ($resno==60) echo " selected";?>>60 last days</option>
	</select> <br>
	<input type=checkbox id=showweekend name=showweekend value=showweekend<?php if ($showweekend) echo " checked"?> > Weekends 
	<input type=checkbox id=usenearest name=usenearest value=usenearest<?php if ($usenearest) echo " checked"?> > Nearest instead of Grid 
	<input type=checkbox id=showpd85 name=showpd85 value=showpd85<?php if ($showpd85) echo " checked"?> > Plot PD_85 instead Over/Under Dist<br>
	<p><input type=submit value="Update"><br><br>
</div> 
 
 
    <div>




    </div>
    
    <div id=chart1></div><br /><br />
    <div id=chart2 style="text-align:left;"></div>
	
	<br><br>
	SRAN swap happened <b><?php echo $sran_happened; ?></b><br><br>
	    <table   id='t01'><tr><td><b>Cell</b></td><td><b>Dateday</b></td><td><b>PD85</b></td><td><b>Grid / Nearest</b></td><td><b>Oversh. Distance</b></td><td><b>Sites in Coverage</b></td><td><b>X1</b></td><td><b>X2</b></td><td><b>X3</b></td><td><b>X4</b></td><td><b>X5</b></td><td><b>RF Shaping Rate(%) (AVG X1..X5)</b></td></tr>
		<?php echo implode(chr(13), $tableHTML); ?>
		</table><br><br>

<div style='visibility:hidden; height:1px;'>
<table  style='width:400px; font-size:	15px;' id='t02'><tr><td width=200><b>Cell: UGOGNA22B</b></td><td width=150><b>Before</td><td width=150><b>After</b></td><td width=150><b>Difference</b></td></tr>
<tr><td>Date</td><td>2017-09-27</td><td>2017-10-20</td><td>23 days</td></tr>
<tr><td>RET</td><td></td><td></td><td></td></tr>
<tr><td>is Overshooter</td><td>YES</td><td>YES</td><td></td></tr>
<tr><td>RF Shaping Rate, %</td><td>80.5</td><td>78.53</td><td><font color=red>-1.97</font></td></tr>
<tr><td>Overshooting Distance, m</td><td>292.66</td><td>380.94</td><td><font color=red>88.28</font></td></tr>
<tr><td>PD85, m</td><td>3001.31</td><td>3089.59</td><td><font color=green>88.28</font></td></tr>
<tr><td>Grid, m</td><td>2708.65</td><td>2708.65</td><td><font color=black></font></td></tr>
<tr><td>Avg DL Users</td><td>13</td><td>13</td><td><font color=green>0</font></td></tr>
</table><br><br>
</div>
    </form>
    
    <script language = javascript>
    
$(document).ready(function(){
        var s1 = [<?php echo join(',', $s1); ?>];
        var s2 = [<?php echo join(',', $s2); ?>];
        var s_throughput = [<?php echo join(',', $throughput); ?>];
        var s_ee = [<?php echo join(',', $ee); ?>];
        var ticks = ['<?php echo join('\',\'', $ticks); ?>'];
        var ticks2 = ['<?php echo join('\',\'', $ticks2); ?>'];
        var legend1 =  ["Over/Under Distance", "RF Shaping Rate"];
        var legend2 =  ["DL Througput", "Erlang Equivalent"];
 
		v_tech='<?php echo $tech; ?>';
		
		<?php if ($showpd85) echo "legend1 =  ['PD_85, m', 'RF Shaping Rate'];"?>
 
 
        plot7 = $.jqplot('chart1', 
                         [s1, s2], 
                         {
                            title:'RFSR, <?php echo $cellname.",".$cellname2; ?>',
                            seriesColors: ['#C7754C','#00BB00'],
                            series:[{renderer:$.jqplot.BarRenderer, 
                                     rendererOptions: {
                                        fillToZero: false, 
                                        varyBarColor: true, 
                                        barPadding: 15,
                                        barMargin: 5
                                     },
                                     seriesColors: ['<?php echo join('\',\'', $colors); ?>']
                                    }, 
                                    {xaxis:'xaxis', yaxis:'y2axis'}],
                            axesDefaults: {
                                tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
                                tickOptions: {
                                    angle: -30,
                                    fontSize: '10pt'
                                }
                            },
                            axes: {
                                yaxis: {
                                    min: 0
                                },
                                xaxis: {
                                    renderer: $.jqplot.CategoryAxisRenderer,
                                    ticks: ticks
                                },
                                y2axis: {
                                    autoscale:true,
                                    tickOptions:{
                                        showGridline: false
                                    }, 
                                max: 100, 
                                min: 0
                            }
                         },
                         legend: {
                            show: true,
                            labels: legend1,
                            color: ['#AAAAAA','#BBBBBB'],
                            location: 'nw',
                            placement: 'inside'
                        }
            });
        
        
      if (v_tech=='3g') {
        plot8 = $.jqplot('chart2', [ s_throughput, s_ee], {
            title:'SHO Radar vs HSDPA Users, <?php echo $cellname.",".$cellname2; ?>',
            series:[{renderer:$.jqplot.BarRenderer, 
                     rendererOptions: {
                       barPadding: 15,
                       breakOnNull:true,
                       barMargin: 5}
                    }, 
            { xaxis:'xaxis', yaxis:'y2axis'}],
            axesDefaults: {
                 tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
                 breakOnNull:true,
                 tickOptions: {
                 angle: -30,
                 fontSize: '10pt'
              }
             },
            axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks2
                },
                yaxis: {
                    autoscale:false,
       min: <?php echo $minRadar; ?>,
       max: <?php echo $maxRadar; ?> 
                } ,
       y2axis: {
        autoscale:true,
        tickOptions:{
          showGridline: false
       } 
      }
            },
      legend: {
      show: true,
      labels: legend2,
      location: 'nw',
      placement: 'inside'
  }
        });
    
	  } // end if 3g    
		
//autocomplete
$( "#cell" ).autocomplete({
        source: function(request, response) {
            $.getJSON(
                location.href.substring(0, location.href.indexOf("cellov")+6)+ "/completeTerm",
                { term:request.term, tech:'3G'}, 
                response
            );
        },
        minLength: 5,
        select: function(event, ui){
            //On select action
        }
    });
	
$( "#cell2" ).autocomplete({
        source: function(request, response) {
            $.getJSON(
                location.href.substring(0, location.href.indexOf("cellov")+6)+ "/completeTerm",
                { term:request.term, tech:'3G'}, 
                response
            );
        },
        minLength: 5,
        select: function(event, ui){
            //On select action
        }
    });

    });
    
    
    
    </script>
    
    
</body>
</html>
