<?php 
ob_start();


date_default_timezone_set('Africa/Lagos');
include("data/db.php");
function db_fetch_assoc($res){
		
				return @mysqli_fetch_assoc($res);
		
	}
include("fetch_data.php");




?>
