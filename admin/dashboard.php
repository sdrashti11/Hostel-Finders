<?php

include('includes/header.php');
    include('includes/navbar.php');
    include('code.php');
    include('security.php')
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->


      <!-- Topbar Search -->

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                  aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>


        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-dark small">

              <?php echo $_SESSION['username']; ?>

            </span>
            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">




            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Are you sure you want to Logout..?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form action="code.php" method="POST">
              <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Logout Modal -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

      </div>

      <!-- Content Row -->
      <div class="row">

        <!-- Admin Card Example -->



        <!-- Users Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-lg font-weight-bold text-success text-uppercase mb-1">
                    Users</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                  <?php
                                            $connection = mysqli_connect("localhost","root","","hfdatabase");
                                            $query = "SELECT user_id FROM user ORDER BY user_id";  
                                            $query_run = mysqli_query($connection, $query);
                                            $row = mysqli_num_rows($query_run);
                                             echo '<h4> Total Users: '.$row.'</h4>';
                                        ?>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-lg font-weight-bold text-success text-uppercase mb-1">
                    Owner</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php
                     $connection = mysqli_connect("localhost","root","","hfdatabase");
                     $query = "SELECT owner_id FROM owner ORDER BY owner_id";  
                     $query_run = mysqli_query($connection, $query);
                     $row = mysqli_num_rows($query_run);
                     echo '<h4> Total Owners: '.$row.'</h4>';
                    ?>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!--Properties Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-lg font-weight-bold text-success text-uppercase mb-1">
                    Hostels</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                  <?php
                                            $connection = mysqli_connect("localhost","root","","hfdatabase");
                                            $query = "SELECT hostel_id FROM property ORDER BY hostel_id";  
                                            $query_run = mysqli_query($connection, $query);
                                            $row = mysqli_num_rows($query_run);
                                             echo '<h4> Total  Hostels: '.$row.'</h4>';
                                        ?>
                </div>

              </div>
            </div>
          </div>
        </div>


        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-lg font-weight-bold text-success text-uppercase mb-1">
                    Feedback</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                  <?php
                                            $connection = mysqli_connect("localhost","root","","hfdatabase");
                                            $query = "SELECT id FROM feedback ORDER BY id";  
                                            $query_run = mysqli_query($connection, $query);
                                            $row = mysqli_num_rows($query_run);
                                             echo '<h4> Total  Feddbacks: '.$row.'</h4>';
                                        ?>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Content Row -->



    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Scroll to Top Button-->
  <?php include('includes/scripts.php');
           include('includes/footer.php');?>