<?php

$q1 = ($_GET['q1']);
$e = ($_GET['e']);

if($q1 != ""){
$kpi_query_cells = $this->db->query("".$q1."");

}

?>

<!DOCTYPE html>
<html>
<head>
<style>


</style>
</head>
<body>
</body>
<script type="text/javascript" id="runscript_cells_lte">
<?php
    for ($i = 0; $i < $kpi_query_cells->num_rows(); $i++) {
	$row = $kpi_query_cells->row_array($i);
	echo 'var list = document.getElementById("myUL_LTE");';
	echo 'var radioInput = document.createElement("input");';
	echo 'radioInput.setAttribute("type", "radio");';
	echo 'radioInput.setAttribute("name", "radio_elementos");';
	echo 'radioInput.setAttribute("class", "radiozinho");';
	echo 'radioInput.style.margin = "0px 0px 0px 50px";';
    echo 'var btn = document.createElement("li");';
	echo 'btn.setAttribute("id", "'.$row['cellid'].'");';
	echo 'btn.setAttribute("class", "CellsItems");';
	echo 'btn.setAttribute("onclick", "printclick_elementos_LTE_Cells(this)");';
    // echo 'var t = document.createTextNode("'.$row['cell'].'");';
	echo 'var a = document.createElement("a");';
	echo 'a.style.color = "red";';
	echo 'a.setAttribute("href", "javascript:void(0)");';
	echo 'var span = document.createElement("span");';
	echo 'span.style.margin = "0px 0px 0px 10px";';
	// echo 't.style.margin = "0px 0px 0px 50px";';
	// echo 'btn.style.color = "red";';
	echo 'list.appendChild(btn);';
	echo 'btn.appendChild(a);';
	echo 'a.appendChild(radioInput);';
	echo 'a.appendChild(span);';
    echo 'span.innerHTML = "'.$row['cell'].'";';
	echo '$(btn).insertAfter( "#'.$e.'" );';
    }
?>	
</script>
<script type="text/javascript" id="runscript_cells_umts">
<?php
    for ($i = 0; $i < $kpi_query_cells->num_rows(); $i++) {
	$row = $kpi_query_cells->row_array($i);
	echo 'var list = document.getElementById("myUL_UMTS");';
	echo 'var radioInput = document.createElement("input");';
	echo 'radioInput.setAttribute("type", "radio");';
	echo 'radioInput.setAttribute("name", "radio_elementos");';
	echo 'radioInput.setAttribute("class", "radiozinho");';
	echo 'radioInput.style.margin = "0px 0px 0px 50px";';
    echo 'var btn = document.createElement("li");';
	echo 'btn.setAttribute("id", "'.$row['cellid'].'");';
	echo 'btn.setAttribute("value", "'.$row['rnc'].'");';
	echo 'btn.setAttribute("class", "CellsItems");';
	echo 'btn.setAttribute("onclick", "printclick_elementos_UMTS_Cells(this)");';
    // echo 'var t = document.createTextNode("'.$row['cell'].'");';
	echo 'var a = document.createElement("a");';
	echo 'a.style.color = "red";';
	echo 'a.setAttribute("href", "javascript:void(0)");';
	echo 'var span = document.createElement("span");';
	echo 'span.style.margin = "0px 0px 0px 10px";';
	// echo 't.style.margin = "0px 0px 0px 50px";';
	// echo 'btn.style.color = "red";';
	echo 'list.appendChild(btn);';
	echo 'btn.appendChild(a);';
	echo 'a.appendChild(radioInput);';
	echo 'a.appendChild(span);';
    echo 'span.innerHTML = "'.$row['cell'].'";';
	echo '$(btn).insertAfter( "#'.$e.'" );';
    }
?>	
</script>
<script type="text/javascript" id="runscript_cells_GSM">
<?php
    for ($i = 0; $i < $kpi_query_cells->num_rows(); $i++) {
	$row = $kpi_query_cells->row_array($i);
	echo 'var list = document.getElementById("myUL_GSM");';
	echo 'var radioInput = document.createElement("input");';
	echo 'radioInput.setAttribute("type", "radio");';
	echo 'radioInput.setAttribute("name", "radio_elementos");';
	echo 'radioInput.setAttribute("class", "radiozinho");';
	echo 'radioInput.style.margin = "0px 0px 0px 50px";';
    echo 'var btn = document.createElement("li");';
	echo 'btn.setAttribute("id", "'.$row['cellid'].'");';
	echo 'btn.setAttribute("value", "'.$row['bsc'].'");';
	echo 'btn.setAttribute("class", "CellsItems");';
	echo 'btn.setAttribute("onclick", "printclick_elementos_GSM_Cells(this)");';
    // echo 'var t = document.createTextNode("'.$row['cell'].'");';
	echo 'var a = document.createElement("a");';
	echo 'a.style.color = "red";';
	echo 'a.setAttribute("href", "javascript:void(0)");';
	echo 'var span = document.createElement("span");';
	echo 'span.style.margin = "0px 0px 0px 10px";';
	// echo 't.style.margin = "0px 0px 0px 50px";';
	// echo 'btn.style.color = "red";';
	echo 'list.appendChild(btn);';
	echo 'btn.appendChild(a);';
	echo 'a.appendChild(radioInput);';
	echo 'a.appendChild(span);';
    echo 'span.innerHTML = "'.$row['cellname'].'";';
	echo '$(btn).insertAfter( "#'.$e.'" );';
    }
?>	
</script>
</html>