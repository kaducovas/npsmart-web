<script>
/**
 * (c) 2010-2017 Torstein Honsi
 *
 * License: www.highcharts.com/license
 * 
 * Grid-light theme for Highcharts JS
 * @author Torstein Honsi
 */

//'use strict';
//import Highcharts from '../parts/Globals.js';
/* global document */
// Load the fonts
Highcharts.createElement('link', {
   href: 'https://fonts.googleapis.com/css?family=Dosis:400,600',
   rel: 'stylesheet',
   type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);

Highcharts.theme = {
colors: ['#8F8F8F', '#7A30A0', '#F4E1E1', '#0070C0', '#FFC000', '#C00000', '#002060',
'#00B050', '#DF5353', '#7798BF', '#aaeeee'],
};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);
</script>