<?php include('includes/session.php'); ?>
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
              Added Successfully!
            </b>
        <?php endif ?>
        <?php if(isset($_GET['fail'])):?>
            <b id="hide" style="background-color:red; color:white;" class="alert" role="alert">
              Something went wrong!
            </b>
        <?php endif ?> 
          <div class="card mt-5">
            <div class="card-body">
              <h4 class="header-title">Add Section List</h4>
              <form
                class="needs-validation"
                action="phpscript/insertcontentlist.php"
                method="post"
              >
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03">
                      <b>Section Name</b>
                      <span class="text-danger"> *</span></label
                    >
                    <select name="course" class="custom-select" id="course">
                      <?php
                        include('phpscript/connection.php');                          
                        $sql = 'SELECT section_name from section';
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)) :
                      ?>
                      <option value="<?php echo $row['section_name']; ?>"
                        ><?php echo $row['section_name']; ?></option
                      >
                      <?php endwhile ?>
                    </select>
                    <div class="valid-feedback">
                      Please provide a valid name.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"><b>Item Type</b></label>
                    <input
                      type="text"
                      name="item_type"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid detail.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"> <b>Sequence</b></label>
                    <input
                      type="number"
                      name="sequence"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid detail.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03"> <b>Total</b></label>
                    <input
                      type="number"
                      name="total"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid detail.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03"> <b>Description</b></label>
                    <input
                      type="text"
                      name="desc"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                    />
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
