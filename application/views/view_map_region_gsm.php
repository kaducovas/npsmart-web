<div id="container" class="map_region"></div>
<div id="column" class="map_column"></div>
<div class="map_table">
	<table id="table_id" class="cell-border compact hover" border="1 solid black" cellspacing="0" width="100%">
		<?php
		echo "<thead>";
			echo "<tr>";
				
				echo "<th bgcolor='#363636'><font color='#FFFFFF'>NODE</font></th>";
				echo "<th bgcolor='#4F4F4F'><font color='#FFFFFF'>#UFs</font></th>";
				echo "<th bgcolor='#4F4F4F'><font color='#FFFFFF'>#BSCs</font></th>";
				echo "<th bgcolor='#4F4F4F'><font color='#FFFFFF'>#CITYs</font></th>";
				echo "<th bgcolor='#4F4F4F'><font color='#FFFFFF'>#BTSs</font></th>";
				echo "<th bgcolor='#4F4F4F'><font color='#FFFFFF'>#CELLs</font></th>";
			echo "</tr>";
		echo "</thead>";
		echo "<tbody>";

			foreach($no_elements as $row)
				{										
					echo "<tr>";		
					echo "<th bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$row->region."</font></th>";		
					
					echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$row->uf_no."</font></td>";
					echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$row->bsc_no."</font></td>";
					echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$row->cidade_no."</font></td>";
					echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$row->bts_no."</font></td>";
					echo "<td bgcolor='#FFFFFF'><font style='font-family: calibri; font-size:12pt'>".$row->cell_no."</font></td>";



					echo "</tr>";						
					
				}
			?>

	
		</tbody>
	</table>
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
		text: 'Huawei Region Division',	
		style: {
        fontSize: '25px'
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
            allAreas: false,
            joinBy: ['hc-a2', 'code'],
            dataLabels: {
                enabled: true,
                color: '#FFFFFF',
                style: {
                    fontWeight: 'bold'
                },
			format: '{point.code}'	
            },
            tooltip: {
                headerFormat: '',
                pointFormat: '{point.name}'
            }
        }
    },

   series: [{
        name: 'NE',
		color: '#0000CC',
        data: ['PI','CE','RN','PB','PE','AL'].map(function (code) {
            return { code: code };
        }),
    },{
        name: 'BA',
		color: '#161000',
        data: ['BA'].map(function (code) {
            return { code: code };
        }),
    },{
        name: 'CO',
		color: '#E21E00',
        data: ['AC','RO','MT','MS','GO','DF',
		'TO'].map(function (code) {
            return { code: code };
        }),
    },{
        name: 'MG',
		color: '#00B0F0',
        data: ['MG'].map(function (code) {
            return { code: code };
        }),
    },{
        name: 'ES',
		color: '#00B050',
        data: ['ES'].map(function (code) {
            return { code: code };
        }),
    },{
        name: 'PRSC',
		color: '#FFC000',
        data: ['PR','SC'].map(function (code) {
            return { code: code };
        }),
    }]
});
</script>
<?php 
	foreach($no_elements as $row){
		$region[] = $row->region;
		$uf_no[] = $row->uf_no;
		$bsc_no[] = $row->bsc_no;
		$cidade_no[] = $row->cidade_no;
		$bts_no[] = $row->bts_no;
		$cell_no[] = $row->cell_no;
		}	
		array_walk($region, create_function('&$str', '$str = "\"$str\"";'));
		?>
<script>
Highcharts.chart('column', {
    chart: {
		renderTo: 'column',
		backgroundColor: null,
        type: 'column',
    },
    title: {
        text: '<b># NETWORK ELEMENTS</b>'
    },
    tooltip: {
        enabled:false
    },
	credits: {
	   enabled: false
	},	
	xAxis: {
        categories: [<?php echo join($region, ',') ?>],
    },
	
	yAxis: [{
		title: {
							text: null
						},
					},
			{title: {
							text: null
						},
						opposite: true
					},],
	tooltip: {
							shared: true
							},
	plotOptions: {
        series: {
            groupPadding: 0,
			pointPadding:0.01
        }
    },
	
	exporting: { enabled: false },	
	
    series: [{
        name: '#UFs',
        data: [<?php echo join($uf_no, ',') ?>],
    }, {
        name: '#BSCs',
        data: [<?php echo join($bsc_no, ',') ?>],
    },{
        name: '#CITYs',
        data: [<?php echo join($cidade_no, ',') ?>],
    },{
        name: '#BTSs',
        data: [<?php echo join($bts_no, ',') ?>],
    },{
        name: '#CELLs',
		yAxis: 1,
        data: [<?php echo join($cell_no, ',') ?>],
    },]
});
</script>
</html>