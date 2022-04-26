<?php

session_start();

$postid = $_SESSION["postid"];

require("data/functions.php");
$sql = "SELECT * FROM comment  WHERE $postid = post_id  ORDER BY comment_id asc";

$result = mysqli_query($con, $sql);
$record_set = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($record_set, $row);
}
mysqli_free_result($result);

mysqli_close($con);
echo json_encode($record_set);
?>