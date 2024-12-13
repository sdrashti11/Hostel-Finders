<?php
    session_start(); 
           
    include('includes/header.php'); 
    include('includes/navbar.php'); 
    include('security.php');

?>   
   
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

<div class="container-fluid">  
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->


<!-- Topbar Search -->

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">


           

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>

</nav>

<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Feedback</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="code.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_idf" class="delete_user_id">
                        <p>
                            Are You Sure. you want to delete this data ?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="Deletefeedbackbtn" class="btn btn-primary">Yes, Delete.!</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

<!-- End of Topbar -->

   <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">
            <h3 class="h3 mb-0 text-gray-800">Feedbacks</h3>
            </h6>
        </div>

        <div class="card-body">

            <?php
      if(isset($_SESSION['sucess']) && $_SESSION['sucess'] !='')
      {
          unset($_SESSION['success']);
      }

      if(isset($_SESSION['status']) && $_SESSION['status'] !='')
      {
          echo '<h2 class="bg-info text-white"> '.$_SESSION['status'].' </h2>';
          unset($_SESSION['status']);
      }
      ?>

            <div class="table-responsive">
                <?php
       $query = "SELECT * FROM feedback";
       $query_run = mysqli_query($connection, $query);
    ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Feddback</th>
                            <th> Date </th>                          
                            <th>DELETE </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
           while($row = mysqli_fetch_assoc($query_run))
            {
        ?>
                        <tr>
                            <td><?php  echo $row['id']; ?></td>
                            <td><?php  echo $row['name']; ?></td>
                            <td><?php  echo $row['email']; ?></td>
                            <td><?php  echo $row['subject']; ?></td>
                            <td><?php  echo $row['feedback']; ?></td>
                            <td><?php  echo $row['date']; ?></td>

                            <td>
                                <form action="code.php" method="post">
                                    <input type="hidden" name="delete_idf" value="<?php echo $row['id']; ?>">
                                    <button type="submit" value="<?php echo $row['id']; ?>" class="btn btn-danger deletebtn1"> DELETE</button>
                                </form>
                            </td>
                        </tr>
                        <?php
              } 
          }
          else {
              echo "No Record Found";
          }
          ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>

<?php
include('includes/scripts.php');
?>

<script>
    $(document).ready(function () {
        $('.deletebtn1').click(function (e) {
            e.preventDefault();
            var u_id = $(this).val();
            $('.delete_user_id').val(u_id);
            $('#DeleteModal').modal('show');
        });
    });
</script>
<?php
include('includes/footer.php');
?>
