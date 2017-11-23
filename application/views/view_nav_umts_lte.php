<script type="text/javascript" >
	
$(document).ready( function () {
  $('#table_id').DataTable( {
    "bPaginate": false,
	"aaSorting": [],
	"bInfo": false
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
#echo join($rncs, ',');

?>
 //var reportagg = "<?php #echo $reportagg; ?>";
 //var reportnetype = "<?php #echo $reportnetype; ?>";
 //var rncs = <?php #echo json_encode($rncs); ?>;	
 //var regional = <?php #echo json_encode($regional); ?>;	
 //var cidades = <?php #echo json_encode($cidades); ?>;	
 //var clusters = <?php #echo json_encode($clusters); ?>;		
 var mos = <?php echo json_encode($mos); ?>;
	
$(document).ready(function(){

//populate MOs

    $(mos).each(function (i) { //populate child options
        $("#mo_selection").append("<option value=\""+mos[i].mo+"\">"+mos[i].mo+"</option>");
    });



//If parent option is changed
$("#parent_selection").change(function() {
        var parent = $(this).val(); //get option value from parent
       
        switch(parent){ //using switch compare selected option and populate child
              case 'rncs':
                list(rncs);
                break;
              case 'regional':
                list(regional);
                break;             
              case 'cidades':
                list(cidades);
                break;
			case 'clusters':
                list(clusters);
                break;				
            default: //default child option is blank
                $("#child_selection").html('');  
                break;
           }
});

//function to populate child select box
function list(array_list)
{
    $("#child_selection").html(""); //reset child options
    $(array_list).each(function (i) { //populate child options
        $("#child_selection").append("<option value=\""+array_list[i].node+"\">"+array_list[i].node+"</option>");
    });
}

});	
	
</script>
	
 </head>
<body>
<?php 
if (isset($weeknum)){
	$calendarinfo = "Week ".$weeknum;
} else{
	$calendarinfo = $reportdate;
}


 $attributes = array('name' => 'reportcfg', 'method' => 'post');
echo form_open('', $attributes);
?>

<input type="hidden" id="reportmo" name="reportmo" value="" />
</form>


       <nav class="navbar navbar-custom">
        <div class="container-fluid">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle collapsed" id="toggleButton" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://support.huawei.com"><img src="/npsmart/images/huawei_logo_icon.png" style="padding:0px; top:0px; width:30px; height:30px;"/></a>
               
               <a class="navbar-brand" id="aTitleVersion" href="/npsmart/umts/" style="width:170px;"><span id="aTitle">NPSmart</span>&nbsp; <span id="sVersion" style="font-size:12px; font-family:Calibri;">
                     v2.1</span></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                              <li class="disabled"><a href="#">GSM</a></li>
							  <li id="menuItemwaf"><a href="/npsmart/umts/">UMTS</a></li>
							  <li id="menuItemwaf"><a href="/npsmart/lte/">LTE</a></li>
							  
            </ul>
            </div>
        </div>
    </nav>
