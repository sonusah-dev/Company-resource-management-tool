<?php
include('includes/session.php'); 
$id = $_GET['id'];
include('phpscript/connection.php');

$sql = "SELECT * FROM batch WHERE id = $id";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Admin | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/png"
      href="assets/images/icon/favicon.ico"
    />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/metisMenu.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/slicknav.min.css" />
    <!-- amchart css -->
    <link
      rel="stylesheet"
      href="https://www.amcharts.com/lib/3/plugins/export/export.css"
      type="text/css"
      media="all"
    />
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
        <?php include('includes/title.php'); ?>
        <!--page title area end -->
        <!-- starts form group -->
        <div class="col-12">
        <!-- alert to show success message for form submission -->
        <?php if(isset($_GET['success'])):?>
            <b id="hide" style="background-color:#51c914; color:white;" class="alert" role="alert">
              Deleted Successfully!
            </b>
        <?php endif ?>
        <?php if(isset($_GET['fail'])):?>
            <b id="hide" style="background-color:red; color:white;" class="alert" role="alert">
              Something went wrong!
            </b>
        <?php endif ?> 
          <div class="card mt-5">
            <div class="card-body">
              <h4 class="header-title">Add Batch</h4>
              <form
                class="needs-validation"
                method="post"
                action="phpscript/updatebatch.php?id=<?php echo $data['id'];?>"
              >
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01"><b>Batch Code</b></label>
                    <input
                      type="text"
                      name="code"
                      value="<?php echo $data['batch_code']; ?>"
                      class="form-control"
                      id="validationCustom01"
                      placeholder=""
                      required=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid time.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="course"><b>Course</b></label>
                    <select name="course" class="custom-select" id="course">
                      <?php
                        $course_id = $data['course_id'];
                        $row1 = mysqli_fetch_array(mysqli_query($conn, "SELECT id, course_name FROM course WHERE id = $course_id")) 
                      ?>
                      <option value="<?php echo $row1['id']; ?>"><?php echo $row1['course_name']; ?></option> 
                      <?php
                        include('phpscript/connection.php');                          
                        $sql = 'SELECT id,course_name from course';
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)) :
                        if($row1['id']!=$row['id']):
                      ?>
                      <option value="<?php echo $row['id']; ?>"><?php echo $row['course_name']; ?></option
                      >
                        <?php endif; endwhile ?>
                    </select>
                    <div class="valid-feedback">
                      Please provide a valid time.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="trainer"><b>Trainer</b></label>
                    <select name="trainer" class="custom-select" id="trainer">
                      <?php
                        $emp_id = $data['emp_id'];
                        $row1 = mysqli_fetch_array(mysqli_query($conn, "SELECT id, first_name,last_name FROM employee WHERE id = $emp_id")) 
                      ?>
                      <option value="<?php echo $row1['id']; ?>"><?php echo $row1['first_name']." ".$row1['last_name']; ?></option> 
                      <?php
                        include('phpscript/connection.php');                          
                        $sql = 'SELECT id, first_name, last_name from employee';
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)) :
                        if($row1['id']!=$row['id']):
                      ?>
                      <option value="<?php echo $row['id']; ?>"><?php echo $row['first_name']." ".$row['last_name']; ?></option>
                        <?php endif; endwhile ?>
                    </select>
                    <div class="valid-feedback">
                      Please provide a valid time.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01"><b>Start Time</b></label>
                    <input
                      type="time"
                      name="start_time"
                      value="<?php echo $data['start_time']; ?>"
                      class="form-control"
                      id="validationCustom01"
                      placeholder=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid time.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01"><b>End Time</b></label>
                    <input
                      type="time"
                      name="end_time"
                      value="<?php echo $data['end_time']; ?>"
                      class="form-control"
                      id="validationCustom01"
                      placeholder=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid time.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01"><b>Start Date</b></label>
                    <input
                      type="date"
                      name="start_date"
                      value="<?php echo $data['batch_starting_date']; ?>"
                      class="form-control"
                      id="validationCustom01"
                      placeholder=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid date.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01"><b>End Date</b></label>
                    <input
                      type="date"
                      name="end_date"
                      value="<?php echo $data['batch_completion_date']; ?>"
                      class="form-control"
                      id="validationCustom01"
                      placeholder=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid date.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01"><b>Completed</b></label>
                    <select class="custom-select" name="type" id="validationCustom03">
                        <option value="<?php echo $data['is_active'] ?>" selected><?php if($data['is_active'] == 0):echo "ACTIVE"; $count=1; else:echo "UN-ACTIVE"; endif;?></option>
                        <?php if($count == 1): ?>
                        <option value="1">UN-ACTIVE</option>
                        <?php else: ?>
                        <option value="0">ACTIVE</option>
                        <?php endif; ?>
                    </select>
                    <div class="valid-feedback">
                      Please provide a valid.
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
