<?php
include('includes/session.php');
$id = $_GET['id'];
// datbase connection
include('phpscript/connection.php');
//query for selecting particular row
$sql = "SELECT * FROM attendence WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
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
  <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
      </p>
    <![endif]-->
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
      <?php include('includes/title.php'); ?>
      <!--page title area end -->
      <!-- starts form group -->
      <div class="col-12">
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
        <div class="card mt-5">
          <div class="card-body">
            <h4 class="header-title">Add Attendence</h4>
            <form class="needs-validation" method="post" action="phpscript/updateattendence.php?id=<?php echo $row['id']; ?>">
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom01"><b>Student</b><span class="text-danger"> *</span></label>
                  <select class="custom-select" name="student" id="validationCuston03">
                    <?php
                    include('phpscript/connection.php');
                    $sql = 'SELECT id, first_name, last_name from student';
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) :
                    ?>
                      <option value="<?php echo $row['id']; ?>"><?php echo $row['first_name'] . " " . $row['last_name']; ?></option>
                    <?php endwhile ?>
                  </select>
                  <div class="valid-feedback">
                    Please provide a valid name.
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationCustom01"><b>Batch</b><span class="text-danger"> *</span></label>
                  <select name="batch" class="custom-select" id="validationCuston03">
                    <?php
                    include('phpscript/connection.php');
                    $sql = 'SELECT id, batch_code from batch';
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) :
                    ?>
                      <option value="<?php echo $row['id']; ?>"><?php echo $row['batch_code']; ?></option>
                    <?php endwhile ?>
                  </select>
                  <div class="valid-feedback">
                    Please provide a valid detail.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary pull-right" type="submit">
                Submit
              </button>
            </form>
          </div>
          <!-- ends form group -->
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