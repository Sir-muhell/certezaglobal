<?php
//creating the database to use
//$con = mysqli_connect("localhost","certezag_blogger","mycertezapasswordissafe","certezag_data");
$con = mysqli_connect("localhost","root","","certeza");

function row_count($result) {

global $con;

	return mysqli_num_rows($result); 
}
?>