<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php include('sidebar.php'); ?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <?php include('header.php'); ?>
            <!-- header area end -->
            <!-- page title area start -->
            <?php include('title.php')?>
           <!--page title area end -->
           <!-- starts form group -->
           <div class="col-12">

                <?php if(isset($_GET['success'])) : ?>
                    <div class="alert alert-success" role="alert">
                        Added Successfully!
                    </div>
                <?php endif ?>
                
                <?php if(isset($_GET['fail'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        Something went wrong!
                    </div>
                <?php endif ?>           

                <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="header-title">Add Students</h4>
                            <form class="needs-validation" novalidate="" method="post" action="phpscript/insertstudent.php">
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationCustom01">First Name<span class="text-danger"> *</span></label>
                                        <input type="text" name="first" class="form-control" id="validationCustom01" placeholder="" value="" required="">
                                        <div class="valid-feedback">
                                            Please provide a valid name.
                                        </div>
                                     </div>
                                     <div class="col-md-3 mb-3">
                                         <label for="validationCustom02">Last Name<span class="text-danger"> *</span></label>
                                         <input type="text" name="last" class="form-control" id="validationCustom02" placeholder="" value="" required="">
                                         <div class="valid-feedback">
                                             Please provide a valid name.
                                         </div>
                                     </div>
                                     <div class="col-md-3 mb-3">
                                         <label for="validationCustom02">Gender<span class="text-danger"> *</span></label>
                                         <select class="custom-select" name="gender" id="validationCustom02">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="others">Others</option>
                                         </select>
                                         <div class="valid-feedback">
                                             Please provide a valid name.
                                         </div>
                                     </div>
                                     <div class="col-md-3 mb-3">
                                         <label for="validationCustomUsername">Mobile<span class="text-danger"> *</span></label>
                                                <input type="number" name="mobile" class="form-control" id="validationCustom03" placeholder="" required="">
                                                <div class="invalid-feedback">
                                                    Please provide a valid phone number.
                                                 </div>
                                             </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                           <label for="validationCustom03">Email<span class="text-danger"> *</span></label>
                                                 <input type="text" name="email" class="form-control" id="validationCustom04" placeholder="" required="">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid email.
                                                    </div>
                                         </div>
                                        <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">D.O.B<span class="text-danger"> *</span></label>
                                        <input type="date" name="dob" class="form-control" id="validationCustom03" placeholder="" required="">
                                            <div class="invalid-feedback">
                                                Please provide a valid d.o.b.
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                           <label for="validationCustom03">Joining Date<span class="text-danger"> *</span></label>
                                                 <input type="date" name="join" class="form-control" id="validationCustom04" placeholder="" required="">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid number.
                                                    </div>
                                         </div>
                                      </div>
                                      <div class="form-row">
                                        
                                        <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">Expiry Date</label>
                                        <input type="date" name="expiry" class="form-control" id="validationCustom03" placeholder="" >
                                            <div class="invalid-feedback">
                                                Please provide a valid date.
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom04">Institute<span class="text-danger"> *</span></label>
                                            <input type="text" name="institute" class="form-control" id="validationCustom06" placeholder="" required="">
                                            <div class="invalid-feedback">
                                                Please provide a valid detail.
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="year">Year of Addmission<span class="text-danger"> *</span></label>
                                            <select name="addmission_year" id="year" class='custom-select'>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please provide a valid detail.
                                            </div>
                                        </div>
                                      </div>

                                      <div class="form-row"> 
                                      <div class="col-md-4 mb-3">
                                           <label for="validationCustom03">Department</label>
                                                 <input type="text" name="department" class="form-control" id="validationCustom04" placeholder="">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid number.
                                                    </div>
                                         </div>  
                                      <div class="col-md-4 mb-3">
                                           <label for="validationCustom03">Registration Number<span class="text-danger"> *</span></label>
                                                 <input type="text" name="registration" class="form-control" id="validationCustom04" placeholder="" required="">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid number.
                                                    </div>
                                         </div>
                                        <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">Street<span class="text-danger"> *</span></label>
                                        <input type="text" name="street" class="form-control" id="validationCustom03" placeholder="" required="">
                                            <div class="invalid-feedback">
                                                Please provide a valid detail.
                                            </div>
                                        </div>
                                        </div>
                                      <div class="form-row"> 
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom04">City<span class="text-danger"> *</span></label>
                                            <input type="text" name="city" class="form-control" id="validationCustom06" placeholder="" required="">
                                            <div class="invalid-feedback">
                                                Please provide a valid detail.
                                            </div>
                                        </div>
                                      <div class="col-md-4 mb-3">
                                           <label for="validationCustom03">Pincode<span class="text-danger"> *</span></label>
                                                 <input type="number" name="pincode" class="form-control" id="validationCustom04" placeholder="" required="">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid number.
                                                    </div>
                                          </div> 
                                        <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">State<span class="text-danger"> *</span></label>
                                        <input type="text" name="state" class="form-control" id="validationCustom03" placeholder="" required="">
                                            <div class="invalid-feedback">
                                                Please provide a valid detail.
                                            </div>
                                        </div>
                                      </div>                                           
                                  <button class="btn btn-primary pull-right" type="submit">Submit</button>
                            </form>
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
