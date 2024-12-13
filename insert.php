<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['hostel_name']) && isset($_POST['address']) &&
        isset($_POST['city']) && isset($_POST['description'])  && isset($_POST['email'])) {
        
        $hostel_name = $_POST['hostel_name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $description = $_POST['description'];
       

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "hfdatabase";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(hostel_name, address, email, city, description) values(?, ?, ?, ?, ?)";

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
                $stmt->bind_param("sssss",$hostel_name, $address, $email, $city, $description);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
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
?>