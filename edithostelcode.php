<?php
session_start();


$connection = mysqli_connect("localhost","root","","hfdatabase");

if(isset($_POST['updatebtn']))
{
    $id = $_POST['id'];
    $title = $_POST['title'];
        $p_no = $_POST['p_no'];
        $price = $_POST['price'];
        $address = $_POST['address'];
        $description = $_POST['description'];
        $file = $_POST['file'];
        $no_rooms = $_POST['no_rooms'];
        $property_type = $_POST['property_type'];
        $wifi = $_POST['wifi'];
        $laundry = $_POST['laundry'];
        $parking = $_POST['parking'];
        $ac_rooms = $_POST['ac_rooms'];
        $kitchen = $_POST['kitchen'];
        $hot_water = $_POST['hot_water'];


    $query = "UPDATE property SET title='$title', p_no='$p_no', price='$price', address='$address', description='$description', file='$file', no_rooms='$no_rooms', property_type='$property_type', wifi='$wifi', laundry='$laundry', parking='$parking', ac_rooms='$ac_rooms', kitchen='$kitchen', hot_water='$hot_water' WHERE hostel_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['sucess'] = "Your Hostel is Updated";
        $_SESSION['sucess_code'] = "success";
        header('Location: property_detail3.php?id='.$_POST["id"]); 
        die();

    }
    else
    {
        $_SESSION['status'] = "Your Hostel is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: property_detail3.php'); 
        die();

    }
}
?>