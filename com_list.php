<?php

session_start();

$postid = $_SESSION["postid"];
require("data/functions.php");
$sql = "SELECT * FROM comment  WHERE post_id = $postid ORDER BY parent_comment_id asc, comment_id desc";

$result = mysqli_query($con, $sql);
$record_set = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($record_set, $row);
}
mysqli_free_result($result);

mysqli_close($con);
echo json_encode($record_set);
?>