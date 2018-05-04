<script type="text/javascript" >
$(document).ready(function () {
    //override jQuery UI draggable
    $.extend($.ui.sortable.prototype, {
        _mouseInit: function () {
            var that = this;
            if (!this.options.mouseButton) {
                this.options.mouseButton = 1;
            }

            $.ui.mouse.prototype._mouseInit.apply(this, arguments);

            if (this.options.mouseButton === 3) {
                this.element.bind("contextmenu." + this.widgetName, function (event) {
                    if (true === $.data(event.target, that.widgetName + ".preventClickEvent")) {
                        $.removeData(event.target, that.widgetName + ".preventClickEvent");
                        event.stopImmediatePropagation();
                        return false;
                    }
                    event.preventDefault();
                    return false;
                });
            }

            this.started = false;
        },
        _mouseDown: function (event) {

            // we may have missed mouseup (out of window)
            (this._mouseStarted && this._mouseUp(event));

            this._mouseDownEvent = event;

            var that = this,
                btnIsLeft = (event.which === this.options.mouseButton),
                // event.target.nodeName works around a bug in IE 8 with
                // disabled inputs (#7620)
                elIsCancel = (typeof this.options.cancel === "string" && event.target.nodeName ? $(event.target).closest(this.options.cancel).length : false);
            if (!btnIsLeft || elIsCancel || !this._mouseCapture(event)) {
                return true;
            }

            this.mouseDelayMet = !this.options.delay;
            if (!this.mouseDelayMet) {
                this._mouseDelayTimer = setTimeout(function () {
                    that.mouseDelayMet = true;
                }, this.options.delay);
            }

            if (this._mouseDistanceMet(event) && this._mouseDelayMet(event)) {
                this._mouseStarted = (this._mouseStart(event) !== false);
                if (!this._mouseStarted) {
                    event.preventDefault();
                    return true;
                }
            }

            // Click event may never have fired (Gecko & Opera)
            if (true === $.data(event.target, this.widgetName + ".preventClickEvent")) {
                $.removeData(event.target, this.widgetName + ".preventClickEvent");
            }

            // these delegates are required to keep context
            this._mouseMoveDelegate = function (event) {
                return that._mouseMove(event);
            };
            this._mouseUpDelegate = function (event) {
                return that._mouseUp(event);
            };
            $(document)
                .bind("mousemove." + this.widgetName, this._mouseMoveDelegate)
                .bind("mouseup." + this.widgetName, this._mouseUpDelegate);

            event.preventDefault();

            mouseHandled = true;
            return true;
        }
    });

    $(".sortable1").sortable({
        mouseButton: 3
    });
	
});

