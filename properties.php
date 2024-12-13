<?php
include('header.php')
?>
<!-- Banner -->
<div class="row-fluid">
  <div class="span12">
    <section class="pic-cat">
      <img src="img/imgdemo/1900x200b.png" />
    </section>
  </div>
</div>
<!-- End Banner -->

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
              <div class="span6">
                <label>
                  <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"
                    class="keywordfind" placeholder="Search data">
                </label>
                </br>
                <label>
                  <select type="text" name="search1"
                    value="<?php if(isset($_GET['search1'])){echo $_GET['search1']; } ?>" class="keywordfind"
                    placeholder="Hostel type">
                    <option>Hostel Type</option>
                    <option>Boys</option>
                    <option>Girls</option>
                    <option>Boys/Girls Both</option>

                  </select>
                </label>

              </div>

              <div class="span4">
                <label>
                  <div class="wrapper">
                    <div class="price-input">
                      <div class="field">
                        <span>Min</span>
                        <input type="number" class="input-min" value="2500">
                      </div>
                      <div class="separator">-</div>
                      <div class="field">
                        <span>Max</span>
                        <input type="number" class="input-max" value="7500">
                      </div>
                    </div>
                    <div class="slider">
                      <div class="progress"></div>
                    </div>
                    <div class="range-input">
                      <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                      <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                    </div>
                  </div>
                </label>
                <script src="js/script.js"></script>

                </br>
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
  <!-- End Tabber Find -->

  <div class="properties">
    <div class="container">
      <!-- grid_full_width 4column -->
      <div class="grid_full_width " id="4column">
        <div class="all-text">
          <h3>All Properties </h3>
          <!-- <p>
              Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in
              elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris
              in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut
              imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris
              egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
            </p> -->
        </div>
        <div class="shop-nav clearfix">
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
        </div>
        <div class="row">
          <?php
       $con = mysqli_connect("localhost","root","","hfdatabase");

     if(isset($_GET['search']))
     {
     $filtervalues = $_GET['search'];
     $query = "SELECT * FROM property WHERE CONCAT(title,property_type) LIKE '%$filtervalues%' ";
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
          <div class="grid_4_col_product">
            <ul class="products" id="able-list">
              <li style="display: block;" class="span3">
                <div class="product-item">
                  <div class="imagewrapper">
                    <img src="img/property_image/<?= $items['file']; ?>">
                    <span class="price"><?= $items['price']; ?></span>
                  </div>
                  <h3><a href="property_detail.php?id=<?php echo $items['id'] ?>" title="">
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
          </div>

          <?php
          }
        }
else
{
  echo "No Property Found";
}

      ?>
        </div>
        <!-- Page-ination -->
        <div class="page-ination">
          <div class="page-in">
            <ul class="clearfix">
              <li><a href="#"><img alt="" src="img/icon/pre2.png"></a></li>
              <li><a href="#"><img alt="" src="img/icon/pre1.png"></a></li>
              <li><a class="current" href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"><img alt="" src="img/icon/next1.png"></a></li>
              <li><a href="#"><img alt="" src="img/icon/next2.png"></a></li>
            </ul>
          </div>
        </div>
        <!-- End Page-ination -->
      </div>
    </div>
  </div>
</div>
<!-- END CONTENT -->

<!-- BEGIN FOOTER -->

<footer>

  <div class="footer-container">

    <div class="container">

      <!-- Footer box -->

      <div class="footer-top">

        <div class="row">

          <div class="span4">

            <h3>contact detail</h3>



            <p><span>Phone. </span><br /><span>Mail. <a
                  href="mailto:hostelfinders@example.com?Subject=Hello%20again">hostelfinders@gmail.com</a>
              </span><br /></p>

          </div>



          <!-- <div class="span4">

                <h3>don’t miss out</h3>

                <p>In venenatis neque a eros laoreet eu placerat erat suscipit. Fusce cursus, erat ut scelerisque condimentum, quam odio ultrices leo.</p>

                <div class="newletter">

                  <form>

                    <input type="text" class="textnewletter" placeholder="Enter your email here…">

                    <button type="submit" class="buttonnewletter">Submit</button>

                  </form>

                </div> -->

        </div>

      </div>

    </div>

    <!-- End Footer box -->



    <div class="footer-bottom">

      <div class="row">



        <div class="span6">

          <div class="social pull-right">

            <!-- <ul>

                    <li><a class="facebook" title="" href="#"> Facebook </a></li>

                    <li><a class="twitter" title="" href="#"> twitter </a></li>

                    <li><a class="googplus" title="" href="#"> googplus </a></li>

                    <li><a class="pinterest" title="" href="#"> pinterest </a></li>

                    <li><a class="email" title="" href="#"> Email </a></li>

                    <li><a class="feed" title="" href="#"> Feed </a></li>

                  </ul> -->

          </div>

        </div>

      </div>

    </div>

  </div>

  </div>

</footer>

<div id='bttop'>BACK TO TOP</div>

<!-- End footer -->
<!-- END FOOTER -->
<div id='bttop'>BACK TO TOP</div>
<!-- Always latest version of jQuery-->
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Some scripts that are used in almost every page -->
<script src="js/tinynav/tinynav.js" type="text/javascript"></script>
<script type="text/javascript" src="js/tabber/tabber.js"></script>
<!-- Load template main javascript file -->
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>