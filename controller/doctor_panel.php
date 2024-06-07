<?php 
include "../model/database.php";
session_start();

$doctor_id = $_SESSION["doctor_id"];

$patients = $connection->query("
    SELECT DISTINCT *
    FROM Reservation
    INNER JOIN Doctors ON Doctors.id = Reservation.doctor_id
    INNER JOIN Users ON Users.id = Reservation.user_id
    WHERE Doctors.id = $doctor_id
");
$patientsCount = $connection->query("SELECT *
    FROM Reservation
    INNER JOIN Doctors ON Doctors.id = Reservation.doctor_id
    INNER JOIN Users ON Users.id = Reservation.user_id
    WHERE Doctors.id = $doctor_id
")->num_rows;
$doctor_skills = $connection->query("SELECT * FROM doctors WHERE id = $doctor_id ")
?>