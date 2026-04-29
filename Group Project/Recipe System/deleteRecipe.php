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

    $sql = "DELETE FROM recipes WHERE recipe_id = '$recipe_id' AND user_id = '$user_id'";


    if ($conn->query($sql) === TRUE) {
        echo "Recipe Deleted!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();

    ?>
