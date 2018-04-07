<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#fac_table,#text_box{
		display :none;	
		}
	</style>
</head>
<body>
	<button onclick="updateFn()">UPDATE</button>
	<button onclick="addFn()">ADD</button>
	<button onclick="removeFn()">REMOVE</button>
<div id="fac_table">
<?php
include "dbConfig.php";
$result = mysqli_query($conn,"SELECT * FROM fac_load");
$r1 =$result->num_rows;
echo $r1;
echo "<table border='1'>
<tr>
<th>Faculty ID</th>
<th>Faculty Name</th>
<th>Lectures Allocated</th>
<th>Edit Option</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['fac_id'] . "</td>";
echo "<td>" . $row['faculty_name'] . "</td>";
echo "<td>" . $row['L_count'] . "</td>";
}
for($i=1;$i<=$r1;$i++)
{
  echo "<td><button id=$i>edit</button></td>"; 
  echo "</tr>";
}
echo "</table>";

?>




</div>

<!--<div>
<?php

/*$result1 =mysqli_query($conn,"SELECT * FROM fac_load ");

$row =$result->num_rows;
       $r=$result->fetch_assoc();
       $s1=$r['fac_id'];
       $f1=$r['faculty_name'];
       $f1=$r['L_count'];
       
       $r=$result->fetch_assoc();
       $s1=$r['fac_id'];
       $f1=$r['faculty_name'];
       $f1=$r['L_count'];
       
       $r=$result->fetch_assoc();
       $s1=$r['fac_id'];
       $f1=$r['faculty_name'];
       $f1=$r['L_count'];
       
       $r=$result->fetch_assoc();
       $s1=$r['fac_id'];
       $f1=$r['faculty_name'];
       $f1=$r['L_count'];
       
       $r=$result->fetch_assoc();
       $s1=$r['fac_id'];
       $f1=$r['faculty_name'];
       $f1=$r['L_count'];*/
       




	?>
</div>
-->
<div id="text_box">
	<form>
Faculty Id: <input type="text" name="I1"><br><br>
Faculty Name: <input type="text" name="F1"><br><br>
No. of Lectures: <input type="text" name="L1"><br><br>
</form>
</div>
<script type="text/javascript">
	function updateFn(){
		document.getElementById("fac_table").style.display ="inline";
	}
	function edit(){
		document.getElementById("text_box").style.display ="inline";
	}

</script>
</body>
</html>