<?php
include('includes/session.php');
include('phpscript/connection.php');
$sql = "SELECT * FROM enrollment";
$resultset = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Admin | seeking applicants</title>
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
      <!--page title area end -->
      <div class="main-content-inner">
        <!-- alert to show success message for form submission -->
        <?php if (isset($_GET['success'])) : ?>
          <b id="hide" style="background-color:#51c914; color:white;" class="alert" role="alert">
            Deleted Successfully!
          </b>
        <?php endif ?>
        <?php if (isset($_GET['fail'])) : ?>
          <b id="hide" style="background-color:red; color:white;" class="alert" role="alert">
            Something went wrong!
          </b>
        <?php endif ?>
        <div class="row">
          <!-- Progress Table start -->
          <div class="col-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Enrollment Details</h4>
                <div class="single-table">
                  <div class="table-responsive">
                    <table class="table table-hover table-striped text-center">
                      <thead class="text-uppercase bg-secondary">
                        <tr class="text-white">
                          <th scope="col">id</th>
                          <th scope="col">Student</th>
                          <th scope="col">Course</th>
                          <th scope="col">Entry Date</th>
                          <th scope="col">Valid Upto</th>
                          <th scope="col">Active</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $count = 1;
                        while ($row = mysqli_fetch_array($resultset)) : ?>
                          <tr>
                            <td><?php echo $count; ?></td>
                            <?php
                            $student_id = $row['student'];
                            $row1 = mysqli_fetch_array(mysqli_query($conn, "SELECT first_name, last_name FROM student WHERE id = $student_id"))
                            ?>
                            <td><?php echo $row1['first_name'] . " " . $row1['last_name']; ?></td>
                            <?php
                            $course_id = $row['course_id'];
                            $row2 = mysqli_fetch_array(mysqli_query($conn, "SELECT course_name FROM course WHERE id = $course_id"))
                            ?>
                            <td><?php echo $row2['course_name']; ?></td>
                            <td><?php echo $row['entry_date']; ?></td>
                            <td><?php echo $row['valid_upto']; ?></td>
                            <td>
                              <?php
                              if ($row['is_active'] == 0) : echo "ACTIVE";
                              else : echo "UN-ACTIVE";
                              endif
                              ?>
                            </td>
                            <td>
                              <ul class="d-flex justify-content-center">
                                <li class="mr-3">
                                  <a href="editenrollment.php?id=<?php echo $row['id']; ?>" class="text-primary"><i class="fa fa-edit"></i></a>
                                </li>
                                <li>
                                  <a href="phpscript/deleteenrollment.php?id=<?php echo $row['id']; ?>" class="text-danger"><i class="ti-trash"></i></a>
                                </li>
                              </ul>
                            </td>
                          </tr>
                        <?php $count++;
                        endwhile ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Progress Table end -->
        </div>
      </div>
    </div>
  </div>

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