<script src="https://cdn.datatables.net/fixedcolumns/3.2.3/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript" >
	
$(document).ready( function () {
	
	$('#table_id tfoot th').each( function (i) {
        var title = $('#table_id thead th').eq( $(this).index() ).text();
        $(this).html( '<input type="text" placeholder="'+title+'" data-index="'+i+'" />' );
    } );
	
  var table = $('#table_id').removeAttr('width').DataTable ( {
	scrollY:        "500px",
    scrollX:        true,
	scrollCollapse: true,
	fixedColumns: true,
	"bPaginate": true,
	"aaSorting": [],
	"bInfo": false,
	"pageLength": 50,
	dom: 'Bfrtip',
        buttons: [
			{
                text: "<b>CELL INFO<b>",
				action: function ( e, dt, node, config ) {
				for (k=1; k<11; k++) {
                dt.column(k).visible( ! dt.column(k).visible() );
				}
				},
            },
            {
                text: "<b>KPI<b>",
				action: function ( e, dt, node, config ) {
				for (k=11; k<24; k++) {
                dt.column(k).visible( ! dt.column(k).visible() );
				}
				},
            },
            {
                text: "<b>OMR<b>",
				action: function ( e, dt, node, config ) {
				for (k=25; k<28; k++) {
                dt.column(k).visible( ! dt.column(k).visible() );
                }
				}
            },
            {
                text: "<b>TX/OMR<b>",
				action: function ( e, dt, node, config ) {
				for (k=29; k<41; k++) {
                dt.column(k).visible( ! dt.column(k).visible() );
                }
				}
            },
			{
                text: "<b>OTM<b>",
				action: function ( e, dt, node, config ) {
				for (k=42; k<50; k++) {
                dt.column(k).visible( ! dt.column(k).visible() );
                }
				}
            },
            {
                text: "<b>CAPACITY<b>",
				action: function ( e, dt, node, config ) {
				for (k=51; k<61; k++) {
                dt.column(k).visible( ! dt.column(k).visible() );
                }
				}
            },
            {
                text: "<b>PLAN/ENG RF<b>",
				action: function ( e, dt, node, config ) {
				for (k=62; k<67; k++) {
                dt.column(k).visible( ! dt.column(k).visible() );
                }
				}
            },
            {
                text: "<b>IMP<b>",
				action: function ( e, dt, node, config ) {
				for (k=68; k<90; k++) {
                dt.column(k).visible( ! dt.column(k).visible() );
                }
				}
            },
            {
                text: "<b>AREA/STATUS<b>",
				action: function ( e, dt, node, config ) {
				for (k=91; k<101; k++) {
                dt.column(k).visible( ! dt.column(k).visible() );
                }
				}
            },
            {
                text: "<b>ACTION PLAN<b>",
				action: function ( e, dt, node, config ) {
				for (k=102; k<111; k++) {
                dt.column(k).visible( ! dt.column(k).visible() );
                }
				}
            },

			],
		 columnDefs: [
		 { width: 150, targets: [0,3,4,102]},
		 { width: 100, targets: [5,6,29,30,31,32,33,34,35,36,37,38,39,48,49,51,52,53,54,55,56,57,58,59,60,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89]},
		 { width: 30, targets: [24,28,41,50,61,67,90,91,92,93,94,95,96,97,98,99] },
		 { width: 50, targets: [1,2,7,8,9,10,101,111,42,43,44,45,47]},
		 { width: 40, targets: [11,12,13,14,15,16,17,18,19,20,21,22,23,25,63,64] },
		 //{ width: 350, targets: [26,27,40,66,62]},
		 //{ width: 350, targets: [46,65,110]},
		 //{ width: 550, targets: [100,103,104,105,106,107,108,109]},
		 {
                targets: [
11,12,13,14,15,16,17,18,19,20,21,22,23,
25,26,27,
29,30,31,32,33,34,35,36,37,38,39,40,
42,43,44,45,46,47,48,49,
51,52,53,54,55,56,57,58,59,60,
62,63,64,65,66,
68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,
91,92,93,94,95,96,97,98,99,100,
102,103,104,105,106,107,108,109,110],
                visible: false
            }
        ]
  } );
  
$( table.table().container() ).on( 'keyup', 'tfoot input', function () {
        table
            .column( $(this).data('index') )
            .search( this.value )
            .draw();
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

// //let's create arrays
	<?php 
	// foreach($rncs as $row){
		// echo $row->node;
	// }
#echo json_encode($rncs);

// foreach($custom as $row){
		// $custom_cluster[] = $row->node;
		// }	


?>
var reportagg = "<?php echo $reportagg; ?>";
var reportnetype = "<?php echo $reportnetype; ?>";
var reportcell = "<?php echo $reportcell; ?>";
var reportkpi = "<?php echo $reportkpi; ?>";
var reportnename = "<?php echo $reportnename; ?>";
var reportdate = "<?php echo $reportdate; ?>";
var rnc = <?php echo json_encode($rncs); ?>;	
var region = <?php echo json_encode($regional); ?>;	
var cidade = <?php echo json_encode($cidades); ?>;	
var cluster = <?php echo json_encode($clusters); ?>;	
//var cell = <?php #echo json_encode($cells); ?>;	
var nodeb = <?php echo json_encode($nodebs); ?>;	
var uf = <?php echo json_encode($ufs); ?>;	
var custom = <?php echo json_encode($custom); ?>;	

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
	
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
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
<?php
 $attributes = array('name' => 'reportopt', 'method' => 'post');
echo form_open('', $attributes);
?>
<!--<input type="hidden" id="reportname" name="reportname" value="" />-->
<input type="hidden" id="reportnetype" name="reportnetype" value="" />
<input type="hidden" id="reportnename" name="reportnename" value="" />
<input type="hidden" id="reportdate" name="reportdate" value="" />
<input type="hidden" id="reportkpi" name="kpi" value="" />
<input type="hidden" id="reportcell" name="reportcell" value="" />
</form>


<?php 
if (isset($monthnum)){
	$calendarinfo = $monthnum;
}
elseif (isset($weeknum)){
	$calendarinfo = "Week ".$weeknum;
} else{
	$calendarinfo = $reportdate;
}

#echo count($cells);
		// foreach($cells as $row){
			// $cellinfo[$row->cellname] = $row->cellid;
			// $rnc[] = $row->rnc;
			// $cellid[] =  $row->cellid;
			// $cellname[] = $row->cellname;
			// $site[] = $row->site;
			// $regional[] = $row->regional;
			// $uf[] = $row->uf;	
			// $cluster[] = $row->cluster;
			// $cidade[] = $row->cidade;
			
		// }
		// $rncunique = $array = array_values(array_filter(array_unique($rnc)));;
		// $clusterunique = $array = array_values(array_filter(array_unique($cluster)));;
		// $cidadeunique = $array = array_values(array_filter(array_unique($cidade)));;
		?>


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
							<li class="menuItemnqi"><a href="/npsmart/umts/gis">GIS</a></li>	
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
                </ul>

                <ul class="nav navbar-nav navbar-right">
	
	 <li class="dropdown" id="dateMenu1">
	 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">UMTS<span class="glyphicon glyphicon-phone pull-left" style="margin-top:2px;margin-right:4px;"></span><span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
                              <li class="disabled"><a href="#">GSM</a></li>
                              <li id="menuItemwaf"><a href="/npsmart/umts/">UMTS</a></li>
                              <li class="disabled"><a href="#">LTE</a></li>
         </ul>
     </li>

	 	 	 <li class="dropdown" id="dateMenu1">
	 <a style="text-transform: capitalize" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $reportagg ?> <span class="glyphicon glyphicon-calendar pull-left" style="margin-top:2px;margin-right:4px;"></span><span id="caretOptions1" class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
                              <li class="disabled"><a onclick='#'>Daily</a></li>
                              <li id="menuItemnqi"><a onclick='selecttimeagg(this)'>Weekly</a></li>
                              <li class="disabled"><a onclick='#'>Monthly</a></li>
         </ul>
     </li>
 
    <li class="dropdown" id="dateMenu1">
        <a href="#" id="daterange" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span id="spDate"><?php echo $calendarinfo;?></span> <span class="glyphicon glyphicon-calendar pull-left" style="margin-top:2px;margin-right:4px;"></span><span id="caretOptions1" class="caret"></span></a>
        <div class="week-picker" id="calendarDiv" style="position:absolute;z-index:10"></div>
    </li>

                    <li class="dropdown" id="optionsMenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span id="spOptions"><?php echo $reportnename;?></span> <span class="glyphicon glyphicon-th-list pull-left" style="margin-top:2px;margin-right:4px;"></span><span id="caretOptions" class="caret"></span></a>
                        <div class="dropdown-menu" style="padding:12px;margin-bottom:0px;padding-bottom:0px;">
                            <form class="form" id="formOptions">
                                     
    


   <!--   <div class="form-group">
        <label class="control-label" for="inputSmall">Network Node</label>
	<select name="parent_selection" id="parent_selection">
    <option value="">-- Please Select --</option>
    <option value="regional">Region</option>
    <option value="rncs">RNC</option>
    <option value="cidades">City</option>
    <option value="clusters">Cluster</option>
</select>
<select name="child_selection" id="child_selection">
</select>
</div>-->

<div class="form-group">
Network Node : <select name="parent_selection" id="parent_selection" style="width:200px;">
    <option value="">-- Please Select --</option>
    <option value="region">Region</option>
    <option value="rnc">RNC</option>
    <option value="uf">UF</option>
    <option value="cidade">City</option>
    <option value="cluster">Cluster</option>
	<!--<option value="custom">Custom Cluster</option>-->
    <option value="nodeb">NodeB</option>
    <!--<option value="cluster">Cluster</option>-->
</select>
<div id="Filtro">

<span id="SearchIcon"><i class="fa fa-search" style="font-size:15px;color:gray"></i></span>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names ..." title="Type in a name">

</div>
<select name="child_selection" id="child_selection" style="width:200px;">
</select>
</div>
	
      <!--<div class="form-group">
        <label class="control-label" for="inputSmall">Network Node</label>
		<select id="selectne" class="form-control" style="max-width:200px;">
			<option value="book">Network</option>
			<option value="article">node</option>
			<option value="three">City</option>
			<option value="four">Cluster</option>
			<option value="four">RNC</option>
		</select>
        <select class="form-control input-sm" Id="networkNodeSelector" style="max-width:200px;"></select>
      </div>-->

     <a href="#" id="btnSubmit" class="btn btn-default btn-sm" onclick='selectnenav_triage($("#child_selection").val(),$("#parent_selection").val())';>Update</a>
     <div class="form-group">
      </div>

                            </form>
                        </div>
                    </li>
<!--                    <li id="liAmdocsLogo"><img src="/npsmart/images/huawei-logo.png" width="130" height="30"" style="margin-top:5px;margin-right:-8px;padding-left:4px;" /></li>-->
                </ul>
            </div>
        </div>
    </nav>
