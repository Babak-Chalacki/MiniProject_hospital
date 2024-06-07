

<?php 

include "../model/database.php";
session_start();
 $user_id =  $_SESSION["user_id"];
 $date = $_POST["date"];

 $time = $_POST["time"];
 
// echo $doctor_name = $_POST["doctor_name"];
// echo "<br>";
// echo $doctor_name = $_POST["doctor_name"];
// echo "<br>";


    if (isset($_POST["doctor_name"])) {
        $selectedOption = $_POST["doctor_name"];
        list($id, $fullname) = explode(":", $selectedOption);
        // echo   $id . "<br>";
        // echo  $fullname . "<br>";
    }
 $skill = $_POST["skill"];


 $connection->query("INSERT INTO `reservation`(`id`, `user_id`, `doctor_id`, `time`, `date`, `Skills`) VALUES ('',$user_id,$id,'$time','$date','$skill')");


header("location:../view/index.php")
?>