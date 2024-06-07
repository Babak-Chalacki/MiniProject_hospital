<?php

session_start(); // Start the session for using $_SESSION variables

include "../model/database.php";

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$number = $_POST["number"];

if (strlen($username) >= 4) {
    $user_count = $connection->query("SELECT * FROM users WHERE username = '$username'")->num_rows;
    if ($user_count == 0) {
        $secure_password = md5($password);
        $insertdb = $connection->query("INSERT INTO `users`(`id`, `fullname`, `username`, `password`, `gender`, `email`, `mobile`) VALUES ('', '$fullname', '$username', '$secure_password', '$gender', '$email', $number)");
       
        $_SESSION["username"] = $username;
        // $_SESSION["doctor_id"] = $doctors["id"];
        $_SESSION["login_status"] = true;
        header("location: ../view/index.php");
        exit;
    } else {
        $_SESSION["message"] = "Username already exists.";
        $_SESSION["message_type"] = "error";
        header("location: ../view/doctor_register.php");
        exit;
    }
} else {
    $_SESSION["message"] = "Username must be at least 4 characters.";
    $_SESSION["message_type"] = "error";
    header("location: ../view/doctor_register.php");
    exit;
}

?>