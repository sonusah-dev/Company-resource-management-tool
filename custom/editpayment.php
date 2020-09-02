<?php  
include('includes/session.php');
$id = $_GET['id'];
include('phpscript/connection.php');
$sql = "SELECT * FROM payment WHERE id = $id";
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
              <h4 class="header-title">Add Payments</h4>
              <form
                class="needs-validation"
                action="phpscript/updatepayment.php?id=<?php echo $row['id'];?>"
                method="post"
              >
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03">
                      <b>Student</b> <span class="text-danger"> *</span></label
                    >
                    <input
                      type="text"
                      name="student"
                      value="<?php echo $row['student'];?>"
                      class="form-control"
                      id="validationCustom03"
                      required=""
                    />
                    <div class="valid-feedback">
                      Please provide a valid name.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"><b>Amount</b></label>
                    <input type="number" name="amount"
                    value="<?php echo $row['amount'];?>" 
                    class="form-control" id="validationCustom03"
                    >
                    <div class="valid-feedback">
                      Please provide a valid amount.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"> <b>Paid</b></label>
                    <input type="number" name="paid"
                    value="<?php echo $row['amount_paid'];?>"
                    class="form-control" id="validationCustom03"
                    >
                    <div class="valid-feedback">
                      Please provide a valid detail.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"> <b>Reference</b></label>
                    <input type="text" name="reference"
                    value="<?php echo $row['payment_reference_number'];?>"
                    class="form-control" id="validationCustom03"
                    >
                    <div class="valid-feedback">
                      Please provide a valid detail.
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"> <b>Mode</b></label>
                    <select
                      class="custom-select"
                      name="mode"
                      id="validationCuston03"
                    >
                      <option value="<?php echo $row['payment_mode'] ?>">
                      <?php 
                        if($row['payment_mode']==0):echo"CASH"; $flag=0;
                        elseif($row['payment_mode']==1):echo"CARD"; $flag=1;
                        elseif($row['payment_mode']==2):echo"UPI-ID"; $flag=2;
                        elseif($row['payment_mode']==3):echo"PhoneNo"; $flag=3;
                        else : echo "Net Banking"; $flag=4;
                        endif;
                      ?>
                      </option>
                      <?php if($flag==0): ?>
                      <option value="1">CARD</option>
                      <option value="2">UPI-ID</option>
                      <option value="3">PhoneNo</option>
                      <option value="4">Net Banking</option>
                      <?php elseif($flag==1): ?>
                      <option value="1">CASH</option>
                      <option value="2">UPI-ID</option>
                      <option value="3">PhoneNo</option>
                      <option value="4">Net Banking</option>
                      <?php elseif($flag==2): ?>
                      <option value="1">CARD</option>
                      <option value="2">CASH</option>
                      <option value="3">PhoneNo</option>
                      <option value="4">Net Banking</option>
                      <?php elseif($flag==3): ?>
                      <option value="1">CARD</option>
                      <option value="2">UPI-ID</option>
                      <option value="3">CASH</option>
                      <option value="4">Net Banking</option>
                      <?php else: ?>
                      <option value="1">CARD</option>
                      <option value="2">UPI-ID</option>
                      <option value="3">PhoneNo</option>
                      <option value="4">CASH</option>
                      <?php endif; ?>
                    </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03"> <b>Status</b></label>
                    <select class="custom-select" name="status" id="validationCustom03">
                        <option value="<?php echo $row['id'] ?>" selected><?php if($row['payment_status'] == 0):echo "Pending"; $count=1; else:echo "Paid"; endif;?></option>
                        <?php if($count == 1): ?>
                        <option value="1">Paid</option>
                        <?php else: ?>
                        <option value="0">Pending</option>
                        <?php endif; ?>
                    </select>
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
