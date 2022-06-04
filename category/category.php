
<?php
ob_start();


date_default_timezone_set('Africa/Lagos');
include("../data/db.php");
function db_fetch_assoc($res){
		
				return @mysqli_fetch_assoc($res);
		
	}
include("../data/fetch_data.php");

 $name=$_REQUEST['name'];
if ("$name" == '') {
 header("location: ../error ");
}
?>

<?php 
	$sql = "SELECT * FROM blog_categories WHERE name = '$name'";
	$result=mysqli_query($con,$sql);
	$row = db_fetch_assoc($result);
	$id = $row['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $row['title']; ?> Category | Certeza Global</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Certeza Global">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/post.css">
<link rel="stylesheet" type="text/css" href="../styles/post_responsive.css">
<meta name="theme-color" content="#262626"> 
<link rel="icon" type="image/png"  href="../images/logo7.png">

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div><a href="../"><img class="logos" src="../images/logo7.webp"></a></div>
						<nav class="main_nav">
							<ul>
								<li ><a href="../">Home</a></li>
								<?php
										$sql = "SELECT * FROM article WHERE status = 'Publish' ORDER BY id DESC LIMIT 1";
										$result=mysqli_query($con,$sql);
										$row = db_fetch_assoc($result);
										$rowcount=mysqli_num_rows($result);	
								if ($rowcount === '0') { ?>
									 	<li><a href="#">Latest Articles</a></li>
								<?php }

								else { ?>
										<li><a href="../<?php echo $row['name']; ?>">Latest Articles</a></li>
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
										<?php
										$cat_name = $row['name'];
										$cat_name = str_replace('-', ' ', $cat_name);
										 ?>
										<ul><a class="container" style="color: black" href="./<?php echo  $row['name'];?>"><?php echo $cat_name; ?></a></ul>
									    <?php }} ?>
									</div>
								</li>
		  						<li><a href="../about">About</a></li>
								<li><a href="../contact">Contact</a></li>
										
							</ul>
						</nav>
						
						<div class="search_container ml-auto">
							<!-- <div class="weather">
								<div class="temperature">+10°</div>
								<img class="weather_icon" src="images/cloud.png" alt="">
							</div> -->
							<form action="../search" method="post" name="form">
				              <input type="search" name="search" class="header_search_input" placeholder="Search here..." required="yes">
				              <img class="header_search_icon" src="../images/search.png" alt="">
				              <!-- <div class="post_category trans_200">sport</a></div> -->
				            </form>
							
						</div>
						<div class="hamburger ml-auto menu_mm">
							<i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->
	<div class="top-search-area">
    <!-- Search Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <!-- Close Button -->
            <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <!-- Form -->
            <form action="../search" method="post" name="form">
            	<div class="row" style="margin-left: 3px; margin-right: 3px;">
            		<input type="search" name="search" class="form-control col-10" placeholder="Search here..." required="yes">
              		<button class="btn col-2" type="submit" name="submit"><i class="fa fa-search"></i></button>
            	</div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="../"><img src="../images/logo_b.jpg"></a></div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="../">Home</a></li>
				<?php
						$sql = "SELECT * FROM article WHERE status = 'Publish' ORDER BY id DESC LIMIT 1";
						$result=mysqli_query($con,$sql);
						$row = db_fetch_assoc($result);
						$rowcount=mysqli_num_rows($result);	
				if ($rowcount == '0') { ?>
							<li><a href="#">Latest Articles</a></li>
				<?php }

				else { ?>
						<li><a href="../<?php echo $row['name']; ?>">Latest Articles</a></li>
				<?php 
				}	 
				?>
				<li class="dropdown menu_mm">
									<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false">Categories
									</a>
									<div style="position: static; overflow: hidden;" class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php
										$sql = "SELECT * FROM blog_categories";
										$result=mysqli_query($con,$sql);
										$row = db_fetch_assoc($result);
										 if(!empty($result)) { 
										foreach($result as $row){ 
										?>
										<?php
										$cat_name = $row['name'];
										$cat_name = str_replace('-', ' ', $cat_name);
										 ?>
										<ul style="margin-bottom: 15px; overflow: hidden; position: ;"><a class="container" style="color: black" href="./<?php echo  $row['name'];?>"><?php echo $cat_name; ?></a></ul>
									    <?php }} ?>
									</div>
								</li>
		  		<li class="menu_mm"><a href="../about">About</a></li>
				<li class="menu_mm"><a href="../contact">Contact</a></li>
										
			</ul>
		</nav>
		<button data-toggle="modal" data-target="#Modal" class="btn"><i class="fa fa-search"></i></button>
	</div>



	<!-- Home -->

	<div class="home">
		<?php 
			$sql = "SELECT * FROM blog_categories WHERE id = '$id'";
			$result=mysqli_query($con,$sql);
			$row = db_fetch_assoc($result);
			?>
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="../images/cat/<?php echo $row['img']; ?>" ></div>
		<div class="home_content">
			<?php
			$cat_name = $row['name'];
			$cat_name = str_replace('-', ' ', $cat_name); ?>	
			<div class="post_title" style="font-size: 30px"><?php echo strtoupper($cat_name); ?></div>
			
			<?php 
			$sqle = "SELECT * FROM article WHERE status = 'Publish' AND category = '$id' LIMIT 1  ";
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
									$sql = "SELECT * FROM article WHERE status = 'Publish' AND cat = '$id'";
									$result=mysqli_query($con,$sql);
									$row = db_fetch_assoc($result);
									$rowcount=mysqli_num_rows($result);
									if(!empty($result)) { 
									foreach($result as $row){ 

						           
                                ?>

	                        
				                <div class="card card_small_with_image grid-item" style="margin-top: 90px" >
				                  <a href="./<?php echo $row['name']; ?>">
				                      <img src="../blogger/assets/images/article_images<?php echo $row['image']; ?>" class="card-img-top img-fluid" alt="post_image" style="width: auto;height: auto">
				                  </a>
				                  <div class="card-body">
				                  	<?php   
				                  	$author =  $row['author'];
									$sql = "SELECT * FROM users WHERE id = '$author'";
									$results=mysqli_query($con,$sql);
									$rows = db_fetch_assoc($result);

                                	?>
				                    <div class="card-title card-title-small"><a href="<?php echo $row['name']; ?>"><?php echo $row['title']; ?></a></div>
				                    <small class="post_meta"><a href="#"><?php echo ucwords($rows['name']); ?></a><span><?php echo $row['date']; ?></span></small>
				                  </div>
				                </div>
	                        
	                    <?php }}
	                    
	                    	if($rowcount == '0') { ?>
	                    		<div class="card card_small_with_image grid-item" style="margin-top: 90px" >
				                  <a href="#"><center>
				                      <img src="../images/logo2.webp" class="card-img-top img-fluid" alt="post_image" style="width: auto;height: auto"></center>
				                  </a>
				                  <div class="card-body">
				                  	<center>Nothing to show yet</center>
				                    <div class="card-title card-title-small"><a href="#" ?></a></div>
				                    <small class="post_meta"><a href="#"></a></small>
				                  </div>
				                </div>
				                <div class="card card_small_with_image grid-item" style="margin-top: 90px" >
				                  <a href="#"><center>
				                      <img src="../images/logo2.webp" class="card-img-top img-fluid" alt="post_image" style="width: auto;height: auto"></center>
				                  </a>
				                  <div class="card-body">
				                  	<center>Nothing to show yet</center>
				                    <div class="card-title card-title-small"><a href="#" ?></a></div>
				                    <small class="post_meta"><a href="#"></a></small>
				                  </div>
				                </div>
				                <div class="card card_small_with_image grid-item" style="margin-top: 90px" >
				                  <a href="#"><center>
				                      <img src="../images/logo2.webp" class="card-img-top img-fluid" alt="post_image" style="width: auto;height: auto"></center>
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
				<?php }}
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
				<?php }}
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

				}

				
				?>
				

				

								
						
			</div>
					
					
				
				<!-- Sidebar -->

				<div class="col-lg-3">
					<div class="sidebar">
						<div class="sidebar_background"></div>

						<!-- Top Stories -->

						<div class="sidebar_section">
							<div class="sidebar_title_container">
								<div class="sidebar_title">Top Stories</div>
								<div class="sidebar_slider_nav">
									<div class="custom_nav_container sidebar_slider_nav_container">
										<div class="custom_prev custom_prev_top">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 "/>
											</svg>
										</div>
								        <ul id="custom_dots" class="custom_dots custom_dots_top">
											<li class="custom_dot custom_dot_top active"><span></span></li>
											<li class="custom_dot custom_dot_top"><span></span></li>
											<li class="custom_dot custom_dot_top"><span></span></li>
											<li class="custom_dot custom_dot_top"><span></span></li>
											<li class="custom_dot custom_dot_top"><span></span></li>
											<li class="custom_dot custom_dot_top"><span></span></li>
											<li class="custom_dot custom_dot_top"><span></span></li>
										</ul>
										<div class="custom_next custom_next_top">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="7px" height="12px" viewBox="0 0 7 12" enable-background="new 0 0 7 12" xml:space="preserve">
												<polyline fill="#bebebe" points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 "/>
											</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="sidebar_section_content">

								<!-- Top Stories Slider -->
								<div class="sidebar_slider_container">
									<div class="owl-carousel owl-theme sidebar_slider_top">
									<?php  
								
							                     
							        $sqls = "SELECT * FROM blog_categories ORDER BY rand()";
							        $results=mysqli_query($con,$sqls);
							        $rowcounts=mysqli_num_rows($results);
							                           
							                  
                        
						                        

						        	if(!empty($results)) { 
			                     	foreach($results as $rows){
			                       	?>
										<!-- Top Stories Slider Item -->
										<div class="owl-item">
											<p style="font-size: 17spx"><strong><?php echo ucwords($rows['name']); 
											$id = $rows['id'];
											?></strong></p><br>
											<?php  
								
							                     
							                $sql = "SELECT * FROM blogs WHERE posted = 'publish' AND category = '$id' ORDER BY id DESC LIMIT 4";
							                $result=mysqli_query($con,$sql);
							                $rowcount=mysqli_num_rows($result);
							                           
							                  
                        
						                        

						                    if(!empty($result)) { 
                            					foreach($result as $row){
                                			?>

							                <div class="side_post">
												<a href="./<?php echo $row['name']; ?>">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="blogadmin/images/<?php echo $row['photo']; ?>" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title"><?php echo $row['title']; ?></div>
															<small class="post_meta"><?php echo ucwords($row['author']); ?><span><?php echo $row['date']; ?></span><span> <?php echo $row['views']; ?> view(s)</span></small>
														</div>
													</div>
												</a>
											</div>
				                        
				                    			<?php }} 

				                    			
				                    				if($rowcount == '0') {
				                    					?>
				                    		<div class="side_post">
												<a href="#">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="../images/logo2.webp" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title">Nothing to show yet</div>
															<small class="post_meta"></small>
														</div>
													</div>
												</a>
											</div>
											<div class="side_post">
												<a href="#">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="../images/logo2.webp" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title">Nothing to show yet</div>
															<small class="post_meta"></small>
														</div>
													</div>
												</a>
											</div>
											<div class="side_post">
												<a href="#">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="../images/logo2.webp" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title">Nothing to show yet</div>
															<small class="post_meta"></small>
														</div>
													</div>
												</a>
											</div>
											<div class="side_post">
												<a href="#">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="../images/logo2.webp" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title">Nothing to show yet</div>
															<small class="post_meta"></small>
														</div>
													</div>
												</a>
											</div>
				                    			<?php
				                    				}		
				                    			?>
										</div>
									<?php }} ?>


									</div>
								</div>
							</div>
						</div>

						<!-- Advertising -->

						<div class="sidebar_section">
							<?php  
								
							                     
							                $sql = "SELECT * FROM blogs LIMIT 1";
							                $result=mysqli_query($con,$sql);
							                $rowcount=mysqli_num_rows($result);
							                           
							                  

						                    if(!empty($result)) { 
                            					foreach($result as $row){
                                			?>

							<div class="advertising">
								Advertisement
										
							 	<?php          
							    $sql = "SELECT * FROM ads";
							    $result=mysqli_query($con,$sql);
							    $rowcount=mysqli_num_rows($result);
						        if(!empty($result)) { 
                     			foreach($result as $row){
                       			?>

								<img style="height: auto; width: 100%;" src="<?php echo['image']; ?>">					
							</div>
							<?php }}}} ?> 
						</div>

						<!-- Newest Videos -->

						<div class="sidebar_section newest_videos">
							<div class="sidebar_title_container">
								<div class="sidebar_title">Most Viewed</div>
								
							</div>
							<div class="sidebar_section_content">

								<!-- Sidebar Slider -->
								<div class="sidebar_slider_container">
									<div class="owl-carousel owl-theme sidebar_slider_vid">

										<!-- Newest Videos Slider Item -->
										<div class="owl-item">
											<br>
											<?php
											 $sql = "SELECT * FROM blogs WHERE category = '10' ORDER BY views DESC LIMIT 4";
							                $result=mysqli_query($con,$sql);
							                $rowcount=mysqli_num_rows($result);
							                           
							                  
                        
						                        

						                    if(!empty($result)) { 
                            					foreach($result as $row){
                                			?>

											<!-- Most viewed Videos Post -->
											<div class="side_post">
												<a href="./<?php echo $row['name']; ?>">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="blogadmin/images/<?php echo $row['photo']; ?>" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title"><?php echo $row['title']; ?></div>
															<small class="post_meta"><?php echo ucwords($row['author']); ?><span><?php echo $row['date']; ?></span><span> <?php echo $row['views']; ?> view(s)</span></small>
														</div>
													</div>
												</a>
											</div>
										<?php }} 
											if($rowcount == '0') {
				                    					?>
				                    		<div class="side_post">
												<a href="#">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="../images/logo2.webp" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title">Nothing to show yet</div>
															<small class="post_meta"></small>
														</div>
													</div>
												</a>
											</div>
											<div class="side_post">
												<a href="#">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="../images/logo2.webp" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title">Nothing to show yet</div>
															<small class="post_meta"></small>
														</div>
													</div>
												</a>
											</div>
											<div class="side_post">
												<a href="#">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="../images/logo2.webp" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title">Nothing to show yet</div>
															<small class="post_meta"></small>
														</div>
													</div>
												</a>
											</div>
											<div class="side_post">
												<a href="#">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="../images/logo2.webp" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title">Nothing to show yet</div>
															<small class="post_meta"></small>
														</div>
													</div>
												</a>
											</div>
				                    			<?php
				                    				}		
				                    			

										?>


										</div>

									</div>
								</div>
							</div>
						</div>

						<!-- Advertising 2 -->

						<div class="sidebar_section mb-5">
							<div class="advertising_2">
								<div><p>Ads</p></div>
								
								<?php          
							    $sql = "SELECT * FROM ads";
							    $result=mysqli_query($con,$sql);
							    $rowcount=mysqli_num_rows($result);
						        if(!empty($result)) { 
                     			foreach($result as $row){
                       			?>
								<img style="height: auto; width: 100%;" class="test" src="../blogger/<?php echo $row['image']; ?>">
							<?php }} ?> 
							</div>
						</div>

						<!-- Future Events -->

						
					</div>
				</div>

			</div>
		</div>
	</div>
				

	<!-- Footer -->
	<?php
	$address = $_SERVER['REQUEST_URI']; 
	?>
	<br><br><br><br><br>
	<footer class="footer">
		<div class="container">
			<div class="row row-lg-eq-height">
				<div class="col-lg-4">
					<div class="footer_content">
						<div class="subscribe_title">About Us</div>
						<div class="footer_social">
							<p style="color: #fff">Certeza Global is a blog inspired, to help unveil the confidence in women of different sectors of life that has been ordained by God. Also, to build your confidence with many others that are victims of this. To get Updated, informed and entertained... <a href="../about" style="color: grey; border: none;">Read more</a></p>
						</div>
						
					</div>
				</div>
				<div class="col-lg-4 order-lg-1 order-1">
					<div class="footer_content">
						<div><a href="../"><img class="" src="../images/logo7.png" style="height: 40px;"></a></div>
						<div class="footer_social">
							<ul style="margin: 50px 0px 50px 0px">
								<li class="footer_social_facebook"><a href="https://facebook.com/certezaglobalblog/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="footer_social_twitter"><a href="https://twitter.com/certezaglobal/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="footer_social_instagram"><a href="https://instagram.com/certeza_global/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li class="footer_social_whatsapp"><a href="https://wa.me/2347051532319/" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
								<li class="footer_social_google"><a href="mailto: certezaglobal11@gmail.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
								<li class="footer_social_podcast"><a href="https://anchor.fm/ceteza-global/" target="_blank"><i class="fa fa-podcast" aria-hidden="true"></i></a></li>
								<li class="footer_social_telegram"><a href="https://t.me/+NYabgLlu2fBmMTJk/" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="copyright">
						 &copy; Certeza Global <?php echo date('Y') ?> Developed by <a style="color: #fff" href="https://www.google.com/search?q=aholu+samuel&sxsrf=AOaemvJ25dtLrpWTRjXWr9uBNvVJAZfBzA%3A1635950550042&source=hp&ei=1Z-CYcjFPNPI1sQPrsaAkAU&iflsig=ALs-wAMAAAAAYYKt5tVmGLSrpn2MF3InxbOEBFesQy5o&oq=&gs_lcp=Cgdnd3Mtd2l6EAEYADIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJ1AAWABgzTpoA3AAeACAAQCIAQCSAQCYAQCwAQo&sclient=gws-wiz" target="_blank">Aholu Samuel</a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 order-lg-2 order-2">
					<div class="footer_content">
						<div class="subscribe_title">Subscribe</div>
							<form>
									<input type="email " class="sub_input" name="name" id="name" autocomplete="off" placeholder="Your Full Name" required="required">
									<br><br>
									<input type="text " class="sub_input" name="email" id="email" autocomplete="off" placeholder="Your Email" required="required">
									<p id="msg" style="color: white;"> </p>
								<button class="sub_button" id="subscribe" type="button">
									<svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
										<polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
									</svg>
								</button>
							</form>
					</div>
				</div>
				
			</div>
		</div>
	</footer>
</div>

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js" defer></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/masonry/masonry.js"></script>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("test");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>





				<script src="../plugins/parallax-js-master/parallax.min.js"></script>
				<script src="../js/post.js"></script>
				
	</body>
</html>
