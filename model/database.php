<?php 





// اتصال به بانک اطلاعاتی
$connection = new mysqli("localhost", "root", "", "hospital");

// بررسی اتصال
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


?>