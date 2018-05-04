<!--
<div id="container" class="radar_content"></div>
<div class="radar_table">
<table align="center">
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><a style= 'color:black' href="/npsmart/lte/"><p><button><font size="6">LTE</font></b></button></p></a></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><a style= 'color:black' href="/npsmart/umts/"><p><button><font size="6">UMTS</font></b></button></p></a></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td><a style= 'color:black' href="/npsmart/gsm/"><p><button><font size="6">GSM</font></b></button></p></a></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr> 
</table>
</div>
-->


<div id="container" class="radar_info"></div>
<div id="pie" class="radar_content"></div>
<br>
<br>
<div class="radar_table">
<!--<table align="center">
<tr><td><a style= 'color:black' href="/npsmart/lte/"><p><button><font size="5">LTE</font></b></button></p></a></td>
<td><a style= 'color:black' href="/npsmart/umts/"><p><button><font size="5">UMTS</font></b></button></p></a></td>
<td><a style= 'color:black' href="/npsmart/gsm/"><p><button><font size="5">GSM</font></b></button></p></a></td></tr>
</table>-->
</div>
</body>

<script>

// Instantiate the map
Highcharts.mapChart('container', {
    chart: {
		renderTo: 'container',
        map: 'countries/br/br-all',
        spacingBottom: 20,
		backgroundColor: null,
    },

	title: {
		text: 'Vendor Area',	
		style: {
        fontSize: '30px'
      }
	},

    legend: {
        enabled: true
    },
	credits: {
	   enabled: false
	},		
mapNavigation: {
            enabled: true
        },
    plotOptions: {
        map: {
		enableMouseTracking: true,
            allAreas: false,
            joinBy: ['hc-a2', 'code'],
            tooltip: {
                headerFormat: '',
                pointFormat: '{point.name}: {series.name}'
            }
        }
    },

    series: [{
        name: 'HUAWEI',
		color: '#C00000',
        data: ['MG','AC','RO','MT','MS','PR','SC','GO','DF',
		'TO','BA','ES','PI','CE','RN','PB','PE','AL'].map(function (code) {
            return { code: code };
        }),
                dataLabels: {
                enabled: true,
                color: '#FFFFFF',
                style: {
                    fontWeight: 'bold'
                },
			format: '{point.code}',	
			},}, {
        name: 'NSN',
		//visible:false,
		color: '#BFBFBF',
        data: ['AM','RR','AP','PA','MA','SE'].map(function (code) {
                return { code: code };
            }),
	            dataLabels: {
                enabled: true,
                color: '#000000',
                style: {
                    fontWeight: 'bold'
                },
			format: '{point.code}',	
			},
    }, {
        name: 'ERICSSON',
		//visible:false,
		color: '#008BBD',
        data: ['SP','RJ','RS'].map(function (code) {
            return { code: code };
        }),
		            dataLabels: {
                enabled: true,
                color: '#000000',
                style: {
                    fontWeight: 'bold'
                },
			format: '{point.code}',	
			},
    }]
});
</script>

<script>
Highcharts.chart('pie', {
    chart: {
		renderTo: 'pie',
		backgroundColor: null,
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'States - Vendor Distribution'
    },
    tooltip: {
        enabled:false
    },
	credits: {
	   enabled: false
	},	
	
	exporting: { enabled: false },	
	
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name} <b>{point.percentage}%</b>'
            }
        }
    },
    series: [{
        type: 'pie',
		slicedOffset:30,
        data: [
            {
                name: 'Huawei',
                y: 67,
                sliced: true,
                selected: true,
				color: '#C00000'
            },
            {name:'NSN', 
			y:22,
			color: '#BFBFBF'
			},
			{name:'Ericsson', 
			y:11,
			color: '#008BBD'
			},
        ]
    }]
});
</script>
</html>