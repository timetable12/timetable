<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username']; 
        $password = $_POST['password'];
        if($username === 'admin' && $password === 'password'){
          session_start();
          $_SESSION['samplename']= $username ;
          header('LOCATION:manage.php');

        } 
        else
        {
           echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
       }
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
	<title>Admin Login</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="login-page bk-img" style="background-image: url(img/log2.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold  text-black mt-4x">Sign in</h1>
						<div class="well row pt-2x pb-3x bk-light" style="background-color: black">
							<div class="col-md-8 col-md-offset-2">
								<form method="post" action="" >
									<label for="" class="text-uppercase text-light "><h4>Your Username </h4></label>
									<input type="text" placeholder="Username" name="username" class="form-control mb">
									<label for="" class="text-uppercase text-light "><h4>Password</h4></label>
									<input type="password" placeholder="Password" name="password" class="form-control mb">
									<button class="btn btn-primary btn-block" name="submit" type="submit"><div class="text-bold"><h4> LOGIN</div></h4></button>
								</form>
							</div>
						</div>
					</div>
				</div>
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

</body>

</html>