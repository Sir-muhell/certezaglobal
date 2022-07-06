<?php

function row_count($result) {

global $con;

	return mysqli_num_rows($result); 
}

function db_fetch_array($res){
		
				return @mysqli_fetch_array($res, MYSQLI_BOTH);
		
	}

	function db_fetch_assoc($res){
		
				return @mysqli_fetch_assoc($res);
		
	}

	function db_fetch_row($res){
		
				return @mysqli_fetch_row($res);
		
	}

function escape($string) {
	global $con;


	return mysqli_real_escape_string($con, $string);
}

function redirect($location) {

	return header("Location: {$location}");
}

function query($query) {
		global $con;

		return mysqli_query($con, $query);
}

function insert() {
		global $con;

		return mysqli_insert_id($con);
}


function confirm($result) {
		global $con;
	if(!$result) {

		die("QUERY FAILED" . mysqli_error($con));
	}
}

function fetch_array($result) {

global $con;

return mysqli_fetch_array($result);

}



									/****** Helper Functions********/
function clean($string) {

	return htmlentities($string);
}

function email_exist($email) {

	$sql = "SELECT * FROM users WHERE `email` = '$email'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}

function username_exist($user) {

	$sql = "SELECT * FROM users WHERE `user` = '$user'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}


function token_generator() {

	$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

	return $token; 
}





/** VALIDATE USER REGISTRATION **/

if(isset($_POST['fname']) && isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['pword']) && isset($_POST['cpword']) && isset($_POST['pnum']) && isset($_POST['wnum']) && isset($_POST['edit']) && isset($_POST['niche']) && isset($_POST['spec']) && isset($_POST['strength']) && isset($_POST['weak']) && isset($_POST['fbook']) && isset($_POST['linkedin']) && isset($_POST['ig']) && isset($_POST['twitter'])) {

$fname 			= clean($_POST['fname']);
$uname	 		= clean($_POST['uname']);
$email	 		= clean($_POST['email']);
$pword    		= clean($_POST['pword']);
$cpword    		= clean($_POST['cpword']);
$pnum			= clean($_POST['pnum']);
$wnum	 		= clean($_POST['wnum']);
$edit	 		= clean($_POST['edit']);
$niche	 		= clean($_POST['niche']);
$spec	 		= clean($_POST['spec']);
$strength	 	= clean($_POST['strength']);
$weak	 		= clean($_POST['weak']);
$fbook	 		= clean($_POST['fbook']);
$linkedin	 	= clean($_POST['linkedin']);
$ig		 		= clean($_POST['ig']);
$twitter	 	= clean($_POST['twitter']);


if(email_exist($email)) {

			echo "Sorry! That email already has an account";
		} else {

if(username_exist($uname)) {

			echo "That username has been taken!";
		} else {


if($pword != $cpword) {

			echo "Password doesn't match!";
			
		} else {
			register($fname, $uname, $email, $pword, $pnum, $wnum, $niche, $spec, $fbook, $linkedin, $ig, $twitter, $edit, $weak, $strength);
		}
	}
	}
	} // post request


	

/** REGISTER USER **/
function register($fname, $uname, $email, $pword, $pnum, $wnum, $niche, $spec, $fbook, $linkedin, $ig, $twitter, $edit, $weak, $strength) {

	$fname 		= escape($fname);
	$uname 		= escape($uname);
	$email 		= escape($email);
	$pword 		= md5($pword);
	$pnum 		= escape($pnum);
	$wnum 		= escape($wnum);
	$niche 		= escape($niche);
	$spec 		= escape($spec);
	$fbook 		= escape($fbook);
	$linkedin 	= escape($linkedin);
	$ig 		= escape($ig);
	$twitter 	= escape($twitter);
	$edit = escape($edit);
	$strength = escape($strength);
	$weak = escape($weak);

	$activator = token_generator();
	$date = date('Y:m:d');
	
$sql = "INSERT INTO users(`name`, `user`, `email`, `password`, `phone`, `w_num`, `niche`, `spec`, `facebook`, `linkedin`, `instagram`, `twitter`, `date_reg`, `activator`, `activated`, `verified`, `pix`)";
$sql.= " VALUES('$fname', '$uname', '$email', '$pword', '$pnum', '$wnum', '$niche', '$spec', '$fbook', '$linkedin', '$ig', '$twitter', '$date', '$activator', 0 , 2, 'assets/images/user.png')";
$result = query($sql);

//redirect to verify function
$subj = "VERIFY YOUR EMAIL";
//$link = "https://thenfthood.com/./activate?key=".$activator;
$link = "https://admin.certezaglobal.com.ng/./activate?key=".$activator; 
$_SESSION['usermail'] = $email;

mail_mailer($email, $activator, $subj, $link);
$sqls = "SELECT * FROM `users` WHERE `id` = '1'";
$results = query($sqls);
$rows = fetch_array($results);
$admin = $rows['email'];

mail_admin($fname, $weak, $strength, $edit, $admin, $niche, $spec);

//redirect to verify page
echo 'Loading...Please Wait!';

echo '<script>window.location.href ="./verify"</script>';
 }



/* MAIL VERIFICATIONS */
function mail_mailer($email, $activator, $subj, $link) {

$to 		= $email;
$from 		= "noreply@certezaglobal.com.ng";

$headers  = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "Return-Path: ". $from ."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
$headers .= "X-Priority: 1 (Highest)\n";
$headers .= "X-MSMail-Priority: High\n";
$headers .= "Importance: High\n";

$subject = $subj;

$logo = '';
$url  = '';

$body = "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hi there! <br/> Thank you for signing up.;</p>";
$body .= "<p style='margin-left: 45px; text-align: left;'><a target='_blank' href='{$link}' style='color: #ff0000; text-decoration: none'><b>Click here to activate your email Address</b></a></p>
<br/>";

$send = mail($to, $subject, $body, $headers);
}

function mail_admin($fname, $weak, $strength, $edit, $admin, $niche, $spec) {

$to 		= $admin;
$from 		= "noreply@certezaglobal.com.ng";

$headers  = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "Return-Path: ". $from ."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
$headers .= "X-Priority: 1 (Highest)\n";
$headers .= "X-MSMail-Priority: High\n";
$headers .= "Importance: High\n";

$subject = 'Approve User Account';
$fname = $fname;
$weak = $weak;
$edit = $edit;
$niche = $niche;
$strength = $strength;


$body = "<p style='margin-left: 45px; margin-top: 34px; text-align: left;'>Hello Administrator, <br/> {$fname} has Signed up to be a writer in Certeza Global. <br/> The following are {$fname}'s details you need to know. <br/> </p>";
$body .= "<p style='margin-left: 45px; text-align: left;'>Niche: {$niche}</p><br/>";
$body .= "<p style='margin-left: 45px; text-align: left;'>Specialization: {$spec}</p>";
$body .= "<p style='margin-left: 45px; text-align: left;'>Editors used: {$edit}</p>";
$body .= "<p style='margin-left: 45px; text-align: left;'>Strength: {$strength}</p>";
$body .= "<p style='margin-left: 45px; text-align: left;'>Weakness: {$weak}</p>";
$body .= "<p style='margin-left: 45px; text-align: left;'>To approve the {$fname}, locate user on your dashboard and click on the green tick, https://admin.certezaglobal.com.ng/users</p><br/>";

$send = mail($to, $subject, $body, $headers);
}

/** SIGN IN USER **/
 	if(isset($_POST['username']) && isset($_POST['password'])) {

			$username        = clean(escape($_POST['username']));
			$password   	 = md5($_POST['password']);

			$sql = "SELECT * FROM `users` WHERE `user` = '$username' AND `password` = '$password'";
			$result = query($sql);
			if(row_count($result) == 1) {

				$row 	= mysqli_fetch_array($result);
				$user 	= $row['user'];
				$active = $row['activated'];
				$email 	= $row['email'];
				$id	= $row['id'];
				$verified = $row['verified'];

				if ($active == 0) {

					$activator = token_generator();

					$_SESSION['usermail'] = $email;

					//update activation link
					$ups = "UPDATE `users` SET `activator` = '$activator' WHERE `usname` = '$username'";
					$ues = query($ups);

					//redirect to verify function
					$subj    = "VERIFY YOUR EMAIL";
					$link 	 = "https://admin.certezaglobal.com.ng/./activate?key=".$activator;

					mail_mailer($email, $activator, $subj, $link);

					//redirect to verify page
					echo '<script>window.location.href ="./verify"</script>';	
					
				}  else { 

					if ($verified === '2') {
						echo "Administrator has not granted you access yet.";
					}else{
						if ($verified === '0') {
							echo "Sorry, you have been Banned by Administrator";
						}else{

					if($username == $user) {
						if(isset($_SESSION['login'])) {

						    unset($_SESSION['login']);
						}
						
						$_SESSION['login'] = $username;

						echo 'Loading...Please Wait';	

						echo '<script>window.location.href ="./home?m='.$id.'"</script>';	
					} else {

						echo "This username doesn't have an account.";
					}
				}

			} 

		}
		}else {

		         echo 'Wrong Username or Password!';
                         
		}
	}



/** FORGOT PASSWORD **/
if(isset($_POST['ffemail'])) {
	
	$email  = clean(escape($_POST['ffemail']));

	if(!email_exist($email)) {

		echo "Sorry! This email doesn't exit";
		
	} else {

	$activator = token_generator();

	$ssl = "UPDATE users SET `activator` = '$activator' WHERE `email` = '$email'";
	$rsl = query($ssl);

	//redirect to verify function
	$subj = "RESET YOUR PASSWORD";
	$link = "https://admin.certezaglobal.com.ng/./recover?key=".$activator;

	$_SESSION['email'] = $email;

	fgmail_mailer($email, $activator, $subj, $link);

	//redirect to verify page
	echo 'Loading...Please Wait!';
	echo '<script>window.location.href ="./verify"</script>';

	}
}


/** FORGOT PASSWORD EMAIL **/
function fgmail_mailer($email, $activator, $subj, $link) {
	
$to 		= $email;
$from 		= "noreply@certezaglobal.com.ng";
$cmessage 	= "Best Regards<br/> <i>The Nft Hood</i>";

$headers  = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "Return-Path: ". $from ."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
$headers .= "X-Priority: 1 (Highest)\n";
$headers .= "X-MSMail-Priority: High\n";
$headers .= "Importance: High\n";

$subject = $subj;


$body = "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hello, <br/>you are about to chage your password. </p>";
$body .= "<p style='margin-left: 45px; text-align: left;'><a target='_blank' href='{$link}' style='color: #ff0000; text-decoration: none'><b>Click here to recover your password</b></a></p>
<br/>";
$send = mail($to, $subject, $body, $headers);
}



/** RESET PASSWORD **/
if(isset($_POST['fpassword']) && isset($_POST['cfpassword']) && isset($_POST['mail'])) {

	$fpassword = md5($_POST['fpassword']);
        $mail = $_POST['mail'];

	$sql = "UPDATE users SET `password` = '$fpassword', `activator` = '' WHERE `email` = '$mail'";
	$rsl = query($sql);

	//redirect to verify page
	echo 'Loading...Please Wait!';
	echo '<script>window.location.href ="./"</script>';
}



//Reset Bio Data
if (isset($_POST['cfname']) && isset($_POST['cuname']) && isset($_POST['cphone']) && isset($_POST['cwnum']) && isset($_POST['cniche']) & isset($_POST['cspec'])) {

	$cfname = $_POST['cfname'];
	$cuname = $_POST['cuname'];
	$cphone = $_POST['cphone'];
	$cwnum  = $_POST['cwnum'];
	$cniche = $_POST['cniche'];
	$cspec  = $_POST['cspec'];



	$user = $_SESSION['login'];
	$sql = "UPDATE users SET `name` = '$cfname', `user` = '$cuname', `phone` = '$cphone', `w_num` = '$cwnum', `niche` = '$cniche', `spec` = '$cspec' WHERE `user` = '$user'";
	$result = query($sql);
	echo 'Updating...';
	echo '<script> location.reload(); </script>';
}


//Update Password from Profile
if (isset($_POST['lpass']) && isset($_POST['npass']) && isset($_POST['cpass'])) {
	
	$lpass = md5($_POST['lpass']);
	$npass = md5($_POST['npass']);
	$cpass = md5($_POST['cpass']);
	$user = $_SESSION['login'];
	$sql = "SELECT * FROM `users` WHERE `user` = '$user' AND `password` = '$lpass'";
			$result = query($sql);
			if(row_count($result) == '') {
				echo "Your Last Password is Incorrect";
			}else{
				$sql = "UPDATE users SET `password` = '$npass' WHERE `user` = '$user'";
				$result = query($sql);

				echo 'Updating...';
				echo '<script> location.reload(); </script>';
			}

}

//Update Social Media Links from Profile
if (isset($_POST['cfb']) && isset($_POST['clinkedin']) && isset($_POST['cig']) && isset($_POST['ctwitter'])) {
	
	$cfb 		= $_POST['cfb'];
	$clinkedin 	= $_POST['clinkedin'];
	$cig 		= $_POST['cig'];
	$ctwitter 	= $_POST['ctwitter'];
	$user = $_SESSION['login'];
	$sql = "UPDATE users SET `facebook` = '$cfb', `linkedin` = '$clinkedin', `instagram` = '$cig', `twitter` = '$ctwitter' WHERE `user` = '$user'";
				$result = query($sql);

				echo 'Updating...';
				echo '<script> location.reload(); </script>';

}

// Upload profile Picture
			 
if (!empty($_FILES["file"]["name"])) {
	
	$target_dir = "../assets/images/";
	$target_file =  basename($_FILES["file"]["name"]);
	$targetFilePath = $target_dir . $target_file;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	   
		// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
		echo "Sorry, this image format is not allowed";
		$uploadOk = 0;
	} else {
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	   echo "Sorry, your profile picture was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	   
	   move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
	   
	   $user = $_SESSION['login'];
        // Insert form data in the database 
        $sql = "UPDATE users SET `pix` = 'assets/images/$target_file' WHERE `user` = '$user'";
		$result = query($sql);

	  echo 'Updating...';
	  echo '<script> location.reload(); </script>';
}
}	    	
}

