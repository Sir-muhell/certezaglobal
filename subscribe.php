<?php
    $fname = $_POST['name'];
    $email = $_POST['email']; 
    $date  = date("l jS \of F Y h:i:s A");
    $address = $address;

    $sql = "INSERT INTO subscribers(full_name,email,subscribed_on) VALUES ('" . $fname . "','" . $email . "','" . $date . "')";

$result = mysqli_query($con, $sql);

if (! $result) {
    $result = mysqli_error($con);
}
header("location: <?php echo $address; ?> ");
?>