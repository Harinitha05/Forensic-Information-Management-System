<?php
	require("includes/common.php");
	if (!isset($_SESSION['email'])) {
    header('location: index.php');
}


$value = $_SESSION['value'];

$lab = "SELECT * FROM labview";
$run_lab = mysqli_query($con, $lab);

// Check if the query executed successfully
    if (!$run_lab) {
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
		<title> Lab Details </title>

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
								Lab Details	
							</h1>	
							<p class="text-white link-nav">  <?php
				if($_SESSION['email']=='admin@fds.com') { ?>
					<a href="adminhome.php">
				
				<?php }
				else { ?>
					<a href="home.php">	
				<?php } ?>
				Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="labview.php"> Lab Details </a></p>
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
						<th style="font-family:verdana; text-align:center" scope="col"> Lab Id </th>
						<th style="font-family:verdana; text-align:center" scope="col"> Technician Id </th>
						<th style="font-family:verdana; text-align:center" scope="col"> Specialist </th>	
						<th style="font-family:verdana; text-align:center" scope="col"> Address </th>												
					</tr>
					</thead>
					<tbody>
					<?php
					$select_query= "SELECT * FROM lab"  ;
					$result_query=mysqli_query($con,$select_query);
					while ($rows =mysqli_fetch_assoc($result_query)){
						$lab_id= $rows['LAB_ID'];
						$tech_id= $rows['TECH_ID'];
						$specialist= $rows['SPECIALIST'];
						$address= $rows['ADDRESS'];

						echo "  <tr>
						<th style='font-family:verdana; text-align:center' scope='row'>  $lab_id  </th>
						<td style='font-family:verdana; text-align:center' scope='row'>  $tech_id  </td>
						<td style='font-family:verdana; text-align:center' scope='row'>   $specialist  </td>
						<td style='font-family:verdana; text-align:center' scope='row'>   $address </td>
					</tr>";
					}
					  ?>
						

						<!--  -->
					 
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