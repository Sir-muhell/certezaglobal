
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
<title>Category | Certeza Global</title>
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
<link rel="stylesheet" type="text/css" href="styles/post.css">
<link rel="stylesheet" type="text/css" href="styles/post_responsive.css">
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/category.jpg" ></div>
		<div class="home_content">
			<?php 
			$sql = "SELECT * FROM blog_categories WHERE id = '$id'";
			$result=mysqli_query($con,$sql);
			$row = db_fetch_assoc($result);
			?>

			
			<div class="post_title" style="font-size: 30px"><?php echo strtoupper($row['name']); ?></div>
			
			<?php 
			$sqle = "SELECT * FROM blogs WHERE category = '$id' LIMIT 1  ";
			$resulte=mysqli_query($con,$sqle);
			$rowe = db_fetch_assoc($resulte);
			?>
			<div>Author - <a href="#author" style="color: white;"><?php echo ucwords( $rowe['author']); ?></a></div>

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
							<div class="grid clearfix">
								<?php   
									$sql = "SELECT * FROM blogs WHERE category = '$id'";
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
				                    <small class="post_meta"><a href="#"><?php echo ucwords($row['author']); ?></a><span><?php echo $row['date']; ?></span></small>
				                  </div>
				                </div>
	                        
	                    <?php }} ?>
							

							

							
						</div>
					</div>
				</div>
				<br><br><br><br>

				<div class="section_title">About Author</div><br>
				<?php
				$sql = "SELECT * FROM blog_categories WHERE id = '$id'" ;
				$result=mysqli_query($con,$sql);
				$row = db_fetch_assoc($result);
				$cat = $row['id'];
				
				if ($cat = '12') { ?>
					
						<div>Oluwabusolami Funmilayo Adepitan is a skilled writer, eloquent speaker, Influencer, an entrepreneur and Brand Strategist.<br>
						She is a final year student of the prestigious institution; Lagos State University, studying Banking and Finance.<br>
						Oluwabusolami Adepitan is the founder and tutor of the Academy LearnWithBubu ; where she help entrepreneurs of her kind know their spot, gain recognition and find fulfillment in business.
						It is her utmost desire for thousand of entrepreneurs to find purpose on earth as well as finding purpose in the business world, in order to grow wealth.
						She currently authored two ebooks titled Make Them Glue to Your Brand and The Secrets of a Successful Business.<br>
						She is the founder and sole owner of Certeza Global and her goal is unveil the giant in women as well as unveiling the confidence in both sex by offering great products and the involvement of various strategies.<br>
						Oluwabusolami is an Ardent lover of God, who sees to it that the will of God be done on earth.
						</div><br>

					
				<?php }
				else {
					?>
					<div></div>
					<?php
				}
				 ?>
				
				

								
						
			</div>
					
					
				
				<?php include("includes/sidebar.php"); ?>
				<?php include("includes/footer.php"); ?>
				<script src="plugins/parallax-js-master/parallax.min.js"></script>
				<script src="js/post.js"></script>
				
	</body>
</html>
