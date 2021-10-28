
  <!DOCTYPE html>
<?php function getLoggedMemberID(){
    if($_SESSION['memberID']!=''){
      return strtolower($_SESSION['memberID']);
    }else{
      if(!setAnonymousAccess()) return false;
      return getLoggedMemberID();
    }
  } ?>
<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
<?php if(!defined('datalist_db_encoding')) define('datalist_db_encoding', 'UTF-8'); ?>
<?php require_once("libs/count_records.php");?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo ucwords('BLOG ADMIN'); ?> | <?php echo (isset($x->TableTitle) ? $x->TableTitle : ''); ?></title>
    <link rel="shortcut icon" href="images/llogo.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  </head>
  <body>
   <div id="wrapper">
  <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><span><img src="resources/images/certeza.png" style="height: 30px; width: auto;"></span>&nbsp; DASHBOARD</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="./blogs_view"><i class="fa fa-book"></i> Blogs</a></li>
            <li><a href="./blog_categories_view"><i class="fa fa-tags"></i> Categories</a></li>
            <li><a href="./blogs_view"><i class="fa fa-check"></i> Published</a></li>
            <li><a href="#"><i class="fa fa-tasks"></i> Drafts</a></li>
            <li><a href="<?php echo PREPEND_PATH; ?>./membership_profile"><i class="fa fa-user">&nbsp;</i>My Profile Details</a></li>
            <li><a href="<?php echo PREPEND_PATH; ?>index.php?signOut=1"><i class="fa fa-power-off"></i> Sign Out </a></li>
            <?php
            $usernow=getLoggedMemberID();
            if ($usernow=="admin") {
              ?>
           
            <li><a href="ads.php"><i class="fa fa-desktop"></i> Ads Center</a></li>
            <!-- <li><a href="links_view.php"><i class="fa fa-link"></i>Links</a></li> -->
            <!-- <li><a href="editors_choice_view.php"><i class="fa fa-trophy"></i>Editors Choice</a></li> -->
            <!-- <li><a href="../adminstats"><i class="fa fa-bar-chart-o"></i>Admin Stats</a></li> -->
          <?php }
          ?>
          </ul>
         <ul class="nav navbar-nav navbar-right navbar-user">
            
            <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo ucwords(getLoggedMemberID());  ?><b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo PREPEND_PATH; ?>membership_profile.php"><i class="fa fa-user"></i> <strong>My Profile Details</strong> </a></li>
              
              <!--login/logout area starts-->
              <li>
               <?php if(getLoggedAdmin()){ ?>
               <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger navbar-btn btn-sm hidden-xs"><i class="fa fa-cog"></i> <strong><?php echo $Translation['admin area']; ?></strong></a>
               <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger navbar-btn btn-sm visible-xs btn-sm"><i class="fa fa-cog"></i> <strong><?php echo $Translation['admin area']; ?></strong></a>
               <?php } ?>
               <?php if(!$_GET['signIn'] && !$_GET['loginFailed']){ ?>
               <?php if(getLoggedMemberID() == $adminConfig['anonymousMember']){ ?>
               <p class="navbar-text navbar-right">&nbsp;</p>
               <a href="<?php echo PREPEND_PATH; ?>index.php?signIn=1" class="btn btn-success navbar-btn btn-sm navbar-right"><strong><?php echo $Translation['sign in']; ?></strong></a>
               <p class="navbar-text navbar-right">
                <?php echo $Translation['not signed in']; ?>
              </p>
              <?php }else{ ?>
              <ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
              </ul>
              <ul class="nav navbar-nav visible-xs">
              </ul>
              <?php } ?>
              <?php } ?>
            </li>
            <!--login/logout area ends-->
            <li class="divider"></li>
            <li><a class="btn navbar-btn btn-primary" href="<?php echo PREPEND_PATH; ?>index.php?signOut=1"><i class="fa fa-power-off"></i> <strong style="color:white"><?php echo $Translation['sign out']; ?></strong> </a></li>
          </ul>
        </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
  <div id="page-wrapper">
 <div class="row">
          <div class="col-lg-12">
            <h1>Hello <?php echo ucwords(getLoggedMemberID()); ?> !</h1>
            <ol class="breadcrumb">
              <li><a href="../"><i class="icon-dashboard" style="text-decoration:none;"></i> <strong>View Website</strong></a></li>
              <li><a href="index.php"><i class="icon-dashboard" style="text-decoration:none;"></i> <strong>Dashboard</strong></a></li>
            </ol>
            <?php include("libs/alerts.php");?>
          </div>
        </div><!-- /.row -->

    



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
                    <i class="fa fa-desktop fa-5x"></i>
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

           <div class="col-lg-3">
            <div class="panel" style="background-color: #b3b300">
              <a href="<?php echo PREPEND_PATH; ?>ads.php?>">
                <div class="panel-heading">
                <div class="row" style="color: #4d4d00">
                  <div class="col-xs-6">
                    <i class="fa fa-lock fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><i class="fa fa-"></i></p>
                    <p class="announcement-text"><strong>Ads Center</strong></p>
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