//Update User about
if (isset($_POST['about'])) {
	
	$about 		= $_POST['about'];
	$user = $_SESSION['login'];
	$sql = "UPDATE users SET `about` = '$about' WHERE `user` = '$user'";
	$result = query($sql);

	echo 'Updating...';
	echo '<script> location.reload(); </script>';

}

//Upload new article 
if (isset($_POST['title']) && isset($_POST['tags']) && isset($_POST['cat']) && isset($_POST['status']) && isset($_POST['content']) && isset($_POST['pix'])) {

	
	   	$user = $_SESSION['login'];
	   	//get author's id
	   	$sql = "SELECT * FROM `users` WHERE `user` = '$user'";
		$result = query($sql);
		$row = fetch_array($result);
		$author_id = $row['id'];

		$title 		= $_POST['title'];
		//check if same title exist
		$sqll = "SELECT * FROM `article` WHERE `titles` = '$title'";
		$results = query($sqll);
		$title = strtolower($title);
		$title = trim($title);
		if (row_count($results) > 0) {
    	//asign a new post_url 
      	$url = str_replace(' ', '-', $title).rand(0, 99);
    	} else {
   	 	$url = str_replace(' ', '-', $title); 
    	}
		$tags 	= $_POST['tags'];
		$cat 		= $_POST['cat']; 
		$status 	= $_POST['status'];
		$content 		= escape($_POST['content']); 
		$date_reg = date('D, jS M, Y');
		$image = $_POST['pix'];

        // Insert article into db 
        $sqlt = "INSERT INTO article(`titles`, `tag`, `cat`, `status`, `content`, `image`, `date_uploaded`, `author`, `views`, `name`)";
		$sqlt.= " VALUES('$title', '$tags', '$cat', '$status', '$content', '$image', '$date_reg', '$author_id', '0', '$url')";
		$result = query($sqlt);
		if ($result != 1) {
			echo "Error! Please Consult Administrator.";
		} else {
			echo "Article Uploaded Successful!";
			echo '<script>window.location.href ="./articles" </script>';
		}
}


