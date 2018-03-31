<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <?php
include "dbConfig.php";
//$table =$_GET['table']
   $count=0;
  if(isset($_POST['submit']))
  {

    for($i=1; $i<6; $i++) { 
	
	$subject = $_POST['s'.$i];
	$faculty= $_POST['f'.$i];
	
    $sql1 = "UPDATE facsub_1 SET faculty_name= '$faculty', subject_name= '$subject' WHERE id= '$i'";
    $sql2 ="SELECT faculty_name from fac_load where faculty_name='$faculty'";
   $result1 = mysqli_query($conn,$sql1);
    $result2 = mysqli_query($conn,$sql2);

    if($result2)
    {
      //$row =$result2->num_rows;
	  $row = mysqli_fetch_array($result2,MYSQLI_ASSOC);
	   
	  $count =$row['L_count'];
	}
     
      if($count<=3) 
      {
       
        $s= ++$count;
         
       $sql3= "UPDATE fac_load SET faculty_name= '$faculty', L_count= '$s' WHERE fac_id= '$i'";

    	   $result3 = mysqli_query($conn,$sql3);
	   
       echo "Load left".(3-$count)."<br>";
      }
  
    else
     { $t=1;
     	$sql3 = "UPDATE fac_load SET L_count= '$t-1' WHERE fac_id= '$i'";
	    $sql4= "UPDATE fac_load SET faculty_name= '$faculty', L_count= '$t' WHERE fac_id= '$i'";
	   $result3 = mysqli_query($conn,$sql3);
	   $result4 = mysqli_query($conn,$sql4);
      
     }


}
}
    

?>
</body>
</html>
