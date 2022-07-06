<?php include("data/functions.php");
$name = $_REQUEST['name'];
session_start();
if ($name = '') {
	header("location : ./error");
}


if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];

$add = $_SERVER['REMOTE_ADDR'];

$name=$_REQUEST['name'];
$sql = "SELECT * FROM article WHERE name = '$name' ";
$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
$row = db_fetch_assoc($result);

if ($rowcount === '0') {
	header("location : ./error");
}

$view = $row['views'];
$id = $row['id'];
$_SESSION["postid"] = $id;


//check if the post has been viewed once
$sqla = "SELECT * FROM views WHERE p_id = '$id' AND address = '$add' ";
$resulta = mysqli_query($con,$sqla);
$rowa = db_fetch_assoc($resulta);
$rowcounta=mysqli_num_rows($resulta);


if ($rowcounta == '0') {
	$sqlb = "INSERT INTO views (`p_id`,`address`)
			VALUES ('".$id."', '".$add."')";
			$resultb = mysqli_query($con, $sqlb);

			if (! $resultb) {
			    $resultb = mysqli_error($con);
			}
	$sqls = "SELECT * FROM article WHERE id = '$id' ";
	$results = mysqli_query($con,$sqls);
	$row = db_fetch_assoc($results);
	$views = $row['views'];

	$view = ++$views;
	$sqlss = "UPDATE article SET views = '$view' WHERE id = '$id'";
	$resultss = mysqli_query($con, $sqlss);
	$sqlss = "UPDATE article SET views = '$view' WHERE id = '$id'";
	$resultss = mysqli_query($con, $sqlss);
}


	$sqlc = "SELECT * FROM article WHERE name = '$name' AND status = 'Publish' ";
	$resultc=mysqli_query($con,$sqlc);
	$rowcountc=mysqli_num_rows($resultc);
	if ($rowcountc == 0) {
		header("location : ./error");
	}
	$rowc = db_fetch_assoc($resultc);
	$string = $rowc['content'];
	$string = (strlen($string) > 13) ? substr($string,0,10).'...' : $string;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $row['titles']; ?> | Certeza Global</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?php echo $string; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/post.css">
