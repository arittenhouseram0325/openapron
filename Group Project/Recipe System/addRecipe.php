<?php

    session_start();

    $conn = new mysqli("localhost", "username", "password", "test");

    //Connection Test

    if ($conn->connect_error) {

        die("Connection Failed! Error: " . $conn->connect_error);

        
    }

    
    //CHECK LOGIN SECTION
    if (!isset($_SESSION['user_id'])) {
        echo "You must be logged in";
        exit();
    }

    $user_id = $_SESSION['user_id'];

    //Frontend data requests
    $title = $_POST['title'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];

    //Insert into database
    $sql = "INSERT INTO recipes (user_id, name, ingredients, instructions) VALUES ('$user_id', '$title', '$ingredients', '$instructions')";

    if ($conn->query($sql) === TRUE) {
        echo "Recipe added!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();

    ?>
