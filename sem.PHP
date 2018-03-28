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
    $result =mysqli_query($conn,"SELECT * FROM $table");
    if($result) {
        echo "Table exists";
        echo "<br><br><a href=\"n1.php?table=".$table."\"><button>update</button></a>";
   }

   else {
    echo "Table does not exist";
     echo "<br><br><a href=\"table_create.php?table=".$table."\"><button>create</button>";
     
      $result= mysqli_query($conn,$query);

  }  
 ?>
 </body>
</html>