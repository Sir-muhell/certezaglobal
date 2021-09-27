<?php
require("data/functions.php");
$commentId 			= isset($_POST['comment_id']) ? $_POST['comment_id'] : "";
$comment 			= isset($_POST['comment']) ? $_POST['comment'] : "";
$email 				= isset($_POST['email']) ? $_POST['email'] : "";
$commentSenderName 	= isset($_POST['name']) ? $_POST['name'] : "";
$date 				= date('Y-m-d');
$time               = time('H:i:s');
$postid 			= isset($_POST['post_id']) ? $_POST['post_id'] : "";

$sql = "INSERT INTO comment(parent_comment_id,comments,comment_sender,email,post_id,commentedon,timer) VALUES ('" . $commentId . "','" . $comment . "','" . $commentSenderName . "','" . $email . "','" . $postid . "','" . $date . "''" . $time . "')";

$result = mysqli_query($con, $sql);

if (! $result) {
    $result = mysqli_error($con);
}
echo $result;
echo $commentSenderName;
?>
