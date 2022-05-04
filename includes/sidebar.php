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
											<?php
											$name = $rows['name']; 
											$name  = str_replace('-', ' ', $name);
											$name = ucfirst($name);
											?>
											<p style="font-size: 17spx"><strong><?php echo ucwords($name); 
											$id = $rows['name'];
											?></strong></p><br>
											<?php  
							                $sql = "SELECT * FROM article WHERE status = 'publish' AND cat = '$id' ORDER BY id DESC LIMIT 4";
							                $result=mysqli_query($con,$sql);
							                $rowcount=mysqli_num_rows($result);
							                           
							                  
                        
						                        

						                    if(!empty($result)) { 
                            					foreach($result as $row){
                                			?>

							                <div class="side_post">
												<a href="./<?php echo $row['name']; ?>">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="blogger/assets/images/article_images/<?php echo $row['image']; ?>" alt=""></div></div>
														<div class="side_post_content"><br><br>
															<div class="side_post_title"><?php echo $row['titles']; ?></div>
															<small class="post_meta"><?php
															 $author =  $row['author'];
															$sql = "SELECT * FROM users WHERE id = '$author'";
															$results=mysqli_query($con,$sql);
															$roll = db_fetch_assoc($results);
				                     						echo ucwords($roll['name']); ?><span><?php echo $row['date_uploaded']; ?></span><span> <?php echo $row['views']; ?> view(s)</span></small>
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
														<div class="side_post_image"><div><img src="images/logo2.webp" alt=""></div></div>
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
														<div class="side_post_image"><div><img src="images/logo2.webp" alt=""></div></div>
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
														<div class="side_post_image"><div><img src="images/logo2.webp" alt=""></div></div>
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
														<div class="side_post_image"><div><img src="images/logo2.webp" alt=""></div></div>
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
						<div class="sidebar_section mb-5">
							<div class="advertising_2">
								<div><p>Ads</p></div>
								
								<?php          
							    $sql = "SELECT * FROM ads ORDER BY rand()";
							    $result=mysqli_query($con,$sql);
							    $rowcount=mysqli_num_rows($result);
						        if(!empty($result)) { 
                     			foreach($result as $row){
                       			?>
								<img style="height: auto; width: 100%;" class="test" src="blogger/<?php echo $row['image']; ?>">
							<?php }} ?> 
							</div>
						</div>

						<div class="sidebar_section">
							<?php  
								
							                     
							                $sql = "SELECT * FROM article LIMIT 1";
							                $result=mysqli_query($con,$sql);
							                $rowcount=mysqli_num_rows($result);
							                           
							                  

						                    if(!empty($result)) { 
                            					foreach($result as $row){
                                			?>


							<?php }} ?> 
						</div>

						<!-- Newest Videos -->

						<div class="sidebar_section newest_videos">
							<div class="sidebar_title_container"><br><br>
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
											 $sql = "SELECT * FROM article WHERE status = 'Publish' ORDER BY views DESC LIMIT 4";
							                $result=mysqli_query($con,$sql);
							                $rowcount=mysqli_num_rows($result);

						                    if(!empty($result)) { 
                            					foreach($result as $row){
                                			?>

											<!-- Most viewed Videos Post -->
											<div class="side_post">
												<a href="./<?php echo $row['name']; ?>">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="blogger/assets/images/article_images/<?php echo $row['image']; ?>" alt=""></div></div>
														<div class="side_post_content"><br>
															<div class="side_post_title"><?php echo $row['titles']; ?></div>
															<small class="post_meta"><?php
															 $author =  $row['author'];
															$sql = "SELECT * FROM users WHERE id = '$author'";
															$results=mysqli_query($con,$sql);
															$roll = db_fetch_assoc($results);
				                     						echo ucwords($roll['name']); ?><span><?php echo $row['date_uploaded']; ?></span><span> <?php echo $row['views']; ?> view(s)</span></small><br>
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
														<div class="side_post_image"><div><img src="images/logo2.webp" alt=""></div></div>
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
														<div class="side_post_image"><div><img src="images/logo2.webp" alt=""></div></div>
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
														<div class="side_post_image"><div><img src="images/logo2.webp" alt=""></div></div>
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
														<div class="side_post_image"><div><img src="images/logo2.webp" alt=""></div></div>
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
							    $sql = "SELECT * FROM ads ORDER BY rand()";
							    $result=mysqli_query($con,$sql);
							    $rowcount=mysqli_num_rows($result);
						        if(!empty($result)) { 
                     			foreach($result as $row){
                       			?>
								<img style="height: auto; width: 100%;" class="test" src="blogger/<?php echo $row['image']; ?>">
							<?php }} ?> 
							</div>
						</div>

						<!-- Future Events -->

						
					</div>
				</div>

			</div>
		</div>
	</div>