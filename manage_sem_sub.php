<?php
include "dbConfig.php";

if(isset($_POST['Submit']))
{ 
	$no=$_POST['no'];
	for($i=0;$i<$no;$i++)
   {		
	$name=$_POST['names'.$i];
	$lect=$_POST['lectures'.$i];
echo $name,$lect;
   $res= mysqli_query($conn,"INSERT INTO fac_load(faculty_name,L_count)VALUES('$name','$lect')");
}
}
if(isset($_POST['update']))
{
	$id=$_POST['I1'];
	$name=$_POST['F1'];
	$lect=$_POST['L1'];
   $res= mysqli_query($conn,"UPDATE semester_sub SET subject_id='$id',semester_name='$name',semester='$lect' 
   	WHERE subject_id='$id'");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#sem_table,#text_box,#add,#rem_table{
		display :none;	
		}
	</style>
</head>
<body>
<button onclick="updateFn()">UPDATE</button>
<button onclick="addFn()">ADD</button>
<button onclick="removeFn()">REMOVE</button>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
	function updateFn(){
		document.getElementById("sem_table").style.display ="inline";
	    }
   function addFn(){
		document.getElementById("add").style.display ="inline";
	 }
    function addFac(){
	  var n =document.getElementById("textfac").value;
	   document.write('<form action="" method="POST"><table><tr><th>Faculty Name</th><th>Lectures Allocated</th></tr>');
	   	document.write('<input type="text" name="no" value="'+n+'" hidden>');
       for(var i=0;i<n;i++)
         { 
           document.write('<td ><input type="text" name ="names'+i+'"></td>');
           document.write('<td ><input type="text" name ="lectures'+i+'"></td></tr>');
         }
        document.write('</table><br><input type="submit" value ="Submit"></form>');	
     }

function removeFn(){
		document.getElementById("remove_sub").style.display ="inline";
	}
function r1(myid){//getting values for deletion
    $.ajax({
      type: "POST",
      url: 'AjaxCall.php',
      data: ({idValue:"myid"}),
      success: function(data) {
        alert(data);
      }
    });
}
</script>  
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

<script type="text/javascript">

	function s1(myid,name,sem){//getting values for updation
    document.getElementById("text_box").style.display ="inline";
    document.getElementById("sid").value =myid;
    document.getElementById("sname").value =name;
    document.getElementById("sem").value =sem;
	}

</script>


</div>
<div id="rem_table">
<?php

$result = mysqli_query($conn,"SELECT * FROM semester_sub");
$r1 =$result->num_rows;
echo "<table border='1'>
<tr>
<th>Semester ID</th>
<th>Faculty Name</th>
<th>Lectures Allocated</th>
<th>Remove</th>
</tr>";
for($i=1;$i<=$r1;$i++)
{
 $row = mysqli_fetch_array($result);
 echo "<tr>"; 
 echo "<td>" . $row['subject_id'] . "</td>";
 echo "<td>" . $row['semester_name'] . "</td>";
 echo "<td>" . $row['semester'] . "</td>";
 echo "<td><button id=\"".$i ."\" onclick=rSemSub(".$row['subject_id'].")>remove</button></td><br>";
}
echo "</tr>";
echo "</table>";
?>
</div>
<div id="text_box"><!--table for updation-->
	<form action="" method="POST">
 Subject ID<input type="text" name="I1" id="sid"><br><br>
Subject Name: <input type="text" name="F1" id="sname"><br><br>
Semster: <input type="text" name="L1" id="sem"><br><br>
<input type="submit" name="update" value="UPDATE">
</form>
</div>
<div id="add">
	<form>
		Enter numbers of subjects to added :<input type="text" name="" id="textfac"><br><br>
		<button onclick="addFac()">add</button>
	</form>
</div>
</body>
</html>