<?php
$q1 = ($_GET['q1']);

if($q1 != ""){
$new_query = $this->db->query("".$q1."");
}

?>
