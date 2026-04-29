<?php
    session_start();
    
    $conn = new mysqli("localhost", "222ECwr", "222,1EC6337,wr", "222ECdb");

    $email =  $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    //User sign on check
    if ($conn->query($sql) === TRUE) {
        echo "User registered!";
    } else {
        echo "Error registering user." . $conn->error;
    }

    $conn->close();
?>
