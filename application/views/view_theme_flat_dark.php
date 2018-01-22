<script type="text/javascript" id="Flat_Dark">
/**
 * Dark theme for Highcharts JS
 * @author Torstein Honsi
 */

// Load the fonts
Highcharts.createElement('link', {
   href: '//fonts.googleapis.com/css?family=Unica+One',
   rel: 'stylesheet',
   type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);

var chart_Flat_Dark = {
  "colors": ["#f1c40f", "#2ecc71", "#9b59b6", "#e74c3c", "#34495e", "#3498db", "#1abc9c", "#f39c12", "#d35400"],
  "chart": {
    "backgroundColor": "#34495e"
  },
  "xAxis": {
	"visible": true,  
    "gridLineDashStyle": "Dash",
    "gridLineWidth": 1,
    "gridLineColor": "#46627f",
    "lineColor": "#46627f",
    "minorGridLineColor": "#BDC3C7",
    "tickColor": "#46627f",
    "tickWidth": 1,
    "title": {
      "style": {
        "color": "#FFFFFF"
      }
    }
  },
  "yAxis": {
	"visible": true,  
    "gridLineDashStyle": "Dash",
    "gridLineColor": "#46627f",
    "lineColor": "#BDC3C7",
    "minorGridLineColor": "#BDC3C7",
    "tickColor": "#46627f",
    "tickWidth": 1,
    "title": {
      "style": {
        "color": "#FFFFFF"
      }
    }
  },
  "legendBackgroundColor": "rgba(0, 0, 0, 0.5)",
  "background2": "#505053",
  "dataLabelsColor": "#B0B0B3",
  "textColor": "#34495e",
  "contrastTextColor": "#F0F0F3",
  "maskColor": "rgba(255,255,255,0.3)",
  "title": {
    "style": {
      "color": "#FFFFFF"
    }
  },
  "subtitle": {
    "style": {
      "color": "#666666"
    }
  },
  "legend": {
    "itemStyle": {
      "color": "#C0C0C0"
    },
    "itemHoverStyle": {
      "color": "#C0C0C0"
    },
    "itemHiddenStyle": {
      "color": "#444444"
    }
  }
}

// Apply the theme
//Highcharts.setOptions(Highcharts.theme);
</script>