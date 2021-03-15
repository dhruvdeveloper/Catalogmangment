<?php
    session_start();
    $con = mysqli_connect("localhost:3306", "dxt5888_root", "", "dxt5888_cms");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>