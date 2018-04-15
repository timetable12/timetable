<?php

//$myArray = $_POST['kArray'];
//  echo $myArray;
include "dbConfig.php";

if(isset($_POST['submit']))
{ 
	$no=$_POST['no'];
	for($i=0;$i<$no;$i++)
   {		
	$name=$_POST['names'.$i];
	$lect=$_POST['lectures'.$i];
    $res1= mysqli_query($conn,"INSERT INTO fac_load(fac_id,faculty_name,L_count)VALUES('','$name','$lect')");
  }
 }

 ?>