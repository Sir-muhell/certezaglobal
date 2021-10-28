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
												<a href="./post?id=<?php echo $row['id']; ?>">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="blogadmin/images/<?php echo $row['photo']; ?>" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title"><?php echo $row['title']; ?></div>
															<small class="post_meta"><?php echo ucwords($row['author']); ?><span><?php echo $row['date']; ?></span><span> <?php echo $row['views']; ?> view(s)</span></small>
														</div>
													</div>
												</a>
											</div>
				                        
				                    			<?php }} ?>
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
								<img style="height: auto; width: 100%;" src="images/ads.jpg">
								<?php  ?>					
							</div>
							<?php }} ?>
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
											 $sql = "SELECT * FROM blogs ORDER BY views DESC LIMIT 4";
							                $result=mysqli_query($con,$sql);
							                $rowcount=mysqli_num_rows($result);
							                           
							                  
                        
						                        

						                    if(!empty($result)) { 
                            					foreach($result as $row){
                                			?>

											<!-- Most viewed Videos Post -->
											<div class="side_post">
												<a href="./post?id=<?php echo $row['id']; ?>">
													<div class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
														<div class="side_post_image"><div><img src="blogadmin/images/<?php echo $row['photo']; ?>" alt=""></div></div>
														<div class="side_post_content">
															<div class="side_post_title"><?php echo $row['title']; ?></div>
															<small class="post_meta"><?php echo ucwords($row['author']); ?><span><?php echo $row['date']; ?></span><span> <?php echo $row['views']; ?> view(s)</span></small>
														</div>
													</div>
												</a>
											</div>
										<?php }} ?>


										</div>

									</div>
								</div>
							</div>
						</div>

						<!-- Advertising 2 -->

						<div class="sidebar_section mb-5">
							<div class="advertising_2">
								<div><p>Ads</p></div>
								<img style="height: auto; width: 100%;" src="images/ads.jpg">
							</div>
						</div>

						<!-- Future Events -->

						
					</div>
				</div>

			</div>
		</div>
	</div>