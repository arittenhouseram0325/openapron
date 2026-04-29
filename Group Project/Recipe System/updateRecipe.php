<?php

    session_start();

    $conn = new mysqli("localhost", "222ECwr", "222,1EC6337,wr", "222ECdb");


    //CHECK LOGIN SECTION
    if (!isset($_SESSION['user_id'])) {
        echo "You must be logged in";
        exit();
    }
    
    $user_id = $_SESSION['user_id'];
    $recipe_id = $_POST['recipe_id'];
    $title = $_POST['title'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];
    

    $sql = "UPDATE recipes SET title = '$title', ingredients = '$ingredients', instructions = '$instructions' WHERE recipe_id = '$recipe_id' AND user_id = '$user_id'";


    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo "Recipe Updated!";
        } else {
            echo "No recipe found.";
        }
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();

    ?>
