<?php
session_start();
include('phpscript/connection.php');
$sql = "SELECT * from course";
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
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
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
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Course Details</h4>
                                <div class="data-tables">
                                    <table id="dataTable" class="text-center">
                                        <thead class="bg-secondary text-capitalize">
                                            <tr class="text-white">
                                                <th>Id</th>
                                                <th>name</th>
                                                <th>slogan</th>
                                                <th>desc</th>
                                                <th>content</th>
                                                <th>requirement</th>
                                                <th>target</th>
                                                <th>duration</th>
                                                <th>category</th>
                                                <th>poster</th>
                                                <th>fee</th>
                                                <th>Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php while($row = mysqli_fetch_array($resultset)) : ?>
                                            <tr>
                                                <td> <?php echo $row[0]; ?> </td>
                                                <td> <?php echo $row[1]; ?> </td>
                                                <td> <?php echo $row[2]; ?> </td>
                                                <td> <?php echo $row[3]; ?> </td>
                                                <td> <?php echo $row[4]; ?> </td>
                                                <td> <?php echo $row[5]; ?> </td>
                                                <td> <?php echo $row[6]; ?> </td>
                                                <td> <?php echo $row[7]; ?> </td>
                                                <td> <?php echo $row[8]; ?> </td>
                                                <td> <?php echo $row[9]; ?> </td>
                                                <td> <?php echo $row[10]; ?> </td>
                                                <td>
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="editcourse.php?id=<?php echo $row['id']; ?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><a href="phpscript/deletecourse.php?id=<?php echo $row['id'];?>" class="text-danger"><i class="ti-trash"></i></a></li>
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
                    <!-- data table end -->
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

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
