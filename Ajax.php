<?php
include "dbConfig.php";
//$temp = $_GET['d'];
$temp = $_POST['d'];
//$res= mysqli_query($conn,"DELETE FROM fac_load WHERE fac_id='$temp'") ;
 $query = "DELETE FROM fac_load WHERE fac_id=".$temp;
 mysqli_query($conn,$query);



?>