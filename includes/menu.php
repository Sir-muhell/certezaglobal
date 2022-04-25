<div class="search_container ml-auto">
							<!-- <div class="weather">
								<div class="temperature">+10°</div>
								<img class="weather_icon" src="images/cloud.png" alt="">
							</div> -->
							<form action="./search" method="post" name="form">
				              <input type="search" name="search" class="header_search_input" placeholder="Search here..." required="yes">
				              <img class="header_search_icon" src="images/search.png" alt="">
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

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="./"><img src="images/logo_b.jpg"></a></div>
		<div class="search">
			<form action="./search" method="post" name="form">
				<input type="text" name="search" class="header_search_input" placeholder="Search here..." required>
				<!-- <div class="post_category trans_200"></div> -->
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="./">Home</a></li>
				<?php
						$sql = "SELECT * FROM blogs ORDER BY id DESC LIMIT 1";
						$result=mysqli_query($con,$sql);
						$row = db_fetch_assoc($result);
						$rowcount=mysqli_num_rows($result);	
				if ($rowcount == '0') { ?>
							<li><a href="#">Latest Articles</a></li>
				<?php }

				else { ?>
						<li><a href="./<?php echo $row['name']; ?>">Latest Articles</a></li>
				<?php 
				}	 
				?>
				<li class="dropdown">
									<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" >Categories
									</a>
									<div class="dropdown-menu" style="position: fixed; transform-style: none;" aria-labelledby="navbarDropdown">
										<?php
										$sql = "SELECT * FROM blog_categories";
										$result=mysqli_query($con,$sql);
										$row = db_fetch_assoc($result);
										 if(!empty($result)) { 
										foreach($result as $row){ 
										?>
										<ul style="margin-bottom: 15px; overflow: hidden;"><a class="container" style="color: black" href="./category/<?php echo $row['name']; ?>"><?php echo $row['name']; ?></a></ul>
									    <?php }} ?>
									</div>
								</li>
		  		<li class="menu_mm"><a href="./about">About</a></li>
				<li class="menu_mm"><a href="./contact">Contact</a></li>
										
			</ul>
		</nav>
	</div>


