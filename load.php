<?php
include "dbConfig.php";
$temp= $_REQUEST['fac_name'];
$res= mysqli_query($conn,"SELECT L_count FROM fac_load WHERE faculty_name='$temp'") ;
if ($res->num_rows) {
	$row=$res->fetch_assoc();
   echo $row['L_count'];
}

?>