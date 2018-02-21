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
<link rel="shortcut icon" href="http://freelogo2016cdn.b-cdn.net/wp-content/uploads/2016/12/huawei-logo.png">
<meta charset="utf-8">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	
<title>Worst Cells</title>
<script src="http://code.highcharts.com/highcharts.js"></script>

<style type="text/css">


#result {
	text-align: right;
	color: gray;
	min-height: 2em;
}
#table-sparkline {
	margin: 0 auto;
    border-collapse: collapse;
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
    border-bottom: 1px solid silver;
    height: 20px;
}

thead th {
    border-top: 2px solid gray;
    border-bottom: 2px solid gray;
	
}
.highcharts-tooltip>span {
	background: white;
	border: 1px solid silver;
	border-radius: 3px;
	box-shadow: 1px 1px 2px #888;
	padding: 8px;
}

</style>
<?php 
		foreach($wc as $row){
			$rnc = $row->rnc;
			$cellname[] = $row->cellname;
			$cellid[] = $row->cellid;
			$kpi_cell_rate[] = $row->kpi_cell_rate;
			$fails_cell[] = $row->fails_cell;
			$impact[] = $row->impact;
			$kpi_rnc_rate[] = $row->kpi_rnc_rate;
			$new_rnc_kpi[] = $row->new_rnc_kpi;
			$dates[] = $row->dates;
			$daily_kpi_cell_rate[] = $row->daily_kpi_cell_rate;
			$daily_fails_cell[] = $row->daily_fails_cell;
			$daily_impact[] = $row->daily_impact;
			
			#echo join($daily_fails_cell, ',') ;
		#$a ="oi";
		#echo ($row->kpi_cell_rate >= 98.5 ? "a" :"b" );
		#if ($row->kpi_cell_rate >= 98.5) {echo "a";}
		#else {
	#		echo "b";
#		}
		}
		array_walk($dates, create_function('&$str', '$str = "\"$str\"";')); //put quotes in datetime		

		#	array_walk($datetime, create_function('&$str', '$str = "\"$str\"";')); //put quotes in datetime
		//echo "RNC= ".$rnc.", cellname= ".$cellname.", cellid= ".$cellid."<br><br>";
		//echo join($datetime, ',');
		//echo "<br><br>";
		//echo join($acc_rrc, ',');
		#echo '<span size="4" color="#E0E0E3">'.$ne.'</span>';
		?>
<script>

$(function () {
    /**
     * Create a constructor for sparklines that takes some sensible defaults and merges in the individual
     * chart options. This function is also available from the jQuery plugin as $(element).highcharts('SparkLine').
     */
    Highcharts.SparkLine = function (options, callback) {
        var defaultOptions = {
            chart: {
                renderTo: (options.chart && options.chart.renderTo) || this,
                backgroundColor: null,
                borderWidth: 0,
                type: 'area',
                margin: [2, 0, 2, 0],
                width: 120,
                height: 20,
                style: {
                    overflow: 'visible'
                },
                skipClone: true
            },
            title: {
                text: ''
            },
            credits: {
                enabled: false
            },
            xAxis: {
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                },
                startOnTick: false,
                endOnTick: false,
                tickPositions: []
            },
            yAxis: {
				///max: 90,
                endOnTick: false,
                startOnTick: false,
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                },
                tickPositions: [0]
            },
            legend: {
                enabled: false
            },
            tooltip: {
                backgroundColor: null,
                borderWidth: 0,
                shadow: false,
                useHTML: true,
                hideDelay: 0,
                shared: true,
                padding: 0,
                positioner: function (w, h, point) {
                    return { x: point.plotX - w / 2, y: point.plotY - h};
                }
            },
            plotOptions: {
                series: {
                    animation: false,
                    lineWidth: 1,
                    shadow: false,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    marker: {
                        radius: 1,
                        states: {
                            hover: {
                                radius: 2
                            }
                        }
                    },
                    fillOpacity: 0.25
                },
                column: {
					color: "#910000",
                    negativeColor: '#910000',
                    borderColor: 'silver'
                }
            }
        };
        options = Highcharts.merge(defaultOptions, options);

        return new Highcharts.Chart(options, callback);
    };

    var start = +new Date(),
        $tds = $("td[data-sparkline]"),
        fullLen = $tds.length,
        n = 0;

    // Creating 153 sparkline charts is quite fast in modern browsers, but IE8 and mobile
    // can take some seconds, so we split the input into chunks and apply them in timeouts
    // in order avoid locking up the browser process and allow interaction.
    function doChunk() {
        var time = +new Date(),
            i,
            len = $tds.length,
            $td,
            stringdata,
            arr,
            data,
            chart;

        for (i = 0; i < len; i += 1) {
            $td = $($tds[i]);
            stringdata = $td.data('sparkline');
            arr = stringdata.split('; ');
            data = $.map(arr[0].split(', '), parseFloat);
            chart = {};

            if (arr[1]) {
                chart.type = arr[1];
            }
            $td.highcharts('SparkLine', {
                series: [{
                    data: data,
                    pointStart: 0
                }],
                tooltip: {
                    headerFormat: '<span style="font-size: 10px">' + $td.parent().find('th').html() + date[0]+', {point.x}:</span><br/>',
                    pointFormat: '<b>{point.y}</b>%'
                },
                chart: chart
            });

            n += 1;

            // If the process takes too much time, run a timeout to allow interaction with the browser
            if (new Date() - time > 500) {
                $tds.splice(0, i + 1);
                setTimeout(doChunk, 0);
                break;
            }

            // Print a feedback on the performance
            if (n === fullLen) {
                $('#result').html('Generated ' + fullLen + ' sparklines in ' + (new Date() - start) + ' ms');
            }
        }
    }
    doChunk();

});

</script> 

</head>