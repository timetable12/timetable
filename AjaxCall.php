<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" type="text/css" href="n1.css">
</head>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
 var arr =[];
 var yu;
for (var i =0; i <= 4; i++) {
     var e = document.getElementById("sub"+i);
      yu= e.options[e.selectedIndex].text;
       arr[i] =yu;
     } 
      
function f(){
 
   
//document.getElementById("form").style.display ="none";       
   document.getElementById("insert").style.display ="none"; 
    document.getElementById("tab1").style.display ="inline"; 
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
 }


function checkClashes(){
   for (var i =0; i <= 4; i++) {
   var x =document.getElementById(i).value; 
   //var y= document.getElementById('sub'+i).value;
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById('load'+id).innerHTML = this.responseText;
     }
  };

  xmlhttp.open("GET","LcountINCR.php?name="+x, true);
  xmlhttp.send();
     
   }
   
   }
  function getval(id)
  {
   var x = document.getElementById(id).value;
    //document.getElementById('load1').innerHTML = "You selected: "+x;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById('load'+id).innerHTML = this.responseText;
     }
  };
   xmlhttp.open("GET","load.php?fac_name="+x, true);
    xmlhttp.send();
     
  }

</script>

<div id="tab1">
<table  id = 'table' border="1px">
  
  <tr>
    <td style="font-size: 30px;font-weight: bold;">Day</td>
     <td style="font-size: 30px;font-weight: bold;">8:00-9:00</td>
     <td style="font-size: 30px;font-weight: bold;">9:00-10:00</td>
     <td style="font-size: 30px;font-weight: bold;">10:00-11:00</td>
     <td style="font-size: 30px;font-weight: bold;">11:00-12:00</td>
     <td style="font-size: 30px;font-weight: bold;">12:00-1:00</td>


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
      <td id="t30"></td>

  </tr>
  </table>
  </div>

<div id="insert">
  <br><br><br><br><br><form action="" method="POST">

<?php
 include "dbConfig.php";
$myPhpVar=$_GET['id'];

  mysqli_select_db($conn, "timetable");
 
 $sql = "SELECT subject_name FROM semester_sub where semester = '$myPhpVar'";
 $query = mysqli_query($conn, $sql);
  
   ?>
 <span>SUBJECT</span> <?php
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
 &nbsp&nbsp&nbsp&nbsp<span>FACULTY</span>
 <?php
  echo"<select id=\"0\" name=\"fac_load\" onchange=\"getval('0')\">";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";
$var =$row['faculty_name'];
}
      echo "</select>";
?>
  &nbsp&nbsp&nbsp&nbsp<span id="load0" ></span>

<?php
 $sql = "SELECT subject_name FROM semester_sub where semester ='$myPhpVar'";
 $query = mysqli_query($conn, $sql);
  
   ?>
 <br><br><span>SUBJECT</span>
 <?php
  echo"<select id='sub1' name='semester_sub'>";
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
 &nbsp&nbsp&nbsp&nbsp<span>FACULTY</span>
 <?php
  echo"<select id=\"1\" name=\"fac_load\" onchange=\"getval('1')\">";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";
}
      echo "</select>";
?>



 &nbsp&nbsp&nbsp&nbsp<span id="load1"></span>

<?php
 $sql = "SELECT subject_name FROM semester_sub where semester ='$myPhpVar'";
 $query = mysqli_query($conn, $sql);
  
   ?>
 <br><br><span>SUBJECT</span>
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
 &nbsp&nbsp&nbsp&nbsp<span>FACULTY</span>
 <?php
  echo"<select id=\"2\" name=\"fac_load\" onchange=\"getval('2')\">";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";
}
      echo "</select>";
?>


 &nbsp&nbsp&nbsp&nbsp<span id="load2"></span>
<?php
 $sql = "SELECT subject_name FROM semester_sub where semester ='$myPhpVar'";
 $query = mysqli_query($conn, $sql);
  
   ?>
<br><br><span>SUBJECT</span>
 <?php
  echo"<select id='sub3' name='semester_sub'>";
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
 &nbsp&nbsp&nbsp&nbsp<span>FACULTY</span>
 <?php
  echo"<select id=\"3\" name=\"fac_load\" onchange=\"getval('3')\">";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";
}
      echo "</select>";
?>


 &nbsp&nbsp&nbsp&nbsp<span id="load3"></span>
<?php
 $sql = "SELECT subject_name FROM semester_sub where semester ='$myPhpVar'";
 $query = mysqli_query($conn, $sql);
  
   ?>
<br><br><span>SUBJECT</span>
 <?php
  echo"<select id='sub4'name='semester_sub'>";
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
 &nbsp&nbsp&nbsp&nbsp<span>FACULTY</span>
 <?php
  echo"<select id=\"4\" name=\"fac_load\" onchange=\"getval('4')\">";
  while($row = mysqli_fetch_array($query))
 {   
     echo "<option value'" . $row['faculty_name'] . "'>" . $row['faculty_name'].     
"</option>";
}
      echo "</select>";
?>


 &nbsp&nbsp&nbsp&nbsp<span id="load4"></span>
<br><br><br><br><br><button onclick="checkClashes()">SAVE</button>

<br><br><br><br><br><button onclick="f()">CREATE TIMETABLE</button>



</form>

</div>

</body>
</html>