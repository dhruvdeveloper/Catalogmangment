<!-- 
    https://makitweb.com/create-simple-login-page-with-php-and-mysql/ 
    https://www.w3schools.com/php/php_mysql_insert.asp
    Referred from this site
-->

<!DOCTYPE html>
<html>
<body>

<?php
  include "config.php";

  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $passwordConfirm = mysqli_real_escape_string($con, $_POST['confirm-password']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $role = mysqli_real_escape_string($con, $_POST['role']);

  // x = 1 is for empty email id or password
  // x = 2 is for email already exist
  // x = 3 is for password not in formate


  echo $role + "This is role!";

  if ($email != "" && $password != ""){
      $sql_query = "select * from users";
      $result = $con->query($sql_query);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "id: " . $row["email"]. " - Name: " . $row["password"]. "<br>";
            if($row["email"] == $_POST['email']){
              header('Location: signupclient.php?x=2');
            }
            else if($password != $passwordConfirm){
              header('Location: signupclient.php?x=3');
            }
            else{
              $sql = "INSERT INTO users (email, name, role, password) VALUES ('$email', '$name', '$role', '$password')";

              if ($con->query($sql) === TRUE) {
                mail("thakkardhruv97@gmail.com", "My subject", "Hello");
                header('Location: loginclient.php');
              } else {
                echo "Error: " . $sql . "<br>" . $con->error;
              }
            }
          }
        } else {
          echo "0 results";
        }
        $con->close();
  }
  else{
    header('Location: signupclient.php?x=1');
  }
?>

</body>
</html>