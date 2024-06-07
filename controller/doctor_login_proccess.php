<?php 
include "../model/database.php";
session_start();

$username = $_POST["username"];
$password = $_POST["password"];
$personnel_code = $_POST["personnelcode"];
$secure_password = md5($password);


$doctors_username = $connection->query("SELECT * FROM `doctors` WHERE username = '$username' ");
$doctors_count = $doctors_username->num_rows;

// $doctors_password = $connection->query("SELECT * FROM doctors WHERE password = '$secure_password' ");
$doctors_password = $connection->query("SELECT * FROM doctors WHERE `password` = '$secure_password'");
$passwordCount = $doctors_password->num_rows;

$doctors_personnel_code = $connection->query("SELECT * FROM doctors WHERE pesonnelcode = $personnel_code ");
$personnel_code_Count = $doctors_personnel_code->num_rows;

if($doctors_count == 1 && $passwordCount == true && $personnel_code_Count == 1){
    $doctors = $doctors_username->fetch_assoc();

    $_SESSION["username"] = $username;
    $_SESSION["doctor_id"] = $doctors["id"];
    $_SESSION["login_status"] = true;
    $_SESSION["icon"] = "fa fa-user-md";
    $_SESSION["doctor_user"] = true;
    header("location: ../view/index.php");
    
}else{
    echo "faild";
}







?>
