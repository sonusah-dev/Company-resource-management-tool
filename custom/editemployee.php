<?php  
include('includes/session.php');
$id = $_GET['id'];
include('phpscript/connection.php');
$sql = "SELECT * FROM employee WHERE id = $id";
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
        <?php include('includes/title.php')?>
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
              <h4 class="header-title">Add Employee</h4>
              <form
                class="needs-validation"
                action="phpscript/updateemployee.php?id=<?php  echo $row['id']; ?>"
                method="post"
              >
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01"
                      ><b>Employee Code</b
                      ><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="code"
                      value="<?php  echo $row['employee_id']; ?>"
                      class="form-control"
                      id="validationCustom01"
                      placeholder=""
                      required=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02"
                      ><b>First Name</b
                      ><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="first"
                      value="<?php  echo $row['first_name']; ?>"
                      class="form-control"
                      id="validationCustom02"
                      placeholder=""
                      required=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03">
                      <b>Last Name</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="last"
                      value="<?php  echo $row['last_name']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                      required=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"
                      ><b>Gender</b><span class="text-danger"> *</span></label
                    >
                    <select
                      class="custom-select"
                      name="gender"
                      id="validationCustom02"
                    >
                      <option value="<?php echo $row['gender'];?>" selected>
                        <?php if($row['gender']==0): $flag=0; echo "Male";
                          elseif($row['gender']==1): $flag=1; echo "Female";
                          else: $flag = 3; echo "Others";
                          endif;
                        ?>
                      </option>
                      <?php if($flag ==0):  ?>
                      <option value="1">Female</option>
                      <option value="2">Others</option>
                      <?php elseif($flag ==1):?>
                      <option value="1">Male</option>
                      <option value="2">Others</option>
                      <?php else: ?> 
                      <option value="1">Male</option>
                      <option value="2">Female</option> 
                      <?php endif; ?>
                    </select>
                    <div class="invalid-feedback">
                      Please provide a valid.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"
                      ><b>Mobile</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="number"
                      name="mobile"
                      value="<?php  echo $row['mobile']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                      required=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid.
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationCustom04">
                      <b>Email</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="email"
                      value="<?php  echo $row['email']; ?>"
                      class="form-control"
                      id="validationCustom06"
                      placeholder=""
                      required=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom04"
                      ><b>D.O.B</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="date"
                      name="dob"
                      value="<?php echo $row['dob']; ?>"
                      class="form-control"
                      id="validationCustom06"
                      placeholder=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"
                      ><b>Job Role</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="role"
                      value="<?php  echo $row['job_role']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                      required=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom04"><b>Job Desc</b></label>
                    <input
                      type="text"
                      name="desc"
                      value="<?php  echo $row['job_description']; ?>"
                      class="form-control"
                      id="validationCustom06"
                      placeholder=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom04"
                      ><b>PAN</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="pan"
                      value="<?php  echo $row['pan_number']; ?>"
                      class="form-control"
                      id="validationCustom06"
                      placeholder=""
                      required=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"
                      ><b>Aadhar</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="aadhar"
                      value="<?php  echo $row['adhaar_number']; ?>"
                      class="form-control"
                      id="validationCustom04"
                      placeholder=""
                      required=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"
                      ><b>Street</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="street"
                      value="<?php  echo $row['street']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                      required=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom04"
                      ><b>City</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="city"
                      value="<?php  echo $row['city']; ?>"
                      class="form-control"
                      id="validationCustom06"
                      placeholder=""
                      required=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"
                      ><b>Pincode</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="number"
                      name="pin"
                      value="<?php  echo $row['pincode']; ?>"
                      class="form-control"
                      id="validationCustom04"
                      placeholder=""
                      required=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"
                      ><b>State</b><span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="state"
                      value="<?php  echo $row['state']; ?>"
                      class="form-control"
                      id="validationCustom03"
                      placeholder=""
                      required=""
                    />
                    <div class="invalid-feedback">
                      Please provide a valid.
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
