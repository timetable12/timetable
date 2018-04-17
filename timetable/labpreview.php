<!DOCTYPE html>
<html lang="en">

  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Timetable Generation System</title>

      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom fonts for this template -->
      <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

      <!-- Custom styles for this template -->
      <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top" style="background-image: url(img/portfolio/04-full.jpg);">

    <!-- Navigation -->
     <?php include('admin/includes/header_min.php'); ?>
    <!-- Header -->
    
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">TimeTable</h2>
            <h3 class="section-subheading text-muted"> M.tech Lab Timetable Session : Jan-Jun , 2018</h3>
          </div>
        </div>
      <div class="table-responsive" >
      <table class="table table-hover">
  
  <tr>
    <td style="font-size: 30px;font-weight: bold;">Day</td>
     <td style="font-size: 30px;font-weight: bold;">11:00-1:00</td>
     <td style="font-size: 30px;font-weight: bold;">1:00-3:00</td>
     <td style="font-size: 30px;font-weight: bold;">3:30-5:30</td>

  </tr>

  <tr>
    <td>Mon-Tue</td>
     <td id="t0"></td>
     <td id="t3"></td>
     <td id="t6"></td>

  </tr>
  
  <tr>
    <td>Wed-Thurs</td>
     <td id="t1"></td>
     <td id="t4"></td>
     <td id="t7"></td>

  </tr>
  
  <tr>
    <td>Fri-Sat</td>
     <td id="t2"></td>
     <td id="t5"></td>
     <td id="t8"></td>

  </tr>
  </table>
</div>

 </div>
      </div>
    </section>

    <!-- Contact -->
    <?php //include('contact_us.php') ?>

    <!-- Footer -->
    <?php include('include/footer.php'); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
     
     <script src="js/retrive_val.js"></script>

  </body>

</html>
