<div class="search_container ml-auto">
							<!-- <div class="weather">
								<div class="temperature">+10°</div>
								<img class="weather_icon" src="images/cloud.png" alt="">
							</div> -->
							<form action="./search" method="post" name="form">
				              <input type="search" name="search" class="header_search_input" placeholder="Search here..." required="yes">
				              <button type="submit" name="submit"><img class="header_search_icon" src="images/search.png" alt=""></button>
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
		<div class="logo menu_mm"><a href="#">Avision</a></div>
		<div class="search">
			<form action="search.php" method="post" name="form">
				<input type="search" name="search" class="header_search_input" placeholder="Search here..." required="yes">
				<button type="submit" name="submit"><img class="header_search_icon" src="images/search.png" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="./index">Home</a></li>
				<li class="active menu_mm"><a href="#">Articles</a></li>
				<li class="dropdown menu_mm">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"aria-expanded="false">Categories
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<ul><a class="container" style="color: black" href="#">HTML</a></ul>
									<ul><a class="container" style="color: black" href="#">CSS</a></ul>
									<ul><a class="container" style="color: black" href="#">JavaScript</a></ul>
					</div>
				</li>
		  		<li class="menu_mm"><a href="#">About</a></li>
				<li class="menu_mm"><a href="#">Contact</a></li>
										
			</ul>
		</nav>
	</div>


