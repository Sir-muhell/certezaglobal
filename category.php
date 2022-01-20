
<?php
include("data/functions.php");
 $id=$_REQUEST['id'];
if ("$id" == '') {
 header("location: ./error ");
}
?>

<?php 
	$sql = "SELECT * FROM blog_categories WHERE id = '$id'";
	$result=mysqli_query($con,$sql);
	$row = db_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $row['name']; ?> |Category | Certeza Global</title>
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
									<div class="dropdown-menu" style="position: absolute;">
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
									$rowcount=mysqli_num_rows($result);
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
	                        
	                    <?php }}
	                    
	                    	if($rowcount == '0') { ?>
	                    		<div class="card card_small_with_image grid-item" style="margin-top: 90px" >
				                  <a href="#"><center>
				                      <img src="images/logo2.webp" class="card-img-top img-fluid" alt="post_image" style="width: auto;height: auto"></center>
				                  </a>
				                  <div class="card-body">
				                  	<center>Nothing to show yet</center>
				                    <div class="card-title card-title-small"><a href="#" ?></a></div>
				                    <small class="post_meta"><a href="#"></a></small>
				                  </div>
				                </div>
				                <div class="card card_small_with_image grid-item" style="margin-top: 90px" >
				                  <a href="#"><center>
				                      <img src="images/logo2.webp" class="card-img-top img-fluid" alt="post_image" style="width: auto;height: auto"></center>
				                  </a>
				                  <div class="card-body">
				                  	<center>Nothing to show yet</center>
				                    <div class="card-title card-title-small"><a href="#" ?></a></div>
				                    <small class="post_meta"><a href="#"></a></small>
				                  </div>
				                </div>
				                <div class="card card_small_with_image grid-item" style="margin-top: 90px" >
				                  <a href="#"><center>
				                      <img src="images/logo2.webp" class="card-img-top img-fluid" alt="post_image" style="width: auto;height: auto"></center>
				                  </a>
				                  <div class="card-body">
				                  	<center>Nothing to show yet</center>
				                    <div class="card-title card-title-small"><a href="#" ?></a></div>
				                    <small class="post_meta"><a href="#"></a></small>
				                  </div>
				                </div>

	                    <?php

	                    	
	                    }
	                     ?>
	                    
							

							

							
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
				
				if ($cat === '1') { 

				$sql = "SELECT * FROM users WHERE cat = '1'" ;
				$result =mysqli_query($con,$sql);
				$row = db_fetch_assoc($result);
				$author1 = $row['about']; 

				if (!empty($author1)) { ?>

					<p class="post_p"><?php echo $author1; ?> </p><br>	
					<?php 	}else{	?>

					
						<p class="post_p">Oluwabusolami Funmilayo Adepitan is a skilled writer, eloquent speaker, Influencer, an entrepreneur and Brand Strategist.<br>
						She is a final year student of the prestigious institution; Lagos State University, studying Banking and Finance.<br>
						Oluwabusolami Adepitan is the founder and tutor of the Academy <strong>LearnWithBubu </strong>; where she help entrepreneurs of her kind know their spot, gain recognition and find fulfillment in business.
						It is her utmost desire for thousand of entrepreneurs to find purpose on earth as well as finding purpose in the business world, in order to grow wealth.
						She currently authored two ebooks titled <strong>Make Them Glue to Your Brand</strong> and <strong> The Secrets of a Successful Business</strong> .<br>
						She is the founder and sole owner of Certeza Global and her goal is unveil the giant in women as well as unveiling the confidence in both sex by offering great products and the involvement of various strategies.<br>
						Oluwabusolami is an Ardent lover of God, who sees to it that the will of God be done on earth.
						</p><br>

					
				<?php }}
				else {
				
				if ( $cat === '2') { 

				$sql = "SELECT * FROM users WHERE cat = '2'" ;
				$result =mysqli_query($con,$sql);
				$row = db_fetch_assoc($result);
				$author2 = $row['about']; 

				if (!empty($author2)) { ?>
					<p class="post_p"><?php echo $author2; ?> </p><br>	
					<?php 	}else{	?>

						<p class="post_p">Orirenitemi Aanuoluwapo Soleye is a 200 Level student of Lagos State University in the department of Political Science Education. <br>

						Her passion for women and children has made her a volunteer for various advocacy initiatives in and outside campus such as Girls 4 Leadership Initiative, WARRIF to mention but a few. Her dedication to serve humanity has propelled her to be a tutor under Excel Minds Academic Group on Campus, group which offers free tutorials to students.
						Orirenitemi also believes in morality as a weapon against social vices. She upholds the believe that women can be exceedingly great even more than they expect through discovering the essence and versatility of their nature.<br>

						Orirenitemi is a writer who has her articles published online. She is also passionate about the world's politics especially in contemporary times and this led to her winning the Girls 4 Leadership contest which qualified  her as a panelist in a discussion that attracted the participation of other women around the world about the Afghanistan Taliban Rule.<br>
						She also loves to see children grow under the right guidance. She is a lover of music and nature.</p><br>
				<?php }}
				else {
			
				if ($cat === '3') { 
				$sql = "SELECT * FROM users WHERE cat = '3'" ;
				$result =mysqli_query($con,$sql);
				$row = db_fetch_assoc($result);
				$author1 = $row['about']; 

				if (!empty($author3)) { ?>
					<p class="post_p"><?php echo $author3; ?> </p><br>
					<?php 	}else{	?>

						<p class="post_p">Mosope Oluwatoyin Adeyemi is a creative writer, a student coach, a singer and the author of an E-Book specially written for new university students titled "How to excel in university". <br>

						She is passionate about making Africans great readers, because according to her; If readers are leaders, then for Africa to lead, we have to read".<br> 

						As a result of this passion, she created a bookclub called "Blackbooklovers" which is centered on reading great books that can help groom people into leaders both in the present and in the future. The bookclub is open to everyone as there is a page on Instagram for it @blackbooklovers.<br>

						She strongly believe that there is hope for the ordinary man, as long as he is willing to fight for the future he deserves.</p> <br>


				<?php }}
				else{

				if ($cat === '4') { 
				$sql = "SELECT * FROM users WHERE cat = '4'" ;
				$result =mysqli_query($con,$sql);
				$row = db_fetch_assoc($result);
				$author1 = $row['about']; 

				if (!empty($author4)) { ?>
					<p class="post_p"><?php echo $author4; ?> </p><br>	
					<?php 	}else{	?>
						<p class="post_p">Olajide Boluwatifenishola Elizabeth is a content writer,a potential chartered accountant and a fashion designer.<br>

						She's a fervent follower and lover of Christ,who major goal is to see Jesus everywhere on the earth realm.<br>

						Olajide Boluwatifenishola Elizabeth is a student of Lagos State University,studying Accounting.<br>
						Its her utmost desire to see kids/teens fulfill their purposes and destinies here on earth. She loves to motivate and encourage kids/teens who feels down or dejected. Her joy is found in the joy of other kids.<br>
							
						</p><br>
				<?php }
				else {

				if ($cat === '5') { 
				$sql = "SELECT * FROM users WHERE cat = '5'" ;
				$result =mysqli_query($con,$sql);
				$row = db_fetch_assoc($result);
				$author5 = $row['about']; 

				if (!empty($author5)) { ?>
					<p class="post_p"><?php echo $author5; ?> </p><br>
					<?php 	}else{	?>
						<p class="post_p">Oluwatimileyin Oluwakemi Adepitan is a child of the most High God. She is an advocate of His word and a bearer of His grace.<br>

						She is a student of Lagos State College of Medicine, (LASCOM). Aspiring to become a medical doctor.<br>

						Her passion to write is fuelled by the need to eradicate ignorance on important issues in the society. She is a poet, a speaker and also a script writer.
						She's written quite a number of poems, some of which are titled: Friends or Foes, Restored and many others.<br>
						She's a writer of two books which are to be published soon. <br>

						Oluwakemi is a strong advocate for Truth.</p><br>
				<?php }}	
				else {

				if ($cat === '6') { 
				$sql = "SELECT * FROM users WHERE cat = '6'" ;
				$result =mysqli_query($con,$sql);
				$row = db_fetch_assoc($result);
				$author6 = $row['about']; 

				if (!empty($author6)) { ?>
					<p class="post_p"><?php echo $author6; ?> </p><br>
					<?php 	}else{	?>
						<p class="post_p">Adesiji-Adelekan Ademilayo Eunice is a 300 level student of the department of Pharmacology, Therapeutics and Toxicology at Lagos State University College of Medicine.<br>

						She is a creative writer, a deputy Editor-in-chief at Association of Campus Journalists LASU and an instrumentalist. Her passion for planning and multitasking has made a part of several committees within the university serving in various capacities. Her spirit for welfarism and dedication to humanity has made a volunteer for The Slum Movement and Awesome Treasure Foundations amongst a few.<br>

						Ademilayo is a multi talented individual who believes in using her 5 talents to gain 5 more. She believes that being female is not a limitation but a blessing and encourages female to not morally degrade themselves but to be an epitome of beauty, brains and good morals.</p><br>
				<?php }
				else {

				if ($cat === '7') { 
				$sql = "SELECT * FROM users WHERE cat = '7'" ;
				$result =mysqli_query($con,$sql);
				$row = db_fetch_assoc($result);
				$author1 = $row['about']; 

				if (!empty($author7)) { ?>
					<p class="post_p"><?php echo $author7; ?> </p><br>
					<?php 	}else{	?>
						<p class="post_p"></p><br>
				<?php	
			}
				}
				}
				}	
				}
				}
				


				}

				
				?>
				

				

								
						
			</div>
					
					
				
				<?php include("includes/sidebar.php"); ?>
				<?php include("includes/footer.php"); ?>
				<script src="plugins/parallax-js-master/parallax.min.js"></script>
				<script src="js/post.js"></script>
				
	</body>
</html>
