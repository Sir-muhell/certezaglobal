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

$vid = $_GET['id'];
$sqle = "SELECT * FROM `article` WHERE `id` = '$vid'";
$resulte = query($sqle);
$rowe = fetch_array($resulte);
if(empty($rowe)){
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
    <title>View Article | Certeza Global</title>
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
    <link rel="icon" type="image/png" href="../images/logo7.png" />
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
                  <li class="breadcrumb-item"><a href="./articles">All Articles</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Article</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h1><?php  ?></h1>
                    <?php
                    $sqll = "SELECT * FROM `article` WHERE `id` = '$vid'";
                    $result = query($sqll);
                    $row = fetch_array($result);
                    $author_id = $row['author'];
                    if ($author_id === $id || $id === '1') { ?>
                    
                    <form class="forms-sample" id="case">
                      <h4 class="card-title">Edit Article</h4>
                      <?php
                        if ($id !== $author_id) { ?>
                          <h6 style="color: red;">You are able to edit this Article because of Administative Priviledge</h6>
                        <?php }
                       ?>
                      <input id="title" hidden value="<?php echo $rowe['name']; ?>">
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="ntitle" value="<?php echo $rowe['titles']; ?>" placeholder="Name">
                        <input type="text" id="url" name="" hidden value="<?php echo $rowe['name']; ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Tags (Seprate multiple tags with space)</label>
                        <input type="text" class="form-control" id="ntags" value="<?php echo $rowe['tag']; ?>" placeholder="Tags">
                        <input type="text" hidden id="pid" value="<?php echo $vid ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" id="ncat">
                          <option>Choose Category</option>
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
                        <select id="nstatus" class="form-control">
                          <option disabled>Choose Status</option>
                          <option>Publish</option>
                          <option>Draft</option>
                        </select>
                      </div>
                      <div class="form-group" id="upload">
                        <label>Upload Article Image</label>
                        <div class="row">
                          <div class="col-8">
                            <input type="file"  class="form-control file-upload-info " value="<?php echo  $row['image']; ?>" name="article_image" id="article_image" placeholder="Upload Image">
                          </div>
                          <div class="col-4" id="show_image">
                            <button type="button" onclick="picture()" style="width: 100%; height: 45px;" class="btn btn-primary mr-2">Change</button>
                          </div>
                        </div>
                        <img class="img-fluid" width="50px" height="auto" src="assets/images/article_images/<?php echo $rowe['image']; ?>" />
                          <input type="text" name="" id="pic" hidden value="<?php echo $target_file; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>

                        <textarea class="form-control" id="summernote"><?php echo $rowe['content']; ?></textarea>
                      </div>
                      <div class="row col-12">
                        <button type="button" id="nwrite" class=" btn btn-primary  col-6">Update Article</button>
                        <p class="col-1"></p>
                        <button type="button" id="del" class=" btn btn-danger col-5">Delete Article</button>
                      </div>
                      
                    </form>

                     <?php 
                      }else { ?>



                    <form class="forms-sample" id="case">
                      <h4 class="card-title">View Article</h4>
                      <h6 style="color: red;">You cannot edit this article because you are not the author.</h6>
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="ntitle" value="<?php echo $rowe['titles']; ?>" placeholder="Name" disabled>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Tags (Seprate multiple tags with comma)</label>
                        <input type="text" class="form-control" id="ntags" value="<?php echo $rowe['tag']; ?>" placeholder="Tags" disabled>
                        <input type="text" hidden id="pid" value="<?php echo $vid ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <input type="text" class="form-control" id="ntags" value="<?php echo $rowe['cat']; ?>" placeholder="Tags" disabled>
                      </div>
                      
                      <div class=" form-group">
                        <label for="exampleSelectGender">Status</label>
                        <input type="text" class="form-control" id="ntags" value="<?php echo $rowe['status']; ?>" placeholder="Tags" disabled>
                      </div>
                      <div class="form-group" id="upload">
                        <label>Article Image</label><br><br>
                        
                        <img class="img-fluid" width="150px" height="auto" src="assets/images/article_images/<?php echo $rowe['image']; ?>" />
                          <input type="text" name="" id="npic" hidden value="<?php echo $target_file; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>

                        <textarea class="form-control" id="summernote" disabled><?php echo $rowe['content']; ?></textarea>
                      </div>
                      <button type="button" id="nwrite" style="width: 100%" class=" btn btn-primary mr-2" disabled>Upload Article</button>
                    </form>
                    <?php   
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal -->
          <?php include('includes/modal.php'); ?>
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
        height: 200
      
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
    
    
  }
    </script>
    
  </body>
</html>












  