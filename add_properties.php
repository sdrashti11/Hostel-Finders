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
<?php
extract($_REQUEST);
include('include/config.php');
if(isset($_POST['submit']))
{
    $query="insert into owner values('','$_SESSION[user_id]','$_SESSION[user_firstname]','$_SESSION[user_lastname]','$_SESSION[password]','$_SESSION[user_email]','$_SESSION[user_contact_no]','$_SESSION[hostel_id]','$title',now())";  
    $r=mysqli_query($con,$query);


        if($r)
        {
        $_SESSION['owner_id']=$row["owner_id"];
    
        }
        else
        {
        
        }
}
?>


    <?php 
extract($_REQUEST);
include('include/config.php');
if(isset($_POST['submit']))
{

// $file=$_FILES['file'];

  
$query="insert into property values('','$_SESSION[user_id]','$_SESSION[owner_id]','$title','$_SESSION[user_firstname]','$p_no','$_SESSION[user_email]','$price','$address','$description','$file','$no_rooms','$property_type','$wifi','$laundry','$parking','$ac_rooms','$kitchen','$hot_water',now())";  
$r=mysqli_query($con,$query);
//   move_uploaded_file($_FILES['file']['tmp_name'],"img/property_image/".$_FILES['file']); 
//   move_uploaded_file($_FILES['file']['tmp_name'],"img/property_image/owner".$_FILES['file']); 


if($r)
{
    $_SESSION['hostel_id']=$row["hostel_id"];
    $_SESSION['title']=$row["title"];
    $_SESSION['status'] = "Hostel Added successfuly";
    $_SESSION['status_code'] = "success";
  header('Location: ownerprofile.php'); 
  
}
else
{
    $_SESSION['sucess'] = "Hostel Not Added successfuly";
    $_SESSION['sucess_code'] = "error";
    header('Location: add_properties.php'); 
}
        
}

?>




<?php
if(isset($_POST['submit']))
{
$ImageCount = count($_FILES['file']['name']);

    for($i=0;$i<$ImageCount;$i++){
$filename = $_FILES['file']['name'];
$filetempname = $_FILES['file']['temp_name'];
// Select file type
$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

// valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){

// Upload files and store in database
if(move_uploaded_file($_FILES["image"]["tmp_name"],"img/owner/".$filename)){
    // Image db insert sql
    $insert = "INSERT into property(file)VALUES('$filename')";
    
}else{
    echo 'Error in uploading file - '.$_FILES['file']['name'].'
';
}
}
    }
}
?>


    <!-- Tabber -->
    <div class="main-content">
    <?php echo @$msg;?>
        <div id="findtabber" class="find">

            <div class="container">
                <div class="tabber">
                    <div class="tabbertab">
                        <h2>Add Hostel Here</h2>
                        <form method="POST">

                            <div class="row">
                                <div class="span12">
                                    <label>
                                        <input  type="text" name="title" class="form-control"
                                            placeholder="Hostel Name">
                                    </label>
                                    
                                     <!-- <label>
                                        <input  type="text" name="o_name" class="form-control"
                                            placeholder="Hostel Owner Name">
                                    </label> -->
                                    <label>
                                        <input  type="text" name="p_no" class="form-control"
                                            placeholder="Hostel Owner Phone No">
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
                                        <input  type="number" name="price" class="form-control"
                                            placeholder="Hostel Price">
                                    </label>
                                    <label>
                                        <input type="text" name="address" class="form-control" placeholder="Hostel Address">
                                    </label>
                                    <label>
                                        <textarea  name="description" class="form-control"
                                            placeholder="Hostel Description "></textarea>
                                    </label>
                                    <label>
                                        <label class="form-label">Add Hostel Image</label>

                                        <input  type="file" name="file" multiple /> 
                                    </label>
                                    <label>
                                        <input  type="number" name="no_rooms" class="form-control"
                                            placeholder="No Of Rooms">
                                    </label>
                                    <!-- <label>
                                        <input  type="number" name="d_amount" class="form-control"
                                            placeholder="Deposite Amount">
                                    </label> -->
                                    <select name="property_type" class="form-control">
                                        <option>Hostel type</option>
                                        <option>Boys</option>
                                        <option>Girls</option>
                                        <option>Boys/Girls Both</option>
                                    </select>




                                    <h4 style="text-align:left;">Facilites</h4>
                                    <select name="wifi">
                                        <option>Wi-Fi</option>
                                        <option>Available</option>
                                        <option>N A</option>
                                    </select>
                                    <select name="laundry">
                                        <option>Laundry</option>
                                        <option>Available</option>
                                        <option> N A</option>
                                    </select>
                                    <select name="parking">
                                        <option>Parking</option>
                                        <option>Available</option>
                                        <option> N A</option>
                                    </select>
                                    <select name="ac_rooms">
                                        <option>AC Rooms</option>
                                        <option>Available</option>
                                        <option> N A</option>
                                    </select>
                                    <select name="kitchen">
                                        <option value="">Kitchen</option>
                                        <option>Available</option>
                                        <option> N A</option>
                                    </select>
                                    <select name="hot_water">
                                        <option>Hot Water</option>
                                        <option>Available</option>
                                        <option> N A</option>
                                    </select>



                                </div>
                            </div>
                            <div class="row">
                                <div class="span2">
                                    <label>
                                        <button  name="submit" type="submit" value="<?php echo $row['id']; ?>" class="search">Add Hostel</button>
                                    </label>
                                </div>
                                
                                <div class="span2">
                                    <label>
                                    <a href="ownerprofile.php?id=<?php echo $_SESSION['user_id'] ?>"><button  name="submit" type="button" class="search">Back</button></a>
                                    </label>
                                </div>
                                <div class="row pull-right">
                                <div class="span2">
                                    <label>
                                <button type="reset" value="Reset" class="search">Reset</button>
                                    </label>
                                </div>
                                </div>
                            </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Tabber -->


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