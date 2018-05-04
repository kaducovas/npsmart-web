<script type="text/javascript">
//var reportnename = <?php echo $reportnename;?>
//var node = 'CO';
var reportnename = "<?php echo $reportnename; ?>";
var reportdate = "<?php echo $reportdate; ?>";
jQuery(window).load(function () {
    document.getElementById("loading").style.display = "none";
	document.getElementById("loading_table").style.visibility = "visible";
});
</script>

<div id="loading" style="display:block">
    <p style="text-align:center;"><img src="/npsmart/images/loading_preto.gif" style="width:300px; height:300px;" alt="Loading" /></p>
</div>
<div id="loading_table" align="center" style="visibility:hidden">
<?php 
if ($reportnetype == 'enodebs') {
echo "<div id='acc' style='min-width: 80%; max-width: 80%; height: 500px; margin: 0 auto'></div>";
}
?>
</div>
</body>
</html>