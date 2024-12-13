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
    <div class="box-siderbar-container">
        <div class="find">
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
                        <h2>Register As User</h2>
                        <form action="code.php" method="POST">
                            <div class="span12">
                                <div class="row">
                                    <div class="span4">
                                        <label>
                                            <input class="form-control" type="text" name="firstname"
                                                placeholder="User's firstName" required>
                                        </label>
                                        <label>
                                            <input class="form-control" type="text" name="lastname"
                                                placeholder="User's lastName" required>
                                        </label>
                                        <label>
                                            <input class="form-control" type="email" name="email"
                                                placeholder="User's e-mail Address" required>
                                        </label>
                                        <label>
                                            <input class="form-control" type="password" name="password"
                                                placeholder="password" required>
                                        </label>
                                        <label>
                                            <input class="form-control" type="phone" name="contact_no"
                                                placeholder="User's contact No" required>

                                        </label>

                                    </div>
                                </div>
                            </div>
                            </br>
                            <div class="span12">
                                <div class="row">
                                    <div class="span4">
                                    <div class="find">
                                        <label>
                                            <button id="submit1" type="submit" name="submit1"
                                                class="search">Register As User</button>
                                        </label>
                                    </div>
                                    </div>
                                </div>
                                </br>
                                <div class="row">
                                    <div class="span5">
                                        <label>
                                            <a href="login.php" class="btn btn-link">Already have account?</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tabbertab">
                        <h2>Register As owner</h2>
                        <form action="code.php" method="POST">
                            <div class="span12">
                                <div class="row">
                                    <div class="span4">
                                        <label>
                                            <input class="form-control" type="text" name="firstname"
                                                placeholder="Owner's first name" required>
                                        </label>
                                        <label>
                                            <input class="form-control" type="text" name="lastname"
                                                placeholder="Owner's last name" required>
                                        </label>
                                        <label>
                                            <input class="form-control" type="email" name="email"
                                                placeholder="Owner's e-mail Address" required>
                                        </label>
                                        <label>
                                            <input class="form-control" type="password" name="password"
                                                placeholder="Owner's password" required>
                                        </label>
                                        <label>
                                            <input class="form-control" type="phone" name="contact_no"
                                                placeholder="Owner's phone No" required>

                                        </label>

                                    </div>
                                </div>
                            </div>
                            </br>
                            </br>
                            <div class="span12">
                                <div class="row">
                                    <div class="span4">
                                    <div class="find">
                                        <label>
                                            <button id="submit2" type="submit" name="submit2"
                                                class="search">Register As Owner</button>
                                        </label>
                                    </div>
    </div>

                                </div>
                                </br>
                                <div class="row">
                                    <div class="span3">
                                        <label>
                                            <a href="login.php" class="btn btn-link">Already have account?</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Tabber -->


<?php 
include ('footer.php');
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