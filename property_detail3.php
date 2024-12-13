<?php
include('header2.php');
?>




<div class="row-fluid">

  <!-- Banner -->

  <div class="row-fluid">

    <div class="span12">

      <section class="pic-cat">

        <img src="img/imgdemo/1900x200b.png" />

      </section>

    </div>

  </div>

  <!-- End banner -->

</div>

</header>

<!-- END HEADER  -->
<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Hostel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="code.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id1" class="delete_user_id">
                        <p>
                            Are You Sure. you want to delete this hostel ?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="DeleteUserbtn1" class="btn btn-secondary">Yes, Delete.!</button>
                    </div>
                </form>

            </div>
        </div>
    </div>





<?php
      require 'admin/database/dbconfig.php';
      $id=$_GET['id'];
      $query = "SELECT * FROM property where hostel_id='$id'";
      $query_run = mysqli_query($connection, $query);
      $check_property = mysqli_num_rows($query_run) > 0;

      if($check_property)
      {
        while($row = mysqli_fetch_assoc($query_run))
        {
            ?>
<div class="main-content">
  <div class="properties">
    <div class="container">
      <div class="grid_full_width gird_sidebar">
        <div class="row">

          <!-- Main content -->
          <div class="span8">
            <!-- Property detail -->
            <div class="property_detail">
              <section class="slider-detail">
                <div id="pic-detail" class="flexslider">
                  <ul class="slides">
                    <li>
                      <a class="detailbox" href="img/property_image/<?php echo $row['file'] ?>">
                        <img src="img/property_image/<?php echo $row['file'] ?>"></a>


                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                    <li>
                      <a class="detailbox" href="img/imgdemo/620x388.gif"
                        title="1524A consectetur purus sit amet fermentum."><img alt="" width="620" height="388"
                          src="img/imgdemo/620x388.gif" /></a>
                    </li>
                  </ul>
                </div>
                <!-- <div id="pic-control" class="flexslider">
                  <ul class="slides">
                    <li>
                      <img alt="" src="img/property_image/<?php echo $row['file'] ?>" />
                    </li>
                    <li>
                      <img alt="" src="img/imgdemo/620x388.gif" />
                    </li>
                    <li>
                      <img alt="" src="img/imgdemo/620x388.gif" />
                    </li>
                    <li>
                      <img alt="" src="img/imgdemo/620x388.gif" />
                    </li>
                    <li>
                      <img alt="" src="img/imgdemo/620x388.gif" />
                    </li>
                    <li>
                      <img alt="" src="img/imgdemo/620x388.gif" />
                    </li>
                    <li>
                      <img alt="" src="img/imgdemo/620x388.gif" />
                    </li>
                    <li>
                      <img alt="" src="img/imgdemo/620x388.gif" />
                    </li>
                    <li>
                      <img alt="" src="img/imgdemo/620x388.gif" />
                    </li>
                    <li>
                      <img alt="" src="img/imgdemo/620x388.gif" />
                    </li>
                  </ul>
                </div> -->
              </section>
              <div class="infotext-detail">
                <h3><?php echo $row['title'] ?></h3>
                <span class="price">₹<?php echo $row['price'] ?></span>
                <div class="row">
                  <div class="span260px">
                    <ul class="title-info">
                      <li>Owner:<span> <?php echo $row['o_name'] ?></span> </li>
                      <li>Property Type:<span> <?php echo $row['property_type'] ?></span></li>
                      <li>Address:<span><?php echo $row['address'] ?></span></li>
                      <li>Description:<span><?php echo $row['description'] ?></span></li>

                    </ul>
                  </div>
                  <div class="span260px pull-right">
                    <ul class="title-info">
                      <li>Wifi<span><?php echo $row['wifi'] ?></span> </li>
                      <li>Laundry<span><?php echo $row['laundry'] ?></span></li>
                      <li>Parking<span><?php echo $row['parking'] ?></span></li>
                      <li>A.C Rooms<span><?php echo $row['ac_rooms'] ?></span></li>
                      <li>Kitchen<span><?php echo $row['kitchen'] ?></span></li>
                      <li>Hot Water<span><?php echo $row['hot_water'] ?></span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="find">
              <form action="code.php" method="POST">
                          <div class="span2">
                            <label>
                            <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
                            <a href="edithostel.php?id=<?php echo $row["hostel_id"]?>"><button class="search" type="button">Edit Hostel</button>
                            </label>
                                    <!-- <label>
                                    <a href="ownerprofile.php?id=<?php echo $_SESSION['user_id'] ?>"><button  name="submit" type="hidden" class="search">Back</button></a>
                                    </label> -->
                          </div>
                          <div class="span2">
                                    <label>
                                    <input type="hidden" name="delete_id1" value="<?php echo $_GET['id']; ?>">
                                    <button type="submit" value="<?php echo $row['hostel_id']; ?>" class="search deletebtn1"> DELETE</button>
                                    </label>
                                </div>
                          <div class="span2">
                                    <label>
                                    <a href="ownerprofile.php?id=<?php echo $_SESSION['user_id'] ?>"><button  name="submit" type="button" class="search">Back</button></a>
                                    </label>
                                </div>
                        </form>
                      </div>
            </div>
            <div class="excerpt">
              
            </div>

          </div>
        </div>
        <!-- End Property -->
      </div>
      <!-- End Main content -->


      <!-- Sidebar left  -->


    </div>
  </div>
</div>
</div>
</div>

<?php
         }
      }
      else
      {
        echo "No Property Found";
      }

      ?>
<?php
// if(isset($_POST['send']))
// {
//   $message = $_POST['message'];


//   $query = "INSERT INTO visitor (user_id, firstname, lastname, owner_email, message, title) values('$_SESSION[user_id]', '$_SESSION[user_firstname]', ' $_SESSION[user_lastname]', '$_SESSION[owner_email]', '$message', '$_SESSION[title]')";
//   $query_run =mysqli_query($con,$query);

//     if($query_run)
//       {
//       }
//       else
//       {
//         if(isset($_POST['send']))
//         {
//           $message = $_POST['message'];


//           $query = "INSERT INTO visitor (user_id, owner_id, firstname, lastname, owner_email, message, title) values('$_SESSION[user_id]', '$_SESSION[owner_id]', '$_SESSION[owner_firstname]', ' $_SESSION[owner_lastname]', '$_SESSION[owner_email]', '$message', '$_SESSION[title]')";
//           $query_run =mysqli_query($con,$query);

//           if($query_run)
//             {
//             }
//             else{

//             }
//           }
//       }
// }

?>


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

<!-- ===================================================== -->
<!-- ================ Property-detail page only scripts ============ -->
<script src="js/flexflider/jquery.flexslider-min.js"></script>
<script src="js/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript">

  /* <![CDATA[ */
  jQuery(function ($) {
    $('#pic-control').flexslider({
      animation: "slide",
      controlNav: false,

      animationLoop: false,
      slideshow: false,
      itemWidth: 55,
      itemMargin: 10,
      maxItems: 7,
      asNavFor: '#pic-detail'
    });

    $('#pic-detail').flexslider({
      controlNav: false,
      directionNav: false,
      animationLoop: false,
      slideshow: false,
      sync: "#pic-control",
      start: function (slider) {
        $('body').removeClass('loading');
      }
    });

    $(".detailbox").colorbox({
      rel: 'detailbox'
    });
  });
  /* ]]> */
</script>
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
</body>

</html>