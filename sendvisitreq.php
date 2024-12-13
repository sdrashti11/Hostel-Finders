<?php
session_start();
include('include/config.php');


if(isset($_POST['send']))
{
  $message = $_POST['msg'];

  $query = "INSERT INTO visit_req (user_id, owner_email, message) values('$_SESSION[user_id]', '$_SESSION[owner_email]', '$message')";
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