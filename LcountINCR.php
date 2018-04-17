<?php
include "dbConfig.php";
$temp= $_REQUEST['name'];
$res= mysqli_query($conn,"UPDATE fac_load SET L_count=L_count+1 WHERE faculty_name = '$temp' ") ;
?>