if (!empty($_FILES["article_image"]["name"])) {
	
	$target_dir = "../assets/images/article_images/";
	$path = "assets/images/article_images/";
	$target_file =  basename($_FILES["article_image"]["name"]);
	$targetFilePath = $target_dir . $target_file;
	$target_path = $path . $target_file;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	   
		// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
		echo "Sorry, this image format is not allowed";
		$uploadOk = 0;
	} else {
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	   echo "Sorry, your profile picture was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	   
	   move_uploaded_file($_FILES["article_image"]["tmp_name"], $targetFilePath);
	   ?>
	<img class="img-fluid" width="50px" height="auto" src="<?php echo $target_path; ?>" />
	<input type="text" name="" id="pic" hidden value="<?php echo $target_file; ?>">
	<?php
}
}	    	
}

//Edit article 
if (isset($_POST['ntitle']) && isset($_POST['ntags']) && isset($_POST['ncat']) && isset($_POST['nstatus']) && isset($_POST['ncontent']) && isset($_POST['npix']) && isset($_POST['p_id']) && isset($_POST['url']) && isset($_POST['ndate'])) {

	
	   	$user = $_SESSION['login'];
	   	//get author's id
	   	$sql = "SELECT * FROM `users` WHERE `user` = '$user'";
		$result = query($sql);
		$row = fetch_array($result);
		$author_id = $row['id'];

		$title 		= $_POST['ntitle'];
		$url 	= strtolower($title);
		//check if same title exist
		$sqll = "SELECT * FROM `article` WHERE `titles` = '$title'";
		$results = query($sqll);
		$title = strtolower($title);
		$title = trim($title);
		if (row_count($results) > 0) {
    	//asign a new post_url 
      	$url = str_replace(' ', '-', $title).rand(0, 99);
    	} else {
   	 	$url = str_replace(' ', '-', $title); 
    	}
		$tags 	= $_POST['ntags'];
		$cat 		= $_POST['ncat'];
		$status 	= $_POST['nstatus'];
		$content 		= escape($_POST['ncontent']); 
		$date_edit = date('D, jS M, y');
		$image = $_POST['npix'];
		$pid = $_POST['p_id'];
		$ndate = $_POST['ndate'];

        // Edit article in db 
        $sql = "UPDATE article SET `titles` = '$title', `tag` = '$tags', `cat` = '$cat', `status` = '$status', `content` = '$content', `image` = '$image', `date_uploaded` = '$ndate', `name` = '$title'  WHERE `id` = '$pid'";
		$result = query($sql);
        
		if ($result != 1) {
			echo "Error! Please Consult Administrator.";
		} else {
			echo "Article Uploaded Successful!";
			echo '<script>window.location.href ="./articles" </script>';
		}
}


