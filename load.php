<?php
include "dbConfig.php";
$temp= $_REQUEST['fac_name'];
$res= mysqli_query($conn,"SELECT L_count FROM fac_load WHERE faculty_name='$temp'") ;
if ($res->num_rows) {
	$row=$res->fetch_assoc();
	if ($row['L_count']>3) {
		echo "Lectures can't be allocated";
	}
   
    else
    	echo "Lectures Allocated : " . $row['L_count'];
}
?>