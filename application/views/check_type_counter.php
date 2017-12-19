<?php
$qa = ($_GET['qa']);

if($qa != ""){
$counter_aux = $this->db->query("".$qa."");	
}


	

?>
<script type="text/javascript" id="tipo_de_contador">
<?php 
if ($counter_aux->num_rows() > 0){
echo 'type_of_counter = "rnc";';
echo 'lcorci = "cellid";';
}else {
echo 'type_of_counter = "nodeb";';
echo 'lcorci = "locell";';	
}	
?>
</script>