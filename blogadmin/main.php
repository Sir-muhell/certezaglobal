<?php if(!isset($Translation)){ @header('Location: index.php'); exit; } ?>
  <?php include_once("{$currDir}/header-user.php"); ?>
  <?php @include("{$currDir}/hooks/links-home.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!--cards-->
 <div class="row">
          <div class="col-lg-3">
            <div class="panel" style="background-color: #9999ff">
              <div class="panel-heading">
                <div class="row" style="color: #000099">
                  <div class="col-xs-6">
                    <i class="fa fa-book fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php countrecords("blogs","all");?></p>
                    <p class="announcement-text"><strong>Articles</strong></p>
                  </div>
                </div>
              </div>
              <a href="blogs_view.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel" style="background-color: #ff99e6">
              <div class="panel-heading">
                <div class="row" style="color: #66004d">
                  <div class="col-xs-6">
                    <i class="fa fa-tags fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php admincounter("blog_categories");?></p>
                    <p class="announcement-text"><strong>Categories</strong></p>
                  </div>
                </div>
              </div>
              <a href="blog_categories_view.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel" style="background-color: #ffff99">
              <div class="panel-heading">
                <div class="row" style="color: #b3b300">
                  <div class="col-xs-6">
                    <i class="fa fa-check fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php countrecords("blogs","publish");?></p>
                    <p class="announcement-text"><strong>Published</strong></p>
                  </div>
                </div>
              </div>
              <a href="blogs_view.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel" style="background-color: #99ff99">
              <div class="panel-heading">
                <div class="row" style="color: #009900">
                  <div class="col-xs-6">
                    <i class="fa fa-tasks fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php countrecords("blogs","draft");?></p>
                    <p class="announcement-text"><strong>Drafts</strong></p>
                  </div>
                </div>
              </div>
              <a href="#">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->
        <?php
  $usernow=getLoggedMemberID();
  if ($usernow=="admin") {
        # code...show more widgets for admin only include_once
        # ('adminview.php');
    ?>
    <div class="col-lg-3">
            <div class="panel" style="background-color: #ffcccc">
              <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php?>">
                <div class="panel-heading">
                <div class="row" style="color: #e60000">
                  <div class="col-xs-6">
                    <i class="fa fa-lock fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><i class="fa fa-key"></i></p>
                    <p class="announcement-text"><strong>Admin Area</strong></p>
                  </div>
                </div>
              </div>
              </a>
              <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php?>">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <?php
  }
  ?>
  
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
<footer class="footer footer-inverse">
      <div class="container">
        <div class="text-center">
          <small>Certeza Global <?php echo date('Y');?> </small>
        </div>
      </div>
    </footer>
  </body>
</html>