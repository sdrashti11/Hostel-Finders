<?php
include('header.php')
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


        
          <div class="span4">
            <div class="box-siderbar-container">
              				<!-- Sidebar box searchbox -->
                      <div class="sidebar-box searchbox">
                    <div class="row-fluid">
                      <div class="span12">
                        <div class="find">
                          <div class="tabber">
                            <div class="tabbertab">
                              <h2>Owner</h2>
                              <form >
                                
                                <div class="span12">
                                  <label>	
                                  <a><button  data-target="#addadminprofile1" data-toggle="modal" class="search" type="button">Get Owner Details</button></a>
                                  </label>		
                                </div>
                              </form>
                            </div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
				  <!-- End Sidebar box searchbox -->
        </div>
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

<!-- BEGIN CONTENT -->

<!-- END CONTENT -->



<div class="modal right fade" id="addadminprofile1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-right" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" text-align: center;>Please first Login To Get Owners Details...</h5>
     
      </div>
      <form>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
          <a href="login2.php?id=<?php echo $_GET["id"]?>"><button id="submit" type="button" class="btn btn-secondary">Login</button></a>
          <a href="register2.php?id=<?php echo $_GET["id"]?>"><button id="submit" type="button" class="btn btn-secondary">Sign Up</button></a>
        </div>
      </form>

    </div>
  </div>
</div>

<?php
include('footer.php')
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