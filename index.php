<?php
include("data/functions.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Certeza Global | Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Certeza Global">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
								<li class="active"><a href="./">Home</a></li>
								<?php
										$sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT 1";
										$result=mysqli_query($con,$sql);
										$row = db_fetch_assoc($result);
										 
								?>
								<li><a href="./post?id=<?php echo $row['id']; ?>">Latest Articles</a></li>
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
								<li><a href="./contact">Contact</a></li>
										
							</ul>
						</nav>
						
						<?php include("includes/menu.php"); ?>
	
	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">

				<?php
				$sql = "SELECT * FROM blog_categories ORDER BY rand() LIMIT 3";
				$result=mysqli_query($con,$sql);
				$row = db_fetch_assoc($result);
				 if(!empty($result)) { 
				foreach($result as $row){ 
				?>
				
				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content">
										<div class="home_slider_item_category trans_200"><a href="./category?id=<?php echo $row['id']; ?>" class="trans_200"><?php echo $row['name']; ?></a></div>
										<br>
										<?php 
										$sqls = "SELECT * FROM blogs ORDER BY rand() DESC";
										$results=mysqli_query($con,$sqls);
										$rows = db_fetch_assoc($results);
										?>
										<div class="home_slider_item_title">
											<a href="./post?id=<?php echo $rows['id']; ?>"><?php echo $rows['title'];?></a><br>
											<h4><i>by </i><?php echo ucwords($rows['author']);?></h4>
										</div>
										<div class="home_slider_item_link">
											<a href="./post?id=<?php echo $rows['category']; ?>" class="trans_200">Continue Reading
												<svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
													<polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Similar Posts -->
					<div class="similar_posts_container">
						<div class="container">
							<div class="row d-flex flex-row align-items-end">

								<?php
								$sql = "SELECT * FROM blogs ORDER BY rand() DESC LIMIT 3" ;
								$result=mysqli_query($con,$sql);
								$row = db_fetch_assoc($result);
								 if(!empty($result)) { 
								foreach($result as $row){ 
								?>

								<!-- Similar Post -->
								<div class="col-lg-3 col-md-6 similar_post_col">
									<div class="similar_post trans_200" style="background-image: url(blogadmin/images/<?php echo $row['photo']; ?>); background-size: 100%; background-repeat: repeat-x;">
										<a href="./post?id=<?php echo $row['category']; ?>"><strong><?php echo $row['title'];?></strong></a>
									</div>
								</div>
								<?php }} ?>
								

							</div>
						</div>
						
						<div class="home_slider_next_container">
							<strong>Advertisement</strong>
							<div class="home_slider_next" >
								<img style="height: auto; width: 100%; " src="images/ads.jpg">
								<div class="home_slider_next_background trans_400"></div>
								<div class="home_slider_next_content trans_400">
									<div class="home_slider_next_title">next</div>
									<div class="home_slider_next_link">About Product Advertised</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				

			<?php }}?>

			</div>

			<div class="custom_nav_container home_slider_nav_container">
				<div class="custom_prev custom_prev_home_slider">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
						<polyline fill="#FFFFFF" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
					</svg>
				</div>
		        <ul id="custom_dots" class="custom_dots custom_dots_home_slider">
		        	<?php
					$sql = "SELECT * FROM blog_categories";
					$result=mysqli_query($con,$sql);
					$row = db_fetch_assoc($result);
					 if(!empty($result)) { 
					foreach($result as $row){ 
					?>
					<li class="custom_dot custom_dot_home_slider active"><span></span></li>
					<?php }} ?>
				</ul>
				<div class="custom_next custom_next_home_slider">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
						<polyline fill="#FFFFFF" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
					</svg>
				</div>
			</div>

		</div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Main Content -->

				<div class="col-lg-9 col-12">
					<div class="main_content">

						<?php include("includes/miss.php"); ?>
							<div class="section_content">
								<div class="grid clearfix">

									

									<?php   
									$sql = "SELECT * FROM blogs LIMIT 0, 3";
									$result=mysqli_query($con,$sql);
									$row = db_fetch_assoc($result);
									if(!empty($result)) { 
									foreach($result as $row){ 

						           
                                	?>

	                        
				                <div class="card card_small_with_image grid-item" style="margin-top: 90px" >
				                  <a href="post?id=<?php echo $row['id']; ?>">
				                      <img src="blogadmin/images/<?php echo $row['photo']; ?>" class="card-img-top img-fluid" alt="post_image" style="width: auto;height: auto">
				                  </a>
				                  <div class="card-body">
				                    <div class="card-title card-title-small"><a href="single?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></div>
				                    <small><i class="fa fa-tag"></i><span> <?php echo $row['tags']; ?></span> <i class="fa fa-eye ml-3" style="float: right;" > <span><?php echo $row['views']; ?></span>
				                    </i></small>
				                    <small class="post_meta mt-1"><a href="#"><i>by <?php echo ucwords($row['author']); ?></i></a><span><?php echo $row['date']; ?></span></small>
				                  </div>
				                </div>
	                        
	                    <?php }} ?>

								

									<!-- Small Card With Image -->
									<div class="card card_small_with_image grid-item">
										
									</div>

									<!-- Small Card With Background -->
									<div class="card card_default card_small_with_background grid-item">
									
									</div>


								</div>
							</div>
						</div>

						<!-- Blog Section - What's Trending -->

						<div class="blog_section">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								<div class="section_title">What's Trending</div>
								
							</div>
							<div class="section_content">
								<div class="grid clearfix">
									
								
									<!-- Small Card With Background -->
									<div class="card card_default card_small_with_background grid-item">
										<div class="card_background" style="background-image:url(images/post_4.jpg)"></div>
										<div class="card-body">
											<div class="card-title card-title-small"><a href="post.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</a></div>
											<small class="post_meta"><a href="#">Katy Liu</a><span>Sep 29, 2017 at 9:48 am</span></small>
										</div>
									</div>

								</div>
								
							</div>
						</div>

						<!-- Blog Section - Videos -->

						

						<!-- Blog Section - Latest -->

						<div class="blog_section" style="margin-bottom: 30px">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								<div class="section_title">Latest Articles</div>
							</div>
							<div class="section_content">
								<div class="grid clearfix">
									
									<?php   
									$sql = "SELECT * FROM blogs LIMIT 0, 3";
									$result=mysqli_query($con,$sql);
									$row = db_fetch_assoc($result);
									if(!empty($result)) { 
									foreach($result as $row){ 

						           
                                	?>

	                        
				                <div class="card card_small_with_image grid-item" style="margin-top: 90px" >
				                  <a href="post?id=<?php echo $row['id']; ?>">
				                      <img src="blogadmin/images/<?php echo $row['photo']; ?>" class="card-img-top img-fluid" alt="post_image" style="width: auto;height: auto">
				                  </a>
				                  <div class="card-body">
				                    <div class="card-title card-title-small"><a href="single?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></div>
				                    <small><i class="fa fa-tag"></i><span> <?php echo $row['tags']; ?></span> <i class="fa fa-eye ml-3" style="float: right;"> <span><?php echo $row['views']; ?></span>
				                    </i></small>
				                    <small class="post_meta mt-1" style="m"><a href="#"><i>by <?php echo ucwords($row['author']); ?></i></a><span><?php echo $row['date']; ?></span></small>
				                  </div>
				                </div>
	                        
	                    <?php }} ?>

								

									<!-- Small Card With Image -->
									<div class="card card_small_with_image grid-item">
										
									</div>

									<!-- Small Card With Background -->
									<div class="card card_default card_small_with_background grid-item">
									
									</div>

									


								</div>
								
							</div>
						</div>

					</div>
					<!-- <div class="load_more">
						<div id="load_more" class="load_more_button text-center trans_200">Load More</div>
					</div> -->
				</div>
				<?php include("includes/sidebar.php"); ?>
				<?php include("includes/footer.php"); ?>
				<script src="plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.js"></script>
				<script src="plugins/masonry/images_loaded.js"></script>
				<script src="js/custom.js"></script>			
	</body>
</html>