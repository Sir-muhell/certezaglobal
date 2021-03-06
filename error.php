
<?php

 include("data/functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Error | Certeza Global</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Certeza Global">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/post.css">
<link rel="stylesheet" type="text/css" href="styles/post_responsive.css">
<link rel="icon" type="image/png"  href="images/logo7.png">
<meta name="theme-color" content="#262626"> 
<link rel="icon" type="image/png"  href="images/logo7.png">

</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z6HCCJHSHV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z6HCCJHSHV');
</script>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div><a href="./"><img class="logos" src="images/logo2.webp"></a></div>
						<nav class="main_nav">
							<ul>
								<li ><a href="./" style="color: black;">Home</a></li>
								<?php
										$sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT 1";
										$result=mysqli_query($con,$sql);
										$row = db_fetch_assoc($result);
										$rowcount=mysqli_num_rows($result);	
								if ($rowcount == '0') { ?>
									 	<li><a href="#">Latest Articles</a></li>
								<?php }

								else { ?>
										<li><a href="./post?id=<?php echo $row['id']; ?>">Latest Articles</a></li>
								<?php 
								}	 
								?>
								
								<li class="dropdown active">
									<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false" style="color: black;">Categories
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
		  						<li><a href="./about" style="color: black;">About</a></li>
								<li><a href="./contact"style="color: black;">Contact</a></li>
										
							</ul>
						</nav>
						
						<?php include("includes/menu.php"); ?>
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" style="background-image: url(images/warning.png); background-repeat: no-repeat; background-position: center; background-size: 35%;"  data-speed="0.8"></div>
		<div class="home_content">
			<div class="post_title" style="color: red; margin-top: -60px;">Oops :(<br> You do not have access to this Page<br><br><br><br><br></div>
			<div class="post_category trans_200" style="background-color: black;"><strong><a class="trans_200" onclick="goback();" style="color: white; cursor: pointer;">Go back</a></strong></div>
			
		</div>
	</div>
	

	<?php include("includes/footer.php"); ?>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/post.js"></script>
	<script>
		function goback(){
			window.history.back()
		};
	</script>
				
	</body>
</html>
