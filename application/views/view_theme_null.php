<script type="text/javascript" id="Empty">
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

var chart_null = {
  "chart": {
    "backgroundColor": "transparent",
	"plotBorderColor": "transparent"
  },
  "plotOptions": {
    "line": {
      "marker": {
        "enabled": false
      }
    }
  },
  "legend": {
    "enabled": true,
    "align": "right",
    "verticalAlign": "bottom"
  },
  "credits": {
    "enabled": false
  },
  "xAxis": {
    "visible": false
  },
  "yAxis": {
    "visible": false
  },
  "title": {
      "style": {
         "color": "#444444"
    }
  },  "legend": {
    "itemStyle": {
      "color": "#444444"
    },
    "itemHoverStyle": {
      "color": "gray"
    },
    "itemHiddenStyle": {
      "color": "#C0C0C0"
    }
  }
}

// Apply the theme
//Highcharts.setOptions(Highcharts.theme);
</script>