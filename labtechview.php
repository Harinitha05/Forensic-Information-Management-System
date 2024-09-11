<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
    header('location: index.php');
}


$value = $_SESSION['value'];


$labtech = "SELECT * FROM lab_techs";
$run_labtech = mysqli_query($con, $labtech);


// Check if the query executed successfully
if (!$run_labtech) {
	die("Error: " . mysqli_error($con)); // Output the MySQL error for debugging
}


?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title> Lab Technician Details </title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
			
			<!-- #header -->
			<?php
				require 'includes/header.php';	
			?>
			<!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Lab Technician Details	
							</h1>	
							<p class="text-white link-nav">  <?php
				if($_SESSION['email']=='admin@fds.com') { ?>
					<a href="adminhome.php">
				
				<?php }
				else { ?>
					<a href="home.php">	
				<?php } ?>
				Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="labtechview.php"> Lab Technician Details </a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<br>
			<div class="container" id="content">
            <div class="row">
                <table class="table table-hover table-bordered">
					<thead>
					<tr>
						<th style="font-family:verdana; text-align:center" scope="col"> TECH_ID </th>
						<th style="font-family:verdana; text-align:center" scope="col"> NAME </th>
						<th style="font-family:verdana; text-align:center" scope="col"> DESIGNATION </th>	
						<th style="font-family:verdana; text-align:center" scope="col"> DEPARTMENT </th>												
					</tr>
					</thead>
					<tbody>
					<?php
					
					// $lab_techs= "SELECT * FROM labtechview";
					// $run_labtech = mysqli_query($con, $lab_techs);
					$select_query= "SELECT * FROM lab_techs"  ;
					$result_query=mysqli_query($con,$select_query);
					while ($rows =mysqli_fetch_assoc($result_query)){
						$tech_id= $rows['TECH_ID'];
						$name= $rows['NAME'];
						$designation= $rows['DESIGNATION'];
						$department= $rows['DEPARTMENT'];
					

						echo "  <tr>
						<th style='font-family:verdana; text-align:center' scope='row'>  $tech_id  </th>
						<td style='font-family:verdana; text-align:center' scope='row'>  $name  </td>
						<td style='font-family:verdana; text-align:center' scope='row'>   $designation  </td>
						<td style='font-family:verdana; text-align:center' scope='row'>   $department </td>
					</tr>";
					}
				 ?>
					</tbody>
				</table>
            </div>
			</div>
			<br>

			<!-- start footer Area -->		
			<?php
				require 'includes/footer.php';
			?>	
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
	</body>
</html>