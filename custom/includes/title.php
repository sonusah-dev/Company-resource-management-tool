<div class="page-title-area">
  <div class="row align-items-center">
    <div class="col-sm-6">
      <div class="breadcrumbs-area clearfix">
        <h4 class="page-title pull-left">Admin | Dashboard</h4>
      </div>
    </div>
    <div class="col-sm-6 clearfix">
      <div class="user-profile pull-right">
        <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar" />
        <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
          <?php echo $_SESSION['name'];?><i class="fa fa-angle-down"></i>
        </h4>
        <div class="dropdown-menu">
          <!-- <a class="dropdown-item" href="#">Change Password</a> -->
          <a class="dropdown-item" href="phpscript/logout.php">Log Out</a>
        </div>
      </div>
    </div>
  </div>
</div>
