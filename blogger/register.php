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
   <title>Connect Plus</title>
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
   <link rel="shortcut icon" href="./assets/images/favicon.png" />
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
                       <input type="text" class="form-control" id="fb" >
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">LinkedIn</label>
                       <input type="text" class="form-control" id="linkedin" >
                     </div>
                     <div class="form-group">
                       <label for="exampleInputUsername1">Instagram</label>
                       <input type="text" class="form-control" id="ig" >
                     </div>
                     <div class="form-group">
                       <label for="exampleInputPassword1">Twitter</label>
                       <input type="text" class="form-control" id="twitter" >
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
                   <h4 class="card-title">Upload Profile Picture </h4>
                   <p class="card-description"> </p>
                   <form class="forms-sample">
                     <div class="form-group">
                           <label>Upload Picture</label>
                               <div class="input-group col-xs-12">
                                   <input type="file"  class="form-control file-upload-info" id="user_image" name="user_image" placeholder="Upload Image">
                                   <span class="input-group-append">
                                     <button class="file-upload-browse btn btn-primary" onclick="picture()" type="button">Upload
                                     </button>
                                   </span>
                                   <br>
                                   <div id="show_image"></div>
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
         <div class="modal fade" id="modal">
             <div class="modal-dialog modal-dialog-centered" role="document">
                 <div style="background: #FE5F75; color: #ff0000; border-radius: 20px 20px 20px 20px;" class="modal-content">
                     <div class="modal-body">
                         <div id="msg" style="color: white;" class="text-center"></div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- content-wrapper ends -->
         <!-- partial:../../partials/_footer.html -->
         <footer class="footer">
           <div class="footer-inner-wraper">
             <div class="d-sm-flex justify-content-center justify-content-sm-between">
               <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
               <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
             </div>
           </div>
         </footer>
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
    <script src="./assets/summernote/summernote-bs4.min.js"></script>
    <script>
        $('#summernote').summernote({

        tabsize: 2,
        height: 300
      
    });
    </script>
    <script>
    function picture(){
    var picture = new FormData();
    var files = $("#user_image").prop("files")[0];
    picture.append("user_image", files);

    if (files == null || files == "") {
      $("#msg").html("Kindly select a picture");
    } else {
      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: picture,
        contentType: false, 
        processData: false,
        success: function (data) {
          $("#show_image").html(data);
        },
      });
    }
    if (files == null || files == "") {
      $("#modal").modal();
    }
    
  }
    </script>
   <!-- End custom js for this page -->
 </body>
</html>












 