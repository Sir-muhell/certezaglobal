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

	 <!-- ***** Top Search Area Start ***** -->
  <div class="top-search-area">
    <!-- Search Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <!-- Close Button -->
            <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <!-- Form -->
            <form action="./search" method="post" name="form">
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

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="./"><img src="images/logo_b.jpg"></a></div>
		
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="./">Home</a></li>
				<?php
						$sql = "SELECT * FROM article WHERE status = 'publish' ORDER BY id DESC LIMIT 1";
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
										<?php
										$cat_name = $row['name'];
										$cat_name = str_replace('-', ' ', $cat_name);
										$cat_name = ucfirst($cat_name);
										 ?>
										<ul style="margin-bottom: 15px; overflow: hidden;"><a class="container" style="color: black" href="./category/<?php echo $row['name']; ?>"><?php echo $cat_name; ?></a></ul>
									    <?php }} ?>
									</div>
								</li>
		  		<li class="menu_mm"><a href="./about">About</a></li>
				<li class="menu_mm"><a href="./contact">Contact</a></li>
										
			</ul>
		</nav>
			
				<button data-toggle="modal" data-target="#Modal" class="btn"><i class="fa fa-search"></i></button>
				<!-- <div class="post_category trans_200"></div> -->
		
		
	</div>


