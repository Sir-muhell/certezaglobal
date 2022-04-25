<?php include("functions/init.php");
if(isset($_SESSION['login'])) {

    unset($_SESSION['login']);
}
if(!isset($_GET['key'])) {

    header("location: ./ ");
} else {

    $pass = $_GET['key'];

    $sql = "SELECT * FROM users WHERE `activator` = '$pass'";
    $rsl = query($sql);
    
    if(row_count($rsl) == 1) {

    $row = mysqli_fetch_array($rsl);

    } else {

        header("location: ./ ");
    }
}
?>
<!DOCTYPE html>	
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Certeza Global</title>
    <!-- plugins:css -->
	    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
	    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
	    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
	    <!-- endinject -->
	    <!-- Plugin css for this page -->
	    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
	    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	    <!-- End plugin css for this page -->
	    <!-- inject:css -->
	    <!-- endinject -->
	    <!-- Layout styles -->
	    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../images/logo7.png" />
</head>

	
<body class="container" style="background-color: #e6e6e6;">
	
	<center>
	<section style="margin-top:10%; width: 90%;">
		<form class="form">
			<div class="card" style="border-radius: 30px;">
				<div class="card-body ">
					<div>
						<h2>Create New Password </h2>
					</div>
					<div class="form-group" style="margin-top:50px ">
						<input class="form-control" type="password" id="fpassword" autocomplete="off" name="" style="width:70%"placeholder="New Passsword" required>
					</div><br>
					<div class="form-group">
						<input class="form-control" type="password" id="cfpassword" autocomplete="off" name="" style="width:70%"placeholder="Confirm New Passsword" required>
						<input type="text" name="" id="data" value="<?php echo $row['email']; ?>">
					</div><br>
					<div class="form-group">
				    	<button type="button" id="update" style="width: 35%;" class="btn btn-danger">Sign In </button>
				    	<br><br>
				    <div>
					
				</div>
			</div>
		</form>
	</section>



	
    
	</center>
	<!-- Modal -->
    <?php include('includes/modal.php'); ?>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>	
	<script src="assets/vendors/bootstrap/js/jquery-3.2.1.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendors/bootstrap/js/popper.js"></script>
    <script src="ajax.js"></script>                          	
	
	
</body> 
</html>	