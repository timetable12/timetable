<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<?php
include "dbConfig.php";
 $table =$_GET['table'];
 $query = "CREATE TABLE " .$table ."(id INT(5) AUTO_INCREMENT PRIMARY KEY,subject_name VARCHAR(30) NOT NULL,faculty_name VARCHAR(30) NOT NULL)";   
$result= mysqli_query($conn,$query);

?>
<form action="welcome.php?table='.$table.'" method="POST">
Subject: <input type="text" name="s1">
Faculty: <input type="text" name="f1"><br><br>
Subject: <input type="text" name="s2">
Faculty: <input type="text" name="f2"><br><br>
Subject: <input type="text" name="s3">
Faculty: <input type="text" name="f3"><br><br>
Subject: <input type="text" name="s4">
Faculty: <input type="text" name="f4"><br><br>
Subject: <input type="text" name="s5">
Faculty: <input type="text" name="f5"><br><br>
<input type="submit" name="submit">
</form>


 
</body>
</html>