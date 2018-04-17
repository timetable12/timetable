<?php
if(isset($_POST['update']))
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

<script type="text/javascript">
	 var arr =[];
  var js1,yu;
function firstFunc(temp)
  { 
$.ajax({
        type: "POST",
        url: 'AjaxCall.php',
        data: { 'section': temp},
        success: function(data)
        {
            alert(data);
        }
    }); 
}
function secFunc()
{
	document.getElementById("form").style.display ='inline';


if(js1<=4)
{
document.getElementById("tab1").style.display ="none";
}
else
{
document.getElementById("tab2").style.display ="none";	
}

}



function f(){
          
   document.getElementById("form").style.display ="none";       
  
if(js1<=4)
{
document.getElementById("tab1").style.display ="inline";
}
else
{
document.getElementById("tab2").style.display ="inline";	
}
var yu;
for (var i =0; i <= 4; i++) {
  	 var e = document.getElementById("sub"+i);
      yu= e.options[e.selectedIndex].text;
       arr[i] =yu;
     
      }    
     document.getElementById("t1").innerHTML =arr[4];
     document.getElementById("t2").innerHTML =arr[4];
     document.getElementById("t6").innerHTML =arr[4];
     document.getElementById("t7").innerHTML =arr[4];

     document.getElementById("t3").innerHTML =arr[3];
     document.getElementById("t23").innerHTML =arr[3];
     document.getElementById("t8").innerHTML =arr[3];
     document.getElementById("t28").innerHTML =arr[3];


    document.getElementById("t4").innerHTML =arr[2];
     document.getElementById("t9").innerHTML =arr[2];
     document.getElementById("t14").innerHTML =arr[2];
     document.getElementById("t19").innerHTML =arr[2];
    
    document.getElementById("t5").innerHTML =arr[1];
     document.getElementById("t10").innerHTML =arr[1];
     document.getElementById("t24").innerHTML =arr[1];
     document.getElementById("t29").innerHTML =arr[1];

    
    document.getElementById("t15").innerHTML =arr[0];
     document.getElementById("t20").innerHTML =arr[0];
     document.getElementById("t25").innerHTML =arr[0];
     document.getElementById("t30").innerHTML =arr[0];
      




}


 </script>





<style type="text/css">

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

#form ,#tab1, #tab2{
	display:none;
}

	
</style>






</head>
<body>
	
<div id="nav-bar">
    <ul >
  <li><a class="active" href="#home">Home</a></li>
  <li><a id="1" href="AjaxCall.php?id=1">SEM 1</a></li>
  <li><a id="2" href="AjaxCall.php?id=2">SEM 2</a></li>
  <li><a id="3" href="AjaxCall.php?id=3">SEM 3</a></li>
  <li><a id="4" href="AjaxCall.php?id=4">SEM 4</a></li>
  <li><a id="5" href="AjaxCall.php?id=5">SEM 5</a></li>
  <li><a id="6" href="AjaxCall.php?id=6">SEM 6</a></li>
  <li><a id="7" href="AjaxCall.php?id=7">SEM 7</a></li>
  <li><a id="8" href="AjaxCall.php?id=8">SEM 8 </a></li>
  <li><a id="9" href="AjaxCall.php?id=9">SEM 9</a></li>
  <li><a id="10" href="AjaxCall.php?id=10">SEM 10</a></li>
  
</ul>
</div>

<div id="tab1">
<table  id = 'table' border="1px">
	
	<tr>
		<td style="font-size: 30px;font-weight: bold;">Day</td>
		 <td style="font-size: 30px;font-weight: bold;">8:00-9:00</td>
		 <td style="font-size: 30px;font-weight: bold;">9:00-10:00</td>
		 <td style="font-size: 30px;font-weight: bold;">10:0-11:00</td>
		 <td style="font-size: 30px;font-weight: bold;">11:0-12:00</td>
		 <td style="font-size: 30px;font-weight: bold;">12:0-1:00</td>


	</tr>

	<tr>
		<td>Mon</td>
		 <td id="t1">5e</td>
		  <td id="t2">5e</td>
		   <td id="t3">4d</td>
		    <td id="t4">3c</td>
		 <td id="t5">2b</td>
		 

	</tr>
	
	<tr>
		<td>Tues</td>
		 <td id="t6">5e</td>
		  <td id="t7">5e</td>
		   <td id="t8">4d</td>
		    <td id="t9">3c</td>
		 <td id="t10">2b</td>
		 

	</tr>
	
	<tr>
		<td>Wed</td>
		 <td id="t11"></td>
		 <td id="t12"></td>
		  <td id="t13"></td>
		 <td id="t14">3c</td>
		  <td id="t15">1a</td>

	</tr>
	<tr>
		<td>Thurs</td>
		 <td id="t16"></td>
		 <td id="t17"></td>
		  <td id="t18"></td>
		 <td id="t19">3c</td>
		  <td id="t20">1a</td>

	</tr>
	<tr>
		<td>Fri</td>
		 <td id="t21"></td>
		 <td id="t22"></td>
		  <td id="t23">4d</td>
		 <td id="t24">2b</td>
		  <td id="t25">1a</td>

	</tr>
	<tr>
		<td>Sat</td>
		 <td id="t26"></td>
		 <td id="t27"></td>
		  <td id="t28">4d</td>
		 <td id="t29">2b</td>
		  <td id="t30">1a</td>

	</tr>
	</table><br><br><br>
