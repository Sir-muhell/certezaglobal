
<?php
if(empty($_POST['search'])) {
  header("location : ./error");
 }
 include("data/functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Search | Certeza Global</title>
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
		  						<li><a href="#">About</a></li>
								<li><a href="./contact">Contact</a></li>
										
							</ul>
						</nav>
						
						<?php include("includes/menu.php"); ?>
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/post.jpg" data-speed="0.8"></div>
		<div class="home_content">
			
			<div class="post_title" style="font-size: 40px"><?php echo strtoupper("Search"); ?></div>
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
								if(!empty($_POST['search'])) {
							                      $search_keyword = $_POST['search'];
							                     }
							                   $sql = "SELECT * FROM blogs WHERE title LIKE '%$search_keyword%' OR content LIKE '%$search_keyword%'  OR tags LIKE '%$search_keyword%' OR author LIKE '%$search_keyword%'  AND posted = 'publish' ORDER BY id DESC ";
							                        
							                       
							                        $result=mysqli_query($con,$sql);
							                        $rowcount=mysqli_num_rows($result);
							                           
							                  
                        
						                            if ($rowcount==0) {
						       
						                            echo "<p style=color:#E9573F><b>Sorry your search for:<u style=color:black>$search_keyword</u> returned zero results</b></p>";
						                            echo "<p><b style=color:#717478>Suggestions<b><br><span style=color:#FFA500>Your search item is not available on Our Website<br>Try being more specific with key words<br>Enter key word using title<br>Try search using category<br>Try again later<br></span></p>";
						                            echo "<p><a href=\"http://www.google.com/search?q=" 
						                            . $search_keyword . "\" target=\"_blank\" title=\"Look up 
						                            " . $search_keyword . " on Google\" style=color:#37BC9B>Click here</a> to try the 
						                            search on google</p>";
						                        }
						                        else{
						                            echo "<p style='color:#4FC1E9'><b>You searched for:<u style=color:black> $search_keyword</u></b></p>";
						                            echo "<p style='color:#37BC9B; margin-buttom:'><b>Results($rowcount)..</b></p>";
						                        }

						                    if(!empty($result)) { 
                            					foreach($result as $row){
                                ?>

	                        
				                <div class="card card_small_with_image grid-item" style="margin-top: 90px" >
				                  <a href="post?id=<?php echo $row['id']; ?>">
				                      <img src="blogadmin/images/<?php echo $row['photo']; ?>" class="card-img-top img-fluid" alt="post_image" style="width: auto;height: auto">
				                  </a>
				                  <div class="card-body">
				                    <div class="card-title card-title-small"><a href="single?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></div>
				                    <small><i class="fa fa-tag"></i><span> <?php echo $row['tags']; ?></span> <i class="fa fa-eye ml-3" > <span><?php echo $row['views']; ?></span>
				                    </i></small>
				                    <small class="post_meta mt-1" style="m"><a href="#"><i>by <?php echo ucwords($row['author']); ?></i></a><span><?php echo $row['date']; ?></span></small>
				                  </div>
				                </div>
	                        
	                    <?php }} ?>
							

							

							
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
