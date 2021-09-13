<?php
//creating the database to use
$con = mysqli_connect("localhost","root","","olapearls_blog");

function row_count($result) {

global $con;

	return mysqli_num_rows($result); 
}
?>