<button id="ok">OK</button>

	</div>
<br><br><br><br><br><div id="form">
<?php
 include "dbConfig.php";
 

 mysqli_select_db($conn, "timetable");
$sql = "SELECT * FROM fac_load";
 $query = mysqli_query($conn, $sql);
  
   ?>
 <span>FACULTY</span>
 <?php
  echo"<select id='fac0' name='fac_load'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";


}
      echo "</select>";


?>


<?php 
 

 $sql = "SELECT subject_name FROM semester_sub where semester = 1";
 $query = mysqli_query($conn, $sql);
  
   ?>
 &nbsp&nbsp&nbsp&nbsp<span>SUBJECT</span> <?php
  echo"<select id='sub0' name='semester_sub'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['subject_name'] . "'>" . $row['subject_name'].     
"</option>";


}
      echo "</select>";


?>
 
<?php 
 $sql = "SELECT * FROM fac_load";
 $query = mysqli_query($conn, $sql);
  
   ?>
 <br><br><br><span>FACULTY</span>
 <?php
  echo"<select id='fac1' name='fac_load'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";


}
      echo "</select>";


?>
<?php
 $sql = "SELECT subject_name FROM semester_sub where semester =1";
 $query = mysqli_query($conn, $sql);
  
   ?>
 &nbsp&nbsp&nbsp&nbsp<span>SUBJECT</span>
 <?php
  echo"<select id='sub1' name='semester_sub'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['subject_name'] . "'>" . $row['subject_name'].     
"</option>";


}
      echo "</select>";


?>


<?php $sql = "SELECT * FROM fac_load";
 $query = mysqli_query($conn, $sql);
  
   ?>
 <br><br><br><span>FACULTY</span>
 <?php
  echo"<select id='fac2' name='fac_load'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";


}
      echo "</select>";


?>
<?php
 $sql = "SELECT subject_name FROM semester_sub where semester =1";
 $query = mysqli_query($conn, $sql);
  
   ?>
 &nbsp&nbsp&nbsp&nbsp<span>SUBJECT</span>
 <?php
  echo"<select id='sub2' name='semester_sub'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['subject_name'] . "'>" . $row['subject_name'].     
"</option>";


}
      echo "</select>";


?>


<?php $sql = "SELECT * FROM fac_load";
 $query = mysqli_query($conn, $sql);
  
   ?>
 <br><br><br><span>FACULTY</span>
 <?php
  echo"<select id='fac3' name='fac_load'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";


}
      echo "</select>";


?>
<?php
 $sql = "SELECT subject_name FROM semester_sub where semester =1";
 $query = mysqli_query($conn, $sql);
  
   ?>
 &nbsp&nbsp&nbsp&nbsp<span>SUBJECT</span>
 <?php
  echo"<select id='sub3' name='semester_sub'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['subject_name'] . "'>" . $row['subject_name'].     
"</option>";


}
      echo "</select>";


?>


<?php 
 $sql = "SELECT * FROM fac_load";
 $query = mysqli_query($conn, $sql);
  
   ?>
 <br><br><br><span>FACULTY</span>
 <?php
  echo"<select id='fac4' name='fac_load'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";


}
      echo "</select>";


?>
<?php
 $sql = "SELECT subject_name FROM semester_sub where semester =1";
 $query = mysqli_query($conn, $sql);
  
   ?>
 &nbsp&nbsp&nbsp&nbsp<span>SUBJECT</span>
 <?php
  echo"<select id='sub4'name='semester_sub'>";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['subject_name'] . "'>" . $row['subject_name'].     
"</option>";


}
      echo "</select>";


?>

<br><br><br><br><br><button onclick="f()">create timetable</button>



</div>




<!--
<form action="welcome.php" method="POST">
Subject: <input type="text" name="s1" value="<?php echo $s1; ?>">
Faculty: <input type="text" name="f1" value="<?php echo $f1; ?>"><br><br>
Subject: <input type="text" name="s2" value="<?php echo $s2; ?>">
Faculty: <input type="text" name="f2" value="<?php echo $f2; ?>"><br><br>
Subject: <input type="text" name="s3" value="<?php echo $s3; ?>">
Faculty: <input type="text" name="f3" value="<?php echo $f3; ?>"><br><br>
Subject: <input type="text" name="s4" value="<?php echo $s4; ?>">
Faculty: <input type="text" name="f4" value="<?php echo $f4; ?>"><br><br>
Subject: <input type="text" name="s5" value="<?php echo $s5; ?>">
Faculty: <input type="text" name="f5" value="<?php echo $f5; ?>"><br><br>
<input type="submit" name="submit">
</form>


<select>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
-->

 </body>
</html>