$(document).ready( function () {
  $('#table_id').DataTable( {
    "bPaginate": true,
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

// //let's create arrays
	<?php 
	// foreach($ufs as $row){
		// echo $row->node;
	// }
#echo json_encode($ufs);
#echo join($ufs, ',');

?>
var reportagg = "<?php echo $reportagg; ?>";
var reportnetype = "<?php echo $reportnetype; ?>";
var reportkpi = "<?php echo $reportkpi; ?>";
var reportnename = "<?php echo $reportnename; ?>";
var reportdate = "<?php echo $reportdate; ?>";

 var uf = <?php echo json_encode($ufs); ?>;	
 var region = <?php echo json_encode($regional); ?>;	
 var cidades = <?php echo json_encode($cidades); ?>;	
 var clusters = <?php echo json_encode($clusters); ?>;	
 var enodebs = <?php echo json_encode($enodebs); ?>;	

// var chocolates = [
    // {display: "Dark chocolate", value: "dark-chocolate" },
    // {display: "Milk chocolate", value: "milk-chocolate" },
    // {display: "White chocolate", value: "white-chocolate" },
    // {display: "Gianduja chocolate", value: "gianduja-chocolate" }];

// //If parent option is changed
// $("#parent_selection").change(function() {
        // var parent = $(this).val(); //get option value from parent
       
        // switch(parent){ //using switch compare selected option and populate child
              // case 'ufs':
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
              case 'uf':
                list(uf);
                break;
              case 'region':
                list(region);
                break;             
              case 'cidades':
                list(cidades);
                break;
			case 'clusters':
                list(clusters);
                break;
			case 'enodebs':
                list(enodebs);
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
               
                <a class="navbar-brand" id="aTitleVersion" href="/npsmart/" style="width:170px;"><span id="aTitle">NPSmart</span>&nbsp; <span id="sVersion" style="font-size:12px; font-family:Calibri;">
                     v2.1</span></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <ul class="nav navbar-nav" id="mainMenu">
                     <li id="menuItemnqi" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Performance<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="menuItemnqi"><a href="/npsmart/lte/">Main KPIs</a></li>
                            <li class="menuItemnqi"><a href="#" onclick='selectreportname_lte(this)'>AMX NQI</a></li> 
                            <li class="menuItemnqi"><a href="/npsmart/lte/radar">AMX Radar</a></li>
							<li class="menuItemnqi"><a href="/npsmart/lte/kpis_anatel_weekly">Anatel KPIs</a></li>
                            <!--<li class="menuItemnqi"><a href="/npsmart/umts/feature_phase2">Feature Report</a></li>-->
                        </ul>
                    </li>

                    <li id="menuItemwaf" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Capacity<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
						<li class="disabled"><a href="#">eNodeB Capacity</a></li>

                        </ul>
					</li>	
  
                     <li id="menuItemwaf" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">RNP<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
						<li class="menuItemnqi"><a href="/npsmart/main_map/map_region_lte">Network Overview</a></li>
                              <li class="disabled"><a href="#">Cells Database</a></li>
                            <li class="menuItemnqi"><a href="/npsmart/lte/enodebcfg">eNodeB Configuration</a></li>  
                            <li class="menuItemnqi"><a href="/npsmart/umts/srancfg">Single-RAN Configuration</a></li> 
							<li class="menuItemnqi"><a href="/npsmart/umts/inventory">Inventory</a></li>							  
							<li class="disabled"><a href="#">GIS</a></li>
							<li class="menuItemnqi"><a href="/npsmart/umts/alarm">Alarm</a></li>							
                        </ul>
                    </li>	
  

                     <li id="menuItemwaf" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consistency Check<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                              <li class="menuItemnqi"><a href="/npsmart/lte/baseline_enodeb">Baseline eNodeB Audit</a></li>
							  <li class="menuItemnqi"><a href="/npsmart/lte/check_neighborhood">Neighbor Audit</a></li>
                        </ul>
                    </li>


					<li class="disabled"><a href="#">Cell Mapping</a></li>
				   
	
                <li id="menuItemwaf" class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings<span class="caret"></span></a>
                       <ul class="dropdown-menu" role="menu">
							<li class="menuItemnqi"><a href="/npsmart/lte/baseline_configuration">Baseline Configuration</a></li>
                            <li class="disabled"><a href="#">Counters</a></li>
							<li><a href="/npsmart/lte/process_monitoring">Database Process Monitoring</a></li>
                            <li class="disabled"><a href="#">KPIs Target</a></li>
                        </ul>
				</li>
                 
                
                      <li class="disabled"><a href="#">Log</a></li>
					  <li><a href="/npsmart/quickreport">Quick Report</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
	
	 <li class="dropdown" id="dateMenu1">
	 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">LTE<span class="glyphicon glyphicon-phone pull-left" style="margin-top:2px;margin-right:4px;"></span><span class="caret"></span></a>
		<ul class="dropdown-menu" role="menu">
                              <li id="menuItemwaf"><a href="/npsmart/main_map/map_region_gsm">GSM</a></li>
                              <li id="menuItemwaf"><a href="/npsmart/main_map/map_region_umts">UMTS</a></li>
                              <li id="menuItemwaf"><a href="/npsmart/main_map/map_region_lte">LTE</a></li>
         </ul>
     </li>
</ul>
            </div>
        </div>
    </nav>
