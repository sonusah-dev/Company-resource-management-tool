<?php  
include('includes/session.php');
$id = $_GET['id'];
include('phpscript/connection.php');
$sql = "SELECT * FROM course WHERE id = $id";
$result = (mysqli_query($conn, $sql));
$row = mysqli_fetch_array($result);
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
              <h4 class="header-title">Add Course</h4>
              <form
                class="needs-validation"
                action="phpscript/updatecourse.php?id=<?php echo $row['id'];?>"
                method="post"
              >
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03">
                      <b>Name</b> <span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="name"
                      value="<?php echo $row['course_name']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                      required=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid name.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"
                      ><b>Slogan</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="slogan"
                      value="<?php echo $row['course_slogan']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                      required=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid detail.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03">
                      <b>Description</b
                      ><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="desc"
                      value="<?php echo $row['description']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                      required=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid detail.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03">
                      <b>Content</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="content"
                      value="<?php echo $row['course_content']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                      required=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid detail.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03">
                      <b>Requirement</b
                      ><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="req"
                      value="<?php echo $row['requirement']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                      required=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid detail.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"> <b>Target</b></label>
                    <input
                      type="text"
                      name="target"
                      value="<?php echo $row['who_this_course_is_for']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid detail.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">
                      <b>Duration</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="duration"
                      value="<?php echo $row['course_duration']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                      required=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid detail.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03"> <b>Category</b></label>
                    <input
                      type="text"
                      name="category"
                      value="<?php echo $row['course_category']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid detail.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03"> <b>Poster</b></label>
                    <input
                      type="text"
                      name="poster"
                      value="<?php echo $row['course_poster']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid detail.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">
                      <b>Fee</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="fee"
                      value="<?php echo $row['course_fee']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                      required=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid detail.
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
