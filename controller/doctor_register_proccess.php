<?php 

include "../model/database.php";
session_start();
$full_name = $_POST["fullname"];
$username = $_POST["username"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$about_job = $_POST["jobbio"];
$personnel_code = $_POST["personnelcode"];


if(strlen($username)>=4){
    $user_count = $connection->query("SELECT * FROM doctors WHERE username ='$username'")->num_rows;
    if($user_count == 0){
       $secure_password = md5($password); 
       $insertdb = $connection->query("INSERT INTO `doctors`(`id`, `fullname`, `username`, `password`, `gender`, `email`, `pesonnelcode`, `bio`) VALUES('','$full_name','$username','$secure_password','$gender','$email',$personnel_code,'$about_job')");
       $_SESSION["login_status"] = true;
       header("location:../view/index.php");
    }else{
        $_SESSION["message"] = "username is already exist";
        $_SESSION["message_type"] = "error";
        // $_SESSION["message"] = "error";
        header("location: ../view/doctor_register.php");
    }
}else{
 // echo "username must be at least 4 characters";
 $_SESSION["message"] = "username must be at least 4 characters";
 $_SESSION["message_type"] = "error";
 header("location: ../view/doctor_register.php");
}


?>
