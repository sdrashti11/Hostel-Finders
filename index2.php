<?php
include('header2.php');
include('logo.php');
?>




<!-- Slider Home -->

<!-- Flexslider -->
<div id="slider-home" class="row-fluid slider-home">
  <div class="span12">
    <section class="slider">
      <div id="main-slider" class="flexslider">
        <ul class="slides">
          <li>
            <div class="container flex-caption">
              <div class="title">
                <span>

                </span>
              </div>
            </div>
            <img src="img/imgdemo/banner1.png" />
          </li>
          <li>
            <div class="container flex-caption">
              <div class="title">
                <span>

                </span>
              </div>
            </div>
            <img src="img/imgdemo/banner1.png" />
          </li>
          <li>
            <div class="container flex-caption">
              <div class="title">
                <span>

                </span>
              </div>
            </div>
            <img src="img/imgdemo/banner1.png" />
          </li>
          <li>
            <div class="container flex-caption">
              <div class="title">
                <span>

                </span>
              </div>
            </div>
            <img src="img/imgdemo/banner1.png" />
          </li>
          <li>
            <div class="container flex-caption">
              <div class="title">
                <span>

                </span>
              </div>
            </div>
            <img src="img/imgdemo/banner1.png" />
          </li>
        </ul>
      </div>
    </section>
  </div>
</div>
<!-- End Flexslider -->

<!-- End Slider home -->

</header>

<!-- END HEADER -->

