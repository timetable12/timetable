
<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" type="text/css" href="n1.css">
</head>
<body>
  <script type="text/javascript">
  var arr =[];
  var js1;

  function f(){
   
   var d = new Date();
   js1= d.getMonth();
     //js1 =7;   
   document.getElementById("form").style.display ="none";       
   document.getElementById("insert").style.display ="none"; 

var yu;
for (var i =0; i <= 4; i++) {
     var e = document.getElementById("sub"+i);
      yu= e.options[e.selectedIndex].text;
       arr[i] =yu;
     
      }    

  if((js1+1)<=4)
{create();
document.getElementById("tab2").style.display ="none";
document.getElementById("tab1").style.display ="inline";

}
else
{create();
document.getElementById("tab1").style.display ="none";  
document.getElementById("tab2").style.display ="inline";

}
      
}
 function create(){
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

function sendArray()
{

$.ajax({ 
       type: "POST", 
       url: "timetable.php", 
       data: { kArray : arr}, 
       success: function() { 
              alert("Success"); 
        } 
}); 
}
</script>

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
      <td id="t30"></td>

  </tr>
  </table>
  </div>

<div id="tab2">
<table  id = 'table' border="1px">
  
  <tr>
    <td style="font-size: 30px;font-weight: bold;">Day</td>
     <td style="font-size: 30px;font-weight: bold;">12:30-1:30</td>
     <td style="font-size: 30px;font-weight: bold;">1:30-2:30</td>
     <td style="font-size: 30px;font-weight: bold;">2:30-3:30</td>
     <td style="font-size: 30px;font-weight: bold;">3:30-4:30</td>
     <td style="font-size: 30px;font-weight: bold;">4:30-5:30</td>

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
  </table>
  </div>
<div id="insert">

<?php
 include "dbConfig.php";

$myPhpVar=$_GET['id'];

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
 
 $sql = "SELECT subject_name FROM semester_sub where semester = '$myPhpVar'";
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
 $sql = "SELECT subject_name FROM semester_sub where semester ='$myPhpVar'";
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
 $sql = "SELECT subject_name FROM semester_sub where semester ='$myPhpVar'";
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
 $sql = "SELECT subject_name FROM semester_sub where semester ='$myPhpVar'";
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
 $sql = "SELECT subject_name FROM semester_sub where semester ='$myPhpVar'";
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

echo"<div id='form'><br><br><br><br><br><button onclick=f();sendArray();>Create TimeTable</button>
</div>"?>
  


</div>


</body>
</html>