//approve users
if (isset($_POST['approve'])) {
	$user 		= $_POST['approve'];
	$sql = "UPDATE users SET `verified` = '1' WHERE `name` = '$user'";
				$result = query($sql);

				echo 'User Approved!';
				echo '<script> location.reload(); </script>';

}

//Ban users
if (isset($_POST['ban'])) {
	$user 		= $_POST['ban'];
	$sql = "UPDATE users SET `verified` = '0' WHERE `name` = '$user'";
				$result = query($sql);

				echo 'User Banned!';
				echo '<script>window.location.href ="./users" </script>';

}

//Delete users
if (isset($_POST['del'])) {
	$user 		= $_POST['del'];
	$sql = "DELETE FROM users WHERE `name` = '$user'";
				$result = query($sql);

				echo 'User Deleted!';
				echo '<script>window.location.href ="./users" </script>';

}

//email users
if (isset($_POST['user']) && isset($_POST['message']) && isset($_POST['subject'])) {
	$user = $_POST['user'];

	if ($user === 'All Users') {
	$sql = "SELECT * FROM `users`";
	$result = query($sql);
	$row_count = row_count($result);
	$alert = "Email Sent to ".$row_count." Users !";
	} else {
	$sql = "SELECT * FROM `users`  WHERE `user` = '$user'";
	$result = query($sql);
	$alert = "Email Sent to ".$user." !";
	}
	
	foreach ($result as $row) {
	$email = $row['email'];
	$name = $_SESSION['login'];
	$sqlz = "SELECT * FROM `users` WHERE `user` = '$name'";
	$resultz = query($sqlz);
	$rowz = fetch_array($resultz);
	$fname = $rowz['name'];
	$message =  $_POST['message'];
	$subject =  $_POST['subject'];
	email_user($email, $subject, $message, $fname);

	}
	echo $alert;
	}

