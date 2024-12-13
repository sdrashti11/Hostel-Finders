<?php
session_start();


$connection = mysqli_connect("localhost","root","","hfdatabase");

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact_no = $_POST['contact_no'];


    $query = "UPDATE user SET user_firstname='$firstname', user_lastname='$lastname', user_email='$email', password='$password', user_contact_no='$contact_no' WHERE user_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['user_email']=$email;
        $_SESSION['sucess'] = "Your Data is Updated";
        $_SESSION['sucess_code'] = "success";
        header('Location: ownerprofile.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: ownerprofile.php'); 
    }
}
?>