<?php

    session_start();

    $conn = new mysqli("localhost", "username", "password", "database");

    //CHECK LOGIN SECTION
    if (!isset($_SESSION['user_id'])) {
        echo "You must be logged in";
        exit();
    }

    $user_id = $_SESSION['user_id'];
    
    $sql = "SELECT recipes.id, recipes.name, recipes.ingredients, recipes.instructions, shared_recipes.sender_id FROM shared_recipes JOIN recipes ON shared_recipes.recipe_id = recipes.id WHERE shared_recipes.receiver_id = '$user_id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo "<h3>" . $row['title'] . "</h3>";
            echo "Ingredients: " . $row['ingredients'] . "<br>";
            echo "Instructions: " . $row['instructions'] . "<br>";
            echo "Sent by User: " . $row['sender_id'] . "<br><br>";
        }
    } else {
        echo "No recipes received.";
    }
    
    
    $conn->close();

?>