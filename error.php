<!DOCTYPE html>
<html lang="en">
<head>
<title>Error!</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Demo project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">
<link rel="stylesheet" type="text/css" href="styles/post.css">
<link rel="stylesheet" type="text/css" href="styles/post_responsive.css">

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header" style="background-color: #a5a5a5">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo"><a href="#">avision</a></div>
						<nav class="main_nav">
							<ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="#">Articles</a></li>
								<li class="dropdown active">
									<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false">Categories
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php
										$sql = "SELECT * FROM blog_categories";
										$result=mysqli_query($con,$sql);
										$row = db_fetch_assoc($result);
										 if(!empty($result)) { 
										foreach($result as $row){ 
										?>
										<ul><a class="container" style="color: black" href="./category.php?<?php echo  $row['id'];?>"><?php echo $row['name']; ?></a></ul>
									    <?php }} ?>
									</div>
								</li>
		  						<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
										
							</ul>
						</nav>
						
						<?php include("includes/menu.php"); ?>
	<!-- Home -->

	
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Post Content -->

				<div class="col-lg-12 mt-5">
					<div class="post_content">

						
						<div class="similar_posts">
							

							<!-- Post Comment -->
							<div class="post_comment">
								<div class="row align-items-center">
									<div class="col-lg-12">
										<div class="post_comment_form_container">
											<center><h2>Oops :( <br><br>
											You do not have access to this page.<br>
											</h2>
											<button class="button btn-danger" onclick="goBack();" style="height:40px; width: 100px; border-radius: 15px; outline: none;"><span style="font-size: 20px">Go Back</span> </button>
											</center>
											

											
										</div>
									</div>
								</div>
							</div>

							
						</div>
					</div>
					
				</div>
				
				
				<script>
					function goBack() {
				    window.history.back()
				}
				</script>
				<script src="plugins/parallax-js-master/parallax.min.js"></script>
				<script src="js/post.js"></script>
				
	</body>
</html>
