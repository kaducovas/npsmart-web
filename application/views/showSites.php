<?php

$q2 = ($_GET['q2']);
$q3 = ($_GET['q3']);

if($q2 != ""){
$uf_sites = $this->db->query("".$q2."");
}

if($q3 != ""){
$CreateCluster = $this->db->query("".$q3."");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<style>

		</style>
	</head>
	<body>
		<script id="showSites_js">
		
			select_sites.clearOptions();
			
			<?php
				for ($i = 0; $i < $uf_sites->num_rows(); $i++) {
					$row = $uf_sites->row_array($i);
						echo "select_sites.addOption({value:'".$row['node']."',text:'".$row['node']."'});";
				}	
			?>

		</script>
	</body>
</html>

