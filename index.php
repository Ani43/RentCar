<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<!-- My CSS -->
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">

	<link rel="stylesheet" href="assets/css/working.css" type="text/css">
	<link rel="stylesheet" href="assets/css/advantage.css" type="text/css">
	<link rel="stylesheet" href="assets/css/footer.css" type="text/css">
	<link rel="stylesheet" href="assets/css/Login-Reg.css" type="text/css">
  	<link rel="stylesheet" href="assets/css/Form.css" type="text/css">
  	<link rel="stylesheet" href="assets/css/modal.css" type="text/css">
  	<link rel="stylesheet" href="assets/css/header.css" type="text/css">


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/a8442dd671.js" crossorigin="anonymous"></script>

	<!--Google Font Poppins-->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<!--Font Awesome-->
	<link rel="stylesheet" href="assets/css/all.min.css">

	<title>RentCar</title>
</head>
<body scroll="no">

<!----------------HEADER PART START--------------->

<?php include('includes/header.php'); ?>
<div class="topheader">
<!-- Header Section ------->
    <div class="center-div ">
      <h1 class="font-weight-bold text-uppercase text-black">drive in the city and outstation</h1>
      <p class="text-uppercase">self drive car rental</p>
    </div>
  </section>
</div>

<!------------------Advantage Section------------->

<?php include('advantage.php');?>

<!------------Benefits Div Started Here----------->
	
<?php include('includes/benefit.php');?>

<!---------------RentCar Working Starts----------->

<?php include('includes/working.php') ?>

<!----------------Customers Choice---------------->

<?php include('includes/customers.php') ?>

<!--------------Registration Form----------------->

<?php include('includes/registration.php')?>

<!----------------Login Form---------------------->

<?php include('includes/login.php')?>

<!--------------Email Availability---------------->

<?php include('check_availabilty.php')?>

<!------------Developers Profile------------------>

<!--
		<section class="developer-profile">
			<div class="developer-heading">
				<h1 class="text-center font-weight-bold text-red">NASA</h1>
				<p class="text-center">Team</p>
			</div>
				<div class="row">
						<div class="card-section card col-lg-3 col-md-6 col-sm-12">
		   					<img class="card-img-top" src="images/animesh.jpg" alt="Card image">
	   					    <div class="card-body">
	    	  					<h4 class="card-title">Nitin Borse</h4>
	     	 					<p class="card-text">Backend Web Developer.Studying at GCOEJ</p>
	     	 					<a href="#" class="btn btn-primary stretched-link">See Profile</a>
	    					</div>
  						</div>
						<div class="card-section card col-lg-3 col-md-6 col-sm-12">
		   					<img class="card-img-top" src="images/aniket.jpg" alt="Card image">
	   				 	   <div class="card-body">
	      						<h4 class="card-title">Aniket Sanap</h4>
	     	 					<p class="card-text">Backend Web Developer.Studying at GCOEJ</p>
	     	 					<a href="#" class="btn btn-primary stretched-link">See Profile</a>
	    					</div>
  						</div>
  						<div class="card-section card col-lg-3 col-md-6 col-sm-12">
		   					<img class="card-img-top" src="images/swapnil.jpg" alt="Card image">
			   			    <div class="card-body">
	      						<h4 class="card-title">Swapnil Sarve</h4>
	      						<p class="card-text">Frotend Web Developer.Studying at GCOEJ</p>
	      						<a href="#" class="btn btn-primary stretched-link">See Profile</a>
	    					</div>
  						</div>
  						<div class="card-section card col-lg-3 col-md-6 col-sm-12">
	   						<img class="card-img-top" src="images/animesh.jpg" alt="Card image">
	   					    <div class="card-body">
	    	  					<h4 class="card-title">Animesh Kharabe</h4>
	      						<p class="card-text">Frontend Web Developer.Studying at GCOEJ</p>
	      						<a href="#" class="btn btn-primary stretched-link">See Profile</a>
	    					</div>
  						</div>
  					</div>
				</div>
		</section>
	
-->

<?php include('footer.php');?>


<!-- Always use this jQuery link just above of closing tag of body -->
<!-- Scripts --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>