function email_user($email, $subject, $message, $fname) {
	
$to 		= $email;
$from 		= "noreply@certezaglobal.com.ng";

$headers  = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
$headers .= "X-Priority: 1 (Highest)\n";
$headers .= "X-MSMail-Priority: High\n";
$headers .= "Importance: High\n";

$sub = $subject;
$sender = $fname;
$body = "

<body class='clean-body u_body' style='margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #e7e7e7;color: #000000'>
  <!--[if IE]><div class='ie-container'><![endif]-->
  <!--[if mso]><div class='mso-container'><![endif]-->
  <table style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #e7e7e7;width:100%' cellpadding='0' cellspacing='0'>
  <tbody>
  <tr style='vertical-align: top'>
    <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
    <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td align='center' style='background-color: #e7e7e7;'><![endif]-->
    

<div class='u-row-container' style='padding: 0px;background-color: transparent'>
  <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;'>
    <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
      <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: transparent;'><![endif]-->
      
<!--[if (mso)|(IE)]><td align='center' width='600' style='background-color: #323a3e;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
<div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
  <div style='background-color: #323a3e;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
  <!--[if (!mso)&(!IE)]><!--><div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'><!--<![endif]-->
  
<table id='u_content_image_2' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:20px 10px 10px;font-family:arial,helvetica,sans-serif;' align='left'>
        
<table width='100%' cellpadding='0' cellspacing='0' border='0'>
  <tr>
    <td style='padding-right: 0px;padding-left: 0px;' align='center'>
      
      <img align='center' border='0' src='https://certezaglobal.com.ng/blogger/images/image-8.png' alt='Unlayer Logo' title='Unlayer Logo' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 25%;max-width: 145px;' width='145' class='v-src-width v-src-max-width'/>
      
    </td>
  </tr>
</table>

      </td>
    </tr>
  </tbody>
</table>

<table id='u_content_menu_1' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:10px 10px 0px;font-family:arial,helvetica,sans-serif;' align='left'>
        
<div class='menu' style='text-align:center'>
<!--[if (mso)|(IE)]><table role='presentation' border='0' cellpadding='0' cellspacing='0' align='center'><tr><![endif]-->

  <!--[if (mso)|(IE)]><td style='padding:5px 40px'><![endif]-->
  
    <a href='https://www.unlayer.com' target='_self' style='padding:5px 40px;display:inline-block;color:#ecf0f1;font-family:'Montserrat',sans-serif;font-size:14px;text-decoration:none'  class='v-padding v-font-size'>
      About
    </a>
  
  <!--[if (mso)|(IE)]></td><![endif]-->
  

  <!--[if (mso)|(IE)]><td style='padding:5px 40px'><![endif]-->
  
    <a href='https://www.unlayer.com' target='_self' style='padding:5px 40px;display:inline-block;color:#ecf0f1;font-family:'Montserrat',sans-serif;font-size:14px;text-decoration:none'  class='v-padding v-font-size'>
      Services
    </a>
  
  <!--[if (mso)|(IE)]></td><![endif]-->
  

  <!--[if (mso)|(IE)]><td style='padding:5px 40px'><![endif]-->
  
    <a href='https://www.unlayer.com' target='_self' style='padding:5px 40px;display:inline-block;color:#ecf0f1;font-family:'Montserrat',sans-serif;font-size:14px;text-decoration:none'  class='v-padding v-font-size'>
      Blogs
    </a>
  
  <!--[if (mso)|(IE)]></td><![endif]-->
  

  <!--[if (mso)|(IE)]><td style='padding:5px 40px'><![endif]-->
  
    <a href='Contact Us' target='_self' style='padding:5px 40px;display:inline-block;color:#ecf0f1;font-family:'Montserrat',sans-serif;font-size:14px;text-decoration:none'  class='v-padding v-font-size'>
      Page
    </a>
  
  <!--[if (mso)|(IE)]></td><![endif]-->
  

<!--[if (mso)|(IE)]></tr></table><![endif]-->
</div>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class='u-row-container' style='padding: 0px;background-color: transparent'>
  <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;'>
    <div style='border-collapse: collapse;display: table;width: 100%;background-image: url('https://certezaglobal.com.ng/blogger/images/image-6.png');background-repeat: no-repeat;background-position: center top;background-color: transparent;'>
      <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-image: url('https://certezaglobal.com.ng/blogger/images/image-6.png');background-repeat: no-repeat;background-position: center top;background-color: transparent;'><![endif]-->
      
<!--[if (mso)|(IE)]><td align='center' width='600' style='width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;' valign='top'><![endif]-->
<div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
  <div style='width: 100% !important;'>
  <!--[if (!mso)&(!IE)]><!--><div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;'><!--<![endif]-->
  
<table id='u_content_text_5' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:46px 10px 15px;font-family:arial,helvetica,sans-serif;' align='left'>
        
  <div style='color: #00c1ed; line-height: 140%; text-align: center; word-wrap: break-word;'>
    <p style='font-size: 14px; line-height: 140%;'><span style='font-size: 40px; line-height: 56px;'><strong><span style='font-family: 'Lobster Two', cursive; line-height: 56px; font-size: 40px;'>A Milestone Worth</span></strong></span><br /><span style='font-size: 40px; line-height: 56px; color: #ffffff;'><strong><span style='font-family: 'Lobster Two', cursive; line-height: 56px; font-size: 40px;'>Celebrating</span></strong></span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

<table id='u_content_heading_3' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:65px 15px 0px 10px;font-family:arial,helvetica,sans-serif;' align='left'>
        
  <h1 class='v-font-size' style='margin: 0px; color: #00c1ed; line-height: 100%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: arial black,avant garde,arial; font-size: 170px;'>
    <strong>2</strong>
  </h1>

      </td>
    </tr>
  </tbody>
</table>

<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:0px 6px 60px 0px;font-family:arial,helvetica,sans-serif;' align='left'>
        
  <div style='color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word;'>
    <p style='font-size: 14px; line-height: 140%;'><span style='font-family: 'arial black', 'avant garde', arial; font-size: 20px; line-height: 28px;'><strong>Y E A R S</strong></span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

<table id='u_content_heading_5' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:30px 10px 0px;font-family:arial,helvetica,sans-serif;' align='left'>
        
  <h1 class='v-font-size' style='margin: 0px; color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: arial black,avant garde,arial; font-size: 26px;'>
    VERIZON IS TURNING 2!
  </h1>

      </td>
    </tr>
  </tbody>
</table>

<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:0px 10px 10px;font-family:arial,helvetica,sans-serif;' align='left'>
        
  <h1 class='v-font-size' style='margin: 0px; color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: 'Montserrat',sans-serif; font-size: 20px;'>
    Get Ready to Celebrate
  </h1>

      </td>
    </tr>
  </tbody>
</table>

<table id='u_content_image_5' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:30px 10px 0px;font-family:arial,helvetica,sans-serif;' align='left'>
        
<table width='100%' cellpadding='0' cellspacing='0' border='0'>
  <tr>
    <td style='padding-right: 0px;padding-left: 0px;' align='center'>
      
      <img align='center' border='0' src='https://certezaglobal.com.ng/blogger/images/image-7.png' alt='Gadgets ' title='Gadgets ' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 70%;max-width: 406px;' width='406' class='v-src-width v-src-max-width'/>
      
    </td>
  </tr>
</table>

      </td>
    </tr>
  </tbody>
</table>

<table id='u_content_text_4' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:30px 55px 0px;font-family:arial,helvetica,sans-serif;' align='left'>
        
  <div style='color: #ecf0f1; line-height: 140%; text-align: center; word-wrap: break-word;'>
    <p style='font-size: 14px; line-height: 140%;'><span style='font-family: Montserrat, sans-serif; font-size: 14px; line-height: 19.6px;'>Our company would like to extend an invitation for you and all your employees, clients or anyone else who is celebrating a special day this week. We hope that we can make it a memorable experience with our great service!</span></p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

<table id='u_content_image_1' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:30px 10px;font-family:arial,helvetica,sans-serif;' align='left'>
        
<table width='100%' cellpadding='0' cellspacing='0' border='0'>
  <tr>
    <td style='padding-right: 0px;padding-left: 0px;' align='center'>
      
      <img align='center' border='0' src='https://certezaglobal.com.ng/blogger/images/image-1.png' alt='Pattern' title='Pattern' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 43%;max-width: 249.4px;' width='249.4' class='v-src-width v-src-max-width'/>
      
    </td>
  </tr>
</table>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class='u-row-container' style='padding: 0px;background-color: transparent'>
  <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;'>
    <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
      <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: transparent;'><![endif]-->
      
<!--[if (mso)|(IE)]><td align='center' width='600' style='background-color: #323a3e;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
<div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
  <div style='background-color: #323a3e;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
  <!--[if (!mso)&(!IE)]><!--><div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'><!--<![endif]-->
  
<table id='u_content_heading_7' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:5px 10px 0px;font-family:arial,helvetica,sans-serif;' align='left'>
        
  <h1 class='v-font-size' style='margin: 0px; color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: arial black,avant garde,arial; font-size: 26px;'>
    <strong>21 MAY 2022</strong>
  </h1>

      </td>
    </tr>
  </tbody>
</table>

<table id='u_content_heading_9' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:5px 10px 0px;font-family:arial,helvetica,sans-serif;' align='left'>
        
  <h1 class='v-font-size' style='margin: 0px; color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: 'Montserrat',sans-serif; font-size: 20px;'>
    St. Thomas&rsquo;s Church, London, U.K
  </h1>

      </td>
    </tr>
  </tbody>
</table>

<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:0px 10px 20px;font-family:arial,helvetica,sans-serif;' align='left'>
        
  <h1 class='v-font-size' style='margin: 0px; color: #ecf0f1; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: 'Montserrat',sans-serif; font-size: 14px;'>
    Doors Open 08:00 PM
  </h1>

      </td>
    </tr>
  </tbody>
</table>

<table id='u_content_button_1' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:10px 10px 30px;font-family:arial,helvetica,sans-serif;' align='left'>
        
<div align='center'>
  <!--[if mso]><table width='100%' cellpadding='0' cellspacing='0' border='0' style='border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:arial,helvetica,sans-serif;'><tr><td style='font-family:arial,helvetica,sans-serif;' align='center'><v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='https://www.unlayer.com' style='height:38px; v-text-anchor:middle; width:173px;' arcsize='13%' stroke='f' fillcolor='#00c1ed'><w:anchorlock/><center style='color:#FFFFFF;font-family:arial,helvetica,sans-serif;'><![endif]-->
    <a href='https://www.unlayer.com' target='_blank' class='v-size-width' style='box-sizing: border-box;display: inline-block;font-family:arial,helvetica,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #00c1ed; border-radius: 5px;-webkit-border-radius: 5px; -moz-border-radius: 5px; width:30%; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;'>
      <span class='v-padding' style='display:block;padding:10px 20px;line-height:120%;'><strong><span style='font-size: 14px; line-height: 16.8px; font-family: Montserrat, sans-serif;'>JOIN US</span></strong></span>
    </a>
  <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
</div>

      </td>
    </tr>
  </tbody>
</table>

<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;' align='left'>
        
  <table height='0px' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #555555;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
    <tbody>
      <tr style='vertical-align: top'>
        <td style='word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%'>
          <span>&#160;</span>
        </td>
      </tr>
    </tbody>
  </table>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>



<div class='u-row-container' style='padding: 0px;background-color: transparent'>
  <div class='u-row' style='Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;'>
    <div style='border-collapse: collapse;display: table;width: 100%;background-color: transparent;'>
      <!--[if (mso)|(IE)]><table width='100%' cellpadding='0' cellspacing='0' border='0'><tr><td style='padding: 0px;background-color: transparent;' align='center'><table cellpadding='0' cellspacing='0' border='0' style='width:600px;'><tr style='background-color: transparent;'><![endif]-->
      
<!--[if (mso)|(IE)]><td align='center' width='600' style='background-color: #323a3e;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;' valign='top'><![endif]-->
<div class='u-col u-col-100' style='max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;'>
  <div style='background-color: #323a3e;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'>
  <!--[if (!mso)&(!IE)]><!--><div style='padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;'><!--<![endif]-->
  
<table style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:30px 10px 10px;font-family:arial,helvetica,sans-serif;' align='left'>
        
<div align='center'>
  <div style='display: table; max-width:147px;'>
  <!--[if (mso)|(IE)]><table width='147' cellpadding='0' cellspacing='0' border='0'><tr><td style='border-collapse:collapse;' align='center'><table width='100%' cellpadding='0' cellspacing='0' border='0' style='border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:147px;'><tr><![endif]-->
  
    
    <!--[if (mso)|(IE)]><td width='32' style='width:32px; padding-right: 5px;' valign='top'><![endif]-->
    <table align='left' border='0' cellspacing='0' cellpadding='0' width='32' height='32' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 5px'>
      <tbody><tr style='vertical-align: top'><td align='left' valign='middle' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
        <a href='https://facebook.com/' title='Facebook' target='_blank'>
          <img src='https://certezaglobal.com.ng/blogger/images/image-5.png' alt='Facebook' title='Facebook' width='32' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important'>
        </a>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    
    <!--[if (mso)|(IE)]><td width='32' style='width:32px; padding-right: 5px;' valign='top'><![endif]-->
    <table align='left' border='0' cellspacing='0' cellpadding='0' width='32' height='32' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 5px'>
      <tbody><tr style='vertical-align: top'><td align='left' valign='middle' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
        <a href='https://twitter.com/' title='Twitter' target='_blank'>
          <img src='https://certezaglobal.com.ng/blogger/images/image-3.png' alt='Twitter' title='Twitter' width='32' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important'>
        </a>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    
    <!--[if (mso)|(IE)]><td width='32' style='width:32px; padding-right: 5px;' valign='top'><![endif]-->
    <table align='left' border='0' cellspacing='0' cellpadding='0' width='32' height='32' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 5px'>
      <tbody><tr style='vertical-align: top'><td align='left' valign='middle' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
        <a href='https://linkedin.com/' title='LinkedIn' target='_blank'>
          <img src='https://certezaglobal.com.ng/blogger/images/image-2.png' alt='LinkedIn' title='LinkedIn' width='32' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important'>
        </a>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    
    <!--[if (mso)|(IE)]><td width='32' style='width:32px; padding-right: 0px;' valign='top'><![endif]-->
    <table align='left' border='0' cellspacing='0' cellpadding='0' width='32' height='32' style='border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px'>
      <tbody><tr style='vertical-align: top'><td align='left' valign='middle' style='word-break: break-word;border-collapse: collapse !important;vertical-align: top'>
        <a href='https://instagram.com/' title='Instagram' target='_blank'>
          <img src='https://certezaglobal.com.ng/blogger/images/image-4.png' alt='Instagram' title='Instagram' width='32' style='outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important'>
        </a>
      </td></tr>
    </tbody></table>
    <!--[if (mso)|(IE)]></td><![endif]-->
    
    
    <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
  </div>
</div>

      </td>
    </tr>
  </tbody>
</table>

<table id='u_content_text_3' style='font-family:arial,helvetica,sans-serif;' role='presentation' cellpadding='0' cellspacing='0' width='100%' border='0'>
  <tbody>
    <tr>
      <td class='v-container-padding-padding' style='overflow-wrap:break-word;word-break:break-word;padding:10px 10px 30px;font-family:arial,helvetica,sans-serif;' align='left'>
        
  <div style='color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word;'>
    <p style='font-size: 14px; line-height: 140%;'>2261 Market Street #4667 San Francisco, CA 94114</p>
<p style='font-size: 14px; line-height: 140%;'>&nbsp;</p>
<p style='font-size: 14px; line-height: 140%;'>All rights reserved. &nbsp;Company No. 94114</p>
<p style='font-size: 14px; line-height: 140%;'>Preferences | Unsubscribe &nbsp;| View in browser</p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>


    <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
    </td>
  </tr>
  </tbody>
  </table>
  <!--[if mso]></div><![endif]-->
  <!--[if IE]></div><![endif]-->
</body>";

$send = mail($to, $subject, $body, $headers);
}


