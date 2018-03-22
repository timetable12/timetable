<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <?php
include "dbConfig.php";

  if(isset($_POST['submit']))
  {
for ($i=1; $i < 6; $i++) { 


    $sql = "INSERT INTO subfac (subject, faculty)
    VALUES ('".$_POST["s"+$i]."','".$_POST["f"+$i]."')";

    $result = mysqli_query($conn,$sql);
}
}
?>






</body>
</html>