<?php
  include "config.php";
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $comment = mysqli_real_escape_string($con,$_POST['comment']);
  
  echo "<br>";

  $sql = "INSERT INTO feedback (email, name, comment) VALUES ('$email', '$name', '$comment')";

  if ($con->query($sql) === TRUE) {
    header('Location: feedback.html');
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }