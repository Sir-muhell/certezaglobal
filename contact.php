<?php 
include("data/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact | Certeza Global</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">
<link rel="stylesheet" type="text/css" href="styles/post.css">
<link rel="stylesheet" type="text/css" href="styles/post_responsive.css">
<link rel="icon" type="image/png"  href="images/logo7.png">
<meta name="theme-color" content="#262626"> 
<link rel="icon" type="image/png"  href="images/logo7.png">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div><a href="./"><img class="logos" src="images/logo7.png"></a></div>
						<nav class="main_nav">
							<ul>
								<li><a href="./">Home</a></li>
								<?php
										$sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT 1";
										$result=mysqli_query($con,$sql);
										$row = db_fetch_assoc($result);
										$rowcount=mysqli_num_rows($result);	
								if ($rowcount === '0') { ?>
									 	<li><a href="#">Latest Articles</a></li>
								<?php }

								else { ?>
										<li><a href="./post?id=<?php echo $row['id']; ?>">Latest Articles</a></li>
								<?php 
								}	 
								?>
								<li class="dropdown">
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
										<ul><a class="container" style="color: black" href="./category?id=<?php echo  $row['id'];?>"><?php echo $row['name']; ?></a></ul>
									    <?php }} ?>
									</div>
								</li>
		  						<li><a href="./about">About</a></li>
								<li class="active"><a href="./contact">Contact</a></li>
										
							</ul>
						</nav>
						
						<?php include("includes/menu.php"); ?>
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/post.jpg" data-speed="0.8"></div>
		<div class="home_content">
			
			<div class="post_title">CONTACT US</div>
		</div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Post Content -->

				<div class="col-lg-9">
					<div class="post_content">

						
						<div class="similar_posts">
							

							<!-- Post Comment -->
							<div class="post_comment">
								<div class="post_comment_title">Contact Us</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="post_comment_form_container">
											<form action="emailer.php" method="post">
								              <div class="form-group">
								                <label for="fullname">Your Name:</label>
								                <input type="text" class="form-control" name="fullname" id="fullname" required>
								              </div>
								              <div class="form-group">
								                <label for="email">Your Email:</label>
								                <input type="email" class="form-control" name="email" id="email" required>
								              </div>
								              <div class="form-group">
								                <label for="subject">Subject:</label>
								                <input type="text" class="form-control" name="subject" id="subject" required>
								              </div>
								              <div class="form-group">
								                <label for="message">Message:</label>
								                <textarea class="form-control" name="message" rows="5" cols="80" id="message" required></textarea>
								              </div>
								              <div class="text-center">
													<button type="submit" class="comment_button">Post Message</button>
												</div>
								            </form>
											
										</div>
									</div>
								</div>
							</div>

							
						</div>
					</div>
					
				</div>
				<?php include("includes/sidebar.php"); ?>
				<?php include("includes/footer.php"); ?>
				<script src="plugins/parallax-js-master/parallax.min.js"></script>
				<script src="js/post.js"></script>
				
	</body>
</html>
