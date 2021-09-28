<?php include("data/functions.php");
$id=$_REQUEST['id'];
session_start();
$_SESSION["postid"] = $id;
if (empty($id)) {
	header("location : error.php");
}


if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Post</title>
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
<link rel="icon" type="image/png"  href="images/logo7.png">
<style>
	#msgs {
        font-family: inherit;
        font-size: 15px
        margin-left: 10px;
        margin-top: 10px;
        color:#2ddf80;
</style>
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
								<li><a href="">Articles</a></li>
								<li class="dropdown active">
									<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false">Categories
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php
										$sqls = "SELECT * FROM blog_categories";
										$results=mysqli_query($con,$sqls);
										$rows = db_fetch_assoc($results);
										 if(!empty($results)) { 
										foreach($results as $rows){ 
										?>
										<ul><a class="container" style="color: black" href="./category?<?php echo  $rows['id'];?>"><?php echo $rows['name']; ?></a></ul>
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
			<div class="post_category trans_200"><a href="./category?id=<?php echo $id;?>" class="trans_200"><?php echo $rows['name'];?></a></div>
			<?php
			$sql = "SELECT * FROM blogs WHERE id = ".$id." ";
			$result=mysqli_query($con,$sql);
			$rowcount=mysqli_num_rows($result);
			$row = db_fetch_assoc($result);
			?>
			<div class="post_title"><?php echo $row['title'];?></div>
		</div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Post Content -->

				<div class="col-lg-9">
					<div class="post_content">
						
						<!-- Top Panel -->
						<div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start">
							<div class="author_image"><div><img src="images/author.jpg" alt=""></div></div>
							<div class="post_meta"><a href="#"><?php echo ucwords($row['author']); ?></a><span><?php echo ucwords($row['date']); ?></span></div>
							<div class="post_share ml-sm-auto">
								<span>share</span>
								<ul class="post_share_list">
									<li class="post_share_item">
										<a href="https://api.whatsapp.com/send?text=<?php echo $url;?>" data-action="share/whatsapp/share" data-media="<?php echo $row['photo']; ?>">
											<i class="fa fa-whatsapp" style="color: green;" aria-hidden="true"></i>
										</a>
									</li>
									<li class="post_share_item">
										<a href="http://twitter.com/home?status=<?php echo $url; ?>" target="_blank" title="Twitter" data-media="<?php echo $row['photo']; ?>">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li class="post_share_item">
										<a href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>"target="_blank" title="Facebook" data-media="<?php echo $row['photo']; ?>">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Post Body -->

						<div class="post_body">
							<p class="post_p"><?php echo $row['content']; ?></p>
							<figure>
								<img src="blogadmin/images/<?php echo $row['photo']; ?>" alt="">
								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>
							</figure>
							<p class="post_p">Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</p>
							<div class="post_quote">
								<p class="post_p">Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</p>
								<div class="post_quote_source">Robert Morgan</div>
							</div>
							<p class="post_p">Donec orci dolor, pretium in luctus id, consequat vitae nibh. Quisque hendrerit, lorem sit amet mollis malesuada, urna orci volutpat ex, sed scelerisque nunc velit et massa. Sed maximus id erat vel feugiat. Phasellus bibendum nisi non urna bibendum elementum. Aenean tincidunt nibh vitae ex facilisis ultrices. Integer ornare efficitur ultrices. Integer neque lectus, venenatis at pulvinar quis, aliquet id neque. Mauris ultrices consequat velit, sed dignissim elit posuere in. Cras vitae dictum dui.</p>

							<!-- Post Tags -->
							<div class="post_tags">
								<ul>
									<li class="post_tag"><a href="#"><?php  echo $row['tags']; ?></a></li>
								</ul>
							</div>
						</div>
						
						<!-- Bottom Panel -->
						<div class="post_panel bottom_panel d-flex flex-row align-items-center justify-content-start">
							<div class="author_image"><div><img src="images/author.jpg" alt=""></div></div>
							<div class="post_meta"><a href="#"><?php echo ucwords($row['author']); ?></a><span><?php echo ucwords($row['date']); ?></span></div>
							<div class="post_share ml-sm-auto">
								<span>share</span>
								<ul class="post_share_list">
									<li class="post_share_item">
										<a href="https://api.whatsapp.com/send?text=<?php echo $url;?>" data-action="share/whatsapp/share" data-media="<?php echo $row['photo']; ?>">
											<i class="fa fa-whatsapp" style="color: green;" aria-hidden="true"></i>
										</a>
									</li>
									<li class="post_share_item">
										<a href="http://twitter.com/home?status=<?php echo $url; ?>" target="_blank" title="Twitter" data-media="<?php echo $row['photo']; ?>">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li class="post_share_item">
										<a href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>"target="_blank" title="Facebook" data-media="<?php echo $row['photo']; ?>">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>


						<hr><br>
						<!-- Similar Posts -->
						<div class="similar_posts">
							<h3><u>Related posts by same author </u></h3>
							<div class="grid clearfix">
								<?php  
								$cat = $row['category'];
								$sql = "SELECT * FROM blogs WHERE category = ".$cat." LIMIT  "; 
								$result=mysqli_query($con,$sql);
							    $rowcount=mysqli_num_rows($result);

							   foreach($result as $row) {
                                ?>

	                        
				                <div class="card card_small_with_image grid-item">
				                  <a href="./post?id=<?php echo $row['id']; ?>">
				                      <img src="blogadmin/images/<?php echo $row['photo']; ?>" class="card-img-top img-fluid" alt="post_image" style="width: 350px;height: auto">
				                  </a>
				                  <div class="card-body">
				                    <div class="card-title card-title-small"><a href="post.php?id=<?php echo $row['id']; ?>"><?php echo strtoupper($row['title']) ; ?></a></div>
				                    <small class="post_meta"><a href="#"><?php echo ucwords($row['author']) ; ?></a><span><?php echo $row['date']; ?></span></small>
				                  </div>
				                </div>
	                        
	                    <?php } ?> 
	                    

								

							</div>

							<!-- Post Comment -->
							<div class="post_comment">
								<div class="post_comment_title">Post Comment</div>
								<div class="row">
									<div class="col-xl-8">
										<div class="post_comment_form_container">
											<form id="frm-comment">
												<input type="hidden" name="comment_id" id="commentId" placeholder="Name" />
												<input type="hidden" id="post_id" name="post_id" value="<?php echo $_GET['id']; ?>">
												<input type="text" class="comment_input comment_input_name" placeholder="Your Name" id="name" required="required">
												<input type="email" class="comment_input comment_input_email" placeholder="Your Email" required="required" id="email">
												<textarea class="comment_text" placeholder="Your Comment" required="required" id="comment"></textarea>
												<div id="msgs"></div>
												<button type="button" style="outline: none" id="submitButton" class="comment_button">Post Comment</button>
											</form>
										</div>
									</div>
								</div>
							</div>

							<!-- Comments -->
							<div class="comments">
								<div class="comments_title">Comments <span></span></div>
								<div class="row">
									<div class="col-lg-12">
										<div class="comments_container">
											<ul class="comment_list">
												<div id="output"></div>
											</ul>
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
				<?php include("includes/sidebar.php"); ?>
				<?php include("includes/footer.php"); ?>
				<script src="comment.js"></script>
				<script src="plugins/parallax-js-master/parallax.min.js"></script>
				<script src="js/post.js"></script>
	</body>
</html>
