<!-- Blog Section - Don't Miss -->

						<div class="blog_section">
							<div class="section_panel d-flex flex-row align-items-center justify-content-start">
								<div class="section_title">Don't Miss</div>
								<div class="section_tags ml-auto">
									<ul>
										<li style="margin-left: 20px"><a href="#">All</a></li>
										<?php
										$sql = "SELECT * FROM blog_categories";
										$result=mysqli_query($con,$sql);
										$row = db_fetch_assoc($result);
										 if(!empty($result)) { 
										foreach($result as $row){ 
										?>
										<li style="margin-top: 20px"><a href="./category?id=<?php echo  $row['id'];?>"><?php echo $row['name']; ?></a></li>
										<?php }} ?>
									</ul>
								</div>
								<div class="section_panel_more">
									<ul>
										<li>All
											<ul>
												<?php
												$sql = "SELECT * FROM blog_categories";
												$result=mysqli_query($con,$sql);
												$row = db_fetch_assoc($result);
												 if(!empty($result)) { 
												foreach($result as $row){ 
												?>
												<li><a href="./category?id=<?php echo  $row['id'];?>"><?php echo $row['name']; ?></a></li>
												<?php }} ?>
											</ul>
										</li>
									</ul>
								</div>
							</div>