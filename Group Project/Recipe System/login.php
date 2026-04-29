<?php

    session_start();

    $conn = new mysqli("localhost", "222ECwr", "222,1EC6337,wr", "222ECdb");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn ->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        //Verify Password
        if (password_verify($password, $user['password'])) {
            
            //Store user info
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
