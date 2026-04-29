<?php
    session_start();
    
    $conn = new mysqli("localhost", "222ECwr", "222,1EC6337,wr", "222ECdb");

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    //User sign on check
    if ($conn->query($sql) === TRUE) {
        echo "User registered!";
    } else {
        echo "Error registering user." . $conn->error;
    }

    $conn->close();
?>
