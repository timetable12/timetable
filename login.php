<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username']; 
        $password = $_POST['password'];
        if($username === 'admin' && $password === 'password'){
          $_SESSION['login'] = true; header('LOCATION:admin.php'); die();
        } {
          echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
        }
      }
    ?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <meta http-equiv='content-type' content='text/html;charset=utf-8' />
	<title>login page</title>

<style type="text/css">
	
	body{
		background-color:rgb(65,190,165);

	}
	form{
		background-color:rgb(30,18,75);
		padding-top: 5%;
		padding-bottom: 5%;
		margin-top: 10%;
		margin-right: 30%;
		margin-left: 30%;
		margin-bottom: 10%;
		
		

	}
	#ee{

		padding-left: 10%;
	}
	input{
		width:400px;
		padding-top:5px;
		padding-left:5px;
		padding-bottom:5px;
	}
	button{
		background-color: red;
		border: none;
		width: 400px;
		height: 32px;
		color: white;
		font-size: 20px;
	}
 h1,h3{
 	color: white;
 }

</style>


</head>
<body>
	<div class="container">
<form action="" method="post">
	<center><h1 >Log In</h1></center>

	<div id="ee">
<h3>Username </h3>
<input type="text" class="form-control" name="username" required><br>
<h3>Password</h3> 
<input type="password" class="form-control" id="pwd" name="password" required><br><br>
<button  name="submit" type="submit">Sign in</button><br><br>
</div></form>
</div>
</body>
</html>