<?php
    include "config.php";           
    echo "<br>";
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $sql_query = "DELETE FROM users WHERE email=".$email;
    if ($conn->query(sql_query) === TRUE) {
        echo "Record deleted successfully";
    } 
    header('Location: users.php');
      
    $con->close();
?>