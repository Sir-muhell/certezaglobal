<?php
require("data/functions.php");

if(isset($_POST['comment_id']) && isset($_POST['comment']) && isset($_POST['comemail']) && isset($_POST['comname']) && isset($_POST['post_id'])) {

$commentId 			= $_POST['comment_id'];
$comment 			= $_POST['comment'];
$cemail 				= $_POST['comemail'];
$sender 	        = $_POST['comname'];
$date 				= date('Y-m-d');
$time               = date('h:i:sA');
$postid 			= $_POST['post_id'];

$sql = "INSERT INTO comment(`parent_comment_id`, `comments`, `comment_sender`, `email`, `post_id`, `commentedon`, `timer`)";
$sql.= " VALUES('$commentId', '$comment', '$sender', '$cemail', '$postid', '$date', '$time')";

$result = mysqli_query($con, $sql);

if (! $result) {
    $result = mysqli_error($con);
}
echo $result;
echo $commentSenderName;




}
?>
