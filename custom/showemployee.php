<?php
include('includes/session.php');
include('phpscript/connection.php');
$sql = "SELECT * FROM employee";
$resultset = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Admin | seeking applicants</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/css/themify-icons.css" />
  <link rel="stylesheet" href="assets/css/metisMenu.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/slicknav.min.css" />
  <!-- amcharts css -->
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <!-- Start datatable css -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css" />
  <!-- style css -->
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
      <?php include('includes/title.php') ?>
      <!--page title area end -->
      <div class="main-content-inner">
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
        <div class="row">
          <!-- data table start -->
          <div class="col-12 mt-5">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title">Employee Details</h4>
                <div class="data-tables">
                  <table id="dataTable" class="text-center">
                    <thead class="bg-secondary text-capitalize">
                      <tr class="text-white">
                        <th>Id</th>
                        <th>e.code</th>
                        <th>f.name</th>
                        <th>l.name</th>
                        <th>gender</th>
                        <th>mobile</th>
                        <th>email</th>
                        <th>d.o.b</th>
                        <th>profile</th>
                        <th>job role</th>
                        <th>job desc</th>
                        <th>join date</th>
                        <th>left date</th>
                        <th>pan</th>
                        <th>aadhar</th>
                        <th>street</th>
                        <th>city</th>
                        <th>pin</th>
                        <th>state</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1;
                      while ($row = mysqli_fetch_array($resultset)) : ?>
                        <tr>
                          <td><?php echo $count; ?></td>
                          <td><?php echo $row['employee_id']; ?></td>
                          <td><?php echo $row['first_name']; ?></td>
                          <td><?php echo $row['last_name']; ?></td>
                          <td>
                            <?php
                            if ($row['gender'] == 0) : echo 'Male';
                            elseif ($row['gender'] == 1) : echo 'Female';
                            else : echo 'Others';
                            endif
                            ?>
                          </td>
                          <td><?php echo $row['mobile']; ?></td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['dob']; ?></td>
                          <td>
                            <?php
                            if ($row['profile_status'] == 0) : echo 'Active';
                            else : echo 'Not Active';
                            endif
                            ?>
                          </td>
                          <td><?php echo $row['job_role']; ?></td>
                          <td><?php echo $row['job_description']; ?></td>
                          <td><?php echo $row['date_of_join']; ?></td>
                          <td><?php echo $row['date_of_left']; ?></td>
                          <td><?php echo $row['pan_number']; ?></td>
                          <td><?php echo $row['adhaar_number']; ?></td>
                          <td><?php echo $row['street']; ?></td>
                          <td><?php echo $row['city']; ?></td>
                          <td><?php echo $row['pincode']; ?></td>
                          <td><?php echo $row['state']; ?></td>
                          <td>
                            <ul class="d-flex justify-content-center">
                              <li class="mr-3">
                                <a href="editemployee.php?id=<?php echo $row['id']; ?>" class="text-primary"><i class="fa fa-edit"></i></a>
                              </li>
                              <li>
                                <a href="phpscript/deleteemployee.php?id=<?php echo $row['id']; ?>" class="text-danger"><i class="ti-trash"></i></a>
                              </li>
                            </ul>
                          </td>
                        </tr>
                      <?php $count++;
                      endwhile ?>
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