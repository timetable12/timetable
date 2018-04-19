<?php
include "dbConfig.php";
//$temp = $_POST['del'];
 $temp = $_GET['del'];
$query = "DELETE FROM semester_sub WHERE subject_id=".$temp;
 mysqli_query($conn,$query);

?>