<?php include('functions/init.php');  


 $username = $_SESSION['login'] ;
 $id = $_SESSION['id'];
 
if(!isset($_SESSION['login'])) {
    header("location: ./ ");
}
$sql = "SELECT * FROM `users` WHERE `user` = '$username' AND `id` = '$id'";
$result = query($sql);
$row = fetch_array($result);
if(row_count($result) == 0){
  session_destroy();
  header("location: ./ ");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Articles | Certeza Global</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- End layout styles -->
    <link rel="icon" type="image/png" href="../images/logo7.png" />
    <style>
      div.scroll {
        overflow-x: auto; }
    </style>
  </head>
 <?php include('includes/header.php'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper ">
        <!-- partial:../../partials/_sidebar.html -->
       <?php include('includes/sidebar.php') ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">View All Articles </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./home?m=<?php echo $id; ?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">All Articles</li>
                </ol>
              </nav>
            </div>
            <div class="row">

              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body scroll">
                    <h4 class="card-title">Articles</h4>
                    </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th> Title </th>
                          <th> Category </th>
                          <th> Tags </th>
                          <th> Image </th>
                          <th>Author</th>
                          <th>Date Uploaded</th>
                          <th>No Views</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $sql = "SELECT * FROM article";
                      $result = query($sql);
                      while($row = mysqli_fetch_array($result)) {

                       ?>
                        <tr>
                          <td class="py-1">
                            <?php echo $row['titles']; ?>
                          </td>
                          <td><?php echo $row['cat']; ?></td>
                          <td>
                            <?php echo $row['tag']; ?>
                          </td>
                          <td><img src="./assets/images/article_images/<?php echo $row['image']; ?>" alt="image" /></td>
                          <?php
                          $author = $row['author'];
                          $sqlq = "SELECT * FROM users WHERE `id` = '$author'";
                          $resultq = query($sqlq);
                          $rowq = fetch_array($resultq);
                           ?>

                          <td><?php echo $rowq['name']; ?></td>
                          <td><?php echo $row['date_uploaded']; ?></td>
                          <td><?php echo $row['views']; ?></td>
                          <!-- <td><span class="icon-sm"><i class="mdi mdi-checkbox-marked-circle "><i class="mdi mdi-close-box"></i></i></span></td> -->
                          <td><?php echo $row['status']; ?></td>
                          <td><a href="./view?id=<?php echo $row['id']; ?>" style="color: white;"><button type="button" class="btn btn-primary btn-sm">View</button></a></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <?php include('includes/foot.php'); ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./assets/js/off-canvas.js"></script>
    <script src="./assets/js/hoverable-collapse.js"></script>
    <script src="./assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>