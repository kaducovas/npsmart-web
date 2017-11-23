function onBaselineCheckClick()
{
//oi
	var networkType = "3G"; // get from interface later
	var cluster = $('select[name=cluster]').val(); //"DF_RNCs"; // get from interface later
	var baselineRule = $('select[name=baselineRules]').val(); 
	
//	if ($('#gbox_list2')) $('#gbox_list2').replaceWith("<table id='list2'></table>" );
	
	$('#BLChart').html("<img src='/npsmart/images/loading.gif'>");
	
	$.getJSON('/npsmart/baseline/baselineF/networktype/' + networkType + '/rule/' + baselineRule.substr(1) + '/cluster/' + cluster, function (csv) {

	
		var v_xAxis=[];
		var v_yAxis=[];
		var i;
		
		for (i=0;i<csv.rows.length;i++)
		{
			
			v_xAxis.push(csv.rows[i].mo);
			v_yAxis.push(parseFloat(csv.rows[i].percentage));
		}
		
		
        $('#BLChart').highcharts({
        chart: {
            type: 'column',
			plotBackgroundColor: '#DBEEF4',
			backgroundColor: '#DBEEF4'
        },
        title: {
            text: 'Baseline'
        },
        subtitle: {
            text: cluster//'Discrepancies'
        },
        xAxis: {
            categories: v_xAxis,
            crosshair: true
        },
        yAxis: {
            min: 0,
			max: 100,
            title: {
                text: '%'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
		color: '#FF9848',
        series: [{
            name: 'Discrepancies',
            data: v_yAxis,
			color: '#FF9848'
        }]
    });

	
	
	
	
		 
	 // steps: generate hidden table with MO/percentage to be used for highchart
 
 
	var v_spaces = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

	var v_numRows;
	var v_bloodyTable="var data = [";
	
	
	v_numRows = csv.rows.length -1;
	
	for (i=1; i<=v_numRows; i++) {
		v_bloodyTable += "[";
		
		v_bloodyTable += '"' + csv.rows[i].mo  + '",';
		v_bloodyTable += '"' + csv.rows[i].num_param  + '",';
		v_bloodyTable += '"' + csv.rows[i].discrepancy  + '",';
		v_bloodyTable += '"' + csv.rows[i].percentage  + '"';
		
		v_bloodyTable +="]";
		
		if (i!=v_numRows) v_bloodyTable += ",";
	}
	
	v_bloodyTable +="]";
	
 
	eval(v_bloodyTable);
	
	v_HTMLTable='<table id="cfg" class="cell-border hover stripe" border="1 solid black" cellspacing="0" width="100%">'+
'<thead><tr><th bgcolor="#3b5998"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">MO</font></th><th bgcolor="#3b5998"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">num_param</font></th><th bgcolor="#3b5998"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">discrepancy</font></th><th bgcolor="#3b5998"><font color="#FFFFFF" style="font-family: calibri; font-size:12pt">percentage</font></th></tr>'+
'</thead><tfoot><tr><th>MO</th><th>num_param</th><th>discrepancy</th><th>percentage</th></tr></tfoot></table>';
	
	$('#tableBL').html(v_HTMLTable);

	$('#cfg').DataTable( {
    data: data
	} );
	
	$("div.logFileName").html("<a target=_blank href=/npsmart/output/" + csv.userdata + ">Download results</a>");

});
	
	

} 

function updateControls()
{
	//get list of Clusters and templates
	var $select = $('select[name=cluster]');
	$select.find('option').remove(); 

	$.each(regional, function(ind, val) {
		if (val.node!="") $('<option>').val(val.node).text(val.node).appendTo($select);
	});
	$.each(rncs, function(ind, val) {
		if (val.node!="") $('<option>').val(val.node).text(val.node).appendTo($select);
	}
	);
	
//	$.ajax({
//  url: '../index.php/baseline/clusters3G',
//  type: 'GET',
//  data: '',
//  success: function(dataStr) {
//	var data=dataStr.split(",");
//	var $select = $('select[name=cluster]');
//	$select.find('option').remove();       
//$.each(data, function(ind, val) {
//	if (val!="") $('<option>').val(val).text(val).appendTo($select);
//	}
// );
//
//},
//  error: function(e) {
//	//called when there is an error
//	//console.log(e.message);
//  }
//});
	
	
// Get Baseline rules

	$.ajax({
  //url: '../index.php/baseline/rules3G',
  url: '/npsmart/baseline/rules3G',
  type: 'GET',
  data: '',
  success: function(jsonStr) {
	 
	 eval('var dataStr = ' + jsonStr); // {k1:'UCELLDRD Rule',k2:'HSPA Users Check',k3:'RESELECTION'}
    var $select = $('select[name=baselineRules]');
	$select.find('option').remove();
	
	 $.each(dataStr, function (key, value) {
            $('<option>').val(key).text(value).appendTo($select);
        });
},
  error: function(e) {
	//called when there is an error
	//console.log(e.message);
  }
});
	
}