//Upload new article 
if (isset($_POST['']) && isset($_POST['tags']) && isset($_POST['cat']) && isset($_POST['status']) && isset($_POST['content']) && isset($_POST['pix'])) {

	
	   	$user = $_SESSION['login'];
	   	//get author's id
	   	$sql = "SELECT * FROM `users` WHERE `user` = '$user'";
		$result = query($sql);
		$row = fetch_array($result);
		$author_id = $row['id'];

		$title 		= $_POST['title'];
		//check if same title exist
		$sqll = "SELECT * FROM `article` WHERE `titles` = '$title'";
		$results = query($sqll);
		if (row_count($results) > 0) {
    	//asign a new post_url 
      	$url = str_replace(' ', '-', $title).rand(0, 99);
    	} else {
   	 	$url = str_replace(' ', '-', $title); 
    	}
		$tags 	= $_POST['tags'];
		$cat 		= $_POST['cat'];
		$status 	= $_POST['status'];
		$content 		= $_POST['content']; 
		$date_reg = date('D, jS M, Y');
		$image = $_POST['pix'];

        // Insert article into db 
        $sqlt = "INSERT INTO article(`titles`, `tag`, `cat`, `status`, `content`, `image`, `date_uploaded`, `author`, `views`, `name`)";
		$sqlt.= " VALUES('$title', '$tags', '$cat', '$status', '$content', '$image', '$date_reg', '$author_id', '0', '$url')";
		$result = query($sqlt);
		if ($result != 1) {
			echo "Error! Please Consult Administrator.";
		} else {
			echo "Article Uploaded Successful!";
			echo '<script>window.location.href ="./articles" </script>';
		}
}

