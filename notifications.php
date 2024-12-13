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
                    <h2>Notifications</h2>
                    <?php
       $id=$_SESSION['owner_id'];
                            $connection = mysqli_connect("localhost","root","","hfdatabase");           
                            
                            $query = "SELECT * FROM visit_req where owner_id=16";
                            $query_run = mysqli_query($connection, $query);
                            ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>No</th>
                                <th> NAME </th>
                                <th> Contact Number </th>
                                <th> Massege </th>
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
                                <td><?php  echo $row['visit_id']; ?></td>
                                <td><?php  echo $row['user_firstname']; ?></td>
                                <td><?php  echo $_SESSION['user_contact_no']; ?></td>
                                <td><?php  echo $row['message']; ?></td>
                                <td><?php  echo $row['date']; ?></td>
                            </tr>

                            <?php
                                                }
                                            }
                                        ?>
                        </tbody>
                    </table>
                    <div class="row pull-right">
                        <div class="span2">
                            <label>
                                <a href="ownerprofile.php?id=<?php echo $_SESSION['user_id'] ?>"><button name="submit"
                                        type="button" class="search ">Back</button></a>
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</br>
</br>
</br>
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