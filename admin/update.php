<?php
    include "config.php";           
    echo "<br>";
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $passwordConfirm = mysqli_real_escape_string($con, $_POST['confirm-password']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $role = mysqli_real_escape_string($con, $_POST['role']);

    $sql = "UPDATE users SET email=".$email.",password=".$password.",name= ".$name." WHERE email=".$email;

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }
      
    $con->close();
?>