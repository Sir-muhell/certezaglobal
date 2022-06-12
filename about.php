<?php include("data/functions.php");





 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>About | Certeza Global</title>
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
<link rel="stylesheet" type="text/css" href="styles/team.css">
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
						<div><a href="./"><img class="logos" src="images/logo7.webp"></a></div>
						<nav class="main_nav">
							<ul>
								<li ><a href="./">Home</a></li>
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
										<ul><a class="container" style="color: black" href="./category?id=<?php echo  $rows['id'];?>"><?php echo $rows['name']; ?></a></ul>
									    <?php }} ?>
									</div>
								</li>
		  						<li><a href="./">About</a></li>
								<li><a href="./contact">Contact</a></li>
										
							</ul>
						</nav>
						
						<?php include("includes/menu.php"); ?>
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/post.webp" data-speed="0.8"></div>
		<div class="home_content">
			<div class="post_title">ABOUT CERTEZA GLOBAL</div>
		</div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Post Content -->

				<div class="col-lg-9">
					<div class="post_content">
						
					
						<!-- Post Body -->

						<div class="post_body">
							<?php
							$sqlf = "SELECT * FROM details ";
							$resultf = mysqli_query($con,$sqlf);
							$rowf = db_fetch_assoc($resultf);
							$des = $rowf['long_des'];
							?>
							
							<figure>
								<img src="blogadmin/images/<?php echo $row['photo']; ?>" alt="">
								
							</figure>
							<?php
							if (!empty($des)) { ?>
								<p class="post_p"><?php echo $des; ?></p>
							<?php	
							 } else {
							?>
								<p class="post_p"><i>"I want to unveil the giant in women along with me; I am not keeping this to myself alone"</i>

						<br>This was the statement I made few years back, "I am never going to keep this to myself alone, a lot of women out there are victims of this so I won't keep this to myself". 

						<br>Right from childhood getting to the teenage age, I was a girl that was body shamed by her friends, mates and colleague.
						<br>They'd categorize me as the beautiful girl with the hairy legs or the beautiful girl with the broad shoulder. Painful right? Yes, it was. </p>

						<p class="post_p">I saw other ladies being body shamed as I was, "Delight! You are too lean", "Bambola! You are too dark", "Chigozie! You are damn fat".</p> 

						<p class="post_p">These words and many more drastically affected the self esteem of these ladies. Expressing themselves became difficult. Hence, a good number resorted to the cloak of silence. </p>

						<p class="post_p">They were picked on based on as minute a feature as how they look, how they speak, their flaws, pains, past and stature.</p>

						<p class="post_p">I could feel the pain they felt, because I was a victim of this too.</p>  

						<p class="post_p">I knew I couldn't solve theirs but a surgery would definitely solve mine.</p>
						<p class="post_p">I remember how I would go home during the holidays ordered by my boarding school (Federal Science and Technical College, Ijebu Imusin) , take my mum's phone behind her back and begin to search for surgeries that can be done to at least cut down my shoulder, reshape my arm and stop the hair on my legs from growing, I remember it all.</p>
						<p class="post_p">Till the day I saw an article titled "Name and picture of celebrities that have a broad shoulder" I clicked on it this faithful day and saw my best actresses in UK and India.</p>
						<p class="post_p">You should see how amazed I was, at least I saw someone who look like me, I got to discover they were clothes each body shapes are to wear and this is why it look as though they don't have a broad shoulder.</p>
						<p class="post_p">I made research on what cloth I could wear, accessories, what fit my body shape more and so on...</p>
						<p class="post_p">Guess What? <br>
						Knowing what best fit my body shape or cover my scar wasn't the solution, the problem was, the negative comment of people, the critics of people has brought my esteem low. All along, I thought it was due to my body shape but I never knew it went as far as stealing myself away from me.  </p>
						<p class="post_p">I became someone who found it hard to express herself, felt like the world was for those with the perfect story, shape and look. <br>
						I couldn't face the world, face the crowd and face myself.</p>
						<p class="post_p">Do you know a lady with the wild vision and imagination on her head but find it hard to come out of the shell? This girl was me. It took me from me, it made me feel less of myself, feel insecure, the worst of it all is, it came as an obstacle to stop me from achieving purpose, discovering my true self and becoming the Majestical Vessel God wants me to be for the world that await me.</p>
						<p class="post_p">Building my Self-esteem since then has hindered the word called <strong>PURPOSE</strong>. I felt I was the only one going through this till my eyes were opened to see women who has lost purpose due to their past: Various circumstances like child assault, sexual abuse, peer pressure, family background, Wrong marriage etc. Gripped with the fear of revealing themselves to the world.</p>
						<p class="post_p">This is why I faced my mirror and said to my spirit. <br><i>"I want to unveil the giant in women along with me; I am not keeping this to myself alone"</i></p>
						
						<div class="post_quote">
								<p class="post_p">Certeza Global is a blog inspired by Oluwabusolami Adepitan, to help unveil the confidence in women of different sectors of life as ordained by God. Also, to build your confidence with many others that are victims of this. To get Updated, informed and entertained subscribe to this site so you receive notifications on every article.</p>
						</div>
						<p class="post_p">Meet the team with the wild vision and Imagination.</p>
						<?php } ?>
					<section class="teams col-sm-12" style="width:100%;">
						<div class="container">

					      <div class="row">
					        <div class="col-sm-12">
					          <div id="customers-teams" class="owl-carousel">
								<?php 
					          	$sqlt = "SELECT * FROM users WHERE id != '2' ";
								$resultt = mysqli_query($con,$sqlt);
								$rowcount = db_fetch_assoc($resultt);

								foreach ($rowt as $team) { ?>

								<div class="item">
					              <div class="shadow-effect">
					                <img class="img-circle" src="./blogger/<?php echo $team['pix']; ?>" alt="team">
					                <h6><?php echo $team['name']; ?></h6>
										<div id="pastexp">
											<h5 id="pastexphead"><?php echo $rowf['niche']; ?></h5>
										</div>
									<div class="social-icons" id="teamsocial">
										<a class="social-icon social-icon--facebook" id="socialicon" href="<?php echo $team['facebook']; ?>">
											<img src="https://i.imgur.com/c9JxYPS.png">
										</a>
																
										<a class="social-icon social-icon--twitter" id="socialicon" href="<?php echo $team['twitter']; ?>">
											<img src="https://i.imgur.com/VHB4APa.png">
										</a>
										<a class="social-icon social-icon--linkedin" href="<?php echo $team['linkedin']; ?>" id="socialicon">
											<img src="https://i.imgur.com/egfJ4V2.png">
										</a>
																
										<a class="social-icon social-icon--instagram" id="socialicon" href="<?php echo $team['instagram']; ?>">
											<img src="https://i.imgur.com/cgH07pQ.png">
										</a>
									</div>  
						            </div>
						        </div>
						           
								<?php
								}
					          	?>
					          </div>
					        </div>
					      </div>
					    </div>
					  </section>

							<figcaption>Meet the Team</figcaption>
							
						</div>
						
						

						<hr><br>
						
					</div>
					
				</div>
				<?php include("includes/sidebar.php"); ?>
				<?php include("includes/footer.php"); ?>
				<script src="comment.js"></script>
				<script src="plugins/parallax-js-master/parallax.min.js"></script>
				<script src="js/post.js"></script>
				<script src="js/team.js"></script>
	</body>
</html>
