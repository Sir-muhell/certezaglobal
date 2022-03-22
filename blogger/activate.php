<?php include("functions/init.php");
if(isset($_SESSION['login'])) {

    unset($_SESSION['login']);
}
if(!isset($_GET['key'])) {

    header("location: ./ ");
} else {

    $pass = $_GET['key'];

    $sql = "SELECT * FROM users WHERE `activator` = '$pass'";
    $rsl = query($sql);
    
    if(row_count($rsl) == 1) {

    $row = mysqli_fetch_array($rsl);

    //activate user
    $ssl = "UPDATE users SET `activated` = '1', `activator` = '' WHERE `activator` = '$pass'";
    $res = query($ssl);

    } else {

        header("location: ./ ");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Activate Email | Certeza Global</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../images/logo7.png" />
</head>
<body class="container" style="background-color: #e6e6e6;">
    <center>
        <h4 style="margin-top: 20%">Account Verified Successfully!</h4>
        <a href="./"><button type="button" id="" style="width: 35%;" class="btn btn-danger">Login  </button></a>
    </center>
</body>
</html>
