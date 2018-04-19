<?php
include "dbConfig.php";
$temp= $_REQUEST['name'];
//$temp1= $_REQUEST['sn'];
//$temp2= $_REQUEST['ival'];
//echo  $temp .$temp1 .$temp2;
$res= mysqli_query($conn,"SELECT L_count FROM fac_load WHERE faculty_name='$temp'") ;
if ($res->num_rows) {
	$row=$res->fetch_assoc();
}
  if ($row['L_count']<3) {
		
   $res= mysqli_query($conn,"UPDATE fac_load SET L_count=L_count+1 WHERE faculty_name = '$temp' ") ;

  	}

?>