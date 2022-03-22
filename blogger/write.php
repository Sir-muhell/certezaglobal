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
    <link href="./assets/summernote/summernote-bs4.css" rel="stylesheet">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" />
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
              <h3 class="page-title"> Articles </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./home?m=<?php echo $id; ?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Write Article</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample" id="case">
                      <h4 class="card-title">Write New Article</h4>
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Tags (Seprate multiple tags with comma)</label>
                        <input type="text" class="form-control" id="tags" placeholder="Tags">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select id="cat" class="form-control">
                          <option diabled>Choose Category</option>
                            <?php
                            $sql = "SELECT * FROM blog_categories ";
                            $res = query($sql);
                            foreach($res as $row) { ?>
                            <option><?php echo  $row['name']; ?></option>
                            <?php }?>
                        </select>
                      </div>
                      
                      <div class=" form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select id="status" class="form-control">
                          <option disabled>Choose Status</option>
                          <option>Publish</option>
                          <option>Draft</option>
                        </select>
                      </div>
                      <div class="form-group" id="upload">
                        <label>Upload Article Image</label>
                        <div class="row">
                          <div class="col-8">
                            <input type="file"  class="form-control file-upload-info " name="article_image" id="article_image" placeholder="Upload Image">
                          </div>
                          <div class="col-4" id="show_image">
                            <button type="button" onclick="picture()" style="width: 100%; height: 45px;" class="btn btn-primary mr-2">Upload</button>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Type Article</label>

                        <textarea class="form-control" id="summernote"></textarea>
                      </div>
                      <button type="button" id="write" style="width: 100%" class=" btn btn-primary mr-2">Upload Article</button>
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
    <!-- End custom js for this page -->

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
    var files = $("#article_image").prop("files")[0];
    picture.append("article_image", files);

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
    

    
  </body>
</html>












  