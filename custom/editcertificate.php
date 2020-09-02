<?php
include('includes/session.php');
$id = $_GET['id'];
include('phpscript/connection.php');
$sql = "SELECT * FROM certificate WHERE id = $id";
$result = (mysqli_query($conn, $sql));
$data = mysqli_fetch_array($result);
?>
<?php ?>
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
    <!-- main content area start -->
    <div class="main-content">
      <!-- page title area start -->
      <?php include('includes/title.php'); ?>
      <!--page title area end -->
      <!-- starts form group -->
      <div class="col-12">
        <div class="card mt-5">
          <div class="card-body">
            <h4 class="header-title">Add Certificates</h4>
            <form class="needs-validation" method="post" action="CUD Oops/update script/updatecertificate.php">
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom02"><b>Student</b><span class="text-danger"> *</span></label>
                  <select name="student_id" class="custom-select" id="trainer">
                    <?php
                    $student_id = $data['student_id'];
                    $row1 = mysqli_fetch_array(mysqli_query($conn, "SELECT id, first_name,last_name FROM student WHERE id = $student_id"))
                    ?>
                    <option value="<?php echo $row1['id']; ?>" selected><?php echo $row1['first_name'] . " " . $row1['last_name']; ?></option>
                    <?php
                    $sql = 'SELECT id, first_name,last_name from student';
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) :
                      if ($row1['id'] != $row['id']) :
                    ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['first_name'] . " " . $row['last_name']; ?></option>
                    <?php endif;
                    endwhile ?>
                  </select>
                  <div class="valid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustomUsername"><b>Course</b><span class="text-danger"> *</span></label>
                  <select name="course_id" class="custom-select" id="course">
                    <?php
                    $course_id = $data['course_id'];
                    $row2 = mysqli_fetch_array(mysqli_query($conn, "SELECT id, course_name,course_category FROM course WHERE id = $course_id"))
                    ?>
                    <option value="<?php echo $row2['id']; ?>"><?php echo $row2['course_name']; ?></option>
                    <?php
                    $sql = 'SELECT id, course_name from course';
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) :
                      if ($row2['id'] != $row['id']) :
                    ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['course_name']; ?></option>
                    <?php endif;
                    endwhile ?>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid detail.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03"><b>Certificate Name</b></label>
                  <input type="text" name="name" value="<?php echo $data['certificate_id'] ?>" class="form-control" id="validationCustom03" />
                  <div class="invalid-feedback">
                    Please provide a valid type.
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03"><b>Certificate Type</b></label>
                  <select class="custom-select" name="type" id="validationCustom03">
                    <option value="<?php echo $row2['id']; ?>" selected><?php echo $row2['course_category']; ?></option>
                    <?php
                    $sql = 'SELECT id, course_category from course';
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) :
                      if ($row2['id'] != $row['id']) :
                    ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['course_category'] ?></option>
                    <?php endif;
                    endwhile ?>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid type.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom04"><b>Issue Date</b></label>
                  <input type="date" name="date" value="<?php echo $data['issue_date']; ?>" class="form-control" id="validationCustom04" />
                  <div class="invalid-feedback">
                    Please provide a valid detail.
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom04"><b>Rank</b></label>
                  <select class="custom-select" name="type" id="validationCustom03">
                    <option value="<?php echo $data['id'] ?>" selected><?php if ($data['rank'] == 0) : echo "PASS";
                                                                          $count = 1;
                                                                        else : echo "FAIL";
                                                                        endif; ?></option>
                    <?php if ($count == 1) : ?>
                      <option value="1">FAIL</option>
                    <?php else : ?>
                      <option value="0">PASS</option>
                    <?php endif; ?>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid date.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary pull-right" type="submit">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
      <!-- ends form group -->
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