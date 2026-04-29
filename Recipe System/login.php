<?php

    session_start();

    $conn = new mysqli("localhost", "username", "password", "database");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn ->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        //Verify Password
        if (password_verify($password, $user['password'])) {
            
            //Store user info
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            echo "Login Successful!";

        } else {

            echo "Incorrect Password.";

        }

    } else {

    echo "User not found.";

    }

    $conn->close();

    ?>