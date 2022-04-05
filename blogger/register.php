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

if ($id != '1') {
 header("./home?m=<?php echo $id; ?>");
}
?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Add User | Certeza Global</title>
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
   <link rel="shortcut icon" href="../images/logo7.png" />
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
             <h3 class="page-title"> Register New User </h3>
             <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="./home?m=<?php echo $id; ?>">Home</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Register New User</li>
               </ol>
             </nav>
           </div>
           <div class="row">
             <div class="col-md-6 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <h4 class="card-title">Bio-Data</h4>
                   <form class="forms-sample">
                     <div class="form-group">
                       <label for="exampleInputUsername1">Username</label>
                       <input type="text" class="form-control" id="uname" >
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Email address</label>
                       <input type="email" class="form-control" id="umail" >
                     </div>
                     <div class="form-group">
                       <label for="exampleInputUsername1">Full Name</label>
                       <input type="text" class="form-control" id="fname" >
                     </div>
                     <div class="form-group">
                       <label for="exampleInputPassword1">Phone Number</label>
                       <input type="text" class="form-control" id="phone">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputConfirmPassword1">WhatApp Number</label>
                       <input type="text" class="form-control" id="wnum" >
                     </div>
                     <div class="form-group">
                       <label for="exampleInputConfirmPassword1">Niche</label>
                       <input type="text" class="form-control" id="niche"   >
                     </div>
                     <div class="form-group">
                       <label for="exampleInputConfirmPassword1">Specialization</label>
                       <input type="text" class="form-control" id="spec"   >
                     </div>
                   </form>
                 </div>
               </div>
             </div>
             <div class="col-md-6 grid-margin">
               <div class="card">
                 <div class="card-body">
                   <h4 class="card-title">Social Media Links</h4>
                   <form class="forms-sample">
                     <div class="form-group">
                       <label for="exampleInputUsername1">FaceBook</label>
                       <input type="text" class="form-control" id="fb" value="https://facebook.com/" >
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">LinkedIn</label>
                       <input type="text" class="form-control" id="linkedin" value="https://linkedin.com/">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputUsername1">Instagram</label>
                       <input type="text" class="form-control" id="ig" value="https://instagram.com/">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputPassword1">Twitter</label>
                       <input type="text" class="form-control" id="twitter" value="https://twitter.com/" >
                     </div>
                   </form>
                 </div>
               </div>
               <div class="card">
                 <div class="card-body">
                   <h4 class="card-title">Password</h4>
                   
                   <form class="forms-sample">
                     <div class="form-group">
                       <label for="exampleInputEmail1">Password</label>
                       <input type="password" class="form-control" id="pass">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Confirm Password</label>
                       <input type="password" class="form-control" id="cpass">
                     </div>
                   </form>
                 </div>
               </div>
             </div>
            
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Profile Details </h4>
                    <p class="card-description"> </p>
                    <form class="forms-sample">
                      <div class="form-group">
                            <label>About User</label>
                                <div class="input-group col-xs-12">
                                    <textarea class="form-control" id="summernote"></textarea>
                                </div>
                      </div>
                       <button class="btn btn-primary mr-2" id="new_user" type="button">Add New User</button>
                    </form>
                  </div>
                </div>
              </div>
           </div>
         </div>
         <!-- Modal -->
        <?php include('includes/modal.php'); ?>
         <!-- content-wrapper ends -->
         <!-- partial:../../partials/_footer.html -->
         <?php include('includes/foot.php') ?>
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
    <script src="./assets/summernote/summernote-bs4.min.js"></script>
    <script>
        $('#summernote').summernote({

        tabsize: 2,
        height: 300
      
    });
    </script>
    
   <!-- End custom js for this page -->
 </body>
</html>












 