<!-- BEGIN CONTENT -->
<div class="main-content">
  <!-- Tabber Find -->
  <!-- Tabber -->
  <div class="find">
    <div class="container">
      <div class="tabber">
        <div class="tabbertab">
          <h2>Search</h2>
          <form>
            <div class="row">
              <div class="span10">
                <label>
                  <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"
                    class="keywordfind" placeholder="Search">
                </label>
                <!-- <div class="row">

                  <div class="span3">
                  <label>
                    <input type="text" name="min_price" class="keywordfind" value="<?php if(isset($_GET['min_price'])){echo $_GET['min_price']; } ?>" placeholder="Min Price..">
                  </label>
                  </div>
                  <div class="span3">
                  <label>
                    <input type="text" name="max_price" class="keywordfind" value="<?php if(isset($_GET['max_price'])){echo $_GET['max_price']; } ?>" placeholder="Max Price..">
                  </label>
                  </div>
                </div> -->

               

              </div>

              <div class="span2">
              <!-- <label>
                  <select type="text" name="h_type"
                    value="<?php if(isset($_GET['h_type'])){echo $_GET['h_type']; } ?>" class="keywordfind"
                    placeholder="Hostel type">
                    <option>Hostel Type</option>
                    <option>Boys</option>
                    <option>Girls</option>

                  </select>
                </label> -->
                <label>
                  <button type="submit" class="search">Search</button> </label>
              </div>
              <!-- <div class="span3">
                  
                  <label>
                    <button class="search" type="button">Search</button>
                  </label>
                </div> -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Tabber -->

  <!-- Properties -->
  <div class="properties">
    
    <!-- Properties scroll -->

    <!-- Nicescroll -->
    <!-- <div id="property-scroll" class="container">
    <div id="wrapper">
      <div class="box">
        <div class="scroll-properties clearfix">
          <div class="row col-home">
            <div class="span6">
              <div class="container-big">
                <img alt="" src="img/imgdemo/460x460.gif">
                <article class="text-big">
                  <div class="infotexthv">
                    <h3><a href="property_detail.html" title=""> 1060 Nelsons Walk</a> </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis sit amet luctus nisl tempus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis sit amet luctus nisl tempus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis sit amet luctus nisl tempus.</p>
                  </div>
                </article>
              </div>
            </div>
            <div class="span6">
              <div class="row divspace">
                <div class="span3">
                  <div class="container-small">
                    <img alt="" src="img/imgdemo/220x220.gif">
                    <article class="text-small">
                      <div class="infotexthv">
                        <h3><a href="property_detail.html" title=""> 2170 TARPON RD </a> </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis sit amet luctus nisl tempus.</p>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="span3">
                  <div class="container-small">
                    <img alt="" src="img/imgdemo/220x220.gif">
                    <article class="text-small">
                      <div class="infotexthv">
                        <h3><a href="property_detail.html" title=""> 2170 TARPON RD </a> </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis sit amet luctus nisl tempus.</p>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="span3">
                  <div class="container-small">
                    <img alt="" src="img/imgdemo/220x220.gif">
                    <article class="text-small">
                      <div class="infotexthv">
                        <h3><a href="property_detail.html" title=""> 2170 TARPON RD </a> </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis sit amet luctus nisl tempus.</p>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="span3">
                  <div class="container-small">
                    <img alt="" src="img/imgdemo/220x220.gif">
                    <article class="text-small">
                      <div class="infotexthv">
                        <h3><a href="property_detail.html" title=""> 2170 TARPON RD </a> </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis sit amet luctus nisl tempus.</p>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="span6">
              <div class="container-big">
                <img alt="" src="img/imgdemo/460x460.gif">
                <article class="text-big">
                  <div class="infotexthv">
                    <h3><a href="property_detail.html" title=""> 1060 Nelsons Walk</a> </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis sit amet luctus nisl tempus.</p>
                  </div>
                </article>
              </div>
            </div>
            <div class="span6">
              <div class="row divspace">
                <div class="span3">
                  <div class="container-small">
                    <img alt="" src="img/imgdemo/220x220.gif">
                    <article class="text-small">
                      <div class="infotexthv">
                        <h3><a href="property_detail.html" title=""> 2170 TARPON RD </a> </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis sit amet luctus nisl tempus.</p>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="span3">
                  <div class="container-small">
                    <img alt="" src="img/imgdemo/220x220.gif">
                    <article class="text-small">
                      <div class="infotexthv">
                        <h3><a href="property_detail.html" title=""> 2170 TARPON RD </a> </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis sit amet luctus nisl tempus.</p>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="span3">
                  <div class="container-small">
                    <img alt="" src="img/imgdemo/220x220.gif">
                    <article class="text-small">
                      <div class="infotexthv">
                        <h3><a href="property_detail.html" title=""> 2170 TARPON RD </a> </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis sit amet luctus nisl tempus.</p>
                      </div>
                    </article>
                  </div>
                </div>
                <div class="span3">
                  <div class="container-small">
                    <img alt="" src="img/imgdemo/220x220.gif">
                    <article class="text-small">
                      <div class="infotexthv">
                        <h3><a href="property_detail.html" title=""> 2170 TARPON RD </a> </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum nisi eu ante mattis sit amet luctus nisl tempus.</p>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
    <!-- End Nicescroll -->
    <!-- End Scroll -->

    <!-- Properties List -->
    <div id="property-list" class="container">
      <h3>Hostels </h3>
      <!-- <div class="shop-nav clearfix">
        <div class="row">
          <div class="span12">
            <div class="ordering pull-right">
              <select class="orderby">
                <option>Price, Low to High</option>
                <option>Sort by most recent</option>
                <option>Sort by price</option>
              </select>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Filterable -->
      <!-- <div class="filter-pro clearfix">
      <div class="row">
        <div class="span8">
          <ul  id="able-filter">
            <li><a href="#all" title="">All</a></li>
            <li><a href="#house" title="" rel="house">house</a></li>
            <li><a href="#offices" title="" rel="offices">offices</a></li>
            <li><a href="#apartment" title="" rel="apartment">apartment</a></li>
            <li><a href="#residential" title="" rel="residential">residential</a></li>
          </ul>
        </div>
        <div class="span4">
          <div class="list-grid pull-right">
             <ul>
              <li><a href="grid_fullwidth_4_column.html"><i class="grid4col"></i></a></li>
              <li><a class="active" href="grid_fullwidth_3_column.html"><i class="grid3col"></i></a></li>
              <li><a href="list_fullwidth2.html"><i class="grid2list"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->
      <!-- Filterable -->
      <div class="row">
        <?php
       $con = mysqli_connect("localhost","root","","hfdatabase");

     if(isset($_GET['search']))
     {
     $searchbyname = $_GET['search'];
    //  $minprice = $_GET['min_price']; 
    //  $maxprice = $_GET['max_price'];
    //  $searchbytype = $_GET['h_type'];

     $query = "SELECT * FROM property WHERE CONCAT(title) LIKE '%$searchbyname%' ";
    //  $query = "SELECT * FROM property WHERE price BETWEEN $minprice AND $maxprice";
    //  $query = "SELECT * FROM property WHERE CONCAT(property_type) LIKE '%$searchbytype%' ";

     }
    else
      {
        $query = "SELECT * FROM property";
      }
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
              <h3><a href="property_detail2.php?id=<?php echo $items['hostel_id'] ?>" title="">
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
  echo "No Property Found";
}

      ?>

      </div>
    </div>
    <!-- End Properties List -->

  </div>
  <!-- End Properties -->

  <!-- Our Developers -->
  <!-- <div class="ouragents">
  <div class="container">
    <h3>our Developers</h3>
    <div class="our-content">
      <div class="row">
        <ul class="clearfix">
          <li class="span6">
            <div class="our-border clearfix">
              <div class="our-img"><img alt="" "></div>
              <div class="our-info">
                <h4>Enroll No. 196330307001</h4>
                <h5>Ronak Ahir</h5>
                <span>Call. </span>+91 7016767551 <br/>
                <span>Mail. </span><a href="mailto:someone@example.com?Subject=Hello%20again">ahir.ronak.b@gmail.com</a>
              </div>
            </div>
          </li>
          <li class="span6">
            <div class="our-border clearfix">
              <div class="our-img"><img alt="" src=""></div>
              <div class="our-info">
                <h4>Enroll No. 196330307037</h4>
                <h5>Madhav Katariya</h5>
                <span>Call. </span>012.666.999 <br/>
                <span>Mail. </span><a href="mailto:someone@example.com?Subject=Hello%20again">AndrewMccarthy@gmail.com</a>
              </div>
            </div>
          </li>
     <li class="span6">
            <div class="our-border clearfix">
              <div class="our-img"><img alt="" src="\"></div>
              <div class="our-info">
                <h4>Enroll No. 196330307049</h4>
                <h5>Tilak Mistry</h5>
                <span>Call. </span>012.666.999 <br/>
                <span>Mail. </span><a href="mailto:someone@example.com?Subject=Hello%20again">AndrewMccarthy@gmail.com</a>
              </div>
            </div>
          </li>
     <li class="span6">
            <div class="our-border clearfix">
              <div class="our-img"><img alt="" src=""></div>
              <div class="our-info">
                <h4>Enroll No. 1963303067</h4>
                <h5>Ravirajsinh Parmar</h5>
                <span>Call. </span>012.666.999 <br/>
                <span>Mail. </span><a href="mailto:someone@example.com?Subject=Hello%20again">AndrewMccarthy@gmail.com</a>
              </div>
            </div>
          </li>
     <li class="span6">
            <div class="our-border clearfix">
              <div class="our-img"><img alt="" src=""></div>
              <div class="our-info">
                <h4>Enroll No. 196330307141</h4>
                <h5>Vrajgopal Vasani</h5>
               <span>Call. </span>012.666.999 <br/>
                <span>Mail. </span><a href="mailto:someone@example.com?Subject=Hello%20again">AndrewMccarthy@gmail.com</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
   
  </div>
</div> -->
  <!-- End Our Agents -->

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

<!-- ===================================================== -->
<!-- ================ Index page only scripts ============ -->
<script src="js/flexflider/jquery.flexslider-min.js"></script>
<script src="js/nicescroll/jquery.nicescroll.js"></script>
<script src="js/filterable/filterable.js"></script>
<script type="text/javascript">
  /* <![CDATA[ */
  jQuery(function ($) {
    $('#main-slider').flexslider();

    jQuery('.box').niceScroll({
      autohidemode: false,
      scrollspeed: 100,
      cursorcolor: '#8a735f',
      cursorwidth: '15px',
      cursorborderradius: '0px',
      cursorborder: '0',
      background: '#dddddd'
    });
  });
  /* ]]> */
</script>

</body>

</html>