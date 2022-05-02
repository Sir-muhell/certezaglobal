

	<!-- Footer -->
	<?php
	$address = $_SERVER['REQUEST_URI']; 
	?>
	<?php
	$sqlf = "SELECT * FROM details ";
	$resultf = mysqli_query($con,$sqlf);
	$rowf = db_fetch_assoc($resultf);
	?>
	<br><br><br><br><br>
	<footer class="footer">
		<div class="container">
			<div class="row row-lg-eq-height">
				<div class="col-lg-4">
					<div class="footer_content">
						<div class="subscribe_title">About Us</div>
						<div class="footer_social">
							<p style="color: #fff"><?php echo $rowf['short_des']; ?>... <a href="./about" style="color: grey; border: none;">Read more</a></p>
						</div>
						
					</div>
				</div>
				<div class="col-lg-4 order-lg-1 order-1">
					<div class="footer_content">
						<div><a href="./"><img class="" src="images/logo7.png" style="height: 40px;"></a></div>
						<div class="footer_social">
							<ul style="margin: 50px 0px 50px 0px">
								<li class="footer_social_facebook"><a href="https://facebook.com/certezaglobalblog/" target="_blank"><i class="fa fa-facebook" title="FaceBook" aria-hidden="true"></i></a></li>
								<li class="footer_social_twitter"><a href="https://twitter.com/certezaglobal/" target="_blank"><i class="fa fa-twitter" title="Twitter" aria-hidden="true"></i></a></li>
								<li class="footer_social_instagram"><a href="https://instagram.com/certeza_global/" target="_blank"><i class="fa fa-instagram" title="Instagram" aria-hidden="true"></i></a></li>
								<li class="footer_social_whatsapp"><a href="https://wa.me/2347051532319/"><i class="fa fa-whatsapp" title="WhatsApp" aria-hidden="true"></i></a></li>
								<li class="footer_social_google"><a href="mailto: certezaglobal11@gmail.com" target="_blank"><i class="fa fa-envelope" title="Email" aria-hidden="true"></i></a></li>
								<li class="footer_social_podcast"><a href="https://anchor.fm/certeza-global/" target="_blank"><i class="fa fa-podcast" title="Podcast" aria-hidden="true"></i></a></li>
								<li class="footer_social_telegram"><a href="https://t.me/+NYabgLlu2fBmMTJk"><i class="fa fa-telegram" title="Telegram" aria-hidden="true"></i></a></li>
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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js" defer></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="ajax.js"></script>
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




