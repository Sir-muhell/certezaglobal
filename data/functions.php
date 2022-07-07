<?php 
ob_start();


date_default_timezone_set('Africa/Lagos');
include("db.php");
function db_fetch_assoc($res){
		
				return @mysqli_fetch_assoc($res);
		
	}
include("fetch_data.php");



//Subscribers
if (isset($_POST['subname']) && isset($_POST['subemail'])) {
		$subname = $_POST['subname'];
		$subemail = $_POST['subemail'];
		$date = date('D, jS M, Y h:i:s A');

		$sql = "SELECT * FROM `subscribers` WHERE `email` = '$email'";
		$result=mysqli_query($con,$sql);
		$rowcount=mysqli_num_rows($result);

	if ($rowcount==0) {
						 // Insert article into db 
        $sqlt = "INSERT INTO subscribers(`name`, `email`, `date`)";
		$sqlt.= " VALUES('$subname', '$subemail', '$date')";
		$result = mysqli_query($con,$sqlt);
		if ($result != 1) {
			echo "Error! Please Consult Administrator.";
		} else {
		echo "Thank you for subscribing!";
						
		}
						
	}else{

		echo "This email user has subscribed!";
	}

	
}

?>
