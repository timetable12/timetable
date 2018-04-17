<?php
include "dbConfig.php";
$temp = $_GET['name'];
$res= mysqli_query($conn,"DELETE FROM fac_load WHERE fac_id='$temp'") ;

?>