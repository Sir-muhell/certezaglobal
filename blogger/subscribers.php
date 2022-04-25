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

if ($id > 2) {
 header("location: ./home?m=<?php echo $id; ?>");
}
?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Subscribers | Certeza Global</title>
   <!-- plugins:css -->
   <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
   <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
   <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
   <!-- endinject -->
   <!-- Plugin css for this page -->
   <link rel="stylesheet" href="./assets/vendors/select2/select2.min.css">
   <link rel="stylesheet" href="./assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <!-- endinject -->
   <!-- Layout styles -->
   <link rel="stylesheet" href="./assets/css/style.css">
   <!-- End layout styles -->
   <link rel="icon" type="image/png" href="../images/logo7.png" />
   <link href="./assets/summernote/summernote-bs4.css" rel="stylesheet">
 </head>
 <body>
   <div class="container-scroller">
     <!-- partial:../../partials/_navbar.html -->
    <?php include('includes/header.php'); ?>
     <!-- partial -->
     <div class="container-fluid page-body-wrapper">
       <!-- partial:../../partials/_sidebar.html -->
       <?php include('includes/sidebar.php'); ?>
       <!-- partial -->
       <div class="main-panel">
        <div class="content-wrapper">
           <div class="page-header">
             <h3 class="page-title"> Subscribers </h3>
             <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="./home?m=<?php echo $id; ?>">Home</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Subscribers</li>
               </ol>
             </nav>
           </div>
           <div class="row">
             <div class="col-md-12 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <h4 class="card-title">All Subscribers</h4>
                   
                     <table class="table table-bordered">
                     <tr>
                      <thead>
                       <th>Name</th>
                       <td>Email</td>
                       <td>Date</td>
                       </thead>
                     </tr>
                     <?php
                     $sql = "SELECT * FROM subscribers ";
                      $res = query($sql);
                      foreach($res as $row) { 
                     ?>
                     <tr>
                      <tbody>
                       <td><?php echo $row['name']; ?></td>
                       <td><?php echo $row['email']; ?></td>
                       <td><?php echo $row['date']; ?></td>
                       </tbody>
                     </tr>
                   </table>
                  
                 </div>
               </div>
             </div>
             
             
           </div>
         </div>
         <!-- Modal -->
         <?php include('includes/modal.php'); ?>
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
   <script src="./assets/vendors/select2/select2.min.js"></script>
   <script src="./assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
   <!-- End plugin js for this page -->
   <!-- inject:js -->
   <script src="./assets/js/off-canvas.js"></script>
   <script src="./assets/js/hoverable-collapse.js"></script>
   <script src="./assets/js/misc.js"></script>
   <!-- endinject -->
   <script src="ajax.js"></script>
   <!-- Custom js for this page -->
   <script src="./assets/js/file-upload.js"></script>
   <script src="./assets/js/typeahead.js"></script>
   <script src="./assets/js/select2.js"></script>
    
 </body>
</html>












 