// //Upload new article 
// if (isset($_POST['title']) && isset($_POST['tags']) && isset($_POST['cat']) && isset($_POST['status']) && isset($_POST['content']) && isset($_POST['pix'])) {

	
// 	   	$user = $_SESSION['login'];
// 	   	//get author's id
// 	   	$sql = "SELECT * FROM `users` WHERE `user` = '$user'";
// 		$result = query($sql);
// 		$row = fetch_array($result);
// 		$author_id = $row['id'];

// 		$title 		= $_POST['title'];
// 		//check if same title exist
// 		$sqll = "SELECT * FROM `article` WHERE `titles` = '$title'";
// 		$results = query($sqll);
// 		if (row_count($results) > 0) {
//     	//asign a new post_url 
//       	$url = str_replace(' ', '-', $title).rand(0, 99);
//     	} else {
//    	 	$url = str_replace(' ', '-', $title); 
//     	}
// 		$tags 	= $_POST['tags'];
// 		$cat 		= $_POST['cat'];
// 		$status 	= $_POST['status'];
// 		$content 		= $_POST['content']; 
// 		$date_reg = date('D, jS M, Y');
// 		$image = $_POST['pix'];

//         // Insert article into db 
//         $sqlt = "INSERT INTO article(`titles`, `tag`, `cat`, `status`, `content`, `image`, `date_uploaded`, `author`, `views`, `name`)";
// 		$sqlt.= " VALUES('$title', '$tags', '$cat', '$status', '$content', '$image', '$date_reg', '$author_id', '0', '$url')";
// 		$result = query($sqlt);
// 		if ($result != 1) {
// 			echo "Error! Please Consult Administrator.";
// 		} else {
// 			echo "Article Uploaded Successful!";
// 			echo '<script>window.location.href ="./articles" </script>';
// 		}
// }

// //Upload new article 
// if (isset($_POST['title']) && isset($_POST['tags']) && isset($_POST['cat']) && isset($_POST['status']) && isset($_POST['content']) && isset($_POST['pix'])) {

	
// 	   	$user = $_SESSION['login'];
// 	   	//get author's id
// 	   	$sql = "SELECT * FROM `users` WHERE `user` = '$user'";
// 		$result = query($sql);
// 		$row = fetch_array($result);
// 		$author_id = $row['id'];

// 		$title 		= $_POST['title'];
// 		//check if same title exist
// 		$sqll = "SELECT * FROM `article` WHERE `titles` = '$title'";
// 		$results = query($sqll);
// 		if (row_count($results) > 0) {
//     	//asign a new post_url 
//       	$url = str_replace(' ', '-', $title).rand(0, 99);
//     	} else {
//    	 	$url = str_replace(' ', '-', $title); 
//     	}
// 		$tags 	= $_POST['tags'];
// 		$cat 		= $_POST['cat'];
// 		$status 	= $_POST['status'];
// 		$content 		= $_POST['content']; 
// 		$date_reg = date('D, jS M, Y');
// 		$image = $_POST['pix'];

