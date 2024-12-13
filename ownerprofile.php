<?php
include('header2.php')
?>
<!-- Bannber -->

<div class="row-fluid">

  <div class="span12">

    <section class="pic-cat">

      <img src="img/imgdemo/1900x200b.png" />

    </section>

  </div>

</div>

<!-- End Bannber -->

</header>

<!-- END HEADER -->



<!--BEGIN CONTENT -->

<?php
      require 'admin/database/dbconfig.php';
       $id=$_SESSION['user_id'];
      
       $query = "SELECT * FROM user where user_id='$id'";
       $query_run = mysqli_query($connection, $query);
       $check_owner = mysqli_num_rows($query_run) > 0;

       if($check_owner)        
       {
          while($row = mysqli_fetch_assoc($query_run))
           {
    ?>

<div class="main-content">

  <div class="properties">

    <div class="container">

      <div class="grid_full_width">
        <div class="row">

          <div class="span8">
            <div class="ouragents agprofile">
              <h1>Profile</h1>
              <?php
                if(isset($_SESSION['sucess']) && $_SESSION['sucess'] !='')
                {
                    unset($_SESSION['success']);
                }


                if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                {
                    echo '<h5 class="bg-info text-white"> '.$_SESSION['status'].' </h5>';
                    unset($_SESSION['status']);
                }
              ?>

              <ul class="list_agents">
                <li>
                  <div class="our-border clearfix">

                    <div class="our-img"><img src="img/1.png" alt=""></div>

                    <div class="our-info">


                      <h5> <a href="#" title=""><?php echo $row['user_firstname']; ?>
                          <?php echo $row['user_lastname']; ?></a>
                      </h5>

                      <span>Call. </span><?php echo $row['user_contact_no']; ?><br>

                      <span>Mail. </span><a
                        href="mailto:someone@example.com?Subject=Hello%20again"><?php echo $row['user_email']; ?></a>

                    </div>

                  </div>
                </li>

              </ul>

            </div>
            
          </div>
          </br>
          </br>
          </br>
          <div class="span4">
            <div class="box-siderbar-container">
              <!-- Sidebar box searchbox -->
              <div class="sidebar-box searchbox">
                <div class="row-fluid">
                  <div class="span12">
                    <div class="find">
                      <div class="tabber">
                        <div class="tabbertab">
                          <h2>Manage Your Profile</h2>
                          <form action="editprofile.php" method="post">

                            <div class="span12">
                              <label>
                                <a href="add_properties.php"><button class="search" type="button">Add
                                    Hostel</button></a>
                              </label>
                              <label>
                                <input type="hidden" name="edit_id" value="<?php echo $row['user_id']; ?>">
                                <button class="search" name="edit_btn" type="submit">Edit Profile</button>
                              </label>
                            </div>
                          </form>
                          <form>
                            <div class="span12">
                              <label>
                                <a href="notifications.php?id=<?php echo $id ?>"><button class="search"
                                    type="button">Vist Requests</button>
                              </label>
                            </div>
                          </form>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>

          </div> 
          <div class="properties">

<div class="container">


  <div class="agentsproperties">
    <h4>Your Hostels</h4>
    <div class="row">

    <?php
    
                                        $con = mysqli_connect("localhost","root","","hfdatabase");           
                                        $id=$_SESSION['user_id'];
                     
                                        $query = "SELECT * FROM property where user_id='$id'";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                    ?>
  <ul class="products" id="able-list">
    <li style="display: block;" class="span4">
      <div class="product-item">
        <div class="imagewrapper">
          <img src="img/property_image/<?= $items['file']; ?>">
          <span class="price"><?= $items['price']; ?></span>
        </div>
        <h3><a href="property_detail3.php?id=<?php echo $items['hostel_id'] ?>" title="">
            <?= $items['title']; ?></a></h3>
        <ul class="title-info">
          <li>Owner <span><?= $items['o_name']; ?></span> </li>
          <li>Rooms<span><?= $items['no_rooms']; ?></span></li>
          <li>Wi-Fi<span><?php echo $items['wifi'] ?></span></li>
          <li>AC Rooms<span> <?php echo $items['ac_rooms'] ?></span></li>
          <li>Type: <span><?= $items['property_type']; ?></span></li>
        </ul>

      </div>
    </li>
  </ul>

  <?php
                                }
                              }
                      else
                      {
                        echo "You didn't add any property yet!";
                      }

                            ?>
    </div>

                <!-- <?php
                     $id=$_SESSION['user_id'];

                            $connection = mysqli_connect("localhost","root","","hfdatabase");           
                            
                            $query = "SELECT * FROM owner where user_id='$id'";
                            $query_run = mysqli_query($connection, $query);
                            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Your Hostels</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                                            if(mysqli_num_rows($query_run) > 0)        
                                            {

                                                foreach($query_run as $row)
                                                {
                                                    ?>
                    <tr>
                      <td><?php  echo $row['hostel_title']; ?></td>
                      <td><?php  echo $row['date']; ?></td>
                    </tr>

                    <?php
                                                }
                                            }
                                        ?>
                  </tbody>
                </table> -->


          <?php



              } 
          }
          else {
              echo "No Record Found";
          }
          ?>

          <!-- Page-ination -->

          <!-- <div class="page-ination onleft">

                  <div class="page-in">

                    <ul class="clearfix">

                      <li><a href="#"><img src="img/icon/pre2.png" alt=""></a></li>

                      <li><a href="#"><img src="img/icon/pre1.png" alt=""></a></li>

                      <li><a href="#" class="current">1</a></li>

                      <li><a href="#">2</a></li>

                      <li><a href="#">3</a></li>

                      <li><a href="#">4</a></li>

                      <li><a href="#">5</a></li>

                      <li><a href="#"><img src="img/icon/next1.png" alt=""></a></li>

                      <li><a href="#"><img src="img/icon/next2.png" alt=""></a></li>

                    </ul>

                  </div>

                </div> -->

          <!-- End Page-ination -->

        </div>

      </div>

    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- END CONTENT -->



<?php
include('footer2.php')
?>
<!-- Always latest version of jQuery-->

<script src="js/jquery-1.8.3.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<!-- Some scripts that are used in almost every page -->

<script src="js/tinynav/tinynav.js" type="text/javascript"></script>

<script type="text/javascript" src="js/tabber/tabber.js"></script>

<!-- Load template main javascript file -->

<script type="text/javascript" src="js/main.js"></script>
<script src="js/sweetalert.js"></script>
<?php
if(isset($_SESSION['set']) && $_SESSION['set'] !='')
{
  ?>
<script>
  swal({
    title: "<?php echo $_session['set']; ?>",
    // text: "You clicked the button!",
    icon: "<?php echo $_SESSION['set_code']; ?>",
    button: "OK. Done!",
  })
</script>
<?php
  unset($_SESSION['set']);
}

?>


</body>

</html>