<?php
include "dbConfig.php";

if(isset($_POST['Submit']))
{ 
	$no=$_POST['no'];
	for($i=0;$i<$no;$i++)
   {		
	$name1=$_POST['names'.$i];
	$lect1=$_POST['lectures'.$i];
    $res= mysqli_query($conn,"INSERT INTO fac_load VALUES('','$name1','$lect1-')");

}
}
if(isset($_POST['update']))
{
	$id=$_POST['I1'];
	$name=$_POST['F1'];
	$lect=$_POST['L1'];
    $res= mysqli_query($conn,"UPDATE fac_load SET faculty_name='$name',L_count='$lect'WHERE fac_id='$id'");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
   <link rel="stylesheet" type="text/css" href="managefac.css"></style>
  <script type="text/javascript" src="managefac.js"></script>
 </head>
<body>
<button onclick="updateFn()">UPDATE</button>
<button onclick="addFn()">ADD</button>
<button onclick="removeFn()">REMOVE</button>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
	
</script>  
 <div id="fac_table">
<?php
$result = mysqli_query($conn,"SELECT * FROM fac_load");
$r1 =$result->num_rows;
echo "<table border='1'>
<tr>
<th>Faculty ID</th>
<th>Faculty Name</th>
<th>Lectures Allocated</th>
<th>Edit</th>
</tr>";
for($i=1;$i<=$r1;$i++)
{
 $row = mysqli_fetch_array($result);
 echo "<tr>"; 
 echo "<td>" . $row['fac_id'] . "</td>";
 echo "<td>" . $row['faculty_name'] . "</td>";
 echo "<td>" . $row['L_count'] . "</td>";
 echo "<td><button id=\"".$i ."\" onclick=f1(".$row['fac_id'].",'". $row['faculty_name']."',". $row['L_count'].")>edit</button></td><br>";
}
 
echo "</tr>";
echo "</table>";

?>

<script type="text/javascript">

	

</script>


</div>
<div id="rem_table">
<?php

$result = mysqli_query($conn,"SELECT * FROM fac_load");
$r1 =$result->num_rows;
echo "<table border='1'>
<tr>
<th>Faculty ID</th>
<th>Faculty Name</th>
<th>Lectures Allocated</th>
<th>Remove</th>
</tr>";
for($i=1;$i<=$r1;$i++)
{
 $row = mysqli_fetch_array($result);
 echo "<tr>"; 
 echo "<td>" . $row['fac_id'] . "</td>";
 echo "<td>" . $row['faculty_name'] . "</td>";
 echo "<td>" . $row['L_count'] . "</td>";
 echo "<td><button id=\"".$i ."\" onclick=r1(".$row['fac_id'].")>remove</button></td><br>";
}
echo "</tr>";
echo "</table>";
?>
</div>
<div id="text_box"><!--table for updation-->
	<form action="" method="POST">
 <input type="text" name="I1" id="id" hidden><br><br>
Faculty Name: <input type="text" name="F1" id="name"><br><br>
No. of Lectures: <input type="text" name="L1" id="lect"><br><br>
<input type="submit" name="update" value="UPDATE">
</form>
</div>
<div id="add">
	<form>
		Enter numbers of faculties to added :<input type="text" name="" id="textfac"><br><br>
		<button onclick="addFac()">add</button>
	</form>
</div>
</body>
</html>