//         // Insert article into db 
//         $sqlt = "INSERT INTO article(`titles`, `tag`, `cat`, `status`, `content`, `image`, `date_uploaded`, `author`, `views`, `name`)";
// 		$sqlt.= " VALUES('$title', '$tags', '$cat', '$status', '$content', '$image', '$date_reg', '$author_id', '0', '$url')";
// 		$result = query($sqlt);
// 		if ($result != 1) {
// 			echo "Error! Please Consult Administrator.";
// 		} else {
// 			echo "Article Uploaded Successful!";
// 			echo '<script>window.location.href ="./articles" </script>';
// 		}


// 	}

//Add new Category 
	if (isset($_POST['category'])) {

		$category = $_POST['category'];

        // Insert article into db 
        $sqlt = "INSERT INTO blog_categories(`name`)";
		$sqlt.= " VALUES('$category')";
		$result = query($sqlt);
		if ($result != 1) {
			
		} else {
			echo "Category Added Successful!";
			echo '<script> location.reload(); </script>';
		}
}


//delete Category
	if (isset($_POST['category'])) {

		$category = $_POST['category'];

        // Insert article into db 
        $sqlt = "DELETE FROM blog_categories WHERE `name` = '$category'";
		$sqlt.= " VALUES('$category')";
		$result = query($sqlt);
		if ($result != 1) {
			echo "Error! Please Consult Administrator.";
		} else {
			echo '<script> location.reload(); </script>';
		}
}

//Upload Ad
if (isset($_POST['name']) && isset($_POST['product']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['contact']) && isset($_POST['image'])) {

	
		$name 		= $_POST['name'];
		$product 	= $_POST['product'];
		$start		= $_POST['start'];
		$end 	= $_POST['end'];
		$contact 		= $_POST['contact']; 
		$image = $_POST['image'];

        // Insert article into db 
        $sqlt = "INSERT INTO ads(`name`, `product`, `start`, `end`, `contact`, `image`, `status`)";
		$sqlt.= " VALUES('$name', '$product', '$start', '$end', '$contact', '$image', '1')";
		$result = query($sqlt);
		if ($result != 1) {
			echo "Error! Please Consult Administrator.";
		} else {
			echo "Ad Uploaded Successful!";
			echo '<script>window.location.href ="./ads" </script>';
		}
}


//profile image for register from dashboard
if (!empty($_FILES["user_image"]["name"])) {
	
	$target_dir = "../assets/images/";
	$path = "assets/images/";
	$target_file =  basename($_FILES["user_image"]["name"]);
	$targetFilePath = $target_dir . $target_file;
	$target_path = $path . $target_file;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	   
		// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
		echo "Sorry, this image format is not allowed";
		$uploadOk = 0;
	} else {
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	   echo "Sorry, your profile picture was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	   
	   move_uploaded_file($_FILES["user_image"]["tmp_name"], $targetFilePath);
	   ?>
	<img class="img-fluid" width="100px" height="auto" src="<?php echo $target_path; ?>" />
	<input type="text" name="" id="pic" hidden value="assets/images/<?php echo $target_file; ?>">
	<?php
}
}	    	
}

//ad Image
if (!empty($_FILES["ad_image"]["name"])) {
	
	$target_dir = "../assets/images/ad_image/";
	$path = "assets/images/ad_image/";
	$target_file =  basename($_FILES["ad_image"]["name"]);
	$targetFilePath = $target_dir . $target_file;
	$target_path = $path . $target_file;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	   
		// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
		echo "Sorry, this image format is not allowed";
		$uploadOk = 0;
	} else {
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	   echo "Sorry, your profile picture was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	   
	   move_uploaded_file($_FILES["ad_image"]["tmp_name"], $targetFilePath);
	   ?>
	<img class="img-fluid" width="100px" height="auto" src="<?php echo $target_path; ?>" />
	<input type="text" name="" id="pic" hidden value="assets/images/ad_image/<?php echo $target_file; ?>">
	<?php
}
}	    	
}


//Upload short Web details
	if (isset($_POST['short'])) {

		$short = escape($_POST['short']);

        // Insert article into db 
        $sqlt = "UPDATE details SET short_des = '$short'";
		$result = query($sqlt);
		if ($result != 1) {
			echo "Error! Please Consult Administrator.";
		} else {
			echo "Details Updated";
			echo '<script> location.reload(); </script>';
		}
}

//Upload Long Web Details 
	if (isset($_POST['long'])) {

		$longer = escape($_POST['long']);

        // Insert article into db 
        $sqlt = "UPDATE details SET long_des = '$longer'";
		$result = query($sqlt);
		if ($result != 1) {
			echo "Error! Please Consult Administrator.";
		} else {
			echo "Details Updated";
			echo '<script> location.reload(); </script>';
		}
}

//Delete Article
	if (isset($_POST['del_article'])) {

		$long = $_POST['del_article'];

        // Insert article into db 
        $sqlt = "DELETE FROM article WHERE `name` = '$long'";
		$result = query($sqlt);
		if ($result != 1) {
			echo "Error! Please Consult Administrator.";
		} else {
			echo '<script> window.location.href ="./articles" </script>';
		}
}

//Delete category
	if (isset($_POST['del_cat'])) {

		$long = $_POST['del_cat'];

        // Insert article into db 
  //       $sqlt = "DELETE FROM blog_categories WHERE `name` = '$long'";
		// $result = query($sqlt);
		// if ($result != 1) {
		// 	echo "Error! Please Consult Administrator.";
		// } else {
		// 	echo '<script> location.reload(); </script>';
		// }
		echo '<script> location.reload(); </script>';
}
?> 