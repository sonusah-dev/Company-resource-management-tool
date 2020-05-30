<?php 
session_start();
include('phpscript/connection.php');
$sql = "SELECT * from certificate";
$resultset = mysqli_query($conn, $sql);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin | seeking applicants</title>
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
           <div class="main-content-inner">
                <div class="row">
                    <!-- Progress Table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Student Certificate Details</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped text-center">
                                            <thead class="text-uppercase bg-secondary">
                                                <tr class="text-white">
                                                    <th scope="col">id</th>
                                                    <th scope="col">Certificate Code</th>
                                                    <th scope="col">Student</th>
                                                    <th scope="col">Course</th>
                                                    <th scope="col">Issue Date</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Rank</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php while($row = mysqli_fetch_array($resultset)) : ?>
                                                <tr>
                                                    <th><?php echo $row['id']; ?></th>
                                                    <th><?php echo $row['certificate_id']; ?></th>
                                                    <th><?php echo $row['student']; ?></th>
                                                    <th><?php echo $row['course_id']; ?></th>
                                                    <th><?php echo $row['issue_date']; ?></th>
                                                    <th><?php echo $row['certificate_type']; ?></th>
                                                    <th><?php echo $row['rank']; ?></th>
                                                    <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="editcertificate.php?id=<?php echo $row['id']; ?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="phpscript/deletecertificate.php?id=<?php echo $row['id'];?>" class="text-danger"><i class="ti-trash"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            <?php endwhile ?>   
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
