<?php
require("data/functions.php");

if(isset($_POST['comment_id']) && isset($_POST['comment']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['post_id'])) {

$commentId 			= $_POST['comment_id'];
$comment 			= $_POST['comment'];
$email 				= $_POST['email'];
$sender 	        = $_POST['name'];
$date 				= date('Y-m-d');
$time               = date('h:i:sA');
$postid 			= $_POST['post_id'];

$sql = "INSERT INTO comment(`parent_comment_id`, `comments`, `comment_sender`, `email`, `post_id`, `commentedon`, `timer`)";
$sql.= " VALUES('$commentId', '$comment', '$sender', '$email', '$postid', '$date', '$time')";

$result = mysqli_query($con, $sql);

if (! $result) {
    $result = mysqli_error($con);
}
echo $commentSenderName;




}
?>
