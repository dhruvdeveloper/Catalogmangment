<!DOCTYPE html>
<html>
    <head>
        <title>Catalogue Management System</title>
        <link rel="stylesheet" type="text/css" href="./cataloguesystem.css" />
        <!-- Used this CDN for the icon's of Navbar. -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="./index.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <!-- https://www.w3schools.com/howto/howto_js_topnav.asp "Navabar code referes from this site" -->
            <nav>
                <div class="topnavforbutton" id="nav-id">
                    <a href="#home" class="social-icon-link"><img src="../static/facebook.png" class="social-icon" /></a>
                    <a href="#home" class="social-icon-link"><img src="../static/insta.jpg" class="social-icon" /></a>
                    <a href="#home" class="social-icon-link"><img src="../static/Youtube.png" class="social-icon" /></a>
                    <div class="breaker"></div>
                    <div class="topnav">
                        <a href="feedback.html">feeback View</a>
                        <a href="https://dxt5888.uta.cloud/blog/">Forum</a>
                        <a href="upcomming.html">Upcoming Courses</a>
                        <a href="listofcourses.html">View Courses</a>
                        <a href="about.html">About</a>
                        <a href="index.html">Home</a>
                    </div>
                </div>
                <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav "Navabar responsive code referes from this site" -->
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
            <div class="main-home">
                <h2>Feedbacks!</h2>
                <!-- 
  https://makitweb.com/create-simple-login-page-with-php-and-mysql/ 
  https://www.w3schools.com/php/php_mysql_insert.asp
  Referred from this site
-->
<?php
  include "config.php";
  
  echo "<br>";

      $sql_query = "select * from feedback";
      $result = $con->query($sql_query);
      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "name: " . $row["name"]. " - Comment: " . $row["comment"];
            echo "<hr />";
          }
        } 
        $con->close();
  
?>
            </div>
            <footer>
                <div class="footer">
                    <p class="footer-paragraph">Created by Dhruv. <span class="rights-reserved">All rights Reserved</span></p>
                </div>
            </footer>
        </div>
        <script>
            function myFunction() {
                var x = document.getElementById("nav-id");
                if(x.style.display == "block"){
                    x.style.display = "none";
                }
                else{
                    x.style.display = "block";
                }
            }
        </script>
    </body>
</html>