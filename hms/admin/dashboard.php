<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  | Dashboard</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
				
							<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
										<figure class="figure">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8GDrMMZ3vCvSZHCYRrj9AvIOIN5rZIXDyKA&usqp=CAU" class="figure-img img-fluid rounded">
                                       
                                        </figure>
											
											<p class="links cl-effect-1">
												<a href="manage-users.php">
												<?php $result = mysqli_query($con,"SELECT * FROM users ");
                                                 $num_rows = mysqli_num_rows($result);
                                            {
                                             ?>
											Total Usuario :<?php echo htmlentities($num_rows);  } ?>		
												</a>
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
										<figure class="figure">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzzuTmQOO11Hij18PvmGpED-UPMXu96x3a7w&usqp=CAU" class="figure-img img-fluid rounded">
                                       
                                        </figure>
										
											<p class="cl-effect-1">
												<a href="manage-doctors.php">
												<?php $result1 = mysqli_query($con,"SELECT * FROM doctors ");
$num_rows1 = mysqli_num_rows($result1);
{
?>
											Total Doctores :<?php echo htmlentities($num_rows1);  } ?>		
												</a>
												
											</p>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
										<figure class="figure">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvLJvcWuT8BJ3rA65GdV8ktT5h7n12LO_Uog&usqp=CAU" class="figure-img img-fluid rounded">
                                       
                                        </figure>
											
											<p class="links cl-effect-1">
												<a href="book-appointment.php">
													<a href="appointment-history.php">
												<?php $sql= mysqli_query($con,"SELECT * FROM appointment");
$num_rows2 = mysqli_num_rows($sql);
{
?>
											Total citas :<?php echo htmlentities($num_rows2);  } ?>	
												</a>
												</a>
											</p>
										</div>
									</div>
								</div>

<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
										<figure class="figure">
                                        <img src="data:image/png;base64,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" class="figure-img img-fluid rounded">
                                       
                                        </figure>
											
											<p class="links cl-effect-1">
												<a href="manage-patient.php">
<?php $result = mysqli_query($con,"SELECT * FROM tblpatient ");
$num_rows = mysqli_num_rows($result);
{
?>
Total pacientes :<?php echo htmlentities($num_rows);  
} ?>		
</a>
											</p>
										</div>
									</div>
								</div>





			<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
										<figure class="figure">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsBRW8c6XdiBgmJmpozmtb5N1vhTCGGPEwag&usqp=CAU" class="figure-img img-fluid rounded">
                                       
                                        </figure>
											
											<p class="links cl-effect-1">
												<a href="book-appointment.php">
													<a href="unread-queries.php">
												<?php 
$sql= mysqli_query($con,"SELECT * FROM tblcontactus where  IsRead is null");
$num_rows22 = mysqli_num_rows($sql);
?>
											Consultas nuevas totales<?php echo htmlentities($num_rows22);   ?>	
												</a>
												</a>
											</p>
										</div>
									</div>
								</div>



							</div>
						</div>
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
