<?php
	 session_start();
    if (!isset($_SESSION['samplename'])) { 
     
     header('LOCATION:index.php');

 
   exit; 
} 

    ?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Lab Scheduling </title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
	<style type="text/css">
		
		#tt,#s2,#s1,#ss{
 		display: none;}
 		.btn-warning{

 			font-size: 18px;
 		}
 		#table{
 			width: 80%; 
 		}
	</style>
</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<center>
				<h2 style="text-align: center;font-weight:bold;" id="demo"></h2>
				<h3> M.Tech</h3>
				<br>
				
	<button class ="btn btn-warning " onclick="showbutton()" >Set Time Table</button></br>
	<div id ="s1">
		<h4 class="">Do you have semesters having more than one lab subjects?</h4>
		<button class ="btn btn-warning " onclick="showf()">Yes</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button class ="btn btn-warning " onclick="setempty()">No</button>
     </div><br>

<div id="s2">
	<h3 section-subheading>select semesters</h3>
			<select id="select1">
  <option id="o1"></option>
  <option id="o2"></option>
  <option id="o3"></option>
  <option id="o4"></option>
  <option id="o5"></option>
</select>
		
		<select id="select2">
  <option id="o6"></option>
  <option id="o7"></option>
  <option id="o8"></option>
  <option id="o9"></option>
  <option id="o10"></option>
</select>
		
		<select id="select3"> 
  <option id="o11"></option>
  <option id="o12"></option>
  <option id="o13"></option>
  <option id="o14"></option>
  <option id="o15"></option>
</select>
		<button class="btn btn-warning btn-sm"  onclick="tdisplay()">Submit</button><br>
		
		</div>

<div id="tt" class="table-responsive" >
      <table class="table table-hover" id="table">
 	<tr>
		<td style="font-size: 30px;font-weight: bold;">Day</td>
		 <td style="font-size: 30px;font-weight: bold;">11:00-1:00</td>
		 <td style="font-size: 30px;font-weight: bold;">1:00-3:00</td>
		 <td style="font-size: 30px;font-weight: bold;">3:30-5:30</td>
	</tr>
	<tr>
		<td>Mon-Tue</td>
		 <td id="t0">empty slot</td>
		 <td id="t3">6 sem</td>
		 <td id="t6">Empty slot</td>
	</tr>
	
	<tr>
		<td>Wed-Thurs</td>
		 <td id="t1" >2 sem</td>
		 <td id="t4">8 sem</td>
		 <td id="t7">Empty slot</td>
	</tr>
	
	<tr>
		<td>Fri-Sat</td>
		 <td id="t2">4 sem</td>
		 <td id="t5">10 sem</td>
		 <td id="t8">Empty slot</td>
	</tr>
	</table><br>

<button class ="btn btn-warning " onclick="Prevfunc()">PREV</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   <button class ="btn btn-warning " onclick="Okfunc()">OK</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <button class ="btn btn-warning " onclick="NextFunc()">NEXT</button>
	<br>
 <button  onclick="hidef()" class ="btn btn-warning " style="float: right;">Back</button>
 </div>
 </center>
 
</body>
</html>
				
			
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	<script src="js/lab.js"></script>


</body>

</html>
