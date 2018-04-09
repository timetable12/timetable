<?php
include "dbConfig.php";
if(isset($_POST['submit']))
{
	$id=$_POST['I1'];
	$name=$_POST['F1'];
	$lect=$_POST['L1'];

   $res= mysqli_query($conn,"UPDATE fac_load SET faculty_name='$name',L_count='$lect' 
   	WHERE fac_id='$id'");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#fac_table,#text_box,#add,#remove{
		display :none;	
		}
	</style>
</head>
<body>
<button onclick="updateFn()">UPDATE</button>
<button onclick="removeFn()">REMOVE</button>
<script type="text/javascript">
	function updateFn(){
		document.getElementById("fac_table").style.display ="inline";
	}

	function addFn(){
		document.getElementById("add").style.display ="inline";
	}

function addFac(){
	 var n =document.getElementById("textfac").value;
	  document.write('<table><tr><th>Faculty ID</th><th>Faculty Name</th><th>Lectures Allocated</th></tr>');	
       
      for(var i=0;i<n;i++)
       { document.write('<tr><td id=i><input type="text" name ="ids"></td>');
         document.write('<td id =1><input type="text" name ="names"></td>');
         document.write('<td id =1><input type="text" name ="lectures"></td></tr>');
        }

        document.write('</table><br><button onclick="sub('n')">submit</button>');		
	 }

function sub(n){
   
    for(var i=0;i<n;i++)
      { var first =document.getElementById(i).value;
      	var sec=document.getElementById(i).value;
      	var third =document.getElementById(i).value;
    <?php
       $first ="<script>document.write(first);</script>";
       $sec ="<script>document.write(sec);</script>";
       $third ="<script>document.write(third);</script>";
   $res ="INSERT INTO fac_load(fac_id,faculty_name,L_count) VALUES($first,$sec,$third)"
   		?>
      }
	}


</script>

<button onclick="addFn()">ADD</button>

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

	function f1(myid,name,Lectures){
    document.getElementById("text_box").style.display ="inline";
    document.getElementById("id").value =myid;
    document.getElementById("name").value =name;
    document.getElementById("lect").value =Lectures;
	}

function removeFn(){
		document.getElementById("rem").style.display ="inline";
	}
    

</script>


</div>

<div id="remove">

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
 echo "<td><button id=\"".$i ."\" onclick=r1(".$row['fac_id'].",'". $row['faculty_name']."',". $row['L_count'].")>Remove</button></td><br>";


}
 
echo "</tr>";
echo "</table>";

?>
</div>

<script type="text/javascript">



	/*function r1(myid,name,Lectures){
    document.getElementById("text_box").style.display ="inline";
    document.getElementById("id").value =myid;
    document.getElementById("name").value =name;
    document.getElementById("lect").value =Lectures;
	}*/
</script>

<div id="text_box">
	<form action="" method="POST">
 <input type="text" name="I1" id="id" hidden><br><br>
Faculty Name: <input type="text" name="F1" id="name"><br><br>
No. of Lectures: <input type="text" name="L1" id="lect"><br><br>
<input type="submit" name="submit" value="UPDATE">
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