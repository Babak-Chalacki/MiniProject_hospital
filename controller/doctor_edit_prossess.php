
<?php 
include "../model/database.php";
session_start();
$doctor_id = $_SESSION["doctor_id"];
$skills = $_POST["skills"];

$skills = $connection->query("UPDATE `doctors` SET `bio`='$skills' WHERE id = $doctor_id");
header("location:../view/doctor_panel.php");
?>