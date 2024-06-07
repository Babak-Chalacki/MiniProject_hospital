<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    $_SESSION["login_status"] = false;
    $_SESSION["doctor_out"] = "doctor_out";

    header("Location: ../view/index.php");
?>