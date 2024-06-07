<?php session_start();
include "../model/database.php";
        $doctors = $connection->query("SELECT * FROM `doctors`");
    
    ?>