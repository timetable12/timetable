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
for ($i=1; $i<6; $i++) { 
	$subject = $_POST['s'.$i];
	$faculty= $_POST['f'.$i];
    $sql = "UPDATE facsub_1 SET faculty_name= '$faculty', subject_name= '$subject' WHERE id= '$i'";
    $result = mysqli_query($conn,$sql);

}
}
?>
</body>
</html>