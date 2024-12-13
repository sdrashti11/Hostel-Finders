<?php  
session_start();    
    include('connection.php'); 
    if (isset($_POST['submit']))
    {
 
    $email = $_POST['email'];  
    $password = $_POST['password'];  

    
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
        
      
        $sql = "select *from user where user_email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['user_id']=$row["user_id"];
            $_SESSION['user_email']=$email;
            $_SESSION['user_firstname']=$row["user_firstname"];
            $_SESSION['user_lastname']=$row["user_lastname"];
            $_SESSION['password']=$row["password"];
            $_SESSION['user_contact_no']=$row["user_contact_no"];
            $_SESSION['status'] = "welcome";
            $_SESSION['status_code'] = "success";
            header('Location: index2.php'); 
            die();
        }
        else{
            if (isset($_POST['submit']))
            {
 
                $email = $_POST['email'];  
                $password = $_POST['password'];  

            
                //to prevent from mysqli injection  
                $email = stripcslashes($email);  
                $password = stripcslashes($password);  
                $email = mysqli_real_escape_string($conn, $email);  
                $password = mysqli_real_escape_string($conn, $password);  
                
            
                $sql = "select *from owner where owner_email = '$email' and password = '$password'";  
                $result = mysqli_query($conn, $sql);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                
                if($count == 1){  
                    $_SESSION['owner_id']=$row["owner_id"];
                    $_SESSION['email']=$email;
                    $_SESSION['owner_firstname']=$row["owner_firstname"];
                    $_SESSION['owner_lastname']=$row["owner_lastname"];
                    $_SESSION['password']=$row["password"];
                    $_SESSION['owner_contact_no']=$row["owner_contact_no"];
                    $_SESSION['status'] = "welcome";
                    $_SESSION['status_code'] = "success";
                    header('Location: index2.php'); 
                    die();
                }
                else{  
                    $_SESSION['sucess'] = "Login failed. Invalid username or password.";
                    $_SESSION['sucess_code'] = "error";
                    header('Location: login.php'); 
                die();
            }  
        }
    }
        
    }    
?>