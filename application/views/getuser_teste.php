<?php

$q1 = ($_GET['q1']);

$uf_query = $this->db->query("".$q1."");	

?>

<!DOCTYPE html>
<html>
	<head>
		<style>

		</style>
	</head>
	<body>
		<script id="showUF_js">
		
		select_uf.clearOptions();
		
		<?php
			for ($i = 0; $i < $uf_query->num_rows(); $i++) {
				$row = $uf_query->row_array($i);
					echo "select_uf.addOption({value:'".$row['uf']."',text:'".$row['uf']."'});";
			}	
		?>
		</script>
	</body>
</html>

