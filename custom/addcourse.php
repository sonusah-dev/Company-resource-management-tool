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
            <?php include('title.php'); ?>
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
                        <h4 class="header-title">Add Course</h4>
                            <form class="needs-validation" action="phpscript/insertcourse.php" method="post">
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom03"> <b>Name</b> <span class="text-danger"> *</span></label>
                                        <input type="text" name="name" class="form-control" id="validationCustom03" placeholder="" required="">
                                        <div class="valid-feedback">
                                            Please provide a valid name.
                                        </div>
                                     </div>
                                     <div class="col-md-4 mb-3">
                                         <label for="validationCustom03"><b>Slogan</b><span class="text-danger"> *</span></label>
                                         <input type="text" name="slogan" class="form-control" id="validationCustom03" placeholder="" required="">
                                         <div class="valid-feedback">
                                             Please provide a valid detail.
                                         </div>
                                     </div> 
                                    <div class="col-md-4 mb-3">
                                         <label for="validationCustom03"> <b>Description</b><span class="text-danger"> *</span></label>
                                         <input type="text" name="desc" class="form-control" id="validationCustom03" placeholder="" required="">
                                         <div class="valid-feedback">
                                             Please provide a valid detail.
                                         </div>
                                    </div>
                                    </div>
                                    <div class="form-row">  
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom03"> <b>Content</b><span class="text-danger"> *</span></label>
                                            <input type="text" name="content" class="form-control" id="validationCustom03" placeholder="" required="">
                                            <div class="valid-feedback">
                                                Please provide a valid detail.
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationCustom03"> <b>Requirement</b><span class="text-danger"> *</span></label>
                                            <input type="text" name="req" class="form-control" id="validationCustom03" placeholder="" required="">
                                            <div class="invalid-feedback">
                                                Please provide a valid detail.
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                        <label for="validationCustom03"> <b>Target</b></label>
                                        <input type="text" name="target" class="form-control" id="validationCustom03" placeholder="" >
                                            <div class="invalid-feedback">
                                                Please provide a valid detail.
                                            </div>
                                        </div>
                                      </div>
                                      <div class="form-row">  
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03"> <b>Duration</b><span class="text-danger"> *</span></label>
                                            <input type="text" name="duration" class="form-control" id="validationCustom03" placeholder="" required="">
                                            <div class="valid-feedback">
                                                Please provide a valid detail.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           <label for="validationCustom03"> <b>Category</b></label>
                                                 <input type="text" name="category" class="form-control" id="validationCustom03" placeholder="" >
                                                    <div class="invalid-feedback">
                                                        Please provide a valid detail.
                                                    </div>
                                         </div>
                                        </div>
                                        <div class="form-row">  
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03"> <b>Poster</b></label>
                                            <input type="text" name="poster" class="form-control" id="validationCustom03" placeholder="" >
                                            <div class="valid-feedback">
                                                Please provide a valid detail.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           <label for="validationCustom03"> <b>Fee</b><span class="text-danger"> *</span></label>
                                                 <input type="text" name="fee" class="form-control" id="validationCustom03" placeholder="" required="">
                                                    <div class="invalid-feedback">
                                                        Please provide a valid detail.
                                                    </div>
                                         </div>
                                        </div>                                        
                                    <button class="btn btn-primary pull-right" type="submit">Submit</button>
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