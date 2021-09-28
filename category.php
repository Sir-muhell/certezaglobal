<?php
include("data/functions.php");


$id=$_REQUEST['id'];
if ("$id" == '') {
 header("location: ./error ");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Category</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Certeza Global">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">
<link rel="stylesheet" type="text/css" href="styles/category.css">
<link rel="stylesheet" type="text/css" href="styles/category_responsive.css">
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
								<li ><a href="./">Home</a></li>
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
										<ul><a class="container" style="color: black" href=""><?php echo $row['name']; ?></a></ul>
									    <?php }} ?>
									</div>
								</li>
		  						<li><a href="#">About</a></li>
								<li><a href="./contact">Contact</a></li>
										
							</ul>
						</nav>
						
						<?php include("includes/menu.php"); ?>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/category.jpg" data-speed="0.8"></div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Main Content -->

				<div class="col-lg-9">
					<div class="main_content">

						<div class="blog_section">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								<div class="section_title">Don't Miss</div>
								<div class="section_tags ml-auto">
									<ul>
										<li style="margin-left: 20px"><a href="#">All</a></li>
										<?php
										$sql = "SELECT * FROM blog_categories";
										$result=mysqli_query($con,$sql);
										$row = db_fetch_assoc($result);
										 if(!empty($result)) { 
										foreach($result as $row){ 
										?>
										<li style="margin-top: 20px"><a href="category.html"><?php echo $row['name']; ?></a></li>
										<?php }} ?>
									</ul>
								</div>
								<div class="section_panel_more">
									<ul>
										<li>All
											<ul>
												<?php
												$sql = "SELECT * FROM blog_categories";
												$result=mysqli_query($con,$sql);
												$row = db_fetch_assoc($result);
												 if(!empty($result)) { 
												foreach($result as $row){ 
												?>
												<li><a href="category.html"><?php echo $row['name']; ?></a></li>
												<?php }} ?>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<div class="section_content">
								<div class="grid clearfix">

									<!-- Small Card With Image -->
									<div class="card card_small_with_image grid-item">
										<img class="card-img-top" src="images/post_10.jpg" alt="">
										<div class="card-body">
											<div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
											<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

									

								</div>
							</div>
						</div>

					</div>
					<div class="load_more">
						<div id="load_more" class="load_more_button text-center trans_200">Load More</div>
					</div>
				</div>

	<?php 
		include("includes/sidebar2.php");
	?>
	<!-- Footer -->

<?php include("includes/footer"); ?>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/masonry/masonry.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/category.js"></script>
</body>
</html>