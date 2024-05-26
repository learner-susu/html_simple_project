<?php
    include_once("conn.php");

    $tori = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    $number= $_POST['number'];

 
    $sql = "INSERT INTO registration (firstNAme, lastName, gender, email, password, number) VALUES ('$tori', '$lastName', '$gender', '$email', '$password', '$number')";        

    // If the connection is successful, run the query
    if ($conn->query($sql) === TRUE) {
        echo '<br> Record inserted successfully';

    // If the query is not successful, display the error message
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>