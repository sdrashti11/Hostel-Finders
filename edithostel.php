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
<!-- Banner -->
</header>
<!-- END HEADER -->


<!-- END CONTENT -->

<!-- Tabber -->
<div class="main-content">

    <div id="findtabber" class="find">
        <div class="container">
            <div class="tabber">
                <div class="tabbertab">
                    <h2>Edit your hostel</h2>
                    <?php
                                     $connection = mysqli_connect("localhost","root","","hfdatabase");

                       
                $id = $_GET["id"];
                
                $query = "SELECT * FROM property WHERE hostel_id='$id' ";
                $query_run = mysqli_query($connection, $query);
                $check_property = mysqli_num_rows($query_run) > 0;

                if($check_property)
                {

                foreach($query_run as $row)
                {
                    ?>
                    <form action="edithostelcode.php" method="POST">

                        <div class="row">
                            <div class="span12">
                                <label>
                                    Hostel Name:<input type="text" name="title" class="form-control"
                                        value="<?php echo $row['title'] ?>">
                                </label>

                                <!-- <label>
            <input  type="text" name="o_name" class="form-control"
                placeholder="Hostel Owner Name">
        </label> -->
                                <label>
                                    Contact Number:<input type="text" name="p_no" class="form-control"
                                        value="<?php echo $row['p_no'] ?>">
                                </label>
                                <!-- <label>
            <input  type="text" name="email" class="form-control"
                placeholder="Hostel Owner email">
        </label>  -->
                                <!-- <label>
            <input  type="text" name="property_type" class="form-control"
                placeholder="Hostel type  (i.e Boys/Girls)">
        </label> -->

                                <label>
                                    Price:<input type="number" name="price" class="form-control"
                                        value="<?php echo $row['price'] ?>">
                                </label>
                                <label>
                                    Address:<input type="text" name="address" class="form-control"
                                        value="<?php echo $row['address'] ?>">
                                </label>
                                <label>
                                    Description:<textarea name="description" class="form-control"></textarea>
                                </label>
                                <label>
                                    <label class="form-label">Add Hostel Image</label>

                                    <input type="file" name="file" multiple />
                                </label>
                                <label>
                                    No of rooms:<input type="number" name="no_rooms" class="form-control"
                                        value="<?php echo $row['no_rooms'] ?>">
                                </label>
                                <!-- <label>
            <input  type="number" name="d_amount" class="form-control"
                placeholder="Deposite Amount">
        </label> -->
                                Hostel type:<select name="property_type" class="form-control">
                                    <option>.....</option>
                                    <option>Boys</option>
                                    <option>Girls</option>
                                    <option>Boys/Girls Both</option>
                                </select>




                                <h4 style="text-align:left;">Facilites</h4>
                                Wifi:<select name="wifi">
                                    <option>.....</option>
                                    <option>Available</option>
                                    <option>N A</option>
                                </select>
                                Laundry:<select name="laundry">
                                    <option>.....</option>
                                    <option>Available</option>
                                    <option> N A</option>
                                </select>
                                Parking:<select name="parking">
                                    <option>.....</option>
                                    <option>Available</option>
                                    <option> N A</option>
                                </select>
                                Ac rooms:<select name="ac_rooms">
                                    <option>.....</option>
                                    <option>Available</option>
                                    <option> N A</option>
                                </select>
                                Kitchen:<select name="kitchen">
                                    <option>.....</option>
                                    <option>Available</option>
                                    <option> N A</option>
                                </select>
                                Hot water:<select name="hot_water">
                                    <option>.....</option>
                                    <option>Available</option>
                                    <option> N A</option>
                                </select>



                            </div>
                        </div>
                        <div class="row">
                            <div class="span2">
                                <label>
                                    <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
                                    <button name="updatebtn" id="submit1" type="submit" class="search">Update</button>
                                </label>
                            </div>
                            <div class="span2">
                                <label>
                                    <a href="property_detail3.php?id=<?php echo $id ?>"><button name="submit"
                                            type="button" class="search">Back</button></a>
                                </label>
                            </div>

                        </div>
                </div>
                </form>
                <?php
                }
            }
        ?>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Tabber -->


<?php
   include('footer2.php');
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

    /* ]]> */
</script>
</body>

</html>