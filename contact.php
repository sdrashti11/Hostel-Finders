<?php
include('header.php');
?>       
     </div>
   </div>
   <!-- Bannber -->
   <div class="row-fluid">
    <div class="span12">
      <section class="pic-cat">
      <img  src="img/imgdemo/1900x200b.png" />
      </section>
    </div>
  </div>
  <!-- End Bannber -->
</header>
<!-- END HEADER -->
<?php
include('include/config.php');


if(isset($_POST['submitt']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $feedback = $_POST['feedback'];

  $query = "INSERT INTO feedback (name, email, subject, feedback) values('$name', '$email', '$subject', '$feedback')";
  $query_run =mysqli_query($con,$query);

    if($query_run)
      {
        echo '<script> alert("Message Sent Successfully")</script>' ;
      }
      else
      {
        echo '<script> alert("Message Not Sent")</script>' ;
      }
}
?>

<!--BEGIN CONTENT -->
<div class="main-content">
  <div class="properties">
    <div class="container">
      <div class="grid_full_width gird_sidebar">
        <div class="row">
         <!-- Main content -->
         <div class="span8">
          <!-- Contact -->
          <div class="contact">
            <h1> Contact Us </h1>
            <div class="contact-bor">
              
              <!-- <div class="map"><iframe width="580" height="285" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777264.8458473524!2d69.07523657566252!3d22.401337837684366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959051f5f0ef795%3A0x861bd887ed54522e!2sGujarat!5e0!3m2!1sen!2sin!4v1643642878010!5m2!1sen!2sin" ></iframe></div> -->
              <div class="add-contact">
                <div class="row">
                  <div class="span280px pull-left">
                    <!-- <strong>Phone</strong> <br/> -->
                    <strong>Email.</strong> <a href="mailto:hostelfinders19@gmail.com?subject=SweetWords &body=Please send me a copy of your new program!">hostelfinders19@gmail.com</a> <br/>
                  </div>
                </div>
              </div>
            </div>
            <div class="contact-form">
              <form action="" method="POST">
                <div class="row">
                  <div class="span280px">
                    <label>Your Name*</label>
                    <input name="name" type="text">
                    <label>Subject  </label>
                    <input name="subject" type="text">
                  </div>
                  <div class="span280px pull-right">
                    <label>Your Email*</label>
                    <input name="email" type="text">
                   
                  </div>
                </div>
                <label>Your Feedback*</label>
                <textarea name="feedback" rows="10"></textarea>
                <a><button name="submitt" class="button-send" type="submit">Submit</button></a>
              </form>
            </div>
          </div>
          <!-- End contact -->
        </div>
        <!-- End Main content -->
        
        <!-- Sidebar left  -->
        <div class="span4">
         <!-- Box Siderbar -->
         <div class="box-siderbar-container">
          <!-- sidebar-box our-box -->
          <!-- <div class="sidebar-box our-box">
            <h3>our agents</h3>
            <ul>
              <li>
                <div class="our-border clearfix">
                  <div class="our-img"><img alt="" height="90" width="90" src="img/imgdemo/90x90.gif"></div>
                  <div class="our-info">
                    <h4>No.1</h4>
                    <h5>John Smith</h5>
                    <span>Call. </span>012.666.999 <br/>
                    <span>Mail. </span><a href="mailto:someone@example.com?Subject=Hello%20again">JohnSmith@gmail.com</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="our-border clearfix">
                  <div class="our-img"><img alt="" height="90" width="90" src="img/imgdemo/90x90.gif"></div>
                  <div class="our-info">
                    <h4>No.2</h4>
                    <h5>Andrew McCarthy</h5>
                    <span>Call. </span>012.666.999 <br/>
                    <span>Mail. </span><a href="mailto:someone@example.com?Subject=Hello%20again">Andrew@gmail.com</a>
                  </div>
                </div>
              </li>
            </ul>
          </div> -->
          <!-- End sidebar-box our-box -->
          
          <!-- sidebar-box tabsidebar -->
          <!-- <div class="sidebar-box tabsidebar">
            <div class="tabber">
              <div class="tabbertab">
                <h2>latest</h2> -->
                <!-- <ul class="product_list_wg">
                  <li>
                    <div class="clearfix">
                      <a title="" href="#">
                        <img width="90" height="54" alt="" class="thumbnail_pic" src="img/imgdemo/90x54.gif">
                        1076 Nelson Walk
                      </a> 
                      <div class="amount">$1,550</div>
                    </div>
                  </li>
                  <li>
                    <div class="clearfix">
                      <a title="" href="#">
                        <img width="90" height="54" alt="" class="thumbnail_pic" src="img/imgdemo/90x54.gif">
                        1076 Nelson Walk
                      </a> 
                      <div class="amount">$1,550</div>
                    </div>
                  </li>
                  <li>
                    <div class="clearfix">
                      <a title="" href="#">
                        <img width="90" height="54" alt="" class="thumbnail_pic" src="img/imgdemo/90x54.gif">
                        1076 Nelson Walk
                      </a> 
                      <div class="amount">$1,550</div>
                    </div>
                  </li>
                  <li>
                    <div class="clearfix">
                      <a title="" href="#">
                        <img width="90" height="54" alt="" class="thumbnail_pic" src="img/imgdemo/90x54.gif">
                        1076 Nelson Walk
                      </a> 
                      <div class="amount">$1,550</div>
                    </div>
                  </li>
                  <li>
                    <div class="clearfix">
                      <a title="" href="#">
                        <img width="90" height="54" alt="" class="thumbnail_pic" src="img/imgdemo/90x54.gif">
                        1076 Nelson Walk
                      </a> 
                      <div class="amount">$1,550</div>
                    </div>
                  </li>
                </ul> -->
              </div>
            </div>
          </div>
          <!-- End sidebar-box tabsidebar -->
        </div>
        <!-- End Box Siderbar -->
      </div>
      <!-- End Sidebar left  -->
    </div>
  </div>
</div>
</div>
</div>
<!-- END CONTENT -->

<?php
include('footer.php')
?>
	<!-- End footer -->
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

