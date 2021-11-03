<?php
    
    $to = 'samuelaholu15@gmail.com';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $from= $_POST["email"];
    $subject = " $fname $lname from Certeza Global Contact Page.";
    $sub= $_POST["subject"];
    $message= $_POST["message"];

    $headers = "From: $from";
	$headers = "From: " . $fullname . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   

    $logo = 'https://ceretzagobal.com.ng/imges/logo2.png';
    $link = 'https://certezaglobal.com.ng';

$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>$sub - $fname $lname </title></head><link href='https://ceretzagobal.com.ng/plugins/font-awesome-4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href='https://ceretzagobal.com.ng/plugins/OwlCarousel2-2.2.1/owl.carousel.css'>
<link rel='stylesheet' type='text/css' href='https://ceretzagobal.com.ng/plugins/OwlCarousel2-2.2.1/owl.theme.default.css'>
<link rel='stylesheet' type='text/css' href='https://ceretzagobal.com.ng/plugins/OwlCarousel2-2.2.1/animate.css'>
<link rel='stylesheet' type='text/css' href='https://ceretzagobal.com.ng/styles/post.css'>
<link rel='stylesheet' type='text/css' href='https://ceretzagobal.com.ng/styles/post_responsive.css'><body style='text-align:center;'>";
$body .= "<div class='super_container'>";
$body .= "<img src='https://ceretzagobal.com.ng//logo2.png'>";
$body .= "<div class='page_content>";	
$body .= "<div class='container'><div class='row row-lg-eq-height'>";
$body .= "<div class='col-lg-9'><div class='post_content'><div class='similar_posts'>";
$body .= "<div class='post_comment'><div class='post_comment_title'>$fname, your meassage has been delivered successfully<br><br>We Promise to reply to your message as soon as possible.<br>Meanwhile, subscribe to our newsletter.</div><br>";	
$body .= "</div></div></div></div><br><br><br><br><br>";
$body .= "<footer class='footer'><div class='container'><div class='row row-lg-eq-height'><div class='col-lg-6 order-lg-1 order-1'><div class='footer_content'>";
$body .= "<div><a href='./'><img class='' src='https://ceretzagobal.com.ng/images/logo7.png' style='height: 40px;'></a></div>
        <div class='footer_social'>
        <ul style='margin: 50px 0px 50px 0px'>
        <li class='footer_social_facebook'><a href='#'><i class='fa fa-facebook' aria-hidden='true'></i></a></li>
        <li class='footer_social_twitter'><a href='#'><i class='fa fa-twitter' aria-hidden='true'></i></a></li>
        <li class='footer_social_instagram'><a href='https://instagram.com/certezaglobal/'><i class='fa fa-instagram' aria-hidden='true'></i></a></li>
        <li class='footer_social_google'><a href='https://wa.me/2347051532319'><i class='fa fa-whatsapp' aria-hidden='true'></i></a></li>
        <li class='footer_social_google'><a href='mailto: certezaglobal11@gmail.com'><i class='fa fa-envelope' aria-hidden='true'></i></a></li>
        </ul>
        </div>";
$body .= "<div class='copyright'>&copy; Certeza <script>document.write(new Date().getFullYear());</script> Developed by <a style='color: #fff' href='' target='_blank'>Aholu Samuel</a></div></div></div>";
$body .= "<div class='col-lg-6 order-lg-2 order-2'><div class='footer_content'><div class='subscribe_title'>Subscribe</div>
        <form action='https://ceretzagobal.com.ng/subscribe.php'>";
$body .= "<h6 style='font-size: 20px; color:#a6a6a6'><i class='icon_pin' style='color: #017478'></i> Lagos, Nigeria.</h6>";
$body .= "<input type='email ' class='sub_input' name='name' placeholder='Your Full Name' required='required'>
                                    <br><br>
                                    <input type='text ' class='sub_input' name='email' placeholder='Your Email' required='required'>
                                <button class='sub_button' type='button'>
                                    <svg version='1.1' id='link_arrow_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                                         width='19px' height='13px' viewBox='0 0 19 13' enable-background='new 0 0 19 13' xml:space='preserve'>
                                        <polygon fill='#FFFFFF' points='12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 '/>
                                    </svg>
                                </button>";
$body .= "</form>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>
</div>";

$body .= "<script src='https://ceretzagobal.com.ng/js/jquery-3.2.1.min.js'></script>
<script src='https://ceretzagobal.com.ng/styles/bootstrap4/popper.js'></script>
<script src='https://ceretzagobal.com.ng/styles/bootstrap4/bootstrap.min.js'></script>
<script src='https://ceretzagobal.com.ng/plugins/OwlCarousel2-2.2.1/owl.carousel.js'></script>
<script src='https://ceretzagobal.com.ng/plugins/easing/easing.js'></script>
<script src='https://ceretzagobal.com.ng/plugins/masonry/masonry.js'></script>




                <script src='plugins/parallax-js-master/parallax.min.js'></script>
                <script src='js/post.js'></script>
                
    </body>
</html>";

    $send = mail($to, $subject, $body, $headers);
    header("location: ./submitted ");

?>