<link rel="stylesheet" type="text/css" href="styles/post_responsive.css">
<link rel="icon" type="image/png"  href="images/logo7.webp">
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
						<div><a href="./"><img class="logos" src="images/logo7.webp"></a></div>
						<nav class="main_nav">
							<ul>
								<li ><a href="./">Home</a></li>
								<?php
										$sql = "SELECT * FROM article ORDER BY id DESC LIMIT 1";
										$result=mysqli_query($con,$sql);
										$row = db_fetch_assoc($result);
										$rowcount=mysqli_num_rows($result);	
								if ($rowcount === '0') { ?>
									 	<li><a href="#">Latest Articles</a></li>
								<?php }

								else { ?>
										<li><a href="./<?php echo $row['name']; ?>">Latest Articles</a></li>
								<?php 
								}	 
								?>
								<li class="dropdown">
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
										<ul><a class="container" style="color: black" href="./category/<?php echo  $rows['name'];?>"><?php echo $rows['name']; ?></a></ul>
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
		<?php
			$name=$_REQUEST['name'];
			$sql = "SELECT * FROM article WHERE name = '$name' ";
			$result=mysqli_query($con,$sql);
			$rowcount=mysqli_num_rows($result);
			$row = db_fetch_assoc($result);
			$cat = $row['cat'];
			$sqlz = "SELECT * FROM blog_categories WHERE name = '$cat'";
			$resultz=mysqli_query($con,$sqlz);
			$rowz = db_fetch_assoc($resultz);
			?>
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/cat/<?php echo $rowz['img']; ?>" data-speed="0.8"></div>
		<div class="home_content">
			<div class="post_category trans_200"><a href="" class="trans_200"><?php echo $rowz['name'];?></a></div>
			<div class="post_title"><?php echo $row['titles'];?></div>
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
						<?php

						$author = $row['author'];
                          	$sqlq = "SELECT * FROM users WHERE `id` = '$author'";
                          	$resultq = mysqli_query($con,$sqlq);
                          	$rowq = db_fetch_assoc($resultq);
						 ?>
							<div class="author_image"><div><img src="blogger/<?php echo $rowq['pix'] ?>" alt="author"></div></div>
							<div class="post_meta"><a href="#"><?php echo ucwords($rowq['name']); ?></a><span><?php echo ucwords($row['date_uploaded']); ?></span><span><i class="fa fa-eye"> <?php echo $row['views']; ?></i></span></div>
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
							<?php  $string = $row['content'];
							 ?>
							
							<figure>
								<img src="blogger/assets/images/article_images/<?php echo $row['image']; ?>" alt="">
							</figure>
							<p class="post_p"><?php echo $string; ?></p>
							
							<!-- Post Tags -->
							<div class="post_tags">
								<ul>
									<li class="post_tag"><a href="#"><?php  echo $row['tag']; ?></a></li>
								</ul>
							</div>
						</div>
						
						<!-- Bottom Panel -->
						<div class="post_panel bottom_panel d-flex flex-row align-items-center justify-content-start">
							<div class="author_image"><div><img src="blogger/<?php echo $rowq['pix'] ?>" alt="author"></div></div>
							<div class="post_meta"><a href="#"><?php echo ucwords($rowq['name']); ?></a><span><?php echo ucwords($row['date_uploaded']); ?></span></div>
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
							<div class="section_title">Related posts by same author </div><br>
							<div class="grid clearfix">
								<?php
								$name=$_REQUEST['name'];  
								$cat = $row['cat']; 
								$sql = "SELECT * FROM article WHERE `cat` = '$cat' AND `name` != '$name' LIMIT 3 ";
								$result=mysqli_query($con,$sql);
							     $rowcount=mysqli_num_rows($result);

							   foreach($result as $row) {
                                ?>

	                        
				                <div class="card card_small_with_image grid-item">
				                  <a href="./<?php echo $row['name']; ?>">
				                      <img src="blogger/assets/images/article_images/<?php echo $row['image']; ?>" class="card-img-top img-fluid" alt="post_image" style="width: auto;height: auto">
				                  </a>
				                  <div class="card-body">
				                    <div class="card-title card-title-small"><a href="single?id=<?php echo $row['id']; ?>"><?php echo $row['titles']; ?></a></div>
				                    <small><i class="fa fa-tag"></i><span> <?php echo $row['tag']; ?></span> <i class="fa fa-eye ml-3" > <span><?php echo $row['views']; ?></span>
				                    </i></small>
				                    <small class="post_meta mt-1" style=""><a href="#"><i>by 
				                    	<?php
									 $author =  $row['author'];
									$sql = "SELECT * FROM users WHERE id = '$author'";
									$results=mysqli_query($con,$sql);
									$roll = db_fetch_assoc($results);
           						echo ucwords($roll['name']); ?></i></a><span><?php echo $row['date_uploaded']; ?></span></small>
				                  </div>
				                </div>
	                        
	                    <?php } ?> 
	                    

								

							</div>

							<!-- Post Comment -->
							<div class="post_comment">
								<div class="section_title">Post Comment</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="post_comment_form_container">
											<form id="frm-comment">
												<input type="hidden" name="comment_id" id="commentId" />
												<input type="hidden" id="post_id" value="<?php echo $id; ?>">
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
								<div class="section_title">Comments <span></span></div>
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
					<!-- <div class="load_more">
						<div id="load_more" class="load_more_button text-center trans_200">Load More</div>
					</div> -->
				</div>
				<?php include("includes/sidebar.php"); ?>
				<?php include("includes/footer.php"); ?>
				<script src="plugins/parallax-js-master/parallax.min.js"></script>
				<script src="js/post.js"></script>
				<script src="comment.js"></script>
	</body>
</html>
