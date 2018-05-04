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
	// foreach($BSCs as $row){
		// echo $row->node;
	// }
#echo json_encode($BSCs);

// foreach($custom as $row){
		// $custom_cluster[] = $row->node;
		// }	


?>
	
// var chocolates = [
    // {display: "Dark chocolate", value: "dark-chocolate" },
    // {display: "Milk chocolate", value: "milk-chocolate" },
    // {display: "White chocolate", value: "white-chocolate" },
    // {display: "Gianduja chocolate", value: "gianduja-chocolate" }];

// //If parent option is changed
// $("#parent_selection").change(function() {
        // var parent = $(this).val(); //get option value from parent
       
        // switch(parent){ //using switch compare selected option and populate child
              // case 'BSCs':
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
              case 'bsc':
                list(bsc);
                break;
              case 'region':
                list(region);
                break;             
              case 'bts':
                list(bts);
                break;
              case 'uf':
                list(uf);
                break;	
              case 'cidade':
                list(cidade);
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
<div id="txtHint2"></div>	
<?php
 $attributes = array('name' => 'reportopt', 'method' => 'post');
echo form_open('', $attributes);
?>
<!--<input type="hidden" id="reportname" name="reportname" value="" />-->
<input type="hidden" id="reportnetype" name="reportnetype" value="" />
<input type="hidden" id="reportnename" name="reportnename" value="" />
<input type="hidden" id="reportdate" name="reportdate" value="" />
<input type="hidden" id="reportyear" name="reportyear" value="" />
<input type="hidden" id="reportweek" name="reportweek" value="" />
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
                     <li id="menuItemnqi" class="disabled">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Performance<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <!--<li id="menuItemnqi"><a onclick='selecttimeagg(this)'>Commercial Hour Report</a></li>-->
                            <li class="menuItemnqi"><a href="/npsmart/gsm/">Main KPIs</a></li>
							<li id="menuItemwaf"><a href="/npsmart/gsm/kpis_anatel_weekly">KPIs Anatel</a></li>
                            <!--<li class="menuItemnqi"><a onclick='selectreportname(this)'>AMX NQI HS</a></li>
                            <li class="menuItemnqi"><a onclick='selectreportname(this)'>AMX NQI CS</a></li>
                            <li class="menuItemnqi"><a href="/npsmart/umts/tx_integrity">TX Integrity</a></li>
                            <li class="menuItemnqi"><a href="/npsmart/umts/overshooters">Overshooters</a></li>
                            <!--<li class="menuItemnqi"><a href="/npsmart/umts/feature_phase2">Feature Report</a></li>-
                            <li class="menuItemnqi"><a href="/npsmart/umts/radar">AMX Radar</a></li>-->
                        </ul>
                    </li>

                    <li id="menuItemwaf" class="disabled">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Capacity<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
						<li class="menuItemnqi"><a href="/npsmart/gsm/bsc_capacity">BSC Capacity</a></li>
                        </ul>
					</li>	
						
                    <li id="menuItemwaf" class="disabled">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">RNP<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
						<li class="menuItemnqi"><a href="/npsmart/main_map/map_region_gsm">Network Overview</a></li>
							<li class="menuItemnqi"><a href="/npsmart/umts/alarm">Alarm</a></li>
                        </ul>
                    </li>	

                    <li class="disabled" id="menuItemwaf" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consistency Check<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="disabled"><a href="#">Baseline Cell & BSC Audit</a></li>
							<li class="disabled"><a href="/npsmart/umts/check_neighborhood">Neighbor Audit</a></li>
                        </ul>
                    </li>
					
					<li class="disabled"><a href="#">Cell Mapping</a></li>
					
					<li class="disabled" id="menuItemwaf" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="disabled"><a href="/npsmart/umts/baseline_configuration">Baseline Configuration</a></li>
							<li class="disabled"><a href="#">Counters</a></li>
							<li><a href="/npsmart/gsm/process_monitoring">Database Process Monitoring</a></li>
							<li class="disabled"><a href="#">KPIs Target</a></li>
                        </ul>
					</li>
                
                    <li class="disabled" href="/npsmart/welcome"><a href="#">Log</a></li>
					<li class="disabled"><a href="/npsmart/quickreport">Quick Report</a></li>
					
					<li id="menuItemwaf" class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Auto Reports<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li id="ppt_cto" onmouseover="mostrar_cto()" onmouseout="esconder_cto()"><a href="#">Claro - CTO Meeting Presentation <span class="glyphicon glyphicon-chevron-down"></span></a>
								<ul>
									<li id="2018-16" class="cto" style="display:none;font-size: 18px;" onclick="gerar_ppt(this)"><a href="#">Week 16 (2018)</a></li>
									<li id="2018-17" class="cto" style="display:none;font-size: 18px;" onclick="gerar_ppt(this)"><a href="#">Week 17 (2018)</a></li>
								</ul>
							</li>
						</ul>
					</li>					
                </ul>
            </div>
        </div>
    </nav>
	<img id="loading_ppt" src="/npsmart/images/Loading_Red.gif" style="position:absolute; top: 40%; left: 45%; display: none; z-index: 999;"></img>
	<p id="creting_ppt"	style="font-family: 'Do Hyeon', sans-serif; font-size: 45px; color: black; font-weight: bold;position:absolute; top: 65%; left: 30%; display: none; z-index: 999;"></p>	
</body>