<?php 
ob_start();


date_default_timezone_set('Africa/Lagos');
include("data/db.php");
function db_fetch_assoc($res){
		
				return @mysqli_fetch_assoc($res);
		
	}
include("fetch_data.php");


//Upload new Category 
	if (isset($_POST['name']) && isset($_POST['email'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$date = date('D, jS M, Y');

        // Insert article into db 
         $sqlt = "INSERT INTO subscribers(`name`, `email`, `date`)";
		$sqlt.= " VALUES('$name', '$email', '$date')";
		$result = query($sqlt);
		if ($result != 1) {
			echo "Error! Please Consult Administrator.";
		} else {
			echo "hank you for subscribing!";
			
		}
}

?>
