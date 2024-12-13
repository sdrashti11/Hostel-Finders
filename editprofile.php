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
                        <h2>Edit Profile Information</h2>
                        <?php
                                     $connection = mysqli_connect("localhost","root","","hfdatabase");

                        if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM user WHERE user_id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>
                        <form action="editprofilecode.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $row['user_id'] ?>">

                            <div class="row">
                                <div class="span4">
                                    <label>
                                        Firstname:<input class="form-control" type="text" name="firstname" value="<?php echo $row['user_firstname'] ?>"
                                             required>
                                    </label>
                                    <label>
                                    Lastname:<input class="form-control" type="text" name="lastname" value="<?php echo $row['user_lastname'] ?>"
                                            required>
                                    </label>
                                    <label>
                                    Email:<input class="form-control" type="email" name="email"
                                    value="<?php echo $row['user_email'] ?>" required>
                                    </label>
                                    <label>
                                    Passsword:<input class="form-control" type="password" name="password"
                                    value="<?php echo $row['password'] ?>" required>
                                    </label>
                                    <label>
                                        Phone Number:<input class="form-control" type="phone" name="contact_no"
                                        value="<?php echo $row['user_contact_no'] ?>" required>

                                    </label>

                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="span2">
                                    <label>
                                        <button name="updatebtn" id="submit1" type="submit" class="search">Update</button>
                                    </label>
                                </div>
                                <div class="span2">
                                    <label>
                                    <a href="ownerprofile.php?id=<?php echo $_SESSION['user_id'] ?>"><button  name="submit" type="button" class="search">Back</button></a>
                                    </label>
                                </div>

                            </div>
                            </br>

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