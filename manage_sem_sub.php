<?php
include "dbConfig.php";

if(isset($_POST['Submit']))
{ 
	$no=$_POST['no'];
	for($i=0;$i<$no;$i++)
   {
     $id=$_POST['id'.$i];		
	$name=$_POST['names'.$i];
	$sem=$_POST['sem'.$i];
echo $name,$lect;
   $res= mysqli_query($conn,"INSERT INTO semester_sub subject_id,subject_name,semester)VALUES('$id','$name','$sem')");
}
}
if(isset($_POST['update']))
{
	$id1=$_POST['I2'];
	$name1=$_POST['F2'];
	$sem1=$_POST['L2'];
   $res= mysqli_query($conn,"UPDATE semester_sub SET subject_id='$id1',semester_name='$name1',semester='$sem1'WHERE subject_id='$id1'");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="manage_sem_sub.css"></style>
	<script type="text/javascript" src="manage_sem_sub.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<button onclick="updateFn()">UPDATE</button>
<button onclick="addFn()">ADD</button>
<button onclick="removeFn()">REMOVE</button>
 <div id="sem_table">
<?php
$result = mysqli_query($conn,"SELECT * FROM semester_sub");
$r1 =$result->num_rows;
echo "<table border='1'>
<tr>
<th>Subject ID</th>
<th>Subject Name</th>
<th>Semester</th>
<th>Edit</th>
</tr>";
for($i=1;$i<=$r1;$i++)
{
 $row = mysqli_fetch_array($result);
 echo "<tr>"; 
 echo "<td>" . $row['subject_id'] . "</td>";
 echo "<td>" . $row['subject_name'] . "</td>";
 echo "<td>" . $row['semester'] . "</td>";
 echo "<td><button id=\"".$i ."\" onclick=s1(".$row['subject_id'].",'". $row['subject_name']."',". $row['semester'].")>edit</button></td><br>";
}
 
echo "</tr>";
echo "</table>";

?>
</div>
<div id="rem_table">
<?php

$result = mysqli_query($conn,"SELECT * FROM semester_sub");
$r1 =$result->num_rows;
echo "<table border='1'>
<tr>
<th>Semester ID</th>
<th>Faculty Name</th>
<th>Semester</th>
<th>Remove</th>
</tr>";
for($i=1;$i<=$r1;$i++)
{
 $row = mysqli_fetch_array($result);
 echo "<tr>"; 
 echo "<td>" . $row['subject_id'] . "</td>";
 echo "<td>" . $row['semester_name'] . "</td>";
 echo "<td>" . $row['semester'] . "</td>";
 echo "<td><button id=\"".$i ."\" onclick=rSemSub(".$row['subject_id'].")>remove</button></td><br>";}
echo "</tr>";
echo "</table>";
?>
</div>
<div id="text_box"><!--table for updation-->
	<form action="" method="POST">
 Subject ID<input type="text" name="I2" id="sid"><br><br>
 Subject Name: <input type="text" name="F2" id="sname"><br><br>
 Semester: <input type="text" name="L2" id="sem"><br><br>
<input type="submit" name="update" value="UPDATE">
</form>
</div>
<div id="add">
	<form>
		Enter numbers of subjects to add :<input type="text" name="" id="textsub"><br><br>
		<button onclick="addSub()">add</button>
	</form>
</div>
</body>
</html>