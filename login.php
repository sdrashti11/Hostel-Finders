<?php
include('header.php')
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
                        <h2>Login To Account</h2>
                        <form action="authentication.php" method="POST">
                            <div class="row">
                                <div class="span4">
                                    <label>
                                    <input class="form-control" type="user_email" name="email" placeholder="E-mail Address" required>
                                    </label>

                                    <label>
                                    <input class="form-control" type="password" name="password"  placeholder="Password" required>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span4">
                                    <label>
                                    <button id="submit" type="submit" name="submit" class="search">Login</button> 
                                    </label>
                                </div>

                            </div>
                            </br>
                            <!-- <div>
                                <a href="forget.php">Forget password?</a>
                            </div> -->
                           
                            <div class="row">
                                <div class="span3">
                                    <label>
                                    <a href="register.php" class="btn btn-link">Register new account</a>
                                    </label>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tabber -->


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
       
        /* ]]> */
    </script>
</body>

</html>