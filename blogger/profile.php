 <?php

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
    <title>My Profile | Certeza Global</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="./assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->

    <link href="./assets/summernote/summernote-bs4.css" rel="stylesheet">
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../images/logo7.png" />
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
              <h3 class="page-title"> My Profile </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./home?m=<?php echo $id; ?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bio-Data</h4>
                    <p class="card-description"> Update Profile <br> (Change in Username will require you to Login again.)</p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Username</label>
                        <input type="text" class="form-control" id="cuname" placeholder="Username" value="<?php echo $row['user']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" disabled class="form-control" id="" placeholder="Email" value="<?php echo $row['email']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Full Name</label>
                        <input type="text" class="form-control" id="cfname" placeholder="Username" value="<?php echo $row['name']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <input type="text" class="form-control" id="cphone" placeholder="Phone Number" value="<?php echo $row['phone']; ?> ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">WhatApp Number</label>
                        <input type="text" class="form-control" id="cwnum" placeholder="WhatsApp Number" value="<?php echo $row['w_num']; ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Niche</label>
                        <input type="text" class="form-control" id="cniche" placeholder="WhatsApp Number" value="<?php echo $row['niche']; ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Specialization</label>
                        <input type="text" class="form-control" id="cspec" placeholder="WhatsApp Number" value="<?php echo $row['spec']; ?>" >
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me </label>
                      </div>
                      <button type="button" id="update_profile" class="btn btn-primary mr-2">Update Profile</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Social Media Links</h4>
                    <p class="card-description"> Update Profile </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">FaceBook</label>
                        <input type="text" class="form-control" id="fb" placeholder="Username" value="<?php echo $row['facebook']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">LinkedIn</label>
                        <input type="text" class="form-control" id="linkedin" placeholder="Email" value="<?php echo $row['linkedin']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Instagram</label>
                        <input type="text" class="form-control" id="ig" placeholder="Username" value="<?php echo $row['instagram']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Twitter</label>
                        <input type="text" class="form-control" id="twitter" placeholder="Phone Number" value="<?php echo $row['twitter']; ?> ">
                      </div>
                      <button type="button" id="links" class="btn btn-primary mr-2">Update Links</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Password (Re-Login will be required)</h4>
                    
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Last Password</label>
                        <input type="password" class="form-control" id="lpass">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">New Password</label>
                        <input type="password" class="form-control" id="npass">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Confirm New Password</label>
                        <input type="password" class="form-control" id="cpass">
                      </div>
                      <button type="button" id="cpassword" class="btn btn-primary mr-2">Update Password</button>
                      
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Profile Picture </h4>
                    <p class="card-description"> </p>
                    <form class="forms-sample">
                      <div class="form-group">
                            <label>Upload Picture</label>
                                <div class="input-group col-xs-12">
                                    <input type="file"  class="form-control file-upload-info" id="propix" placeholder="Upload Image">
                                    <span class="input-group-append">
                                      <button class="file-upload-browse btn btn-primary" id="ppix" type="button">Upload
                                      </button>
                                    </span>
                                </div>
                            
                        </div>


                      <!-- <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                          <input type="text"  class="form-control file-upload-info" id="propix" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" id="propix" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <button type="button" id="pix" class="btn btn-primary mr-2">Update Picture</button> -->
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Profile Details </h4>
                    <p class="card-description"> </p>
                    <form class="forms-sample">
                      <div class="form-group">
                            <label>About</label>
                                <div class="input-group col-xs-12">
                                    <textarea class="form-control" id="summernote"><?php echo $row['about']; ?></textarea>
                                </div>
                      </div>
                       <button class="btn btn-primary mr-2" id="about" type="button">Update</button>
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
    <!-- End custom js for this page -->
    <script src="./assets/summernote/summernote-bs4.min.js"></script>
    <script>
        $('#summernote').summernote({

        tabsize: 2,
        height: 300
      
    });
    </script>
  </body>
</html>












  