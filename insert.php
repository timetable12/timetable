<?php
include "dbConfig.php";
$myPhpVar = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
  function checkClashes(){
   for (var i =0; i <= 4; i++) {
   var x =document.getElementById(i).value;  
   var xmlhttp = new XMLHttpRequest();
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
</head>
<body>
</div>
<br><br><br><br><br><form action="" method="POST">
<?php
 include "dbConfig.php";
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


  



 
</body>
</html>