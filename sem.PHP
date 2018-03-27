<!DOCTYPE html>
<html>
<head>
	<title></title>

	
</head>
<body>
	
	<?php
  include "dbConfig.php";
    $i=$_GET['id'];
	  $table ='facsub_'.$i;
    echo $table;
    $result =mysqli_query($conn,"CREATE TABLE" .$table."(id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,subject_name VARCHAR(30) NOT NULL,faculty_name VARCHAR(30) NOT NULL)");
    if($result) {
        echo "Table exists";
        echo "<br><br><a href=\"n1.php?table=".$table."\"><button>update</button></a>";
   }

   else {
    echo "Table does not exist";
  
#create  table 
    $query = "CREATE TABLE " .$table ."(id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,subject_name VARCHAR(30) NOT NULL,faculty_name VARCHAR(30) NOT NULL)";
#insert query is used then
      $result= mysqli_query($conn,$query);
     if($result)
     {
      echo "Table Createrd";
     }
     else
      echo "<br>table not created";
    }
 ?>
 

</body>
</html>