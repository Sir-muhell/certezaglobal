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
$sql = "SELECT * FROM comment  WHERE $postid = post_id  ORDER BY comment_id desc";

$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($rsl)) {

    ?>
    <li class='comment'>
    <div class='comment_body' style='margin-bottom: -50px'>+
    <div class='comment_panel d-flex flex-row align-items-center justify-content-start'>+
    <small class='post_meta'><a href='#'><b> <?php echo $row['comment_sender']; ?></b></a><span><?php echo $row['commentedon'];?>  at  <?php echo $row['timer']; ?></span></small>
    
    </div>
    <div class='comment_content'>
    <p style='margin-top: -25px; margin-left:18px;'><?php echo $row['comments']; ?></p><hr>+
    </div></div></li>"

<?php }
$result = query($sql);
}
?>
