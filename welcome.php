<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <?php
include "dbConfig.php";
//$table =$_GET['table']
 $l=0;
  if(isset($_POST['submit']))
  {

    for($i=1; $i<6; $i++) { 
	$subject = $_POST['s'.$i];
	$faculty= $_POST['f'.$i];
	
    $sql1 = "UPDATE facsub_1 SET faculty_name= '$faculty', subject_name= '$subject' WHERE id= '$i'";
    $sql2 = "SELECT * FROM fac_load WHERE faculty_name = '$faculty'";
    $result1 =  mysqli_query($conn,$sql1);
    $result2 =  mysqli_query($conn,$sql2);
if(mysqli_num_rows($result2) == 0) {
	
	$s =$l++;
	$sql3= "UPDATE fac_load SET faculty_name= '$faculty', L_count= '$s' WHERE fac_id= '$i'";
	 $result3 = mysqli_query($conn,$sql3);
    
     }  

     else  
     {

	  $row =$result2->num_rows;
	  $row = mysqli_fetch_assoc($result2);
      $count=$row["L_count"];
       if($count<=3)
         { $count++;
            echo "Load left".(3-$count);
          }
      }

    }

}
    

?>
</body>
</html>