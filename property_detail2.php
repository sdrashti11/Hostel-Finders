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
                <div class="excerpt">
                </div>

              </div>
            </div>
            <!-- End Property -->
          </div>
          <!-- End Main content -->


          <!-- Sidebar left  -->
          <div class="span4">
            <div class="box-siderbar-container">


              <!-- sidebar-box our-box -->
              <div class="sidebar-box our-box">
                <h3>owner</h3>
                <ul>
                  <li>
                    <div class="our-border clearfix">
                      <!-- <div class="our-img"><img alt="" height="90" width="90" src="img/1.png"></div> -->
                      <div class="our-info">
                        <h5> <?php echo $row['o_name'] ?></h5>
                        <span>Call. </span> <?php echo $row['p_no'] ?><br />
                        <span>Mail. </span><a href="mailto:someone@example.com?Subject=Hello%20again">
                          <?php echo $row['email'] ?></a>
                        <div class="find">
                          <button type="submit" class="search" data-toggle="modal" data-target="#exampleModal"
                            data-whatever="@mdo">Contact To Owner</button>
                        </div>
                        
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- BEGIN modal -->
                <?php
include('include/config.php');
if(isset($_POST['send']))
$msg = $_POST['msg']; 
$email= $_POST['email'];
{
    $query="insert into visit_req values ('','$_SESSION[user_id]','$_SESSION[owner_id]','$_SESSION[user_firstname]','$_SESSION[user_contact_no]','$email','$msg',now())";  
    $r=mysqli_query($con,$query);
        if($r)
        {
               
        }
        else
        {
        
        }
}
?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send Visit Request To Owner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="form-group">
            <label for="recipient-name" name="recipient" class="col-form-label" >Owner:</label>
            <input type="text" class="form-control" id="recipient-name" name="email" value="<?php echo $row['email'] ?>">
          </div>
          <div class="form-group">
            <label for="message-text"  class="col-form-label">Message:</label>
            <textarea class="form-control" name="msg" id="message-text"></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="search" data-dismiss="modal">Close</button>
        <a><button type="submit" name="send" value="<?php echo $_SESSION['user_id']; ?>" class="search">Send
            message</button></a>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- END modal -->

              </div>
              <!-- End sidebar-box our-box -->



            </div>
          </div>
          <!-- End Sidebar left  -->

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
</body>

</html>