

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
							<p style="color: #fff">Certeza Global is a blog inspired, to help unveil the confidence in women of different sectors of life that has been ordained by God. Also, to build your confidence with many others that are victims of this. To get Updated, informed and entertained... <a href="./about" style="color: grey; border: none;">Read more</a></p>
						</div>
						
					</div>
				</div>
				<div class="col-lg-4 order-lg-1 order-1">
					<div class="footer_content">
						<div><a href="./"><img class="" src="images/logo7.png" style="height: 40px;"></a></div>
						<div class="footer_social">
							<ul style="margin: 50px 0px 50px 0px">
								<li class="footer_social_facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="footer_social_twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="footer_social_instagram"><a href="https://instagram.com/certezaglobal/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li class="footer_social_google"><a href="https://wa.me/2347051532319"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
								<li class="footer_social_google"><a href="mailto: certezaglobal11@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="copyright">
						 &copy; Certeza <script><?php echo date('Y') ?></script> Developed by <a style="color: #fff" href="https://www.google.com/search?q=aholu+samuel&sxsrf=AOaemvJ25dtLrpWTRjXWr9uBNvVJAZfBzA%3A1635950550042&source=hp&ei=1Z-CYcjFPNPI1sQPrsaAkAU&iflsig=ALs-wAMAAAAAYYKt5tVmGLSrpn2MF3InxbOEBFesQy5o&oq=&gs_lcp=Cgdnd3Mtd2l6EAEYADIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJzIHCCMQ6gIQJ1AAWABgzTpoA3AAeACAAQCIAQCSAQCYAQCwAQo&sclient=gws-wiz" target="_blank">Aholu Samuel</a>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 order-lg-2 order-2">
					<div class="footer_content">
						<div class="subscribe_title">Subscribe</div>
							<form action="subscribe.php">
									<input type="email " class="sub_input" name="name" placeholder="Your Full Name" required="required">
									<br><br>
									<input type="text " class="sub_input" name="email" placeholder="Your Email" required="required">
								<button class="sub_button" type="button">
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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js" defer></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/masonry/masonry.js"></script>
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




