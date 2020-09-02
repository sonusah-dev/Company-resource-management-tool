<?php
include('includes/session.php');
include('phpscript/connection.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Admin | Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/css/themify-icons.css" />
  <link rel="stylesheet" href="assets/css/metisMenu.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/slicknav.min.css" />
  <!-- amchart css -->
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <!-- others css -->
  <link rel="stylesheet" href="assets/css/typography.css" />
  <link rel="stylesheet" href="assets/css/default-css.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <!-- modernizr css -->
  <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!-- preloader area start -->
  <div id="preloader">
    <div class="loader"></div>
  </div>
  <!-- preloader area end -->
  <!-- page container area start -->
  <div class="page-container">
    <!-- sidebar menu area start -->
    <?php include('includes/sidebar.php'); ?>
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
      <!-- page title area start -->
      <?php include('includes/title.php') ?>
      <!-- page title area end -->
      <!-- main content end here -->
      <!-- seo fact area start -->
      <div class="main-content-inner">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-4 mt-5 mb-3">
                <div class="card">
                  <div class="seo-fact sbg1">
                    <div class="p-4 d-flex justify-content-between align-items-center">
                      <div class="seofct-icon">
                        <i class="fa fa-user"></i>Students
                      </div>
                      <h2>
                        <?php
                        $rows = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM student"));
                        echo $rows['COUNT(*)'];
                        ?>
                      </h2>
                    </div>
                    <canvas id="seolinechart" height="50"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5 mb-3">
                <div class="card">
                  <div class="seo-fact sbg2">
                    <div class="p-4 d-flex justify-content-between align-items-center">
                      <div class="seofct-icon">
                        <i class="fa fa-users"></i>Batches
                      </div>
                      <h2>
                        <?php
                        $rows = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM batch"));
                        echo $rows['COUNT(*)'];
                        ?>
                      </h2>
                    </div>
                    <canvas id="seolinechart" height="50"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5 mb-3">
                <div class="card">
                  <div class="seo-fact sbg3">
                    <div class="p-4 d-flex justify-content-between align-items-center">
                      <div class="seofct-icon">
                        <i class="fa fa-user-plus"></i>Enrollments
                      </div>
                      <h2>
                        <?php
                        $rows = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM enrollment"));
                        echo $rows['COUNT(*)'];
                        ?>
                      </h2>
                    </div>
                    <canvas id="seolinechart" height="50"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 mt-5 mb-3">
                <div class="card">
                  <div class="seo-fact sbg4">
                    <div class="p-4 d-flex justify-content-between align-items-center">
                      <div class="seofct-icon">
                        <i class="fa fa-inr"></i>Payments
                      </div>
                      <h2>
                        <?php
                        $rows = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM payment"));
                        echo $rows['COUNT(*)'];
                        ?>
                      </h2>
                    </div>
                    <canvas id="seolinechart" height="50"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5 mb-3">
                <div class="card">
                  <div class="seo-fact sbg1">
                    <div class="p-4 d-flex justify-content-between align-items-center">
                      <div class="seofct-icon">
                        <i class="fa fa-briefcase"></i>Employees
                      </div>
                      <h2>
                        <?php
                        $rows = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM employee"));
                        echo $rows['COUNT(*)'];
                        ?>
                      </h2>
                    </div>
                    <canvas id="seolinechart" height="50"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mt-5 mb-3">
                <div class="card">
                  <div class="seo-fact sbg2">
                    <div class="p-4 d-flex justify-content-between align-items-center">
                      <div class="seofct-icon">
                        <i class="fa fa-book"></i>Courses
                      </div>
                      <h2>
                        <?php
                        $rows = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM course"));
                        echo $rows['COUNT(*)'];
                        ?>
                      </h2>
                    </div>
                    <canvas id="seolinechart" height="50"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- seo fact area end -->
  <!-- jquery latest version -->
  <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
  <!-- bootstrap 4 js -->
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/metisMenu.min.js"></script>
  <script src="assets/js/jquery.slimscroll.min.js"></script>
  <script src="assets/js/jquery.slicknav.min.js"></script>
  <!-- others plugins -->
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/scripts.js"></script>
</body>

</html>