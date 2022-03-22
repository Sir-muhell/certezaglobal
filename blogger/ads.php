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

if ($id !== '1') {
 header("./home?m=<?php echo $id; ?>");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Ads | Certeza Global</title>
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
 <?php include('includes/header.php'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
       <?php include('includes/sidebar.php') ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">View All Users </h3>
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
                  <div class="card-body" style="overflow-x: auto;">
                    <h4 class="card-title">All Users</h4>
                    </p>
                    
                      
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Business Owner </th>
                          <th> Product </th>
                          <th> Ad Image</th>
                          <th> Contact </th>
                          <th> Start Date </th>
                          <th> End Date </th>
                        </tr>
                      </thead>
                      <?php
                      $sql = "SELECT * FROM ads ";
                      $res = query($sql);
                      foreach($res as $row) {
                      
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $row['name'] ?></td>
                          <td><?php echo $row['product'] ?></td>
                          <td><img src= '<?php echo $row['image'] ?>' alt='image' ></td>
                          <td><?php echo $row['contact'] ?></td>
                          <td><?php echo $row['start'] ?></td>
                          <td><?php echo $row['end'] ?></td>
                          <td>
                          <span class="icon-sm">
                            <input id="username<?php echo $row['id']; ?>" hidden value="<?php echo $row['name']; ?>">
                            <?php
                            $user = $row['name'];
                            $id   = $row['id'];
                            if ($id === '1') { ?>
                              
                            <i class="mdi mdi-cancel" style="color: grey;"><input id="username" hidden value="<?php echo $row['name']; ?>"></i>
                            <i onclick="del(<?php echo  $row['id']; ?>)" class="mdi mdi-delete" style="color: grey;"></i>
                            <?php
                            }else{
                              if ($ver === '1') { ?>
                            <i class="mdi mdi-cancel" onclick="ban(<?php echo  $row['id']; ?>)" style="color: red; cursor: pointer;"><input id="username" hidden value="<?php echo $row['name']; ?>"></i>
                            <?php                            
                            }else{
                             ?> 
                            <i class="mdi mdi-check-bold" onclick="approve(<?php echo  $row['id']; ?>)" onclick="approve(<?php echo  $row['id']; ?>)" style="color: green; cursor: pointer;"></i>
                            <?php } }?>

                            <i onclick="del(<?php echo  $row['id']; ?>)" class="mdi mdi-delete" style="color: #001737; cursor: pointer ;"></i>
                            <?php
                            }
                            ?>
                            
                          </span>
                          </td>
                        </tr>
                      </tbody>
                    

                      
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
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
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./assets/js/off-canvas.js"></script>
    <script src="./assets/js/hoverable-collapse.js"></script>
    <script src="./assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
     <script src="ajax.js"></script>
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
   
    <script>

    function del(id){
      var del = $('#username'+id).val();
      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: {del: del},
        success: function (data) {
          $("#msg").html(data);
        },
      });
    }

    function approve(id){
      var approve = $('#username'+id).val();
      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: {approve: approve},
        success: function (data) {
          $("#msg").html(data);
        },
      });
      $("#modal").modal();
    }

    function ban(id){
      var ban = $('#username'+id).val();
      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: {ban: ban},
        success: function (data) {
          $("#msg").html(data);
        },
      });
      $("#modal").modal();
    }
    </script>
  
  </body>
</html>