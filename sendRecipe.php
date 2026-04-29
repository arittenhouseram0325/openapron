<?php

    session_start();

    $conn = new mysqli("localhost", "username", "password", "database");


    //CHECK LOGIN SECTION
    if (!isset($_SESSION['user_id'])) {
        echo "You must be logged in";
        exit();
    }

    $sender_id = $_SESSION['user_id'];
    $receiver_id = $_POST['receiver_id'];
    $recipe_id = $_POST['recipe_id'];

    $check = "SELECT * FROM recipes WHERE recipe id='$recipe_id' AND user_id ='$sender_id'";

    $result = $conn->query($check);

    if ($result->num_rows == 0) {
        echo "Invalid Recipe.";
        exit();
    }

    //THIS ADDS IT TO RECIPES
    $sql = "INSERT INTO shared_recipes (sender_id, receiver_id, recipe_id) VALUES ('$sender_id', '$receiver_id', '$recipe_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Recipe sent successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
    
    $conn->close();

?>