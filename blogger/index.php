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
	<section style="margin-top:10%; width: 90%;" id="si">
		<form class="form">
			<div class="card" style="border-radius: 30px;">
				<div class="card-body ">
					<div>
						<h2>Sign In </h2>
					</div>
					<div class="form-group" style="margin-top:50px ">
						<input class="form-control" type="text" id="username" name="" style="width:70%"placeholder="Username" required>
					</div><br>
					<div class="form-group">
						<input class="form-control" type="password" id="password" name="" style="width:70%"placeholder="Password" required>
					</div><br>
					<div class="form-group">
				    	<button type="button" id="login" style="width: 35%;" class="btn btn-danger">Sign In </button>
				    	<br><br>
				    <div>
				    <div style="margin-right: ">
				    	<span><a href="./forgot" style="color: black;">Forgot password</a> &nbsp; | &nbsp; <a style="color: black; cursor: pointer;" onclick="signup();">Sign Up</a></span>
				    </div>
					
				</div>
			</div>
		</form>
	</section>


	<section style="margin-top: 10%; width: 90%; margin-bottom: 100px;" id="su">
		<form class="form">
			<div class="card" style="border-radius: 30px;">
				<div class="card-body ">
					<div>
						<h2>Sign Up</h2>
					</div>
					<div class="col-lg-12 row" style="margin-top:50px ">
						<div class="form-group col-lg-12 col-sm-12">
							<input class="form-control" type="text" name="" id="fname" placeholder="Full Name" required>
						</div>
					</div><br>
					<div class="col-lg-12 row">
						<div class="form-group col-lg-6 col-sm-12">
							<input class="form-control" type="text" name="" id="uname" placeholder="Username" required>
						</div>
						<div class="form-group col-lg-6 col-sm-12">
							<input class="form-control" type="email" name="" id="email" placeholder="Email" required>
						</div>
					</div><br>
					<div class="col-lg-12 row">
						<div class="form-group col-lg-6 col-sm-12">
							<input class="form-control" type="password" name="" id="pword" placeholder="Password" required>
						</div>
						<div class="form-group col-lg-6 col-sm-12">
							<input class="form-control" type="password" name="" id="cpword" placeholder="Confirm Password" required>
						</div>
					</div><br>
					<div class="col-lg-12 row">
						<div class="form-group col-lg-6 col-sm-12">
							<input class="form-control" type="number" name="" id="pnum" placeholder="Phone Number" required>
						</div>
						<div class="form-group col-lg-6 col-sm-12">
							<input class="form-control" type="number" name="" id="wnum" placeholder="Whatapp Number"  required>
						</div>
					</div><br><br>

					<div class="col-lg-12 row">
						<div class="form-group col-lg-12 col-sm-12">
							<textarea class="form-control" type="text" id="edit" name="" placeholder="What Software do you use for editing?" required></textarea>
						</div>
					</div><br>
					<div class="col-lg-12 row">
						<div class="form-group col-lg-6 col-sm-12">
							<input class="form-control" type="text" name="" id="niche" placeholder="Your Niche" required>
						</div>
						<div class="form-group col-lg-6 col-sm-12">
							<input class="form-control" type="text" name="" id="spec" placeholder="Area of Specification" required>
						</div>
					</div><br>		
					<div class="col-lg-12 row">
						<div class="form-group col-lg-6 col-sm-12">
							<textarea class="form-control" type="text" name="" id="strength" placeholder="Stength(s)" required></textarea>
						</div>
						<div class="form-group col-lg-6 col-sm-12">
							<textarea class="form-control" type="text" name="" placeholder="Weakness(es)" id="weak" required></textarea>
						</div>
					</div><br>

					<h6 style="float: left; margin-left: 30px;">Link to social media profiles .:</h6><br>
					<div class="col-lg-12 row">
						<div class="form-group col-lg-6 col-sm-12">
							<input class="form-control" type="text" name="" id="fbook" value="https://facebook.com/" placeholder="Facebook" required>
						</div>
						<div class="form-group col-lg-6 col-sm-12">
							<input class="form-control" type="text" name="" id="linkedin" value="https://linkedin.com/" placeholder="LinkedIn" required>
						</div>
					</div><br>
					<div class="col-lg-12 row">
						<div class="form-group col-lg-6 col-sm-12">
							<input class="form-control" type="text" name="" id="ig" value="https://instagram.com/" placeholder="Instagram" required>
						</div>
						<div class="form-group col-lg-6 col-sm-12">
							<input class="form-control" type="text" name="" id="twitter" value="https://twitter.com/" placeholder="Twitter" required>
						</div>
					</div><br>
					<div class="form-group col-lg-12" style="margin-bottom: 70px;">
				    	<button type="button" id="submit" style="width: 98%;" class="btn btn-danger" >REGISTER</button><br><br>
				    <div>
				    <div style="">
				    	 <span style="color: black; cursor: pointer;" onclick="signin();">Sign In</span>
				    </div>					
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
	<script>
		var a = document.getElementById("si");
		var b = document.getElementById("su");

		a.style.display = "block";
		b.style.display = "none";

		function signup() {
			a.style.display = "none";
			b.style.display = "block";

		}

		function signin() {
			a.style.display = "block";
			b.style.display = "none";
		}


	</script>
	
</body> 
</html>	