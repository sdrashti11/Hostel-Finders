<?php
session_start();


if (isset($_POST['submit1'])) {
    if (isset($_POST['firstname']) &&
        isset($_POST['lastname']) && isset($_POST['email']) &&
        isset($_POST['password']) && isset($_POST['contact_no']))
     {
        
      
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact_no = $_POST['contact_no'];
        

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "hfdatabase";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT user_email FROM user WHERE user_email = ? LIMIT 1";
            $Insert = "INSERT INTO user (user_firstname, user_lastname, user_email, password, user_contact_no) values(?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssi", $firstname, $lastname, $email, $password, $contact_no);
                if ($stmt->execute()) {

                    $_SESSION['status'] = "Account created successfully.";
                    $_SESSION['status_code'] = "success";
                    header('Location: login.php'); 

                }
                else {
                    $_SESSION['sucess'] = "Account Not created successfully.";
                    $_SESSION['sucess_code'] = "error";
                    header('Location: register.php'); 
                }
            }
            else {
                $_SESSION['status'] = "Someone already registers using this email.";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}



if (isset($_POST['submit2'])) {
    if (isset($_POST['firstname']) &&
        isset($_POST['lastname']) && isset($_POST['email']) &&
        isset($_POST['password']) && isset($_POST['contact_no']))
     {
        
      
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $contact_no = $_POST['contact_no'];
        

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "hfdatabase";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT owner_email FROM owner WHERE owner_email = ? LIMIT 1";
            $Insert = "INSERT INTO owner (owner_firstname, owner_lastname, owner_email, password, owner_contact_no) values(?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssi", $firstname, $lastname, $email, $password, $contact_no);
                if ($stmt->execute()) {
                    $_SESSION['status'] = "Account created successfully.";
                    $_SESSION['status_code'] = "success";
                    header('Location: login.php'); 

                }
                else {
                    $_SESSION['sucess'] = "Account Not created successfully.";
                    $_SESSION['sucess_code'] = "error";
                    header('Location: register.php'); 
                }
            }
            else {
                $_SESSION['status'] = "Someone already registers using this email.";
                $_SESSION['status_code'] = "success";
                header('Location: register.php');
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}





if(isset($_POST['DeleteUserbtn1']))
{
    $connection = mysqli_connect("localhost","root","","hfdatabase");
    $id = $_POST['delete_id1'];

    $query = "DELETE FROM property WHERE hostel_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['sucess'] = "Your Data is Deleted";
        $_SESSION['sucess_code'] = "success";
        header('Location: ownerprofile.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: property_detail3.php'); 
    }    
}
?>













