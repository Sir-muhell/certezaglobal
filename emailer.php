<?php
    
    $to = 'hello@olapearlshub.com';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $from= $_POST["email"];
    $subject = " $fullname from Certeza Global Contact Page.";
    $sub= $_POST["subject"];
    $message= $_POST["message"];

    $headers = "From: $from";
	$headers = "From: " . $fullname . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   

    $logo = 'https://olapearlshub.com/img/core-img/llogo.png';
    $link = 'https://certezaglobal.com.ng';

$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>$sub - $fname $lname </title></head><link rel='stylesheet' href='https://olapearlshub.com/style.css'><link rel='stylesheet' href='https://olapearlshub.com/font-awesome.min.css'><link rel='stylesheet' href='https://olapearlshub.com/bootstrap.min.css'><body style='text-align:center;'>";
$body .= "<section style='margin-top: 20px'>";
$body .= "<img style='margin-top: 35px; max-width: 15%; height:auto' src='{$logo}' alt='Olapearl's Hub'>";
$body .= "<div style='min-height: 200px; class='bg-dark'>";	
$body .= "<h1 style='margin-top: 45px; color: #fbb710'>{$sub}</h1><br/>";
$body .= "<p style='margin-left: 15px; margin-right: 15px; margin-top: 34px; text-align: left; font-size: 17px; min-height'>{$message}</p><br/>";
$body .= "</div>";	
$body .= "<div class='footer-area'>";
$body .= "<p style='text-align: center;'><a href='{$link}'><img src='{$logo}' style='margin-top: 15px; max-width: 8%; height: auto'></a></p>";
$body .= "<div class='col-lg-4 col-sm-12 col-xl-4 text-center'>";
$body .= "<div class='single-footer-widget'>";
$body .= "<div class='footer-content mb-30'>";
$body .= "<h6 style='font-size: 20px; color:#a6a6a6'><i class='icon_pin' style='color: #017478'></i> Lagos, Nigeria.</h6>";
$body .= "<h6 style='margin-top: 5px; font-size: 20px'><a href='tel: +2348094793295' style='color:#a6a6a6'><i style='color: #017478' class='icon_phone'></i> +234 809 4793 295</a></h6>";
$body .= "<h6 style='margin-top: 5px; padding-bottom: 10px; font-size: 20px'><a href='mailto: hello@olapearlshub.com' style='color: #a6a6a6'><i class='icon_mail' style='color: #017478'></i> hello@olapearlshub.com</a></h6></div></div></div>";
// $body .= "</div>";
// $body .= "</div>";
// $body .= "</div>";
$body .= "<div class='single-footer-widget'>";
$body .= "<div class='footer-social-info' style='padding-bottom: 50px' >";
$body .= "<a href='https://www.facebook.com/olapearlshub/' class='facebook' data-toggle='tooltip' data-placement='top' title='Facebook'><i class='fa fa-facebook'></i></a>";
$body .= "<a href='https://wa.me/2348110793719' class='whatsapp' data-toggle='tooltip' data-placement='top' title='Whatsapp'><i class='fa fa-whatsapp'></i></a>";
$body .= "<a href='https://instagram.com/olapearlshub' class='instagram' data-toggle='tooltip' data-placement='top' title='Instagram'><i class='fa fa-instagram'></i></a>";
$body .= "<a href='https://www.youtube.com/channel/UClg2b1Wnw8AMqoRWmGjJLmg' class='youtube' data-toggle='tooltip' data-placement='top' title='YouTube'><i class='fa fa-youtube-play'></i></a>";
$body .= "</div>";
$body .= "</div>";
$body .= "</div>";
$body .= "<script src='js/bootstrap.min.js'></script>";
$body .= "<script src='js/mona.bundle.js'></script>";
$body .= "</section>";	
$body .= "</body></html>";
    $send = mail($to, $subject, $body, $headers);
    header("location: ./submitted ");

?>