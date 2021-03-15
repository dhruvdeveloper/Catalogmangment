<!-- 
  https://makitweb.com/create-simple-login-page-with-php-and-mysql/ 
  https://www.w3schools.com/php/php_mysql_insert.asp
  Referred from this site
-->
<?php
  include "config.php";
  $email = mysqli_real_escape_string($con,$_POST['email']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
  
  echo "<br>";

  if ($email != "" && $password != ""){
      $sql_query = "select * from users";
      $result = $con->query($sql_query);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            if(strcmp($row["email"], $_POST['email']) == 0){
              if(strcmp($row["password"], $_POST['password']) == 0){
                switch ($row["role"]) {
                  case "student":
                    header('Location: ./student');
                    break;
                  case "staff":
                    header('Location: ./staff');
                    break;
                  case "admin":
                    header('Location: ./admin');
                    break;
                  default:
                    echo "Your favorite color is neither red, blue, nor green!";
                }
              }
              else{
                header('Location: loginclient.php?x=2');
              }
            }
          }
        } else {
          header('Location: loginclient.php');
        }
        $con->close();
        echo "No email id registred!";
  }
?>