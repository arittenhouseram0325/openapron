<?php
session_start();

$conn = new mysqli("localhost", "username", "password", "database");

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";

//User sign on check
if ($conn->query($sql) === TRUE) {
  echo "User registered!";
} else {
  echo "Error registering user." . $conn->error;
}

$conn->close();
