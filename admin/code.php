<?php
session_start();


$connection = mysqli_connect("localhost","root","","hfdatabase");
 


if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM admin WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO admin (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['sucess'] = "Admin Profile Not Added";
                $_SESSION['sucess_code'] = "error";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
    }

}














if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE admin SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['sucess'] = "Your Data is NOT Updated";
        $_SESSION['sucess_code'] = "error";
        header('Location: register.php'); 
    }
}









if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM admin WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['sucess'] = "Your Data is Deleted";
        $_SESSION['sucess_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}






if(isset($_POST['login_btn']))
{
    $email_login = $_POST['emaill']; 
    $password_login = $_POST['passwordd']; 

    $query = "SELECT * FROM admin WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['username'] = $email_login;
        header('Location: dashboard.php');
   } 
   else
   {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: index.php');
   }
    
}


if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('Location: index.php');
}







// if(isset($_POST['d_btn']))
// {
//     $id = $_POST['d_id'];

//     $query = "DELETE FROM user WHERE user_id='$id' ";
//     $query_run = mysqli_query($connection, $query);

//     if($query_run)
//     {
//         $_SESSION['sucess'] = "Your Data is Deleted";
//         $_SESSION['sucess_code'] = "success";
//         header('Location: user.php'); 
//     }
//     else
//     {
//         $_SESSION['status'] = "Your Data is NOT DELETED";       
//         $_SESSION['status_code'] = "error";
//         header('Location: user.php'); 
//     }    
// }









if(isset($_POST['Deletefeedback']))
{
    $id = $_POST['dl_id1'];

    $query = "DELETE FROM feedback WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['sucess'] = "Your Data is Deleted";
        $_SESSION['sucess_code'] = "success";
        header('Location: feedback.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: feedback.php'); 
    }    
}


if(isset($_POST['DeleteUserbtn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM user WHERE user_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['sucess'] = "Your Data is Deleted";
        $_SESSION['sucess_code'] = "success";
        header('Location: user.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: user.php'); 
    }    
}

if(isset($_POST['Deleteownerbtn']))
{
    $id = $_POST['delete_oid'];

    $query = "DELETE FROM owner WHERE owner_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['sucess'] = "Your Data is Deleted";
        $_SESSION['sucess_code'] = "success";
        header('Location: owner.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: owner.php'); 
    }    
}


if(isset($_POST['DeleteUserbtn1']))
{
    $id = $_POST['delete_id1'];

    $query = "DELETE FROM property WHERE hostel_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['sucess'] = "Your Data is Deleted";
        $_SESSION['sucess_code'] = "success";
        header('Location: hostel.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: hostel.php'); 
    }    
}

if(isset($_POST['Deletefeedbackbtn']))
{
    $id = $_POST['delete_idf'];

    $query = "DELETE FROM feedback WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['sucess'] = "Your Data is Deleted";
        $_SESSION['sucess_code'] = "success";
        header('Location: feedback.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: feedback.php'); 
    }    
}



?>